<?php


namespace App\Services;


use App\Models\Book;
use DB;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use League\Csv\CannotInsertRecord;
use League\Csv\Reader;
use League\Csv\Writer;
use SplTempFileObject;
use Throwable;

class BookService
{
    /**
     * @param array $searchParams
     * @return LengthAwarePaginator
     */
    public function getPagedBooks(array $searchParams): LengthAwarePaginator
    {
        $books = $this->getSearchedBooks($searchParams);

        return $books->sortable()->paginate(15);
    }

    /**
     * @param array $params
     * @return Book
     * @throws Throwable
     */
    public function store(array $params): Book
    {
        return DB::transaction(function () use ($params) {
            $book = Book::create($params);

            if (isset($params['category_ids'])) {
                $book->categories()->attach($params['category_ids']);
            }

            return $book;
        });
    }

    /**
     * @param Book $book
     * @param array $params
     * @return Book
     * @throws Throwable
     */
    public function update(Book $book, array $params): Book
    {
        return DB::transaction(function () use ($book, $params) {
            $book->update($params);

            if (!isset($params['category_ids'])) {
                $params['category_ids'] = [];
            }

            $book->categories()->sync($params['category_ids']);

            return $book;
        });
    }

    /**
     * @param Book $book
     * @return bool|null
     * @throws Exception
     */
    public function destroy(Book $book): ?bool
    {
        if ($book->reviews()->exists()) {
            flash('レビューが存在するため本が削除できませんでした。')->error();

            return false;
        }

        return $book->delete();
    }

    /**
     * @param array $searchParams
     * @return Response
     * @throws CannotInsertRecord
     */
    public function export(array $searchParams): Response
    {
        $fileName = 'books_' . now()->format('YmdHis') . '.csv';
        $header = ['ID', 'タイトル', '概要', '著者', '著者ID', '出版日', '価格', 'カテゴリー', 'カテゴリーID', 'レビュー数'];
        $books = $this->getSearchedBooks($searchParams)->get();

        $csv = Writer::createFromFileObject(new SplTempFileObject());
        $csv->insertOne($header);

        foreach ($books as $book) {
            $csv->insertOne([
                $book->id,
                $book->title,
                $book->description,
                $book->author->name,
                $book->author_id,
                $book->formatted_published_at,
                $book->price,
                $book->categories->pluck('name')->implode(','),
                $book->categories->pluck('id')->implode(','),
                $book->reviews_count,
            ]);
        }

        return response($csv->getContent(), 200)
            ->withHeaders([
                'Content-Encoding' => 'none',
                'Content-Type' => 'text/csv; charset=UTF-8',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '.csv"',
                'Content-Description' => 'File Transfer',
            ]);
    }

    /**
     * @param UploadedFile $csv
     * @return bool
     */
    public function import(UploadedFile $csv): bool
    {
        $rows = Reader::createFromPath($csv->getPathname())->setHeaderOffset(0);
        //todo ファイルフォーマットチェック

        //todo トランザクション
        foreach ($rows as $row) {
            // todo １レコードごとにバリデーション

            $book = Book::updateOrCreate(
                ['id' => $row['ID']],
                [
                    'title' => $row['タイトル'],
                    'description' => $row['概要'],
                    'author_id' => $row['著者ID'],
                    'published_at' => $row['出版日'],
                    'price' => $row['価格'],
                ]);

            $book->categories()->sync(explode(',', $row['カテゴリーID']));
        }

        return true;
    }

    /**
     * @param array $searchParams
     * @return Builder
     */
    protected function getSearchedBooks(array $searchParams): Builder
    {
        $books = Book::with(['author', 'categories'])->withCount('reviews');

        if (isset($searchParams['title'])) {
            $books->where('title', 'like', "%{$searchParams['title']}%");
        }

        if (isset($searchParams['price'])) {
            $books->where('price', 'like', "%{$searchParams['price']}%");
        }

        if (isset($searchParams['published_at_from'])) {
            $books->where('published_at', '>=', $searchParams['published_at_from']);
        }

        if (isset($searchParams['published_at_to'])) {
            $books->where('published_at', '<=', $searchParams['published_at_to']);
        }

        if (isset($searchParams['author'])) {
            $books->where('author_id', $searchParams['author']);
        }

        if (isset($searchParams['category'])) {
            $books->whereHas('categories', function (Builder $query) use ($searchParams) {
                $query->where('id', $searchParams['category']);
            });
        }

        return $books;
    }
}
