@extends('layouts.app')

@section('title', 'ユーザ登録')

@section('breadcrumbs')
    {{ Breadcrumbs::render('users.create') }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">ユーザ登録</div>
                                {{ Form::open(['route' => 'users.store', 'files' => true, 'class' => 'form-horizontal', 'v-on:submit' => 'preventDoubleSubmit']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('name', 'ユーザ名', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('name', null, ['id' => 'name', 'class' => ($errors->has('name')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('email', 'メールアドレス', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('email', null, ['id' => 'email', 'class' => ($errors->has('email')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('password', 'パスワード', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::password('password', ['id' => 'password', 'class' => ($errors->has('password')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('password-confirmation', 'パスワード確認用', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::password('password_confirmation', ['id' => 'password-confirmation', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('birthday', '生年月日', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::date('birthday', null, ['id' => 'birthday', 'class' => ($errors->has('birthday')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('birthday')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('avatar', 'アバター', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::file('avatar', ['id' => 'avatar', 'class' => ($errors->has('avatar')) ? 'form-control is-invalid': 'form-control']) }}
                                            @error('avatar')
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

@push('scripts')
    <script src="{{ mix('js/views/users/create.js') }}" defer></script>
@endpush
