<?php
include 'Login/koneksi.php';
?>

<html>

<head>
    <title>Edit | profil</title>
</head>

<body>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?page=">Home</a></li>
                        <li class="breadcrumb-item active">Edit Profil</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">

        <?php
    $id = $_GET['?nik'];

    $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    ?>


        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header bg-light">
                            <h3 class="card-title">Profile Anda</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="text" name="nik" value="<?php echo $fetch['nik']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" id="nama" name="nama_dev"
                                        value="<?php echo $fetch['nama_dev']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input class="form-control" type="text" name="alamat_dev" id="alamat_dev"
                                        value="<?php echo $fetch['alamat_dev']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Telepon</label>
                                    <input class="form-control" type="text" name="no_dev" id="no_dev"
                                        value="<?php echo $fetch['no_dev']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input class="form-control" type="text" name="username_dev" id="username_dev"
                                        value="<?php echo $fetch['username_dev']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="password_dev" name="password_dev"
                                        value="<?php echo $fetch['password_dev']; ?>">
                                </div>
                                <div class="card-body text-center">
                                    <input type="submit" value="Simpan" name="kirim" class="btn btn-info btn-sm">
                                </div>
                            </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->

                <!-- col (right) -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Foto Profile Anda</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body text-center">
                            <div class="form-group" style="align-content: center;">
                                <img src="img/data_developer/foto_profil/<?php echo $fetch['foto_profil_dev']; ?>"
                                    width="180px" height="180px">
                            </div>
                            <div class="card-body">
                                <input type="file" name="foto_profil">
                            </div>


                            </form>
                            <?php
                                  if (isset($_POST['kirim'])) {
                                    $nik = $_POST['nik'];
                                    $nama_dev = $_POST['nama_dev'];
                                    $alamat_dev = $_POST['alamat_dev'];
                                    $no_dev = $_POST['no_dev'];
                                    $username_dev = $_POST['username_dev'];
                                    $password_dev = $_POST['password_dev'];

                                    // Upload Foto profile Developer
                                    $nama_file = $_FILES['foto_profil']['name'];
                                    $source = $_FILES['foto_profil']['tmp_name'];
                                    $folder = 'img/data_developer/foto_profil/';


                                    // Query untuk memasukan data ke Database
                                    if ($nama_file != '') {
                                      move_uploaded_file($source, $folder . $nama_file);
                                      $update = mysqli_query($koneksi, "UPDATE tabel_developer SET nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', foto_profil_dev='$nama_file', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");
                                      if ($update) {
                                        //echo 'Data Berhasil di Simpan';
                                        //echo "<meta http-equiv='refresh' content='0'>";
                                        echo "<script>alert('Data Berhasil Diubah');window.location='?page=akun'</script>";
                                      } else {
                                        //echo 'Data Gagal di Simpan';
                                        echo "<script>alert('Data Gagal Diubah');window.location='?page=akun'</script>";
                                      }
                                    } else {
                                      $update = mysqli_query($koneksi, "UPDATE tabel_developer SET nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");
                                      if ($update) {
                                        //echo 'Data Berhasil di Simpan 2';
                                        //echo "<meta http-equiv='refresh' content='0'>";
                                        echo "<script>alert('Data Berhasil Diubah');window.location='?page=akun'</script>";
                                      } else {
                                        //echo 'Data Gagal di Simpan';
                                        echo "<script>alert('Data Gagal Diubah');window.location='?page=akun'</script>";
                                      }
                                    }
                                  }
                               ?>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>

    </section>

</body>

</html>