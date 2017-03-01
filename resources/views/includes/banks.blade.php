<?php
$banks = banks();
?>
@foreach($banks as $bank => $name)
    <option value="{{$bank}}"
    @if( old('bank_name') == $bank )
        {{' selected'}}
    @elseif(!empty($currentUser->userDetail->bank_name))
        @if($currentUser->userDetail->bank_name == $bank)
            {{' selected'}}
        @endif
    @endif>{{$name}}</option>
@endforeach