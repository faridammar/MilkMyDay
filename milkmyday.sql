-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 27 Nov 2023 pada 13.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milkmyday`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `people` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `phone`, `date`, `people`, `message`) VALUES
(1, 'hafidz faqih', 'hafis.police@gmail.com', '081380090798', '2023-12-08', '1', 'greenf'),
(2, 'hafidz faqih', 'hafis.police@gmail.com', '081380090798', '2023-11-21', '1', 'grea'),
(3, 'Gilbas', 'frdammarrr@gmail.com', '081233222222', '2023-11-10', '3', 'greenfield');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `namaproduk` varchar(200) NOT NULL,
  `kandungan` varchar(200) NOT NULL,
  `harga` int(20) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `namaproduk`, `kandungan`, `harga`, `foto`) VALUES
(5, 'Gula', 'Laktase', 90000, 'uploads/WhatsApp Image 2023-11-21 at 11.19.26_71776e3b.jpg'),
(6, 'Gula', 'Vitamin D', 85000, 'uploads/alfamidi.png'),
(7, 'Gula', 'vitamin c', 85000, 'uploads/WhatsApp Image 2023-11-21 at 11.19.26_71776e3b.jpg'),
(8, 'Gulali', 'Kalsium', 12000, 'uploads/sad.jpeg'),
(9, 'Anggur', 'Maltrase', 22222, 'uploads/DPlayer.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `nohp` int(11) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `nohp`, `email`, `username`, `password`) VALUES
(11, 'Hafidz Faqih Dinillah', 'Jl.Raden Kosasih RT 06/08 No. 58', 2147483647, 'hafis.police@gmail.com', 'hafisfd', '12345678'),
(42, 'hafisfd', 'bogor', 2147483647, 'hafisganteng@gmail.com', 'makasih', 'samasama'),
(43, 'admin', 'Bogor', 81273883, 'admin@maintenance.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
