<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Barang</title>
</head>

<body>
    <h2>Tambah Data Barang</h2>
    <form action="prosestambah.php" method="post">
        <select name="barang" id="">
            <option hidden>Pilih Barang</option>
            <?php
            include('../../config/connect.php');
            $querytampil1 = $connect->query("SELECT id_barang, nama_barang FROM barang");
            foreach ($querytampil1 as $tampilbarang => $barang) { ?><option value="<?= $barang['id_barang'] ?>"><?= $barang['nama_barang'] ?></option><?php } ?>
        </select><br>
        <select name="distributor" id="">
            <option hidden>Pilih Distributor</option>
            <?php
            $querytampil2 = $connect->query("SELECT id_distributor, nama_distributor FROM distributor");
            foreach ($querytampil2 as $tampildistributor => $distributor) { ?> <option value="<?= $distributor['id_distributor'] ?>"><?= $distributor['nama_distributor'] ?></option><?php } ?>
        </select><br>
        <input type="number" name="hargapokok" placeholder="Harga Pokok"><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>

</html>