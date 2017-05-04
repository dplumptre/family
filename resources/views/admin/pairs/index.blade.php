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
                            <?php
                                    if ( $receiver->id == 146 ){continue;}
                            ?>
                            <tr>
                                <td rowspan="2" valign="middle">{{$receiver->user->username}}</td>
                                <td>
                                    {{
                                $receiver->pairs[0]->created_at . ' | ' .        
                                $receiver->pairs[0]->payer->user->username . ' | ' .
                                $receiver->pairs[0]->payer->user->email . ' | ' .
                                $receiver->pairs[0]->payer->user->userDetail->firstname . '  ' .
                                $receiver->pairs[0]->payer->user->userDetail->lastname .
                                ' ('.$receiver->pairs[0]->payer->user_id.')'
                                }}
                                    <?php
                                    switch ((int)$receiver->pairs[0]->receiver_status) {
                                        case 0 :
                                            echo '<span class="label label-default">Pending</span>';
                                            break;
                                        case 1 :
                                            echo '<span class="label label-info">Processing</span>';
                                            break;
                                        case 2 :
                                            echo '<span class="label label-success">Success</span>';
                                            break;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>{{
                                $receiver->pairs[0]->created_at . ' | ' .    
                                $receiver->pairs[1]->payer->user->username . ' | ' .
                                $receiver->pairs[1]->payer->user->email . ' | ' .
                                $receiver->pairs[1]->payer->user->userDetail->firstname . '  ' .
                                $receiver->pairs[1]->payer->user->userDetail->lastname .
                                ' ('.$receiver->pairs[1]->payer->user_id.')'
                                }}
                                    <?php
                                    switch ((int)$receiver->pairs[1]->receiver_status) {
                                        case 0 :
                                            echo '<span class="label label-default">Pending</span>';
                                            break;
                                        case 1 :
                                            echo '<span class="label label-info">Processing</span>';
                                            break;
                                        case 2 :
                                            echo '<span class="label label-success">Success</span>';
                                            break;
                                    }
                                    ?>
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