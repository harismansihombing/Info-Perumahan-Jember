<?php
    $to     = 'frifqi3@gmail.com'; //ganti alamat email penerima
    $subjek = 'TES KIRIM EMAIL DARI XAMPP';
    $pesan = 'Tes kirim Email dari Localhost';
    $message = " Selamat Siang";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $email = mail($to,$subjek,$message,$headers);
            
        if($email)
        {
           echo "<script>
                     alert('Save Pesan Berhasil, kami akan menghubungi anda secepatnya');
                     window.location='index.php';  
                </script>";   
        }
        else
        {
               echo "<script>
                
                        alert('Save Pesan Belum Berhasil');
                            
                    </script>";   
        }   
?>