<?php
include('../../config/connect.php');
$querytahun = $connect->query("SELECT YEAR(tanggal_datang) as tahun FROM pasok GROUP BY tahun");
$querybulan = $connect->query("SELECT MONTH(tanggal_datang) as bulan FROM pasok GROUP BY bulan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pasok</title>
</head>

<body>
    <h2>Pasok</h2>
    <a href="../index.php">Home</a>
    <a href="tambah.php">tambah</a>
    <form action="../../config/cetakpasok.php" method="get">
        <select name="tahun">
            <option hidden>Filter Data Berdasarkan Tahun</option>
            <?php while ($tahun = mysqli_fetch_array($querytahun)) { ?>
                <option value="<?php echo $tahun['tahun']; ?>"><?php echo $tahun['tahun']; ?></option>
            <?php } ?>
        </select>
        <select name="bulan">
            <option hidden>Filter Data Berdasarkan Bulan</option>
            <?php while ($bulan = mysqli_fetch_array($querybulan)) { ?>
                <option value="<?php echo $bulan['bulan']; ?>">
                <?php
                if ($bulan['bulan']==1) {
                    echo "Januari";
                } elseif ($bulan['bulan']==2) {
                    echo "Februari";
                } elseif ($bulan['bulan']==3) {
                    echo "Maret";
                } elseif ($bulan['bulan']==4) {
                    echo "April";
                } elseif ($bulan['bulan']==5) {
                    echo "Mei";
                } elseif ($bulan['bulan']==6) {
                    echo "Juni";
                } elseif ($bulan['bulan']==7) {
                    echo "Juli";
                } elseif ($bulan['bulan']==8) {
                    echo "Agustus";
                } elseif ($bulan['bulan']==9) {
                    echo "September";
                } elseif ($bulan['bulan']==10) {
                    echo "Oktober";
                } elseif ($bulan['bulan']==11) {
                    echo "November";
                } elseif ($bulan['bulan']==12) {
                    echo "Desember";
                }
                ?>
                </option>
            <?php } ?>
        </select>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Nama Distributor</th>
                <th>Harga Pokok</th>
                <th>Tanggal Datang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include('../../config/connect.php');
        $no = 1;
        $querytampil = $connect->query("SELECT * FROM pasok JOIN barang USING(id_barang) JOIN distributor USING(id_distributor)");
        ?>
        <tbody>
            <?php foreach ($querytampil as $tampil => $data) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_barang'] ?></td>
                <td><?= $data['nama_distributor'] ?></td>
                <td><?= $data['harga_pokok'] ?></td>
                <td><?= $data['tanggal_datang'] ?></td>
                <td>
                    <a href="edit.php?pasok=<?= $data['id_pasok'] ?>">Edit</a>
                    <a href="proseshapus.php?pasok=<?= $data['id_pasok'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>