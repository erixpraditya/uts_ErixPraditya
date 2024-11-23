-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2024 at 06:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_erixpraditya`
--

-- --------------------------------------------------------

--
-- Table structure for table `librarymanajer`
--

CREATE TABLE `librarymanajer` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarymanajer`
--

INSERT INTO `librarymanajer` (`id_buku`, `judul_buku`, `pengarang`, `tahun_terbit`, `kategori`) VALUES
(11, 'Informatika komputer', 'Erix praditya', '2000', 'Buku Materi'),
(12, 'Orang-Orang', 'Praditya Erix', '1999', 'dongeng'),
(13, 'Matematika', 'Albert Einstain', '1920', 'Buku Pelajaran'),
(22, 'Love', 'Praditya', '2021', 'asli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `librarymanajer`
--
ALTER TABLE `librarymanajer`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `librarymanajer`
--
ALTER TABLE `librarymanajer`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
