<?php
// koneksi database
include 'login/koneksi.php';

// menangkap data yang di kirim dari form
$kd_admin = $_POST['kd_admin'];
$nama_admin = $_POST['nama_admin'];
$alamat_rumah = $_POST['alamat_rumah'];
$admin_username = $_POST['admin_username'];
$admin_password = $_POST['admin_password'];
// update data ke database
mysqli_query($koneksi, "UPDATE tabel_admin set nama_admin='$nama_admin', alamat_rumah='$alamat_rumah', admin_username='$admin_username', admin_password='$admin_password' where kd_admin='$kd_admin'");

// mengalihkan halaman kembali ke beranda.php
header("location:akun2.php");
