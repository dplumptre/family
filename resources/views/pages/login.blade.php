<!--@extends('layouts.layout')


@section('content')

    <main id="main-container">

        <div class="bg-primary-dark">
            <section class="content content-full content-boxed overflow-hidden">
                 Section Content 
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 animated fadeInDown" data-toggle="appear"
                        data-class="animated fadeInDown">Log in to your dashboard.</h1>

                    <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear"
                        data-class="animated fadeInDown">Unlimited ideas. Unlimited power. Unlimited joy. Unlimited
                        opportunities.</h2>
                </div>
                 END Section Content 
            </section>
        </div>

        <div class="bg-white">
            <section class="content content-boxed">
                 Section Content 
                <div class="row items-push push-50-t push-30">

                    <div class="col-md-4 col-md-offset-4">
                        <div class="Box">
                            @include('layouts.partials.errors')
                            <form class="form-horizontal" action="{{route('post.login')}}" method="post" autocomplete="off">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary">
                                            <input class="form-control" type="text" id="email" name="email"
                                                   value="{{old('email')}}" placeholder="Enter your email..">
                                            <label for="username">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary">
                                            <input class="form-control" type="password" id="password" name="password"
                                                   placeholder="Enter your password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="rememberMe" name="rememberMe" {{old('rememberMe') ? 'checked':''}}><span></span>
                                            Remember Me?
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-block btn-primary" type="submit"><i
                                                    class="fa fa-arrow-right pull-right"></i> Log in
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="" style="margin: 0 0 0 20px;">
                                <p class="pull-left">
                                    <label>Forgot Password?</label>
                                </p>
                                <p class="pull-right">
                                    <label>Register</label>
                                </p>

                                <button class="btn btn-block btn-primary push-10" type="button"><i class="fa fa-facebook pull-left"></i> Login with Facebook</button>
                                <button class="btn btn-block btn-danger push-10" type="button"><i class="fa fa-google-plus pull-left"></i> Login with Google+</button>
                            </div>

                        </div>
                    </div>
                </div>
                 END Section Content 
            </section>
        </div>

    </main>

@endsection-->