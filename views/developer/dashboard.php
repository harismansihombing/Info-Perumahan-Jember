<?php
include "Login/koneksi.php";
?>

<html>

<head>

</head>

<body>
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
    </section>

    <section class="content">

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Perhatian!</strong> Pastikan Data Yang Anda Upload Benar dan Dapat Dipertanggung Jawabkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <?php
                        $id = (int) $_SESSION['id'];
                        $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_perumahan where nik = '$id' ");
                        $rowt = mysqli_fetch_array($seleksi);
                        $kd_perumahan = $rowt['kd_perumahan'];
                        $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah  where kd_perumahan = '$kd_perumahan'");

                        $count = mysqli_num_rows($query);
                        ?>
                        <h3><?php echo $count ?></h3>
                        <p>Postingan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a href="?page=tampil_postingan" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Selamat Datang di Sistem Informasi Perumahan Jember</div>
                    </div>
                    <div class="card-body bg-white">
                        <p>Anda Sudah Bergabung Bersama Kami, Peraturan Pada Situs IPJ. <a
                                href="?page=peraturan_ipj">Peraturan IPJ</a>
                        </p>
                        <p>Untuk Menambah Postingan Rumah, Pilih Fitur Postingan. <a
                                href="?page=tampil_postingan">Postingan</a> </p>
                        <p>Jika Anda Ingin Merubah Profil Perumahan, Pilih Fitur Profil Perumahan. <a
                                href="?page=profil_perumahan">Profil
                                Perumahan</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12 col-7">
                <!-- Calendar -->
                <div class="card bg-gradient-success">
                    <div class="card-header border-0">

                        <h3 class="card-title">
                            <i class="far fa-calendar-alt"></i>
                            Calendar
                        </h3>
                        <!-- tools card -->
                        <div class="card-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                    data-toggle="dropdown">
                                    <i class="fas fa-bars"></i></button>
                                <div class="dropdown-menu float-right" role="menu">
                                    <a href="#" class="dropdown-item">Add new event</a>
                                    <a href="#" class="dropdown-item">Clear events</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">View calendar</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                        <div id="sparkline-1" style="visibility: hidden; overflow:hidden; height:0; width:0;"></div>
                        <div id="sparkline-2" style="visibility: hidden; overflow:hidden; height:0; width:0;"></div>
                        <div id="sparkline-3" style="visibility: hidden; overflow:hidden; height:0; width:0;"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>

</body>

</html>