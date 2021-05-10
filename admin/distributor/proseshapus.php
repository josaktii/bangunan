<?php
include('../../config/connect.php');
if (isset($_GET['distributor'])) {
    $distributor = $_GET['distributor'];
    $queryhapus = $connect->query("DELETE FROM distributor WHERE id_distributor ='$distributor'");
    if ($queryhapus == TRUE) {
        echo "<script>window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Data distributor gagal dihapus');window.location.href = 'data.php'</script>";
    }
}
?>