<?php
include 'login/session.php';
include 'login/koneksi.php';
?>

<html>

<head>
    <title>Profil | Admin</title>
</head>

<body>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <?php
    // Mengambil id SESSION
    $id = (int) $_SESSION['id'];
    // Mencocokkan Id dengan Database
    $query = mysqli_query($koneksi, "select * from tabel_admin where kd_admin = '$id' ");
    // Memngambil  data di Database setelah id di cocokan
    $fetch = mysqli_fetch_array($query);
    ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="card">
                    <div class="card-header bg-gradient-maroon">
                        <h3 class="card-title">Profil Anda</h3>
                    </div>
                    <div class="card-body">
                        <table border="0">
                            <tr>
                                <td rowspan="5" width="200px"><img
                                        src="img/foto_profil/<?php echo $fetch['foto_profil']; ?>" width="180px"
                                        height="180px"></td>
                                <td>Nama</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td><?php echo $fetch['nama_admin']; ?></td>
                                <td>
                                    <a href="?page=edit_akun&?kd_admin=<?php echo $fetch['kd_admin'] ?>"
                                        class="btn btn-info btn-xs">
                                        <span class="fas fa-pen-square"> Edit</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td><?php echo $fetch['alamat_rumah']; ?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td><?php echo $fetch['admin_username']; ?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td><input type="password" value="<?php echo $fetch['admin_password']; ?>" readonly
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>No Telpon</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td><?php echo $fetch['no_telpon']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- Default box -->

    </section>
    <!-- /.content -->
</body>

</html>