<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';


// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tabel_developer where username_dev='$username' and password_dev='$password'");
// mengambil data di dalam tabel
$row = mysqli_fetch_array($data);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {

    if ($row['status_developer'] == '1') {
        session_start();
        $_SESSION['username_dev'] = $username;
        $_SESSION['id'] = $row['nik'];
        $_SESSION['nama'] = $row['nama_dev'];
        $_SESSION['status'] = "login";
        $_SESSION['gbr'] = $row['foto_profil_dev'];
        echo $_SESSION['username_dev'];
        echo $_SESSION['gbr'];
        echo $_SESSION['nama'];
        header("location:../index.php");
    } else {
        header("location:login.php?pesan=data_kosong");
    }
} else {
    header("location:login.php?pesan=gagal");
}