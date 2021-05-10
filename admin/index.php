<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin : Toko Bangunan Fadilah</title>
</head>
<body>
    <h1>Admin</h1>
    <ul>
        <li><a href="karyawan/data.php">Karyawan</a></li>
        <li><a href="user/data.php">User</a></li>
        <li><a href="barang/data.php">Barang</a></li>
        <li><a href="distributor/data.php">Distributor</a></li>
        <li><a href="pasok/data.php">Pasok</a></li>
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
    $queryhitungtransaksi2 = $connect->query("SELECT COUNT(id_pasok) as hitungtransaksi2 FROM pasok WHERE tanggal_datang = '$hariini'");
    $transaksi1 = $queryhitungtransaksi1->fetch_assoc();
    $transaksi2 = $queryhitungtransaksi2->fetch_assoc();
    $transaksi = $transaksi1['hitungtransaksi1']+$transaksi2['hitungtransaksi2'];

    $queryhitungpemasukan = $connect->query("SELECT SUM(total) as pemasukan FROM penjualan WHERE tanggal_jual = '$hariini'");
    $queryhitungpengeluaran = $connect->query("SELECT SUM(harga_pokok) as pengeluaran FROM pasok WHERE tanggal_datang = '$hariini'");
    $pemasukan = $queryhitungpemasukan->fetch_assoc();
    $pengeluaran = $queryhitungpengeluaran->fetch_assoc();
    $totalduit = $pemasukan['pemasukan']-$pengeluaran['pengeluaran'];

    $queryhitungpasok = $connect->query("SELECT COUNT(id_pasok) as hitungpasok FROM pasok WHERE tanggal_datang = '$hariini'");
    $hitungpasok = $queryhitungpasok->fetch_assoc();
    ?>
    <ol>
        <li>Jumlah Barang : <?= $hitungbarang['hitungbarang'] ?></li>
        <li>Jumlah Transaksi : <?= $transaksi ?></li>
        <li>Pemasukan : <?= $pemasukan['pemasukan'] ?></li>
        <li>pengeluaran : <?= $pengeluaran['pengeluaran'] ?></li>
        <li>Total Uang : <?= $totalduit ?></li>
        <li>Barang Datang : <?= $hitungpasok['hitungpasok'] ?></li>
    </ol>
</body>
</html>