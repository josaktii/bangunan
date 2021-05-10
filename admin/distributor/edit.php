<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Distributor</title>
</head>

<body>
    <h2>Ubah Data Distributor</h2>
    <form action="prosesedit.php" method="post">
        <?php
        include('../../config/connect.php');
        if (isset($_GET['distributor'])) {
            $iddistributor = $_GET['distributor'];
            $querytampil = $connect->query("SELECT * FROM distributor WHERE id_distributor = '$iddistributor'");
            foreach ($querytampil as $tampil => $value) {
        ?>
                <input type="text" name="distributor" value="<?= $value['id_distributor'] ?>" hidden>
                <input type="text" name="namadistributor" value="<?= $value['nama_distributor'] ?>"><br>
                <input type="tel" name="teldistributor" id="" value="<?= $value['no_telpon_distributor'] ?>" pattern="[0-9]{10-12}"><br>
                <textarea name="alamatdistributor" id="" cols="30" rows="10"><?= $value['alamat_distributor'] ?></textarea><br>
                <button type="submit" name="submit">Ubah</button>
        <?php
            }
        }
        ?>
    </form>
</body>

</html>