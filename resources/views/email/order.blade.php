@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
    this is a new panel {{$data}}
@endcomponent


@component('mail::table')
|name|email|
|----|-----|
|babor|b@k.com|
|nadim|n@b.com|    
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent




