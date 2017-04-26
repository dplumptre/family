@component('mail::message')
# Pair Donor Allocated.

Hi {{ ucfirst($receiver->user->username) }}

@component('mail::panel')
You have been allocated a donor.

Kindly make sure you approve successful payments from your dashboard as soon as you confirm it.

Make sure payment evidences are confirmed before approving it.
@endcomponent

<?php $url = route('incoming'); ?>
@component('mail::button', ['url' => $url])
Proceed To Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
