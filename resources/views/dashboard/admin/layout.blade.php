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
    <link href="/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <meta name="theme-color" content="#283D92">

</head>

<body data-layout="detached" data-topbar="colored">



<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('dashboard.admin.layout.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('dashboard.admin.layout.vertical_menu')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                @yield('main_content')

            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>
                            © کووکس.
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
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                       data-bsstyle="/css/bootstrap-dark.min.css" data-appstyle="/css/app-dark.css">
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
<!-- JAVASCRIPT -->
<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/libs/metismenu/metisMenu.min.js"></script>
<script src="/libs/simplebar/simplebar.min.js"></script>
<script src="/libs/select2/js/select2.min.js"></script>
<script src="/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="/js/app.js"></script>
<script>
    $(".select2").select2();

    $(".select2-limiting").select2({
        maximumSelectionLength: 2
    });
</script>
</body>

</html>
