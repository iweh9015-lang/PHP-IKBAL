<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nilai = 65;

if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 75) {
    echo "Nilai B";
} elseif ($nilai >= 60) {
    echo "Nilai C";
} else {
    echo "Nilai D";
}

</body>
</html>