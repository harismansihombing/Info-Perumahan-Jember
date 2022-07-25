<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Property Page | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="
    ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <!-- <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">About</a></li>

                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header> -->

    <nav class="navbar navbar-expand-lg" style="background-color: #353666;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!--<a class="navbar-brand" href="index.php">Home</a>-->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active text-white">
                    <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="index.php">
                <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse col-lg-12" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav> -->

    <!-- <section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Property Page</h2>
        </div>
    </section> -->

    <!-- Single Property Section Begin -->
    <?php

    $kd_data_rumah = $_GET['kd_data_rumah'];
    $query = "SELECT * FROM tabel_data_rumah 
                 INNER JOIN tabel_perumahan ON tabel_data_rumah.kd_perumahan = tabel_perumahan.kd_perumahan 
                 INNER JOIN tabel_developer ON  tabel_developer.nik = tabel_perumahan.nik where kd_data_rumah = $kd_data_rumah";
    $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    $row = mysqli_fetch_array($sql);

    ?>

    <div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">
                        <h3> <?php echo $row['judul_postingan']; ?> </h3>
                        <a href="#"><i class="fa flaticon-placeholder"></i>Kabupaten Jember</a>
                    </div>
                    <div class="property-price">
                        <p>Harga Mulai -</p>
                        <span>
                            <?php

                            $harga = $row['harga'];
                            function rupiah($harga)
                            {
                                $hasil_rupiah = "Rp. " . number_format($harga, 2, ',', '.');
                                return $hasil_rupiah;
                            }
                            echo rupiah($harga);

                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <!-- CAROUSEL PLACE  -->

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!--<img src="img/rooms/2.jpg" class="d-block w-100" alt="">-->
                        <img src="../developer/img/postingan/<?php echo $row['foto_1'];?>" alt="">
                    </div>
                    <div class="carousel-item">
                        <!--<img src="img/rooms/2.jpg" class="d-block w-100" alt="">-->
                        <img src="../developer/img/postingan/<?php echo $row['foto_2'];?>" alt="">

                    </div>
                    <div class="carousel-item">
                        <!--<img src="img/rooms/3.jpg" class="d-block w-100" alt="">-->
                        <img src="../developer/img/postingan/<?php echo $row['foto_3'];?>" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-6">
                                <div class="t-details">
                                    <div class="popular-room-features single-property">
                                        <div class="size">
                                            <p>Luas bangunan</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span> <?php echo $row['luas_bangunan']; ?> m<sup>2</sup></span>
                                        </div>
                                        <div class="beds">
                                            <p>Kamar tidur</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span> <?php echo $row['jumlah_kamar']; ?> </span>
                                        </div>
                                        <div class="baths">
                                            <p>Kamar mandi</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span> <?php echo $row['jumlah_wc']; ?> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Deskripsi</h4>
                                    <p> <?php echo $row['informasi_perumahan']; ?> </p>
                                </div>

                                <div class="property-description">
                                    <h4>Spesifikasi bangunan</h4>
                                    <table class="table table-borderless table-sm col-lg-6">
                                        <tbody>
                                            <tr>
                                                <td>Luas bangunan</td>
                                                <td>:</td>
                                                <td> <?php echo $row['luas_bangunan']; ?> m<sup>2</sup></td>
                                            </tr>
                                            <tr>
                                                <td>Luas tanah</td>
                                                <td>:</td>
                                                <td> <?php echo $row['luas_tanah']; ?> m<sup>2</sup></td>
                                            </tr>
                                            <tr>
                                                <td>Pondasi</td>
                                                <td>:</td>
                                                <td> <?php echo $row['pondasi']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Dinding</td>
                                                <td>:</td>
                                                <td> <?php echo $row['dinding']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran keramik</td>
                                                <td>:</td>
                                                <td> <?php echo $row['keramik']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Kusen</td>
                                                <td>:</td>
                                                <td> <?php echo $row['kusen']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Daun pintu</td>
                                                <td>:</td>
                                                <td> <?php echo $row['daun_pintu']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Pintu kamar mandi</td>
                                                <td>:</td>
                                                <td> <?php echo $row['pintu_km_mandi']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Kerangka atap</td>
                                                <td>:</td>
                                                <td> <?php echo $row['kerangka_atap']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Rangka plafon</td>
                                                <td>:</td>
                                                <td> <?php echo $row['rangka_plafon']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Penutup plafon</td>
                                                <td>:</td>
                                                <td> <?php echo $row['tutup_plafon']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Sumber air</td>
                                                <td>:</td>
                                                <td> <?php echo $row['sumber_air']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Listrik</td>
                                                <td>:</td>
                                                <td> <?php echo $row['daya_listrik']; ?> </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>



                                <div class="location-map">
                                    <h4>Lokasi</h4>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2 -->

                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">


                                <img src="../developer/img/data_developer/foto_profil/<?php echo $row['foto_profil_dev']; ?>"
                                    height="200" width="200" style="border-radius: 50%" alt="">
                                <h5><?php echo $row['nama_perumahan']; ?></h5>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['alamat_perumahan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $row['no_perum']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $row['email_perum']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="profilperusahaan.php?kd_perumahan=<?php echo $row['kd_perumahan']; ?>"
                                    class="site-btn list-btn">Info perumahan</a>

                                <!-- <p class="text-center buttons p-2"><a href="https://web.whatsapp.com/send?phone=<?php $nomor = $row['no_dev'];
                                                                                                                        if ($nomor[0] == '0') {
                                                                                                                            $nomor = substr_replace($nomor, "+62", 0, 1);
                                                                                                                        } ?>&text=Permisi,%20apa%20ada%20rumah%20yang%20masih%20kosong%20?" class="site-btn list-btn"><i></i>Hubungi</a></p>

                                    <a href="https://api.whatsapp.com/send?phone=<?php
                                                                                    $nomor = $row['no_dev'];
                                                                                    if ($nomor[0] == '0') {
                                                                                        $nomor = substr_replace($nomor, "+62", 0, 1);
                                                                                    } ?>;">Send Message</a> -->

                                <a
                                    href="https://api.whatsapp.com/send?phone= <?php
                                                                                $nohp = $row['no_perum'];
                                                                                function hp($nohp)
                                                                                {
                                                                                    // kadang ada penulisan no hp 0811 239 345
                                                                                    $nohp = str_replace(" ", "", $nohp);
                                                                                    // kadang ada penulisan no hp (0274) 778787
                                                                                    $nohp = str_replace("(", "", $nohp);
                                                                                    // kadang ada penulisan no hp (0274) 778787
                                                                                    $nohp = str_replace(")", "", $nohp);
                                                                                    // kadang ada penulisan no hp 0811.239.345
                                                                                    $nohp = str_replace(".", "", $nohp);

                                                                                    // cek apakah no hp mengandung karakter + dan 0-9
                                                                                    if (!preg_match('/[^+0-9]/', trim($nohp))) {
                                                                                        // cek apakah no hp karakter 1-3 adalah +62
                                                                                        if (substr(trim($nohp), 0, 3) == '+62') {
                                                                                            $hp = trim($nohp);
                                                                                        }
                                                                                        // cek apakah no hp karakter 1 adalah 0
                                                                                        elseif (substr(trim($nohp), 0, 1) == '0') {
                                                                                            $hp = '+62' . substr(trim($nohp), 1);
                                                                                        }
                                                                                    }
                                                                                    print $hp;
                                                                                }
                                                                                hp($nohp);
                                                                                ?>&text=Permisi,%20apa%20ada%20rumah%20yang%20masih%20tersedia%20?">Send
                                    Message</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>
    <!-- Single Property Deatails Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section p-40">
        <div class="container">

            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>Tentang Kami</h5>
                        <p>Info Perumahan Jember Akan Selalu Hadir Untuk Membantu Pemasaran Marketing Developer
                            Perumahan</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Kontak Kami</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>Perum Griya Mangli Indah Blok R-13</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@ipj.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>08984050435</span></li>
                        </ul>
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