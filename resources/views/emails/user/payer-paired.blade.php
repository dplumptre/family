@component('mail::message')
# Recipient Allocation Complete

Hi {{ ucfirst($pair->payer->user->username) }},

@component('mail::panel')
This is to inform you that you now have a new Recipient ({{ ucwords($pair->receiver->user->userDetail->firstname) }} {{ucwords($pair->receiver->user->userDetail->lastname)}}).

This offer will expire in <i>{{ $pair->elapse_time->diffForHumans() }}</i> for your donation to be made. Kindly make donations in-time, upload evidence and inform the recipient of your payment.
@endcomponent

<?php $url = route('outgoing'); ?>
@component('mail::button', ['url' => $url])
View Details Now
@endcomponent

<small>Should incase you do not have enough funds to make this donation, contact support via {{config('family.emails.support')}}.


Thanks,<br>
{{ config('app.name') }}
@endcomponent