@props(['type'=>'submit','value'=>'','attr'=>[],'id'=>'','class'=>'btn btn-primary mt-4'])
<div class="col-2">
    <button class="{{$class}}" id="{{$id}}" {!! $attributes->merge($attr) !!} type="{{$type}}">{{$value}}</button>
</div>
