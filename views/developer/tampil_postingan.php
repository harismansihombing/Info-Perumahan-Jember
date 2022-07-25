<?php
include('Login/koneksi.php');
?>

<html>

<head>
    <title>Tambah|Postingan</title>
</head>

<body>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Postingan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Postingan</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>
            </div>
            <div class="card-body">

                <a href="?page=tambah_postingan">
                    <input type="submit" class="btn btn-info btn-xs" value="Tambah Postingan">
                </a>
                <br>
                <div class="card-body table-responsive p-0">
                    <table border="0" class="table table-hover" style="text-align:center">
                        <thead class="thead-light">
                            <tr>
                                <th>Judul Postingan</th>
                                <th>Tipe Rumah</th>
                                <th>Harga</th>
                                <th>Jumlah Unit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <?php
                        //$query = mysqli_query($koneksi, "select * from tabel_developer");
                        $id = (int) $_SESSION['id'];
                        $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_perumahan where nik = '$id' ");
                        $rowt = mysqli_fetch_array($seleksi);
                        $kd_perumahan = $rowt['kd_perumahan'];
                        $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah  where kd_perumahan = '$kd_perumahan'");
                        

                        //$fetch = mysqli_fetch_array($query);
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><?php echo $row['judul_postingan']; ?></td>
                            <td><?php echo $row['tipe_rumah']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td><?php echo $row['jumlah_unit_rumah']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td style="text-align: center;">
                                <a href="?page=edit_postingan&?kd_data_rumah=<?php echo $row['kd_data_rumah'] ?>"
                                    class="btn btn-info btn-sm">
                                    <span class="fas fa-pen-square"> Edit</span>
                                </a>
                                <a href="hapus_postingan.php?kd_data_rumah=<?php echo $row['kd_data_rumah'] ?>"
                                    class="btn btn-danger btn-sm ">
                                    <span class="far fa-trash-alt"> Hapus</span>
                                </a>
                            </td>


                            <!--<a id="hapus" data-toggle="modal" data-target="#exampleModalCenter">
                                    <button type="button" class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                </a>-->



                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </section>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <!--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="password_dev">
                        <input type="submit" name="kirim" value="kirim">
                    </form>
                    <?php 
                    //$nik = $_SESSION['id'];
                    //$cari_data = mysqli_query ($koneksi, "SELECT * FROM tabel_developer WHERE nik='$nik'");
                    //$hasil_data = mysqli_fetch_array($cari_data);
                    //$password_asli = $hasil_data['password_dev'];
                    

                    //if (isset($_POST['kirim'])) {
                      //  $password = $_POST['password_dev'];
                       // $kd_data_rumah = $row['kd_data_rumah'];

                        //if($password == $password_asli){
                            //echo 'berhasil';
                            //$delete = mysqli_query($koneksi, "DELETE FROM tabel_data_rumah WHERE kd_data_rumah = $rumah2 ");
                       // } else {
                          //  echo 'gagal';
                      //  }                        
                   // }
                ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" data>Hapus</button>
                </div>
            </div>
        </div>
    </div>-->

</body>

</html>