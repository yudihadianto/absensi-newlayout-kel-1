-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 12:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_mahasiswa`
--

CREATE TABLE `master_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_mahasiswa`
--

INSERT INTO `master_mahasiswa` (`id`, `nim`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_tlp`, `email`, `semester`) VALUES
(30, '19060006', 'Yudi Hadianto', 'Laki-Laki', '1989-01-21', 'Kp. Rancapaku Kec. Padakembang', '081286291383', 'yudihadiyanto7@gmail.com', 6),
(31, '19060013', 'Dede Lena Suryani', 'Perempuan', '2000-03-04', 'Legok Cimanggu Ds. Leuwibudah kec. Sukaraja', '081222157980', 'dedelenasuryani25@gmail.com', 6),
(32, '19060043', 'Risman Maulana', 'Laki-Laki', '2000-05-04', 'Pasirbatang, Manonjaya, Tasikmalaya', '0888227050', 'riezmannmaulana6@gmail.com', 6),
(33, '19060042', 'Ikhsan Firdaus Surya', 'Laki-Laki', '1999-05-24', 'Kp Motoran Kec.Ciawi', '082321139519', 'sanzf61@gmail.com', 6),
(34, '19060009', 'Wawan Kardiwan', 'Laki-Laki', '1999-05-09', 'Ciawi', '085871937864', 'wawankardiwan@gmail.com', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_mahasiswa`
--
ALTER TABLE `master_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_mahasiswa`
--
ALTER TABLE `master_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
