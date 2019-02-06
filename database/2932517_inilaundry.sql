-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb24.awardspace.net
-- Generation Time: Feb 01, 2019 at 06:57 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2932517_inilaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_web`
--

CREATE TABLE `admin_web` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_web`
--

INSERT INTO `admin_web` (`id_admin`, `username`, `password`, `nama`, `telepon`, `level`) VALUES
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'fahmi', '082216758873', 'admin'),
(14, 'fahmi', 'f11d50d63d3891a44c332e46d6d7d561', 'fahmi', '123', 'customer'),
(26, 'ega', 'b6f6c91fba2d093099ba04f42a1d65a3', 'ega', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `username`, `password`) VALUES
(2, 'eggadsyam', 'a318375cf5e0ce32c51463b8dcf7585c', 'Egga Dinarul Syam'),
(3, 'eggadsyam', 'a318375cf5e0ce32c51463b8dcf7585c', 'Egga Dinarul Syam'),
(4, 'eggadsyam', 'a318375cf5e0ce32c51463b8dcf7585c', 'Egga Dinarul Syam'),
(5, 'Egga Dinarul Syam', 'eggadsyam', 'a318375cf5e0ce32c51463b8dcf7585c'),
(6, 'fahmi ahmad fauzi', 'fahmi', 'f11d50d63d3891a44c332e46d6d7d561'),
(7, 'Gifari', 'Gifarialfaridzi', '654737ecf78bf13ed3c34072b3ec58a6'),
(8, 'a', 'a', '343b1c4a3ea721b2d640fc8700db0f36'),
(9, 'au', 'au', '8bcc25c96aa5a71f7a76309077753e67'),
(10, 'harry apriadi', 'harry', '0a742fedcb445d733e331cd1f186826a');

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `id_laundry` int(5) NOT NULL,
  `nama_laundry` varchar(50) DEFAULT NULL,
  `alamat` text,
  `fasilitas` text,
  `kontak` varchar(15) DEFAULT NULL,
  `id_admin` int(3) DEFAULT NULL,
  `foto` varchar(225) NOT NULL,
  `harga_regular` int(11) NOT NULL,
  `harga_cepat` int(11) NOT NULL,
  `harga_expres` int(11) NOT NULL,
  `hari_regular` int(1) NOT NULL,
  `hari_cepat` int(1) NOT NULL,
  `hari_expres` int(1) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_tidak` int(11) NOT NULL,
  `komen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`id_laundry`, `nama_laundry`, `alamat`, `fasilitas`, `kontak`, `id_admin`, `foto`, `harga_regular`, `harga_cepat`, `harga_expres`, `hari_regular`, `hari_cepat`, `hari_expres`, `lat`, `lng`, `rating`, `rating_tidak`, `komen`) VALUES
(15, 'Star Wash Laundry', 'Jl. Sekeloa no 26 Dipatiukur, Bandung', 'Antar Jemput', '08131440811', 12, 'Starwash.jpg', 6000, 12000, 18000, 3, 1, 6, -6.88914, 107.618, 6, 1, ''),
(16, 'Gebrina Laundry', 'Jl. Haurpancuh 1 no 36C, Rt01 Rw02 Samping Monumen Perjuangan, Bandung', 'Cuci Karpet', '089623132286', 12, 'Gebrina.jpg', 6000, 12000, 18000, 3, 1, 6, -6.89501, 107.619, 0, 0, ''),
(17, 'Beby Laundry', 'Jl. Sekeloa Sel. I No.41, Sekeloa, Coblong, Kota Bandung', NULL, '0813-2091-5160 ', 12, 'Beby.jpg', 6000, 11000, 17000, 3, 1, 6, -6.88927, 107.619, 0, 0, ''),
(18, 'Ravif Laundry', 'Jl. Sekeloa Selatan no 48', NULL, '022 92366414 ', 12, 'Ravif.jpg', 6000, 12000, 18000, 3, 1, 6, -6.88949, 107.617, 0, 0, ''),
(19, 'Anugerah Laundry', 'Jl. Sekeloa Utara no 18, Sekeloa, Coblong, Kota Bandung', NULL, '081573777703', 12, 'Anugerah.jpg', 6000, 12000, 18000, 4, 1, 5, -6.88793, 107.619, 0, 0, ''),
(20, 'Chiara Laundry', 'Jl. Sekeloa Timur no 3-A/125C, Bandung', NULL, '081223999725 ', 12, 'Chiara.jpg', 6000, 12000, 18000, 3, 1, 6, -6.89078, 107.621, 0, 0, ''),
(21, 'Laundry Loverz', 'Jl. Tubagus Ismail Dalam no 40, Bandung', NULL, '087821007393 ', 12, 'Loverz.jpg', 5000, 11000, 17000, 3, 1, 5, -6.88908, 107.617, 0, 0, ''),
(22, 'Jifan Laundry', 'Jl. Ciheulang no 90, Sekeloa, Coblong, Kota Bandung', NULL, '022 20458041', 12, 'Jifan.jpg', 5000, 11000, 16000, 4, 1, 6, -6.88709, 107.619, 0, 0, ''),
(23, 'Bubble Wash', 'Jl. Tubagus Ismail Raya no 22, Sekeloa, Coblong, Bandung', NULL, '087825610735 ', 12, 'Bubble.jpg', 6000, 12000, 18000, 3, 1, 6, -6.88508, 107.618, 0, 0, ''),
(24, 'Kucuci Laundry', 'Jl. Sekeloa no 13, Lebakgede, Coblong, Kota Bandung', NULL, '082211397414', 12, 'Kucuci.jpg', 6000, 12000, 18000, 3, 2, 5, -6.88941, 107.618, 0, 0, ''),
(25, 'Sitepu Laundry', 'Jl. Tubagus Ismail Bawah no 168, Bandung', NULL, '085315328258', NULL, 'Sitepu.jpg', 6000, 0, 0, 1, 0, 0, -6.88926, 107.616, 0, 0, ''),
(26, 'Upstairs Laundry', 'Jl. Dipati Ukur no 68e, Lebakgede, Coblong, Kota Bandung', NULL, '087885648889', 12, 'Upstairs.jpg', 6000, 12000, 18000, 3, 1, 6, -6.89075, 107.617, 0, 0, ''),
(27, 'Laundry Kosankita', 'Jl. Tubagus Ismail Dalam no 5, Sekeloa, Coblong, Bandung', NULL, '081314874428', 12, 'Kosankita.jpg', 6000, 11000, 17000, 3, 1, 6, -6.88656, 107.616, 0, 0, ''),
(28, 'Tubagus Laundry', 'Jl. Tubagus Ismail Raya no 8, RW.01, Sekeloa, Coblong, Bandung', 'Antar Jemput', '087780008737', 12, 'Tubagus.jpg', 6000, 12000, 18000, 3, 1, 6, -6.88508, 107.617, 0, 0, ''),
(29, 'Quick Laundry', 'Jl. Sekeloa Utara no 74, Sekeloa, Coblong, Bandung', 'Antar Jemput', '022 93327329', 12, 'Quick.jpg', 5000, 11000, 17000, 3, 1, 5, -6.8872, 107.619, 0, 0, ''),
(30, 'Raja Laundry', 'Jl. Dipati Ukur no 120, Lebakgede, Coblong,  Bandung', NULL, '085795755609', 12, 'Raja.jpg', 6000, 12000, 18000, 4, 1, 5, -6.88643, 107.615, 0, 0, ''),
(31, 'Kolasuki Laundry', 'Jl. Kubang Selatan no 6, Rt.03 Rw.14, Sekeloa, Bandung', NULL, '081322689893', 12, 'Kolasuki.jpg', 4500, 0, 0, 3, 0, 0, -6.89004, 107.617, 0, 0, ''),
(32, 'Kedai Laundry', 'Jl. Tubagus Ismail Dalam, Lebakgede, Coblong, Bandung', NULL, NULL, NULL, 'Kedai.jpg', 0, 0, 0, 0, 0, 0, -6.88916, 107.617, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_web`
--
ALTER TABLE `admin_web`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`id_laundry`),
  ADD KEY `FK_produk1` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_web`
--
ALTER TABLE `admin_web`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `id_laundry` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laundry`
--
ALTER TABLE `laundry`
  ADD CONSTRAINT `FK_produk1` FOREIGN KEY (`id_admin`) REFERENCES `admin_web` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
