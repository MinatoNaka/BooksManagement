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
                                    {{--                                    <div class="form-group row">--}}
                                    {{--                                        {{ Form::label('name', '本名', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::text('name', request('name'), ['id' => 'name', 'class' => 'form-control']) }}--}}
                                    {{--                                        </div>--}}
                                    {{--                                        {{ Form::label('email', 'メールアドレス', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::text('email', request('email'), ['id' => 'email', 'class' => 'form-control']) }}--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
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
                                                <td>{{ $book->published_at }}</td>
                                                <td>{{ $book->price }}</td>
                                                <td>{{ $book->author->name }}</td>
                                                <td>
                                                    @foreach($book->categories as $category)
                                                        {{ $category->name }}<br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    {{--                                                    <a href="{{ route('books.show', $book) }}"--}}
                                                    {{--                                                       class="btn btn-sm btn-outline-info" type="button">詳細</a>--}}
                                                    {{--                                                    <a href="{{ route('books.edit', $book) }}"--}}
                                                    {{--                                                       class="btn btn-sm btn-outline-success" type="button">編集</a>--}}
                                                    {{--                                                    {{ Form::open(['method' => 'DELETE', 'route' => ['books.destroy', $book], 'class' => 'd-inline', 'v-on:submit="confirm"']) }}--}}
                                                    {{--                                                    {{ Form::submit('削除', ['class' => 'btn btn-sm btn-outline-danger']) }}--}}
                                                    {{--                                                    {{ Form::close() }}--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $books->links() }}
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
    {{--    <script src="{{ mix('js/views/books/index.js') }}" defer></script>--}}
@endpush
