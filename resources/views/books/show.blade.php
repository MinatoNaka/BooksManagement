@extends('layouts.app')

@section('title', '本詳細')

@section('breadcrumbs')
    {{ Breadcrumbs::render('books.show', $book) }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
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
                                        {{ Form::label('description', '概要', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{!! nl2br(e($book->description)) !!}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('published_at', '出版日', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->formatted_published_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('price', '価格', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->price }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('author', '著者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->author->name }}</p>
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
                                    <div class="form-group row">
                                        {{ Form::label('author', 'レビュー数', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->reviews()->count() }}</p>
                                            <a href="{{ route('books.reviews.index', $book) }}" class="btn btn-sm btn-primary">レビュー一覧</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-at', '作成日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->formatted_created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-by', '作成者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($book->creator)->name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-at', '更新日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $book->formatted_updated_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-by', '最終更新者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($book->editor)->name }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('books.index') }}" class="btn btn-sm btn-primary">戻る</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
