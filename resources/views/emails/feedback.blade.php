@component('mail::message')
Feedback from user <br>

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}
How did you hear about us? : {{$data["how-did-you-hear"]}}<br>
Subject : {{$data["subject"]}}<br>
Pricing : {{$data["pricing"]}}<br>
First name : {{$data["first-name"]}}<br>
Last name : {{$data["last-name"]}}<br>
Email : {{$data["email"]}}<br>
Message : "{{$data["your-message"]}}"<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
