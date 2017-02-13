
          @extends('layouts.layout_user')

@section('content')      
            

            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Profile 
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
                  
                    
                    
                    

       <!-- Main Content -->
                        <div class="block">
                            <ul class="nav nav-tabs nav-justified push-20" data-toggle="tabs">
                                <li class="active">
                                    <a href="#tab-profile-personal"><i class="fa fa-fw fa-pencil"></i> Personal</a>
                                </li>
                                <li>
                                    <a href="#tab-profile-password"><i class="fa fa-fw fa-asterisk"></i> Password</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content">
                                <!-- Personal Tab -->
                                <div class="tab-pane fade in active" id="tab-profile-personal">
                                    <div class="row items-push">
                                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                                          
                                            <form>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="profile-email">Email Address</label>
                                                    <input class="form-control input-lg" disabled="" type="email" id="profile-email" name="profile-email" placeholder="Enter your email.." value="admin@example.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="profile-firstname">Full Name</label>
                                                    <input class="form-control input-lg" type="text" id="profile-firstname" name="profile-firstname" placeholder="Enter your firstname.." value="John">
                                                </div>
                                                
                                            </div>
                                   
                                       
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <label for="profile-city">Phone</label>
                                                    <input class="form-control input-lg" type="text" id="profile-city" name="profile-city" value="0819089928474">
                                                </div>
                                            </div>
                                                
                                             
                                <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Personal Tab -->

                                <!-- Password Tab -->
                                <div class="tab-pane fade" id="tab-profile-password">
                                    <div class="row items-push">
                                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                                            <form>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="profile-password">Current Password</label>
                                                    <input class="form-control input-lg" type="password" id="profile-password" name="profile-password">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="profile-password-new">New Password</label>
                                                    <input class="form-control input-lg" type="password" id="profile-password-new" name="profile-password-new">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="profile-password-new-confirm">Confirm New Password</label>
                                                    <input class="form-control input-lg" type="password" id="profile-password-new-confirm" name="profile-password-new-confirm">
                                                </div>
                                            </div>
                                                                                   
                                <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-check push-5-r"></i> Save Password</button>
                           
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Password Tab -->

                               
                            </div>
                        </div>
                
                    <!-- END Main Content -->

                    
                    
                    
                    
                    
               
                    
                    
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            
            
    
            
                @endsection
            
            
            
            