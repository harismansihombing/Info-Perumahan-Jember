<?php
require_once("koneksi.php");
include '../Login/koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Daftar || IPJ</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
    <link rel="stylesheet" type="text/css"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="form-v10">
    <div class="page-content">
        <div class="form-v10-content">
            <form class="form-detail" action="#" method="post" id="myform" enctype="multipart/form-data">
                <div class="form-left">
                    <h2>Data Diri</h2>
                    <div class="form-row">
                        <input type="text" name="nik" class="company" id="company" placeholder="NIK" required oninvalid="this.setCustomValidity('Kolom NIK Tidak Boleh Kosong')"
                            oninput="setCustomValidity('')" minlength="16"
                            maxlength="16" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
                    </div>
                    <div class="form-row">
                        <input type="text" name="nama_dev" class="company" id="company" placeholder="Nama" required oninvalid="this.setCustomValidity('Kolom Nama Tidak Boleh Kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="form-row">
                        <input type="text" name="no_dev" class="company" id="company" placeholder="Nomor Telepon"
						required oninvalid="this.setCustomValidity('Kolom Telepon Tidak Boleh Kosong')"
                            oninput="setCustomValidity('')" minlength="14"
                            maxlength="14" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
                    </div>
                    <div class="form-row">
                        <input type="text" name="email_dev" placeholder="Email" required oninvalid="this.setCustomValidity('Kolom Email Tidak Boleh Kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="form-row">
                        <input type="text" name="alamat_dev" placeholder="Alamat" required oninvalid="this.setCustomValidity('Kolom Alamat Tidak Boleh Kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="form-row">
                        <input type="text" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Kolom Username Tidak Boleh Kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Kolom Password Tidak Boleh Kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="form-right">
                    <h2>Data Pribadi</h2>
                    <div class="form-row">
                        <div class="">
                            <label style="color: white;">Foto profil</label>
                            <input type="file" name="gambar">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="">
                            <label style="color: white;">Foto KTP</label>
                            <input type="file" name="gambar2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="">
                            <label style="color: white;">Foto Diri Beserta KTP</label>
                            <input type="file" name="gambar3">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="">
                            <label style="color: white;">Foto Siup / Bukti Kepemilikan Perumahan</label>
                            <input type="file" name="gambar4">
                        </div>
                    </div>
                    <div class="form-row-last">
                        <input type="submit" name="kirim" class="register" value="Daftar">
                    </div>
                </div>
            </form>
            <?php
			if (isset($_POST['kirim'])) {
				$nik = $_POST['nik'];
				$nama_dev = $_POST['nama_dev'];
				$alamat_dev = $_POST['alamat_dev'];
				$no_dev = $_POST['no_dev'];
				$Email = $_POST['email_dev'];
				$status = 0;
				$username = $_POST['username'];
				$pass = $_POST['password'];

				// Upload Foto Profil Developer
				$nama_file = $_FILES['gambar']['name'];
				$source = $_FILES['gambar']['tmp_name'];
				$folder = '../img/data_developer/foto_profil/';
				move_uploaded_file($source, $folder . $nama_file);
            	// Upload Foto KTP Developer
				$nama_file2 = $_FILES['gambar2']['name'];
				$source2 = $_FILES['gambar2']['tmp_name'];
				$folder2 = '../img/data_developer/foto_ktp/';
				move_uploaded_file($source2, $folder2 . $nama_file2);
            	// Upload Foto Diri dan KTP Developer
				$nama_file3 = $_FILES['gambar3']['name'];
				$source3 = $_FILES['gambar3']['tmp_name'];
				$folder3 = '../img/data_developer/foto_diri_ktp/';
				move_uploaded_file($source3, $folder3 . $nama_file3);
            	// Upload Foto Siup
				$nama_file4 = $_FILES['gambar4']['name'];
				$source4 = $_FILES['gambar4']['tmp_name'];
				$folder4 = '../img/data_developer/foto_siup/';
				move_uploaded_file($source4, $folder4 . $nama_file4);


				$sql = "SELECT * FROM tabel_developer WHERE username_dev = '$username'";
				$query = $db->query($sql);
				if ($query->num_rows != 0) {
					//echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
					echo "<script>alert('Username Sudah Terdaftar!');window.location='daftar.php'</script>";
				} else {
					if (!$username || !$pass) {
						echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
					} else {
						$data = "INSERT INTO tabel_developer VALUES ('$nik', '$nama_dev', '$alamat_dev', '$no_dev', '$Email', '$nama_file', '$nama_file2', '$nama_file3', '$nama_file4', '$status', '$username', '$pass', '')";
						$simpan = $db->query($data);
						
						if ($simpan) {
							//echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='../Login/login.php'>Login</a></div>";
							echo "<script>alert('Pendaftaran Berhasil. Pendaftaran Anda Sedang Kami Verifikasi, Jika Verifikasi Selesai Konfirmasi Akan Kami Kirim Ke Email Anda');window.location='daftar.php'</script>";
						} else {
							echo "<div align='center'>Proses Gagal!</div>";
						}
					}
				}
			}
			?>
        </div>
    </div>
</body>

</html>