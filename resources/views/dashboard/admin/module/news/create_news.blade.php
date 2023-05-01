@extends('dashboard.admin.layout')
@section('main_content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('modules_name.'.$module_crud_type['module'])}}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $crud_names[$module_crud_type['type']] }} {{__("modules_name.".$module_crud_type['module'])}} </h4>

                    @component('components.form.form' ,['action'=>route('news.store'),'method'=>'post','attr'=>['enctype'=>'multipart/form-data']])
                        @slot('items')
                            @component('components.form.input',['label'=>'عنوان','id'=>'title'
,'name'=>'title','value'=>old('title')])@endcomponent
                            @component('components.form.textarea',['label'=>'متن کوتاه','id'=>'short_note'
,'name'=>'short_note','value'=>old('short_note')])@endcomponent
                            @component('components.form.tags_input',['label'=>'کلمه کلیدی','name'=>'tags','value'=>old('tags')])@endcomponent
                            @component('components.form.upload_file',['label'=>'تصاویر','id'=>'pic','name'=>'pic'])@endcomponent
                            @component('components.form.advance_summernote',['id'=>'long_note','name'=>'long_note'
,'label'=>'متن بلند','value'=>old('long_note')])@endcomponent
                            @component('components.form.button',['type'=>'submit','value'=>'ثبت فرم'])@endcomponent
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
    </script>


@endsection
