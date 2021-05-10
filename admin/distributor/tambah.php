<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Distributor</title>
</head>
<body>
    <h2>Tambah Data Distributor</h2>
    <form action="prosestambah.php" method="post">
        <input type="text" placeholder="Nama distributor" name="namadistributor"><br>
        <input type="tel" name="teldistributor" id="" placeholder="Nomor Telepon" pattern="[0-9]{10-12}"><br>
        <textarea name="alamatdistributor" id="" cols="30" rows="10"></textarea><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>