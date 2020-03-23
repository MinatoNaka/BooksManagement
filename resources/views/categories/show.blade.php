@extends('layouts.app')

@section('title', 'カテゴリー詳細')

@section('breadcrumbs')
    {{ Breadcrumbs::render('categories.show', $category) }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">カテゴリー詳細</div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('id', 'ID', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $category->id }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('name', 'カテゴリー名', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $category->name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-at', '作成日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $category->formatted_created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-by', '作成者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($category->creator)->name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-at', '更新日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $category->formatted_updated_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-by', '最終更新者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($category->editor)->name }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary">戻る</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
