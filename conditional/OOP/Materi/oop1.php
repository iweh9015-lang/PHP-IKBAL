<?php 
class kucing {
    //property atau atribut
    public $warna = "merah";
    public $jumlah_kaki = 4;

    //method atau fungsi
    public function bersuara()
    {
        return "Meong Meong";
    }
    public function berburu()
    {
        return "Kucing berburu tikus";
    }
}

//inisiasi (pembuatan perojek)
$kucing1 = new kucing();
echo "Warna kucing 1: " . $kucing1->warna . "<br>";
echo "Jumlah kaki kucing 1: " . $kucing1->jumlah_kaki . "<br>";
echo "suara kucing 1: " . $kucing1->bersuara() . "<br>";