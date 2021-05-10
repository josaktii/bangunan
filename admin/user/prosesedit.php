<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $access = $_POST['access'];
    $karyawan = $_POST['karyawan'];
    $queryuser = $connect->query("UPDATE user SET username = '$uname', password = '$pass', access = '$access', id_karyawan = '$karyawan' WHERE id_user = '$user'");

    if ($queryuser) {
        echo "<script>alert('Data user berhasil diubah');window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data user gagal diubah'); window.location.href='data.php'</script>";
        // echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
