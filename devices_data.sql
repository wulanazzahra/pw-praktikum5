-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 17.44
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devices`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `devices_data`
--

CREATE TABLE `devices_data` (
  `id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_brand` varchar(255) NOT NULL,
  `device_quantity` int(11) NOT NULL,
  `device_status` tinyint(1) NOT NULL DEFAULT 0,
  `device_defect` tinyint(1) NOT NULL,
  `device_origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `devices_data`
--

INSERT INTO `devices_data` (`id`, `cover`, `device_name`, `device_brand`, `device_quantity`, `device_status`, `device_defect`, `device_origin`) VALUES
(1, 'cover1.jpg', 'Home Voice Controller', 'Google', 1, 0, 0, 'Amerika'),
(2, 'cover2.jpg', 'Doorbell Cam', 'August', 2, 0, 0, 'Australia'),
(3, 'cover3.jpg', 'Smart Lock', 'August', 10, 0, 0, 'Australia'),
(4, 'cover4.jpg', 'Mobile Robot', 'Kuri', 5, 0, 0, 'Jepang'),
(5, 'cover5.jpg', 'Smart Light Switch', 'Belkin WeMo', 15, 0, 0, 'Jerman'),
(6, 'cover6.jpg', 'Smoke Alarm', 'Nest', 7, 0, 0, 'Amerika');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `devices_data`
--
ALTER TABLE `devices_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `devices_data`
--
ALTER TABLE `devices_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
