@extends('layouts.layout_user')

@section('content')


        <!-- Main Container -->
<main id="main-container">
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Dashboard admin
                </h1>
            </div>

        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-narrow">
       

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
                        <h3 class="block-title">Payment Received</h3>
                    </div>

                        <div class="block-content ">
                                                               <table class="table-responsive table table-bordered table-striped  js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                           <th class="text-center" style="width: 10%;"> s/n</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Amount</th> 
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                   
                        @if($payment)  
                        <?php
                        $sum =0;
                        ?>
                        @foreach($payment as $key => $p)
                        <tr>
                        <td class="text-center"> {{$key +1}}</td>
                        <td class="text-center"> {{ $p->created_at }}</td>
                        <td class="text-center"> &#X20A6 {{ number_format($p->amount) }}</td>
                        </tr>
                        <?php
                           $sum += $p->amount;
                        ?>
                        @endforeach
                                <p style="font-weight: bold"> Total: &#X20A6 {{ number_format($sum) }} </p>
                        
                        @endif
                            



                                </tbody>
                            </table> 

                        </div>
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
                        <h3 class="block-title">Failed Payers</h3>
                    </div>
                    <div class="block-content">
                                           <table class="table-responsive table table-bordered table-striped  js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                           <th class="text-center" style="width: 10%;"> s/n</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">USER ID</th> 
                                        <th class="text-center">Username</th> 
                                        <th class="text-center">Email</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                   
                        @if($fp)  
                        @foreach($fp as $key => $p)
                        <tr>
                        <td class="text-center">{{$key +1}}</td>
                        <td class="text-center"> {{ $p->created_at }}</td>                        
                        <td class="text-center"> {{  $p->user->id }}</td>
                        <td class="text-center"> {{ $p->user->username }}</td>
                        <td class="text-center">  {{ $p->user->email }}  
                        </td>
                        </tr>
                        @endforeach
                        @endif
                            



                                </tbody>
                            </table>
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
            
            
            
            