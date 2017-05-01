@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users Roles</div>

                <div class="panel-body" id="app">
                    @include('layouts.partials.errors')
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>
                                SA - AD - GU - RE - ME - US
                            </th>
                            <th>Join Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form method="post" action="{{route('post.role')}}" id="{{$user->username.$user->email}}" style="display: inline-block;padding-left:3px;">
                                        {{csrf_field()}}
                                        <input type="hidden" name="email" value="{{$user->email}}">
                                            SA<input type="checkbox" name="SA"{{ $user->hasRole('superadmin') ? ' checked' : '' }}>
                                            AD<input type="checkbox" name="AD"{{ $user->hasRole('admin') ? ' checked' : '' }}>
                                            GU<input type="checkbox" name="GU"{{ $user->hasRole('guider') ? ' checked' : '' }}>
                                            RE<input type="checkbox" name="RE"{{ $user->hasRole('referrer') ? ' checked' : '' }}>
                                            ME<input type="checkbox" name="ME"{{ $user->hasRole('member') ? ' checked' : '' }}>
                                            US<input type="checkbox" name="US"{{ $user->hasRole('user') ? ' checked' : '' }}>
                                    </form>
                                </td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="#"
                                       onclick="event.preventDefault();document.getElementById('{{$user->username.$user->email}}').submit()">Assign
                                        Roles</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {}
        });
    </script>
@endsection