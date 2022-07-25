<?php
include 'Login/koneksi.php'
?>

<html>

<head>
    <title>inbox</title>
</head>

<body>
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table border="1" style="text-align:center">
                    <tr>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Username</td>
                        <td>password</td>
                        <td>Foto Profil</td>
                        <td>Foto Ktp</td>
                        <td>Foto Diri</td>
                        <td colspan="2">Aksi</td>
                    </tr>

                    <?php
                    $query = mysqli_query($koneksi, "select * from tabel_developer");
                    //$fetch = mysqli_fetch_array($query);
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $row['nik']; ?></td>
                            <td><?php echo $row['nama_dev']; ?></td>
                            <td><?php echo $row['alamat_dev']; ?></td>
                            <td><?php echo $row['no_dev']; ?></td>
                            <td><img src="img/<?php echo $row['foto_profil_dev']; ?>" width="100px" height="100px"></td>
                            <td><img src="img/<?php echo $row['foto_ktp_dev']; ?>" width="100px" height="100px"></td>
                            <td><img src="img/<?php echo $row['foto_diri_dev']; ?>" width="100px" height="100px"></td>
                            <td>
                                <a href="edit.php?nik=<?php echo $row['nik'] ?>" class="btn btn-danger">
                                    <span class="far fa-trash-alt">asd</span>
                                </a>
                            </td>
                            <td>
                                <a href="hapus.php?nik=<?php echo $row['nik'] ?>" class="btn btn-warning">
                                    <span class="fas fa-pen-square"></span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Select2 (Default Theme)</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Perumahan</label><br>
                        <input type="text" style="width: 100%;">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Alamat Kantor Pemasaran</label>
                        <input type="text" style="width: 100%;"><br>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <label for="">Hubungkan Profil Perumahan Dengan Social Media:</label>
                    <div class="form-group">
                        <label>Instagram</label><br>
                        <input type="text" style="width: 100%;">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="">coba</label><br>
                        <input type="text" style="width: 100%;">
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</body>


</html>