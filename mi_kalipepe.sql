-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 05:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mi_kalipepe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` longtext NOT NULL,
  `isi_berita` longtext NOT NULL,
  `tanggal_berita` date NOT NULL DEFAULT current_timestamp(),
  `gambar_berita` varchar(64) NOT NULL,
  `author` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_berita`, `gambar_berita`, `author`) VALUES
(1, 'Berita 1', '<p xss=removed>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p><p xss=removed>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>', '2022-06-10', 'post-landscape-13.jpg', 'admin'),
(2, 'Berita 2', '<p><strong xss=removed>Lorem Ipsum</strong><span xss=removed> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2022-06-10', 'post-landscape-2.jpg', 'admin'),
(3, 'Berita 3', '<p><span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', '2022-06-10', 'post-landscape-3.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel`
--

CREATE TABLE `tb_carousel` (
  `id_carousel` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `headline` varchar(32) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `tanggal_post` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_carousel`
--

INSERT INTO `tb_carousel` (`id_carousel`, `gambar`, `headline`, `deskripsi`, `status`, `tanggal_post`) VALUES
(8, 'ppdb.jpg', 'PPDB ', '', 'active', '2022-06-10'),
(9, 'carousel.jpg', 'Size Deffault', '', '', '2022-06-10'),
(10, '1.jpg', 'asdasd', 'asd', '', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal_gl` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul`, `tanggal_gl`, `gambar`) VALUES
(8, 'Kegiatan tatap muka setelah pandemi', '2022-06-06', '2.jpg'),
(9, 'Kegiatan tatap muka setelah pandemi', '2022-06-06', '1.jpg'),
(10, 'Pembelajaran Bercocok Tanam', '2022-06-06', '3.jpg'),
(11, 'TPA Pagi', '2022-06-06', '4.jpg'),
(12, 'coba gambar', '2022-06-10', 'person-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(64) NOT NULL,
  `nip_guru` int(18) NOT NULL,
  `jabatan_guru` enum('Guru Pengajar') NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(64) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `foto_guru` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `nip_guru`, `jabatan_guru`, `id_pendidikan`, `pendidikan_terakhir`, `id_mapel`, `foto_guru`) VALUES
(1, 'Dra. Ulfana', 2147483647, 'Guru Pengajar', 3, 'Matematika', 4, 'person-7.jpg'),
(2, 'Dra. Sri Yanurifah', 2147483647, 'Guru Pengajar', 3, 'Matematika', 1, 'person-5.jpg'),
(3, 'Drs. Buadi', 2147483647, 'Guru Pengajar', 3, 'Bahasa indonesia', 2, 'person-2.jpg'),
(4, 'Saromayati, S.Pd.I', 12312421, 'Guru Pengajar', 3, 'Pendidikan Islam', 10, 'person-6.jpg'),
(5, 'Arie Kusumawardani', 444123123, 'Guru Pengajar', 3, 'Pendidikan Guru SD', 6, 'person-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepalah Sekolah'),
(2, 'Bendahara'),
(3, 'Kurikulum'),
(4, 'Guru Pengajar'),
(5, 'Tata Usaha'),
(8, 'Humas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `mata_pelajaran` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `mata_pelajaran`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia'),
(4, 'Tematik'),
(5, 'PJOK'),
(6, 'Bahasa Daerah'),
(7, 'Bahasa Inggris'),
(8, 'Bahasa Arab'),
(9, 'Fiqih'),
(10, 'Al-Qur\'an Hadist'),
(11, 'Sejarah Kebudayaan Islam'),
(12, 'Aqidah Akhlak'),
(13, 'Kemuhammadiyahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `jenjang_pendidikan`) VALUES
(1, 'SMA'),
(2, 'SMK'),
(3, 'S1'),
(4, 'S2'),
(5, 'S3'),
(6, 'D1'),
(7, 'D2'),
(8, 'D3'),
(9, 'D4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id_struktur` int(11) NOT NULL,
  `nama_guru` varchar(64) NOT NULL,
  `nip_guru` int(18) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(64) NOT NULL,
  `foto_guru` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `nama_guru`, `nip_guru`, `id_jabatan`, `id_pendidikan`, `pendidikan_terakhir`, `foto_guru`) VALUES
(1, 'Ahmad Junaedi, S.H', 2147483647, 1, 3, 'Sarjana Hukum', 'person-26.jpg'),
(2, 'Budriantini, S.Pd.SD', 2147483647, 2, 3, 'Pendidikan Guru SD', 'person-3.jpg'),
(3, 'Indri Kusumahati, S.Pt', 2147483647, 3, 3, 'Teknologi Pertanian', 'person-5.jpg'),
(4, 'Khusnul Khotimah', 123124214, 5, 2, 'Rekayasa Perangkat Lunak', 'person-7.jpg'),
(5, 'Firdan Mahendra Wardana', 2147483647, 4, 8, 'Manajemen Informatika', 'person-4.jpg'),
(6, 'Ardyas Setya', 2147483647, 8, 5, 'Manajemen Informatika', 'person-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_pendidikan` (`id_pendidikan`,`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id_struktur`),
  ADD KEY `id_jabatan` (`id_jabatan`,`id_pendidikan`),
  ADD KEY `id_pendidikan` (`id_pendidikan`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`id_pendidikan`) REFERENCES `tb_pendidikan` (`id_pendidikan`),
  ADD CONSTRAINT `tb_guru_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`);

--
-- Constraints for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD CONSTRAINT `tb_struktur_ibfk_1` FOREIGN KEY (`id_pendidikan`) REFERENCES `tb_pendidikan` (`id_pendidikan`),
  ADD CONSTRAINT `tb_struktur_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
