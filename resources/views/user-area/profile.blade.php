@extends('layouts.layout_user')

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
        <div class="content bg-white">

            <div class="row">
                @if ( $currentUser->userDetail == null )
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><i class="fa fa-warning"></i>
                            <strong>Your profile is incomplete. Please complete to have a full Identification</strong>
                        </p>
                    </div>
                @endif
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="block">
                        <div class="block block-themed">
                            <div class="block-header bg-amethyst">
                                <ul class="block-options">
                                    <li>
                                        <button type="button"><i class="si si-settings"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">User Details</h3>
                            </div>
                            <div class="block-content bg-gray-lighter">
                                @if ( $currentUser->userDetail == null )
                                    <div class="alert alert-warning alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                                        </button>
                                        <p><i class="fa fa-warning"></i>
                                            <strong>Your profile is incomplete. Please complete to have a full
                                                Identification</strong>
                                        </p>
                                    </div>
                                @else
                                    <dl>
                                        <dt>Firstname</dt>
                                        <dl>{{ucwords($currentUser->userDetail->firstname)}}</dl>

                                        <dt>Lastname</dt>
                                        <dl>{{ucwords($currentUser->userDetail->lastname)}}</dl>

                                        <dt>Phone</dt>
                                        <dl>{{$currentUser->userDetail->phone}}</dl>

                                        <hr>

                                        <dt>Bank Name</dt>
                                        <dl>{{ucwords(banks()[$currentUser->userDetail->bank_name])}}</dl>

                                        <dt>Bank Account Name</dt>
                                        <dl>{{ucwords($currentUser->userDetail->account_name)}}</dl>

                                        <dt>Bank Account Number</dt>
                                        <dl>{{$currentUser->userDetail->account_number}}</dl>

                                        <dt>Bank Account Type</dt>
                                        <dl>{{ucwords($currentUser->userDetail->account_type)}}</dl>

                                        <dt>Bank Account Branch</dt>
                                        <dl>{{ucwords($currentUser->userDetail->bank_branch)}}</dl>

                                    </dl>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7">
                    <div class="block">
                        <div class="block block-themed">
                            <div class="block-header bg-amethyst">
                                <ul class="block-options">
                                    <li>
                                        <button type="button"><i class="si si-settings"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Edit Details</h3>
                            </div>
                            <div class="block-content bg-gray-light">

                                <form class="form-horizontal push-5-t" action="{{  secure_url('user-area/profile') }}"
                                      method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="col-xs-6{{$errors->has('firstname')?' has-error':''}}">
                                            <label for="firstname">Firstname</label>
                                            <input class="form-control" type="text" id="firstname"
                                                   name="firstname" placeholder="Enter your firstname.."
                                                   value="{{old('firstname')?:(!empty($currentUser->userDetail->firstname)?$currentUser->userDetail->firstname:'')}}">

                                            @if ($errors->has('firstname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-xs-6{{$errors->has('lastname')?' has-error':''}}">
                                            <label for="lastname">Lastname</label>
                                            <input class="form-control" type="text" id="lastname"
                                                   name="lastname" placeholder="Enter your lastname.."
                                                   value="{{old('lastname')?:(!empty($currentUser->userDetail->lastname)?$currentUser->userDetail->lastname:'')}}">

                                            @if ($errors->has('lastname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{$errors->has('phone')?' has-error':''}}">
                                        <label class="col-xs-12" for="phone">Phone Number</label>

                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" id="phone"
                                                   name="phone" placeholder="Enter your phone number.."
                                                   value="{{old('phone')?:(!empty($currentUser->userDetail->phone)?$currentUser->userDetail->phone:'')}}">

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6{{$errors->has('bank_name')?' has-error':''}}">
                                            <label for="bank_name">Bank Name</label>
                                            <select name="bank_name" id="bank_name" class="form-control">
                                                <option value="">Select One</option>
                                                @include('includes.banks')
                                            </select>
                                        </div>

                                        <div class="col-xs-6{{$errors->has('account_name')?' has-error':''}}">
                                            <label for="account_name">Account Name</label>
                                            <input class="form-control" type="text" id="account_name"
                                                   name="account_name" placeholder="Account Name"
                                                   value="{{old('account_name')?:(!empty($currentUser->userDetail->account_name)?$currentUser->userDetail->account_name:'')}}">

                                            @if ($errors->has('account_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('account_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6{{$errors->has('account_number')?' has-error':''}}">
                                            <label for="account_number">Account Number</label>
                                            <input class="form-control" type="text" id="account_number"
                                                   name="account_number" placeholder="Account Number" maxlength="10"
                                                   value="{{old('account_number')?:(!empty($currentUser->userDetail->account_number)?$currentUser->userDetail->account_number:'')}}">

                                            @if ($errors->has('account_number'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('account_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="col-xs-6{{$errors->has('account_type')?' has-error':''}}">
                                            <label for="account_type">Account Type</label>
                                            <select name="account_type" id="account_type" class="form-control">
                                                <option value="">Choose one</option>
                                                <?php
                                                $account_types = ['savings' => 'Savings', 'current' => 'Current'];
                                                ?>
                                                @foreach($account_types as $name => $value)
                                                    <option value="{{$name}}"
                                                    @if( old('account_type') == $name )
                                                        {{' selected'}}
                                                            @elseif(!empty($currentUser->userDetail->account_type))
                                                        @if($currentUser->userDetail->account_type == $name)
                                                            {{' selected'}}
                                                                @endif
                                                            @endif>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6{{$errors->has('bank_branch')?' has-error':''}}">
                                            <label for="bank_branch">Bank Branch</label>
                                            <input class="form-control" type="text" id="bank_branch"
                                                   name="bank_branch" placeholder="Bank branch"
                                                   value="{{old('bank_branch')?:(!empty($currentUser->userDetail->bank_branch)?$currentUser->userDetail->bank_branch:'')}}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit"><i
                                                        class="fa fa-arrow-right push-5-r"></i> Update details
                                            </button>
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div style="margin: 50px 0px; padding: 20px 0px;text-align: center;background: #C7C6C8">
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
    </main>

@endsection