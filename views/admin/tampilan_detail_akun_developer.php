<?php
include 'login/koneksi.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>

<html>

<head>
    <title>Edit | Profil</title>
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
                        <li class="breadcrumb-item active">Data Developer</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            <?php

            $id = $_GET['?nik'];

            $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
            $fetch = mysqli_fetch_array($query);
            ?>
            
            <input type="hidden" value="<?php echo $fetch['status_developer']; ?>">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-warning">
                                    <div class="card-title">
                                        Identitas Developer :
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">NIK</label><br>
                                        <input type="text" name="nik" value="<?php echo $fetch['nik']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Nama</label><br>
                                        <input type="text" name="nama_admin" value="<?php echo $fetch['nama_dev']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">No Telepon</label><br>
                                        <input type="text" name="no_dev" value="<?php echo $fetch['no_dev']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Email</label><br>
                                        <input type="text" name="Email" value="<?php echo $fetch['email_dev']; ?>"
                                            style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Username</label><br>
                                        <input type="text" name="username_dev"
                                            value="<?php echo $fetch['username_dev']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Password</label><br>
                                        <input type="password" name="password_dev"
                                            value="<?php echo $fetch['password_dev']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div style="visibility: hidden; overflow:hidden; height:0; width:0;">
                                        <input type=" text" name="email_penerima"
                                            value="<?php echo $fetch['email_dev']; ?>">
                                        <input type="hidden" name="subjek" value="Verifikasi">
                                        <input type="hidden" name="pesan"
                                            value="Selamat Bergabung <?php echo $fetch['nama_dev']; ?>">
                                        <input type="file" name="attachment" style="margin-top: 5px;width: 400px" />
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <input type="submit" name="kirim" value="Terima" style="width: 100%;"
                                            class="btn btn-info">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <div class="card-title"> Dokumen Foto Developer :</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Foto Profil</label><br>
                                        <img src="../developer/img/data_developer/foto_profil/<?php echo $fetch['foto_profil_dev']; ?>"
                                            width="300px" height="300x" style="width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto KTP</label><br>
                                        <img src="../developer/img/data_developer/foto_ktp/<?php echo $fetch['foto_ktp_dev']; ?>"
                                            width="300px" height="300px" style="width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Diri Beserta KTP</label><br>
                                        <img src="../developer/img/data_developer/foto_diri_ktp/<?php echo $fetch['foto_diri_dev']; ?>"
                                            width="300px" height="300px" style="width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Dokumen SIUP</label><br>
                                        <img src="../developer/img/data_developer/foto_siup/<?php echo $fetch['foto_siup']; ?>"
                                            width="300px" height="300px" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </form>

        <?php
        if (isset($_POST['kirim'])) {
                       
            // Include librari phpmailer
            include('phpmailer/Exception.php');
            include('phpmailer/PHPMailer.php');
            include('phpmailer/SMTP.php');

            $email_pengirim = 'infoperumahanjember@gmail.com'; // Isikan dengan email pengirim
            $nama_pengirim = 'Info Perumahan Jember'; // Isikan dengan nama pengirim
            $email_penerima = $_POST['email_penerima']; // Ambil email penerima dari inputan form
            $subjek = $_POST['subjek']; // Ambil subjek dari inputan form
            $pesan = $_POST['pesan']; // Ambil pesan dari inputan form
            $attachment = $_FILES['attachment']['name']; // Ambil nama file yang di upload
            $nik = $_POST['nik'];
            $status_developer = 1;

            $mail = new PHPMailer;
            $mail->isSMTP();

            $mail->Host = 'smtp.gmail.com';
            $mail->Username = $email_pengirim; // Email Pengirim
            $mail->Password = 'tahubul@t5000'; // Isikan dengan Password email pengirim
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

            $mail->setFrom($email_pengirim, $nama_pengirim);
            $mail->addAddress($email_penerima, '');
            $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

            // Load file content.php
            ob_start();
            include "content.php";

            $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
            ob_end_clean();

            $mail->Subject = $subjek;
            $mail->Body = $content;
            $mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email

            if(empty($attachment)){ // Jika tanpa attachment
                $send = $mail->send();

                if($send){ // Jika Email berhasil dikirim
                    $update = mysqli_query($koneksi, "UPDATE tabel_developer SET status_developer='$status_developer' where nik='$nik'");
                    echo "<script>alert('Akun Berhasil Disimpan dan Berhasil Mengirim Konfirmasi Ke Email');window.location='index.php'</script>";
                }else{ // Jika Email gagal dikirim
                    echo "<script>alert('Akun Berhasil Disimpan dan Gagal Mengirim Konfirmasi Ke Email');window.location='index.php'</script>";
                    echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
                    // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
                }
            }else{ // Jika dengan attachment
                $tmp = $_FILES['attachment']['tmp_name'];
                $size = $_FILES['attachment']['size'];

                if($size <= 25000000){ // Jika ukuran file <= 25 MB (25.000.000 bytes)
                    $mail->addAttachment($tmp, $attachment); // Add file yang akan di kirim

                    $send = $mail->send();

                    if($send){ // Jika Email berhasil dikirim
                        echo "<h1>Email berhasil dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
                    }else{ // Jika Email gagal dikirim
                        echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
                        // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
                    }
                }else{ // Jika Ukuran file lebih dari 25 MB
                    echo "<h1>Ukuran file attachment maksimal 25 MB</h1><br /><a href='index.php'>Kembali ke Form</a>";
                }
            }
            
            
           

    
        }
        ?>




    </section>


</body>

</html>