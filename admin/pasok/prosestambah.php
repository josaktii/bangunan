<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $barang = $_POST['barang'];
    $distributor = $_POST['distributor'];
    $hargapokok = $_POST['hargapokok'];
    $hariini = date('Y-m-d');
    $querybarang = $connect->query("INSERT INTO pasok VALUES (NULL, '$barang', '$hargapokok', '$hariini', '$distributor')");

    if ($querybarang) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data barang gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
