@extends('dashboard.admin.layout')

@section('main_content')
    <!-- start page title -->
    @component('components.list.header_list',['module_crud_type'=>$module_crud_type['module']])@endcomponent
    @component('components.list.base_table')
        @slot('filter_section')
            <div class="card-body">
                @component('components.filter.filter_list',['route'=>route('page.index'),'method'=>'get' ,'options_filter'=>false])
                    @slot('extra_filter')
                        @component('components.form.input',['label'=>'آدرس','id'=>'url'
,'name'=>'url','value'=>request()->get('url')])@endcomponent
                    @endslot
                @endcomponent
            </div>
        @endslot
        @slot('items')
            <form action="{{route('change.state.or.delete.page')}}" method="get">
                <div class="card-header">
                    @if(\Illuminate\Support\Facades\Session::has('success') || \Illuminate\Support\Facades\Session::has('error'))
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
                        @endif
                        @if(\Illuminate\Support\Facades\Session::has('error'))
                            <div class="alert alert-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</div>
                        @endif
                    @endif
                </div>
                <div class="card-body">
                    @if(isset($pages[0]))
                    <table class="table table-striped table-bordered mb-0 text-center">

                        <thead>
                        <tr>
                            <th><input type="checkbox" id="check_all"></th>
                            <th>عنوان</th>
                            <th>آدرس</th>
                            <th>وضعیت</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td scope="row"><input type="checkbox"
                                                           class="item" name="item[]" value="{{$page['id']}}"></td>
                                    <td>{{$page['title']}}</td>
                                    <td>{{$page['url']}}</td>
                                    <td>{{$lang_state[$page['state']] ?? ''}}</td>
                                    <td>{{$page->get_created_at_verta() ?? ''}}</td>
                                    <td>
                                        <div class="btn btn-danger btn-sm"
                                             data-delete="{{route('page.delete',['id'=>$page['id']])}}"><a
                                                href="javascript:void(0)">
                                                <i class="mdi mdi-delete-alert-outline"></i></a>
                                        </div>
                                        <a href="{{route('page.edit',['page'=>$page['id']])}}">
                                            <div type="button" class="btn btn-primary btn-sm position-relative">
                                                <i class="bx bx-pencil"></i>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="alert alert-danger">نتیجه ای یافت نشد</div>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <div class="mx-2">
                            <button class="btn btn-danger btn-sm" type="submit" name="crud" value="delete_all">حذف کلی</button>
                        </div>
                        <div class="mx-2">
                            <button class="btn btn-primary btn-sm" type="submit" name="crud" value="change_status">تغییر وضعیت
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        @endslot
    @endcomponent

@endsection
@section('js')
    <script>
        delete_item('ایا اطمینان به حذف دارید؟')
        check_all()
    </script>
@endsection

