-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2025 pada 07.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `kode_barang`, `stok`) VALUES
(18, 'bola', '12', 11),
(20, 'baba', '12345', 1),
(24, 'adad', 'qe', NULL),
(26, 'barangkeren', '123', 0),
(27, 'dada ayam', '123', 2),
(28, 'ada', '123', 0),
(29, '', 'Hitam abu-', 0),
(30, '', 'Hitam abu-', 0),
(31, 'qeqeq', NULL, NULL),
(39, 'adadadadada', '1221432', 0),
(40, 'baru', '1221432', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `id_barang`, `tanggal_keluar`, `jumlah`) VALUES
(1, 2, '2029-12-12', 121321321),
(2, 3, '2024-04-25', 2),
(3, 4, '2024-12-12', 3),
(4, 5, '2024-04-27', 4),
(23, 121, '3000-12-23', 12),
(24, 1321, '3000-12-23', 213123),
(26, 19, '0000-00-00', 1);

--
-- Trigger `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `Tbk` AFTER INSERT ON `barang_keluar` FOR EACH ROW UPDATE barang
SET stok=stok-new.jumlah
WHERE id_barang=new.id_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `dbk` AFTER DELETE ON `barang_keluar` FOR EACH ROW UPDATE barang
SET stok = stok+old.jumlah
WHERE id_barang=old.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_diterima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `id_barang`, `jumlah`, `tanggal_diterima`) VALUES
(1, NULL, 89, '2024-04-11'),
(13, 13, 18, '2024-05-11'),
(14, 3, 100, '2024-05-02'),
(15, 122, 1, '2024-04-30'),
(16, 121212, 88, '2024-04-11'),
(17, 11, 88, '2024-04-30'),
(19, 23, 1, '2024-12-12'),
(20, 27, 1, '2024-12-12'),
(21, 29, 0, '0000-00-00'),
(22, 29, 0, '0000-00-00'),
(23, 31, 0, '2024-10-30');

--
-- Trigger `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `Tbm` AFTER INSERT ON `barang_masuk` FOR EACH ROW UPDATE barang
SET stok=stok+new.jumlah
WHERE id_barang=new.id_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `dbm` AFTER DELETE ON `barang_masuk` FOR EACH ROW UPDATE barang
SET stok= stok-old.jumlah  
WHERE id_barang=old.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_rusak`
--

CREATE TABLE `barang_rusak` (
  `id_barang_rusak` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_rusak` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_rusak`
--

INSERT INTO `barang_rusak` (`id_barang_rusak`, `id_barang`, `tanggal_rusak`, `jumlah`) VALUES
(1, 11, '2024-10-02', 11),
(3, 11, '2099-12-23', 88),
(4, 1, '2099-12-23', 88),
(5, 1, '2024-12-12', 1),
(6, 28, '2024-12-12', 1);

--
-- Trigger `barang_rusak`
--
DELIMITER $$
CREATE TRIGGER `Tbr` AFTER INSERT ON `barang_rusak` FOR EACH ROW UPDATE barang
SET stok=stok-new.jumlah
WHERE id_barang=new.id_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `dbr` AFTER DELETE ON `barang_rusak` FOR EACH ROW UPDATE barang
SET stok=stok+old.jumlah
WHERE id_barang=old.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_kry` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `NIK` int(11) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jeniskel` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_kry`, `id_user`, `nama`, `NIK`, `tanggal_lahir`, `jeniskel`, `alamat`, `no_hp`) VALUES
(1, 11111, 'der', 1231231, '2024-10-02', 'laki-laki', 'tiban', 121212),
(2, 12312313, 'adadad', 2147483647, '2024-10-03', 'laki-laki', 'tiban', 1),
(3, 1231232, 'derr', 1232132, '2024-10-16', 'perempuan', 'botania', 8213300),
(4, NULL, 'kucing', 111, '2024-10-03', 'laki-laki', 'tiban', 1212),
(5, NULL, 'ada', 1, '2024-09-30', 'laki-laki', 'tiban', 121212),
(6, NULL, 'deruyyy', 123213, '2024-10-12', 'laki-laki', 'tiban', 9112),
(8, 488, 'adad', 1231, '2024-11-05', 'laki-laki', 'botan', 123),
(9, NULL, 'adad', 1232123, '2024-12-12', 'laki-laki', 'tiban', 91212);

-- --------------------------------------------------------

--
-- Struktur dari tabel `serah`
--

CREATE TABLE `serah` (
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `foto`) VALUES
(1, 'adada', 'adada', 1, ''),
(479, 'lg@pa.id', '123', 2, ''),
(480, 'kevin@em.sch.id', '1', 1, ''),
(481, 'manajer@lk.id', '1', 3, ''),
(482, 'pbk@ko.id', '1', 4, ''),
(483, 'pbm@loo.id', '1', 5, ''),
(484, 'adadad', 'wwewe', 1, ''),
(485, 'adadada', '123', 1, ''),
(486, 'deriuscoolaf', '123', 4, ''),
(488, 'Derius', '123', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indeks untuk tabel `barang_rusak`
--
ALTER TABLE `barang_rusak`
  ADD PRIMARY KEY (`id_barang_rusak`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_kry`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `serah`
--
ALTER TABLE `serah`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `barang_rusak`
--
ALTER TABLE `barang_rusak`
  MODIFY `id_barang_rusak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_kry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `serah`
--
ALTER TABLE `serah`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=489;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
