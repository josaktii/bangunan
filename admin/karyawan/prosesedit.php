<?php
include_once('../../config/connect.php');
if (isset($_POST['submit'])) {
    $karyawan = $_POST['karyawan'];
    $namak = $_POST['namakaryawan'];
    $telk = $_POST['telkaryawan'];
    $jkk = $_POST['jkkaryawan'];
    $alamatk = $_POST['alamatkaryawan'];
    $jabatan = $_POST['jabatan'];
    $querykaryawan = $connect->query("UPDATE karyawan SET nama_karyawan = '$namak', jabatan = '$jabatan', no_telpon = '$telk', alamat = '$alamatk' WHERE id_karyawan = '$karyawan'");

    if ($querykaryawan) {
        echo "<script>alert('Data karyawan berhasil diubah');window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data karyawan gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
