<?php
$film = [
    ["nama" => "marvel", "rating" => 9.5],
    ["nama" => "dilan 1990", "rating" => 8.5],
    ["nama" => "siksa kubur", "rating" => 7.5],
    ["nama" => "sewu dino", "rating" => 6.0],
    ["nama" => "dragon ball", "rating" => 8.0]
];
foreach ($film as $data) {
    if ($data["rating"] > 8) {
        echo "Nama Film: " . $data["nama"] . " - " . "rating film : " . $data["rating"] . "<br>";
    }
}

