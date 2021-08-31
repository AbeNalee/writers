@component('mail::message')

{{ $message }}

Thanks,<br>
{{ $name }}
{{ $email }}
@endcomponent
