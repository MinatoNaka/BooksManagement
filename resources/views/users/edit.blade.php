@extends('layouts.app')

@section('title', 'ユーザ編集')

@section('breadcrumbs')
    {{ Breadcrumbs::render('users.edit', $user) }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">ユーザ編集</div>
                                {{ Form::model($user, ['method' => 'PUT', 'route' => ['users.update', $user], 'files' => true, 'class' => 'form-horizontal', 'v-on:submit' => 'preventDoubleSubmit']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('id', 'ID', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $user->id }}</p>
                                        </div>
                                    </div>
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
                                            @isset($user->avatar)
                                                <img src="{{ config('filesystems.awsPublicEndpoint') . $user->avatar }}"
                                                     alt="avatar"
                                                     height="100px">
                                                {{ Form::submit('アバター削除', ['class' => 'btn btn-sm btn-outline-danger', 'form' => 'destroy-avatar-form']) }}
                                            @endisset
                                            @empty($user->avatar)
                                                {{ Form::file('avatar', ['id' => 'avatar', 'class' => ($errors->has('avatar')) ? 'form-control is-invalid': 'form-control']) }}
                                                @error('avatar')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            @endempty
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('role', 'ロール', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('role', $roles, null, ['id' => 'role', 'class' => ($errors->has('role')) ? 'form-control is-invalid': 'form-control', 'placeholder' => 'please select']) }}
                                            @error('role')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-at', '作成日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $user->formatted_created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('created-by', '作成者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($user->creator)->name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-at', '更新日時', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $user->formatted_updated_at }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('updated-by', '最終更新者', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ optional($user->editor)->name }}</p>
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
    {{ Form::open(['method' => 'DELETE', 'route' => ['users.avatar.destroy', $user], 'v-on:submit' => 'confirm', 'id' => 'destroy-avatar-form']) }}
    {{ Form::close() }}
@endsection

@push('scripts')
    <script src="{{ mix('js/views/users/edit.js') }}" defer></script>
@endpush
