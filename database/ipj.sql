-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 08:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipj`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `kd_admin` int(11) NOT NULL,
  `nama_admin` varchar(37) NOT NULL,
  `alamat_rumah` varchar(55) NOT NULL,
  `admin_username` varchar(17) NOT NULL,
  `admin_password` varchar(17) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `foto_profil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`kd_admin`, `nama_admin`, `alamat_rumah`, `admin_username`, `admin_password`, `no_telpon`, `foto_profil`) VALUES
(1, 'Dinda Ayu', 'Jl Harsoyo', 'admin', 'admin', '087673654786', 'rtaImage.jpg'),
(2, 'Haris', 'Medan', 'haris', 'haris', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_rumah`
--

CREATE TABLE `tabel_data_rumah` (
  `kd_data_rumah` int(10) NOT NULL,
  `kd_perumahan` int(11) NOT NULL,
  `judul_postingan` varchar(50) NOT NULL,
  `tipe_rumah` varchar(20) NOT NULL,
  `jumlah_unit_rumah` int(11) NOT NULL,
  `jumlah_kamar` int(3) NOT NULL,
  `jumlah_wc` int(3) NOT NULL,
  `harga` int(30) NOT NULL,
  `luas_tanah` float NOT NULL,
  `luas_bangunan` float NOT NULL,
  `sumber_air` varchar(10) NOT NULL,
  `daya_listrik` int(11) NOT NULL,
  `pondasi` varchar(20) NOT NULL,
  `dinding` varchar(20) NOT NULL,
  `daun_pintu` varchar(20) NOT NULL,
  `kusen` varchar(20) NOT NULL,
  `keramik` varchar(10) NOT NULL,
  `pintu_km_mandi` varchar(20) NOT NULL,
  `kerangka_atap` varchar(20) NOT NULL,
  `rangka_plafon` varchar(20) NOT NULL,
  `tutup_plafon` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `foto_1` varchar(50) NOT NULL,
  `foto_2` varchar(50) NOT NULL,
  `foto_3` varchar(50) NOT NULL,
  `foto_4` varchar(50) NOT NULL,
  `foto_5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_data_rumah`
--

INSERT INTO `tabel_data_rumah` (`kd_data_rumah`, `kd_perumahan`, `judul_postingan`, `tipe_rumah`, `jumlah_unit_rumah`, `jumlah_kamar`, `jumlah_wc`, `harga`, `luas_tanah`, `luas_bangunan`, `sumber_air`, `daya_listrik`, `pondasi`, `dinding`, `daun_pintu`, `kusen`, `keramik`, `pintu_km_mandi`, `kerangka_atap`, `rangka_plafon`, `tutup_plafon`, `status`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`) VALUES
(18, 10, 'Rumah tipe 36', '36', 54, 2, 1, 250000000, 45, 36, 'PDAM', 900, 'Beton', 'Batu bata merah', 'kayu jati', 'kayu jati', '40x40', 'pvc', 'galvalum', 'hollow', 'gipsum', 'Tersedia', 'r1.jpg', 'r2.jpg', 'r3.jpg', 'r4.jpg', 'r5.jpg'),
(19, 10, 'Rumah tipe 45', '45', 30, 3, 2, 450000000, 56, 45, 'PDAM', 900, 'Beton', 'Batu bata merah', 'kayu jati', 'kayu jati', '40x40', 'PVC', 'hollow', 'Galvalum', 'Gipsum', 'Tersedia', 'contoh-desain-rumah-cilik.png', 'r2.jpg', 'r3.jpg', 'Desain Rumah Minimalis1.jpg', 'desain-rumah-minimalis-type_25049.jpg'),
(20, 11, 'Rumah tipe 45', '45', 30, 3, 2, 480000000, 60, 45, 'PDAM', 1200, 'Beton', 'Batu bata merah', 'kayu jati', 'kayu jati', '40x40', 'PVC', 'hollow', 'Galvalum', 'Gipsum', 'Tersedia', 'Sederhana-Rumah-Minimalis-Type-36.jpg', 'tipe-36 (1).jpg', 'tipe-36.jpg', 'unnamed.jpg', 'w644.jpg'),
(21, 11, 'Rumah tipe 60', '60', 30, 4, 2, 630000000, 75, 60, 'PDAM', 1200, 'Beton', 'Batu bata merah ', 'kayu jati', 'kayu jati', '40x40', 'PVC', 'hollow', 'Galvalum', 'Gipsum', 'Tersedia', 'info-perumahan-tuban-jawa-timur.jpeg', 'model-rumah-minimalis-type-36-7-825x510.jpg', 'Rumah Minimalis Kecil dan Mungil  5.jpg', 'dapur60.jpg', 'screen-2.jpg'),
(22, 12, 'Rumah tipe 45', '45', 50, 3, 2, 540000000, 56, 45, 'PDAM', 900, 'Beton', 'Batu bata merah', 'kayu jati', 'kayu jati', '40x40', 'PVC', 'hollow', 'Galvalum', 'Gipsum', 'Tersedia', 'er.jpg', 'fh.jpg', 'Gambar-Rumah-Mungil3.jpg', 'gk.jpg', 'rmh60.jpg'),
(23, 12, 'Rumah tipe 60', '60', 40, 4, 2, 680000000, 75, 60, 'PDAM', 1200, 'Beton', 'Batu bata merah', 'kayu jati', 'kayu jati', '40x40', 'PVC', 'hollow', 'Galvalum', 'Gipsum', 'Tersedia', 'r1.jpg', 'r2.jpg', 'r3.jpg', 'r4.jpg', 'r5.jpg'),
(24, 13, 'Rumah tipe 60', '60', 56, 4, 2, 740000000, 75, 60, 'PDAM', 1200, 'Beton', 'Batu bata merah', 'kayu jati', 'kayu jati', '40x40', 'PVC', 'hollow', 'Galvalum', 'Gipsum', 'Tersedia', 'kds.jpg', 'Model rumah minimalis terbaru - 1.jpg', 'r1.jpg', 'r3.jpg', 'r5.jpg'),
(25, 13, 'Rumah tipe 70 griya mangli indah', '70', 25, 5, 2, 860000000, 85, 70, 'PDAM', 1200, 'Beton', 'Batu bata merah', 'kayu jati', 'kayu jati', '40x40', 'PVC', 'hollow', 'Galvalum', 'Gipsum', 'Tersedia', '1_MnLYeimPxm23oIl-eZmP5Q.png', '24.jpg', 'r3.jpg', 'r4.jpg', 'r6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_developer`
--

CREATE TABLE `tabel_developer` (
  `nik` varchar(16) NOT NULL,
  `nama_dev` varchar(30) NOT NULL,
  `alamat_dev` varchar(50) NOT NULL,
  `no_dev` varchar(14) NOT NULL,
  `email_dev` varchar(30) NOT NULL,
  `foto_profil_dev` varchar(50) NOT NULL,
  `foto_ktp_dev` varchar(50) NOT NULL,
  `foto_diri_dev` varchar(50) NOT NULL,
  `foto_siup` varchar(50) NOT NULL,
  `status_developer` varchar(30) NOT NULL,
  `username_dev` varchar(20) NOT NULL,
  `password_dev` varchar(20) NOT NULL,
  `kd_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_developer`
--

INSERT INTO `tabel_developer` (`nik`, `nama_dev`, `alamat_dev`, `no_dev`, `email_dev`, `foto_profil_dev`, `foto_ktp_dev`, `foto_diri_dev`, `foto_siup`, `status_developer`, `username_dev`, `password_dev`, `kd_admin`) VALUES
('3333565575676878', 'Agus Suprationo', 'Jember', '085675345245', 'rezaahaironi016@gmail.com', 'Pasfoto-3x4-Pak-Julius.jpg', 'ktp.jpg', 'a.jpg', '15.jpg', '1', 'reza', '1', 0),
('3509050903000005', 'Rifqi', 'Kaliwates', '087463656541', 'rifqi9@gmail.com', 'S-xFRcwS_400x400.jpeg', 'ktp.jpg', 'orang dan ktp.jpg', 'siup (1).jpg', '1', 'rifqi09', 'rifqi09', 0),
('3509050903000007', 'Harris', 'Medan', '087676343745', 'harismansihombing28@gmail.com', 'WhatsApp Image 2020-01-02 at 00.35.11.jpeg', 'ktp-amat-faozi_20170720_083509.jpg', 'suket-tak-terkontrol-dpr-minta-kemendagri-percepat', 'SIUP.JPG', '1', 'haris09', 'haris09', 0),
('3509050904300002', 'Jalal', 'Paleran', '081331876998', 'jallal09@gmail.com', 'diri.jpeg', 'ktp-di-pakaian-pelaku-bom-solo_20160705_125352_146', 'berita_626726_800x600_IMG_20190122_152414.jpg', 'contoh-siup-besar.jpg', '1', 'jalal09', 'jalal09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kecamatan`
--

CREATE TABLE `tabel_kecamatan` (
  `kd_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kecamatan`
--

INSERT INTO `tabel_kecamatan` (`kd_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Ajung'),
(2, 'Ambulu'),
(3, 'Arjasa'),
(4, 'Bangsalsari'),
(5, 'Balung'),
(6, 'Gumukmas'),
(7, 'Jelbuk'),
(8, 'Jenggawah'),
(9, 'Jombang'),
(10, 'Kalisat');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kelurahan`
--

CREATE TABLE `tabel_kelurahan` (
  `kd_kelurahan` int(11) NOT NULL,
  `kd_kecamatan` int(11) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kelurahan`
--

INSERT INTO `tabel_kelurahan` (`kd_kelurahan`, `kd_kecamatan`, `nama_kelurahan`) VALUES
(1, 1, 'Klompangan'),
(2, 1, 'Mangaran'),
(3, 2, 'Andongsari'),
(4, 2, 'Pontang'),
(5, 3, 'Arjasa'),
(6, 3, 'Biting'),
(7, 4, 'Badean'),
(8, 4, 'Bangsalsari'),
(9, 5, 'Balung Kidul'),
(10, 5, 'Balung Kulon'),
(11, 6, 'Bagorejo'),
(12, 6, 'Karangrejo'),
(13, 7, 'Jelbuk'),
(14, 7, 'Panduman'),
(15, 8, 'Cangkring'),
(16, 8, 'Jatisari'),
(17, 9, 'Jombang'),
(18, 9, 'Keting'),
(19, 10, 'Gambiran'),
(20, 10, 'Glagahwero');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_perumahan`
--

CREATE TABLE `tabel_perumahan` (
  `kd_perumahan` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_perumahan` varchar(30) NOT NULL,
  `alamat_kantor_perumahan` varchar(50) NOT NULL,
  `alamat_perumahan` varchar(50) NOT NULL,
  `kecamatan_perum` varchar(50) NOT NULL,
  `kelurahan_perum` varchar(50) NOT NULL,
  `informasi_perumahan` text NOT NULL,
  `vidio_profile` varchar(70) NOT NULL,
  `email_perum` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `foto_beranda` varchar(50) NOT NULL,
  `no_perum` varchar(14) NOT NULL,
  `no_telp_perum` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_perumahan`
--

INSERT INTO `tabel_perumahan` (`kd_perumahan`, `nik`, `nama_perumahan`, `alamat_kantor_perumahan`, `alamat_perumahan`, `kecamatan_perum`, `kelurahan_perum`, `informasi_perumahan`, `vidio_profile`, `email_perum`, `latitude`, `longitude`, `facebook`, `instagram`, `youtube`, `foto_beranda`, `no_perum`, `no_telp_perum`) VALUES
(10, '3333565575676878', 'Perumahan Citra Maja Raya', 'Jl. gajah mada no. 54', 'Jl. gajah mada no. 34', '1', '1', 'Perumahan yang bernuansa alam', 'https://www.youtube.com/embed/JQZLsbEN28k', 'citramaja@gmail.com', '-8.182555', '113.681617', '', '', '', 'logo-gerbang-cmr.jpg', '081259383492', ''),
(11, '3509050904300002', 'Perumahan sehat sentosa', 'Jl. sultan agung no. 67', 'Jl. rawa indah no. 34', '2', '3', 'Perumahan yang diperuntukkan untuk lansia', 'https://www.youtube.com/embed/ARrllRBnR20', 'sehatsentosa@gmail.com', '-8.182810', '113.679466', '', '', '', 'bg-2.jpg', '08984050435', ''),
(12, '3509050903000007', 'Perumahan jaya  abadi', 'Jl. semangka pahit no. 67', 'Jl. semangka manis no. 98', '1', '1', 'Perumahan yang ditujukan untuk anak milenial ', '', 'jayaabadi@gmail.com', '-8.182682', '113.681376', '', '', '', 'er.jpg', '082274933040', ''),
(13, '3509050903000005', 'Perumahan griya mangli indah', 'Jl. Brawijaya no. 68', 'Jl. Brawijaya no. 47', '2', '4', 'Rumah yang di desain khusus untuk semua umur dengan kualitas terbaik dengan harga terjangkau', 'https://www.youtube.com/embed/edoTbdrHeZA', 'griyamangli@gmail.com', '-8.184499', '113.682182', '', '', '', 'elit.jpg', '08984050435', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tabel_data_rumah`
--
ALTER TABLE `tabel_data_rumah`
  ADD PRIMARY KEY (`kd_data_rumah`),
  ADD KEY `kd_perumahan` (`kd_perumahan`);

--
-- Indexes for table `tabel_developer`
--
ALTER TABLE `tabel_developer`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tabel_kecamatan`
--
ALTER TABLE `tabel_kecamatan`
  ADD PRIMARY KEY (`kd_kecamatan`);

--
-- Indexes for table `tabel_kelurahan`
--
ALTER TABLE `tabel_kelurahan`
  ADD PRIMARY KEY (`kd_kelurahan`),
  ADD KEY `kd_kecamatan` (`kd_kecamatan`);

--
-- Indexes for table `tabel_perumahan`
--
ALTER TABLE `tabel_perumahan`
  ADD PRIMARY KEY (`kd_perumahan`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_data_rumah`
--
ALTER TABLE `tabel_data_rumah`
  MODIFY `kd_data_rumah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tabel_kecamatan`
--
ALTER TABLE `tabel_kecamatan`
  MODIFY `kd_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_kelurahan`
--
ALTER TABLE `tabel_kelurahan`
  MODIFY `kd_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tabel_perumahan`
--
ALTER TABLE `tabel_perumahan`
  MODIFY `kd_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_data_rumah`
--
ALTER TABLE `tabel_data_rumah`
  ADD CONSTRAINT `tabel_data_rumah_ibfk_1` FOREIGN KEY (`kd_perumahan`) REFERENCES `tabel_perumahan` (`kd_perumahan`);

--
-- Constraints for table `tabel_kelurahan`
--
ALTER TABLE `tabel_kelurahan`
  ADD CONSTRAINT `tabel_kelurahan_ibfk_1` FOREIGN KEY (`kd_kecamatan`) REFERENCES `tabel_kecamatan` (`kd_kecamatan`);

--
-- Constraints for table `tabel_perumahan`
--
ALTER TABLE `tabel_perumahan`
  ADD CONSTRAINT `tabel_perumahan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tabel_developer` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
