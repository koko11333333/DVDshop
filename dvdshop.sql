-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 02:32 PM
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
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` varchar(4) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `alastname` varchar(50) NOT NULL,
  `amovie` varchar(30) NOT NULL,
  `aage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `amovie`, `aage`) VALUES
('', '', '', '', 0),
('1104', 'mai', 'hmon', 'dodo', 23),
('1105', 'nurse', 'sy', 'mootoonnn', 18),
('1210', 'youngg', 'gu', 'Interstellar', 29),
('1211', 'jazz', 'saga', 'The Dark Knight', 31),
('1212', 'hmum', 'jokmok', 'Inception', 45),
('1213', 'roberto ', 'carlos', 'The Shawshank Redemption', 36),
('1214', 'nice', 'guy', 'Parasite', 32);

-- --------------------------------------------------------

--
-- Table structure for table `actordvd`
--

CREATE TABLE `actordvd` (
  `aid` varchar(20) NOT NULL,
  `dvdid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actordvd`
--

INSERT INTO `actordvd` (`aid`, `dvdid`) VALUES
('1210', '11110'),
('1210', '11111'),
('1212', '11113'),
('1212', '11113'),
('1214', '11112'),
('1214', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `dvdid` varchar(6) NOT NULL,
  `dvdname` varchar(30) NOT NULL,
  `dvdinfomation` varchar(50) NOT NULL,
  `dvdtime` varchar(30) NOT NULL,
  `dvddate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`dvdid`, `dvdname`, `dvdinfomation`, `dvdtime`, `dvddate`) VALUES
('', '', '', '', ''),
('11002', 'neo 2', 'sci-fi', '14:00', '2024-09-05'),
('11003', 'soul', 'drama', '9:00', '2024-09-28'),
('11004', 'tea 3', 'animation', '00:00', '2024-09-13'),
('11005', 'pakapong', 'horror', '05:40', '2024-09-01'),
('11006', 'Obviuse', '11:30', '13:00', '2024-09-04'),
('11007', 'Onepiece', 'OpenWorld', '6:00', '2024-09-12'),
('11110', 'Inception 2', 'Sci-Fi, แอ็คชัน, ระทึกขวัญ', '13:00', '2024-01-11'),
('11111', 'The Shawshank Redemption ', 'ดราม่า', '8:00', '2024-06-04'),
('11112', 'Parasite', 'ดราม่า, ระทึกขวัญ, เสียดสีสังคม', '15:54', '2021-05-21'),
('11113', 'The Dark Knight ', 'แอ็คชัน, อาชญากรรม, ซูเปอร์ฮีโร่', '11:30', '2023-08-17'),
('11114', 'Interstellar ', 'Sci-Fi, ผจญภัย, ดราม่า', '9:00', '2024-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` varchar(4) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
('', '', '', '', 0),
('110', 'john 2', 'mayer', 'LAS', 123457),
('1100', 'tim', 'handson', 'NYC', 25145),
('111', 'james', 'cameron', 'frence', 98765),
('112', 'joe', 'jo', 'space', 2354),
('113', 'hmai', 'thai', 'thailand', 123456),
('114', 'kai', 'jea', 'zoo', 0),
('222', 'ohm', 'myy', 'k4', 23165),
('888', 'new', 'years', 'bangkok', 354987),
('900', 'toon', 'ny', 'cannada', 12354),
('999', 'Kai', 'Toonnn', 'k6', 321465);

-- --------------------------------------------------------

--
-- Table structure for table `memberdvd`
--

CREATE TABLE `memberdvd` (
  `counter` int(11) NOT NULL,
  `mid` varchar(30) NOT NULL,
  `dvdid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberdvd`
--

INSERT INTO `memberdvd` (`counter`, `mid`, `dvdid`) VALUES
(1, '110', '11110'),
(2, '111', '11111'),
(2, '112', '11112'),
(3, '113', '11113'),
(1, '114', '11114');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `actordvd`
--
ALTER TABLE `actordvd`
  ADD KEY `aid` (`aid`),
  ADD KEY `dvdid` (`dvdid`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`dvdid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `memberdvd`
--
ALTER TABLE `memberdvd`
  ADD KEY `mid` (`mid`),
  ADD KEY `dvdid` (`dvdid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
