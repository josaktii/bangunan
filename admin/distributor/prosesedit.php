<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $distributor = $_POST['distributor'];
    $namad = $_POST['namadistributor'];
    $teld = $_POST['teldistributor'];
    $alamatd = $_POST['alamatdistributor'];
    $querydistributor = $connect->query("UPDATE distributor SET nama_distributor = '$namad', no_telpon_distributor = '$teld', alamat_distributor = '$alamatd' WHERE id_distributor = '$distributor'");

    if ($querydistributor) {
        echo "<script>alert('Data distributor berhasil diubah');window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data distributor gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}