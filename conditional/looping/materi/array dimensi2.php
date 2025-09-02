<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$siswa = [
    ["nama" => "Andi", "kelas" => "XI RPL"],
    ["nama" => "Budi", "kelas" => "X TKJ"],
    ["nama" => "Citra", "kelas" => "XI MM"],
];

foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . " - Kelas: " . $data["kelas"] . "<br>";
}
?>


</body>
</html>