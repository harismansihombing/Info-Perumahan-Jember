<?php
include 'Login/koneksi.php';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pendaftar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=pendaftar">Home</a></li>
                    <li class="breadcrumb-item active">Profil Perusahaan</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

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
            <form action="" method="POST" enctype="multipart/form-data">
                <table border="0">
                    <tr>
                        <td>Nik</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type=" number" name="nik" spaceholder="Masukkan nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="nama_dev" spaceholder="Masukkan nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="alamat_dev" spaceholder="Masukkan nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telp</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="number" name="no_dev" spaceholder="Masukkan alamat">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="username_dev" spaceholder="Username">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="password" name="password_dev" spaceholder="Password">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="file" name="gambar">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto KTP</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="file" name="gambar2">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Diri dan KTP</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="file" name="gambar3">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="kirim" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>


            <?php
            if (isset($_POST['kirim'])) {
                $nik = $_POST['nik'];
                $nama_dev = $_POST['nama_dev'];
                $alamat_dev = $_POST['alamat_dev'];
                $no_dev = $_POST['no_dev'];
                $username_dev = $_POST['username_dev'];
                $password_dev = $_POST['password_dev'];
                // Upload Foto profile Developer
                $nama_file = $_FILES['gambar']['name'];
                $source = $_FILES['gambar']['tmp_name'];
                $folder = './img/data_developer/foto_profil/';
                move_uploaded_file($source, $folder . $nama_file);
                // Upload Foto KTP Developer
                $nama_file2 = $_FILES['gambar2']['name'];
                $source2 = $_FILES['gambar2']['tmp_name'];
                $folder2 = './img/data_developer/foto_ktp/';
                move_uploaded_file($source2, $folder2 . $nama_file2);
                // Upload Foto Diri dan KTP Developer
                $nama_file3 = $_FILES['gambar3']['name'];
                $source3 = $_FILES['gambar3']['tmp_name'];
                $folder3 = './img/data_developer/foto_diri_ktp/';
                move_uploaded_file($source3, $folder3 . $nama_file3);

                // Query untuk memasukan data ke Database
                $insert = mysqli_query($koneksi, "insert into tabel_developer values ('$nik','$nama_dev','$alamat_dev', '$no_dev', '', '$nama_file', '$nama_file2', '$nama_file3', '', '$username_dev', '$password_dev')");
                if ($insert) {
                    echo 'Data Berhasil di Simpan';
                } else {
                    echo 'Data Gagal di Simpan';
                }
            }
            ?>


        </div>
    </div>
    <!-- /.card -->
</section>