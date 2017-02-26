@extends('layouts.layout')

@section('content')

    <main id="main-container">
        <div>
            <div class="bg-primary-dark-op">
                <section class="content content-full content-boxed overflow-hidden">
                    <!-- Section Content -->
              
                    <div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
                        <div class="col-sm-8 col-sm-offset-2">

                        </div>
                        <!-- END Section Content -->
                    </div>
                </section>
            </div>
        </div>
        
        
      <section class="">    
          <img src="{{ URL::asset('assets/img/videos/hero_tech_small.jpg')}}" class="img-responsive" width="100%" height="10%"/>
      </section>
        

        <div class="bg-white">
            <section class="content content-boxed">
                <!-- Section Content -->

                <div class="row items-push-3x nice-copy">
                    <div class="col-sm-4">
                        <div class="text-center push-30">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-wrench"></i>
                                    </span>
                        </div>
                        <h3 class="h5 font-w600 text-uppercase text-center push-10">Components</h3>

                        <p>OneUI comes packed with so many unique components. Carefully picked and integrated to enhance
                            and enrich your project with great functionality. Use them anywhere you want.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-support"></i>
                                    </span>
                        </div>
                        <h3 class="h5 font-w600 text-uppercase text-center push-10">Support</h3>

                        <p>By purchasing a license of OneUI, you are eligible to email support. Should you get stuck
                            somewhere or come accross any issue, don’t worry because I am here to provide
                            assistance.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-heart"></i>
                                    </span>
                        </div>
                        <h3 class="h5 font-w600 text-uppercase text-center push-10">Crafted With Love</h3>

                        <p>I love what I do. I pay extra attention to small details and always try delivering the best I
                            can with each project. My goal is to create a great product for you, that will make your
                            life easier.</p>
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>

        <div class="bg-image" style="background-image: url('assets/img/various/hero1.jpg');">
            <div class="bg-primary-dark-op">
                <section class="content content-boxed overflow-hidden">
                    <!-- Section Content -->
                    <div class="row items-push push-20-t push-20 text-center">
                        <div class="col-sm-4">
                            <div class="h1 text-white push-5" data-toggle="countTo" data-to="15760" data-after="+">15760+</div>
                            <div class="font-w600 text-uppercase text-white-op">Accounts Today</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="h1 text-white push-5" data-toggle="countTo" data-to="3890" data-after="+">3890+</div>
                            <div class="font-w600 text-uppercase text-white-op">Products</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="h1 text-white push-5" data-toggle="countTo" data-to="890" data-after="+">890+</div>
                            <div class="font-w600 text-uppercase text-white-op">Web Apps</div>
                        </div>
                    </div>
                    <!-- END Section Content -->
                </section>
            </div>
        </div>


        <div class="bg-white">
            <section class="content content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class="row push-20-t push-20">
                    <div class="col-sm-6 col-lg-3 animated fadeInUp" data-toggle="appear" data-offset="50" data-class="animated fadeInUp">
                        <!-- Developer Plan -->
                        <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-header">
                                <h3 class="block-title">BRONZE</h3>
                            </div>
                            <div class="block-content block-content-full bg-gray-lighter">
                                <div class="h1 font-w700 push-10">&#X20A6 5,000</div>
                            </div>
                            <div class="block-content">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                    <tr>
                                        <td><strong>2:1</strong> MATRIX</td>
                                    </tr>
                                    <tr>
                                        <td><strong></strong> AUTO ASSIGN</td>
                                    </tr>
                                    <tr>
                                        <td><strong>&#X20A6 10,000</strong> <br />RETURN INVESTMENT</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                                        <span class="text-success ">ACTIVE</span>
                            </div>
                        </a>
                        <!-- END Developer Plan -->
                    </div>
                    <div class="col-sm-6 col-lg-3 animated fadeInUp" data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
                        <!-- Startup Plan -->
                        <a class="block block-bordered block-link-hover3 text-center" href="frontend_signup.html">
                            <div class="block-header">
                                <h3 class="block-title text-primary">SILVER</h3>
                            </div>
                           <div class="block-content block-content-full bg-gray-lighter">
                                <div class="h1 font-w700 push-10">&#X20A6 10,000</div>
                            </div>
                            <div class="block-content">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                    <tr>
                                        <td><strong>2:1</strong> MATRIX</td>
                                    </tr>
                                    <tr>
                                        <td><strong></strong> AUTO ASSIGN</td>
                                    </tr>
                                    <tr>
                                        <td><strong>&#X20A6 20,000</strong> <br />RETURN INVESTMENT</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                                   <span class="text-success ">ACTIVE</span>
                                   
                            </div>
                        </a>
                        <!-- END Startup Plan -->
                    </div>
                    <div class="col-sm-6 col-lg-3 animated fadeInUp" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
                        <!-- Business Plan -->
                        <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-header">
                                <h3 class="block-title">GOLD</h3>
                            </div>
                            <div class="block-content block-content-full bg-gray-lighter">
                                <div class="h1 font-w700 push-10">&#X20A6 20,000</div>
                            </div>
                            <div class="block-content">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                    <tr>
                                        <td><strong>2:1</strong> MATRIX</td>
                                    </tr>
                                    <tr>
                                        <td><strong></strong> AUTO ASSIGN</td>
                                    </tr>
                                    <tr>
                                        <td><strong>&#X20A6 40,000</strong> <br />RETURN INVESTMENT</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                                       <span class="text-success ">ACTIVE</span>
                            </div>
                        </a>
                        <!-- END Business Plan -->
                    </div>
                    <div class="col-sm-6 col-lg-3 animated fadeInUp" data-toggle="appear" data-offset="50" data-timeout="600" data-class="animated fadeInUp">
                        <!-- VIP Plan -->
                        <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-header">
                                <h3 class="block-title">DIAMOND</h3>
                            </div>
                                                   <div class="block-content block-content-full bg-gray-lighter">
                                <div class="h1 font-w700 push-10">&#X20A6 50,000</div>
                            </div>
                            <div class="block-content">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                    <tr>
                                        <td><strong>2:1</strong> MATRIX</td>
                                    </tr>
                                    <tr>
                                        <td><strong></strong> AUTO ASSIGN</td>
                                    </tr>
                                    <tr>
                                        <td><strong>&#X20A6 100,000</strong> <br />RETURN INVESTMENT</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                             <span class="text-success ">loading...</span>
                            </div>
                        </a>
                        <!-- END VIP Plan -->
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>

        <div class="bg-image" style="background-image: url('assets/img/photos/photo3@2x.jpg');">
            <div class="bg-primary-dark-op">
                <section class="content content-full content-boxed">
                    <!-- Section Content -->
                    <div class="row items-push-2x push-50-t text-center">
                        <div class="col-sm-4 animated fadeIn" data-toggle="appear" data-offset="-150">
                            <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar1.jpg" alt="">
                            <div class="text-warning push-10-t push-15">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="h4 text-white-op push-5">Professional design in a reliable UI framework! A pure joy to work with!</div>
                            <div class="h6 text-gray">- Ann Parker</div>
                        </div>
                        <div class="col-sm-4 animated fadeIn" data-toggle="appear" data-offset="-150" data-timeout="150">
                            <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar11.jpg" alt="">
                            <div class="text-warning push-10-t push-15">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="h4 text-white-op push-5">Awesome support! Our Web Application looks and works great!</div>
                            <div class="h6 text-gray">- Scott Ruiz</div>
                        </div>
                        <div class="col-sm-4 animated fadeIn" data-toggle="appear" data-offset="-150" data-timeout="300">
                            <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar1.jpg" alt="">
                            <div class="text-warning push-10-t push-15">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="h4 text-white-op push-5">Incredible value for money, highly recommended!</div>
                            <div class="h6 text-gray">- Megan Dean</div>
                        </div>
                    </div>
                    <!-- END Section Content -->
                </section>
            </div>
        </div>
        <div class="bg-gray-lighter">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="push-20-t push-20 text-center">
                    <h3 class="h4 push-20 animated fadeIn" data-toggle="appear">Clean design in one powerful package. It was made for your next awesome project.</h3>
                    <a class="btn btn-rounded btn-noborder btn-lg btn-success animated bounceIn" data-toggle="appear" data-class="animated bounceIn" href="frontend_pricing.html">Get Started Today</a>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
    </main>

@endsection