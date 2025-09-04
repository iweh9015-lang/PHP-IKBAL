<?php
class TiketBioskop
{
    public $jumlah, $hari, $kursi;
    public $hargaDasar = 50000;
    public $biayaWeekend = 10000;
    public $biayaVIP = 20000;

    public function __construct($jumlah, $hari, $kursi)
    {
        $this->jumlah = $jumlah;
        $this->hari = $hari;
        $this->kursi = $kursi;
    }

    public function hargaPerTiket()
    {
        $harga = $this->hargaDasar;
        if ($this->hari == "Sabtu" || $this->hari == "Minggu") {
            $harga += $this->biayaWeekend;
        }
        if ($this->kursi == "VIP") {
            $harga += $this->biayaVIP;
        }
        return $harga;
    }

    public function totalHarga()
    {
        return $this->hargaPerTiket() * $this->jumlah;
    }

    public function pajak()
    {
        return $this->totalHarga() * 0.05;
    }

    public function totalBayar()
    {
        return $this->totalHarga() + $this->pajak();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Form Pembayaran Tiket Bioskop</title>
</head>
<body>
<fieldset>
<legend>Form Pembayaran Tiket Bioskop</legend>
<form action="" method="post">
    <label for="jumlah">Jumlah Tiket</label>
    <input type="number" name="jumlah" id="jumlah" min="1" required>
    <br>
    <label for="hari">Hari</label>
    <select name="hari" id="hari" required>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
    <br>
    <label for="kursi">Jenis Kursi</label>
    <select name="kursi" id="kursi" required>
        <option value="Reguler">Reguler</option>
        <option value="VIP">VIP</option>
    </select>
    <br>
    <button type="submit">Hitung</button>
</form>

<?php
$tiket = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;
    $hari = isset($_POST['hari']) ? $_POST['hari'] : "";
    $kursi = isset($_POST['kursi']) ? $_POST['kursi'] : "";

    $tiket = new TiketBioskop($jumlah, $hari, $kursi);
}
?>

<?php if ($tiket !== null) : ?>
<table border="1" cellpadding="5" cellspacing="0" style="margin-top:10px;">
    <tr>
        <th>Jumlah Tiket</th>
        <th>Hari</th>
        <th>Jenis Kursi</th>
        <th>Harga per Tiket</th>
        <th>Total Harga (sebelum pajak)</th>
        <th>Pajak (5%)</th>
        <th>Total Bayar</th>
    </tr>
    <tr>
        <td><?= $tiket->jumlah ?></td>
        <td><?= $tiket->hari ?></td>
        <td><?= $tiket->kursi ?></td>
        <td>Rp <?= number_format($tiket->hargaPerTiket(), 0, ',', '.') ?></td>
        <td>Rp <?= number_format($tiket->totalHarga(), 0, ',', '.') ?></td>
        <td>Rp <?= number_format($tiket->pajak(), 0, ',', '.') ?></td>
        <td>Rp <?= number_format($tiket->totalBayar(), 0, ',', '.') ?></td>
    </tr>
</table>
<?php endif; ?>
</fieldset>
</body>
</html>