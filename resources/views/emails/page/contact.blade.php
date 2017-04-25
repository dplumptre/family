@component('mail::message')

The details of the contact form below.


@component('mail::panel')

{{ $details->name }}

{{ $details->email }}

{{ $details->subject }}

{{ $details->message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
