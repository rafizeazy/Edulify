-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 12:59 PM
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
-- Database: `klikbelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mapel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `email`, `nama_lengkap`, `password`, `mapel`) VALUES
(122, 'rafi7@gmail.com', 'Rafi Ahmad', '', 'PKN'),
(123, 'rafi1@gmail.com', 'Rafi Andhika', '', 'PBO'),
(321, 'rafi6@gmail.com', 'Rafi Pratama', '', 'PKN'),
(1234, 'rafi@gmail.com', 'Rafi Akbar', '', 'PBO'),
(12345, 'rafi3@gmail.com', 'Rafi Zaki', '', 'Matematika'),
(123456, 'rafi4@gmail.com', 'Rafi Zidan', '', 'Algoritma'),
(1234567, 'rafi5@gmail.com', 'Rafi ', '', 'Desain Grafis');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `video` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `nama_lengkap`, `mapel`, `video`, `deskripsi`, `kelas`) VALUES
(3, 'Rafi 5', 'Bahasa Inggris', '1733571906_786d77e9934d0c5e0faf.mp4', 'Belajar tentang bahasa inggris pemula', 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-11-23-152326', 'App\\Database\\Migrations\\Users', 'default', 'App', 1732375457, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Rafi Imanullah ', 'rafiimanullah@gmail.com', '$2y$10$tH1gx6bc9huQyHP/6d/1tuX9tOflVoWVnwJBvrsJmuPrFROkoabNG', NULL, NULL, 'user'),
(2, 'dadan islami', 'dadan@gmail.com', '$2y$10$vz6r7KIoEaHfbM45bUU2DOTF6dhxuvuJWVABxPImQ7yfF2xPnVAd2', NULL, NULL, 'user'),
(3, 'satria baja hitam', 'satria@gmail.com', '$2y$10$CZkZCS7YYFPT8B1D66reXeZP3frMlToJhnNrOG1fSfhHQBfUqwvcG', NULL, NULL, 'user'),
(4, 'gintama', 'gintama@gmail.com', '$2y$10$wv4gcr7QClkO1knaxQKEs.FkCeNWOsChWIh6rFPeZTrdGa6cOxio2', NULL, NULL, 'user'),
(5, 'naruto uzumaki', 'nartah@gmail.com', '$2y$10$rkswY3yIbouw9NSDd2ksVONVdU446vu1bNUiwRGpl/v54BzeTu7kW', NULL, NULL, 'user'),
(6, 'testing alert', 'testing@gmail.com', '$2y$10$8LeQHGkFjenI5cmX3bQIYuarXvYU/DWP2/DOC8EkOTwkMXzXTGkhW', NULL, NULL, 'user'),
(7, 'testing', 'testing1@gmail.com', '$2y$10$rkoB/SOCR5/9EyEOoVYeFeJPewibtPVxihelr0QBoe9FWlYe65/1u', NULL, NULL, 'user'),
(8, 'testing', 'testing2@gmail.com', '$2y$10$O4XWRdC.v81i7BamFRg6Be6bKWu2Wk/FV84Z2hOhYU6tZwPeow346', NULL, NULL, 'user'),
(9, 'jajang nurjana', 'jajang@gmail.com', '$2y$10$FpMSVyOwGdlMavrJydyjQ.rRgGpPEx2yQGAuo4bTNBy1d7zS2Jf/u', NULL, NULL, 'user'),
(10, 'asep nurdin', 'asep@gmail.com', '$2y$10$nsm9uX1ryrGUlMsGgRM4WuEqE5h5wiXqcBBMhOtiRADzOtTWd3i.6', NULL, NULL, 'user'),
(11, 'nurdin', 'nurdin@gmail.com', '$2y$10$oVR9/.38b2ekZeqFKR.HLeFc4rLBUpBKnHHZeU4fujdLfVt.JdWv2', NULL, NULL, 'user'),
(12, 'ganteng', 'ganteng@gmail.com', '$2y$10$nQPGF2tO.3Bglm9CzLjoM.9zw6qm5pwSvi3EVarN2FZKbqGBguY7O', NULL, NULL, 'user'),
(13, 'gus miftah m nya apa', 'gusgus@gmail.com', '$2y$10$Ox0sdigsW68Wv8R9k9bSAOyvbfvjtE/Tg3fu7Y5iU32pREhBodgRi', NULL, NULL, 'user'),
(14, 'rafi f nya satu', 'rafi@gmail.com', '$2y$10$.ycU94yW9LfIfao0rucXzui6hDkkO2/Qovg7YzLojKmGVYLlYs7Ii', NULL, NULL, 'user'),
(15, 'tang ting tung', 'triplet@gmail.com', '$2y$10$8Yj/BQONIvbfZ6z9JYKce.6utnoH8hHjfQlo16v7nhcRH2GBbHIfe', NULL, NULL, 'user'),
(17, 'admin ganteng', 'admin@gmail.com', '$2y$10$yCzErzzycKGY23cYpa8B3.f2eyUS2NaWp2MiqcV1CJqV0aKXtPCRy', NULL, NULL, 'admin'),
(18, 'raffi ahmad', 'raffi@gmail.com', '$2y$10$sb1rotOvO7ZHZmNOfjTTvOC4hc1C9KBwtueRLdzql9DxS9KPIHDFK', NULL, NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
