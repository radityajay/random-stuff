<?php
 include_once "../autoload.php";

 $role = ["Administrator", "Petugas"];
    if(!in_array($_SESSION['role'], $role)){
        header('location: ../login-admin.php');
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png"> -->
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../bootstrap/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../bootstrap/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../bootstrap/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <link href="../bootstrap/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../bootstrap/dist/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../image/logo.png" alt="homepage" class="dark-logo" width="40px" height="40px"/>
                                <!-- Light Logo icon -->
                                <!-- <img src="../bootstrap/assets/images/logo-icon.png" alt="homepage" class="light-logo" /> -->
                            </b>
                            <!--End Logo icon -->
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <!-- <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form> -->
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                
                                <span class="ml-2 d-none d-lg-inline-block"><span
                                        class="text-login"><?= $_SESSION['role'] ?></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../dashboard/index.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Form & Table</span></li>
                        <?php
                        if($_SESSION['role'] == "Administrator"){
                        ?>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../role/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Role</span></a></li>
                        <?php
                            }
                        ?>
                        
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../brand/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Brand</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../kategori/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Kategori</span></a></li>
                        <?php
                        if($_SESSION['role'] == "Administrator"){
                        ?>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../admin/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Admin</span></a></li>
                        <?php
                            }
                        ?>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../produk/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Produk</span></a></li>
                        </li><li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../vendor/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Vendor</span></a></li>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../store/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Store</span></a></li>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../inventaris/index.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Inventaris</span></a></li>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../bootstrap/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../bootstrap/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../bootstrap/dist/js/app-style-switcher.js"></script>
    <script src="../bootstrap/dist/js/feather.min.js"></script>
    <script src="../bootstrap/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../bootstrap/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../bootstrap/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../bootstrap/assets/extra-libs/c3/d3.min.js"></script>
    <script src="../bootstrap/assets/extra-libs/c3/c3.min.js"></script>
    <script src="../bootstrap/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../bootstrap/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../bootstrap/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../bootstrap/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../bootstrap/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../bootstrap/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../bootstrap/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../bootstrap/dist/js/app-style-switcher.js"></script>
    <script src="../bootstrap/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../bootstrap/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../bootstrap/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="../bootstrap/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../bootstrap/dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <!-- <script src="../bootstrap/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bootstrap/dist/js/pages/datatable/datatable-basic.init.js"></script> -->
</body>

</html>