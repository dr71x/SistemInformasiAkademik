-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2021 pada 15.03
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` int(10) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `penhir` varchar(50) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `no_tlpn` varchar(18) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `NIP`, `nama`, `agama`, `jenkel`, `alamat`, `status_pegawai`, `email`, `password`, `penhir`, `id_mapel`, `no_tlpn`, `foto`, `created_at`, `updated_at`) VALUES
(1, '8749765666230132', 'Apni Suria Siregar', 'Islam', 'P', 'Jl. Perdana 3', 'GTY', 'smadh.apni@gmail.com', '$2y$10$dRRPWpa2QPI6gtd5LqJFC.7auRucGAiW8lohMLbpp/93o/5M080VC', 'S1 Matematika', 1, '6282278869920', 'public/foto-guru/nDT8QextiQtCe4Q3XURs9t31K9MR4sWwMUmUJpA3.png', '2021-02-21 13:45:17', '2021-02-21 13:45:17'),
(2, '0750744645200012', 'Berjon', 'Khatolik', 'L', 'Jl. SMA 9 No.27', 'GTY', 'berjonsitanggang1@gmail.com', '$2y$10$aBtnkTYLZQYFHu6sWCSJZOF1OoaSkJZgNZAaHyUKX56tKySQ8Vb2y', 'S1 Bahasa Inggris', 2, '6285254006915', 'public/foto-guru/dEFW8MvGeLb1PwmJJIAXjm1id1Kaahg7PK0ziOXz.png', '2021-02-21 13:47:21', '2021-02-21 13:47:21'),
(3, '7934765666230162', 'Corry Mandriesa', 'Islam', 'P', 'Jl. Kapling Penerangan', 'GTY', 'mandriesacorry@gmail.com', '$2y$10$1MDFCCpjL8.Wo4MiYqhnX.eJqjBTFAU.4Rgf467bdU1m.JLxTAMXS', 'S1 Bahasa Indonesia', 3, '6283172009242', 'public/foto-guru/15FiflNJxgyzuvpWe5hQYiKohwbcCX17yV1zlZpv.png', '2021-02-21 13:49:26', '2021-02-21 13:49:26'),
(4, '4546765666230073', 'Dwi Ernina', 'Islam', 'P', 'Jl. Sri Rezeki', 'GTY', 'smadhernina@gmail.com', '$2y$10$tMVXhKHA15vs4s9a4KnQwOqT/42.8Cu2tYGuRUc/HIIDqkf7bcgQC', 'S1 Biologi', 4, '6281373806833', 'public/foto-guru/wF6XOG3g973gutPUKvW0I9X7yo2T1usd8nO4eyr7.png', '2021-02-21 13:51:34', '2021-02-21 13:51:34'),
(5, '1348738640300043', 'Erli Muarty. Nh', 'Islam', 'P', 'Jl. Raja Yamin', 'GTY', 'erlimuarty@gmail.com', '$2y$10$3lmmpNi4.YImSfFWnNBOoOtl.NBl3v9YiUzNasgUM9NNDl0DEAG8K', 'S1 Kewarganegaraan', 5, '6282316553045', 'public/foto-guru/R2Ig6tak1VENzjVOaeHKeBPQjacoKGO0VvpLdhAa.png', '2021-02-21 13:53:53', '2021-02-21 13:53:53'),
(6, '7248755657300043', 'Fitri Yanti', 'Islam', 'P', 'Jln. Raden Wijaya', 'GTY', 'yantifitri277@yahoo.co.id', '$2y$10$dLTaLV9hNUAUeqaLdjdSFe0yYMmGtNpogoaIFuqOgQKA.t86dM0gK', 'S1 Fisika', 6, '6285896582154', 'public/foto-guru/1aaXf6ZZBoxhXMDV26e021RNimL4TYVRZPNLFfag.png', '2021-02-21 13:58:46', '2021-02-21 13:58:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(10) NOT NULL,
  `guru_id` int(10) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kelas_id` int(10) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `guru_id`, `mapel_id`, `hari`, `jam`, `jam_selesai`, `kelas_id`, `semester`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'senin', '08:00:00', '10:00:00', 1, 'ganjil', '2021/2022', '2021-02-21 15:23:29', '2021-02-21 15:23:29'),
(2, 2, 2, 'senin', '10:00:00', '13:00:00', 1, 'ganjil', '2021/2022', '2021-02-21 15:25:01', '2021-02-21 15:25:01'),
(3, 3, 3, 'senin', '13:00:00', '15:00:00', 1, 'ganjil', '2021/2022', '2021-02-21 15:26:18', '2021-02-21 15:26:18'),
(4, 4, 4, 'selasa', '08:00:00', '10:00:00', 1, 'ganjil', '2021/2022', '2021-02-21 15:27:01', '2021-02-21 15:27:01'),
(5, 5, 5, 'selasa', '13:00:00', '15:00:00', 1, 'ganjil', '2021/2022', '2021-02-21 15:30:47', '2021-02-21 15:30:47'),
(6, 6, 6, 'selasa', '08:00:00', '10:00:00', 1, 'ganjil', '2021/2022', '2021-02-21 15:31:26', '2021-02-21 15:31:26'),
(7, 1, 1, 'Rabu', '08:00:00', '10:00:00', 1, 'ganjil', '2021/2022', '2021-02-21 15:34:46', '2021-02-21 15:34:46'),
(8, 1, 1, 'senin', '08:00:00', '10:00:00', 2, 'ganjil', '2021/2022', '2021-02-21 15:45:42', '2021-02-21 15:45:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `guru_id` int(10) NOT NULL,
  `id_jurusan` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `guru_id`, `id_jurusan`, `created_at`, `updated_at`) VALUES
(1, '10mipa1', 1, 'Ipa', '2021-02-21 14:06:03', '2021-02-21 14:06:03'),
(2, '10IS1', 2, 'IPS', '2021-02-21 14:06:43', '2021-02-21 14:06:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkms`
--

CREATE TABLE `kkms` (
  `id` int(10) NOT NULL,
  `guru_id` int(10) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `kelas_id` int(10) NOT NULL,
  `kkm` varchar(50) NOT NULL,
  `deskripsi_a` varchar(50) NOT NULL,
  `deskripsi_b` varchar(50) NOT NULL,
  `deskripsi_c` varchar(50) NOT NULL,
  `deskripsi_d` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', '2021-02-21 13:22:47', '2021-02-21 13:22:47'),
(2, 'Bahasa Inggris', '2021-02-21 13:22:59', '2021-02-21 13:22:59'),
(3, 'Bahasa Indonesia', '2021-02-21 13:23:51', '2021-02-21 13:23:51'),
(4, 'Biologi', '2021-02-21 13:25:20', '2021-02-21 13:25:20'),
(5, 'Kewarganegaraan', '2021-02-21 13:25:35', '2021-02-21 13:25:35'),
(6, 'Fisika', '2021-02-21 13:26:39', '2021-02-21 13:26:39'),
(7, 'Sejarah', '2021-02-21 13:28:15', '2021-02-21 13:28:15'),
(8, 'Penjaskes', '2021-02-21 13:28:41', '2021-02-21 13:28:41'),
(9, 'Agama', '2021-02-21 13:29:47', '2021-02-21 13:29:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materis`
--

CREATE TABLE `materis` (
  `id` int(10) NOT NULL,
  `guru_id` int(10) NOT NULL,
  `kelas_id` int(10) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jenis` enum('ppt','pdf') NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materis`
--

INSERT INTO `materis` (`id`, `guru_id`, `kelas_id`, `mapel_id`, `judul`, `jenis`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Bujur sangkar', 'pdf', 'public/materi-guru/xiLK1IrpfOcq3boIExcWg4DK718NWCj8KyIj9byP.pdf', '2021-02-21 15:41:40', '2021-02-21 15:41:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` int(10) NOT NULL,
  `siswa_id` int(10) NOT NULL,
  `kelas_id` int(10) NOT NULL,
  `guru_id` int(10) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `tugas` varchar(50) NOT NULL,
  `ulangan` varchar(50) NOT NULL,
  `uts` varchar(50) NOT NULL,
  `uas` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `siswa_id`, `kelas_id`, `guru_id`, `mapel_id`, `tugas`, `ulangan`, `uts`, `uas`, `total`, `tahun`, `semester`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(2, 2, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(3, 3, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(4, 5, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(5, 7, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(6, 8, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(7, 9, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(8, 10, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(9, 11, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(10, 12, 1, 2, 2, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:52:20', '2021-02-21 17:52:20'),
(11, 1, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(12, 2, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(13, 3, 1, 3, 3, '90', '90', '90', '0', 45, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(14, 5, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(15, 7, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(16, 8, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(17, 9, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(18, 10, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(19, 11, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(20, 12, 1, 3, 3, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:54:18', '2021-02-21 17:54:18'),
(21, 1, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(22, 2, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(23, 3, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(24, 5, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(25, 7, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(26, 8, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganji', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(27, 9, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganji', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(28, 10, 1, 4, 4, '90', '0', '80', '0', 20, '2021/2022', 'ganji', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(29, 11, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganji', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(30, 12, 1, 4, 4, '90', '90', '90', '90', 90, '2021/2022', 'ganji', '2021-02-21 17:56:56', '2021-02-21 17:56:56'),
(31, 1, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(32, 2, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(33, 3, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(34, 5, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(35, 7, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(36, 8, 1, 5, 5, '0', '0', '0', '90', 45, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(37, 9, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(38, 10, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(39, 11, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(40, 12, 1, 5, 5, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:57:56', '2021-02-21 17:57:56'),
(41, 1, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(42, 2, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(43, 3, 1, 6, 6, '90', '0', '90', '90', 67.5, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(44, 5, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(45, 7, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(46, 8, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(47, 9, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(48, 10, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(49, 11, 1, 6, 6, '0', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(50, 12, 1, 6, 6, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 17:58:54', '2021-02-21 17:58:54'),
(51, 1, 1, 1, 1, '90', '90', '90', '90', 90, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(52, 2, 1, 1, 1, '80', '80', '80', '80', 80, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(53, 3, 1, 1, 1, '70', '70', '70', '70', 70, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(54, 5, 1, 1, 1, '99', '99', '99', '88', 93.5, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(55, 7, 1, 1, 1, '88', '88', '88', '88', 88, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(56, 8, 1, 1, 1, '77', '77', '77', '77', 77, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(57, 9, 1, 1, 1, '77', '77', '77', '77', 77, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(58, 10, 1, 1, 1, '77', '77', '77', '77', 77, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(59, 11, 1, 1, 1, '77', '7', '77', '77', 59.5, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27'),
(60, 12, 1, 1, 1, '77', '77', '77', '77', 77, '2021/2022', 'ganjil', '2021-02-21 18:00:27', '2021-02-21 18:00:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortus`
--

CREATE TABLE `ortus` (
  `id` int(10) NOT NULL,
  `siswa_id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `NIS` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ortus`
--

INSERT INTO `ortus` (`id`, `siswa_id`, `nama`, `alamat`, `pekerjaan`, `NIS`, `password`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'M. BASID', 'Lingkar Jati Perumahan Kembar Lestari', 'PNS/TNI/Polri', '0036866083', '$2y$10$GJXzk6GGa3X4tMIUPjJlGexE.mbuEZkKJPRnK9CP6He7vtF..MIYO', 'public/foto-ortu/0qV6hGkoqevylYfA9NU5TIh8QEp8T0U4GMUNXaio.png', '2021-02-21 14:18:49', '2021-02-21 14:18:49'),
(2, 2, 'Jendalang', 'Solok Sipin', 'Wirausaha', '0051466379', '$2y$10$p3iFd.JM5tRmPxHLSbUF8.1xE1bKRk2bGaD5jbgftzmPYaDYVtFty', 'public/foto-ortu/b1gzvuNtUmOuE1n6fWkzUS7FsFTPpEIg3jFvnUp3.png', '2021-02-21 14:22:30', '2021-02-21 14:22:30'),
(3, 3, 'ANTO', 'Jl. Slamet Riyadi Lrg. Flamboyan', 'Buruh', '0013036917', '$2y$10$5v5JcGBqEQZFAyORIq.6NuFZph7E.3tWJqxj/tzMMTNZhykOW9mei', 'public/foto-ortu/dWkhCJC14aITr04eEPVvtlLPiLaBEQ4Zpxj1kOO8.png', '2021-02-21 14:39:50', '2021-02-21 14:39:50'),
(5, 4, 'Japar', 'Jl. TP. Sriwijaya Lrg. Akasih', 'Wirausaha', '0051033995', '$2y$10$msICW67D/44nh/ctjfQ6Ye9nVG0v1H6AU/eLQnh.v6LEIP/L5eDee', 'public/foto-ortu/XPwgD1eTEBs4iDIpmXvFftbwodtrd9M13A4dEjmW.png', '2021-02-21 14:47:36', '2021-02-21 14:47:36'),
(6, 6, 'Dodi Alamsyah', 'Kenali Asam', 'Wirausaha', '0050956035', '$2y$10$MPAiD325E6RxoyyDhBEoZuC7QAxB34wpyn20w4EsecX5qhgeTFkbi', 'public/foto-ortu/MwVOxEVVMwE76eXMvwLJrwHiLc3VucEoCUsagpBL.png', '2021-02-21 14:53:11', '2021-02-21 14:53:11'),
(8, 7, 'MISPAN', 'Jl. Widuri', 'Karyawan Swasta', '0035500067', '$2y$10$zl63O/zpW6R/UbW4twNfUuVwjdcCV.JMmDbBas9h0sK35V8SHg19a', 'public/foto-ortu/3ukYuEnwl5T4DaMMYNYJJtrMvJkxEvqs5DyArbdv.png', '2021-02-21 15:01:48', '2021-02-21 15:01:48'),
(9, 8, 'ALAMSYAH', 'Jl. Syailendra', 'Karyawan Swasta', '0032734000', '$2y$10$hh96OJonRkE2H9e8XY7e6OPxZ2v9F0uLT.K57B.e7vuSeQAm14Fky', 'public/foto-ortu/l5bGMkyfhriaGKrH3hvqnlQZQnQKK6PZDo9BfbHe.png', '2021-02-21 15:03:08', '2021-02-21 15:03:08'),
(10, 9, 'MUKTI', 'Kampung Baru', 'Buruh', '0032413915', '$2y$10$Buj9FVgn99qhzvfq6I18BOD9hEpcGr/flK81DAx5ywEmhC5aJqaja', 'public/foto-ortu/z7nig6J2sRbQ4pxo6gJlnDwdNM7i289sCaEKRUhz.png', '2021-02-21 15:05:29', '2021-02-21 15:05:29'),
(11, 10, 'Sucipto', 'PERUMNAS AUR DURI BLOK E NO. 232', 'Wiraswasta', '0054959666', '$2y$10$7Zp.5fmAohlnhbU66otRC.SAxcNrzyC5iU0y1WwA3NFzmFl7MiyA2', 'public/foto-ortu/vs0uTSbxeoQo5lruCpgzyHY9BLz8GP342mchs6Z8.png', '2021-02-21 15:08:38', '2021-02-21 15:08:38'),
(12, 11, 'MARCIYANTO', 'Jl. S. Parman', 'PNS/TNI/Polri', '0033550833', '$2y$10$1Xk5G6gXlluNdceBWFOICe4cv/h82ZdhFvvFbNImm49dCrapL6C6u', 'public/foto-ortu/FXk3PW0aJScmHDgq1GtXAJ8ILyD5wHeyD3qZBs8N.png', '2021-02-21 15:12:29', '2021-02-21 15:12:29'),
(13, 12, 'AMAT HARIYANTO', 'Jl. TP. Sriwijaya', 'Pedagang Kecil', '0032214095', '$2y$10$BRhhbAHE/UwfDp3QNqxuweKMjupZCUVcCchek80pKft8Hde6uPNmq', 'public/foto-ortu/oEBefyQ3nfJconGn7C0z8IwMdvxhmJIyTzMUhNz0.png', '2021-02-21 15:15:07', '2021-02-21 15:15:07'),
(14, 13, 'Hilal', 'telanaipura', 'Wiraswasta', '0055867020', '$2y$10$wfc78Pyl6l2NuJMZDd5Klee5X154xY9bmNJLKQEfaK9ADWr4XUACa', 'public/foto-ortu/W4hd4D1jhN4jGQo3aDp020VxYMKDIXj8ZlZd1T94.png', '2021-02-21 15:17:55', '2021-02-21 15:17:55'),
(15, 14, 'ZAINAL ABIDIN', 'Lebak Bandung', 'Wiraswasta', '0042078537', '$2y$10$hizDEvb7l8eFbvwYinuWpOTdlBmlhZynksPPl5hRbQqX3JtxDrpLS', 'public/foto-ortu/6IUYQsLATC4AAUH04Vuv2M1mXO4tGPgnI8ZRK9vP.png', '2021-02-21 15:20:04', '2021-02-21 15:20:04'),
(16, 15, 'Ahmad Lazuardi', 'Let. M. Taher', 'Buruh', '0057134919', '$2y$10$yTHRH3MamHZBV6CHjOaCrewI/UzAzrpcGr9IbS0YQZhUIwPNhVoB6', 'public/foto-ortu/AQnn3ajpgXj0qIgJFp2WvSAVG74VhGeGaH8rSRHh.png', '2021-02-21 15:22:31', '2021-02-21 15:22:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) NOT NULL,
  `NIS` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `kelas_id` int(10) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` varchar(18) DEFAULT NULL,
  `jenis_tinggal` varchar(50) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `NIS`, `nama`, `agama`, `alamat`, `jenkel`, `kelas_id`, `status`, `email`, `password`, `no_hp`, `jenis_tinggal`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0036866083', 'A. ZIDDAN AL KAHFI', 'Islam', 'Lingkar Jati Perumahan Kembar Lestari', 'L', 1, 'Aktif', 'smadh.5782@gmail.com', '$2y$10$2.hmnWCPgNyOqToRJp585exC0m.P.tBps7qRsqS8khlNbx.gfrn/e', '6281366787890', 'Bersama orang tua', 'public/foto-siswa/p1wI1RDcxyV0fTqJoa0dqeVgrU8WqGJubkIgqu5u.png', NULL, '2021-02-21 14:17:23', '2021-02-21 14:17:23'),
(2, '0051466379', 'Abdurrahman Ibrahim', 'Islam', 'Jl. Mawar II', 'L', 1, 'Aktif', 'smadh.5966@gmail.com', '$2y$10$M9SFeGq3MF2J51u7eFbX7eO..PGa8Ja8Y4FAAXn4eKVMCP4rrNHBa', '628136688123', 'Bersama orang tua', 'public/foto-siswa/I1dO8IQj9fq5tDlsFQ1nDakc4Uw59tja6pE3o9Zi.png', NULL, '2021-02-21 14:21:45', '2021-02-21 14:21:45'),
(3, '0013036917', 'Ade Saidinal Ali', 'Islam', 'Jl. Slamet Riyadi Lrg. Flamboyan', 'L', 1, 'Aktif', 'smadh.5783@gmail.com', '$2y$10$hU3Nq4rPsicYCC0azoY2suhsRTdx2sZMQHB0.7yRlgc/BnCNcvM6W', '6281366787891', 'Bersama orang tua', 'public/foto-siswa/fngiKEt1JObHswKldL5qLJ58FVhH9UJY6g3cMXdh.png', NULL, '2021-02-21 14:38:56', '2021-02-21 14:38:56'),
(4, '0051033995', 'Adinata', 'Islam', 'Jl. TP. Sriwijaya Lrg. Akasih', 'L', 2, 'Aktif', 'smadh.5103@gmail.com', '$2y$10$9SkPXmeJ2bDyGa1G1NYNYelDN4uS27ZmCaORIDjVO3ZiejDpYupZK', '6281366787894', 'Bersama orang tua', 'public/foto-siswa/VGGVHycrwKPAxQmBFQHm7gqyLFxAtzXRk0vVFjQ1.png', NULL, '2021-02-21 14:41:56', '2021-02-21 14:41:56'),
(5, '0032413938', 'ADINDA SALSABILA F', 'Islam', 'Jl. Slamet Riyadi', 'P', 1, 'Aktif', 'smadh.5784@gmail.com', '$2y$10$DZ.8na3CQ9EiBaJ.bXBuJ.R5BWgrQirYAqyBY959P66SDxKmmpa5y', '6281366787898', 'Bersama orang tua', 'public/foto-siswa/k192uvZexS4tzoSqm0NI9y4M2xjxfGtNNsBaO2Qd.png', NULL, '2021-02-21 14:46:03', '2021-02-21 14:46:03'),
(6, '0050956035', 'AdindaBerliana', 'Islam', 'Kenali Asam', 'P', 2, 'Aktif', 'smadh.5772@gmail.com', '$2y$10$ePEsZ/fKb2ObzrNQfxy6GuKoe1APfmJ5f7Uw0e4.B13VHa6ODDwM.', '6281366787898', 'Bersama orang tua', 'public/foto-siswa/nnOFONoIynHKTGTfXyyy2cMCI2z15BXROIymZ6aN.png', NULL, '2021-02-21 14:50:59', '2021-02-21 14:50:59'),
(7, '0035500067', 'ADITIYA EKA SAPUTRA', 'Islam', 'Jl. Widuri', 'L', 1, 'Aktif', 'smadh.5785@gmail.com', '$2y$10$beGW8kOBJh6zQtjONPRoaeHDqGDZLwF9jPHZSnLR9wdGI6oThPSxy', '6281366787897', 'Bersama orang tua', 'public/foto-siswa/dJp7fx5XJJZ6HePmNqhsnu6IA1Cq3f5TgHvknUb3.png', NULL, '2021-02-21 14:55:08', '2021-02-21 14:55:08'),
(8, '0032734000', 'ADITYA ZULIANSYAH', 'Islam', 'Jl. Syailendra', 'L', 1, 'Aktif', 'smadah.5786@gmail.com', '$2y$10$CDPE7AvGt7SYDrYtVR3oq.3BkN0B.8/vhIiB6eMl6lPCDDNlmhoky', '6281366787899', 'Bersama orang tua', 'public/foto-siswa/SnvdBqht1JiU8YdY7blmiUO4eKDJYa5DpX3HMj2i.png', NULL, '2021-02-21 14:59:53', '2021-02-21 14:59:53'),
(9, '0032413915', 'AFRIYANTI', 'Islam', 'Kampung Baru', 'P', 1, 'Aktif', 'smadh.5750@gmail.com', '$2y$10$It3Ihn5df.gFBQtPKwxXu.6rEPzON5XcAV1Svw.JE8u9xYOBmWG9.', '6281366787888', 'Bersama orang tua', 'public/foto-siswa/dcnHv8vRndCtWWPGcrO422Be5bhCkDg2Ly8ruwrN.png', NULL, '2021-02-21 15:04:39', '2021-02-21 15:04:39'),
(10, '0054959666', 'AGUNG PRASETIYO', 'Islam', 'PERUMNAS AUR DURI BLOK E NO. 232', 'L', 1, 'Aktif', 'smadh.5755@gmail.com', '$2y$10$xwjIEaa7hZO5xTiLdQQEZeOHBv4Gpb00CSnRPU2k/mVcamoBEKbmq', '6281366787999', 'Bersama orang tua', 'public/foto-siswa/onz2YLLPL3oT9YU5ojmW0PTYfbgcWw1d9lpTBS4b.png', NULL, '2021-02-21 15:07:29', '2021-02-21 15:08:02'),
(11, '0033550833', 'AGUSTYAN AHMAD PRAYOGA', 'Islam', 'Jl. S. Parman', 'L', 1, 'Aktif', 'smadh.5751@gmail.com', '$2y$10$Sd2Mf.Hk/FMZ.b1Jktjmy.WWkidWcgTEWlDQmopUsPQc5n7qhO14i', '62813667878989', 'Bersama orang tua', 'public/foto-siswa/yf8fprGBVtaMjZuMWULJOOhrr7TTJ8or67MEWxKC.png', NULL, '2021-02-21 15:11:20', '2021-02-21 15:11:20'),
(12, '0032214095', 'AHMAD WILDAN HARTANTO', 'Islam', 'Jl. TP. Sriwijaya', 'L', 1, 'Aktif', 'smadh.5752@gmail.com', '$2y$10$m/AfOX712FtkXAXC1YGGcuYZyr0CcN4kSRDU/0zDncHUDgcNtin1q', '6281366787899', 'Bersama orang tua', 'public/foto-siswa/jEfbALc0arsGADtlLCFuf9rQgdJMbVW43pFBaCfy.png', NULL, '2021-02-21 15:14:19', '2021-02-21 15:14:19'),
(13, '0055867020', 'ZIKRI', 'Islam', 'telanaipura', 'L', 2, 'Aktif', 'smadh.5672@gmail.com', '$2y$10$tXGBCvHWEBxCMib2iALHAulva/EQIvgZGGV7LMkl21gOs7cloweW2', '6281366787895', 'Bersama orang tua', 'public/foto-siswa/fPNGAFyYxs80b8BJXD4g1EEEWjD3V562V1jRhUC5.png', NULL, '2021-02-21 15:17:07', '2021-02-21 15:17:07'),
(14, '0042078537', 'ZELA HELENA', 'Islam', 'Jl Sulawesi Lrg Laba-Laba No.30', 'L', 2, 'Aktif', 'eliana120369@gmail.com', '$2y$10$1TxRo6Dqi0RAHVTb3rxiH.DzbuF0HdQC5Eu05B1M1qsz.aX5Q1At2', '6281366787897', 'Bersama orang tua', 'public/foto-siswa/vsxAcYhMTGgA61sNgt2bMITOwnuyd7dfQR2SXINN.png', NULL, '2021-02-21 15:19:24', '2021-02-21 15:19:24'),
(15, '0057134919', 'Zahwa Aaliya', 'Islam', 'Let. M. Taher', 'P', 2, 'Aktif', 'smadh.5977@gmail.com', '$2y$10$uOGk.9JkFkv7/s2DkmWVsezD41odGu0AxlHucfWH844fqFFjk66p.', '62813668812311', 'Bersama orang tua', 'public/foto-siswa/Y2EueHZ4SOHal7RjjOfrLCmo9Fsh71Z2M9Qty2J3.png', NULL, '2021-02-21 15:21:32', '2021-02-21 15:21:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tus`
--

CREATE TABLE `tus` (
  `id` int(10) NOT NULL,
  `nama` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'admin@gmail.com', NULL, '$2y$10$hhXXHPKhtzsxvsAplUXgJOV2ytl7jQEUytsVPo0n3bJ1nke4npI4S', NULL, '2020-12-18 02:15:35', '2020-12-18 02:15:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kkms`
--
ALTER TABLE `kkms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ortus`
--
ALTER TABLE `ortus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kkms`
--
ALTER TABLE `kkms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `materis`
--
ALTER TABLE `materis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `ortus`
--
ALTER TABLE `ortus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
