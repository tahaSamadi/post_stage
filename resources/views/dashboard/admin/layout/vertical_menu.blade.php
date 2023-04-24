<div class="vertical-menu">
    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">طاها نیما</a>
                <p class="text-body mt-1 mb-0 font-size-13">ادمین وبسایت</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">منوها</li>

                <li>
                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                        <i class=" mdi mdi-newspaper"></i>
                        <span>اخبار</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('news.cats.create')}}">ایجاد دسته بندی اخبار</a></li>
                        <li><a href="{{route('news.cats.index')}}">لیست دسته بندی اخبار</a></li>
                        <li><a href="javascript:void(0)">ایجاد اخبار</a></li>
                        <li><a href="javascript:void(0)">لیست اخبار</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
