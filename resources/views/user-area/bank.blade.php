
          @extends('layouts.layout_user')

@section('content')      
            

            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Bank
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
                            <h3 class="block-title">Bank Information</h3>
                        </div>
                        <div class="block-content">
                            <form class="form-horizontal push-10-t push-10" action="base_forms_premade.html" method="post" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="mega-firstname">Bank</label>
                                                <input class="form-control input-lg" type="text" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="mega-lastname">Account Number </label>
                                                <input class="form-control input-lg" type="text" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                      
                                        
                   
                               <div class="form-group">
                                            <div class="col-xs-12">
                                        <label for="mega-lastname">Account Holder </label>
                                                <input class="form-control input-lg" type="text" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                                         </div>
                                        </div>                      
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                           <label> Account Type</label>
                                                    <select class="form-control" size="1">
                                                         <option value="1">Select</option>    
                                                        <option value="2">Savings</option>
                                                        <option value="3">Current</option>
                                                        <option value="4">Cheque</option>
                                                        <option value="5">Investment</option>
                                                    </select>         
                                            
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                         <div class="col-xs-12">
                                        <label for="mega-lastname">Branch </label>
                                                <input class="form-control input-lg" type="text" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                                         </div>
                                        </div>
                                       
                                    
                                
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Complete </button>
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
                                        <th class="text-center">Bank Name</th>
                                        <th class="text-center">Account Number</th>
                                         <th class="text-center">Account Holder</th>
                                        <th class="text-center">Branch</th>
                                        <th class="text-center">Account Type</th>                  
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">GtBANK</td>
                                      <td class="text-center">0077639738</td>
                                        <td class="text-center"> John Doe</td>
                                         <td class="text-center">Ogba </td>
                                          <td class="text-center">Current</td>
                                        <td class="text-center">
                                            <span class="label label-danger">My Donor</span>
                                        </td>
                                    </tr>


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
            
            
            
            