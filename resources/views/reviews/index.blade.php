@extends('layouts.app')

@section('title', 'レビュー一覧')

@section('breadcrumbs')
    {{ Breadcrumbs::render('books.reviews.index', $book) }}
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
                                {{ Form::open(['method' => 'GET', 'route' => ['books.reviews.index', $book], 'class' => 'form-horizontal']) }}
                                <div class="card-body">
                                    {{--                                    <div class="form-group row">--}}
                                    {{--                                        {{ Form::label('title', 'タイトル', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::text('title', request('title'), ['id' => 'title', 'class' => 'form-control']) }}--}}
                                    {{--                                        </div>--}}
                                    {{--                                        {{ Form::label('price', '価格', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::text('price', request('price'), ['id' => 'price', 'class' => 'form-control']) }}--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="form-group row">--}}
                                    {{--                                        {{ Form::label('published_at_from', '出版日FROM', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::date('published_at_from', request('published_at_from'), ['id' => 'published_at_from', 'class' => 'form-control']) }}--}}
                                    {{--                                        </div>--}}
                                    {{--                                        {{ Form::label('published_at_to', '出版日TO', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::date('published_at_to', request('published_at_to'), ['id' => 'published_at_to', 'class' => 'form-control']) }}--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="form-group row">--}}
                                    {{--                                        {{ Form::label('author', '著者', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::select('author', $authors, request('author'), ['id' => 'author', 'class' => 'form-control', 'placeholder' => 'please select']) }}--}}
                                    {{--                                        </div>--}}
                                    {{--                                        {{ Form::label('category', 'カテゴリー', ['class' => 'col-md-2 col-form-label']) }}--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            {{ Form::select('category', $categories, request('category'), ['id' => 'category', 'class' => 'form-control', 'placeholder' => 'please select']) }}--}}
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
                                <div class="card-header">レビュー一覧</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>@sortablelink('id', 'ID')</th>
                                            <th>@sortablelink('reviewer.name', 'レビュワー')</th>
                                            <th>@sortablelink('comment', 'コメント')</th>
                                            <th>@sortablelink('star', 'スター')</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reviews as $review)
                                            <tr>
                                                <td>{{ $review->id }}</td>
                                                <td>{{ $review->reviewer->name }}</td>
                                                <td>{{ $review->comment }}</td>
                                                <td>
                                                    @for($i = 0; $i < $review->star; $i++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                </td>
                                                <td>
                                                    {{--                                                    @can('view', $review)--}}
                                                    {{--                                                        <a href="{{ route('reviews.show', $review) }}"--}}
                                                    {{--                                                           class="btn btn-sm btn-outline-info" type="button">詳細</a>--}}
                                                    {{--                                                    @endcan--}}
                                                    {{--                                                    @can('update', $review)--}}
                                                    {{--                                                        <a href="{{ route('reviews.edit', $review) }}"--}}
                                                    {{--                                                           class="btn btn-sm btn-outline-success" type="button">編集</a>--}}
                                                    {{--                                                    @endcan--}}
                                                    {{--                                                    @can('delete', $review)--}}
                                                    {{--                                                        {{ Form::open(['method' => 'DELETE', 'route' => ['reviews.destroy', $review], 'class' => 'd-inline', 'v-on:submit="confirm"']) }}--}}
                                                    {{--                                                        {{ Form::submit('削除', ['class' => 'btn btn-sm btn-outline-danger']) }}--}}
                                                    {{--                                                        {{ Form::close() }}--}}
                                                    {{--                                                    @endcan--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $reviews->appends(request()->except('page'))->links() }}
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
    {{--    <script src="{{ mix('js/views/reviews/index.js') }}" defer></script>--}}
@endpush
