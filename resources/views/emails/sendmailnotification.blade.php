@component('mail::message')
# Message

{{$data['name']}}<br>
{{$data['phone']}}
<br>

{{$data['message']}}







<br>
@component('mail::button', ['url' => ''])
View Email in a new Tab
@endcomponent
<hr>
{{ config('app.name') }}  

@endcomponent
