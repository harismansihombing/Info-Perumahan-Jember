<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:index.php');
}
require_once("koneksi.php");
?>


<html>

<head>
    <title>Form Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>

    <div align='center'>
        <form action="proseslogin.php" method="post">
            <h1>Masuk</h1>
            <table>
                <tbody>
                    <tr>
                        <td>Username</td>
                        <td> : <input name="username" type="text"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> : <input name="password" type="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>