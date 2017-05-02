<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description"
          content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ secure_asset('assets/img/favicons/favicon.png') }}">

    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-160x160.png') }}"
          sizes="160x160">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-192x192.png') }}"
          sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">


    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/js/plugins/datatables/jquery.dataTables.min.css') }}">
    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ secure_asset('assets/css/oneui.css') }}">
    <link rel="stylesheet" id="css-theme" href="{{ secure_asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
    <link rel="stylesheet" id="css-main" href="{{ secure_asset('assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('fancybox/jquery.fancybox-1.3.4.css') }}"/>


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button"
                            data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>

                    <a class="h5" href="{{ secure_asset('/user-area/dashboard') }}">
                        <img class="img-responsive" src="{{ secure_asset('/assets/img/logo.png') }}"
                             alt="Family Life Club logo">
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content">
                    <ul class="nav-main">
                        <li>
                            <a href="{{ route('dashboard') }}"><i class="si si-speedometer"></i><span
                                        class="sidebar-mini-hide">Dashboard</span></a>
                        </li>

                        <li>
                            <a href="{{ secure_asset('user-area/profile') }}"><i class="si si-speedometer"></i><span
                                        class="sidebar-mini-hide">Profile</span></a>
                        </li>
                        <li>
                            <a href="{{ secure_asset('user-area/donate') }}"><i class="si si-speedometer"></i><span
                                        class="sidebar-mini-hide">Make a Donation</span></a>
                        </li>
                        <li>
                            <a href="{{ secure_asset('user-area/incoming') }}"><i class="si si-speedometer"></i><span
                                        class="sidebar-mini-hide">Incoming Money</span></a>
                        </li>
                        <li>
                            <a href="{{ secure_asset('user-area/outgoing') }}"><i class="si si-speedometer"></i><span
                                        class="sidebar-mini-hide">Outgoing Money</span></a>
                        </li>


                        @if( !empty($currentUser) && $currentUser->hasAnyRole(["superadmin","admin","guider"]))
                            <li>
                                <a href="{{ secure_asset('user-area/news') }}"><i class="si si-speedometer"></i><span
                                            class="sidebar-mini-hide">News</span></a>
                            </li>

                        @endif

                        @if( !empty($currentUser) && $currentUser->hasAnyRole(["superadmin","admin"]))
                            <li>
                                <a href="{{ secure_asset('user-area/dashboard-admin') }}"><i
                                            class="si si-speedometer"></i><span
                                            class="sidebar-mini-hide">Admin Dashboard</span></a>
                            </li>

                        @endif
                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="{{ secure_asset('assets/img/avatars/avatar10.jpg') }}"
                             alt="Avatar"> {{$currentUser->username}}
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">

                        <li>
                            <a tabindex="-1" href="{{ secure_asset('user-area/profile') }}">
                                <i class="si si-user pull-right"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="{{ secure_asset('user-area/change-password') }}">
                                <i class="si si-user pull-right"></i> Change Password
                            </a>
                        </li>


                        <li>
                            <a tabindex="-1" href="{{ secure_asset('logout')}}"
                               {{--onclick="event.preventDefault();document.getElementById('logout-form').submit();"--}}
                            >
                                <i class="si si-logout pull-right"></i>Log out
                            </a>
                            <form id="logout-form" action="{{ secure_asset('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>

        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->


    <!-- Main Container -->
@yield('content')
<!-- END Main Container -->


    <!-- Footer -->
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-right">

        </div>
        <div class="pull-left">
            {{ config('app.name', 'Laravel') }} &copy; <span class="js-year-copy"></span>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-sm modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps Block -->
            <div class="block block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Apps</h3>
                </div>
                <div class="block-content">
                    <div class="row text-center">
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="base_pages_dashboard.html">
                                <div class="block-content text-white bg-default">
                                    <i class="si si-speedometer fa-2x"></i>

                                    <div class="font-w600 push-15-t push-15">Backend</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="frontend_home.html">
                                <div class="block-content text-white bg-modern">
                                    <i class="si si-rocket fa-2x"></i>

                                    <div class="font-w600 push-15-t push-15">Frontend</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Block -->
        </div>
    </div>
</div>
<!-- END Apps Modal -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->


<script src="{{ secure_asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.appear.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.countTo.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/js.cookie.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/app.js') }}"></script>


<!-- Page JS Plugins -->
<script src="{{ secure_asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<!-- Page JS Code -->
<script src="{{ secure_asset('assets/js/pages/base_tables_datatables.js') }}"></script>
@yield('scripts')
@include('includes.notify')
<script type="text/javascript" src="{{ secure_asset('fancybox/jquery.fancybox-1.3.4.pack.js') }}"></script>
<script>
    $(document).ready(function () {

        $('.mark').hide();
        $('*[class^="mark"]').hide();
    });


    function paid(pair, payer) {
        $('.mark' + pair).show();
        $.ajax(
                {
                    url: 'https://family.dev/user-area/ogaidonpay',
                    type: 'POST',
                    //dataType:'JSON',
                    data: {'pair_id': pair, 'payer_id': payer}, // takes care of getting input value
                    success: function (data) {
                        $('#holla').html(data);
                        console.log(data);
                    },
                    error: function (response) {
                        console.log("error:" + response.responseText);
                    }
                });
    }

    $(document).ready(function () {
        /* This is basic - uses default settings */
        $("a#single_image").fancybox();
        /* Using custom settings */
        $("a#inline").fancybox({
            'hideOnContentClick': true
        });
        /* Apply fancybox to multiple items */
        $("a.group").fancybox({
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'speedIn': 600,
            'speedOut': 200,
            'overlayShow': false
        });
    });

</script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>