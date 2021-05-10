<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Penjualan</title>
</head>

<body>
    <h2>Penjualan</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Tanggal Jual</th>
            </tr>
        </thead>
        <?php
        include('connect.php');
        $no = 1;
        if (isset($_GET['submit'])) {
            $thn = $_GET['tahun'];
            $bln = $_GET['bulan'];
            $querytampil = $connect->query("SELECT * FROM penjualan JOIN barang USING(id_barang) WHERE YEAR(tanggal_jual) = '$thn' AND MONTH(tanggal_jual) = '$bln'");
        ?>
            <tbody>
                <?php foreach ($querytampil as $tampil => $data) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nama_barang'] ?></td>
                        <td><?= $data['jumlah'] ?></td>
                        <td><?= $data['total'] ?></td>
                        <td><?= $data['tanggal_jual'] ?></td>
                    </tr>
            <?php }
            } ?>
            </tbody>
    </table>
</body>

</html>