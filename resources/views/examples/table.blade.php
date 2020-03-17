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
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Text Input</label>
                                            <div class="col-md-4">
                                                <input class="form-control" id="text-input" type="text"
                                                       name="text-input" placeholder="Text"><span
                                                    class="help-block">This is a help text</span>
                                            </div>
                                            <label class="col-md-2 col-form-label" for="email-input">Email Input</label>
                                            <div class="col-md-4">
                                                <input class="form-control" id="email-input" type="email"
                                                       name="email-input" placeholder="Enter Email"
                                                       autocomplete="email">
                                                <span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"
                                                   for="select1">Select</label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="select1" name="select1">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                            <label class="col-md-2 col-form-label"
                                                   for="select1">Select</label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="select1" name="select1">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Inline Radios</label>
                                            <div class="col-md-4 col-form-label">
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-radio1"
                                                           type="radio" value="option1"
                                                           name="inline-radios">
                                                    <label class="form-check-label"
                                                           for="inline-radio1">One</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-radio2"
                                                           type="radio" value="option2"
                                                           name="inline-radios">
                                                    <label class="form-check-label"
                                                           for="inline-radio2">Two</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-radio3"
                                                           type="radio" value="option3"
                                                           name="inline-radios">
                                                    <label class="form-check-label"
                                                           for="inline-radio3">Three</label>
                                                </div>
                                            </div>
                                            <label class="col-md-2 col-form-label">Inline Checkboxes</label>
                                            <div class="col-md-4 col-form-label">
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-checkbox1"
                                                           type="checkbox" value="check1">
                                                    <label class="form-check-label"
                                                           for="inline-checkbox1">One</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-checkbox2"
                                                           type="checkbox" value="check2">
                                                    <label class="form-check-label"
                                                           for="inline-checkbox2">Two</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-checkbox3"
                                                           type="checkbox" value="check3">
                                                    <label class="form-check-label"
                                                           for="inline-checkbox3">Three</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
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
