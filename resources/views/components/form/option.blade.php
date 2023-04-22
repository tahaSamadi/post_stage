@if(isset($options[0]) && !empty($options[0]))
    @foreach($options as $opt)
        <option value="">{{$opt["title"]}}</option>
        @include('components.form.option',['options'=>$opt->sub_cats])
    @endforeach
@endif
