@props(['options'=>[], 'method'=>'', 'level_txt'=>'-'])
@php $sub_options = $options->{$method}; @endphp
@if(!empty($sub_options[0]))
    @foreach($sub_options as $opt)
        <option value="{{$opt["id"]}}">{{$level_txt}} {{$opt["title"]}}</option>
        @php $level_txt .= $level_txt @endphp
        @component('components.form.sub_option',['options'=>$opt, 'method'=>$method, 'level_txt'=>$level_txt])@endcomponent
    @endforeach
@endif
