@extends('layouts.layout_user')
@inject('carbon', 'Carbon\Carbon')

@section('content')
<?php
$dateElements=[];
?>

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        
        
        
        
        
        
        
        
        
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                    
<div style="margin: 15px 0px; padding: 10px 0px;text-align: center;background: #efefef">
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
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        Outgoing Money
                    </h1>
                </div>
                <!--   <div class="col-sm-5 text-right hidden-xs">
                       <ol class="breadcrumb push-10-t">
                           <li>Tables</li>
                           <li><a class="link-effect" href="">DataTables</a></li>
                       </ol>
                   </div> -->
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
                    <!-- Dynamic Table Full Pagination -->
                    <div class="">
                        <div class="block-header">
                          <!--  <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3> -->
                        </div>
                        <div id="holla"></div>
                <div class="table-responsive">
                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/base_tables_datatables.js -->
                    <table class="text-uppercase table-responsive table table-bordered table-striped  js-dataTable-full-pagination">
                        <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>Receiver</th>
                            <th class="text-center">Payment Details</th>
                            <th class="text-center">(N)Amount</th>
                            <th class="text-center">Mobile</th>
                            <th class="text-center">Upload Attachment</th>
                            <th class="text-center" style="width: 15%;">Time Left</th>
                            <th class="text-center" style="width: 10%;">Actions</th>
                            <th class="text-center" style="width: 10%;">Confirmation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($getPair !== NULL)
                            @foreach($getPair as $key => $p)
                                <?php
                                $r = \App\Models\Receiver::find($p->receiver_id);
                                $user = \App\Models\User::with('userDetail')->where('id', $r->user_id)->get();
                                ?> @foreach($user as $keyuser => $u)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td class="font-w600">{{ $u->userDetail->firstname }}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="{{'#mymodal1'.$r->user_id }}">Payment Details
                                            </button>
                                        </td>
                                        <td class="text-center">{{ number_format($p->amount) }}</td>
                                        <td class="text-center">{{ $u->userDetail->phone }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('upload',['id' => $p->id]) }}">upload/edit</a>

                                            @if($p->image !== 'example.jpg')
                                                <a id="single_image"
                                                   href="{{ URL::asset('assets/images/pics/'.$p->image) }}" title="">
                                                    <img alt='' style="width: 90px;height: 30px"
                                                         class="img-thumbnail img-responsive img-customer"
                                                         border='0'
                                                         src="{{ URL::asset('assets/images/thumb/'.$p->image) }}"/>
                                                </a>
                                            @endif
                                        </td>
                                        <td><strong>
                                                {{--{{ $p->elapse_time }}--}}
                                                @if ( $p->elapse_time > $carbon->now()->format('Y-m-d H:i:s') )
                                                    @php
                                                        $dateElements[] = ['div'=>"clockdiv{$loop->parent->iteration}", 'elapse_time'=>$p->elapse_time];
                                                    @endphp
                                                    <div id="clockdiv{{$loop->parent->iteration}}">
                                                        <span class="label label-info">Days: <span class="days"></span></span>
                                                        <span class="label label-info">Hrs: <span class="hours"></span></span>
                                                        <span class="label label-info">Mins: <span class="minutes"></span></span>
                                                        <span class="label label-info">Secs: <span class="seconds"></span></span>
                                                    </div>
                                                @else
                                                    <div>
                                                        <span class="label label-danger">Time expired</span>
                                                    </div>
                                                @endif
                                            </strong>
                                    </td>
        <td class="text-center">
        @if ( $p->elapse_time > $carbon->now()->format('Y-m-d H:i:s') )
            <form  action="{{  secure_url('user-area/outgoing') }}" method="POST">{{ csrf_field() }}
            <input type="hidden" value="<?php echo $p->id?>" name="pair_id"/><input name="payer_id" type="hidden" value="<?php echo $p->payer_id?>" />
            <button type="submit" onclick="return confirm('Are you sure ?');" class="btn btn-danger btn-sm">I,ve Paid
            @if($p->payer_status == 2)
            <span>  <i class="fa fa-check"></i></span>
            @endif
            </button> 
            </form> 
        @else
            <div>
            <span class="label label-warning">completed</span>
            </div>
        @endif                                 
        </td>
                <td class="text-center"> 
                  
                    @if ( $p->receiver_status == 1 ) 
                    <div><span class="label label-danger"><i class="fa fa-close"></i></span></div>
                    @else
                    <div><span class="label label-success"><i class="fa fa-check"></i></span></div>
                    @endif                
                
                
                
                </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>


                <!--                   modal begins     -->
                @if($getPair !== NULL)
                    @foreach($getPair as $key => $p)
                        <?php     $r = \App\Models\Receiver::find($p->receiver_id); ?>
                        <div class="modal fade" id="{{ 'mymodal1'.$r->user_id }}" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Payment Details</h4>
                                    </div>
                                    <div class="modal-body"> <?php    $user = \App\Models\User::with('userDetail')->where('id', $r->user_id)->first(); ?>
                                        <table class="text-uppercase table table-responsive table-striped">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><h5>Bank Name</h5></td>
                                                <td>{{ $user->userDetail->bank_name }}</td>
                                            </tr>
                                            <tr>
                                                <td><h5>Account Name</h5></td>
                                                <td> {{ $user->userDetail->account_name  }}</td>
                                            </tr>
                                            <tr>
                                                <td><h5>Account Number</h5></td>
                                                <td>{{ $user->userDetail->account_number }}</td>
                                            </tr>
                                            <tr>
                                                <td><h5>Bank Branch</h5></td>
                                                <td>{{ $user->userDetail->bank_branch }}</td>
                                            </tr>
                                            <tr>
                                                <td><h5>Account Type</h5></td>
                                                <td>{{ $user->userDetail->account_type }}   </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif
            <!--                     modal end   -->
            </div>
            <!-- END Dynamic Table Full Pagination -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection

@section('scripts')
<script src="/js/clock-countdown.js" type="text/javascript"></script>
<script>
@if(count($dateElements)>0)
@foreach($dateElements as $el)
initializeClock('{{$el['div']}}', '{{$el['elapse_time']}}', '{{$carbon->now()}}')
@endforeach
@endif
</script>
@endsection