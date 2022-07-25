<?php
include 'Login/session.php';
include 'Login/koneksi.php';
?>

<html>

<head>
  <title>Profil</title>
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
            <li class="breadcrumb-item active">Profil</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- /.container-fluid -->

  <!-- Main content -->
  <section class="content">

    <?php

    $id = (int) $_SESSION['id'];

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
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <p class="form-control" id="nama"><?php echo $fetch['nama_dev']; ?></p>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <p class="form-control" id="alamat"><?php echo $fetch['alamat_dev']; ?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Telepon</label>
                  <p class="form-control" id="no_telp" name="no_dev"><?php echo $fetch['no_dev']; ?> </p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <p class="form-control" id="username_dev" name="username_dev"><?php echo $fetch['username_dev']; ?> </p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" value="<?php echo $fetch['password_dev']; ?>" readonly disabled>
                </div>
                <div class="card-body text-center">
                  <a href="?page=edit_akun&?nik=<?php echo $fetch['nik'] ?>" class="btn btn-info btn-md">
                    <span class="fas fa-pen-square"> Edit</span>
                  </a>
                </div>
              </div>
            </form>
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
            <form role="form">
              <div class="card-body text-center">
                <div class="form-group" style="align-content: center;">
                 <img src="img/data_developer/foto_profil/<?php echo $fetch['foto_profil_dev']; ?>" width="180px" height="180px">
               </div>


            <!--<div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>-->
          <!-- /.card-body -->

          
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>



<br>
</section>
<!-- /.content -->

</body>

</html>