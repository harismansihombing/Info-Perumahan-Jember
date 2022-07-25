<?php
include 'login/koneksi.php';
?>

<html>

<head>
    <title>Edit | Profil</title>
</head>

<body>

    <section class="content">

        <?php

        $id = $_GET['?kd_admin'];

        $query = mysqli_query($koneksi, "select * from tabel_admin where kd_admin = '$id' ");
        $fetch = mysqli_fetch_array($query);
        ?>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Profil Anda</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="kd_admin" value="<?php echo $fetch['kd_admin']; ?>" />
                    <table border="0">
                        <tr>
                            <td rowspan="5" width="200px"><img
                                    src="img/foto_profil/<?php echo $fetch['foto_profil']; ?>" width="180px"
                                    height="180px"></td>
                            <td>Nama</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <input type="text" name="nama_admin" spaceholder="Masukkan nama"
                                    value="<?php echo $fetch['nama_admin']; ?>">
                            </td>
                            <td></td>
                            <td><input type="submit" value="Simpan" name="kirim" class="btn btn-info btn-sm"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <input type="text" name="alamat_rumah" spaceholder="Masukkan alamat"
                                    value="<?php echo $fetch['alamat_rumah']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <input type="text" name="admin_username" spaceholder="Username"
                                    value="<?php echo $fetch['admin_username']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <input type="password" name="admin_password" spaceholder="Password"
                                    value="<?php echo $fetch['admin_password']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="no_telpon" value="<?php echo $fetch['no_telpon']; ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="6" height="70"> <input type="file" name="foto_profil"></td>
                        </tr>
                    </table>
                </form>

                <?php
                if (isset($_POST['kirim'])) {
                    $kd_admin = $_POST['kd_admin'];
                    $nama_admin = $_POST['nama_admin'];
                    $alamat_rumah = $_POST['alamat_rumah'];
                    $admin_username = $_POST['admin_username'];
                    $admin_password = $_POST['admin_username'];
                    $no_telpon = $_POST['no_telpon'];

                    // Upload Foto profile Developer
                    $nama_file = $_FILES['foto_profil']['name'];
                    $source = $_FILES['foto_profil']['tmp_name'];
                    $folder = 'img/foto_profil/';


                    // Query untuk memasukan data ke Database
                    if ($nama_file != '') {
                        move_uploaded_file($source, $folder . $nama_file);
                        $update = mysqli_query($koneksi, "UPDATE tabel_admin SET nama_admin='$nama_admin', alamat_rumah='$alamat_rumah', admin_username='$admin_username', admin_password='$admin_password', no_telpon='$no_telpon', foto_profil='$nama_file' where kd_admin='$kd_admin'");
                        if ($update) {
                            //echo 'Data Berhasil di Simpan';
                            //echo "<meta http-equiv='refresh' content='0'>";
                            echo "<script>alert('Data Berhasil Diubah');window.location='?page=profile'</script>";
                        } else {
                            //echo 'Data Gagal di Simpan';
                            echo "<script>alert('Data Gagal Diubah');window.location='?page=profile'</script>";
                        }
                    } else {
                        $update = mysqli_query($koneksi, "UPDATE tabel_admin SET nama_admin='$nama_admin', alamat_rumah='$alamat_rumah', admin_username='$admin_username', admin_password='$admin_password', no_telpon='$no_telpon' where kd_admin='$kd_admin'");
                        if ($update) {
                            //echo 'Data Berhasil di Simpan ';
                            //echo "<meta http-equiv='refresh' content='0'>";
                            echo "<script>alert('Data Berhasil Diubah');window.location='?page=profile'</script>";
                        } else {
                            //echo 'Data Gagal di Simpan';
                            echo "<script>alert('Data Gagal Diubah');window.location='?page=profile'</script>";
                        }
                    }
                }
                ?>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>


</body>

</html>