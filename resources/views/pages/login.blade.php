@extends('layouts.layout')


@section('content')

    <main id="main-container">

        <div class="bg-primary-dark">
            <section class="content content-full content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Log in to your dashboard.</h1>
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
                        <form class="form-horizontal" action="base_pages_dashboard.html" method="post">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="text" id="frontend-login-username" name="frontend-login-username" placeholder="Enter your username..">
                                        <label for="frontend-login-username">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="password" id="frontend-login-password" name="frontend-login-password" placeholder="Enter your password">
                                        <label for="frontend-login-password">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 text-center">
                                    <label class="css-input switch switch-sm switch-primary">
                                        <input type="checkbox" id="frontend-login-remember-me" name="frontend-login-remember-me"><span></span> Remember Me?
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-arrow-right pull-right"></i> Log in</button>
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