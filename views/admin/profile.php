<?php
include 'login/session.php';
include 'login/koneksi.php';
?>
<section class="content-header">

    <?php

    $id = (int) $_SESSION['id'];

    $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    var_dump($id);
    ?>

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

            <table border="0">
                <tr>
                    <td>Nama Developer</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td><?php echo $fetch['nama_admin']; ?></td>
                </tr>
                <tr>
                    <td>Alamat Developer</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td><?php echo $fetch['alamat_rumah']; ?></td>
                </tr>
                <tr>
                    <td>No Telphon</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td><?php echo $fetch['no_dev']; ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td><?php echo $fetch['admin_username']; ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td><?php echo $fetch['admin_password']; ?></td>
                </tr>
                <tr>
                    <td>

                        <a href="editprofil.php?kd_admin=<?php echo $fetch['kd_admin']; ?>"><input type="button" value="edit" class="btn btn-info"><a>

                    </td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>