@props(['type'=>'submit','value'=>'','attr','id'=>''])
<div class="col-2">
    <button class="btn btn-primary mt-4" id="{{$id}}" {!! $attributes->merge($attr) !!} type="{{$type}}">{{$value}}</button>
</div>
