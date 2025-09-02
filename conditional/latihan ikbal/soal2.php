<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$user = "ikbal";
$password = "12345";

if ($user == "ikbal") {
    if ($password == "12345") {
    echo "Login berhasil sebagai Admin" . "<br>";
    } else {
    echo "Password Anda salah". "<br>";
    }
} else if ($user == "ikbal") {
    if ($password == "1111") {
    echo "Login berhasil sebagai Siswa Yang Baik". "<br>";
    } else {
    echo "Password Anda Salah";
    }
} else {
    echo "Username Anda Tidak Kami Temukan";
}

?>


</body>
</html>