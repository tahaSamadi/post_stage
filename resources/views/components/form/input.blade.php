@props(['id'=>'','type'=>'text','name'=>'','value'=>'','attr'=>[],'label'=>''])
<div class="form-group row">
    @if($label != '')
    <label for="{{$id}}" class="col-md-2 col-form-label">{{$label}}</label>
    @endif
    <div class="col-md-10">
        <input class="form-control" type="{{$type}}" value="{{$value}}" id="{{$id}}" {!! $attributes->merge($attr) !!}>
    </div>
</div>
