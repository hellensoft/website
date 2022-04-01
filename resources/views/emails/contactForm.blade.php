@component('mail::message')
### Please check information below customer contact form from website.

Name: {{ $name }}.

Phone: {{ $phone }}.

Email: {{ $email }}.

### Message:
{{ $msg }}

Thanks,<br>
HS-Website Contact form
@endcomponent
