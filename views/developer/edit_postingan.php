<?php
include 'Login/koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah WHERE kd_data_rumah ='" . $_GET['?kd_data_rumah'] . "'");
$r = mysqli_fetch_array($data);
?>

<html>

<head>
    <title>Edit | Postingan</title>
</head>

<body>

    <section class="content-header">

        <form action="" method="POST" enctype="multipart/form-data">
            <!--input dan kd  data Rumah-->
            <input type="hidden" name="kd_data_rumah" value="<?php echo $r['kd_data_rumah']; ?>">
            <input type="hidden" name="kd_perumahan" value="<?php echo $r['kd_perumahan']; ?>">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="card-title">Keterangan Rumah</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Judul Postingan</label><br>
                                        <input type="text" name="judul_postingan"
                                            value="<?php echo $r['judul_postingan']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Tipe Rumah</label><br>
                                        <input type="text" name="tipe_rumah" value="<?php echo $r['tipe_rumah']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Jumlah Unit</label><br>
                                        <input type="text" name="jumlah_unit_rumah"
                                            value="<?php echo $r['jumlah_unit_rumah']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Harga Kisaran</label><br>
                                        <input type="text" name="harga" value="<?php echo $r['harga']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header bg-warning">
                                    <h3 class="card-title">Unggah Foto Rumah</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Foto Tampak Depan</label><br>
                                        <img src="img/postingan/<?php echo $r['foto_1']; ?>" width="300px"
                                            height="300px" style="width: 100%;">
                                        <input type="file" name="foto_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Tampak Belakang</label><br>
                                        <img src="img/postingan/<?php echo $r['foto_2']; ?>" width="300px"
                                            height="300px" style="width: 100%;">
                                        <input type="file" name="foto_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Tampak Dalam</label><br>
                                        <img src="img/postingan/<?php echo $r['foto_3']; ?>" width="300px"
                                            height="300px" style="width: 100%;">
                                        <input type="file" name="foto_3">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Dapur</label><br>
                                        <img src="img/postingan/<?php echo $r['foto_4']; ?>" width="300px"
                                            height="300px" style="width: 100%;">
                                        <input type="file" name="foto_4">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Kamar Tidur</label><br>
                                        <img src="img/postingan/<?php echo $r['foto_5']; ?>" width="300px"
                                            height="300px" style="width: 100%;">
                                        <input type="file" name="foto_5">
                                    </div>
                                </div>
                            </div> <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h3 class="card-title">Spesifikasi Bangunan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Luas Tanah</label><br>
                                        <input type="text" name="luas_tanah" value="<?php echo $r['luas_tanah']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Luas Bangunan</label><br>
                                        <input type="text" name="luas_bangunan"
                                            value="<?php echo $r['luas_bangunan']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Jumlah Kamar Tidur</label><br>
                                        <input type="text" name="jumlah_kamar" value="<?php echo $r['jumlah_kamar']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Jumlah Kamar Mandi</label><br>
                                        <input type="text" name="jumlah_wc" value="<?php echo $r['jumlah_wc']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Sumber Air</label><br>
                                        <input type="text" name="sumber_air" value="<?php echo $r['sumber_air']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Daya Listrik</label><br>
                                        <input type="text" name="daya_listrik" value="<?php echo $r['daya_listrik']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Pondasi Rumah</label><br>
                                        <input type="text" name="pondasi" value="<?php echo $r['pondasi']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Dinding Rumah</label><br>
                                        <input type="text" name="dinding" value="<?php echo $r['dinding']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Daun Pintu</label><br>
                                        <input type="text" name="daun_pintu" value="<?php echo $r['daun_pintu']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Kusen</label><br>
                                        <input type="text" name="kusen" value="<?php echo $r['kusen']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Ukuran Keramik</label><br>
                                        <input type="text" name="keramik" value="<?php echo $r['keramik']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Pintu Kamar Mandi</label><br>
                                        <input type="text" name="pintu_km_mandi"
                                            value="<?php echo $r['pintu_km_mandi']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Kerangka Atap</label><br>
                                        <input type="text" name="kerangka_atap"
                                            value="<?php echo $r['kerangka_atap']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Rangka Plafon</label><br>
                                        <input type="text" name="rangka_plafon"
                                            value="<?php echo $r['rangka_plafon']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Tutup Plafon</label><br>
                                        <input type="text" name="tutup_plafon" value="<?php echo $r['tutup_plafon']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Status</label><br>
                                        <input type="text" name="status" value="<?php echo $r['status']; ?>"
                                            style="width: 100%;">
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

            // Upload Foto 1
            $nama_file = $_FILES['foto_1']['name'];
            $source = $_FILES['foto_1']['tmp_name'];
            $folder = './img/postingan/';
            // Upload Foto 2
            $nama_file2 = $_FILES['foto_2']['name'];
            $source2 = $_FILES['foto_2']['tmp_name'];
            // Upload Foto 3
            $nama_file3 = $_FILES['foto_3']['name'];
            $source3 = $_FILES['foto_3']['tmp_name'];
            // Upload Foto 4
            $nama_file4 = $_FILES['foto_4']['name'];
            $source4 = $_FILES['foto_4']['tmp_name'];
            // Upload Foto 5
            $nama_file5 = $_FILES['foto_5']['name'];
            $source5 = $_FILES['foto_5']['tmp_name'];



            if ($nama_file != '') {
                move_uploaded_file($source, $folder . $nama_file);
                $update = mysqli_query($koneksi, "UPDATE tabel_data_rumah SET kd_perumahan='$kd_perumahan', judul_postingan='$judul_postingan', tipe_rumah='$tipe_rumah', jumlah_unit_rumah='$jumlah_unit_rumah', jumlah_kamar='$jumlah_kamar', jumlah_wc='$jumlah_wc', harga='$harga', luas_tanah='$luas_tanah', luas_bangunan='$luas_bangunan', sumber_air='$sumber_air', daya_listrik='$daya_listrik', pondasi='$pondasi', dinding='$dinding', daun_pintu='$daun_pintu', kusen='$kusen', keramik='$keramik', pintu_km_mandi='$pintu_km_mandi', kerangka_atap='$kerangka_atap', rangka_plafon='$rangka_plafon', tutup_plafon='$tutup_plafon', status='$status', foto_1='$nama_file' where kd_data_rumah='$kd_data_rumah'");
                if ($update) {
                    echo 'Data Berhasil di Simpan';
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            } elseif ($nama_file2 != '') {
                move_uploaded_file($source2, $folder . $nama_file2);
                $update = mysqli_query($koneksi, "UPDATE tabel_data_rumah SET kd_perumahan='$kd_perumahan', judul_postingan='$judul_postingan', tipe_rumah='$tipe_rumah', jumlah_unit_rumah='$jumlah_unit_rumah', jumlah_kamar='$jumlah_kamar', jumlah_wc='$jumlah_wc', harga='$harga', luas_tanah='$luas_tanah', luas_bangunan='$luas_bangunan', sumber_air='$sumber_air', daya_listrik='$daya_listrik', pondasi='$pondasi', dinding='$dinding', daun_pintu='$daun_pintu', kusen='$kusen', keramik='$keramik', pintu_km_mandi='$pintu_km_mandi', kerangka_atap='$kerangka_atap', rangka_plafon='$rangka_plafon', tutup_plafon='$tutup_plafon', status='$status', foto_2='$nama_file2' where kd_data_rumah='$kd_data_rumah'");
                if ($update) {
                    echo 'Data Berhasil di Simpan';
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            } elseif ($nama_file3 != '') {
                move_uploaded_file($source3, $folder . $nama_file3);
                $update = mysqli_query($koneksi, "UPDATE tabel_data_rumah SET kd_perumahan='$kd_perumahan', judul_postingan='$judul_postingan', tipe_rumah='$tipe_rumah', jumlah_unit_rumah='$jumlah_unit_rumah', jumlah_kamar='$jumlah_kamar', jumlah_wc='$jumlah_wc', harga='$harga', luas_tanah='$luas_tanah', luas_bangunan='$luas_bangunan', sumber_air='$sumber_air', daya_listrik='$daya_listrik', pondasi='$pondasi', dinding='$dinding', daun_pintu='$daun_pintu', kusen='$kusen', keramik='$keramik', pintu_km_mandi='$pintu_km_mandi', kerangka_atap='$kerangka_atap', rangka_plafon='$rangka_plafon', tutup_plafon='$tutup_plafon', status='$status', foto_3='$nama_file3' where kd_data_rumah='$kd_data_rumah'");
                if ($update) {
                    echo 'Data Berhasil di Simpan';
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            } elseif ($nama_file4 != '') {
                move_uploaded_file($source4, $folder . $nama_file4);
                $update = mysqli_query($koneksi, "UPDATE tabel_data_rumah SET kd_perumahan='$kd_perumahan', judul_postingan='$judul_postingan', tipe_rumah='$tipe_rumah', jumlah_unit_rumah='$jumlah_unit_rumah', jumlah_kamar='$jumlah_kamar', jumlah_wc='$jumlah_wc', harga='$harga', luas_tanah='$luas_tanah', luas_bangunan='$luas_bangunan', sumber_air='$sumber_air', daya_listrik='$daya_listrik', pondasi='$pondasi', dinding='$dinding', daun_pintu='$daun_pintu', kusen='$kusen', keramik='$keramik', pintu_km_mandi='$pintu_km_mandi', kerangka_atap='$kerangka_atap', rangka_plafon='$rangka_plafon', tutup_plafon='$tutup_plafon', status='$status', foto_4='$nama_file4' where kd_data_rumah='$kd_data_rumah'");
                if ($update) {
                    echo 'Data Berhasil di Simpan';
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            } elseif ($nama_file5 != '') {
                move_uploaded_file($source5, $folder . $nama_file5);
                $update = mysqli_query($koneksi, "UPDATE tabel_data_rumah SET kd_perumahan='$kd_perumahan', judul_postingan='$judul_postingan', tipe_rumah='$tipe_rumah', jumlah_unit_rumah='$jumlah_unit_rumah', jumlah_kamar='$jumlah_kamar', jumlah_wc='$jumlah_wc', harga='$harga', luas_tanah='$luas_tanah', luas_bangunan='$luas_bangunan', sumber_air='$sumber_air', daya_listrik='$daya_listrik', pondasi='$pondasi', dinding='$dinding', daun_pintu='$daun_pintu', kusen='$kusen', keramik='$keramik', pintu_km_mandi='$pintu_km_mandi', kerangka_atap='$kerangka_atap', rangka_plafon='$rangka_plafon', tutup_plafon='$tutup_plafon', status='$status', foto_5='$nama_file5' where kd_data_rumah='$kd_data_rumah'");
                if ($update) {
                    echo 'Data Berhasil di Simpan';
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            } else {
                $update = mysqli_query($koneksi, "UPDATE tabel_data_rumah SET kd_perumahan='$kd_perumahan', judul_postingan='$judul_postingan', tipe_rumah='$tipe_rumah', jumlah_unit_rumah='$jumlah_unit_rumah', jumlah_kamar='$jumlah_kamar', jumlah_wc='$jumlah_wc', harga='$harga', luas_tanah='$luas_tanah', luas_bangunan='$luas_bangunan', sumber_air='$sumber_air', daya_listrik='$daya_listrik', pondasi='$pondasi', dinding='$dinding', daun_pintu='$daun_pintu', kusen='$kusen', keramik='$keramik', pintu_km_mandi='$pintu_km_mandi', kerangka_atap='$kerangka_atap', rangka_plafon='$rangka_plafon', tutup_plafon='$tutup_plafon', status='$status' where kd_data_rumah='$kd_data_rumah'");
                if ($update) {
                    echo 'Data Berhasil di Simpan 2';
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            }
        }

        ?>


    </section>

</body>

</html>