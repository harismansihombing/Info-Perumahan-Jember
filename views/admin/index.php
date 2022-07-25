<?php
session_start();

if ($_SESSION['status'] != "login") {
  header("location:login/login.php?pesan=belum_login");
} else {
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "berhasil") {
       
            echo "<script>alert('Login Berhasil');</script>";
        }
    }
} 

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin || IPJ</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/sb admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../assets/sb admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <!--<nav class="main-header navbar navbar-expand navbar-white navbar-light">-->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #3C8DBC;">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-link">
                    <p class="text-white">Selamat Datang <?php echo $_SESSION['nama_admin']; ?></a></p>
                </li>
                <!--<li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link text-white">Home</a>
                    <div class="info">
                        <a href="#" class="d-block">

                        </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link text-white">Contact</a>
                </li>-->
            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="?page=pendaftar">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">
                            <?php
                             include 'login/koneksi.php';
                             $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_developer where status_developer = 0 ");
                             $cek = mysqli_num_rows($seleksi);
                             echo $cek;
                            ?>

                        </span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="Login/logout.php">
                        <p class="text-white"><span class="nav-icon fas fa-sign-out-alt text-white"></span> Log Out</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #222D32;">
            <!-- Brand Logo -->
            <a href="?page=dashboard" class="brand-link text-center">
                <span class="brand-text font-weight-light">Info Perumahan Jember</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="img/foto_profil/<?php echo $_SESSION['gbr']; ?>" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php
                            //session_start();
                            if ($_SESSION['status'] != "login") {
                                header("location:login/login.php?pesan=belum_login");
                            }
                            echo $_SESSION['nama_admin']
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
                            <a href="?page=profile" class="nav-link">
                                <i class="nav-icon far fa-user-circle"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=pendaftar" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    Pendaftar
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=akun_terdaftar" class="nav-link">
                                <i class="nav-icon fas fa-user-edit"></i>
                                <p>
                                    Akun Terdaftar
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=postingan_ipj" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Postingan IPJ
                                </p>
                            </a>
                        </li>

                        <!--<li class="nav-item">
                            <a href="login/logout.php" class="nav-link">
                                <i class="nav-icon fas fa-chevron-left"></i>
                                <p>
                                    Keluar
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


            <!-- Kondisi Halaman -->
            <?php
                if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
                    include "../../views/admin/dashboard.php";
                } elseif (@$_GET['page'] == 'profile') {
                    include "../../views/admin/akun.php";
                } elseif (@$_GET['page'] == 'pendaftar') {
                    include "akun_developer.php";
                } elseif (@$_GET['page'] == 'akun_terdaftar') {
                    include "../../views/admin/akun_terdaftar.php";
                } elseif (@$_GET['page'] == 'hitung_postingan') {
                    include "hitung_postingan.php";
                } elseif (@$_GET['page'] == 'pendaftar2') {
                    include "../../views/admin/pendaftar2.php";
                } elseif (@$_GET['page'] == 'pendaftar3') {
                    include "../../views/admin/pendaftar3.php";
                } elseif (@$_GET['page'] == 'edit_akun') {
                    include "edit_profil.php";
                } elseif (@$_GET['page'] == 'lihat_akun') {
                    include "tampilan_detail_akun_developer.php";
                } elseif (@$_GET['page'] == 'hapus_akun') {
                    include "hapus_akun.php";
                } elseif (@$_GET['page'] == 'lihat_akun_terdaftar') {
                    include "tampilan_detail_akun_terdaftar.php";
                } elseif (@$_GET['page'] == 'postingan_ipj') {
                    include "data_postingan.php";
                } elseif (@$_GET['page'] == 'detail_data_rumah') {
                    include "detail_data_rumah.php";
                }

            ?>


            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <footer class="main-footer">
            <h10><b>Copyright&copy;</b>Info Perumahan Jember</h10>
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
    <!-- Bootstrap 4 -->
    <script src="../../assets/sb admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/sb admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/sb admin/dist/js/demo.js"></script>
</body>

</html>