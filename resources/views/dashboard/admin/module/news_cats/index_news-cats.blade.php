@extends('dashboard.admin.layout')

@section('main_content')
    <!-- start page title -->
    @component('components.list.header_list',['module_crud_type'=>$module_crud_type['module']])@endcomponent
    @component('components.list.base_table')
        @slot('filter_section')
            @component('components.filter.filter_list',['route'=>route('news.cats.index'),'method'=>'get'
,'options_filter'=>$news_cats])@endcomponent
        @endslot
        @slot('filter_section')
            <div class="card-body">
                <form action="{{route('news.cats.index')}}" method="get">
                    @component('components.form.input',['label'=>'عنوان','id'=>'title'
,'name'=>'title','value'=>request('title')])@endcomponent
                        @component('components.form.select2',['name'=>'parent_id','options'=>$news_cats,
'label'=>'دسته بندی','first_option'=>'دسته بندی اصلی',
'sub_method'=>'sub_cats','value'=>request('parent_id')])@endcomponent
                        @component('components.form.button',['type'=>'submit','value'=>'فیلتر بر اساس'])@endcomponent
                </form>
            </div>
        @endslot
        @slot('items')
            <form action="{{route('change.state.or.delete.news_cat')}}" method="get">
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

                    @if(isset($news_cats[0]))
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
                            @foreach($news_cats as $news_cat)
                                <tr>
                                    <th scope="row"><input type="checkbox" class="item" name="item[]" value="{{$news_cat['id']}}"></th>
                                    <td>{{$news_cat['title']}}</td>
                                    <td>{{$lang_state[$news_cat['state']]}}</td>
                                    <td>{{$lang_state[$news_cat['state_main']]}}</td>
                                    <td>{{$lang_state[$news_cat['state_header']]}}</td>
                                    <td>{{$news_cat->get_created_at_verta()}}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"
                                                data-delete="{{route('news.cats.delete',['id'=>$news_cat['id']])}}"><a
                                                href="javascript:void(0)" data-href="">
                                                <i class="mdi mdi-delete-alert-outline"></i></a>
                                        </button>
                                        <a href="{{route('news.cats.edit',['news_cat'=>$news_cat['slug']])}}">
                                            <button type="button" class="btn btn-primary btn-sm position-relative">
                                                <i class="bx bx-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="{{route('news.cats.index',['parent_id'=>$news_cat['id']])}}">
                                            <button type="button" class="btn btn-dark btn-sm position-relative" >
                                                <i class=" mdi mdi-npm-variant-outline "></i>

                                                <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                {{$news_cat->sub_cats()->count()}}</span>
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
                    <div class="d-flex mt-4">
                        <div class="col-6 d-flex">
                            <div class="btn-parent mr-2">
                                <button type="submit" name="crud" value="change_state_main"
                                        class="btn btn-primary btn-sm mx-3">تغییر وضعیت در صفحه اصلی</button>
                            </div>
                            [
                            <label for="change_state_main" class="mx-2">نمایش
                                <input type="radio" id="change_state_main" name="change_state_main" value="1">
                            </label>
                            <label for=change_state_main"" class="mx-2">عدم نمایش
                                <input type="radio" id="change_state_main" name="change_state_main" value="0">
                            </label>
                            ]
                        </div>
                        <div class="col-6 d-flex">
                            <div class="btn-parent mr-2">
                                <button class="btn btn-primary btn-sm mx-3" type="submit" name="crud"
                                        value="change_state_header">تغییر وضعیت در بالای صفحه</button>
                            </div>
                            [
                            <label for="change_state_header" class="mx-2">نمایش
                                <input type="radio" id="change_state_header" name="change_state_header" value="1">
                            </label>
                            <label for="change_state_header" class="mx-2">عدم نمایش
                                <input type="radio" id="change_state_header" name="change_state_header" value="0">
                            </label>
                            ]
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

