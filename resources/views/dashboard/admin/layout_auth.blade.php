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
    <link href="/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css">
    <!-- jquery.vectormap css -->
    <link href="/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="/css/icons.css" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="/css/app.css" id="app-style" rel="stylesheet" type="text/css">
    <!-- Theme Color -->
    <link rel="stylesheet" href="/libs/tagify/tagify.css">
    <link href="/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <meta name="theme-color" content="#283D92">

</head>

<body data-layout="detached" data-topbar="colored">

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay"></div>
                        <div class="position-relative">
                            <h5 class="text-white font-size-20">@yield('title')</h5>
                            <p class="text-white-50 mb-0">@yield('description')</p>
                            <a href="index.html" class="logo logo-admin mt-4">
                                <img src="images/logo-sm-dark.png" alt="" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="p-2">
                            @yield('items_filter')
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/libs/metismenu/metisMenu.min.js"></script>
<script src="/libs/simplebar/simplebar.min.js"></script>
<script src="/libs/select2/js/select2.min.js"></script>
<script src="/libs/node-waves/waves.min.js"></script>
<script src="/libs/tagify/tags.js"></script>
<script src="/libs/tagify/tags.js_2"></script>
<script src="/libs/summernote/summernote-bs4.min.js"></script>
<script src="/libs/summernote/lang/summernote-fa-IR.min.js"></script>
<script src="/libs/sweetalert/sweetalert.js"></script>
<!-- App js -->
<script src="/js/app.js"></script>
@yield('js')
<script>
    $(".select2").select2();

    $(".select2-limiting").select2({
        maximumSelectionLength: 2
    });
</script>
</body>

</html>
