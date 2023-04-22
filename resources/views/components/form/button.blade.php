@props(['type'=>'submit','value'=>'','attr'])
<button class="btn btn-primary mt-4" {!! $attributes->merge($attr) !!} type="{{$type}}">{{$value}}</button>
