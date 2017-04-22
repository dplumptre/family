
          @extends('layouts.layout_user')

@section('content')      
            

            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Upload 
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
                  

                    
                                  <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><i class="fa fa-info-circle"></i>
                            <strong> Howdy! Please upload images with only the following format jpg or png.</strong>
                        </p>
                    </div>      
                    
         <!-- Mega Form -->
                    <div class="block block-bordered">
                        <div class="block block-themed">
                        <div class="block-header bg-amethyst ">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                </li>
                            </ul>
                            <h3 class="block-title">  Upload Evidence Of Payment</h3>
                        </div>
                        <div class="block-content">
                          @include('layouts.partials.errors')  
                            
                          <form class="form-horizontal push-10-t push-10" action="{{  secure_url('user-area/upload') }}" enctype="multipart/form-data" method="post" >
        {{csrf_field()}}
     <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="hidden" name="pair_id" value="{{ $pair_id }}" />
                        <input type="file" name="file"class="form-control" />
                        
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
    </form>    </div>
                        </div>
                    </div>
                    <!-- END Mega Form -->           
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
               
                    
                    
                    
                    
               
                    
                    
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            
            
    
            
                @endsection
            
            
            
            