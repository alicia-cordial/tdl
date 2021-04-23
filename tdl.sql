-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2021 at 12:21 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `jonction`
--

CREATE TABLE `jonction` (
  `userstask_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jonction`
--

INSERT INTO `jonction` (`userstask_id`, `user_id`, `task_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(10, 9, 10),
(11, 9, 11),
(12, 9, 12),
(13, 9, 13),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17),
(18, 3, 18),
(19, 3, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `finish` tinyint(4) NOT NULL DEFAULT '0',
  `date_finish` datetime DEFAULT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `finish`, `date_finish`, `date_creation`) VALUES
(1, 'Faire la ToDoList', NULL, 1, '2020-10-27 11:11:06', '2020-10-27 11:07:27'),
(2, 'Fonctionner en Drag & Drop', NULL, 1, '2020-10-27 11:11:05', '2020-10-27 11:07:40'),
(3, 'Dominer le monde', NULL, 0, NULL, '2020-10-27 11:07:51'),
(4, 'S\'occuper du css', NULL, 1, '2020-10-27 11:11:12', '2020-10-27 11:09:27'),
(5, 'Sortir boire un coup apres 21h', NULL, 0, NULL, '2020-10-27 11:09:49'),
(6, 'Demander des vacances a Roxan', NULL, 0, NULL, '2020-10-27 11:10:00'),
(7, 'Maquette du Projet', NULL, 1, '2020-10-27 11:10:59', '2020-10-27 11:10:56'),
(8, 'Commencer One Piece', NULL, 0, NULL, '2020-10-27 11:12:12'),
(9, 'rdv medical', NULL, 1, '2021-04-14 15:34:57', '2021-04-14 15:27:29'),
(10, 'rdv medical 2/02/2020', NULL, 1, '2021-04-15 09:38:27', '2021-04-14 15:28:02'),
(11, 'rdv miou', NULL, 1, '2021-04-15 09:46:50', '2021-04-14 15:29:27'),
(12, 'anniversaire Ichou <3', NULL, 0, NULL, '2021-04-14 15:35:24'),
(13, 'rdv Ra', NULL, 0, NULL, '2021-04-15 09:46:55'),
(14, 'ok', NULL, 1, '2021-04-21 16:22:43', '2021-04-21 16:22:16'),
(15, 'rdv medical', NULL, 1, '2021-04-21 16:37:33', '2021-04-21 16:22:53'),
(16, 'rdv miou', NULL, 1, '2021-04-21 16:37:31', '2021-04-21 16:23:17'),
(17, 'anniv', NULL, 1, '2021-04-21 16:37:35', '2021-04-21 16:25:15'),
(18, 'anniversaire Ichou <3', NULL, 1, '2021-04-21 16:37:38', '2021-04-21 16:27:51'),
(19, 'plus', NULL, 0, NULL, '2021-04-21 16:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'test@test.com', '$2y$10$kM.hQON8sUV.RmjMv9uj1.huUMlaxrKkeh/z1l7LId8ZkFRXiDwoO'),
(2, 'ali', '$2y$10$Ka/bPDxLFHEpBPjJDrPG0eYgCgRtfptFgnYnQsvz4zaFzHdGweG6q'),
(3, 'coco', '$2y$10$CNXWuSUTuUpy/xy/E6Zn2OKzFAAmTfM6pWDF9Zj9aYP/TPLu8zr1e'),
(4, 'mel', '$2y$10$JCHs7z1KhOtcB.jQtt2TcuRL4uIz0/zhhkc7kzPcg23rhC9I73G3m'),
(5, 'rara', '$2y$10$nVCyz35jivS7IijtT.MdtuQBSRayRMZ3aocOHoQraCfGSHszQL9ky'),
(6, 'miou', '$2y$10$bAV3tb7TVCRhf.4RlI1zfeCqils9RguhghiP2HfQp2h2CaXk8fph2'),
(7, 'ichou', '$2y$10$zuWw8eeF95jLobOmZ8WMa.t5RlhJmfiQTuHpoQgs2N/5BBdnadbh2'),
(8, 'rico', '$2y$10$XCDuIwmTiZMWublKalfBAepgyF/x092td2WEoZwbEhthqVPHDXP/K'),
(9, 'may', '$2y$10$EFxZOZh270QuQdNi7h6.1OKStVY2pWohwoQ089PB.pH7CPh7JMrPW'),
(10, 'mimi', '$2y$10$/K/u.//LZ1I2wABEF15PLuM/EgXZCKIXZ.1EabJxRU7MjIy2/lGa.'),
(11, 'lili', '$2y$10$erst.Wy04Ltr.a83RsM6RuHBFEggVTApP5Xri0w6TwH75KiqKML12'),
(12, 'lal', '$2y$10$lvcaaCaouX/56TfJ4Or4iO2bNhr714fkp8RucpNXKL6b4i7W629T2'),
(13, 'lala', '$2y$10$5DvYciXzm8K.vnBDx0Dvveeg1J6em9DwrF1b5AfxSxhCvkRJJFRxG'),
(14, 'c', '$2y$10$8Qw0pkLo0OIi6D9otAktu.VXNoi4/ng9OGD/RmTQAmnSFtTYksKS.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jonction`
--
ALTER TABLE `jonction`
  ADD PRIMARY KEY (`userstask_id`),
  ADD KEY `user` (`user_id`),
  ADD KEY `task` (`task_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `jonction`
--
ALTER TABLE `jonction`
  MODIFY `userstask_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jonction`
--
ALTER TABLE `jonction`
  ADD CONSTRAINT `task` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
