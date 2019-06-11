-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 03:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simanis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id_sekolah` int(3) NOT NULL,
  `npsn` int(10) NOT NULL,
  `nama_sekolah` varchar(20) NOT NULL,
  `status` varchar(6) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `email_sekolah` varchar(20) NOT NULL,
  `nama_kepsek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id_sekolah`, `npsn`, `nama_sekolah`, `status`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `no_telp`, `email_sekolah`, `nama_kepsek`) VALUES
(2, 23123421, 'dfsdfsd', 'sdfdsf', 'sdfs', 'dsfds', 'sfdf', 'sfdfs', 'sfd', 1231312, 'dfsdfds', 'asdads'),
(3, 23123421, 'dfsdfsd', 'sdfdsf', 'sdfs', 'dsfds', 'sfdf', 'sfdfs', 'sfd', 1231312, 'dfsdfds', 'asdads'),
(4, 23123421, 'dfsdfsd', 'sdfdsf', 'sdfs', 'dsfds', 'sfdf', 'sfdfs', 'sfd', 1231312, 'dfsdfds', 'asdads');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(3) NOT NULL,
  `no_induk` int(4) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_siswa` varchar(10) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `rombel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `no_induk`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `nama_ibu`, `alamat`, `status`, `rombel`) VALUES
(4, 4334, 121233, 'Danu Dwi', 'Laki-laki', 'Jakarta', '2004-12-23', 'Kristen', 'Tini', 'Cakung Barat Jakarta', 'Mengulang', 4),
(6, 67868776, 1221, 'Eko Widodo', 'Laki-laki', 'Jakarta', '2019-03-22', 'Islam', 'Nani', 'Jakarta', 'Lulus', 6),
(7, 1213, 1323, 'Velinda', 'Perempuan', 'Purbalingga', '2001-06-21', 'Budha', 'Sumariyati', 'Cakung Barat Jakata', 'Siswa Baru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `lvl` int(20) NOT NULL COMMENT 'lvl 1 = kepala dinas, lvl 2 = Seksi Dikdas & PKLK, lvl 3 = Satlak, lvl 4 = sekolah'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `lvl`) VALUES
(1, 'tita', '12345', 1),
(2, 'danu', '3456', 2),
(3, 'Barak', '234673', 3),
(4, 'Lulu', '576687', 4),
(5, 'Uswatun', '345', 4),
(6, 'Jali', '56456', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_datsis`
--

CREATE TABLE `manajemen_datsis` (
  `id_mdatsis` int(11) NOT NULL,
  `no_induk` int(11) DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `nama_siswa_b` varchar(50) DEFAULT NULL,
  `jenis_kelamin` int(11) DEFAULT NULL COMMENT '1. Laki-Laki, 2. Perempuan',
  `jenis_kelamin_b` int(11) DEFAULT NULL COMMENT '1. Laki-Laki, 2. Perempuan',
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tempat_lahir_b` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal_lahir_b` date DEFAULT NULL,
  `agama` int(11) DEFAULT NULL COMMENT '1. ISLAM\r\n2. KATOLIK\r\n3. PROTESTAN\r\n4. HINDU\r\n5. BUDHA\r\n6. KHONG HU CHU\r\n7. LAINNYA',
  `agama_b` int(11) DEFAULT NULL COMMENT '1. ISLAM\r\n2. KATOLIK\r\n3. PROTESTAN\r\n4. HINDU\r\n5. BUDHA\r\n6. KHONG HU CHU\r\n7. LAINNYA',
  `nama_ibu` varchar(50) DEFAULT NULL,
  `nama_ibu_b` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `alamat_b` varchar(50) DEFAULT NULL,
  `dokumen_pendukung` text,
  `syscreateuser` int(11) DEFAULT NULL,
  `syscreatedate` datetime DEFAULT NULL,
  `sysupdateuser` int(11) DEFAULT NULL,
  `sysupdatedate` datetime DEFAULT NULL,
  `sysdeleteuser` int(11) DEFAULT NULL,
  `sysdeletedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `manajemen_datsis`
--

INSERT INTO `manajemen_datsis` (`id_mdatsis`, `no_induk`, `nisn`, `nama_siswa`, `nama_siswa_b`, `jenis_kelamin`, `jenis_kelamin_b`, `tempat_lahir`, `tempat_lahir_b`, `tanggal_lahir`, `tanggal_lahir_b`, `agama`, `agama_b`, `nama_ibu`, `nama_ibu_b`, `alamat`, `alamat_b`, `dokumen_pendukung`, `syscreateuser`, `syscreatedate`, `sysupdateuser`, `sysupdatedate`, `sysdeleteuser`, `sysdeletedate`) VALUES
(1, 23456, 78912, 'PENDI BABI', NULL, 2, NULL, 'COMBERAN', NULL, '2000-01-01', NULL, 7, NULL, 'MAMAPENDI', NULL, 'Generates an insert string based on the data you s', NULL, 'https://localhost/Simanis/Uploads/2019_05_2323456.jpeg ', 1, '2019-05-23 07:15:42', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE `rombel` (
  `id_rombel` int(3) NOT NULL,
  `nama_rombel` varchar(5) NOT NULL,
  `kelas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rombel`
--

INSERT INTO `rombel` (`id_rombel`, `nama_rombel`, `kelas`) VALUES
(1, 'R01', 1),
(2, 'R02', 2),
(3, 'R03', 3),
(4, 'R04', 4),
(5, 'R05', 5),
(6, 'R06', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manajemen_datsis`
--
ALTER TABLE `manajemen_datsis`
  ADD PRIMARY KEY (`id_mdatsis`) USING BTREE;

--
-- Indexes for table `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id_sekolah` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manajemen_datsis`
--
ALTER TABLE `manajemen_datsis`
  MODIFY `id_mdatsis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id_rombel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
