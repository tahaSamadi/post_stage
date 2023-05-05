@props(['options'=>[],'label'=>'','name'=>'','first_option'=>false, 'sub_method' => '','value'=>''])
<div class="mt-3">
    <label class="control-label">{{$label}}</label>
    <select class="form-control" name="{{$name}}" id="select_box">
        @if($first_option)
            <option value="">{{$first_option}}</option>
        @endif
        @foreach($options as $option)
            <option value="{{$option["id"]}}" @if($option['id'] == $value) selected @endif>{{$option["title"]}}</option>
            @component('components.form.sub_option',['options'=>$option, 'method'=>$sub_method,'value'=>$value])@endcomponent
        @endforeach

    </select>
</div>
