@component('mail::message')
# Welcome home

Hi {{$user->username}},

Thank you for joining us and welcome aboard.

@component('mail::panel')
Here is the start of a healthy rewarding relationship.

In the meantime, make sure you update your profile to get started.
@endcomponent
<?php $url = route('profile'); ?>
@component('mail::button', ['url' => $url])
Update Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
