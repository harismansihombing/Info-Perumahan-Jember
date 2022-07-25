<?php
include('../../config/koneksi.php');
$db  = new database();
$data_developer = $db->tampil_data();
?>

<html>

<head>
    <title>Akun | Terdaftar</title>
</head>

<body>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Account Developer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?page=pendaftar">Home</a></li>
                        <li class="breadcrumb-item active">Akun Terdaftar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->


        <!-- tabel akun terdaftar -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr style="text-align:center">
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Developer</th>
                                    <th>Alamat Developer</th>
                                    <th>No Developer</th>
                                    <th>Username Developer</th>
                                    <th>Password Developer</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            foreach ($data_developer as $row) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['nik']; ?></td>
                                        <td><?php echo $row['nama_dev']; ?></td>
                                        <td><?php echo $row['alamat_dev']; ?></td>
                                        <td><?php echo $row['no_dev']; ?></td>
                                        <td><?php echo $row['username_dev']; ?></td>
                                        <td><?php echo $row['password_dev']; ?></td>
                                        <td><input type="submit" class="btn btn-info btn-xs" value="Edit"></td>
                                        <td><input type="submit" class="btn btn-danger btn-xs" value="Hapus"></td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
</body>

</html>