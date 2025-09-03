<?php

class motor {
    public $merk;
    public $warna;
    public $alat;
    public $harga;
    public function __construct($a, $b, $c, $d)
    {
        $this->merk = $a;
        $this->warna = $b;
        $this->alat = $c;
        $this->harga = $d;
    }

    public function membuat()
    {
        return "motor sedang dibuat";
    }
}
$motor1 = new motor("honda", "merah", "ban", 20000000);
echo "merk motor 1: " . $motor1->merk . "<br>"; 
echo "warna motor 1: " . $motor1->warna . "<br>";
echo "alat motor 1: " . $motor1->alat . "<br>";
echo "harga motor 1: " . $motor1->harga . "<br>";   
echo "<br>";
echo "hari ini motor sedang dibuat <br>";
echo $motor1->membuat() . "<br>";