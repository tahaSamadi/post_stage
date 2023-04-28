<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title></title>
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
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner-chase">
            <div class="chase-dot"></div>
            <div class="chase-dot"></div>
            <div class="chase-dot"></div>
            <div class="chase-dot"></div>
            <div class="chase-dot"></div>
            <div class="chase-dot"></div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('dashboard.admin.layout.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('dashboard.admin.layout.vertical_menu')
        <!-- ========== Left Sidebar END ========== -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                @yield('main_content')
            </div>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>


<!-- JAVASCRIPT -->
<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/libs/metismenu/metisMenu.min.js"></script>
<script src="/libs/simplebar/simplebar.min.js"></script>
<script src="/libs/select2/js/select2.min.js"></script>
<script src="/libs/node-waves/waves.min.js"></script>
<script src="/libs/sweetalert/sweetalert.js"></script>
<!-- App js -->
<script src="/js/app.js"></script>
@yield('js')
<script>
    $(".select2").select2();

    $(".select2-limiting").select2({
        maximumSelectionLength: 2
    });
    $("#check_all").click(function(){
        $('.item').not(this).prop('checked', this.checked);
    });
</script>
</body>

</html>
