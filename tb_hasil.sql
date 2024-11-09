-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2024 pada 12.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `NIM` int(10) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Quiz` int(10) NOT NULL,
  `Uts` int(10) NOT NULL,
  `Uas` int(10) NOT NULL,
  `Jumlah` int(50) NOT NULL,
  `Grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`NIM`, `Nama`, `Quiz`, `Uts`, `Uas`, `Jumlah`, `Grade`) VALUES
(0, 'nunu', 50, 50, 50, 417, 'A+'),
(12, 'saa', 12, 32, 12, 19, 'D'),
(21, 'ddddddddd', 23, 423, 432, 106, 'A+'),
(123, 'oo', 53, 54, 45, 51, 'B'),
(234, 'ahmad yasir', 324, 53, 52, 143, 'A+'),
(546, 'ahmad yasir', 43, 5435, 54, 1844, 'A+'),
(550, 'ahmad yasir', 80, 50, 20, 50, 'D');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
