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
    @component('components.form.table',['columns'=>['عنوان','اخبار','نمایش','نمایش در صفحه اصلی','نمایش در منو بالا','عملیات'],'data'=>$news_cats])@endcomponent

@endsection
