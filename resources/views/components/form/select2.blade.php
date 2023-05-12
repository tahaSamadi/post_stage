@props(['options'=>[],'label'=>'','name'=>'','first_option'=>false, 'sub_method' => '','value'=>'','id'=>false])
<div class="mt-3" @if($id) id="{{$id}}" @endif>
    <label class="control-label">{{$label}}</label>
    <select class="form-control select2" name="{{$name}}">
        @if($first_option)
            <option value="">{{$first_option}}</option>
        @endif
        @foreach($options as $option)
            <option value="{{$option["id"]}}" @if($option['id'] == $value) selected @endif>{{$option["title"]}}</option>
        @endforeach

    </select>
</div>
