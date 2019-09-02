-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2019 pada 12.09
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
-- Database: `db_silatek`
--

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
('INS1405347', 'Tulus, S.Kom', 'Labirin', '0000-00-00', 'INS1405347813.png', 'TCompany', 'Teknik Mesin', 'Bandung', '082738911213', 'asadad'),
('INS7811401', 'Risna Desmayanti, S.Kom', 'Labirin', '0008-01-09', 'INS7811401.png', 'TCompany', 'Teknik Industri', 'sfasfsaasd', '08273728912', ''),
('INS8145780', 'Risna Desmayanti, S.Kom., M.Kom.', 'Bandung', '2019-07-06', 'INS8145780.png', 'TCompany', 'Teknik Mesin', 'Shawn Mendes', '08213728389', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` varchar(30) NOT NULL,
  `id_inst` varchar(30) NOT NULL,
  `id_jadwal` varchar(255) NOT NULL,
  `start_date` time NOT NULL,
  `end_date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `category` varchar(7) NOT NULL,
  `color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`id`, `nama`, `biaya_pelatihan`, `start`, `end`, `category`, `color`) VALUES
(1, 'Pelatihan ISO 9000', 4000000, '2019-09-02 10:00:00', '2019-09-03 15:00:00', 'success', '#28b779'),
(2, 'IWT', 555555, '2019-09-02 00:00:00', '2019-09-03 00:00:00', 'danger', '#ea7171'),
(3, 'ISO 8583', 200000, '2019-09-06 00:00:00', '2019-09-06 00:00:00', 'warning', '#ffb748'),
(4, 'IWT 2', 101010101, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'info', '#2255a4'),
(5, 'IWT 3', 12121213, '1970-01-01 01:00:09', '1970-01-01 01:00:10', 'info', '#2255a4'),
(6, 'coba', 12312313, '1970-01-01 01:00:09', '1970-01-01 01:00:10', 'info', '#2255a4'),
(7, 'lala', 222222, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'info', '#2255a4');

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
('SLBS1097067718', 'ISO 900099', 'Teknik Kelistrikan', 'lololololo', 'BA-UAT-ACS-BPRMETRO.pdf'),
('SLBS1365250971', 'Silabus Industri 1', 'Teknik Industri', 'afadasdasd', '4e-MANAJEMEN KONFLIK(revJan\'03) (1).doc'),
('SLBS1461280372', 'Silabus Industri 41', 'Teknik Industri', 'ayayyayaya', 'Surat berita acara live ACS - BPR Metro.pdf'),
('SLBS152350519', 'Silabus Industri 6', 'Teknik Industri', 'jljlkkkjkjkjkjkj', 'Beasiswa Prov. Jawa Barat 2019.pdf'),
('SLBS1747600741', 'ISO 9000', 'Teknik Industri', 'yayaya', 'Beasiswa Prov. Jawa Barat 2019 (1).pdf'),
('SLBS1851126406', 'Teknik Mesin Dasar', 'Teknik Mesin', 'Ini tentang kita', '1019-2133-2-PB.pdf'),
('SLBS1956974095', 'Silabus Industri 1', 'Teknik Kelistrikan', 'adsadadasda', 'Telco Service Gateway Spec v1.1.pdf'),
('SLBS195867690', 'Silabus Industri 2', 'Teknik Mesin', 'aaarrasarasrsrras', '618164_1548648169.pdf'),
('SLBS335478642', 'IWT', 'Teknik Mesin', 'Raararaaajkasd', 'Surat berita acara live ACS - BPR Metro.pdf'),
('SLBS650101239', 'ISO 90007', 'Teknik Mesin', 'kkllllloookkkjhh', 'Surat berita acara live ACS - BPR Metro.pdf');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `jadwal_instruktur` FOREIGN KEY (`id`) REFERENCES `tb_instruktur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
