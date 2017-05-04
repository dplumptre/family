@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Receivers</div>

                <div class="panel-body">
                    @if ( $data->count() )
                        <table class="table table-bordered table-header-bg table-striped">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Receiving Amt.</th>
                                <th>Status</th>
                                <th>Updated at</th>
                                <th>Created at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <?php
                                if ( $row->id == 146 ){continue;}
                                ?>
                                <tr>
                                    <td>{{$row->user->username}}</td>
                                    <td>{{$row->user->email}}</td>
                                    <td>{{number_format($row->packages->receiving_amount, 0)}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td>{{$row->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{$data->links()}}
                    @else
                        <div class="alert alert-info">
                            There are no Receivers yet.
                        </div>
                    @endif

                        <hr>

                        <div class="row">
                            @include('layouts.partials.errors')
                            <div class="col-md-6">
                                <div>
                                    <h4>Add User to Receivers</h4>
                                    <form action="{{route('post.receivers')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="admin">Admin</label>
                                            <select name="user_id" id="user_id" class="form-control">
                                                <option value="">Select One</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->username}} - {{$user->email}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="package">Package</label>
                                                <select name="package_id" id="package_id" class="form-control">
                                                    <option value="">Choose One</option>
                                                    @foreach($packages as $package)
                                                        <option value="{{$package->id}}">{{number_format($package->paying_amount, 0)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <input type="hidden" name="status" value="0">
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection