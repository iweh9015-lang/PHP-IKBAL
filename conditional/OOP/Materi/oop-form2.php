<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            biodata
        </legend>
        <form action= "" method="POST">    
        <label for="">nama</label> 
        <input type="text" name="nama" id="" required>
        <br>
        <label for="">kelas</label>
        <input type="text" name="kelas" id="" required>
        <br>
        <label for ="">jenis kelamin</label> 
        <input type="radio" name="jenis_kelamin" value="laki-laki"required>
        laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan" required>
        perempuan 
        >
        <br>
        <label for="">tanggal lahir</label>
        <input type="date" name="tanggal_lahir" id="" required> 
        <br>
        <label for="">agama</label> 
        <select name="agama" id="" required>
            <option value="islam">islam</option>
            <option value="kristen">kristen</option>
            <option value="konghucu">konghucu</option>
        </select>
        <br>
        <input type="submit" value="submit">
        </form>   
</fieldset>

<?php
class biodata {
    public $nama;
    public $kelas;
    public $jenis_kelamin;
    public $tanggal_lahir;
    public $agama;

    public function __construct($a, $b, $c, $d, $e)
    {
        $this->nama = $a;
        $this->kelas = $b;
        $this->jenis_kelamin = $c;
        $this->tanggal_lahir = $d;
        $this->agama = $e;
    }
    public function tampilkan()
    {
        return "nama: " . $this->nama . "<br>" .
               "kelas: " . $this->kelas . "<br>" .
               "jenis kelamin: " . $this->jenis_kelamin . "<br>" .
               "tanggal lahir: " . $this->tanggal_lahir . "<br>" .
               "agama: " . $this->agama . "<br>" ;
    }
}
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST['nama'];
        $b = $_POST['kelas'];
        $c = $_POST['jenis_kelamin'];
        $d = $_POST['tanggal_lahir'];
        $e = $_POST['agama'];

        $biodata = new biodata($a, $b, $c, $d, $e);
        echo $biodata->tampilkan();
   }
?>
</body>
</html>