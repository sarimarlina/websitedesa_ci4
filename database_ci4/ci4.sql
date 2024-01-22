-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2024 pada 16.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` int(15) NOT NULL,
  `namaguru` varchar(50) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `namaguru`, `jenkel`, `alamat`) VALUES
(1, 1234567, 'budi', '', 'padang'),
(2, 1234567, 'budi', '', 'padang'),
(3, 1234567, 'budi', '', 'padang'),
(4, 1234567, 'budi', '', 'padang'),
(5, 1234567, '', '', ''),
(6, 1234567, '', '', ''),
(7, 2147483647, 'budi', '', 'padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `namapegawai` varchar(50) NOT NULL,
  `nik` int(20) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(15) NOT NULL,
  `tglkerja` date NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `thnlls` date NOT NULL,
  `rekbank` varchar(15) NOT NULL,
  `npwp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `namapegawai`, `nik`, `jabatan`, `jk`, `alamat`, `nohp`, `email`, `tglkerja`, `pendidikan`, `thnlls`, `rekbank`, `npwp`) VALUES
(22, 'sari', 21052001, 'laki-laki', 'laki-laki', 'kampung batu selatan', '082399624591', 'sarimarlina536@', '2024-01-15', 's1', '2024-12-08', '', '27367263'),
(26, 'bumi', 21052002, 'perempuan', 'perempuan', 'kampung batu selatan', '082399624591', 'Sarimarlina178@', '0000-00-00', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `namapenduduk` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `namapenduduk`, `jk`, `alamat`) VALUES
(4, '21052002', 'sari', 'perempuan', 'solok'),
(6, '1234567', 'azizah', 'perempuan', 'kampung batu selatan'),
(8, '21052002', 'sari', 'perempuan', 'pp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'sari marlina', 'sari', 'sari', 'admin'),
(2, 'sari marlina', 'surik', 'surik', 'user'),
(3, 'sari', 'sarii', '12345', 'user'),
(4, 'sari marlina', 'sarri', '123456', 'admin'),
(5, 'sari marlina', 'pegawai', 'pegawai', 'user'),
(6, 'pegawai1', 'pegawai1', 'pegawai1', 'user'),
(7, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
