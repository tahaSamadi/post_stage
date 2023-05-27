<div class="vertical-menu">
    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">طاها </a>
                <p class="text-body mt-1 mb-0 font-size-13">ادمین وبسایت</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">منوها</li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class=" mdi mdi-settings-transfer-outline "></i>
                        <span>تنظیمات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('config_main.index')}}">تنظیمات اصلی</a></li>
                        <li><a href="{{route('change.password.index')}}">تغییر رمز عبور</a></li>
                        <li><a href="javascript:void(0)">جزییات بازدیدکنندگان</a></li>
                        <li><a href="javascript:void(0)">جزییات ورود به مدیریت</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class=" mdi mdi-newspaper"></i>
                        <span>اخبار</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('news.cats.create')}}">ایجاد دسته بندی اخبار</a></li>
                        <li><a href="{{route('news.cats.index')}}">لیست دسته بندی اخبار</a></li>
                        <li><a href="{{route('news.create')}}">ایجاد اخبار</a></li>
                        <li><a href="{{route('news.index')}}">لیست اخبار</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-menu-open"></i>
                        <span>منو ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('menu.create')}}">منو جدید</a></li>
                        <li><a href="{{route('menu.index')}}">لیست منو ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-page-break"></i>
                        <span>صفحات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('page.create')}}">صفحه جدید</a></li>
                        <li><a href="{{route('page.index')}}">لیست صفحات</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-phone-call"></i>
                        <span>تماس با ما</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('contact.create')}}">دسته بندی جدید تماس با ما</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

