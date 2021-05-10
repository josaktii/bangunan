<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Barang</title>
</head>

<body>
    <h2>Ubah Data Barang</h2>
    <form action="prosesedit.php" method="post">
        <?php
        include('../../config/connect.php');
        if (isset($_GET['barang'])) {
            $idbarang = $_GET['barang'];
            $querytampil = $connect->query("SELECT * FROM barang WHERE id_barang = '$idbarang'");
            foreach ($querytampil as $tampil => $value) {
        ?>
                <input type="text" name="barang" value="<?= $value['id_barang'] ?>" hidden>
                <input type="text" name="namabarang" value="<?= $value['nama_barang'] ?>"><br>
                <input type="number" name="stok" value="<?= $value['stok'] ?>"><br>
                <input type="number" name="hargajual" value="<?= $value['harga_jual'] ?>"><br>
                <button type="submit" name="submit">Ubah</button>
        <?php
            }
        }
        ?>
    </form>
</body>

</html>