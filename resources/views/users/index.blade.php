@extends('layouts.app')

@section('title', 'ユーザ一覧')

@section('breadcrumbs')
    {{ Breadcrumbs::render('users.index') }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">検索</div>
                                {{ Form::open(['method' => 'GET', 'route' => 'users.index', 'files' => true, 'class' => 'form-horizontal', 'v-on:submit' => 'preventDoubleSubmit']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('name', 'ユーザ名', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::text('name', request('name'), ['id' => 'name', 'class' => 'form-control']) }}
                                        </div>
                                        {{ Form::label('email', 'メールアドレス', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::text('email', request('email'), ['id' => 'email', 'class' => 'form-control']) }}
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
                                <div class="card-header">ユーザ一覧</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>@sortablelink('id', 'ID')</th>
                                            <th>@sortablelink('name', 'ユーザ名')</th>
                                            <th>@sortablelink('email', 'メールアドレス')</th>
                                            <th>@sortablelink('birthday', '生年月日')</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->formatted_birthday}}</td>
                                                <td>
                                                    <a href="{{ route('users.show', $user) }}"
                                                       class="btn btn-sm btn-outline-info" type="button">詳細</a>
                                                    <a href="{{ route('users.edit', $user) }}"
                                                       class="btn btn-sm btn-outline-success" type="button">編集</a>
                                                    {{ Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user], 'class' => 'd-inline', 'v-on:submit' => 'confirm']) }}
                                                    {{ Form::submit('削除', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                                    {{ Form::close() }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $users->appends(request()->except('page'))->links() }}
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
    <script src="{{ mix('js/views/users/index.js') }}" defer></script>
@endpush
