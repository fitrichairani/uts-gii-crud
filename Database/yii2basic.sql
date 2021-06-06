-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 09:26 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `satuan`, `id_jenis`, `id_supplier`, `harga`, `stok`) VALUES
(1, '001', 'Blus', 'Kilo', 1, 1, 100000, 10),
(2, '002', 'Kemeja Oversize', 'Kilo', 4, 3, 200000, 5),
(3, '003', 'Bella Squer', 'Kilo', 2, 1, 50000, 10),
(4, '004', 'Rok Tutu', 'Kilo', 3, 2, 150000, 5),
(5, '005', 'Blazer', 'Kilo', 1, 3, 200000, 15),
(6, '006', 'Hijab Umama', 'Kilo', 2, 1, 25000, 20),
(7, '007', 'Cardigan', 'Kilo', 4, 1, 50000, 15),
(8, '008', 'Kemaja Kotak-kotak', 'Kilo', 4, 2, 150000, 20),
(9, '009', 'Tunik Oversize', 'Kilo', 1, 3, 100000, 10),
(10, '0010', 'Hijab Rabani', 'Kilo', 2, 1, 30000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(10) NOT NULL,
  `divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `divisi`) VALUES
(1, 'Produksi'),
(2, 'Pemasaran'),
(3, 'Pembelanjaan'),
(4, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama_jenis`, `keterangan`) VALUES
(1, 'Tunik', 'Pakaian'),
(2, 'Pasmhina', 'Hijab'),
(3, 'Rok Plisket', 'Rok'),
(4, 'Kemeja', 'Kemeja');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nip` int(30) NOT NULL,
  `jekel` varchar(1) NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `tgl_lahir`, `nip`, `jekel`, `id_divisi`, `alamat`) VALUES
(1, 'Fitri Chairani', '2000-12-28', 1234567890, 'P', 1, 'Bukittinggi'),
(2, 'Virdapiliacani', '2000-06-29', 2147483647, 'P', 2, 'Sijunjung'),
(3, 'Budi Doremi', '1999-06-08', 2147483647, 'L', 3, 'Padang'),
(4, 'Petrus mahendra', '1998-06-01', 2147483647, 'L', 4, 'Solok'),
(5, 'Aurell', '1995-06-18', 2147483647, 'P', 3, 'Agam'),
(6, 'Ade Chairullah', '0000-00-00', 2147483647, 'L', 1, 'Dhamasraya'),
(7, 'Maudi', '2000-06-30', 2147483647, 'P', 4, 'Agam');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nim` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jekel` char(1) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jekel`, `id_prodi`, `email`, `alamat`) VALUES
(1, '1911082031', 'Fitri Chairani', 'P', 3, 'chairanifitri9@gmail.com', 'Agam'),
(2, '1911082010', 'Luthfiyyah Riznisa', 'P', 3, 'Luthfiyyahriznisa@gmail.com', 'Padang'),
(3, '1911082021', 'Srintika Yuni Kharisma', 'P', 2, 'Srintikayk@gmail.com', 'Bukittinggi'),
(4, '1911081001', 'Virdapiliacani', 'P', 1, 'virdapiliacani@gmail.com', 'Sijunjung'),
(5, '1911081007', 'Fikry', 'L', 3, 'fikry@gmail.com', 'Batusangkar'),
(6, '1911081006', 'Gusnia', 'P', 1, 'gusnia@gmail.com', 'Solok'),
(7, '1911082012', 'Annisa Barokah ', 'P', 2, 'annisabarokah@gmail.com', 'Agam'),
(8, '1911082013', 'Ramadhana Fitriansyah', 'L', 3, 'ramadhanafitriansyah@gmail.com', 'Bukittinggi'),
(9, '1911081002', 'Gilang Ramadhan', 'L', 2, 'Gilangramadhan@gmai.com', 'Payakumbuh'),
(10, '1911081020', 'Audra Najmi Maghfira', 'P', 1, 'audranajmi@gmail.com', 'Padang');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(10) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `keterangan`) VALUES
(1, 'Teknik Komputer', 'TK'),
(2, 'Manajemen Informatika', 'MI'),
(3, 'Teknologi Rekayasa Perangkat Lunak', 'TRPL');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `notelp`, `email`, `alamat`) VALUES
(1, 'Free N Style', '082345876754', 'freenstyle@gmail.com', 'Bukittinggi'),
(2, 'B\"Blouse', '081345326578', 'bblouse@gmail.com', 'Padang'),
(3, 'Zahira Style', '082334562345', 'zahirastyle@gmail.com', 'Solok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_supplier` (`id_supplier`),
  ADD KEY `barang_jenis` (`id_jenis`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`),
  ADD CONSTRAINT `barang_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
