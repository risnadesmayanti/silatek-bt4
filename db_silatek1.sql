-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2020 pada 08.41
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_silatek1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(12) NOT NULL,
  `id_training` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `sex` varchar(32) NOT NULL,
  `pendidikan` varchar(16) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `training` varchar(255) NOT NULL,
  `status_ndt` int(1) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `id_training`, `nama`, `usia`, `sex`, `pendidikan`, `jurusan`, `training`, `status_ndt`, `deskripsi`) VALUES
(1, 1, 'Risna', 22, 'Perempuan', 'S1', 'Ilmu Komputer', 'International Welding Engineer(IWE)/(IWT) WNI', 0, 'lalala'),
(2, 2, 'Desmayanti', 23, 'Perempuan', 'S2', 'Siste, Komputer', 'lnternationalWelding Engineer (IWE)/(IWT) WNA 2', 1, 'yeyeye'),
(3, 5, 'Nana', 23, 'perempuan', 'sarjana', 'Ilmu Komputer', 'IWIP COMPREHENSIVE LEVEL WNA', 0, 'yayaya'),
(4, 7, 'Risnaa', 23, 'perempuan', 'diploma', 'Ilmu Komputer', 'IWIP BASIC LEVEL', 0, ''),
(5, 9, 'Isyana', 23, 'perempuan', 'magister', 'Ilmu Komputer - Sistem Informasi', 'IWI Transition Program (For alumnus National WI Courses) WNI', 0, ''),
(6, 4, 'Nana', 23, 'laki-laki', 'diploma', 'werasad', 'IWIP COMPREHENSIVE LEVEL WNI', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_instruktur`
--

CREATE TABLE `tb_instruktur` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `asal_instansi` varchar(255) NOT NULL,
  `spesialisasi` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_kontak` varchar(13) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_instruktur`
--

INSERT INTO `tb_instruktur` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `image`, `asal_instansi`, `spesialisasi`, `alamat`, `no_kontak`, `deskripsi`) VALUES
('INS1388311', 'Zayn Malik', 'NYC', '0000-00-00', 'INS1388311.png', 'BPR KS Leuwipanjdanh', 'Teknik Informatika', 'Bandung>>>>', '0827372891212', 'asdad'),
('INS1405347', 'Tulus, S.Kom', 'Labirin', '1995-11-09', 'INS1405347813.png', 'TCompany 3', 'Teknik Mesin', 'Bandung>', '082738911213', 'asadad'),
('INS7811401', 'Risna Desmayanti, S.Kom', 'Labirin', '0008-01-09', 'INS7811401.png', 'TCompany', 'Teknik Industri', 'sfasfsaasd', '08273728912', ''),
('INS8145780', 'Risna Desmayanti, S.Kom., M.Kom.', 'Bandung', '2019-07-06', 'INS8145780.png', 'TCompany', 'Teknik Mesin', 'Shawn Mendes', '08213728389', ''),
('INS9075090', 'Ariana', 'Bandung', '1995-12-06', 'INS9075090.png', 'Balai Besar Barang dan Bahan Teknik', 'IWE', 'Jalan Sangkuriang', '0857233778892', 'Instruktur Profesional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(30) NOT NULL,
  `id_peserta` varchar(30) DEFAULT NULL,
  `id_pelatihan` int(2) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `color` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `id_peserta`, `id_pelatihan`, `start`, `end`, `color`) VALUES
(3, NULL, 4, '2019-10-30 21:14:17', '2019-10-31 21:14:20', '#ea7171'),
(10, NULL, 23, '2019-11-13 15:16:51', '2019-11-15 15:16:54', '#29ABE2'),
(11, NULL, 1, '2019-11-06 10:47:22', '2019-11-09 10:48:42', '#28b779'),
(12, NULL, 3, '2020-01-01 10:00:04', '2020-01-03 14:00:15', '#28b779'),
(13, NULL, 6, '2019-12-22 14:39:17', '2019-12-25 14:39:24', '#ea7171'),
(14, NULL, 36, '2020-01-22 09:45:32', '2020-01-29 09:45:35', '#ea7171');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `biaya_pelatihan` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `kuota` int(2) NOT NULL,
  `color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`id`, `nama`, `biaya_pelatihan`, `start`, `end`, `category`, `kuota`, `color`) VALUES
(0, 'Welder baru', 45454545, '2019-10-10 00:00:00', '2019-10-14 00:00:00', 'Teknik Listrik', 55, ''),
(1, 'International Welding Engineer(IWE)/(IWT) WNI', 27000000, '2019-10-26 19:48:47', '2019-10-29 19:48:49', 'IWE', 30, ''),
(5, 'Welder', 12121213, '2019-10-02 01:00:09', '1970-01-01 01:00:10', 'Teknik Mesin', 0, '#2255a4'),
(8, 'ISO 8583', 100000, '2019-10-24 00:00:00', '2019-10-26 00:00:00', 'Teknik Mesin', 0, ''),
(11, 'International Welding Technologist 3', 32323232, '2019-10-23 00:00:00', '2019-10-24 00:00:00', 'Teknik ', 23, '#2255a4'),
(14, 'test', 33323232, '2019-10-24 05:28:31', '2019-10-26 16:28:43', 'Teknik Sipil', 22, '#ffb748');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_silabus`
--

CREATE TABLE `tb_silabus` (
  `id` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `dokumen_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_silabus`
--

INSERT INTO `tb_silabus` (`id`, `judul`, `kategori`, `ringkasan`, `dokumen_file`) VALUES
('SLBS1097067718', 'ISO 900099', 'IWE', 'Ini silabus', 'BA-UAT-ACS-BPRMETRO.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `training`
--

CREATE TABLE `training` (
  `trainingId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `training`
--

INSERT INTO `training` (`trainingId`, `name`, `kuota`, `biaya`, `category`) VALUES
(1, 'International Welding Engineer(IWE)/(IWT) WNI', 30, '27000000', 'IWE'),
(2, 'lnternationalWelding Engineer (IWE)/(IWT) WNA 2', 30, '35000000', 'IWE'),
(3, 'IWE / IWT Qualificaion', 0, '5000000', 'IWE'),
(4, 'IWIP COMPREHENSIVE LEVEL WNI', 30, '17000000', 'IWIP'),
(5, 'IWIP COMPREHENSIVE LEVEL WNA', 30, '25000000', 'IWIP'),
(6, 'IWIP STANDARD LEVEL', 20, '15000000', 'IWIP'),
(7, 'IWIP BASIC LEVEL', 20, '11000000', 'IWIP'),
(8, 'IWIP Qualification', 0, '5000000', 'IWIP'),
(9, 'IWI Transition Program (For alumnus National WI Courses) WNI', 15, '8000000', 'IWI'),
(10, 'IWI Transition Program (For alumnus National WI Courses) WNA', 15, '13000000', 'IWI'),
(11, 'IWI - Batam', 20, '20000000', 'IWI'),
(12, 'International Welding Specialist (IWS)  WNI', 20, '12000000', 'IWS'),
(13, 'International Welding Specialist (IWS) WNA', 20, '17000000', 'IWS'),
(14, 'IWS Qualification', 0, '5000000', 'IWS'),
(15, 'International Welding Practitioner (IWP)WNI', 20, '10000000', 'IWP'),
(16, 'International Welding Practitioner (IWP)WNA', 20, '15000000', 'IWP'),
(17, 'IWP Qualification', 0, '5000000', 'IWP'),
(18, 'Welder ', 10, '8000000', 'WD'),
(19, 'WD Qualification', 0, '5000000', 'WD'),
(20, 'NDT-UT,MT,PT Level I', 10, '7000000', 'NDT'),
(21, 'NDT-UT Level II/PP', 10, '6000000', 'NDT'),
(22, 'NDT-UT Level II/AC', 10, '6000000', 'NDT'),
(23, 'NDT MT,PT Level II', 10, '7000000', 'NDT'),
(24, 'Radiography Interpreter (RI)', 10, '5000000', 'RI'),
(25, 'Corrosion Inspektor', 10, '6000000', 'CI'),
(26, 'Cement Testing Technician', 10, '6000000', ''),
(27, 'Concrete Testing Technician', 10, '6000000', ''),
(28, 'Concrete Inspection Technology', 10, '7000000', ''),
(29, 'Calibration Technician', 10, '4000000', ''),
(30, 'Sampling Officer', 10, '350000', ''),
(31, 'Lab Management System (ISO 17025)', 10, '4000000', ''),
(32, 'Quality Management System  ISO 9000', 10, '4000000', ''),
(33, 'Environment Management System ISO 14000', 10, '4000000', ''),
(34, 'Safety Management System OHSAS', 10, '4000000', ''),
(35, 'Re-Qualification NDT', 10, '4000000', ''),
(36, 'International Welding Technologist 22', 12, '1900000', 'IWIP');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_silabus`
--
ALTER TABLE `tb_silabus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`trainingId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `training`
--
ALTER TABLE `training`
  MODIFY `trainingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
