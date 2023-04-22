@extends('dashboard.admin.layout')
@section('main_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('modules_name.'.$module_crud_type['module'])}}</h4>
                <div class="page-title-right">
                    @include('dashboard.admin.layout.breadcrumb')
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $crud_names[$module_crud_type['type']] }} {{__("modules_name.".$module_crud_type['module'])}} </h4>

                    @component('components.form.form',['action'=>route('news_cats.cats.store'),'method'=>'post'])
                        @slot('items')
                            @component('components.form.input',['id'=>'title','name'=>'title','label'=>'عنوان','value'=>old('title')])@endcomponent
                            @component('components.form.input',['id'=>'slug','name'=>'slug','label'=>'اسلاگ','value'=>old('slug')])@endcomponent
                            @component('components.form.textarea',['id'=>'description','name'=>'description','label'=>'توضیحات','value'=>old('description')])@endcomponent
                            @component('components.form.select2',['name'=>'parent_id','options'=>$news_cats,'label'=>'دسته بندی','first_option'=>'دسته بندی اصلی', 'sub_method'=>'sub_cats','value'=>old('parent_id')])@endcomponent
                            @component('components.form.button',['attr'=>['class'=>'btn btn-primary mt-4'],'type'=>'submit','value'=>'ثبت    فرم'])@endcomponent
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>

@endsection
