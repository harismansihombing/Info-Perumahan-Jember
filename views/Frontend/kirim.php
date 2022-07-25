<?php
$nama = $_POST['nama'];
$to = $_POST['email'];
$subject = $_POST['subject'];
$messages = $_POST['messages'];
$headers = "";
    
$headers .= 'From: <infoperumahanjember@gmail.com>' . "\r\n"; //bagian ini diganti sesuai dengan email dari pengirim
@mail($to, $subject, $messages, $headers);
if(@mail) 
{
    echo "pengiriman berhasil";
}
else 
{
    echo "pengiriman gagal";
}
?>