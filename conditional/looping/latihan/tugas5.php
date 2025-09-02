<?php
$siswa = [
    "Andi" => 80,
    "Budi" => 70,
    "Citra" => 90,
    "Dewi" => 60,
    "Eka" => 75
];
foreach ($siswa as $nama => $nilai) {
    if ($nilai >= 75) {
        echo "$nama lulus dengan nilai $nilai<br>";
    } else {
        echo "$nama tidak lulus dengan nilai $nilai<br>";
    }
}
?>