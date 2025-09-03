<?php

class siswa {
    public $nama;
    public $jenis_kelamin;
    public $tinggi;

    public function __construct($nama, $jenis_kelamin, $tinggi)
    {
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->tinggi = $tinggi;
    }
    public function bicara()
    {
        return "siswa sedang berbicara";
    }
}
$budi = new siswa("budi", "laki-laki", 170);
echo "nama siswa 1: " . $budi ->nama . "<br>";
echo "jenis kelamin siswa 1: " . $budi->jenis_kelamin . "<br>";
echo "nilai siswa 1: " . $budi->tinggi . "<br>";
echo "siswa ini " . $budi->bicara() . "<br>";

echo "<hr>";

$rehan = new siswa("rehan", "laki-laki", 165);
echo "nama siswa 2: " . $rehan->nama . "<br>";
echo "jenis kelamin siswa 2: " . $rehan->jenis_kelamin . "<br>";
echo "nilai siswa 2: " . $rehan->tinggi . "<br>";
echo "siswa ini " . $rehan->bicara() . "<br>";

echo "<hr>";

$dadan = new siswa("dadan", "laki-laki", 171);
echo "nama siswa 3: " . $dadan->nama . "<br>";
echo "jenis kelamin siswa 3: " . $dadan->jenis_kelamin . "<br>";
echo "nilai siswa 3: " . $dadan->tinggi . "<br>";
echo "siswa ini " . $dadan->bicara() . "<br>";

echo "<hr>";

$maryana = new siswa("maryana", "perempuan", 167);
echo "nama siswa 4: " . $maryana->nama . "<br>";
echo "jenis kelamin siswa 4: " . $maryana->jenis_kelamin . "<br>";
echo "nilai siswa 4: " . $maryana->tinggi . "<br>";
echo "siswa ini " . $maryana->bicara() . "<br>";
echo "<hr>";
