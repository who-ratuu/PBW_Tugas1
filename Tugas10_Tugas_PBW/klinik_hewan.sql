-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2026 pada 17.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_hewan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_hewan`
--

CREATE TABLE `pasien_hewan` (
  `id` int(11) NOT NULL,
  `nama_hewan` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `pemilik` varchar(100) DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien_hewan`
--

INSERT INTO `pasien_hewan` (`id`, `nama_hewan`, `jenis`, `pemilik`, `keluhan`, `tanggal`) VALUES
(1, 'Mochi', 'Kucing', 'Helmi', 'Gatal gatal', '2026-04-24'),
(2, 'Lucky', 'Anjing', 'Zain', 'Luka kaki', '2026-04-24'),
(3, 'Aletta', 'Sugar Glider', 'Fakhrurriza', 'Tidak mau makan', '2026-04-23'),
(4, 'Leo', 'Kucing', 'Atika', 'Flu', '2026-04-22'),
(5, 'Shireen', 'Anjing', 'Wiwi', 'Demam tinggi', '2026-04-21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien_hewan`
--
ALTER TABLE `pasien_hewan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien_hewan`
--
ALTER TABLE `pasien_hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
