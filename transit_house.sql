-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 12:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transit_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `info_unit`
--

CREATE TABLE `info_unit` (
  `Id_Zone` varchar(100) NOT NULL,
  `Nama_Zone` varchar(100) NOT NULL,
  `Kamar_Tidur` int(11) DEFAULT NULL,
  `Toilet` int(11) DEFAULT NULL,
  `Type` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Luas_Bangunan` int(100) NOT NULL,
  `Luas_Tanah` int(100) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_unit`
--

INSERT INTO `info_unit` (`Id_Zone`, `Nama_Zone`, `Kamar_Tidur`, `Toilet`, `Type`, `Status`, `Luas_Bangunan`, `Luas_Tanah`, `Image`) VALUES
('A1', 'Zone A1', 5, 3, '80/100', 'Terjual', 380, 500, '647a672dda659.jpeg'),
('A10', 'Zone A10', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A11', 'Zone A11', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A12', 'Zone A12', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A13', 'Zone A13', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A14', 'Zone A14', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A15', 'Zone A15', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A16', 'Zone A16', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A17', 'Zone A17', 0, 0, 'Unit A', 'Sold', 0, 0, ''),
('A18', 'Zone A18', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A19', 'Zone A19', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A2', 'Zone A2', 4, 3, 'Unit A', 'Terjual', 310, 400, ''),
('A20', 'Zone A20', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A21', 'Zone A21', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A22', 'Zone A22', 0, 0, 'Unit A', 'Terjual', 0, 0, ''),
('A3', 'Zone A3', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A4', 'Zone A4', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A5', 'Zone A5', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A6', 'Zone A6', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A7', 'Zone A7', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A8', 'Zone A8', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('A9', 'Zone A9', NULL, NULL, 'Unit A', '', 0, 0, '1.png'),
('B1', 'Zone B1', 3, 2, 'Terjual', 'Terjual', 230, 180, ''),
('B10', 'Zone B10', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B11', 'Zone B11', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B12', 'Zone B12', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B13', 'Zone B13', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B14', 'Zone B14', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B15', 'Zone B15', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B16', 'Zone B16', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B17', 'Zone B17', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B18', 'Zone B18', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B19', 'Zone B19', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B2', 'Zone B2', 3, 2, 'Unit B', 'Siap Huni', 280, 350, ''),
('B20', 'Zone B20', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B21', 'Zone B21', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B22', 'Zone B22', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B23', 'Zone B23', 0, 0, 'Unit B', 'Terjual', 0, 0, ''),
('B24', 'Zone B24', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B3', 'Zone B3', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B4', 'Zone B4', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B5', 'Zone B5', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B6', 'Zone B6', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B7', 'Zone B7', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B8', 'Zone B8', NULL, NULL, 'Unit B', '', 0, 0, '1.png'),
('B9', 'Zone B9', 3, 2, 'Siap Huni', 'Terjual', 280, 350, ''),
('C1', 'Zone C1', 2, 2, 'Unit C', 'Jual', 100, 150, ''),
('C2', 'Zone C2', 3, 2, 'Unit C', 'Jual', 230, 280, '647a6b5fc915e.jpg'),
('D1', 'Zone D1', NULL, NULL, 'Unit D', '', 0, 0, '1.png'),
('D2', 'Zone D2', NULL, NULL, 'Unit D', '', 10000, 8900, '1.png'),
('D3', 'Zone D3', 0, 0, 'Unit D', 'Terjual', 0, 0, ''),
('D4', 'Zone D4', 0, 0, 'Unit D', 'Terjual', 0, 0, ''),
('GZBO', 'Gazebo', 0, 0, 'Gazebo', 'Terjual', 40, 70, '647a6c7125b3b.jpg'),
('Id_Zona', 'Name_Zona', NULL, NULL, 'Type', 'Status', 0, 0, 'Image'),
('JLN01', 'Jalan', NULL, NULL, 'Jalan', '', 13, 12000, '1.png'),
('JLNUTM', 'Jalan Utam', NULL, NULL, 'Jalan', '', 0, 0, '1.png'),
('MSHLA', 'Mushola', 0, 5, 'Mushola', 'Publib', 120, 200, '647a6a60a903a.jpg'),
('PSINF', 'Pusat Info', 0, 8, 'Pusat Info', 'Private', 700, 1000, '647a6b0af173a.jpg'),
('R1', 'Ruko', 1, 2, 'Ruko', 'Jual / Sewa', 230, 260, '647a6b9d2f29b.jpg'),
('SCRT', 'Security', 0, 1, 'Ruko', 'Private', 80, 100, '647a6aaac2f20.jpg'),
('TMN1', 'Taman 1', NULL, NULL, 'Industri', '', 10900, 9000, '1.png'),
('TMN2', 'Taman 2', NULL, NULL, 'Taman', '', 0, 0, '1.png'),
('TMN3', 'Taman 3', NULL, NULL, 'Taman', '', 0, 0, '1.png'),
('TMN4', 'Taman 4', NULL, NULL, 'Taman', '', 0, 0, '1.png'),
('TMN5', 'Taman 5', NULL, NULL, 'Taman', '', 0, 0, '1.png'),
('TMN6', 'Taman 6', NULL, NULL, 'Taman', '', 0, 0, '1.png'),
('TMN7-A', 'Taman 7-A', NULL, NULL, 'Taman', '', 0, 0, '1.png'),
('TMN7-B', 'Taman 7-B', NULL, NULL, 'Taman', '', 0, 0, '1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_unit`
--
ALTER TABLE `info_unit`
  ADD PRIMARY KEY (`Id_Zone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
