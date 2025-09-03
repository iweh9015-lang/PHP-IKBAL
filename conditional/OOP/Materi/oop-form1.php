<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "" method="post">
        <label for="">bilangan 1</label>
        <input type="number" name="bilangan" required>
        <br>


        <label for="">bilangan 2</label>
        <input type="number" name ="bilangan2" required>
        <br>
        <label for=""></label>
        <input type="submit" name="submit">
    </form>
    <?php
    class hitung
    {
        public $bilangan1;
        public $bilangan2;

        public function __construct($b1, $b2)
        {
            $this->bilangan = $b1;
            $this->bilangan2 = $b2;
        }
        public function tambah()
        {
            return $this->bilangan1 + $this->bilangan2;
        }
        public function kurang()
        {
            return $this->bilangan1 - $this->bilangan2;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $b1 = $_POST['bilangan'];
        $b2 = $_POST['bilangan2'];

        $hitung = new hitung($b1, $b2);
        echo "hasil penjumlahan: " . $hitung->tambah();
        echo "<br>";
        echo "hasil pengurangan: " . $hitung->kurang();
    }
    ?>
</body>
</html>