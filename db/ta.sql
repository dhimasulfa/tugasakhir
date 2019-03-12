-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 03:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(10) NOT NULL,
  `adm_nama` varchar(25) NOT NULL,
  `adm_alamat` text NOT NULL,
  `adm_nohp` int(15) NOT NULL,
  `adm_uname` varchar(15) NOT NULL,
  `adm_password` varchar(32) NOT NULL,
  `adm_gender` enum('Laki-laki/Perempuan') NOT NULL,
  `adm_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_nama`, `adm_alamat`, `adm_nohp`, `adm_uname`, `adm_password`, `adm_gender`, `adm_created`) VALUES
(1, 'ulfa', 'rejoso', 893782675, 'ulfa', '202cb962ac59075b964b07152d234b70', 'Laki-laki/Perempuan', '2018-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `brg_id` int(10) NOT NULL,
  `brg_deskripsi` text NOT NULL,
  `brg_gambar` varchar(225) NOT NULL,
  `ctg_id` int(10) NOT NULL,
  `ptn_id` int(10) NOT NULL,
  `brg_berat` varchar(20) NOT NULL,
  `brg_luas` varchar(50) NOT NULL,
  `kec_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`brg_id`, `brg_deskripsi`, `brg_gambar`, `ctg_id`, `ptn_id`, `brg_berat`, `brg_luas`, `kec_id`) VALUES
(38, 'kuytdfcvbnmkliuytfg', '1550979608.jpg', 1, 11, '1ton', '1 ha', 1),
(39, 'oiuytrdfgh', '1550983098.jpg', 1, 11, '12 ton', '1 Ha', 3),
(40, 'mjhuyfgvbn', '1550983933.jpg', 4, 11, '89 kg', '1 Ha', 16);

-- --------------------------------------------------------

--
-- Table structure for table `categori`
--

CREATE TABLE `categori` (
  `ctg_id` int(10) NOT NULL,
  `ctg_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categori`
--

INSERT INTO `categori` (`ctg_id`, `ctg_nama`) VALUES
(1, 'BIRU LANCOR'),
(2, 'BAUJI'),
(3, 'TAJUK'),
(4, 'BATU IJO');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `hrg_id` int(15) NOT NULL,
  `hrg_tanggal` date NOT NULL,
  `hrg_nilai` int(10) NOT NULL,
  `brg_id` int(10) NOT NULL,
  `hrg_status` varchar(10) NOT NULL,
  `ctg_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`hrg_id`, `hrg_tanggal`, `hrg_nilai`, `brg_id`, `hrg_status`, `ctg_id`) VALUES
(16, '2019-02-22', 12000, 38, '1', 0),
(17, '2019-02-09', 90000, 40, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kec_id` int(11) NOT NULL,
  `kec_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kec_id`, `kec_nama`) VALUES
(1, 'Kecamatan Sukapura'),
(2, 'Kecamatan Sumber'),
(3, 'Kecamatan Kuripan'),
(4, 'Kecamatan Bantaran'),
(5, 'Kecamatan Leces'),
(6, 'Kecamatan Tegalsiwalan'),
(7, 'Kecamatan Banyuanyar'),
(8, 'Kecamatan Tiris'),
(9, 'Kecamatan Krucil'),
(10, 'Kecamatan Gading'),
(11, 'Kecamatan Pakuniran'),
(12, 'Kecamatan Kotaanyar'),
(13, 'Kecamatan Paiton'),
(14, 'Kecamatan Besuk'),
(15, 'Kecamatan Kraksaan'),
(16, 'Kecamatan Krejengan'),
(17, 'Kecamatan Pajarakan'),
(18, 'Kecamatan Maron'),
(19, 'Kecamatan Gending'),
(20, 'Kecamatan Dringu'),
(21, 'Kecamatan Wonomerto'),
(22, 'Kecamatan Lumbang'),
(23, 'Kecamatan Tongas'),
(24, 'Kecamatan Sumberasih');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_judul` varchar(255) NOT NULL,
  `news_deskripsi` text NOT NULL,
  `news_tgl` date NOT NULL,
  `news_penulis` varchar(100) NOT NULL,
  `news_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_judul`, `news_deskripsi`, `news_tgl`, `news_penulis`, `news_gambar`) VALUES
(1, 'huhu', 'njkgytfrdfgvhbjkuiytrdfgvhbjkjuiytrfghvbjkuytrdfgvbkjuiytyrfgvb', '2019-02-21', 'sapardi', '1550463751.jpg'),
(3, 'tes', 'dbaskdhjasdsahd', '2019-02-20', 'tes', '1550759417.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `ptn_id` int(10) NOT NULL,
  `ptn_nama` varchar(25) NOT NULL,
  `ptn_alamat` text NOT NULL,
  `ptn_nohp` int(15) NOT NULL,
  `ptn_uname` varchar(15) NOT NULL,
  `ptn_password` varchar(32) NOT NULL,
  `ptn_gender` varchar(20) NOT NULL,
  `ptn_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ptn_status` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`ptn_id`, `ptn_nama`, `ptn_alamat`, `ptn_nohp`, `ptn_uname`, `ptn_password`, `ptn_gender`, `ptn_created`, `ptn_status`) VALUES
(11, 'hehe', 'tes', 767, 'tes', 'b93939873fd4923043b9dec975811f66', 'laki', '2018-12-30 16:34:29', 'terverifikasi'),
(12, 'yaya', 'ncisuwdcns', 2147483647, '1', '1', 'perempuan', '2019-02-14 17:00:00', ''),
(13, 'yani', 'jkfgvbn', 987654, '1', '1', 'p', '0000-00-00 00:00:00', ''),
(14, 'lilik', 'jember', 9876, '1', '1', 'perempuan', '2019-02-08 17:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tengkulak`
--

CREATE TABLE `tengkulak` (
  `tkl_id` int(10) NOT NULL,
  `tkl_nama` varchar(25) NOT NULL,
  `tkl_alamat` text NOT NULL,
  `tkl_nohp` int(10) NOT NULL,
  `tkl_uname` varchar(10) NOT NULL,
  `tkl_password` varchar(10) NOT NULL,
  `tkl_gender` enum('Laki-laki/Perempuan') NOT NULL,
  `tkl_created` date NOT NULL,
  `tkl_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tengkulak`
--

INSERT INTO `tengkulak` (`tkl_id`, `tkl_nama`, `tkl_alamat`, `tkl_nohp`, `tkl_uname`, `tkl_password`, `tkl_gender`, `tkl_created`, `tkl_status`) VALUES
(1, 'yadiiii', 'jember', 37859372, '1', '1', 'Laki-laki/Perempuan', '2018-12-28', 'tengkulak');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `trs_id` int(11) NOT NULL,
  `trs_tanggal` date NOT NULL,
  `trs_total` float NOT NULL,
  `trs_status` varchar(10) NOT NULL,
  `trs_bayar` float NOT NULL,
  `tkl_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `trs_id` int(10) NOT NULL,
  `brg_id` int(10) NOT NULL,
  `brg_jumlah` int(10) NOT NULL,
  `brg_harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`brg_id`),
  ADD KEY `ctg_id` (`ctg_id`),
  ADD KEY `ptn_id` (`ptn_id`),
  ADD KEY `kec_id` (`kec_id`);

--
-- Indexes for table `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`hrg_id`),
  ADD KEY `brg_id` (`brg_id`),
  ADD KEY `ctg_id` (`ctg_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kec_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`ptn_id`);

--
-- Indexes for table `tengkulak`
--
ALTER TABLE `tengkulak`
  ADD PRIMARY KEY (`tkl_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`trs_id`),
  ADD KEY `tkl_id` (`tkl_id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD KEY `trs_id` (`trs_id`),
  ADD KEY `brg_id` (`brg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `brg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categori`
--
ALTER TABLE `categori`
  MODIFY `ctg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `hrg_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `ptn_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tengkulak`
--
ALTER TABLE `tengkulak`
  MODIFY `tkl_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `trs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`ctg_id`) REFERENCES `categori` (`ctg_id`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`ptn_id`) REFERENCES `petani` (`ptn_id`);

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`brg_id`) REFERENCES `barang` (`brg_id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`tkl_id`) REFERENCES `tengkulak` (`tkl_id`);

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`trs_id`) REFERENCES `transaksi` (`trs_id`),
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`brg_id`) REFERENCES `barang` (`brg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
