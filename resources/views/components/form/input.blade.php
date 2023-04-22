@props(['id'=>'','type'=>'text','name'=>'','value'=>'','attr'=>[],'label'=>''])
<div class="mt-3">
    @if($label != '')
        <label for="{{$id}}" class="col-form-label">{{$label}}</label>
    @endif
    <input id="{{$id}}" class="form-control" type="{{$type}}" value="{{$value}}"
           name="{{$name}}" {!! $attributes->merge($attr) !!}>
</div>
