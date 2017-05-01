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
                        <small><i class="si si-calendar"></i> All Users</small>
                        </div>
                        <div class="font-s12 font-w700"></div>
                        <a class="h2 font-w300 text-primary" ></a>{{ $allusers }}
                        </div>
                        </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                        <div class="block block-rounded">
                        <div class="block-content block-content-full">
                        <div class="text-muted">
                        <small><i class="si si-calendar"></i> Date</small>
                        </div>
                        <div class="font-s12 font-w700"></div>
                        <a class="h2 font-w300 text-primary"></a>{{ date(" Y / m / d") }}
                        </div>
                        </div>
                </div>      

                <div class="col-xs-12 col-sm-6">
                        <div class="block block-rounded">
                        <div class="block-content block-content-full" style="padding: 25px 0px;">
                        <div class="text-muted">

                        </div>
                        <div class="font-s12 font-w700"></div>
                        <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo"
                        data-to="148000" data-before="$"></a>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- responsive -->
                        <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-6084522876241496"
                        data-ad-slot="2088421046"
                        data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
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
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                        data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"> Status </h3>
                    </div>

                    <div class="block-content text-center">
                        <div class="table-responsive">
                            <table class="table-vcenter table  table-striped  js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                           <th class="text-center" style="width: 10%;"> s/n</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Package Chosen</th>
                                         <th class="text-center">&#8358; Amount</th>                 
                                        <th class="text-center" style="width: 10%;">Status</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    
                         @if($payer)  
                         @foreach($payer as $key => $p)
                        
                        <tr>
                        <td class="text-center">{{$key +1}}</td>
                        <td class="text-center"> {{ $p->created_at }}</td>
                        <td class="text-center"> {{ $p->packages->name }}</td>
                        <td class="text-center">{{ number_format($p->packages->paying_amount) }}</td>
                        <td class="text-center">   <span class="label label-danger">{{ $arr[$p->status] }} <!--Pending / completed --></span>   </td>
                        </tr>
                            @endforeach
                            @endif
                            



                                </tbody>
                            </table>
                        </div></div>
                </div>
            </div>


            <div class="col-md-6">

                <!-- News -->
                <div class="block">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                        data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"> Latest News</h3>
                    </div>
                    <div class="block-content">
                        <ul class="list list-timeline pull-t">


                            <!-- System Notification -->

                            
                            
                            
                            @if($news)  
                            @foreach($news as $key => $p)
                            <li>
                                <div class="list-timeline-time">{{ $p->created_at }}</div>
                                <i class="fa fa-check list-timeline-icon bg-success"></i>

                                <div class="list-timeline-content">
                                    <p class="font-w600">{{ $p->title }}!</p>
                                    <p >{{ substr( strtolower($p->body),0,200) }}</p>

                                    <p class="font-s13">Read <a href="{{url('user-area/view-news/'.$p->id )}}"> more</a>.</p>
                                </div>
                            </li>
                            @endforeach
                            @endif          
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           
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
            
            
            
            