@props(['type'=>'submit','value'=>'','attr'=>[],'id'=>'','class'=>'btn btn-primary mt-4'])
    <button class="{{$class}}" id="{{$id}}" {!! $attributes->merge($attr) !!} type="{{$type}}">{{$value}}</button>
