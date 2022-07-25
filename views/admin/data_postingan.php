<?php
include 'login/koneksi.php';
?>

<html>

<head>
    <title>Postingan | IPJ</title>
</head>

<body>
    <br>
    <section class="content">
        <div class="card">
            <div class="card-header bg-gradient-secondary">
                <h3 class="card-title">Postingan IPJ</h3>
            </div>
            <div class="card-body">

                <table border="0" class="table table-hover" style="text-align:center">
                    <thead class="thead-light">
                        <tr>
                            <th>Kode Perumahan</th>
                            <th>Kode Data Rumah</th>
                            <th>Judul Postingan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php

                        $data = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah");
                        //$row = mysqli_fetch_array($seleksi);

                        //$fetch = mysqli_fetch_array($query);
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                    <tr>
                        <td><?php echo $row['kd_perumahan']; ?></td>
                        <td><?php echo $row['kd_data_rumah']; ?></td>
                        <td><?php echo $row['judul_postingan']; ?></td>
                        <td>
                            <a href="?page=detail_data_rumah&?kd_data_rumah=<?php echo $row['kd_data_rumah']; ?>"
                                class="btn btn-info btn-sm ">
                                <span class="fas fa-clipboard-list"> Lihat</span>
                            </a>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $row['kd_data_rumah']; ?>" name="kd_data_rumah">
                                <button type="submit" class="btn btn-danger btn-sm" name="kirim">
                                    <span class="fas fa-clipboard-list"> Hapus</span>
                                </button>
                            </form>
                        </td>


                    </tr>
                    <?php } ?>
                </table>
                <?php
                if (isset($_POST['kirim'])) {
                    $delete = mysqli_query($koneksi, "DELETE FROM tabel_data_rumah WHERE kd_data_rumah = '" . $_POST['kd_data_rumah'] . "'");
                    if ($delete) {
                    echo "<script>alert('Data Berhasil di Hapus')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?page=postingan_ipj'>";
                    } else {
                    echo 'Gagal';
                    }
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>