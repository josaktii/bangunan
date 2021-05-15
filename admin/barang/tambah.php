<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Barang</title>
</head>
<body>
    <h2>Tambah Data Barang</h2>
    <form action="prosestambah.php" method="post">
        <input type="text" placeholder="Nama barang" name="namabarang" autofocus><br>
        <input type="number" name="stok" id="" placeholder="Stok Barang"><br>
        <input type="number" name="hargajual" id="" placeholder="Harga jual Barang"><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>