@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Automated Receivers</div>

                <div class="panel-body">
                    @if ( $data->count() )
                        <table class="table table-bordered table-header-bg table-striped">
                            <thead>
                            <tr>
                                <th>Position</th>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Package Amount</th>
                                <th>Last Update</th>
                                <th>Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->position}}</td>
                                    <td>{{$row->user->id}}</td>
                                    <td>{{$row->user->username}}</td>
                                    <td>{{$row->user->email}}</td>
                                    <td>N{{number_format($row->package->paying_amount, 0)}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td>{{$row->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-info">
                            There are no Automated Receivers yet.
                        </div>
                    @endif

                    <div class="col-md-6">
                        <p>
                            <strong>Add Admin to Automated Receivers</strong>
                        </p>
                        @include('layouts.partials.errors')
                        <form action="{{route('post.automated-receivers')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="admin">Admin</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="">Select One</option>
                                    @foreach($admins->users as $user)
                                        <option value="{{$user->id}}">{{$user->username}} - {{$user->email}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="package">Package</label>
                                <select name="package_id" id="package_id" class="form-control">
                                    <option value="">Choose One</option>
                                    @foreach($packages as $package)
                                        <option value="{{$package->id}}">{{number_format($package->paying_amount, 0)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection