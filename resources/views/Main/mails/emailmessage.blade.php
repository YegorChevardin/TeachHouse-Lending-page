@component('mail::message')
{{ $subject }}

You have email from {{ $email }}.

{{ $text }}
@endcomponent