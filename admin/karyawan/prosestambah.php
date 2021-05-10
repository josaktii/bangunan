<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $namak = $_POST['namakaryawan'];
    $telk = $_POST['telkaryawan'];
    $alamatk = $_POST['alamatkaryawan'];
    $jabatan = $_POST['jabatan'];
    $querykaryawan = $connect->query("INSERT INTO karyawan VALUES (NULL, '$namak', '$jabatan', '$telk', '$alamatk')");

    if ($querykaryawan) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data karyawan gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
