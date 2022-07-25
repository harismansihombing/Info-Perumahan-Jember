<?php
include 'Login/koneksi.php';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Postingan</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<!-- Main content -->
<section class="content">
    <?php

    $id = (int) $_SESSION['id'];

    $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
    $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_perumahan where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    $row = mysqli_fetch_array($seleksi);
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <!--input nik dan kd-->
        <input type="hidden" name="nik" value="<?php echo $id; ?>">
        <input type="hidden" name="kd_perumahan" value="<?php echo $row['kd_perumahan']; ?>">
        <input type="hidden" name="kd_data_rumah">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Keterangan Rumah:</h5>
                                <div class="form-group">
                                    <label for="">Judul Postingan</label><br>
                                    <input type="text" name="judul_postingan" style="width: 100%;" maxlength="50">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Tipe Rumah</label><br>
                                    <input type="text" name="tipe_rumah" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Jumlah Unit</label><br>
                                    <input type="text" name="jumlah_unit_rumah" style="width: 100%;" maxlength="4"
                                        onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Harga Kisaran</label><br>
                                    <input type="text" name="harga" style="width: 100%;" maxlength="30">
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-body">
                                <h5>Unggah Foto Rumah</h5>
                                <div class="form-group">
                                    <label for="">Foto Tampak Depan</label><br>
                                    <input type="file" name="gambar">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Tampak Belakang</label><br>
                                    <input type="file" name="gambar2">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Tampak Dalam</label><br>
                                    <input type="file" name="gambar3">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Dapur</label><br>
                                    <input type="file" name="gambar4">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Kamar Tidur</label><br>
                                    <input type="file" name="gambar5">
                                </div>
                            </div>
                        </div> <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title-center">Spesifikasi Bangunan :</h5>
                                <div class="form-group">
                                    <label for="">Luas Tanah</label><br>
                                    <input type="text" name="luas_tanah" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Luas Bangunan</label><br>
                                    <input type="text" name="luas_bangunan" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Jumlah Kamar Tidur</label><br>
                                    <input type="text" name="jumlah_kamar" style="width: 100%;" maxlength="4"
                                        onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Jumlah Kamar Mandi</label><br>
                                    <input type="text" name="jumlah_wc" style="width: 100%;" maxlength="4"
                                        onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Sumber Air</label><br>
                                    <input type="text" name="sumber_air" style="width: 100%;" maxlength="10">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Daya Listrik</label><br>
                                    <input type="text" name="daya_listrik" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Pondasi Rumah</label><br>
                                    <input type="text" name="pondasi" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Dinding Rumah</label><br>
                                    <input type="text" name="dinding" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Daun Pintu</label><br>
                                    <input type="text" name="daun_pintu" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Kusen</label><br>
                                    <input type="text" name="kusen" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Ukuran Keramik</label><br>
                                    <input type="text" name="keramik" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Pintu Kamar Mandi</label><br>
                                    <input type="text" name="pintu_km_mandi" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Kerangka Atap</label><br>
                                    <input type="text" name="kerangka_atap" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Rangka Plafon</label><br>
                                    <input type="text" name="rangka_plafon" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Tutup Plafon</label><br>
                                    <input type="text" name="tutup_plafon" style="width: 100%;" maxlength="20">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Status</label><br>
                                    <input type="text" name="status" style="width: 100%;" maxlength="15">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="submit" value="Simpan" name="kirim" class="btn btn-info btn-sm"
                                        style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
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
        $kd_data_rumah = $_POST['kd_data_rumah'];
        $kd_perumahan = $_POST['kd_perumahan'];
        $judul_postingan = $_POST['judul_postingan'];
        $tipe_rumah = $_POST['tipe_rumah'];
        $jumlah_unit_rumah = $_POST['jumlah_unit_rumah'];
        $jumlah_kamar = $_POST['jumlah_kamar'];
        $jumlah_wc = $_POST['jumlah_wc'];
        $harga = $_POST['harga'];
        $luas_tanah = $_POST['luas_tanah'];
        $luas_bangunan = $_POST['luas_bangunan'];
        $sumber_air = $_POST['sumber_air'];
        $daya_listrik = $_POST['daya_listrik'];
        $pondasi = $_POST['pondasi'];
        $dinding = $_POST['dinding'];
        $daun_pintu = $_POST['daun_pintu'];
        $kusen = $_POST['kusen'];
        $keramik = $_POST['keramik'];
        $pintu_km_mandi = $_POST['pintu_km_mandi'];
        $kerangka_atap = $_POST['kerangka_atap'];
        $rangka_plafon = $_POST['rangka_plafon'];
        $tutup_plafon = $_POST['tutup_plafon'];
        $status = $_POST['status'];

        $nama_file = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = './img/postingan/';
        move_uploaded_file($source, $folder . $nama_file);
        // Upload Foto KTP Developer
        $nama_file2 = $_FILES['gambar2']['name'];
        $source2 = $_FILES['gambar2']['tmp_name'];
        move_uploaded_file($source2, $folder . $nama_file2);
        // Upload Foto Diri dan KTP Developer
        $nama_file3 = $_FILES['gambar3']['name'];
        $source3 = $_FILES['gambar3']['tmp_name'];
        move_uploaded_file($source3, $folder . $nama_file3);
        // Upload Foto KTP Developer
        $nama_file4 = $_FILES['gambar4']['name'];
        $source4 = $_FILES['gambar4']['tmp_name'];
        move_uploaded_file($source4, $folder . $nama_file4);
        // Upload Foto Diri dan KTP Developer
        $nama_file5 = $_FILES['gambar5']['name'];
        $source5 = $_FILES['gambar5']['tmp_name'];
        move_uploaded_file($source5, $folder . $nama_file5);



        // Query untuk memasukan data ke Database
        $insert = mysqli_query($koneksi, "insert into tabel_data_rumah values ('$kd_data_rumah', '$kd_perumahan', '$judul_postingan', '$tipe_rumah', '$jumlah_unit_rumah', '$jumlah_kamar', '$jumlah_wc', '$harga', '$luas_tanah', '$luas_bangunan', '$sumber_air', '$daya_listrik', '$pondasi', '$dinding', '$daun_pintu', '$kusen', '$keramik', '$pintu_km_mandi', '$kerangka_atap', '$rangka_plafon', '$tutup_plafon', '$status', '$nama_file', '$nama_file2', '$nama_file3', '$nama_file4', '$nama_file5')");
        if ($insert) {
            echo 'Data Berhasil di Simpan';
            echo "<script>alert('Postingan Berhasil di Tambahakn');window.location='?page=tampil_postingan'</script>";
        } else {
            echo 'Data Gagal di Simpan';
        }
    }

    ?>

</section>