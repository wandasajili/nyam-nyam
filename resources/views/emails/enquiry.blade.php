<x-mail::message>
# Hello, you got an enquiry!

<h3>Name: {{ $data['name'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Message: {{ $data['messageContent'] }}</h3>

<x-mail::button :url="$url">
Check Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
