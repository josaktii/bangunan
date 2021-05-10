<?php
include('../../config/connect.php');
if (isset($_GET['penjualan'])) {
    $penjualan = $_GET['penjualan'];
    $queryhapus = $connect->query("DELETE FROM penjualan WHERE id_penjualan ='$penjualan'");
    if ($queryhapus == TRUE) {
        echo "<script>window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Data penjualan gagal dihapus');window.location.href = 'data.php'</script>";
    }
}
?>