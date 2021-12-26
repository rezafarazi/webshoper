-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2019 at 07:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Catch_tbs`
--

CREATE TABLE `Catch_tbs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Value` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `Type` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Image_path` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `City_tsb`
--

CREATE TABLE `City_tsb` (
  `id` int(11) NOT NULL,
  `City` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Commands`
--

CREATE TABLE `Commands` (
  `id` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `PC_s_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Enabled` int(11) NOT NULL,
  `Description` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Image_Store`
--

CREATE TABLE `Image_Store` (
  `id` int(11) NOT NULL,
  `Store_id` int(11) NOT NULL,
  `Image_Path` varchar(1024) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PC_Price_s`
--

CREATE TABLE `PC_Price_s` (
  `id` int(11) NOT NULL,
  `PC_s_id` int(11) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PC_S`
--

CREATE TABLE `PC_S` (
  `id` int(11) NOT NULL,
  `Store_id` int(11) NOT NULL,
  `PC_title` varchar(1024) COLLATE utf8_persian_ci NOT NULL,
  `PC_Description` varchar(4096) COLLATE utf8_persian_ci NOT NULL,
  `PC_Price_Val` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `Enabled` int(11) NOT NULL,
  `Create_Date` int(11) NOT NULL,
  `Cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PC_S_Image`
--

CREATE TABLE `PC_S_Image` (
  `id` int(11) NOT NULL,
  `PC_s_id` int(11) NOT NULL,
  `Image_Path` varchar(2048) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Present_Page`
--

CREATE TABLE `Present_Page` (
  `id` int(11) NOT NULL,
  `Page` varchar(2048) COLLATE utf8_persian_ci NOT NULL,
  `Page_Url` varchar(2048) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `REGIONSS`
--

CREATE TABLE `REGIONSS` (
  `id` int(11) NOT NULL,
  `City_id` int(11) NOT NULL,
  `Region` varchar(4096) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `REGION_ON_Maps` varchar(4096) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Stores`
--

CREATE TABLE `Stores` (
  `id` int(11) NOT NULL,
  `name` varchar(2048) COLLATE utf8_persian_ci NOT NULL,
  `region_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `Enabled` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Admin_Enabled` int(11) NOT NULL,
  `Creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Store_user`
--

CREATE TABLE `Store_user` (
  `id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users_tsb`
--

CREATE TABLE `Users_tsb` (
  `id` int(11) NOT NULL,
  `User_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `Email` varchar(1024) COLLATE utf8_persian_ci NOT NULL,
  `Enabled` int(11) DEFAULT NULL,
  `Type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User_Images`
--

CREATE TABLE `User_Images` (
  `id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Image_Path` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User_type`
--

CREATE TABLE `User_type` (
  `id` int(11) NOT NULL,
  `Type` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ViewS_Page_s`
--

CREATE TABLE `ViewS_Page_s` (
  `id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `PC_s_ID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Catch_tbs`
--
ALTER TABLE `Catch_tbs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `City_tsb`
--
ALTER TABLE `City_tsb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Commands`
--
ALTER TABLE `Commands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PC_s_ID` (`PC_s_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `Image_Store`
--
ALTER TABLE `Image_Store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Store_id` (`Store_id`);

--
-- Indexes for table `PC_Price_s`
--
ALTER TABLE `PC_Price_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PC_s_id` (`PC_s_id`);

--
-- Indexes for table `PC_S`
--
ALTER TABLE `PC_S`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cat_id` (`Cat_id`),
  ADD KEY `Store_id` (`Store_id`);

--
-- Indexes for table `PC_S_Image`
--
ALTER TABLE `PC_S_Image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PC_s_id` (`PC_s_id`);

--
-- Indexes for table `Present_Page`
--
ALTER TABLE `Present_Page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `REGIONSS`
--
ALTER TABLE `REGIONSS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `City_id` (`City_id`);

--
-- Indexes for table `Stores`
--
ALTER TABLE `Stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Category_id` (`Category_id`),
  ADD KEY `Creator_id` (`Creator_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `Store_user`
--
ALTER TABLE `Store_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Store_id` (`Store_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `Users_tsb`
--
ALTER TABLE `Users_tsb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Type_id` (`Type_id`);

--
-- Indexes for table `User_Images`
--
ALTER TABLE `User_Images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `User_type`
--
ALTER TABLE `User_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ViewS_Page_s`
--
ALTER TABLE `ViewS_Page_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PC_s_ID` (`PC_s_ID`),
  ADD KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Catch_tbs`
--
ALTER TABLE `Catch_tbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `City_tsb`
--
ALTER TABLE `City_tsb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Commands`
--
ALTER TABLE `Commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Image_Store`
--
ALTER TABLE `Image_Store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PC_Price_s`
--
ALTER TABLE `PC_Price_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PC_S`
--
ALTER TABLE `PC_S`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PC_S_Image`
--
ALTER TABLE `PC_S_Image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Present_Page`
--
ALTER TABLE `Present_Page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `REGIONSS`
--
ALTER TABLE `REGIONSS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Stores`
--
ALTER TABLE `Stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Store_user`
--
ALTER TABLE `Store_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users_tsb`
--
ALTER TABLE `Users_tsb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User_Images`
--
ALTER TABLE `User_Images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User_type`
--
ALTER TABLE `User_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ViewS_Page_s`
--
ALTER TABLE `ViewS_Page_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Catch_tbs`
--
ALTER TABLE `Catch_tbs`
  ADD CONSTRAINT `Catch_tbs_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `Users_tsb` (`id`);

--
-- Constraints for table `Commands`
--
ALTER TABLE `Commands`
  ADD CONSTRAINT `Commands_ibfk_1` FOREIGN KEY (`PC_s_ID`) REFERENCES `PC_S` (`id`),
  ADD CONSTRAINT `Commands_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `Users_tsb` (`id`);

--
-- Constraints for table `Image_Store`
--
ALTER TABLE `Image_Store`
  ADD CONSTRAINT `Image_Store_ibfk_1` FOREIGN KEY (`Store_id`) REFERENCES `Stores` (`id`);

--
-- Constraints for table `PC_Price_s`
--
ALTER TABLE `PC_Price_s`
  ADD CONSTRAINT `PC_Price_s_ibfk_1` FOREIGN KEY (`PC_s_id`) REFERENCES `PC_S` (`id`);

--
-- Constraints for table `PC_S`
--
ALTER TABLE `PC_S`
  ADD CONSTRAINT `PC_S_ibfk_1` FOREIGN KEY (`Cat_id`) REFERENCES `Category` (`id`),
  ADD CONSTRAINT `PC_S_ibfk_2` FOREIGN KEY (`Store_id`) REFERENCES `Stores` (`id`);

--
-- Constraints for table `PC_S_Image`
--
ALTER TABLE `PC_S_Image`
  ADD CONSTRAINT `PC_S_Image_ibfk_1` FOREIGN KEY (`PC_s_id`) REFERENCES `PC_S` (`id`);

--
-- Constraints for table `REGIONSS`
--
ALTER TABLE `REGIONSS`
  ADD CONSTRAINT `REGIONSS_ibfk_1` FOREIGN KEY (`City_id`) REFERENCES `City_tsb` (`id`);

--
-- Constraints for table `Stores`
--
ALTER TABLE `Stores`
  ADD CONSTRAINT `Stores_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `Category` (`id`),
  ADD CONSTRAINT `Stores_ibfk_2` FOREIGN KEY (`Creator_id`) REFERENCES `Users_tsb` (`id`),
  ADD CONSTRAINT `Stores_ibfk_3` FOREIGN KEY (`region_id`) REFERENCES `REGIONSS` (`id`);

--
-- Constraints for table `Store_user`
--
ALTER TABLE `Store_user`
  ADD CONSTRAINT `Store_user_ibfk_1` FOREIGN KEY (`Store_id`) REFERENCES `Stores` (`id`),
  ADD CONSTRAINT `Store_user_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `Users_tsb` (`id`);

--
-- Constraints for table `Users_tsb`
--
ALTER TABLE `Users_tsb`
  ADD CONSTRAINT `Users_tsb_ibfk_1` FOREIGN KEY (`Type_id`) REFERENCES `User_type` (`id`);

--
-- Constraints for table `User_Images`
--
ALTER TABLE `User_Images`
  ADD CONSTRAINT `User_Images_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `Users_tsb` (`id`);

--
-- Constraints for table `ViewS_Page_s`
--
ALTER TABLE `ViewS_Page_s`
  ADD CONSTRAINT `ViewS_Page_s_ibfk_1` FOREIGN KEY (`PC_s_ID`) REFERENCES `PC_S` (`id`),
  ADD CONSTRAINT `ViewS_Page_s_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `Users_tsb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
