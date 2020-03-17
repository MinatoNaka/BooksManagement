@extends('layouts.app')

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><strong>Basic Form</strong> Elements</div>
                                {{ Form::open(['route' => 'home', 'files' => true, 'class' => 'form-horizontal']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('static', 'Static', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            <p class="form-control-static">Username</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('text-input', 'Text Input', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('text-input', null, ['id' => 'text-input', 'class' => 'form-control', 'placeholder' => 'placeholder']) }}
                                            <span class="help-block">This is a help text</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('email-input', 'Email Input', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::email('email-input', null, ['id' => 'email-input', 'class' => 'form-control']) }}
                                            <span class="help-block">Please enter your email</span>
                                        </div>
                                    </div>
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
                                        {{ Form::label('password-input', 'Password', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::password('password-input', ['id' => 'password-input', 'class' => 'form-control', 'autocomplete' => 'new-password']) }}
                                            <span class="help-block">Please enter a complex password</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('date-input', 'Date Input', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::date('date-input', null, ['id' => 'date-input', 'class' => 'form-control']) }}
                                            <span class="help-block">Please enter a valid date</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('disabled-input', 'Disabled Input', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('disabled-input', null, ['id' => 'text-input', 'class' => 'form-control', 'disabled' => true]) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('textarea-input', 'Textarea', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::textarea('textarea-input', null, ['id' => 'textarea-input', 'class' => 'form-control', 'placeholder' => 'Content..']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('select1', 'Select', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('select1', [1 => 'Option1', 2 => 'Option2', 3 => 'Option3'], null, ['id' => 'select1', 'class' => 'form-control', 'placeholder' => 'please select']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('disabled-select', 'Disabled Select', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('disabled-select', [1 => 'Option1', 2 => 'Option2', 3 => 'Option3'], null, ['id' => 'disabled-select', 'class' => 'form-control', 'placeholder' => 'please select', 'disabled' => true]) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label(null, 'Radios', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9 col-form-label">
                                            <div class="form-check">
                                                {{ Form::radio('radios', 1, true, ['id' => 'radio1', 'class' => 'form-check-input']) }}
                                                {{ Form::label('radio1', 'Option 1', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check">
                                                {{ Form::radio('radios', 2, false, ['id' => 'radio2', 'class' => 'form-check-input']) }}
                                                {{ Form::label('radio2', 'Option 2', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check">
                                                {{ Form::radio('radios', 3, false, ['id' => 'radio3', 'class' => 'form-check-input']) }}
                                                {{ Form::label('radio3', 'Option 3', ['class' => 'form-check-label']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label(null, 'Inline Radios', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9 col-form-label">
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
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label(null, 'Checkboxes', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9 col-form-label">
                                            <div class="form-check checkbox">
                                                {{ Form::checkbox('check', 1, true, ['id' => 'check1', 'class' => 'form-check-input']) }}
                                                {{ Form::label('check1', 'Option 1', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check checkbox">
                                                {{ Form::checkbox('check', 2, false, ['id' => 'check2', 'class' => 'form-check-input']) }}
                                                {{ Form::label('check2', 'Option 2', ['class' => 'form-check-label']) }}
                                            </div>
                                            <div class="form-check checkbox">
                                                {{ Form::checkbox('check', 3, true, ['id' => 'check3', 'class' => 'form-check-input']) }}
                                                {{ Form::label('check3', 'Option 3', ['class' => 'form-check-label']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label(null, 'Inline Checkboxes', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9 col-form-label">
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
                                    <div class="form-group row">
                                        {{ Form::label('file-input', 'File input', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::file('file-input', ['id' => 'file-input']) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('file-multiple-input', 'Multiple File input', ['class' => 'col-md-3 col-form-label']) }}
                                        <div class="col-md-9">
                                            {{ Form::file('file-multiple-input', ['id' => 'file-multiple-input', 'multiple' => '']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    {{ Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) }}
                                    {{ Form::reset('Reset', ['class' => 'btn btn-sm btn-danger']) }}
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
