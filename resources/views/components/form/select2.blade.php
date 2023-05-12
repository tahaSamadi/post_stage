@props(['options'=>[],'label'=>'','name'=>'','first_option'=>false, 'sub_method' => '','value'=>'','id'=>''])

<div class="mt-3"  @if(isset($id)) id="{{$id}}" @endif>
    <label class="control-label">{{$label}}</label>
    <select class="form-control select2" name="{{$name}}">
        @if($first_option)
            <option value="">{{$first_option}}</option>
        @endif
        @if(isset($options[0]))
            @foreach($options as $option)
                <option value="{{$option["id"]}}">{{$option["title"]}}</option>
                @component('components.form.sub_option',['options'=>$option, 'method'=>$sub_method])@endcomponent
            @endforeach
        @endif
    </select>
</div>
@section('extra_js')
    <script>
        $("#select_box").val("{{$value}}")
    </script>
@endsection
