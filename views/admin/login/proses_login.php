<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';
//include '../config/koneksi.php';
//$conn = new database();

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tabel_admin where admin_username='$username' and admin_password='$password'");
// mengambil data di dalam tabel
$row = mysqli_fetch_array($data);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    session_start();
    $_SESSION['admin_username'] = $username;
    $_SESSION['id'] = $row['kd_admin'];
    $_SESSION['status'] = "login";
    $_SESSION['gbr'] = $row['foto_profil'];
    $_SESSION['nama_admin'] = $row['nama_admin'];
    echo $_SESSION['admin_username'];
    echo $_SESSION['gbr'];
    echo $_SESSION['nama_admin'];
    header("location:../index.php?pesan=berhasil");
} else {
    header("location:login.php?pesan=gagal");
}