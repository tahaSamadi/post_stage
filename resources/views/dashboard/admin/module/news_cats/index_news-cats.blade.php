@extends('dashboard.admin.layout')

@section('main_content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('modules_name.'.$module_crud_type['module'])}}</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{route('change.state.or.delete')}}" method="get">
                    <div class="card-header"></div>
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
                                <td>
                                    <button class="btn btn-danger btn-sm"
                                            data-delete="{{route('news.cats.delete',['id'=>$news_cat['id']])}}"><a
                                            href="javascript:void(0)" data-href="">
                                            <i class="mdi mdi-delete-alert-outline"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-sm position-relative">
                                        <a href="{{route('news.cats.edit',['news_cat'=>$news_cat['slug']])}}">
                                            <i class="bx bx-pencil"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-dark btn-sm position-relative" >
                                        <a href="{{route('news.cats.index',['parent_id'=>$news_cat['id']])}}">
                                            <i class=" mdi mdi-npm-variant-outline "></i></a>
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                {{$news_cat->sub_cats()->count()}}</span>
                                    </button>
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
                                <button class="btn btn-danger btn-sm" type="submit" name="delete_all" value="1">حذف کلی</button>
                            </div>
                            <div class="mx-2">
                                <button class="btn btn-primary btn-sm" type="submit" name="change_status" value="change_status">تغییر وضعیت
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <div class="col-6 d-flex">
                                <div class="btn-parent mr-2">
                                    <div class="btn btn-primary btn-sm mx-3">تغییر وضعیت در صفحه اصلی</div>
                                </div>
                                [
                                <label for="" class="mx-2">نمایش
                                     <input type="radio" id="change_state_main" name="change_state_main" value="1">
                                </label>
                                <label for="" class="mx-2">عدم نمایش
                                    <input type="radio" id="change_state_main" name="change_state_main" value="0">
                                </label>
                                ]
                            </div>
                            <div class="col-6 d-flex">
                                <div class="btn-parent mr-2">
                                    <button class="btn btn-primary btn-sm mx-3" type="submit" name="change_value_menu"
                                            value="change_value_menu">تغییر وضعیت در بالای صفحه</button>
                                </div>
                                [
                                <label for="" class="mx-2">نمایش
                                    <input type="radio" id="change_state_header" name="change_state_header" value="1">
                                </label>
                                <label for="" class="mx-2">عدم نمایش
                                    <input type="radio" id="change_state_header" name="change_state_header" value="0">
                                </label>
                                ]
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        delete_item('ایا اطمینان به حذف دارید؟')
        check_all()
    </script>
@endsection

