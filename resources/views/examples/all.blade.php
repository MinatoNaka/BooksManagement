@extends('layouts.app')

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Credit Card</strong> <small>Form</small>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" id="name" type="text"
                                                       placeholder="Enter your name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="ccnumber">Credit Card Number</label>
                                                <input class="form-control" id="ccnumber" type="text"
                                                       placeholder="0000 0000 0000 0000">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="ccmonth">Month</label>
                                            <select class="form-control" id="ccmonth">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="ccyear">Year</label>
                                            <select class="form-control" id="ccyear">
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cvv">CVV/CVC</label>
                                                <input class="form-control" id="cvv" type="text"
                                                       placeholder="123">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Company</strong> <small>Form</small></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input class="form-control" id="company" type="text"
                                               placeholder="Enter your company name">
                                    </div>
                                    <div class="form-group">
                                        <label for="vat">VAT</label>
                                        <input class="form-control" id="vat" type="text"
                                               placeholder="PL1234567890">
                                    </div>
                                    <div class="form-group">
                                        <label for="street">Street</label>
                                        <input class="form-control" id="street" type="text"
                                               placeholder="Enter street name">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-8">
                                            <label for="city">City</label>
                                            <input class="form-control" id="city" type="text"
                                                   placeholder="Enter your city">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="postal-code">Postal Code</label>
                                            <input class="form-control" id="postal-code" type="text"
                                                   placeholder="Postal Code">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input class="form-control" id="country" type="text"
                                               placeholder="Country name">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Basic Form</strong> Elements</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post"
                                          enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Static</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Username</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">Text
                                                Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="text-input" type="text"
                                                       name="text-input" placeholder="Text"><span
                                                    class="help-block">This is a help text</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="email-input">Email
                                                Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="email-input" type="email"
                                                       name="email-input" placeholder="Enter Email"
                                                       autocomplete="email"><span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="password-input">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="password-input"
                                                       type="password" name="password-input"
                                                       placeholder="Password"
                                                       autocomplete="new-password"><span class="help-block">Please enter a complex password</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="date-input">Date
                                                Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="date-input" type="date"
                                                       name="date-input" placeholder="date"><span
                                                    class="help-block">Please enter a valid date</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="disabled-input">Disabled
                                                Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="disabled-input" type="text"
                                                       name="disabled-input" placeholder="Disabled"
                                                       disabled="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="textarea-input">Textarea</label>
                                            <div class="col-md-9">
                                                            <textarea class="form-control" id="textarea-input"
                                                                      name="textarea-input" rows="9"
                                                                      placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="select1">Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="select1" name="select1">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="select2">Select
                                                Large</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-lg" id="select2"
                                                        name="select2">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="select3">Select
                                                Small</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-sm" id="select3"
                                                        name="select3">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="disabledSelect">Disabled
                                                Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="disabledSelect"
                                                        disabled="">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="multiple-select">Multiple
                                                select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="multiple-select"
                                                        name="multiple-select" size="5" multiple="">
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                    <option value="6">Option #6</option>
                                                    <option value="7">Option #7</option>
                                                    <option value="8">Option #8</option>
                                                    <option value="9">Option #9</option>
                                                    <option value="10">Option #10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Radios</label>
                                            <div class="col-md-9 col-form-label">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="radio1" type="radio"
                                                           value="radio1" name="radios">
                                                    <label class="form-check-label" for="radio1">Option
                                                        1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="radio2" type="radio"
                                                           value="radio2" name="radios">
                                                    <label class="form-check-label" for="radio2">Option
                                                        2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="radio3" type="radio"
                                                           value="radio2" name="radios">
                                                    <label class="form-check-label" for="radio3">Option
                                                        3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Inline Radios</label>
                                            <div class="col-md-9 col-form-label">
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
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Checkboxes</label>
                                            <div class="col-md-9 col-form-label">
                                                <div class="form-check checkbox">
                                                    <input class="form-check-input" id="check1"
                                                           type="checkbox" value="">
                                                    <label class="form-check-label" for="check1">Option
                                                        1</label>
                                                </div>
                                                <div class="form-check checkbox">
                                                    <input class="form-check-input" id="check2"
                                                           type="checkbox" value="">
                                                    <label class="form-check-label" for="check2">Option
                                                        2</label>
                                                </div>
                                                <div class="form-check checkbox">
                                                    <input class="form-check-input" id="check3"
                                                           type="checkbox" value="">
                                                    <label class="form-check-label" for="check3">Option
                                                        3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                                            <div class="col-md-9 col-form-label">
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
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-input">File
                                                input</label>
                                            <div class="col-md-9">
                                                <input id="file-input" type="file" name="file-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="file-multiple-input">Multiple File input</label>
                                            <div class="col-md-9">
                                                <input id="file-multiple-input" type="file"
                                                       name="file-multiple-input" multiple="">
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
                                <div class="card-header"><strong>Inline</strong> Form</div>
                                <div class="card-body">
                                    <form class="form-inline" action="" method="post">
                                        <div class="form-group">
                                            <label class="mr-1" for="exampleInputName2">Name</label>
                                            <input class="form-control" id="exampleInputName2" type="text"
                                                   placeholder="Jane Doe" autocomplete="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mx-1" for="exampleInputEmail2">Email</label>
                                            <input class="form-control" id="exampleInputEmail2" type="email"
                                                   placeholder="jane.doe@example.com" autocomplete="email">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Horizontal</strong> Form</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="hf-email">Email</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-email" type="email"
                                                       name="hf-email" placeholder="Enter Email.."
                                                       autocomplete="email"><span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="hf-password">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-password" type="password"
                                                       name="hf-password" placeholder="Enter Password.."
                                                       autocomplete="current-password"><span
                                                    class="help-block">Please enter your password</span>
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
                                <div class="card-header"><strong>Normal</strong> Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="nf-email">Email</label>
                                            <input class="form-control" id="nf-email" type="email"
                                                   name="nf-email" placeholder="Enter Email.."
                                                   autocomplete="email"><span
                                                class="help-block">Please enter your email</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="nf-password">Password</label>
                                            <input class="form-control" id="nf-password" type="password"
                                                   name="nf-password" placeholder="Enter Password.."
                                                   autocomplete="current-password"><span class="help-block">Please enter your password</span>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Input <strong>Grid</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-7">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-8">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-9">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-10">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-11">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-11">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-sm-12">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Login</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Input <strong>Sizes</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label" for="input-small">Small
                                                Input</label>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-sm" id="input-small"
                                                       type="text" name="input-small"
                                                       placeholder=".form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label" for="input-normal">Normal
                                                Input</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="input-normal" type="text"
                                                       name="input-normal" placeholder="Normal">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label" for="input-large">Large
                                                Input</label>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-lg" id="input-large"
                                                       type="text" name="input-large"
                                                       placeholder=".form-control-lg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Validation states</strong> Form</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputSuccess1">Input with
                                            success</label>
                                        <input class="form-control is-valid" id="inputSuccess1" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputError1">Input with
                                            error</label>
                                        <input class="form-control is-invalid" id="inputError1" type="text">
                                        <div class="invalid-feedback">Please provide a valid informations.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Validation</strong>
                                    <code>was-validated</code></div>
                                <div class="card-body was-validated">
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputSuccess2">Input with
                                            success</label>
                                        <input class="form-control is-valid" id="inputSuccess2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputError2">Input
                                            required</label>
                                        <input class="form-control is-invalid" id="inputError2" type="text"
                                               required="">
                                        <div class="invalid-feedback">Please provide a valid informations.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header"><strong>Icon/Text</strong> Groups</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                                    <input class="form-control" id="input1-group1"
                                                           type="text" name="input1-group1"
                                                           placeholder="Username" autocomplete="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input class="form-control" id="input2-group1"
                                                           type="email" name="input2-group1"
                                                           placeholder="Email" autocomplete="email">
                                                    <div class="input-group-append"><span
                                                            class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-euro"></use>
</svg></span></div>
                                                    <input class="form-control" id="input3-group1"
                                                           type="text" name="input3-group1"
                                                           placeholder="..">
                                                    <div class="input-group-append"><span
                                                            class="input-group-text">.00</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header"><strong>Buttons</strong> Groups</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group"><span class="input-group-prepend">
<button class="btn btn-primary" type="button">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
</svg> Search
</button></span>
                                                    <input class="form-control" id="input1-group2"
                                                           type="text" name="input1-group2"
                                                           placeholder="Username" autocomplete="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input class="form-control" id="input2-group2"
                                                           type="email" name="input2-group2"
                                                           placeholder="Email" autocomplete="email"><span
                                                        class="input-group-append">
<button class="btn btn-primary" type="button">Submit</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group"><span class="input-group-prepend">
<button class="btn btn-primary" type="button">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-facebook"></use>
</svg>
</button></span>
                                                    <input class="form-control" id="input3-group2"
                                                           type="text" name="input3-group2"
                                                           placeholder="Search"><span
                                                        class="input-group-append">
<button class="btn btn-primary" type="button">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-twitter"></use>
</svg>
</button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header"><strong>Dropdowns</strong> Groups</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary dropdown-toggle"
                                                                type="button" data-toggle="dropdown">
                                                            Action<span class="caret"></span></button>
                                                        <div class="dropdown-menu"><a class="dropdown-item"
                                                                                      href="#">Action</a><a
                                                                class="dropdown-item" href="#">Another
                                                                action</a><a class="dropdown-item" href="#">Something
                                                                else here</a>
                                                            <div class="dropdown-divider"
                                                                 role="separator"></div>
                                                            <a class="dropdown-item" href="#">Separated
                                                                link</a>
                                                        </div>
                                                    </div>
                                                    <input class="form-control" id="input1-group3"
                                                           type="text" name="input1-group3"
                                                           placeholder="Username" autocomplete="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input class="form-control" id="input2-group3"
                                                           type="email" name="input2-group3"
                                                           placeholder="Email" autocomplete="email">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary dropdown-toggle"
                                                                type="button" data-toggle="dropdown">
                                                            Action<span class="caret"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item" href="#">Action</a><a
                                                                class="dropdown-item" href="#">Another
                                                                action</a><a class="dropdown-item" href="#">Something
                                                                else here</a>
                                                            <div class="dropdown-divider"
                                                                 role="separator"></div>
                                                            <a class="dropdown-item" href="#">Separated
                                                                link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary" type="button">
                                                            Action
                                                        </button>
                                                        <button
                                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                            type="button" data-toggle="dropdown"><span
                                                                class="caret"></span></button>
                                                        <div class="dropdown-menu"><a class="dropdown-item"
                                                                                      href="#">Action</a><a
                                                                class="dropdown-item" href="#">Another
                                                                action</a><a class="dropdown-item" href="#">Something
                                                                else here</a>
                                                            <div class="dropdown-divider"
                                                                 role="separator"></div>
                                                            <a class="dropdown-item" href="#">Separated
                                                                link</a>
                                                        </div>
                                                    </div>
                                                    <input class="form-control" id="input3-group3"
                                                           type="text" name="input3-group3"
                                                           placeholder="..">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary dropdown-toggle"
                                                                type="button" data-toggle="dropdown"><span
                                                                class="caret"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right"><a
                                                                class="dropdown-item" href="#">Action</a><a
                                                                class="dropdown-item" href="#">Another
                                                                action</a><a class="dropdown-item" href="#">Something
                                                                else here</a>
                                                            <div class="dropdown-divider"
                                                                 role="separator"></div>
                                                            <a class="dropdown-item" href="#">Separated
                                                                link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Use the grid for big devices! <small><code>.col-lg-*</code>
                                        <code> .col-md-*</code> <code> .col-sm-*</code></small></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-8">
                                            </div>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-7">
                                            </div>
                                            <div class="col-md-5">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-5">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-5">
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-7">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-4">
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-md-8">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit">Action</button>
                                    <button class="btn btn-sm btn-danger" type="button">Action</button>
                                    <button class="btn btn-sm btn-warning" type="button">Action</button>
                                    <button class="btn btn-sm btn-info" type="button">Action</button>
                                    <button class="btn btn-sm btn-success" type="button">Action</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Input Grid for small devices!
                                    <small><code>.col-*</code></small></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-4">
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-8">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-5">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-5">
                                            </div>
                                            <div class="col-7">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-7">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-6">
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-7">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-5">
                                            </div>
                                            <div class="col-5">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-8">
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text"
                                                       placeholder=".col-4">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit">Action</button>
                                    <button class="btn btn-sm btn-danger" type="button">Action</button>
                                    <button class="btn btn-sm btn-warning" type="button">Action</button>
                                    <button class="btn btn-sm btn-info" type="button">Action</button>
                                    <button class="btn btn-sm btn-success" type="button">Action</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Example Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">Username</span></div>
                                                <input class="form-control" id="username3" type="text"
                                                       name="username3" autocomplete="username">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">Email</span></div>
                                                <input class="form-control" id="email3" type="email"
                                                       name="email3" autocomplete="email">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">Password</span></div>
                                                <input class="form-control" id="password3" type="password"
                                                       name="password3" autocomplete="new-password">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <button class="btn btn-sm btn-primary" type="submit">Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Example Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="username2" type="text"
                                                       name="username2" placeholder="Username"
                                                       autocomplete="username">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="email2" type="email"
                                                       name="email2" placeholder="Email"
                                                       autocomplete="email">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="password2" type="password"
                                                       name="password2" placeholder="Password"
                                                       autocomplete="new-password">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">
<svg class="c-icon">
 <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <button class="btn btn-sm btn-secondary" type="submit">Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Example Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span></div>
                                                <input class="form-control" id="username" type="text"
                                                       name="username" placeholder="Username"
                                                       autocomplete="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
                                                <input class="form-control" id="email" type="email"
                                                       name="email" placeholder="Email"
                                                       autocomplete="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
                                                <input class="form-control" id="password" type="password"
                                                       name="password" placeholder="Password"
                                                       autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <button class="btn btn-sm btn-success" type="submit">Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Form Elements</div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-form-label" for="prependedInput">Prepended
                                                text</label>
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">@</span></div>
                                                    <input class="form-control" id="prependedInput"
                                                           size="16" type="text">
                                                </div>
                                                <p class="help-block">Here's some help text</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedInput">Appended
                                                text</label>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendedInput" size="16"
                                                           type="text">
                                                    <div class="input-group-append"><span
                                                            class="input-group-text">.00</span></div>
                                                </div>
                                                <span class="help-block">Here's more help text</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedPrependedInput">Append
                                                and prepend</label>
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">$</span></div>
                                                    <input class="form-control" id="appendedPrependedInput"
                                                           size="16" type="text">
                                                    <div class="input-group-append"><span
                                                            class="input-group-text">.00</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedInputButton">Append
                                                with button</label>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendedInputButton"
                                                           size="16" type="text"><span
                                                        class="input-group-append">
<button class="btn btn-secondary" type="button">Go!</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedInputButtons">Two-button
                                                append</label>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendedInputButtons"
                                                           size="16" type="text"><span
                                                        class="input-group-append">
<button class="btn btn-secondary" type="button">Search</button>
<button class="btn btn-secondary" type="button">Options</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button class="btn btn-primary" type="submit">Save changes
                                            </button>
                                            <button class="btn btn-secondary" type="button">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"> Simple Table</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm">
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
                                            <td>Samppa Nori</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Estavan Lykos</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-danger">Banned</span></td>
                                        </tr>
                                        <tr>
                                            <td>Chetan Mohamed</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td><span class="badge badge-secondary">Inactive</span></td>
                                        </tr>
                                        <tr>
                                            <td>Derick Maximinus</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Friderik Dávid</td>
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

                        <div class="col-lg-6">
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

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"> Condensed Table</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-sm">
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
                                            <td>Carwyn Fachtna</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Nehemiah Tatius</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-danger">Banned</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ebbe Gemariah</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td><span class="badge badge-secondary">Inactive</span></td>
                                        </tr>
                                        <tr>
                                            <td>Eustorgios Amulius</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Leopold Gáspár</td>
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

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"> Bordered Table</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-bordered">
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
                                            <td>Pompeius René</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Paĉjo Jadon</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-danger">Banned</span></td>
                                        </tr>
                                        <tr>
                                            <td>Micheal Mercurius</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td><span class="badge badge-secondary">Inactive</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ganesha Dubhghall</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Hiroto Šimun</td>
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"> Combined All Table</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
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
                                            <td>Vishnu Serghei</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Zbyněk Phoibos</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-danger">Banned</span></td>
                                        </tr>
                                        <tr>
                                            <td>Einar Randall</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td><span class="badge badge-secondary">Inactive</span></td>
                                        </tr>
                                        <tr>
                                            <td>Félix Troels</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Aulus Agmundr</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-sm-12 col-xl-6">
                            <div class="card">
                                <div class="card-header"> Carousel<small>slides only</small>
                                    <div class="card-header-actions"><a class="card-header-action"
                                                                        href="https://coreui.io/docs/components/bootstrap-carousel/"
                                                                        target="_blank"><small
                                                class="text-muted">docs</small></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="carousel slide" id="carouselExampleSlidesOnly"
                                         data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100"
                                                                                   data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                   alt="First slide [800x400]"
                                                                                   src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9266%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9266%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                   data-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                            alt="Second slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9269%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9269%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                            alt="Third slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926a%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926a%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"> Carousel<small>with controls</small></div>
                                <div class="card-body">
                                    <div class="carousel slide" id="carouselExampleControls"
                                         data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100"
                                                                                   data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                   alt="First slide [800x400]"
                                                                                   src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926c%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                   data-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                            alt="Second slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926e%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926e%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                            alt="Third slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926f%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926f%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls"
                                           role="button" data-slide="prev"><span
                                                class="carousel-control-prev-icon"
                                                aria-hidden="true"></span><span
                                                class="sr-only">Previous</span></a><a
                                            class="carousel-control-next" href="#carouselExampleControls"
                                            role="button" data-slide="next"><span
                                                class="carousel-control-next-icon"
                                                aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="card">
                                <div class="card-header"> Carousel<small>with indicators</small></div>
                                <div class="card-body">
                                    <div class="carousel slide" id="carouselExampleIndicators"
                                         data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carouselExampleIndicators"
                                                data-slide-to="0"></li>
                                            <li data-target="#carouselExampleIndicators"
                                                data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators"
                                                data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100"
                                                                                   data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                   alt="First slide [800x400]"
                                                                                   src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9270%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9270%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                   data-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                            alt="Second slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9272%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9272%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                            alt="Third slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9273%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9273%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                           role="button" data-slide="prev"><span
                                                class="carousel-control-prev-icon"
                                                aria-hidden="true"></span><span
                                                class="sr-only">Previous</span></a><a
                                            class="carousel-control-next" href="#carouselExampleIndicators"
                                            role="button" data-slide="next"><span
                                                class="carousel-control-next-icon"
                                                aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"> Carousel<small>with captions</small></div>
                                <div class="card-body">
                                    <div class="carousel slide" id="carouselExampleCaptions"
                                         data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carouselExampleCaptions"
                                                data-slide-to="0"></li>
                                            <li data-target="#carouselExampleCaptions"
                                                data-slide-to="1"></li>
                                            <li data-target="#carouselExampleCaptions"
                                                data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img class="d-block w-100"
                                                                                   data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                                                                   alt="First slide [800x400]"
                                                                                   src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9274%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9274%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                                   data-holder-rendered="true">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>First slide label</h3>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis
                                                        interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                                                            alt="Second slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9275%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9275%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Second slide label</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                                            data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                                                            alt="Third slide [800x400]"
                                                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9277%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9277%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                                            data-holder-rendered="true">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Third slide label</h3>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                        consectetur.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions"
                                           role="button" data-slide="prev"><span
                                                class="carousel-control-prev-icon"
                                                aria-hidden="true"></span><span
                                                class="sr-only">Previous</span></a><a
                                            class="carousel-control-next" href="#carouselExampleCaptions"
                                            role="button" data-slide="next"><span
                                                class="carousel-control-next-icon"
                                                aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="ui-view">
            <div>

                <div class="fade-in">
                    <div class="card">
                        <div class="card-header"> Popovers
                            <div class="card-header-actions"><a class="card-header-action"
                                                                href="https://coreui.io/docs/components/bootstrap-popover/popovers.html"
                                                                target="_blank"><small
                                        class="text-muted">docs</small></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-lg btn-danger" type="button" data-toggle="popover"
                                    title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="Popover title" aria-describedby="popover744918">
                                Click to toggle popover
                            </button>
                            <hr>
                            <a class="btn btn-lg btn-danger" tabindex="0" role="button"
                               data-toggle="popover" data-trigger="focus" title=""
                               data-content="And here's some amazing content. It's very engaging. Right?"
                               data-original-title="Dismissible popover">
                                Dismissible
                                popover</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header"> Popovers<small>directions</small></div>
                        <div class="card-body">
                            <button class="btn btn-secondary" type="button" data-container="body"
                                    data-toggle="popover" data-placement="top"
                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                    data-original-title="" title="" aria-describedby="popover60020">Popover
                                on top
                            </button>
                            <button class="btn btn-secondary" type="button" data-container="body"
                                    data-toggle="popover" data-placement="right"
                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                    data-original-title="" title="" aria-describedby="popover784145">Popover
                                on right
                            </button>
                            <button class="btn btn-secondary" type="button" data-container="body"
                                    data-toggle="popover" data-placement="bottom"
                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                    data-original-title="" title="">Popover on bottom
                            </button>
                            <button class="btn btn-secondary" type="button" data-container="body"
                                    data-toggle="popover" data-placement="left"
                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                    data-original-title="" title="">Popover on left
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="ui-view">
            <div>

                <div class="fade-in">
                    <div class="card">
                        <div class="card-header">Tooltips
                            <div class="card-header-actions"><a class="card-header-action"
                                                                href="https://coreui.io/docs/components/bootstrap-tooltips/"
                                                                target="_blank"><small
                                        class="text-muted">docs</small></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Hover over the links below to see tooltips:</p>
                            <div class="bd-example tooltip-demo">
                                <p class="muted">Tight pants next level keffiyeh<a href="#"
                                                                                   data-toggle="tooltip"
                                                                                   title=""
                                                                                   data-original-title="Default tooltip">you
                                        probably</a> haven't heard of them. Photo booth beard raw denim
                                    letterpress vegan messenger bag stumptown. Farm-to-table seitan,
                                    mcsweeney's fixie sustainable quinoa 8-bit american apparel<a href="#"
                                                                                                  data-toggle="tooltip"
                                                                                                  title=""
                                                                                                  data-original-title="Another tooltip">have
                                        a</a> terry richardson vinyl chambray. Beard stumptown, cardigans
                                    banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko
                                    mcsweeney's cleanse vegan chambray. A really ironic artisan<a href="#"
                                                                                                  data-toggle="tooltip"
                                                                                                  title=""
                                                                                                  data-original-title="Another one here too">whatever
                                        keytar</a>, scenester farm-to-table banksy Austin<a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title=""
                                                                                            data-original-title="The last tip!">twitter
                                        handle</a> freegan cred raw denim single-origin coffee viral.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Tooltip on top">
                                Tooltip on top
                            </button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                    data-placement="right" title="" data-original-title="Tooltip on right">
                                Tooltip on right
                            </button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                    data-placement="bottom" title=""
                                    data-original-title="Tooltip on bottom">Tooltip on bottom
                            </button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                    data-placement="left" title="" data-original-title="Tooltip on left">
                                Tooltip on left
                            </button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip"
                                    data-html="true" title=""
                                    data-original-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Tooltip
                                with HTML
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"> Bootstrap Modals</div>
                                <div class="card-body">

                                    <button class="btn btn-secondary mb-1" type="button" data-toggle="modal"
                                            data-target="#myModal">Launch demo modal
                                    </button>
                                    <button class="btn btn-secondary mb-1" type="button" data-toggle="modal"
                                            data-target="#largeModal">Launch large modal
                                    </button>
                                    <button class="btn btn-secondary mb-1" type="button" data-toggle="modal"
                                            data-target="#smallModal">Launch small modal
                                    </button>
                                    <hr>
                                    <button class="btn btn-primary mb-1" type="button" data-toggle="modal"
                                            data-target="#primaryModal">Primary modal
                                    </button>
                                    <button class="btn btn-success mb-1" type="button" data-toggle="modal"
                                            data-target="#successModal">Success modal
                                    </button>
                                    <button class="btn btn-warning mb-1" type="button" data-toggle="modal"
                                            data-target="#warningModal">Warning modal
                                    </button>
                                    <button class="btn btn-danger mb-1" type="button" data-toggle="modal"
                                            data-target="#dangerModal">Danger modal
                                    </button>
                                    <button class="btn btn-info mb-1" type="button" data-toggle="modal"
                                            data-target="#infoModal">Info modal
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="smallModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-primary" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-success" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-success" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="warningModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-warning" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-warning" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-danger" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-danger" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="infoModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-info" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-info" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
