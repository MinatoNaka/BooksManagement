@extends('layouts.base')

@section('content')
    <body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        {{ Form::open(['route' => 'register']) }}
                        <div class="form-group row">
                            {{ Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('name', null, ['id' => 'name', 'class' => ($errors->has('name')) ? 'form-control is-invalid': 'form-control']) }}
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('email', 'Email', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::email('email', null, ['id' => 'email', 'class' => ($errors->has('email')) ? 'form-control is-invalid': 'form-control']) }}
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::password('password', ['id' => 'password', 'class' => ($errors->has('password')) ? 'form-control is-invalid': 'form-control', 'autocomplete' => 'new-password']) }}
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('password-confirmation', 'Confirm Password', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['id' => 'password-confirmation', 'class' => 'form-control', 'autocomplete' => 'new-password']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('birthday', 'Birthday', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::date('birthday', null, ['id' => 'birthday', 'class' => ($errors->has('password')) ? 'form-control is-invalid': 'form-control']) }}
                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::submit('Register', ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
