<?php
include('../../config/connect.php');
if (isset($_GET['karyawan'])) {
    $karyawan = $_GET['karyawan'];
    $queryhapus = $connect->query("DELETE FROM karyawan WHERE id_karyawan ='$karyawan'");
    if ($queryhapus == TRUE) {
        echo "<script>window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Data karyawan gagal dihapus');window.location.href = 'data.php'</script>";
    }
}
?>