@props(['options'=>[], 'method'=>'', 'level_sep'=>'- ', 'level_txt'=>''])
@php $sub_options = $options->{$method}; $level_txt .= $level_sep; @endphp
@if(!empty($sub_options[0]))
    @foreach($sub_options as $opt)
        <option value="{{$opt["id"]}}">{{$level_txt}} {{$opt["title"]}}</option>
        @component('components.form.sub_option',['options'=>$opt, 'method'=>$method, 'level_sep'=>$level_sep, 'level_txt'=>$level_txt])@endcomponent
    @endforeach
@endif
