<?php
session_start();
include 'Login/koneksi.php';

if ($_SESSION['status'] != "login") {
  header("location:login/login.php?pesan=belum_login");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Info Perumahan Jember</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/sb admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="../../assets/sb admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="../../assets/sb admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../assets/sb admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../assets/sb admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/sb admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../assets/sb admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../assets/sb admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../assets/sb admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-link">
                    <p>Selamat Datang <?php echo $_SESSION['nama']; ?></a></p>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-link">
                    <a href="Login/logout.php">
                        <p><span class="nav-icon fas fa-sign-out-alt"></span> Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="?page=dashboard" class="brand-link text-center">
                <span class="brand-text font-weight-light">Info Perumahan Jember</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="img/data_developer/foto_profil/<?php echo $_SESSION['gbr']; ?>" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="index.php" class="d-block">
                            <?php
                        echo $_SESSION['nama']
                       ?>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="?page=dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=akun" class="nav-link">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>
                                    Akun
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=profil_perumahan" class="nav-link">
                                <i class="nav-icon fas fa-store-alt"></i>
                                <p>
                                    Profil Perumahan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=tampil_postingan" class="nav-link">
                                <i class="nav-icon far fa-clipboard"></i>
                                <p>
                                    Postingan
                                </p>
                            </a>
                        </li>

                        <!--<li class="nav-item">
        <a href="?page=inbox" class="nav-link">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            inbox
          </p>
        </a>
      </li>-->

                        <!--<li class="nav-item">
                      <a href="Login/logout.php" class="nav-link">
                          <i class="nav-icon fas fa-arrow-left"></i>
                          <p>
                              keluar
                          </p>
                      </a>
                  </li>-->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php
        if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
          include "dashboard.php";
        } elseif (@$_GET['page'] == 'akun') {
          include "akun.php";
        } elseif (@$_GET['page'] == 'profil_perumahan') {
          include "profil_perumahan.php";
        } elseif (@$_GET['page'] == 'tampil_postingan') {
          include "tampil_postingan.php";
        } elseif (@$_GET['page'] == 'tambah_postingan') {
          include "tambah_postingan.php";
        } elseif (@$_GET['page'] == 'edit_postingan') {
          include "edit_postingan.php";
        } elseif (@$_GET['page'] == 'edit_akun') {
          include "edit_akun.php";
        } elseif (@$_GET['page'] == 'inbox') {
          include "inbox.php";
        } elseif (@$_GET['page'] == 'peraturan_ipj') {
          include "peraturan_ipj.php";
        } elseif (@$_GET['page'] == 'link_vidio') {
            include "link_vidio.php";
        }  elseif (@$_GET['page'] == 'mencari_kordinat') {
            include "mencari_kordinat.php";
        }


      ?>

            <!-- Main content -->
            <section class="content">
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <footer class="main-footer">
            <h9>© 2019 Copyright: InfoPerumahanJember</h9>
        </footer>



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../assets/sb admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../assets/sb admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/sb admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../assets/sb admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../assets/sb admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../assets/sb admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../assets/sb admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../assets/sb admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../assets/sb admin/plugins/moment/moment.min.js"></script>
    <script src="../../assets/sb admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../assets/sb admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../assets/sb admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../assets/sb admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/sb admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../assets/sb admin/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/sb admin/dist/js/demo.js"></script>
</body>

</html>