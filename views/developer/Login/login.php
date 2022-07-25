<html>

<head>
    <meta charset="utf-8">
    <title>Login | S</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="form-v8">
    <div class="page-content">
        <?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "<script>alert('Login Gagal Username atau Password Salah');window.location='login.php'</script>";
			} else if ($_GET['pesan'] == "logout") {
                echo "<script>alert('Anda Telah Berhasil Logout');window.location='login.php'</script>";
			} else if ($_GET['pesan'] == "belum_login") {
                echo "<script type='text/javascript'>alert('Anda Harus Login Untuk Masuk Sistem');window.location='login.php'</script>";
			} else if ($_GET['pesan'] == "data_kosong") {
                echo "<script>alert('Akun Anda Dalam Proses Verifikasi');window.location='login.php'</script>";
			}
		}
		?>
        <div class="form-v8-content">
            <div class="form-left">
                <img src="ipj-black.png" height="300" width="500" alt="form" style="position: relative; top: 50px;">
            </div>
            <div class="form-right">
                <div class="tab">
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-in')" id="defaultOpen">Login</button>
                    </div>
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-up')">Daftar</button>
                    </div>
                </div>

                <form class="form-detail" action="proses_login.php" method="post">
                    <div class="tabcontent" id="sign-in">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="username" id="full_name_1" class="input-text" required
                                    oninvalid="this.setCustomValidity('Username tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                                <span class="label">Username</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password" id="password_1" class="input-text" required
                                    oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Sign In">
                        </div>
                    </div>
                </form>

                <form class="form-detail" action="../Daftar/daftar.php" method="post">
                    <div class="tabcontent" id="sign-up">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <label style="text-align: center">Selamat Datang di Website Info Perumahan Jember
                                </label><br>
                                <label>Jika Anda Sebagai Pengunjung Anda Tidak Perlu Mendafatar.<br> Jika Anda Sebagai
                                    Developer Klik Selanjutnya untuk Mendaftar </label>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="selanjutnya" class="register" value="Selanjutnya">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</body>

</html>