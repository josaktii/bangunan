<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Karyawan</title>
</head>

<body>
    <h2>Tambah Data Karyawan</h2>
    <form action="prosestambah.php" method="post">
        <input type="text" name="uname" placeholder="Username" autofocus><br>
        <input type="password" name="pass" id="" placeholder="*******"><br>
        <select name="access" id="">
            <option hidden>Pilih hak akses</option>
            <option value="1">Admin</option>
            <option value="2">Kasir</option>
            <option value="3">Pemilik</option>
        </select>
        <select name="karyawan" id="">
            <option hidden>Pilih karyawan</option>
            <?php
            include('../../config/connect.php');
            $querypilih = $connect->query("SELECT id_karyawan, nama_karyawan FROM karyawan");
            foreach ($querypilih as $pilih => $data) { ?> <option value="<?= $data['id_karyawan'] ?>"><?= $data['nama_karyawan'] ?></option> <?php } ?>
        </select>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>

</html>