<?php
$barang = [
    ["nama" => "laptop", "stok" => 10],
    ["nama" => "motor", "stok" => 2],
    ["nama" => "helm", "stok" => 0],
    ["nama" => "mobil", "stok" => 6],
    ["nama" => "handphone", "stok" => 3]
];

foreach ($barang as $data) {
    if ($data["stok"] < 5) {
        echo "Nama Barang: " . $data["nama"] . " - Stok: " . $data["stok"] . "<br>";
    }
}
?>
