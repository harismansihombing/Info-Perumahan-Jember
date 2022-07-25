<?php
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_data($_POST['nik'], $_POST['nama_dev'], $_POST['alamat_dev'], $_POST['no_dev'], $_POST['username_dev'], $_POST['password_dev']);
    header('location:tampil_data.php');
} elseif ($action == "update") {
    $koneksi->update_data($_POST['nama_dev'], $_POST['alamat_dev'], $_POST['no_dev'], $_POST['username_dev'], $_POST['password_dev'], $_POST['nik']);
    header('location:tampil_data.php');
} elseif ($action == "delete") {
    $nik = $_GET['nik'];
    $koneksi->delete_data($nik);
    header('location:tampil_data.php');
}
