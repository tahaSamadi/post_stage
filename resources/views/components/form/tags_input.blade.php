@props(['id'=>'','type'=>'text','name'=>'','value'=>'','attr'=>[],'label'=>''])
<div class="mt-3">
    @if($label != '')
        <label for="{{$id}}" class="col-form-label">{{$label}}</label>
    @endif
    <input name='{{$name}}' value='{{$value?? implode($value,',')   }}' {!! $attributes->merge($attr) !!} class="form-control" autofocus>

</div>
