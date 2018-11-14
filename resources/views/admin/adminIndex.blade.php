<?php $url="http://localhost/nganhangdethi/public/logInAD#/"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome Admin</title>
    <link rel="icon" href="<?php echo asset('') ?>favicon.ico" type="image/x-icon">

    <link href="<?php echo asset('') ?>css/font1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('') ?>css/font2.css" rel="stylesheet" type="text/css">


    <link href="<?php echo asset('') ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="<?php echo asset('') ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <link href="<?php echo asset('') ?>plugins/animate-css/animate.css" rel="stylesheet" />


    <link href="<?php echo asset('') ?>plugins/morrisjs/morris.css" rel="stylesheet" />


    <link href="<?php echo asset('') ?>css/style1.css" rel="stylesheet">

    <link href="<?php echo asset('') ?>css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red" ng-app="myApp"
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
           <!--    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div> -->
           <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Tài khoản</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
            </ul>
        </div>
        <div class="tenUser">
            @if(isset($user))
            {{"Xin chào ".$user->tenTK}}
            @endif
        </div>
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="index.html">Ngân hàng đề thi Trường Đại Học</a>
    </div>
</div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="images/user.png" width="48" height="48" alt="User" />
                <div class="tenUser1">
                    @if(isset($user))
                    {{$user->tenTK}}
                    @endif
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="active">
                    <a href="index.html">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Quản lý giảng viên</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="http://localhost/nganhangdethi/public/logInAD#/gvAdd">Thêm mới</a>
                        </li>
                        <li>
                            <a href="http://localhost/nganhangdethi/public/logInAD#/gvEdit">Chỉnh sửa Giảng viên</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Ngành</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/medias/image-gallery.html">Thêm mới</a>
                        </li>
                        <li>
                            <a href="pages/medias/carousel.html">Chỉnh sửa Ngành</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Môn học</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/forms/basic-form-elements.html">Thêm mới</a>
                        </li>
                        <li>
                            <a href="pages/forms/advanced-form-elements.html">Chỉnh sửa Môn học</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Chương</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/tables/normal-tables.html">Thêm mới</a>
                        </li>
                        <li>
                            <a href="pages/tables/jquery-datatable.html">Chỉnh sửa Chương</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>Câu hỏi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ui/alerts.html">Thêm mới</a>
                        </li>
                        <li>
                            <a href="pages/ui/animations.html">Chỉnh sửa câu hỏi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Đề thi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/charts/morris.html">Thêm mới</a>
                        </li>
                        <li>
                            <a href="pages/charts/flot.html">Chỉnh sửa đề thi</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">

    <div ng-view></div>

</section>

<!-- Jquery Core Js -->
<script src="<?php echo asset('') ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo asset('') ?>plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo asset('') ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo asset('') ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo asset('') ?>plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo asset('') ?>plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?php echo asset('') ?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo asset('') ?>plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="<?php echo asset('') ?>plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?php echo asset('') ?>plugins/flot-charts/jquery.flot.js"></script>
<script src="<?php echo asset('') ?>plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?php echo asset('') ?>plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?php echo asset('') ?>plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?php echo asset('') ?>plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?php echo asset('') ?>plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="<?php echo asset('') ?>js/admin1.js"></script>
<script src="<?php echo asset('') ?>js/index1.js"></script>

<!-- Demo Js -->
<script src="<?php echo asset('') ?>js/demo1.js"></script>
<script type="text/javascript" src="<?php echo asset('') ?>js/angular-1.5.min.js"></script>  
<script type="text/javascript" src="<?php echo asset('') ?>js/angular-animate.min.js"></script>
<script type="text/javascript" src="<?php echo asset('') ?>js/angular-aria.min.js"></script>
<script type="text/javascript" src="<?php echo asset('') ?>js/angular-messages.min.js"></script>
<script type="text/javascript" src="<?php echo asset('') ?>js/angular-material.min.js"></script>  
<script type="text/javascript" src="<?php echo asset('') ?>js/angular-route.min.js"></script>  
<script type="text/javascript" src="<?php echo asset('') ?>js/functionAngular.js"></script>  
</body>

</html>