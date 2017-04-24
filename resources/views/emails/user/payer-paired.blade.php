@component('mail::message')
# Recipient Allocation Complete

Hi {{ ucfirst($pair->payer->user->username) }},

This is to inform you that you now have a new Recipient.

@component('mail::panel')
This offer will expire in <i>{{ $pair->elapse_time->diffForHumans() }}</i> for your donation to be made.
@endcomponent

<?php $url = route('outgoing'); ?>
@component('mail::button', ['url' => $url])
View Details Now
@endcomponent

<small>Should incase you don not have enough funds to make this donation, contact support via {{config('family.emails.support')}}.


Thanks,<br>
{{ config('app.name') }}
@endcomponent