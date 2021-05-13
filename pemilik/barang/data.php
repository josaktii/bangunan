<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Barang</title>
</head>

<body>
    <h2>Barang</h2>
    <a href="../index.php">Home</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Stok Barang</th>
                <th>Harga Jual Barang</th>
            </tr>
        </thead>
        <?php
        include('../../config/connect.php');
        $no = 1;
        $querytampil = $connect->query("SELECT * FROM barang");
        ?>
        <tbody>
            <?php foreach ($querytampil as $tampil => $data) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_barang'] ?></td>
                <td><?= $data['stok'] ?></td>
                <td><?= $data['harga_jual'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>