<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $barang = $_POST['barang'];
    $namab = $_POST['namabarang'];
    $stok = $_POST['stok'];
    $hargajual = $_POST['hargajual'];
    $querybarang = $connect->query("UPDATE barang SET nama_barang = '$namab', stok = '$stok', harga_jual = '$hargajual' WHERE id_barang = '$barang'");

    if ($querybarang) {
        echo "<script>alert('Data barang berhasil diubah');window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data barang gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}