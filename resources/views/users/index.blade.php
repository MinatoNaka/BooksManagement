@extends('layouts.app')

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"><strong>Basic Form</strong> Elements</div>
                                {{ Form::open(['route' => 'home', 'files' => true, 'class' => 'form-horizontal']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('text-input', 'Text Input', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::text('text-input', null, ['id' => 'text-input', 'class' => 'form-control']) }}
                                            <span class="help-block">This is a help text</span>
                                        </div>
                                        {{ Form::label('email-input', 'Email Input', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::email('email-input', null, ['id' => 'email-input', 'class' => 'form-control']) }}
                                            <span class="help-block">Please enter your email</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('select1', 'Select', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::select('select1', [1 => 'Option1', 2 => 'Option2', 3 => 'Option3'], null, ['id' => 'select1', 'class' => 'form-control', 'placeholder' => 'please select']) }}
                                        </div>
                                        {{ Form::label('select2', 'Select', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::select('select2', [1 => 'Option1', 2 => 'Option2', 3 => 'Option3'], null, ['id' => 'select2', 'class' => 'form-control', 'placeholder' => 'please select']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label(null, 'Inline Radios', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4 col-form-label">
                                            <div class="form-check form-check-inline mr-1">
                                                {{ Form::radio('inline-radios', 1, true, ['id' => 'inline-radio1', 'class' => 'form-check-input']) }}
                                                {{ Form::label('inline-radio1', 'Option 1', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check form-check-inline mr-1">
                                                {{ Form::radio('inline-radios', 2, false, ['id' => 'inline-radio2', 'class' => 'form-check-input']) }}
                                                {{ Form::label('inline-radio2', 'Option 2', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check form-check-inline mr-1">
                                                {{ Form::radio('inline-radios', 3, false, ['id' => 'inline-radio3', 'class' => 'form-check-input']) }}
                                                {{ Form::label('inline-radio3', 'Option 3', ['class' => 'form-check-label']) }}
                                            </div>
                                        </div>
                                        {{ Form::label(null, 'Inline Checkboxes', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4 col-form-label">
                                            <div class="form-check form-check-inline mr-1">
                                                {{ Form::checkbox('inline-check', 1, true, ['id' => 'inline-check1', 'class' => 'form-check-input']) }}
                                                {{ Form::label('inline-check1', 'Option 1', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check form-check-inline mr-1">
                                                {{ Form::checkbox('inline-check', 2, false, ['id' => 'inline-check2', 'class' => 'form-check-input']) }}
                                                {{ Form::label('inline-check2', 'Option 2', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check form-check-inline mr-1">
                                                {{ Form::checkbox('inline-check', 3, false, ['id' => 'inline-check3', 'class' => 'form-check-input']) }}
                                                {{ Form::label('inline-check3', 'Option 3', ['class' => 'form-check-label']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    {{ Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) }}
                                    {{ Form::reset('Reset', ['class' => 'btn btn-sm btn-danger']) }}
                                </div>
                                {{ Form::close() }}
                            </div>
                            <div class="card">
                                <div class="card-header">ユーザ一覧</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Birthday</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->formatted_birthday}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!! $users->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
