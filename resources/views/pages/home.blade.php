@extends('layouts.layout')

@section('content')

    <main id="main-container">
        <div>
            <div class="bg-primary-dark-op">
                <section class="content content-full content-boxed overflow-hidden">
                </section>
            </div>
        </div>

        <div class="bg-white">
            <section class="content">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="http://placehold.it/1200x400/cccccc/ffffff">

                            <div class="carousel-caption">
                                <h3>Headline</h3>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. <a
                                            href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank"
                                            class="label label-danger">Bootstrap 3 - Carousel Collection</a>
                                </p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="http://placehold.it/1200x400/999999/cccccc">

                            <div class="carousel-caption">
                                <h3>Headline</h3>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. <a
                                            href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank"
                                            class="label label-danger">Bootstrap 3 - Carousel Collection</a>
                                </p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="http://placehold.it/1200x400/dddddd/333333">

                            <div class="carousel-caption">
                                <h3>Headline</h3>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. <a
                                            href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank"
                                            class="label label-danger">Bootstrap 3 - Carousel Collection</a>
                                </p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="http://placehold.it/1200x400/999999/cccccc">

                            <div class="carousel-caption">
                                <h3>Headline</h3>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua.</p>
                            </div>
                        </div><!-- End Item -->

                    </div><!-- End Carousel Inner -->


                    <ul class="nav nav-pills nav-justified">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About
                                <small>Lorem ipsum dolor sit</small>
                            </a></li>
                        <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects
                                <small>Lorem ipsum dolor sit</small>
                            </a></li>
                        <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio
                                <small>Lorem ipsum dolor sit</small>
                            </a></li>
                        <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services
                                <small>Lorem ipsum dolor sit</small>
                            </a></li>
                    </ul>


                </div><!-- End Carousel -->
            </section>
        </div>
        <div class="bg-white">
            <section class="content content-full">
                <br><br><br><br>
            </section>
        </div>
    </main>

@endsection