@component('mail::message')
# Your offer to Donate has Expired

Hi {{ucwords($pair->payer->user->username)}},

@component('mail::panel')
Your offer to donate to {{ucwords($pair->receiver->user->userDetail->firstname) }} {{ ucwords($pair->receiver->user->userDetail->lastname)  }} has expired.
You can no longer make the donation.

You have to make a new donation to get another Recipient.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
