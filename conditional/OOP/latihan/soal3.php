<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <fieldset>
        <legend>sistem pengajian</legend>
        <form action= "" method="POST">    
        <label for="">nama</label> 
        <input type="text" name="nama" id="" required>
        <br>
        <label for="">no id karyawan</label>
        <input type="text" name="kelas" id="" required>
        <br>
        <label for ="">gaji pokok</label> 
        <input type="radio" name="jenis_kelamin" value="laki-laki"required>
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
 <legend>sistem pengajian</legend>
    <form action="" method="post">
        <label for="">nama</label>
        <input type="text" name="nama" required>
        <br>
        <label for="">no id karyawan</label>
        <input type="number" name="id" required>
        <br>
        <label for="">gaji pokok</label>
        <input type="number" name="gaji" required>
        <br>
        <label for="">status karyawan</label>
        <input type="radio" name="status" required>
        <br>
        <label for="">tunjangan jabatan</label>
        <input type="number" name="tunjangan"required>
        <br>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>