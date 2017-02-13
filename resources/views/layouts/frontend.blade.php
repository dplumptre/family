@inject('request', 'Illuminate\Http\Request')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Welcome to Family Life Club:::The Life changing charity working for the actualization of Global Prosperity')</title>
    <meta name="description"
          content="Family Life Club is a Life changing charity disposed with the duties of making Global Prosperity an actualization starting from Africa">
    <meta name="author" content="@darkov">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


    <link rel="apple-touch-icon" sizes="57x57" href="/front/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/front/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/front/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/front/img/favicon/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="/front/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/front/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/front/img/favicon/manifest.json">
    <link rel="mask-icon" href="/front/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="/front/css/style.css" rel="stylesheet">
</head>
<body>

@include('modals.login')
@include('modals.register')
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="/assets/img/logo.png" alt="Family Life Club Logo" style="width:200px;">
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home{{current_link('home', $request->path())}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About{{current_link('about', $request->path())}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News{{current_link('news', $request->path())}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav pull-right">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#registerModal">Register</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="first-slide"
                 src="/front/img/humanity.jpg"
                 alt="First slide">

            <div class="container">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1>Global Prosperity Facilitator.</h1>

                    <p>Amongst foremost leaders in the actualization of global prosperity with a common vision to impact
                        and positively transform the lives of poor Nigerians by the year 2020</p>

                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Join us today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="first-slide"
                 src="/front/img/cooperation.jpg"
                 alt="First slide">

            <div class="container">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1>UN Backed Charity Works</h1>

                    <p>The objectives of International Economic & Social Co-orperation and Development being promoted
                        by UN Economic council remains the basis of our organization.</p>

                    <p><a class="btn btn-lg btn-primary" href="#" role="button">read About Us.</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide"
                 src="/front/img/mother-child.jpg"
                 alt="Second slide">

            <div class="container">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Social Philanthropic Goals.</h1>

                    <p>The essential nature and purpose of humanity, culture and civilization rests on the love
                        of what it is to be human. We love humanity hence our promition of Humanity</p>

                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide"
                 src="/front/img/nature.jpg"
                 alt="Third slide">

            <div class="container">
                <div class="carousel-caption d-none d-md-block text-right">
                    <h1>Charity &amp; Humanitarian Assistance.</h1>

                    <p>Charity and Humanitarian works are funded by voluntary contributions from donations.
                        A large share of our expenditure addresses our core mission of Socio-Econimic Development and
                        empowerment</p>

                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <div class="icon">
                <i class="fa fa-suitcase fa-5x h-icons" aria-hidden="true" style=""></i>
            </div>

            <h2>About Us</h2>

            <p>You can improve your lifestyle and inwardly increasing your lifespan by choosing to join our organization
                which can act as a cover for you and your family's charity needs.</p>

            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <div class="icon">
                <i class="fa fa-heartbeat fa-5x" aria-hidden="true" style=""></i>
            </div>

            <h2>Ideology</h2>

            <p>Our Idealogy comes from the UN Economic developmental objectives, which pitches Humanity and selflessness
                as a tool to develop our life and lives of people around us</p>

            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <div class="icon">
                <i class="fa fa-suitcase fa-5x" aria-hidden="true" style=""></i>
            </div>
            <h2>Charity</h2>

            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula

                fermentum massa justo sit amet risus.</p>

            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">We are Charity. <span
                        class="text-muted">But there's chance for a profit.</span></h2>

            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 push-md-5">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span>
            </h2>

            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>

            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <dl>
                        <dt>
                        <h4>Company</h4></dt>
                        <dd><a href="#">Link Here</a></dd>
                        <dd><a href="#">Link Here</a></dd>
                        <dd><a href="#">Link Here</a></dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>
                        <h4>Support</h4></dt>
                        <dd><a href="#">Link Here</a></dd>
                        <dd><a href="#">Link Here</a></dd>
                        <dd><a href="#">Link Here</a></dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>
                        <h4>Get in Touch</h4></dt>
                        <dd><i class="fa fa-envelope-open"></i> info@familylifeclub.com</dd>
                        <dd><a href="#">Link Here</a></dd>
                        <dd><a href="#">Link Here</a></dd>
                    </dl>
                </div>
            </div>

            <hr>
            <p class="float-right"><a href="#">Back to top</a></p>

            <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </div>
    </footer>

</div><!-- /.container -->


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="/front/js/holder.min.js"></script>
<script src="/front/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
