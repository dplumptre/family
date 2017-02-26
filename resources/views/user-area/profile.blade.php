@extends('layouts.layout_user')

@section('content')
    <main id="main-container">
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        Profile
                    </h1>
                </div>
            </div>
        </div>
        <div class="content bg-grey">

            <div class="row">
                <div class="col-sm-12 col-lg-7">
                    <div class="block">
                        <div class="block block-themed">
                            <div class="block-header bg-amethyst">
                                <ul class="block-options">
                                    <li>
                                        <button type="button"><i class="si si-settings"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Edit Details</h3>
                            </div>
                            <div class="block-content">
                                <form class="form-horizontal push-5-t" action="#" method="post">

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="register4-firstname">Firstname</label>
                                            <input class="form-control" type="text" id="register4-firstname" name="register4-firstname" placeholder="Enter your firstname..">
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="register4-lastname">Lastname</label>
                                            <input class="form-control" type="text" id="register4-lastname" name="register4-lastname" placeholder="Enter your lastname..">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-12" for="login1-password">Phone Number</label>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" id="login1-password" name="login1-password" placeholder="Enter your phoe number..">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="register4-firstname">Bank Name</label>
                                            <select name="bank_name" id="bank_name" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="GTB">GTB</option>
                                                <option value="First Bank">First Bank</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="register4-lastname">Account Name</label>
                                            <input class="form-control" type="text" id="register4-lastname" name="register4-lastname" placeholder="Account Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="register4-firstname">Account Number</label>
                                            <input class="form-control" type="text" id="register4-firstname"
                                                   name="register4-firstname" placeholder="Enter your firstname..">
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="register4-lastname">Account Type</label>
                                            <select name="account_type" id="account_type" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="savings">Savings Account</option>
                                                <option value="current">Current Account</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="register4-firstname">Bank Branch</label>
                                            <input class="form-control" type="text" id="register4-firstname"
                                                   name="register4-firstname" placeholder="Enter your firstname..">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-arrow-right push-5-r"></i> Log in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="block">
                        <div class="block block-themed">
                            <div class="block-header bg-amethyst">
                                <ul class="block-options">
                                    <li>
                                        <button type="button"><i class="si si-settings"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">User Details</h3>
                            </div>
                            <div class="block-content">

                                <dl>
                                    <dt>Firstname</dt>
                                    <dl>John</dl>

                                    <dt>Lastname</dt>
                                    <dl>Doe</dl>

                                    <dt>Phone</dt>
                                    <dl>+2348098765432</dl>

                                    <hr>

                                    <dt>Bank Name</dt>
                                    <dl></dl>

                                    <dt>Bank Account Name</dt>
                                    <dl></dl>

                                    <dt>Bank Account Number</dt>
                                    <dl></dl>

                                    <dt>Bank Account Type</dt>
                                    <dl></dl>


                                </dl>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection