<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$total= 6000000;
$disc = 0;

if ($total >= 500000) {
    $disc  = $total * 0.2;
} elseif ($total >= 250000) {
    $disc = $total * 0.1;
}else {
    $disc = 0;
}


echo "Total Belanja : Rp " . $total . "<br>";
echo "Diskon        : Rp " . $disc . "<br>";
echo "Total Bayar   : Rp " . ($total - $disc) . "<br>";

?>
</body>
</html>