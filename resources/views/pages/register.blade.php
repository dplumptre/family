@extends('layouts.layout')


@section('content')

    <main id="main-content">

        <div class="bg-primary-dark">
            <section class="content content-full content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Sign up for a new account.</h1>
                    <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Unlimited ideas. Unlimited power. Unlimited joy. Unlimited opportunities.</h2>
                </div>
                <!-- END Section Content -->
            </section>
        </div>

        <div class="bg-white">
            <section class="content content-boxed">
                <!-- Section Content -->
                <div class="row items-push push-50-t push-30">
                    <div class="col-md-6 col-md-offset-3">
                        <form class="form-horizontal" action="frontend_signup.html" method="post">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="text" id="frontend-signup-username" name="frontend-signup-username" placeholder="Please enter a username">
                                        <label for="frontend-signup-username">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="email" id="frontend-signup-email" name="frontend-signup-email" placeholder="Please provide your email">
                                        <label for="frontend-signup-email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="password" id="frontend-signup-password" name="frontend-signup-password" placeholder="Choose a strong password..">
                                        <label for="frontend-signup-password">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="password" id="frontend-signup-password2" name="frontend-signup-password2" placeholder="..and confirm it">
                                        <label for="frontend-signup-password2">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 text-center">
                                    <label class="css-input switch switch-sm switch-success">
                                        <input type="checkbox" id="frontend-signup-terms" name="frontend-signup-terms"><span></span> I agree with <a data-toggle="modal" data-target="#modal-signup-terms" href="#">terms &amp; conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus pull-right"></i> Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>

    </main>

@endsection