<?php ob_start();
include 'Login/koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit | Profil</title>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="lolkittens" />


    <script src="../../assets/js/jquery-3.4.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#kecamatan').change(function() {
            var kd_kecamatan = $(this).val();

            $.ajax({
                type: 'POST',
                url: '../Frontend/kelurahan.php',
                data: 'kd_kecamatan=' + kd_kecamatan,
                success: function(response) {
                    $('#kelurahan').html(response);
                }
            });
        })
    });
    </script>
</head>

<body>
    <?php
    $id = (int) $_SESSION['id'];
    $query = mysqli_query($koneksi, "select * from tabel_perumahan where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    $cek = $fetch['kd_perumahan'];


    if ($cek == NULL) {
        //echo 'Data kosong bos'; 
    ?>


    <div class="container-fluid">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="nik" value="<?php echo $id; ?>"></<input>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-body bg-white">
                            <div class="form-group">
                                <label>Foto Beranda</label><br>
                                <img src="img/<?php echo $fetch['foto_beranda']; ?>" width="700px" height="300px"
                                    style="width: 100%;">
                                <br>
                                <input type="file" name="foto_beranda" style="width: 100%;"></<input>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- //col -->
            </div>
            <!-- //row -->

            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <!-- Card Header -->
                    <div class="card card-primary">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Profile Perumahan Anda</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form Body -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Perumahan</label><br>
                                <input type="text" class="form-control" name="nama_perumahan"
                                    value="<?php echo $fetch['nama_perumahan']; ?>" maxlength="30">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Alamat Perumahan</label><br>
                                <textarea name="alamat_perumahan" id="" cols="30" rows="10" style="width: 100%;"
                                    maxlength="50"><?php echo $fetch['alamat_perumahan']; ?>
                                </textarea>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Kecamatan Perumahan</label><br>
                                <?php
                                $kecamatan = mysqli_query($koneksi, "SELECT * FROM tabel_kecamatan");
                                ?>
                                <select class="form-control" name="kecamatan" id="kecamatan" required>
                                    <option value="">Pilih Kecamatan</option>
                                    <?php while ($kecamatan_row = mysqli_fetch_array($kecamatan)) { ?>
                                    <option value="<?php echo $kecamatan_row['kd_kecamatan'] ?>">
                                        <?php echo $kecamatan_row['nama_kecamatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Kelurahan Perumahan</label><br>
                                <select class="form-control" name="kelurahan" id="kelurahan" required>
                                    <option value="">Pilih Kelurahan</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Deskripsi Informasi Perumahan</label>
                                <textarea name="informasi_perumahan" id="" cols="30" rows="10"
                                    style="width: 100%;"><?php echo $fetch['informasi_perumahan']; ?></textarea>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- //Form Body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--// Kolom Kiri -->

                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <!-- Card Header -->
                    <div class="card card-primary">
                        <div class="card-header bg-warning">
                            <h3 class="card-title">Profil Kantor Pemasaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form Body -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Alamat Kantor Pemasaran</label><br>
                                <textarea name="alamat_kantor_perumahan" id="" cols="30" rows="10" style="width: 100%;"
                                    maxlength="50"><?php echo $fetch['alamat_kantor_perumahan']; ?>
                                </textarea>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>latitude</label><br>
                                <input type="text" name="latitude" value="<?php echo $fetch['latitude']; ?>"
                                    class="form-control" maxlength="30">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>longitude</label><br>
                                <input type="text" name="longitude" value="<?php echo $fetch['longitude']; ?>"
                                    class="form-control" maxlength="30">
                                <a href="?page=mencari_kordinat">
                                    <h8 class="text-red">Cara Mendapatkan Titik Kordinat</h8>
                                </a>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Email Kantor Pemasaran</label><br>
                                <input type="email" name="Email" value="<?php echo $fetch['email_perum']; ?>"
                                    class="form-control" maxlength="30">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Nomor Telepon Kantor Pemasaran</label><br>
                                <input type="text" name="no_telp_perum" value="<?php echo $fetch['no_telp_perum']; ?>"
                                    class="form-control" minlength="14" maxlength="14"
                                    onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Nomor Whatsapp Kantor Pemasaran</label><br>
                                <input type="text" name="no_perum" value="<?php echo $fetch['no_perum']; ?>"
                                    class="form-control" minlength="14" maxlength="14"
                                    onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </div>
                            <!-- /.form-group -->
                            <h5>Hubungkan Profil Perumhan Anda Dengan Social Media</h5>
                            <div class="form-group">
                                <label>Instagram</label><br>
                                <input type="text" name="instagram" value="<?php echo $fetch['instagram']; ?>"
                                    class="form-control" maxlength="50">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Facebook</label><br>
                                <input type="text" name="facebook" value="<?php echo $fetch['facebook']; ?>"
                                    class="form-control" maxlength="50">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Youtube</label><br>
                                <input type="text" name="youtube" value="<?php echo $fetch['youtube']; ?>"
                                    class="form-control" maxlength="50">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Vidio Profil Beranda</label><br>
                                <input type="text" name="vidio_profile" value="<?php echo $fetch['vidio_profile']; ?>"
                                    class="form-control" maxlength="70">
                                <a href="?page=link_vidio">
                                    <h8 class="text-red">Cara Mendapatkan link Vidio</h8>
                                </a>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group text-center">
                                <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info btn-md"
                                    class="form-control" style="width: 100%;">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- //Form Body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- // Kolom Kanan -->


            </div>
            <!-- //ROW -->
        </form>
        <?php
        if (isset($_POST['kirim'])) {
            //$kd_perumahan = $_POST['kd_perumahan'];
            $nik = $_POST['nik'];
            $nama_perumahan = $_POST['nama_perumahan'];
            $alamat_kantor_perumahan = $_POST['alamat_kantor_perumahan'];
            $alamat_perumahan = $_POST['alamat_perumahan'];
            $kecamatan_perum = $_POST['kecamatan'];
            $kelurahan_perum = $_POST['kelurahan'];
            $informasi_perumahan = $_POST['informasi_perumahan'];
            $vidio_profile = $_POST['vidio_profile'];
            $Email = $_POST['Email'];
            $no_telp_perum = $_POST['no_telp_perum'];
            $no_perum = $_POST['no_perum'];
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
            $insert = mysqli_query($koneksi, "INSERT into tabel_perumahan values ('', '$nik', '$nama_perumahan', '$alamat_kantor_perumahan', '$alamat_perumahan', '$kecamatan_perum', '$kelurahan_perum', '$informasi_perumahan', '$vidio_profile', '$Email', '$latitude', '$longitude', '$facebook', '$instagram', '$youtube', '$nama_file', '$no_perum', '$no_telp_perum')");
            if ($insert) {
                echo 'Data Berhasil di Simpan';
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo 'Data Gagal di Simpan';
            }
        }
        ?>
    </div>
    <!-- Container Fluid -->




    <?php
    } else {
        //echo 'Data ready';
    ?><br>
    <div class="container-fluid">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-body bg-white">
                            <div class="form-group">
                                <label>Foto Beranda</label><br>
                                <img src="img/<?php echo $fetch['foto_beranda']; ?>" width="700px" height="300px"
                                    style="width: 100%;">
                                <br>
                                <input type="file" name="foto_beranda" style="width: 100%;"></<input>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- //col -->
            </div>
            <!-- //row -->

            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <!-- Card Header -->
                    <div class="card card-primary">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Profile Perumahan Anda</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form Body -->
                        <div class="card-body">
                            <div class="form-group">
                                <!-- Kd perumahan dan NIK -->
                                <input type="hidden" name="kd_perumahan"
                                    value="<?php echo $fetch['kd_perumahan']; ?>"></input>
                                <label>Nama Perumahan</label><br>
                                <input type="text" class="form-control" name="nama_perumahan"
                                    value="<?php echo $fetch['nama_perumahan']; ?>" maxlength="30">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Alamat Perumahan</label><br>
                                <textarea name="alamat_perumahan" id="" cols="30" rows="10" style="width: 100%;"
                                    maxlength="50"><?php echo $fetch['alamat_perumahan']; ?></textarea>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Kecamatan Perumahan</label><br>
                                <?php
                                $kd_kecamatan = $fetch['kecamatan_perum'];
                                $kecamatan = mysqli_query($koneksi, "SELECT * FROM tabel_kecamatan");
                                $kecamatan2 = mysqli_query($koneksi, "SELECT * FROM tabel_kecamatan WHERE kd_kecamatan =$kd_kecamatan ");
                                $fetchh = mysqli_fetch_array($kecamatan2);
                                ?>
                                <select class="form-control" name="kecamatan" id="kecamatan">
                                    <option value=""><?php echo $fetchh['nama_kecamatan']; ?></option>
                                    <?php while ($kecamatan_row = mysqli_fetch_array($kecamatan)) { ?>
                                    <option value="<?php echo $kecamatan_row['kd_kecamatan'] ?>">
                                        <?php echo $kecamatan_row['nama_kecamatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Kelurahan Perumahan</label><br>
                                <?php
                                $kd_kelurahan = $fetch['kelurahan_perum'];
                                $kelurahan = mysqli_query($koneksi, "SELECT * FROM tabel_kelurahan WHERE kd_kelurahan =$kd_kelurahan ");
                                $fetchhh = mysqli_fetch_array($kelurahan);
                                ?>
                                <select class="form-control" name="kelurahan" id="kelurahan">
                                    <option value=""><?php echo $fetchhh['nama_kelurahan']; ?></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Deskripsi Informasi Perumahan</label>
                                <textarea name="informasi_perumahan" id="" cols="30" rows="10"
                                    style="width: 100%;"><?php echo $fetch['informasi_perumahan']; ?></textarea>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- //Form Body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--// Kolom Kiri -->

                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <!-- Card Header -->
                    <div class="card card-primary">
                        <div class="card-header bg-warning">
                            <h3 class="card-title">Profil Kantor Pemasaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form Body -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Alamat Kantor Pemasaran</label><br>
                                <textarea name="alamat_kantor_perumahan" id="" cols="30" rows="10" style="width: 100%;"
                                    maxlength="50"><?php echo $fetch['alamat_kantor_perumahan']; ?></textarea>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>latitude</label><br>
                                <input type="text" name="latitude" value="<?php echo $fetch['latitude']; ?>"
                                    class="form-control" maxlength="30">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>longitude</label><br>
                                <input type="text" name="longitude" value="<?php echo $fetch['longitude']; ?>"
                                    class="form-control" maxlength="30">
                                <a href="?page=mencari_kordinat">
                                    <h8 class="text-red">Cara Mendapatkan Titik Kordinat</h8>
                                </a>

                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Email Kantor Pemasaran</label><br>
                                <input type="email" name="Email" value="<?php echo $fetch['email_perum']; ?>"
                                    class="form-control" maxlength="30">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Nomor Telepon Kantor Pemasaran</label><br>
                                <input type="text" name="no_telp_perum" value="<?php echo $fetch['no_telp_perum']; ?>"
                                    class="form-control" minlength="14" maxlength="14"
                                    onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Nomor Whatsapp Kantor Pemasaran</label><br>
                                <input type="text" name="no_perum" value="<?php echo $fetch['no_perum']; ?>"
                                    class="form-control" minlength="14" maxlength="14"
                                    onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </div>
                            <!-- /.form-group -->
                            <h5>Hubungkan Profil Perumhan Anda Dengan Social Media</h5>
                            <div class="form-group">
                                <label>Instagram</label><br>
                                <input type="text" name="instagram" value="<?php echo $fetch['instagram']; ?>"
                                    class="form-control" maxlength="50">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Facebook</label><br>
                                <input type="text" name="facebook" value="<?php echo $fetch['facebook']; ?>"
                                    class="form-control" maxlength="50">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Youtube</label><br>
                                <input type="text" name="youtube" value="<?php echo $fetch['youtube']; ?>"
                                    class="form-control" maxlength="50">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Vidio Profil Beranda</label><br>
                                <input type="text" name="vidio_profile" value="<?php echo $fetch['vidio_profile']; ?>"
                                    class="form-control" maxlength="70">
                                <a href="?page=link_vidio">
                                    <h8 class="text-red">Cara Mendapatkan link Vidio</h8>
                                </a>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group text-center">
                                <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info btn-md"
                                    class="form-control" style="width: 100%;">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- //Form Body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- // Kolom Kanan -->


            </div>
            <!-- //ROW -->
        </form>
        <?php
        if (isset($_POST['kirim'])) {
            $kd_perumahan = $_POST['kd_perumahan'];
            //$nik = $_POST['nik'];
            $nama_perumahan = $_POST['nama_perumahan'];
            $alamat_kantor_perumahan = $_POST['alamat_kantor_perumahan'];
            $alamat_perumahan = $_POST['alamat_perumahan'];
            $kecamatan_perum = $_POST['kecamatan'];
            $kelurahan_perum = $_POST['kelurahan'];
            $informasi_perumahan = $_POST['informasi_perumahan'];
            $vidio_profile = $_POST['vidio_profile'];
            $Email = $_POST['Email'];
            $no_telp_perum = $_POST['no_telp_perum'];
            $no_perum = $_POST['no_perum'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $facebook = $_POST['facebook'];
            $instagram = $_POST['instagram'];
            $youtube = $_POST['youtube'];
            // Upload Foto profile Developer
            $nama_file = $_FILES['foto_beranda']['name'];
            $source = $_FILES['foto_beranda']['tmp_name'];
            $folder = './img/';
            //move_uploaded_file($source, $folder . $nama_file);

            // Query untuk memasukan data ke Database
            if ($nama_file != '') {
                move_uploaded_file($source, $folder . $nama_file);
                $update = mysqli_query($koneksi, "UPDATE tabel_perumahan SET nama_perumahan='$nama_perumahan', alamat_kantor_perumahan='$alamat_kantor_perumahan', alamat_perumahan='$alamat_perumahan', informasi_perumahan='$informasi_perumahan', vidio_profile='$vidio_profile', email_perum='$Email', latitude='$latitude', longitude='$longitude', facebook='$facebook', instagram='$instagram', youtube='$youtube', foto_beranda='$nama_file', no_perum='$no_perum', no_telp_perum='$no_telp_perum' WHERE kd_perumahan='$kd_perumahan'");
                if ($update) {
                    echo "<script>alert('Data Berhasil di Ubah');window.location='?page=profil_perumahan'</script>";
                    //echo 'Data Berhasil di Simpan';
                    //echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            } else {
                $update = mysqli_query($koneksi, "UPDATE tabel_perumahan SET nama_perumahan='$nama_perumahan', alamat_kantor_perumahan='$alamat_kantor_perumahan', alamat_perumahan='$alamat_perumahan', informasi_perumahan='$informasi_perumahan', vidio_profile='$vidio_profile', email_perum='$Email', latitude='$latitude', longitude='$longitude', facebook='$facebook', instagram='$instagram', youtube='$youtube', no_perum='$no_perum', no_telp_perum='$no_telp_perum' WHERE kd_perumahan='$kd_perumahan'");
                if ($update) {
                    //echo 'Data Berhasil di Simpan 2';
                    //echo "<meta http-equiv='refresh' content='0'>";
                    echo "<script>alert('Data Berhasil di Ubah');window.location='?page=profil_perumahan'</script>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            }
        }
        ?>
    </div>
    <!-- Container Fluid -->
    <?php
    }
 ?>

</body>

</html>