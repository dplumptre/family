
          @extends('layouts.layout_user')

@section('content')      
            

            

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
                                Incoming Money 
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
                        <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table-responsive table table-bordered table-striped  js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Payment Date</th>
                                         <th class="text-center">Donor Claims</th>
                                         <th class="text-center">Receipt</th>
                                        <th class="text-center" style="width: 15%;">Status</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($getPair !== NULL)
                                    @foreach($getPair as $key => $p)        
                                    <?php  $r =\App\Models\Payer::find( $p->payer_id);  ?>
                                    <tr>
                                    <td class="text-center"> {{ $key + 1 }} </td>
                                    <td class="text-center">{{ number_format($p->amount) }}</td>
                                    <td class="text-center"> {{ $p->elapse_time }}</td>
                                    
                                    
                                    <td class="text-center">
                                         @if($p->payer_status  == 1)
                                         <span class="label label-warning">Pending payment</span>
                                         @else 
                                         <span class="label label-success">Payment has been made</span>
                                         @endif 
                                    </td>                                 
                                    
                                   
                                    <td class="text-center">
                                    @if($p->image !== 'example.jpg')
                                    <a id="single_image"  href="{{ URL::asset('assets/images/pics/'.$p->image) }}" title="" >  
                                    <img alt='' style="width: 90px;height: 30px" class="img-thumbnail img-responsive img-customer" 
                                    border='0' src="{{ URL::asset('assets/images/thumb/'.$p->image) }}" />
                                    </a> 
                                    @endif    
                                    </td>
                                    <td class="text-center"><form  action="{{  secure_url('user-area/incoming') }}" method="POST">{{ csrf_field() }} 
                                <input type="hidden" value="<?php echo $p->id?>" name="pair_id"/>
                                <input name="r_id" type="hidden" value="<?php echo $p->receiver_status ?>" />
                            <button type="submit" onclick="return confirm('Are you sure ?');" class="btn btn-danger btn-sm">Confirm
                                @if($p->receiver_status == 2)
                                <span>  <i class="fa fa-check"></i></span>
                                @endif
                            </button> 
                            </form>                                         
                                 </td>   
                                    
                                    <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="{{'#mymodal1'.$r->user_id }}">Donor</button>
                                    </td>
                                    </tr>   
                                    @endforeach          
                                    @endif 
                                </tbody>
                            </table>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        


                <!--          MODAL BEGINS              -->                     
                                @if($getPair !== NULL)  
                                @foreach($getPair as $key => $p)        
                                <?php     $r =\App\Models\Payer::find( $p->payer_id); ?>
                <div class="modal fade" id="{{ 'mymodal1'.$r->user_id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Donor's Details</h4>
                      </div>
                      <div class="modal-body">
                                <?php    $u = \App\Models\User::with('userDetail')->where('id',$r->user_id)->first(); ?>
                         <table class="table table-responsive table-striped">
                              <thead>
                                  <tr>
                                      <th></th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><h5>Full Name</h5></td>
                                      <td>{{ strToUpper($u->userDetail->firstname) }} {{ strToUpper($u->userDetail->lastname)  }}</td>
                                  </tr>
                                  <tr>
                                      <td><h5>Phone</h5> </td>
                                      <td> {{ $u->userDetail->phone  }}</td>
                                  </tr>
                              </tbody>
                          </table>  
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach 
                @endif                       
                 <!--          MODAL ENDS              -->                       
                        
                        
    </div>
    <!-- END Dynamic Table Full Pagination -->
    </div>
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

            
            
    
            
                @endsection
            
            
            
            