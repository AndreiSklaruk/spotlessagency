<?php
/**
 * @var $data \App\Mail\IFeedbackData
 */
?>

@component('mail::message')
Feedback from user <br>

How did you hear about us? : {{ $data->getHowDidYouHear() }}<br>
Subject : {{ $data->getSubject() }}<br>
Pricing : {{ $data->getPricing() }}<br>
First name : {{ $data->getFirstName() }}<br>
Last name : {{ $data->getLastName() }}<br>
Email : {{ $data->getEmail() }}<br>
Message : "{{ $data->getMessage() }}"<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
