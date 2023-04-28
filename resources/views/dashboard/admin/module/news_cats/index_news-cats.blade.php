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
    @component('components.list.form_filter')@endcomponent
    @component('components.form.table',
['columns'=>['عنوان','اخبار','نمایش','نمایش در صفحه اصلی','نمایش در منو بالا','عملیات']
,'column_en'=>['title','News_Num','state','state_header','state_main']
,'data'=>$news_cats,'edit_route'=>'news.cats.edit'])@endcomponent

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var url_current_page="{{route('news.cats.index')}}";
            var msg_delete='آیا شما اطمینان به حذف این ایتم دارید؟';
            var route_delete='{{route('news.cats.delete')}}';
            delete_item(msg_delete,route_delete);
            table_ajax(url_current_page,msg_delete,route_delete)
            ajaxPagination(url_current_page,msg_delete,route_delete)
        })


    </script>
@endsection
