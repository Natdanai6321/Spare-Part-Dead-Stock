-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 09:11 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swn_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_member`
--

CREATE TABLE `tbl_admin_member` (
  `a_id` int(11) NOT NULL,
  `a_user` varchar(20) NOT NULL,
  `a_pass` varchar(20) NOT NULL,
  `a_nameF` varchar(100) NOT NULL,
  `a_nameL` varchar(100) NOT NULL,
  `a_department` varchar(100) NOT NULL,
  `a_tel` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_member`
--

INSERT INTO `tbl_admin_member` (`a_id`, `a_user`, `a_pass`, `a_nameF`, `a_nameL`, `a_department`, `a_tel`, `datesave`) VALUES
(1, '111', '111', '111', '111', 'Improvement', '111', '2021-06-09 02:51:43'),
(2, 'natdanai', '6321', 'poo', 'poo', 'Improvement', '0856023197', '2021-06-14 08:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_borrow_sparepart`
--

CREATE TABLE `tbl_borrow_sparepart` (
  `B_id` int(11) NOT NULL,
  `B_ItemID` int(11) NOT NULL,
  `B_user` varchar(100) NOT NULL,
  `B_userID` varchar(100) NOT NULL,
  `B_Item_number` varchar(100) NOT NULL,
  `B_Item_name` varchar(100) NOT NULL,
  `B_Mfg` varchar(100) NOT NULL,
  `B_Item_quantity` varchar(100) NOT NULL,
  `B_Status` varchar(100) NOT NULL,
  `date_borrow` date NOT NULL DEFAULT current_timestamp(),
  `date_return` date NOT NULL DEFAULT current_timestamp(),
  `date_return_True` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_borrow_sparepart`
--

INSERT INTO `tbl_borrow_sparepart` (`B_id`, `B_ItemID`, `B_user`, `B_userID`, `B_Item_number`, `B_Item_name`, `B_Mfg`, `B_Item_quantity`, `B_Status`, `date_borrow`, `date_return`, `date_return_True`) VALUES
(15, 1, 'Peeraphonl', 'ST024', 'SGE00SN00259L', 'PLUG FOR VALVE 6013 (BURKERT)', '1', '10', 'Finish', '2021-06-16', '2021-06-16', '2021-06-16'),
(16, 1, 'Peeraphonl', 'ST024', 'SGE00SN00259L', 'PLUG FOR VALVE 6013 (BURKERT)', '1', '10', 'Finish', '2021-06-16', '2021-06-16', '2021-06-16'),
(17, 1, 'peeraphon', 'ST025', 'SGE00SN00259L', 'PLUG FOR VALVE 6013 (BURKERT)', '1', '10', 'Finish', '2021-06-16', '2021-06-18', '2021-06-16'),
(18, 1, 'Peeraphonl', 'ST024', 'SGE00SN00259L', 'PLUG FOR VALVE 6013 (BURKERT)', '1', '10', 'Finish', '2021-06-16', '2021-06-18', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_nameF` varchar(100) NOT NULL,
  `m_nameL` varchar(100) NOT NULL,
  `m_userID` varchar(100) NOT NULL,
  `m_department` varchar(100) NOT NULL,
  `m_tel` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `m_user`, `m_pass`, `m_nameF`, `m_nameL`, `m_userID`, `m_department`, `m_tel`, `datesave`) VALUES
(1, 'peeraphonza21433', '123456', 'Peeraphonl', 'Sayyotl', 'ST024', 'Importmentl', '0981545067l', '2021-06-08 09:50:47'),
(5, 'peeraphon5555', '123456', 'peeraphon', 'sayyot', 'ST025', 'Improvement', '1911111', '2021-06-08 10:49:01'),
(6, 'peeraphon7777', '11111111', 'peeraphon', 'sayyot', '', 'Improvement', '0981545', '2021-06-08 10:51:44'),
(7, 'peeraphon5555777', '123456', 'peeraphon', 'Sayyotl', '', 'Improvement', '098111', '2021-06-08 10:52:32'),
(8, 'peeraphon55556', '123456', 'peeraphon', 'Sayyotl', '', 'Improvement', '0981545', '2021-06-08 10:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spare_part`
--

CREATE TABLE `tbl_spare_part` (
  `Item_ID` int(11) NOT NULL,
  `Item_number` varchar(100) NOT NULL,
  `Item_name` varchar(100) NOT NULL,
  `Item_grop` varchar(100) NOT NULL,
  `Packing_grop` varchar(100) NOT NULL,
  `warehouse` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Mfg_id` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_spare_part`
--

INSERT INTO `tbl_spare_part` (`Item_ID`, `Item_number`, `Item_name`, `Item_grop`, `Packing_grop`, `warehouse`, `Quantity`, `Mfg_id`, `Status`, `datesave`) VALUES
(1, 'SGE00SN00259L', 'PLUG FOR VALVE 6013 (BURKERT)', 'PART', 'PART', 'WriteOff-MFG1', '50', '1', 'Available', '2018-11-16 05:35:30'),
(2, 'SGE00SN00259L', 'PLUG FOR VALVE 6013 (BURKERT)', 'PART', 'PART', 'WriteOff-MFG1', '1', '1', 'Available', '2018-11-16 05:34:50'),
(3, 'SGM00BR00395L', 'ลูกปืน UC 204-012 D1', 'PART', 'PART', 'WriteOff-MFG1', '4', '1', 'Available', '2018-11-16 05:34:50'),
(4, 'SGM00BR00487L', '\"ลูกปืน UCF 208 เพลาDIA.1 1/2\"\"\"', 'PART', 'PART', 'WriteOff-MFG1', '1', '2', 'Available', '2018-11-16 05:34:50'),
(5, 'SGM00BR00531L', 'ลูกปืน 21313E/C3 (SKF)', 'PART', 'PART', 'WriteOff-MFG1', '1', '3', 'Available', '2018-11-16 05:34:50'),
(6, 'SGM00Cv00051W', 'CONVEYOR SHEET INSPECTOR (DWG.UN 002/4)', 'PART', 'PART', 'WriteOff-MFG1', '2', '4', 'Available', '2018-11-16 05:34:50'),
(7, 'SGM00GG00488L', 'เฟืองโซ่ 40-2X60 TB (ดุมโต124MM.)', 'PART', 'PART', 'WriteOff-MFG1', '0', '5', 'Busy', '2018-11-16 05:34:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_member`
--
ALTER TABLE `tbl_admin_member`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_borrow_sparepart`
--
ALTER TABLE `tbl_borrow_sparepart`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_spare_part`
--
ALTER TABLE `tbl_spare_part`
  ADD PRIMARY KEY (`Item_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_member`
--
ALTER TABLE `tbl_admin_member`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_borrow_sparepart`
--
ALTER TABLE `tbl_borrow_sparepart`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_spare_part`
--
ALTER TABLE `tbl_spare_part`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
