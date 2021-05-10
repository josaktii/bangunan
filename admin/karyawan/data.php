<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Karyawan</title>
</head>

<body>
    <h2>Karyawan</h2>
    <a href="../index.php">Home</a>
    <a href="tambah.php">tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Karyawan</th>
                <th>Nomor Telepon</th>
                <th>Alamat Karyawan</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include('../../config/connect.php');
        $no = 1;
        $querytampil = $connect->query("SELECT * FROM karyawan");
        ?>
        <tbody>
            <?php foreach ($querytampil as $tampil => $data) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_karyawan'] ?></td>
                <td><?= $data['no_telpon'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['jabatan'] ?></td>
                <td>
                    <a href="edit.php?karyawan=<?= $data['id_karyawan'] ?>">Edit</a>
                    <a href="proseshapus.php?karyawan=<?= $data['id_karyawan'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>