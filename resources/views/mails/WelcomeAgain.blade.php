@component('mail::message')
# Introduction

Hello, Welcome again...:3

@component('mail::button', ['url' => 'zing.vn'])
Check Zing website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
