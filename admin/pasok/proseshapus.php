<?php
include('../../config/connect.php');
if (isset($_GET['pasok'])) {
    $pasok = $_GET['pasok'];
    $queryhapus = $connect->query("DELETE FROM pasok WHERE id_pasok ='$pasok'");
    if ($queryhapus == TRUE) {
        echo "<script>window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Data pasok gagal dihapus');window.location.href = 'data.php'</script>";
    }
}
?>