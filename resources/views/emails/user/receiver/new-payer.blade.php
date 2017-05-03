@component('mail::message')
# New Donor Allocation.

Hello {{ucwords($pair->receiver->user->username)}},

@component('mail::panel')
You have received a new donor ({{ ucwords($pair->payer->user->userDetail->firstname) }} {{ ucwords($pair->payer->user->userDetail->lastname) }})

Please check your dashboard for more information.

This is a replacement donor for the donor that failed to pay up in time.
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
