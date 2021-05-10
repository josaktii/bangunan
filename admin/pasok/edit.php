<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pasok</title>
</head>

<body>
    <h2>Ubah Data Pasok</h2>
    <form action="prosesedit.php" method="post">
        <?php
        include('../../config/connect.php');
        if (isset($_GET['pasok'])) {
            $idpasok = $_GET['pasok'];
            $querytampil = $connect->query("SELECT * FROM pasok JOIN barang USING(id_barang) JOIN distributor USING(id_distributor) WHERE id_pasok = '$idpasok'");
            foreach ($querytampil as $tampil => $value) {
        ?>
                <input type="text" name="pasok" value="<?= $value['id_pasok'] ?>" hidden>
                <select name="barang" id="">
                    <option value="<?= $value['id_barang'] ?>" hidden><?= $value['nama_barang'] ?></option>
                    <?php
                    $querytampil1 = $connect->query("SELECT id_barang, nama_barang FROM barang");
                    foreach ($querytampil1 as $tampilbarang => $barang) { ?><option value="<?= $barang['id_barang'] ?>"><?= $barang['nama_barang'] ?></option><?php } ?>
                </select>
                <select name="distributor" id="">
                    <option value="<?= $value['id_distributor'] ?>" hidden><?= $value['nama_distributor'] ?></option>
                    <?php
                    $querytampil2 = $connect->query("SELECT id_distributor, nama_distributor FROM distributor");
                    foreach ($querytampil2 as $tampildistributor => $distributor) { ?> <option value="<?= $distributor['id_distributor'] ?>"><?= $distributor['nama_distributor'] ?></option><?php } ?>
                </select>
                <input type="number" name="hargapokok" value="<?= $value['harga_pokok'] ?>"><br>
                <button type="submit" name="submit">Ubah</button>
        <?php
            }
        }
        ?>
    </form>
</body>

</html>