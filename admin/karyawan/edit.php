<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Karyawan</title>
</head>

<body>
    <h2>Ubah Data Karyawan</h2>
    <form action="prosesedit.php" method="post">
        <?php
        include('../../config/connect.php');
        if (isset($_GET['karyawan'])) {
            $idkaryawan = $_GET['karyawan'];
            $querytampil = $connect->query("SELECT * FROM karyawan WHERE id_karyawan = '$idkaryawan'");
            foreach ($querytampil as $tampil => $value) {
        ?>
                <input type="text" name="karyawan" value="<?= $value['id_karyawan'] ?>" hidden>
                <input type="text" name="namakaryawan" value="<?= $value['nama_karyawan'] ?>"><br>
                <input type="tel" name="telkaryawan" id="" value="<?= $value['no_telpon'] ?>" pattern="[0-9]{10-12}"><br>
                <textarea name="alamatkaryawan" id="" cols="30" rows="10"><?= $value['alamat'] ?></textarea><br>
                <input type="text" name="jabatan" id="" value="<?= $value['jabatan'] ?>"><br>
                <button type="submit" name="submit">Ubah</button>
        <?php
            }
        }
        ?>
    </form>
</body>

</html>