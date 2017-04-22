@component('mail::message')
# Pair Donor Allocated.

Hi {{ ucfirst($receiver->user->username) }}

@component('mail::panel')
You have been allocated two donors.

Kindly make sure you approve their payment from your dashboard as soon as you confirm it.
@endcomponent

<?php $url = route('incoming'); ?>
@component('mail::button', ['url' => $url])
Proceed To Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
