@extends('dashboard.admin.layout')

@section('main_content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- start page title -->
    @component('components.list.header_list',['module_crud_type'=>$module_crud_type['module']])@endcomponent
    @component('components.list.base_table')
        @slot('items')
            <form action="" method="get">
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
                    @if(isset($news[0]))
                    <table class="table table-striped table-bordered mb-0 text-center">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="check_all"></th>
                                <th>عنوان</th>
                                <th>وضعیت</th>
                                <th>نمایش در صفحه اصلی</th>
                                <th>نمایش در منو بالا</th>
                                <th>تاریخ ایجاد</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $value)
                                <tr>
                                    <th scope="row"><input type="checkbox"
                                                           class="item" name="item[]" value="{{$value['id']}}"></th>
                                    <td>{{$value['title']}}</td>
                                    <td>{{$lang_state[$value['state']]}}</td>
                                    <td>{{$lang_state[$value['state_main']]}}</td>
                                    <td>{{$lang_state[$value['state_header']]}}</td>
                                    <td>{{$value->get_created_at_verta()}}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"
                                                data-delete="{{route('news.delete',['id'=>$value['id']])}}"><a
                                                href="javascript:void(0)" data-href="">
                                                <i class="mdi mdi-delete-alert-outline"></i></a>
                                        </button>
                                        <a href="javascript:void(0)">
                                            <button type="button" class="btn btn-primary btn-sm position-relative">
                                                <i class="bx bx-pencil"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="paginate_link d-flex justify-content-center mt-3">
                        {{$news_cats->links()}}
                    </div>
                    @else
                        <div class="alert alert-danger">نتیجه ای یافت نشد</div>
                    @endif
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

