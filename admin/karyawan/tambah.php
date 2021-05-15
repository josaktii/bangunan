<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Karyawan</title>
</head>
<body>
    <h2>Tambah Data Karyawan</h2>
    <form action="prosestambah.php" method="post">
        <input type="text" placeholder="Nama Karyawan" name="namakaryawan" autofocus><br>
        <input type="tel" name="telkaryawan" id="" placeholder="Nomor Telepon" pattern="[0-9]{10-12}"><br>
        <textarea name="alamatkaryawan" id="" cols="30" rows="10"></textarea><br>
        <input type="text" name="jabatan" id="" placeholder="Jabatan"><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>