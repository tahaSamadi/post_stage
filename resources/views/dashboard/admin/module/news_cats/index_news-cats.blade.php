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
    @component('components.list.form_filter')
        @slot('extra_filter')
            @component('components.form.select2',['name'=>'parent_id','options'=>$news_cats_without_paginate,
            'label'=>'دسته بندی','first_option'=>'دسته بندی اصلی', 'sub_method'=>'sub_cats','value'=>''])@endcomponent
        @endslot
    @endcomponent
    @component('components.form.table',
['columns'=>['عنوان','اخبار','نمایش','نمایش در صفحه اصلی','نمایش در منو بالا','عملیات']
,'column_en'=>['title','News_Num','state','state_header','state_main']
,'data'=>$news_cats,'edit_route'=>'news.cats.edit'])@endcomponent

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var url_current_page = "{{route('news.cats.index')}}";
            var msg_delete = 'آیا شما اطمینان به حذف این ایتم دارید؟';
            var route_delete = '{{route('news.cats.delete')}}';
            delete_item(msg_delete, route_delete);
            table_ajax(url_current_page, msg_delete, route_delete)
            ajaxPagination(url_current_page, msg_delete, route_delete)

            $("#filter #filter_button").click(function (e) {
                e.preventDefault()
                var title=$("[name='title']").val() ?? '';
                var parent_id=$("[name='parent_id']").val() ?? '';
                var params={'title':title,'parent_id':parent_id}
                search_ajax(url_current_page,params,msg_delete,route_delete)

            })
        })


    </script>
@endsection
