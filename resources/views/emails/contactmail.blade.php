@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Name : {{$mail_data['name']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
