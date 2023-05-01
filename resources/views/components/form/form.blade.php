@props(['action'=>'','method'=>'post','id'=>'','attr'=>[]])
<form action="{{$action}}" method="{{$method}}" id="{{$id}}"  {!! $attributes->merge($attr) !!} novalidate>
    @csrf
    @component('components.form.error')@endcomponent
    @component('components.form.success')@endcomponent
    {{ $items }}
</form>
