-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 06:44 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdpo`
--

CREATE TABLE `cdpo` (
  `id` int(10) NOT NULL,
  `awc_name` varchar(30) DEFAULT NULL,
  `village_name` varchar(30) DEFAULT NULL,
  `sector_name` varchar(30) DEFAULT NULL,
  `project_name` varchar(30) DEFAULT NULL,
  `district_name` varchar(30) DEFAULT NULL,
  `beneficiary_name` varchar(40) DEFAULT NULL,
  `wife_daughter_of` varchar(40) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(30) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `caste` varchar(20) DEFAULT NULL,
  `pvtg` varchar(20) DEFAULT NULL,
  `community` varchar(20) DEFAULT NULL,
  `person_disability` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `no_of_live_birth` varchar(10) DEFAULT NULL,
  `date_regd` date DEFAULT NULL,
  `lmp_date` date DEFAULT NULL,
  `edd_date` date DEFAULT NULL,
  `scheme_regd_date` date DEFAULT NULL,
  `signature_thumb` varchar(255) DEFAULT NULL,
  `husband_father_signature` varchar(255) DEFAULT NULL,
  `bank_name` varchar(30) DEFAULT NULL,
  `branch_name` varchar(30) DEFAULT NULL,
  `ifsc_code` varchar(15) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `mct_rch_no` varchar(20) DEFAULT NULL,
  `photo_mct_rch` varchar(255) DEFAULT NULL,
  `aadhar_no` varchar(15) DEFAULT NULL,
  `photo_aadhar` varchar(255) DEFAULT NULL,
  `beneficiary_photo` varchar(255) DEFAULT NULL,
  `status` int(4) DEFAULT '1' COMMENT '1 -> True 0 -> False',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdpo`
--

INSERT INTO `cdpo` (`id`, `awc_name`, `village_name`, `sector_name`, `project_name`, `district_name`, `beneficiary_name`, `wife_daughter_of`, `address`, `mobile_no`, `email_id`, `caste`, `pvtg`, `community`, `person_disability`, `date_of_birth`, `age`, `no_of_live_birth`, `date_regd`, `lmp_date`, `edd_date`, `scheme_regd_date`, `signature_thumb`, `husband_father_signature`, `bank_name`, `branch_name`, `ifsc_code`, `account_no`, `mct_rch_no`, `photo_mct_rch`, `aadhar_no`, `photo_aadhar`, `beneficiary_photo`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'awc3', 'village2', 'village2', 'village4', NULL, '', '', '', '', '', 'village3', NULL, NULL, NULL, NULL, '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '2018-12-30 14:23:13', NULL, NULL),
(2, 'awc3', 'village2', 'village2', 'village4', NULL, '', '', '', '', '', 'village3', NULL, NULL, NULL, NULL, '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '2018-12-30 14:25:06', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdpo`
--
ALTER TABLE `cdpo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cdpo`
--
ALTER TABLE `cdpo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
