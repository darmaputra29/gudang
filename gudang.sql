-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2018 pada 11.27
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hak_akses` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'gudangobat ', 'bismillah', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `no` int(11) NOT NULL DEFAULT '0',
  `tndtngn` varchar(50) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`no`, `tndtngn`, `nip`) VALUES
(1, 'Muzakky, Amd.Atem ', '199212102017011101');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `id` varchar(15) NOT NULL DEFAULT '',
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `th_pembelian` varchar(5) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `asal_usul_perolehan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `penerbit`, `th_terbit`, `isbn`, `th_pembelian`, `jenis`, `jumlah_buku`, `asal_usul_perolehan`) VALUES
('0517010703', 'Bumi Cinta', 'Habiburrahman El-Shirazy', 'Author Publishing', '2010', '', '2014', 'umum', 5, 'apba'),
('0517010706', 'Asuhan Kebidanan 1 Kehamilan Edisi Revisi', 'Ai yeyen rukiah,S.Sit,MKM, Lia yulianti,Amd.Keb,MKM, Hj.Maemunah.Amd.Keb,M.Kes', 'CV.Trans Info Media', '2013', '', '2014', 'kesehatan', 4, 'apba'),
('98765434', 'Laskar Pelangi', 'Safwan', 'Erlangga', '2010', '8765', '2012', 'umum', 4, 'apba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `expayer`
--

CREATE TABLE `expayer` (
  `idexpayer` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_expayer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `kemasan` varchar(50) DEFAULT NULL,
  `tgl_masuk_terakhir` date DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `jumlah_masuk` int(10) DEFAULT NULL,
  `jumlah_masuk_terakhir` int(11) DEFAULT NULL,
  `tglexpayer` date DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama`, `jenis`, `kemasan`, `tgl_masuk_terakhir`, `stok`, `jumlah_masuk`, `jumlah_masuk_terakhir`, `tglexpayer`, `harga`) VALUES
(25, 'alprazolam', 'Tablet', 'box', '2019-05-16', 650, 50, 50, '2019-05-09', 'Rp. 100.000'),
(26, 'Simvastatin ', 'Tablet', 'box', '2019-10-24', 380, 10, 200, '2020-06-24', 'Rp. 100.000'),
(27, 'Ranitidine', 'Tablet', 'box', '2019-01-31', 550, 200, 50, '2019-08-31', 'Rp. 100.000'),
(30, 'mecobalamin ', 'Tablet', 'box', '2018-09-06', 10, 10, NULL, '2018-10-01', 'Rp. 100.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `ruangan` varchar(30) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `tgl_pengeluaran` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `id`, `ruangan`, `jumlah`, `tgl_pengeluaran`) VALUES
(66, 25, 'Apotik', 10, '2018-09-03'),
(67, 25, 'Apotik', 10, '2018-09-03'),
(68, 25, 'Apotik', 5, '2018-09-03'),
(69, 27, 'Apotik', 10, '2018-08-31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `expayer`
--
ALTER TABLE `expayer`
  ADD PRIMARY KEY (`idexpayer`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `expayer`
--
ALTER TABLE `expayer`
  MODIFY `idexpayer` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `expayer`
--
ALTER TABLE `expayer`
  ADD CONSTRAINT `expayer_ibfk_1` FOREIGN KEY (`id`) REFERENCES `obat` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`id`) REFERENCES `obat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
