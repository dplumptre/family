@component('mail::message')
# You have been made a Recipient

Hi {{ucwords($receiver->user->username)}},

@component('mail::panel')
You have been elevated to be a Recipient.

Logon to your dashboard to view details.
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
