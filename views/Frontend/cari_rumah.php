<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="lolkittens" />


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
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Perumahan Jember</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li><a href="./index.php">Beranda</a></li>
                        <!--<li><a href="./search.html">Tentang Kami</a></li>-->
                        <li><a href="../developer/Login/login.php"><button class="btn btn-outline-success my-2 my-sm-0"
                                    type="submit">Login</button></a></li>
                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Hero Section Begin -->
    <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Pingin Punya Rumah Baru</h2>
            <h1>Cari Disini Aja</h1>
        </div>
    </section>
    <!-- Hero Section End -->







    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-md-10">
                <div class="card text-white">
                    <div class="card-header bg-info text-center">Pilih Lokasi Yang Anda Inginkan</div>
                    <div class="card-body text-dark">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <?php
                            $kecamatan = mysqli_query($koneksi, "SELECT * FROM tabel_kecamatan")
                            ?>
                            <div class="form-group">
                                <select class="form-control" name="kecamatan" id="kecamatan" required
                                    oninvalid="this.setCustomValidity('Data tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                                    <option value="">Pilih kecamatan</option>
                                    <?php while ($kecamatan_row = mysqli_fetch_array($kecamatan)) { ?>
                                    <option value="<?php echo $kecamatan_row['kd_kecamatan'] ?>">
                                        <?php echo $kecamatan_row['nama_kecamatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="kelurahan" id="kelurahan">
                                    <option value="">Pilih kelurahan</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <!--<input type="submit" value="Simpan" name="kirim" class="btn btn-dark float-right">-->
                            <button type="submit" name="kirim" class="btn btn-dark float-right"><i
                                    class="flaticon-search"></i>Cari</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Kotak tampil Katalog -->
    <section class="hotel-rooms spad">
        <div class="container">
            <div class="row">

                <?php
                if (isset($_POST['kirim'])) {
                    $kd_kecamatan = $_POST['kecamatan'];
                    $kd_kelurahan = $_POST['kelurahan'];
                }
                $kd_kelurahan = $_POST['kelurahan'];
                $kd_kecamatan = $_POST['kecamatan'];


                $tampil = mysqli_query($koneksi, "SELECT * FROM tabel_perumahan JOIN tabel_data_rumah ON tabel_perumahan.kd_perumahan = tabel_data_rumah.kd_perumahan WHERE kecamatan_perum = '$kd_kecamatan' OR kelurahan_perum = '$kd_kelurahan' ");
                //$sql = mysqli_query($koneksi, $query);
                $hitung = mysqli_num_rows($tampil);
                if ($hitung > 0) {
                    while ($kd = mysqli_fetch_assoc($tampil)) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg"
                            data-setbg="../developer/img/postingan/<?php echo $kd['foto_1']; ?>">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $kd['judul_postingan']; ?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Luas Bangunan</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo $kd['luas_bangunan']; ?></span>
                                    </div>
                                    <div class="beds">
                                        <p>Kamar Tidur</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php echo $kd['jumlah_kamar']; ?></span>
                                    </div>
                                    <div class="baths">
                                        <p>Kamar Mandi</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span><?php echo $kd['jumlah_wc']; ?></span>
                                    </div>

                                </div>
                            </div>
                            <div class="room-price">
                                <p>Mulai Dari -</p>
                                <span>
                                    <?php  
                                        $harga_paket_kursus = $kd['harga'];                                
                                        echo "Rp. ". number_format($harga_paket_kursus, 2, ".", ",");
                                    ?>
                                </span>
                            </div>
                            <a href="detail.php?kd_data_rumah=<?php echo $kd['kd_data_rumah'] ?>"
                                class="site-btn btn-line">Selengkapnya</a>
                        </div>
                    </div>

                </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- kotak katalok tutup -->





    <!-- Popular Room Section Begin -->
    <section class="popular-room set-bg p-in" data-setbg="img/bg-2.jpg">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <!-- Popular Room Section End -->




    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="newslatter-text">
                        <img src="img/message.png" alt="">
                        <h4>Anda Pengembang Atau Developer Dari Perumahan? <br>Tertarik Untuk Bergabung?</h4>
                        <form action="../developer/Daftar/daftar.php">

                            <button type="submit" class="site-btn news-btn">Bergabung</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->



    <!-- Servies Section Begin -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-side">
                        <h2><span>Kenapa Harus Pilih Kami?</span></h2>
                        <p>Info Perumahan Jember Merupakan Situs yang di peruntukan bagi yang ingin mencari rumah
                            di komplek perumahan, Khususnya di Kabupaten JEMBER dapat mencari refrensi rumah idaman
                            anda. Tersedia puluhan developer yang bekerja sama dengan kami dalam mengembangkan rumah
                            yang Nyaman Aman dan Murah.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side">
                        <ul>
                            <li><img src="img/check.png" alt="">Tersedia Rumah Perumahan Seluruh Kota Jember
                            </li>
                            <li><img src="img/check.png" alt="">Cari Rumah baru </li>
                            <li><img src="img/check.png" alt="">Harga Bervariasi</li>
                            <li><img src="img/check.png" alt="">Berbagai Macam Desain Rumah dan Tipe
                            </li>
                            <li><img src="img/check.png" alt="">Resmi Certivicated PERUM
                            </li>
                            <li><img src="img/check.png" alt="">Tersedia Rumah Bersubsidi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Servies Section End -->
    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Jangan lupa untuk mengikuti kami di Instagram @ipj_perum</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <!-- Rooms Pic Section Begin-->
        <div class="room-pic">
            <div class="container-fluid">
                <div class="row sp-40">
                    <img src="img/room-pic/1.jpg" alt="">
                    <img src="img/room-pic/2.jpg" alt="">
                    <img src="img/room-pic/3.jpg" alt="">
                    <img src="img/room-pic/4.jpg" alt="">
                    <img src="img/room-pic/5.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Rooms Pic Section End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <img src="img/only-logo.png" alt="">
                </div>
            </div>
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>Tentang Kami</h5>
                        <p>Info Perumahan Jember Akan Selalu Hadir Untuk Membantu Pemasaran Marketing Developer
                            Perumahan</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Alamat Kami</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>Perum Griya Mangli Indah Blok R-13</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@ipj.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>08984050435</span></li>
                        </ul>
                        <p>Senin – Jumat: 9 am – 5 pm</p>
                        <p>Sabtu: 9 am – 1pm</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright" style="background-color:black">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Info Perumahan Jember </a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
</body>

</html>