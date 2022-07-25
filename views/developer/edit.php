<?php
include 'Login/koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM tabel_developer WHERE nik ='" . $_GET['nik'] . "'");
$r = mysqli_fetch_array($data);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pendaftar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=pendaftar">Home</a></li>
                    <li class="breadcrumb-item active">Profil Perusahaan</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>


        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <table border="0">
                    <tr>
                        <td>Nik</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="number" name="nik" value="<?php echo $r['nik']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="nama_dev" value="<?php echo $r['nama_dev']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="alamat_dev" value="<?php echo $r['alamat_dev']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telp</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="number" name="no_dev" value="<?php echo $r['no_dev']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="username_dev" value="<?php echo $r['username_dev']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="password" name="password_dev" value="<?php echo $r['password_dev']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="file" name="gambar">
                            <img src="img/<?php echo $r['foto_profil_dev']; ?>" width="100px" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto KTP</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <img src="img/<?php echo $r['foto_ktp_dev']; ?>" width="100px" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Diri dan KTP</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <img src="img/<?php echo $r['foto_diri_dev']; ?>" width="100px" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="kirim" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>


            <?php
            if (isset($_POST['kirim'])) {
                $nik = $_GET['nik'];
                $nama_dev = $_POST['nama_dev'];
                $alamat_dev = $_POST['alamat_dev'];
                $no_dev = $_POST['no_dev'];
                $username_dev = $_POST['username_dev'];
                $password_dev = $_POST['password_dev'];
                // Upload Foto profile Developer
                $nama_file = $_FILES['gambar']['name'];
                $source = $_FILES['gambar']['tmp_name'];
                $folder = './img/';
                //move_uploaded_file($source, $folder . $nama_file);
                // Upload Foto KTP Developer
                //$nama_file2 = $_FILES['gambar2']['name'];
                //$source2 = $_FILES['gambar2']['tmp_name'];
                //move_uploaded_file($source2, $folder . $nama_file2);
                // Upload Foto Diri dan KTP Developer
                //$nama_file3 = $_FILES['gambar3']['name'];
                //$source3 = $_FILES['gambar3']['tmp_name'];
                // move_uploaded_file($source3, $folder . $nama_file3);


                if ($nama_file != '') {
                    move_uploaded_file($source, $folder . $nama_file);
                    $update = mysqli_query($koneksi, "UPDATE tabel_developer set nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', Email='', foto_profil_dev='$nama_file', foto_ktp_dev='', foto_diri_dev='', status_developer='', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");
                    //$update = mysqli_query($koneksi, "UPDATE tabel_developer set nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', Email='', foto_profil_dev='$nama_file', foto_ktp_dev='', foto_diri_dev='', status_developer='', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");
                    if ($update) {
                        echo 'berhasil';
                    } else {
                        echo 'Gagal';
                        var_dump($nik);
                    }
                } else {
                    $update = mysqli_query($koneksi, "UPDATE tabel_developer set nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', Email='', foto_profil_dev='$nama_file', foto_ktp_dev='', foto_diri_dev='', status_developer='', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");
                }
            }
            ?>

        </div>
    </div>
    <!-- /.card -->
</section>