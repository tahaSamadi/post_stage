@props(['action'=>'','method'=>'post'])
<form action="{{$action}}" method="{{$method}}">
    @csrf
    @component('components.form.error')@endcomponent
    @component('components.form.success')@endcomponent
    {{ $items }}
</form>
