<?php
function hitungTotalBayar($jumlahTiket, $hari, $jenisKursi) {
    $hargaDasar = 50000;
    $biayaWeekend = 10000;
    $biayaVIP = 20000;

    $hargaPerTiket = $hargaDasar;


    if ($hari === 'Sabtu' || $hari === 'Minggu') {
        $hargaPerTiket += $biayaWeekend;
    }

    if ($jenisKursi === 'VIP') {
        $hargaPerTiket += $biayaVIP;
    }

    $totalHarga = $hargaPerTiket * $jumlahTiket;

    $pajak = $totalHarga * 0.05;

    $totalBayar = $totalHarga + $pajak;

    return [
        'harga_per_tiket' => $hargaPerTiket,
        'total_harga' => $totalHarga,
        'pajak' => $pajak,
        'total_bayar' => $totalBayar
    ];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Hitung Pembayaran Tiket Bioskop</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input, select { padding: 5px; width: 200px; }
        button { margin-top: 15px; padding: 8px 15px; }
        table { margin-top: 20px; border-collapse: collapse; width: 400px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2>Hitung Total Pembayaran Tiket Bioskop</h2>
    <form method="post" action="">
        <label for="jumlah">Jumlah Tiket:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" required />

        <label for="hari">Hari (Senin - Minggu):</label>
        <select id="hari" name="hari" required>
            <option value="" disabled selected>Pilih hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
        </select>

        <label for="kursi">Jenis Kursi:</label>
        <select id="kursi" name="kursi" required>
            <option value="" disabled selected>Pilih jenis kursi</option>
            <option value="Reguler">Reguler</option>
            <option value="VIP">VIP</option>
        </select>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jumlah = intval($_POST['jumlah']);
        $hari = $_POST['hari'];
        $kursi = $_POST['kursi'];

        $hasil = hitungTotalBayar($jumlah, $hari, $kursi);
    ?>
    <h3>Rincian Pembayaran</h3>
    <table>
        <tr>
            <th>Jumlah Tiket</th>
            <td><?= $jumlah ?></td>
        </tr>
        <tr>
            <th>Hari</th>
            <td><?= htmlspecialchars($hari) ?></td>
        </tr>
        <tr>
            <th>Jenis Kursi</th>
            <td><?= htmlspecialchars($kursi) ?></td>
        </tr>
        <tr>
            <th>Harga per Tiket</th>
            <td>Rp <?= number_format($hasil['harga_per_tiket'], 0, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Total Harga (sebelum pajak)</th>
            <td>Rp <?= number_format($hasil['total_harga'], 0, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Pajak Hiburan (5%)</th>
            <td>Rp <?= number_format($hasil['pajak'], 0, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Total Bayar</th>
            <td><strong>Rp <?= number_format($hasil['total_bayar'], 0, ',', '.') ?></strong></td>
        </tr>
    </table>
    <?php } ?>
</body>
</html>