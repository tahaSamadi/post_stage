@props(['route'=>'','method'=>'get','options_filter'=>[]])
<div class="card-body">
    <form action="{{$route}}" method="{{$method}}">
        @component('components.form.input',['label'=>'عنوان','id'=>'title'
,'name'=>'title','value'=>request('title')])@endcomponent
        @if($options_filter)
        @component('components.form.select2',['name'=>'parent_id','options'=>$options_filter,
'label'=>'دسته بندی','first_option'=>'دسته بندی اصلی',
'sub_method'=>'sub_cats','value'=>request('parent_id')])@endcomponent
        @endif
        {{$extra_filiter ?? ''}}
        @component('components.form.button',['type'=>'submit','value'=>'فیلتر بر اساس'])@endcomponent
    </form>
</div>
