@extends('dashboard.admin.layout')
@section('main_content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__("modules_name.".$module_crud_type['module'])}}</h4>
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
                    @component('components.form.form')
                        @slot('items')
                            @component('components.form.input',['id'=>'title','name'=>'title','label'=>'عنوان'])@endcomponent
                            @component('components.form.textarea',['id'=>'description','name'=>'description','label'=>'توضیحات'])@endcomponent
                            @component('components.form.select2',['name'=>'parent_id','options'=>$news_cats,'label'=>'دسته بندی','first_option'=>'دسته بندی اصلی'])@endcomponent
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>

@endsection
