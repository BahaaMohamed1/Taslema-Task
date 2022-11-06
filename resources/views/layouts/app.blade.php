<!doctype html>
<html lang="en">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
{{--<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/favicon.ico')}}" />--}}

<!-- TITLE -->
    <title>Dashboard</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}"/>

</head>

<body class="app sidebar-mini light-mode">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">
        <!-- app-Header -->
    @include('layouts.header')
    <!-- /app-Header -->

        <!--APP-SIDEBAR-->
    @include('layouts.sidebar')

    <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <h1 class="page-title">الصفحة الرئيسية</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">الصفحة الرئيسية</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->
                @yield('content')
                <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->
        </div>
    </div>

    <!-- FOOTER -->
@include('layouts.footer')
<!-- FOOTER END -->

</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!-- SIDEBAR JS -->
<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

<!-- SIDE-MENU JS-->
<script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- TypeHead js -->
{{--<script src="{{asset('assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>--}}
<script src="{{asset('assets/js/typehead.js')}}"></script>


<!-- Color Theme js -->
<script src="{{asset('assets/js/themeColors.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>