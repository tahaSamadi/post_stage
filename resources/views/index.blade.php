<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>داشبورد - قالب مدیریتی Qovex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="/css/icons.css" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="/css/app.css" id="app-style" rel="stylesheet" type="text/css">
    <!-- Theme Color -->
    <meta name="theme-color" content="#283D92">

</head>

<body data-layout="detached" data-topbar="colored">

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="container-fluid">
                    <div class="float-right">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="جستجو ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">اسپانیایی</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">آلمانی</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">ایتالیایی</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">روسی</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> اعلان ها </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> مشاهده همه</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1 primary-font">سفارش شما ثبت شد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1 primary-font">تونی استارک</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1 primary-font">محصول شما ارسال شد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="/images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1 primary-font">استیو راجرز</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> مشاهده بیشتر ...
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/images/users/avatar-2.jpg" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1">جان</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> پروفایل</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> کیف پول من</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> قفل صفحه</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> خروج</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-settings-outline"></i>
                            </button>
                        </div>

                    </div>
                    <div>
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="/images/logo-sm.png" alt="" height="20">
                                    </span>
                                <span class="logo-lg">
                                        <img src="/images/logo-dark.png" alt="" height="17">
                                    </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="/images/logo-sm.png" alt="" height="20">
                                    </span>
                                <span class="logo-lg">
                                        <img src="/images/logo-light.png" alt="" height="19">
                                    </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-inline-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="جستجو ...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        <div class="dropdown dropdown-mega d-none d-lg-inline-block ml-2">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                مگا منو
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0">اجزای رابط کاربری</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">لایت باکس</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">انتخاب‌گر بازه</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">هشدار Sweet</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">امتیاز</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">فرم ها</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">جدول ها</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">نمودار ها</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0">برنامه ها</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">تجارت الکترونیک</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">تقویم</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">ایمیل</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">پروژه ها</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">وظایف</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">تماس</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0">صفحات بیشتر</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">نوار کناری روشن</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">نوار کناری فشرده</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">طرح منوی افقی</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">تعمیرات</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">به زودی</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">خط زمانی</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">سوالات متداول</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="font-size-14 mt-0">اجزاء</h5>
                                                <div class="px-lg-2">
                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="/images/brands/github.png" alt="Github">
                                                                <span>گیت هاب</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="/images/brands/bitbucket.png" alt="bitbucket">
                                                                <span>بیت باکت</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="/images/brands/dribbble.png" alt="dribbble">
                                                                <span>دریبل</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="/images/brands/dropbox.png" alt="dropbox">
                                                                <span>دراپ باکس</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="/images/brands/mail_chimp.png" alt="mail_chimp">
                                                                <span>میل چیمپ</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="dropdown-icon-item" href="#">
                                                                <img src="/images/brands/slack.png" alt="slack">
                                                                <span>اسلک</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div>
                                                    <div class="card text-white mb-0 overflow-hidden text-white-50" style="background-image: url('/images/megamenu-img.png');background-size: cover;">
                                                        <div class="card-img-overlay"></div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <h4 class="text-white mb-3">فروش</h4>

                                                                    <h5 class="text-white-50">تا <span class="font-size-24 text-white">50 %</span> تخفیف</h5>
                                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                                                    <div class="mb-4">
                                                                        <a href="#" class="btn btn-success btn-sm">مشاهده بیشتر</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div class="h-100">

                <div class="user-wid text-center py-4">
                    <div class="user-img">
                        <img src="/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
                    </div>

                    <div class="mt-3">

                        <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">جان اسنو</a>
                        <p class="text-body mt-1 mb-0 font-size-13">طراح رابط کاربری</p>

                    </div>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">منو</li>

                        <li>
                            <a href="javascript:%20void(0);" class="waves-effect">
                                <i class="mdi mdi-airplay"></i><span class="badge badge-pill badge-info float-right">2</span>
                                <span>داشبورد</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html">داشبورد 1</a></li>
                                <li><a href="index-2.html">داشبورد 2</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-flip-horizontal"></i>
                                <span>طرح ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="layouts-horizontal.html">افقی</a></li>
                                <li><a href="layouts-compact-sidebar.html">نوار کناری فشرده</a></li>
                                <li><a href="layouts-icon-sidebar.html">نوار کناری آیکن</a></li>
                                <li><a href="layouts-boxed.html">طرح جعبه ای</a></li>
                                <li><a href="layouts-preloader.html">انیمیشن بارگذاری</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html" class=" waves-effect">
                                <i class="mdi mdi-calendar-text"></i>
                                <span>تقویم</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-inbox-full"></i>
                                <span>ایمیل</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html">صندوق ورودی</a></li>
                                <li><a href="email-read.html">جزئیات ایمیل</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>وظایف</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tasks-list.html">لیست وظایف</a></li>
                                <li><a href="tasks-kanban.html">تخته یادداشت ها</a></li>
                                <li><a href="tasks-create.html">ایجاد وظیفه</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-account-circle-outline"></i>
                                <span>صفحات</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-login.html">ورود</a></li>
                                <li><a href="pages-register.html">ثبت نام</a></li>
                                <li><a href="pages-recoverpw.html">بازیابی رمز عبور</a></li>
                                <li><a href="pages-lock-screen.html">قفل صفحه</a></li>
                                <li><a href="pages-starter.html">صفحه شروع</a></li>
                                <li><a href="pages-invoice.html">صورتحساب</a></li>
                                <li><a href="pages-profile.html">پروفایل</a></li>
                                <li><a href="pages-maintenance.html">تعمیرات</a></li>
                                <li><a href="pages-comingsoon.html">به زودی</a></li>
                                <li><a href="pages-timeline.html">خط زمانی</a></li>
                                <li><a href="pages-faqs.html">سوالات متداول</a></li>
                                <li><a href="pages-pricing.html">قیمت ها</a></li>
                                <li><a href="pages-404.html">خطای 404</a></li>
                                <li><a href="pages-500.html">خطای 500</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">اجزاء</li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                                <span>رابط کاربری</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html">اعلان‌ها</a></li>
                                <li><a href="ui-buttons.html">دکمه ها</a></li>
                                <li><a href="ui-cards.html">کارت ها</a></li>
                                <li><a href="ui-carousel.html">گردونه</a></li>
                                <li><a href="ui-dropdowns.html">منوی کشویی</a></li>
                                <li><a href="ui-grid.html">توری</a></li>
                                <li><a href="ui-images.html">تصاویر</a></li>
                                <li><a href="ui-lightbox.html">لایت باکس</a></li>
                                <li><a href="ui-modals.html">مودال ها</a></li>
                                <li><a href="ui-rangeslider.html">انتخاب‌گر بازه</a></li>
                                <li><a href="ui-session-timeout.html">محدودیت زمان جلسه</a></li>
                                <li><a href="ui-progressbars.html">نوارهای پیشرفت</a></li>
                                <li><a href="ui-sweet-alert.html">هشدار Sweet Alert</a></li>
                                <li><a href="ui-tabs-accordions.html">تب و منوی باز شونده</a></li>
                                <li><a href="ui-typography.html">تایپوگرافی</a></li>
                                <li><a href="ui-video.html">ویدئو</a></li>
                                <li><a href="ui-general.html">عمومی</a></li>
                                <li><a href="ui-colors.html">رنگ ها</a></li>
                                <li><a href="ui-rating.html">امتیاز</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="waves-effect">
                                <i class="mdi mdi-newspaper"></i>
                                <span class="badge badge-pill badge-danger float-right">6</span>
                                <span>فرم ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html">عناصر فرم</a></li>
                                <li><a href="form-validation.html">اعتبارسنجی فرم</a></li>
                                <li><a href="form-advanced.html">فرم پیشرفته</a></li>
                                <li><a href="form-editors.html">ویرایشگر متن</a></li>
                                <li><a href="form-uploads.html">ارسال فایل</a></li>
                                <li><a href="form-xeditable.html">ویرایشگر Xeditable</a></li>
                                <li><a href="form-repeater.html">تکرار شونده ها</a></li>
                                <li><a href="form-wizard.html">فرم مرحله ای</a></li>
                                <li><a href="form-mask.html">ماسک فرم</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-clipboard-list-outline"></i>
                                <span>جدول ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html">جدول‌های پایه</a></li>
                                <li><a href="tables-datatable.html">جدول های داده</a></li>
                                <li><a href="tables-responsive.html">جدول واکنشگرا</a></li>
                                <li><a href="tables-editable.html">جدول قابل ویرایش</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-chart-donut"></i>
                                <span>نمودار ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-apex.html">نمودار Apex</a></li>
                                <li><a href="charts-chartjs.html">نمودار Chartjs</a></li>
                                <li><a href="charts-flot.html">نمودار Flot</a></li>
                                <li><a href="charts-knob.html">نمودار Jquery Knob</a></li>
                                <li><a href="charts-sparkline.html">نمودار Sparkline</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-emoticon-happy-outline"></i>
                                <span>آیکن‌ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-boxicons.html">Boxicons</a></li>
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-map-marker-outline"></i>
                                <span>نقشه‌ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html">نقشه گوگل</a></li>
                                <li><a href="maps-vector.html">نقشه وکتور</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-file-tree"></i>
                                <span>چند سطحی</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript:%20void(0);">سطح 1.1</a></li>
                                <li><a href="javascript:%20void(0);" class="has-arrow">سطح 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript:%20void(0);">سطح 2.1</a></li>
                                        <li><a href="javascript:%20void(0);">سطح 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">داشبورد</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">به داشبورد کووکس خوش آمدید</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="mdi mdi-tag-plus-outline"></i>
                                            </span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-16 mt-2">سفارشات جدید</div>
                                    </div>
                                </div>
                                <h4 class="mt-3 mb-0 primary-font">1,368</h4>
                                <div class="row mb-n1">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-success mr-2"> 0.28% <i class="mdi mdi-arrow-up"></i> </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="mdi mdi-account-multiple-outline"></i>
                                            </span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-16 mt-2">کاربران جدید</div>

                                    </div>
                                </div>
                                <h4 class="mt-3 mb-0 primary-font">2,456</h4>
                                <div class="row mb-n1">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-success mr-2"> 0.16% <i class="mdi mdi-arrow-up"></i> </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">گزارش فروش ها</h4>

                                <div id="line-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">درآمد</h4>

                                <div id="column-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">تجزیه و تحلیل فروش ها</h4>

                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div id="donut-chart" class="apex-charts"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="py-3">
                                                        <p class="mb-0 text-truncate"><i class="mdi mdi-circle text-primary mr-1"></i> آنلاین</p>
                                                        <h5 class="primary-font">2,652</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="py-3">
                                                        <p class="mb-0 text-truncate"><i class="mdi mdi-circle text-success mr-1"></i> آفلاین</p>
                                                        <h5 class="primary-font">2,284</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="py-3">
                                                        <p class="mb-0 text-truncate"><i class="mdi mdi-circle text-warning mr-1"></i> بازاریابی</p>
                                                        <h5 class="primary-font">1,753</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">فروش ماهانه</h4>

                                <div id="scatter-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="text-white-50">
                                    <h5 class="text-white">2400+ کاربر جدید</h5>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</p>
                                    <div>
                                        <a href="#" class="btn btn-outline-success btn-sm">مشاهده بیشتر</a>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-8">
                                        <div class="mt-3">
                                            <img src="/images/widget-img.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 pb-1">نمای کلی</h4>

                                <div>
                                    <div class="pb-3 border-bottom">
                                        <div class="row align-items-center my-n1">
                                            <div class="col-8">
                                                <p class="mb-0">بازدیدکنندگان جدید</p>
                                                <h4 class="mb-0 primary-font">3,524</h4>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-right">
                                                    <div>
                                                        2.06 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                    </div>
                                                    <div class="progress progress-sm mt-3">
                                                        <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom">
                                        <div class="row align-items-center my-n1">
                                            <div class="col-8">
                                                <p class="mb-0">مشاهده محصول</p>
                                                <h4 class="mb-0 primary-font">2,465</h4>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-right">
                                                    <div>
                                                        0.37 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                    </div>
                                                    <div class="progress progress-sm mt-3">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="row align-items-center my-n1">
                                            <div class="col-8">
                                                <p class="mb-0">درآمد</p>
                                                <h4 class="mb-0 primary-font">4,653</h4>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-right">
                                                    <div>
                                                        2.18 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                    </div>
                                                    <div class="progress progress-sm mt-3">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">نقد و بررسی ها</h4>
                                <div class="mb-4">
                                    <h5 class="mt-n2 primary-font"><span class="text-primary">500</span>+ مشتری راضی</h5>
                                </div>
                                <div class="mb-3">
                                    <i class="fas fa-quote-right h4 text-primary"></i>
                                </div>
                                <div id="reviewExampleControls" class="carousel slide review-carousel" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                                                <div class="media mt-4 pt-1">
                                                    <div class="avatar-sm mr-3">
                                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    ج
                                                                </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-size-16 mt-n2 mb-0 primary-font">استیو جابز</h5>
                                                        <p class="mb-2">بنیان گذار شرکت اپل</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                                                <div class="media mt-4 pt-1">
                                                    <div class="avatar-sm mr-3">
                                                        <img src="/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-size-16 mt-n2 mb-0 primary-font">تونی استارک</h5>
                                                        <p class="mb-2">طراح وب</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                                                <div class="media mt-4 pt-1">
                                                    <div class="avatar-sm mr-3">
                                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    س
                                                                </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-size-16 mt-n2 mb-0 primary-font">بیل گیتس</h5>
                                                        <p class="mb-2">رئیس مایکروسافت</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="carousel-control-prev" href="#reviewExampleControls" role="button" data-slide="prev">
                                        <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#reviewExampleControls" role="button" data-slide="next">
                                        <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">درآمد بر اساس منطقه</h4>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div id="usa-vectormap" style="height: 230px"></div>
                                    </div>

                                    <div class="col-sm-5 ml-auto">
                                        <div class="mt-4 mt-sm-0">
                                            <p>در آمد ماه اخیر</p>

                                            <div class="media py-3">
                                                <div class="media-body">
                                                    <p class="mb-1">تهران</p>
                                                    <h5 class="mb-0 primary-font">2,256 تومان</h5>
                                                </div>
                                                <div>
                                                    2.52 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                </div>
                                            </div>
                                            <div class="media py-3 border-top">
                                                <div class="media-body">
                                                    <p class="mb-1">تبریز</p>
                                                    <h5 class="mb-0 primary-font">1,853 تومان</h5>
                                                </div>
                                                <div>
                                                    1.26 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                </div>
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
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">صندوق ورودی</h4>

                                <ul class="inbox-wid list-unstyled">
                                    <li class="inbox-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <div class="mr-3 align-self-center">
                                                    <img src="/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="font-size-16 mb-0 mt-n1 primary-font">پائول</h5>
                                                    <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی با</p>
                                                </div>
                                                <div class="font-size-12 ml-2">
                                                    05 دقیقه
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="inbox-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <div class="mr-3 align-self-center">
                                                    <img src="/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="font-size-16 mb-0 mt-n1 primary-font">ماری</h5>
                                                    <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی</p>
                                                </div>
                                                <div class="font-size-12 ml-2">
                                                    12 دقیقه
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="inbox-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <div class="mr-3 align-self-center">
                                                    <img src="/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="font-size-16 mb-0 mt-n1 primary-font">سلینا</h5>
                                                    <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی</p>
                                                </div>
                                                <div class="font-size-12 ml-2">
                                                    18 دقیقه
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="inbox-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <div class="mr-3 align-self-center">
                                                    <img src="/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="font-size-16 mb-0 mt-n1 primary-font">استیو</h5>
                                                    <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی با تولید</p>
                                                </div>
                                                <div class="font-size-12 ml-2">
                                                    2 ساعت پیش
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-sm">بارگذاری بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">آخرین تراکنش ها</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered">
                                        <thead>
                                        <tr>
                                            <th scope="col">تاریخ</th>
                                            <th scope="col">شناسه</th>
                                            <th scope="col">نام صورتحساب</th>
                                            <th scope="col">مقدار</th>
                                            <th scope="col" colspan="2">وضعیت پرداخت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1399/01/15</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1235</a>
                                            </td>
                                            <td>تونی استارک</td>
                                            <td>125 تومان</td>
                                            <td><span class="badge badge-soft-success font-size-12">پرداخت شده</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        <tr>
                                            <td>1399/01/16</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1236</a>
                                            </td>
                                            <td>روبرتو کارلوس</td>
                                            <td>118 تومان</td>
                                            <td><span class="badge badge-soft-danger font-size-12">شارژ شده</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        <tr>
                                            <td>1399/01/17</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1237</a>
                                            </td>
                                            <td>استیو راجرز</td>
                                            <td>115 تومان</td>
                                            <td><span class="badge badge-soft-success font-size-12">پرداخت شده</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        <tr>
                                            <td>1399/01/18</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1238</a>
                                            </td>
                                            <td>اولیور کوئین</td>
                                            <td>121 تومان</td>
                                            <td><span class="badge badge-soft-warning font-size-12">بازپرداخت</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-3">
                                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#">قبلی</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © کووکس.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                ارائه شده در وب‌سایت راست‌چین
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">تنظیمات</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0">
        <h6 class="text-center mb-0">انتخاب طرح</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked>
                <label class="custom-control-label" for="light-mode-switch">طرح روشن</label>
            </div>

            <div class="mb-2">
                <img src="/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="/css/bootstrap-dark.min.css" data-appstyle="/css/app-dark.css">
                <label class="custom-control-label" for="dark-mode-switch">طرح تیره</label>
            </div>
        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/libs/metismenu/metisMenu.min.js"></script>
<script src="/libs/simplebar/simplebar.min.js"></script>
<script src="/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="/libs/apexcharts/apexcharts.min.js"></script>

<!-- jquery.vectormap map -->
<script src="/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<script src="/js/pages/dashboard.init.js"></script>

<script src="/js/app.js"></script>

</body>

</html>
