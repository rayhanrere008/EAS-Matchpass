-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2023 at 01:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_matchpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id_contact`, `nama`, `email`, `pesan`) VALUES
(1, 'ILHAM BERLIAN OKTAVIO', 'ilhamberliano.20@gmail.com', 'tes123'),
(2, 'ILHAM BERLIAN OKTAVIO', 'ilhamberliano.20@gmail.com', 'tes123'),
(3, 'Rayhan Qalby R', 'rahyan.1@gmail.com', 'tastestos'),
(4, 'ILHAM BERLIAN OKTAVIO', 'ilhamberliano.20@gmail.com', 'tes lagi 123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `pertandingan` varchar(255) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `stadion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `pertandingan`, `hari`, `tanggal`, `jam`, `stadion`) VALUES
(1, 'Persija Jakarta vs PSM Makassar', 'Sabtu', '2023-07-01', '15:00', 'Gelora Bung Karno'),
(2, 'Bali Uinited vs PSS Sleman', 'Sabtu', '2023-07-01', '19:00', 'Kapten 1 Wayan Dipta'),
(3, 'Dewa United FC vs Arema FC', 'Minggu', '2023-07-02', '15:00', 'Indomilk Arena'),
(4, 'Persib Bandung vs Madura United FC', 'Minggu', '2023-07-02', '15:00', 'Gelora Bandung Lautan Api'),
(5, 'PS Barito Putera vs Persita', 'Minggu', '2023-07-02', '19:00', 'Manahan'),
(6, 'Rans Nusantara FC vs Persikabo 1973', 'Minggu', '2023-07-02', '19:00', 'Demang Lehman'),
(7, 'Rans Nusantara FC vs Persikabo 1973', 'Senin', '2023-07-03', '15:00', 'Patrion Candrabhaga'),
(8, 'Persik Kediri vs Borneo FC', 'Senin', '2023-07-03', '15:00', 'Brawijaya'),
(9, 'PSIS Semarang vs Bhayangkara FC', 'Senin', '2023-07-03', '19:00', 'Jatidiri'),
(10, 'Arema FC vs Persib Bandung', 'Jumat', '2023-07-07', '15:00', 'Kapten 1 Wayan Dipta'),
(11, 'PSS Sleman vs Persis Solo', 'Jumat', '2023-07-07', '19:00', 'Maguwoharjo'),
(12, 'Borneo FC vs Bali United FC', 'Sabtu', '2023-07-08', '15:00', 'Segiri'),
(13, 'Persita vs PSIS Semarang', 'Sabtu', '2023-07-08', '15:00', 'Indomilk Arena'),
(14, 'Persebaya Surabaya vs PS Barito Putera', 'Sabtu', '2023-07-08', '19:00', 'Gelora Bung Tomo'),
(15, 'PSM Makassar vs Dewa United FC', 'Sabtu', '2023-07-08', '19:00', 'Gelora B.J Habibie'),
(16, 'Madura United FC vs Persik Kediri', 'Minggu', '2023-07-09', '15:00', 'Gelora Madura Ratu Pamelingan'),
(17, 'Persikabo 1973 vs Persija Jakarta', 'Minggu', '2023-07-09', '19:00', 'Wibawa Mukti'),
(18, 'Bhayangkara FC vs Rans Nusantara FC', 'Minggu', '2023-07-09', '19:00', 'Patriot Candrabhaga'),
(19, 'PS Barito Putera vs PSS Sleman', 'Jumat', '2023-07-14', '15:00', 'Demang Lehman'),
(20, 'Persikabo 1973 vs PSM Makassar', 'Jumat', '2023-07-14', '15:00', 'Wibawa Mukti'),
(21, 'Persib Bandung vs Dewa United FC', 'Jumat', '2023-07-14', '19:00', 'Gelora Bandung Lautan Api'),
(22, 'Persis Solo vs Borneo FC', 'Sabtu', '2023-07-15', '15:00', 'Manahan'),
(23, 'Persik Kediri vs Arema FC', 'Sabtu', '2023-07-15', '15:00', 'Brawijaya'),
(24, 'Bali United FC vs Madura United FC', 'Sabtu', '2023-07-15', '19:00', 'Kapten 1 Wayan Dipta'),
(25, 'Rans Nusantara FC vs Persita', 'Minggu', '2023-07-16', '15:00', 'Patriot Candrabhaga'),
(26, 'PSIS Semarang vs Persebaya Surabaya', 'Minggu', '2023-07-16', '15:00', 'Jatidiri'),
(27, 'Persija Jakarta vs Bhayangkara FC', 'Minggu', '2023-07-16', '19:00', 'Gelora Bung Karno'),
(28, 'Borneo FC vs PS Barito Putera', 'Jumat', '2023-07-21', '15:00', 'Segiri'),
(29, 'Dewa United FC vs Persik Kediri', 'Jumat', '2023-07-21', '15:00', 'Indomilk Arena'),
(30, 'Arema FC vs Bali United FC', 'Jumat', '2023-07-21', '19:00', 'Kapten 1 Wayan Dipta'),
(31, 'Bhayangkara FC vs Persikabo 1973', 'Sabtu', '2023-07-22', '15:00', 'Patriot Candrabhaga'),
(32, 'Persita vs Persija Jakarta', 'Sabtu', '2023-07-22', '15:00', 'Indomilk Arena'),
(33, 'PSS Sleman vs PSIS Semarang', 'Sabtu', '2023-07-22', '19:00', 'Maguwoharjo'),
(34, 'PSM Makassar vs Persib Bandung', 'Sabtu', '2023-07-22', '19:00', 'Gelora B.J Habibie'),
(35, 'Madura United FC vs Persis Solo', 'Minggu', '2023-07-23', '15:00', 'Gelora Madura Ratu Pamelingan'),
(36, 'Persebaya Surabaya vs Rans Nusantara FC', 'Minggu', '2023-07-23', '19:00', 'Gelora Bung Tomo'),
(37, 'PSIS Semarang vs Borneo FC', 'Jumat', '2023-07-28', '15:00', 'Jatidiri'),
(38, 'Persikabo 1973 vs Persita', 'Jumat', '2023-07-28', '15:00', 'Wibawa Mukti'),
(39, 'Persik Kediri vs Persib Bandung', 'Jumat', '2023-07-28', '19:00', 'Brawijaya'),
(40, 'Bali United FC vs Dewa United FC', 'Sabtu', '2023-07-29', '15:00', 'Kapten 1 Wayan Dipta'),
(41, 'Bhayangkara FC vs PSM Makassar', 'Sabtu', '2023-07-29', '19:00', 'Patriort Candrabhaga'),
(42, 'Rans Nusantara FC vs PSS Sleman', 'Minggu', '2023-07-29', '15:00', 'Patriort Candrabhaga'),
(43, 'Persija Jakarta vs Persebaya Surabaya', 'Minggu', '2023-07-29', '15:00', 'Gelora Bung Karno'),
(44, 'Persis Solo vs Arema FC', 'Minggu', '2023-07-29', '19:00', 'Manahan'),
(45, 'PS Barito Putera vs Madura United FC', 'Minggu', '2023-07-29', '19:00', 'Demang Lehman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klub`
--

CREATE TABLE `tb_klub` (
  `id_klub` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deksripsi` text NOT NULL,
  `manajer` varchar(255) NOT NULL,
  `julukan` varchar(255) NOT NULL,
  `suporter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klub`
--

INSERT INTO `tb_klub` (`id_klub`, `nama`, `deksripsi`, `manajer`, `julukan`, `suporter`) VALUES
(1, 'PSM Makassar', 'Persatuan Sepak Bola Makassar yang berbasis di Kota Makassar dan didirikan pada tahun 1915.', 'Bernando Tavares', 'Juku Eja', 'Laskar Ayam Jantan'),
(2, 'Persija Jakarta', 'Persatuan Sepak Bola Indonesia Jakarta yang berbasis di Kota Jakarta dan didirikan pada tahun 1928.', 'Thomas Doll', 'Macan Kemayoran', 'The Jak Mania'),
(3, 'Borneo FC', 'Klub sepak bola Indonesia yang berbasis di Kota Samarinda dan didirikan pada tahun 2014.', 'Pieter Huistra', 'Pesut Etam', 'Pusamania'),
(4, 'Arema FC', 'Arema Football Club merupakan klub sepak bola Indonesia yang berbasis di Kabupaten Malang dan didirikan pada tahun 1987.', 'Javier Roca', 'Singo Edan', 'Aremania'),
(5, 'PSIS Semarang', 'Persatuan Sepak Bola Indonesia Semarang yang berbasis di Kota Semarang dan didirikan pada tahun 1932.', 'Gilbert Agius', 'Laskar Mahesa Jenar', 'Panser Biru'),
(6, 'PERSIB Bandung', 'Klub sepak bola Indonesia yang berbasis di Kota Bandung dan didirikan pada tahun 1933.', 'Luis Milla', 'Maung Bandung', 'Bobotoh'),
(7, 'PERSEBAYA Surabaya', 'Persatuan Sepak Bola Surabaya yang berbasis di Kota Surabaya dan didirikan pada tahun 1927.', 'Aji Santoso', 'Bajul Ijo\r\n', 'Bonek Mania'),
(8, 'Bhayangkara FC', 'Klub sepak bola Indonesia yang dimiliki oleh POLRI yang berbasis di Kota Bekasi serta didirikan pada tahun 2016.', 'Widodo Cahyono P', 'The Guardian', 'Bharamania'),
(9, 'PERSIKABO 1973', 'Persatuan Sepak Bola Indonesia Kabupaten Bogor yang berbasis di Kabupaten Bogor serta didirikan pada tahun 2015.', 'Aidil Sharin S', 'Laskar Padjajaran', 'Kabomania'),
(10, 'PERSIK Kediri', 'Persatuan Sepak Bola Indonesia Kediri yang berbasis di Kota Kediri dan didirikan pada tahun 1950.', 'Marcelo Rospide', 'Macan Putih', 'Persikmania'),
(11, 'PERSITA Tangerang', 'Persatuan Sepak Bola Indonesia Tangerang yang berbasis di Kabupaten Tangerang dan didirikan pada tahun 1953.', 'Luis Duran', 'Pendekar Cisadane', 'Benteng Viola'),
(12, 'RANS Nusantara FC', 'Klub Sepak Bola Indonesia yang berbasis di Kota Jakarta, Indonesia dan didirikan pada tahun 2012.', 'Eduardo Almeida', 'Foniks Bergengsi', 'Boys Of RANS'),
(13, 'Madura United FC', 'Klub sepak bola professional asal Indonesia yang berbasis di Pulau Madura dan didirikan pada tahun 2016.', 'Mauricio Souza', 'Laskar Karapan Sapi', 'Kacong Mania'),
(14, 'PERSIS Solo', 'Klub sepak bola professional asal Indonesia yang berbasis di Kota Surakarta dan didirikan pada tahun 1923.', 'Leonardo Medina', 'Laskar Sambernyawa', 'Pasoepati'),
(15, 'Bali United', 'Klub sepak bola professional asal Indonesia yang berbasis di Kabupaten Gianyar, Bali dan didirikan pada tahun 2015.', 'Stefano Teco', 'Serdadu Tridatu', 'Semeton Dewata'),
(16, 'Barito Putera', 'Klub sepak bola professional asal Indonesia yang berbasis di Kota Banjarmasin dan didirikan pada tahun 1988.', 'Rahmad Darmawan', 'Laskar Antasari', 'Bartman'),
(17, 'Dewa United FC', 'Klub sepak bola professional asal Indonesia yang berbasis di Kabupaten Tangerang, Banten dan didirikan pada tahun 2021.', 'Jan Olde Riekerink', 'The Deity Warriors', 'Anak Dewa'),
(18, 'PSS Sleman', 'Klub sepak bola professional asal Indonesia yang berbasis di Kabupaten Sleman dan didirikan pada tahun 1976.', 'Marian Mihail', 'Super Elang Jawa', 'BCS Sleman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_metode`
--

CREATE TABLE `tb_metode` (
  `id_metode` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_metode`
--

INSERT INTO `tb_metode` (`id_metode`, `nama`) VALUES
(1, 'Bank BCA'),
(2, 'Bank BRI'),
(3, 'ShopeePay'),
(4, 'Dana'),
(5, 'Ovo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pesan` int(11) NOT NULL,
  `jadwal_pertandingan` varchar(255) NOT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `bukti_transfer` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pesan`, `jadwal_pertandingan`, `tanggal`, `nama`, `nik`, `umur`, `email`, `nomor_hp`, `harga`, `jumlah`, `pembayaran`, `bukti_transfer`) VALUES
(1, 'Persija Jakarta vs PSM Makassar', '2023-07-01', 'Rayhan', '3218201000856656', '20', 'zerenityrayhan01@gmail.com', '0895789101929', '125000', 2, 'Bank BCA', 0x38343535663235363965643635373037383337626231636335396239633939302e6a7067),
(2, 'Dewa United FC vs Arema FC', '2023-07-02', 'ILHAM BERLIAN OKTAVIO', '3218201000346656', '21', 'ilhamberliano.20@gmail.com', '081252968179', '200000', 2, 'Bank BCA', 0x3230313334352e6a7067),
(3, 'Persib Bandung vs Madura United FC', '2023-06-13', 'Wanda Berlian Mardianti', '2222222222', '22', 'qr.wandantii@gmail.com', '081252968179', '100000', 1, 'ShopeePay', 0x3230313334352e6a7067),
(4, 'Rans Nusantara FC vs Persikabo 1973', '2023-06-13', 'Rayhan Qalby', '2222', '21', 'rayhan@gmail.com', '081252968179', '160000', 2, 'Ovo', 0x7061747269636b2e706e67),
(5, 'Persija Jakarta vs PSM Makassar', '2023-06-14', 'Barlian Soebiantoro', '123', '40', 'barlian@gmail.com', '081252968179', '200000', 1, 'Bank BRI', 0x346b5f333235393634352e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_klub`
--
ALTER TABLE `tb_klub`
  ADD PRIMARY KEY (`id_klub`);

--
-- Indexes for table `tb_metode`
--
ALTER TABLE `tb_metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_klub`
--
ALTER TABLE `tb_klub`
  MODIFY `id_klub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_metode`
--
ALTER TABLE `tb_metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
