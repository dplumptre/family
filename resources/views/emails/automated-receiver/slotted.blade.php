@component('mail::message')
# Automated Receiver Slotted

Hello Admin {{$receiver->user->username}}

@component('mail::panel')
You have been slotted into the Recipient Queue automatically.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
