<?php
include '../developer/session.php';
include 'Login/koneksi.php';
?>


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile Perumahan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Profil Perumahan</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <!--<div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>-->

        <?php

        $id = (int) $_SESSION['id'];
        $query = mysqli_query($koneksi, "select * from tabel_perumahan where nik = '$id' ");
        $fetch = mysqli_fetch_array($query);
        ?>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- Kd perumahan dan NIK -->
                <input type="hidden" name="kd_perumahan" value="<?php echo $fetch['kd_perumahan']; ?>"></input>
                <input type="hidden" name="nik" value="<?php echo $id; ?>"></<input>


                <h7>Foto Beranda</h7>
                <br>
                <img src="img/<?php echo $fetch['foto_beranda']; ?>" width="700px" height="200px">
                <!--<table border="1">
                    <tr>
                        <td>Nama Perumahan</td>
                        <td><input type="text" name="nama_perumahan" value="<?php echo $fetch['nama_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Perumahan</td>
                        <td><input type="text" name="alamat_kantor_perumahan" value="<?php echo $fetch['alamat_kantor_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Almat Perumahan</td>
                        <td><input type="text" name="alamat_perumahan" value="<?php echo $fetch['alamat_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi Informasi Perumahan Anda</td>
                        <td><input type="text" name="informasi_perumahan" value="<?php echo $fetch['informasi_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Vidio Profil Beranda </td>
                        <td><input type="text" name="vido_profile" value="<?php echo $fetch['vido_profile']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="Email" value="<?php echo $fetch['Email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>latitude</td>
                        <td><input type="text" name="latitude" value="<?php echo $fetch['latitude']; ?>"></td>
                    </tr>
                    <tr>
                        <td>longitude</td>
                        <td><input type="text" name="longitude" value="<?php echo $fetch['longitude']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td><input type="text" name="facebook" value="<?php echo $fetch['facebook']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td><input type="text" name="instagram" value="<?php echo $fetch['instagram']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Youtube</td>
                        <td><input type="text" name="youtube" value="<?php echo $fetch['youtube']; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="kirim" value="SIMPAN"></td>
                    </tr>


                </table>-->
            </form>

            <?php
            if (isset($_POST['kirim'])) {
                $kd_perumahan = $_POST['kd_perumahan'];
                $nik = $_POST['nik'];
                $nama_perumahan = $_POST['nama_perumahan'];
                $alamat_kantor_perumahan = $_POST['alamat_kantor_perumahan'];
                $alamat_perumahan = $_POST['alamat_perumahan'];
                $informasi_perumahan = $_POST['informasi_perumahan'];
                $vido_profile = $_POST['vido_profile'];
                $Email = $_POST['Email'];
                $latitude = $_POST['latitude'];
                $longitude = $_POST['longitude'];
                $facebook = $_POST['facebook'];
                $instagram = $_POST['instagram'];
                $youtube = $_POST['youtube'];
                // Upload Foto profile Developer
                $nama_file = $_FILES['foto_beranda']['name'];
                $source = $_FILES['foto_beranda']['tmp_name'];
                $folder = './img/';
                move_uploaded_file($source, $folder . $nama_file);

                // Query untuk memasukan data ke Database
                $insert = mysqli_query($koneksi, "insert into tabel_perumahan values ('$kd_perumahan', '$nik', '$nama_perumahan', '$alamat_kantor_perumahan', '$alamat_perumahan', '$informasi_perumahan', '$vido_profile', '$Email', '$latitude', '$longitude', '$facebook', '$instagram', '$youtube', '$nama_file')");
                if ($insert) {
                    echo 'Data Berhasil di Simpan';
                } else {
                    echo 'Data Gagal di Simpan';
                }
            }
            ?>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>