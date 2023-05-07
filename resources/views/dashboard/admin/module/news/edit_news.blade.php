@extends('dashboard.admin.layout')
@section('main_content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">{{ $crud_names[$module_crud_type['type']] }} {{__('modules_name.'.$module_crud_type['module'])}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                @component('components.form.form' ,
['action'=>route('news.update',['news'=>$news->slug]),'method'=>'post','attr'=>['enctype'=>'multipart/form-data']])
                @slot('items')
                    @component('components.form.input',['id'=>'title','name'=>'title'
,'label'=>'عنوان','value'=>$news->title])@endcomponent
                    @component('components.form.textarea',['id'=>'short_note','name'=>'short_note'
,'label'=>'متن کوتاه','value'=>$news->short_note])@endcomponent
                        @component('components.form.tags_input'
,['label'=>'کلمه کلیدی','name'=>'tags','value'=>$news->tags])@endcomponent
                        @component('components.form.upload_file'
,['label'=>'تصاویر','id'=>'pic','name'=>'pic','value'=>$news->pic,'update'=>true])@endcomponent
                        @component('components.form.select2',['name'=>'cat_id','options'=>$news_cats,
'label'=>'دسته بندی','first_option'=>'دسته بندی اصلی',
'sub_method'=>'sub_cats','value'=>$news->cat_id])@endcomponent
                        @component('components.form.advance_summernote',['id'=>'description','name'=>'description'
,'label'=>'متن بلند','value'=>$news->description])@endcomponent
                        @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4']
,'type'=>'submit','value'=>'ثبت  فرم'])@endcomponent
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
    <!-- end col -->
</div>

@endsection
@section('js')
    <script>
        $('.summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true,                 // set focus to editable area after initializing summernote
            lang: 'fa-IR'
        });
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector('input[name=tags]');

        // initialize Tagify on the above input node reference
        var tagify=new Tagify(input, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        })
        $('input[type=file]').change(function(){
            $(".value_pic_before_change").remove()
        })
    </script>


@endsection
