<?php
class database
{

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "ipj";
    var $koneksi = "";
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "select * from tabel_developer");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($nik, $nama_dev, $alamat_dev, $no_dev, $username_dev, $password_dev)
    {
        mysqli_query($this->koneksi, "insert into tabel_developer values ('$nik','$nama_dev','$alamat_dev','$no_dev','','','','$username_dev','$password_dev')");
    }

    function get_by_id($nik)
    {
        $query = mysqli_query($this->koneksi, "select * from tabel_developer where nik='$nik'");
        return $query->fetch_array();
    }

    function update_data($nama_dev, $alamat_dev, $no_dev, $username_dev, $password_dev, $nik)
    {
        $query = mysqli_query($this->koneksi, "update tabel_developer set nama_dev='$nama_dev',alamat_dev='$alamat_dev',no_dev='$no_dev',foto_profil_dev='',foto_ktp_dev='',foto_diri_dev='',username_dev='$username_dev',password_dev='$password_dev' where nik='$nik'");
    }

    function delete_data($nik)
    {
        $query = mysqli_query($this->koneksi, "delete from tabel_developer where nik='$nik'");
    }
}
