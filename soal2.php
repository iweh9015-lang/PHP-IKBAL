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
        echo "Password salah". "<br>";
    }
} else if ($user == "ikbal") {
    if ($password == "1111") {
        echo "Login berhasil sebagai Siswa". "<br>";
    } else {
        echo "Password salah";
    }
} else {
    echo "Username tidak ditemukan";
}

?>


</body>
</html>