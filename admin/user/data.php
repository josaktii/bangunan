<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User</title>
</head>

<body>
    <h2>User</h2>
    <a href="../index.php">Home</a>
    <a href="tambah.php">tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Password</th>
                <th>Hak Akses</th>
                <th>Nama Karyawan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include('../../config/connect.php');
        $no = 1;
        $querytampil = $connect->query("SELECT * FROM user JOIN karyawan USING(id_karyawan)");
        ?>
        <tbody>
            <?php foreach ($querytampil as $tampil => $data) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['password'] ?></td>
                    <td>
                        <?php
                        if ($data['access'] == 1) {
                            echo 'Admin';
                        } elseif ($data['access'] == 2) {
                            echo 'Kasir';
                        } elseif ($data['access'] == 3) {
                            echo 'Pemilik';
                        }
                        ?>
                    </td>
                    <td><?= $data['nama_karyawan'] ?></td>
                    <td>
                        <a href="edit.php?user=<?= $data['id_user'] ?>">Edit</a>
                        <a href="proseshapus.php?user=<?= $data['id_user'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>