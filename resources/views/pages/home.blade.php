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
          <img src="{{ URL::asset('assets/img/videos/banner.png')}}" class="img-responsive" width="100%" height="10%"/>
      </section>
        

        <div class="bg-white">
            <section class="content content-boxed">
                <!-- Section Content -->

                <div class="row items-push-3x nice-copy">
                    <div class="col-sm-6">
                        <div class="text-center push-30">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-book-open"></i>
                                    </span>
                        </div>
                        <h3 class="h5 font-w600 text-uppercase text-center push-10">About Us</h3>

                        <p>We at BUF have dedicated our time as a team of zealous and dedicated individuals, that wish to create wealth 
                            and bring to existence a  ...<a href="{{ URL::asset('about') }}">read more</a></p>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center push">
                                    <span class="item item-2x item-circle border">
                                        <i class="si si-support"></i>
                                    </span>
                        </div>
                        <h3 class="h5 font-w600 text-uppercase text-center push-10">Support</h3>

                        <p>Please feel free to write an email to us on whatever issues you may encounter , our support system works 24/7 support@bufwealth.com
</p>
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <div class="bg-primary-dark-op">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="push-20-t push-20 text-center">
                    <h3 class="h4 push-20 animated fadeIn text-white-op" data-toggle="appear">Start earning today, go ahead and join!</h3>
                    <a class="btn btn-rounded btn-noborder btn-lg btn-success animated bounceIn" data-toggle="appear" data-class="animated bounceIn" href="{{ URL::asset('/register')}}">Get Started Today</a>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        
        



        <div class="bg-white">
            <section class="content content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class=" row push-20-t push-20">
                    <div class="col-sm-6 col-lg-6 animated fadeInUp" data-toggle="appear" data-offset="50" data-class="animated fadeInUp">
                        <!-- Developer Plan -->
                        <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-header">
                                <h3 class="block-title">BRONZE</h3>
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
                                        <span class="text-success ">Active</span>
                            </div>
                        </a>
                        <!-- END Developer Plan -->
                    </div>
<!--                    <div class="col-sm-6 col-lg-3 animated fadeInUp" data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
                         Startup Plan 
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
                         END Startup Plan 
                    </div>-->
<!--                    <div class="col-sm-6 col-lg-3 animated fadeInUp" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
                         Business Plan 
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
                         END Business Plan 
                    </div>-->
                    <div class="col-sm-6 col-lg-6 animated fadeInUp" data-toggle="appear" data-offset="50" data-timeout="600" data-class="animated fadeInUp">
                        <!-- VIP Plan -->
                        <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-header">
                                <h3 class="block-title">SILVER</h3>
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

        
        
        
        
               <div class="bg-image" style="background-image: url('assets/img/various/hero1.jpg');">
            <div class="bg-gray-lighter">
                <section class="content content-boxed overflow-hidden">
                    <!-- Section Content -->
                    <div class="row items-push push-20-t push-20 text-center">
                        <div class="col-sm-4">
                            <div class="h1 text-gray push-5" data-toggle="countTo" data-to="{{ $allusers }}" data-after="+">{{ $allusers }}+</div>
                            <div class="font-w600 text-uppercase text-gray ">Accounts Today</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="h1 text-gray  push-5"  data-to="{{ $latestusers }}" data-after="">{{ $latestusers }}</div>
                            <div class="font-w600 text-uppercase text-gray ">Newest Member</div>
                        </div>
                        <div class="col-sm-4">
                        <?php
                        $sum = 0;
                        
                        if( !empty($amount_paid )){
                        foreach($amount_paid as $key=>$value)
                        {
                        $sum+= $value->amount;
                        }}
                        ?>
                        <div class="h1 text-gray  push-5"  data-to="{{ number_format($sum) }}" data-after=""> {{ number_format($sum) }}</div>
                        <div class="font-w600 text-uppercase text-gray ">( &#8358; ) Amount Received By Users</div>      
                        </div>
                    </div>
                    <!-- END Section Content -->
                </section>
            </div>
        </div> 
        
        
        
        
        
        <div class="bg-image" style="background-image: url('assets/img/photos/photo3@2x.jpg');">
            <div class="bg-primary-dark-op">
                <section class="content content-full content-boxed">
                    <!-- Section Content -->
                    <div class="row items-push-2x push-50-t text-center">
                        <div class="col-sm-4 animated fadeIn" data-toggle="appear" data-offset="-150">
                            <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/Jennifer_Jerome_tn.jpg" alt="">
                            <div class="text-warning push-10-t push-15">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="h4 text-white-op push-5">Buf wealth is a great platform. It affords every participants a good opportunity at 
generating good income online. A trial will convince you!</div>
                            <div class="h6 text-gray">- Omolade Kolajo</div>
                        </div>
                        <div class="col-sm-4 animated fadeIn" data-toggle="appear" data-offset="-150" data-timeout="150">
                            <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/ww.jpeg" alt="">
                            <div class="text-warning push-10-t push-15">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="h4 text-white-op push-5">Buf wealth is one of the best platforms i have been part of. with all the help from other participants,
i have been able to benefit immensely from the available package!</div>
                            <div class="h6 text-gray">- Dapo Alakija</div>
                        </div>
                        <div class="col-sm-4 animated fadeIn" data-toggle="appear" data-offset="-150" data-timeout="300">
                            <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/www.jpeg" alt="">
                            <div class="text-warning push-10-t push-15">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="h4 text-white-op push-5">I  highly recommend Bufwealth for anyone trying to make extra income</div>
                            <div class="h6 text-gray">- Toyosi Salako</div>
                        </div>
                    </div>
                    <!-- END Section Content -->
                </section>
            </div>
        </div>

    </main>

@endsection