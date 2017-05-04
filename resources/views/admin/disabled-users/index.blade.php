@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Disabled Users</div>

                <div class="panel-body">
                    @if ( $data->count() )
                        <table class="table table-bordered table-header-bg table-striped">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Disabled Reaseon</th>
                                <th>Date disabled</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->user->username}}</td>
                                    <td>{{$row->user->email}}</td>
                                    <td>{{$row->reason}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs">enable</a>
                                    </td>
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

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h4>Disable User</h4>
                            <form action="{{route('post.disabled.users')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="user_id">User Name/Email</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="">Select One</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
