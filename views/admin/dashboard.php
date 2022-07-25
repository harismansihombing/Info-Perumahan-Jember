<?php
include "login/koneksi.php";
?>

<html>

<head>

</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="?page=pendaftar">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>

    <section class="content">
        <!-- Kotak Hitung  -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * from tabel_data_rumah");
                        $count = mysqli_num_rows($result);
                        ?>
                        <h3><?php echo $count ?></h3>
                        <p>Postingan</p>
                    </div>
                    <div class="icon">
                        <i class="ion icon ion-stats-bars"></i>
                    </div>
                    <a href="?page=postingan_ipj" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->


            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * from tabel_developer");
                        $count = mysqli_num_rows($result);
                        ?>
                        <h3><?php echo $count ?></h3>
                        <p>Akun Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class=" fas fa-id-card"></i>
                    </div>
                    <a href="?page=akun_terdaftar" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->


            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * from tabel_developer WHERE status_developer = 0");
                        $count = mysqli_num_rows($result);
                        ?>
                        <h3><?php echo $count ?></h3>
                        <p>Pendaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="?page=pendaftar" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </section>


</body>

</html>