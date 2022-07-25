<?php
require_once("koneksi.php");
include '../admin/login/koneksi.php';
session_start();
if (isset($_SESSION['username'])) {
    header('location:index.php');
}
?>


<html>

<head>
    <title>Form Pendafaran</title>
</head>

<body>

    <div align='center'>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Identitas Developer:</h5>
                                    <div class="form-group">
                                        <label for="">NIK</label><br>
                                        <input type="text" name="nik">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Nama</label><br>
                                        <input type="text" name="nama_dev">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Alamat</label><br>
                                        <input type="text" name="alamat_dev">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">No Telepon</label><br>
                                        <input type="text" name="no_dev">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Email</label><br>
                                        <input type="text" name="Email">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Username</label><br>
                                        <input type="text" name="username">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Password</label><br>
                                        <input type="text" name="password">
                                    </div>

                                    <input value="Daftar" type="submit" name="kirim">
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title-center">Spesifikasi Bangunan :</h5>
                                    <div class="form-group">
                                        <label for="">Foto Profil</label><br>
                                        <input type="file" name="gambar">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto KTP</label><br>
                                        <input type="file" name="gambar2">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Diri Beserta KTP</label><br>
                                        <input type="file" name="gambar3">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Siup</label><br>
                                        <input type="file" name="gambar4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </form>

        <?php
        if (isset($_POST['kirim'])) {
            $nik = $_POST['nik'];
            $nama_dev = $_POST['nama_dev'];
            $alamat_dev = $_POST['alamat_dev'];
            $no_dev = $_POST['no_dev'];
            $Email = $_POST['Email'];
            $status = 0;
            $username = $_POST['username'];
            $pass = $_POST['password'];

            $nama_file = $_FILES['gambar']['name'];
            $source = $_FILES['gambar']['tmp_name'];
            $folder = '../developer/img/data_developer/foto_profil/';
            move_uploaded_file($source, $folder . $nama_file);
            // Upload Foto KTP Developer
            $nama_file2 = $_FILES['gambar2']['name'];
            $source2 = $_FILES['gambar2']['tmp_name'];
            $folder2 = '../developer/img/data_developer/foto_ktp/';
            move_uploaded_file($source2, $folder2 . $nama_file2);
            // Upload Foto Diri dan KTP Developer
            $nama_file3 = $_FILES['gambar3']['name'];
            $source3 = $_FILES['gambar3']['tmp_name'];
            $folder3 = '../developer/img/data_developer/foto_diri_ktp/';
            move_uploaded_file($source3, $folder3 . $nama_file3);
            // Upload Foto Siup
            $nama_file4 = $_FILES['gambar4']['name'];
            $source4 = $_FILES['gambar4']['tmp_name'];
            $folder4 = '../developer/img/data_developer/foto_siup/';
            move_uploaded_file($source4, $folder4 . $nama_file4);


            $sql = "SELECT * FROM tabel_developer WHERE username_dev = '$username'";
            $query = $db->query($sql);
            if ($query->num_rows != 0) {
                echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
            } else {
                if (!$username || !$pass) {
                    echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
                } else {
                    $data = "INSERT INTO tabel_developer VALUES ('$nik', '$nama_dev', '$alamat_dev', '$no_dev', '$Email', '$nama_file', '$nama_file2', '$nama_file3', '$nama_file4', '$status', '$username', '$pass', '')";
                    $simpan = $db->query($data);
                    //var_dump($simpan);
                    if ($simpan) {
                        echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
                    } else {
                        echo "<div align='center'>Proses Gagal!</div>";
                    }
                }
            }

            // Query untuk memasukan data ke Database
            //$insert = mysqli_query($koneksi, "insert into tabel_data_rumah values ('$kd_data_rumah', '$kd_perumahan', '$judul_postingan', '$tipe_rumah', '$jumlah_unit_rumah', '$jumlah_kamar', '$jumlah_wc', '$harga', '$luas_tanah', '$luas_bangunan', '$sumber_air', '$daya_listrik', '$pondasi', '$dinding', '$daun_pintu', '$kusen', '$keramik', '$pintu_km_mandi', '$kerangka_atap', '$rangka_plafon', '$tutup_plafon', '$status', '$nama_file', '$nama_file2', '$nama_file3', '$nama_file4', '$nama_file5')");
            //if ($insert) {
            //    echo 'Data Berhasil di Simpan';
            //} else {
            //  echo 'Data Gagal di Simpan';
            //}
        }

        ?>

    </div>

</body>

</html>