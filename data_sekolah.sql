-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 16.51
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('siswa', '123'),
('guru', '123'),
('admin', '123'),
('guru', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` varchar(5) NOT NULL,
  `nama_guru` text NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nama_guru`, `jk`, `alamat`) VALUES
('g01', 'hasan', 'pria', 'jl.raya tapos'),
('g02', 'wawan', 'pria', 'jl. Tol'),
('g03', 'Pa Margono', 'pria', 'jl.raya tapos'),
('g04', 'Khoerull', 'pria', 'Cilodong'),
('g05', 'Pa Mulyadi', 'pria', 'jl.raya tapos'),
('g06', 'Bu Cici', 'wanita', 'Cilodong'),
('g07', 'supri', 'pria', 'jl.adb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nis_mahasiswa` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jk_mahasiswa` varchar(50) NOT NULL,
  `alamat_mahasiswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nis_mahasiswa`, `nama_mahasiswa`, `jk_mahasiswa`, `alamat_mahasiswa`) VALUES
('s01', 'sasa', 'wanita', 'jl.jakarta'),
('s02', 'safa', 'wanita', 'jl.jauh'),
('s03', 'nabila', 'wanita', 'jl.cikaret'),
('s04', 'dodi', 'pria', 'jl.cilangkap'),
('s05', 'danfi', 'pria', 'jl.cimpaeun'),
('s06', 'dirdy', 'wanita', 'jl.mangaka'),
('s07', 'bobi', 'pria', 'jl.raya bogor'),
('s08', 'nadia', 'wanita', 'jl.jakarta'),
('s09', 'kiki', 'pria', 'jl.cikaret'),
('s10', 'kiko', 'pria', 'jl.cilangkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kode_guru` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `kode_guru`) VALUES
('m01', 'bahasa jepang', 'g01'),
('m02', 'bahasa inggris', 'g02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nis_mahasiswa`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD CONSTRAINT `kode_guru` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
