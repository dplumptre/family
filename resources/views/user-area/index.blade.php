
          @extends('layouts.layout_user')

@section('content')      
            

            
 <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                        <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Dashboard 
                            </h1>
                        </div>
                    
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Unq Visitors</div>
                                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="480950"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Prd Sales</div>
                                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="495"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Earnings</div>
                                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="148000" data-before="$"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Average Sale</div>
                                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="299" data-before="$"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Stats -->

                    <!-- Dashboard Charts -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block block-rounded block-opt-refresh-icon8">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Earnings in $</h3>
                                </div>
                            
                                <div class="block-content text-center">
                             
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-6">
          
                         <!-- News -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"> Updates</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-timeline pull-t">
                                        <!-- Twitter Notification -->
                                        <li>
                                            <div class="list-timeline-time">12 hrs ago</div>
                                            <i class="fa fa-twitter list-timeline-icon bg-info"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 1150 Followers</p>
                                                <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                                            </div>
                                        </li>
                                        <!-- END Twitter Notification -->

                                        <!-- Generic Notification -->
                                        <li>
                                            <div class="list-timeline-time">4 hrs ago</div>
                                            <i class="fa fa-briefcase list-timeline-icon bg-city"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 3 New Products were added!</p>
                                                <p class="font-s13">Congratulations!</p>
                                            </div>
                                        </li>
                                        <!-- END Generic Notification -->

                                        <!-- System Notification -->
                                        <li>
                                            <div class="list-timeline-time">1 day ago</div>
                                            <i class="fa fa-check list-timeline-icon bg-success"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Database backup completed!</p>
                                                <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->

                                        <!-- Facebook Notification -->
                                        <li>
                                            <div class="list-timeline-time">3 hrs ago</div>
                                            <i class="fa fa-facebook list-timeline-icon bg-default"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 290 Page Likes</p>
                                                <p class="font-s13">This is great, keep it up!</p>
                                            </div>
                                        </li>
                                        <!-- END Facebook Notification -->

                                        <!-- Social Notification -->
                                        <li>
                                            <div class="list-timeline-time">2 days ago</div>
                                            <i class="fa fa-user-plus list-timeline-icon bg-modern"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 3 Friend Requests</p>
                                                <ul class="nav-users push-10-t push">
                                                    <li>
                                                        <a href="base_pages_profile.html">
                                                            <img class="img-avatar" src="assets/img/avatars/avatar11.jpg" alt="">
                                                            <i class="fa fa-circle text-success"></i> Ethan Howard
                                                            <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="base_pages_profile.html">
                                                            <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                                            <i class="fa fa-circle text-warning"></i> Lisa Gordon
                                                            <div class="font-w400 text-muted"><small>Photographer</small></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="base_pages_profile.html">
                                                            <img class="img-avatar" src="assets/img/avatars/avatar16.jpg" alt="">
                                                            <i class="fa fa-circle text-danger"></i> Walter Fox
                                                            <div class="font-w400 text-muted"><small>UI Designer</small></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- END Social Notification -->

                                        <!-- System Notification -->
                                        <li class="push-5">
                                            <div class="list-timeline-time">1 week ago</div>
                                            <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">System updated to v2.02</p>
                                                <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->
                                    </ul>
                                </div>
                            </div>
                            <!-- END News -->      
                            
                        </div>
                    </div>
                    <!-- END Dashboard Charts -->

                   
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
    
            
                @endsection
            
            
            
            