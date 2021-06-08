@component('mail::message')
# Introduction

Հատատեք Ձեր mail-ը

@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
