@props(['action'=>'','method'=>'post','id'=>''])
<form action="{{$action}}" method="{{$method}}" id="{{$id}}" novalidate>
    @csrf
    @component('components.form.error')@endcomponent
    @component('components.form.success')@endcomponent
    {{ $items }}
</form>
