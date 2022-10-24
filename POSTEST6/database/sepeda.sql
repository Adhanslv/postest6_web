-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2022 pada 18.26
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
-- Database: `sepeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cervelo`
--

CREATE TABLE `tb_cervelo` (
  `id_cervelo` char(10) NOT NULL,
  `id_data` char(10) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_sepeda` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_warna` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_cervelo`
--

INSERT INTO `tb_cervelo` (`id_cervelo`, `id_data`, `nama`, `jenis_sepeda`, `harga`, `jumlah`, `tanggal`, `jenis_warna`) VALUES
('CV001', 'DT002', 'Asyhab Ramadhan', ' Cervelo', 'Rp 1.600.000', 2, '2022-10-17', 'Hijau'),
('CV002', 'DT003', 'Juned', ' Cervelo', 'Rp 1.600.000', 1, '2022-11-11', 'Hijau'),
('CV003', 'DT004', 'Riadi', ' Cervelo', 'Rp 1.600.000', 4, '2022-10-22', 'Kuning'),
('CV004', 'DT005', 'Vinny Hong', ' Cervelo', 'Rp 1.600.000', 5, '2022-10-17', 'Merah'),
('CV005', 'DT004', 'Joji', ' Cervelo', 'Rp 1.600.000', 1, '2022-10-17', 'Biru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE `tb_data` (
  `id_data` char(10) NOT NULL,
  `ns_polygon` char(10) NOT NULL,
  `ns_cervelo` char(10) NOT NULL,
  `ns_fixie` char(10) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `tanggal_launch` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`id_data`, `ns_polygon`, `ns_cervelo`, `ns_fixie`, `tanggal_buat`, `tanggal_launch`) VALUES
('DT002', 'POL8711', ' CEL9712', 'FIX6734', '2022-04-29', '2022-10-16'),
('DT003', 'POL8912', ' CEL5423', 'FIX7812', '2021-10-16', '2022-10-16'),
('DT004', 'POL4213', ' CEL6542', 'FIX9028', '2022-04-19', '2022-10-16'),
('DT005', 'POL5435', ' CEL7621', 'FIX1112', '2022-06-15', '2022-10-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fixie`
--

CREATE TABLE `tb_fixie` (
  `id_fixie` char(10) NOT NULL,
  `id_data` char(10) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_sepeda` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_warna` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fixie`
--

INSERT INTO `tb_fixie` (`id_fixie`, `id_data`, `nama`, `jenis_sepeda`, `harga`, `jumlah`, `tanggal`, `jenis_warna`) VALUES
('FIX002', 'DT003', 'Adhan', ' Fixied-Gear', 'Rp 2.500.000', 1, '2022-11-11', 'Biru'),
('FIX003', 'DT005', 'Kontil', ' Fixied-Gear', 'Rp 1.500.000', 2, '2022-07-07', 'Hijau'),
('FIX004', 'DT004', 'Hanz', ' Fixied-Gear', 'Rp 1.500.000', 12, '2022-10-17', 'Biru'),
('FIX005', 'DT003', 'Kimbo', ' Fixied-Gear', 'Rp 1.500.000', 1, '2022-10-17', 'Biru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_polygon`
--

CREATE TABLE `tb_polygon` (
  `id_polygon` char(10) NOT NULL,
  `id_data` char(10) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_sepeda` varchar(25) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_warna` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_polygon`
--

INSERT INTO `tb_polygon` (`id_polygon`, `id_data`, `nama`, `jenis_sepeda`, `harga`, `jumlah`, `tanggal`, `jenis_warna`) VALUES
('P002', 'DT002', 'Vinny ', ' Polygon', 'Rp 1.500.000', 1, '2022-10-16', 'Merah'),
('P003', 'DT003', 'Rasyid', ' Polygon', 'Rp 1.500.000', 6, '2022-07-01', 'Hijau'),
('P004', 'DT004', 'Jayut', ' Polygon', 'Rp 1.500.000', 1, '2022-10-16', 'Biru'),
('P006', 'DT002', 'Kunto', ' Polygon', 'Rp 1.500.000', 5, '2022-10-17', 'Hijau'),
('P007', 'DT003', 'Balomba', ' Polygon', 'Rp 1.500.000', 1, '2022-10-17', 'Biru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` char(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `status`, `gambar`) VALUES
('ID002', 'Salazar', 'salazar', 'wibu5712', 'user', 'user.jpg'),
('ID003', 'Adhanslv', 'adhan', 'adhan5712', 'admin', 'admin.jpg'),
('ID004', 'Juned', 'junaidi', 'junaidi*9947', 'admin', 'admin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cervelo`
--
ALTER TABLE `tb_cervelo`
  ADD PRIMARY KEY (`id_cervelo`),
  ADD KEY `id_data` (`id_data`);

--
-- Indeks untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tb_fixie`
--
ALTER TABLE `tb_fixie`
  ADD PRIMARY KEY (`id_fixie`),
  ADD KEY `id_data` (`id_data`);

--
-- Indeks untuk tabel `tb_polygon`
--
ALTER TABLE `tb_polygon`
  ADD PRIMARY KEY (`id_polygon`),
  ADD KEY `ns_polygon` (`id_data`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_cervelo`
--
ALTER TABLE `tb_cervelo`
  ADD CONSTRAINT `tb_cervelo_ibfk_1` FOREIGN KEY (`id_data`) REFERENCES `tb_data` (`id_data`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_fixie`
--
ALTER TABLE `tb_fixie`
  ADD CONSTRAINT `tb_fixie_ibfk_1` FOREIGN KEY (`id_data`) REFERENCES `tb_data` (`id_data`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_polygon`
--
ALTER TABLE `tb_polygon`
  ADD CONSTRAINT `tb_polygon_ibfk_1` FOREIGN KEY (`id_data`) REFERENCES `tb_data` (`id_data`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
