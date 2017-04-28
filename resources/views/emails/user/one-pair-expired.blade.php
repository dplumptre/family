@component('mail::message')
# One of your Donors failed to pay in time.

Hi {{$pair->receiver->user->username}},

@component('mail::panel')
This is to inform you that one of your donors ({{ ucwords($pair->payer->user->userDetail->firstname)  }} {{ ucwords($pair->payer->user->userdetail->lastname)  }}) failed to pay before the grace time expired.

You do not need to accept payment from this donor again.
The system is fully aware of this and you will be given another donor as soon as possible.

If another donor is not provided within 24hours kindly contact support via {{config('family.emails.support')}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
