@component('mail::message')
# Password change notice.

Hi {{$user->username}}

@component('mail::panel')
You password has just been changed.

If you did not make this change, please send an email to {{config('family.email.support')}}
@endcomponent

or click the button bellow to temporarily disable your account to retrieve your password.

@component('mail::button', ['url' => ''])
Disable Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
