<?php
include 'koneksi.php';

$kd_kecamatan = $_POST['kd_kecamatan'];

$query = mysqli_query($koneksi, "SELECT * FROM tabel_kelurahan WHERE kd_kecamatan=$kd_kecamatan");

echo '<option>Pilih Kelurahan</option>';
while ($row_query = mysqli_fetch_array($query)) {
    echo '<option value="' . $row_query['kd_kelurahan'] . '">' . $row_query['nama_kelurahan'] . '</option>';
}
