@component('mail::message')
# Introduction

The body of your message.

- one 
- two
- three

@component('mail::table', ['url' => ''])
Button Text
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Some text for this or that I don`t know.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
