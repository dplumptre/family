@component('mail::message')
# One of your Donors failed to pay in time.

Hi {{$receiver->user->username}},

This is to inform you that one of your donors failed to pay before the grace time expired.

@component('mail::panel')
The system is fully aware of this and you will be given another donor as soon as possible.

If another donor is not provided within 24hours kindly contact support via {{config('family.emails.support')}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
