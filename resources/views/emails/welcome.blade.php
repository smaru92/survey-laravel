@component('mail::message')
# Hello From Local Server
# 메일 트랩 계정을 이용해 메일을 보낼 수 있음
Welcome to our application.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
