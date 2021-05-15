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
        <select name="barang" id="" autofocus>
            <option hidden>Pilih Barang</option>
            <?php
            include('../../config/connect.php');
            $querytampil1 = $connect->query("SELECT id_barang, nama_barang FROM barang");
            foreach ($querytampil1 as $tampilbarang => $barang) { ?><option value="<?= $barang['id_barang'] ?>"><?= $barang['nama_barang'] ?></option><?php } ?>
        </select>
        <input type="number" name="jumlah" id="" placeholder="Jumlah Barang"><br>
        <!-- <input type="number" readonly> -->
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>

</html>