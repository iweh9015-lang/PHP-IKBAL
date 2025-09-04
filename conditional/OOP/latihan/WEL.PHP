<?php
class Penggajian
{
    public $nama, $no_id, $gp, $jabatan, $status_k, $status_kk;
    public $tj, $tt, $tm;

    public function __construct($nama, $no_id, $gp, $jabatan, $status_k, $status_kk)
    {
        $this->nama      = $nama;
        $this->no_id     = $no_id;
        $this->gp        = $gp;
        $this->jabatan   = $jabatan;
        $this->status_k  = $status_k;
        $this->status_kk = $status_kk;
    }

    public function tunjanganJabatan()
    {
        switch ($this->jabatan) {
            case "Manager":
                $this->tj = $this->gp * 0.2;
                break;
            case "Supervisor":
            case "Staff":
                $this->tj = $this->gp * 0.15;
                break;
            default:
                $this->tj = 0;
        }
        return $this->tj;
    }

    public function tunjanganTransport()
    {
        $this->tt = ($this->status_k === "Tetap") ? 500000 : 0;
        return $this->tt;
    }

    public function tunjanganMenikah()
    {
        $this->tm = ($this->status_kk === "Menikah") ? 300000 : 0;
        return $this->tm;
    }

    public function gajiKotor()
    {
        return $this->gp + $this->tunjanganJabatan() + $this->tunjanganTransport() + $this->tunjanganMenikah();
    }

    public function pajak()
    {
        return $this->gajiKotor() * 0.05;
    }

    public function gajiBersih()
    {
        return $this->gajiKotor() - $this->pajak();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Penggajian Karyawan</title>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0; padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            background-color: #4a3fbd;
            padding: 15px;
            border-radius: 15px 15px 0 0;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .radio-group {
            margin-bottom: 15px;
        }
        .radio-group label {
            font-weight: normal;
            margin-right: 15px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 0 auto;
        }
        button:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4a3fbd;
            color: white;
        }
        td[colspan] {
            text-align: right;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Penggajian Karyawan</h2>
    <form action="" method="post">
        <label for="nama">Nama Karyawan</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required />

        <label for="no_id">No ID Karyawan</label>
        <input type="number" id="no_id" name="no_id" placeholder="Masukkan ID karyawan" required />

        <label for="gp">Gaji Pokok</label>
        <input type="number" id="gp" name="gp" placeholder="0" min="0" required />

        <label for="jabatan">Jabatan</label>
        <select id="jabatan" name="jabatan" required>
            <option value="" disabled selected>Pilih jabatan</option>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Staff">Staff</option>
            <option value="Karyawan">Karyawan</option>
        </select>

        <label>Status Karyawan</label>
        <div class="radio-group">
            <label><input type="radio" name="status_k" value="Tetap" required /> Tetap</label>
            <label><input type="radio" name="status_k" value="Kontrak" /> Kontrak</label>
        </div>

        <label for="status_kk">Status Pernikahan</label>
        <select id="status_kk" name="status_kk" required>
            <option value="" disabled selected>Pilih status</option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
        </select>

        <button type="submit">Hitung Gaji</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        // Ambil data tanpa htmlspecialchars dan trim sesuai permintaan
        $a = $_POST['nama'];
        $b = $_POST['no_id'];
        $c = floatval($_POST['gp']);
        $d = $_POST['jabatan'];
        $e = $_POST['status_k'];
        $f = $_POST['status_kk'];

        $gaji = new Penggajian($a, $b, $c, $d, $e, $f);
    ?>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>No ID</th>
                <th>Status Karyawan</th>
                <th>Gaji Pokok</th>
                <th>Jabatan</th>
                <th>Status Pernikahan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $gaji->nama ?></td>
                <td><?= $gaji->no_id ?></td>
                <td><?= $gaji->status_k ?></td>
                <td>Rp <?= number_format($gaji->gp, 0, ',', '.') ?></td>
                <td><?= $gaji->jabatan ?></td>
                <td><?= $gaji->status_kk ?></td>
            </tr>
            <tr>
                <th>Tunjangan Jabatan</th>
                <td colspan="5">Rp <?= number_format($gaji->tunjanganJabatan(), 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Tunjangan Transport</th>
                <td colspan="5">Rp <?= number_format($gaji->tunjanganTransport(), 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Tunjangan Menikah</th>
                <td colspan="5">Rp <?= number_format($gaji->tunjanganMenikah(), 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Gaji Kotor</th>
                <td colspan="5">Rp <?= number_format($gaji->gajiKotor(), 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Pajak (5%)</th>
                <td colspan="5">Rp <?= number_format($gaji->pajak(), 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Gaji Bersih</th>
                <td colspan="5">Rp <?= number_format($gaji->gajiBersih(), 0, ',', '.') ?></td>
            </tr>
        </tbody>
    </table>
    <?php } ?>
</div>
</body>
</html>


di sebuah komplek perumahan, setiap rumah memiliki tagihan listrik bulanan.
 tagihan di hitung berdasarkan :
biaya tetap(abomen).
baiay per kWh x jumlah pemakaian listrik.
biaya tambahan jika pemakaian lebih dari 500 kWh (misalnya rp 100.000).
pajak ppn sebesar 10% dari total.
seorang programer dimminta membuat aplikasisederhana dengan oop php menggunakan __construct dan form input
apllikasi ini harus bisa menghitung total tagihan listrik dari data input pengguna.

