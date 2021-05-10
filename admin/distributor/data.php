<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Distributor</title>
</head>

<body>
    <h2>Distributor</h2>
    <a href="../index.php">Home</a>
    <a href="tambah.php">tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Distributor</th>
                <th>Nomor Telepon Distributor</th>
                <th>Alamat Distributor</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include('../../config/connect.php');
        $no = 1;
        $querytampil = $connect->query("SELECT * FROM distributor");
        ?>
        <tbody>
            <?php foreach ($querytampil as $tampil => $data) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_distributor'] ?></td>
                <td><?= $data['no_telpon_distributor'] ?></td>
                <td><?= $data['alamat_distributor'] ?></td>
                <td>
                    <a href="edit.php?distributor=<?= $data['id_distributor'] ?>">Edit</a>
                    <a href="proseshapus.php?distributor=<?= $data['id_distributor'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>