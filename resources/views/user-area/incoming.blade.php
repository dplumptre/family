
          @extends('layouts.layout_user')

@section('content')      
            

            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
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
                                        <th class="text-center">Total</th>`
                                        <th class="text-center">Payment Date</th>
                                         <th class="text-center">Receipt</th>
                                        <th class="text-center" style="width: 15%;">Status</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                      <td class="text-center">17,000</td>
                                        <td class="text-center"> 17/jan/2017</td>
                                         <td class="text-center">image</td>
                                          <td class="text-center">    <span class="label label-danger">Pending / completed</span></td>
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
            
            
            
            