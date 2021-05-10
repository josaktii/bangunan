<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $namad = $_POST['namabarang'];
    $stok = $_POST['stok'];
    $hargajual = $_POST['hargajual'];
    $querybarang = $connect->query("INSERT INTO barang VALUES (NULL, '$namad', '$stok', '$hargajual')");

    if ($querybarang) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data barang gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
