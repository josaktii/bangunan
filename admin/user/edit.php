<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User</title>
</head>

<body>
    <h2>Ubah Data User</h2>
    <form action="prosesedit.php" method="post">
        <?php
        include('../../config/connect.php');
        if (isset($_GET['user'])) {
            $iduser = $_GET['user'];
            $querytampil = $connect->query("SELECT * FROM user JOIN karyawan USING(id_karyawan) WHERE id_user = '$iduser'");
            foreach ($querytampil as $tampil => $value) {
        ?>
                <input type="text" name="user" value="<?= $value['id_user'] ?>" hidden>
                <input type="text" name="uname" value="<?= $value['username'] ?>"><br>
                <input type="password" name="pass" id="" value="<?= $value['password'] ?>"><br>
                <select name="access" id="">
                    <option value="<?= $value['access'] ?>" hidden>
                        <?php
                        if ($value['access'] == 1) {
                            echo 'Admin';
                        } elseif ($value['access'] == 2) {
                            echo 'Kasir';
                        } elseif ($value['access'] == 3) {
                            echo 'Pemilik';
                        }
                        ?>
                    </option>
                    <option value="1">Admin</option>
                    <option value="2">Kasir</option>
                    <option value="3">Pemilik</option>
                </select>
                <select name="karyawan" id="">
                    <option value="<?= $value['id_karyawan'] ?>" hidden><?= $value['nama_karyawan'] ?></option>
                    <?php
                    $querypilih = $connect->query("SELECT id_karyawan, nama_karyawan FROM karyawan");
                    foreach ($querypilih as $pilih => $data) { ?> <option value="<?= $data['id_karyawan'] ?>"><?= $data['nama_karyawan'] ?></option> <?php } ?>
                </select>
                <button type="submit" name="submit">Ubah</button>
        <?php
            }
        }
        ?>
    </form>
</body>

</html>