<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $penjualan = $_POST['penjualan'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];
    $total = $jumlah *  $_POST['hargabarang'] ;
    $querypenjualan = $connect->query("UPDATE penjualan SET id_barang = '$barang', jumlah = '$jumlah', total = '$total' WHERE id_penjualan = '$penjualan'");

    if ($querypenjualan) {
        echo "<script>alert('Data penjualan berhasil diubah');window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data penjualan gagal diubah'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
