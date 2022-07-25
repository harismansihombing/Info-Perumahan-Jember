<?php
include 'koneksi.php';
?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="lolkittens" />
    <title>kecamatan</title>

    <script src="../../assets/js/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kecamatan').change(function() {
                var kd_kecamatan = $(this).val();

                $.ajax({
                    type: 'POST',
                    url: 'kelurahan.php',
                    data: 'kd_kecamatan=' + kd_kecamatan,
                    success: function(response) {
                        $('#kelurahan').html(response);
                    }
                });
            })
        });
    </script>

</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <?php
        $kecamatan = mysqli_query($koneksi, "SELECT * FROM tabel_kecamatan")
        ?>
        <select name="kecamatan" id="kecamatan">
            <option value="">Pilih kecamatan</option>
            <?php while ($kecamatan_row = mysqli_fetch_array($kecamatan)) { ?>
                <option value="<?php echo $kecamatan_row['kd_kecamatan'] ?>"><?php echo $kecamatan_row['nama_kecamatan'] ?></option>
            <?php } ?>
        </select>
        <select name="kelurahan" id="kelurahan">
            <option value="">Pilih kelurahan</option>
            <option value=""></option>
        </select>
        <input type="submit" value="Simpan" name="kirim">
    </form>
    <?php
    if (isset($_POST['kirim'])) {
        $kd_kecamatan = $_POST['kecamatan'];
        $kd_kelurahan = $_POST['kelurahan'];

        echo $kd_kecamatan;
        echo $kd_kelurahan;
    }

    ?>
</body>

</html>