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
                                <div class="card-header"> Striped Table</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Yiorgos Avraamu</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Avram Tarasios</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-danger">Banned</span></td>
                                        </tr>
                                        <tr>
                                            <td>Quintin Ed</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td><span class="badge badge-secondary">Inactive</span></td>
                                        </tr>
                                        <tr>
                                            <td>Enéas Kwadwo</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Agapetus Tadeáš</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
