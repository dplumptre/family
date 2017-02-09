
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
        <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css">
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
            'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
        -->
        <div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <div class="content-boxed">
                    <!-- Header Navigation Right -->
                    <ul class="nav-header pull-right">
                        <li>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group">
                    
                                <ul class="dropdown-menu dropdown-menu-right sidebar-mini-hide font-s13">
                                    <li>
                                        <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="hidden-md hidden-lg">
                            <!-- Toggle class helper (for main header navigation below in small screens), functionality initialized in App() -> uiToggleClass() -->
                            <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="fa fa-navicon"></i>
                            </button>
                        </li>
                    </ul>
                    <!-- END Header Navigation Right -->

                    <!-- Main Header Navigation -->
                    <ul class="js-nav-main-header nav-main-header pull-right">
                        <li class="text-right hidden-md hidden-lg">
                            <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
                            <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="fa fa-times"></i>
                            </button>
                        </li>
                        <li>
                            <a class="active" href="frontend_home_header_nav.html">Home</a>
                        </li>

                        
                        <li>
                            <a href="frontend_features.html">About</a>
                        </li>                        
                        <li>
                            <a href="frontend_features.html">News</a>
                        </li>
                        <li>
                            <a href="frontend_pricing.html">Faq</a>
                        </li>
                        <li>
                            <a href="frontend_contact.html">Contact</a>
                        </li>
                        
                         <li>
                            <a class="nav-submenu" href="javascript:void(0)">Account</a>
                            <ul>
                                <li>
                                    <a href="frontend_team.html">Register</a>
                                </li>
                                <li>
                                    <a href="frontend_support.html">Login</a>
                                </li>

                            </ul>
                        </li>      
                        
                    </ul>
                    <!-- END Main Header Navigation -->

                    <!-- Header Navigation Left -->
                    <ul class="nav-header pull-left">
                        <li class="header-content">
                            <a class="h5" href="index.html">
                                <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-white">ne</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END Header Navigation Left -->
                </div>
            </header>
            <!-- END Header -->


            
            
            
            
            <!-- Main Container -->
          @yield('content')   
           <!-- END Main Container --> 
            
            
            
            
            
            
            
            
            
            

            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                <div class="content content-boxed">
                    <!-- Footer Navigation -->
                    <div class="row push-30-t items-push-2x">
                        <div class="col-sm-4">
                            <h3 class="h5 font-w600 text-uppercase push-20">Company</h3>
                            <ul class="list list-simple-mini font-s13">
                                <li>
                                    <a class="font-w600" href="frontend_home.html">Home</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="frontend_features.html">Features</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="frontend_pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="frontend_about.html">About Us</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="frontend_contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="h5 font-w600 text-uppercase push-20">Support</h3>
                            <ul class="list list-simple-mini font-s13">
                                <li>
                                    <a class="font-w600" href="frontend_login.html">Log In</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="frontend_signup.html">Sign Up</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="frontend_support.html">Support Center</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="javascript:void(0)">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="font-w600" href="javascript:void(0)">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="h5 font-w600 text-uppercase push-20">Get In Touch</h3>
                            <div class="font-s13 push">
                                <strong>Company, Inc.</strong><br>
                                980 Folsom Ave, Suite 1230<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </div>
                            <div class="font-s13">
                                <i class="si si-envelope-open"></i> company@example.com
                            </div>
                        </div>
                    </div>
                    <!-- END Footer Navigation -->

                    <!-- Copyright Info -->
                    <div class="font-s12 push-20 clearfix">
                        <hr class="remove-margin-t">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.1</a> &copy; <span class="js-year-copy"></span>
                        </div>
                    </div>
                    <!-- END Copyright Info -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Appear + CountTo plugins)
                App.initHelpers(['appear', 'appear-countTo']);
            });
        </script>
    </body>
</html>
