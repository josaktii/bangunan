<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir : Toko Bangunan Fadilah</title>
</head>
<body>
    <h1>Kasir</h1>
    <ul>
        <li><a href="barang/data.php">Barang</a></li>
        <li><a href="penjualan/data.php">Penjualan</a></li>
        <li><a href="">Ganti Password</a></li>
        <li><a href="">Logout</a></li>
    </ul>
    <?php
    include('../config/connect.php');
    $hariini = date('Y-m-d');
    $queryhitungbarang = $connect->query("SELECT COUNT(id_barang) as hitungbarang FROM barang");
    $hitungbarang = $queryhitungbarang->fetch_assoc();

    $queryhitungtransaksi1 = $connect->query("SELECT COUNT(id_penjualan) as hitungtransaksi1 FROM penjualan WHERE tanggal_jual = '$hariini'");
    $transaksi1 = $queryhitungtransaksi1->fetch_assoc();
    $transaksi = $transaksi1['hitungtransaksi1'];

    $queryhitungpemasukan = $connect->query("SELECT SUM(total) as pemasukan FROM penjualan WHERE tanggal_jual = '$hariini'");
    $queryhitungpengeluaran = $connect->query("SELECT SUM(harga_pokok) as pengeluaran FROM pasok WHERE tanggal_datang = '$hariini'");
    $pemasukan = $queryhitungpemasukan->fetch_assoc();
    $pengeluaran = $queryhitungpengeluaran->fetch_assoc();
    $totalduit = $pemasukan['pemasukan'];
    ?>
    <ol>
        <li>Jumlah Barang : <?= $hitungbarang['hitungbarang'] ?></li>
        <li>Jumlah Transaksi : <?= $transaksi ?></li>
        <li>Total Uang : <?= $totalduit ?></li>
    </ol>
</body>
</html>