<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];

    $querybarang = $connect->query("SELECT harga_jual FROM barang WHERE id_barang ='$barang'");
    foreach ($querybarang as $key => $value) {
        $total = $jumlah * $value['harga_jual'];
    }
    $hariini = date('Y-m-d');
    $querypenjualan = $connect->query("INSERT INTO penjualan VALUES (NULL, '$barang', '$jumlah', '$total', '$hariini')");

    if ($querypenjualan) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data penjualan gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :" . $qd . "<br>" . mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
