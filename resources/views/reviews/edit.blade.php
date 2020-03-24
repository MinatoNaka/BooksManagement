@extends('layouts.app')

@section('title', 'レビュー編集')

@section('breadcrumbs')
    {{ Breadcrumbs::render('reviews.edit', $review) }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">レビュー編集</div>
                                {{ Form::model($review, ['method' => 'PUT', 'route' => ['reviews.update', $review], 'class' => 'form-horizontal']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('id', 'ID', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $review->id }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('comment', 'コメント', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::textarea('comment', null, ['id' => 'comment', 'class' => ($errors->has('comment')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('comment')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('star', 'スター', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <div class="form-check @error('star') is-invalid @enderror">
                                                {{ Form::radio('star', 1, false, ['id' => 'star1', 'class' => 'form-check-input']) }}
                                                {{ Form::label('star1', '<i class="fas fa-star"></i>', ['class' => 'form-check-label'], false) }}
                                            </div>
                                            <div class="form-check">
                                                {{ Form::radio('star', 2, false, ['id' => 'star2', 'class' => 'form-check-input']) }}
                                                {{ Form::label('star2', '<i class="fas fa-star"></i><i class="fas fa-star"></i>', ['class' => 'form-check-label'], false) }}
                                            </div>
                                            <div class="form-check">
                                                {{ Form::radio('star', 3, false, ['id' => 'star3', 'class' => 'form-check-input']) }}
                                                {{ Form::label('star3', '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>', ['class' => 'form-check-label'], false) }}
                                            </div>
                                            <div class="form-check">
                                                {{ Form::radio('star', 4, false, ['id' => 'star4', 'class' => 'form-check-input']) }}
                                                {{ Form::label('star4', '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>', ['class' => 'form-check-label'], false) }}
                                            </div>
                                            <div class="form-check">
                                                {{ Form::radio('star', 5, false, ['id' => 'star5', 'class' => 'form-check-input']) }}
                                                {{ Form::label('star5', '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>', ['class' => 'form-check-label'], false) }}
                                            </div>
                                            @error('star')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-at', '作成日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $review->formatted_created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-by', '作成者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($review->creator)->name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-at', '更新日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $review->formatted_updated_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-by', '最終更新者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($review->editor)->name }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    {{ Form::submit('更新', ['class' => 'btn btn-sm btn-primary']) }}
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
