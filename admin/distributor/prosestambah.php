<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $namad = $_POST['namadistributor'];
    $teld = $_POST['teldistributor'];
    $alamatd = $_POST['alamatdistributor'];
    $querydistributor = $connect->query("INSERT INTO distributor VALUES (NULL, '$namad', '$teld', '$alamatd')");

    if ($querydistributor) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data distributor gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
