<?php
include('../../config/connect.php');
if (isset($_GET['user'])) {
    $user = $_GET['user'];
    $queryhapus = $connect->query("DELETE FROM user WHERE id_user ='$user'");
    if ($queryhapus == TRUE) {
        echo "<script>window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Data user gagal dihapus');window.location.href = 'data.php'</script>";
    }
}
?>