<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>@yield('page_title', config('app.name'))</title>

    <meta name="description"
          content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="_token" value="{{ csrf_token() }}">

    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon-180x180.png">

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="/assets/css/oneui.css">
    <link rel="stylesheet" id="css-theme" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>

    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
    @yield('head')
</head>
<body>
<!-- Register Content -->
<div class="bg-white">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-20 animated fadeIn">
                    <!-- Register Title -->
                    <div class="text-center">
                      @include('layouts.partials.logo')

                        <h1 class="h3 push-10-t">Create Account</h1>
                    </div>

                    <form class="js-validation-material form-horizontal push-50-t push-50" action="{{route('register')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group{{$errors->has('username') ? ' has-error':'   '}}">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="text" id="username" name="username"
                                           placeholder="Please enter a username" value="{{old('username')}}">
                                    <label for="username">Username</label>
                                </div>
                                @if ($errors->has('username'))
                                    <div class="help-block text-right animated fadeInDown">
                                        {{$errors->first('username')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('email') ? ' has-error':'   '}}">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="email" id="email" name="email"
                                           placeholder="Please provide your email" value="{{old('email')}}">
                                    <label for="email">Email</label>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="help-block text-right animated fadeInDown">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('password') ? ' has-error':'   '}}">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="password" id="password" name="password"
                                           placeholder="Choose a strong password..">
                                    <label for="password">Password</label>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="help-block text-right animated fadeInDown">
                                        {{$errors->first('password')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('password_confirmation') ? ' has-error':'   '}}">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="password" id="password_confirmation"
                                           name="password_confirmation" placeholder="..and confirm it">
                                    <label for="password_confirmation">Confirm Password</label>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <div class="help-block text-right animated fadeInDown">
                                        {{$errors->first('password_confirmation')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('terms') ? ' has-error':'   '}}">
                            <div class="col-xs-7 col-sm-8">
                                <label class="css-input switch switch-sm switch-success">
                                    <input type="checkbox" id="terms" name="terms"
                                           value="1"{{old('terms') ? ' checked':''}}><span></span> I agree with terms
                                    &amp; conditions
                                </label>
                                @if ($errors->has('terms'))
                                    <div class="help-block text-left animated fadeInDown">
                                        {{$errors->first('terms')}}
                                    </div>
                                @endif
                            </div>
                            <div class="col-xs-5 col-sm-4">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                <button class="btn btn-sm btn-block btn-success" type="submit">Create Account</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Register Form -->
                    
                    
                                        <hr class="hr-text" data-content="">
                    
                   Already a member ? click <a class="h5" href="{{ URL::asset('/login') }}">
                       <i>here</i> 
</a>to login
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Register Content -->

<!-- Register Footer -->
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-muted"><span class="js-year-copy"></span> {{ config('app.name', 'Laravel') }}</small>
</div>
<!-- END Register Footer -->

<!-- Terms Modal -->
<!--<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                </div>
                <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>

                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>

                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>

                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>

                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> I
                    agree
                </button>
            </div>
        </div>
    </div>
</div>-->
<!-- END Terms Modal -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/core/jquery.slimscroll.min.js"></script>
<script src="/assets/js/core/jquery.scrollLock.min.js"></script>
<script src="/assets/js/core/jquery.appear.min.js"></script>
<script src="/assets/js/core/jquery.countTo.min.js"></script>
<script src="/assets/js/core/jquery.placeholder.min.js"></script>
<script src="/assets/js/core/js.cookie.min.js"></script>
<script src="/assets/js/app.js"></script>

<!-- Page JS Plugins -->
<script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="/js/register.js"></script>
</body>
</html>