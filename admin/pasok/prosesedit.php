<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $pasok = $_POST['pasok'];
    $barang = $_POST['barang'];
    $distributor = $_POST['distributor'];
    $hargapokok = $_POST['hargapokok'];
    $querypasok = $connect->query("UPDATE pasok SET id_barang = '$barang', id_distributor = '$distributor', harga_pokok = '$hargapokok' WHERE id_pasok = '$pasok'");

    if ($querypasok) {
        echo "<script>alert('Data pasok berhasil diubah');window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data pasok gagal diubah'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}