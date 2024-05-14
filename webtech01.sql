-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 09:42 AM
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
-- Database: `webtech01`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `house_type` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `comfirm_password` varchar(32) NOT NULL,
  `nid` blob NOT NULL,
  `license` blob NOT NULL,
  `profile_pic_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`ID`, `Name`, `phone`, `username`, `email`, `DOB`, `company_name`, `company_address`, `house_type`, `gender`, `password`, `comfirm_password`, `nid`, `license`, `profile_pic_path`) VALUES
(16, 'Alin Das', 1786950492, 'alin', 'alindas2000@gmail.com', '2024-04-16', 'Alin Real Estate', 'Dawanhat,Chittagoan', 'Selling', 'Male', 'alin', 'alin', '', '', ''),
(17, 'Jahangir Rashid', 1715049317, 'Jahangir', 'Jahangirrashid1965@gmail.com', '1965-06-17', 'J Company', 'Chapai Nawabganj,Rajshahi', 'Selling', 'Male', 'jane', 'jane', '', '', ''),
(18, 'Alamgir Rashid', 1685035185, 'Alamgir', 'alamgirrashid@gmail.com', '2024-04-24', 'Raj Real Estate LTD', 'Banani, Dhaka', 'Selling', 'Male', 'alamgir', 'alamgir', '', '', ''),
(19, 'Raina ', 1784390192, 'Raina', 'raina@gmail.com', '2024-04-05', 'RAJ GROUP', 'Banani,Dhaka', 'Rental', 'Female', 'raina', 'raina', '', '', ''),
(20, 'Salman Farshi', 1897068492, 'salman', 'salman@gmail.com', '2024-04-20', 'Fidbi Real Etate', 'Dawanhat,Chittagoan', 'Selling', 'Male', '1234', '1234', '', '', ''),
(23, ' Mujahid', 1796059406, 'mujahid', 'asmaulhusna@gmail.com', '2024-04-02', 'AR GROUP', 'Rayerbag,Dhaka,bangladesh', 'Rental', 'Male', 'Task2470', 'Task2470', '', '', ''),
(24, 'Mujahid Raj', 1796059406, 'mujahid1', 'mujahidraj65@gmail.com', '2024-05-02', 'Mujahid Real Estate', 'Gulshan 2 , Dhaka', 'Rental', 'Male', 'Task2470', 'Task2470', '', '', ''),
(25, 'Fidbi Hasan', 1621931987, 'fidbihasan1', 'fidbihasan@gmail.com', '2024-04-26', 'Fidbi Group of Real Estate', 'Rayerbag , Dhaka', 'Selling', 'Male', 'Fidbihasan1', 'Fidbihasan1', '', '', ''),
(26, 'Farhanaz Kamrun', 1839504930, 'nishat1', 'farhanazkamrun@gmail.com', '2024-04-26', 'Farhanaz Reaal Estate', 'Chittagong', 'Rental', 'Female', 'Nishat1234', 'Nishat1234', '', '', ''),
(28, 'Alin Das', 1897069123, 'alinchamar1', 'alinchamar@gmail.com', '2024-05-06', 'Alin Group of Chamar', 'Alindada, Kuratoli , Alinerbari', 'Rental', 'Male', 'Alindas0000', 'Alindas123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `pro_add` varchar(60) NOT NULL,
  `mls_no` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `email`, `phn_no`, `date`, `time`, `duration`, `pro_add`, `mls_no`) VALUES
('Mujahid Raj', 'mujahidraj65@gmail.com', '01796059406', '2024-05-01', '21:50:00.000000', '2', 'Kuratoli', '1234'),
('Mujahid Raj', 'mujahidraj65@gmail.com', '01796059406', '2024-04-24', '21:52:00.000000', '2', 'Kuratoli', '1234'),
(' Mujahid', 'mujahidraj65@gmail.com', '01796059406', '2024-04-26', '21:53:00.000000', '2', 'Kuratoli', '1234'),
(' Mujahid', 'mujahidraj65@gmail.com', '01796059406', '2024-04-26', '21:53:00.000000', '2', 'Kuratoli', '1234'),
(' Mujahid', 'mujahidraj65@gmail.com', '01796059406', '2024-04-26', '21:53:00.000000', '2', 'Kuratoli', '1234'),
(' Mujahid', 'mujahidraj65@gmail.com', '01796059406', '2024-04-26', '21:53:00.000000', '2', 'Kuratoli', '1234'),
(' Mujahid', 'mujahidraj65@gmail.com', '01796059406', '2024-04-26', '21:53:00.000000', '2', 'Kuratoli', '1234'),
('Mujahid Raj', 'mujahidraj65@gmail.com', '01796059406', '2024-04-26', '22:22:00.000000', '2', 'Kuratoli', '1234'),
('Mujahid Rashid Raj', 'mujahidraj65@gmail.com', '01796059406', '2024-04-24', '22:37:00.000000', '2', 'Kuratoli', '1234'),
('Mujahid Rashid Raj', 'muajhidraj2000@gmail.com', '01641621584', '2024-04-24', '22:38:00.000000', '2', 'Gulshan', '1234'),
('Fidbi Hasan', 'fidbihasan@gmail.com', '01631921987', '2024-04-01', '12:04:00.000000', '1hr', 'rayerbag', '1234'),
('', '', '', '0000-00-00', '00:00:00.000000', '', '', ''),
('', '', '', '0000-00-00', '00:00:00.000000', '', '', ''),
('Asmaul Husna Mayad', 'asmaulhusna@gmail.com', '017960594', '2024-04-30', '11:18:00.000000', '1hr', 'Gulshan', '21'),
('Ashfaq ', 'ashfaq@gmail.com', '01759483958', '2024-05-15', '17:32:00.000000', '2hr', 'Kazubari , hatirbal , Kashidewa,Alinnogor', '12345'),
('Mujahid Raj Khan', 'ashfaq@gmail.com', '12345678900', '2024-05-08', '14:41:00.000000', '2hr', 'Kazubari , hatirbal , Kashidewa,Alinnogor', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `phone` int(60) NOT NULL,
  `username` varchar(77) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `confirm_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `Name`, `phone`, `username`, `email`, `DOB`, `gender`, `password`, `confirm_password`) VALUES
(7, 'Mujahid Raj', 1796059406, 'mujahidraj65', 'mujahidraj65@gmail.com', '2000-10-18', 'male', 'Task24700', 'helloworld'),
(8, 'Asmaul Husna Mayad', 1776461482, 'mayadhusna', 'asmaulhusna@gmail.com', '2001-01-05', 'female', '4321', 'mayadhusna'),
(9, 'Alin Das', 1745028419, 'alindas2000', 'alindas2000@gmail.com', '2000-02-11', 'male', 'alin', 'alin'),
(10, 'Prappo Sarker', 1960593719, 'prapposarker', 'prapposarker@gmail.com', '2024-03-07', 'male', 'prappo', 'prappo'),
(11, 'Nilufa Yesmin', 1796059406, 'nilufa', 'nilufayesmin@gmail.com', '2006-05-20', 'female', '1234', '1234'),
(12, 'Jinnat Parveen ', 1747868543, 'jinnat', 'jinnatparveen@gmail.com', '1970-10-31', 'female', 'Jahangir', 'Jahangir'),
(13, 'Shanto Khan', 1796053209, 'shanto', 'shantokhan@gmail.com', '2024-04-09', 'male', '1234', '1234'),
(26, 'Moizuddin Mohammad Mujahid Rashid', 1796059406, 'mujahidraj1', 'mujahidraj65@gmail.com', '2024-04-05', 'male', 'Task24700', 'Task2470'),
(27, 'Mujahid Raj Khan', 1796059406, 'mujahid1', 'mujahidraj65@gmail.com', '2024-05-10', '', 'Task24700', 'Task2470'),
(28, '', 1631921987, 'fidbihasan01', 'fidbihasan01@gmail.com', '0000-00-00', '', 'Fidbihasan123', 'Fidbihasan123'),
(32, 'Fidbi Hasan', 1473829338, 'fidbihasan24', 'fidbi1@gmail.com', '1990-01-01', 'Male', 'Task2470', 'Task2470'),
(33, 'Mujahid Rashid', 2147483647, 'fidbihasan03', 'fh@gmail.com', '2024-05-24', '', 'Task2470', 'Task2470'),
(34, 'Ashfaq ', 1906200306, 'Ashfaq2000', 'ashfaq@gmail.com', '2002-06-13', 'male', 'Ashfaq1234567890', 'Ashfaq1234');

-- --------------------------------------------------------

--
-- Table structure for table `masseges`
--

CREATE TABLE `masseges` (
  `id` int(110) NOT NULL,
  `sender` varchar(110) NOT NULL,
  `messages` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `neighbour`
--

CREATE TABLE `neighbour` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `neighbour`
--

INSERT INTO `neighbour` (`id`, `name`, `address`, `occupation`, `age`) VALUES
(1, 'Salman Farshi', 'Parbotipur', 'Pagla', '30'),
(2, 'Prappo ', 'Dinajpur', 'Chur', '23');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `ID` int(50) NOT NULL,
  `properties_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `room` int(50) NOT NULL,
  `price` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `properties_name`, `type`, `location`, `size`, `room`, `price`) VALUES
(13, 'Fidbi Home', 'Mansion', 'California, USA', '122500sqft', 2000, '15000000000'),
(14, 'Raina Villa ', 'Apartmental', 'Uposohor, Rajshahi', '2200sqft', 400, '14000000'),
(15, 'Santo Villa', 'Apartmental', 'Behind city college, Rajarhata,Rajshahi', '2400sqft', 4, '16000000'),
(16, 'Raj villa', 'Apartmental', 'Beside Paramount school , Vodra, Rajshahi', '3000sqft', 5, '32000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `masseges`
--
ALTER TABLE `masseges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neighbour`
--
ALTER TABLE `neighbour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `masseges`
--
ALTER TABLE `masseges`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neighbour`
--
ALTER TABLE `neighbour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
