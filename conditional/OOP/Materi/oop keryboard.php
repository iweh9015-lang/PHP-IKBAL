<?php 
class keyboard{
    //property atau atribut
    public $warna = "hitam";
    public $ukuran = 15;

    //method atau fungsi
    public function backlit()
    {
        return "Keyboard ini memiliki lampu backlit";
    }
    public function mengetik()
    {
        return "Keyboard digunakan untuk mengetik";
    }
}

//inisiasi (pembuatan perojek)
$keyboard1 = new keyboard();
echo "Warna keyboard 1: " . $keyboard1->warna . "<br>";
echo "ukuran keyboard 1: " . $keyboard1->ukuran . "<br>";
echo "backlit 1: " . $keyboard1->backlit() . "<br>";
echo "<br>";
echo "hari ini saya sedang mengetik <br>";