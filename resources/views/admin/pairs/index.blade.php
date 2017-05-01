@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pairs</div>
                <div class="panel-body">
                    <table class="table table-bordered table-header-bg table-striped">
                    <thead>
                        <tr>
                            <th>Receiver</th>
                            <th>Payer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $receiver)
                            <tr>
                                <td rowspan="2" valign="middle">{{$receiver->user->username}}</td>
                                <td>{{!empty($receiver->pairs[0]->payer->user->username) ?
                                $receiver->pairs[0]->payer->user->username . ' | ' . $receiver->pairs[0]->payer->user->email . ' | ' . $receiver->pairs[0]->payer->user->userDetail->firstname . '  ' . $receiver->pairs[0]->payer->user->userDetail->lastname . ' ('.$receiver->pairs[0]->payer->user->userDetail->id.')'
                                : ''}}</td>
                            </tr>
                            <tr>
                                <td>{{!empty($receiver->pairs[1]->payer->user->username)
                                ?
                                $receiver->pairs[1]->payer->user->username . ' | ' . $receiver->pairs[1]->payer->user->email . ' | ' . $receiver->pairs[1]->payer->user->userDetail->firstname . '  ' . $receiver->pairs[1]->payer->user->userDetail->lastname . ' ('.$receiver->pairs[1]->payer->user->userDetail->id.')'
                                :
                                ''}}</td>
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