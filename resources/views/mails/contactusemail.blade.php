@component('mail::message')
# Hello, I am {{$mailData['name']}}

{{$mailData['message']}}<br />

Contact Name: {{$mailData['name']}}<br />
Email Adress: {{$mailData['email']}}<br />

Thanks!!!
@endcomponent
