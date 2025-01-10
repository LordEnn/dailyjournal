-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 06:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ao`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Maine Coon', 'Ciri khas: Tubuh besar, bulu semi-panjang, dan ekor berbulu lebat.\r\nKepribadian: Ramah, lembut, dan cocok sebagai teman keluarga.', 'mainecoon.jpeg', '2024-12-04 05:18:07', 'admin'),
(2, 'British Short Hair', 'Ciri khas: Tubuh kekar, bulu pendek tebal, dan wajah bulat.\r\nKepribadian: Tenang, penyayang, dan mandiri.\r\n', 'bsh.jpeg', '2024-12-04 05:18:07', 'admin'),
(3, 'Bengal', 'Ciri khas: Corak seperti macan tutul dengan tubuh ramping dan atletis.\r\nKepribadian: Aktif, cerdas, dan suka bermain.', 'bengal.jpeg', '2024-12-04 05:18:07', 'admin'),
(4, 'Scottish Fold', 'Ciri khas: Telinga melipat ke depan dan wajah bulat imut.\r\n\r\nKepribadian: Ramah, mudah beradaptasi, dan suka perhatian.', 'scottish.jpeg', '2024-12-04 05:22:34', 'admin'),
(5, 'Persian', 'Ciri khas: Telinga besar, tubuh ramping, dan bulu pendek bergelombang.\r\nKepribadian: Energik, lucu, dan sangat suka ditemani manusia.', 'persian.jpg', '2024-12-04 05:22:34', 'admin'),
(6, 'Rex Devon', 'Ciri khas: Telinga besar, tubuh ramping, dan bulu pendek bergelombang.\r\nKepribadian: Energik, lucu, dan sangat suka ditemani manusia.', 'rex.jpeg', '2024-12-04 05:24:06', 'admin'),
(9, 'bbayukk', 'en jago', '20250111003121.jpg', '2025-01-11 00:31:21', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `gambar`, `tanggal`, `username`, `nama`) VALUES
(14, 'bbayukk', '20250111002950.jpg', '2025-01-11', 'en', ''),
(16, 'bbayukk', '20250111003020.jpg', '2025-01-11', 'en', ''),
(17, 'bbayukk', '20250111003031.jpg', '2025-01-11', 'en', ''),
(18, 'bbayukk', '20250111003039.jpg', '2025-01-11', 'en', ''),
(19, 'bbayukk', '20250111003047.jpg', '2025-01-11', 'en', ''),
(20, 'bbayukk', '20250111003057.jpg', '2025-01-11', 'en', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`, `foto_profil`) VALUES
(0, 'en', 'f29b38f160f87ae86df31cee1982066f', '20250111002037.jpg', 's.jpg'),
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
