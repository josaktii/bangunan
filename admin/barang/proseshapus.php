<?php
include('../../config/connect.php');
if (isset($_GET['barang'])) {
    $barang = $_GET['barang'];
    $queryhapus = $connect->query("DELETE FROM barang WHERE id_barang ='$barang'");
    if ($queryhapus == TRUE) {
        echo "<script>window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Data barang gagal dihapus');window.location.href = 'data.php'</script>";
    }
}
?>