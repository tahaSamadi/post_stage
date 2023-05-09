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
<div class="home-btn d-none d-sm-block">
    <a href="{{route('base')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">

                    <div class="card-body">

                        <div class="text-center p-3">

                            <div class="img">
                                <img src="/images/error-img.png" class="img-fluid" alt="">
                            </div>

                            <h1 class="error-page mt-5"><span>404!</span></h1>
                            <h4 class="mb-4 mt-5">صفحه مورد نظر یافت نشد</h4>
                            <p class="mb-4 w-75 mx-auto">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
                            <a class="btn btn-primary mb-4 waves-effect waves-light" href="{{route('base')}}"><i class="mdi mdi-home"></i> بازگشت به داشبورد</a>
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
