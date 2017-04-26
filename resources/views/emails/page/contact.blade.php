@component('mail::message')

The details of the contact form below.


@component('mail::panel')

<p><strong>FULL NAME: </strong></p>
{{ $name }}

<p><strong>EMAIL: </strong></p>
{{ $email }}

<p><strong>MESSAGE: </strong></p>
{{ $message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
