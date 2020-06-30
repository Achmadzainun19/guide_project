-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 06:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(12) NOT NULL,
  `judul_blog` varchar(60) NOT NULL,
  `gambar_blog` text NOT NULL,
  `deskripsi_blog` text NOT NULL,
  `slug` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `gambar_blog`, `deskripsi_blog`, `slug`, `created`) VALUES
(1, 'Banyuwangi hebat', 'wisata_1FwB.jpg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'banyuwangi-hebat', '2020-06-23 21:10:25'),
(2, 'Jokowi Cek Kesiapan Pariwisata Banyuwangi Pakai Face Shield', 'artikel_yFHF.png', '<p><span style=\"font-family: Helvetica, Arial, Tahoma; font-size: 18px;\">Presiden Joko Widodo (</span><a href=\"https://www.detik.com/tag/jokowi/?tag_from=tag_detail&amp;_ga=2.25719805.1351449989.1593072715-1369599550.1586240826\" style=\"transition-duration: 200ms; transition-timing-function: linear; background: rgb(255, 255, 255); color: rgb(130, 130, 130); font-weight: bold; border-bottom: 1px solid rgb(130, 130, 130); padding-bottom: 0.5px; font-family: Helvetica, Arial, Tahoma; font-size: 18px;\">Jokowi</a><span style=\"font-family: Helvetica, Arial, Tahoma; font-size: 18px;\">) meninjau langsung kesiapan new normal pariwisata di Banyuwangi (25/6). Sambil memakai&nbsp;</span><a href=\"https://www.detik.com/tag/face-shield/?_ga=2.194164589.1351449989.1593072715-1369599550.1586240826\" style=\"transition-duration: 200ms; transition-timing-function: linear; background: rgb(255, 255, 255); color: rgb(130, 130, 130); font-weight: bold; border-bottom: 1px solid rgb(130, 130, 130); padding-bottom: 0.5px; font-family: Helvetica, Arial, Tahoma; font-size: 18px;\">face shield</a><span style=\"font-family: Helvetica, Arial, Tahoma; font-size: 18px;\">, Jokowi memuji peran Pemerintah Daerah (Pemda) dan masyarakat demi pariwisata&nbsp;</span><a href=\"https://www.detik.com/tag/wisata-banyuwangi/?tag_from=tag_detail&amp;_ga=2.25719805.1351449989.1593072715-1369599550.1586240826\" style=\"transition-duration: 200ms; transition-timing-function: linear; background: rgb(255, 255, 255); color: rgb(130, 130, 130); font-weight: bold; border-bottom: 1px solid rgb(130, 130, 130); padding-bottom: 0.5px; font-family: Helvetica, Arial, Tahoma; font-size: 18px;\">Banyuwangi</a><span style=\"font-family: Helvetica, Arial, Tahoma; font-size: 18px;\">.</span><br></p>', 'jokowi-cek-kesiapan-pariwisata-banyuwangi-pakai-face-shield', '2020-06-27 11:29:33'),
(3, 'Jokowi Pakai Face Shield Saat Blusukan di Banyuwangi', 'artikel_mJjg.jpg', '<p><b style=\"font-weight: bold; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Banyuwangi</b><span style=\"font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">&nbsp;- Presiden Joko Widodo mengunjungi pasar pelayanan publik di Banyuwangi, Jawa Timur. Ia tampak mengenakan face shield hingga masker saat blusukan di Banyuwangi.</span></p><p><span style=\"font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><br></span></p><p><span style=\"font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><br></span><br></p>', 'jokowi-pakai-face-shield-saat-blusukan-di-banyuwangi', '2020-06-27 11:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id_bukti` int(12) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `no_rek` text NOT NULL,
  `id_transaksi` int(12) NOT NULL,
  `bukti` text NOT NULL,
  `created` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id_bukti`, `nama_bank`, `atas_nama`, `no_rek`, `id_transaksi`, `bukti`, `created`, `status`) VALUES
(1, 'BNI', 'Angger Pangestu Ari', '0987654', 1, 'bukti_pembayaran-BK3OCR_MjAyMC0wNi0yOCAxMDo1NToxNA.jpg', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'wisatawan', 'General User'),
(3, 'guide', '');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id_guide` int(12) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `bahasa_dikuasai` text NOT NULL,
  `foto_profil` text NOT NULL,
  `foto_ktp` text NOT NULL,
  `licensi_guide` text NOT NULL,
  `deskripsi` text NOT NULL,
  `stat_prof` int(11) NOT NULL,
  `chat_id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id_guide`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `bahasa_dikuasai`, `foto_profil`, `foto_ktp`, `licensi_guide`, `deskripsi`, `stat_prof`, `chat_id`, `id_user`, `created`) VALUES
(1, '2020-03-20', '1', 'London, England, United Kingdom', 'Bahasa Indonesia (Fasih) , Bahasa Inggris (Fasih), Bahasa Arab (Dasar)', 'http://156.67.220.180/anggertes/uploads/41757e27981843912f886774c7876fb7.jpg', 'http://localhost/aprioTask3/uploads/41757e27981843912f886774c7876fb71.jpg', 'http://localhost/aprioTask3/uploads/41757e27981843912f886774c7876fb72.jpg', 'saya pintar ', 1, 918603299, 2, '2020-03-17 19:50:29'),
(2, '2020-06-27', '1', 'sdfsdfsfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'indonesia , jawa', 'http://localhost/aprioTask3/uploads/61d3e6e1dc9ddccb2b36f105d0993a28.jpg', 'http://localhost/aprioTask3/uploads/61d3e6e1dc9ddccb2b36f105d0993a281.jpg', 'http://localhost/aprioTask3/uploads/61d3e6e1dc9ddccb2b36f105d0993a282.JPG', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 2, 0, 6, '2020-06-28 09:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'aprioaprioaprio', 1593315454),
(2, '::1', 'bambangs@gmail.com', 1593315737);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket` int(12) NOT NULL,
  `nama_paket` varchar(70) NOT NULL,
  `id_guide` int(12) NOT NULL,
  `durasi_wisata` int(12) NOT NULL,
  `detail_wisata` text NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `gambar_wisata` text NOT NULL,
  `created` datetime NOT NULL,
  `slug` text NOT NULL,
  `jadwal_paket` text NOT NULL,
  `syarat_ketentuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket`, `nama_paket`, `id_guide`, `durasi_wisata`, `detail_wisata`, `harga_paket`, `gambar_wisata`, `created`, `slug`, `jadwal_paket`, `syarat_ketentuan`) VALUES
(2, '4 Hari 1 Malam Di Ekuadorr', 1, 5, '<p>uadoh pokok e</p>', 350000, 'paket_wisata_kUOB.png', '2020-04-02 13:38:49', '4-hari-1-malam-edy', '                     <p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">Hari Pertama<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">08:00 Penjemputan bandara/stasiun<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">08:00 Makan pagi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">09:00 Menuju wisata djawatan banyuwangi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">10:00 Explore djawatan banyuwangi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">11:00 Menuju pantai mustika banyuwangi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">13:00 Makan siang<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">14:00 Menuju pantai wedi ireng banyuwangi menggunakan\r\nperahu<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">14:15 Explore pantai wedi ireng banyuwangi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">16:00 Menuju pantai pulau merah banyuwangi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">16:15 Explore pantai pulau merah banyuwangi &amp;\r\nmenikmati sunrise<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">18:00 Menuju hotel untuk check in<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">20:00 Makan malam<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">21:00 Istirahat<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">Hari Kedua<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">08:00 Makan pagi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">09:00 Menuju pantai bangsring banyuwangi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">10:00 Menikmat pantai bangsring di rumah apung dan\r\nmelihat hiu<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">11:00 Menuju waduk bajulmati<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">12:00 Makan siang<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">13:00 Explore waduk bajulmati<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">13:30 Menuju tn. Baluran<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">14:30 Explore tn. Baluran savana bekol<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">15:00 Menuju pantai bama<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">15:30 Explore pantai bama &amp; mangove trail<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">16:30 Keluar dari tn. Baluran<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">19:00 Makan malam<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">20:00 Kembali ke hotel<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">23:45 Persiapan menuju kawah ijen<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">00:00 Menuju paltuding gunung ijen<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">Hari Ketiga<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">01:00 Mulai pendakian dari paltuding gunung ijen<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">04:00 Menikmati kawah ijen blue fire &amp; sunrise<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">06:30 Kembali ke paltuding<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">09:00 Makan pagi<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">13:00 City tour, makan siang &amp; ke pusat oleh – oleh\r\nbanyuwangi<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Calibri Light&quot;, sans-serif;\">15:00 Tour selesai<o:p></o:p></span></p><ul>\r\n                            </ul>                   ', '                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_transaksi`
--

CREATE TABLE `peserta_transaksi` (
  `id_peserta` int(12) NOT NULL,
  `panggilan` varchar(30) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `identitas` varchar(20) NOT NULL,
  `no_identitas` text NOT NULL,
  `id_transaksi` int(12) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_transaksi`
--

INSERT INTO `peserta_transaksi` (`id_peserta`, `panggilan`, `nama_lengkap`, `identitas`, `no_identitas`, `id_transaksi`, `created`) VALUES
(1, 'Tuan', 'angger 2', 'KTP', '23423424', 1, '2020-06-28 10:52:59'),
(2, 'Tuan', 'angger 3', 'KTP', '324234234', 1, '2020-06-28 10:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(12) NOT NULL,
  `id_guide` int(12) NOT NULL,
  `rating` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(12) NOT NULL,
  `gambar_slide` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `gambar_slide`, `created`) VALUES
(1, 'slidex2rr.jpg', '2020-06-23 23:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(12) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_peserta` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `status_transaksi` int(12) NOT NULL,
  `harga_paket` int(12) NOT NULL,
  `total_harga` int(12) NOT NULL,
  `created` datetime NOT NULL,
  `id_paket` int(12) NOT NULL,
  `slug_transaksi` text NOT NULL,
  `tanggal_dimulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `jumlah_peserta`, `id_user`, `status_transaksi`, `harga_paket`, `total_harga`, `created`, `id_paket`, `slug_transaksi`, `tanggal_dimulai`) VALUES
(1, '2020-06-22', 2, 3, 0, 0, 700000, '2020-06-28 10:51:59', 2, 'YzE2ZDVlZmExOThjOGU4ODRkNmY0YjJmYmNkMDNmNmU', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$fLm8GWsT2uqaxLS39O6CLeVuQOtcMXQ8jzmxR95QXmHKrqlogIciK', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1593316183, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'angger23', '$2y$10$gi0XMY4cBqA.P3dVsGsxz.8rKPK7/jfoEsEXWhepJhpweya92IAd.', 'bambangsx@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1584449429, 1593315758, 1, 'Angger Pangestu Ari', NULL, NULL, '08113711998'),
(3, '::1', 'bambang23', '$2y$10$Wg0SzNYTigYOhCq14MKR6eU0BNZT7X.X9hk1ZSOcE7ees1Lakx3y2', 'angger.pangestu@live.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1585796052, 1593316159, 1, 'Bambang Subejo', NULL, NULL, '0987654456789'),
(4, '36.78.105.104', 'angger22', '$2y$10$atIpveC.egk2XekScNVeiezE5/BoAPEAbxvdLqP5CZK6r/puF3YnG', 'angger.pangestu.ari@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1592901397, 1593099962, 1, 'Angger Pangestu Ari2', NULL, NULL, '9823475874365'),
(5, '::1', 'ananda08', '$2y$10$XrcVK2O5EvfcjKSF4A21aOoyCCwUT4O/r2sXWX.a/M8uGj1cXFld6', 'ananda@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1592903968, NULL, 1, 'ananda dewi febriyanti', NULL, NULL, '3456348756'),
(6, '::1', 'mustakim23', '$2y$10$OKwhkaZrgHjtiAIRWNcEWujThnJQL7w5LYqkjNJtnAHMgnCiPdhya', 'mustakim23@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1593310264, 1593310832, 1, 'Mustakim', NULL, NULL, '1234567890'),
(7, '::1', 'aprioaprioaprio', '$2y$10$06PVaEdqBp7T1MSGW03uFOKY2JgLsGsgNfzYynEhUI/Yuo2OJXbIe', 'aprioaprioaprio@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1593315444, 1593315462, 1, 'aprio', NULL, NULL, '081214024520');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 3),
(8, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(12) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `wisata_bagian` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `deskripsi`, `gambar`, `wisata_bagian`, `alamat`, `created`) VALUES
(2, 'Pulau Merah', '<p>bagus bet dah</p>', 'wisata_e5Nn.jpg', 'Banyuwangi Selatan', 'Pesanggaran', '2020-06-24 12:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `wisatawan`
--

CREATE TABLE `wisatawan` (
  `id_wisatawan` int(12) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `id_user` int(12) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisatawan`
--

INSERT INTO `wisatawan` (`id_wisatawan`, `alamat`, `pekerjaan`, `jenis_kelamin`, `id_user`, `created`) VALUES
(1, 'jalan jalan jalan ajaaaa', 'webdeveloper', '1', 3, '2020-04-02 09:54:12'),
(2, 'banyuwangi pucuk wetan iko', 'web develop', '1', 4, '2020-06-23 15:36:37'),
(3, 'singosari sanaaaaaaaa', 'web develop', '1', 5, '2020-06-23 16:19:28'),
(4, 'aprioaprioaprioaprioaprioaprioaprioaprioaprioaprioaprioaprio', 'mahasiswa', '1', 7, '2020-06-28 10:37:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id_guide`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `peserta_transaksi`
--
ALTER TABLE `peserta_transaksi`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `wisatawan`
--
ALTER TABLE `wisatawan`
  ADD PRIMARY KEY (`id_wisatawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id_bukti` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id_guide` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peserta_transaksi`
--
ALTER TABLE `peserta_transaksi`
  MODIFY `id_peserta` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisatawan`
--
ALTER TABLE `wisatawan`
  MODIFY `id_wisatawan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
