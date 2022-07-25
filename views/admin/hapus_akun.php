<?php
include 'Login/koneksi.php';
$delete = mysqli_query($koneksi, "DELETE FROM tabel_developer WHERE nik = '" . $_GET['nik'] . "'");
if ($delete) {
    echo 'Sukses';
    header('location:index.php');
} else {
    echo 'Gagal';
}
