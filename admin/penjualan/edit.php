<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Penjualan</title>
</head>

<body>
    <h2>Ubah Data Penjualan</h2>
    <form action="prosesedit.php" method="post">
        <?php
        include('../../config/connect.php');
        if (isset($_GET['penjualan'])) {
            $idpenjualan = $_GET['penjualan'];
            $querytampil = $connect->query("SELECT * FROM penjualan JOIN barang USING(id_barang) WHERE id_penjualan = '$idpenjualan'");
            foreach ($querytampil as $tampil => $value) {
        ?>
                <input type="text" name="penjualan" value="<?= $value['id_penjualan'] ?>" hidden>
                <input type="text" name="hargabarang" value="<?= $value['harga_jual'] ?>" hidden>
                <select name="barang" id="">
                    <option value="<?= $value['id_barang'] ?>" hidden><?= $value['nama_barang'] ?></option>
                    <?php
                    $querytampil1 = $connect->query("SELECT id_barang, nama_barang FROM barang");
                    foreach ($querytampil1 as $tampilbarang => $barang) { ?><option value="<?= $barang['id_barang'] ?>"><?= $barang['nama_barang'] ?></option><?php } ?>
                </select>
                <input type="number" name="jumlah" id="" value="<?= $value['jumlah'] ?>"><br>
                <!-- <input type="number" readonly> -->
                <button type="submit" name="submit">Ubah</button>
        <?php
            }
        }
        ?>
    </form>
</body>

</html>