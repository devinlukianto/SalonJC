-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 01:33 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bariton`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_transaksi`
--

CREATE TABLE `list_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_transaksi`
--

INSERT INTO `list_transaksi` (`id_transaksi`, `id_produk`) VALUES
(1, 2),
(1, 5),
(1, 4),
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int(11) NOT NULL,
  `password_hash` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `password_hash`, `email`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `password_hash` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nomor_HP` varchar(128) NOT NULL,
  `nama_depan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `password_hash`, `email`, `alamat`, `nomor_HP`, `nama_depan`) VALUES
(1, '1234', 'kevinsupendi@gmail.com', 'West Jakarta, Sebaru 7 Block L6/26', '1234', 'Kevin Supendi'),
(2, '1234', 'kevinsupendi96@gmail.com', 'West Jakarta, Sebaru 7 Block L6/26', '1234', 'Kevin Supendi');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `deskripsi`, `gambar`) VALUES
(1, 'Roti Strogranoff Amigo', 6000, 10, 'From France, to Bandung, with Love...', 'bread.png'),
(2, 'French Toast Baked', 3000, 20, 'Bosan roti tawar yang begitu-begitu saja? Cobalah yang satu ini pasti ketagihan!', 'bread2.png'),
(3, 'Donat Kentang Ala-Ala', 5000, 5, 'Donat kentang enak enyoy, gurih dan manis bercampur aduk', 'bread3.png'),
(4, 'Yellow Sponge Cake', 4000, 3, 'Gurih. Kuning. Manis. Cepat beli sebelum kehabisan!', 'cake.png'),
(5, 'Black Forest Tart Birthday', 90000, 2, 'Kue Black Forest dengan kepingan coklatnya yang menggoda. Kejutkan teman Anda di hari ulang tahunnya. ', 'tart.jpg'),
(6, 'Roti Coklat', 5000, 20, 'Roti coklat klasik yang menjadi langganan toko Bariton. Roti ini terbukti menjadi pesanan favorit semua orang', 'roticoklat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promosi`
--

CREATE TABLE `promosi` (
  `id_promosi` int(11) NOT NULL,
  `teks` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `tanggal_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promosi`
--

INSERT INTO `promosi` (`id_promosi`, `teks`, `judul`, `gambar`, `tanggal_posting`) VALUES
(3, 'Sentuhan lembut dari adonan cake, juga rasa pisang yang menggoda akan jelas membuat anda ketagihan!', 'April Store Promo!', 'cake.png', '2017-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `nama_depan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `total_harga`, `id_pengguna`, `alamat`, `email`, `nama_depan`) VALUES
(1, '2017-04-12', 102000, NULL, 'asdfadf', '', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_transaksi`
--
ALTER TABLE `list_transaksi`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id_promosi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id_promosi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
