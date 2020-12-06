-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 07:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_calon`
--

CREATE TABLE `biodata_calon` (
  `nim_calon` varchar(15) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `instagram` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata_calon`
--

INSERT INTO `biodata_calon` (`nim_calon`, `nama_calon`, `angkatan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `foto`, `instagram`) VALUES
('1810817110017', 'Noval Aprianda', 2018, 'Banjarmasin', '1999-12-31', 'Laki - Laki', 'bio1.jpg', 'apriandnauf'),
('1810817210012', 'M. Basri', 2018, 'Palangkaraya', '2000-01-02', 'Laki - Laki', 'bio2.jpg', 'basrimhmmd27'),
('1810817310003', 'M. Azmi Haidar', 2018, 'Kandangan', '2000-03-09', 'Laki - Laki', 'bio4.jpg', 'azmihaidar_'),
('1810817710001', 'Christanto P. Burongan', 2018, 'Philippines', '2000-02-02', 'Laki - Laki', 'bio3.jpg', 'chrisantoburongan');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `no_urut` int(11) NOT NULL,
  `nim_calon_ketua` varchar(15) NOT NULL,
  `nim_calon_wakil` varchar(15) NOT NULL,
  `foto_pasangan_calon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`no_urut`, `nim_calon_ketua`, `nim_calon_wakil`, `foto_pasangan_calon`) VALUES
(1, '1810817110017', '1810817210012', 'paslon1.jpg'),
(2, '1810817710001', '1810817310003', 'paslon2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id_misi` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `isi_misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id_misi`, `no_urut`, `isi_misi`) VALUES
(1, 1, 'Memperkenalkan   Himpunan   Mahasiswa   Teknologi   Informasi Kepada Pihak Internal Dan Eksternal Universitas Lambung Mangkurat.'),
(2, 2, 'Menjalin hubungan yang baik antar civitas akademika Teknologi Informasin FT ULM.'),
(3, 1, 'Memaksimalkan Dan Menjalankan Program Kerja Himpunan Mahasiswa Teknologi Informasi.'),
(4, 1, 'Mengembangkan Potensi Mahasiswa Jurusan Teknologi Informasi.'),
(5, 1, 'Menjalin Hubungan Baik Dan Atau Kerja Sama Dengan Pihak Internal Dan Eksternal Universitas Lambung Mangkurat.'),
(6, 2, 'Meningkatkan kualitas SDM Teknologi Informasin FT ULM demi terwujudnya SDM Teknologi Informasin FT ULM yang unggul.'),
(7, 2, 'Menciptakan HMTI sebagai wadah untuk menampung dan menyalurkan aspirasi mahasiswa Teknologi Informasin FT ULM.'),
(8, 2, 'Sebagai sarana untuk pemberdayaan potensi mahasiswa sekaligus sebagai pembinaan dan pengembangan aktif dalam diri mahasiswa.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim_user` varchar(15) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_user` varchar(250) NOT NULL,
  `foto_ktm` varchar(250) NOT NULL,
  `status_registrasi` varchar(20) NOT NULL,
  `status_vote` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim_user`, `nama_user`, `angkatan`, `password`, `foto_user`, `foto_ktm`, `status_registrasi`, `status_vote`) VALUES
('1810817110005', 'Ryan Ramel', 2018, 'ryan', 'pic03.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817110015', 'Taufik Nurhidayat', 2018, 'taufik', 'pic06.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817110018', 'Ferry Pratama', 2018, 'ferry', 'pic03.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817120003', 'Silvia Handayani', 2018, 'silvia', 'pic04.jpg', 'banner.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817120006', 'Siti Rohmah', 2018, 'amah', 'pic06.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817120011', 'Ananda', 2018, 'nanda', 'pic06.jpg', 'pic03.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817120014', 'Noviani', 2018, 'novi', 'pic06.jpg', 'pic03.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817210010', 'Mahrudin', 2018, 'udin', 'pic06.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817210013', 'Gusti Aditya A. F.', 2018, 'gusti', 'pic06.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817220015', 'Faridah', 2018, 'faridah', 'pic06.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih'),
('1810817220017', 'Erika Maulidiya', 2018, 'erika', 'pic06.jpg', 'pic06.jpg', 'Menunggu Verifikasi', 'Belum Memilih');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id_visi` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `isi_visi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id_visi`, `no_urut`, `isi_visi`) VALUES
(1, 1, 'Terwujudnya Himpunan Mahasiswa Teknologi Informasi Sebagai Wadah Aspirasi Dan Pelayanan Demi Mewujudkan Mahasiswa Jurusan Teknologi Informasi Yang Inovatif Dan Berkompeten Di Bidangnya Agar Mampu Bersaing Dalam Perkembangan Teknologi.'),
(2, 2, 'Menjadikan Himpunan Mahasiswa Jurusan Teknologi Informasi Fakultas Teknik Universitas Lambung Mangkurat sebagai wadah mahasiswa jurusan Teknologi Informasi dan sebagai dasar moral serta intelektual yang berintegritas, aspiratif dan bermartabat dalam menunjang proses akademis dan non akademis.');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id_vote` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `jumlah_vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id_vote`, `no_urut`, `jumlah_vote`) VALUES
(1, 1, 0),
(2, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_calon`
--
ALTER TABLE `biodata_calon`
  ADD PRIMARY KEY (`nim_calon`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`no_urut`),
  ADD KEY `nim_calon_ketua` (`nim_calon_ketua`),
  ADD KEY `nim_calon_wakil` (`nim_calon_wakil`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`),
  ADD KEY `no_urut` (`no_urut`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim_user`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`),
  ADD KEY `no_urut` (`no_urut`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `no_urut` (`no_urut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon`
--
ALTER TABLE `calon`
  ADD CONSTRAINT `calon_ibfk_1` FOREIGN KEY (`nim_calon_ketua`) REFERENCES `biodata_calon` (`nim_calon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calon_ibfk_2` FOREIGN KEY (`nim_calon_wakil`) REFERENCES `biodata_calon` (`nim_calon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `misi`
--
ALTER TABLE `misi`
  ADD CONSTRAINT `misi_ibfk_1` FOREIGN KEY (`no_urut`) REFERENCES `calon` (`no_urut`);

--
-- Constraints for table `visi`
--
ALTER TABLE `visi`
  ADD CONSTRAINT `visi_ibfk_1` FOREIGN KEY (`no_urut`) REFERENCES `calon` (`no_urut`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`no_urut`) REFERENCES `calon` (`no_urut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
