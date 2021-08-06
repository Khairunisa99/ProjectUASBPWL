-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 06:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasbpwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `resepmasakan`
--

CREATE TABLE `resepmasakan` (
  `koderesep` int(65) NOT NULL,
  `namaresep` varchar(225) NOT NULL,
  `porsi` int(225) NOT NULL,
  `waktu` int(225) NOT NULL,
  `bahan` text NOT NULL,
  `langkah` text NOT NULL,
  `foto` varchar(225) NOT NULL DEFAULT 'default.jpg',
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resepmasakan`
--

INSERT INTO `resepmasakan` (`koderesep`, `namaresep`, `porsi`, `waktu`, `bahan`, `langkah`, `foto`, `deskripsi`) VALUES
(1, 'a', 1, 2, 'a', 'a', 'calendar.png', 'a'),
(2, 'admin', 1, 2, 'a', 's', 'basic-logo-hoodie-misty-1-704x1024.jpg', 'a'),
(4, 'Resep Nasi Goreng Kontrakan ala Chef Fadil', 8, 1, '- 2 sdm minyak sayur <br>\r\n- 2 butir bawang merah, iris tipis <br>\r\n- 2 siung bawang putih, iris tipis <br>\r\n- 150 g babat rebus, iris tipis panjang <br>\r\n- 400 g nasi putih <br>\r\n- 1 batang daun bawang, iris kasar <br>\r\n- 4 sdm kecap manis <br>\r\nHaluskan: <br>\r\n- 2 buah cabai merah besar, buang bijinya, rebus <br>\r\n- 2 buah cabai rawit merah <br>\r\n- 2 butir bawang merah <br>\r\n- 1 siung bawang putih <br>\r\n- 1/2 sdt terasi goreng <br>\r\n- 1 sdt garam <br>\r\nPelengkap: <br>\r\n- 2 sdm bawang merah goreng <br>\r\n- Acar timun <br>', '- Tumis bawang merah dan bawang putih hingga layu. <br>\r\n- Masukkan Bumbu Halus, aduk hingga matang dan harum. <br>\r\n- Tambahkan babat, aduk hingga rata. <br>\r\n- Masukkan nasi, daun bawang dan kecap manis. <br>\r\n- Aduk hingga rata dan agak kering. <br>\r\n- Angkat, Sajikan hangat dengan Pelengkapnya. <br>', '2c40b556-0dc9-40b2-937b-e629c2bbd568_43.png', 'Ini Nasi Goreng Paling Debest Segalaxy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', 'admin'),
(4, 'khai', 'khai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resepmasakan`
--
ALTER TABLE `resepmasakan`
  ADD PRIMARY KEY (`koderesep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resepmasakan`
--
ALTER TABLE `resepmasakan`
  MODIFY `koderesep` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
