@extends('layouts.base')

@section('content')
    <body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            {{ Form::open(['route' => 'login']) }}
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-user c-icon"></i>
                                    </span>
                                </div>
                                {{ Form::email('email', null, ['id' => 'email', 'class' => ($errors->has('email')) ? 'form-control is-invalid': 'form-control']) }}
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock c-icon"></i>
                                    </span>
                                </div>
                                {{ Form::password('password', ['id' => 'password', 'class' => ($errors->has('password')) ? 'form-control is-invalid': 'form-control', 'autocomplete' => 'new-password']) }}
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="form-check">
                                    {{ Form::checkbox('remember', 1, false, ['id' => 'remember', 'class' => 'form-check-input']) }}
                                    {{ Form::label('remember', 'Remember Me', ['class' => 'form-check-label']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    {{ Form::submit('Login', ['class' => 'btn btn-primary px-4']) }}
                                </div>
                                <div class="col-6 text-right">
                                    <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-3"
                                   type="button">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
