@component('mail::message')

The details of the contact form below.


@component('mail::panel')

{{ $name }}

{{ $email }}

{{ $subject }}

{{ $message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
