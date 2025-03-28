@component('mail::message')
# Password Reset Request

Hello,  

You requested to reset your password. Click the button below to proceed:

@component('mail::button', ['url' => route('password.reset', ['token' => $token, 'email' => $email])])
Reset Password
@endcomponent

If you did not request this, please ignore this email.

Thanks,  
{{ config('app.name') }}
@endcomponent
