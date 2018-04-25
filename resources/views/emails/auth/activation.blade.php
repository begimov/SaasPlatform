@component('mail::message')
# Account activation

Please click button to activate your account.

@component('mail::button', ['url' => ''])
Activate {{ $token }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
