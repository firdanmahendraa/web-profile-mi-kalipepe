-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 12:13 PM
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
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `judul_prestasi` longtext NOT NULL,
  `isi_prestasi` longtext NOT NULL,
  `tanggal_prestasi` date NOT NULL,
  `gambar_prestasi` varchar(64) NOT NULL,
  `author` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `judul_prestasi`, `isi_prestasi`, `tanggal_prestasi`, `gambar_prestasi`, `author`) VALUES
(1, 'Prestasi 1', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non maximus lacus, eu convallis ipsum. Nulla convallis diam vel mi dignissim, ac dictum urna tristique. Aenean at nibh sed sem sodales congue. Suspendisse rutrum lacus ac arcu accumsan, eget consectetur sem laoreet. Aliquam et urna posuere, molestie ante vel, vulputate mauris. Mauris porttitor ante ligula. Duis fringilla semper mattis. Nulla non risus at quam congue feugiat vestibulum auctor elit. Sed vel quam vitae justo euismod convallis. Nullam molestie dignissim mauris, ut fringilla orci dapibus a. Fusce nunc nunc, rutrum non nisl elementum, tincidunt mattis orci. Aenean eleifend leo eu mi fermentum, vel bibendum elit ornare. Nulla tempor purus eu mi fringilla, id venenatis nisl tincidunt. Curabitur nec malesuada libero. Suspendisse et iaculis leo, eu vehicula ipsum.</span><br></p>', '2022-06-11', 'post-landscape-81.jpg', 'admin'),
(2, 'Prestasi 2', '<p xss=removed>Sed sit amet nulla ut nisl interdum fermentum quis in diam. Maecenas nec dictum mi, vitae venenatis mauris. Integer tempor a urna scelerisque faucibus. Nam odio ipsum, bibendum eget vestibulum vitae, posuere ut enim. Donec condimentum, nunc eu ultrices efficitur, tellus eros viverra urna, id faucibus massa sapien ac enim. Etiam et eleifend felis. Nulla facilisi. Suspendisse potenti. Quisque nec gravida lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam imperdiet euismod egestas. Mauris imperdiet euismod quam a pretium.</p><p xss=removed>Curabitur fermentum efficitur leo vitae dictum. Suspendisse ac interdum turpis. Proin ultricies elit dolor, at molestie dolor tincidunt a. Cras gravida lacus et orci dapibus, at auctor quam faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis nec odio quis ex consectetur porttitor nec feugiat justo. Sed dui nunc, pretium mattis risus sit amet, aliquet vulputate ante. Maecenas a leo quis magna fringilla ultricies pretium eget velit.</p>', '2022-06-11', 'post-landscape-7.jpg', 'admin'),
(3, 'Prestasi 3', '<p xss=removed>Praesent sit amet egestas augue, quis auctor erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet fringilla mauris, sit amet vulputate ante. Morbi porta ultrices eros. Aliquam facilisis odio a turpis pellentesque, a tristique nisi laoreet. Pellentesque sagittis porttitor turpis, ac finibus neque ullamcorper eget. Praesent ultrices dui quis tincidunt suscipit. Phasellus nec enim pellentesque, fermentum nunc in, tincidunt risus. Quisque elementum et ante auctor ultrices. Proin faucibus, felis a iaculis vehicula, magna ante faucibus est, id ornare ante sem non mi. Suspendisse feugiat lacus vitae mi sagittis congue.</p><p xss=removed>Integer sapien diam, blandit quis lobortis convallis, porta ut leo. Etiam libero massa, lacinia euismod massa id, gravida venenatis justo. Phasellus tempor ultricies condimentum. Quisque rhoncus, augue ut varius convallis, ipsum nisi varius turpis, ac consectetur dolor sapien sed lectus. Sed imperdiet imperdiet nunc congue cursus. Donec cursus nisl eros, quis lobortis odio pulvinar vel. Vivamus lobortis massa vitae ornare pulvinar. Nulla auctor porttitor augue, at ultrices leo aliquam eu. Quisque non pharetra enim. Vestibulum dignissim, dui non semper semper, augue orci porttitor est, nec cursus nibh massa vitae dolor. Pellentesque vulputate lectus in ante aliquet tincidunt. Aenean consequat risus felis, ut ultricies nisl ullamcorper in. Fusce egestas est in elit fringilla, eleifend tempor neque rutrum. Fusce semper ligula eu nulla ornare, vitae semper mauris egestas. Nullam maximus tempus arcu vel aliquet. Phasellus in eros sit amet urna convallis viverra nec sed diam.</p>', '2022-06-11', 'post-landscape-5.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_profile` longtext NOT NULL,
  `deskripsi_profile` longtext NOT NULL,
  `gambar_profile` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `id_kategori`, `judul_profile`, `deskripsi_profile`, `gambar_profile`) VALUES
(1, 1, 'Sambutan Kepala Sekolah', '<p xss=removed>Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website MI Muhammadiyah Kalipepe ini dapat terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar MI Muhammadiyah Kalipepe.</p><p xss=removed>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi MI Muhammadiyah Kalipepe.</p><p xss=removed>Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai MI Muhammadiyah Kalipepe yang lebih baik lagi.</p><p xss=removed>Wassalamu\'alaikum wr.wb.</p><p xss=removed><br xss=removed></p><p xss=removed>Hormat kami,</p><p xss=removed>Kepala MI Muhammadiyah Kalipepe</p>', 'person-2.jpg'),
(2, 2, 'Visi dan Misi', '“Terwujudnya Siswa Beriman dan Taqwa, Berprestasi, Berbudaya dan Berwawasan Lingkungan”. Melaksanakan pembelajaran yang inovatif, efektif dan partisipatif. Meningkatkan prestasi akademik, non akademik dan prestasi di bidang keagamaan. Meningkatkan Sumber Daya Manusia (SDM) warga sekolah.', 'logo.png'),
(3, 3, 'Hadroh', 'Kegiatan Ekstrakulikuler hadrah adalah salah satu kegiatan di luar jam pelajaran sekolah untuk mengembangkan bakat, minat dan kreatifitas peserta didik di bidang seni terutama Seni Hadrah. Apalagi di era globalisasi ini peserta didik lebih suka main gadget dari pada berkreasi. Oleh karenanya seni hadrah ini bisa menjadi sarana untuk membatasi peserta didik untuk tetap beraktifitas dan bernilai positif.Senihadrahdapatmengembangkan psikomotorikanak,Meningkatkankreatifitasanak,menumbuhkanrasakecintaanpadabudayaIslam,menumbuhkan rasa seni dan keagamaan melalui lagu – lagu Islam, dan menumbuhkan rasacinta terhadap Nabi muhammad SAW, karna dengan musik marawis kita bisa menyampaikansolawat dan syiar islam. Mengingat besarnya manfaat dari seni hadrah, maka kegiatan Ektrakulrikuler Hadrah, sangat perlu dikembangkan di sekolah.', 'Untitled-1_copy.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_kategori`
--

CREATE TABLE `tb_profil_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil_kategori`
--

INSERT INTO `tb_profil_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Profile Sekolah'),
(2, 'Visi & Misi'),
(3, 'Ekstra Kulikuler');

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
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_profil_kategori`
--
ALTER TABLE `tb_profil_kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_profil_kategori`
--
ALTER TABLE `tb_profil_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD CONSTRAINT `tb_profile_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_profil_kategori` (`id_kategori`);

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
