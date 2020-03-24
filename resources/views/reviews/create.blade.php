@extends('layouts.app')

@section('title', 'レビュー登録')

@section('breadcrumbs')
    {{ Breadcrumbs::render('books.reviews.create', $book) }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">レビュー登録</div>
                                {{ Form::open(['route' => ['books.reviews.store', $book], 'class' => 'form-horizontal']) }}
                                <div class="card-body">
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
                                            <div class="form-check">
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
