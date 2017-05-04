@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Receivers</div>

                <div class="panel-body" >
                    <table class="table table-bordered table-header-bg table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="defaulter in defaulters">
                            <td>@{{defaulter.user.id}}</td>
                            <td>@{{defaulter.user.username}}</td>
                            <td>@{{defaulter.user.email}}</td>
                            <td><div class="label label-info" style="cursor: pointer;">Disable account</div></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $vm = new Vue({
            el: '#app',
            data: {
                defaulters: [],
            },
            created: function () {
                this.defaulters = [{
                    "id": 3,
                    "user_id": 21,
                    "package_id": 1,
                    "status": 1,
                    "pairing_result": 1,
                    "finished": 0,
                    "created_at": "2017-05-02 23:35:19",
                    "updated_at": "2017-05-03 01:30:17",
                    "user": {
                        "id": 21,
                        "username": "admin2",
                        "email": "admin2@familylifeclub.com",
                        "created_at": "2017-03-18 19:48:39",
                        "updated_at": "2017-03-18 19:48:39"
                    }
                }, {
                    "id": 4,
                    "user_id": 19,
                    "package_id": 1,
                    "status": 1,
                    "pairing_result": 1,
                    "finished": 0,
                    "created_at": "2017-05-02 23:35:57",
                    "updated_at": "2017-05-03 09:00:06",
                    "user": {
                        "id": 19,
                        "username": "admin1",
                        "email": "admin1@familylifeclub.com",
                        "created_at": "2017-03-08 21:32:36",
                        "updated_at": "2017-03-18 16:52:15"
                    }
                }, {
                    "id": 5,
                    "user_id": 9,
                    "package_id": 1,
                    "status": 1,
                    "pairing_result": 1,
                    "finished": 0,
                    "created_at": "2017-05-03 00:13:21",
                    "updated_at": "2017-05-03 09:00:06",
                    "user": {
                        "id": 9,
                        "username": "testuser",
                        "email": "testuser@example.com",
                        "created_at": "2017-02-27 13:46:25",
                        "updated_at": "2017-03-01 17:48:15"
                    }
                }, {
                    "id": 6,
                    "user_id": 6,
                    "package_id": 1,
                    "status": 1,
                    "pairing_result": 1,
                    "finished": 0,
                    "created_at": "2017-05-03 00:13:21",
                    "updated_at": "2017-05-03 09:00:06",
                    "user": {
                        "id": 6,
                        "username": "shegun",
                        "email": "shegun.babs@gmail.com",
                        "created_at": "2017-02-23 16:50:36",
                        "updated_at": "2017-04-24 15:43:26"
                    }
                }]
            }

        });
    </script>
@endsection