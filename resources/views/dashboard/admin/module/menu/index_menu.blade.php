@extends('dashboard.admin.layout')

@section('main_content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- start page title -->
    @component('components.list.header_list',['module_crud_type'=>$module_crud_type['module']])@endcomponent
    @component('components.list.base_table')
        @slot('filter_section')
            @component('components.filter.filter_list',['route'=>route('menu.index'),'method'=>'get'
,'options_filter'=>false])@endcomponent
            @slot('items')
                <form action="{{route('change.state.or.delete.menu')}}" method="get">
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
                        @if(isset($menu[0]))
                            <table class="table table-striped table-bordered mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="check_all"></th>
                                        <th>عنوان</th>
                                        <th>مکان</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($menu as $value)
                                        <tr>
                                            <th scope="row"><input type="checkbox"
                                                                   class="item" name="item[]" value="{{$value['id']}}"></th>
                                            <td>{{$value['title']}}</td>
                                            <td>{{$value->menu_type_test->title}}</td>
                                            <td>{{$lang_state[$value['state']] ?? ''}}</td>
                                            <td>{{$value->get_created_at_verta() ?? ''}}</td>
                                            <td>
                                                <div class="btn btn-danger btn-sm"
                                                     data-delete="{{route('menu.delete',['id'=>$value['id']])}}"><a
                                                        href="javascript:void(0)" data-href="">
                                                        <i class="mdi mdi-delete-alert-outline"></i></a>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <div type="button" class="btn btn-primary btn-sm position-relative">
                                                        <i class="bx bx-pencil"></i>
                                                    </div>
                                                </a>
                                                <a href="{{route('menu.index',['parent_id'=>$value['id']])}}">
                                                    <div type="button" class="btn btn-dark btn-sm position-relative" >
                                                        <i class=" mdi mdi-npm-variant-outline "></i>

                                                        <span class="position-absolute top-0 start-100
                                                         translate-middle badge rounded-pill bg-danger">
                                                {{$value->sub_cats()->count()}}</span>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @component('components.list.pagination',['items'=>$menu])@endcomponent
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
        @endslot
    @endcomponent
@endsection
@section('js')
    <script>
        delete_item('ایا اطمینان به حذف دارید؟')
        check_all()
    </script>
@endsection
