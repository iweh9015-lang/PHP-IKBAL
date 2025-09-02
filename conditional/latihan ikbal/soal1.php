<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nilai = 85; 
if ($nilai >= 90) {
    echo "Lulus dengan nilai A";
} elseif ($nilai >= 75) {
    echo "Lulus dengan nilai B";
} elseif ($nilai >= 60) {
    echo "Lulus dengan nilai C";
} else {
    echo "Tidak Lulus";
}
?>

</body>
</html>