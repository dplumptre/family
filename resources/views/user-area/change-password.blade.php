@extends('layouts.layout_user')

@section('content')
    <main id="main-container">
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        Change Password
                    </h1>
                </div>
            </div>
        </div>
        <div class="content bg-grey">

            <div class="row">
                <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                    <div class="block">
                        <div class="block block-themed">
                            <div class="block-header bg-amethyst">
                                <ul class="block-options">
                                    <li>
                                        <button type="button"><i class="si si-settings"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Change Password</h3>
                            </div>
                            <div class="block-content">
                                @include('layouts.partials.errors')
                                <form class="form-horizontal push-5-t" action="{{  secure_url('user-area/change-password') }}" method="post">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="current_password">Current Password</label>
                                            <input class="form-control" type="password" id="current_password"
                                                   name="current_password" placeholder="Enter your current password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="new_password">New Password</label>
                                            <input class="form-control" type="password" id="new_password"
                                                   name="new_password" placeholder="Enter your new password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="register4-firstname">Confirm New Password</label>
                                            <input class="form-control" type="password" id="new_password_confirmation"
                                                   name="new_password_confirmation"
                                                   placeholder="Confirm your new password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit"><i
                                                        class="fa fa-arrow-right push-5-r"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection