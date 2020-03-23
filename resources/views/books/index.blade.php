@extends('layouts.app')

@section('title', '本一覧')

@section('breadcrumbs')
    {{ Breadcrumbs::render('books.index') }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">検索</div>
                                {{ Form::open(['method' => 'GET', 'route' => 'books.index', 'files' => true, 'class' => 'form-horizontal']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('title', 'タイトル', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::text('title', request('title'), ['id' => 'title', 'class' => 'form-control']) }}
                                        </div>
                                        {{ Form::label('price', '価格', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::text('price', request('price'), ['id' => 'price', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('published_at_from', '出版日FROM', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::date('published_at_from', request('published_at_from'), ['id' => 'published_at_from', 'class' => 'form-control']) }}
                                        </div>
                                        {{ Form::label('published_at_to', '出版日TO', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::date('published_at_to', request('published_at_to'), ['id' => 'published_at_to', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('author', '著者', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::select('author', $authors, request('author'), ['id' => 'author', 'class' => 'form-control', 'placeholder' => 'please select']) }}
                                        </div>
                                        {{ Form::label('category', 'カテゴリー', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::select('category', $categories, request('category'), ['id' => 'category', 'class' => 'form-control', 'placeholder' => 'please select']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    {{ Form::submit('検索', ['class' => 'btn btn-sm btn-primary']) }}
                                    {{ Form::reset('リセット', ['class' => 'btn btn-sm btn-danger']) }}
                                </div>
                                {{ Form::close() }}
                            </div>
                            <div class="card">
                                <div class="card-header">本一覧</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>@sortablelink('id', 'ID')</th>
                                            <th>@sortablelink('title', 'タイトル')</th>
                                            <th>@sortablelink('published_at', '出版日')</th>
                                            <th>@sortablelink('price', '価格')</th>
                                            <th>@sortablelink('author.name', '著者')</th>
                                            <th>カテゴリ</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($books as $book)
                                            <tr>
                                                <td>{{ $book->id }}</td>
                                                <td>{{ $book->title }}</td>
                                                <td>{{ $book->formatted_published_at }}</td>
                                                <td>{{ $book->price }}</td>
                                                <td>{{ $book->author->name }}</td>
                                                <td>
                                                    @foreach($book->categories as $category)
                                                        {{ $category->name }}<br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('books.show', $book) }}"
                                                       class="btn btn-sm btn-outline-info" type="button">詳細</a>
                                                    <a href="{{ route('books.edit', $book) }}"
                                                       class="btn btn-sm btn-outline-success" type="button">編集</a>
                                                    {{ Form::open(['method' => 'DELETE', 'route' => ['books.destroy', $book], 'class' => 'd-inline', 'v-on:submit="confirm"']) }}
                                                    {{ Form::submit('削除', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                                    {{ Form::close() }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $books->appends(request()->except('page'))->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/views/books/index.js') }}" defer></script>
@endpush