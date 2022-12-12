-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2022 pada 17.26
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javabus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `kd_admin` int(11) NOT NULL,
  `nama_admin` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `username_admin` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `password_admin` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `img_admin` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `email_admin` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `level_admin` varchar(12) CHARACTER SET latin1 DEFAULT NULL,
  `status_admin` int(1) DEFAULT NULL,
  `date_create_admin` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`kd_admin`, `nama_admin`, `username_admin`, `password_admin`, `img_admin`, `email_admin`, `level_admin`, `status_admin`, `date_create_admin`) VALUES
(1, 'kanao', 'kanao', '$2y$10$DOim9..GiuJ0aKku1BT.OuXXnpycEOkJcvwNlyJAJvPiH5Qvb0TBa', NULL, 'kanao@gmail.com', '1', 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `kd_bank` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nasabah_bank` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_bank` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nomrek_bank` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `photo_bank` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bank`
--

INSERT INTO `tbl_bank` (`kd_bank`, `nasabah_bank`, `nama_bank`, `nomrek_bank`, `photo_bank`) VALUES
('BNK001', 'PT JAVA BUS INDONESIA', 'BRI', '894633293', 'assets/frontend/img/bank/bri-icon.jpg'),
('BNK002', 'PT JAVA BUS INDONESIA', 'BNI', '306739089230', 'assets/frontend/img/bank/bni-icon.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bus`
--

CREATE TABLE `tbl_bus` (
  `kd_bus` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_bus` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `plat_bus` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kapasitas_bus` int(13) DEFAULT NULL,
  `status_bus` int(1) DEFAULT NULL,
  `desc_bus` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bus`
--

INSERT INTO `tbl_bus` (`kd_bus`, `nama_bus`, `plat_bus`, `kapasitas_bus`, `status_bus`, `desc_bus`) VALUES
('B001', 'ROSALIA INDAH 1', 'B 1989 U', 40, 1, NULL),
('B002', 'AGRA MAS', 'B 1334 OP', 23, 1, NULL),
('B003', 'Pandawa 87', 'B 4131 LOE', 23, 1, NULL),
('B004', 'PO Haryanto', 'B 5982 DHU', 45, 1, NULL),
('B005', 'Sinar Jaya', 'B 3710 AKL', 41, 1, NULL),
('B006', 'Gunung Harta', 'B 2664 SMD', 37, 1, NULL),
('B007', 'Pahala Kencana', 'B 3754 SJK', 32, 1, NULL),
('B008', 'Sudiro Tungga Jaya', 'B 5821 KDN', 46, 1, NULL),
('B009', 'AGRA MAS SOLO EXC', 'B 2664 SMD', 23, 1, NULL),
('B010', 'PAHALA KENCANA MLG EXC', 'B 9235 BSU', 23, 1, NULL),
('B011', 'SINAR JAYA MLG EXC', 'B 9037 SPO', 23, 1, NULL),
('B012', 'AGRA MAS WNG EXC', 'B 6497 GJP', 23, 1, NULL),
('B013', 'GUNUNG HARGA EXC', 'B 1405 UI', 23, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `kd_jadwal` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kd_bus` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kd_tujuan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kd_asal` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `wilayah_jadwal` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `jam_berangkat_jadwal` time DEFAULT NULL,
  `jam_tiba_jadwal` time DEFAULT NULL,
  `harga_jadwal` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`kd_jadwal`, `kd_bus`, `kd_tujuan`, `kd_asal`, `wilayah_jadwal`, `jam_berangkat_jadwal`, `jam_tiba_jadwal`, `harga_jadwal`) VALUES
('J0001', 'B001', 'TJ002', 'TJ001', 'JAKARTA', '10:00:00', '20:00:00', '124335'),
('J0002', 'B002', 'TJ001', 'TJ002', 'Wonogiri', '07:00:00', '19:00:00', '250000'),
('J0003', 'B005', 'TJ003', 'TJ002', 'SURAKARTA', '06:00:00', '16:00:00', '250000'),
('J0004', 'B009', 'TJ007', 'TJ001', 'Jakarta', '03:36:00', '11:36:00', '400000'),
('J0005', 'B001', 'TJ006', 'TJ001', 'Jakarta', '05:30:00', '16:30:00', '280000'),
('J0006', 'B012', 'TJ007', 'TJ001', 'Jakarta', '06:00:00', '19:30:00', '250000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `kd_konfirmasi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kd_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_konfirmasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_bank_konfirmasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `norek_konfirmasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `total_konfirmasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `photo_konfirmasi` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konfirmasi`
--

INSERT INTO `tbl_konfirmasi` (`kd_konfirmasi`, `kd_order`, `nama_konfirmasi`, `nama_bank_konfirmasi`, `norek_konfirmasi`, `total_konfirmasi`, `photo_konfirmasi`) VALUES
('KF0001', 'ORD00002', 'ssdddd', 'BNI', '35345', '124335', '/assets/frontend/upload/payment/ALSHDI18.PNG'),
('KF0002', 'ORD00004', 'bhara', 'BRI', '11111', '124335', '/assets/frontend/upload/payment/ALSHDI19.PNG'),
('KF0003', 'ORD00005', 'dddddd', 'BRI', '2222222', '124335', '/assets/frontend/upload/payment/ALSHDI20.PNG'),
('KF0004', 'ORD00006', 'rrrr', 'BRI', '3333', '124335', '/assets/frontend/upload/payment/ada_wibu6.PNG'),
('KF0005', 'ORD00007', 'ffffff', 'BRI', '44444', '250000', '/assets/frontend/upload/payment/ALSHDI21.PNG'),
('KF0006', 'ORD00009', 'fgdbfhdf', 'BNI', '22222', '280000', '/assets/frontend/upload/payment/ALSHDI22.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `kd_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`kd_menu`, `nama_menu`) VALUES
(1, 'owner'),
(2, 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `kd_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kd_tiket` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kd_jadwal` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kd_pelanggan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kd_bank` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `asal_order` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `nama_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_beli_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_berangkat_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_kursi_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `umur_kursi_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_kursi_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_ktp_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_tlpn_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_order` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email_order` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `expired_order` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `qrcode_order` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `status_order` varchar(2) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `kd_order`, `kd_tiket`, `kd_jadwal`, `kd_pelanggan`, `kd_bank`, `asal_order`, `nama_order`, `tgl_beli_order`, `tgl_berangkat_order`, `nama_kursi_order`, `umur_kursi_order`, `no_kursi_order`, `no_ktp_order`, `no_tlpn_order`, `alamat_order`, `email_order`, `expired_order`, `qrcode_order`, `status_order`) VALUES
(45, 'ORD00001', 'TORD00001J0006202212111', 'J0006', 'PL0004', 'BNK001', 'TJ001', 'Risky Rini', 'Minggu, 11 Desember 2022, 23:59', '2022-12-11', 'xcvghjkl', '90', '1', '2134567890', '09876363', 'Universitas negeri jakarta', 'rini@gamil.com', '12-12-2022 23:59:01', 'assets/frontend/upload/qrcode/ORD00001.png', '2'),
(54, 'ORD00002', 'TORD00002J0001202212121', 'J0001', 'PL0001', 'BNK001', 'TJ001', 'Bhara Ayong Purna Mustika', 'Senin, 12 Desember 2022, 11:07', '2022-12-12', 'alfhi aryansyah', '71', '1', '1234556878', '1234578', 'cxbdfbdfbd', 'kanaosatu@gmail.com', '13-12-2022 11:07:14', 'assets/frontend/upload/qrcode/ORD00002.png', '2'),
(55, 'ORD00003', 'TORD00003J0006202212122', 'J0006', 'PL0001', 'BNK001', 'TJ001', 'Bhara Ayong Purna Mustika', 'Senin, 12 Desember 2022, 11:14', '2022-12-12', 'risky andrianro', '48', '2', '12334444', '1234578', 'cxbdfbdfbd', 'kanaosatu@gmail.com', '13-12-2022 11:14:17', 'assets/frontend/upload/qrcode/ORD00003.png', '2'),
(56, 'ORD00004', 'TORD00004J0001202212272', 'J0001', 'PL0001', 'BNK001', 'TJ001', 'Bhara Ayong Purna Mustika', 'Senin, 12 Desember 2022, 11:30', '2022-12-27', 'xcvghjkl', '73', '2', '2134567890', '1234578', 'cxbdfbdfbd', 'kanaosatu@gmail.com', '13-12-2022 11:30:09', 'assets/frontend/upload/qrcode/ORD00004.png', '2'),
(57, 'ORD00005', 'TORD00005J00012022121211', 'J0001', 'PL0001', 'BNK001', 'TJ001', 'Bhara Ayong Purna Mustika', 'Senin, 12 Desember 2022, 11:35', '2022-12-12', 'risky andrianro', '39', '11', '7563858375', '1234578', 'cxbdfbdfbd', 'kanaosatu@gmail.com', '13-12-2022 11:35:02', 'assets/frontend/upload/qrcode/ORD00005.png', '2'),
(58, 'ORD00006', 'TORD00006J0001202212287', 'J0001', 'PL0001', 'BNK001', 'TJ001', 'Bhara Ayong Purna Mustika', 'Senin, 12 Desember 2022, 11:41', '2022-12-28', 'bela ', '73', '7', '2134567890', '1234578', 'cxbdfbdfbd', 'kanaosatu@gmail.com', '13-12-2022 11:41:54', 'assets/frontend/upload/qrcode/ORD00006.png', '2'),
(59, 'ORD00007', 'TORD00007J0006202212123', 'J0006', 'PL0006', 'BNK001', 'TJ001', 'kaori miyazono', 'Senin, 12 Desember 2022, 22:06', '2022-12-12', 'kaori', '56', '3', '2134567890', '12131231313', 'isekai', 'kaori2@gmail.com', '13-12-2022 22:06:08', 'assets/frontend/upload/qrcode/ORD00007.png', '2'),
(60, 'ORD00008', 'TORD00008J0002202212134', 'J0002', 'PL0006', 'BNK002', 'TJ002', 'kaori miyazono', 'Senin, 12 Desember 2022, 22:12', '2022-12-13', 'hutao', '33', '4', '2134567890', '12131231313', 'isekai', 'kaori2@gmail.com', '13-12-2022 22:12:39', 'assets/frontend/upload/qrcode/ORD00008.png', '2'),
(61, 'ORD00009', 'TORD00009J00052022122610', 'J0005', 'PL0006', 'BNK002', 'TJ001', 'kaori miyazono', 'Senin, 12 Desember 2022, 22:18', '2022-12-26', 'risky andrianro', '23', '10', '2134567890', '12131231313', 'isekai', 'kaori2@gmail.com', '13-12-2022 22:18:19', 'assets/frontend/upload/qrcode/ORD00009.png', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `kd_pelanggan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username_pelanggan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password_pelanggan` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_ktp_pelanggan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_pelanggan` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat_pelanggan` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email_pelanggan` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `telpon_pelanggan` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `img_pelanggan` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status_pelanggan` int(1) DEFAULT NULL,
  `date_create_pelanggan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`kd_pelanggan`, `username_pelanggan`, `password_pelanggan`, `no_ktp_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `email_pelanggan`, `telpon_pelanggan`, `img_pelanggan`, `status_pelanggan`, `date_create_pelanggan`) VALUES
('PL0001', 'ziezie', '$2y$10$fozdA3mVS/ZzLT.FxmzDSeCbzebprA1drAdMwlYwXsMoyYapfvrTK', '', 'Bhara Ayong Purna Mustika', 'cxbdfbdfbd', 'kanaosatu@gmail.com', '1234578', 'assets/frontend/img/default.png', 1, '1669388244'),
('PL0002', 'kanaoempat', '$2y$10$9BOHjIuTgkndHRU7KywdIuJXWUjndfgdn0SRBEJs5EL7v1o1QofV.', '', 'Kanao tsuyuri', 'Jl. Proklamasi A No.7, RW.8, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411', 'kanaoempat@gmail.com', '0897675783', 'assets/frontend/img/default.png', 1, '1669649446'),
('PL0003', 'Alfhi', '$2y$10$/sp44tmQYgFL4DGUS5FGHe5XMvp3HVGrxvg4813.Y1swAZAs8Ob82', '', 'Alfhi aryansyah', 'Jl. Kramat Raya No.98, RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10450', 'Alfhiaryansyah17@gmail.com', '0859188394024', 'assets/frontend/img/default.png', 1, '1669792740'),
('PL0004', 'riskyrini', '$2y$10$l1zH/NDF0s6cW5SHwRX1bOuqvTuEFsyA8GinEBSUafeH.MFEI1r6m', '', 'Risky Rini', 'Universitas negeri jakarta', 'rini@gamil.com', '09876363', 'assets/frontend/img/default.png', 1, '1670569662'),
('PL0005', 'kaori', '$2y$10$.YaI4CazutgW4E4qP8t7uu9NbKdIL/1FbUzqVfYZ1cR/UX7WVdDdG', '', 'kaori miyazono', 'isekai', 'kaori@gmail.com', '098654656', 'assets/frontend/img/default.png', 0, '1670856472'),
('PL0006', 'kaori2', '$2y$10$B5SlDZewqt93aB.nOMqfuuYjZF0cG0JRqRaL.mIaxjhUie7QFobuW', '', 'kaori miyazono', 'isekai', 'kaori2@gmail.com', '12131231313', 'assets/frontend/img/default.png', 1, '1670857505');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `kd_tiket` varchar(50) NOT NULL,
  `kd_order` varchar(50) DEFAULT NULL,
  `nama_tiket` varchar(50) DEFAULT NULL,
  `kursi_tiket` varchar(50) DEFAULT NULL,
  `umur_tiket` varchar(50) DEFAULT NULL,
  `asal_beli_tiket` varchar(50) DEFAULT NULL,
  `harga_tiket` varchar(50) NOT NULL,
  `etiket_tiket` varchar(100) DEFAULT NULL,
  `status_tiket` varchar(50) NOT NULL,
  `create_tgl_tiket` date DEFAULT NULL,
  `create_admin_tiket` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tiket`
--

INSERT INTO `tbl_tiket` (`kd_tiket`, `kd_order`, `nama_tiket`, `kursi_tiket`, `umur_tiket`, `asal_beli_tiket`, `harga_tiket`, `etiket_tiket`, `status_tiket`, `create_tgl_tiket`, `create_admin_tiket`) VALUES
('TORD00002J0001202212121', 'ORD00002', 'alfhi aryansyah', '1', '71 Tahun', 'TJ001', '124335', 'assets/backend/upload/etiket/ORD00002.pdf', '2', '2022-12-12', 'kanao'),
('TORD00003J0006202212122', 'ORD00003', 'risky andrianro', '2', '48 Tahun', 'TJ001', '250000', 'assets/backend/upload/etiket/ORD00003.pdf', '2', '2022-12-12', 'kanao'),
('TORD00004J0001202212272', 'ORD00004', 'xcvghjkl', '2', '73 Tahun', 'TJ001', '124335', 'assets/backend/upload/etiket/ORD00004.pdf', '2', '2022-12-12', 'kanao'),
('TORD00005J00012022121211', 'ORD00005', 'risky andrianro', '11', '39 Tahun', 'TJ001', '124335', 'assets/backend/upload/etiket/ORD00005.pdf', '2', '2022-12-12', 'kanao'),
('TORD00006J0001202212287', 'ORD00006', 'bela ', '7', '73 Tahun', 'TJ001', '124335', 'assets/backend/upload/etiket/ORD00006.pdf', '2', '2022-12-12', 'kanao'),
('TORD00007J0006202212123', 'ORD00007', 'kaori', '3', '56 Tahun', 'TJ001', '250000', 'assets/backend/upload/etiket/ORD00007.pdf', '2', '2022-12-12', 'kanao'),
('TORD00008J0002202212134', 'ORD00008', 'hutao', '4', '33 Tahun', 'TJ002', '250000', 'assets/backend/upload/etiket/ORD00008.pdf', '2', '2022-12-12', 'kanao'),
('TORD00009J0001202212124', 'ORD00009', 'bela anjing', '4', '37 Tahun', 'TJ001', '124335', 'assets/backend/upload/etiket/ORD00009.pdf', '2', '2022-12-12', 'kanao'),
('TORD00009J00052022122610', 'ORD00009', 'risky andrianro', '10', '23 Tahun', 'TJ001', '280000', 'assets/backend/upload/etiket/ORD00009.pdf', '2', '2022-12-12', 'kanao');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_token_pelanggan`
--

CREATE TABLE `tbl_token_pelanggan` (
  `kd_token` int(11) NOT NULL,
  `nama_token` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `email_token` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `date_create_token` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_token_pelanggan`
--

INSERT INTO `tbl_token_pelanggan` (`kd_token`, `nama_token`, `email_token`, `date_create_token`) VALUES
(0, '0e3a1dad44c671e52f46e3a0e7805fec', 'kanaosatu@gmail.com', 1669474930);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tujuan`
--

CREATE TABLE `tbl_tujuan` (
  `kd_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kota_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_terminal_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `terminal_tujuan` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tujuan`
--

INSERT INTO `tbl_tujuan` (`kd_tujuan`, `kota_tujuan`, `nama_terminal_tujuan`, `terminal_tujuan`) VALUES
('TJ001', 'Wonogiri', 'Giri Adipura', 'Wonogiri'),
('TJ002', 'JAKARTA', '', 'PASAR REBO'),
('TJ003', 'SURAKARTA', '', 'Terminal Tirtonadi'),
('TJ004', 'SURABAYA', '', 'Terminal Purabaya'),
('TJ005', 'MALANG', '', 'Terminal Malang'),
('TJ006', 'Jakarta', '', 'Terminal Kampung Rambutan'),
('TJ007', 'Jakarta', '', 'Terminal Kalideres'),
('TJ008', 'Jakarta', '', 'Terminal Lebak Bulus'),
('TJ009', 'Jakarta', '', 'Terminal Pondok Pinang'),
('TJ010', 'Jakarta', '', 'Terminal Pulo Gebang'),
('TJ011', 'Malang', '', 'Terminal Arjosari'),
('TJ012', 'Malang', '', 'Lowokwaru'),
('TJ013', 'Jakarta', '', 'Terminal Grogol'),
('TJ014', 'Solo', '', 'Terminal Kartasura');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indeks untuk tabel `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`kd_bank`);

--
-- Indeks untuk tabel `tbl_bus`
--
ALTER TABLE `tbl_bus`
  ADD PRIMARY KEY (`kd_bus`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`kd_jadwal`),
  ADD KEY `kd_bus` (`kd_bus`),
  ADD KEY `kd_tujuan` (`kd_tujuan`);

--
-- Indeks untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`kd_konfirmasi`),
  ADD KEY `kd_order` (`kd_order`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `kd_tiket` (`kd_tiket`,`kd_jadwal`,`kd_pelanggan`,`kd_bank`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indeks untuk tabel `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`kd_tiket`),
  ADD KEY `kd_order` (`kd_order`);

--
-- Indeks untuk tabel `tbl_token_pelanggan`
--
ALTER TABLE `tbl_token_pelanggan`
  ADD PRIMARY KEY (`kd_token`);

--
-- Indeks untuk tabel `tbl_tujuan`
--
ALTER TABLE `tbl_tujuan`
  ADD PRIMARY KEY (`kd_tujuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
