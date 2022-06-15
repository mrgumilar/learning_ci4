<!DOCTYPE html>
<html lang="en">

<head>
<?= $this->include('backoffice/partials_/head')?>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a  class="logo">
                    <span class="logo-light">
                        <i class="mdi mdi-camera-control"></i> Learning
                    </span>
                    <span class="logo-sm">
                        <i class="mdi mdi-camera-control"></i>
                    </span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    <!-- language-->


                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->


                    <li class="dropdown notification-list list-inline-item">
                    <?= $this->include('backoffice/partials_/user_navigation')?>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <?= $this->include('backoffice/partials_/menu')?>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                    <?= $this->renderSection('bc')?>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <?= $this->renderSection('konten')?>




                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                © 2022<span class="d-none d-sm-inline-block"> - Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Gumilar Hasta Pratama</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <?= $this->include('backoffice/partials_/js')?>
    <!-- jQuery  -->
  

</body>

</html>