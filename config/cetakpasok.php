<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pasok</title>
</head>

<body>
    <h2>Pasok</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Nama Distributor</th>
                <th>Harga Pokok</th>
                <th>Tanggal Datang</th>
            </tr>
        </thead>
        <?php
        include('connect.php');
        $no = 1;
        if (isset($_GET['submit'])) {
            $thn = $_GET['tahun'];
            $bln = $_GET['bulan'];
            $querytampil = $connect->query("SELECT * FROM pasok JOIN barang USING(id_barang) JOIN distributor USING(id_distributor) WHERE YEAR(tanggal_datang) = '$thn' AND MONTH(tanggal_datang) = '$bln'");
        ?>
            <tbody>
                <?php foreach ($querytampil as $tampil => $data) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nama_barang'] ?></td>
                        <td><?= $data['nama_distributor'] ?></td>
                        <td><?= $data['harga_pokok'] ?></td>
                        <td><?= $data['tanggal_datang'] ?></td>
                    </tr>
            <?php }
            } ?>
            </tbody>
    </table>
</body>

</html>