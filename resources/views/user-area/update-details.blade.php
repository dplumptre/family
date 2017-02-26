@extends('layouts.layout_user')
@section('scripts')
    <script src="/assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/js/update-details.js"></script>
@endsection
@section('content')
    <main id="main-container">
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        Profile
                    </h1>
                </div>
            </div>
        </div>
        <div class="content">
                <div class="js-wizard-classic-validation block">
                    <!-- Step Tabs -->
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a class="inactive" href="#validation-classic-step1" data-toggle="tab">1. Personal</a>
                        </li>
                        <li>
                            <a class="inactive" href="#validation-classic-step2" data-toggle="tab">2. Bank Details</a>
                        </li>
                        <li>
                            <a class="inactive" href="#validation-classic-step3" data-toggle="tab">3. Extra</a>
                        </li>
                    </ul>
                    <!-- END Step Tabs -->

                    <!-- Form -->
                    <!-- jQuery Validation (.js-form1 class is initialized in js/pages/base_forms_wizard.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-form1 validation form-horizontal" action="#" method="post"
                          novalidate="novalidate">
                        <!-- Steps Content -->
                        <div class="block-content tab-content">
                            <!-- Step 1 -->
                            <div class="tab-pane push-30-t push-50 active" id="validation-classic-step1">
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="firstname">First Name</label>
                                        <input class="form-control" type="text" id="firstname"
                                               name="firstname"
                                               placeholder="Please enter your firstname" value="{{old('firstname')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="lastname">Last Name</label>
                                        <input class="form-control" type="text" id="lastname"
                                               name="lastname" placeholder="Please enter your lastname"
                                               value="{{old('lastname')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="phone">Phone Number</label>
                                        <input class="form-control" type="text" id="phone"
                                               name="phone" placeholder="Please enter your Phone Number"
                                               value="{{old('phone')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" name="address" id="address" cols="30"
                                                  rows="10">{{old('address')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- END Step 1 -->

                            <!-- Step 2 -->
                            <div class="tab-pane push-30-t push-50" id="validation-classic-step2">
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="validation-classic-details">Details</label>
                                    <textarea class="form-control" id="validation-classic-details"
                                              name="validation-classic-details" rows="9"
                                              placeholder="Share something about yourself"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- END Step 2 -->

                            <!-- Step 3 -->
                            <div class="tab-pane push-30-t push-50" id="validation-classic-step3">
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="validation-classic-city">City</label>
                                        <input class="form-control" type="text" id="validation-classic-city"
                                               name="validation-classic-city" placeholder="Where do you live?">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label for="validation-classic-skills">Skills</label>
                                        <select class="form-control" id="validation-classic-skills"
                                                name="validation-classic-skills" size="1">
                                            <option value="">Please select your best skill</option>
                                            <option value="1">Photoshop</option>
                                            <option value="2">HTML</option>
                                            <option value="3">CSS</option>
                                            <option value="4">JavaScript</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label class="css-input switch switch-sm switch-primary"
                                               for="validation-classic-terms">
                                            <input type="checkbox" id="validation-classic-terms"
                                                   name="validation-classic-terms"><span></span> Agree with the <a
                                                    data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- END Step 3 -->
                        </div>
                        <!-- END Steps Content -->

                        <!-- Steps Navigation -->
                        <div class="block-content block-content-mini block-content-full border-t">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button class="wizard-prev btn btn-default" type="button"><i class="fa fa-arrow-left"></i> Previous</button>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <button class="wizard-next btn btn-default" type="button">Next <i class="fa fa-arrow-right"></i></button>
                                    <button class="wizard-finish btn btn-primary" type="submit" style="display: none;"><i class="fa fa-check"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-mini block-content-full border-t">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button class="wizard-prev btn btn-default disabled" type="button"><i
                                                class="fa fa-arrow-left"></i> Previous
                                    </button>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <button class="wizard-next btn btn-default" type="button">Next <i
                                                class="fa fa-arrow-right"></i></button>
                                    <button class="wizard-finish btn btn-primary" type="submit" style="display: none;">
                                        <i
                                                class="fa fa-check"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END Steps Navigation -->
                    </form>
                    <!-- END Form -->
            </div>
        </div>
    </main>