
          @extends('layouts.layout_user')

@section('content')      
            

            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Make a Donation
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
                  
                    
                    
                    
                    
                    
                    
                    
                    
         <!-- Mega Form -->
                    <div class="block block-bordered">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                </li>
                            </ul>
                            <h3 class="block-title"> Donation</h3>
                        </div>
                        <div class="block-content">
                          @include('layouts.partials.errors')  
                            
    <form class="form-horizontal push-10-t push-10" action="{{route('post.donate')}}" method="post" >
        {{csrf_field()}}
     <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <div class="col-xs-12">
                   <select name="package" class="form-control" size="1">
                                 <option value="">Select Package</option>    
                                 <?php foreach ($package as $key => $value) :?>
                                <option value=" <?php echo $value->id;?>"> <?php echo $value->name;?></option>
                                 <?php echo $value->name;?>
                                <?php endforeach ;?>
                            </select>      
                    </div>
                </div>
            </div>


            <div class="col-sm-5">
                <div class="form-group">
                </div>
           </div>
           </div>
        <div class="form-group">
            <div class="col-xs-12">
                <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Begin </button>
            </div>
        </div>
    </form>
                        </div>
                    </div>
                    <!-- END Mega Form -->           
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

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
                        </div>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->

                    
                    
                    
                    
                    
               
                    
                    
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            
            
    
            
                @endsection
            
            
            
            