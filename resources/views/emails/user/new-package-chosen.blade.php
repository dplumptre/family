@component('mail::message')
# New Package Notice

Hi {{ ucfirst($payer->user->username) }},

@component('mail::panel')
Your new <strong>{{ucfirst($payer->packages->name)}} Package </strong> choice has been successfully accepted.

You will be notified by email as soon as you have a recipient.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
