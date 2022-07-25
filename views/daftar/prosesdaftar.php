<?php
require_once("koneksi.php");
include '../admin/login/koneksi.php';


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
$folder = '../developer/img/data_developer/foto_ktp/';
move_uploaded_file($source2, $folder . $nama_file2);
// Upload Foto Diri dan KTP Developer
$nama_file3 = $_FILES['gambar3']['name'];
$source3 = $_FILES['gambar3']['tmp_name'];
$folder = '../developer/img/data_developer/foto_diri_ktp/';
move_uploaded_file($source3, $folder . $nama_file3);

$sql = "SELECT * FROM tabel_developer WHERE username_dev = '$username'";
$query = $db->query($sql);
if ($query->num_rows != 0) {
    echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
} else {
    if (!$username || !$pass) {
        echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
    } else {
        $data = "INSERT INTO tabel_developer VALUES ('$nik', '$nama_dev', '$alamat_dev', '$no_dev', '$Email', '$nama_file', '$nama_file2', '$nama_file3', '$status', '$username', '$pass')";
        $simpan = $db->query($data);
        //var_dump($simpan);
        if ($simpan) {
            echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
        } else {
            echo "<div align='center'>Proses Gagal!</div>";
        }
    }
}
