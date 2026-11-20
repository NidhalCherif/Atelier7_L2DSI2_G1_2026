-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2026 at 12:45 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce_l2dsi2_g1`
--

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantite` int NOT NULL,
  `date_ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `libelle`, `prix`, `image`, `quantite`, `date_ajout`) VALUES
(1, 'Ordinateur Portable HP 15', 1899, 'https://picsum.photos/seed/hp15/400/300', 12, '2026-11-18'),
(2, 'Souris Sans Fil Logitech M185', 40, 'https://picsum.photos/seed/logitech185/400/300', 50, '2026-11-18'),
(3, 'Clavier Mécanique Redragon K552', 130, 'https://picsum.photos/seed/redragon552/400/300', 20, '2026-11-18'),
(4, 'Écran Samsung 24 pouces', 499, 'https://picsum.photos/seed/samsung24/400/300', 15, '2026-11-18'),
(5, 'SSD Kingston 512 Go', 160, 'https://picsum.photos/seed/kingston512/400/300', 35, '2026-11-18'),
(6, 'Disque Dur Externe Seagate 1 To', 220, 'https://picsum.photos/seed/seagate1tb/400/300', 18, '2026-11-18'),
(7, 'Barrette RAM Corsair 16 Go', 180, 'https://picsum.photos/seed/corsair16gb/400/300', 25, '2026-11-18'),
(8, 'Webcam Full HD Logitech C920', 250, 'https://picsum.photos/seed/logitechc920/400/300', 10, '2026-11-18'),
(9, 'Imprimante HP DeskJet 2710', 299, 'https://picsum.photos/seed/hp2710/400/300', 8, '2026-11-18'),
(10, 'Casque Gamer HyperX Cloud II', 280, 'https://picsum.photos/seed/hyperxcloud2/400/300', 14, '2026-11-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
