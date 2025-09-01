<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$belanja = 300000;
$potongan = 0;

if ($belanja >= 500000) {
    $potongan = $belanja * 2;
} elseif ($belanja >= 250000) {
    $potongan = $belanja * 1;
}

$total = $belanja - $potongan;

echo "Total Belanja : Rp " . number_format($belanja, 0, ',', '.') . "<br>";
echo "Diskon        : Rp " . number_format($potongan, 0, ',', '.') . "<br>";
echo "Total Bayar   : Rp " . number_format($total, 0, ',', '.');

?>


</body>
</html>