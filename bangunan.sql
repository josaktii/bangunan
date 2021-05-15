-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: May 15, 2021 at 07:43 PM
=======
-- Generation Time: May 13, 2021 at 02:03 AM
>>>>>>> master
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangunan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(4) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(3) NOT NULL,
  `harga_jual` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`, `harga_jual`) VALUES
<<<<<<< HEAD
(4, 'Kawat Loket', 20, 90000),
(5, 'Terpal Gajah Super', 10, 170000),
(6, 'Semen Putih Jaguar', 30, 75000),
(7, 'Semen Abu 50Kg', 200, 60000),
(8, 'Cat Kuning Saka Solitex 5Kg', 8, 135000),
(9, 'MJ Atap Metal 2x4 Coklat Prima', 50, 30500),
(10, 'MJ Atap Metal 2x4 Merah Carita', 20, 30500),
(11, 'Mata Bor Besi 2MM', 100, 3000),
(12, 'Mata Bor Besi 3.5MM', 100, 4250),
(13, 'Cat Avitex Emulsion 1Kg', 6, 37000),
(14, 'Pipa PVC Pumas 1/2', 50, 14500),
(15, 'Pipa PVC Pumas 3/4', 150, 18000),
(16, 'Kawat Polos UK. 6,4 x 11', 300, 42000),
(17, 'Kuas Eternal', 5, 45000),
(18, 'Amplas Crocodile 1200', 50, 4500),
(19, 'Kran Amico PCV Taman 1/2', 4, 130000);
=======
(2, 'Semen', 155, 45000),
(3, 'Paku', 1000, 25000);
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id_distributor` int(4) NOT NULL,
  `nama_distributor` varchar(50) NOT NULL,
  `no_telpon_distributor` varchar(13) NOT NULL,
  `alamat_distributor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id_distributor`, `nama_distributor`, `no_telpon_distributor`, `alamat_distributor`) VALUES
<<<<<<< HEAD
(3, 'Sumber Usaha', '082254997070', 'Jl. Pramuka KM. 6, Banjarmasin'),
(4, 'Berkat Karunia', '081346295888', 'Jl. Perdagangan Banjarmasin'),
(5, 'PT. Banjar Kencana Sakti', '05113353179', 'Jl. Sutoyo S No. 128'),
(6, 'PT. Plymilindo Perdana (Solitex)', '05113301009', 'Banjarmasin'),
(7, 'Mega Jaya', '05115746075', 'Jl. Trikora No. 87, Banjarbaru'),
(8, 'Indra Jaya Bangunan', '081351772011', 'Jl. AMD Raya Banjarmasin'),
(9, 'Tirtakencana Tatawarna', '0511422068872', 'Jl. A Yani KM. 11 Gambut'),
(10, 'CV. Sukses Mandiri Sentosa', '081351080303', 'Jl. A Yani KM 15 No. 3 Gambut'),
(11, 'Sinar Borneo Adijaya Perkasa', '05114221593', ''),
(12, 'Hidup Abadi', '081349491111', 'Pergudangan Timur Banua No. 12 Basirih');
=======
(2, 'Nopal Inc.', '02179187676', 'Rumahnya nopal');
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(4) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `jabatan`, `no_telpon`, `alamat`) VALUES
<<<<<<< HEAD
(6, 'Widodo', 'Pemilik', '082148575069', 'Jl. Akasia RT. 05 RW. 002'),
(7, 'Mulyadi', 'Kasir', '085248951648', 'JL. Akasia RT. 05, RW. 002'),
(8, 'Riski', 'Karyawan', '081253302175', 'JL. Swarga RT. 01, RW. 002'),
(9, 'Helmi', 'Karyawan', '085346557818', 'Jl. Sukamara RT. 02, RW. 003');
=======
(1, 'Wandi', 'Kuli Porepah', '02179187676', 'Masih Pondasi'),
(3, 'Dian', 'Kuli Juga', '0175421142', 'Rumah mamanya'),
(5, 'Adit', 'Kuli', '012457854754', 'Gatau');
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `pasok`
--

CREATE TABLE `pasok` (
  `id_pasok` int(4) NOT NULL,
  `id_barang` int(4) NOT NULL,
  `harga_pokok` int(7) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `id_distributor` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasok`
--

INSERT INTO `pasok` (`id_pasok`, `id_barang`, `harga_pokok`, `tanggal_datang`, `id_distributor`) VALUES
<<<<<<< HEAD
(3, 4, 85000, '2020-11-18', 3),
(4, 5, 164500, '2020-11-18', 3),
(5, 6, 72500, '2020-12-02', 4),
(6, 7, 55000, '2020-12-30', 5),
(7, 8, 127050, '2020-12-29', 6),
(8, 9, 25500, '2020-10-26', 7),
(9, 10, 25500, '2020-10-26', 7),
(10, 11, 2100, '2020-12-29', 8),
(11, 12, 3750, '2020-12-29', 8),
(12, 13, 32600, '2021-01-12', 9),
(13, 14, 11840, '2021-02-02', 10),
(14, 15, 14153, '2021-02-02', 10),
(15, 16, 35000, '2021-02-16', 11),
(16, 17, 38000, '2021-01-25', 12),
(17, 18, 3000, '2021-01-25', 12),
(18, 19, 125000, '2021-01-25', 12);
=======
(2, 2, 40000, '2021-05-10', 2);
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(4) NOT NULL,
  `id_barang` int(4) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `total` int(8) NOT NULL,
  `tanggal_jual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_barang`, `jumlah`, `total`, `tanggal_jual`) VALUES
(2, 2, 2, 90000, '2021-05-10'),
<<<<<<< HEAD
(3, 3, 250, 6250000, '2021-05-10'),
(4, 3, 12, 300000, '2021-05-13');
=======
(3, 3, 250, 6250000, '2021-05-10');
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `access` enum('1','2','3') NOT NULL,
  `id_karyawan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
<<<<<<< HEAD
=======
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `access`, `id_karyawan`) VALUES
(2, 'admin', 'admin', '1', 1);

--
>>>>>>> master
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id_pasok`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_distributor` (`id_distributor`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_karyawan_2` (`id_karyawan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
<<<<<<< HEAD
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
=======
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
>>>>>>> master

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
<<<<<<< HEAD
  MODIFY `id_distributor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `id_distributor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> master

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
<<<<<<< HEAD
  MODIFY `id_karyawan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
  MODIFY `id_karyawan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> master

--
-- AUTO_INCREMENT for table `pasok`
--
ALTER TABLE `pasok`
<<<<<<< HEAD
  MODIFY `id_pasok` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
=======
  MODIFY `id_pasok` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> master

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
<<<<<<< HEAD
  MODIFY `id_penjualan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `id_penjualan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
>>>>>>> master

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasok`
--
ALTER TABLE `pasok`
  ADD CONSTRAINT `pasok_ibfk_1` FOREIGN KEY (`id_distributor`) REFERENCES `distributor` (`id_distributor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasok_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
<<<<<<< HEAD
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> master
