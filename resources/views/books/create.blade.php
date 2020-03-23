@extends('layouts.app')

@section('title', '本登録')

@section('breadcrumbs')
    {{ Breadcrumbs::render('books.create') }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">本登録</div>
                                {{ Form::open(['route' => 'books.store', 'class' => 'form-horizontal']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('title', 'タイトル', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('title', null, ['id' => 'title', 'class' => ($errors->has('title')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('title')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('description', '概要', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::textarea('description', null, ['id' => 'description', 'class' => ($errors->has('description')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('description')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('published_at', '出版日', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::date('published_at', null, ['id' => 'published_at', 'class' => ($errors->has('published_at')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('published_at')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('price', '価格', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('price', null, ['id' => 'price', 'class' => ($errors->has('price')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('price')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('author', '著者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('author', $authors, null, ['id' => 'author', 'class' => ($errors->has('author')) ? 'form-control is-invalid': 'form-control', 'placeholder' => 'please select']) }}
                                            @error('author')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('category', 'カテゴリー', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('category', $categories, null, ['id' => 'category', 'class' => ($errors->has('category')) ? 'form-control is-invalid': 'form-control', 'multiple' => true]) }}
                                            @error('category')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    {{ Form::submit('登録', ['class' => 'btn btn-sm btn-primary']) }}
                                    {{ Form::reset('リセット', ['class' => 'btn btn-sm btn-danger']) }}
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
