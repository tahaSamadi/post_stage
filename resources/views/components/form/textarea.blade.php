@props(['id'=>'','name'=>'','value'=>'','attr'=>[],'label'=>''])
<div class="mt-3">
    <label for="{{$id}}">{{$label}}</label>
    <textarea id="{{$id}}" class="form-control no-resize" name="{{$name}}" {!! $attributes->merge($attr) !!}>{{$value}}</textarea>
</div>
