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
                                <div class="card-header">本詳細</div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('id', 'ID', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->id }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('title', 'タイトル', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->title }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('category', 'カテゴリー', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">
                                                @foreach($book->categories as $category)
                                                    {{ $category->name }}<br>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">検索</div>
                                {{ Form::open(['method' => 'GET', 'route' => ['books.reviews.index', $book], 'class' => 'form-horizontal', 'v-on:submit' => 'preventDoubleSubmit']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('reviewer', 'レビュワー', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::select('reviewer', $reviewers, request('reviewer'), ['id' => 'reviewer', 'class' => 'form-control', 'placeholder' => 'please select']) }}
                                        </div>
                                        {{ Form::label('comment', 'コメント', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::text('comment', request('comment'), ['id' => 'comment', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('star', 'スター', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::select('star', [1 => '1以上', 2 => '2以上', 3 => '3以上', 4 => '4以上', 5 => '5'], request('star'), ['id' => 'star', 'class' => 'form-control', 'placeholder' => 'please select']) }}
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
                                                    @can('update', $review)
                                                        <a href="{{ route('reviews.edit', $review) }}"
                                                           class="btn btn-sm btn-outline-success" type="button">編集</a>
                                                    @endcan
                                                    @can('delete', $review)
                                                        {{ Form::open(['method' => 'DELETE', 'route' => ['reviews.destroy', $review], 'class' => 'd-inline', 'v-on:submit' => 'confirm']) }}
                                                        {{ Form::submit('削除', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                                        {{ Form::close() }}
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $reviews->appends(request()->except('page'))->links() }}
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('books.reviews.create', $book) }}" class="btn btn-sm btn-primary">レビュー登録</a>
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
    <script src="{{ mix('js/views/reviews/index.js') }}" defer></script>
@endpush
