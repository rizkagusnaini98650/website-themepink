-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2021 pada 19.20
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(130) NOT NULL,
  `Lastname` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `image` varchar(130) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `hobi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Firstname`, `Lastname`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `umur`, `alamat`, `hobi`) VALUES
(3, 'rizkah', 'gusnainijj', 'rizkagusnaini98650@g', 'B.png', '$2y$10$qZ7sfbZcZhx6fF2CswoQZejsp7T799BI9CfZHTl5vBDkyB2GhbNQG', 2, 1, 1639400666, '65', 'jhj', 'hkjhkj'),
(4, 'yeri', 'kim', 'yeri@unsri.ac.id', 'default.jpg', '$2y$10$YLl/2PcSRfmQc2qBMd0MYeODcRa2Kq3oVUHxA01/Wyn/LqCGqzdOi', 2, 1, 1639512374, '22', 'korea', 'menyanyi'),
(5, 'lastri', 'rahel', 'lastrinadya@unsri.ac', 'default.jpg', '$2y$10$8HCPjGT376EE7kucJIpU1uENlL5Qjjjuga.dk6tmN2PUNXS1eJsJ2', 2, 1, 1639514011, '22', 'korea selatan', 'menyanyi'),
(6, 'Ali', 'Buchari', 'ali@unsri.ac.id', '1200px-Joko_Widodo_2019_official_portrait1.jpg', '$2y$10$ah8qKxwgpFyJJ2ICowIHD.LeiAKzNoA7V4SQZ6uPmrSkKEBQcnqNu', 2, 1, 1639514409, '45', 'korsel', 'Mengajar'),
(7, 'arafah', 'rianti', 'arafah@unsri.ac.id', 'default.jpg', '$2y$10$rkxrelZ5cV7Eervt7HThM.Aen4ruTVsO.xoKyWpsykuq0/DC8NHkO', 2, 1, 1639593132, '24', 'depok', 'stand up'),
(8, 'yeri', 'kim', 'yerimiese@unsri.ac.i', 'B1.png', '$2y$10$2jouA5o3w.or/d7V.UZWQ.yBRMR1lAoRbKVxkKx36SWnp0izv87y6', 2, 1, 1639674645, '20', 'korea selatan', 'akting akting akting'),
(9, 'lastri', 'rahel', 'rizkag@unsri.ac.id', 'default.jpg', '$2y$10$HgEIT7DsH9GPs8ll3LkZCumAJxhmcmZavsXE76wXvywZwxoD.PbuC', 2, 1, 1639675522, '22', 'jljlllllllllllllllll', 'kljjjjjjjjll'),
(10, 'tejhhgfhg', 'testrsgffd', 'test@unsri.ac.id', 'b0cbff02b7e37b08324d9b02ae25d5c6.jpg', '$2y$10$naTIM/JqIrLhRahS6/mvguNYVXY.skWHHW.rWkm/2UVepijShbePO', 2, 1, 1639717466, '12', 'lampung', 'main'),
(12, 'lastri', 'rahel', 'adminn@unsri.ac.id', 'default.jpg', '$2y$10$q5PlYQfmt1bQCX2X6IOlO.NlN7E1Oyz.LR3/F.nT59tjy50KT3EP.', 2, 1, 1639730045, '32', 'jk', 'kjh'),
(15, 'Joko', 'Widodo', 'joko@gmail.com', '1200px-Joko_Widodo_2019_official_portrait2.jpg', '$2y$10$XfpN/tNedC6Ve1nEh9QUZOpgdUH0oh19/GJWHTAQ9HP2clnrn2srO', 2, 1, 1639739130, '45', 'Palembang', 'Sepak Bola');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
