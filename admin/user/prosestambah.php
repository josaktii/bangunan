<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $access = $_POST['access'];
    $karyawan = $_POST['karyawan'];
    $queryuser = $connect->query("INSERT INTO user VALUES (NULL, '$uname', '$pass', '$access', '$karyawan')");

    if ($queryuser) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data user gagal ditambahkan'); window.location.href='data.php'</script>";
        // echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
