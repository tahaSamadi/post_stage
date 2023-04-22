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

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">متن</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="جان اسنو" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-md-2 col-form-label">جستجو</label>
                        <div class="col-md-10">
                            <input class="form-control" type="search" value="چگونه در وب جستجو کنم" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">ایمیل</label>
                        <div class="col-md-10">
                            <input class="form-control text-left" type="email" value="bootstrap@example.com" id="example-email-input" dir="ltr">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-md-2 col-form-label">آدرس URL</label>
                        <div class="col-md-10">
                            <input class="form-control text-left" type="url" value="https://getbootstrap.com" id="example-url-input" dir="ltr">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-md-2 col-form-label">تلفن</label>
                        <div class="col-md-10">
                            <input class="form-control text-left" type="tel" value="+1 (555) 555 5555" id="example-tel-input" dir="ltr">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-md-2 col-form-label">رمز عبور</label>
                        <div class="col-md-10">
                            <input class="form-control text-left" type="password" value="hunter2" id="example-password-input" dir="ltr">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-md-2 col-form-label">عدد</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">تاریخ و زمان</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-md-2 col-form-label">تاریخ</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-month-input" class="col-md-2 col-form-label">ماه</label>
                        <div class="col-md-10">
                            <input class="form-control" type="month" value="2019-08" id="example-month-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-week-input" class="col-md-2 col-form-label">هفته</label>
                        <div class="col-md-10">
                            <input class="form-control" type="week" value="2019-W33" id="example-week-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-time-input" class="col-md-2 col-form-label">زمان</label>
                        <div class="col-md-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-color-input" class="col-md-2 col-form-label">رنگ</label>
                        <div class="col-md-10">
                            <input class="form-control" type="color" value="#3b5de7" id="example-color-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">انتخاب</label>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>انتخاب</option>
                                <option>انتخاب بزرگ</option>
                                <option>انتخاب کوچک</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label class="col-md-2 col-form-label">انتخاب سفارشی</label>
                        <div class="col-md-10">
                            <select class="custom-select">
                                <option selected>باز کردن فهرست انتخاب</option>
                                <option value="1">مورد یک</option>
                                <option value="2">مورد دو</option>
                                <option value="3">سه</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">اندازه ها</h4>
                    <p class="card-title-desc">ارتفاع را با استفاده از کلاس هایی مانند <code>.form-control-lg</code> و <code>.form-control-sm</code> می توانید تغییر دهید.</p>
                    <div>
                        <div class="mb-4">
                            <input class="form-control" type="text" placeholder="ورودی پیش فرض">
                        </div>
                        <div class="mb-4">
                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                        </div>
                        <div>
                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ورودی بازه</h4>
                    <p class="card-title-desc">ورودی های بازه افقی را با استفاده از کلاس <code>.form-control-range</code> می توانید ایجاد کنید.</p>

                    <div>
                        <h5 class="font-size-14">نمونه</h5>
                        <input type="range" class="form-control-range" id="formControlRange">
                    </div>
                    <div class="mt-4">
                        <h5 class="font-size-14">بازه سفارشی</h5>
                        <input type="range" class="custom-range" id="customRange1">

                        <input type="range" class="custom-range mt-4" min="0" max="5" id="customRange2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">چک باکس ها</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h5 class="font-size-14 mb-4 primary-font">چک باکس های پیش فرض</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        چک باکس پیش فرض
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
                                    <label class="form-check-label" for="defaultCheck2">
                                        چک باکس پیش فرض
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4 primary-font">چک باکس های سفارشی</h5>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                    <label class="custom-control-label" for="customCheck1">چک باکس سفارشی</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">چک باکس سفارشی</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">دکمه های رادیویی</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h5 class="font-size-14 mb-4 primary-font">دکمه های رادیویی پیش فرض</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        دکمه رادیویی پیش فرض
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        دکمه رادیویی پیش فرض
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4 primary-font">دکمه های رادیویی سفارشی</h5>
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">دکمه رادیویی سفارشی</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio2">دکمه رادیویی سفارشی</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">سوییچ ها</h4>
                    <p class="card-title-desc">یک سوییچ، markup مشابه یک چک باکس سفارشی را دارد اما از کلاس <code>.custom-switch</code> برای نمایش به صورت سوییچ استفاده میکند. سوییچ ها همچنین از اتریبیوت <code>disabled</code> پشتیبانی می کنند.</p>

                    <div class="custom-control custom-switch mb-2" dir="ltr">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">این المان سوییچ را کلیک کنید</label>
                    </div>
                    <div class="custom-control custom-switch" dir="ltr">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">المان سوییچ غیرفعال</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">مرورگر فایل</h4>
                    <p class="card-title-desc">ورودی فایل نیاز به افزودن جاوا اسکریپت های اضافی برای نمایش نام فایل انتخاب شده به جای <em>انتخاب فایل ...</em> دارد.</p>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end row -->
@endsection
