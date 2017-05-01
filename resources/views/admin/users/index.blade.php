@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    @if ( $data->count() )
                        <table class="table table-bordered table-header-bg table-striped">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Joined</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->format('D, jS M, Y - H:i')}}</td>
                                    <td><a href="#" data-toggle="modal" data-target="#{{$user->username}}Modal">UD</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$data->links()}}
                    @else
                        <div class="alert alert-info">
                            There are no Users yet.
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @foreach($data as $user)
            <div class="modal fade" id="{{$user->username}}Modal" tabindex="-1" role="dialog" aria-labelledby="userDetails">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{{$user->username}} ({{$user->email}})</h4>
                        </div>
                        <div class="modal-body">
                            <dl class="dl-horizontal">
                                <dt>Firstname</dt>
                                <dd>{{!empty($user->userDetail->firstname) ? $user->userDetail->firstname :''}}</dd>
                                <hr>
                                <dt>Lastname</dt>
                                <dd>{{!empty($user->userDetail->lastname) ? $user->userDetail->lastname :''}}</dd>
                                <hr>
                                <dt>Phone</dt>
                                <dd>{{!empty($user->userDetail->phone) ? $user->userDetail->phone :''}}</dd>
                                <hr>
                                <dt>Bank Name</dt>
                                <dd>{{!empty($user->userDetail->bank_name) ? $user->userDetail->bank_name :''}}</dd>
                                <hr>
                                <dt>Account Name</dt>
                                <dd>{{!empty($user->userDetail->account_name) ? $user->userDetail->account_name :''}}</dd>
                                <hr>
                                <dt>Account Number</dt>
                                <dd>{{!empty($user->userDetail->account_number) ? $user->userDetail->account_number :''}}</dd>
                                <hr>
                                <dt>Account Type</dt>
                                <dd>{{!empty($user->userDetail->account_type) ? $user->userDetail->account_type :''}}</dd>

                            </dl>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection