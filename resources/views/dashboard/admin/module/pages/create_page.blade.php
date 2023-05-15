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

                    @component('components.form.form',['action'=>route('page.store'),'method'=>'post','attr'=>['enctype'=>'multipart/form-data']])
                        @slot('items')
                            @component('components.form.input',['id'=>'title','name'=>'title','label'=>'عنوان','value'=>old('title')])@endcomponent
                                @component('components.form.input',['id'=>'title','name'=>'url','label'=>'آدرس','value'=>old('url')])@endcomponent
                                @component('components.form.upload_file'
,['label'=>'تصاویر','id'=>'pic','name'=>'pic'])@endcomponent
                                @component('components.form.advance_summernote',['id'=>'note','name'=>'note'
    ,'label'=>'متن بلند','value'=>old('note')])@endcomponent
                                @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4']
,'type'=>'submit','value'=>'ثبت فرم'])@endcomponent
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
    </script>


@endsection
