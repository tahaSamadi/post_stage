@extends('dashboard.admin.layout')
@section('main_content')
    <!-- start page title -->
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">{{ $crud_names[$module_crud_type['type']] }} {{__('modules_name.'.$module_crud_type['module'])}}</h4>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @component('components.form.form',['action'=>route('page.update',['page'=>$page->id])
,'method'=>'post','attr'=>['enctype'=>'multipart/form-data']])
                        @slot('items')
                            @component('components.form.input'
,['id'=>'title','name'=>'title','label'=>'عنوان','value'=>$page->title])@endcomponent
                                @component('components.form.input'
    ,['id'=>'url','name'=>'url','label'=>'آدرس','value'=>$page->url])@endcomponent
                                @component('components.form.upload_file'
,['label'=>'تصاویر','id'=>'pic','name'=>'pic','value'=>$page->pic,'update'=>true])@endcomponent
                                @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4']
,'type'=>'submit','value'=>'ثبت  فرم'])@endcomponent
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('input[type=file]').change(function(){
            $(".value_pic_before_change").remove()
        })
    </script>
@endsection
