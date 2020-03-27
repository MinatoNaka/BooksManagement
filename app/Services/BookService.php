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
use Validator;

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
                'Content-Disposition' => "attachment; filename={$fileName}",
                'Content-Description' => 'File Transfer',
            ]);
    }

    /**
     * @param UploadedFile $csv
     * @return array
     */
    public function import(UploadedFile $csv): array
    {
        $rows = Reader::createFromPath($csv->getPathname())->setHeaderOffset(0);

        if (!$this->isValidFormat($rows)) {
            return [
                'result' => false,
                'errorMessages' => 'ヘッダーカラム数が正しくありません。<br>ダウンロードしたファイルのフォーマットを利用してください。',
            ];
        }

        $errorMessages = $this->validateRow($rows);

        if ($errorMessages) {
            return [
                'result' => false,
                'errorMessages' => $errorMessages,
            ];
        }

        DB::transaction(function () use ($rows) {
            foreach ($rows as $index => $row) {
                $book = Book::updateOrCreate(
                    ['id' => $row['ID']],
                    [
                        'title' => $row['タイトル'],
                        'description' => $row['概要'],
                        'author_id' => $row['著者ID'],
                        'published_at' => $row['出版日'],
                        'price' => $row['価格'],
                    ]
                );

                $book->categories()->sync(explode(',', $row['カテゴリーID']));
            }
        });

        return [
            'result' => true,
            'rowCount' => count($rows),
        ];
    }

    /**
     * @param Reader $rows
     * @return bool
     */
    private function isValidFormat(Reader $rows): bool
    {
        $expectHeader = ['ID', 'タイトル', '概要', '著者', '著者ID', '出版日', '価格', 'カテゴリー', 'カテゴリーID', 'レビュー数'];
        $actualHeader = $rows->getHeader();

        return $expectHeader === $actualHeader;
    }

    /**
     * @param Reader $rows
     * @return string
     */
    private function validateRow(Reader $rows): string
    {
        $errorMessages = '';

        // 負荷が大きい場合はbulk-importする
        foreach ($rows as $index => $row) {
            $validator = Validator::make($row, [
                'タイトル' => ['required', 'max:255'],
                '概要' => ['required', 'max:1000'],
                '出版日' => ['required', 'date'],
                '価格' => ['required', 'digits_between:0,10'],
                '著者ID' => ['required', 'exists:users,id'],
                'カテゴリーID' => ['exists:categories,id'],
            ]);

            if ($validator->fails()) {
                foreach ($validator->errors()->all() as $error) {
                    $errorMessages .= sprintf('%s行目：%s<br>', $index, $error);
                }
            }
        }

        return $errorMessages;
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
