-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2024 at 08:14 AM
-- Server version: 8.0.37
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuwarane_zwarra`
--

-- --------------------------------------------------------

--
-- Table structure for table `alldoctors`
--

CREATE TABLE `alldoctors` (
  `id` bigint UNSIGNED NOT NULL,
  `Languages` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Degree` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Department` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Med_reg_expiry` date DEFAULT NULL,
  `Med_reg_no` int DEFAULT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Licenceno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Yearofexp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Medicalspec` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Position` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alldoctors`
--

INSERT INTO `alldoctors` (`id`, `Languages`, `Degree`, `Department`, `Med_reg_expiry`, `Med_reg_no`, `Logo`, `Enname`, `Arname`, `email`, `password`, `Licenceno`, `Phone`, `Yearofexp`, `Medicalspec`, `Position`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '/uploads/c1.png', 'purveshre', 'patel', 'patel@g.com', '$2y$10$25dv.53s1r4WoOF1rbwfMOL6xo5FE0ObmmsUyDJnOS3Vgnvhc/ilS', '1233123', '23131231', '2', 'msss', 'Full body', 0, '2024-04-02 12:39:16', '2024-04-02 07:09:16', '2024-04-02 22:52:48'),
(2, NULL, NULL, NULL, NULL, NULL, '/uploads/ss4.png', 'rajesh', 'patel', 'rajeshr@biztechnosys.com', '3423442342344', '2323424', '2312311221', '2', NULL, 'Cardiology', 0, '2024-04-12 06:09:45', '2024-04-12 00:39:45', '2024-04-12 00:39:45'),
(4, NULL, NULL, NULL, NULL, NULL, '/uploads/accountcrm1.png', 'kishan', 'patel', 'purveshrss@biztechnosys.com', 'kojko', 'dasdasdas', '231233', '2', 'medical', 'Cardiology', 0, '2024-05-21 06:10:17', '2024-05-21 00:40:17', '2024-05-21 00:40:17'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'kishan', 'patel', 'purveshrcsdass@biztechnosys.com', 'kojko', 'dasdasdas', '231233', NULL, 'sa', 'Cardiology', 0, '2024-05-21 06:16:50', '2024-05-21 00:46:50', '2024-05-21 00:46:50'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'kishan', 'patel', 'purveshrsasas@biztechnosys.com', 'kojko', 'dasdasdas', '231233', NULL, 'sasa', 'Cardiology', 0, '2024-05-21 06:18:33', '2024-05-21 00:48:33', '2024-05-21 00:48:33'),
(7, NULL, NULL, NULL, NULL, NULL, '/uploads/c1.png', 'kishan', 'patel', 'purveshrsJOJs@biztechnosys.com', 'kojko', 'dasdasdas', '231233', '2', 'KOK', 'Cardiology', 0, '2024-05-21 06:23:10', '2024-05-21 00:53:10', '2024-05-21 00:53:10'),
(8, NULL, NULL, NULL, NULL, NULL, '/uploads/adharbill.png', 'kishan', 'patel', 'purveshrss@biztechnosys.comKOK', 'kojko', 'dasdasdas', '231233', '2', 'AasA', 'Cardiology', 0, '2024-05-21 06:23:55', '2024-05-21 00:53:55', '2024-05-21 00:53:55'),
(9, NULL, NULL, NULL, NULL, NULL, '/uploads/adharbill.png', 'purveshr', 'SXDD', 'purveshrss@biztechnosys.coASDASm', 'kojko', 'dasdasdas', '231233', '2', NULL, 'Cardiology', 0, '2024-05-21 06:25:20', '2024-05-21 00:55:20', '2024-05-21 00:55:20'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, 'raju', NULL, 'raju@fmal.com', NULL, '2312333123', '3123313131', NULL, NULL, NULL, 0, '2024-05-21 07:25:06', '2024-05-21 01:55:06', '2024-05-21 01:55:06'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, 'patel', 'insta', 'patel@c.com', '$2y$10$eq0C2ENbeOdKIXvEjXw/xOUil8pZvUuykvjpk.6Ornhb.e7yiEF5a', 'dasdasdas', '03424234234', '2', 'koko', NULL, 1, '2024-06-11 05:26:08', '2024-06-10 23:56:08', '2024-06-10 23:56:12'),
(12, NULL, NULL, NULL, NULL, NULL, '/uploads/WOPA160517_D056-resized.jpg', 'test', 'test', 'test@biztechnosys.com', '$2y$10$sWXdKvc0O0Rk.YWZKnEv2ulIwbxlCE2Z3tJU.8SHTWXY2YAkN.ebS', 'C6FkwfXZSI', '7716342598', 'pMLYIKyhAx', 'XADJAMW1dX', 'abc', 0, '2024-09-11 08:43:08', '2024-09-11 13:43:08', '2024-09-11 13:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` bigint UNSIGNED NOT NULL,
  `Firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `City` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` bigint UNSIGNED NOT NULL,
  `record_id` bigint UNSIGNED DEFAULT NULL,
  `filename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `record_id`, `filename`, `file_path`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(59, 9, 'ss1.png', '/uploads/ss1.png', '2024-05-21 06:41:04', '2024-05-21 01:11:04', '2024-05-21 01:11:04'),
(55, 2, 'ss15.png', '/uploads/ss15.png', '2024-05-21 05:11:38', '2024-05-20 23:41:38', '2024-05-20 23:41:38'),
(54, 2, 'ss14.png', '/uploads/ss14.png', '2024-05-21 05:11:38', '2024-05-20 23:41:38', '2024-05-20 23:41:38'),
(60, 12, 'WOPA160517_D056-resized.jpg', '/uploads/WOPA160517_D056-resized.jpg', '2024-09-11 08:43:08', '2024-09-11 13:43:08', '2024-09-11 13:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `bankinginfo`
--

CREATE TABLE `bankinginfo` (
  `id` bigint UNSIGNED NOT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Accountname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Accountnumber` int DEFAULT NULL,
  `Bankname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ibannumber` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Doctor` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Serviceprovider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Servicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Healthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankinginfo`
--

INSERT INTO `bankinginfo` (`id`, `Logo`, `Name`, `Phone`, `Email`, `Address`, `Accountname`, `Accountnumber`, `Bankname`, `Ibannumber`, `Doctor`, `Serviceprovider`, `Servicename`, `Type`, `Status`, `Healthcare`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'Purvesh patel', 912333322, 'axis', '4234234', '11', NULL, NULL, NULL, NULL, '10', '2024-06-10 12:42:07', '2024-06-10 07:12:07', '2024-06-10 07:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `Patientid` int DEFAULT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Doctor` int DEFAULT NULL,
  `Servicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subservices` json DEFAULT NULL,
  `Qty` int DEFAULT NULL,
  `Username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Created',
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Typeoftest` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Typeofvisit` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Healthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Timeslot` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` decimal(8,2) DEFAULT NULL,
  `Patients` json DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Comments` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Others` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `Patientid`, `Name`, `Address`, `Doctor`, `Servicename`, `Subservices`, `Qty`, `Username`, `Status`, `Phone`, `Email`, `Type`, `Typeoftest`, `Typeofvisit`, `Gender`, `Healthcare`, `Date`, `Timeslot`, `Price`, `Patients`, `Description`, `Comments`, `Others`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(8, 10, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'Dr', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-06-27 11:52:10', '2024-06-27 06:22:09', '2024-06-27 06:22:09'),
(9, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"age\": 30, \"name\": \"Patient A\"}, {\"age\": 25, \"name\": \"Patient B\"}]', 'Routine checkup', NULL, NULL, '2024-07-24 12:27:25', '2024-07-24 17:27:25', '2024-07-24 17:27:25'),
(10, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 2, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-09', '18:27', 200.00, '[{\"id\": 1, \"lname\": \"h\", \"pname\": \"supriya\"}]', NULL, NULL, NULL, '2024-08-03 09:07:17', '2024-08-03 14:07:17', '2024-08-03 14:07:17'),
(11, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Health Check Packages\"', 2, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '17:27', 400.00, '[{\"id\": 1, \"lname\": \"T\", \"pname\": \"Devishree\"}, {\"id\": 2, \"lname\": \"H\", \"pname\": \"supriya\"}]', NULL, NULL, NULL, '2024-08-05 04:49:09', '2024-08-05 09:49:09', '2024-08-05 09:49:09'),
(12, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '16:27', 200.00, '[{\"id\": 1, \"lname\": \"H\", \"pname\": \"Supriya\"}]', NULL, NULL, NULL, '2024-08-05 06:57:24', '2024-08-05 11:57:24', '2024-08-05 11:57:24'),
(13, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '13:27', 200.00, '[{\"Dob\": \"\", \"Type\": \"register\", \"Email\": \"supriya.h@biztechnosys.com\", \"Phone\": \"8296400359\", \"Gender\": \"\", \"Country\": \"\", \"Lastname\": \"H\", \"Password\": \"Sup@123A\", \"Firstname\": \"supriya\", \"Nationalid\": \"\"}]', NULL, NULL, NULL, '2024-08-05 07:25:51', '2024-08-05 12:25:51', '2024-08-05 12:25:51'),
(14, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '16:27', 200.00, '[{\"Dob\": \"05-06-2024\", \"Type\": \"register\", \"Email\": \"shreedhev98@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"h\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345\"}]', NULL, NULL, NULL, '2024-08-05 07:32:13', '2024-08-05 12:32:13', '2024-08-05 12:32:13'),
(15, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '16:27', 400.00, '[{\"Dob\": \"05-06-2024\", \"Type\": \"register\", \"Email\": \"shreedhev98@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"h\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345\"}, {\"id\": 1, \"lname\": \"sree\", \"pname\": \"devi\"}]', NULL, NULL, NULL, '2024-08-05 07:57:08', '2024-08-05 12:57:08', '2024-08-05 12:57:08'),
(16, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '16:27', 400.00, '[{\"Dob\": \"05-07-2024\", \"Type\": \"register\", \"Email\": \"supriya.h@biztechnosys.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"H\", \"Password\": \"Sup@1234\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345678\"}, {\"id\": 1, \"lname\": \"janti\", \"pname\": \"namrata\"}]', NULL, NULL, NULL, '2024-08-05 08:03:17', '2024-08-05 13:03:17', '2024-08-05 13:03:17'),
(17, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '15:27', 200.00, '[{\"Dob\": \"05-06-2024\", \"Type\": \"register\", \"Email\": \"shreedhev98@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"h\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345\"}]', 'routine checkup', NULL, NULL, '2024-08-05 09:04:14', '2024-08-05 14:04:14', '2024-08-05 14:04:14'),
(18, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '15:27', 200.00, '[{\"id\": 1, \"lname\": \"sree\", \"pname\": \"Dev\"}]', NULL, NULL, NULL, '2024-08-05 09:24:56', '2024-08-05 14:24:56', '2024-08-05 14:24:56'),
(19, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Vitamins Package\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '16:27', 200.00, '[{\"id\": 1, \"lname\": \"sree\", \"pname\": \"Dev\"}]', NULL, NULL, NULL, '2024-08-05 09:31:46', '2024-08-05 14:31:46', '2024-08-05 14:31:46'),
(20, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Vitamins Package\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '16:27', 200.00, '[{\"id\": 1, \"lname\": \"sree\", \"pname\": \"Dev\"}]', NULL, NULL, NULL, '2024-08-05 09:50:28', '2024-08-05 14:50:28', '2024-08-05 14:50:28'),
(21, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Vaccination', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '13:27', 400.00, '[{\"Dob\": \"05-07-2024\", \"Type\": \"register\", \"Email\": \"supriya.h@biztechnosys.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"H\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345678\"}, {\"id\": 1, \"lname\": \"H\", \"pname\": \"supriya\"}]', NULL, NULL, NULL, '2024-08-05 10:22:02', '2024-08-05 15:22:02', '2024-08-05 15:22:02'),
(22, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Physiotherapist', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '13:27', 400.00, '[{\"Dob\": \"05-07-2024\", \"Type\": \"register\", \"Email\": \"supriya.h@biztechnosys.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"H\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345678\"}]', NULL, NULL, NULL, '2024-08-05 10:39:28', '2024-08-05 15:39:28', '2024-08-05 15:39:28'),
(23, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Vitamins Package\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-05', '16:27', 200.00, '[{\"Dob\": \"05-06-2024\", \"Type\": \"register\", \"Email\": \"shreedhev98@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"h\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345\"}]', NULL, NULL, NULL, '2024-08-05 11:22:16', '2024-08-05 16:22:16', '2024-08-05 16:22:16'),
(24, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-06', '15:27', 200.00, '[{\"id\": 1, \"lname\": \"k\", \"pname\": \"prashanth\"}]', NULL, NULL, NULL, '2024-08-06 05:35:29', '2024-08-06 10:35:29', '2024-08-06 10:35:29'),
(25, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Fatigue Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-06', '13:27', 200.00, '[{\"Dob\": \"06-07-2024\", \"Type\": \"register\", \"Email\": \"anagha@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"H\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345678899\"}]', NULL, NULL, NULL, '2024-08-06 12:44:42', '2024-08-06 17:44:42', '2024-08-06 17:44:42'),
(26, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Fatigue Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-06', '18:27', 200.00, '[{\"id\": 1, \"lname\": \"K\", \"pname\": \"Vijay\"}]', NULL, NULL, NULL, '2024-08-06 12:45:22', '2024-08-06 17:45:22', '2024-08-06 17:45:22'),
(27, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Fatigue Workup\"', 2, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-06', '16:27', 200.00, '[{\"id\": 1, \"lname\": \"Hen\", \"pname\": \"Loui\"}]', NULL, NULL, NULL, '2024-08-06 13:00:28', '2024-08-06 18:00:28', '2024-08-06 18:00:28'),
(28, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Fatigue Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-07', '14:27', 200.00, '[{\"Dob\": \"07-04-2024\", \"Type\": \"register\", \"Email\": \"hanchinamanisupriya@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"H\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345678\"}]', NULL, NULL, NULL, '2024-08-07 05:31:47', '2024-08-07 10:31:47', '2024-08-07 10:31:47'),
(29, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Fatigue Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-07', '13:27', 200.00, '[{\"Dob\": \"07-07-2024\", \"Type\": \"register\", \"Email\": \"supriya.h@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"H\", \"Password\": \"Supriya@123\", \"Firstname\": \"supriya\", \"Nationalid\": \"12345678\"}]', NULL, NULL, NULL, '2024-08-07 11:23:13', '2024-08-07 16:23:13', '2024-08-07 16:23:13'),
(30, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-07', '13:27', 200.00, '[{\"Dob\": \"07-08-2023\", \"Type\": \"register\", \"Email\": \"vijay@gmail.com\", \"Phone\": \"8056395114\", \"Gender\": \"male\", \"Country\": \"India\", \"Lastname\": \"K\", \"Password\": \"Vijay@123\", \"Firstname\": \"Vijay\", \"Nationalid\": \"234567\"}]', NULL, NULL, NULL, '2024-08-07 14:28:36', '2024-08-07 19:28:36', '2024-08-07 19:28:36'),
(31, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-07', '13:27', 200.00, '[{\"Dob\": \"07-08-2023\", \"Type\": \"register\", \"Email\": \"vijay@gmail.com\", \"Phone\": \"8056395114\", \"Gender\": \"male\", \"Country\": \"India\", \"Lastname\": \"K\", \"Password\": \"Vijay@123\", \"Firstname\": \"Vijay\", \"Nationalid\": \"234567\"}]', NULL, NULL, NULL, '2024-08-07 14:31:11', '2024-08-07 19:31:11', '2024-08-07 19:31:11'),
(32, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Pregnancy Test Serum(BHCG)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-08', '14:27', 200.00, '[{\"Dob\": \"\", \"Type\": \"register\", \"Email\": \"\", \"Phone\": \"8765435678\", \"Gender\": \"\", \"Country\": \"\", \"Lastname\": \"fjj\", \"Password\": \"\", \"Firstname\": \"aaa\", \"Nationalid\": \"\"}]', 'sdfghjk', NULL, NULL, '2024-08-08 09:18:55', '2024-08-08 14:18:55', '2024-08-08 14:18:55'),
(33, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Pregnancy Test Serum(BHCG)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-08', '14:27', 200.00, '[{\"Dob\": \"\", \"Type\": \"register\", \"Email\": \"\", \"Phone\": \"8765435678\", \"Gender\": \"\", \"Country\": \"\", \"Lastname\": \"fjj\", \"Password\": \"\", \"Firstname\": \"aaa\", \"Nationalid\": \"\"}]', 'wertyui', NULL, NULL, '2024-08-08 09:28:28', '2024-08-08 14:28:28', '2024-08-08 14:28:28'),
(34, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Laboratory', '\"Pregnancy Test Serum(BHCG)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-08', '14:27', 200.00, '[{\"Dob\": \"\", \"Type\": \"register\", \"Email\": \"\", \"Phone\": \"8765435678\", \"Gender\": \"\", \"Country\": \"\", \"Lastname\": \"fjj\", \"Password\": \"\", \"Firstname\": \"aaa\", \"Nationalid\": \"\"}]', 'wertyui', NULL, NULL, '2024-08-08 09:28:30', '2024-08-08 14:28:30', '2024-08-08 14:28:30'),
(35, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-08', '13:27', 200.00, '[{\"Dob\": \"08-07-2024\", \"Type\": \"register\", \"Email\": \"hanchinamanisupriya@gmail.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \"hanchinamani\", \"Password\": \"S1234567@a\", \"Firstname\": \"Supriya\", \"Nationalid\": \"1234567\"}]', NULL, NULL, NULL, '2024-08-08 12:18:39', '2024-08-08 17:18:39', '2024-08-08 17:18:39'),
(36, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup, Health Check Packages, CBC (COMPLET BLOOD COUNT)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-09', '14:27', 200.00, '[{\"Dob\": \"\", \"Type\": \"register\", \"Email\": \"\", \"Phone\": \"\", \"Gender\": \"\", \"Country\": \"\", \"Lastname\": \"\", \"Password\": \"\", \"Firstname\": \"\", \"Nationalid\": \"\"}]', 'Description', NULL, NULL, '2024-08-09 06:27:15', '2024-08-09 11:27:15', '2024-08-09 11:27:15'),
(37, NULL, NULL, '21st Cross Road, Paradise Colony, 560078, J P Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup, Health Check Packages\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-09', '14:27', 200.00, '[{\"id\": 1, \"lname\": \"T\", \"pname\": \"Sri\"}]', 'Routine checkup', NULL, NULL, '2024-08-09 19:11:14', '2024-08-10 00:11:14', '2024-08-10 00:11:14'),
(38, NULL, NULL, '21st Cross Road, Paradise Colony, 560078, J P Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup, CBC (COMPLET BLOOD COUNT)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-11', '15:27', 200.00, '[{\"Dob\": \"11-08-1994\", \"Type\": \"register\", \"Email\": \"priya@gmail.com\", \"Phone\": \"9092541181\", \"Gender\": \"female\", \"Country\": \"India\", \"Lastname\": \" S\", \"Password\": \"Priya@123\", \"Firstname\": \"Priya\", \"Nationalid\": \"24546745\"}]', 'Routine checkup', NULL, NULL, '2024-08-11 08:09:54', '2024-08-11 13:09:54', '2024-08-11 13:09:54'),
(39, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-13', '13:27', 200.00, '[{\"Dob\": \"13-07-2024\", \"Type\": \"register\", \"Email\": \"supriyas.h@biztechnosys.com\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"Saudi Arabia\", \"Lastname\": \"H\", \"Firstname\": \"supriya\", \"Nationalid\": \"123456\"}]', NULL, NULL, NULL, '2024-08-13 07:04:06', '2024-08-13 12:04:06', '2024-08-13 12:04:06'),
(40, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-13', '14:27', 800.00, '[\"supriya H\", {\"id\": 1, \"lname\": \"shinde\", \"pname\": \"vaibhavi\"}]', 'Add your text notes here...', NULL, NULL, '2024-08-13 11:13:37', '2024-08-13 16:13:37', '2024-08-13 16:13:37'),
(41, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-13', '14:27', 400.00, '[\"supriya H\", {\"id\": 1, \"lname\": \"shinde\", \"pname\": \"vaibhavi\"}]', NULL, NULL, NULL, '2024-08-13 11:13:37', '2024-08-13 16:13:37', '2024-08-13 16:13:37'),
(42, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup, Health Check Packages, Pregnancy Test Serum(BHCG)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-13', '13:27', 800.00, '[\"supriya H\", {\"id\": 1, \"lname\": \"shinde\", \"pname\": \"vaibhavi\"}]', 'asdghdf', NULL, NULL, '2024-08-13 12:11:36', '2024-08-13 17:11:36', '2024-08-13 17:11:36'),
(43, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup, Health Check Packages, Pregnancy Test Serum(BHCG)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-13', '13:27', 6400.00, '[\"supriya H\"]', NULL, NULL, NULL, '2024-08-13 12:11:48', '2024-08-13 17:11:48', '2024-08-13 17:11:48'),
(44, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"Hair Fall Workup, Health Check Packages, Pregnancy Test Serum(BHCG)\"', 1, NULL, 'Created', NULL, NULL, NULL, NULL, NULL, NULL, 'jitesh', '2024-08-13', '13:27', 12800.00, '[\"supriya H\", {\"id\": 1, \"lname\": \"shinde\", \"pname\": \"vaibhavi\"}]', NULL, NULL, NULL, '2024-08-13 12:12:30', '2024-08-13 17:12:30', '2024-08-13 17:12:30'),
(45, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Indivisual', 'home', 'male', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-20 06:56:39', '2024-08-20 01:26:39', '2024-08-20 01:26:39'),
(46, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-20 08:43:46', '2024-08-20 13:43:46', '2024-08-20 13:43:46'),
(47, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 10:43:14', '2024-08-21 15:43:14', '2024-08-21 15:43:14'),
(48, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 11:12:17', '2024-08-21 16:12:17', '2024-08-21 16:12:17'),
(49, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 11:22:45', '2024-08-21 16:22:45', '2024-08-21 16:22:45'),
(50, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Email\": \"p@g.com\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 11:23:21', '2024-08-21 16:23:21', '2024-08-21 16:23:21'),
(51, NULL, NULL, 'makkah', NULL, 'General Checkup', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Age\": \"22\", \"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 11:24:00', '2024-08-21 16:24:00', '2024-08-21 16:24:00'),
(52, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 12:59:51', '2024-08-21 17:59:51', '2024-08-21 17:59:51'),
(53, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 13:07:37', '2024-08-21 18:07:37', '2024-08-21 18:07:37'),
(54, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 13:11:12', '2024-08-21 18:11:12', '2024-08-21 18:11:12'),
(55, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 18:39:42', '2024-08-21 23:39:42', '2024-08-21 23:39:42'),
(56, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 18:41:17', '2024-08-21 23:41:17', '2024-08-21 23:41:17'),
(57, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 18:41:33', '2024-08-21 23:41:33', '2024-08-21 23:41:33'),
(58, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 19:30:25', '2024-08-22 00:30:25', '2024-08-22 00:30:25'),
(59, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'male', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 20:06:07', '2024-08-22 01:06:07', '2024-08-22 01:06:07'),
(60, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 20:06:19', '2024-08-22 01:06:19', '2024-08-22 01:06:19'),
(61, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 20:08:37', '2024-08-22 01:08:37', '2024-08-22 01:08:37'),
(62, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 20:09:17', '2024-08-22 01:09:17', '2024-08-22 01:09:17'),
(63, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Home visit', 'Female', 'jitesh', '2024-08-21', '14:27', 200.00, '[{\"Dob\": \"2000-11-20\", \"Phone\": \"9092541181\", \"Gender\": \"female\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Devishree\"}]', 'iqama', NULL, NULL, '2024-08-21 20:10:13', '2024-08-22 01:10:13', '2024-08-22 01:10:13'),
(64, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Home visit', 'Female', 'jitesh', '2024-08-21', '14:27', 200.00, '[{\"Dob\": \"2000-11-20\", \"Phone\": \"9092541181\", \"Gender\": \"female\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Devishree\"}]', 'Iqama residence examination', NULL, NULL, '2024-08-21 20:18:32', '2024-08-22 01:18:32', '2024-08-22 01:18:32'),
(65, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0}]\"', 8, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '15:27', 400.00, '[{\"Dob\": \"2024-08-13\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}, \"\"]', 'asdfghjk', NULL, NULL, '2024-08-21 20:21:39', '2024-08-22 01:21:39', '2024-08-22 01:21:39'),
(66, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Home visit', 'Female', 'jitesh', '2024-08-21', '14:27', 200.00, '[{\"Dob\": \"2000-11-20\", \"Phone\": \"9092541181\", \"Gender\": \"female\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Devishree\"}]', 'sdfsfs', NULL, NULL, '2024-08-21 20:27:27', '2024-08-22 01:27:27', '2024-08-22 01:27:27'),
(67, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 16, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '13:27', 400.00, '[{\"Dob\": \"2024-08-30\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}, \"\"]', 'asdfgh', NULL, NULL, '2024-08-21 20:30:37', '2024-08-22 01:30:37', '2024-08-22 01:30:37'),
(68, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Pregnancy Test Serum(BHCG)\\\",\\\"Vitamins Package\\\"]\"', 32, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-23\", \"Phone\": \"8056395114\", \"Gender\": \"female\", \"Lastname\": \"shinde\", \"Firstname\": \"vaibhavi\"}]', 'qwerty', NULL, NULL, '2024-08-21 20:34:40', '2024-08-22 01:34:40', '2024-08-22 01:34:40'),
(69, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Home visit', 'Female', 'jitesh', '2024-08-21', '14:27', 200.00, '[{\"Dob\": \"2000-11-20\", \"Phone\": \"9092541181\", \"Gender\": \"female\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Devishree\"}]', 'sdfzd', NULL, NULL, '2024-08-21 20:35:35', '2024-08-22 01:35:35', '2024-08-22 01:35:35'),
(70, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Home visit', 'Female', 'jitesh', '2024-08-21', '14:27', 200.00, '[{\"Dob\": \"1999-11-01\", \"Phone\": \"8056395114\", \"Gender\": \"female\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Devishree\"}]', 'jahdja', NULL, NULL, '2024-08-21 20:44:34', '2024-08-22 01:44:34', '2024-08-22 01:44:34'),
(71, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Home visit', 'Female', 'jitesh', '2024-08-21', '14:27', 200.00, '[{\"Dob\": \"1999-11-09\", \"Phone\": \"9089898751\", \"Gender\": \"female\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Devishree\"}]', '4569', NULL, NULL, '2024-08-21 20:58:31', '2024-08-22 01:58:31', '2024-08-22 01:58:31'),
(72, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 64, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '16:27', 400.00, '[{\"Dob\": \"2024-08-20\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}, \"\"]', 'sdf', NULL, NULL, '2024-08-21 21:11:42', '2024-08-22 02:11:42', '2024-08-22 02:11:42'),
(73, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Home visit', 'Female', 'jitesh', '2024-08-21', '14:27', 200.00, '[{\"Dob\": \"1999-11-09\", \"Phone\": \"9089898751\", \"Gender\": \"female\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Devishree\"}]', 'guyiui', NULL, NULL, '2024-08-21 21:13:33', '2024-08-22 02:13:33', '2024-08-22 02:13:33'),
(74, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 128, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '14:27', 400.00, '[{\"Dob\": \"2024-08-13\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}, \"\"]', 'asdfghj', NULL, NULL, '2024-08-21 21:18:28', '2024-08-22 02:18:28', '2024-08-22 02:18:28'),
(75, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 21:23:14', '2024-08-22 02:23:14', '2024-08-22 02:23:14'),
(76, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-21 21:23:15', '2024-08-22 02:23:15', '2024-08-22 02:23:15'),
(77, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 256, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '14:27', 400.00, '[{\"Dob\": \"2024-08-20\", \"Phone\": \"9894943298\", \"Gender\": \"female\", \"Lastname\": \"S\", \"Firstname\": \"Dev\"}, \"\"]', 'sdfghj', NULL, NULL, '2024-08-21 21:29:06', '2024-08-22 02:29:06', '2024-08-22 02:29:06'),
(78, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Home visit', 'Female', 'jitesh', '2024-08-21', '15:27', 400.00, '[{\"Dob\": \"2000-10-22\", \"Phone\": \"9024904923\", \"Gender\": \"male\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Dev\"}, \"\"]', 'rfdsfds', NULL, NULL, '2024-08-21 21:37:47', '2024-08-22 02:37:47', '2024-08-22 02:37:47'),
(79, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 4, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Home visit', 'Female', 'jitesh', '2024-08-21', '15:27', 800.00, '[{\"Dob\": \"2000-10-22\", \"Phone\": \"9024904923\", \"Gender\": \"male\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Dev\"}, \"\"]', 'rfdsfds', NULL, NULL, '2024-08-21 21:49:28', '2024-08-22 02:49:28', '2024-08-22 02:49:28'),
(80, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0},{\\\"name\\\":\\\"driver\'s licennse examination\\\",\\\"price\\\":0}]\"', 8, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Home visit', 'Female', 'jitesh', '2024-08-21', '15:27', 1600.00, '[{\"Dob\": \"2000-10-22\", \"Phone\": \"9024904923\", \"Gender\": \"male\", \"Lastname\": \"Tamilvanan\", \"Firstname\": \"Dev\"}, \"\"]', 'rfdsfds', NULL, NULL, '2024-08-21 21:49:31', '2024-08-22 02:49:31', '2024-08-22 02:49:31'),
(81, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 512, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '14:27', 800.00, '[\"\", {\"Dob\": \"2024-07-29\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', NULL, NULL, NULL, '2024-08-21 21:50:38', '2024-08-22 02:50:38', '2024-08-22 02:50:38'),
(82, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 1024, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, NULL, 'jitesh', '2024-08-21', '14:27', 800.00, '[{\"Dob\": \"2024-07-29\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', NULL, NULL, NULL, '2024-08-21 21:55:46', '2024-08-22 02:55:46', '2024-08-22 02:55:46'),
(83, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Female', 'jitesh', '2024-08-21', '14:27', 400.00, '[{\"Dob\": \"1998-11-01\", \"Phone\": \"9834938342\", \"Gender\": \"male\", \"Lastname\": \"K\", \"Firstname\": \"Vijay\"}, \"\"]', 'sdfgh', NULL, NULL, '2024-08-21 21:57:30', '2024-08-22 02:57:30', '2024-08-22 02:57:30'),
(84, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0}]\"', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Female', 'jitesh', '2024-08-21', '14:27', 800.00, '[{\"Dob\": \"1998-11-01\", \"Phone\": \"9834938342\", \"Gender\": \"male\", \"Lastname\": \"K\", \"Firstname\": \"Vijay\"}, \"\"]', 'sdfgh', NULL, NULL, '2024-08-21 22:03:54', '2024-08-22 03:03:54', '2024-08-22 03:03:54'),
(85, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0}]\"', 4, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Female', 'jitesh', '2024-08-21', '14:27', 1600.00, '[{\"Dob\": \"1998-11-01\", \"Phone\": \"9834938342\", \"Gender\": \"male\", \"Lastname\": \"K\", \"Firstname\": \"Vijay\"}, \"\"]', 'sdfgh', NULL, NULL, '2024-08-21 22:08:37', '2024-08-22 03:08:37', '2024-08-22 03:08:37'),
(86, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0}]\"', 8, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Female', 'jitesh', '2024-08-21', '14:27', 1600.00, '[{\"Dob\": \"1999-09-04\", \"Phone\": \"7823293842\", \"Gender\": \"male\", \"Lastname\": \"K\", \"Firstname\": \"Vijay\"}]', 'sdfgh', NULL, NULL, '2024-08-21 22:13:56', '2024-08-22 03:13:56', '2024-08-22 03:13:56'),
(87, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\",\\\"price\\\":0}]\"', 8, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Female', 'jitesh', '2024-08-21', '14:27', 1600.00, '[{\"Dob\": \"1999-09-04\", \"Phone\": \"7823293842\", \"Gender\": \"male\", \"Lastname\": \"K\", \"Firstname\": \"Vijay\"}]', 'askskj', NULL, NULL, '2024-08-21 22:15:13', '2024-08-22 03:15:13', '2024-08-22 03:15:13'),
(88, NULL, NULL, 'Christ School Road, Bhavani Nagar, 560029, Sadduguntepalya, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 1024, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-21', '16:27', 400.00, '[{\"Dob\": \"2024-09-06\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"H\", \"Firstname\": \"ghjk\"}, \"\"]', 'asdfgh', NULL, NULL, '2024-08-21 22:26:24', '2024-08-22 03:26:24', '2024-08-22 03:26:24'),
(89, NULL, NULL, 'Mysore Road, Telecom Colony, 560026, Banashankari, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 8, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Female', 'jitesh', '2024-08-21', '14:27', 400.00, '[{\"id\": 1, \"lname\": \"K\", \"pname\": \"Vijay\"}, \"\"]', 'dfghj', NULL, NULL, '2024-08-21 22:53:41', '2024-08-22 03:53:41', '2024-08-22 03:53:41'),
(90, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Pregnancy Test Serum(BHCG)\\\"]\"', 4, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-22', '18:27', 400.00, '[\"\", {\"Dob\": \"2024-08-14\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'asdf', NULL, NULL, '2024-08-22 04:39:40', '2024-08-22 09:39:40', '2024-08-22 09:39:40'),
(91, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 8, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Any', 'jitesh', '2024-08-22', '17:27', 400.00, '[\"\", {\"Dob\": \"2024-08-13\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'asdfg', NULL, NULL, '2024-08-22 04:50:21', '2024-08-22 09:50:21', '2024-08-22 09:50:21'),
(92, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 16, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Any', 'jitesh', '2024-08-22', '17:27', 800.00, '[\"\", {\"Dob\": \"2024-08-13\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'asdfgh', NULL, NULL, '2024-08-22 04:51:01', '2024-08-22 09:51:01', '2024-08-22 09:51:01'),
(93, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, NULL, 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-22 05:27:20', '2024-08-22 10:27:20', '2024-08-22 10:27:20');
INSERT INTO `bookings` (`id`, `Patientid`, `Name`, `Address`, `Doctor`, `Servicename`, `Subservices`, `Qty`, `Username`, `Status`, `Phone`, `Email`, `Type`, `Typeoftest`, `Typeofvisit`, `Gender`, `Healthcare`, `Date`, `Timeslot`, `Price`, `Patients`, `Description`, `Comments`, `Others`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(94, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 32, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '14:27', 400.00, '[\"\", {\"Dob\": \"2024-08-25\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'asdfghj', NULL, NULL, '2024-08-22 06:40:17', '2024-08-22 11:40:17', '2024-08-22 11:40:17'),
(95, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 64, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '15:27', 200.00, '[\"\"]', 'asdf', NULL, NULL, '2024-08-22 07:56:23', '2024-08-22 12:56:23', '2024-08-22 12:56:23'),
(96, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 64, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '15:27', 200.00, '[\"\"]', 'asdfg', NULL, NULL, '2024-08-22 08:00:16', '2024-08-22 13:00:16', '2024-08-22 13:00:16'),
(97, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 64, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '15:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-22 09:05:41', '2024-08-22 14:05:41', '2024-08-22 14:05:41'),
(98, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s licennse examination\\\"}]\"', 64, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '16:27', 200.00, '[\"\"]', 'asdfgh', NULL, NULL, '2024-08-22 09:22:32', '2024-08-22 14:22:32', '2024-08-22 14:22:32'),
(99, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s licennse examination\\\"}]\"', 64, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '16:27', 200.00, '[{\"Dob\": \"2024-08-19\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'asdfgh', NULL, NULL, '2024-08-22 09:24:54', '2024-08-22 14:24:54', '2024-08-22 14:24:54'),
(100, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s licennse examination\\\"}]\"', 64, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '16:27', 400.00, '[\"\", {\"Dob\": \"2024-08-19\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'asdfg', NULL, NULL, '2024-08-22 09:25:27', '2024-08-22 14:25:27', '2024-08-22 14:25:27'),
(101, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s licennse examination\\\"}]\"', 128, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '16:27', 800.00, '[\"\", {\"Dob\": \"2024-08-19\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'zxcvb', NULL, NULL, '2024-08-22 09:27:01', '2024-08-22 14:27:01', '2024-08-22 14:27:01'),
(102, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Vaccination', '\"[\\\"Hair Fall Workup\\\",\\\"Pregnancy Test Serum(BHCG)\\\"]\"', 256, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-23\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'sdfg', NULL, NULL, '2024-08-22 09:40:56', '2024-08-22 14:40:56', '2024-08-22 14:40:56'),
(103, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Vaccination', '\"[\\\"Hair Fall Workup\\\",\\\"Pregnancy Test Serum(BHCG)\\\"]\"', 512, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 800.00, '[\"\", {\"Dob\": \"2024-08-23\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'qwerftg', NULL, NULL, '2024-08-22 09:42:13', '2024-08-22 14:42:13', '2024-08-22 14:42:13'),
(104, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s licennse examination\\\"}]\"', 1024, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-20\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'sdfgh', NULL, NULL, '2024-08-22 09:46:26', '2024-08-22 14:46:26', '2024-08-22 14:46:26'),
(105, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s licennse examination\\\"}]\"', 2048, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 800.00, '[\"\", {\"Dob\": \"2024-08-20\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'zxcvb', NULL, NULL, '2024-08-22 09:48:51', '2024-08-22 14:48:51', '2024-08-22 14:48:51'),
(106, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 4096, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-23\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'qwertyu', NULL, NULL, '2024-08-22 09:53:55', '2024-08-22 14:53:55', '2024-08-22 14:53:55'),
(107, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 8192, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 800.00, '[\"\", {\"Dob\": \"2024-08-23\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'asdfghj', NULL, NULL, '2024-08-22 10:08:07', '2024-08-22 15:08:07', '2024-08-22 15:08:07'),
(108, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s licennse examination\\\"}]\"', 16384, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, 'Male', 'jitesh', '2024-08-22', '14:27', 400.00, '[\"\", {\"Dob\": \"2024-08-20\", \"Phone\": \"9894943298\", \"Gender\": \"female\", \"Lastname\": \"S\", \"Firstname\": \"Dev\"}]', 'kjhgf', NULL, NULL, '2024-08-22 10:10:10', '2024-08-22 15:10:10', '2024-08-22 15:10:10'),
(109, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 32768, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-21\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'asdfgh', NULL, NULL, '2024-08-22 11:07:29', '2024-08-22 16:07:29', '2024-08-22 16:07:29'),
(110, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'Renewal', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-27\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'qwertyhujk', NULL, NULL, '2024-08-22 13:22:51', '2024-08-22 18:22:51', '2024-08-22 18:22:51'),
(111, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-27\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"gh\", \"Firstname\": \"gh\"}]', 'asdasdg', NULL, NULL, '2024-08-22 13:39:17', '2024-08-22 18:39:17', '2024-08-22 18:39:17'),
(112, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-15\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'qwertyu', NULL, NULL, '2024-08-22 14:05:57', '2024-08-22 19:05:57', '2024-08-22 19:05:57'),
(113, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Health Check Packages\\\",\\\"Pregnancy Test Serum(BHCG)\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Male', 'jitesh', '2024-08-22', '13:27', 400.00, '[\"\", {\"Dob\": \"2024-08-14\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'ASDFGHJ', NULL, NULL, '2024-08-22 14:10:42', '2024-08-22 19:10:42', '2024-08-22 19:10:42'),
(115, NULL, NULL, 'Whitehorse Family Restaurant, 24th Main, J P Nagar 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\", \"', 18, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-23', '17:27', 400.00, '[\"\", {\"Dob\": \"2024-08-09\", \"Phone\": \"9740029247\", \"Gender\": \"male\", \"Lastname\": \"Test\", \"Firstname\": \"test67\"}]', NULL, NULL, NULL, '2024-08-23 05:23:41', '2024-08-23 10:23:41', '2024-08-23 10:23:41'),
(121, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-23 05:50:50', '2024-08-23 10:50:50', '2024-08-23 10:50:50'),
(117, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-23', '13:27', 400.00, '[\"\", {\"Dob\": \"1999-11-03\", \"Phone\": \"7896565443\", \"Gender\": \"female\", \"Lastname\": \"T\", \"Firstname\": \"Vimala\"}]', 'dfghjk', NULL, NULL, '2024-08-23 05:35:07', '2024-08-23 10:35:07', '2024-08-23 10:35:07'),
(119, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-23 05:46:30', '2024-08-23 10:46:30', '2024-08-23 10:46:30'),
(120, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-23 05:46:57', '2024-08-23 10:46:57', '2024-08-23 10:46:57'),
(122, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Radiology', '\"[\\\"X-ray\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[\"\"]', 'asdfg', NULL, NULL, '2024-08-23 09:43:54', '2024-08-23 14:43:54', '2024-08-23 14:43:54'),
(123, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[\"\"]', 'asdf', NULL, NULL, '2024-08-23 10:01:31', '2024-08-23 15:01:31', '2024-08-23 15:01:31'),
(124, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vitamin IV Drips', '\"[\\\"Energy Boost\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Any', 'jitesh', '2024-08-23', '15:27', 200.00, '[\"\"]', 'wert', NULL, NULL, '2024-08-23 10:05:17', '2024-08-23 15:05:17', '2024-08-23 15:05:17'),
(125, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Nurse visit', '\"[\\\"Injection/Home IV Therapy\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Any', 'jitesh', '2024-08-23', '16:27', 200.00, '[\"\"]', 'asdfghjkl', NULL, NULL, '2024-08-23 10:07:34', '2024-08-23 15:07:34', '2024-08-23 15:07:34'),
(126, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Radiology', '\"[\\\"X-ray\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Any', 'jitesh', '2024-08-23', '13:27', 200.00, '[\"\"]', 'nb b', NULL, NULL, '2024-08-23 10:10:07', '2024-08-23 15:10:07', '2024-08-23 15:10:07'),
(127, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Any', 'jitesh', '2024-08-23', '14:27', 200.00, '[\"\"]', 'ghj', NULL, NULL, '2024-08-23 10:34:24', '2024-08-23 15:34:24', '2024-08-23 15:34:24'),
(128, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\",\\\"Health Check Packages\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', NULL, 'Any', 'jitesh', '2024-08-23', '14:27', 200.00, '[\"supriya h\"]', 'werty', NULL, NULL, '2024-08-23 10:38:38', '2024-08-23 15:38:38', '2024-08-23 15:38:38'),
(129, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"municipal examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[\"\"]', 'qsds', NULL, NULL, '2024-08-23 11:08:28', '2024-08-23 16:08:28', '2024-08-23 16:08:28'),
(130, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Health Check Packages\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[{\"Dob\": \"2024-08-14\", \"Phone\": \"5617862383\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', 'sdfgh', NULL, NULL, '2024-08-23 11:17:04', '2024-08-23 16:17:04', '2024-08-23 16:17:04'),
(131, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[{\"Dob\": \"2024-08-08\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"janti\", \"Firstname\": \"bgh\"}]', 'fcdfgnd', NULL, NULL, '2024-08-23 11:19:42', '2024-08-23 16:19:42', '2024-08-23 16:19:42'),
(132, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[{\"Dob\": \"2024-08-14\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'fchgfdhkfd', NULL, NULL, '2024-08-23 11:46:35', '2024-08-23 16:46:35', '2024-08-23 16:46:35'),
(133, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '13:27', 200.00, '[{\"Dob\": \"2024-08-21\", \"Phone\": \"9456275453\", \"Gender\": \"male\", \"Lastname\": \"k\", \"Firstname\": \"prashanth\"}]', NULL, NULL, NULL, '2024-08-23 13:42:38', '2024-08-23 18:42:38', '2024-08-23 18:42:38'),
(134, NULL, NULL, 'العروبة, صلاح الدين, Riyadh, Riyadh, Saudi Arabia', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '15:27', 200.00, '[{\"Dob\": \"2024-08-06\", \"Phone\": \"0555552022\", \"Gender\": \"male\", \"Lastname\": \"test\", \"Firstname\": \"abdulrahman\"}]', 'بببببببببببببببب', NULL, NULL, '2024-08-23 15:10:13', '2024-08-23 20:10:13', '2024-08-23 20:10:13'),
(135, NULL, NULL, 'العروبة, صلاح الدين, Riyadh, Riyadh, Saudi Arabia', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '15:27', 200.00, '[{\"Dob\": \"2024-08-06\", \"Phone\": \"0555552022\", \"Gender\": \"male\", \"Lastname\": \"test\", \"Firstname\": \"abdulrahman\"}]', NULL, NULL, NULL, '2024-08-23 15:10:51', '2024-08-23 20:10:51', '2024-08-23 20:10:51'),
(136, NULL, NULL, 'العروبة, صلاح الدين, Riyadh, Riyadh, Saudi Arabia', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-23', '16:27', 200.00, '[{\"Dob\": \"2024-08-21\", \"Phone\": \"0555552022\", \"Gender\": \"female\", \"Lastname\": \"dd\", \"Firstname\": \"abdulrahman\"}]', NULL, NULL, NULL, '2024-08-23 15:24:42', '2024-08-23 20:24:42', '2024-08-23 20:24:42'),
(137, NULL, NULL, 'العروبة, صلاح الدين, Riyadh, Riyadh, Saudi Arabia', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"},{\\\"name\\\":\\\"municipal examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-24', '14:27', 200.00, '[{\"Dob\": \"2024-08-02\", \"Phone\": \"0555552022\", \"Gender\": \"male\", \"Lastname\": \"ww\", \"Firstname\": \"222\"}]', NULL, NULL, NULL, '2024-08-24 12:34:35', '2024-08-24 17:34:35', '2024-08-24 17:34:35'),
(138, NULL, NULL, 'حمود علي السويلم, Riyadh, Riyadh, Saudi Arabia', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"municipal examination\\\"},{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-25', '16:27', 200.00, '[{\"Dob\": \"2024-07-31\", \"Phone\": \"0555552022\", \"Gender\": \"male\", \"Lastname\": \"ww\", \"Firstname\": \"abdulrahman\"}]', NULL, NULL, NULL, '2024-08-25 12:33:40', '2024-08-25 17:33:40', '2024-08-25 17:33:40'),
(139, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-26', '13:27', 200.00, '[{\"Dob\": \"2024-07-31\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', NULL, NULL, NULL, '2024-08-26 07:58:00', '2024-08-26 12:58:00', '2024-08-26 12:58:00'),
(140, NULL, NULL, 'Kamat, Dharwad, Karnataka 580011, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"},{\\\"name\\\":\\\"municipal examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-26', '14:27', 200.00, '[{\"Dob\": \"2024-08-02\", \"Phone\": \"1234567890\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'hi', NULL, NULL, '2024-08-26 10:07:28', '2024-08-26 15:07:28', '2024-08-26 15:07:28'),
(141, NULL, NULL, 'Kamat, Dharwad, Karnataka 580011, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"},{\\\"name\\\":\\\"municipal examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-26', '13:27', 200.00, '[{\"Dob\": \"2024-08-03\", \"Phone\": \"8056395114\", \"Gender\": \"female\", \"Lastname\": \"shinde\", \"Firstname\": \"vaibhavi\"}]', NULL, NULL, NULL, '2024-08-26 10:13:45', '2024-08-26 15:13:45', '2024-08-26 15:13:45'),
(142, NULL, NULL, 'Kamat, Dharwad, Karnataka 580011, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"},{\\\"name\\\":\\\"municipal examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-26', '13:27', 200.00, '[{\"Dob\": \"2024-08-03\", \"Phone\": \"8056395114\", \"Gender\": \"female\", \"Lastname\": \"shinde\", \"Firstname\": \"vaibhavi\"}]', 'vc', NULL, NULL, '2024-08-26 10:15:08', '2024-08-26 15:15:08', '2024-08-26 15:15:08'),
(143, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"municipal examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-26', '13:27', 200.00, '[{\"Dob\": \"2024-08-29\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', NULL, NULL, NULL, '2024-08-26 11:52:41', '2024-08-26 16:52:41', '2024-08-26 16:52:41'),
(144, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"municipal examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-26', '13:27', 200.00, '[{\"Dob\": \"2024-08-29\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', NULL, NULL, NULL, '2024-08-26 11:53:14', '2024-08-26 16:53:14', '2024-08-26 16:53:14'),
(145, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-26', '13:27', 200.00, '[{\"Dob\": \"2024-08-27\", \"Phone\": \"8084008754\", \"Gender\": \"male\", \"Lastname\": \"Singh\", \"Firstname\": \"Prashant\"}]', 'sdd', NULL, NULL, '2024-08-26 13:28:33', '2024-08-26 18:28:33', '2024-08-26 18:28:33'),
(146, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-27', '14:27', 200.00, '[{\"Dob\": \"1999-11-10\", \"Phone\": \"9874354553\", \"Gender\": \"female\", \"Lastname\": \"h\", \"Firstname\": \"supriya\"}]', 'sdffgs', NULL, NULL, '2024-08-27 06:08:25', '2024-08-27 11:08:25', '2024-08-27 11:08:25'),
(147, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-27', '14:27', 200.00, '[{\"Dob\": \"1999-02-02\", \"Phone\": \"9824574897\", \"Gender\": \"female\", \"Lastname\": \"h\", \"Firstname\": \"supriya\"}]', 'sdfgj', NULL, NULL, '2024-08-27 06:11:03', '2024-08-27 11:11:03', '2024-08-27 11:11:03'),
(148, NULL, NULL, 'Whitehorse Family Restaurant, 24th Main, J P Nagar 6th Phase, Bengaluru, Karnataka 560078, India', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-27', '13:27', 200.00, '[\"supriya h\"]', NULL, NULL, NULL, '2024-08-27 07:37:37', '2024-08-27 12:37:37', '2024-08-27 12:37:37'),
(149, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-27', '13:27', 200.00, '[{\"Dob\": \"1999-11-10\", \"Phone\": \"9793674384\", \"Gender\": \"female\", \"Lastname\": \"hen\", \"Firstname\": \"Loui\"}]', 'adfdf', NULL, NULL, '2024-08-27 13:21:58', '2024-08-27 18:21:58', '2024-08-27 18:21:58'),
(150, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', 'Female', 'jitesh', '2024-08-28', '13:27', 400.00, '[\"\", {\"Dob\": \"1999-11-05\", \"Phone\": \"9828474824\", \"Gender\": \"female\", \"Lastname\": \"hen\", \"Firstname\": \"Loui\"}]', 'iqama', NULL, NULL, '2024-08-28 05:29:32', '2024-08-28 10:29:32', '2024-08-28 10:29:32'),
(151, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', 'Female', 'jitesh', '2024-08-28', '13:27', 400.00, '[{\"Dob\": \"1999-11-05\", \"Phone\": \"9828474824\", \"Gender\": \"female\", \"Lastname\": \"hen\", \"Firstname\": \"Loui\"}]', 'Iqama', NULL, NULL, '2024-08-28 05:31:37', '2024-08-28 10:31:37', '2024-08-28 10:31:37'),
(152, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-08-28 05:32:09', '2024-08-28 10:32:09', '2024-08-28 10:32:09'),
(153, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Approved', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-08-28', '13:27', 200.00, '[\"Supriya Hanchinamani\"]', 'wertyui', NULL, NULL, '2024-08-28 06:25:20', '2024-08-28 11:25:20', '2024-09-19 11:55:55'),
(154, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '\"[\\\"Children’s Vaccination ( Age: 9 Month )\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', 'jitesh', '2024-08-28', '13:27', 200.00, '[{\"Dob\": \"2024-08-09\", \"Phone\": \"7823293842\", \"Gender\": \"male\", \"Lastname\": \"K\", \"Firstname\": \"Vijay\"}]', 'vaccination', NULL, NULL, '2024-08-28 06:31:56', '2024-08-28 11:31:56', '2024-08-28 11:31:56'),
(155, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-28', '17:27', 200.00, '[{\"Dob\": \"2024-08-29\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"wer\", \"Firstname\": \"asd\"}]', 'www', NULL, NULL, '2024-08-28 10:33:21', '2024-08-28 15:33:21', '2024-08-28 15:33:21'),
(156, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-28', '14:27', 200.00, '[{\"Dob\": \"2024-08-31\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'wsedrftgyhuji', NULL, NULL, '2024-08-28 10:56:25', '2024-08-28 15:56:25', '2024-08-28 15:56:25'),
(157, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '[{\"name\": \"Residence examination\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-28', '15:27', 200.00, '[{\"Dob\": \"2024-08-31\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'sdfgh', NULL, NULL, '2024-08-28 11:00:41', '2024-08-28 16:00:41', '2024-08-28 16:00:41'),
(158, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '[{\"name\": \"Residence examination\"}, {\"name\": \"driver\'s license examination\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-08-28', '15:27', 200.00, '[{\"Dob\": \"2024-08-31\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Lastname\": \"H\", \"Firstname\": \"supriya\"}]', 'dfg', NULL, NULL, '2024-08-28 11:02:52', '2024-08-28 16:02:52', '2024-08-28 16:02:52'),
(159, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"},{\\\"name\\\":\\\"driver\'s license examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', 'jitesh', '2024-08-28', '13:27', 200.00, '[{\"Dob\": \"2024-08-10\", \"Phone\": \"7823293842\", \"Gender\": \"male\", \"Lastname\": \"hen\", \"Firstname\": \"Loui\"}]', 'asdf', NULL, NULL, '2024-08-28 13:09:13', '2024-08-28 18:09:13', '2024-08-28 18:09:13'),
(175, NULL, NULL, 'Palace Grounds, Jayamahal Rd, Armane Nagar, Bengaluru, Karnataka 560080, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-29 05:55:05', '2024-08-29 10:55:05', '2024-08-29 10:55:05'),
(176, NULL, NULL, 'Palace Grounds, Jayamahal Rd, Armane Nagar, Bengaluru, Karnataka 560080, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-29 05:56:41', '2024-08-29 10:56:41', '2024-08-29 10:56:41'),
(177, NULL, NULL, 'Palace Grounds, Jayamahal Rd, Armane Nagar, Bengaluru, Karnataka 560080, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-29 06:01:05', '2024-08-29 11:01:05', '2024-08-29 11:01:05'),
(178, NULL, NULL, 'Palace Grounds, Jayamahal Rd, Armane Nagar, Bengaluru, Karnataka 560080, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 600.00, '[\"\", {\"Dob\": \"2024-08-01\", \"Phone\": \"8296400359\", \"Gender\": \"female\", \"Country\": \"sa\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\", \"Nationalid\": \"12345\"}, {\"Dob\": \"2024-08-20\", \"Phone\": \"9894943298\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"S\", \"Firstname\": \"Dev\", \"Nationalid\": \"12345\"}]', NULL, NULL, NULL, '2024-08-29 06:09:22', '2024-08-29 11:09:22', '2024-08-29 11:09:22'),
(179, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 200.00, '[\"supriya H\"]', NULL, NULL, NULL, '2024-08-29 06:12:55', '2024-08-29 11:12:55', '2024-08-29 11:12:55'),
(180, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 200.00, '[\"supriya H\"]', NULL, NULL, NULL, '2024-08-29 06:13:09', '2024-08-29 11:13:09', '2024-08-29 11:13:09'),
(181, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 400.00, '[\"supriya H\", {\"Dob\": \"2024-08-23\", \"Phone\": \"1234567890\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', NULL, NULL, NULL, '2024-08-29 06:13:55', '2024-08-29 11:13:55', '2024-08-29 11:13:55'),
(182, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 800.00, '[\"supriya H\", {\"Dob\": \"2024-08-23\", \"Phone\": \"1234567890\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', NULL, NULL, NULL, '2024-08-29 06:18:04', '2024-08-29 11:18:04', '2024-08-29 11:18:04'),
(183, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 1600.00, '[\"supriya H\", {\"Dob\": \"2024-08-27\", \"Phone\": \"1234567890\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', NULL, NULL, NULL, '2024-08-29 06:20:05', '2024-08-29 11:20:05', '2024-08-29 11:20:05'),
(184, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 3200.00, '[\"supriya H\", {\"Dob\": \"2024-08-27\", \"Phone\": \"1234567890\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}]', NULL, NULL, NULL, '2024-08-29 06:22:17', '2024-08-29 11:22:17', '2024-08-29 11:22:17'),
(185, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 9600.00, '[\"supriya H\", {\"Dob\": \"2024-08-27\", \"Phone\": \"1234567890\", \"Gender\": \"male\", \"Lastname\": \"janti\", \"Firstname\": \"namrata\"}, {\"Dob\": \"2024-08-13\", \"Phone\": \"9894943298\", \"Gender\": \"female\", \"Lastname\": \"S\", \"Firstname\": \"Dev\"}]', NULL, NULL, NULL, '2024-08-29 06:23:17', '2024-08-29 11:23:17', '2024-08-29 11:23:17'),
(186, NULL, NULL, 'Magadi Road, 562130, Naganahalli, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 600.00, '[\"\", {\"Dob\": \"2024-08-20\", \"Phone\": \"1234567890\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"k\", \"Firstname\": \"Vijay\", \"Nationalid\": \"12345\"}, {\"Dob\": \"2024-08-30\", \"Phone\": \"1234567899\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"A\", \"Firstname\": \"Karthik\", \"Nationalid\": \"12345\"}]', NULL, NULL, NULL, '2024-08-29 06:29:06', '2024-08-29 11:29:06', '2024-08-29 11:29:06'),
(187, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-08-29', '13:27', 400.00, '[{\"Dob\": \"2024-08-03\", \"Phone\": \"8924755694\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"K\", \"Firstname\": \"virat\", \"Nationalid\": \"34567\"}, \"Namrata j\"]', 'wefgh', NULL, NULL, '2024-08-29 06:43:03', '2024-08-29 11:43:03', '2024-08-29 11:43:03'),
(216, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}, {\"name\": \"Health Check Packages\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', 'Female', '10', '2024-08-29', '13:27', 400.00, '[{\"Dob\": \"2024-08-17\", \"Phone\": \"8103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"3456\"}, {\"Dob\": \"2024-08-10\", \"Phone\": \"5555520221\", \"Gender\": \"male\", \"Country\": \"sa\", \"Lastname\": \"Hen\", \"Firstname\": \"Loui \", \"Nationalid\": \"4567\"}]', 'Routine lab test', NULL, NULL, '2024-08-29 11:09:22', '2024-08-29 16:09:22', '2024-08-29 16:09:22'),
(189, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Radiology', '[{\"name\": \"X-ray\"}]', 4, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', 'jitesh', '2024-08-29', '13:27', 200.00, '[{\"Dob\": \"2024-08-16\", \"Phone\": \"8103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"345\"}]', 'dfg', NULL, NULL, '2024-08-29 07:15:52', '2024-08-29 12:15:52', '2024-08-29 12:15:52'),
(190, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vitamin IV Drips', '[{\"name\": \"Energy Boost\"}]', 4, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', 'jitesh', '2024-08-29', '13:27', 200.00, '[{\"Dob\": \"2024-08-17\", \"Phone\": \"8103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"3456\"}]', 'sdfghj', NULL, NULL, '2024-08-29 07:18:04', '2024-08-29 12:18:04', '2024-08-29 12:18:04'),
(191, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vitamin IV Drips', '[{\"name\": \"Energy Boost\"}]', 4, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', 'jitesh', '2024-08-29', '13:27', 200.00, '[{\"Dob\": \"2024-08-17\", \"Phone\": \"8103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"3456\"}]', 'dfg', NULL, NULL, '2024-08-29 07:19:01', '2024-08-29 12:19:01', '2024-08-29 12:19:01'),
(192, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-08-29', '13:27', 200.00, '[{\"Dob\": \"2024-08-02\", \"Phone\": \"5555520221\", \"Gender\": \"female\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\"}]', 'sdfg', NULL, NULL, '2024-08-29 07:36:03', '2024-08-29 12:36:03', '2024-08-29 12:36:03'),
(193, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', 'jitesh', '2024-08-29', '16:27', 400.00, '[\"supriya h\", {\"Dob\": \"2024-08-28\", \"Phone\": \"8103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"34567\"}]', NULL, NULL, NULL, '2024-08-29 07:49:47', '2024-08-29 12:49:47', '2024-08-29 12:49:47'),
(194, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-08-29', '13:27', 200.00, '[{\"Dob\": \"2024-08-28\", \"Phone\": \"8103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"34567\"}]', NULL, NULL, NULL, '2024-08-29 09:01:49', '2024-08-29 14:01:49', '2024-08-29 14:01:49'),
(217, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 200.00, '[\"\"]', NULL, NULL, NULL, '2024-08-29 11:29:19', '2024-08-29 16:29:19', '2024-08-29 16:29:19'),
(205, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '[{\"name\": \"Residence examination\"}, {\"name\": \"driver\'s license examination\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', 'Female', '10', '2024-08-29', '13:27', 400.00, '[{\"Dob\": \"1999-11-08\", \"Phone\": \"8056395114\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"456\"}, {\"Dob\": \"2024-08-09\", \"Phone\": \"8924755694\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"H\", \"Firstname\": \"Supriya\", \"Nationalid\": \"3456\"}]', 'Routine checkup', NULL, NULL, '2024-08-29 10:24:46', '2024-08-29 15:24:46', '2024-08-29 15:24:46'),
(218, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '[{\"name\": \"Residence examination\", \"price\": 100}, {\"name\": \"driver\'s license examination\", \"price\": 100}]', 4, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-08-29', '14:27', 200.00, '[{\"Dob\": \"2024-08-10\", \"Phone\": \"9103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"23456\"}]', 'Iqama', NULL, NULL, '2024-08-29 11:52:44', '2024-08-29 16:52:44', '2024-08-29 16:52:44'),
(219, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '\"[{\\\"name\\\":\\\"Residence examination\\\"}]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 600.00, '[\"\", {\"Dob\": \"2024-08-14\", \"Phone\": \"9894943298\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"S\", \"Firstname\": \"Dev\", \"Nationalid\": \"12345\"}, {\"Dob\": \"2024-08-21\", \"Phone\": \"1234567890\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"H\", \"Firstname\": \"priya\", \"Nationalid\": \"12345\"}]', NULL, NULL, NULL, '2024-08-29 12:34:53', '2024-08-29 17:34:53', '2024-08-29 17:34:53'),
(208, NULL, NULL, 'Magadi Road, 562130, Naganahalli, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 4800.00, '[\"supriya H\", {\"Dob\": \"2024-08-30\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"S\", \"Firstname\": \"Dev\"}]', NULL, NULL, NULL, '2024-08-29 10:34:23', '2024-08-29 15:34:23', '2024-08-29 15:34:23'),
(220, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-06', '15:27', 200.00, '[\"demo demo\"]', 'scj', NULL, NULL, '2024-09-06 05:21:38', '2024-09-06 10:21:38', '2024-09-06 10:21:38'),
(211, NULL, NULL, 'Magadi Road, 562130, Naganahalli, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '\"[\\\"Hair Fall Workup\\\"]\"', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Any', 'jitesh', '2024-08-29', '13:27', 9600.00, '[\"supriya H\", {\"Dob\": \"2024-08-28\", \"Phone\": \"8296400359\", \"Gender\": \"male\", \"Lastname\": \"S\", \"Firstname\": \"Dev\"}]', NULL, NULL, NULL, '2024-08-29 10:36:30', '2024-08-29 15:36:30', '2024-08-29 15:36:30'),
(221, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-06', '14:27', 400.00, '[\"demo demo\", {\"Dob\": \"2024-09-13\", \"Phone\": \"8787878787\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"demo\", \"Firstname\": \"demo\", \"Nationalid\": \"123\"}]', 'an ns', NULL, NULL, '2024-09-06 05:27:58', '2024-09-06 10:27:58', '2024-09-06 10:27:58'),
(222, NULL, NULL, 'Magadi Road, 562130, Naganahalli, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}, {\"name\": \"Children’s Vaccination ( Age: 6 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-06', '14:27', 200.00, '[\"supriya h\"]', 'sdfdds', NULL, NULL, '2024-09-06 05:32:00', '2024-09-06 10:32:00', '2024-09-06 10:32:00'),
(223, NULL, NULL, 'Magadi Road, 562130, Naganahalli, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Caregiver', '[{\"name\": \"Energy Boost\", \"price\": 40}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-06', '13:27', 200.00, '[\"supriya H\"]', NULL, NULL, NULL, '2024-09-06 05:52:47', '2024-09-06 10:52:47', '2024-09-06 10:52:47'),
(215, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '[{\"name\": \"Residence examination\"}, {\"name\": \"driver\'s license examination\"}]', 4, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', 'Female', '10', '2024-08-29', '13:27', 800.00, '[\"\", {\"Dob\": \"2024-08-10\", \"Phone\": \"8103948013\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"T\", \"Firstname\": \"Devishree\", \"Nationalid\": \"12345\"}]', NULL, NULL, NULL, '2024-08-29 11:04:33', '2024-08-29 16:04:33', '2024-08-29 16:04:33'),
(224, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-06', '15:27', 200.00, '[\"demo demo\"]', NULL, NULL, NULL, '2024-09-06 06:35:49', '2024-09-06 11:35:49', '2024-09-06 11:35:49'),
(225, NULL, NULL, 'Magadi Road, 562130, Naganahalli, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 0, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-06', '13:27', 200.00, '[\"supriya H\"]', NULL, NULL, NULL, '2024-09-06 06:57:39', '2024-09-06 11:57:39', '2024-09-06 11:57:39'),
(226, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-06', '16:27', 200.00, '[\"demo demo\"]', NULL, NULL, NULL, '2024-09-06 06:58:18', '2024-09-06 11:58:18', '2024-09-06 11:58:18');
INSERT INTO `bookings` (`id`, `Patientid`, `Name`, `Address`, `Doctor`, `Servicename`, `Subservices`, `Qty`, `Username`, `Status`, `Phone`, `Email`, `Type`, `Typeoftest`, `Typeofvisit`, `Gender`, `Healthcare`, `Date`, `Timeslot`, `Price`, `Patients`, `Description`, `Comments`, `Others`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(227, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-06', '16:27', 200.00, '[\"demo demo\"]', NULL, NULL, NULL, '2024-09-06 06:59:13', '2024-09-06 11:59:13', '2024-09-06 11:59:13'),
(228, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Caregiver', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-06', '15:27', 200.00, '[\"demo demo\"]', NULL, NULL, NULL, '2024-09-06 07:07:14', '2024-09-06 12:07:14', '2024-09-06 12:07:14'),
(229, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-06', '14:27', 200.00, '[{\"dob\": \"17/08/1999\", \"email\": \"devitamil22@gmail.com\", \"phone\": \"9345051622\", \"gender\": \"female\", \"country\": \"india\", \"username\": \"Devisri Tamilvanan\", \"nationalid\": \"2534343123\", \"maritalstatus\": null}]', 'dfdsfd', NULL, NULL, '2024-09-06 11:45:26', '2024-09-06 16:45:26', '2024-09-06 16:45:26'),
(230, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}, {\"name\": \"Children’s Vaccination (Age: 1 Year)\", \"price\": null}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-06', '13:27', 200.00, '[{\"dob\": \"17/08/1999\", \"email\": \"devitamil22@gmail.com\", \"phone\": \"9345051622\", \"gender\": \"female\", \"country\": \"india\", \"username\": \"Devisri Tamilvanan\", \"nationalid\": \"2534343123\", \"maritalstatus\": null}]', 'sdfgh', NULL, NULL, '2024-09-06 11:53:29', '2024-09-06 16:53:29', '2024-09-06 16:53:29'),
(231, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-06', '15:27', 200.00, '[{\"dob\": \"23-08-1981\", \"email\": \"Al_leader@hot.com\", \"phone\": \"555552022\", \"gender\": \"male\", \"country\": \"Saudi Arabia\", \"username\": \"Abdulrahman Essa\", \"nationalid\": \"10101010\", \"maritalstatus\": null}]', 'fffgf', NULL, NULL, '2024-09-06 11:54:57', '2024-09-06 16:54:57', '2024-09-06 16:54:57'),
(232, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Laboratory', '[]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-09', '15:27', 200.00, '[\"demo demo\"]', NULL, NULL, NULL, '2024-09-09 05:30:48', '2024-09-09 10:30:48', '2024-09-09 10:30:48'),
(233, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-17', '13:27', 200.00, '[{\"dob\": \"08-08-1999\", \"email\": \"supriya@gmail.com\", \"phone\": \"9092541181\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"supriya h\", \"nationalid\": \"98745\", \"maritalstatus\": null}]', 'we', NULL, NULL, '2024-09-17 06:41:41', '2024-09-17 11:41:41', '2024-09-17 11:41:41'),
(234, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}, {\"name\": \"Children’s Vaccination ( Age: 6 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-17', '15:27', 200.00, '[{\"Dob\": \"2024-09-18\", \"Phone\": \"8827803902\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"tiwar\", \"Firstname\": \"asd\", \"Nationalid\": \"345\"}]', NULL, NULL, NULL, '2024-09-17 11:56:49', '2024-09-17 16:56:49', '2024-09-17 16:56:49'),
(235, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-17', '13:27', 200.00, '[{\"dob\": \"2024-06-29T18:30:00.000Z\", \"email\": \"supriya.h@biztechnosys.com\", \"phone\": \"8296400359\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"supriya H\", \"nationalid\": \"12345678\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-17 12:34:09', '2024-09-17 17:34:08', '2024-09-17 17:34:08'),
(236, NULL, NULL, '571455, Pandavapura, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-17', '13:27', 200.00, '[{\"dob\": \"2024-06-29T18:30:00.000Z\", \"email\": \"supriya.h@biztechnosys.com\", \"phone\": \"8296400359\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"supriya H\", \"nationalid\": \"12345678\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-17 12:51:15', '2024-09-17 17:51:15', '2024-09-17 17:51:15'),
(237, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-17', '14:27', 200.00, '[{\"dob\": \"2024-08-06\", \"email\": null, \"phone\": \"8056395114\", \"gender\": \"female\", \"country\": \"india\", \"username\": \"supriya h\", \"nationalid\": \"765567\", \"maritalstatus\": null}]', 'test', NULL, NULL, '2024-09-17 12:58:43', '2024-09-17 17:58:43', '2024-09-17 17:58:43'),
(238, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-18', '13:27', 200.00, '[{\"dob\": \"2024-08-06\", \"email\": null, \"phone\": \"8056395114\", \"gender\": \"female\", \"country\": \"india\", \"username\": \"supriya h\", \"nationalid\": \"765567\", \"maritalstatus\": null}]', 'routine checkup', NULL, NULL, '2024-09-18 05:10:01', '2024-09-18 10:10:01', '2024-09-18 10:10:01'),
(239, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-18', '13:27', 200.00, '[{\"dob\": \"2024-08-06\", \"email\": null, \"phone\": \"8056395114\", \"gender\": \"female\", \"country\": \"india\", \"username\": \"supriya h\", \"nationalid\": \"765567\", \"maritalstatus\": null}]', 'routine checkup', NULL, NULL, '2024-09-18 05:18:50', '2024-09-18 10:18:50', '2024-09-18 10:18:50'),
(240, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-18', '13:27', 200.00, '[{\"dob\": \"2024-08-06\", \"email\": null, \"phone\": \"8056395114\", \"gender\": \"female\", \"country\": \"india\", \"username\": \"supriya h\", \"nationalid\": \"765567\", \"maritalstatus\": null}]', 'test', NULL, NULL, '2024-09-18 05:32:33', '2024-09-18 10:32:33', '2024-09-18 10:32:33'),
(241, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-18', '13:27', 200.00, '[{\"dob\": \"14-08-2023\", \"email\": \"nam@gmail.com\", \"phone\": \"9443972577\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"Namrata j\", \"nationalid\": \"98999\", \"maritalstatus\": null}]', 'test', NULL, NULL, '2024-09-18 05:34:37', '2024-09-18 10:34:37', '2024-09-18 10:34:37'),
(242, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-18', '13:27', 200.00, '[{\"dob\": \"14-08-2023\", \"email\": \"nam@gmail.com\", \"phone\": \"9443972577\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"Namrata j\", \"nationalid\": \"98999\", \"maritalstatus\": null}]', 'routine', NULL, NULL, '2024-09-18 05:56:16', '2024-09-18 10:56:16', '2024-09-18 10:56:16'),
(243, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}, {\"name\": \"Children’s Vaccination ( Age: 2 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-18', '13:27', 200.00, '[{\"dob\": \"14-08-2023\", \"email\": \"nam@gmail.com\", \"phone\": \"9443972577\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"Namrata j\", \"nationalid\": \"98999\", \"maritalstatus\": null}]', 'testing', NULL, NULL, '2024-09-18 06:13:45', '2024-09-18 11:13:45', '2024-09-18 11:13:45'),
(244, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}, {\"name\": \"Children’s Vaccination ( Age: 2 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-18', '13:27', 400.00, '[{\"Dob\": \"1998-11-09\", \"Phone\": \"8765432321\", \"Gender\": \"female\", \"Country\": \"in\", \"Lastname\": \"hen\", \"Firstname\": \"Loui\", \"Nationalid\": \"4567\"}, {\"dob\": \"14-08-2023\", \"email\": \"nam@gmail.com\", \"phone\": \"9443972577\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"Namrata j\", \"nationalid\": \"98999\", \"maritalstatus\": null}]', 'testing', NULL, NULL, '2024-09-18 06:28:20', '2024-09-18 11:28:20', '2024-09-18 11:28:20'),
(245, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}, {\"name\": \"Children’s Vaccination ( Age: 2 Month )\", \"price\": 200}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Female', '10', '2024-09-18', '13:27', 400.00, '[{\"dob\": \"14-08-2023\", \"email\": \"nam@gmail.com\", \"phone\": \"9443972577\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"Namrata j\", \"nationalid\": \"98999\", \"maritalstatus\": null}]', 'next', NULL, NULL, '2024-09-18 06:35:34', '2024-09-18 11:35:34', '2024-09-18 11:35:34'),
(246, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-18', '13:27', 200.00, '[{\"dob\": \"14-08-2023\", \"email\": \"nam@gmail.com\", \"phone\": \"9443972577\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"Namrata j\", \"nationalid\": \"98999\", \"maritalstatus\": null}]', 'test', NULL, NULL, '2024-09-18 07:07:27', '2024-09-18 12:07:27', '2024-09-18 12:07:27'),
(247, NULL, NULL, 'Aurobindo Marg, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-20', '14:27', 400.00, '[{\"dob\": \"2004-06-02\", \"email\": \"r@G.com\", \"phone\": \"9898989898\", \"gender\": \"m\", \"country\": \"india\", \"username\": \"purvesh ramoliya\", \"nationalid\": \"1313123\", \"maritalstatus\": null}, {\"Dob\": \"1999-11-10\", \"Phone\": \"8765432341\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"henry\", \"Firstname\": \"Louis\", \"Nationalid\": \"7654\"}]', 'routine test', NULL, NULL, '2024-09-20 04:47:10', '2024-09-20 09:47:10', '2024-09-20 09:47:10'),
(248, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-09-20', '14:27', 200.00, '[{\"Dob\": \"1998-09-21\", \"Phone\": \"8765432341\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"hen\", \"Firstname\": \"Loui\", \"Nationalid\": \"4560\"}]', 'ads', NULL, NULL, '2024-09-20 05:22:09', '2024-09-20 10:22:09', '2024-09-20 10:22:09'),
(249, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Nurse visit', '[{\"name\": \"Injection/Home IV Therapy\", \"price\": 50}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-20', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-20 11:51:39', '2024-09-20 16:51:39', '2024-09-20 16:51:39'),
(250, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Home visit Doctor', '[{\"name\": \"Energy Boost\", \"price\": 40}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-20', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-20 12:40:35', '2024-09-20 17:40:35', '2024-09-20 17:40:35'),
(251, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 05:11:59', '2024-09-23 10:11:59', '2024-09-23 10:11:59'),
(252, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Nurse visit', '[{\"name\": \"Injection/Home IV Therapy\", \"price\": 50}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 05:15:33', '2024-09-23 10:15:33', '2024-09-23 10:15:33'),
(253, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Home visit Doctor', '[{\"name\": \"Injection/Home IV Therapy\", \"price\": 50}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 05:16:06', '2024-09-23 10:16:06', '2024-09-23 10:16:06'),
(254, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Iqama', '[{\"name\": \"municipal examination\", \"price\": 50}, {\"name\": \"Residence examination\", \"price\": 100}]', 1, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 05:36:21', '2024-09-23 10:36:21', '2024-09-23 10:36:21'),
(255, NULL, NULL, '8th Cross Road, J P Nagar 3rd Phase, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Advanced medical laboratories', '[{\"name\": \"municipal examination\", \"price\": 50}, {\"name\": \"Residence examination\", \"price\": 100}]', 1, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 05:51:54', '2024-09-23 10:51:54', '2024-09-23 10:51:54'),
(256, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-23', '14:27', 200.00, '[{\"dob\": \"2024-06-29T18:30:00.000Z\", \"email\": \"supriya.h@biztechnosys.com\", \"phone\": \"8296400359\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"supriya H\", \"nationalid\": \"12345678\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 06:27:13', '2024-09-23 11:27:13', '2024-09-23 11:27:13'),
(257, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 07:29:12', '2024-09-23 12:29:12', '2024-09-23 12:29:12'),
(258, NULL, NULL, '607 Outer Ring Road, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 200.00, '[{\"dob\": \"2009-04-30T18:30:00.000Z\", \"email\": \"pk@gmail.com\", \"phone\": \"8084008752\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"Prashant Kumar\", \"nationalid\": \"123456789\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-23 12:05:31', '2024-09-23 17:05:31', '2024-09-23 17:05:31'),
(259, NULL, NULL, '637304, Tiruchengode, Tamil Nadu, India', NULL, 'Laboratory', '[{\"name\": \"Hair Fall Workup\"}, {\"name\": \"Health Check Packages\"}]', 2, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-23', '13:27', 400.00, '[{\"dob\": \"14-08-2023\", \"email\": \"nam@gmail.com\", \"phone\": \"9443972577\", \"gender\": \"female\", \"country\": \"India\", \"username\": \"Namrata j\", \"nationalid\": \"98999\", \"maritalstatus\": null}, {\"Dob\": \"1999-04-24\", \"Phone\": \"8296400352\", \"Gender\": \"female\", \"Country\": \"sa\", \"Lastname\": \"H\", \"Firstname\": \"supriya\", \"Nationalid\": \"4545\"}]', 'lab test', NULL, NULL, '2024-09-23 12:10:21', '2024-09-23 17:10:21', '2024-09-23 17:10:21'),
(260, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-24', '16:27', 200.00, '[{\"dob\": \"05-09-2024\", \"email\": \"demo1@gmail.com\", \"phone\": \"8787878787\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"demo demo\", \"nationalid\": \"qa\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-24 11:18:16', '2024-09-24 16:18:16', '2024-09-24 16:18:16'),
(261, NULL, NULL, 'Dandi Heritage Highway, 396445, Vejalpore, Navsari, Navsari, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-24', '14:27', 200.00, '[{\"dob\": \"05-09-2024\", \"email\": \"demo1@gmail.com\", \"phone\": \"8787878787\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"demo demo\", \"nationalid\": \"qa\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-24 11:32:04', '2024-09-24 16:32:04', '2024-09-24 16:32:04'),
(262, NULL, NULL, 'Dandi Heritage Highway, 396445, Vejalpore, Navsari, Navsari, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-24', '14:27', 200.00, '[{\"dob\": \"05-09-2024\", \"email\": \"demo1@gmail.com\", \"phone\": \"8787878787\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"demo demo\", \"nationalid\": \"qa\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-24 11:41:56', '2024-09-24 16:41:56', '2024-09-24 16:41:56'),
(263, NULL, NULL, '8059 ابن الذهبي, Riyadh, Riyadh, Saudi Arabia', NULL, 'Seasonal flu', '[{\"id\": \"47\", \"label\": \"Seasonal Flu1\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-09-24', '16:27', 200.00, '[{\"dob\": \"23-08-1981\", \"email\": \"Al_leader@hot.com\", \"phone\": \"555552022\", \"gender\": \"male\", \"country\": \"Saudi Arabia\", \"username\": \"Abdulrahman Essa\", \"nationalid\": \"10101010\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-24 14:46:05', '2024-09-24 19:46:05', '2024-09-24 19:46:05'),
(264, NULL, NULL, '8059 ابن الذهبي, Riyadh, Riyadh, Saudi Arabia', NULL, 'Seasonal flu', '[{\"id\": \"47\", \"label\": \"Seasonal Flu1\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, 'jitesh', '2024-09-24', '16:27', 200.00, '[{\"dob\": \"23-08-1981\", \"email\": \"Al_leader@hot.com\", \"phone\": \"555552022\", \"gender\": \"male\", \"country\": \"Saudi Arabia\", \"username\": \"Abdulrahman Essa\", \"nationalid\": \"10101010\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-24 14:46:05', '2024-09-24 19:46:05', '2024-09-24 19:46:05'),
(265, NULL, NULL, '8059 ابن الذهبي, Riyadh, Riyadh, Saudi Arabia', NULL, 'Caregiver', '[]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-24', '16:27', 200.00, '[{\"dob\": \"23-08-1981\", \"email\": \"Al_leader@hot.com\", \"phone\": \"555552022\", \"gender\": \"male\", \"country\": \"Saudi Arabia\", \"username\": \"Abdulrahman Essa\", \"nationalid\": \"10101010\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-24 14:46:57', '2024-09-24 19:46:57', '2024-09-24 19:46:57'),
(266, NULL, NULL, '8059 ابن الذهبي, Riyadh, Riyadh, Saudi Arabia', NULL, 'Vitamin IV Drips', '[{\"name\": \"Energy Boost\", \"price\": 40}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-09-24', '15:27', 200.00, '[{\"dob\": \"23-08-1981\", \"email\": \"Al_leader@hot.com\", \"phone\": \"555552022\", \"gender\": \"male\", \"country\": \"Saudi Arabia\", \"username\": \"Abdulrahman Essa\", \"nationalid\": \"10101010\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-09-24 14:47:23', '2024-09-24 19:47:23', '2024-09-24 19:47:23'),
(267, NULL, NULL, '2537 رقم 78, Riyadh, Riyadh, Saudi Arabia', NULL, 'Nurse visit', '[{\"name\": \"Injection/Home IV Therapy\", \"price\": 50}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-10-01', '15:27', 200.00, '[{\"Dob\": \"2024-10-16\", \"Phone\": \"0555552022\", \"Gender\": \"male\", \"Country\": \"sa\", \"Lastname\": \"test\", \"Firstname\": \"abdulrahman\", \"Nationalid\": \"ققق\"}]', NULL, NULL, NULL, '2024-10-01 09:10:47', '2024-10-01 14:10:46', '2024-10-01 14:10:46'),
(268, NULL, NULL, 'Magadi Road, 562130, Naganahalli, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Health Check Packages\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-10-04', '13:27', 200.00, '[{\"username\": \"supriya H\"}]', 'ghghj', NULL, NULL, '2024-10-04 10:18:36', '2024-10-04 07:18:36', '2024-10-04 07:18:36'),
(269, NULL, NULL, 'Nelamangala Main Road, 562123, Visveswarapura, Nelamangala, Bengaluru Rural, Karnataka, India', NULL, 'Laboratory', '[{\"name\": \"Health Check Packages\"}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-10-05', '13:27', 200.00, '[{\"username\": \"supriya H\"}]', 'zdsdfsdf', NULL, NULL, '2024-10-05 04:52:07', '2024-10-05 01:52:07', '2024-10-05 01:52:07'),
(270, NULL, NULL, 'makkah', NULL, 'General Checkup purvesh', '[{\"name\": \"Blood Test\", \"price\": 50}, {\"name\": \"X-Ray\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Individual', 'center', 'female', 'Dr. John Doe', '2024-07-01', '01:00-2:00', 150.00, '[{\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}, {\"Dob\": \"31/10/1992\", \"Phone\": \"234333\", \"Gender\": \"Male\", \"Country\": \"India\", \"Lastname\": \"Ramoliya\", \"Firstname\": \"Purvesh\", \"Nationalid\": \"22aed\"}]', 'Routine checkup', NULL, NULL, '2024-10-05 14:26:41', '2024-10-05 11:26:41', '2024-10-05 11:26:41'),
(271, NULL, NULL, 'Chennai, Tamil Nadu, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}, {\"name\": \"Children’s Vaccination ( Age: 6 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', 'Male', '10', '2024-10-05', '13:27', 400.00, '[{\"username\": \"supriya h\"}, {\"Dob\": \"1999-10-01\", \"Phone\": \"7823293842\", \"Gender\": \"male\", \"Country\": \"in\", \"Lastname\": \"K\", \"Firstname\": \"Vijay\", \"Nationalid\": \"356\"}]', 'testing', NULL, NULL, '2024-10-05 17:51:03', '2024-10-05 14:51:03', '2024-10-05 14:51:03'),
(272, NULL, NULL, 'Chennai, Tamil Nadu, India', NULL, 'Iqama', '[{\"name\": \"Residence examination\", \"price\": 100}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', 'Male', '10', '2024-10-05', '14:27', 200.00, '[{\"username\": \"supriya h\"}]', 'test', NULL, NULL, '2024-10-05 18:14:52', '2024-10-05 15:14:52', '2024-10-05 15:14:52'),
(273, NULL, NULL, 'Chennai, Tamil Nadu, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 2, NULL, 'Created', NULL, NULL, NULL, 'Renewal', 'Visit the center', 'Male', '10', '2024-10-05', '13:27', 200.00, '[{\"username\": \"supriya h\"}]', 'sdf', NULL, NULL, '2024-10-05 20:00:23', '2024-10-05 17:00:23', '2024-10-05 17:00:23'),
(274, NULL, NULL, '7020 شارع الثمام, Addiriyah, Riyadh, Saudi Arabia', NULL, 'Nurse visit', '[{\"name\": \"Injection/Home IV Therapy\", \"price\": 50}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-10-06', '16:27', 200.00, '[{\"username\": \"Abdulrahman Essa\"}]', NULL, NULL, NULL, '2024-10-06 09:21:24', '2024-10-06 06:21:24', '2024-10-06 06:21:24'),
(275, NULL, NULL, 'Ashanagar Road, 396445, Asha Nagar, Navsari, Navsari, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-10-07', '13:27', 200.00, '[{\"dob\": \"05-09-2024\", \"email\": \"demo1@gmail.com\", \"phone\": \"8787878787\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"demo demo\", \"nationalid\": \"qa\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-10-07 04:27:00', '2024-10-07 01:27:00', '2024-10-07 01:27:00'),
(276, NULL, NULL, 'Ashanagar Road, 396445, Asha Nagar, Navsari, Navsari, Gujarat, India', NULL, 'Vaccination', '[{\"name\": \"Children’s Vaccination ( Age: 9 Month )\", \"price\": 200}]', 1, NULL, 'Created', NULL, NULL, NULL, 'New Release', 'Visit the center', NULL, '10', '2024-10-07', '15:27', 200.00, '[{\"dob\": \"05-09-2024\", \"email\": \"demo1@gmail.com\", \"phone\": \"8787878787\", \"gender\": \"male\", \"country\": \"India\", \"username\": \"demo demo\", \"nationalid\": \"qa\", \"maritalstatus\": null}]', NULL, NULL, NULL, '2024-10-07 05:08:49', '2024-10-07 02:08:49', '2024-10-07 02:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `bookingsattachments`
--

CREATE TABLE `bookingsattachments` (
  `id` bigint UNSIGNED NOT NULL,
  `bookings_id` bigint UNSIGNED NOT NULL,
  `filename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookingsattachments`
--

INSERT INTO `bookingsattachments` (`id`, `bookings_id`, `filename`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 8, '20170701_084403.jpg', 'bookingsattachment/xDGz2WhFiY07ypBX7jXYqBUYvSUFhr7dQbn3BGMu.jpg', '2024-08-20 02:34:28', '2024-08-20 02:34:28'),
(2, 8, '20170701_084403.jpg', 'bookingsattachment/8W2DINT1y0qt6M44UaAJa0MVp6qtg2AiMnDbbb2C.jpg', '2024-08-20 02:34:51', '2024-08-20 02:34:51'),
(3, 8, '20170701_084403.jpg', 'bookingsattachment/Bsy0AWQmOAZChMCT43EUWbe2BMFPoaaql59TIW7Y.jpg', '2024-08-20 02:34:58', '2024-08-20 02:34:58'),
(4, 8, '20170701_084403.jpg', 'bookingsattachment/omSRAywC2BDfQDgkKFxZffhzBl7a51g0HV4mBFEo.jpg', '2024-08-20 02:35:07', '2024-08-20 02:35:07'),
(5, 8, '20170701_084403.jpg', 'bookingsattachment/qwpBX9cmwhqgCRbfM2NTBB1Fj6icWw1vl1kWRhGs.jpg', '2024-08-20 02:35:09', '2024-08-20 02:35:09'),
(6, 8, '20170701_084403.jpg', 'bookingsattachment/r8jvKMVdZArjVWNwIlJcUWw6Q4ey8gXRvjwYryeL.jpg', '2024-08-20 02:42:43', '2024-08-20 02:42:43'),
(7, 8, '20170701_084403.jpg', 'bookingsattachment/dVE64XtME00ypb9S0DdnscQ8VeCSh9loTgcb9oyE.jpg', '2024-08-20 02:56:45', '2024-08-20 02:56:45'),
(8, 8, '20170701_084409.jpg', 'bookingsattachment/6IX3GAuSTF2HksIeahNgLSBbWh7r6eGTtZ4eUena.jpg', '2024-08-20 02:56:45', '2024-08-20 02:56:45'),
(9, 8, '20170701_084439.jpg', 'bookingsattachment/uOtTyPSMeJKFaondCK5Qhfs5AAukG8qrFxV1VjzI.jpg', '2024-08-20 02:56:45', '2024-08-20 02:56:45'),
(10, 46, '20170701_084403.jpg', 'bookingsattachment/MAK4CTmH0iQyvyPp3yrHRCXbbbyaxho4418Et99w.jpg', '2024-08-20 13:45:24', '2024-08-20 13:45:24'),
(11, 46, '20170701_084409.jpg', 'bookingsattachment/oHx18tOc6zBnkzKbzsGKh8JqKu8UF0J4XAWPX1RY.jpg', '2024-08-20 13:45:24', '2024-08-20 13:45:24'),
(12, 46, '20170701_084439.jpg', 'bookingsattachment/JwWL98P1ADhiDmvCpQYQ5OQwu75vHWGgVhV2BiXA.jpg', '2024-08-20 13:45:24', '2024-08-20 13:45:24'),
(13, 53, 'image.png', 'bookingsattachment/LLhRNBbVDgTZ8WjpzHIWnt9R6mlkATYaICecfhQD.png', '2024-08-21 18:09:19', '2024-08-21 18:09:19'),
(14, 53, 'Group.png', 'bookingsattachment/SoXqgjlzWOOndXEOwUxnbhj8xvEfT3usY08Zn3l0.png', '2024-08-21 18:09:19', '2024-08-21 18:09:19'),
(15, 53, 'Thyroid2.png', 'bookingsattachment/sbkKPJkOPx3grEq4UcRH6lSKaytkOhfM7XqXTlFx.png', '2024-08-21 18:09:19', '2024-08-21 18:09:19'),
(16, 53, 'image.png', 'bookingsattachment/F26Cl28BLRR4zJfHhfM9C6ttyIdB3vWe4Z8kYB4p.png', '2024-08-22 01:28:21', '2024-08-22 01:28:21'),
(17, 53, 'Group.png', 'bookingsattachment/iMcbsEDtsalM9h7iJMJnipH0UOJg1YKDpgpaWreY.png', '2024-08-22 01:28:21', '2024-08-22 01:28:21'),
(18, 53, 'Thyroid2.png', 'bookingsattachment/PPb5rISJhz0ukslGypUF51S5Ip89LsHbAOmqzWKy.png', '2024-08-22 01:28:21', '2024-08-22 01:28:21'),
(19, 86, 'image.png', 'bookingsattachment/yYB8gjYZWJY4jRQYNs8K7OedVARPttmCyfktqZgl.png', '2024-08-22 03:13:57', '2024-08-22 03:13:57'),
(20, 87, 'image.png', 'bookingsattachment/MqalEQblwZkR1rqFOG0yGi2Y95CDBQu87dAGzx1I.png', '2024-08-22 03:15:13', '2024-08-22 03:15:13'),
(21, 87, 'Group.png', 'bookingsattachment/mPfmeWY0TQ0cR7BqulWkOKL50R6MC21FdSmckt1f.png', '2024-08-22 03:15:13', '2024-08-22 03:15:13'),
(22, 89, 'Pregranancy_test.png', 'bookingsattachment/1xovIgmjtlKiIYT8nWKZgICI0Hxm97sTJOrqIe1i.png', '2024-08-22 03:53:41', '2024-08-22 03:53:41'),
(23, 89, 'Thyroid.png', 'bookingsattachment/DjNDNbw1lm1UgUSu5zb2Hb7jlrJYiQFanMAgFo9r.png', '2024-08-22 03:53:41', '2024-08-22 03:53:41'),
(24, 92, 'Screenshot (6) 1.png', 'bookingsattachment/nSvo6Tl9kUpPuC9R9iIoKrS6suftOnrb5q8thR6p.png', '2024-08-22 09:51:03', '2024-08-22 09:51:03'),
(25, 94, 'back-icon.png', 'bookingsattachment/ha5mkn1rUALHXtdqvKhYRuxHZoF0YVD9E1sKtISU.png', '2024-08-22 11:40:17', '2024-08-22 11:40:17'),
(26, 94, 'Group 1261154072 (2).png', 'bookingsattachment/dbQ3PISIUGEXEgWRMtqtlnicxEFhYblkQTZ77BQG.png', '2024-08-22 11:40:17', '2024-08-22 11:40:17'),
(27, 102, 'back-icon.png', 'bookingsattachment/oD2yVCRJ79Wv49Zta7jdHzudL45ayiKQle4Sw5n5.png', '2024-08-22 14:40:57', '2024-08-22 14:40:57'),
(28, 103, 'back-icon.png', 'bookingsattachment/ciFUj7i3n5ry0tiHF6RuLV2lFeBiTzdjMFJVhFPp.png', '2024-08-22 14:42:13', '2024-08-22 14:42:13'),
(29, 106, 'back-icon.png', 'bookingsattachment/JslysW4nO2TqFOQvJ5lK8m5ufhoaddl2r1LSM6rm.png', '2024-08-22 14:53:55', '2024-08-22 14:53:55'),
(30, 107, 'back-icon.png', 'bookingsattachment/zOy2hZjvW6e2lOciqFlZifKKUvLzs9xgHC8coDQR.png', '2024-08-22 15:08:08', '2024-08-22 15:08:08'),
(31, 109, 'back-icon.png', 'bookingsattachment/LKVnktpfQkosknQunamTXDyA8tIpuxWttmYO0USB.png', '2024-08-22 16:07:30', '2024-08-22 16:07:30'),
(32, 110, 'back-icon.png', 'bookingsattachment/kei8TE66tECO4spp1qV9rBHqYjxguLoyibNm6JFa.png', '2024-08-22 18:22:51', '2024-08-22 18:22:51'),
(33, 113, 'back-icon.png', 'bookingsattachment/lLTvu3LHs5Bvfj6VprRdMUmtzBLbLIUmrBx3mKOj.png', '2024-08-22 19:10:43', '2024-08-22 19:10:43'),
(34, 117, 'image.png', 'bookingsattachment/PLsVmMK0m302Do8QT4EVgoJo73Aix0C7zfSwpZO9.png', '2024-08-23 10:35:08', '2024-08-23 10:35:08'),
(35, 123, 'image.png', 'bookingsattachment/ve4NkCtTQxyT6zgkcifa32cHx2KK7bGF9TknKjgr.png', '2024-08-23 15:01:32', '2024-08-23 15:01:32'),
(36, 124, 'images.jfif', 'bookingsattachment/sMxBFRYFk5okbPwDOODt3uOmrs6qlM6q7VzwzFoU.jpg', '2024-08-23 15:05:18', '2024-08-23 15:05:18'),
(37, 126, 'images.jfif', 'bookingsattachment/R4BjVRqJgxt6tg3Y4XM4BoUSZPQCHZcTTuDdufHD.jpg', '2024-08-23 15:10:07', '2024-08-23 15:10:07'),
(38, 130, 'back-icon.png', 'bookingsattachment/7Mq0ytfaZucIId99LeB6DkyFMz5WfRqDTKaVkIBo.png', '2024-08-23 16:17:04', '2024-08-23 16:17:04'),
(39, 132, 'back-icon.png', 'bookingsattachment/0oWUnYpn5knYfPIOW8AUyzu5QyQy6vcZbCSkiwWj.png', '2024-08-23 16:46:35', '2024-08-23 16:46:35'),
(40, 146, 'Group.png', 'bookingsattachment/yngKNBOSCBoFgNWXxzioHJGeND8nHUzJrgf2lUWc.png', '2024-08-27 11:08:26', '2024-08-27 11:08:26'),
(41, 221, 'Appointment Letter - Rohan Kamlesh Singh.pdf', 'bookingsattachment/FASjasoxZ641MrgdtH5fFB2EAzo75Jya81og1m0z.pdf', '2024-09-06 10:27:59', '2024-09-06 10:27:59'),
(42, 259, 'Screenshot (2).png', 'bookingsattachment/44xB5hq7rBYDFPYWDpAz8sxZzyBiktWuGMNJWFUr.png', '2024-09-23 17:10:21', '2024-09-23 17:10:21'),
(43, 269, 'care_2.png', 'bookingsattachment/UD1Xtxz5xkuJUJahsXHofKKLWZXwA25eWA9YoRTw.png', '2024-10-05 01:52:08', '2024-10-05 01:52:08'),
(44, 271, 'QUO1.pdf', 'bookingsattachment/WeT1r0wUlrUyyNMWyjsoQBtRcYffdaQS7QjeFr5V.pdf', '2024-10-05 14:51:05', '2024-10-05 14:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `countryname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `countryname`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'Tokio', '2024-06-19 00:17:48', '2024-06-19 00:17:48'),
(2, NULL, 1, 'kol', '2024-06-19 00:29:38', '2024-06-19 00:29:38'),
(3, NULL, 2, 'sundey', '2024-06-19 00:33:40', '2024-06-19 00:33:40'),
(4, NULL, 1, 'bihar', '2024-06-19 00:34:28', '2024-06-19 00:34:28'),
(5, NULL, 6, 'kathmandu', '2024-06-19 02:10:26', '2024-06-19 02:10:26'),
(6, NULL, 7, 'susw', '2024-06-19 02:26:16', '2024-06-19 02:26:16'),
(7, NULL, 9, 'ss', '2024-06-20 02:36:35', '2024-06-20 02:36:35'),
(8, NULL, 11, 'aa', '2024-06-20 03:06:20', '2024-06-20 03:06:20'),
(9, NULL, 12, 'zaa', '2024-06-20 03:23:04', '2024-06-20 03:23:04'),
(10, NULL, 13, 'afg1', '2024-06-23 23:50:37', '2024-06-23 23:50:37'),
(11, NULL, 1, 'pune', '2024-07-29 11:03:39', '2024-07-29 11:03:39'),
(12, NULL, 14, 'riaadah 12', '2024-08-14 17:48:21', '2024-08-14 17:48:21'),
(13, NULL, 16, 'riaadah2020', '2024-08-14 18:22:44', '2024-08-14 18:22:44'),
(14, NULL, 17, 'riaadah 4040', '2024-08-14 18:25:59', '2024-08-14 18:25:59'),
(15, NULL, 18, 'city tst1', '2024-08-15 16:31:19', '2024-08-15 16:31:19'),
(16, NULL, 19, 'riaadah 34343434', '2024-08-28 12:53:59', '2024-08-28 12:53:59'),
(17, NULL, 20, '66', '2024-09-02 12:51:05', '2024-09-02 12:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint UNSIGNED NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Issues` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Servicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Healthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `Subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Doctor` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Servicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Healthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Subject`, `Phone`, `Email`, `Message`, `Doctor`, `Servicename`, `Type`, `Status`, `Healthcare`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 'Rahul', '1233123131', 'r@gmail.com', 'hello', NULL, NULL, NULL, NULL, NULL, '2024-05-22 11:47:50', '2024-05-22 06:17:50', '2024-05-22 06:17:50'),
(2, 'asdfghjk', '2345678', 'prashant.k@biztechnosys.com', 'Zxcvbnm', NULL, NULL, NULL, NULL, NULL, '2024-08-07 13:02:40', '2024-08-07 18:02:40', '2024-08-07 18:02:40'),
(3, 'سيسشسشي', '555552022', 'dr.a.e@hotmail.com', 'صسيشسيسشيسشيسيسشش', NULL, NULL, NULL, NULL, NULL, '2024-08-08 09:03:59', '2024-08-08 14:03:59', '2024-08-08 14:03:59'),
(4, 'سيسشسشي', '555552022', 'dr.a.e@hotmail.com', 'صسيشسيسشيسشيسيسشش', NULL, NULL, NULL, NULL, NULL, '2024-08-08 09:04:02', '2024-08-08 14:04:02', '2024-08-08 14:04:02'),
(5, 'سيسشسشي', '555552022', 'dr.a.e@hotmail.com', 'صسيشسيسشيسشيسيسشش', NULL, NULL, NULL, NULL, NULL, '2024-08-08 09:04:03', '2024-08-08 14:04:03', '2024-08-08 14:04:03'),
(6, 'سيسشسشي', '555552022', 'dr.a.e@hotmail.com', 'صسيشسيسشيسشيسيسشش', NULL, NULL, NULL, NULL, NULL, '2024-08-08 09:04:03', '2024-08-08 14:04:03', '2024-08-08 14:04:03'),
(7, 'سيسشسشي', '555552022', 'dr.a.e@hotmail.com', 'صسيشسيسشيسشيسيسشش', NULL, NULL, NULL, NULL, NULL, '2024-08-08 09:04:04', '2024-08-08 14:04:04', '2024-08-08 14:04:04'),
(8, 'nm,', '8296400359', 'supriya.h@gmail.com', 'aEQWQED', NULL, NULL, NULL, NULL, NULL, '2024-08-12 07:31:23', '2024-08-12 12:31:23', '2024-08-12 12:31:23'),
(9, 'service needed', '55555202', 'ade@gmail.com', 'Good', NULL, NULL, NULL, NULL, NULL, '2024-08-12 09:24:22', '2024-08-12 14:24:22', '2024-08-12 14:24:22'),
(10, 'service needed', '55555202', 'ade@gmail.com', 'Good', NULL, NULL, NULL, NULL, NULL, '2024-08-12 09:24:25', '2024-08-12 14:24:25', '2024-08-12 14:24:25'),
(11, 'sjfdafkf', '55555202', 'ade@gmail.com', 'skfladfkld', NULL, NULL, NULL, NULL, NULL, '2024-08-12 09:40:56', '2024-08-12 14:40:56', '2024-08-12 14:40:56'),
(12, 'Test', '09740029247', 'samuelpaulsuchan@gmail.com', 'Test', NULL, NULL, NULL, NULL, NULL, '2024-08-23 04:50:57', '2024-08-23 09:50:57', '2024-08-23 09:50:57'),
(13, 'Test', '09740029247', 'samuelpaulsuchan@gmail.com', 'Test', NULL, NULL, NULL, NULL, NULL, '2024-08-23 04:51:02', '2024-08-23 09:51:02', '2024-08-23 09:51:02'),
(14, 'Test', '09740029247', 'samuelpaulsuchan@gmail.com', 'Test', NULL, NULL, NULL, NULL, NULL, '2024-08-23 04:51:06', '2024-08-23 09:51:06', '2024-08-23 09:51:06'),
(15, 'asdfghj', '8296400359', 'anagha@gmail.com', 'asdfgh', NULL, NULL, NULL, NULL, NULL, '2024-08-23 09:10:20', '2024-08-23 14:10:20', '2024-08-23 14:10:20'),
(16, 'asdfghj', '8296400359', 'anagha@gmail.com', 'vmb', NULL, NULL, NULL, NULL, NULL, '2024-08-26 10:21:28', '2024-08-26 15:21:28', '2024-08-26 15:21:28'),
(17, 'Rahulaa', '1233123131', 'r@gmail.com', 'hello', NULL, NULL, NULL, NULL, NULL, '2024-08-27 12:47:19', '2024-08-27 17:47:19', '2024-08-27 17:47:19'),
(18, 'Test', '3111231816', 'rahmat.aly95@gmail.com', 'For the test reason', NULL, NULL, NULL, NULL, NULL, '2024-09-03 15:32:51', '2024-09-03 20:32:51', '2024-09-03 20:32:51'),
(19, 'Test', '3111231816', 'rahmat.aly95@gmail.com', 'For the test reason', NULL, NULL, NULL, NULL, NULL, '2024-09-03 15:33:23', '2024-09-03 20:33:23', '2024-09-03 20:33:23'),
(20, 'testing', '782329842', 'suo@gmail.com', 'asd', NULL, NULL, NULL, NULL, NULL, '2024-10-05 18:16:10', '2024-10-05 15:16:10', '2024-10-05 15:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'india', '2024-06-18 23:31:02', '2024-06-18 23:31:02'),
(2, 'Austrelia', '2024-06-18 23:58:39', '2024-06-18 23:58:39'),
(3, 'India1', '2024-06-19 00:09:45', '2024-06-19 00:09:45'),
(4, 'japan', '2024-06-19 00:14:37', '2024-06-19 00:14:37'),
(5, 'pak', '2024-06-19 00:27:12', '2024-06-19 00:27:12'),
(6, 'nepal', '2024-06-19 02:10:18', '2024-06-19 02:10:18'),
(7, 'canada', '2024-06-19 02:26:06', '2024-06-19 02:26:06'),
(8, 'westindies', '2024-06-19 02:33:15', '2024-06-19 02:33:15'),
(9, 's', '2024-06-20 02:36:28', '2024-06-20 02:36:28'),
(10, 'm', '2024-06-20 03:05:11', '2024-06-20 03:05:11'),
(11, 'a', '2024-06-20 03:06:12', '2024-06-20 03:06:12'),
(12, 'za', '2024-06-20 03:22:59', '2024-06-20 03:22:59'),
(13, 'afg', '2024-06-23 23:50:29', '2024-06-23 23:50:29'),
(14, 'SAUDI ARIBIA', '2024-08-14 17:47:51', '2024-08-14 17:47:51'),
(15, 'SAUDI ARIBIA', '2024-08-14 17:53:45', '2024-08-14 17:53:45'),
(16, 'SAUDI ARIBIA2020', '2024-08-14 18:22:30', '2024-08-14 18:22:30'),
(17, 'SAUDI ARIBIA 4040', '2024-08-14 18:25:48', '2024-08-14 18:25:48'),
(18, 'test1', '2024-08-15 16:30:54', '2024-08-15 16:30:54'),
(19, 'SAUDI ARIBIA3434343', '2024-08-28 12:53:48', '2024-08-28 12:53:48'),
(20, '66', '2024-09-02 12:50:55', '2024-09-02 12:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ratings` int NOT NULL,
  `TypeOfReviewer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_reviews`
--

INSERT INTO `customer_reviews` (`id`, `Name`, `Image`, `Review`, `Ratings`, `TypeOfReviewer`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 'Ezra Bednar', 'reviewimg1.webp', 'Error et dolorem sunt quaerat beatae. Molestias tenetur ut quis recusandae quam ducimus vel. Aspernatur laborum quia et qui totam eius nostrum molestiae.', 2, 'user', '2023-04-21 08:45:25', '2024-02-11 19:28:01', '2024-02-11 19:28:01'),
(2, 'Hyman Lehner DDS', 'reviewimg2.webp', 'Amet quis suscipit suscipit deserunt maiores perspiciatis animi. Voluptates alias qui ut. Impedit repudiandae nihil est commodi delectus amet perspiciatis at.', 2, 'customer', '2023-09-14 00:03:40', '2024-02-11 19:28:01', '2024-02-11 19:28:01'),
(3, 'Lulu Krajcik II', 'reviewimg3.webp', 'Libero tenetur officiis aut et odit. Incidunt consequatur vitae et dolor. Vel expedita sint aut excepturi sint. Odit voluptas aliquid velit fuga.', 4, 'user', '2023-03-27 17:27:14', '2024-02-11 19:28:01', '2024-02-11 19:28:01'),
(4, 'Frankie Ziemann', 'reviewimg4.webp', 'Ut nisi quaerat rerum accusantium corrupti earum. Pariatur in expedita sit facere. Ullam animi corrupti iure ipsam sed debitis sit.', 1, 'user', '2023-04-06 17:14:39', '2024-02-11 19:28:01', '2024-02-11 19:28:01'),
(5, 'Mr. Jesse Collins', 'reviewimg5.webp', 'Dolore molestias eos et deserunt aliquam et consequatur. Modi nobis possimus et deserunt magni aut. Soluta et labore est voluptatem aliquid. Natus voluptas consectetur aliquam molestiae dolores.', 3, 'user', '2024-02-10 17:28:07', '2024-02-11 19:28:01', '2024-02-11 19:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `doctorpositions`
--

CREATE TABLE `doctorpositions` (
  `id` bigint UNSIGNED NOT NULL,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Enmedicaldepartment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Armedicaldepartment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctorpositions`
--

INSERT INTO `doctorpositions` (`id`, `Enname`, `Arname`, `Enmedicaldepartment`, `Armedicaldepartment`, `Price`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(2, 'abc', 'def', NULL, NULL, 123, NULL, '2024-09-09 11:20:40', '2024-09-09 16:20:40', '2024-09-09 16:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint UNSIGNED NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specialty` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Experience` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fees` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ConsultTimings` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `Question` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `Question`, `Answer`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 'Tempore accusamus est repudiandae aut.', 'Minima nulla exercitationem explicabo. Quis recusandae maxime modi maxime. Vel rem pariatur voluptatem non reiciendis deleniti fugiat. Placeat voluptatem voluptatum nulla quia est aut culpa. Perspiciatis sit ratione voluptatum officiis qui tempore.', '2023-04-22 03:34:29', '2024-02-11 19:28:21', '2024-02-11 19:28:21'),
(2, 'Maiores maxime assumenda minima adipisci repudiandae.', 'Non et ut quaerat et tenetur voluptatem quo. Suscipit molestias laborum explicabo vel aut. Commodi cum atque sit excepturi voluptas dolore laudantium.', '2024-02-02 21:30:21', '2024-02-11 19:28:21', '2024-02-11 19:28:21'),
(3, 'Quia velit eos alias odio.', 'Ducimus odio labore eum enim aut eius similique qui. Ut molestiae non et velit facilis ipsum molestiae quo. Excepturi et aut pariatur fuga voluptates.', '2024-01-24 00:17:35', '2024-02-11 19:28:21', '2024-02-11 19:28:21'),
(4, 'Quis natus ex sit animi quia facilis non adipisci.', 'Debitis blanditiis et ad. Id autem omnis reiciendis consectetur illum hic. Sit aspernatur dolorem non est. Qui ipsum esse ad quia ipsum sequi.', '2023-09-02 09:16:07', '2024-02-11 19:28:21', '2024-02-11 19:28:21'),
(5, 'Voluptas accusantium et qui nam.', 'Error ut ut dignissimos expedita laborum. Et doloribus suscipit reiciendis recusandae sit iste. Aut voluptatem omnis qui vel. Magnam aperiam aspernatur dolor et.', '2023-07-26 18:47:52', '2024-02-11 19:28:21', '2024-02-11 19:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `generaljoinrequest`
--

CREATE TABLE `generaljoinrequest` (
  `id` bigint UNSIGNED NOT NULL,
  `Firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `City` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Companyname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Noofemployee` int DEFAULT NULL,
  `Insurance` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Male` tinyint(1) NOT NULL DEFAULT '0',
  `Female` tinyint(1) NOT NULL DEFAULT '0',
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `Type` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Homevisitnparamedic` tinyint(1) NOT NULL DEFAULT '0',
  `Telemedicinennurse` tinyint(1) NOT NULL DEFAULT '0',
  `Allnlabtech` tinyint(1) NOT NULL DEFAULT '0',
  `Othersnphysio` tinyint(1) NOT NULL DEFAULT '0',
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Newprice` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generaljoinrequest`
--

INSERT INTO `generaljoinrequest` (`id`, `Firstname`, `Lastname`, `Email`, `Phone`, `Country`, `City`, `Companyname`, `Noofemployee`, `Insurance`, `Male`, `Female`, `Status`, `Type`, `Homevisitnparamedic`, `Telemedicinennurse`, `Allnlabtech`, `Othersnphysio`, `Description`, `Price`, `Newprice`, `Gender`, `Logo`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 'Rahul', 'patel', 'r@gmail.combb', '1233123131', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'Nurse', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-06-12 07:16:46', '2024-06-12 01:46:46', '2024-06-12 01:46:46'),
(2, 'RaJ', 'p', 'r@gmail.combb', '1233123131', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'Insurance', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-06-12 07:17:39', '2024-06-12 01:47:39', '2024-07-02 23:23:02'),
(3, 'Rahul', NULL, 'r@gmail.combb', '1233123131', 'india', 'surat', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 0, 0, 0, 0, 'i want service', NULL, NULL, NULL, NULL, '2024-06-12 11:21:54', '2024-06-12 05:51:54', '2024-06-12 05:51:54'),
(4, 'Ajay info', NULL, 'ajay@gmail.com', '98989898', NULL, 'surat', NULL, NULL, NULL, 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'i want service', NULL, NULL, NULL, NULL, '2024-07-19 12:36:48', '2024-07-19 07:06:48', '2024-07-19 07:06:48'),
(5, 'Ajay info', NULL, 'ajay@gmail.com', '98989898', NULL, 'surat', 'india mart', NULL, '0', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'i want service', NULL, NULL, NULL, NULL, '2024-07-19 12:48:49', '2024-07-19 07:18:49', '2024-07-19 07:18:49'),
(6, 'Ajay info', NULL, 'ajay@gmail.com', '98989898', NULL, 'surat', 'india mart', 10, NULL, 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'i want service', NULL, NULL, NULL, NULL, '2024-07-19 13:20:52', '2024-07-19 18:20:52', '2024-07-19 18:20:52'),
(7, 'Ajay info', NULL, 'ajay@gmail.com', '98989898', NULL, 'surat', 'india mart', 10, NULL, 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'i want service', NULL, NULL, NULL, NULL, '2024-07-22 05:36:28', '2024-07-22 10:36:28', '2024-07-22 10:36:28'),
(8, 'Devi', NULL, 'dev@gmail.com', '98765456', NULL, 'Bangalore', 'XYZ Company', 25, 'Health Insurance', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'i want service', NULL, NULL, NULL, NULL, '2024-07-22 10:59:32', '2024-07-22 15:59:32', '2024-07-22 15:59:32'),
(9, 'Devi', NULL, 'dev@gmail.com', '98765456', NULL, 'Bangalore', 'XYZ Company', 25, 'Health Insurance', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'i want service', NULL, NULL, NULL, NULL, '2024-07-22 11:02:01', '2024-07-22 16:02:01', '2024-07-22 16:02:01'),
(10, 'dfg', NULL, 'supriya.h@biztechnosys.com', '1234567890', 'India', 'sd', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 0, 0, 0, 'asdfghjmnbvc', NULL, NULL, NULL, NULL, '2024-07-29 11:47:45', '2024-07-29 16:47:45', '2024-07-29 16:47:45'),
(11, 'supriya', 'H', 'supriya.h@biztechnosys.com', '1234567890', 'India', 'Bangalore', NULL, NULL, NULL, 0, 1, 0, 'Nurse', 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-07-29 11:48:03', '2024-07-29 16:48:03', '2024-07-29 16:48:03'),
(12, 'supriya', 'H', 'supriya.h@biztechnosys.com', '1234567890', 'India', 'Bangalore', NULL, NULL, NULL, 0, 1, 0, 'Nurse', 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-07-29 11:48:04', '2024-07-29 16:48:04', '2024-07-29 16:48:04'),
(13, 'XYZ Insurance', NULL, 'shreedhev98@gmail.com', '87654355', 'India', 'Bangalore', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 0, 0, 0, 'doctor provider service', NULL, NULL, NULL, NULL, '2024-08-05 11:47:43', '2024-08-05 16:47:43', '2024-08-05 16:47:43'),
(14, 'SADS', NULL, 'kumar@gmail.com', '94562754', 'India', 'sdads', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 1, 1, 1, 'asdsa', NULL, NULL, NULL, NULL, '2024-08-06 05:41:31', '2024-08-06 10:41:31', '2024-08-06 10:41:31'),
(15, 'Biztechnosys', NULL, 'abcd@gmail.com', '7823293842', 'India', 'Bangalore', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 0, 0, 0, 'doctor provider service', NULL, NULL, NULL, NULL, '2024-08-06 11:25:02', '2024-08-06 16:25:02', '2024-08-06 16:25:02'),
(16, 'supriya', 'h', 'supriya.h@sample.com', '8556782331', 'India', 'Bangalore', NULL, NULL, NULL, 0, 1, 0, 'Nurse', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 06:59:44', '2024-08-09 11:59:44', '2024-08-09 11:59:44'),
(17, 'vvz', NULL, 'akashti30504@gmail.com', '755778966', 'India', 'bang', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 0, 1, 0, 'asfsgdfg', NULL, NULL, NULL, NULL, '2024-08-09 09:47:45', '2024-08-09 14:47:45', '2024-08-09 14:47:45'),
(18, 'asd', 'tiwar', 'akashti30504@gmail.com', '567893454', 'India', 'bang', NULL, NULL, NULL, 1, 0, 0, 'Nurse', 1, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 09:50:12', '2024-08-09 14:50:12', '2024-08-09 14:50:12'),
(19, 'asd', 'tiwar', 'akashti30504@gmail.com', '882780390', 'India', 'bang', NULL, NULL, NULL, 0, 0, 0, 'Nurse', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 10:08:02', '2024-08-09 15:08:02', '2024-08-09 15:08:02'),
(20, 'asd', 'tiwar', 'akashti30504@gmail.com', '882780390', 'India', 'bang', NULL, NULL, NULL, 0, 0, 0, 'Nurse', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 10:08:03', '2024-08-09 15:08:03', '2024-08-09 15:08:03'),
(21, 'asd', 'tiwar', 'akashti30504@gmail.com', '882780390', 'India', 'bang', NULL, NULL, NULL, 0, 0, 0, 'Nurse', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 10:08:33', '2024-08-09 15:08:33', '2024-08-09 15:08:33'),
(22, 'Biztechnosys', NULL, 'abcd@gmail.com', '7823293842', 'India', 'Bangalore', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 0, 0, 0, 'doctor provider service', NULL, NULL, NULL, NULL, '2024-08-09 10:13:28', '2024-08-09 15:13:28', '2024-08-09 15:13:28'),
(23, 'asd', 'tiwar', 'akashti30504@gmail.com', '882780390', 'India', 'bang', NULL, NULL, NULL, 0, 0, 0, 'Nurse', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 10:14:16', '2024-08-09 15:14:16', '2024-08-09 15:14:16'),
(24, 'asd', 'tiwar', 'akashti30504@gmail.com', '882780390', 'India', 'bang', NULL, NULL, NULL, 0, 0, 0, 'Nurse', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 10:14:17', '2024-08-09 15:14:17', '2024-08-09 15:14:17'),
(25, 'asd', 'tiwar', 'akashti30504@gmail.com', '882780390', 'India', 'bang', NULL, NULL, NULL, 0, 0, 0, 'Nurse', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-09 10:14:17', '2024-08-09 15:14:17', '2024-08-09 15:14:17'),
(26, 'er', NULL, 'akashti30504@gmail.com', '882780390', 'rertty', 'bangrer', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 1, 1, 1, 'asfsgdfghg', NULL, NULL, NULL, NULL, '2024-08-09 10:14:34', '2024-08-09 15:14:34', '2024-08-09 15:14:34'),
(27, 'asd', NULL, 'akashti30504@gmail.com', '882780390223', NULL, 'bang', 'vvz', 456, 'sd', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'dssa', NULL, NULL, NULL, NULL, '2024-08-16 07:22:29', '2024-08-16 12:22:29', '2024-08-16 12:22:29'),
(28, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, '`', NULL, NULL, NULL, NULL, '2024-08-21 05:37:26', '2024-08-21 10:37:26', '2024-08-21 10:37:26'),
(29, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, '`', NULL, NULL, NULL, NULL, '2024-08-21 05:37:36', '2024-08-21 10:37:36', '2024-08-21 10:37:36'),
(30, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, '`', NULL, NULL, NULL, NULL, '2024-08-21 05:37:56', '2024-08-21 10:37:56', '2024-08-21 10:37:56'),
(31, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-21 05:39:33', '2024-08-21 10:39:33', '2024-08-21 10:39:33'),
(32, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-08-21 05:39:47', '2024-08-21 10:39:47', '2024-08-21 10:39:47'),
(33, 'Vijay', NULL, 'abcd@gmail.com', '7823293842', NULL, 'Bangalore', 'Biztechnosys', 33, 'dfghjk', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sdfghjk', NULL, NULL, NULL, NULL, '2024-08-22 05:38:57', '2024-08-22 10:38:57', '2024-08-22 10:38:57'),
(34, 'Vijay', NULL, 'abcd@gmail.com', '7823293842', NULL, 'Bangalore', 'Biztechnosys', 33, 'dfghjk', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sdfghjk', NULL, NULL, NULL, NULL, '2024-08-22 05:39:37', '2024-08-22 10:39:37', '2024-08-22 10:39:37'),
(35, 'supriya', NULL, 'supriya.h@biztechnosys.com', '8296400359', NULL, 'Bangalore', 'Biztechnosys', 87, 'qwe', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'asdfgh', NULL, NULL, NULL, NULL, '2024-08-22 05:40:33', '2024-08-22 10:40:33', '2024-08-22 10:40:33'),
(36, 'Vijay', NULL, 'abcd@gmail.com', '7823293842', NULL, 'Bangalore', 'Biztechnosys', 33, 'dfghjk', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sdfghjk', NULL, NULL, NULL, NULL, '2024-08-22 07:26:30', '2024-08-22 12:26:30', '2024-08-22 12:26:30'),
(37, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, 'skp', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:39:09', '2024-08-23 10:39:09', '2024-08-23 10:39:09'),
(38, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, 'skp', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:39:16', '2024-08-23 10:39:16', '2024-08-23 10:39:16'),
(39, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, 'skp', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:39:26', '2024-08-23 10:39:26', '2024-08-23 10:39:26'),
(40, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, 'skp', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:39:38', '2024-08-23 10:39:38', '2024-08-23 10:39:38'),
(41, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, 'skp', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:39:40', '2024-08-23 10:39:40', '2024-08-23 10:39:40'),
(42, 'Prashant', NULL, 'pk@gmail.com', '8084008754', NULL, 'skp', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:39:42', '2024-08-23 10:39:42', '2024-08-23 10:39:42'),
(43, 'Prasha', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:49:13', '2024-08-23 10:49:13', '2024-08-23 10:49:13'),
(44, 'Prasha', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:49:28', '2024-08-23 10:49:28', '2024-08-23 10:49:28'),
(45, 'Prasha', NULL, 'pk@gmail.com', '8084008754', NULL, '12324', 'dss', 12345, '1234', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'sda', NULL, NULL, NULL, NULL, '2024-08-23 05:50:06', '2024-08-23 10:50:06', '2024-08-23 10:50:06'),
(46, 'Devi', NULL, 'sri@gmail.com', '9287428213', NULL, 'Bangalore', 'xyz', 35, 'health', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'zcdsfs', NULL, NULL, NULL, NULL, '2024-09-11 06:34:12', '2024-09-11 11:34:12', '2024-09-11 11:34:12'),
(47, 'giva', NULL, 'fut@gmail.com', '9898543331', NULL, 'chennai', 'Demo', 25, 'health', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'dfgh', NULL, NULL, NULL, NULL, '2024-09-11 07:03:46', '2024-09-11 12:03:46', '2024-09-11 12:03:46'),
(48, 'Devishree', NULL, 'aivc@gmail.com', '9283428467', NULL, 'Bangalore', 'XYZ Company', 84, 'Health Insurance', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'test', NULL, NULL, NULL, NULL, '2024-09-20 06:35:47', '2024-09-20 11:35:47', '2024-09-20 11:35:47'),
(49, 'Devishree', NULL, 'aivc@gmail.com', '9283428467', NULL, 'Bangalore', 'XYZ Company', 84, 'Health Insurance', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'test', NULL, NULL, NULL, NULL, '2024-09-20 06:40:03', '2024-09-20 11:40:03', '2024-09-20 11:40:03'),
(50, 'Devishree', NULL, 'aivc@gmail.com', '9283428467', NULL, 'Bangalore', 'XYZ Company', 84, 'Health Insurance', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'test', NULL, NULL, NULL, NULL, '2024-09-20 06:44:23', '2024-09-20 11:44:23', '2024-09-20 11:44:23'),
(51, 'Devishree', NULL, 'aivc@gmail.com', '9283428467', NULL, 'Bangalore', 'XYZ Company', 84, 'Health Insurance', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'test', NULL, NULL, NULL, NULL, '2024-09-20 06:55:07', '2024-09-20 11:55:07', '2024-09-20 11:55:07'),
(52, 'Devi', NULL, 'shre@gmail.com', '9234728947', NULL, 'Bangalore', 'XYZ Company', 30, 'insurance', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'test', NULL, NULL, NULL, NULL, '2024-09-20 07:04:55', '2024-09-20 12:04:55', '2024-09-20 12:04:55'),
(53, 'Biztechnosys', NULL, 'abcd@gmail.com', '7823293842', 'India', 'Bangalore', NULL, NULL, NULL, 0, 0, 0, 'Insurance', 1, 0, 1, 0, 'I want insurance service', NULL, NULL, NULL, NULL, '2024-10-05 17:21:15', '2024-10-05 14:21:14', '2024-10-05 14:21:14'),
(54, 'Vijay', 'K', 'abcd@gmail.com', '7823293842', 'India', 'Bangalore', NULL, NULL, NULL, 1, 0, 0, 'Nurse', 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-10-05 17:41:24', '2024-10-05 14:41:24', '2024-10-05 14:41:24'),
(55, 'Vijay', NULL, 'abcd@gmail.com', '7823293842', NULL, 'Bangalore', 'Biztechnosys', 36, 'dre', 0, 0, 0, 'Corporate Wellness', 0, 0, 0, 0, 'erty', NULL, NULL, NULL, NULL, '2024-10-05 18:18:22', '2024-10-05 15:18:22', '2024-10-05 15:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `header_banners`
--

CREATE TABLE `header_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `Title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_banners`
--

INSERT INTO `header_banners` (`id`, `Title`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'Ipsam consequatur voluptas omnis quibusdam molestiae minus.', 'Dolorem aspernatur rem sunt ea est. Omnis enim commodi eum ad. Vitae ratione aut molestiae illum.', '2024-02-11 19:28:30', '2024-02-11 19:28:30'),
(2, 'Sit quam voluptatem asperiores tenetur similique.', 'Eos saepe quos quo dolore voluptatem. Sint dignissimos molestias aliquid. Nulla cum et voluptatem ex neque eos.', '2024-02-11 19:28:30', '2024-02-11 19:28:30'),
(3, 'Qui enim dolores numquam laboriosam rerum tempora.', 'Ullam exercitationem numquam vel ea sunt. Et modi voluptatem quas modi quaerat provident similique. Temporibus soluta atque blanditiis consequatur. Modi facilis voluptatum maiores quasi nisi ', '2024-02-11 19:28:30', '2024-02-11 19:28:30'),
(4, 'Non qui est eos.', 'Voluptate vero vero eaque. Sed mollitia fugiat temporibus natus. Soluta totam magnam nemo mollitia. Tempore eligendi enim quia laudantium velit.', '2024-02-11 19:28:30', '2024-02-11 19:28:30'),
(5, 'Perferendis labore reprehenderit dolor saepe iste aliquam.', 'Quas sint reprehenderit tempore et quia tempore adipisci. Ullam et qui quibusdam dolor vel. Officiis tenetur totam maxime.', '2024-02-11 19:28:30', '2024-02-11 19:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `image_path`, `redirect_url`, `created_at`, `updated_at`) VALUES
(18, 'Bringing Healthcare Home: Your Wellness, Our Priority', 'your trusted destination for comprehensive telehealth services. We are dedicated to revolutionizing the way you access healthcare by connecting you with experienced medical professionals from the comfort of your own home. Our advanced telehealth platform seamlessly integrates cutting-edge technology with compassionate care', 'banner/1728110769_bannergirl.png', 'http://127.0.0.1:8000/admin', '2024-08-26 12:09:45', '2024-10-05 03:46:09'),
(17, 'Bringing Healthcare Home: Your Wellness, Our Priority', 'your trusted destination for comprehensive telehealth services. We are dedicated to revolutionizing the way you access healthcare by connecting you with experienced medical professionals from the comfort of your own home. Our advanced telehealth platform seamlessly integrates cutting-edge technology with compassionate care', 'banner/1728110936_bannergirl.png', 'http://127.0.0.1:8000/admin', '2024-08-26 11:58:08', '2024-10-05 03:48:56'),
(16, 'Bringing Healthcare Home: Your Wellness, Our Priority', 'your trusted destination for comprehensive telehealth services. We are dedicated to revolutionizing the way you access healthcare by connecting you with experienced medical professionals from the comfort of your own home. Our advanced telehealth platform seamlessly integrates cutting-edge technology with compassionate care', 'banner/1728110965_bannergirl.png', 'https://127.0.0.1:8000/admin', '2024-08-26 11:55:12', '2024-10-05 03:49:25'),
(19, 'Discounts on blood tests', 'Check now while you are at home, stay comfortable!!!', 'banner/1728111014_bannergirl.png', 'https://zuwara.net/laboratory', '2024-09-02 12:40:44', '2024-10-05 03:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `joindocrequest`
--

CREATE TABLE `joindocrequest` (
  `id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `med_reg_expiry` date DEFAULT NULL,
  `med_reg_no` int DEFAULT NULL,
  `specialization` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subspecialization` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scfhs` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scfhsno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joindocrequest`
--

INSERT INTO `joindocrequest` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `country`, `city`, `languages`, `degree`, `department`, `med_reg_expiry`, `med_reg_no`, `specialization`, `subspecialization`, `scfhs`, `scfhsno`, `filename`, `service_type`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-27 02:55:23', '2024-06-27 02:55:23'),
(2, 'John', 'Doe', 'male', '1234567890', 'johndoe@example.com', 'USA', 'New York', NULL, NULL, NULL, NULL, NULL, 'Cardiology', 'Interventional Cardiology', '12345', '67890', 'uploads/01kLNnJ8v0a2jw5mM59CJJFGy6UEB5b26Po70uut.jpg', '[\"homevisit\",\"telemedicine\"]', 'This is a test description.', '2024-06-27 02:57:17', '2024-06-27 02:57:17'),
(3, 'Prashant', 'K', 'male', '9092541181', 'supr@gmail.com', 'India', 'Chennai', NULL, 'MBBS', 'Cardiology', '2024-08-02', 63424, 'Neurologist', 'Pediatric General Practice', 'Resident', '2342545', 'uploads/rKzZxtVEvgX1DmP1JqUFRIZonIWTb7RKxprjYywO.png', '[\"homevisit\",\"telemedicine\"]', 'doctor service', '2024-08-06 16:18:35', '2024-08-06 16:18:35'),
(4, 'Vijay', 'K', 'male', '7823293842', 'akash@gmail.com', 'India', 'Bangalore', NULL, 'MBBS', 'Cardiology', '2024-08-13', 23432, 'Pediatrician', 'Pediatric Psychiatry', 'Registrar', '2234', 'uploads/TPrl0eQhM4W0y1rXQ2kllFTFt4Hj8gFDNhNQMXkz.png', '[\"homevisit\"]', 'doctor service', '2024-08-09 15:17:02', '2024-08-09 15:17:02'),
(5, 'akash', 't', 'male', '8565465464', 'akashti30504@gmail.com', 'India', 'banglore', NULL, 'mbbs', 'cardiologyu', '2024-08-15', 3245445, 'Neurologist', 'Pediatric General Practice', 'Senor Registrar', '234323', 'uploads/ciiCZXCWzo7ZDVXnwIJ9T2QAKEWVOggqDAOLUAGj.png', '[\"homevisit\"]', 'dsfffdgf', '2024-08-09 15:25:53', '2024-08-09 15:25:53'),
(6, 'John', 'Doe', 'male', '1234567890', 'johndoa@example.com', 'USA', 'New York', 'English', 'master', 'abc', '2024-07-05', 1233, 'Cardiology', 'Interventional Cardiology', '12345', '67890', NULL, '[\"homevisit\",\"telemedicine\"]', 'This is a test description.', '2024-10-05 14:26:49', '2024-10-05 14:26:49'),
(7, 'John', 'Doe', 'male', '1234567890', 'jdoa@example.com', 'USA', 'New York', 'English', 'master', 'abc', '2024-07-05', 1233, 'Cardiology', 'Interventional Cardiology', '12345', '67890', NULL, '[\"homevisit\",\"telemedicine\"]', 'This is a test description.', '2024-10-05 14:31:36', '2024-10-05 14:31:36'),
(8, 'Vijay', 'K', 'male', '7823293842', 'suo@gmail.com', 'India', 'Bangalore', NULL, 'MBBS', 'Cardiology', '2024-10-10', 998778, 'Neurologist', 'Pediatric General Practice', 'Senor Registrar', '7687', 'uploads/bYZrsRdgzGxL1QSUG6OAe10aMvFpQBiDxbYkXbjd.png', '[\"homevisit\"]', 'uuyit', '2024-10-05 14:37:15', '2024-10-05 14:37:15'),
(9, 'Vijay', 'K', 'male', '9823293842', 'klio@gmail.com', 'India', 'Bangalore', NULL, 'MBBS', 'Cardiology', '2024-10-09', 9987786, 'Neurologist', 'Pediatric General Practice', 'Senor Registrar', '56789', 'uploads/eChH0tzAKdppdfP2ramTCB2tFYOQYNs9OnrbH1Hs.png', '[\"homevisit\",\"telemedicine\"]', 'doctor service', '2024-10-05 14:39:18', '2024-10-05 14:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `laborotaryservices`
--

CREATE TABLE `laborotaryservices` (
  `id` bigint UNSIGNED NOT NULL,
  `Title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TypeOfService` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `labservicesid` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laborotaryservices`
--

INSERT INTO `laborotaryservices` (`id`, `Title`, `Image`, `Status`, `CreatedAt`, `TypeOfService`, `labservicesid`, `created_at`, `updated_at`) VALUES
(1, 'Nemo perspiciatis eos quos mollitia minus maiores quaerat.', 'https://via.placeholder.com/640x480.png/00ccbb?text=eum', 1, '2024-03-04 06:53:22', 'Body Function and Health Concern', 1, NULL, NULL),
(2, 'Nemo perspiciatis eos quos mollitia minus maiores quaerat.', 'https://via.placeholder.com/640x480.png/00ccbb?text=eum', 1, '2024-03-04 06:54:06', 'Most Help Packages', 2, NULL, NULL),
(3, 'Nemo perspiciatis eos quos mollitia minus maiores quaerat.', 'https://via.placeholder.com/640x480.png/00ccbb?text=eum', 1, '2024-03-04 06:54:42', 'Our Featured Tests', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicalspecialties`
--

CREATE TABLE `medicalspecialties` (
  `id` bigint UNSIGNED NOT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estimatedtime` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicalspecialties`
--

INSERT INTO `medicalspecialties` (`id`, `Logo`, `Enname`, `Arname`, `Estimatedtime`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, '/uploads/ss16.png', 'purvesh', 'z', '1 Hour', 0, '2024-04-02 07:13:02', '2024-04-02 01:43:02', '2024-04-02 06:58:56'),
(2, '/uploads/ss9.png', 'rahul', NULL, '1 Hour', 0, '2024-04-12 05:59:17', '2024-04-12 00:29:17', '2024-04-17 00:08:35'),
(3, '/uploads/istockphoto-1490631385-612x612.jpg', 'saichatri', 'الصحة العقلية', '1 Hour', NULL, '2024-08-14 13:04:03', '2024-08-14 18:04:03', '2024-08-14 18:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(47, '2024_03_15_125706_create_verification_codes_table', 19),
(48, '2014_10_12_200000_add_two_factor_columns_to_users_table', 20),
(53, '2024_03_20_053046_create_sessions_table', 22),
(54, '2024_03_21_045633_add_otp_token_to_users_table', 23),
(55, '2024_03_22_051906_create_otp_passwords_table', 24),
(167, '2024_03_26_061008_create_otp_verifications_table', 25),
(169, '2024_03_07_045903_create_serviceprovider_table', 26),
(170, '2024_03_11_054943_create_services_table', 27),
(171, '2024_03_11_083343_create_ourservices_table', 28),
(172, '2024_03_12_050342_create_subservices_table', 29),
(173, '2024_03_12_120232_create_medicalspecialties_table', 30),
(206, '2014_10_12_000000_create_users_table', 31),
(207, '2014_10_12_100000_create_password_resets_table', 31),
(208, '2019_08_19_000000_create_failed_jobs_table', 31),
(209, '2019_12_14_000001_create_personal_access_tokens_table', 31),
(210, '2024_02_07_123626_create_header_banner_table', 31),
(211, '2024_02_07_123639_create_zwaara_services_table', 31),
(212, '2024_02_07_123651_create_service_addresses_table', 31),
(213, '2024_02_07_123706_create_customer_reviews_table', 31),
(214, '2024_02_07_123719_create_faqs_table', 31),
(215, '2024_02_07_123731_create_subscriptions_table', 31),
(216, '2024_02_07_123743_create_virtual_consultation_table', 31),
(217, '2024_02_07_123756_create_doctors_table', 31),
(218, '2024_02_21_111534_update_customer_reviews_table', 31),
(219, '2024_03_04_121041_create_laborotaryservices_table', 31),
(220, '2024_03_12_123500_create_submedicalspecialties_table', 31),
(221, '2024_03_12_131240_create__alldoctors_table', 31),
(222, '2024_03_13_052001_create__doctorpositions_table', 32),
(223, '2024_03_13_052345_create__joindocrequest_table', 33),
(224, '2024_03_13_115110_create__patientregistration_table', 33),
(225, '2024_03_13_132513_create__allusers_table', 34),
(226, '2024_03_13_135526_create__offers_table', 34),
(227, '2024_03_14_053003_create_bookings_table', 34),
(228, '2024_03_14_053344_create_contacts_table', 35),
(239, '2024_03_14_053739_create_bankinginfo_table', 36),
(241, '2024_03_14_055347_create_complaints_table', 37),
(243, '2024_04_01_050413_add_spid_to_services_table', 38),
(244, '2024_04_01_112058_add_status_to_ourservices_table', 39),
(245, '2024_04_01_112058_add_status_to_subservices_table', 40),
(247, '2024_04_02_060003_add_new_field_to_table', 41),
(248, '2024_04_01_112058_add_status_to_submedicalspecialties_table', 42),
(249, '2024_04_02_060003_add_medicalspec_to_table', 43),
(250, '2024_04_01_112058_add_status_to_alldoctor_table', 44),
(251, '2024_04_01_112058_add_status_to_joindocrequest_table', 45),
(252, '2024_04_01_112058_add_status_to_offers_table', 46),
(253, '2024_04_02_060003_add_healthcareid_to_table', 47),
(255, '2024_03_13_115111_create__patientregistration_table', 48),
(256, '2024_04_02_060003_add__packagename_to_subservice', 49),
(257, '2024_04_02_060003_add__testcategory_to_subservice', 50),
(258, '2024_04_02_060003_add__subsevicename_to_subservice', 51),
(259, '2024_04_02_060002_add_healthcareid_to_table', 52),
(260, '2024_04_02_060003_add__testcategory_to_table', 53),
(261, '2024_04_02_060003_add_estimatedtimeinserviceprovider_to_table', 54),
(262, '2024_05_20_054613_create_zone_table', 55),
(263, '2024_04_02_060003_add_medicaldepartmentindoctorposition_to_table', 56),
(264, '2024_05_20_054613_create_attachment_table', 57),
(265, '2024_05_22_042420_create_serviceproviderreques_table', 58),
(266, '2024_04_02_060003_add_startandenddateinoffer_to_table', 59),
(267, '2024_04_02_060003_add_typeinpatient_to_table', 60),
(268, '2024_05_23_050445_create_termcondition_table', 61),
(269, '2024_05_23_050731_create_privacypolicy_table', 62),
(270, '2024_04_02_060003_add_relatedto_patientregistration_to_table', 63),
(271, '2024_04_02_060003_add_location_fees_serviceprovider_to_table', 64),
(272, '2024_04_02_060003_add_share_serviceprovider_to_table', 65),
(273, '2024_04_01_112058_add_status_to_users_table', 66),
(274, '2024_04_02_060003_add_fieldsbooking_to_table', 67),
(275, '2024_04_01_050413_add_spid_to_subservices_table', 68),
(276, '2024_04_01_050413_add_fields_to_bankinginfo_table', 69),
(277, '2024_06_07_122948_create__scheduleconfiguration_table', 70),
(278, '2024_06_07_122948_create__scheduleconfigurationnew_table', 71),
(279, '2024_06_07_122948_create__scheduleconfigurationn_table', 72),
(280, '2024_06_12_062034_create_generaljoinrequest_table', 73),
(281, '2024_06_13_045526_create_images_table', 74),
(282, '2024_04_01_050413_add_Coordinates_to_zone_table', 75),
(283, '2024_04_01_050413_add_Healthcareid_to_zone_table', 76),
(284, '2024_06_18_063342_create_practitioners_table', 77),
(285, '2024_06_19_043903_create_countries_table', 78),
(286, '2024_06_19_044009_create_cities_table', 79),
(287, '2024_06_19_072637_create_zones_table', 80),
(288, '2024_04_01_050413_add_others_to_zone_table', 81),
(289, '2024_04_02_060003_add_allpendingfieldsbooking_to_table', 82),
(290, '2024_03_13_052346_create__joindocrequest_table', 83),
(291, '2024_05_22_042421_create_serviceproviderreques_table', 84),
(292, '2024_04_01_112058_add_status_to_serviceproviderreq_table', 85),
(293, '2024_04_02_060003_add_allpendingfieldspatientregistration_to_table', 86),
(294, '2024_04_02_060003_add_patientidfieldsbooking_to_table', 87),
(295, '2024_04_02_060003_add_fieldstoalldoctors_to_table', 88),
(296, '2024_04_02_060003_add_fieldstojoindoctorreq_to_table', 89),
(297, '2024_04_02_060003_add_fieldstoimages_to_table', 90),
(298, '2024_07_08_060003_add_allfieldspatientr_to_table', 91),
(299, '2024_07_08_060003_add_allfieldgeneraljoinrequest_to_table', 92),
(300, '2024_07_24_050843_create_payments_table', 93),
(301, '2024_04_02_060003_add_fieldstopayments_to_table', 94),
(302, '2024_04_02_060003_add_packagefieldtopayments_to_table', 95),
(303, '2024_04_02_060003_add_fieldstobooking_to_table', 96),
(304, '2024_08_20_071026_create_bookingsattachments_table', 97);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Percantage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Count` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `Servicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Healthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Healthcarename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Startdate` date DEFAULT NULL,
  `Enddate` date DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `Name`, `Logo`, `Code`, `Percantage`, `Count`, `Type`, `Status`, `Servicename`, `Subservicename`, `Healthcare`, `Healthcarename`, `Startdate`, `Enddate`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 'CRM -DOCTORss', '/uploads/ss1.png', 'sdda', '1', '112', 'Riyadh', 1, 'Riyadh', 'Riyadh', 'Home made clinics', NULL, NULL, NULL, '2024-04-03 06:22:41', '2024-04-03 00:52:41', '2024-04-03 01:00:49'),
(2, 'nilesh patadia', '/uploads/adharbill.png', 'sdda', '1', '112', 'Riyadh', 0, 'Riyadh', 'Jeddah', '3,2', NULL, NULL, NULL, '2024-04-04 07:33:52', '2024-04-04 02:03:52', '2024-04-04 02:03:52'),
(3, 'nilesh patadiaaaa', '/uploads/accountcrm1.png', NULL, NULL, NULL, 'Single', 0, 'Laboratory', NULL, '2', 'purvesh,3', NULL, NULL, '2024-04-08 05:06:03', '2024-04-07 23:36:03', '2024-04-07 23:36:03'),
(4, 'nilesh patadia', '/uploads/adharbill.png', 'sdda', NULL, '112', 'Single', 0, 'Laboratory', 'Full body', '2', 'purvesh,3', NULL, NULL, '2024-04-08 05:08:00', '2024-04-07 23:38:00', '2024-04-07 23:38:00'),
(5, 'nilesh patadia', '/uploads/adharbill.png', NULL, NULL, '112', 'Single', 0, 'Laboratory', 'Full body', '2,3,4', 'purvesh,purr,purr', NULL, NULL, '2024-04-08 05:14:41', '2024-04-07 23:44:41', '2024-04-07 23:44:41'),
(6, 'nilesh patadia', '/uploads/adharbill.png', NULL, NULL, '112', 'Single', 0, 'purvesh', 'a', '3', 'purr', NULL, NULL, '2024-04-08 05:35:34', '2024-04-08 00:05:34', '2024-04-08 00:05:34'),
(7, 'nilesh patadia', NULL, NULL, NULL, '112', 'Single', 0, 'purvesh', 'a', '3', 'purr', NULL, NULL, '2024-04-08 05:35:54', '2024-04-08 00:05:54', '2024-05-08 16:23:57'),
(8, 'nilesh patadia', NULL, NULL, NULL, '112', 'Single', 0, 'purvesh', 'a', '2', 'purvesh', NULL, NULL, '2024-04-08 05:35:54', '2024-04-08 00:05:54', '2024-04-08 00:05:54'),
(9, 'nilesh patadia', NULL, NULL, NULL, '112', 'Single', 0, 'purvesh', 'a', '4', 'purr', NULL, NULL, '2024-04-08 05:35:54', '2024-04-08 00:05:54', '2024-04-08 00:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `otp_passwords`
--

CREATE TABLE `otp_passwords` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `otp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_verifications`
--

CREATE TABLE `otp_verifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `otp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ourservices`
--

CREATE TABLE `ourservices` (
  `id` bigint UNSIGNED NOT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Testcategory` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Endescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Ardescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Status` tinyint(1) DEFAULT '0',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourservices`
--

INSERT INTO `ourservices` (`id`, `Logo`, `Enname`, `Arname`, `Testcategory`, `Endescription`, `Ardescription`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(10, '/uploads/vaccination.png', 'Vaccination', NULL, 'Medical', NULL, NULL, 1, '2024-05-09 05:25:50', '2024-05-09 10:25:50', '2024-08-30 10:01:52'),
(4, '/uploads/Nurse visit.png', 'Nurse visit', NULL, 'Medical', NULL, NULL, 1, '2024-04-24 12:27:54', '2024-04-24 17:27:54', '2024-08-30 10:01:34'),
(5, '/uploads/home visit docter.png', 'Home visit Doctor', NULL, 'Medical', NULL, NULL, 1, '2024-04-24 12:28:26', '2024-04-24 17:28:26', '2024-08-30 10:01:19'),
(6, '/uploads/Vitamin IV drops.png', 'Vitamin IV Drips', NULL, 'Medical', NULL, NULL, 1, '2024-04-24 12:29:11', '2024-04-24 17:29:11', '2024-08-30 10:00:59'),
(7, '/uploads/care giver.png', 'Caregiver', NULL, 'Medical', NULL, NULL, 1, '2024-04-24 12:29:33', '2024-04-24 17:29:33', '2024-08-30 10:00:42'),
(9, '/uploads/laborotory.png', 'Laboratory', NULL, 'Medical', NULL, NULL, 1, '2024-05-08 11:37:18', '2024-05-08 16:37:18', '2024-08-29 17:27:44'),
(11, '/uploads/Physiotherapist.png', 'Physiotherapist', NULL, 'Medical', NULL, NULL, 1, '2024-05-09 05:38:51', '2024-05-09 10:38:51', '2024-08-30 10:02:38'),
(12, '/uploads/Radiology.png', 'Radiology', NULL, 'Medical', NULL, NULL, 1, '2024-05-09 05:40:15', '2024-05-09 10:40:15', '2024-08-30 10:02:18'),
(13, '/uploads/Corporatewellness.png', 'Corporate wellness', NULL, 'Medical', NULL, NULL, 1, '2024-05-09 05:41:01', '2024-05-09 10:41:01', '2024-08-30 10:06:30'),
(14, '/uploads/Virtual consultation.png', 'Virtual Consultation', NULL, 'Medical', NULL, NULL, 1, '2024-07-22 05:33:48', '2024-07-22 10:33:48', '2024-08-30 10:03:18'),
(15, '/uploads/Vitamins.png', 'Seasonal flu', NULL, 'Medical', NULL, NULL, 1, '2024-08-06 11:27:33', '2024-08-06 16:27:33', '2024-08-30 10:36:13'),
(16, '/uploads/WhatsApp Image 2024-08-14 at 2.56.07 PM.jpeg', 'Sports  Health', 'الصحة الرياضية', NULL, 'It focuses on maintaining fitness and preventing diseases through regular physical activity', 'الصحة الرياضية تعني الحفاظ على اللياقة والوقاية من الأمراض من خلال النشاط البدني المنتظم', 1, '2024-08-14 11:59:44', '2024-08-14 16:59:44', '2024-10-03 09:24:28'),
(40, '/uploads/17056957_5834554 3.png', 'Home spa massage', NULL, 'Non medical', NULL, NULL, 1, '2024-10-05 06:19:44', '2024-10-05 03:19:44', '2024-10-05 03:19:46'),
(41, '/uploads/Group 1261155118 (1).png', 'Laser hair removal at home', NULL, 'Non medical', NULL, NULL, 1, '2024-10-05 06:22:58', '2024-10-05 03:22:58', '2024-10-05 03:23:22'),
(20, '/uploads/Group.png', 'Iqama', NULL, 'Medical', NULL, NULL, 1, '2024-08-16 09:04:03', '2024-08-16 03:34:03', '2024-10-03 09:25:44'),
(22, '/uploads/تنزيل (1).jpeg', 'Advanced medical laboratories', 'المختبرات الطبية المتقدمة', 'Medical', 'Haya laboratories perform accurate medical examinations for clients by taking blood samples at home and sending them to the laboratory', 'هيا مختبرات تقوم على فحوصات طبية دقيقة للعملاء من خلال اخذ عينات دم داخل المنزل وارسالها الى المختبر', 0, '2024-08-28 06:42:29', '2024-08-28 11:42:29', '2024-10-05 02:09:11'),
(37, '/uploads/beauty salon 1 (1).png', 'Beauty salon at home', NULL, 'Non medical', NULL, NULL, 1, '2024-10-05 05:31:54', '2024-10-05 02:31:54', '2024-10-05 03:25:47'),
(42, '/uploads/9e9c1de1489b1d508134aafd9e808948-1024x576.jpg', 'Advanced hair test', 'تىست ادوانسيد هير تيست', 'Non medical', '12345', 'مرهبا! صباء الكير', 1, '2024-10-05 09:18:44', '2024-10-05 06:18:44', '2024-10-05 06:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patientaddress`
--

CREATE TABLE `patientaddress` (
  `id` bigint UNSIGNED NOT NULL,
  `Userid` int NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientaddress`
--

INSERT INTO `patientaddress` (`id`, `Userid`, `Name`, `Address`, `Status`, `created_at`, `updated_at`) VALUES
(3, 3, 'Devishree', '15th cross,24th main road, jp nagar 6th phase, bangalore,karnataka', NULL, '2024-09-06 00:39:00', '2024-09-06 12:47:19'),
(4, 2, 'nik', 'address2', NULL, '2024-09-06 00:47:14', '2024-09-06 00:47:14'),
(6, 2, 'nikkokok', 'address2kok', NULL, '2024-09-06 12:42:03', '2024-09-06 12:42:03'),
(20, 199, 'Louis henry', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, '2024-09-19 16:22:00', '2024-09-19 16:22:00'),
(12, 100, 'Loui Hen', 'Maharashtra', NULL, '2024-09-09 11:48:07', '2024-09-09 15:07:16'),
(14, 100, 'Supriya', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, '2024-09-09 11:52:21', '2024-09-09 11:52:21'),
(15, 407, 'DEVISHREE', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, '2024-09-09 12:48:47', '2024-09-09 12:48:47'),
(18, 44, 'Supriya', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, '2024-09-10 11:51:55', '2024-09-10 11:51:55'),
(19, 44, 'Supriya2', 'Gulkana Airport, Glennallen, Alaska 99586, United States', NULL, '2024-09-10 11:53:06', '2024-09-10 11:53:06'),
(24, 44, 'Dev S', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, '2024-09-19 16:44:51', '2024-09-19 16:44:51'),
(23, 44, 'Dev S', 'Whitehorse Family Restaurant, 24th Main, J P Nagar 6th Phase, Bengaluru, Karnataka 560078, India', NULL, '2024-09-19 16:29:47', '2024-09-19 16:29:47'),
(26, 18, 'namrata janti', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, '2024-09-19 17:55:36', '2024-09-19 17:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `id` bigint UNSIGNED NOT NULL,
  `Relatedto` bigint DEFAULT NULL,
  `Firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Confirmpassword` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dob` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nationality` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Borderno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sponserid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Passportid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Iqamatype` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Maritalstatus` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Height` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Weight` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bloodgroup` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Relationship` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InsuranceCompany` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Insuranceaccno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nationalid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`id`, `Relatedto`, `Firstname`, `Lastname`, `Phone`, `Email`, `Username`, `Password`, `Confirmpassword`, `Dob`, `Age`, `Nationality`, `Borderno`, `Sponserid`, `Passportid`, `Iqamatype`, `Maritalstatus`, `Height`, `Weight`, `Bloodgroup`, `Relationship`, `InsuranceCompany`, `Insuranceaccno`, `Gender`, `Country`, `Type`, `Status`, `Nationalid`, `Description`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Updated Name', 'asasda', '123', 'updated.email@example.com', 'asasda', '$2y$10$Od1sLBOirxJ9yEwXXYc5zuR.i35tSdGvOF6Fnuu6Rf.Tz6qBLMuJq', NULL, '2022-02-02', '23', 'oiii', NULL, NULL, NULL, NULL, 'singl', '5.22', '20', NULL, 'singlw', NULL, NULL, 'male', 'ni', 'Register', '0', '122', NULL, '2024-05-17 05:42:23', '2024-05-17 00:12:23', '2024-09-06 12:05:05'),
(305, NULL, 'abdulrahman', 'dd', '0555552022', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'sa', '3333', '3333', '3333', 'reewrew', NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, NULL, '2024-08-23 15:24:31', '2024-08-23 20:24:31', '2024-08-23 20:24:31'),
(6, 1, NULL, 'kabu', '1233123131', 'r@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non Register', '1', NULL, NULL, '2024-05-28 06:05:08', '2024-05-28 00:35:08', '2024-05-29 01:56:13'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-14 11:44:56', '2024-06-14 06:14:56', '2024-06-14 06:14:56'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-14 11:52:06', '2024-06-14 06:22:06', '2024-06-14 06:22:06'),
(9, NULL, 'purvesh', 'ramoliya', '9898989897', 'pp@gmail.compp', NULL, '$2y$10$hXho.uzHsoH8md73C46.S.1awRwC1ylpooR/80EBpag/3HJ9XmVhS', NULL, '31/10/1992', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'india', NULL, NULL, '2331312', NULL, '2024-06-14 11:59:22', '2024-06-14 06:29:22', '2024-06-14 06:29:22'),
(10, NULL, 'purvesh', 'ramoliya', '9898989898', 'r@G.com', NULL, '$2y$10$Z9nhuRDW1WdT7.TIoWFey.P3Z9gycmfCrnyAhZpKXgMA1iUo2hc2a', NULL, '2004-06-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'm', 'india', 'register', '1', '1313123', NULL, '2024-06-21 12:34:56', '2024-06-21 07:04:56', '2024-07-02 23:36:17'),
(11, NULL, 'Suresh', 'Patel', '1233123131', NULL, NULL, NULL, NULL, '23/08/2002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'india', NULL, NULL, '123344', NULL, '2024-07-05 05:15:15', '2024-07-04 23:45:15', '2024-07-04 23:45:15'),
(12, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-07-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', 'vvz', NULL, 'male', 'india', NULL, NULL, '75876', NULL, '2024-07-24 13:03:11', '2024-07-24 18:03:11', '2024-07-24 18:03:11'),
(13, NULL, 'aaaa', 'tt', '5678934562', 'akashti30504@gmail.com', NULL, '$2y$10$y4YTXYbfIVL5QkrnhtQGFO.zouWwemMQOC0JfdeSajuVIF7U5naIG', NULL, '2024-07-25T12:59:45.189Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-07-25 13:00:07', '2024-07-25 18:00:07', '2024-07-25 18:00:07'),
(14, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-07-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', 'vvz', NULL, 'male', 'india', NULL, NULL, '75876', NULL, '2024-07-26 13:13:42', '2024-07-26 18:13:42', '2024-07-26 18:13:42'),
(15, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', 'vvz', NULL, 'male', 'india', NULL, NULL, '75876', NULL, '2024-07-29 04:49:23', '2024-07-29 09:49:23', '2024-07-29 09:49:23'),
(16, NULL, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-07-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'Biztechnosys', NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-07-29 04:51:14', '2024-07-29 09:51:14', '2024-07-29 09:51:14'),
(17, NULL, 'abdulrahman', 'essa', '0555552022', 'abdulrahman@alaqa.net', NULL, '$2y$10$y1ZPQqTJnnbRQDVqhZ0MKuqEwBTOi7H4mFAWrYFn7bwF2JQdYpulS', NULL, '2024-07-29T13:52:48.303Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', '0', '101111111', NULL, '2024-07-29 13:54:08', '2024-07-29 18:54:08', '2024-08-14 18:02:15'),
(18, NULL, 'supriya', 'H', '8296400359', 'supriya.h@biztechnosys.com', NULL, '$2y$10$s/yB9tHW59P0YVo06uYERevFNh1EMkK7Z8P5wFfHVMgIiFxRRk4y.', NULL, '2024-06-29T18:30:00.000Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '12345678', NULL, '2024-07-30 10:02:03', '2024-07-30 15:02:03', '2024-07-30 15:02:03'),
(19, 1, 'asdfg', 'asd', '8296400359', NULL, NULL, NULL, NULL, '2024-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Father', NULL, NULL, 'female', 'india', NULL, NULL, '1234r5', NULL, '2024-07-30 10:07:03', '2024-07-30 15:07:03', '2024-07-30 15:07:03'),
(20, 1, 'asd', 'tiwar', '8827803902', NULL, NULL, NULL, NULL, '2024-07-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', 'india', NULL, NULL, '75876', NULL, '2024-07-30 12:13:57', '2024-07-30 17:13:57', '2024-07-30 17:13:57'),
(21, 1, 'sasa', 'sdd', '2344324456', NULL, NULL, NULL, NULL, '2024-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Brother', NULL, NULL, 'male', 'india', NULL, NULL, '3244', NULL, '2024-07-30 12:16:35', '2024-07-30 17:16:35', '2024-07-30 17:16:35'),
(22, 1, 'asd', 'tiwar', '8827803902', NULL, NULL, NULL, NULL, '2024-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '75876', NULL, '2024-07-30 12:28:48', '2024-07-30 17:28:48', '2024-07-30 17:28:48'),
(23, 1, 'asd', 'tiwar', '8827803902', NULL, NULL, NULL, NULL, '2024-07-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '75876', NULL, '2024-07-30 13:13:21', '2024-07-30 18:13:21', '2024-07-30 18:13:21'),
(24, 1, 'JDSGAYTF', 's', '9876543212', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '32222223', NULL, '2024-08-01 05:18:28', '2024-08-01 10:18:28', '2024-08-01 10:18:28'),
(25, NULL, 'Prashant', 'Kumar', '8084008752', 'pk@gmail.com', NULL, '$2y$10$lZ6hyHRLadCr70f2DC1QPueM9f2fMez3aEXAerrQYaa03F55.Enb.', NULL, '2009-04-30T18:30:00.000Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '123456789', NULL, '2024-08-01 05:26:53', '2024-08-01 10:26:53', '2024-08-01 10:26:53'),
(26, 1, 'golu', 'kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '534', NULL, '2024-08-01 06:06:22', '2024-08-01 11:06:22', '2024-08-01 11:06:22'),
(27, 1, 'Golu', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '23', NULL, '2024-08-01 06:07:57', '2024-08-01 11:07:57', '2024-08-01 11:07:57'),
(28, 1, 'Golu', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '32', NULL, '2024-08-01 06:22:17', '2024-08-01 11:22:17', '2024-08-01 11:22:17'),
(29, 1, 'jhjk', 'jhkj', '8768768698', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', 'Egypt', NULL, NULL, '785875', NULL, '2024-08-01 06:40:56', '2024-08-01 11:40:56', '2024-08-01 11:40:56'),
(30, 1, 'jyfjfj', 'kihi', '8765432145', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Father', NULL, NULL, 'male', 'india', NULL, NULL, '896789', NULL, '2024-08-01 06:45:08', '2024-08-01 11:45:08', '2024-08-01 11:45:08'),
(31, 1, 'Golu', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '54', NULL, '2024-08-01 06:48:20', '2024-08-01 11:48:20', '2024-08-01 11:48:20'),
(32, 1, 'golu', 'kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '465', NULL, '2024-08-01 09:24:57', '2024-08-01 14:24:57', '2024-08-01 14:24:57'),
(33, 1, 'Golu', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '435', NULL, '2024-08-01 09:59:07', '2024-08-01 14:59:07', '2024-08-01 14:59:07'),
(34, 1, 'Golu', 'kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '43', NULL, '2024-08-01 10:01:25', '2024-08-01 15:01:25', '2024-08-01 15:01:25'),
(35, 1, 'Golu', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '43', NULL, '2024-08-01 11:01:32', '2024-08-01 16:01:32', '2024-08-01 16:01:32'),
(36, 1, 'Golu', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '34', NULL, '2024-08-01 11:29:55', '2024-08-01 16:29:55', '2024-08-01 16:29:55'),
(37, NULL, 'supriya', 'H', '8296400359', 'anagha@gmail.com', NULL, '$2y$10$9We10j8zCSEbR7KoRe3Pke1eg.20kMC2w7P68Tvw/ld0qUWHj1c4i', NULL, '2024-08-02T05:13:50.229Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345678', NULL, '2024-08-02 05:14:13', '2024-08-02 10:14:13', '2024-08-02 10:14:13'),
(38, 1, 'supriya', 'hanchinamani', '9999999999', NULL, NULL, NULL, NULL, '2024-08-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'male', 'india', NULL, NULL, '12345678', NULL, '2024-08-02 05:17:31', '2024-08-02 10:17:31', '2024-08-02 10:17:31'),
(39, 1, 'Prashant', 'Kumar', '4232456432', NULL, NULL, NULL, NULL, '2024-08-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '67732', NULL, '2024-08-02 05:55:23', '2024-08-02 10:55:23', '2024-08-02 10:55:23'),
(40, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-08-02 06:13:57', '2024-08-02 11:13:57', '2024-08-02 11:13:57'),
(41, NULL, 'abhi', 'gfgf', '9999999999', 'abhi@gmail.com', NULL, '$2y$10$l2brkBNUHDwD8PBEmfUAoOpx9xB3ZBDdLSWhlYj0F3ijh3wJz07.O', NULL, '2024-08-02T09:14:23.196Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, 'cv ncvncvnvc', NULL, '2024-08-02 09:14:38', '2024-08-02 14:14:38', '2024-08-02 14:14:38'),
(42, 1, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '353', NULL, '2024-08-03 06:34:20', '2024-08-03 11:34:20', '2024-08-03 11:34:20'),
(43, 1, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '353', NULL, '2024-08-03 06:34:20', '2024-08-03 11:34:20', '2024-08-03 11:34:20'),
(44, 1, 'supriya', 'h', '8056395114', NULL, NULL, NULL, NULL, '2024-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '765567', NULL, '2024-08-03 06:37:11', '2024-08-03 11:37:11', '2024-08-03 11:37:11'),
(45, 1, 'supriya', 'h', '8056395114', NULL, NULL, NULL, NULL, '2000-06-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '765567', NULL, '2024-08-03 07:06:54', '2024-08-03 12:06:54', '2024-08-03 12:06:54'),
(46, 1, 'Anamika', 'ran', '9875673223', NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Mother', NULL, NULL, 'female', 'india', NULL, NULL, '45678', NULL, '2024-08-03 07:07:31', '2024-08-03 12:07:31', '2024-08-03 12:07:31'),
(47, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', NULL, NULL, NULL, 'Male', NULL, NULL, NULL, '353', NULL, '2024-08-03 07:34:48', '2024-08-03 12:34:48', '2024-08-03 12:34:48'),
(48, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', NULL, NULL, NULL, 'Male', NULL, NULL, NULL, '353', NULL, '2024-08-03 07:34:52', '2024-08-03 12:34:52', '2024-08-03 12:34:52'),
(49, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Father', 'r', NULL, 'male', NULL, NULL, NULL, '353', NULL, '2024-08-03 07:35:51', '2024-08-03 12:35:51', '2024-08-03 12:35:51'),
(50, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'jhguhg', NULL, 'male', NULL, NULL, NULL, '353', NULL, '2024-08-03 08:09:30', '2024-08-03 13:09:30', '2024-08-03 13:09:30'),
(51, 1, 'supriya', 'h', '7654324343', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '12345', NULL, '2024-08-03 08:13:38', '2024-08-03 13:13:38', '2024-08-03 13:13:38'),
(52, 1, 'Anamika', 'ran', '9875673223', NULL, NULL, NULL, NULL, '2024-08-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Mother', NULL, NULL, 'female', 'india', NULL, NULL, '87654', NULL, '2024-08-03 08:16:14', '2024-08-03 13:16:14', '2024-08-03 13:16:14'),
(53, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'r', NULL, 'male', NULL, NULL, NULL, '353', NULL, '2024-08-03 08:32:49', '2024-08-03 13:32:49', '2024-08-03 13:32:49'),
(54, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'r', NULL, 'male', NULL, NULL, NULL, '353', NULL, '2024-08-03 08:34:45', '2024-08-03 13:34:45', '2024-08-03 13:34:45'),
(55, NULL, 'bbbbb', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'r', NULL, 'female', NULL, NULL, NULL, '353', NULL, '2024-08-03 08:35:49', '2024-08-03 13:35:49', '2024-08-03 13:35:49'),
(56, 1, 'Devishree', 'T', '8765435678', NULL, NULL, NULL, NULL, '2024-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '56787', NULL, '2024-08-03 08:35:53', '2024-08-03 13:35:53', '2024-08-03 13:35:53'),
(57, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'r', NULL, 'female', NULL, NULL, NULL, '353', NULL, '2024-08-03 08:36:26', '2024-08-03 13:36:26', '2024-08-03 13:36:26'),
(58, 1, 'Devi', 'Priya', '9029323923', NULL, NULL, NULL, NULL, '2024-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '2324', NULL, '2024-08-03 08:37:41', '2024-08-03 13:37:41', '2024-08-03 13:37:41'),
(59, 1, 'supriya', 'h', '9876545678', NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '12345', NULL, '2024-08-03 09:06:29', '2024-08-03 14:06:29', '2024-08-03 14:06:29'),
(60, 1, 'Devi', 'shree', '8089787754', NULL, NULL, NULL, NULL, '2024-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '87654', NULL, '2024-08-03 09:07:05', '2024-08-03 14:07:05', '2024-08-03 14:07:05'),
(61, NULL, 'aaaa', 'tttt', '1949459956', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'r', NULL, 'male', NULL, NULL, NULL, '353', NULL, '2024-08-03 09:20:21', '2024-08-03 14:20:21', '2024-08-03 14:20:21'),
(62, NULL, 'aaaa', 'tttt', '1949459956', 'adtdtd@34gmail.com', NULL, '$2y$10$5J/JWa1muRPXB9fE8qBuqu7JZWuiEH80eOofM6MeEqg3z4ZBbaXei', NULL, '2024-08-03T09:57:19.022Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '35355533', NULL, '2024-08-03 09:57:37', '2024-08-03 14:57:37', '2024-08-03 14:57:37'),
(63, NULL, 'aaaa', 'tttt', '1949459956', 'aaa@gmail.com', NULL, '$2y$10$hMcnJX5CQf4P9iV26sZfMOLNdBX6bZMKR9akWeSVrfjXy1ZVPb3LO', NULL, '2024-08-03T10:32:56.241Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '35355533', NULL, '2024-08-03 10:33:14', '2024-08-03 15:33:14', '2024-08-03 15:33:14'),
(64, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Mother', NULL, NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-08-03 13:04:49', '2024-08-03 18:04:49', '2024-08-03 18:04:49'),
(65, 1, 'karthik', 'A', '8296400359', NULL, NULL, NULL, NULL, '2024-09-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', 'india', NULL, NULL, '12345678', NULL, '2024-08-03 13:13:42', '2024-08-03 18:13:42', '2024-08-03 18:13:42'),
(66, 1, 'Devishree', 'T', '8056395114', NULL, NULL, NULL, NULL, '2024-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '12545', NULL, '2024-08-05 04:46:51', '2024-08-05 09:46:51', '2024-08-05 09:46:51'),
(67, 1, 'supriya', 'H', '9092541171', NULL, NULL, NULL, NULL, '2024-08-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '987567', NULL, '2024-08-05 04:48:05', '2024-08-05 09:48:05', '2024-08-05 09:48:05'),
(68, 1, 'supriya', 'H', '8296498867', NULL, NULL, NULL, NULL, '2024-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '1234567', NULL, '2024-08-05 05:11:33', '2024-08-05 10:11:33', '2024-08-05 10:11:33'),
(69, 1, 'Devi', 't', '9192345677', NULL, NULL, NULL, NULL, '2024-07-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '3444', NULL, '2024-08-05 05:24:10', '2024-08-05 10:24:10', '2024-08-05 10:24:10'),
(70, 1, 'Supriya', 'H', '7452354542', NULL, NULL, NULL, NULL, '2024-08-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '245', NULL, '2024-08-05 05:25:36', '2024-08-05 10:25:36', '2024-08-05 10:25:36'),
(71, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'female', 'india', NULL, NULL, '1234567', NULL, '2024-08-05 06:48:51', '2024-08-05 11:48:51', '2024-08-05 11:48:51'),
(72, 1, 'Supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '876456', NULL, '2024-08-05 06:57:15', '2024-08-05 11:57:15', '2024-08-05 11:57:15'),
(73, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', 'india', NULL, NULL, '1234567', NULL, '2024-08-05 06:58:09', '2024-08-05 11:58:09', '2024-08-05 11:58:09'),
(74, NULL, 'supriya', 'h', '8296400359', 'shreedhev98@gmail.com', NULL, '$2y$10$3kWRAqfUlw8A0YVontdE/.ok2/eQxjOWkmgOLOVNnO1K5IO8P90s6', NULL, '05-06-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345', NULL, '2024-08-05 07:16:49', '2024-08-05 12:16:49', '2024-08-05 12:16:49'),
(75, 1, 'devi', 'sree', '8056395114', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '456', NULL, '2024-08-05 07:56:51', '2024-08-05 12:56:51', '2024-08-05 12:56:51'),
(76, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-08-05 08:01:27', '2024-08-05 13:01:27', '2024-08-05 13:01:27'),
(77, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-08-05 08:01:27', '2024-08-05 13:01:27', '2024-08-05 13:01:27'),
(78, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '12345678', NULL, '2024-08-05 08:03:07', '2024-08-05 13:03:07', '2024-08-05 13:03:07'),
(79, 1, 'Dev', 'sree', '8056395224', NULL, NULL, NULL, NULL, '1998-10-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', 'india', NULL, NULL, '6554', NULL, '2024-08-05 09:24:49', '2024-08-05 14:24:49', '2024-08-05 14:24:49'),
(80, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-08-05 10:21:47', '2024-08-05 15:21:47', '2024-08-05 15:21:47'),
(81, 1, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '67732', NULL, '2024-08-06 05:28:34', '2024-08-06 10:28:34', '2024-08-06 10:28:34'),
(82, 1, 'prashanth', 'k', '9456275453', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', 'india', NULL, NULL, '45678', NULL, '2024-08-06 05:35:16', '2024-08-06 10:35:16', '2024-08-06 10:35:16'),
(83, 1, 'prashanth', 'k', '9456275453', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', 'india', NULL, NULL, '45678', NULL, '2024-08-06 05:35:16', '2024-08-06 10:35:16', '2024-08-06 10:35:16'),
(84, NULL, 'prashant', 'k', '9456275453', 'kumar@gmail.com', NULL, '$2y$10$p3cmWLq8RLn/5VDn7mfPQuuX8Lxpe246xZlHmGWSthbIG1vmyTarK', NULL, '06-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '32', NULL, '2024-08-06 05:42:59', '2024-08-06 10:42:59', '2024-08-06 10:42:59'),
(85, 1, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'india', NULL, NULL, '67732', NULL, '2024-08-06 07:00:43', '2024-08-06 12:00:43', '2024-08-06 12:00:43'),
(86, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Sister', NULL, NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-08-06 07:05:24', '2024-08-06 12:05:24', '2024-08-06 12:05:24'),
(87, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', 'india', NULL, NULL, '12345678', NULL, '2024-08-06 07:21:25', '2024-08-06 12:21:25', '2024-08-06 12:21:25'),
(88, 1, 'Vijay', 'k', '8296400359', NULL, NULL, NULL, NULL, '2024-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Son', NULL, NULL, 'male', 'india', NULL, NULL, '12345678', NULL, '2024-08-06 07:24:54', '2024-08-06 12:24:54', '2024-08-06 12:24:54'),
(89, 1, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '2019-01-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', 'india', NULL, NULL, '87654', NULL, '2024-08-06 12:45:03', '2024-08-06 17:45:03', '2024-08-06 17:45:03'),
(90, 1, 'Loui', 'Hen', '9039498394', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', 'india', NULL, NULL, '2377982', NULL, '2024-08-06 13:00:17', '2024-08-06 18:00:17', '2024-08-06 18:00:17'),
(91, NULL, 'supriya', 'H', '8296400359', 'hanchinamanisupriya@gmail.com', NULL, '$2y$10$/UFaF9bacNNu61ZVkS5ZnuihylDz1o6fyk5IoQQjmFRDEZCS47D8e', NULL, '07-04-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345678', NULL, '2024-08-07 05:21:59', '2024-08-07 10:21:59', '2024-08-07 10:21:59'),
(92, NULL, 'asd', 'tiwar', '8827803902', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-08-07 05:26:47', '2024-08-07 10:26:47', '2024-08-07 10:26:47'),
(93, NULL, 'Vijay', 'K', '7823293842', 'abcd@gmail.com', NULL, '$2y$10$T70ts6/ClbDxa77qmM5faekfi94Z6zj/iCT3Iy7BfWkUVfkj.N7PC', NULL, '07-03-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '1234567', NULL, '2024-08-07 11:01:22', '2024-08-07 16:01:22', '2024-08-07 16:01:22'),
(94, NULL, 'supriya', 'H', '8296400359', 'supriya.h@gmail.com', NULL, '$2y$10$McT0KI7O3xplfql2yX3wWuMWs59QvD4UC4Nrz.5mIQ3hdL5uymmBG', NULL, '07-07-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345678', NULL, '2024-08-07 11:22:08', '2024-08-07 16:22:08', '2024-08-07 16:22:08'),
(95, NULL, 'Vijay', 'K', '8056395114', 'vijay@gmail.com', NULL, '$2y$10$3st2yxr/eVIxh///7uQCc.pQo/fpJFWgxQHNWYTTlPJtplC2K/VVO', NULL, '07-08-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '234567', NULL, '2024-08-07 14:27:42', '2024-08-07 19:27:42', '2024-08-07 19:27:42'),
(96, 1, 'asd', 'tiwar', '8827803902', NULL, NULL, NULL, NULL, '2024-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '75876', NULL, '2024-08-08 06:14:38', '2024-08-08 11:14:38', '2024-08-08 11:14:38'),
(97, NULL, 'Devishree', 'T', '8056395114', 'devi@gmail.com', NULL, '$2y$10$Va8Ra2wloN.DORLC9ZhPOOCU.jznXWpYZlPTrO0g5FElN5shHxl16', NULL, '08-08-1998', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '234567', NULL, '2024-08-08 06:43:32', '2024-08-08 11:43:32', '2024-08-08 11:43:32'),
(98, NULL, '222', '222', '0555552022', NULL, NULL, NULL, NULL, '2024-08-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', '2', NULL, 'male', NULL, NULL, NULL, '22222', NULL, '2024-08-08 07:25:48', '2024-08-08 12:25:48', '2024-08-08 12:25:48'),
(99, NULL, 'savana', 'test1', '0555552022', NULL, NULL, NULL, NULL, '2024-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Mother', 'ggg', NULL, 'female', NULL, NULL, NULL, '22222', NULL, '2024-08-08 07:27:31', '2024-08-08 12:27:31', '2024-08-08 12:27:31'),
(100, NULL, 'supriya', 'h', '9092541181', 'supriya@gmail.com', NULL, '$2y$10$rWFfqGuzLygg6ujkbj.z0ebThaujnzSI9sWgLo77EFjaKBW7bvwaK', NULL, '08-08-1999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '98745', NULL, '2024-08-08 07:28:41', '2024-08-08 12:28:41', '2024-08-08 12:28:41'),
(101, NULL, 'dola', 'test', '0555552022', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Sister', 'uy', NULL, 'male', NULL, NULL, NULL, '43434', NULL, '2024-08-08 07:31:26', '2024-08-08 12:31:26', '2024-08-08 12:31:26'),
(102, NULL, 'teat u 2', 'u2', '0580720224', 'dr.a.e@hotmail.com', NULL, '$2y$10$cp3deV0JQVktbfFzc2rNW.DfOjjvjlTKp1268R4u/tMrQ7Sd4WuMm', NULL, '08-08-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '112343532', NULL, '2024-08-08 08:08:29', '2024-08-08 13:08:29', '2024-08-08 13:08:29'),
(103, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Son', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:15:36', '2024-08-09 14:15:36', '2024-08-09 14:15:36'),
(104, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:27:18', '2024-08-09 14:27:18', '2024-08-09 14:27:18'),
(105, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:27:40', '2024-08-09 14:27:40', '2024-08-09 14:27:40'),
(106, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:28:03', '2024-08-09 14:28:03', '2024-08-09 14:28:03'),
(107, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:28:28', '2024-08-09 14:28:28', '2024-08-09 14:28:28'),
(108, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:28:55', '2024-08-09 14:28:55', '2024-08-09 14:28:55'),
(109, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B-', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:29:15', '2024-08-09 14:29:15', '2024-08-09 14:29:15'),
(110, NULL, 'Prashant', 'Kumar', '8084008752', NULL, NULL, NULL, NULL, '2024-08-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-09 09:29:36', '2024-08-09 14:29:36', '2024-08-09 14:29:36'),
(111, 1, 'Sri', 'T', '9092541181', NULL, NULL, NULL, NULL, '1998-08-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '12389', NULL, '2024-08-09 19:10:34', '2024-08-10 00:10:34', '2024-08-10 00:10:34'),
(112, NULL, 'Samuel', 'Suchan', '9740029247', 'samuelpaulsuchan@gmail.com', NULL, '$2y$10$bMXiL.LV.BhlajnK4mHlK.KrweX/TqLpQeVO7aYlJZ1D0ka4K.C7u', NULL, '05-06-1991', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '79789809', NULL, '2024-08-10 04:06:27', '2024-08-10 09:06:27', '2024-08-10 09:06:27'),
(113, NULL, 'Priya', 'S', '9092541181', 'priya@gmail.com', NULL, '$2y$10$QHApQrjS1NOs2XtlTN9HReC01.3J7UwgpL.spkocKFIDRjb8WvvkG', NULL, '11-08-1994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '24546745', NULL, '2024-08-11 08:07:03', '2024-08-11 13:07:03', '2024-08-11 13:07:03'),
(114, NULL, 'purvesh', 'ramoliya', '9898989893', 'r1@G.com', NULL, '$2y$10$CBxWgSIaCh0hM.YIZ9I3neX7.7YEGouMpCKuQKAY5EGzi83VI4pYC', NULL, '31/10/1992', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'm', 'india', 'register', NULL, '1313123', NULL, '2024-08-11 09:55:15', '2024-08-11 14:55:15', '2024-08-11 14:55:15'),
(115, NULL, 'Golu', 'Kumar', '8084008753', 'pk1@gmail.com', NULL, '$2y$10$a0hGxvQfXAqGraTrNMgWy.MEOF/1b3FABlnlg89tARGrKUsGLTsSu', NULL, '11-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-11 15:33:02', '2024-08-11 20:33:02', '2024-08-11 20:33:02'),
(116, NULL, 'golus', 'kumari', '8084008755', 'pk10@gmail.com', NULL, '$2y$10$Pe6/3YJFE91pThs6XkKBFOo30SGeFmhyScyDzSnFugF6/XHzwE6tG', NULL, '11-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '2345', NULL, '2024-08-11 16:04:20', '2024-08-11 21:04:20', '2024-08-11 21:04:20'),
(117, NULL, 'gola', 'kue', '8084008756', 'pk01@gmail.com', NULL, '$2y$10$W6fwDNUd/W4ccXuWTJG3Z.bem48DgDEqiAdBeHIZ9GnKfkVUWHNOS', NULL, '11-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '677325', NULL, '2024-08-11 16:09:15', '2024-08-11 21:09:15', '2024-08-11 21:09:15'),
(118, NULL, 'Prashant', 'sda', '8084008754', 'pk21@gmail.com', NULL, '$2y$10$otxcLzQKPzYU3jEm/4KsoumUVjMwOLpdwBEZSM8Lpj0ZlUdzScuSO', NULL, '11-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-11 16:24:57', '2024-08-11 21:24:57', '2024-08-11 21:24:57'),
(119, NULL, 'Prashants', 'kues', '8084008750', 'pk1111@gmail.com', NULL, '$2y$10$7h5LLewqytuPsvmByw/FiOY1X1OpFMxCThgeY8kfWsU3BQPlg3Ir2', NULL, '11-07-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '6773251', NULL, '2024-08-11 16:42:14', '2024-08-11 21:42:14', '2024-08-11 21:42:14'),
(120, NULL, 'Prashant', 'iihh', '8084008789', 'pk001@gmail.com', NULL, '$2y$10$f4xVPZw4I6T.5GKxEGuFt.PTKNQb9LzV7g7BV2trljyO/FjT7h5Cm', NULL, '11-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '76', NULL, '2024-08-11 17:11:17', '2024-08-11 22:11:17', '2024-08-11 22:11:17'),
(121, NULL, 'Prashant', 'kue', '8084008752', 'pk902@gmail.com', NULL, '$2y$10$o08hHDtHqV5hNZcQyPqDeeVqnUJ0AtczFv2cBs4HPoYUNoM7sO9Jm', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-11 18:42:33', '2024-08-11 23:42:33', '2024-08-11 23:42:33'),
(122, NULL, 'Prashant', 'sda', '8084008776', 'pk190@gmail.com', NULL, '$2y$10$jH.MlUn761LNejk3c0SGte3F0FKH2ajwdli458yl0/R9U37LrSlXO', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-11 19:01:38', '2024-08-12 00:01:38', '2024-08-12 00:01:38'),
(123, NULL, 'Prashant', 'sda', '8084008754', 'pk54@gmail.com', NULL, '$2y$10$WOe7XZ5u7oC86iefDDjbCe8ahG5vv.r9KXGruyu3vWsIUCIkOCel.', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '546', NULL, '2024-08-11 19:34:05', '2024-08-12 00:34:05', '2024-08-12 00:34:05'),
(124, NULL, 'Prashant', 'kue', '8084008752', 'pk121@gmail.com', NULL, '$2y$10$ER.GxE7OSuZKCsk5htSbdeVrAjQzyU92FMz.bYqaujYaMNao5IapO', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '7654', NULL, '2024-08-12 05:18:43', '2024-08-12 10:18:43', '2024-08-12 10:18:43'),
(125, NULL, 'Loui', 'hen', '9092541181', 'loui@gmail.com', NULL, '$2y$10$/AgNYdgIfjZ3e2/VPxKgQuFmv4B0GMAmEak2etDhclFSqI/VpLnay', NULL, '12-08-1998', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '456789', NULL, '2024-08-12 05:41:24', '2024-08-12 10:41:24', '2024-08-12 10:41:24'),
(126, 1, 'supriya', 'h', '8296400359', NULL, NULL, NULL, NULL, '2024-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '23456', NULL, '2024-08-12 05:43:12', '2024-08-12 10:43:12', '2024-08-12 10:43:12'),
(127, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-12 05:44:30', '2024-08-12 10:44:30', '2024-08-12 10:44:30'),
(128, NULL, 'asd', 'tiwar', '8827803902', 'akashti305044@gmail.com', NULL, '$2y$10$PN.wtkF1P5pajTKep19MmuHqTNMfFwTkghUEXQMrSL32wGL/.tuDq', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-08-12 06:25:22', '2024-08-12 11:25:22', '2024-08-12 11:25:22'),
(129, NULL, 'asd', 'tiwar', '8827803902', 'akashti305054@gmail.com', NULL, '$2y$10$zybE0la3cgQPWHRRuS9.DO1/IYWwOqal8Mvq2rqeJQZNJTDV7Tt7G', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-08-12 06:34:24', '2024-08-12 11:34:24', '2024-08-12 11:34:24'),
(130, 1, 'Loui', 'hen', '9748724924', NULL, NULL, NULL, NULL, '2024-08-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', 'in', NULL, NULL, '62463', NULL, '2024-08-12 07:14:50', '2024-08-12 12:14:50', '2024-08-12 12:14:50'),
(131, 1, 'Loui', 'hen', '8978655443', NULL, NULL, NULL, NULL, '2024-08-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'male', 'in', NULL, NULL, '456789', NULL, '2024-08-12 07:17:03', '2024-08-12 12:17:03', '2024-08-12 12:17:03'),
(132, 1, 'vaibhavi', 'shinde', '8056395114', NULL, NULL, NULL, NULL, '2024-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-12 07:18:06', '2024-08-12 12:18:06', '2024-08-12 12:18:06'),
(133, 1, 'vaibhavi', 'shinde', '8296400359', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Mother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-12 07:39:54', '2024-08-12 12:39:54', '2024-08-12 12:39:54'),
(134, NULL, 'Prashant', 'singh', '8084008752', 'pk2111@gmail.com', NULL, '$2y$10$HnNH.LANY5Sz5C2EpvKzk.5CmoyxqaEEh/Wt1s3AwaViMHh5BqTT2', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-12 07:59:33', '2024-08-12 12:59:33', '2024-08-12 12:59:33'),
(135, NULL, 'Prashant', 'Singh', '8084008752', 'pk2111111@gmail.com', NULL, '$2y$10$DiFwM1tEpGbXTm5KeIGAZ.Lqczov1Vi1.68xgvA9JT5g5hlQWKrei', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, 'ewq', NULL, '2024-08-12 08:26:47', '2024-08-12 13:26:47', '2024-08-12 13:26:47'),
(136, NULL, 'asd', 'tiwar', '8827803902', 'akashti3054@gmail.com', NULL, '$2y$10$xyvXLIIZv0H9nCTtvAA.GOG7ywjYOEZ63XHXbsRJhOnNWkpL8G73K', NULL, '12-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-08-12 09:42:15', '2024-08-12 14:42:15', '2024-08-12 14:42:15'),
(137, NULL, 'Supriya', 'hanchinamani', '8296400359', 'su82@gmail.com', NULL, '$2y$10$F.Ff6HswxTDLg/vDIl6PQemOMJb1fpSVm8cFm9usKYEtyZDaC.9qC', NULL, '12-07-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345678', NULL, '2024-08-12 09:47:45', '2024-08-12 14:47:45', '2024-08-12 14:47:45'),
(138, NULL, 'abdulrahman', 'test', '0555552022', NULL, NULL, NULL, NULL, '2024-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Mother', 'eeeee', NULL, 'male', NULL, NULL, NULL, '43434', NULL, '2024-08-12 09:47:50', '2024-08-12 14:47:50', '2024-08-12 14:47:50'),
(139, NULL, 'Prashant', 'sda', '8084008752', 'pk32@gmail.com', NULL, '$2y$10$H/N28djcqK0yDtIDnQeoe.MgvP2T/OsRgwf0w45tatznmHxPcQRNC', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-13 04:55:44', '2024-08-13 09:55:44', '2024-08-13 09:55:44'),
(140, NULL, 'supriya', 'H', '8296400359', 'sa.h@gmail.com', NULL, '$2y$10$d/hALj6fLsWYDQNkvZJLdOcOMvt.L4gYj1H80EzFdRdu8UGmaLf66', NULL, '13-03-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345678', NULL, '2024-08-13 04:57:51', '2024-08-13 09:57:51', '2024-08-13 09:57:51'),
(141, NULL, 'supriya', 'h', '8056395114', 'priyadev@gmail.com', NULL, '$2y$10$jKXfMHomtIWObVGK8VJva.R1pt4a9ualjqdi32h/2yLkG4psbHfAW', NULL, '13-08-1998', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '456789', NULL, '2024-08-13 05:04:13', '2024-08-13 10:04:13', '2024-08-13 10:04:13'),
(142, NULL, 'supriya', 'h', '8056395114', 'priyadev@gmail.com', NULL, '$2y$10$saraMPGF4AvABOW9vlfJWu7C2CdkYQtAyJLouK9IEPgMRK7VOXhfW', NULL, '13-08-1998', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '456789', NULL, '2024-08-13 05:04:13', '2024-08-13 10:04:13', '2024-08-13 10:04:13'),
(143, NULL, 'supriya', 'h', '8056395114', 'priyadevi@gmail.com', NULL, '$2y$10$M4uhIyjr8g4N6OdBnnqQAeCkkiF/zr5KUZbO7cSCrsz5VuyNQ819q', NULL, '13-08-1998', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '456789', NULL, '2024-08-13 05:05:00', '2024-08-13 10:05:00', '2024-08-13 10:05:00'),
(144, NULL, 'supriya', 'H', '8296400359', 'sdf.h@gmail.com', NULL, '$2y$10$AtTO105DVZM1dl/jTuQli.7VExyIRscNMr5vrTEvFn.NqJClys8.2', NULL, '13-03-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '12345678', NULL, '2024-08-13 05:09:24', '2024-08-13 10:09:24', '2024-08-13 10:09:24'),
(145, NULL, 'df', 'df', '8755644564', 'akash0504@gmail.com', NULL, '$2y$10$Hwobe7CWBYwfDYy7r53w3u4dJxleWctlNTh0G9YlBtodOARWts9mW', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-08-13 05:18:01', '2024-08-13 10:18:01', '2024-08-13 10:18:01'),
(146, NULL, 'supriya', 'H', '8296400359', 'Ssd@1234567a', NULL, '$2y$10$YGO17ofTM9zLOOO/LZo5u.eLJD6oMgq9jgq03KZBrA7nkTBHJRw.K', NULL, '13-07-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '12345678899', NULL, '2024-08-13 05:20:00', '2024-08-13 10:20:00', '2024-08-13 10:20:00'),
(147, NULL, 'supriya', 'H', '8296400359', 'supriyas.h@biztechnosys.com', NULL, '$2y$10$DHXw9y.eKsOmuqRRq/ZEkOk0TJBmt1h8AludBpk9S7ydg9juyAvWy', NULL, '13-07-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '123456', NULL, '2024-08-13 05:23:35', '2024-08-13 10:23:35', '2024-08-13 10:23:35'),
(148, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Son', 'Biztechnosys', NULL, 'female', NULL, NULL, NULL, '12345678', NULL, '2024-08-13 05:28:22', '2024-08-13 10:28:22', '2024-08-13 10:28:22'),
(149, NULL, 'Prashant', 'sda', '8084008752', NULL, NULL, NULL, NULL, '2024-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-13 05:29:11', '2024-08-13 10:29:11', '2024-08-13 10:29:11'),
(150, 1, 'Prashant', 'sda', '8084008752', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 05:54:35', '2024-08-13 10:54:35', '2024-08-13 10:54:35'),
(151, NULL, 'Prashant', 'Singh', '8084008752', 'pk123@gmail.com', NULL, '$2y$10$ZKccx5YazlkVqWBdwEGwluka8YGrglA6xsKDJdUVyFbwnbKXshj0a', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-13 06:01:28', '2024-08-13 11:01:28', '2024-08-13 11:01:28'),
(152, 1, 'Prashant', 'sda', '8084008752', NULL, NULL, NULL, NULL, '2024-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 06:37:41', '2024-08-13 11:37:41', '2024-08-13 11:37:41'),
(153, 1, 'Prashant', 'sda', '8084008752', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 06:48:30', '2024-08-13 11:48:30', '2024-08-13 11:48:30'),
(154, 1, 'Prashant', 'Singh', '8084008752', NULL, NULL, NULL, NULL, '2024-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 06:51:49', '2024-08-13 11:51:49', '2024-08-13 11:51:49'),
(155, 1, 'Prashant', 'kue', '8084008752', NULL, NULL, NULL, NULL, '2024-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Father', NULL, NULL, 'male', 'in', NULL, NULL, '7654', NULL, '2024-08-13 07:01:01', '2024-08-13 12:01:01', '2024-08-13 12:01:01'),
(156, 1, 'Prashant', 'kue', '8084008752', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 07:11:19', '2024-08-13 12:11:19', '2024-08-13 12:11:19'),
(157, 1, 'Prashant', 'Singh', '8084008752', NULL, NULL, NULL, NULL, '2024-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 07:37:52', '2024-08-13 12:37:52', '2024-08-13 12:37:52'),
(158, 1, 'Prashant', 'sda', '8084008752', NULL, NULL, NULL, NULL, '2024-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Son', NULL, NULL, 'male', 'in', NULL, NULL, '7654', NULL, '2024-08-13 07:40:17', '2024-08-13 12:40:17', '2024-08-13 12:40:17'),
(159, 1, 'Prashant', 'kue', '8084008752', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'male', 'in', NULL, NULL, '654', NULL, '2024-08-13 07:43:18', '2024-08-13 12:43:18', '2024-08-13 12:43:18'),
(160, NULL, 'purvesh', 'ramoliya', '9898989888', 'p@G.com', NULL, '$2y$10$rFdSDxCSYrewv/myg0owR.als5e9hwGLqKXeIcLH0U2jdSk6Dt.BO', NULL, '31/10/1992', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'm', 'india', 'register', NULL, '1313123', NULL, '2024-08-13 07:43:49', '2024-08-13 12:43:49', '2024-08-13 12:43:49'),
(161, NULL, 'Vijay', 'K', '9108102211', 'vk@gmail.com', NULL, '$2y$10$N/3lIllypEF/BlEM.PwB0uhLeWaVEK2Ojaa.noCmZjX/mTxnWiPJO', NULL, '13-08-1984', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '765667', NULL, '2024-08-13 07:48:19', '2024-08-13 12:48:19', '2024-08-13 12:48:19'),
(162, 1, 'Prashant', 'sda', '8084008754', NULL, NULL, NULL, NULL, '2024-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', 'in', NULL, NULL, '7654', NULL, '2024-08-13 07:49:22', '2024-08-13 12:49:22', '2024-08-13 12:49:22'),
(163, 1, 'Prashant', 'sda', '8084008752', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 07:50:07', '2024-08-13 12:50:07', '2024-08-13 12:50:07'),
(164, 1, 'Prashant', 'kue', '8084008752', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 07:52:02', '2024-08-13 12:52:02', '2024-08-13 12:52:02'),
(165, NULL, 'Akash', 'Tfgt', '8610614488', 'akashti3988790504@gmail.com', NULL, '$2y$10$TWfjOM/ytTA.wyyr.RFVwOrlvg9hOz4X6Hyo.l/dgQU5UqIwUi8AS', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '435', NULL, '2024-08-13 07:53:00', '2024-08-13 12:53:00', '2024-08-13 12:53:00'),
(166, 1, 'Prashant', 'sda', '8084008752', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-13 07:55:17', '2024-08-13 12:55:17', '2024-08-13 12:55:17'),
(167, 1, 'Prashant', 'Singh', '8084008752', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', NULL, NULL, 'female', 'in', NULL, NULL, '7654', NULL, '2024-08-13 07:56:38', '2024-08-13 12:56:38', '2024-08-13 12:56:38'),
(168, NULL, 'ddd', 'df', '9456275456', 'kfgumar@gmail.com', NULL, '$2y$10$BfnFo1M2NoYDSJ66D/yM7O/mLFd0VEzC9NqW3wYvKjRJZvJ9EnvxK', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '32', NULL, '2024-08-13 08:10:03', '2024-08-13 13:10:03', '2024-08-13 13:10:03');
INSERT INTO `patientregistration` (`id`, `Relatedto`, `Firstname`, `Lastname`, `Phone`, `Email`, `Username`, `Password`, `Confirmpassword`, `Dob`, `Age`, `Nationality`, `Borderno`, `Sponserid`, `Passportid`, `Iqamatype`, `Maritalstatus`, `Height`, `Weight`, `Bloodgroup`, `Relationship`, `InsuranceCompany`, `Insuranceaccno`, `Gender`, `Country`, `Type`, `Status`, `Nationalid`, `Description`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(169, NULL, 'ddd', 'df', '556275456', 'kuqwsmar@gmail.com', NULL, '$2y$10$3WKbiDvujxs0W96wvh5Pe.1p/pyWqKNrqckzhqRC5qZcYnp.7sKAu', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '43', NULL, '2024-08-13 08:12:40', '2024-08-13 13:12:40', '2024-08-13 13:12:40'),
(170, NULL, 'Prashant', 'Singh', '8084008700', 'pk21313231@gmail.com', NULL, '$2y$10$LbZeqX6g2TdJeO5nOCpYmOFp6pR1I8L24PjQRarhiCEEfFe6AxcHa', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-13 08:17:39', '2024-08-13 13:17:39', '2024-08-13 13:17:39'),
(171, NULL, 'Prashant', 'Singh', '7480086290', 'pk@gmail.coma', NULL, '$2y$10$jBol3oFblQHuhYBN2myKP.HWtxyrI845X4iH9osuXNTFcT22a7AuS', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-13 08:35:09', '2024-08-13 13:35:09', '2024-08-13 13:35:09'),
(172, NULL, 'Prashant', 'Singh', '8084008759', 'pks@gmail.com', NULL, '$2y$10$8lI1I6cNwdJGW72Q60o/i.LtlVfJM66hc2njcCbZMkLFlT2lSF7jq', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-13 08:38:24', '2024-08-13 13:38:24', '2024-08-13 13:38:24'),
(173, NULL, 'Akash', 'Tfgt', '8827803903', 'akashti3450504@gmail.com', NULL, '$2y$10$y7jjcKDKii9HBjbyc323WO9AU6GI58hSwGLzYrWS3EorlrV/BlyRu', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-08-13 08:42:17', '2024-08-13 13:42:17', '2024-08-13 13:42:17'),
(174, NULL, 'Vijay', 'K', '9942632635', 'vj@gmail.com', NULL, '$2y$10$2VwDkDiBZ87P4XPMXrANJ.OJZ6j0ZrpPSyISoru1E2pdtHwF2byTK', NULL, '13-08-2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '786565', NULL, '2024-08-13 09:15:05', '2024-08-13 14:15:05', '2024-08-13 14:15:05'),
(175, 1, 'vaibhavi', 'shinde', '8296400359', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-13 09:15:37', '2024-08-13 14:15:37', '2024-08-13 14:15:37'),
(176, NULL, 'Vinay', 'Doe', '9629632329', 'vinay@gmail.com', NULL, '$2y$10$mR0NVmSrwlceCayeIHsi4OuZ1hFUJCpXLyYkzG4bulnXwfVc4AYUu', NULL, '13-08-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '72373', NULL, '2024-08-13 09:24:37', '2024-08-13 14:24:37', '2024-08-13 14:24:37'),
(177, NULL, 'Akash', 'Tfgt', '8827803904', 'akashti3050987804@gmail.com', NULL, '$2y$10$VIGPoRnep9eJ2vZBpKQzweQXTBctipYnQ98zKcf.pdaevbm1F2YOO', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-08-13 09:25:16', '2024-08-13 14:25:16', '2024-08-13 14:25:16'),
(178, NULL, 'Vinay', 'Doe', '9629632328', 'vinays@gmail.com', NULL, '$2y$10$Gt.Z21OGnZma3kDKx3xU3u9CH.QpKRi2/PelRbO0vbYNtbfdP37je', NULL, '13-08-2006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '8687', NULL, '2024-08-13 09:33:36', '2024-08-13 14:33:36', '2024-08-13 14:33:36'),
(179, NULL, 'Loui', 'hen', '876543234', 'abcdf@gmail.com', NULL, '$2y$10$4NtGLVfoXPUt5D/3G4k39.T2XsjF777Ht3UASo9E4MBsWuWaaGkkG', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '3456745', NULL, '2024-08-13 10:37:48', '2024-08-13 15:37:48', '2024-08-13 15:37:48'),
(180, NULL, 'Akash', 'Tfgt', '8827803905', 'akashtiwari201987923@gmail.com', NULL, '$2y$10$ZSO8Ny9XF43brnRRZQetnemaniMNmVAzefW6uHfuIBKfU9BQ.OsLu', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '75876', NULL, '2024-08-13 10:41:12', '2024-08-13 15:41:12', '2024-08-13 15:41:12'),
(181, NULL, 'supriya', 'H', '555552027', 'Ssasd@1234568', NULL, '$2y$10$RIa7/DVsvyrNLwWexM4MUOU2QltAo.yhM3mnupQRluWXPW9shaZDG', NULL, '13-05-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '12345678899', NULL, '2024-08-13 10:45:57', '2024-08-13 15:45:57', '2024-08-13 15:45:57'),
(182, NULL, 'Devi', 'shree', '7092097465', 'dev98@gmail.com', NULL, '$2y$10$/bIkWc6BJ5UWEHIz44HboeBXgkQ3XQSlgv2kPh5KvdlCw2LBn9VRK', NULL, '13-08-2004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '564565', NULL, '2024-08-13 10:50:39', '2024-08-13 15:50:39', '2024-08-13 15:50:39'),
(183, NULL, 'Devi', 'shree', '7092097461', 'abcd6545f@gmail.com', NULL, '$2y$10$OW4AADaJeCX42.ZRXHsz9eEJ5BvLhedEUrT6Q3iqGS5Eh7LACFw5q', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '12345', NULL, '2024-08-13 10:54:03', '2024-08-13 15:54:03', '2024-08-13 15:54:03'),
(184, NULL, 'Prashant', 'Singh', '8827803909', 'pkdffadsd@gmail.com', NULL, '$2y$10$aFLyi1O/pGA33syQGkR3puUQcvO5eY1j1v0e6b1JGb6fURE5/1VBO', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-13 10:55:36', '2024-08-13 15:55:36', '2024-08-13 15:55:36'),
(185, 1, 'vaibhavi', 'shinde', '8296400359', NULL, NULL, NULL, NULL, '2024-08-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-13 11:13:22', '2024-08-13 16:13:22', '2024-08-13 16:13:22'),
(186, NULL, 'Prashant', 'sda', '9084008752', 'pkSfggdfc@gmail.com', NULL, '$2y$10$TvMxDdPDfCoyOwn79mNQ4.ajvEda.uYC4mehshzGcnSR4CN/q.Gw2', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '7654', NULL, '2024-08-13 11:16:02', '2024-08-13 16:16:02', '2024-08-13 16:16:02'),
(187, NULL, 'dfsdfsdf', 'sdfsdf', '8827803908', 'supriya.h@bgfiztechnosys.com', NULL, '$2y$10$KDI7qickeoXIGYb7dVvL1u6fDMce8NMRNYcs8Plem2X0oyK78E.P2', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '86876', NULL, '2024-08-13 11:21:39', '2024-08-13 16:21:39', '2024-08-13 16:21:39'),
(188, NULL, 'dfsdfsdf', 'sdfsdf', '8827803908', 'supriya.h@bgfiztechnosys.com', NULL, '$2y$10$x8K4oH01BIls8fyW241equGV8eb8uqYXM3SoV0OMSQUuvnRyPPPMK', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '86876', NULL, '2024-08-13 11:21:39', '2024-08-13 16:21:39', '2024-08-13 16:21:39'),
(189, NULL, 'dfsdfsdf', 'sdfsdf', '8827803908', 'supriya.h@bgfiztechnosys.com', NULL, '$2y$10$G.XC5lWUE87eJ2Tr6FlpJOu0o.fXKiqNZsycUN0S9bknSqqNGblFW', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '86876', NULL, '2024-08-13 11:21:39', '2024-08-13 16:21:39', '2024-08-13 16:21:39'),
(190, NULL, 'dfsdfsdf', 'sdfsdf', '8827803908', 'supriya.h@bgfiztechnosys.com', NULL, '$2y$10$fv98a9My.qxUSU6.NrU76ef3VYEpNv/RFQG2whMKdQSxJ3ea1pncm', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '86876', NULL, '2024-08-13 11:21:39', '2024-08-13 16:21:39', '2024-08-13 16:21:39'),
(191, NULL, 'Prashant', 'Singh', '8084008799', 'wqeewewpk1@gmail.com', NULL, '$2y$10$TgQgVZxaNVq2YHr6CYrK/eGWXS7xGFL8R6RpWQ8DE2Ow4CTqNP3h.', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '7654', NULL, '2024-08-13 11:39:21', '2024-08-13 16:39:21', '2024-08-13 16:39:21'),
(192, NULL, 'Rahman', 'Riyaz', '555552033', 'riyaz@gmail.com', NULL, '$2y$10$AMw9f6GWlAs/MxS.eRZsy.DfKk/LxTHqAJkmHux2LUjmKnD50jj3e', NULL, '13-08-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '24543', NULL, '2024-08-13 11:46:24', '2024-08-13 16:46:24', '2024-08-13 16:46:24'),
(193, NULL, 'supriya', 'H', '8084008790', 'supriyah.h@biztechnosys.com', NULL, '$2y$10$q6Rbhq0OO3S6QCAlwvCs9OwmpaAgUjB2mt.hFAQB6IyQowcuGNQ7.', NULL, '13-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '12345678899', NULL, '2024-08-13 11:50:58', '2024-08-13 16:50:58', '2024-08-13 16:50:58'),
(194, NULL, 'supriya', 'H', '555552233', 'anagha123@gmail.com', NULL, '$2y$10$mwuTcGGaeBeWokkFEQAio.C.2dq9Me13oVl9b1bdgv7jHsZGL3CkC', NULL, '13-02-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '1234567', NULL, '2024-08-13 12:00:21', '2024-08-13 17:00:21', '2024-08-13 17:00:21'),
(195, 1, 'vaibhavi', 'shinde', '8296400359', NULL, NULL, NULL, NULL, '2024-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-13 12:06:53', '2024-08-13 17:06:53', '2024-08-13 17:06:53'),
(196, 1, 'vaibhavi', 'shinde', '8296400359', NULL, NULL, NULL, NULL, '2024-08-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B-', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-13 12:12:23', '2024-08-13 17:12:23', '2024-08-13 17:12:23'),
(197, NULL, 'abdulrahman', 'test3', '0555434123', 'al_leader@hotmail.com', NULL, '$2y$10$e9Vos//4NaH0H/OermKfWeipfdZzrh51sCrqvg.1R03hO6cd4RDRu', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '43434', NULL, '2024-08-14 07:20:57', '2024-08-14 12:20:57', '2024-08-14 12:20:57'),
(198, NULL, 'Devishree', 'Tamilvanan', '9443972578', 'tamil@gmail.com', NULL, '$2y$10$mmL1hYUW09YkUE7TYHAlveitN4urhggId.P9QPKsNBaNBOgfsXbsq', NULL, '14-08-2010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '8274485624', NULL, '2024-08-14 11:11:49', '2024-08-14 16:11:49', '2024-08-14 16:11:49'),
(199, NULL, 'Namrata', 'j', '9443972577', 'nam@gmail.com', NULL, '$2y$10$GOf9BAfbDXMB4jQ1qfyNt./fGMxHFLF2RL6d7lU.w0QfrmDBwfiL6', NULL, '14-08-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '98999', NULL, '2024-08-14 11:17:31', '2024-08-14 16:17:31', '2024-08-14 16:17:31'),
(200, 1, 'Prashant', 'Singh', '8084008754', NULL, NULL, NULL, NULL, '2024-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-14 11:48:42', '2024-08-14 16:48:42', '2024-08-14 16:48:42'),
(201, NULL, 'Vijay', 'K', '8084008798', 'pk45655@gmail.com', NULL, '$2y$10$RulOq4NFJzfYi7n7IsM7Gu5z3R92ZThSk0dxePE.OX5SOU0eymFgS', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '24546745', NULL, '2024-08-14 12:21:29', '2024-08-14 17:21:29', '2024-08-14 17:21:29'),
(202, NULL, 'Loui', 'hen', '9090909090', 'pkl@gmail.com', NULL, '$2y$10$kmAuNOEnk1aDLGkBHs25nur8V4IQt/etz96vOMUAiV/XmYxOPV8Zm', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '234567', NULL, '2024-08-14 12:23:36', '2024-08-14 17:23:36', '2024-08-14 17:23:36'),
(203, NULL, 'Prashant', 'Singh', '8084008778', 'pk1d@gmail.com', NULL, '$2y$10$UjGugRLppQrz3GYnA3rUiexFOp5DhQMPf0HANVUhboQKpMKu0NzRO', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-14 12:49:15', '2024-08-14 17:49:15', '2024-08-14 17:49:15'),
(204, NULL, 'Prashant', 'Singh', '2384008754', 'pkcds@gmail.com', NULL, '$2y$10$zSImximwhu16URmFx8.QieUacFg4oWqfFytPWBEqjmhlxMS5UOmW6', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-14 12:53:24', '2024-08-14 17:53:24', '2024-08-14 17:53:24'),
(205, NULL, 'Prashant', 'KR singh', '1184008753', 'pkz@gmail.com', NULL, '$2y$10$eNwOGyDVr3ygSRHsn2YxX.2StbHsuyaFwTssz3ATYV2TTyIzNRcva', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-14 12:58:47', '2024-08-14 17:58:47', '2024-08-14 17:58:47'),
(206, NULL, 'Prashant', 'Singh kr', '0084008754', 'pkccc@gmail.com', NULL, '$2y$10$Nah.Y/O7TUsdc6XQ33xjEOCkNnph2DMhCWyP7biK7RJElA7cfOAN.', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-14 13:00:22', '2024-08-14 18:00:22', '2024-08-14 18:00:22'),
(207, NULL, 'Prashant', 'Singh sa', '8089908754', 'pkcds12@gmail.com', NULL, '$2y$10$U9H8NFNCMUIMggLkY3EZcus1ZqihMyAcZ0YmtLKjQB7rMK4VQKjai', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-14 13:03:38', '2024-08-14 18:03:38', '2024-08-14 18:03:38'),
(208, NULL, 'Prashant', 'sda singh', '8084001154', 'psawek@gmail.com', NULL, '$2y$10$FGzCX9v6NpKRqbSYmfNGK.G3QckBd/eFSlB6242CI/5p7MdR14TmO', NULL, '14-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-14 13:06:05', '2024-08-14 18:06:05', '2024-08-14 18:06:05'),
(209, 1, 'Prashant', 'Singh', '8084008754', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-21 05:32:40', '2024-08-21 10:32:40', '2024-08-21 10:32:40'),
(210, 1, 'Vijaya', 'K', '7823293842', NULL, NULL, NULL, NULL, '1998-02-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Brother', NULL, NULL, 'male', 'in', NULL, NULL, '12345', NULL, '2024-08-21 06:12:27', '2024-08-21 11:12:27', '2024-08-21 11:12:27'),
(211, 1, 'Prashant', 'Singh', '8084008754', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '67732', NULL, '2024-08-21 06:13:23', '2024-08-21 11:13:23', '2024-08-21 11:13:23'),
(212, 1, 'vaibhavi', 'shinde', '8296400359', NULL, NULL, NULL, NULL, '2024-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 07:53:58', '2024-08-21 12:53:58', '2024-08-21 12:53:58'),
(213, 1, 'Devishree', 'T', '8296400359', NULL, NULL, NULL, NULL, '2022-04-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 09:19:12', '2024-08-21 14:19:12', '2024-08-21 14:19:12'),
(214, 1, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '1999-03-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Brother', NULL, NULL, 'male', 'in', NULL, NULL, '567899', NULL, '2024-08-21 10:09:33', '2024-08-21 15:09:33', '2024-08-21 15:09:33'),
(215, 1, 'asd', 'adf', '8296400359', NULL, NULL, NULL, NULL, '2024-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 10:22:54', '2024-08-21 15:22:54', '2024-08-21 15:22:54'),
(216, NULL, 'supriya', 'H', '8296400350', 'hanchinamanisupriya145@gmail.com', NULL, '$2y$10$YHDbKOVVHJ/u/maTaITTsurPpBbPVkLI.LWQD9ZySDRw8lDaD8uOi', NULL, '21-07-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345678', NULL, '2024-08-21 10:59:27', '2024-08-21 15:59:27', '2024-08-21 15:59:27'),
(217, 1, 'vaibhavi', 'shinde', '8296400350', NULL, NULL, NULL, NULL, '1989-09-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 11:03:02', '2024-08-21 16:03:02', '2024-08-21 16:03:02'),
(218, NULL, 'mahesh', 'Patel', '1233123131', NULL, NULL, NULL, NULL, '23/08/2002', NULL, 'Saudi', 'bo123', 'go123', '123344', 'Iqama patient', NULL, NULL, NULL, 'o+', 'My self', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'descdcsdc', '2024-08-21 14:02:27', '2024-08-21 19:02:27', '2024-08-21 19:02:27'),
(219, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 17:00:13', '2024-08-21 22:00:13', '2024-08-21 22:00:13'),
(220, 1, 'Supriya', 'hanchinamani', '8296400359', NULL, NULL, NULL, NULL, '2024-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O-', 'Son', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 17:02:07', '2024-08-21 22:02:07', '2024-08-21 22:02:07'),
(221, 1, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 17:05:31', '2024-08-21 22:05:31', '2024-08-21 22:05:31'),
(222, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B-', 'Mother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 17:17:56', '2024-08-21 22:17:56', '2024-08-21 22:17:56'),
(223, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 17:21:51', '2024-08-21 22:21:51', '2024-08-21 22:21:51'),
(224, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 17:23:49', '2024-08-21 22:23:49', '2024-08-21 22:23:49'),
(225, 1, 'asd', 'adf', '8296400359', NULL, NULL, NULL, NULL, '2024-08-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Father', NULL, NULL, 'female', 'in', NULL, NULL, '12345678899', NULL, '2024-08-21 17:28:53', '2024-08-21 22:28:53', '2024-08-21 22:28:53'),
(226, 1, 'vaibhavi', 'shinde', '8056395114', NULL, NULL, NULL, NULL, '2024-08-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Father', NULL, NULL, 'male', 'in', NULL, NULL, '12345678899', NULL, '2024-08-21 17:32:16', '2024-08-21 22:32:15', '2024-08-21 22:32:15'),
(227, 1, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 17:39:49', '2024-08-21 22:39:49', '2024-08-21 22:39:49'),
(228, NULL, 'Devishree', 'T', '8056395114', NULL, NULL, NULL, NULL, '1991-11-02', NULL, 'in', '7342845', NULL, '8974289', 'Domestic Iqama', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 17:55:34', '2024-08-21 22:55:34', '2024-08-21 22:55:34'),
(229, NULL, 'Devishree', 'T', '8056395114', NULL, NULL, NULL, NULL, '1999-11-02', NULL, 'in', '7342845', '932048', '8974289', 'Labour Iqama', NULL, NULL, NULL, 'B+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 18:12:21', '2024-08-21 23:12:21', '2024-08-21 23:12:21'),
(230, NULL, 'Devishree', 'T', '8056395114', NULL, NULL, NULL, NULL, '1999-10-22', NULL, 'in', '7342845', '932048', '8974289', 'Labour Iqama', NULL, NULL, NULL, 'A-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 18:16:47', '2024-08-21 23:16:47', '2024-08-21 23:16:47'),
(231, NULL, 'Devishree', 'T', '8056395114', NULL, NULL, NULL, NULL, '1991-10-22', NULL, 'in', '7342845', '932048', '8974289', 'Labour Iqama', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 18:31:11', '2024-08-21 23:31:11', '2024-08-21 23:31:11'),
(232, 1, 'priya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 18:32:10', '2024-08-21 23:32:10', '2024-08-21 23:32:10'),
(233, NULL, 'shree', 'Dev', '8056395113', NULL, NULL, NULL, NULL, '1998-11-09', NULL, 'in', '7342845', '932048', '8974289', 'Labour Iqama', NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 18:34:21', '2024-08-21 23:34:21', '2024-08-21 23:34:21'),
(234, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '2000-12-23', NULL, 'in', '7342845', '932048', '333233', 'Labour Iqama', NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 18:36:58', '2024-08-21 23:36:58', '2024-08-21 23:36:58'),
(235, 1, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Sister', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 18:41:26', '2024-08-21 23:41:26', '2024-08-21 23:41:26'),
(236, 1, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 19:04:08', '2024-08-22 00:04:08', '2024-08-22 00:04:08'),
(237, NULL, 'Vijay', 'K', '9876544567', NULL, NULL, NULL, NULL, '1999-12-21', NULL, 'in', '7342845', '932048', '8974289', 'Iqama patient', NULL, NULL, NULL, 'A-', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 19:06:17', '2024-08-22 00:06:17', '2024-08-22 00:06:17'),
(238, NULL, 'Devi', 'Shree', '9092541181', NULL, NULL, NULL, NULL, '1999-10-03', NULL, 'in', '7342841', '9320423', '8974424', 'Domestic Iqama', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service required', '2024-08-21 19:15:49', '2024-08-22 00:15:49', '2024-08-22 00:15:49'),
(239, 1, 'Dev', 'S', '8296400359', NULL, NULL, NULL, NULL, '2024-08-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Mother', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 19:21:21', '2024-08-22 00:21:21', '2024-08-22 00:21:21'),
(240, 1, 'Dev', 'Priya', '9827482212', NULL, NULL, NULL, NULL, '1999-11-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Mother', NULL, NULL, 'female', 'in', NULL, NULL, '892374', NULL, '2024-08-21 19:21:26', '2024-08-22 00:21:26', '2024-08-22 00:21:26'),
(241, NULL, 'Loui', 'hen', '8765432342', NULL, NULL, NULL, NULL, '1991-10-22', NULL, 'in', 'Bo10239', '019324', '8765434', 'Labour Iqama', NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 19:25:32', '2024-08-22 00:25:32', '2024-08-22 00:25:32'),
(242, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Son', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 19:32:47', '2024-08-22 00:32:47', '2024-08-22 00:32:47'),
(243, NULL, 'supriya', 'h', '8296400359', NULL, NULL, NULL, NULL, '2000-11-10', NULL, 'in', 'bo123', 'go123', '624543', 'Labour Iqama', NULL, NULL, NULL, 'O-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 19:41:06', '2024-08-22 00:41:06', '2024-08-22 00:41:06'),
(244, NULL, 'Devishree', 'Tamilvanan', '9443972578', NULL, NULL, NULL, NULL, '1999-12-01', NULL, 'in', 'B0123', 'S0123', '9867', 'labour iqama', NULL, NULL, NULL, 'O+', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 19:44:59', '2024-08-22 00:44:59', '2024-08-22 00:44:59'),
(245, 1, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Other', NULL, NULL, 'male', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 19:47:12', '2024-08-22 00:47:12', '2024-08-22 00:47:12'),
(246, 1, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 19:51:21', '2024-08-22 00:51:21', '2024-08-22 00:51:21'),
(247, 1, 'asd', 'adf', '8296400359', NULL, NULL, NULL, NULL, '2024-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 20:01:15', '2024-08-22 01:01:15', '2024-08-22 01:01:15'),
(248, NULL, 'Devishree', 'Tamilvanan', '9092541181', NULL, NULL, NULL, NULL, '2000-11-20', NULL, 'in', 'B0243', 'S2334', '8765456', 'Iqama patient', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 20:04:24', '2024-08-22 01:04:24', '2024-08-22 01:04:24'),
(249, NULL, 'mahesh', 'Patel', '1233123131', NULL, NULL, NULL, NULL, '23/08/2002', NULL, 'Saudi', 'bo123', 'go123', NULL, 'Iqama patient', NULL, NULL, NULL, 'o+', 'My self', NULL, NULL, 'male', NULL, 'Iqama', NULL, '123344', 'descdcsdc', '2024-08-21 20:06:50', '2024-08-22 01:06:50', '2024-08-22 01:06:50'),
(250, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-13', NULL, 'in', '123456', '123456', '123456', 'Iqaasfsd dfgfdhfg', NULL, NULL, NULL, 'AB-', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'wertyui', '2024-08-21 20:21:13', '2024-08-22 01:21:13', '2024-08-22 01:21:13'),
(251, 1, 'karthik', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Brother', NULL, NULL, 'female', 'in', NULL, NULL, '12345678', NULL, '2024-08-21 20:24:28', '2024-08-22 01:24:28', '2024-08-22 01:24:28'),
(252, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-30', NULL, 'in', '12345', '234567', '1234567', 'Iqama patient xcvbc', NULL, NULL, NULL, 'B-', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'sdfghj', '2024-08-21 20:30:27', '2024-08-22 01:30:27', '2024-08-22 01:30:27'),
(253, NULL, 'vaibhavi', 'shinde', '8056395114', NULL, NULL, NULL, NULL, '2024-08-23', NULL, 'in', '12345', '1234', '12345', 'Iqama patient', NULL, NULL, NULL, 'B-', 'Son', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'qwer', '2024-08-21 20:33:25', '2024-08-22 01:33:25', '2024-08-22 01:33:25'),
(254, NULL, 'Devishree', 'Tamilvanan', '8056395114', NULL, NULL, NULL, NULL, '1999-11-01', NULL, 'in', '7342845', 'S0897', '8974289', 'Iqama patient', NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 20:44:09', '2024-08-22 01:44:09', '2024-08-22 01:44:09'),
(255, NULL, 'Devishree', 'Tamilvanan', '3456789342', NULL, NULL, NULL, NULL, '1999-11-03', NULL, 'in', '7342845', '9876', '8974289', 'Ilabour iqama', NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 20:54:06', '2024-08-22 01:54:06', '2024-08-22 01:54:06'),
(256, NULL, 'Devishree', 'Tamilvanan', '9089898751', NULL, NULL, NULL, NULL, '1999-11-09', NULL, 'in', '7342845', '4567', '8974289', 'Iqama patient', NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 20:57:58', '2024-08-22 01:57:58', '2024-08-22 01:57:58'),
(257, NULL, 'vaibhavi', 'shinde', '8296400359', NULL, NULL, NULL, NULL, '2024-07-30', NULL, 'in', '12345', '345', '12345', 'Iqama patient', NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'sfh', '2024-08-21 20:59:15', '2024-08-22 01:59:15', '2024-08-22 01:59:15'),
(258, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '12345678', NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-21 21:11:21', '2024-08-22 02:11:21', '2024-08-22 02:11:21'),
(259, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-26', NULL, 'in', NULL, NULL, '12345678', NULL, NULL, NULL, NULL, 'A-', 'Father', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-21 21:16:16', '2024-08-22 02:16:16', '2024-08-22 02:16:16'),
(260, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-13', NULL, 'in', NULL, NULL, '12345678', NULL, NULL, NULL, NULL, 'B+', 'Mother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-21 21:18:01', '2024-08-22 02:18:01', '2024-08-22 02:18:01'),
(261, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B+', 'Father', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-21 21:28:52', '2024-08-22 02:28:52', '2024-08-22 02:28:52'),
(262, NULL, 'Dev', 'Tamilvanan', '9024904923', NULL, NULL, NULL, NULL, '2000-10-22', NULL, 'in', '7342845', '983596', '8974289', 'Labour Iqama', NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'iqama service', '2024-08-21 21:37:09', '2024-08-22 02:37:09', '2024-08-22 02:37:09'),
(263, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-07-29', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-21 21:50:30', '2024-08-22 02:50:30', '2024-08-22 02:50:30'),
(264, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '1999-07-06', NULL, 'in', '7687', '7809', '876', 'Iqama', NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'doctor service', '2024-08-21 21:55:30', '2024-08-22 02:55:30', '2024-08-22 02:55:30'),
(265, NULL, 'Vijay', 'K', '9834938342', NULL, NULL, NULL, NULL, '1998-11-01', NULL, 'in', '3456', '678', '876', 'Labour Iqama', NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'doctor service', '2024-08-21 21:56:52', '2024-08-22 02:56:52', '2024-08-22 02:56:52'),
(266, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '1999-09-04', NULL, 'in', '7342845', '678', '8974289', 'Iqama', NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'hjiu', '2024-08-21 22:13:27', '2024-08-22 03:13:27', '2024-08-22 03:13:27'),
(267, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '1999-09-04', NULL, 'in', '7342845', '678', '8974289', 'Iqama', NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'hjiu', '2024-08-21 22:13:27', '2024-08-22 03:13:27', '2024-08-22 03:13:27'),
(268, NULL, 'ghjk', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-09-06', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B-', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-21 22:26:10', '2024-08-22 03:26:10', '2024-08-22 03:26:10'),
(269, 1, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '1999-12-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', 'in', NULL, NULL, '578', NULL, '2024-08-21 22:51:49', '2024-08-22 03:51:49', '2024-08-22 03:51:49'),
(270, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-14', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-22 04:37:04', '2024-08-22 09:37:04', '2024-08-22 09:37:04'),
(271, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-22 04:47:25', '2024-08-22 09:47:25', '2024-08-22 09:47:25'),
(272, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-13', NULL, 'in', NULL, NULL, '1234', NULL, NULL, NULL, NULL, 'O+', 'Father', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 04:50:09', '2024-08-22 09:50:09', '2024-08-22 09:50:09'),
(273, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-25', NULL, 'in', NULL, NULL, '3456', NULL, NULL, NULL, NULL, 'A-', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 06:39:41', '2024-08-22 11:39:41', '2024-08-22 11:39:41'),
(274, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-19', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 09:24:18', '2024-08-22 14:24:18', '2024-08-22 14:24:18'),
(275, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-23', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 09:40:31', '2024-08-22 14:40:31', '2024-08-22 14:40:31'),
(276, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 09:46:03', '2024-08-22 14:46:03', '2024-08-22 14:46:03'),
(277, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-23', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-22 09:52:25', '2024-08-22 14:52:25', '2024-08-22 14:52:25'),
(278, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B+', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 10:09:51', '2024-08-22 15:09:51', '2024-08-22 15:09:51'),
(279, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'AB-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 11:07:04', '2024-08-22 16:07:04', '2024-08-22 16:07:04'),
(280, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-27', NULL, 'in', NULL, NULL, '34567', NULL, NULL, NULL, NULL, 'A-', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 13:22:18', '2024-08-22 18:22:18', '2024-08-22 18:22:18'),
(281, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-23', NULL, 'in', NULL, NULL, '123456', NULL, NULL, NULL, NULL, 'AB-', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-22 13:24:31', '2024-08-22 18:24:31', '2024-08-22 18:24:31'),
(282, NULL, 'gh', 'gh', '8296400359', NULL, NULL, NULL, NULL, '2024-08-27', NULL, 'in', '45', '56', '345', 'ertertre', NULL, NULL, NULL, 'B+', 'Mother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'bnbvmbn,v', '2024-08-22 13:38:58', '2024-08-22 18:38:58', '2024-08-22 18:38:58'),
(283, NULL, 'Prasant', 'k', '8755345344', NULL, NULL, NULL, NULL, '2024-08-16', NULL, 'in', NULL, NULL, '65432', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-22 13:56:35', '2024-08-22 18:56:35', '2024-08-22 18:56:35'),
(284, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-15', NULL, 'in', '3456', '123456789', '12345', 'Iqama patientasdfghjk', NULL, NULL, NULL, 'AB+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'qwertyuiop', '2024-08-22 14:05:26', '2024-08-22 19:05:26', '2024-08-22 19:05:26'),
(285, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-14', NULL, 'in', NULL, NULL, '1234567', NULL, NULL, NULL, NULL, 'AB+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-22 14:10:24', '2024-08-22 19:10:24', '2024-08-22 19:10:24'),
(286, NULL, 'Test', 'Suchan', '9740029247', NULL, NULL, NULL, NULL, '2024-08-09', NULL, 'in', NULL, NULL, '45678', NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 05:12:36', '2024-08-23 10:12:36', '2024-08-23 10:12:36'),
(287, NULL, 'Test 5', 'Suchan', '9740029247', NULL, NULL, NULL, NULL, '2024-08-25', NULL, 'in', NULL, NULL, '45678', NULL, NULL, NULL, NULL, 'B+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 05:15:11', '2024-08-23 10:15:11', '2024-08-23 10:15:11'),
(288, NULL, 'test67', 'Test', '9740029247', NULL, NULL, NULL, NULL, '2024-08-09', NULL, 'in', NULL, NULL, '2344', NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 05:23:29', '2024-08-23 10:23:29', '2024-08-23 10:23:29'),
(289, NULL, 'prasha', 'k', '9456275453', NULL, NULL, NULL, NULL, '2024-08-22', NULL, 'in', NULL, NULL, '23', NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 05:26:58', '2024-08-23 10:26:58', '2024-08-23 10:26:58'),
(290, NULL, 'Test', 'Suchan', '9740029247', NULL, NULL, NULL, NULL, '2024-08-22', NULL, 'in', NULL, NULL, '2344', NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 05:32:23', '2024-08-23 10:32:23', '2024-08-23 10:32:23'),
(291, NULL, 'Vimala', 'T', '7896565443', NULL, NULL, NULL, NULL, '1999-11-03', NULL, 'in', NULL, NULL, '123456', NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-23 05:34:35', '2024-08-23 10:34:35', '2024-08-23 10:34:35'),
(292, NULL, 'asd', 'tiwar', '8827803904', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'in', NULL, NULL, '456455', NULL, NULL, NULL, NULL, 'A-', 'Other', NULL, NULL, 'other', NULL, NULL, NULL, NULL, NULL, '2024-08-23 05:44:26', '2024-08-23 10:44:26', '2024-08-23 10:44:26'),
(293, NULL, 'Devi', 'T', '8556782331', NULL, NULL, NULL, NULL, '2024-08-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', 'Xyz company', NULL, 'female', NULL, NULL, NULL, '5678', NULL, '2024-08-23 10:25:40', '2024-08-23 15:25:40', '2024-08-23 15:25:40'),
(294, 1, NULL, 'kab', '1233123131', 'kab@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-23 10:59:47', '2024-08-23 15:59:47', '2024-08-23 15:59:47'),
(295, NULL, 'namrata', 'janti', '5617862383', NULL, NULL, NULL, NULL, '2024-08-14', NULL, 'in', NULL, NULL, '1234567', NULL, NULL, NULL, NULL, 'A-', 'Father', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-23 11:16:44', '2024-08-23 16:16:44', '2024-08-23 16:16:44'),
(296, NULL, 'bgh', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-08', NULL, 'in', '567898', '778978', '12345', 'Iqama patientghjkjk', NULL, NULL, NULL, 'B-', 'Father', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'jhkjh', '2024-08-23 11:19:22', '2024-08-23 16:19:22', '2024-08-23 16:19:22'),
(297, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-14', NULL, 'in', NULL, NULL, '1234567', NULL, NULL, NULL, NULL, 'AB+', 'Father', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-23 11:46:06', '2024-08-23 16:46:06', '2024-08-23 16:46:06'),
(298, NULL, 'prashanth', 'k', '9456275453', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'in', NULL, NULL, '23567', NULL, NULL, NULL, NULL, 'A-', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 13:42:26', '2024-08-23 18:42:26', '2024-08-23 18:42:26'),
(299, NULL, 'Abdulrahman', 'Essa', '555552022', 'Al_leader@hot.com', NULL, '$2y$10$BSXaYynbYpBr7Ryl/ZHjMutlx9vp1b.WJJsJUNvjfG7ZA/K1w4CDy', NULL, '23-08-1981', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '10101010', NULL, '2024-08-23 14:27:33', '2024-08-23 19:27:33', '2024-08-23 19:27:33'),
(300, NULL, 'abdulrahman', 'u2', '0555552022', NULL, NULL, NULL, NULL, '2024-08-23', NULL, 'sa', NULL, NULL, '555', NULL, NULL, NULL, NULL, 'A-', 'Mother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 15:05:59', '2024-08-23 20:05:59', '2024-08-23 20:05:59'),
(301, NULL, 'abdulrahman', 'test', '0555552022', NULL, NULL, NULL, NULL, '2024-07-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Father', 'uy', NULL, 'male', NULL, NULL, NULL, '2233455', NULL, '2024-08-23 15:07:55', '2024-08-23 20:07:55', '2024-08-23 20:07:55'),
(302, NULL, 'abdulrahman', 'test', '0555552022', NULL, NULL, NULL, NULL, '2024-08-06', NULL, 'sa', NULL, NULL, 'ققق', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-23 15:09:38', '2024-08-23 20:09:38', '2024-08-23 20:09:38'),
(303, NULL, 'abdulrahman', 'test', '0555552022', NULL, NULL, NULL, NULL, '2024-08-15', NULL, 'sa', '666', '666', 'ققق', 'Iqama patient', NULL, NULL, NULL, 'AB-', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, '8888888', '2024-08-23 15:13:15', '2024-08-23 20:13:15', '2024-08-23 20:13:15'),
(304, NULL, 'abdulrahman', 'test', '0555552022', NULL, NULL, NULL, NULL, '2024-08-15', NULL, 'sa', '666', '666', 'ققق', 'Iqama patient', NULL, NULL, NULL, 'AB-', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, '8888888', '2024-08-23 15:13:16', '2024-08-23 20:13:16', '2024-08-23 20:13:16'),
(306, NULL, 'abdulrahman', 'dd', '0555552022', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'sa', '3333', '3333', '3333', 'reewrew', NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, NULL, '2024-08-23 15:24:31', '2024-08-23 20:24:31', '2024-08-23 20:24:31'),
(307, NULL, 'abdulrahman', 'dd', '0555552022', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'sa', '3333', '3333', '3333', 'reewrew', NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, NULL, '2024-08-23 15:24:31', '2024-08-23 20:24:31', '2024-08-23 20:24:31'),
(308, NULL, 't', 's', '0555552022', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Father', '33', NULL, 'female', NULL, NULL, NULL, '2233455', NULL, '2024-08-23 15:28:39', '2024-08-23 20:28:39', '2024-08-23 20:28:39'),
(309, NULL, 't', 's', '0555552022', NULL, NULL, NULL, NULL, '2024-08-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Father', '33', NULL, 'female', NULL, NULL, NULL, '2233455', NULL, '2024-08-23 15:28:40', '2024-08-23 20:28:40', '2024-08-23 20:28:40'),
(310, NULL, 'Prashant', 'Singh', '8084008754', NULL, NULL, NULL, NULL, '2024-08-24', NULL, 'sa', NULL, NULL, '543', NULL, NULL, NULL, NULL, 'O-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-24 10:16:59', '2024-08-24 15:16:59', '2024-08-24 15:16:59'),
(311, NULL, 'ss', 'ww', '0555552022', NULL, NULL, NULL, NULL, '2024-08-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Brother', 'ggg', NULL, 'female', NULL, NULL, NULL, '43434', NULL, '2024-08-24 11:14:54', '2024-08-24 16:14:54', '2024-08-24 16:14:54'),
(312, NULL, 'ss', 'ww', '0555552022', NULL, NULL, NULL, NULL, '2024-08-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Brother', 'ggg', NULL, 'female', NULL, NULL, NULL, '43434', NULL, '2024-08-24 11:14:54', '2024-08-24 16:14:54', '2024-08-24 16:14:54'),
(313, NULL, 'ss', 'test22', '0555552022', NULL, NULL, NULL, NULL, '2024-08-22', NULL, 'in', NULL, NULL, '333', NULL, NULL, NULL, NULL, 'AB+', 'Mother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-24 12:05:02', '2024-08-24 17:05:02', '2024-08-24 17:05:02'),
(314, NULL, 'ss', 'ww', '0555552022', NULL, NULL, NULL, NULL, '2024-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Sister', '2', NULL, 'male', NULL, NULL, NULL, '2233455', NULL, '2024-08-24 12:18:22', '2024-08-24 17:18:22', '2024-08-24 17:18:22'),
(315, NULL, '222', 'ww', '0555552022', NULL, NULL, NULL, NULL, '2024-08-02', NULL, 'sa', '55', '555', '44', '555', NULL, NULL, NULL, 'A-', 'Sister', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, NULL, '2024-08-24 12:33:51', '2024-08-24 17:33:51', '2024-08-24 17:33:51'),
(316, NULL, '222', 'ww', '0555552022', NULL, NULL, NULL, NULL, '2024-08-02', NULL, 'sa', '55', '555', '44', '555', NULL, NULL, NULL, 'A-', 'Sister', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, NULL, '2024-08-24 12:33:51', '2024-08-24 17:33:51', '2024-08-24 17:33:51'),
(317, NULL, 'abdulrahman', 'ww', '0555552022', NULL, NULL, NULL, NULL, '2024-07-31', NULL, 'sa', '444', '444', 'ققق', 'Iqama patient', NULL, NULL, NULL, 'O+', 'Mother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, NULL, '2024-08-25 12:32:07', '2024-08-25 17:32:07', '2024-08-25 17:32:07'),
(318, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-06', NULL, 'in', NULL, NULL, '1234', NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-26 04:55:51', '2024-08-26 09:55:51', '2024-08-26 09:55:51'),
(319, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '1234', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-26 07:17:11', '2024-08-26 12:17:11', '2024-08-26 12:17:11'),
(320, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-23', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-26 07:24:16', '2024-08-26 12:24:16', '2024-08-26 12:24:16'),
(321, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-07-31', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-26 07:57:54', '2024-08-26 12:57:54', '2024-08-26 12:57:54'),
(322, NULL, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-02', NULL, 'uk', NULL, NULL, '12345', 'renewal', NULL, NULL, NULL, 'AB+', 'Son', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, NULL, '2024-08-26 10:03:39', '2024-08-26 15:03:39', '2024-08-26 15:03:39'),
(323, NULL, 'vaibhavi', 'shinde', '8056395114', NULL, NULL, NULL, NULL, '2024-08-03', NULL, 'in', 'onClick={() => navigate(-1)}', 'onClick={() => navigate(-1)}', '12345onClick={() => navigate(-1)}', 'renewal', NULL, NULL, NULL, 'AB-', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'hosas', '2024-08-26 10:13:35', '2024-08-26 15:13:35', '2024-08-26 15:13:35'),
(324, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-29', NULL, 'in', '2134', '876578', '12345', 'renewal', NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'cvfgfg gfgh', '2024-08-26 10:48:22', '2024-08-26 15:48:22', '2024-08-26 15:48:22'),
(325, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-29', NULL, 'in', '123456', '123456', '12345', 'renewal', NULL, NULL, NULL, 'AB+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'sdfghjkjhgf', '2024-08-26 11:31:52', '2024-08-26 16:31:52', '2024-08-26 16:31:52'),
(326, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-29', NULL, 'in', '123456', '123456', '12345', 'renewal', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'sdfghjkjhgf', '2024-08-26 11:40:38', '2024-08-26 16:40:38', '2024-08-26 16:40:38'),
(327, NULL, 'Prashant Kumar', 'Singh', '9084008753', 'pk1@gmail.com22', NULL, '$2y$10$cPLBy8c9jlgEr4.lSAH8guk1Ydz6Cn1PBDxJc7BiaAYrSxEL4ixTu', NULL, '26-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-08-26 11:43:17', '2024-08-26 16:43:17', '2024-08-26 16:43:17'),
(328, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-29', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'A-', 'Other', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-26 11:52:00', '2024-08-26 16:52:00', '2024-08-26 16:52:00'),
(329, NULL, 'namrata', 'jant', '8296400359', NULL, NULL, NULL, NULL, '2024-08-01', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'B-', 'Son', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-26 11:54:54', '2024-08-26 16:54:54', '2024-08-26 16:54:54'),
(330, NULL, 'Prashant', 'Singh', '9084008752', NULL, NULL, NULL, NULL, '2024-09-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Father', 'ds', NULL, 'male', NULL, NULL, NULL, '67732', NULL, '2024-08-26 12:31:43', '2024-08-26 17:31:43', '2024-08-26 17:31:43'),
(331, NULL, 'Prashant', 'Singh', '8084008759', NULL, NULL, NULL, NULL, '2024-09-07', NULL, 'sa', NULL, NULL, '34442', NULL, NULL, NULL, NULL, 'B-', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-26 12:58:10', '2024-08-26 17:58:10', '2024-08-26 17:58:10'),
(332, NULL, 'Prashant', 'Singh', '8084008759', NULL, NULL, NULL, NULL, '2024-09-07', NULL, 'sa', NULL, NULL, '34442', NULL, NULL, NULL, NULL, 'B-', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-26 12:58:10', '2024-08-26 17:58:10', '2024-08-26 17:58:10'),
(333, NULL, 'Prashant', 'Singh', '8084008754', NULL, NULL, NULL, NULL, '2024-08-27', NULL, 'sa', NULL, NULL, '22', NULL, NULL, NULL, NULL, 'B-', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-26 13:28:21', '2024-08-26 18:28:21', '2024-08-26 18:28:21'),
(334, NULL, 'Vijay', 'K', '9847385436', NULL, NULL, NULL, NULL, '1999-11-09', NULL, 'in', NULL, NULL, '234567', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-27 05:07:52', '2024-08-27 10:07:52', '2024-08-27 10:07:52');
INSERT INTO `patientregistration` (`id`, `Relatedto`, `Firstname`, `Lastname`, `Phone`, `Email`, `Username`, `Password`, `Confirmpassword`, `Dob`, `Age`, `Nationality`, `Borderno`, `Sponserid`, `Passportid`, `Iqamatype`, `Maritalstatus`, `Height`, `Weight`, `Bloodgroup`, `Relationship`, `InsuranceCompany`, `Insuranceaccno`, `Gender`, `Country`, `Type`, `Status`, `Nationalid`, `Description`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(335, NULL, 'supriya', 'h', '9867576564', NULL, NULL, NULL, NULL, '1998-10-08', NULL, 'in', '7342845', '56789', '345678', 'renewal', NULL, NULL, NULL, 'O-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, '2wertyui', '2024-08-27 06:05:02', '2024-08-27 11:05:02', '2024-08-27 11:05:02'),
(336, NULL, 'supriya', 'h', '9874354553', NULL, NULL, NULL, NULL, '1999-11-10', NULL, 'in', NULL, NULL, '345678', NULL, NULL, NULL, NULL, 'A-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-27 06:07:41', '2024-08-27 11:07:41', '2024-08-27 11:07:41'),
(337, NULL, 'supriya', 'h', '9824574897', NULL, NULL, NULL, NULL, '1999-02-02', NULL, 'in', '2354', '435', '234567', 'renewal', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'adsf', '2024-08-27 06:10:49', '2024-08-27 11:10:49', '2024-08-27 11:10:49'),
(338, NULL, 'supriya', 'h', '9787896845', NULL, NULL, NULL, NULL, '1999-01-31', NULL, 'in', '7342845', '567', '23456', 'renewal', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfgh', '2024-08-27 07:21:40', '2024-08-27 12:21:40', '2024-08-27 12:21:40'),
(339, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-30', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'O-', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-27 07:29:14', '2024-08-27 12:29:14', '2024-08-27 12:29:14'),
(340, NULL, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'Biztechnosys', NULL, 'female', NULL, NULL, NULL, '1234', NULL, '2024-08-27 07:29:58', '2024-08-27 12:29:58', '2024-08-27 12:29:58'),
(341, NULL, 'Loui', 'hen', '8765432341', NULL, NULL, NULL, NULL, '1999-11-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Mother', 'asdfg', NULL, 'female', NULL, NULL, NULL, '23456', NULL, '2024-08-27 07:33:40', '2024-08-27 12:33:40', '2024-08-27 12:33:40'),
(342, NULL, 'Loui', 'hen', '9945148117', 'loui99@gmail.com', NULL, '$2y$10$LJWixdVRnpSgtgoSkha8guum0Mp7C9KmemSOtNWDW5Qf3.oxDNOsG', NULL, '27-08-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '76876', NULL, '2024-08-27 09:06:45', '2024-08-27 14:06:45', '2024-08-27 14:06:45'),
(343, NULL, 'Supriya', 'Hanchinamani', '9433972578', 'sup22@gmail.com', NULL, '$2y$10$m.Z5rODY9YAB0.9ijQeaMO8kGrEw5VrrzN3aEuk1W9a1DNwl5KGqm', NULL, '27-08-2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '23456', NULL, '2024-08-27 09:23:07', '2024-08-27 14:23:07', '2024-08-27 14:23:07'),
(344, NULL, 'Prashant kmar', 'Singh', '8084009752', 'pkdsa1@gmail.com', NULL, '$2y$10$XxSQ8yRqWsjTbEVxMpfvueZWAFBU9OBZUoUCKyhaTGOTzQEr8B81a', NULL, '27-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', '1', '67732', NULL, '2024-08-27 10:37:34', '2024-08-27 15:37:34', '2024-08-28 12:58:38'),
(345, 1, NULL, 'kab', '1233123131', 'kab@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2024-08-27 12:49:55', '2024-08-27 17:49:55', '2024-08-28 12:58:37'),
(346, NULL, 'Loui', 'hen', '9793674384', NULL, NULL, NULL, NULL, '1999-11-10', NULL, 'in', NULL, NULL, '456789', NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, NULL, '1', NULL, NULL, '2024-08-27 13:21:45', '2024-08-27 18:21:45', '2024-08-28 12:58:37'),
(347, NULL, 'Loui', 'hen', '9828474824', NULL, NULL, NULL, NULL, '1999-11-05', NULL, 'in', '234', '24543', '5678', 'renewal', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', '1', NULL, 'adad', '2024-08-28 05:28:29', '2024-08-28 10:28:29', '2024-08-28 12:58:36'),
(348, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '2024-08-09', NULL, 'in', NULL, NULL, '23456', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, '1', NULL, NULL, '2024-08-28 06:31:37', '2024-08-28 11:31:37', '2024-08-28 12:58:35'),
(349, NULL, 'asd', 'wer', '8296400359', NULL, NULL, NULL, NULL, '2024-08-29', NULL, 'in', '123', '123', '12345', 'renewal', NULL, NULL, NULL, 'O-', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'ww', '2024-08-28 10:33:12', '2024-08-28 15:33:12', '2024-08-28 15:33:12'),
(350, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-31', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'hosas', '2024-08-28 10:56:14', '2024-08-28 15:56:14', '2024-08-28 15:56:14'),
(351, NULL, 'Loui', 'hen', '7823293842', NULL, NULL, NULL, NULL, '2024-08-10', NULL, 'in', '7342845', '4567', '8974289', 'renewal', NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'doctor service', '2024-08-28 13:09:00', '2024-08-28 18:09:00', '2024-08-28 18:09:00'),
(352, NULL, 'virat', 'K', '8924755694', NULL, NULL, NULL, NULL, '2024-08-10', NULL, 'in', '3456', '456', '2345', 'renewal', NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'sdfg', '2024-08-29 04:41:01', '2024-08-29 09:41:01', '2024-08-29 09:41:01'),
(353, NULL, 'virat', 'K', '8924755694', NULL, NULL, NULL, NULL, '2024-08-16', NULL, 'in', NULL, NULL, '456789', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 05:26:51', '2024-08-29 10:26:51', '2024-08-29 10:26:51'),
(354, NULL, 'virat', 'K', '8924755694', NULL, NULL, NULL, NULL, '2024-08-17', NULL, 'in', NULL, NULL, '456', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 05:38:05', '2024-08-29 10:38:05', '2024-08-29 10:38:05'),
(355, NULL, 'namrata', 'janti', '1234567890', NULL, NULL, NULL, NULL, '2024-08-30', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 05:40:37', '2024-08-29 10:40:37', '2024-08-29 10:40:37'),
(356, NULL, 'namrata', 'janti', '1234567890', NULL, NULL, NULL, NULL, '2024-08-28', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 05:41:05', '2024-08-29 10:41:05', '2024-08-29 10:41:05'),
(357, NULL, 'virat', 'K', '8924755694', NULL, NULL, NULL, NULL, '1999-10-19', NULL, 'in', NULL, NULL, '3456', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 05:42:22', '2024-08-29 10:42:22', '2024-08-29 10:42:22'),
(358, NULL, 'virat', 'K', '8924755694', NULL, NULL, NULL, NULL, '1999-10-19', NULL, 'in', NULL, NULL, '3456', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 05:42:22', '2024-08-29 10:42:22', '2024-08-29 10:42:22'),
(359, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-01', NULL, 'sa', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:06:18', '2024-08-29 11:06:18', '2024-08-29 11:06:18'),
(360, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-01', NULL, 'sa', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:06:19', '2024-08-29 11:06:19', '2024-08-29 11:06:19'),
(361, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:08:02', '2024-08-29 11:08:02', '2024-08-29 11:08:02'),
(362, NULL, 'namrata', 'janti', '1234567890', NULL, NULL, NULL, NULL, '2024-08-23', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'O+', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 06:13:44', '2024-08-29 11:13:44', '2024-08-29 11:13:44'),
(363, NULL, 'namrata', 'janti', '1234567890', NULL, NULL, NULL, NULL, '2024-08-27', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B+', 'Mother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 06:19:58', '2024-08-29 11:19:58', '2024-08-29 11:19:58'),
(364, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-13', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'AB-', 'Other', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 06:23:08', '2024-08-29 11:23:08', '2024-08-29 11:23:08'),
(365, NULL, 'Vijay', 'k', '1234567890', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'O-', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:28:11', '2024-08-29 11:28:11', '2024-08-29 11:28:11'),
(366, NULL, 'Karthik', 'A', '1234567899', NULL, NULL, NULL, NULL, '2024-08-30', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'A-', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:28:58', '2024-08-29 11:28:58', '2024-08-29 11:28:58'),
(367, NULL, 'Vijay', 'k', '1234567890', NULL, NULL, NULL, NULL, '2024-08-07', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'AB-', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:32:06', '2024-08-29 11:32:06', '2024-08-29 11:32:06'),
(368, NULL, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'B+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:33:38', '2024-08-29 11:33:38', '2024-08-29 11:33:38'),
(369, NULL, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:35:18', '2024-08-29 11:35:18', '2024-08-29 11:35:18'),
(370, NULL, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-06', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'B-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:37:42', '2024-08-29 11:37:42', '2024-08-29 11:37:42'),
(371, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'AB+', 'Brother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 06:38:52', '2024-08-29 11:38:52', '2024-08-29 11:38:52'),
(372, NULL, 'virat', 'K', '8924755694', NULL, NULL, NULL, NULL, '2024-08-03', NULL, 'in', NULL, NULL, '34567', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 06:42:40', '2024-08-29 11:42:40', '2024-08-29 11:42:40'),
(373, NULL, 'namrata', 'janti', '1234567890', NULL, NULL, NULL, NULL, '2024-08-08', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'O-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 06:54:37', '2024-08-29 11:54:37', '2024-08-29 11:54:37'),
(374, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-02', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 06:55:53', '2024-08-29 11:55:53', '2024-08-29 11:55:53'),
(375, NULL, 'namrata', 'janti', '1234567890', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:06:02', '2024-08-29 12:06:02', '2024-08-29 12:06:02'),
(376, NULL, 'namrata', 'janti', '1234567890', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:06:02', '2024-08-29 12:06:02', '2024-08-29 12:06:02'),
(377, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-28', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'O-', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 07:08:59', '2024-08-29 12:08:59', '2024-08-29 12:08:59'),
(378, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:11:07', '2024-08-29 12:11:07', '2024-08-29 12:11:07'),
(379, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-27', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:13:34', '2024-08-29 12:13:34', '2024-08-29 12:13:34'),
(380, NULL, 'Devishree', 'T', '8103948013', NULL, NULL, NULL, NULL, '2024-08-16', NULL, 'in', NULL, NULL, '345', NULL, NULL, NULL, NULL, 'O-', 'Brother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:15:36', '2024-08-29 12:15:36', '2024-08-29 12:15:36'),
(381, NULL, 'Devishree', 'T', '8103948013', NULL, NULL, NULL, NULL, '2024-08-17', NULL, 'in', NULL, NULL, '3456', NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:17:53', '2024-08-29 12:17:53', '2024-08-29 12:17:53'),
(382, NULL, 'supriya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:22:29', '2024-08-29 12:22:29', '2024-08-29 12:22:29'),
(383, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-08-20', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'AB+', 'Brother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:28:37', '2024-08-29 12:28:37', '2024-08-29 12:28:37'),
(384, NULL, 'Devishree', 'T', '5555520221', NULL, NULL, NULL, NULL, '2024-08-02', NULL, 'in', NULL, NULL, '34567', NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:35:22', '2024-08-29 12:35:22', '2024-08-29 12:35:22'),
(385, NULL, 'Devishree', 'T', '8103948013', NULL, NULL, NULL, NULL, '2024-08-28', NULL, 'in', NULL, NULL, '34567', NULL, NULL, NULL, NULL, 'B-', 'Brother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 07:48:26', '2024-08-29 12:48:26', '2024-08-29 12:48:26'),
(386, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-14', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'B-', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 09:23:45', '2024-08-29 14:23:45', '2024-08-29 14:23:45'),
(387, NULL, 'Rohan', 'Singh', '8780820283', 'rohan.ks@biztechnosys.com', NULL, '$2y$10$EWSJPmr767Yzfnnthvet7uFec6yMaImpt5NjSwW06BHwT/unFIWBe', NULL, '03-11-1997', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '966', NULL, '2024-08-29 09:40:33', '2024-08-29 14:40:33', '2024-08-29 14:40:33'),
(388, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-30', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 09:40:47', '2024-08-29 14:40:47', '2024-08-29 14:40:47'),
(389, NULL, 'Dev', 'S', '8296400359', NULL, NULL, NULL, NULL, '2024-09-08', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'O+', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 09:46:07', '2024-08-29 14:46:07', '2024-08-29 14:46:07'),
(390, NULL, 'Devishree', 'T', '8056395114', NULL, NULL, NULL, NULL, '1999-11-08', NULL, 'in', '2345', '3456', '456', 'renewal', NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama test', '2024-08-29 10:22:42', '2024-08-29 15:22:42', '2024-08-29 15:22:42'),
(391, NULL, 'Supriya', 'H', '8924755694', NULL, NULL, NULL, NULL, '2024-08-09', NULL, 'in', '456', '4567', '3456', 'newRelease', NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama', '2024-08-29 10:24:15', '2024-08-29 15:24:15', '2024-08-29 15:24:15'),
(392, NULL, 'Dev', 'S', '8296400359', NULL, NULL, NULL, NULL, '2024-08-30', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B+', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 10:34:13', '2024-08-29 15:34:13', '2024-08-29 15:34:13'),
(393, NULL, 'Dev', 'S', '8296400359', NULL, NULL, NULL, NULL, '2024-08-28', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'O+', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 10:36:20', '2024-08-29 15:36:20', '2024-08-29 15:36:20'),
(394, NULL, 'namrata', 'janti', '8296400359', NULL, NULL, NULL, NULL, '2024-08-27', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'B+', 'Sister', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 10:45:22', '2024-08-29 15:45:22', '2024-08-29 15:45:22'),
(395, NULL, 'Devishree', 'T', '8103948013', NULL, NULL, NULL, NULL, '2024-08-10', NULL, 'in', '2345', '345', '12345', 'renewal', NULL, NULL, NULL, 'O+', 'Sister', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'sdfg', '2024-08-29 11:04:12', '2024-08-29 16:04:12', '2024-08-29 16:04:12'),
(396, NULL, 'Devishree', 'T', '8103948013', NULL, NULL, NULL, NULL, '2024-08-17', NULL, 'in', NULL, NULL, '3456', NULL, NULL, NULL, NULL, 'O+', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-08-29 11:07:49', '2024-08-29 16:07:49', '2024-08-29 16:07:49'),
(397, NULL, 'Loui', 'Hen', '5555520221', NULL, NULL, NULL, NULL, '2024-08-10', NULL, 'sa', NULL, NULL, '4567', NULL, NULL, NULL, NULL, 'O+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-08-29 11:08:50', '2024-08-29 16:08:50', '2024-08-29 16:08:50'),
(398, NULL, 'Devishree', 'T', '9103948013', NULL, NULL, NULL, NULL, '2024-08-10', NULL, 'in', '354', '345', '23456', 'renewal', NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'iqama residence and driver license exam', '2024-08-29 11:52:30', '2024-08-29 16:52:30', '2024-08-29 16:52:30'),
(399, NULL, 'Dev', 'S', '9894943298', NULL, NULL, NULL, NULL, '2024-08-14', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'O+', 'Son', NULL, NULL, 'female', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 12:20:10', '2024-08-29 17:20:10', '2024-08-29 17:20:10'),
(400, NULL, 'priya', 'H', '1234567890', NULL, NULL, NULL, NULL, '2024-08-21', NULL, 'in', '123456', '876578', '12345', 'renewal', NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, 'Iqama', NULL, NULL, 'asdfghj', '2024-08-29 12:21:06', '2024-08-29 17:21:06', '2024-08-29 17:21:06'),
(401, NULL, 'a', 'a', '12345', '1.1@d', NULL, '$2y$10$XIam67kvDwc7hAJYdZH1teWt34.EqeIseZW241To/o15Jk27uCnvu', NULL, '03-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '12345', NULL, '2024-09-03 13:06:27', '2024-09-03 18:06:27', '2024-09-03 18:06:27'),
(402, NULL, 'demo', 'demo', '8780820286', 'demo@gmail.com', NULL, '$2y$10$4JdVq0DIGT.NpBn5W2L3yeqiVPtOol4Gol0F2oADud6vfSlwqfUq2', NULL, '04-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '14', NULL, '2024-09-04 04:58:45', '2024-09-04 09:58:45', '2024-09-04 09:58:45'),
(403, NULL, 'demo', 'demo', '8787878787', 'demo1@gmail.com', NULL, '$2y$10$iKY2kwyXtuyrDy5qYpfHnOTJnzG1Qn8C3KeFsEvqyM7Nvimv8I3eW', NULL, '05-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, 'qa', NULL, '2024-09-05 04:25:55', '2024-09-05 09:25:55', '2024-09-05 09:25:55'),
(404, NULL, 'supriya', 'H', '8296400359', NULL, NULL, NULL, NULL, '2024-09-10', NULL, 'sa', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'O+', 'Mother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-06 05:21:16', '2024-09-06 10:21:16', '2024-09-06 10:21:16'),
(405, NULL, 'demo', 'demo', '8787878787', NULL, NULL, NULL, NULL, '1997-11-03', NULL, 'in', NULL, NULL, '123', NULL, NULL, NULL, NULL, 'B+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-06 05:22:15', '2024-09-06 10:22:15', '2024-09-06 10:22:15'),
(406, NULL, 'demo', 'demo', '8787878787', NULL, NULL, NULL, NULL, '2024-09-13', NULL, 'in', NULL, NULL, '123', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-06 05:26:15', '2024-09-06 10:26:15', '2024-09-06 10:26:15'),
(407, NULL, 'Devisri', 'Tamilvanan', '9345051622', 'devitamil22@gmail.com', NULL, '$2y$10$KnQj5bPtmKTK9W0LFTmNYO8VxK8TQPiL/dUXk7LcyU8BeHTBsotQi', NULL, '17/08/1999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'india', 'register', NULL, '2534343123', NULL, '2024-09-06 07:37:21', '2024-09-06 12:37:21', '2024-09-06 12:37:21'),
(408, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '2024-04-18', NULL, 'in', NULL, NULL, '4567', NULL, NULL, NULL, NULL, 'A-', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-06 11:07:34', '2024-09-06 16:07:34', '2024-09-06 16:07:34'),
(409, NULL, 'supriya', 'H', '0001234567890', 'suupriya.h@biztechnosys.com', NULL, '$2y$10$PXPvAlIMyB.AVinyzEhhnuGeDF9iK0X159kd1ym2u70AmhR5ACRhi', NULL, '09-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '2356623434', NULL, '2024-09-09 06:39:11', '2024-09-09 11:39:11', '2024-09-09 11:39:11'),
(410, NULL, 'namrata', 'janti', '8296400351', 'hanchinamanisupriya456@gmail.com', NULL, '$2y$10$REMHXNbz6rhtV75SGb9ZTeAsVioHeM3VMDcbFhXuK9JbuHoYi54FC', NULL, '09-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '2345678907', NULL, '2024-09-09 07:39:46', '2024-09-09 12:39:46', '2024-09-09 12:39:46'),
(411, NULL, 'kavita', 'gowda', '8296400123', 'kavita@gmail.com', NULL, '$2y$10$z5KAhGEyiZAHBANstXKi8ugtbQRZ2ovDYNrOHKBQIZajrPX9V4eTa', NULL, '09-04-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '2345678907', NULL, '2024-09-09 07:43:47', '2024-09-09 12:43:47', '2024-09-09 12:43:47'),
(412, NULL, 'kavita', 'gowda', '8296400456', 'Supriyalkj@gmail.com', NULL, '$2y$10$t/Q0jBkaI8aJCpeDcAY.yeygj8QhGb4XedfCm1gS5elEIn2Hb6p7W', NULL, '09-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Saudi Arabia', 'register', NULL, '2345678907', NULL, '2024-09-09 09:37:17', '2024-09-09 14:37:17', '2024-09-09 14:37:17'),
(413, NULL, 'supriya', 'H', '00012345678', 'Supriya@1234gmail.com', NULL, '$2y$10$F2ogwvTqgiN1.Yiaaj2IXuS9sf0CtRRclB0bGSniXWeEOi5kcpKsS', NULL, '09-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2345678907', NULL, '2024-09-09 09:42:13', '2024-09-09 14:42:13', '2024-09-09 14:42:13'),
(414, NULL, 'vaibhavi', 'shinde', '08056395117', 'hab@gmail.com', NULL, '$2y$10$5e/w7DhpRAkmXBTiG4K42uI/EGakWN3NoHaZN5q3KvLz9AxuAPRQS', NULL, '09-06-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 09:50:40', '2024-09-09 14:50:40', '2024-09-09 14:50:40'),
(415, NULL, 'supriya', 'H', '0001234567', 'jn@gmail.com', NULL, '$2y$10$WxjmqbCH8zLgxk6Sc6N6buh7aSRs8phKEWu/wc7akLoOnvBMSwROa', NULL, '09-03-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 09:56:27', '2024-09-09 14:56:27', '2024-09-09 14:56:27'),
(416, NULL, 'supriya', 'H', '000123456', 'bn@gmail.com', NULL, '$2y$10$JlEK9HmbbaQZh2WHE0cPxeUN5NLwRwmcdGrYIj8sImzt2ADPx6cby', NULL, '09-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 10:04:23', '2024-09-09 15:04:23', '2024-09-09 15:04:23'),
(417, NULL, 'supriya', 'H', '00012345', 'bner@gmail.com', NULL, '$2y$10$1XVhQYJy07BxWjGL73nqreRaF0jEzGx3YvsyJBHco72eqqt./bIaa', NULL, '09-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 10:40:49', '2024-09-09 15:40:49', '2024-09-09 15:40:49'),
(418, NULL, 'vaibhavi', 'shinde', '08056395116', 'hancgi@gmail.com', NULL, '$2y$10$d8QzZhfTRroBemMsoWMRWOaO1hXnhxT0QitMuKMev08P0pO3OOh.e', NULL, '09-05-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 10:58:38', '2024-09-09 15:58:38', '2024-09-09 15:58:38'),
(419, NULL, 'supriya', 'H', '00012389', 'as@gmail.com', NULL, '$2y$10$e4zy34VpdxK2U3k2USENF.NvvHOSBJPZSEtlvs.CTB82WfOdp7qIu', NULL, '09-06-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Canada', 'register', NULL, '2356623434', NULL, '2024-09-09 11:17:07', '2024-09-09 16:17:07', '2024-09-09 16:17:07'),
(420, NULL, 'supriya', 'H', '0001238934', 'aswe@gmail.com', NULL, '$2y$10$vTGoA0Y.UmvgBYmdxZj.iO4OrhfU5NqMOzxFBBbKqfU7VrqDt.26K', NULL, '09-06-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 11:26:41', '2024-09-09 16:26:41', '2024-09-09 16:26:41'),
(421, NULL, 'supriya', 'H', '0001234567457', 'hghh@gmail.com', NULL, '$2y$10$JM9ICkgpGzC4UQe8jpplCOfHjdpugGFNO4i5D935.wedStTlTS.XW', NULL, '09-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 11:45:34', '2024-09-09 16:45:34', '2024-09-09 16:45:34'),
(422, NULL, 'supriya', 'H', '0001234566987', 'han123@gmail.com', NULL, '$2y$10$Fwo/hmlCOfJ70Gr8jwIFu.uI.6.BRsyu0wdnd9ErRnf46mPn83a1q', NULL, '09-06-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 12:00:29', '2024-09-09 17:00:29', '2024-09-09 17:00:29'),
(423, NULL, 'vaibhavi', 'shinde', '0805695117', 'hanjash@mail.com', NULL, '$2y$10$HhLiByORzSVqHfl21oY1qeXntVHPBu.QSSeaZ0P3RnVM6owUKxvC2', NULL, '09-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 12:06:36', '2024-09-09 17:06:36', '2024-09-09 17:06:36'),
(424, NULL, 'supriya', 'Hbv', '000123456789067', 'vb@gmail.com', NULL, '$2y$10$lsdF2qbN66G0Ldyqs9DqROpZ7w8f25bwm3/Gjgk9WP79F0i.CZaNa', NULL, '09-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-09 12:34:48', '2024-09-09 17:34:48', '2024-09-09 17:34:48'),
(425, NULL, 'kavita', 'gowda', '82964001673', 'supriyazx.h@gmail.com', NULL, '$2y$10$MaDZNzFoX./yxCgQLYN4.uyE5E3b8lUFdHNpb63IKySE/BMf.MTZC', NULL, '10-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Australia', 'register', NULL, '2356623434', NULL, '2024-09-10 04:55:52', '2024-09-10 09:55:52', '2024-09-10 09:55:52'),
(426, NULL, 'supriya', 'Hbv', '0001234567890675', 'supriyaqw.h@biztechnosys.com', NULL, '$2y$10$zfzo.cR0WDBlq5TnrOYqa.HByEjFgdJ/mP5IrYKYCJpptidnsBOLG', NULL, '10-08-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Egypt', 'register', NULL, '2356623434', NULL, '2024-09-10 05:01:49', '2024-09-10 10:01:49', '2024-09-10 10:01:49'),
(427, NULL, 'sudu', 'h', '098765465219', 'hacf@gmail.com', NULL, '$2y$10$/nrPKwQ4gQFQEm6IRUhXeey80mcbX1ywgNLoRiWrICrjzsOhH333u', NULL, '10-06-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Canada', 'register', NULL, '2356623434', NULL, '2024-09-10 05:12:18', '2024-09-10 10:12:18', '2024-09-10 10:12:18'),
(428, NULL, 'sudu', 'h', '098765465219', 'hacf@gmail.com', NULL, '$2y$10$5BZQHo/MXO6waeaSBlk.lekaLIJ0aNXIKERZbDhnkInffBg0wpqra', NULL, '10-06-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'Canada', 'register', NULL, '2356623434', NULL, '2024-09-10 05:12:18', '2024-09-10 10:12:18', '2024-09-10 10:12:18'),
(429, NULL, 'manish', 'kumar', '9694740305', 'manish@gmail.com', NULL, '$2y$10$T36Q.P6HelUiR4/.aMbPAOQbH0ZmHWmmSsA2Memc0gYxDO1w4BfSu', NULL, '10-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '20', NULL, '2024-09-10 12:49:27', '2024-09-10 17:49:27', '2024-09-10 17:49:27'),
(430, NULL, 'manish', 'kumar', '9694740305', 'manish@gmail.com', NULL, '$2y$10$Ymeqg3QcccA1wLv6UdaVN.Y9AZ.lWCgKeFR5DbeUPFMAWdjcwUOqi', NULL, '10-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '20', NULL, '2024-09-10 12:49:27', '2024-09-10 17:49:27', '2024-09-10 17:49:27'),
(431, NULL, 'manish', 'kumar', '9694740305', 'manish@gmail.com', NULL, '$2y$10$wCbxYi63aoErY0IRMHPk/uLv2pR7PVCRnGPSPeWAUK7Dn934K1vsi', NULL, '10-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '20', NULL, '2024-09-10 12:49:27', '2024-09-10 17:49:27', '2024-09-10 17:49:27'),
(432, NULL, 'manish', 'kumar', '9694740305', 'manish@gmail.com', NULL, '$2y$10$Ai.A5wS01dJzJTjzKK7VC.QdtS7Hal5hwr5Zaz.PDX17KZQMBiY7m', NULL, '10-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '20', NULL, '2024-09-10 12:49:27', '2024-09-10 17:49:27', '2024-09-10 17:49:27'),
(433, NULL, 'manish', 'kumar', '9694740305', 'manish@gmail.com', NULL, '$2y$10$nHG1eBXhjYEXD792.AKVyuMImmBBHBhW.uIJxIBNelkG5kKUtGm3i', NULL, '10-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '20', NULL, '2024-09-10 12:49:27', '2024-09-10 17:49:27', '2024-09-10 17:49:27'),
(434, NULL, 'ex', 'example', '7845129636', 'example@ex.com', NULL, '$2y$10$Z.3XkQ6z4jzA8pH5gmoG6ec5/7iyl7dQukaxpiJCvFwWSzC0HNEK.', NULL, '13-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '2545688789', NULL, '2024-09-13 04:57:48', '2024-09-13 09:57:48', '2024-09-13 09:57:48'),
(435, NULL, 'akash kumar', 'tiwari', '08827803902', NULL, NULL, NULL, NULL, '2024-09-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:02:56', '2024-09-16 11:02:56', '2024-09-16 11:02:56'),
(436, NULL, 'akash kumar', 'tiwari', '08827803902', NULL, NULL, NULL, NULL, '2024-09-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:37:30', '2024-09-16 11:37:30', '2024-09-16 11:37:30'),
(437, NULL, 'akash kumar', 'tiwari', '08827803902', NULL, NULL, NULL, NULL, '2024-09-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:38:42', '2024-09-16 11:38:42', '2024-09-16 11:38:42'),
(438, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-09-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:43:01', '2024-09-16 11:43:01', '2024-09-16 11:43:01'),
(439, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-09-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:45:56', '2024-09-16 11:45:56', '2024-09-16 11:45:56'),
(440, NULL, 'akash kumar', 'tiwari', '08827803902', NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:46:23', '2024-09-16 11:46:23', '2024-09-16 11:46:23'),
(441, NULL, 'akash kumar', 'tiwari', '08827803902', NULL, NULL, NULL, NULL, '2024-09-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:48:46', '2024-09-16 11:48:46', '2024-09-16 11:48:46'),
(442, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:49:03', '2024-09-16 11:49:03', '2024-09-16 11:49:03'),
(443, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:52:29', '2024-09-16 11:52:29', '2024-09-16 11:52:29'),
(444, NULL, 'akash kumar', 'tiwari', '08827803902', NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-16 06:52:45', '2024-09-16 11:52:45', '2024-09-16 11:52:45'),
(445, NULL, 'Prashant', 'Singh', '8084118754', 'prashant@gmail.com', NULL, '$2y$10$bwrD.M.Kn6bcF8VpQTtGFeXaql4urXAUK67CXRHZcx5QpBVy0oUMm', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '2233', NULL, '2024-09-17 07:03:54', '2024-09-17 12:03:54', '2024-09-17 12:03:54'),
(446, NULL, 'Prashant', 'Singh', '8084118754', 'prashant@gmail.com', NULL, '$2y$10$pb0yzS4F7lDbTI.DzxKdOu6GZnKwNbKnnSLFJWnW3uEk9J3hk6FNS', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '2233', NULL, '2024-09-17 07:03:54', '2024-09-17 12:03:54', '2024-09-17 12:03:54'),
(447, NULL, 'Prashant', 'Singh', '8084008552', 'pras@gmail.com', NULL, '$2y$10$EHVOts/gcYPUTcAqwqNiG.Sj8aEkwBegN8PCrO9gyxNH6fmHrPgpy', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '2333', NULL, '2024-09-17 07:08:39', '2024-09-17 12:08:39', '2024-09-17 12:08:39'),
(448, NULL, 'Prashant', 'Singh', '8034008754', 'pkmn@gmail.com', NULL, '$2y$10$JuZR.c3Snj9pImQpY33rSuuHBJXX6RDeXhohpVlTxQrbnjOBsBG5y', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '2222', NULL, '2024-09-17 07:13:19', '2024-09-17 12:13:19', '2024-09-17 12:13:19'),
(449, NULL, 'kavya', 'h', '8296400359', NULL, NULL, NULL, NULL, '2024-09-26', NULL, 'in', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-17 11:22:38', '2024-09-17 16:22:38', '2024-09-17 16:22:38'),
(450, NULL, 'Prashant', 'Singh', '9184008754', 'pqak@gmail.com', NULL, '$2y$10$dwqgHR/ElJik1OhW8NXE1eNn3/cxWtSvZquxy.GUTKKiQS1Qe/1Ga', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '2345', NULL, '2024-09-17 11:26:13', '2024-09-17 16:26:13', '2024-09-17 16:26:13'),
(451, NULL, 'Adam', 'Smith', '9443972587', 'adam@gamil.com', NULL, '$2y$10$jNDgoP6G943m4cYGnQRP/uiIOKgsgofpGSrgf4vtNb55Ajhd4Bqmy', NULL, '17-09-1999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '243335', NULL, '2024-09-17 11:47:20', '2024-09-17 16:47:20', '2024-09-17 16:47:20'),
(452, NULL, 'asd', 'tiwar', '8827803902', NULL, NULL, NULL, NULL, '2024-09-18', NULL, 'in', NULL, NULL, '345', NULL, NULL, NULL, NULL, 'A+', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-17 11:56:42', '2024-09-17 16:56:42', '2024-09-17 16:56:42'),
(453, NULL, 'Prashant', 'Singh', '8084008764', 'sapk@gmail.com', NULL, '$2y$10$UUWksEsvhFVfQXagzCZP3Ovm7A9TwDsTTmaWKu3Q1B/s0SRpoNdj6', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '67732', NULL, '2024-09-17 12:00:28', '2024-09-17 17:00:28', '2024-09-17 17:00:28'),
(454, NULL, 'Prashant', 'Singh', '8004008754', 'dspk1@gmail.com', NULL, '$2y$10$pSze3PGbz4xaWgp1hLiFKenrJ0RMcvw1UEOUCAvsOkdZ32y0vcASi', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '67732', NULL, '2024-09-17 12:08:27', '2024-09-17 17:08:27', '2024-09-17 17:08:27'),
(455, NULL, 'Prashant', 'Singh', '8084007750', 'pwerk@gmail.com', NULL, '$2y$10$hX9i5f5ax8MgChBV64NZ3O7xl0TUMG1IBr5osMwlrTTqAHbV3Q6Ym', NULL, '17-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'Saudi Arabia', 'register', NULL, '67732', NULL, '2024-09-17 12:13:37', '2024-09-17 17:13:37', '2024-09-17 17:13:37'),
(456, NULL, 'Loui', 'hen', '8765432321', NULL, NULL, NULL, NULL, '1998-11-09', NULL, 'in', NULL, NULL, '4567', NULL, NULL, NULL, NULL, 'AB+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-09-18 06:27:37', '2024-09-18 11:27:37', '2024-09-18 11:27:37'),
(457, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 06:32:14', '2024-09-19 11:32:14', '2024-09-19 11:32:14'),
(458, NULL, 'Devishree', 'T', '7823293842', NULL, NULL, NULL, NULL, '1998-06-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Sister', 'Biztechnosys', NULL, 'female', NULL, NULL, NULL, '87846238', NULL, '2024-09-19 07:10:48', '2024-09-19 12:10:48', '2024-09-19 12:10:48'),
(459, NULL, 'Devishree', 'T', '7823293842', NULL, NULL, NULL, NULL, '1999-10-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', 'Biztechnosys', NULL, 'female', NULL, NULL, NULL, '12334', NULL, '2024-09-19 07:18:58', '2024-09-19 12:18:58', '2024-09-19 12:18:58'),
(460, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-09-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:23:20', '2024-09-19 12:23:20', '2024-09-19 12:23:20'),
(461, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:23:48', '2024-09-19 12:23:48', '2024-09-19 12:23:48'),
(462, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-08-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:24:12', '2024-09-19 12:24:12', '2024-09-19 12:24:12'),
(463, NULL, 'akash kumar', 'tiwari', '08827803902', NULL, NULL, NULL, NULL, '2024-09-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:24:39', '2024-09-19 12:24:39', '2024-09-19 12:24:39'),
(464, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-08-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'vvz', NULL, 'female', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:25:02', '2024-09-19 12:25:02', '2024-09-19 12:25:02'),
(465, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:25:20', '2024-09-19 12:25:20', '2024-09-19 12:25:20'),
(466, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:25:44', '2024-09-19 12:25:44', '2024-09-19 12:25:44'),
(467, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:33:58', '2024-09-19 12:33:58', '2024-09-19 12:33:58'),
(468, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:34:14', '2024-09-19 12:34:14', '2024-09-19 12:34:14'),
(469, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-10-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A-', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:34:52', '2024-09-19 12:34:52', '2024-09-19 12:34:52'),
(470, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:35:05', '2024-09-19 12:35:05', '2024-09-19 12:35:05'),
(471, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-09-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Other', 'vvz', NULL, 'other', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:35:20', '2024-09-19 12:35:20', '2024-09-19 12:35:20'),
(472, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-09-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Other', 'vvz', NULL, 'female', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:35:34', '2024-09-19 12:35:34', '2024-09-19 12:35:34'),
(473, NULL, 'aaaa', 'tt', '05678934562', NULL, NULL, NULL, NULL, '2024-09-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:35:54', '2024-09-19 12:35:54', '2024-09-19 12:35:54'),
(474, NULL, 'mahesh', 'Patel', '1233123131', NULL, NULL, NULL, NULL, '23/08/2002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'o+', 'My self', 'godigit', '123', 'male', 'india', NULL, NULL, '123344', NULL, '2024-09-19 07:37:16', '2024-09-19 12:37:16', '2024-09-19 12:37:16'),
(475, NULL, 'asd', 'tiwar', '882780390223', NULL, NULL, NULL, NULL, '2024-08-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Other', 'vvz', NULL, 'male', NULL, NULL, NULL, '75876', NULL, '2024-09-19 07:55:57', '2024-09-19 12:55:57', '2024-09-19 12:55:57'),
(476, NULL, 'Devishree', 'T', '8103948013', NULL, NULL, NULL, NULL, '1998-10-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Sister', 'Biztechnosys', NULL, 'female', NULL, NULL, NULL, '76576', NULL, '2024-09-19 10:32:07', '2024-09-19 15:32:07', '2024-09-19 15:32:07'),
(477, NULL, 'Loui', 'hen', '9843232456', NULL, NULL, NULL, NULL, '1998-11-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB+', 'Sister', 'xyz', NULL, 'female', NULL, NULL, NULL, '2323244', NULL, '2024-09-19 10:40:13', '2024-09-19 15:40:13', '2024-09-19 15:40:13'),
(478, NULL, 'Louis', 'henry', '9843232451', NULL, NULL, NULL, NULL, '1999-12-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', 'xyzq', NULL, 'male', NULL, NULL, NULL, '2323242', NULL, '2024-09-19 10:49:19', '2024-09-19 15:49:19', '2024-09-19 15:49:19'),
(479, NULL, 'Louis', 'henry', '9843232451', NULL, NULL, NULL, NULL, '1998-11-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', 'xyzq', NULL, 'male', NULL, NULL, NULL, '2323242', NULL, '2024-09-19 10:51:48', '2024-09-19 15:51:48', '2024-09-19 15:51:48'),
(480, NULL, 'Devishree', 'T', '8103948013', NULL, NULL, NULL, NULL, '1999-11-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AB-', 'Sister', 'Biztechnosys Infotech Pvt Ltd', NULL, 'female', NULL, NULL, NULL, '242', NULL, '2024-09-19 11:39:49', '2024-09-19 16:39:49', '2024-09-19 16:39:49'),
(481, NULL, 'Louis', 'henry', '98989347328', NULL, NULL, NULL, NULL, '1998-11-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Brother', 'xyzq', NULL, 'male', NULL, NULL, NULL, '3456', NULL, '2024-09-19 12:16:14', '2024-09-19 17:16:14', '2024-09-19 17:16:14'),
(482, NULL, 'Louis', 'henry', '8765432341', NULL, NULL, NULL, NULL, '1999-11-10', NULL, 'in', NULL, NULL, '7654', NULL, NULL, NULL, NULL, 'A+', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-20 04:46:24', '2024-09-20 09:46:24', '2024-09-20 09:46:24'),
(483, NULL, 'Loui', 'hen', '8765432341', NULL, NULL, NULL, NULL, '1998-09-21', NULL, 'in', NULL, NULL, '4560', NULL, NULL, NULL, NULL, 'A+', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-20 05:20:48', '2024-09-20 10:20:48', '2024-09-20 10:20:48'),
(484, NULL, 'noori', 'h', '9887643567', NULL, NULL, NULL, NULL, '1998-09-21', NULL, 'fi', NULL, NULL, '34567', NULL, NULL, NULL, NULL, 'A+', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-09-20 07:29:59', '2024-09-20 12:29:59', '2024-09-20 12:29:59'),
(485, NULL, 'supriya', 'H', '8296400352', NULL, NULL, NULL, NULL, '1999-04-24', NULL, 'sa', NULL, NULL, '4545', NULL, NULL, NULL, NULL, 'O+', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-09-23 12:08:09', '2024-09-23 17:08:09', '2024-09-23 17:08:09'),
(486, NULL, 'r', 'r', '1', 'r@g.cmm', NULL, '$2y$10$RvHvhedyVR.AJTSu/m.0Uu9mnhSNPjdIbREPJoK6y.WCsze8inEBC', NULL, '24-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, 'm', NULL, '2024-09-24 08:46:33', '2024-09-24 13:46:33', '2024-09-24 13:46:33'),
(487, NULL, '324234', '2442', '3234545244', NULL, NULL, NULL, NULL, '0004-12-23', NULL, 'sa', NULL, NULL, 'adsd', NULL, NULL, NULL, NULL, 'O-', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-24 10:30:37', '2024-09-24 15:30:37', '2024-09-24 15:30:37'),
(488, NULL, 'Vijay', '456', '8823293842', NULL, NULL, NULL, NULL, '1998-11-11', NULL, 'sa', NULL, NULL, 'rty', NULL, NULL, NULL, NULL, 'B-', 'Brother', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-24 10:31:22', '2024-09-24 15:31:22', '2024-09-24 15:31:22'),
(489, NULL, 'Harmoinie', 'Granger', '8586878889', 'harmoine@gmail.com', NULL, '$2y$10$N//NtR1Enz9jOVLunu.L9.9iYC6ptAFJ2C2BmyMwOEht7dB2Fe2lS', NULL, '27-09-1992', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '9283742', NULL, '2024-09-27 06:22:36', '2024-09-27 11:22:36', '2024-09-27 11:22:36'),
(490, NULL, 't', 't', '8780820288', 'dr.a.e@outlook.com', NULL, '$2y$10$NblooeAjqByfDqdUeHh0auAxPixQiQ7EK8mVR2nQGlbFB8obMF6gC', NULL, '27-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '8780820288', NULL, '2024-09-27 11:09:08', '2024-09-27 16:09:08', '2024-09-27 16:09:08'),
(491, NULL, 'y', 'y', '878082028', 'aa@gmail.com', NULL, '$2y$10$LaTPd3DWbEWGB3b1SzOG4..mJEV/zrE4tlNGbO3bo93BkVmfsfvrW', NULL, '27-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '1', NULL, '2024-09-27 11:28:51', '2024-09-27 16:28:51', '2024-09-27 16:28:51'),
(492, NULL, 'jk', 'kj', '23456', 'fg@d.com', NULL, '$2y$10$N0d1KCl411InEfz3C2i6J.V5/uwhqbs0NwIaFqpvP9Z/2S8AyIB9m', NULL, '27-09-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'India', 'register', NULL, '87891234509', NULL, '2024-09-27 11:42:26', '2024-09-27 16:42:26', '2024-09-27 16:42:26'),
(493, NULL, 'we', 'y', '8780820285', NULL, NULL, NULL, NULL, '0001-01-01', NULL, 'sa', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'O-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-09-30 08:49:39', '2024-09-30 13:49:39', '2024-09-30 13:49:39'),
(494, NULL, 'we', 'y', '8780820285', NULL, NULL, NULL, NULL, '0001-01-01', NULL, 'sa', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'O-', 'Sister', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-09-30 08:49:39', '2024-09-30 13:49:39', '2024-09-30 13:49:39'),
(495, NULL, 'r', 'e', '8787878787', NULL, NULL, NULL, NULL, '1997-04-04', NULL, 'sa', NULL, NULL, '4', NULL, NULL, NULL, NULL, 'O+', 'Son', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-09-30 08:50:49', '2024-09-30 13:50:49', '2024-09-30 13:50:49'),
(496, NULL, 't', 't', '8780820287', NULL, NULL, NULL, NULL, '2024-09-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Son', 'ty', NULL, 'male', NULL, NULL, NULL, 't', NULL, '2024-09-30 08:54:46', '2024-09-30 13:54:46', '2024-09-30 13:54:46'),
(497, NULL, 'abdulrahman', 'test', '0555552022', NULL, NULL, NULL, NULL, '2024-10-16', NULL, 'sa', NULL, NULL, 'ققق', NULL, NULL, NULL, NULL, 'A-', 'Brother', NULL, NULL, 'male', NULL, NULL, '0', NULL, NULL, '2024-10-01 09:10:11', '2024-10-01 14:10:11', '2024-10-01 15:02:57'),
(498, NULL, 'meena', 's', '9276400359', 'meena@gmail.com', NULL, '$2y$10$NTzu5ikx6d7hkZsUFfutquqGvKJeinkvv7YEtcVQxLLxUaUrm8ui2', NULL, '05-04-2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', 'India', 'register', NULL, '12345678', NULL, '2024-10-05 05:00:35', '2024-10-05 02:00:35', '2024-10-05 02:00:35'),
(499, NULL, 'mahesh', 'Patel', '1233123131', NULL, NULL, NULL, NULL, '23/08/2002', NULL, 'Saudi', 'bo123', 'go123', NULL, 'Iqama patient', NULL, NULL, NULL, 'o+', 'My self', NULL, NULL, 'male', NULL, 'Iqama', NULL, '123344', 'descdcsdc', '2024-10-05 14:28:14', '2024-10-05 11:28:14', '2024-10-05 11:28:14');
INSERT INTO `patientregistration` (`id`, `Relatedto`, `Firstname`, `Lastname`, `Phone`, `Email`, `Username`, `Password`, `Confirmpassword`, `Dob`, `Age`, `Nationality`, `Borderno`, `Sponserid`, `Passportid`, `Iqamatype`, `Maritalstatus`, `Height`, `Weight`, `Bloodgroup`, `Relationship`, `InsuranceCompany`, `Insuranceaccno`, `Gender`, `Country`, `Type`, `Status`, `Nationalid`, `Description`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(500, NULL, 'mahesh', 'Patel', '1233123131', NULL, NULL, NULL, NULL, '23/08/2002', NULL, 'Saudi', 'bo123', 'go123', NULL, NULL, NULL, NULL, NULL, 'o+', 'My self', NULL, NULL, 'male', NULL, 'Iqama', NULL, '123344', 'descdcsdc', '2024-10-05 14:30:10', '2024-10-05 11:30:10', '2024-10-05 11:30:10'),
(501, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '1999-10-01', NULL, 'in', NULL, NULL, '356', NULL, NULL, NULL, NULL, 'O+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-10-05 17:45:44', '2024-10-05 14:45:44', '2024-10-05 14:45:44'),
(502, NULL, 'Vijay', 'K', '9923293842', NULL, NULL, NULL, NULL, '1999-11-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O+', 'Son', 'Biztechnosys', NULL, 'female', NULL, NULL, NULL, '4567', NULL, '2024-10-05 18:12:58', '2024-10-05 15:12:58', '2024-10-05 15:12:58'),
(503, NULL, 'Vijay', 'K', '9923293842', NULL, NULL, NULL, NULL, '1999-02-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O-', 'Mother', 'Biztechnosys', NULL, 'male', NULL, NULL, NULL, '4567', NULL, '2024-10-05 18:31:31', '2024-10-05 15:31:31', '2024-10-05 15:31:31'),
(504, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '1999-02-11', NULL, 'sa', NULL, NULL, '678', NULL, NULL, NULL, NULL, 'O-', 'Other', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-10-05 18:40:29', '2024-10-05 15:40:29', '2024-10-05 15:40:29'),
(505, NULL, 'Vijay', 'K', '9923293842', NULL, NULL, NULL, NULL, '2024-10-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A+', 'Father', 'Biztechnosys', NULL, 'male', NULL, NULL, NULL, '4567', NULL, '2024-10-05 18:41:58', '2024-10-05 15:41:58', '2024-10-05 15:41:58'),
(506, NULL, 'Vijay', 'K', '7823293844', NULL, NULL, NULL, NULL, '2024-10-02', NULL, 'sa', NULL, NULL, '678', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-10-05 19:13:42', '2024-10-05 16:13:42', '2024-10-05 16:13:42'),
(507, NULL, 'Vijay', 'K', '7823293842', NULL, NULL, NULL, NULL, '2024-10-05', NULL, 'sa', NULL, NULL, '4445', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-10-05 19:16:33', '2024-10-05 16:16:33', '2024-10-05 16:16:33'),
(508, NULL, 'supriya', 'h', '8556782331', NULL, NULL, NULL, NULL, '2024-10-04', NULL, 'sa', NULL, NULL, '45678', NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-10-05 19:24:26', '2024-10-05 16:24:26', '2024-10-05 16:24:26'),
(509, NULL, 'priya', 'h', '3456789981', NULL, NULL, NULL, NULL, '2024-10-24', NULL, 'sa', NULL, NULL, '456', NULL, NULL, NULL, NULL, 'A+', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-10-05 19:28:57', '2024-10-05 16:28:57', '2024-10-05 16:28:57'),
(510, NULL, 'pri', 'h', '7456789981', NULL, NULL, NULL, NULL, '2024-10-24', NULL, 'sa', NULL, NULL, '456', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-10-05 19:33:20', '2024-10-05 16:33:20', '2024-10-05 16:33:20'),
(511, NULL, 'Devishree', 'h', '8765423451', NULL, NULL, NULL, NULL, '2024-10-04', NULL, 'sa', NULL, NULL, '45678', NULL, NULL, NULL, NULL, 'A-', 'Mother', NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, '2024-10-05 19:37:13', '2024-10-05 16:37:13', '2024-10-05 16:37:13'),
(512, NULL, 'Vijay', 'K', '4567899876', NULL, NULL, NULL, NULL, '2024-10-02', NULL, 'in', NULL, NULL, '4567', NULL, NULL, NULL, NULL, 'A-', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-10-05 19:39:30', '2024-10-05 16:39:30', '2024-10-05 16:39:30'),
(513, NULL, 'test', 'test', '9740029247', NULL, NULL, NULL, NULL, '2024-10-16', NULL, 'in', NULL, NULL, '88990', NULL, NULL, NULL, NULL, 'A+', 'Father', NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '2024-10-07 04:57:54', '2024-10-07 01:57:54', '2024-10-07 01:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `transacationid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serviceid` int DEFAULT NULL,
  `servicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subserviceid` int DEFAULT NULL,
  `subservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packageid` int DEFAULT NULL,
  `packagename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `healthcareid` int DEFAULT NULL,
  `paymentdate` date DEFAULT NULL,
  `bookingdate` date DEFAULT NULL,
  `timeslot` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `paymentmethod` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountno` int DEFAULT NULL,
  `cardholname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardno` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardexpdate` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvvno` int DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bookingstatus` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `other` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `transacationid`, `serviceid`, `servicename`, `subserviceid`, `subservicename`, `packageid`, `packagename`, `firstname`, `lastname`, `phone`, `email`, `address`, `country`, `city`, `healthcareid`, `paymentdate`, `bookingdate`, `timeslot`, `price`, `paymentmethod`, `accountno`, `cardholname`, `cardno`, `cardexpdate`, `cvvno`, `status`, `bookingstatus`, `comment`, `other`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'xyz', 1, 'ss', NULL, NULL, 'a', 'b', '313231233', 'c@gmai.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-24 00:34:59', '2024-07-24 00:34:59'),
(2, 'trab1', 2, 'xyz', 1, 'ss', NULL, 'p', 'a', 'b', '313231233', 'c@gmai.com', 'saaadad', 'sdfssff', 'sdasda', 1, '2024-07-08', '2024-07-07', '00:00', 200, 'online', NULL, 'abc', '23123', '08/27', 234, NULL, NULL, NULL, NULL, 'av', '2024-07-24 12:16:28', '2024-07-24 12:16:28'),
(3, 'trab1', 2, 'xyz', 1, 'ss', NULL, 'p', 'a', 'b', '313231233', 'c@gmai.com', 'saaadad', 'sdfssff', 'sdasda', 1, '2024-07-08', '2024-07-07', '00:00', 200, 'online', NULL, 'abc', '23123', '08/27', 234, NULL, NULL, NULL, NULL, 'av', '2024-07-24 14:27:13', '2024-07-24 14:27:13'),
(4, 'trab1', NULL, 'xyz', 1, 'ss', NULL, 'p', 'a', 'b', '313231233', 'c@gmai.com', 'saaadad', 'sdfssff', 'sdasda', 1, '2024-07-08', '2024-07-07', '00:00', 200, 'online', NULL, 'abc', '23123', '08/27', 234, NULL, NULL, NULL, NULL, 'av', '2024-08-03 15:03:57', '2024-08-03 15:03:57'),
(5, NULL, NULL, 'xyz', 1, 'ss', NULL, 'p', 'a', 'b', '313231233', 'c@gmai.com', 'saaadad', 'sdfssff', 'sdasda', 1, '2024-07-08', '2024-07-07', '00:00', 200, 'online', NULL, 'abc', '23123', '08/27', 234, NULL, NULL, NULL, NULL, 'av', '2024-08-05 15:09:23', '2024-08-05 15:09:23'),
(6, NULL, NULL, 'xyz', 1, 'ss', NULL, 'p', 'a', 'b', '313231233', 'c@gmai.com', 'saaadad', 'sdfssff', 'sdasda', NULL, '2024-07-08', '2024-07-07', '00:00', 200, 'online', NULL, 'abc', '23123', '08/27', 234, NULL, NULL, NULL, NULL, NULL, '2024-08-05 16:45:09', '2024-08-05 16:45:09'),
(7, NULL, NULL, 'xyz', NULL, NULL, NULL, 'p', 'a', 'b', '313231233', 'c@gmai.com', 'saaadad', 'sdfssff', 'sdasda', NULL, '2024-07-08', '2024-07-07', '00:00', 200, 'online', NULL, 'abc', '23123', '08/27', 234, NULL, NULL, NULL, NULL, NULL, '2024-08-05 16:49:48', '2024-08-05 16:49:48'),
(8, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Vitamins Package', 'supriya', 'h', '8296400359', 'shreedhev98@gmail.com', 'Bengaluru, Karnataka, India', 'India', NULL, NULL, '2024-08-05', '2024-08-05', '16:27', 200, 'Card Payment', NULL, NULL, '23123', '09/28', 278, NULL, NULL, NULL, NULL, NULL, '2024-08-05 16:55:53', '2024-08-05 16:55:53'),
(9, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Vitamins Package', 'supriya', 'h', '8296400359', 'shreedhev98@gmail.com', 'Bengaluru, Karnataka, India', 'India', NULL, NULL, '2024-08-05', '2024-08-05', '16:27', 200, 'Card Payment', NULL, NULL, '23123', '05/28', 298, NULL, NULL, NULL, NULL, NULL, '2024-08-05 16:59:25', '2024-08-05 16:59:25'),
(10, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Hair Fall Workup', NULL, NULL, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-08-06', '2024-08-06', '15:27', 200, 'Card Payment', NULL, NULL, '23123', '08/24', 245, NULL, NULL, NULL, NULL, NULL, '2024-08-06 10:36:33', '2024-08-06 10:36:33'),
(11, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Fatigue Workup', NULL, NULL, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-08-06', '2024-08-06', '18:27', 200, 'Card Payment', NULL, NULL, '1234567893424782', '02/24', 202, NULL, NULL, NULL, NULL, NULL, '2024-08-06 17:46:04', '2024-08-06 17:46:04'),
(12, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Fatigue Workup', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-08-06', '2024-08-06', '16:27', 200, 'Card Payment', NULL, NULL, '1347687545345235', '02/29', 343, NULL, NULL, NULL, NULL, NULL, '2024-08-06 18:01:11', '2024-08-06 18:01:11'),
(13, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Pregnancy Test Serum(BHCG)', 'aaa', 'fjj', '8765435678', NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-08-08', '2024-08-08', '14:27', 200, 'Card Payment', NULL, NULL, '3456678457342434', '04/28', 202, NULL, NULL, NULL, NULL, NULL, '2024-08-08 15:19:42', '2024-08-08 15:19:42'),
(14, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Pregnancy Test Serum(BHCG)', 'aaa', 'fjj', '8765435678', NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-08-08', '2024-08-08', '14:27', 200, 'Card Payment', NULL, NULL, '2452384752945745', '03/22', 804, NULL, NULL, NULL, NULL, NULL, '2024-08-08 15:20:47', '2024-08-08 15:20:47'),
(15, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Hair Fall Workup, Health Check Packages', NULL, NULL, NULL, NULL, '21st Cross Road, Paradise Colony, 560078, J P Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-08-09', '2024-08-09', '14:27', 200, 'Card Payment', NULL, NULL, '5288496827041325', '06/27', 608, NULL, NULL, NULL, NULL, NULL, '2024-08-10 00:12:38', '2024-08-10 00:12:38'),
(16, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Hair Fall Workup, CBC (COMPLET BLOOD COUNT)', 'Priya', 'S', '9092541181', 'priya@gmail.com', '21st Cross Road, Paradise Colony, 560078, J P Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', 'India', NULL, NULL, '2024-08-11', '2024-08-11', '15:27', 200, 'Card Payment', NULL, NULL, '2023575693564109', '05/25', 698, NULL, NULL, NULL, NULL, NULL, '2024-08-11 13:11:30', '2024-08-11 13:11:30'),
(17, NULL, NULL, 'Laboratory', NULL, NULL, NULL, 'Hair Fall Workup', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-08-13', '2024-08-13', '14:27', 800, 'Card Payment', NULL, NULL, '1234567890123456', '09/27', 222, NULL, NULL, NULL, NULL, NULL, '2024-08-13 16:14:28', '2024-08-13 16:14:28'),
(18, NULL, NULL, 'Vaccination', NULL, NULL, NULL, 'Children’s Vaccination ( Age: 2 Month )', NULL, NULL, NULL, NULL, '9th E Cross Road, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-08-20', '2024-08-20', '13:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-20 17:19:54', '2024-08-20 17:19:54'),
(19, NULL, NULL, 'Vaccination', NULL, NULL, NULL, 'Children’s Vaccination ( Age: 2 Month )', NULL, NULL, NULL, NULL, '9th E Cross Road, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-08-20', '2024-08-20', '13:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-20 17:44:56', '2024-08-20 17:44:56'),
(20, NULL, NULL, 'Vaccination', NULL, NULL, NULL, 'Children’s Vaccination ( Age: 2 Month )', NULL, NULL, NULL, NULL, '9th E Cross Road, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-08-20', '2024-08-20', '13:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-20 17:45:13', '2024-08-20 17:45:13'),
(21, NULL, NULL, 'Laboratory', NULL, NULL, NULL, '[\"Health Check Packages\",\"Pregnancy Test Serum(BHCG)\"]', NULL, NULL, NULL, NULL, 'MATS Institute of Management and Entrepreneurship, 6th Phase, Bengaluru, Karnataka 560078, India', NULL, NULL, NULL, '2024-08-22', '2024-08-22', '13:27', 400, 'Card Payment', NULL, NULL, '1234567890123456', '12/23', 333, NULL, NULL, NULL, NULL, NULL, '2024-08-22 19:11:22', '2024-08-22 19:11:22'),
(22, NULL, NULL, 'Laboratory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-08-23', '2024-08-23', '13:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-23 10:12:15', '2024-08-23 10:12:15'),
(23, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\"}]', NULL, NULL, NULL, NULL, 'Surendranagar, Gujarat, India', NULL, NULL, NULL, '2024-09-06', '2024-09-06', '14:27', 400, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 11:31:28', '2024-09-06 11:31:28'),
(24, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200},{\"name\":\"Children’s Vaccination ( Age: 6 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '15:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:32:57', '2024-09-17 17:32:57'),
(25, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200},{\"name\":\"Children’s Vaccination ( Age: 6 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '15:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:33:39', '2024-09-17 17:33:39'),
(26, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200},{\"name\":\"Children’s Vaccination ( Age: 6 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '15:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:44:16', '2024-09-17 17:44:16'),
(27, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200},{\"name\":\"Children’s Vaccination ( Age: 6 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Bengaluru, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '15:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:44:27', '2024-09-17 17:44:27'),
(28, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 4 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '13:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:44:40', '2024-09-17 17:44:40'),
(29, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 4 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '13:27', 200, 'Card Payment', NULL, NULL, NULL, '03/11', 232, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:47:46', '2024-09-17 17:47:46'),
(30, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 4 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '13:27', 200, 'Card Payment', NULL, NULL, '2344255453656561', '11/26', 292, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:52:59', '2024-09-17 17:52:59'),
(31, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 4 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-17', '2024-09-17', '13:27', 200, 'Card Payment', NULL, NULL, NULL, '03/29', 809, NULL, NULL, NULL, NULL, NULL, '2024-09-17 17:53:56', '2024-09-17 17:53:56'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-18', NULL, NULL, NULL, 'Card Payment', NULL, NULL, '4356564645622221', '01/27', 983, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:07:44', '2024-09-18 10:07:44'),
(33, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '3820193336623550', '09/28', 292, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:11:42', '2024-09-18 10:11:42'),
(34, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', 'undefined', 'undefined', 'undefined', 'undefined', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', 'undefined', NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '9458352292920231', '03/28', 983, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:40:27', '2024-09-18 10:40:27'),
(35, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '9042487274627462', '01/29', 303, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:42:11', '2024-09-18 10:42:11'),
(36, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', 'undefined', 'undefined', 'undefined', 'undefined', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', 'undefined', NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '1399347346374633', '09/28', 899, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:47:00', '2024-09-18 10:47:00'),
(37, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', 'undefined', 'undefined', 'undefined', 'undefined', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', 'undefined', NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '7824293471919381', '02/27', 222, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:50:40', '2024-09-18 10:50:40'),
(38, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', 'undefined', 'undefined', 'undefined', 'undefined', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', 'undefined', NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '7654567803221112', '09/27', 687, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:55:31', '2024-09-18 10:55:31'),
(39, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', 'undefined', 'undefined', 'undefined', 'undefined', '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', 'undefined', NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '9765423245621218', '09/25', 981, NULL, NULL, NULL, NULL, NULL, '2024-09-18 10:57:10', '2024-09-18 10:57:10'),
(40, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200},{\"name\":\"Children’s Vaccination ( Age: 2 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '9800246587610023', '07/25', 890, NULL, NULL, NULL, NULL, NULL, '2024-09-18 11:14:36', '2024-09-18 11:14:36'),
(41, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200},{\"name\":\"Children’s Vaccination ( Age: 2 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 400, 'Card Payment', NULL, NULL, '7924721019243746', '09/23', 202, NULL, NULL, NULL, NULL, NULL, '2024-09-18 11:29:43', '2024-09-18 11:29:43'),
(42, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '8728348923432123', '09/27', 798, NULL, NULL, NULL, NULL, NULL, '2024-09-18 12:08:48', '2024-09-18 12:08:48'),
(43, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', 'undefined', NULL, NULL, NULL, '9 24th Main Road, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-18', '2024-09-18', '13:27', 200, 'Card Payment', NULL, NULL, '2382934734728468', '09/27', 909, NULL, NULL, NULL, NULL, NULL, '2024-09-18 12:10:53', '2024-09-18 12:10:53'),
(44, NULL, NULL, 'Laboratory', NULL, NULL, NULL, '[{\"name\":\"Hair Fall Workup\"}]', NULL, NULL, NULL, NULL, 'Aurobindo Marg, KR Layout, 560078, JP Nagar, Bengaluru, Bengaluru Urban, Karnataka, India', NULL, NULL, NULL, '2024-09-20', '2024-09-20', '14:27', 400, 'Card Payment', NULL, NULL, '2198344540023484', '11/27', 243, NULL, NULL, NULL, NULL, NULL, '2024-09-20 09:48:13', '2024-09-20 09:48:13'),
(45, NULL, NULL, 'Laboratory', NULL, NULL, NULL, '[{\"name\":\"Hair Fall Workup\"},{\"name\":\"Health Check Packages\"}]', NULL, NULL, NULL, NULL, '637304, Tiruchengode, Tamil Nadu, India', NULL, NULL, NULL, '2024-09-23', '2024-09-23', '13:27', 400, 'Card Payment', NULL, NULL, '3434435343574534', '11/29', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-23 17:11:12', '2024-09-23 17:11:12'),
(46, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Dandi Heritage Highway, 396445, Vejalpore, Navsari, Navsari, Gujarat, India', NULL, NULL, NULL, '2024-09-24', '2024-09-24', '14:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-24 16:40:05', '2024-09-24 16:40:05'),
(47, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Dandi Heritage Highway, 396445, Vejalpore, Navsari, Navsari, Gujarat, India', NULL, NULL, NULL, '2024-09-24', '2024-09-24', '14:27', 200, 'Card Payment', NULL, NULL, NULL, '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-24 16:43:13', '2024-09-24 16:43:13'),
(48, NULL, NULL, 'Laboratory', NULL, NULL, NULL, '[{\"name\":\"Health Check Packages\"}]', NULL, NULL, NULL, NULL, 'Nelamangala Main Road, 562123, Visveswarapura, Nelamangala, Bengaluru Rural, Karnataka, India', NULL, NULL, NULL, '2024-10-05', '2024-10-05', '13:27', 200, 'Card Payment', NULL, NULL, '1234567890123456', '12/24', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-05 01:53:37', '2024-10-05 01:53:37'),
(49, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200},{\"name\":\"Children’s Vaccination ( Age: 6 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Chennai, Tamil Nadu, India', NULL, NULL, NULL, '2024-10-05', '2024-10-05', '13:27', 400, 'Card Payment', NULL, NULL, '1312334454254857', '12/28', 202, NULL, NULL, NULL, NULL, NULL, '2024-10-05 14:52:04', '2024-10-05 14:52:04'),
(50, NULL, NULL, 'Vaccination', NULL, NULL, NULL, '[{\"name\":\"Children’s Vaccination ( Age: 9 Month )\",\"price\":200}]', NULL, NULL, NULL, NULL, 'Ashanagar Road, 396445, Asha Nagar, Navsari, Navsari, Gujarat, India', NULL, NULL, NULL, '2024-10-07', '2024-10-07', '13:27', 200, 'Card Payment', NULL, NULL, '1', '/', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-07 02:07:29', '2024-10-07 02:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\PatientRegistration', 1, 'authToken', '8969a66ac65bf5b2ee10503e04624c8e2a6872bf5ddd1a4fd5b1ac33ce8eafc4', '[\"*\"]', NULL, '2024-07-08 06:21:43', '2024-07-08 06:21:43'),
(2, 'App\\Models\\PatientRegistration', 1, 'authToken', 'c9eb7b440b8e5430dafcac781a7b84a3bc1dbd290b675b4f6f2c67e3abe72a27', '[\"*\"]', NULL, '2024-07-08 06:21:46', '2024-07-08 06:21:46'),
(3, 'App\\Models\\PatientRegistration', 1, 'authToken', 'e0b11fdd3ed27e1a8de3012c98acd9558390145fa9a4abbffc7a0a3df8c6c99f', '[\"*\"]', NULL, '2024-07-08 06:21:54', '2024-07-08 06:21:54'),
(4, 'App\\Models\\PatientRegistration', 10, 'authToken', '3a2496868fd239a42c950ce70efb56e1dfe7fd40f0f07ccd18a304e29fa2a822', '[\"*\"]', NULL, '2024-07-08 06:41:39', '2024-07-08 06:41:39'),
(5, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b80a63d6012a763f1806d68884bb51038e84d79bcc65e0bad84d64001b94d569', '[\"*\"]', NULL, '2024-07-08 06:41:41', '2024-07-08 06:41:41'),
(6, 'App\\Models\\PatientRegistration', 10, 'authToken', '2a0265f8105d1bedf503fa11019dbd0de6f3c3ede0543d65363a9991b9576b27', '[\"*\"]', NULL, '2024-07-08 06:41:42', '2024-07-08 06:41:42'),
(7, 'App\\Models\\PatientRegistration', 9, 'authToken', '043f72d8a19afc394b34ad2e0778d605dcbd50581167eda5d3b8fb77b1565fd5', '[\"*\"]', NULL, '2024-07-08 06:47:00', '2024-07-08 06:47:00'),
(8, 'App\\Models\\PatientRegistration', 9, 'authToken', '12aad92c2bc92c868e2f0fc1253822b770a029f5466c243424a9b331365e2215', '[\"*\"]', NULL, '2024-07-08 06:47:04', '2024-07-08 06:47:04'),
(9, 'App\\Models\\PatientRegistration', 9, 'authToken', '9e497460b0be8e5f91d8388db85262e7d4867661b251711eaf4354561b6e9548', '[\"*\"]', NULL, '2024-07-08 06:47:16', '2024-07-08 06:47:16'),
(10, 'App\\Models\\PatientRegistration', 9, 'authToken', 'f3726f882539ac883387f7e0d9943837e6fa1c275c172ab3f80774144b2db517', '[\"*\"]', NULL, '2024-07-08 06:49:42', '2024-07-08 06:49:42'),
(11, 'App\\Models\\PatientRegistration', 10, 'authToken', 'f400201b663f04b8687f0b9e4e8b6d39169d57f80c44092eb4f9af1c0124be19', '[\"*\"]', NULL, '2024-07-22 10:31:07', '2024-07-22 10:31:07'),
(12, 'App\\Models\\PatientRegistration', 10, 'authToken', 'd79cb47e1125a9c7156ca01017094844ffaaf41e3bac824032ec0660902c3ded', '[\"*\"]', NULL, '2024-07-24 15:17:04', '2024-07-24 15:17:04'),
(13, 'App\\Models\\PatientRegistration', 10, 'authToken', '54b733c528d7a6372d8698f6825c1ad5860428830cb07b113b027319d6d701df', '[\"*\"]', NULL, '2024-07-24 15:17:42', '2024-07-24 15:17:42'),
(14, 'App\\Models\\PatientRegistration', 10, 'authToken', 'ff333b0519321b1bb8a36b352e692a691a27184086ae7625dffee1df83ab377b', '[\"*\"]', NULL, '2024-07-24 16:33:07', '2024-07-24 16:33:07'),
(15, 'App\\Models\\PatientRegistration', 10, 'authToken', '4ca2f82f16422a1c7c30b490adf099cdf75a1faf35dca4f11191893cd790bb5b', '[\"*\"]', NULL, '2024-07-24 16:33:13', '2024-07-24 16:33:13'),
(16, 'App\\Models\\PatientRegistration', 10, 'authToken', '8e74aecb407572596567f5047f60bc2c253c58c00b5465eacc8fc8e64f1547b0', '[\"*\"]', NULL, '2024-07-24 16:33:29', '2024-07-24 16:33:29'),
(17, 'App\\Models\\PatientRegistration', 10, 'authToken', '6778e6b4b95c5afb551bf629454c0d5a52116a0d6a892abc28f0b13c440fffe0', '[\"*\"]', NULL, '2024-07-24 16:34:19', '2024-07-24 16:34:19'),
(18, 'App\\Models\\PatientRegistration', 10, 'authToken', '9d9daa9260569fa8e58300e607665bc0878603bd6708adb035ff725c7db22620', '[\"*\"]', NULL, '2024-07-24 16:34:31', '2024-07-24 16:34:31'),
(19, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c51b4e4cffe20ab6442daa5c9edce668cd3dd8337eea673b5cce15d07e259596', '[\"*\"]', NULL, '2024-07-24 16:48:23', '2024-07-24 16:48:23'),
(20, 'App\\Models\\PatientRegistration', 10, 'authToken', 'e04e189107f9fedaae52ab71fdb085a266eaebb302db754c95c8b6595351e5e4', '[\"*\"]', NULL, '2024-07-24 16:52:53', '2024-07-24 16:52:53'),
(21, 'App\\Models\\PatientRegistration', 10, 'authToken', '0dcd37ccd293236aa390644b41e38fc0059456ed9f62f3b32540d3b56edb1464', '[\"*\"]', NULL, '2024-07-26 10:38:08', '2024-07-26 10:38:08'),
(22, 'App\\Models\\PatientRegistration', 10, 'authToken', 'f4e8d466c3918277c3383a27ad99d7e08504fb01b09985abfb777cabf8a71f47', '[\"*\"]', NULL, '2024-07-26 15:10:02', '2024-07-26 15:10:02'),
(23, 'App\\Models\\PatientRegistration', 10, 'authToken', 'aca530c4cfb010a3bb40618ba51b15763150715f1d9183ab17a41f14a0deb3d2', '[\"*\"]', NULL, '2024-07-26 15:11:21', '2024-07-26 15:11:21'),
(24, 'App\\Models\\PatientRegistration', 10, 'authToken', 'f57929073d91e848f316faf1a65774c1e951c1dec0803c64615641d64ebf4d57', '[\"*\"]', NULL, '2024-07-26 15:13:08', '2024-07-26 15:13:08'),
(25, 'App\\Models\\PatientRegistration', 10, 'authToken', '0c265d9b68fc20234e943173f51c9b7d02083bd2c51f62edc0b7beb01269b13d', '[\"*\"]', NULL, '2024-07-26 15:27:50', '2024-07-26 15:27:50'),
(26, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b70cfe836bebfabfe86b2966fc4a6853ed755f875e5579b3e2a8e5a262c11100', '[\"*\"]', NULL, '2024-07-26 15:31:00', '2024-07-26 15:31:00'),
(27, 'App\\Models\\PatientRegistration', 10, 'authToken', 'ad5a0e5464dc34bf3e20ae572709539de709c1c777e891e6ddeae1d9510359aa', '[\"*\"]', NULL, '2024-07-26 15:43:42', '2024-07-26 15:43:42'),
(28, 'App\\Models\\PatientRegistration', 10, 'authToken', '33fecfb2dcc5747b1188023af26c522023b5a207321eb407cd2be476ddb1799e', '[\"*\"]', NULL, '2024-07-26 15:44:00', '2024-07-26 15:44:00'),
(29, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a4b9a60642329949ea683ce7a454eb0596e3e389e023ac0565ccd5e378cb6fb3', '[\"*\"]', NULL, '2024-07-26 15:46:03', '2024-07-26 15:46:03'),
(30, 'App\\Models\\PatientRegistration', 10, 'authToken', 'bfb9b32b95194a3ef40167f833f609e787b91ecd2343a6758955e8b2bfe78ac2', '[\"*\"]', NULL, '2024-07-26 15:47:57', '2024-07-26 15:47:57'),
(31, 'App\\Models\\PatientRegistration', 10, 'authToken', '39f2cdf7698d76e09d767763155cea34d7e0d3da77bbb1344e087251e93aa593', '[\"*\"]', NULL, '2024-07-26 15:52:54', '2024-07-26 15:52:54'),
(32, 'App\\Models\\PatientRegistration', 10, 'authToken', '44c9609e7f9352eca3458290220c75d0714c1c885852ba2975d30ebacee9a1a2', '[\"*\"]', NULL, '2024-07-26 15:53:56', '2024-07-26 15:53:56'),
(33, 'App\\Models\\PatientRegistration', 10, 'authToken', '5ab1990fe6725e70d6bcf0e040d031c2db24e2e341573171d8063c38a5f25b5c', '[\"*\"]', NULL, '2024-07-26 15:55:34', '2024-07-26 15:55:34'),
(34, 'App\\Models\\PatientRegistration', 10, 'authToken', '552bc882ee388fa2d3e5641ed6ecf77f25c22cf5d3690a7e0de0d9dde083f83a', '[\"*\"]', NULL, '2024-07-26 15:57:44', '2024-07-26 15:57:44'),
(35, 'App\\Models\\PatientRegistration', 10, 'authToken', 'ff8411dbf467f9a6aa2047d80b47f9189e68517788e7c52140540f811b11a9db', '[\"*\"]', NULL, '2024-07-26 15:58:30', '2024-07-26 15:58:30'),
(36, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a46dcfd8fe2a9def57cee14b9ef2752d0acdf0050c6d3df7806cabd0d61cb471', '[\"*\"]', NULL, '2024-07-26 16:03:23', '2024-07-26 16:03:23'),
(37, 'App\\Models\\PatientRegistration', 10, 'authToken', '23919d3925bbb5aceca0200c4461bc390d641bff705346f81180cf4809e7e1f7', '[\"*\"]', NULL, '2024-07-26 16:14:08', '2024-07-26 16:14:08'),
(38, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b21be645905134a4b5177a23898733144cf5db077e7420c319a60dfcc2d99689', '[\"*\"]', NULL, '2024-07-26 16:18:01', '2024-07-26 16:18:01'),
(39, 'App\\Models\\PatientRegistration', 10, 'authToken', 'eb7683959d5aa3c73786cdbe4d667ce951fa5883202b3afec9611a44936eb90b', '[\"*\"]', NULL, '2024-07-26 16:19:04', '2024-07-26 16:19:04'),
(40, 'App\\Models\\PatientRegistration', 10, 'authToken', 'd798f4785110ecbc3c9ac710af58659b282aef8e1d6e12508a705313892b9b1e', '[\"*\"]', NULL, '2024-07-26 16:20:07', '2024-07-26 16:20:07'),
(41, 'App\\Models\\PatientRegistration', 10, 'authToken', 'dc838bbd10a0c5a20e6cd232d2a1a9d07d5238680e25cdfc712b451b5ec138a1', '[\"*\"]', NULL, '2024-07-26 16:21:59', '2024-07-26 16:21:59'),
(42, 'App\\Models\\PatientRegistration', 10, 'authToken', '99be7c1a7e19536915136135f713374deb5d82d709a50378733125a22d192b8e', '[\"*\"]', NULL, '2024-07-26 16:22:52', '2024-07-26 16:22:52'),
(43, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c89c9950ce728a5d7bca5473c9f2d89e380bcdc3b83e833e6d78a62cc24f9a99', '[\"*\"]', NULL, '2024-07-26 16:33:49', '2024-07-26 16:33:49'),
(44, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a722ca74b7b374eb3ef40f2fdc6299697a805ed63bb6921943bae08064706a79', '[\"*\"]', NULL, '2024-07-26 16:43:06', '2024-07-26 16:43:06'),
(45, 'App\\Models\\PatientRegistration', 10, 'authToken', '957d300aff613e37dd5f5b69e79560cf353619618fae414082b86ed0cfdb96c6', '[\"*\"]', NULL, '2024-07-26 16:44:22', '2024-07-26 16:44:22'),
(46, 'App\\Models\\PatientRegistration', 10, 'authToken', '779609170437be93baeb47ce4140ffc7a5f27583c376e0ac4a750550736e884c', '[\"*\"]', NULL, '2024-07-26 17:38:25', '2024-07-26 17:38:25'),
(47, 'App\\Models\\PatientRegistration', 10, 'authToken', '35fa4eb932b814da7bf21ac8a605b878599fe13ddeb92dbd5426edd0dbc8a431', '[\"*\"]', NULL, '2024-07-29 09:49:01', '2024-07-29 09:49:01'),
(48, 'App\\Models\\PatientRegistration', 10, 'authToken', '7210445bb0b81f6bdfc8a2f5e653c1e366cfb5951081105fb4f2a3c1473688ff', '[\"*\"]', NULL, '2024-07-29 09:58:05', '2024-07-29 09:58:05'),
(49, 'App\\Models\\PatientRegistration', 10, 'authToken', '3fba8f43454544e9662851116a6beb4dc1c401403c1f717388a73c68db2fe845', '[\"*\"]', NULL, '2024-07-29 10:02:21', '2024-07-29 10:02:21'),
(50, 'App\\Models\\PatientRegistration', 10, 'authToken', '27027e723bd6b3d89b547f411b3d8027ef90f8022e24832ea1e6d69968cffaa4', '[\"*\"]', NULL, '2024-07-29 10:04:37', '2024-07-29 10:04:37'),
(51, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c12948eadf5338048baf356f2bc3a70544955ef13ad7db3f0ae5fa212224370a', '[\"*\"]', NULL, '2024-07-29 10:10:09', '2024-07-29 10:10:09'),
(52, 'App\\Models\\PatientRegistration', 10, 'authToken', '70a940a866e223e4ef440d537d18276c4df10ea969ed980564800673e2003b25', '[\"*\"]', NULL, '2024-07-29 10:10:21', '2024-07-29 10:10:21'),
(53, 'App\\Models\\PatientRegistration', 10, 'authToken', '25a84a0b7ca3a562f161f2b12dbe31f214ba0f826001b6280e703c49f4580a06', '[\"*\"]', NULL, '2024-07-29 10:52:15', '2024-07-29 10:52:15'),
(54, 'App\\Models\\PatientRegistration', 10, 'authToken', '3f97cd9e5dcb673dcf5d970b7698664ff6490244d121b5ad52c1b7e456764216', '[\"*\"]', NULL, '2024-07-29 10:53:10', '2024-07-29 10:53:10'),
(55, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b10bd6b1898df1e85011da2616bc38655bf4ee7b074f979404f47db80f73ad32', '[\"*\"]', NULL, '2024-07-29 10:54:32', '2024-07-29 10:54:32'),
(56, 'App\\Models\\PatientRegistration', 10, 'authToken', '09a073c6b47c04a0a8a19f501d174cb73d619c9cd1687a412eaa84b91e6023a1', '[\"*\"]', NULL, '2024-07-29 10:54:52', '2024-07-29 10:54:52'),
(57, 'App\\Models\\PatientRegistration', 10, 'authToken', '25bb39baf0c425f88b2c4c0663d8235739be4c1379e94064bad5a7c497131203', '[\"*\"]', NULL, '2024-07-29 10:59:01', '2024-07-29 10:59:01'),
(58, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c998e23ca2214fe28e2ac8c58044ae806b36121074380d59fb315e35623d8ab4', '[\"*\"]', NULL, '2024-07-29 11:08:05', '2024-07-29 11:08:05'),
(59, 'App\\Models\\PatientRegistration', 10, 'authToken', '1e37b3c6011e95a29bd12d4f1af7286ca88e3de0036b37e4105ef0ebdf0ea69b', '[\"*\"]', NULL, '2024-07-29 11:09:04', '2024-07-29 11:09:04'),
(60, 'App\\Models\\PatientRegistration', 10, 'authToken', 'db01a4953010d3d0c2aa2ebe0b8f598134cd73fda9767b3ae6ee4981ca3f1683', '[\"*\"]', NULL, '2024-07-29 11:20:50', '2024-07-29 11:20:50'),
(61, 'App\\Models\\PatientRegistration', 10, 'authToken', '4cd46fcb59d6b522fbef44d0ccace4dcc795cda0e423c373a2c4b4816466a9a7', '[\"*\"]', NULL, '2024-07-29 11:25:56', '2024-07-29 11:25:56'),
(62, 'App\\Models\\PatientRegistration', 10, 'authToken', '658e805fa19f184215b9db9ec1c880c817ab2399852bf7fb047e6e932bc4142d', '[\"*\"]', NULL, '2024-07-29 11:26:53', '2024-07-29 11:26:53'),
(63, 'App\\Models\\PatientRegistration', 10, 'authToken', 'eda949a77638af1326e1c56c5effaef10d09d2ce651c953bea3ad7fc96c219c4', '[\"*\"]', NULL, '2024-07-29 11:28:27', '2024-07-29 11:28:27'),
(64, 'App\\Models\\PatientRegistration', 10, 'authToken', '8a02523e553367374644036c0667df6af88f88a79205b7b2a6768da23f155414', '[\"*\"]', NULL, '2024-07-29 11:30:03', '2024-07-29 11:30:03'),
(65, 'App\\Models\\PatientRegistration', 10, 'authToken', '0eefdafc3af2a4298cf5e82dcc64541649b1d3bb33d393c57fef5ce536249bc9', '[\"*\"]', NULL, '2024-07-29 11:30:22', '2024-07-29 11:30:22'),
(66, 'App\\Models\\PatientRegistration', 10, 'authToken', '73d2e78b98fc12966f2ffcea1fa4bea05def526d3283ae70cb47ed67f5d1dfe5', '[\"*\"]', NULL, '2024-07-29 11:34:07', '2024-07-29 11:34:07'),
(67, 'App\\Models\\PatientRegistration', 10, 'authToken', 'e2c36c35a5ba9bfae58959735b9f7594765aafbe06d2afa8b4f6e8412075ba04', '[\"*\"]', NULL, '2024-07-29 11:40:21', '2024-07-29 11:40:21'),
(68, 'App\\Models\\PatientRegistration', 10, 'authToken', '61463803b9aaa629548f6fedd4132309abe8b4bd914a751cf88031e9ade74baf', '[\"*\"]', NULL, '2024-07-29 11:41:28', '2024-07-29 11:41:28'),
(69, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a836e13728288490deb494bf10e866b188cebdaaa462eb28c135098168daea9a', '[\"*\"]', NULL, '2024-07-29 11:41:48', '2024-07-29 11:41:48'),
(70, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c4b558f6f6897784386b37c057b90bb70ee254bfa5cc83a450718c172043c38e', '[\"*\"]', NULL, '2024-07-29 11:44:49', '2024-07-29 11:44:49'),
(71, 'App\\Models\\PatientRegistration', 13, 'authToken', 'c100d82e596ecb04b9f8555e089f43cac2922f93f38433ed790d0e2a452b7551', '[\"*\"]', NULL, '2024-07-29 11:50:41', '2024-07-29 11:50:41'),
(72, 'App\\Models\\PatientRegistration', 13, 'authToken', 'a34d4b4ae97f72433bb5cdd7b1ca639acd1b460c0e3032960c59b1f15df00e8f', '[\"*\"]', NULL, '2024-07-29 11:50:56', '2024-07-29 11:50:56'),
(73, 'App\\Models\\PatientRegistration', 13, 'authToken', '1435f9f557a72fd7d0367b606739e887009d1e10f3e922c72957338207240800', '[\"*\"]', NULL, '2024-07-29 11:51:25', '2024-07-29 11:51:25'),
(74, 'App\\Models\\PatientRegistration', 10, 'authToken', '482be8182481a6f3cec920afe6a9a4f517b0f3fc58f39be95794fdda6fec99b6', '[\"*\"]', NULL, '2024-07-29 11:51:48', '2024-07-29 11:51:48'),
(75, 'App\\Models\\PatientRegistration', 10, 'authToken', 'd93a1b6c385fd98421cf9bb68c4b7a34cf970589d5fe20b4329cdbbdffbd0fbe', '[\"*\"]', NULL, '2024-07-29 12:22:23', '2024-07-29 12:22:23'),
(76, 'App\\Models\\PatientRegistration', 10, 'authToken', 'bfd4cc77147ef5f8742e3dd5be73ca447cde62e665fd18e9630bab242c48bb8d', '[\"*\"]', NULL, '2024-07-29 12:49:32', '2024-07-29 12:49:32'),
(77, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b7c93386aee88ad09e50140486c63e5d306d71f480107b5f58630c4150184f10', '[\"*\"]', NULL, '2024-07-29 12:54:56', '2024-07-29 12:54:56'),
(78, 'App\\Models\\PatientRegistration', 10, 'authToken', '4765b69ec9ee2250c40e5f4299be2988c6f245f82e565b57ce9858c52d51b931', '[\"*\"]', NULL, '2024-07-29 14:05:31', '2024-07-29 14:05:31'),
(79, 'App\\Models\\PatientRegistration', 10, 'authToken', 'aa35aaa5c0c4338fc6aef12a646599d03ce6efcb4d15ba2378a32a395a2ccc5c', '[\"*\"]', NULL, '2024-07-29 18:19:54', '2024-07-29 18:19:54'),
(80, 'App\\Models\\PatientRegistration', 10, 'authToken', '0f28d17a89594631e171f34e38fee8009f0b080831ff43b8300ff46df3216952', '[\"*\"]', NULL, '2024-07-29 18:20:57', '2024-07-29 18:20:57'),
(81, 'App\\Models\\PatientRegistration', 10, 'authToken', '2c304a1679f886267cf1f8f6d110fa1f1547e04a17299dda1b509e0a085c8bc5', '[\"*\"]', NULL, '2024-07-29 18:21:16', '2024-07-29 18:21:16'),
(82, 'App\\Models\\PatientRegistration', 10, 'authToken', 'e6b29fa34567f328417c4084a9e33a58e51b36ca127a64c4e20acbf503ec0da8', '[\"*\"]', NULL, '2024-07-29 18:22:32', '2024-07-29 18:22:32'),
(83, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c77702827d281f1a9abe7f405c1973dfe99d1524135e912b4161d2e162c659a7', '[\"*\"]', NULL, '2024-07-29 18:22:51', '2024-07-29 18:22:51'),
(84, 'App\\Models\\PatientRegistration', 17, 'authToken', '4f9c747fde675ab8e25b44ea45aabcf6c3cb27821204a98d7410f1591dfaae05', '[\"*\"]', NULL, '2024-07-29 18:58:41', '2024-07-29 18:58:41'),
(85, 'App\\Models\\PatientRegistration', 18, 'authToken', '05dbec4d5af5b4839b86176c53e28fe378f40b38a6ac113e5d2edd92696d4634', '[\"*\"]', NULL, '2024-07-31 12:22:16', '2024-07-31 12:22:16'),
(86, 'App\\Models\\PatientRegistration', 18, 'authToken', '1b0fc99afd1522c6c69495163c162deb2b9b8d0376756bd17af1481c5e8f4d7b', '[\"*\"]', NULL, '2024-07-31 12:24:33', '2024-07-31 12:24:33'),
(87, 'App\\Models\\PatientRegistration', 18, 'authToken', '10ba9c4fa857c3de713ee270f069537905cb5702156e909f44ba6330cee49405', '[\"*\"]', NULL, '2024-08-02 10:12:56', '2024-08-02 10:12:56'),
(88, 'App\\Models\\PatientRegistration', 25, 'authToken', '2dd0cd3086b68040e2f2e0ae60cae97536693410322dfa2374f60d1064a518e1', '[\"*\"]', NULL, '2024-08-02 10:50:12', '2024-08-02 10:50:12'),
(89, 'App\\Models\\PatientRegistration', 25, 'authToken', 'a3ee155a54002bc4ea8cc570c4fd063f370dddc9a688f7374524a807512ac6c0', '[\"*\"]', NULL, '2024-08-02 10:50:27', '2024-08-02 10:50:27'),
(90, 'App\\Models\\PatientRegistration', 10, 'authToken', '716e05cca83981c52d0d1037b76a617e778921910cc528e633bb1e7c75750847', '[\"*\"]', NULL, '2024-08-02 14:15:29', '2024-08-02 14:15:29'),
(91, 'App\\Models\\PatientRegistration', 10, 'authToken', '30fd08aeab16093fa62e66767ea05c91b87c7682c178229c8d038961517f9a07', '[\"*\"]', NULL, '2024-08-02 14:17:35', '2024-08-02 14:17:35'),
(92, 'App\\Models\\PatientRegistration', 10, 'authToken', 'fb4479efd23d2d1c848ebc7352c3c432daf4f1da9244ae088316be59e375e466', '[\"*\"]', NULL, '2024-08-02 14:17:55', '2024-08-02 14:17:55'),
(93, 'App\\Models\\PatientRegistration', 10, 'authToken', 'cc75d380c05923def1a3c319d61cf7eb9e09bf017734e15d243832cc021b08ff', '[\"*\"]', NULL, '2024-08-02 14:22:13', '2024-08-02 14:22:13'),
(94, 'App\\Models\\PatientRegistration', 10, 'authToken', '5ce224a65344786c559f27325a1236552fe012d9dd9d3deaa239d6b8fae12159', '[\"*\"]', NULL, '2024-08-02 14:25:55', '2024-08-02 14:25:55'),
(95, 'App\\Models\\PatientRegistration', 10, 'authToken', '6f8f887e609f75e58668eed0e844cb1698b8103496896d2fdb144f46c477592a', '[\"*\"]', NULL, '2024-08-02 14:26:45', '2024-08-02 14:26:45'),
(96, 'App\\Models\\PatientRegistration', 10, 'authToken', '9355ecefb79136667891c963179155ed07da81096b6c581de7e309c3a7c8b59d', '[\"*\"]', NULL, '2024-08-02 14:41:32', '2024-08-02 14:41:32'),
(97, 'App\\Models\\PatientRegistration', 10, 'authToken', '30f0154e6eb140798eb540e68ae6c2f21c5bac3e822361bdf080965dbd0c3e85', '[\"*\"]', NULL, '2024-08-02 14:52:57', '2024-08-02 14:52:57'),
(98, 'App\\Models\\PatientRegistration', 10, 'authToken', '9785d01bb6c055c8badba4eff4f7b96540e47d0051a0ac36b780d2c4aa51cffa', '[\"*\"]', NULL, '2024-08-02 14:56:08', '2024-08-02 14:56:08'),
(99, 'App\\Models\\PatientRegistration', 10, 'authToken', 'ce8775012809d7b687b7c9865b778c4935d41494f201f3940760375541a34c55', '[\"*\"]', NULL, '2024-08-02 14:56:51', '2024-08-02 14:56:51'),
(100, 'App\\Models\\PatientRegistration', 10, 'authToken', '5a366feef3ad3da3856864b5df848c0f3322a1b2f68867cf225b8980f1d7eb11', '[\"*\"]', NULL, '2024-08-02 14:57:09', '2024-08-02 14:57:09'),
(101, 'App\\Models\\PatientRegistration', 10, 'authToken', 'bcd75a6c7ece64b1d773330ccaa021304fcd22af499e25e1e0280d3f65600106', '[\"*\"]', NULL, '2024-08-02 15:07:25', '2024-08-02 15:07:25'),
(102, 'App\\Models\\PatientRegistration', 10, 'authToken', '167482e055c5a1148d0a995094393c8286089be37af5e5c6be96d8ee2c3df1ad', '[\"*\"]', NULL, '2024-08-02 15:09:55', '2024-08-02 15:09:55'),
(103, 'App\\Models\\PatientRegistration', 10, 'authToken', '959bfa450384e9f27c273048771f60db8d6cd9b83d0d6ed625a611488adc0de4', '[\"*\"]', NULL, '2024-08-02 15:22:25', '2024-08-02 15:22:25'),
(104, 'App\\Models\\PatientRegistration', 10, 'authToken', '5149c7ec3c62c9913a2dc4b318ff0346df137a10c45b2990f158ea23915a7820', '[\"*\"]', NULL, '2024-08-02 16:07:03', '2024-08-02 16:07:03'),
(105, 'App\\Models\\PatientRegistration', 10, 'authToken', 'db1fb89c024481cd50b4adc8f937918c294a789f57a384afae1883f22d3bd786', '[\"*\"]', NULL, '2024-08-03 10:45:36', '2024-08-03 10:45:36'),
(106, 'App\\Models\\PatientRegistration', 10, 'authToken', 'cb2745debb14b1156c8cf7547b62a1a5cf20853abb23734395a8009e7256b4af', '[\"*\"]', NULL, '2024-08-03 11:35:04', '2024-08-03 11:35:04'),
(107, 'App\\Models\\PatientRegistration', 10, 'authToken', '50a82f281d22a09ee8d6dcd85a5628dacf4099fe13a355f3636ffe911b223e20', '[\"*\"]', NULL, '2024-08-03 13:02:48', '2024-08-03 13:02:48'),
(108, 'App\\Models\\PatientRegistration', 18, 'authToken', 'cf4d0e4236c159522b0c301c80c150a84a864dbf23ba0095401eb3e7cba8f786', '[\"*\"]', NULL, '2024-08-03 13:14:53', '2024-08-03 13:14:53'),
(109, 'App\\Models\\PatientRegistration', 10, 'authToken', 'e071acbbf171252b05ef562a1221a0291aa0ef60abb29e53af21fe89c391951f', '[\"*\"]', NULL, '2024-08-03 13:31:29', '2024-08-03 13:31:29'),
(110, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c242bd34926d3aa8308534a54955e0cd518ee7cf48ad4c25d95aaa41922f395d', '[\"*\"]', NULL, '2024-08-03 13:31:45', '2024-08-03 13:31:45'),
(111, 'App\\Models\\PatientRegistration', 10, 'authToken', '151c16fad4a82105b6db73f5f2d5370393ffa4dc21d66bcb611187ab0e643a3d', '[\"*\"]', NULL, '2024-08-03 13:32:02', '2024-08-03 13:32:02'),
(112, 'App\\Models\\PatientRegistration', 10, 'authToken', 'eed3f5d57d6ecf23e81802ed2bb44270f8b8c2be3025e3c459260aa407eaff74', '[\"*\"]', NULL, '2024-08-03 13:32:45', '2024-08-03 13:32:45'),
(113, 'App\\Models\\PatientRegistration', 10, 'authToken', '4e2c474f9a9e4558f6546112c676d1cf1bbfc469dfa40a96aac4f368e4090070', '[\"*\"]', NULL, '2024-08-03 13:35:07', '2024-08-03 13:35:07'),
(114, 'App\\Models\\PatientRegistration', 10, 'authToken', 'd718d2b299e307fda26e4fef7d5274e55b5b5ff4fcc013f5c1490c0e4d3718bd', '[\"*\"]', NULL, '2024-08-03 13:35:31', '2024-08-03 13:35:31'),
(115, 'App\\Models\\PatientRegistration', 10, 'authToken', '6e45d0c094030bbbcfab50a50bdc56d2913fc4a6d121c3348c81ea2ed6966b26', '[\"*\"]', NULL, '2024-08-03 13:36:33', '2024-08-03 13:36:33'),
(116, 'App\\Models\\PatientRegistration', 10, 'authToken', 'db8089fc6ab623a92361b3907daf9ea97d052f0a6507a95c876c9a541f976277', '[\"*\"]', NULL, '2024-08-03 13:37:10', '2024-08-03 13:37:10'),
(117, 'App\\Models\\PatientRegistration', 10, 'authToken', 'dc342698b69744dc096e0e3adb1a558d6e79b317a04b133f5f3a144c4390cea1', '[\"*\"]', NULL, '2024-08-03 14:58:11', '2024-08-03 14:58:11'),
(118, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a17f683ca5c5ce5b054206a85e25d3cff688569bbc2ae97e6deb3220525a05ef', '[\"*\"]', NULL, '2024-08-03 15:00:33', '2024-08-03 15:00:33'),
(119, 'App\\Models\\PatientRegistration', 10, 'authToken', '331a816bd670c52184c603b65eef2ddc099fdba652fde86d0f4b3c41ba28b164', '[\"*\"]', NULL, '2024-08-03 15:56:27', '2024-08-03 15:56:27'),
(120, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a88153fe4405699034579eae2348aa375166f0aea581c2e442b0e719fa8200ce', '[\"*\"]', NULL, '2024-08-03 16:11:43', '2024-08-03 16:11:43'),
(121, 'App\\Models\\PatientRegistration', 44, 'authToken', '251cecdcbd88f4e8b29d56c23643b4e4ff9262ae1f6d58e259bd8581a6301d4d', '[\"*\"]', NULL, '2024-08-05 09:55:26', '2024-08-05 09:55:26'),
(122, 'App\\Models\\PatientRegistration', 10, 'authToken', '967c8983683874d33e4767339fee1ae1fb895be446a956324eea9e3e153b740b', '[\"*\"]', NULL, '2024-08-05 10:26:24', '2024-08-05 10:26:24'),
(123, 'App\\Models\\PatientRegistration', 10, 'authToken', 'bf9fd662c035636ab2c6f9be4262c8b6d0e2c8534cf0c8a0e6c4aac486d75d4d', '[\"*\"]', NULL, '2024-08-05 10:32:41', '2024-08-05 10:32:41'),
(124, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a3e5ce4b0339caeee8333b9fd2a3fab54172c258d874a026e0711539ff322887', '[\"*\"]', NULL, '2024-08-05 10:44:28', '2024-08-05 10:44:28'),
(125, 'App\\Models\\PatientRegistration', 10, 'authToken', '1df6edfbddf5ed62f72504ee4c930b061cc09b786d4d800e4bf084109b90803d', '[\"*\"]', NULL, '2024-08-05 10:47:50', '2024-08-05 10:47:50'),
(126, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b9e115154a308f6c2dcbef4e63e1595bfbde33f7c5af14c2715acf2b1b723e53', '[\"*\"]', NULL, '2024-08-05 10:59:18', '2024-08-05 10:59:18'),
(127, 'App\\Models\\PatientRegistration', 10, 'authToken', '7777e503a4651c3b8dec1e3d1f48413263745f9f4101b7ba7bcf40c42c1efc6f', '[\"*\"]', NULL, '2024-08-05 11:10:32', '2024-08-05 11:10:32'),
(128, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c6ee6f2ae46c2901ea41510d28b890bc7a28108f5a6ead5478466e83a76c593f', '[\"*\"]', NULL, '2024-08-05 11:26:29', '2024-08-05 11:26:29'),
(129, 'App\\Models\\PatientRegistration', 10, 'authToken', '7338316d5b2ca99e967f44ea0038558448e0f9b3162b35869eb15d10b4f3d743', '[\"*\"]', NULL, '2024-08-05 11:43:31', '2024-08-05 11:43:31'),
(130, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a28766a7f1cc6aaf137507245f42f5189c0488f41d52a7cdba5087ec0bab3b4d', '[\"*\"]', NULL, '2024-08-05 11:43:52', '2024-08-05 11:43:52'),
(131, 'App\\Models\\PatientRegistration', 10, 'authToken', '67af0da8239346b67d9606dff046d4293c18e2b5495025978ebde615b3dcf9ba', '[\"*\"]', NULL, '2024-08-05 11:45:20', '2024-08-05 11:45:20'),
(132, 'App\\Models\\PatientRegistration', 18, 'authToken', '70ab33876fd0b07127e1a21ab0ff776644f41668c6cbef0844d434ca48b019bd', '[\"*\"]', NULL, '2024-08-05 11:49:13', '2024-08-05 11:49:13'),
(133, 'App\\Models\\PatientRegistration', 18, 'authToken', 'c9e4afa98920bce252e5ad7fd71f108ef52365e772deea1026a25adea4ba130b', '[\"*\"]', NULL, '2024-08-05 11:49:45', '2024-08-05 11:49:45'),
(134, 'App\\Models\\PatientRegistration', 10, 'authToken', '2aea1e0c87b1fd096bdbd49f1d3ce5eda21e12a1da383bb0a6fbed49dc45d6ab', '[\"*\"]', NULL, '2024-08-05 11:51:17', '2024-08-05 11:51:17'),
(135, 'App\\Models\\PatientRegistration', 18, 'authToken', '1b924a92034629ff9d50fb89de485b23bd5464c89f62c123aa65667a272ade2c', '[\"*\"]', NULL, '2024-08-05 11:54:28', '2024-08-05 11:54:28'),
(136, 'App\\Models\\PatientRegistration', 10, 'authToken', 'f31de5cbe345a94c0e9976cbd87b035f09e04e23488290902891e82f23e298c6', '[\"*\"]', NULL, '2024-08-05 11:57:10', '2024-08-05 11:57:10'),
(137, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c43ec98ea7469d6734247f9c6f131359c14d6dd17d11a29c477e097464062ac1', '[\"*\"]', NULL, '2024-08-05 12:00:18', '2024-08-05 12:00:18'),
(138, 'App\\Models\\PatientRegistration', 10, 'authToken', 'ae91f730a873a7f7363b10ef641a2e53589b5ce3a8b8717d6b3a7359b3993719', '[\"*\"]', NULL, '2024-08-05 12:05:32', '2024-08-05 12:05:32'),
(139, 'App\\Models\\PatientRegistration', 10, 'authToken', '162633e9325341775c7a39ef7ab7c50522e0ff5d11d355bac37a790e0086526d', '[\"*\"]', NULL, '2024-08-05 12:06:26', '2024-08-05 12:06:26'),
(140, 'App\\Models\\PatientRegistration', 10, 'authToken', '86859332dcbc27d0442be7268e6adf9a69b68834fdf2e26e0653a83a632203a3', '[\"*\"]', NULL, '2024-08-05 12:12:31', '2024-08-05 12:12:31'),
(141, 'App\\Models\\PatientRegistration', 18, 'authToken', '1113ae924ac9f7782c6c977d361c603399d836db93e167522df48d6a670dcf9b', '[\"*\"]', NULL, '2024-08-05 12:13:07', '2024-08-05 12:13:07'),
(142, 'App\\Models\\PatientRegistration', 10, 'authToken', '46281a0d2a1c6391e2f2ef6dc3568780b63c813de03e7776179b0a9692cd5833', '[\"*\"]', NULL, '2024-08-05 12:14:04', '2024-08-05 12:14:04'),
(143, 'App\\Models\\PatientRegistration', 10, 'authToken', 'e8af4c20978974520d959f88e891550a45a03736f155ef557a3751e74bdaf046', '[\"*\"]', NULL, '2024-08-05 12:15:31', '2024-08-05 12:15:31'),
(144, 'App\\Models\\PatientRegistration', 18, 'authToken', '88ea52fb689fcf7433c2410d16a5aa55fcf0e64751c741ff0f6b06ad9e925d48', '[\"*\"]', NULL, '2024-08-05 12:17:43', '2024-08-05 12:17:43'),
(145, 'App\\Models\\PatientRegistration', 18, 'authToken', 'c32c0403163beadea066a8f15f7f288d545486fd77bb145ba492c4b8597b85f1', '[\"*\"]', NULL, '2024-08-05 12:21:54', '2024-08-05 12:21:54'),
(146, 'App\\Models\\PatientRegistration', 10, 'authToken', '3454e1896cf5fad6da390fd8634a6a6e36ca15e119015da6a0eb735080d6706c', '[\"*\"]', NULL, '2024-08-05 12:24:57', '2024-08-05 12:24:57'),
(147, 'App\\Models\\PatientRegistration', 18, 'authToken', '317644d645ed498e867686028e47c735e4d5cd7abbe7c5900632d881fc4bc61c', '[\"*\"]', NULL, '2024-08-05 12:28:59', '2024-08-05 12:28:59'),
(148, 'App\\Models\\PatientRegistration', 18, 'authToken', '5c149006e091639390c0ec371f4de5c105f51df759b8e00f004c276699428dd5', '[\"*\"]', NULL, '2024-08-05 12:29:50', '2024-08-05 12:29:50'),
(149, 'App\\Models\\PatientRegistration', 18, 'authToken', '0b2b63ae30fd3b5dd04d15e60f0cd8cd9117229f3d446f138d13141a18861795', '[\"*\"]', NULL, '2024-08-05 12:30:13', '2024-08-05 12:30:13'),
(150, 'App\\Models\\PatientRegistration', 18, 'authToken', 'c31d4ce2637822103078da8989569f2fd6063af30f601bc4024953befc95209f', '[\"*\"]', NULL, '2024-08-05 12:30:52', '2024-08-05 12:30:52'),
(151, 'App\\Models\\PatientRegistration', 10, 'authToken', '241069853b3e2fcad0e138b5274b3f57f392d3565a83e4bc668c00f2a094622e', '[\"*\"]', NULL, '2024-08-05 12:31:57', '2024-08-05 12:31:57'),
(152, 'App\\Models\\PatientRegistration', 10, 'authToken', '039df95f24f42e0bf8d905d45668f6f58d655c96e73991e879411963a33d9f3a', '[\"*\"]', NULL, '2024-08-05 13:04:08', '2024-08-05 13:04:08'),
(153, 'App\\Models\\PatientRegistration', 10, 'authToken', 'd4764b5b9825321f3a09b30ef770c16256cb5f233d34cf690ac44abb5f65b389', '[\"*\"]', NULL, '2024-08-05 14:15:26', '2024-08-05 14:15:26'),
(154, 'App\\Models\\PatientRegistration', 10, 'authToken', '3745ee8ef130e586c61f2a87b483b94e8d02944c5f66df6ae6e343872e2100c5', '[\"*\"]', NULL, '2024-08-05 14:15:49', '2024-08-05 14:15:49'),
(155, 'App\\Models\\PatientRegistration', 10, 'authToken', 'eaefe24beb236feaf95c91fd263da1bf18a287caab55ceb51dcdcebe9aa07d30', '[\"*\"]', NULL, '2024-08-05 14:17:04', '2024-08-05 14:17:04'),
(156, 'App\\Models\\PatientRegistration', 10, 'authToken', 'd743c4d66b6e12e93fb47b32f8300cf064d8f309510952b06daf25d6a41484f9', '[\"*\"]', NULL, '2024-08-05 14:17:38', '2024-08-05 14:17:38'),
(157, 'App\\Models\\PatientRegistration', 10, 'authToken', '07a1bce76f3bd4894e9599b974986c04ccc1e84fbdd0ef0b64218f0178cb57ae', '[\"*\"]', NULL, '2024-08-05 14:19:02', '2024-08-05 14:19:02'),
(158, 'App\\Models\\PatientRegistration', 10, 'authToken', '3060f20bfbe1516a1b8f2e6956557373f525c93be5f01e6ca314654d50b6712a', '[\"*\"]', NULL, '2024-08-05 14:19:52', '2024-08-05 14:19:52'),
(159, 'App\\Models\\PatientRegistration', 10, 'authToken', '50daff7be7c5425a29b12fed3caa61f5ea1c736b958dfc09279117151818cbf6', '[\"*\"]', NULL, '2024-08-05 14:22:10', '2024-08-05 14:22:10'),
(160, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c8e5b292e1f219387dae62671ebccd6a9970eaf200e040c8eb40c70a1a022d48', '[\"*\"]', NULL, '2024-08-05 14:32:45', '2024-08-05 14:32:45'),
(161, 'App\\Models\\PatientRegistration', 10, 'authToken', '7fc7a6e6df6b3cb99ef325e4721b93d7ed5734e81d52a9cb9738c8b029678fa3', '[\"*\"]', NULL, '2024-08-05 14:34:50', '2024-08-05 14:34:50'),
(162, 'App\\Models\\PatientRegistration', 10, 'authToken', '2044e8db44e9c0b8de66cd26ada396b2207427f033379ec8644650a5c49bbda1', '[\"*\"]', NULL, '2024-08-05 14:39:03', '2024-08-05 14:39:03'),
(163, 'App\\Models\\PatientRegistration', 10, 'authToken', '5ed4838db0dffde4d57d8ee6c3695d9f23fc940bc04ae9858ca98574b5fb20a0', '[\"*\"]', NULL, '2024-08-05 15:36:03', '2024-08-05 15:36:03'),
(164, 'App\\Models\\PatientRegistration', 18, 'authToken', 'aa6333d2a18ff0900d0b2f8dc972c802f12e73c65965b7b58a6cde6c5945ec1c', '[\"*\"]', NULL, '2024-08-05 16:34:56', '2024-08-05 16:34:56'),
(165, 'App\\Models\\PatientRegistration', 10, 'authToken', '23cd9a98000a36944435207c0711432926215a3cd8f4b2b484b5fbc2948e9aa5', '[\"*\"]', NULL, '2024-08-06 09:36:50', '2024-08-06 09:36:50'),
(166, 'App\\Models\\PatientRegistration', 18, 'authToken', '9655eeb7ace625b735ac6e3b002ce7f5e8d63cead6ac78d2747c9c3b0e60d9ce', '[\"*\"]', NULL, '2024-08-06 09:56:50', '2024-08-06 09:56:50'),
(167, 'App\\Models\\PatientRegistration', 18, 'authToken', '066802129b960f00924118f5468184658cb6dd05e1d652fc979b15799628d4aa', '[\"*\"]', NULL, '2024-08-06 10:07:42', '2024-08-06 10:07:42'),
(168, 'App\\Models\\PatientRegistration', 10, 'authToken', '75b5668376a96e424632291b4e3e677088307c62d58e16422583a7c2282d4396', '[\"*\"]', NULL, '2024-08-06 10:12:43', '2024-08-06 10:12:43'),
(169, 'App\\Models\\PatientRegistration', 10, 'authToken', '3fe22307cfcc2776d2311e8256fd5877a333ac3ea691155d6b98052178fe8edb', '[\"*\"]', NULL, '2024-08-06 10:12:56', '2024-08-06 10:12:56'),
(170, 'App\\Models\\PatientRegistration', 10, 'authToken', '509a44137f31d75b2284d4f3eaf2e4d4dae781fcd7aa7540eeba8484e3235f28', '[\"*\"]', NULL, '2024-08-06 10:14:10', '2024-08-06 10:14:10'),
(171, 'App\\Models\\PatientRegistration', 18, 'authToken', '2538ce6940efed02da8ae6f5af3221c1b169e8e7705453e72f025da843d2f543', '[\"*\"]', NULL, '2024-08-06 10:14:41', '2024-08-06 10:14:41'),
(172, 'App\\Models\\PatientRegistration', 18, 'authToken', 'cf5d7527ee9681dd286af4b7a7211a2dac2edece1dbcfb9824d543d66a2ab9c7', '[\"*\"]', NULL, '2024-08-06 10:16:41', '2024-08-06 10:16:41'),
(173, 'App\\Models\\PatientRegistration', 25, 'authToken', 'cfeb859cb04bd4a27546774260657da6fe28a2ee4632d705c0c777c003f67849', '[\"*\"]', NULL, '2024-08-06 10:30:01', '2024-08-06 10:30:01'),
(174, 'App\\Models\\PatientRegistration', 18, 'authToken', 'd4dc17586df9308a1359afdd243fe17d1dfe3cd391407f9050a0fdce07255a2c', '[\"*\"]', NULL, '2024-08-06 10:30:44', '2024-08-06 10:30:44'),
(175, 'App\\Models\\PatientRegistration', 25, 'authToken', '95b526550670814e994f56c55ab1960c946c1ca7516db4f240455d5fa31af9d4', '[\"*\"]', NULL, '2024-08-06 14:52:25', '2024-08-06 14:52:25'),
(176, 'App\\Models\\PatientRegistration', 10, 'authToken', '7d84c059a05dda73f9d74e775bd2bafbe2ed8055b4c5d007b0e009f64d77f359', '[\"*\"]', NULL, '2024-08-06 14:54:06', '2024-08-06 14:54:06'),
(177, 'App\\Models\\PatientRegistration', 10, 'authToken', '7e133f8c0d447e1f603ed9ed9c7f7679026a3f0e1a9201bf270b6063a0e9d0b4', '[\"*\"]', NULL, '2024-08-06 16:36:18', '2024-08-06 16:36:18'),
(178, 'App\\Models\\PatientRegistration', 10, 'authToken', '6080385712e4117009df1c2f7a038188bd52007de9c4240594d1936717a2134e', '[\"*\"]', NULL, '2024-08-06 16:39:08', '2024-08-06 16:39:08'),
(179, 'App\\Models\\PatientRegistration', 10, 'authToken', 'dc2dc48876ec9ea537845a6a015d4c36d1d6b0cae4a39950d7869bb162789d50', '[\"*\"]', NULL, '2024-08-06 17:21:38', '2024-08-06 17:21:38'),
(180, 'App\\Models\\PatientRegistration', 20, 'authToken', 'f34a9925dae73d836569cd53beddebfd1348b0b8b498d1ac32c80f5ffb6e9bc0', '[\"*\"]', NULL, '2024-08-06 17:31:31', '2024-08-06 17:31:31'),
(181, 'App\\Models\\PatientRegistration', 20, 'authToken', '7f46c16263bbf58592d21e3a42834b6ca929dacf61974d509b7eeb53cbc4d6fc', '[\"*\"]', NULL, '2024-08-06 17:32:27', '2024-08-06 17:32:27'),
(182, 'App\\Models\\PatientRegistration', 20, 'authToken', '1de5ee2bb72dc66e5bd32a234cdca65cbcdc79df572c12e53896768558c5741b', '[\"*\"]', NULL, '2024-08-06 17:32:42', '2024-08-06 17:32:42'),
(183, 'App\\Models\\PatientRegistration', 20, 'authToken', '256030c9b3edcab7aee44f9d1cbd8e319e1e5be14f2dc0dc36e1f9d43a301466', '[\"*\"]', NULL, '2024-08-06 17:32:44', '2024-08-06 17:32:44'),
(184, 'App\\Models\\PatientRegistration', 20, 'authToken', 'c931e30b498d5f7421a18aac96da1c3e4d978409cf798ccdfc16b9b65584532f', '[\"*\"]', NULL, '2024-08-06 17:32:45', '2024-08-06 17:32:45'),
(185, 'App\\Models\\PatientRegistration', 20, 'authToken', '36b5917b9ca0e70d4509127f01acf34a926bc157116e28e9f076df0db6fc46c2', '[\"*\"]', NULL, '2024-08-06 17:32:46', '2024-08-06 17:32:46'),
(186, 'App\\Models\\PatientRegistration', 20, 'authToken', 'a7b9771b11e76de97f7dec8752a40a7fb8167ee679546d46c343e7058b6cace2', '[\"*\"]', NULL, '2024-08-06 17:37:14', '2024-08-06 17:37:14'),
(187, 'App\\Models\\PatientRegistration', 20, 'authToken', 'a61ae2b1e6d736c35f436160bc61a981f48a1a30e25245c9cdcc302971bbd228', '[\"*\"]', NULL, '2024-08-06 17:37:34', '2024-08-06 17:37:34'),
(188, 'App\\Models\\PatientRegistration', 20, 'authToken', 'f76f7a211c439492b31ccc0b46da9de01d40aadd41f1bb64dfd0c3ce51345066', '[\"*\"]', NULL, '2024-08-06 17:55:42', '2024-08-06 17:55:42'),
(189, 'App\\Models\\PatientRegistration', 20, 'authToken', '9444a0413e332e4d62888ef66325cb40dcbdaa08e30c9efff40370934728da37', '[\"*\"]', NULL, '2024-08-06 17:57:46', '2024-08-06 17:57:46'),
(190, 'App\\Models\\PatientRegistration', 20, 'authToken', '5da5dddabf8e7a893bc4fcfdf50b7385862d79b95d8430c2079c255825f7a874', '[\"*\"]', NULL, '2024-08-06 17:58:00', '2024-08-06 17:58:00'),
(191, 'App\\Models\\PatientRegistration', 18, 'authToken', 'ef1fcbe225e2cff137753bb1c6eb87fd75206915d183131c79f617d37a07afce', '[\"*\"]', NULL, '2024-08-07 10:22:52', '2024-08-07 10:22:52'),
(192, 'App\\Models\\PatientRegistration', 20, 'authToken', '47b6fb8b5f511c4f22487a70d47ec15fb6e1a24fe9eac250896a6f0d4fe0141e', '[\"*\"]', NULL, '2024-08-07 10:23:24', '2024-08-07 10:23:24'),
(193, 'App\\Models\\PatientRegistration', 20, 'authToken', '3e31740f23e3626c221b537338066f0db8d9a0a8c6be4c5afa88222bf23de805', '[\"*\"]', NULL, '2024-08-07 10:24:45', '2024-08-07 10:24:45'),
(194, 'App\\Models\\PatientRegistration', 20, 'authToken', '63fa71e48ab698265f805ea7acf502e61664779dc4a4fb18cfd337c8af5220d7', '[\"*\"]', NULL, '2024-08-07 10:26:15', '2024-08-07 10:26:15'),
(195, 'App\\Models\\PatientRegistration', 18, 'authToken', 'aef5f3271cb4204bf7045443d1ec26f2a4b607a25add5d7f6fa7ee90e998dd85', '[\"*\"]', NULL, '2024-08-07 10:30:10', '2024-08-07 10:30:10'),
(196, 'App\\Models\\PatientRegistration', 18, 'authToken', '80e208ddaa72b4fdbabf8dee89f769cc73076b90a1393ab3b3617c5818ea1831', '[\"*\"]', NULL, '2024-08-07 10:35:06', '2024-08-07 10:35:06'),
(197, 'App\\Models\\PatientRegistration', 20, 'authToken', 'f4ff6cf25aeb346cc9b9088d2bfb3c4ae5958443cbda5b953f90d572aabac304', '[\"*\"]', NULL, '2024-08-07 11:01:57', '2024-08-07 11:01:57'),
(198, 'App\\Models\\PatientRegistration', 20, 'authToken', '812cae031b4ffd0799bcb3764a0b2f402258b801545cff6882991563e45879a2', '[\"*\"]', NULL, '2024-08-07 11:05:40', '2024-08-07 11:05:40'),
(199, 'App\\Models\\PatientRegistration', 20, 'authToken', '70af5da38cde09ccdae59aae97784b897bb88eb9b7f46172e68714e26e4bc22b', '[\"*\"]', NULL, '2024-08-07 11:14:42', '2024-08-07 11:14:42'),
(200, 'App\\Models\\PatientRegistration', 20, 'authToken', '44c3ba4f77189f2dc570f14bbd56c1fe6c7e4c7f1f961c04514bd944db122f53', '[\"*\"]', NULL, '2024-08-07 11:38:52', '2024-08-07 11:38:52'),
(201, 'App\\Models\\PatientRegistration', 20, 'authToken', 'b214df7f1b0501a3b64e8c35a6cbaa628dabb9a3bb8be40659db011145813d92', '[\"*\"]', NULL, '2024-08-07 11:42:20', '2024-08-07 11:42:20'),
(202, 'App\\Models\\PatientRegistration', 20, 'authToken', 'fd10b8fbe605700493aefe86677f571e371bd6d9419d4b85e41c2086d8e7fa66', '[\"*\"]', NULL, '2024-08-07 11:47:31', '2024-08-07 11:47:31'),
(203, 'App\\Models\\PatientRegistration', 20, 'authToken', 'f384e13db4ed58520ad79d5767cf717bed31611f4d9b081f9d4e3b10224177e6', '[\"*\"]', NULL, '2024-08-07 11:50:56', '2024-08-07 11:50:56'),
(204, 'App\\Models\\PatientRegistration', 89, 'authToken', '02ebe7bb1f929d9435acc0063c5e49446506706f26bcfe4a8dfb8212a8d00f3a', '[\"*\"]', NULL, '2024-08-07 16:03:48', '2024-08-07 16:03:48'),
(205, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a315971aa802b3c815dcb00c3e00cec0edee1001698a77131bafef73ba6b4d90', '[\"*\"]', NULL, '2024-08-07 16:18:39', '2024-08-07 16:18:39'),
(206, 'App\\Models\\PatientRegistration', 18, 'authToken', '216340c8b0cf195d810fb40ac0cf84518c30516d6f1a5c26039da0bbc2261e3d', '[\"*\"]', NULL, '2024-08-07 16:22:39', '2024-08-07 16:22:39'),
(207, 'App\\Models\\PatientRegistration', 18, 'authToken', '30cedf36510175322de345c0cc792ae01fffb7e011e05ff8ce72466ae2a083d6', '[\"*\"]', NULL, '2024-08-07 19:25:36', '2024-08-07 19:25:36'),
(208, 'App\\Models\\PatientRegistration', 18, 'authToken', '5751a9c343f826e3043ff36b2bd12d8e73f131e540f8af0f789c10534dbfe7c9', '[\"*\"]', NULL, '2024-08-07 19:25:51', '2024-08-07 19:25:51'),
(209, 'App\\Models\\PatientRegistration', 18, 'authToken', 'e75ee5b5084c510634869066428d6760ce0fd47f57501acd1f768bcf5435a077', '[\"*\"]', NULL, '2024-08-08 10:24:09', '2024-08-08 10:24:09'),
(210, 'App\\Models\\PatientRegistration', 20, 'authToken', '8155efc3194530031c5309293121b038bf99e93a20fc5a9a79956e8615790451', '[\"*\"]', NULL, '2024-08-08 11:14:05', '2024-08-08 11:14:05'),
(211, 'App\\Models\\PatientRegistration', 44, 'authToken', '0f4dad94661d8b4584b85d019a214549422221ac3697340540c59caeb9768307', '[\"*\"]', NULL, '2024-08-08 11:44:37', '2024-08-08 11:44:37'),
(212, 'App\\Models\\PatientRegistration', 44, 'authToken', '6f65bd5c1204de6f42aea4f21d5a763b4c5fddfee57aa989ccb795b32057b582', '[\"*\"]', NULL, '2024-08-08 11:44:37', '2024-08-08 11:44:37'),
(213, 'App\\Models\\PatientRegistration', 44, 'authToken', '5886097e00798286a28ff3241c0d916c3e512890d7b398da958944a3646ce684', '[\"*\"]', NULL, '2024-08-08 11:44:52', '2024-08-08 11:44:52'),
(214, 'App\\Models\\PatientRegistration', 18, 'authToken', '0a61b101800e1435227e789a7caa758829276e28a9816dda1a59f78f3bccfbe8', '[\"*\"]', NULL, '2024-08-08 12:00:54', '2024-08-08 12:00:54'),
(215, 'App\\Models\\PatientRegistration', 17, 'authToken', '42291c805d5b8749897fa4f5d47ee43b16ce0afcae4f230786d325ab5536ba0c', '[\"*\"]', NULL, '2024-08-08 12:01:45', '2024-08-08 12:01:45'),
(216, 'App\\Models\\PatientRegistration', 17, 'authToken', '68ade4ebe9256c3a03aa9bbe2fd9fbade0de760a3bc58822c195b98bec9b821c', '[\"*\"]', NULL, '2024-08-08 12:04:03', '2024-08-08 12:04:03'),
(217, 'App\\Models\\PatientRegistration', 17, 'authToken', '17e4e0672ce271be18d4adb79a8f0362af7a6649032a0d8a6eacdafcc3e4432f', '[\"*\"]', NULL, '2024-08-08 12:09:08', '2024-08-08 12:09:08'),
(218, 'App\\Models\\PatientRegistration', 17, 'authToken', '44f68a642350c3bf78d7cb5fc91af10e6d388f5dc69488d14c991d53bd48504e', '[\"*\"]', NULL, '2024-08-08 12:11:58', '2024-08-08 12:11:58'),
(219, 'App\\Models\\PatientRegistration', 17, 'authToken', 'e3366952e4654552d24a80c25d7917be5c792fdde9c57862814fbe83a3ed924e', '[\"*\"]', NULL, '2024-08-08 12:14:04', '2024-08-08 12:14:04'),
(220, 'App\\Models\\PatientRegistration', 17, 'authToken', '94427ad726ef4d1a7469c65beb2a93821e67a6a846efd95a2426bd7831441124', '[\"*\"]', NULL, '2024-08-08 12:16:26', '2024-08-08 12:16:26'),
(221, 'App\\Models\\PatientRegistration', 17, 'authToken', 'a99fe1cce203ac93f83d5988f70fd2a908d19f29f460573c748393748345d230', '[\"*\"]', NULL, '2024-08-08 12:16:38', '2024-08-08 12:16:38'),
(222, 'App\\Models\\PatientRegistration', 17, 'authToken', '638723f96b6abf33fd8dc24f3bf58ddce28c39e47a6043841397f25c88a72780', '[\"*\"]', NULL, '2024-08-08 12:20:17', '2024-08-08 12:20:17'),
(223, 'App\\Models\\PatientRegistration', 17, 'authToken', '811df50715b99fcdb9fc25c0304c85300895d161b92fabc3fa4a81a5495ce6f3', '[\"*\"]', NULL, '2024-08-08 12:21:10', '2024-08-08 12:21:10'),
(224, 'App\\Models\\PatientRegistration', 17, 'authToken', 'b290683deb41e7676f43ae3dd69bac639dbaa4a512147f794976d386ea4eba67', '[\"*\"]', NULL, '2024-08-08 12:21:30', '2024-08-08 12:21:30'),
(225, 'App\\Models\\PatientRegistration', 17, 'authToken', '76731e12f9729de0db888019bc73ef2fe6286a409ffd1e677443467b8a49d20a', '[\"*\"]', NULL, '2024-08-08 12:21:53', '2024-08-08 12:21:53'),
(226, 'App\\Models\\PatientRegistration', 17, 'authToken', 'b6a8a4137d3c9892835158b7f51699e8c21b9e2505238eff2a11d9bc6a695d86', '[\"*\"]', NULL, '2024-08-08 12:22:54', '2024-08-08 12:22:54'),
(227, 'App\\Models\\PatientRegistration', 44, 'authToken', '59638996ede411636808e82791b66c1b4acacbc3d913755d9032e7707f0b1b69', '[\"*\"]', NULL, '2024-08-08 12:23:17', '2024-08-08 12:23:17'),
(228, 'App\\Models\\PatientRegistration', 17, 'authToken', '1f9b8756fa434c2f7bc1fc0b6337e023661a94c5d6ebc748b486e7ecfffa3681', '[\"*\"]', NULL, '2024-08-08 12:23:49', '2024-08-08 12:23:49'),
(229, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e8e7d8b52454bbd818a077f3a72ca65608aceb48d7e05fe7633ede571183dc12', '[\"*\"]', NULL, '2024-08-08 12:26:13', '2024-08-08 12:26:13'),
(230, 'App\\Models\\PatientRegistration', 17, 'authToken', '09710b794c458fa37637639fe8307c2b1521bb68c9b7c5c4ab345d0a3eef11a1', '[\"*\"]', NULL, '2024-08-08 12:26:26', '2024-08-08 12:26:26'),
(231, 'App\\Models\\PatientRegistration', 100, 'authToken', 'f10da58f919e178cd16687a907f389037c66f250d9a9c1621a72c66192a0765e', '[\"*\"]', NULL, '2024-08-08 12:29:07', '2024-08-08 12:29:07'),
(232, 'App\\Models\\PatientRegistration', 44, 'authToken', '08f56255a70e174fb348edda3727e77a0aaba2199140fd76d73397f55e842a87', '[\"*\"]', NULL, '2024-08-08 12:30:29', '2024-08-08 12:30:29'),
(233, 'App\\Models\\PatientRegistration', 44, 'authToken', 'cd4339ceb9b02a52ba151313c30493b5854b2832f7e1b5347dbf3bc1bebeb44b', '[\"*\"]', NULL, '2024-08-08 12:30:56', '2024-08-08 12:30:56'),
(234, 'App\\Models\\PatientRegistration', 20, 'authToken', 'a61d45cdff49f02bb1becdf1e8ed718bbdcfcb6b1fd3c65cf38c98fed8703b3f', '[\"*\"]', NULL, '2024-08-08 12:31:02', '2024-08-08 12:31:02'),
(235, 'App\\Models\\PatientRegistration', 44, 'authToken', '289c451cb6f19902bf75391b983d628be650cd4b0a93c19c7a410b5d10418966', '[\"*\"]', NULL, '2024-08-08 12:31:25', '2024-08-08 12:31:25'),
(236, 'App\\Models\\PatientRegistration', 20, 'authToken', '657103cf4cbc4c80aa70f22ab5ffb478a11c9bcc4d78e1640b471d27684dd8ec', '[\"*\"]', NULL, '2024-08-08 12:32:40', '2024-08-08 12:32:40'),
(237, 'App\\Models\\PatientRegistration', 20, 'authToken', 'aa19555390e533f9a5f5005b64329d4d65fdc059bc1ebbc1e9b8a33ec43890bc', '[\"*\"]', NULL, '2024-08-08 12:40:47', '2024-08-08 12:40:47'),
(238, 'App\\Models\\PatientRegistration', 17, 'authToken', 'da540d55cda0fcc8ae7b1de998d7336017994ecb65b8f856951359f0086bb5c2', '[\"*\"]', NULL, '2024-08-08 12:45:53', '2024-08-08 12:45:53'),
(239, 'App\\Models\\PatientRegistration', 17, 'authToken', 'fd51bf35f6d9a4fa54194919e05195d7a7facfa11e83ce766c4d3bc1e35b3a4f', '[\"*\"]', NULL, '2024-08-08 12:50:17', '2024-08-08 12:50:17'),
(240, 'App\\Models\\PatientRegistration', 17, 'authToken', '4ff2e89ec7ce668b0da2d9adf92e471495d3cdba1186df52d0dd4a593dde8091', '[\"*\"]', NULL, '2024-08-08 12:52:13', '2024-08-08 12:52:13'),
(241, 'App\\Models\\PatientRegistration', 102, 'authToken', '9dd24097e7fff7d1fcd5028da72fd95582ce5d666966fbf95f85908597aa870d', '[\"*\"]', NULL, '2024-08-08 13:09:34', '2024-08-08 13:09:34'),
(242, 'App\\Models\\PatientRegistration', 17, 'authToken', '81e6e6979705ef84dca2fe5a5ef337cfd39f7942004e346b603c22b9373bc410', '[\"*\"]', NULL, '2024-08-08 13:09:57', '2024-08-08 13:09:57'),
(243, 'App\\Models\\PatientRegistration', 102, 'authToken', 'd755f18100c15af594aa2c891f97e867d47e5af324b3c3872d8b59b92483b161', '[\"*\"]', NULL, '2024-08-08 13:12:19', '2024-08-08 13:12:19'),
(244, 'App\\Models\\PatientRegistration', 17, 'authToken', '5d2de2e4965b19363802c595eb3d9c80b5e3b41eb173676eb4f25ba68c166090', '[\"*\"]', NULL, '2024-08-08 14:01:29', '2024-08-08 14:01:29'),
(245, 'App\\Models\\PatientRegistration', 18, 'authToken', '21516474e6d2e25f280370ca3c61c43a37cc996329c72bde2ec61898811770e1', '[\"*\"]', NULL, '2024-08-08 14:13:43', '2024-08-08 14:13:43'),
(246, 'App\\Models\\PatientRegistration', 44, 'authToken', '27b932063734250239d468e0ea2f45ece9e750d512c27142ecb87a8c155d866a', '[\"*\"]', NULL, '2024-08-08 14:14:14', '2024-08-08 14:14:14'),
(247, 'App\\Models\\PatientRegistration', 44, 'authToken', '34173b833ec18b0ae1c51cb7f201d2a966b7d3554405001976139e0207b4fd45', '[\"*\"]', NULL, '2024-08-08 14:14:38', '2024-08-08 14:14:38'),
(248, 'App\\Models\\PatientRegistration', 44, 'authToken', '9b6816cdf6c4da642c15893878681b7ee60be2a30a24446c5b0602b3f2c2ae0b', '[\"*\"]', NULL, '2024-08-08 14:15:32', '2024-08-08 14:15:32'),
(249, 'App\\Models\\PatientRegistration', 44, 'authToken', '968009bb029d4ed775a6667c9099f0b4d46722a22b0dbd66a84d99a49dc7420e', '[\"*\"]', NULL, '2024-08-08 14:18:00', '2024-08-08 14:18:00'),
(250, 'App\\Models\\PatientRegistration', 18, 'authToken', '61ca00a6632e3556619ca3bf9d9db5f63bc58ad7f95b01bbdfc3b07936d958aa', '[\"*\"]', NULL, '2024-08-08 14:30:39', '2024-08-08 14:30:39'),
(251, 'App\\Models\\PatientRegistration', 17, 'authToken', '887c55809a7ce6c908f98789025ba05d2263168f2c07b96fc6d095366d034c3f', '[\"*\"]', NULL, '2024-08-08 14:54:28', '2024-08-08 14:54:28'),
(252, 'App\\Models\\PatientRegistration', 20, 'authToken', 'b47c279110ee59829d6c4064fd2f2c383b47e826d45593986b4435097c4ac884', '[\"*\"]', NULL, '2024-08-08 14:57:13', '2024-08-08 14:57:13'),
(253, 'App\\Models\\PatientRegistration', 18, 'authToken', '0a835772e2a1c75a5fcab2bd178b60ce65e1ab7a30fd4c07c4f1e96b71c3e733', '[\"*\"]', NULL, '2024-08-08 16:17:57', '2024-08-08 16:17:57'),
(254, 'App\\Models\\PatientRegistration', 18, 'authToken', 'b338ec241ecf3806ab13607284a161b70a13a160f5bb8341e2e7538768a7d0d5', '[\"*\"]', NULL, '2024-08-08 16:20:39', '2024-08-08 16:20:39'),
(255, 'App\\Models\\PatientRegistration', 44, 'authToken', 'cd0a90fcceb7aa9705938d557f44c2ed2053aa9272604cfae8ba9e8bc8e1c1c8', '[\"*\"]', NULL, '2024-08-08 17:00:22', '2024-08-08 17:00:22'),
(256, 'App\\Models\\PatientRegistration', 44, 'authToken', '5ad8b970071a9a3d01f99fd8dcaeb61aa354fecb5d725d020da905e56917306c', '[\"*\"]', NULL, '2024-08-08 17:06:39', '2024-08-08 17:06:39'),
(257, 'App\\Models\\PatientRegistration', 18, 'authToken', 'bb72a75a48fccaa6cae876ce387bb9abb997f87aea707481c1f28826d66b4233', '[\"*\"]', NULL, '2024-08-08 17:13:02', '2024-08-08 17:13:02'),
(258, 'App\\Models\\PatientRegistration', 44, 'authToken', '0857b8c61e127717108529973cd3116640ff0553cf96b1dad64d96c1c8df63b4', '[\"*\"]', NULL, '2024-08-09 09:49:08', '2024-08-09 09:49:08'),
(259, 'App\\Models\\PatientRegistration', 44, 'authToken', '497ca657a086d0cb9b807875752c6ebdd265ab6bf0d14004c2eea72467d08e47', '[\"*\"]', NULL, '2024-08-09 09:53:10', '2024-08-09 09:53:10'),
(260, 'App\\Models\\PatientRegistration', 44, 'authToken', '638e80c3e4233a3715af7f54802d9b86ad61ed272901771391519422292b97e7', '[\"*\"]', NULL, '2024-08-09 09:53:47', '2024-08-09 09:53:47'),
(261, 'App\\Models\\PatientRegistration', 44, 'authToken', '2c6da0eea813b70305a555b6b7ddcbc95b9e5ec756ca09163faf2c72f66c31ab', '[\"*\"]', NULL, '2024-08-09 10:00:52', '2024-08-09 10:00:52'),
(262, 'App\\Models\\PatientRegistration', 20, 'authToken', '089b207cc35cde507a119cf8eb7786d6b966b91b029fc4c7fed42377ea717271', '[\"*\"]', NULL, '2024-08-09 10:01:07', '2024-08-09 10:01:07'),
(263, 'App\\Models\\PatientRegistration', 44, 'authToken', '85c54c044432a0219a5a99fcb5c41eef52b8004c1b8f831845614a96a6109971', '[\"*\"]', NULL, '2024-08-09 10:01:34', '2024-08-09 10:01:34'),
(264, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd0c996a79e8ce6332e43a574add12855a4a9f5c58e36dbc5ea28c2503f6883d0', '[\"*\"]', NULL, '2024-08-09 10:02:33', '2024-08-09 10:02:33');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(265, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e6f3adf040fe258f7d65652a05316a89bfb02b55e7ce6e95d0fc2503f2ef3dde', '[\"*\"]', NULL, '2024-08-09 10:03:52', '2024-08-09 10:03:52'),
(266, 'App\\Models\\PatientRegistration', 44, 'authToken', '8245695907a0cb746841680e930f6bc7e70e8c1c1f9304088aaedb27e0046b74', '[\"*\"]', NULL, '2024-08-09 10:06:58', '2024-08-09 10:06:58'),
(267, 'App\\Models\\PatientRegistration', 44, 'authToken', 'fdd151270146a4edffe40c1483ee389cf16d612ceef0d206042a9ee5ad9308ff', '[\"*\"]', NULL, '2024-08-09 10:07:28', '2024-08-09 10:07:28'),
(268, 'App\\Models\\PatientRegistration', 44, 'authToken', 'aac438d790eb830c71c145c59cef340392e7fe0851daac586d03d88321f31a7b', '[\"*\"]', NULL, '2024-08-09 10:08:55', '2024-08-09 10:08:55'),
(269, 'App\\Models\\PatientRegistration', 44, 'authToken', 'c288a647310dff79da9025460b23091b44b79a0ac1a7efd8a6c84b7f2a3332e6', '[\"*\"]', NULL, '2024-08-09 10:55:04', '2024-08-09 10:55:04'),
(270, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a38965d35a99b17b6e50286aa8fb2e61a440ae44d32eb89274e50652b0826fb4', '[\"*\"]', NULL, '2024-08-09 10:59:49', '2024-08-09 10:59:49'),
(271, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b9e76f6c163e646dc820f11bf66fe73b056753531fc0e69ee242becc6b18939f', '[\"*\"]', NULL, '2024-08-09 11:01:13', '2024-08-09 11:01:13'),
(272, 'App\\Models\\PatientRegistration', 10, 'authToken', '0129e0648a1182aa9e153e006b4e9fb039f58627efa5037379eabb42642f9daf', '[\"*\"]', NULL, '2024-08-09 11:09:28', '2024-08-09 11:09:28'),
(273, 'App\\Models\\PatientRegistration', 44, 'authToken', '3c8646742db22343afd91ce131fb2bf7fa371f3c6c02d63b6007f2d30e1d6923', '[\"*\"]', NULL, '2024-08-09 11:09:41', '2024-08-09 11:09:41'),
(274, 'App\\Models\\PatientRegistration', 10, 'authToken', '33f2311c0eaacdec4614d6960443da94e703c06622e9eded07a068fa0e80d578', '[\"*\"]', NULL, '2024-08-09 11:11:10', '2024-08-09 11:11:10'),
(275, 'App\\Models\\PatientRegistration', 10, 'authToken', 'bdc3b4ae41e32ffaa0bf3582b19cf82599092cfa0629b1a96c3e3fcd5b8dc61c', '[\"*\"]', NULL, '2024-08-09 11:11:52', '2024-08-09 11:11:52'),
(276, 'App\\Models\\PatientRegistration', 10, 'authToken', '6266043214a63dc04a5d467c87ac4b48e20f099b6e70f0e55a5e66f184fd1559', '[\"*\"]', NULL, '2024-08-09 11:12:17', '2024-08-09 11:12:17'),
(277, 'App\\Models\\PatientRegistration', 10, 'authToken', '31cc8595f4569a89c69ab16b6517ce8e86b1c178f531542486b463a5570f9ff9', '[\"*\"]', NULL, '2024-08-09 11:13:41', '2024-08-09 11:13:41'),
(278, 'App\\Models\\PatientRegistration', 10, 'authToken', '82e557ff9a6fa4943a7a58bee08ea3ef82079930bc6db67e91e38d18ea2d533f', '[\"*\"]', NULL, '2024-08-09 11:14:07', '2024-08-09 11:14:07'),
(279, 'App\\Models\\PatientRegistration', 10, 'authToken', 'd6a03a123e50d76fd17007828672a58157b65da4cfaa4bf22023ff6bfa9eb227', '[\"*\"]', NULL, '2024-08-09 11:15:04', '2024-08-09 11:15:04'),
(280, 'App\\Models\\PatientRegistration', 44, 'authToken', 'da02e2fa2f964d8ced0599e57d5f257e9132f698fe37841d7d9c62d70d55c266', '[\"*\"]', NULL, '2024-08-09 11:21:15', '2024-08-09 11:21:15'),
(281, 'App\\Models\\PatientRegistration', 44, 'authToken', '0d5e436a02303cf7ba7178324eeddf048bd50f47f7a14abdc7eed3f3ca527787', '[\"*\"]', NULL, '2024-08-09 11:21:58', '2024-08-09 11:21:58'),
(282, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a1e7aa689b388aab32174515d54cd388a1fc951646a22932a8efa4bcdbc615e9', '[\"*\"]', NULL, '2024-08-09 11:24:27', '2024-08-09 11:24:27'),
(283, 'App\\Models\\PatientRegistration', 44, 'authToken', '7d5c74a21ade0ceff0f27d0d0466cfb80a599e1f36237949bedc3b3a36fe25f9', '[\"*\"]', NULL, '2024-08-09 11:24:51', '2024-08-09 11:24:51'),
(284, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b9fc5f302cde001fb64a1662c9c9e345d5572b130a8433b8cb9f39671d2b3d41', '[\"*\"]', NULL, '2024-08-09 11:27:06', '2024-08-09 11:27:06'),
(285, 'App\\Models\\PatientRegistration', 10, 'authToken', 'f9012ef0056e5a84a1a7c364647c58f7055111bec6d95acba09dbf39b5decac2', '[\"*\"]', NULL, '2024-08-09 11:27:56', '2024-08-09 11:27:56'),
(286, 'App\\Models\\PatientRegistration', 10, 'authToken', '443686e6a444cd49f26dde8a93407b6bcf4df37074be9414f139d33efc1bbe7f', '[\"*\"]', NULL, '2024-08-09 11:28:46', '2024-08-09 11:28:46'),
(287, 'App\\Models\\PatientRegistration', 10, 'authToken', '8062e71d5646897a65555e31a9448bec2893b4d2171836110c367843f6e7e6f7', '[\"*\"]', NULL, '2024-08-09 11:29:19', '2024-08-09 11:29:19'),
(288, 'App\\Models\\PatientRegistration', 10, 'authToken', 'dd2662e8a10e5c55f31be1efb791cd35383167695de90eebbc11bc90b46ed603', '[\"*\"]', NULL, '2024-08-09 11:30:04', '2024-08-09 11:30:04'),
(289, 'App\\Models\\PatientRegistration', 10, 'authToken', '49654799f96b0f1fa530b7037498630e503edc20c63e45911e21d3852ec76580', '[\"*\"]', NULL, '2024-08-09 11:30:33', '2024-08-09 11:30:33'),
(290, 'App\\Models\\PatientRegistration', 10, 'authToken', '30f310df6f4a179670631b733444d3b815946c4a78e0992111f46465c119feeb', '[\"*\"]', NULL, '2024-08-09 11:31:00', '2024-08-09 11:31:00'),
(291, 'App\\Models\\PatientRegistration', 10, 'authToken', '78557332f40b3c66b00c89b68b1c40567471a3e0ab182f7d94299760d4e547ed', '[\"*\"]', NULL, '2024-08-09 11:31:26', '2024-08-09 11:31:26'),
(292, 'App\\Models\\PatientRegistration', 10, 'authToken', '1ba913a7a39659806e117101b8942e41d8279e3a2b913acedbcb72f732e133c5', '[\"*\"]', NULL, '2024-08-09 11:32:22', '2024-08-09 11:32:22'),
(293, 'App\\Models\\PatientRegistration', 10, 'authToken', 'abc4639b50eee1edcefa93d9baa50ce0d011f7bcfe053ea116f5ff0501e13137', '[\"*\"]', NULL, '2024-08-09 11:36:29', '2024-08-09 11:36:29'),
(294, 'App\\Models\\PatientRegistration', 10, 'authToken', '9d971f76df945c3969a290f9ae3a8d4b13f15a926e49f91672546e433589612d', '[\"*\"]', NULL, '2024-08-09 11:38:16', '2024-08-09 11:38:16'),
(295, 'App\\Models\\PatientRegistration', 10, 'authToken', 'ef83c5203210508260b60ccad2f11427604063c1ec1ab5aa1d0d34276ff3c00f', '[\"*\"]', NULL, '2024-08-09 11:38:36', '2024-08-09 11:38:36'),
(296, 'App\\Models\\PatientRegistration', 10, 'authToken', 'f816466b5883f2eac64dd580d9c85ff4f5508ca2b5b755f7d23add7985385176', '[\"*\"]', NULL, '2024-08-09 11:39:50', '2024-08-09 11:39:50'),
(297, 'App\\Models\\PatientRegistration', 10, 'authToken', '9c597a162cfd5982117499584ba53582862ec9433a1de25743415c202b6c0ca8', '[\"*\"]', NULL, '2024-08-09 11:40:20', '2024-08-09 11:40:20'),
(298, 'App\\Models\\PatientRegistration', 10, 'authToken', '77349645d4b0db6b265dc3031272b902aa18d9c8cdb01f88135673599efb1eb3', '[\"*\"]', NULL, '2024-08-09 11:44:30', '2024-08-09 11:44:30'),
(299, 'App\\Models\\PatientRegistration', 10, 'authToken', '762da1352bddf283f311ecc53dd71a0469250e47f60adfd19f90546363e60367', '[\"*\"]', NULL, '2024-08-09 11:45:03', '2024-08-09 11:45:03'),
(300, 'App\\Models\\PatientRegistration', 10, 'authToken', '7037681a4791de5e8ca6058dc45f71c9ccf6389ab7cdfca3cca15d289622f795', '[\"*\"]', NULL, '2024-08-09 11:45:54', '2024-08-09 11:45:54'),
(301, 'App\\Models\\PatientRegistration', 10, 'authToken', '78d5cb202a8b5b2fde3b9309e2c54ee05e982604f14a3009bbbd35ef2f364597', '[\"*\"]', NULL, '2024-08-09 11:46:35', '2024-08-09 11:46:35'),
(302, 'App\\Models\\PatientRegistration', 10, 'authToken', 'fdfdc1cd2a81a2682d55ed6b0c0b236f70502e079827a161701600d903ec431f', '[\"*\"]', NULL, '2024-08-09 11:46:47', '2024-08-09 11:46:47'),
(303, 'App\\Models\\PatientRegistration', 10, 'authToken', '19868844d1b49a6cfa77841180fab805d9d0181718794f7fbfaefe5b9d8c4343', '[\"*\"]', NULL, '2024-08-09 11:47:09', '2024-08-09 11:47:09'),
(304, 'App\\Models\\PatientRegistration', 44, 'authToken', 'd5af42e293d23da1fe2ae6bd59491e83e20c833d1527817f2663aeccf546ddf6', '[\"*\"]', NULL, '2024-08-09 11:51:34', '2024-08-09 11:51:34'),
(305, 'App\\Models\\PatientRegistration', 10, 'authToken', '19c79aa4a791e7c509dd79752cc8d28500706d9fea612f85baeabef626c97f88', '[\"*\"]', NULL, '2024-08-09 11:53:28', '2024-08-09 11:53:28'),
(306, 'App\\Models\\PatientRegistration', 10, 'authToken', '494c24c3214d832d28da103aa051d68db846e42d7a0565ccef7b8d8de91498f2', '[\"*\"]', NULL, '2024-08-09 11:55:11', '2024-08-09 11:55:11'),
(307, 'App\\Models\\PatientRegistration', 10, 'authToken', 'fdfbeb8552704742ca45e976d7c2c692c7da037fe3962551f22a3e1db9089b41', '[\"*\"]', NULL, '2024-08-09 11:57:48', '2024-08-09 11:57:48'),
(308, 'App\\Models\\PatientRegistration', 44, 'authToken', '2d424049c50e09ce6251bfb8a067c1a069885991ce8dfcd8e6104ce6c58863c2', '[\"*\"]', NULL, '2024-08-09 12:01:46', '2024-08-09 12:01:46'),
(309, 'App\\Models\\PatientRegistration', 18, 'authToken', '5be4163cc6ae51e6828f95b0f4cf2295eb7cb22623e8d46c759fa7f8e8586ab3', '[\"*\"]', NULL, '2024-08-09 12:05:24', '2024-08-09 12:05:24'),
(310, 'App\\Models\\PatientRegistration', 18, 'authToken', '3ce75d9ff3913b399bde44796d95a43f9091abec3e0098f929513419b85e1dbb', '[\"*\"]', NULL, '2024-08-09 12:05:28', '2024-08-09 12:05:28'),
(311, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b24fafa3af8ae5d96e143f5d66ee6002c65891e3c703c26853bfc8e75db560d7', '[\"*\"]', NULL, '2024-08-09 12:05:34', '2024-08-09 12:05:34'),
(312, 'App\\Models\\PatientRegistration', 44, 'authToken', 'da835d22e339e6c14e378b64b9e61a3239f75a9424dfda09da1d661d919623d3', '[\"*\"]', NULL, '2024-08-09 12:05:37', '2024-08-09 12:05:37'),
(313, 'App\\Models\\PatientRegistration', 44, 'authToken', '6cf5f2ab524b71f99c215abab04d6d1e0dd38cc979dff3f6eef0e386338c1561', '[\"*\"]', NULL, '2024-08-09 12:05:57', '2024-08-09 12:05:57'),
(314, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b49f1ab3a4d727e703ec49b50d4ea5fe2d885b2a4ee87a4aab1b38510195cea1', '[\"*\"]', NULL, '2024-08-09 12:06:17', '2024-08-09 12:06:17'),
(315, 'App\\Models\\PatientRegistration', 44, 'authToken', 'eee419c69dd8da7177514f0108bed0ed30456d727ec64b0a046ceee02d9bd5e0', '[\"*\"]', NULL, '2024-08-09 12:09:09', '2024-08-09 12:09:09'),
(316, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c7919a91f881ce465baf8330ab6834feaa5de9e44538e2b48ed2085a9e95b696', '[\"*\"]', NULL, '2024-08-09 15:36:30', '2024-08-09 15:36:30'),
(317, 'App\\Models\\PatientRegistration', 10, 'authToken', '018896d102ba53e69b47b2cf041df901b5e06127cc836fb7e783aa7432dc486f', '[\"*\"]', NULL, '2024-08-09 15:36:58', '2024-08-09 15:36:58'),
(318, 'App\\Models\\PatientRegistration', 25, 'authToken', 'a50255e7942b4a85e4f1f25f4150d4cd40c652102757fe2ff83749e68e2779e3', '[\"*\"]', NULL, '2024-08-09 15:37:12', '2024-08-09 15:37:12'),
(319, 'App\\Models\\PatientRegistration', 25, 'authToken', '8dc6c23ec9a600d3e4c57477997ee19adb44a12f37e41fcc6dfd5db200903dba', '[\"*\"]', NULL, '2024-08-09 15:37:37', '2024-08-09 15:37:37'),
(320, 'App\\Models\\PatientRegistration', 25, 'authToken', '729fab4dd7c779495d9bd971b3b9e73708cd9d5818c89c8e9c544e7a3043eb5a', '[\"*\"]', NULL, '2024-08-09 15:38:39', '2024-08-09 15:38:39'),
(321, 'App\\Models\\PatientRegistration', 10, 'authToken', '5be4b07d45e6fa34885cb5d9fac17ba8d6a8c16afe8b108ffe333d2c214b7629', '[\"*\"]', NULL, '2024-08-09 15:41:29', '2024-08-09 15:41:29'),
(322, 'App\\Models\\PatientRegistration', 25, 'authToken', 'af6ac6bd088e93e6e114caf7a3713017d72e81fcdbf58a8b221017bed03cf724', '[\"*\"]', NULL, '2024-08-09 15:49:22', '2024-08-09 15:49:22'),
(323, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ca53d6c6b1884326470b2293bdf81a9b9daeb030dacba92a3e1c8c712d07d67d', '[\"*\"]', NULL, '2024-08-09 15:50:17', '2024-08-09 15:50:17'),
(324, 'App\\Models\\PatientRegistration', 44, 'authToken', '35373c86c83b4237c3cf8b5b823e66bcdd6b95e3c89622bd03363c0c11085dcb', '[\"*\"]', NULL, '2024-08-09 16:30:39', '2024-08-09 16:30:39'),
(325, 'App\\Models\\PatientRegistration', 44, 'authToken', '48dc936ee0e7eeccf330f98351e61313f640ccb00a73efc4797ebcc0bf191348', '[\"*\"]', NULL, '2024-08-09 16:53:32', '2024-08-09 16:53:32'),
(326, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a94b0870c26a8c28755829ef4ce253974d77baf89d79e05080e87b2c2cc970b1', '[\"*\"]', NULL, '2024-08-09 16:54:04', '2024-08-09 16:54:04'),
(327, 'App\\Models\\PatientRegistration', 18, 'authToken', '4ef0a7a8f0ad2db82640b5dab7468aca5352e66705737770e6747b41580d8120', '[\"*\"]', NULL, '2024-08-09 16:56:12', '2024-08-09 16:56:12'),
(328, 'App\\Models\\PatientRegistration', 25, 'authToken', '9e7f3f0a33b4589f2d640533ad3706bb6b147c075d644f4024edc634e60ae743', '[\"*\"]', NULL, '2024-08-09 16:57:06', '2024-08-09 16:57:06'),
(329, 'App\\Models\\PatientRegistration', 25, 'authToken', '95a095241c0344a36ea17e7a6fa02971bb7592b82fff4d48884129507f8792de', '[\"*\"]', NULL, '2024-08-09 17:02:23', '2024-08-09 17:02:23'),
(330, 'App\\Models\\PatientRegistration', 25, 'authToken', '96a2a5714de3fdfa32bfd2fb76335271881121cdc25108b85dd3611a7df74030', '[\"*\"]', NULL, '2024-08-09 17:10:38', '2024-08-09 17:10:38'),
(331, 'App\\Models\\PatientRegistration', 25, 'authToken', '7c4bc7b7726ea6e6a9ef28e7accb8670b6b9a74fc8f836b7ff53f7ed623af400', '[\"*\"]', NULL, '2024-08-09 17:12:13', '2024-08-09 17:12:13'),
(332, 'App\\Models\\PatientRegistration', 25, 'authToken', '2566ca0a22b62a35545a563acde0ddc6b16e697f0929b7b29faf1b0ab8206e20', '[\"*\"]', NULL, '2024-08-09 17:24:20', '2024-08-09 17:24:20'),
(333, 'App\\Models\\PatientRegistration', 25, 'authToken', '26b6ba48e2dd70c654c8e3d016c551121297dbd11af411de861c1e7835af8ce5', '[\"*\"]', NULL, '2024-08-09 17:25:08', '2024-08-09 17:25:08'),
(334, 'App\\Models\\PatientRegistration', 25, 'authToken', 'a9d7762380006e537233d15e7dd4de2c731491fc8beac80fe0fb6a19eb21f7ca', '[\"*\"]', NULL, '2024-08-09 17:26:29', '2024-08-09 17:26:29'),
(335, 'App\\Models\\PatientRegistration', 25, 'authToken', '012b8ef2987e9953c98aececcc435613ce1a932b80491762010ac201110e97e6', '[\"*\"]', NULL, '2024-08-09 17:26:39', '2024-08-09 17:26:39'),
(336, 'App\\Models\\PatientRegistration', 25, 'authToken', '184f403d281f3bd5d46f7bf15cd0541cb93cd715991181b6d0a04b96ac26806c', '[\"*\"]', NULL, '2024-08-09 17:27:00', '2024-08-09 17:27:00'),
(337, 'App\\Models\\PatientRegistration', 25, 'authToken', '8747f3b4c692afc2115f4ad61e999c4a2fff5fed2d57fec6c7fdc2da04dee397', '[\"*\"]', NULL, '2024-08-09 17:27:16', '2024-08-09 17:27:16'),
(338, 'App\\Models\\PatientRegistration', 25, 'authToken', '36c488724cf046e6d860458341c422c0ebe47a08aa5c888ab81923338e90958e', '[\"*\"]', NULL, '2024-08-09 17:29:02', '2024-08-09 17:29:02'),
(339, 'App\\Models\\PatientRegistration', 25, 'authToken', '385245e538f940222d7aed1b7987d1393cac4890f085f48dfa309fe51f09c353', '[\"*\"]', NULL, '2024-08-09 17:31:06', '2024-08-09 17:31:06'),
(340, 'App\\Models\\PatientRegistration', 25, 'authToken', '2af81822f293d466238b5613537010f04a9057795c82ea563358d45c481feb6a', '[\"*\"]', NULL, '2024-08-09 17:32:13', '2024-08-09 17:32:13'),
(341, 'App\\Models\\PatientRegistration', 25, 'authToken', '01e13f841b02f9f9d257c78d2e70908f7587c99f55b219f2163793001877daf6', '[\"*\"]', NULL, '2024-08-09 17:54:35', '2024-08-09 17:54:35'),
(342, 'App\\Models\\PatientRegistration', 25, 'authToken', '38a78144f6f799f4ae4ea402300681807e6a572c622675a8e848b2a70aea818e', '[\"*\"]', NULL, '2024-08-09 17:55:15', '2024-08-09 17:55:15'),
(343, 'App\\Models\\PatientRegistration', 25, 'authToken', '68c308b5952911b53c6b1d100a00cac0e9924ce71b06fb98f037137d20d7b743', '[\"*\"]', NULL, '2024-08-09 17:55:27', '2024-08-09 17:55:27'),
(344, 'App\\Models\\PatientRegistration', 17, 'authToken', '1c47ad6c5e3f2515971cdb3dce305aabcc31e1a3fa3248a4b4424b1f22896bee', '[\"*\"]', NULL, '2024-08-09 22:33:49', '2024-08-09 22:33:49'),
(345, 'App\\Models\\PatientRegistration', 44, 'authToken', '01f5e9ce8571ca3b067c6fee61eae07f1e37f90eb1e5ed544b191a468caeaeda', '[\"*\"]', NULL, '2024-08-10 00:05:12', '2024-08-10 00:05:12'),
(346, 'App\\Models\\PatientRegistration', 44, 'authToken', 'd4e56a5ac0661595f68baf71a849f2d5bc2266bf35a7174d499997e7c581dc5a', '[\"*\"]', NULL, '2024-08-10 00:08:35', '2024-08-10 00:08:35'),
(347, 'App\\Models\\PatientRegistration', 44, 'authToken', '28f6b20ef30d0533a4b8bff59bf599e7dc46e522a59b4a3201d827d3c2c60cbc', '[\"*\"]', NULL, '2024-08-10 00:13:12', '2024-08-10 00:13:12'),
(348, 'App\\Models\\PatientRegistration', 112, 'authToken', 'bec84e8b33bb8153b99e80ca0f510d3fc31152bbb528c074295b52afe799c06a', '[\"*\"]', NULL, '2024-08-10 09:07:18', '2024-08-10 09:07:18'),
(349, 'App\\Models\\PatientRegistration', 112, 'authToken', '3d2f9e874fe1f3fced7a9003635aac420ac63beea6ef9fa4b25459b413cd9827', '[\"*\"]', NULL, '2024-08-10 09:09:26', '2024-08-10 09:09:26'),
(350, 'App\\Models\\PatientRegistration', 112, 'authToken', '3b2075887145d43f4a4142141007af39115b8a75764d0521c66c9c476db07421', '[\"*\"]', NULL, '2024-08-10 09:10:27', '2024-08-10 09:10:27'),
(351, 'App\\Models\\PatientRegistration', 112, 'authToken', '651de97146c3173edacab3ee0563f96de8ed8aaecf8605c08971681f85a1c0a9', '[\"*\"]', NULL, '2024-08-10 09:10:42', '2024-08-10 09:10:42'),
(352, 'App\\Models\\PatientRegistration', 112, 'authToken', '335be389eea69dfcea4963f70dc99740a64caf618c8fa97b6d512d52657677b4', '[\"*\"]', NULL, '2024-08-10 09:11:03', '2024-08-10 09:11:03'),
(353, 'App\\Models\\PatientRegistration', 112, 'authToken', 'e48d7614ee9e8e3ff20e0f594442d81cb2e0147140bf990450074b04ee467159', '[\"*\"]', NULL, '2024-08-10 09:11:12', '2024-08-10 09:11:12'),
(354, 'App\\Models\\PatientRegistration', 112, 'authToken', 'f8e40fb9111cc15e8f121fb61731ab77989872a6612999608df2fd4db2f192e8', '[\"*\"]', NULL, '2024-08-10 09:13:45', '2024-08-10 09:13:45'),
(355, 'App\\Models\\PatientRegistration', 102, 'authToken', '1a86c5a3d38733c76c2828e162362e9e37421b18ad82d3fa2e100a88deaf9b9a', '[\"*\"]', NULL, '2024-08-10 11:28:47', '2024-08-10 11:28:47'),
(356, 'App\\Models\\PatientRegistration', 102, 'authToken', '885047f5156302f15ca30707309c826e297b9b45a72d651e7590f325228330ca', '[\"*\"]', NULL, '2024-08-10 11:29:28', '2024-08-10 11:29:28'),
(357, 'App\\Models\\PatientRegistration', 102, 'authToken', 'c23e09dc3641b7a7ebc28f1a090428e785c5fe8285dccb7c22b6a2a7f9c5d4ae', '[\"*\"]', NULL, '2024-08-10 11:30:30', '2024-08-10 11:30:30'),
(358, 'App\\Models\\PatientRegistration', 102, 'authToken', 'a4cd84987a143bc59090281cd2f7384ea44f3669e7fc53384fac6c3216a123f9', '[\"*\"]', NULL, '2024-08-10 11:31:12', '2024-08-10 11:31:12'),
(359, 'App\\Models\\PatientRegistration', 102, 'authToken', '1635c16d96daafcb7c2954d133dffa524c85c0ca671b282a3f3d06c69a2713c3', '[\"*\"]', NULL, '2024-08-10 11:31:33', '2024-08-10 11:31:33'),
(360, 'App\\Models\\PatientRegistration', 102, 'authToken', 'f7b0fb5bc969d95eb51ec2b6fd72a634bb79cd48afef13b4f507f0cbd9d99d4b', '[\"*\"]', NULL, '2024-08-10 11:33:50', '2024-08-10 11:33:50'),
(361, 'App\\Models\\PatientRegistration', 102, 'authToken', 'fd566444b42253c0d2af29c0f6a5a8fdb0f34f254aa95988d333953a57a50cf5', '[\"*\"]', NULL, '2024-08-10 11:37:12', '2024-08-10 11:37:12'),
(362, 'App\\Models\\PatientRegistration', 102, 'authToken', '49adbd301604949c01e3247d2d2ea726042b11fa08867249eaf3a214d2f34d4b', '[\"*\"]', NULL, '2024-08-10 11:39:00', '2024-08-10 11:39:00'),
(363, 'App\\Models\\PatientRegistration', 102, 'authToken', '6f0a1a7a229de07f13823a06c635932aa7e931d3b7b5a028595913c676e34916', '[\"*\"]', NULL, '2024-08-10 11:52:57', '2024-08-10 11:52:57'),
(364, 'App\\Models\\PatientRegistration', 102, 'authToken', '59f89259a49a7e7d399c588b524f5277205153af3d3bc10a83ca382e3064f7a8', '[\"*\"]', NULL, '2024-08-10 11:55:22', '2024-08-10 11:55:22'),
(365, 'App\\Models\\PatientRegistration', 102, 'authToken', 'e7246342b82552e6c5185d98026fa674319938e0de4acfea6dd184a493ce8489', '[\"*\"]', NULL, '2024-08-10 18:04:50', '2024-08-10 18:04:50'),
(366, 'App\\Models\\PatientRegistration', 102, 'authToken', 'd019363c5f85fd075bf804cb1fbcd1b5d0a5d874bd1e50c5988c253124b89a5b', '[\"*\"]', NULL, '2024-08-10 18:06:21', '2024-08-10 18:06:21'),
(367, 'App\\Models\\PatientRegistration', 102, 'authToken', 'eaf032213734814a2314de3126c04433ba68d0c21221f4ee3f77458986e39f2f', '[\"*\"]', NULL, '2024-08-10 18:07:13', '2024-08-10 18:07:13'),
(368, 'App\\Models\\PatientRegistration', 112, 'authToken', '5156be144b0ccd33670c6a6a45af3890482c16f563cbbe65c064af2788662983', '[\"*\"]', NULL, '2024-08-11 12:15:18', '2024-08-11 12:15:18'),
(369, 'App\\Models\\PatientRegistration', 44, 'authToken', '64a8318d2f1e6d5c41dcfd8b3b20459fdc0a2781685a50af6b29c00f141bc6c1', '[\"*\"]', NULL, '2024-08-11 12:40:21', '2024-08-11 12:40:21'),
(370, 'App\\Models\\PatientRegistration', 100, 'authToken', 'bef1225cade83c87eedd0ee311c1f99116f7593e3c7e778612233045ea750f99', '[\"*\"]', NULL, '2024-08-11 13:07:36', '2024-08-11 13:07:36'),
(371, 'App\\Models\\PatientRegistration', 100, 'authToken', '567e6cd17230ef42b6319ba6f71d6f779f955d2faf7b64d40a99f8b6213f9a3d', '[\"*\"]', NULL, '2024-08-11 13:12:13', '2024-08-11 13:12:13'),
(372, 'App\\Models\\PatientRegistration', 18, 'authToken', '85d7d7d487cacfdc34279794d71f87315df20334b7fdb5962764d30435d72754', '[\"*\"]', NULL, '2024-08-11 13:13:01', '2024-08-11 13:13:01'),
(373, 'App\\Models\\PatientRegistration', 100, 'authToken', 'bd18d5e0dd1851490c5d8c181ffba444287145aecbc9844f415f32b63acc686c', '[\"*\"]', NULL, '2024-08-11 13:13:31', '2024-08-11 13:13:31'),
(374, 'App\\Models\\PatientRegistration', 25, 'authToken', 'f9abed062844fbb7e73a82f76e228d910d6284d537b9bbb71a85006b8098391a', '[\"*\"]', NULL, '2024-08-11 14:26:54', '2024-08-11 14:26:54'),
(375, 'App\\Models\\PatientRegistration', 25, 'authToken', 'af7b5edaa1587ee07ae6d5555506edfc2563ff8b1c5e46a9f8c3de3d0ee29643', '[\"*\"]', NULL, '2024-08-11 14:27:58', '2024-08-11 14:27:58'),
(376, 'App\\Models\\PatientRegistration', 25, 'authToken', 'be82f5ad0ea7306c635967a53a5054e6b6ab8cfbe80b39f06c090e3e4709c86e', '[\"*\"]', NULL, '2024-08-11 14:29:44', '2024-08-11 14:29:44'),
(377, 'App\\Models\\PatientRegistration', 25, 'authToken', '7c4f10b2ccb5fd78dedeab4b1b1c693f5b2b63a9d87656c25605f49eebf84817', '[\"*\"]', NULL, '2024-08-11 14:30:41', '2024-08-11 14:30:41'),
(378, 'App\\Models\\PatientRegistration', 25, 'authToken', '9efc3e953e6e2cc56f79c0838fbec61ea3efbac390076d41fb2fcbd7dbeb2803', '[\"*\"]', NULL, '2024-08-11 14:35:21', '2024-08-11 14:35:21'),
(379, 'App\\Models\\PatientRegistration', 114, 'authToken', '3dd9e385a60e82cd509088851f09541767aed0932c08c22db44c954c4cf7ed9f', '[\"*\"]', NULL, '2024-08-11 14:56:15', '2024-08-11 14:56:15'),
(380, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ccea238188fab03a25ae6447c08bcc0cc8569aed34ba06863abd625b6cb5b544', '[\"*\"]', NULL, '2024-08-11 15:08:23', '2024-08-11 15:08:23'),
(381, 'App\\Models\\PatientRegistration', 25, 'authToken', 'fd26be7993ff39e0778f0dd79d2e1ef9b7a578eade74d2b574baf739ef80e8e9', '[\"*\"]', NULL, '2024-08-11 15:09:07', '2024-08-11 15:09:07'),
(382, 'App\\Models\\PatientRegistration', 25, 'authToken', 'c0433d558ad2985d1ab358222797a9a44ba6bafa1f85f021b60203c80313baff', '[\"*\"]', NULL, '2024-08-11 15:09:22', '2024-08-11 15:09:22'),
(383, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ce9cae940071d2e65e548171f58b7eab1e751780681ce48c353ee756b2f38667', '[\"*\"]', NULL, '2024-08-11 15:10:48', '2024-08-11 15:10:48'),
(384, 'App\\Models\\PatientRegistration', 25, 'authToken', '42fd9f5df7e561ffeb2445281dcd5ddbb78951725c78a463b40d61138e214d3f', '[\"*\"]', NULL, '2024-08-11 15:11:09', '2024-08-11 15:11:09'),
(385, 'App\\Models\\PatientRegistration', 25, 'authToken', 'b5953b76d26bf4682fe251058dd21e70ad1f04b89c0de0ef573f3390b8706027', '[\"*\"]', NULL, '2024-08-11 15:11:36', '2024-08-11 15:11:36'),
(386, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e6011bd303118c0a5fe9f757bb6f3af7d426cfe9770aa57938b8c5f61ac9fd69', '[\"*\"]', NULL, '2024-08-11 15:12:17', '2024-08-11 15:12:17'),
(387, 'App\\Models\\PatientRegistration', 25, 'authToken', '1f061abc988fad962c9d147dd6d84e0a2ccfaedf5daa723619d223f8506211e7', '[\"*\"]', NULL, '2024-08-11 15:12:17', '2024-08-11 15:12:17'),
(388, 'App\\Models\\PatientRegistration', 25, 'authToken', '50633813dd799e861434ef149511449b8360fcf756624b0c68b6c2a34d30afed', '[\"*\"]', NULL, '2024-08-11 15:12:42', '2024-08-11 15:12:42'),
(389, 'App\\Models\\PatientRegistration', 25, 'authToken', '7d1adcf1ca3be74afe565823830017b3380b7ab141dad2640fdc667585f84249', '[\"*\"]', NULL, '2024-08-11 15:13:23', '2024-08-11 15:13:23'),
(390, 'App\\Models\\PatientRegistration', 25, 'authToken', '03f5b7805944cb237849b07171d33f4c0f998ffc3943db122834b45f497068ff', '[\"*\"]', NULL, '2024-08-11 15:13:47', '2024-08-11 15:13:47'),
(391, 'App\\Models\\PatientRegistration', 25, 'authToken', '7fa3f4610e726b06c3ca4a827de033832742c9e844626ca690b602067f5a9033', '[\"*\"]', NULL, '2024-08-11 15:14:25', '2024-08-11 15:14:25'),
(392, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd8443edea319644fe9db94429f44458cbe8d25d8c3707dc259e8b18c922c6dae', '[\"*\"]', NULL, '2024-08-11 18:01:49', '2024-08-11 18:01:49'),
(393, 'App\\Models\\PatientRegistration', 25, 'authToken', '6543028f255f4f5b9695d9388081e93c256b1feaaec791ee3177f0a82abc17a0', '[\"*\"]', NULL, '2024-08-11 18:18:18', '2024-08-11 18:18:18'),
(394, 'App\\Models\\PatientRegistration', 25, 'authToken', '2d15fd23ccf1dfd02b6efe5cb0977cbf710a790f9d69b3a2c2e0e5d22309db3a', '[\"*\"]', NULL, '2024-08-11 18:18:42', '2024-08-11 18:18:42'),
(395, 'App\\Models\\PatientRegistration', 25, 'authToken', '5d959a3d4d88ff775f6c10d92e7d5157312bbe4dbc8589d02eaf03db73683e8c', '[\"*\"]', NULL, '2024-08-11 18:22:20', '2024-08-11 18:22:20'),
(396, 'App\\Models\\PatientRegistration', 25, 'authToken', '8379ca46f5562eac3af8de3e64900227227e4037ec0b1ae093600bf0534440db', '[\"*\"]', NULL, '2024-08-11 18:22:33', '2024-08-11 18:22:33'),
(397, 'App\\Models\\PatientRegistration', 25, 'authToken', '57060ba30970a281788b69887bad758fb6f1d6923bc4e6b614ae8083f8e68143', '[\"*\"]', NULL, '2024-08-11 18:23:24', '2024-08-11 18:23:24'),
(398, 'App\\Models\\PatientRegistration', 44, 'authToken', '6498000f2ae112cc63512d59864302c50d7657e818397095cc70a9fb70b66bd6', '[\"*\"]', NULL, '2024-08-11 18:43:34', '2024-08-11 18:43:34'),
(399, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b3fae38defbbd38fe4aa21645db6b92bb9bc3a077a11c3aab39f77cfdf2a1736', '[\"*\"]', NULL, '2024-08-11 18:44:16', '2024-08-11 18:44:16'),
(400, 'App\\Models\\PatientRegistration', 44, 'authToken', '0f77367f24b99a0c3c15654e22d3c8f1dd2b1de6c3590801ac3f371725e9ec31', '[\"*\"]', NULL, '2024-08-11 18:44:58', '2024-08-11 18:44:58'),
(401, 'App\\Models\\PatientRegistration', 100, 'authToken', 'fc33a80b959a7d7bbc716e3929963e370e735c71e53aee591c5c67de41059021', '[\"*\"]', NULL, '2024-08-11 18:45:50', '2024-08-11 18:45:50'),
(402, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b1d52d388c547ba573368c0c737c67951e284217064beb3c929be4ca1116cf15', '[\"*\"]', NULL, '2024-08-11 18:49:44', '2024-08-11 18:49:44'),
(403, 'App\\Models\\PatientRegistration', 25, 'authToken', '854e0dce6e5a8dd54c659060dc383d19aeee771681b10eeb60f8c5beeb49708e', '[\"*\"]', NULL, '2024-08-11 23:39:39', '2024-08-11 23:39:39'),
(404, 'App\\Models\\PatientRegistration', 25, 'authToken', '8c7da9c950a0e270c1186d8c6ce9314457e1eb3751886d3413d8f15798739ebc', '[\"*\"]', NULL, '2024-08-12 09:59:58', '2024-08-12 09:59:58'),
(405, 'App\\Models\\PatientRegistration', 25, 'authToken', 'c111df0df81b2aedacbadf6f8db53bf9861a38fe32fea0c0b40f3d6e9c10552c', '[\"*\"]', NULL, '2024-08-12 10:21:35', '2024-08-12 10:21:35'),
(406, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a7a5afd3935a4a6f6a4d76687bd2dadb6dfc6c2b4174cdc00c33646aae62f8c8', '[\"*\"]', NULL, '2024-08-12 10:32:46', '2024-08-12 10:32:46'),
(407, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e46d7dd671d567c454ea7ca101223555aafc521da4d06fd94c5baba0246295b7', '[\"*\"]', NULL, '2024-08-12 10:38:36', '2024-08-12 10:38:36'),
(408, 'App\\Models\\PatientRegistration', 100, 'authToken', 'c89c9f0a5fc34b722af3e93cb76d50b20c90010519012fcef23d73b87a2fa406', '[\"*\"]', NULL, '2024-08-12 10:42:00', '2024-08-12 10:42:00'),
(409, 'App\\Models\\PatientRegistration', 25, 'authToken', 'a287ca1e6a9cd7ef2de2ee7a220e89d4f078df794020338b02c172da6bc69c84', '[\"*\"]', NULL, '2024-08-12 10:55:30', '2024-08-12 10:55:30'),
(410, 'App\\Models\\PatientRegistration', 25, 'authToken', '31dfa97026a7fc689584f6617599b476bf126b9d365c015da591287cea236578', '[\"*\"]', NULL, '2024-08-12 10:55:59', '2024-08-12 10:55:59'),
(411, 'App\\Models\\PatientRegistration', 100, 'authToken', 'c89713a4c1f27589e96a2dc580e19eec4ee813a30b0d028fc372bea49124ef84', '[\"*\"]', NULL, '2024-08-12 11:23:26', '2024-08-12 11:23:26'),
(412, 'App\\Models\\PatientRegistration', 20, 'authToken', '6a9563b213e585a85f42e853b5e7b04e21f369fc6627155e0175298706171092', '[\"*\"]', NULL, '2024-08-12 11:24:28', '2024-08-12 11:24:28'),
(413, 'App\\Models\\PatientRegistration', 100, 'authToken', '4d223871d0dab7f65136af9c1a4b18a5c402652da5ad35e43665b16506ad90bc', '[\"*\"]', NULL, '2024-08-12 11:25:19', '2024-08-12 11:25:19'),
(414, 'App\\Models\\PatientRegistration', 100, 'authToken', '6feaaed6a4945724cf8de5b7ebe9ae2190f3a7027162c77cfe4b35987cc60d98', '[\"*\"]', NULL, '2024-08-12 11:25:40', '2024-08-12 11:25:40'),
(415, 'App\\Models\\PatientRegistration', 20, 'authToken', '237adb1da0fc9ffdca28d2bbaeb986b8a2b1e5753ab182a38d72c2d5c811dd5f', '[\"*\"]', NULL, '2024-08-12 11:26:26', '2024-08-12 11:26:26'),
(416, 'App\\Models\\PatientRegistration', 102, 'authToken', '82a53a8a8366d800acacdc4b98baea31a0786e9041d421b08d4aea6bed9cbf16', '[\"*\"]', NULL, '2024-08-12 11:26:28', '2024-08-12 11:26:28'),
(417, 'App\\Models\\PatientRegistration', 20, 'authToken', '380749f2ff61c24d08f953f97067800309d1dead57a65c0eec536f4be6063347', '[\"*\"]', NULL, '2024-08-12 11:26:34', '2024-08-12 11:26:34'),
(418, 'App\\Models\\PatientRegistration', 100, 'authToken', 'a874f4e681ea9adc338419cfc03e26b073e49d2e1fd47f83de9ba4b985fea810', '[\"*\"]', NULL, '2024-08-12 11:32:38', '2024-08-12 11:32:38'),
(419, 'App\\Models\\PatientRegistration', 20, 'authToken', '367c00c1dd7fafcfdf4a526332beb97482b57bff263994d1bbd62a0a7e5d4695', '[\"*\"]', NULL, '2024-08-12 11:32:55', '2024-08-12 11:32:55'),
(420, 'App\\Models\\PatientRegistration', 100, 'authToken', '1e9d3999601e621ec58ffc9112d5801d4994f0052555a570f42af1ce54616f98', '[\"*\"]', NULL, '2024-08-12 11:33:23', '2024-08-12 11:33:23'),
(421, 'App\\Models\\PatientRegistration', 25, 'authToken', 'bad6aa15e1a882eb68deae73100416b986d2096899af3d16c39b233e367d17d7', '[\"*\"]', NULL, '2024-08-12 11:34:13', '2024-08-12 11:34:13'),
(422, 'App\\Models\\PatientRegistration', 20, 'authToken', 'e536457d1a4a8ccfc9d6487370e9bc218560529eac1c478b8587f42ed93d74a2', '[\"*\"]', NULL, '2024-08-12 11:39:11', '2024-08-12 11:39:11'),
(423, 'App\\Models\\PatientRegistration', 20, 'authToken', '0f6f5f0a3efbbd86812c760463cdba75996c5d78ed6ed5af12e02eae0bd41555', '[\"*\"]', NULL, '2024-08-12 11:39:19', '2024-08-12 11:39:19'),
(424, 'App\\Models\\PatientRegistration', 100, 'authToken', '6921568b4ea38df1ba86889e72d3f254604bbf5c7b6652c11a988d2d473d834d', '[\"*\"]', NULL, '2024-08-12 11:45:46', '2024-08-12 11:45:46'),
(425, 'App\\Models\\PatientRegistration', 100, 'authToken', '7b3af62a9366347f9ad01883366ffafd59014249f78b8ba414fae2692b74861b', '[\"*\"]', NULL, '2024-08-12 12:07:35', '2024-08-12 12:07:35'),
(426, 'App\\Models\\PatientRegistration', 100, 'authToken', '071e9916426c2f3777916e7bfe5f2eb6c45d754012457771f4ebe86a6fa2e813', '[\"*\"]', NULL, '2024-08-12 12:09:51', '2024-08-12 12:09:51'),
(427, 'App\\Models\\PatientRegistration', 18, 'authToken', 'eebf718a99075bdea8ee4405280ba39426440b68e5809ed50490dfecd33b3223', '[\"*\"]', NULL, '2024-08-12 12:10:52', '2024-08-12 12:10:52'),
(428, 'App\\Models\\PatientRegistration', 18, 'authToken', '391b9e37e71fc88b0d602aaa520c9c67fa4391ffe20d45626a389ac92a825835', '[\"*\"]', NULL, '2024-08-12 12:11:51', '2024-08-12 12:11:51'),
(429, 'App\\Models\\PatientRegistration', 100, 'authToken', '4cc4267104c0a5dfe75831fdc8e9f4006d28595a45d07f9462626bcffaf1afd9', '[\"*\"]', NULL, '2024-08-12 12:17:51', '2024-08-12 12:17:51'),
(430, 'App\\Models\\PatientRegistration', 100, 'authToken', 'c77d9b8f4e7e9ed08bb8e33b6102c3b7d6a5698a4d1e34324ff4dc8390f3be39', '[\"*\"]', NULL, '2024-08-12 12:26:09', '2024-08-12 12:26:09'),
(431, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e297a784c862d7f44d1da1731db446c09c8acbb39d40cd9a370031cccfe0c13f', '[\"*\"]', NULL, '2024-08-12 12:55:45', '2024-08-12 12:55:45'),
(432, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ff05a344f8b8fbcec5a3cfa608a7d6ab805896d0868066eb7c94055d2db44165', '[\"*\"]', NULL, '2024-08-12 12:55:59', '2024-08-12 12:55:59'),
(433, 'App\\Models\\PatientRegistration', 25, 'authToken', '7bde0642b4c2ef5095ca188ce475d4a6807e96913a96c8006e2ba50baf40da5c', '[\"*\"]', NULL, '2024-08-12 13:13:32', '2024-08-12 13:13:32'),
(434, 'App\\Models\\PatientRegistration', 25, 'authToken', '2617b1ba4010603dbe43c558b3763f6c8cf1dc9aee109ed705ba1c5ded1c45b7', '[\"*\"]', NULL, '2024-08-12 13:17:08', '2024-08-12 13:17:08'),
(435, 'App\\Models\\PatientRegistration', 25, 'authToken', '8e59464f283ef96f4ec8314bb502a5a60ff805855d002bc2cec690eda4219204', '[\"*\"]', NULL, '2024-08-12 13:17:46', '2024-08-12 13:17:46'),
(436, 'App\\Models\\PatientRegistration', 102, 'authToken', '181fc8055a304e789352f909c90fe9b1187b8b62ce81ace8ef898c4c851049e6', '[\"*\"]', NULL, '2024-08-12 13:40:29', '2024-08-12 13:40:29'),
(437, 'App\\Models\\PatientRegistration', 25, 'authToken', 'bad291c795806cfc87e724a05b854c0eebbf9b04058582dc818f0e48e90b6c17', '[\"*\"]', NULL, '2024-08-12 13:54:09', '2024-08-12 13:54:09'),
(438, 'App\\Models\\PatientRegistration', 25, 'authToken', 'b137768704f80cfc672f943e6e00a1330b6592e2fdc4e0ad6b4c1ce090110bd1', '[\"*\"]', NULL, '2024-08-12 13:55:07', '2024-08-12 13:55:07'),
(439, 'App\\Models\\PatientRegistration', 25, 'authToken', '0371d1190c15ceb21309487eb0ad254e40203b881347b40c0c1761ea98f678a4', '[\"*\"]', NULL, '2024-08-12 13:57:10', '2024-08-12 13:57:10'),
(440, 'App\\Models\\PatientRegistration', 25, 'authToken', '970b7712e427f341fced175249bea83704cc36098a745132eb2619751ea51bc0', '[\"*\"]', NULL, '2024-08-12 13:58:57', '2024-08-12 13:58:57'),
(441, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ace53c3c1be45d487a868e913a219ab7d954c1febf071e3b62476f0b6ec980c5', '[\"*\"]', NULL, '2024-08-12 14:00:29', '2024-08-12 14:00:29'),
(442, 'App\\Models\\PatientRegistration', 18, 'authToken', '894dd85ea268dbad3b8dde0cabeb59a35e013e18c9a05c970655e5e92b14d174', '[\"*\"]', NULL, '2024-08-12 14:20:19', '2024-08-12 14:20:19'),
(443, 'App\\Models\\PatientRegistration', 18, 'authToken', '78094920c42020393b7fe93254354266e78be7b7056dd8466d48ad137894623c', '[\"*\"]', NULL, '2024-08-12 14:20:48', '2024-08-12 14:20:48'),
(444, 'App\\Models\\PatientRegistration', 18, 'authToken', 'c64b5922c1a80e9005abc4fb84a5f80dc113c70423a58a03f5da2eef004a5b3d', '[\"*\"]', NULL, '2024-08-12 14:21:40', '2024-08-12 14:21:40'),
(445, 'App\\Models\\PatientRegistration', 18, 'authToken', 'dae0cfb6645b74c24e6a39a3e104910d7d0b1dc81bf7e02812ebb45ccd7e3d00', '[\"*\"]', NULL, '2024-08-12 14:22:04', '2024-08-12 14:22:04'),
(446, 'App\\Models\\PatientRegistration', 18, 'authToken', '625636bfbd5f96e30e51d4681bfe53239aef9745bcbd7793ee665625776a75ad', '[\"*\"]', NULL, '2024-08-12 14:22:26', '2024-08-12 14:22:26'),
(447, 'App\\Models\\PatientRegistration', 25, 'authToken', '15b24a4bf15bb82587453dde5eb6becf3b0f711daf0e02adf4c2011ee4ac37c5', '[\"*\"]', NULL, '2024-08-12 14:30:46', '2024-08-12 14:30:46'),
(448, 'App\\Models\\PatientRegistration', 20, 'authToken', '4bc26f1c188ab1ea6e11e1c535c309029b63f481f43d792e1c754ec4db6fae16', '[\"*\"]', NULL, '2024-08-12 14:31:43', '2024-08-12 14:31:43'),
(449, 'App\\Models\\PatientRegistration', 20, 'authToken', '2e922962bedc009b21c8d06b14a7ff1d7123c70deb853882cd16e4414d908323', '[\"*\"]', NULL, '2024-08-12 14:33:22', '2024-08-12 14:33:22'),
(450, 'App\\Models\\PatientRegistration', 25, 'authToken', '172cdccede3418b1182a8b779aea20093282e087f51290d38fc2dceec6a236f3', '[\"*\"]', NULL, '2024-08-12 14:34:16', '2024-08-12 14:34:16'),
(451, 'App\\Models\\PatientRegistration', 25, 'authToken', '1bad07163f09517a8212662adef810cb42163135a1ecdc3c88664daee141989f', '[\"*\"]', NULL, '2024-08-12 14:34:47', '2024-08-12 14:34:47'),
(452, 'App\\Models\\PatientRegistration', 18, 'authToken', '017698595d3ac8d68b615ce6bff7fef48e8b127686f061fa4f28236ae833e877', '[\"*\"]', NULL, '2024-08-12 14:36:33', '2024-08-12 14:36:33'),
(453, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a76c8095a75d2aba0ed249a040c4c971533f3befa381be15b9308bf14cdb489c', '[\"*\"]', NULL, '2024-08-12 14:36:59', '2024-08-12 14:36:59'),
(454, 'App\\Models\\PatientRegistration', 18, 'authToken', '9a905af9d6cc7982200e46fe1351754e439994a6ead75d3f0f3556aff69c176f', '[\"*\"]', NULL, '2024-08-12 14:43:30', '2024-08-12 14:43:30'),
(455, 'App\\Models\\PatientRegistration', 25, 'authToken', '14e67ddb81cfc551ecd5ac21b55ad24bd866b3028d8a8909d6930b6fccbb7ea0', '[\"*\"]', NULL, '2024-08-12 14:46:22', '2024-08-12 14:46:22'),
(456, 'App\\Models\\PatientRegistration', 25, 'authToken', '55167ea92e7729a7918fa0d432e49435c22a1da721680576754803ca04d5d108', '[\"*\"]', NULL, '2024-08-12 14:55:59', '2024-08-12 14:55:59'),
(457, 'App\\Models\\PatientRegistration', 25, 'authToken', '4a85263593eef549c2f4b6e6659f64395a5486629c40047fe639f04008be83c9', '[\"*\"]', NULL, '2024-08-12 14:56:21', '2024-08-12 14:56:21'),
(458, 'App\\Models\\PatientRegistration', 25, 'authToken', '5894d5906737638afd532d63f53353d48060a3fc9b3ac240c3ad024fd831fdb1', '[\"*\"]', NULL, '2024-08-12 14:57:24', '2024-08-12 14:57:24'),
(459, 'App\\Models\\PatientRegistration', 25, 'authToken', '739cb5d6df16618e9021af22715e5c20b7dac3c631fee994fa63ff915217982e', '[\"*\"]', NULL, '2024-08-12 14:59:41', '2024-08-12 14:59:41'),
(460, 'App\\Models\\PatientRegistration', 25, 'authToken', '4d8177b4b5c1f0aefad84eac71faeb345c0b9a0fff7fefd7f8d3d646e7eeaa1a', '[\"*\"]', NULL, '2024-08-12 15:00:22', '2024-08-12 15:00:22'),
(461, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e2c6dec1432a88302b86be275034cdfc7b8fd9f709dfc817a29b808c24bdaf66', '[\"*\"]', NULL, '2024-08-12 15:03:05', '2024-08-12 15:03:05'),
(462, 'App\\Models\\PatientRegistration', 25, 'authToken', '5db2593f1b7bc49517471658644236c5895a5859e64605b6d4f32efc5fbaed33', '[\"*\"]', NULL, '2024-08-12 15:03:37', '2024-08-12 15:03:37'),
(463, 'App\\Models\\PatientRegistration', 25, 'authToken', '6a5aff6efece115a52f5261666070b84e7ddc8413b272aa40c2504c62cb1c68f', '[\"*\"]', NULL, '2024-08-12 15:03:58', '2024-08-12 15:03:58'),
(464, 'App\\Models\\PatientRegistration', 44, 'authToken', '1e5f1b147d5f28f62f18ca96e2ea3420320d9a3c728fe7bf68720c6545bf9e5a', '[\"*\"]', NULL, '2024-08-12 15:07:46', '2024-08-12 15:07:46'),
(465, 'App\\Models\\PatientRegistration', 102, 'authToken', '74b7a2934e9dc676a58841fb776d775195b37daf7b49818e970a76ff6de178b5', '[\"*\"]', NULL, '2024-08-12 15:15:39', '2024-08-12 15:15:39'),
(466, 'App\\Models\\PatientRegistration', 102, 'authToken', 'ae1c31d3e5b7512cac4e16f20492b77de55ae34aa0a65f1e8c1d0d3a1e083941', '[\"*\"]', NULL, '2024-08-12 15:25:01', '2024-08-12 15:25:01'),
(467, 'App\\Models\\PatientRegistration', 25, 'authToken', '7bc326f52da3f84869ef0fda5b2ec3693299edea570139ff732e0fd0cdb85fdf', '[\"*\"]', NULL, '2024-08-12 15:33:35', '2024-08-12 15:33:35'),
(468, 'App\\Models\\PatientRegistration', 25, 'authToken', 'b021d9981000c2774d2c525507bab33de08a2bc6e05ea0dffbd7d57f8887eb7f', '[\"*\"]', NULL, '2024-08-12 15:44:17', '2024-08-12 15:44:17'),
(469, 'App\\Models\\PatientRegistration', 25, 'authToken', 'fdece29eeff4c31033171e35c7947cc1c75f47a669e34fe1420131f03933e94f', '[\"*\"]', NULL, '2024-08-12 15:44:43', '2024-08-12 15:44:43'),
(470, 'App\\Models\\PatientRegistration', 25, 'authToken', '5b5f1f2bee9f61e61e91e1f055b530eaa21aef5eb1449cd48a36bfe08c6478a9', '[\"*\"]', NULL, '2024-08-12 15:45:23', '2024-08-12 15:45:23'),
(471, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e3f32b0b313d31f85b9d0fb346dda5d261b25ccc71af24c9eb6917290f157909', '[\"*\"]', NULL, '2024-08-12 15:50:10', '2024-08-12 15:50:10'),
(472, 'App\\Models\\PatientRegistration', 18, 'authToken', 'efcfb6ac7ab6203403872123fc5132683039f4b10fd2c0f4ee1d523765f5ba8f', '[\"*\"]', NULL, '2024-08-12 15:52:21', '2024-08-12 15:52:21'),
(473, 'App\\Models\\PatientRegistration', 25, 'authToken', 'cb18b4c0fb2cc9f21d38b0213b97c4ed41a762bd77bf579373d6b2723dec6bf2', '[\"*\"]', NULL, '2024-08-13 09:58:11', '2024-08-13 09:58:11'),
(474, 'App\\Models\\PatientRegistration', 18, 'authToken', '7ea6f01a6536119d0575d4b1ed1b2958ad5827b6843aa44d8c3e32dcea22e1ac', '[\"*\"]', NULL, '2024-08-13 10:02:39', '2024-08-13 10:02:39'),
(475, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a814d0d52c84cdd4bbdf2d44136dbd2ca0f5d7b240691c82d5f03740cd6900d1', '[\"*\"]', NULL, '2024-08-13 10:18:40', '2024-08-13 10:18:40'),
(476, 'App\\Models\\PatientRegistration', 25, 'authToken', '6ea2eec98e9c8710a16d90ecbb0f44022fc7be0a02367e594173c3945e29da94', '[\"*\"]', NULL, '2024-08-13 10:22:47', '2024-08-13 10:22:47'),
(477, 'App\\Models\\PatientRegistration', 25, 'authToken', '80ce51a4584156c4b31c89a3c7836e90352847a88a48e5685182ed40d82d74dc', '[\"*\"]', NULL, '2024-08-13 10:28:00', '2024-08-13 10:28:00'),
(478, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e21ce2657f73e75bfb7b62913a8fc565793354315bbd91b6e0006cabecf8685c', '[\"*\"]', NULL, '2024-08-13 10:51:49', '2024-08-13 10:51:49'),
(479, 'App\\Models\\PatientRegistration', 25, 'authToken', '833d2ea9e924b50e19cbd539bda88c824fd0ca60ef0b0c5a32e334d9c35a42dc', '[\"*\"]', NULL, '2024-08-13 10:52:04', '2024-08-13 10:52:04'),
(480, 'App\\Models\\PatientRegistration', 44, 'authToken', 'cc8588a900c0e8f0cafbb7152a52b2052e1e4480a7026f083f5a6469c21b4573', '[\"*\"]', NULL, '2024-08-13 11:03:51', '2024-08-13 11:03:51'),
(481, 'App\\Models\\PatientRegistration', 25, 'authToken', '5ae410647c0cedec7c92eb76a0d598dc5a1d1359b63e1fc96eb5bb92d536f9da', '[\"*\"]', NULL, '2024-08-13 11:19:50', '2024-08-13 11:19:50'),
(482, 'App\\Models\\PatientRegistration', 25, 'authToken', '14b4a85b2cbdf05d62ba4ee27ecb8e6c2a9ea41756f7d4c979e1db6937b9fbf9', '[\"*\"]', NULL, '2024-08-13 11:20:03', '2024-08-13 11:20:03'),
(483, 'App\\Models\\PatientRegistration', 44, 'authToken', '6dac17b434ff744421b390f9a620256a30b2fe9f501652b0d45027634bc38b6e', '[\"*\"]', NULL, '2024-08-13 11:32:53', '2024-08-13 11:32:53'),
(484, 'App\\Models\\PatientRegistration', 44, 'authToken', '32aafe57a3f937501df03a9e9793367c49901bbe6583459b42fd5c78ce6624f7', '[\"*\"]', NULL, '2024-08-13 11:40:04', '2024-08-13 11:40:04'),
(485, 'App\\Models\\PatientRegistration', 100, 'authToken', 'afc73e1ad6cf7c75c53f21228ed455b48afe17854a45795ba2266aaef251f0a0', '[\"*\"]', NULL, '2024-08-13 11:42:28', '2024-08-13 11:42:28'),
(486, 'App\\Models\\PatientRegistration', 44, 'authToken', 'bf9d16100dcd7300eb0812140f6b8e33d61d3c8d6baec1ff5896835f764acb85', '[\"*\"]', NULL, '2024-08-13 11:44:08', '2024-08-13 11:44:08'),
(487, 'App\\Models\\PatientRegistration', 112, 'authToken', 'ca94f098c3abc7b3f65894a14aac3065851ad9ea439ac5a3d59ede346daf22a4', '[\"*\"]', NULL, '2024-08-13 11:46:30', '2024-08-13 11:46:30'),
(488, 'App\\Models\\PatientRegistration', 112, 'authToken', 'ee55ef07f10f1cb0dbeae005fbc5779d1aa674f6aeab8d06bedd7219faa36e62', '[\"*\"]', NULL, '2024-08-13 11:48:24', '2024-08-13 11:48:24'),
(489, 'App\\Models\\PatientRegistration', 112, 'authToken', '1a977d810d3be4ad8d90734ffff79a555c78eec79d65ec594d231fee4e1a3d7e', '[\"*\"]', NULL, '2024-08-13 11:50:19', '2024-08-13 11:50:19'),
(490, 'App\\Models\\PatientRegistration', 100, 'authToken', 'ca3dd4b56b7625cf86bb7117076090f5a7b20b92fb871ea896e1c56ff477ae07', '[\"*\"]', NULL, '2024-08-13 11:54:28', '2024-08-13 11:54:28'),
(491, 'App\\Models\\PatientRegistration', 10, 'authToken', 'a92f8211b74c1cef4854fbb005ef3bf4c669ff20867e511d93cae3bd44d0fcd3', '[\"*\"]', NULL, '2024-08-13 11:58:14', '2024-08-13 11:58:14'),
(492, 'App\\Models\\PatientRegistration', 44, 'authToken', '46b7ccee8565c492049eda86c65c05d5d91ba7190309695f819ff2c1b49cbebd', '[\"*\"]', NULL, '2024-08-13 12:03:25', '2024-08-13 12:03:25'),
(493, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b4609285cb491db3cc8776597bdbc3d6d7b258793e7a308c2b9ee6275ed0b42e', '[\"*\"]', NULL, '2024-08-13 12:09:53', '2024-08-13 12:09:53'),
(494, 'App\\Models\\PatientRegistration', 18, 'authToken', '9907dcaaec8b963f667e3c97d29193d389e2ea8093f4acb4e704aa6fd8242c5a', '[\"*\"]', NULL, '2024-08-13 12:15:44', '2024-08-13 12:15:44'),
(495, 'App\\Models\\PatientRegistration', 18, 'authToken', '076f284afaa371979aee49138455ebce5770451c32d2a562aa8245d889ad0a07', '[\"*\"]', NULL, '2024-08-13 12:24:20', '2024-08-13 12:24:20'),
(496, 'App\\Models\\PatientRegistration', 18, 'authToken', 'fc1e3dd4be86b9c2deba3395834471b302dfbff3c3d908a585654c9f7aaaa633', '[\"*\"]', NULL, '2024-08-13 12:26:45', '2024-08-13 12:26:45'),
(497, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd90234eb1f4330db4e9a21b4a8622081c004c16adb8608c4c6e141bff4517f90', '[\"*\"]', NULL, '2024-08-13 12:29:28', '2024-08-13 12:29:28'),
(498, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd8bbcba278efd213590f4ecc55373a0b70bbc8d49174fa9550b4f2ae894fe5cd', '[\"*\"]', NULL, '2024-08-13 12:30:36', '2024-08-13 12:30:36'),
(499, 'App\\Models\\PatientRegistration', 25, 'authToken', '772e8ea79daec715f1692e07b097976b1edcac5a03c6ca0a48c12a01eeaccdd3', '[\"*\"]', NULL, '2024-08-13 12:34:21', '2024-08-13 12:34:21'),
(500, 'App\\Models\\PatientRegistration', 25, 'authToken', '7c47c497226d62e06e19d6925beb44cd6f2fdf2372371a6e3ce4a36cae243906', '[\"*\"]', NULL, '2024-08-13 12:35:44', '2024-08-13 12:35:44'),
(501, 'App\\Models\\PatientRegistration', 10, 'authToken', 'e676c8313be65291d4e646e3dd9e5b73fc00dad44a43b13f410bf0e27ab0da4c', '[\"*\"]', NULL, '2024-08-13 12:38:50', '2024-08-13 12:38:50'),
(502, 'App\\Models\\PatientRegistration', 25, 'authToken', '35df559571fad12d447df4e7d96706d0c36777da374ada4ba27be17958f4c450', '[\"*\"]', NULL, '2024-08-13 12:56:59', '2024-08-13 12:56:59'),
(503, 'App\\Models\\PatientRegistration', 25, 'authToken', '76e740deccda6858beacf8d62c35c877c8a6dd5379405cc2b1a4ce0f82321b42', '[\"*\"]', NULL, '2024-08-13 13:15:09', '2024-08-13 13:15:09'),
(504, 'App\\Models\\PatientRegistration', 170, 'authToken', '5934fab9a081f1f0cfc837c767804410b24e01381be321c271ea647e65450230', '[\"*\"]', NULL, '2024-08-13 13:18:24', '2024-08-13 13:18:24'),
(505, 'App\\Models\\PatientRegistration', 173, 'authToken', 'cf7ac9331e912b18046dcf7ae1a176a64eb2ccb0a7022a89cbb2bebf8aac29c8', '[\"*\"]', NULL, '2024-08-13 13:44:38', '2024-08-13 13:44:38'),
(506, 'App\\Models\\PatientRegistration', 173, 'authToken', '69b67d0418d0a25334ed86ea6630b8d12ea8a42c373e2e750ae532c99ffc4917', '[\"*\"]', NULL, '2024-08-13 13:46:10', '2024-08-13 13:46:10'),
(507, 'App\\Models\\PatientRegistration', 173, 'authToken', 'ffb58293754026c68c8f5a6ded596cb6de57ff30befde740577577297c862f21', '[\"*\"]', NULL, '2024-08-13 13:48:36', '2024-08-13 13:48:36'),
(508, 'App\\Models\\PatientRegistration', 173, 'authToken', '83560b9c3290cec70f7c8a2e76e9f24a8d196078b0f76937404c89f5f125423c', '[\"*\"]', NULL, '2024-08-13 13:52:06', '2024-08-13 13:52:06'),
(509, 'App\\Models\\PatientRegistration', 18, 'authToken', '1fd9b234a28f4d1027d79650c3e2c865a02335daf4b682ff51d18c0e18e21a54', '[\"*\"]', NULL, '2024-08-13 13:56:44', '2024-08-13 13:56:44'),
(510, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e7553ddd0d6b407b802d806788230c4248804054c1fc76fbe5fee2b2f02e1302', '[\"*\"]', NULL, '2024-08-13 13:59:05', '2024-08-13 13:59:05'),
(511, 'App\\Models\\PatientRegistration', 25, 'authToken', '16b37d40c305442718a78e773007114d85451606de1c1dc700e3f8c8dcd485c4', '[\"*\"]', NULL, '2024-08-13 13:59:51', '2024-08-13 13:59:51'),
(512, 'App\\Models\\PatientRegistration', 25, 'authToken', '31b5bba7bf1e2ef446814c05d82be3183f987ac168c9c800738fe1b717c55625', '[\"*\"]', NULL, '2024-08-13 14:00:05', '2024-08-13 14:00:05'),
(513, 'App\\Models\\PatientRegistration', 25, 'authToken', 'f8e3356d03fecdffe6b4b490858bdd6ba66813c8574d5dd7d1bb1394cd0ed519', '[\"*\"]', NULL, '2024-08-13 14:00:45', '2024-08-13 14:00:45'),
(514, 'App\\Models\\PatientRegistration', 44, 'authToken', '705eec2b54d1482a0d944431120526cb26815580c90f3847f150a6b3dedb0574', '[\"*\"]', NULL, '2024-08-13 14:03:13', '2024-08-13 14:03:13'),
(515, 'App\\Models\\PatientRegistration', 173, 'authToken', '5ec25ca7378a2dba529b60ad127b65ca0f896e4868e34163a92454db55c21d2e', '[\"*\"]', NULL, '2024-08-13 14:03:51', '2024-08-13 14:03:51'),
(516, 'App\\Models\\PatientRegistration', 18, 'authToken', 'e65de0fb8ddf91ea8ba360c37b0feb85cb0e6aaf438a7a6af96117e2041daba9', '[\"*\"]', NULL, '2024-08-13 14:04:13', '2024-08-13 14:04:13'),
(517, 'App\\Models\\PatientRegistration', 18, 'authToken', '0112bb261fb0f23752cece5142d5b0f38a719524d81ee3dd3eb6f7ec17640249', '[\"*\"]', NULL, '2024-08-13 14:05:01', '2024-08-13 14:05:01'),
(518, 'App\\Models\\PatientRegistration', 25, 'authToken', '44c2c7b24d9166397be6f5b901b3b603fb92a7e95e6e37a5afb2891957737bb3', '[\"*\"]', NULL, '2024-08-13 14:08:23', '2024-08-13 14:08:23'),
(519, 'App\\Models\\PatientRegistration', 100, 'authToken', 'ae22373bdc91cbf6adebd6f920b0888c3fa60e90b49fd2cec024b4ff6dbcfd08', '[\"*\"]', NULL, '2024-08-13 14:08:29', '2024-08-13 14:08:29'),
(520, 'App\\Models\\PatientRegistration', 100, 'authToken', '5dd7785e6364d626260c18ff307895b0d4378b1f6365c0677729b08f0444b941', '[\"*\"]', NULL, '2024-08-13 14:09:14', '2024-08-13 14:09:14'),
(521, 'App\\Models\\PatientRegistration', 100, 'authToken', 'dc6567d76078c1e98d03922324c663240c660e7058ffc81a6d70dd7c7b785a9f', '[\"*\"]', NULL, '2024-08-13 14:12:56', '2024-08-13 14:12:56'),
(522, 'App\\Models\\PatientRegistration', 173, 'authToken', 'd04b5ffe71d4a883a5855a00ada0e5ff4c83988f85fdd1bb851a45fe4a18df32', '[\"*\"]', NULL, '2024-08-13 14:14:33', '2024-08-13 14:14:33'),
(523, 'App\\Models\\PatientRegistration', 25, 'authToken', 'c7ce279ec5d7973c6374753522aea37e341b282465e6ba4c18374fae9fe4bf68', '[\"*\"]', NULL, '2024-08-13 14:17:39', '2024-08-13 14:17:39'),
(524, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ec8004f391ca5ddc655df404861b5505aec9a8b9a323f2ce0ff011d7a37a4b53', '[\"*\"]', NULL, '2024-08-13 14:19:52', '2024-08-13 14:19:52'),
(525, 'App\\Models\\PatientRegistration', 25, 'authToken', '9b9234cf2a3a559409b8b187d1add7358590d446c28163aabc92d570d87590a9', '[\"*\"]', NULL, '2024-08-13 14:20:58', '2024-08-13 14:20:58'),
(526, 'App\\Models\\PatientRegistration', 25, 'authToken', '567e212e07c4ed2ede8ad79261734b552db9fb108f76205065440182ac6767cd', '[\"*\"]', NULL, '2024-08-13 14:21:49', '2024-08-13 14:21:49'),
(527, 'App\\Models\\PatientRegistration', 173, 'authToken', '1b319a2f5f8c7b542fc3b68c1ffd0aafdf07747f959b176924cb30ae2b521bc7', '[\"*\"]', NULL, '2024-08-13 14:23:51', '2024-08-13 14:23:51');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(528, 'App\\Models\\PatientRegistration', 177, 'authToken', '6f42fac8ecfdec02f3f30c3ae9830efd6dc5e41f1a5f910957e628bfd274dece', '[\"*\"]', NULL, '2024-08-13 14:25:42', '2024-08-13 14:25:42'),
(529, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ea26d860de2e8960a38d1c712907c3b38d4e4ad6e6831feadf3bd70d5b7dc839', '[\"*\"]', NULL, '2024-08-13 14:26:25', '2024-08-13 14:26:25'),
(530, 'App\\Models\\PatientRegistration', 177, 'authToken', 'afa17c44359b8d6562a6bc73a0bce2f8dc5082ea461f94b727fa4c8f8ecc714d', '[\"*\"]', NULL, '2024-08-13 14:30:34', '2024-08-13 14:30:34'),
(531, 'App\\Models\\PatientRegistration', 44, 'authToken', '1f8af05f9035896a241137a8b451521fc1fd7d45bff0ba36f9315472c69b75dd', '[\"*\"]', NULL, '2024-08-13 14:34:17', '2024-08-13 14:34:17'),
(532, 'App\\Models\\PatientRegistration', 25, 'authToken', '4a2589c2b698a55bbd88312886d76ef74cf25500515828f22167b5d8ba68c3dd', '[\"*\"]', NULL, '2024-08-13 14:36:15', '2024-08-13 14:36:15'),
(533, 'App\\Models\\PatientRegistration', 25, 'authToken', '14076de998164f1c0bc30edae51079127ef6cddaf1c3fbb123818c7115ebcf20', '[\"*\"]', NULL, '2024-08-13 14:37:59', '2024-08-13 14:37:59'),
(534, 'App\\Models\\PatientRegistration', 25, 'authToken', 'fbbc9d1c1e3927b6bd136fc0227389814622f1c4d9db36f1699b791fb34e0f15', '[\"*\"]', NULL, '2024-08-13 14:38:17', '2024-08-13 14:38:17'),
(535, 'App\\Models\\PatientRegistration', 25, 'authToken', '7066b981ad58a85b45bc913b576647df00f92457da373ffb91bca5f234efd13f', '[\"*\"]', NULL, '2024-08-13 14:38:45', '2024-08-13 14:38:45'),
(536, 'App\\Models\\PatientRegistration', 25, 'authToken', '74b1ee3f0236d5f6ec96fdb2e48213a30ea018eae31ebc4c38404de1136908ed', '[\"*\"]', NULL, '2024-08-13 14:39:01', '2024-08-13 14:39:01'),
(537, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ef1b660f3d469dbdb76e5a925bd3ce32985f71cdf650868894d6fb647c63516c', '[\"*\"]', NULL, '2024-08-13 14:39:47', '2024-08-13 14:39:47'),
(538, 'App\\Models\\PatientRegistration', 25, 'authToken', '0024bc296140897ed937e2ae8db23fcd3de1603e7921c03fc435501401bdcbd8', '[\"*\"]', NULL, '2024-08-13 14:41:01', '2024-08-13 14:41:01'),
(539, 'App\\Models\\PatientRegistration', 44, 'authToken', '4614f3b6775e39b47df5da4e1e1df3dbb94e210fc7c071a066a03ac556171dff', '[\"*\"]', NULL, '2024-08-13 14:43:32', '2024-08-13 14:43:32'),
(540, 'App\\Models\\PatientRegistration', 44, 'authToken', '863a89bbebed9ae989499418629ee84a2549851d8d320b4c7faf5f8837af6f2e', '[\"*\"]', NULL, '2024-08-13 14:44:01', '2024-08-13 14:44:01'),
(541, 'App\\Models\\PatientRegistration', 44, 'authToken', '300fe8976c6bdde835a31c9ecee4f4dc1ce90edfe877342528ab6c7dcb0bb47b', '[\"*\"]', NULL, '2024-08-13 14:44:16', '2024-08-13 14:44:16'),
(542, 'App\\Models\\PatientRegistration', 44, 'authToken', '27689ec3558648ef058393f0e0d925f89e2cb420336ef15d7fa6fe22e8c5fc76', '[\"*\"]', NULL, '2024-08-13 14:45:00', '2024-08-13 14:45:00'),
(543, 'App\\Models\\PatientRegistration', 44, 'authToken', 'eca6eff74f2f075500447a44f94593ce6df6d74402ac4871ced652bb41832ca1', '[\"*\"]', NULL, '2024-08-13 14:46:18', '2024-08-13 14:46:18'),
(544, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e5674acf62445aa34fb01c7ddf48b5a5700b54a6e8f2949267f9f60695720bc4', '[\"*\"]', NULL, '2024-08-13 14:47:28', '2024-08-13 14:47:28'),
(545, 'App\\Models\\PatientRegistration', 115, 'authToken', '2dfb6df9869c9a5d0b25e057d156611ab2f541dfe999a513b43b19fc10f80b6d', '[\"*\"]', NULL, '2024-08-13 14:50:53', '2024-08-13 14:50:53'),
(546, 'App\\Models\\PatientRegistration', 44, 'authToken', '43c98b1c1f92261a67f7bef29674cdc9c3c4a7256cf52aa1c34399ef65d72dab', '[\"*\"]', NULL, '2024-08-13 14:51:21', '2024-08-13 14:51:21'),
(547, 'App\\Models\\PatientRegistration', 25, 'authToken', 'cd0073616f3414e7f860d7b3b711a506259ff3c80123dfdc7f3c381fc9de5eb5', '[\"*\"]', NULL, '2024-08-13 14:53:29', '2024-08-13 14:53:29'),
(548, 'App\\Models\\PatientRegistration', 25, 'authToken', '61d6f07d79c95523965c2a1aae8fc248b5be9fb9fabb6c64362b4a591b99357a', '[\"*\"]', NULL, '2024-08-13 14:53:41', '2024-08-13 14:53:41'),
(549, 'App\\Models\\PatientRegistration', 44, 'authToken', '6ce8899be540a288527705b1bf63edc5f2c70393d151356c763764f29f81c1f9', '[\"*\"]', NULL, '2024-08-13 14:54:56', '2024-08-13 14:54:56'),
(550, 'App\\Models\\PatientRegistration', 44, 'authToken', 'd53ffaba9670d8a8bb087090be68b116a1a6f6b1745f78735a13180802eb7748', '[\"*\"]', NULL, '2024-08-13 14:56:00', '2024-08-13 14:56:00'),
(551, 'App\\Models\\PatientRegistration', 25, 'authToken', '60a5e5e87a1431cbdb27710297790f22582e09ec77fc29ac5bd283d388c6be45', '[\"*\"]', NULL, '2024-08-13 15:24:29', '2024-08-13 15:24:29'),
(552, 'App\\Models\\PatientRegistration', 44, 'authToken', 'ac46f9fd3238b7ba9159e82195b927d15da81def03efddb74d310e73194b75c6', '[\"*\"]', NULL, '2024-08-13 15:29:24', '2024-08-13 15:29:24'),
(553, 'App\\Models\\PatientRegistration', 44, 'authToken', '495a2424e5b8db381e40d4d1907b475049cfa0ec7d288ace008fafe490976235', '[\"*\"]', NULL, '2024-08-13 15:29:58', '2024-08-13 15:29:58'),
(554, 'App\\Models\\PatientRegistration', 44, 'authToken', '8672d7ce2f7b7deb46fc92eb7c1b4855baf1dee489ad3246cfb98ac87e0606b4', '[\"*\"]', NULL, '2024-08-13 15:34:26', '2024-08-13 15:34:26'),
(555, 'App\\Models\\PatientRegistration', 44, 'authToken', 'cc9d0f55d43662be4649bfb18fa70e058d117ab2998ae35ecdfe202458646b78', '[\"*\"]', NULL, '2024-08-13 15:35:11', '2024-08-13 15:35:11'),
(556, 'App\\Models\\PatientRegistration', 25, 'authToken', 'c99c9957ed7e145e228a4c2b996b1a5cd61020ff05c138d6a67178e4b7d19584', '[\"*\"]', NULL, '2024-08-13 15:36:25', '2024-08-13 15:36:25'),
(557, 'App\\Models\\PatientRegistration', 100, 'authToken', 'd13707f51afcec6fab280a8c8266e44ede34c9448f7c0047ee5dc4c0fffc9166', '[\"*\"]', NULL, '2024-08-13 15:56:00', '2024-08-13 15:56:00'),
(558, 'App\\Models\\PatientRegistration', 18, 'authToken', '0b7fa5e8020cd7f23e853a95810a5d0e20a36f57a6458f2dd58efaff58f156f0', '[\"*\"]', NULL, '2024-08-13 16:00:32', '2024-08-13 16:00:32'),
(559, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a10fb7176aa2c7c157bba11f6ef65f037725c76dda61c801d6399ecf549cbe6a', '[\"*\"]', NULL, '2024-08-13 16:05:37', '2024-08-13 16:05:37'),
(560, 'App\\Models\\PatientRegistration', 25, 'authToken', '6cd41e8b9a9c567d0963bec96ad41e3da941df8df7a8c7e7da26ae27c7499e22', '[\"*\"]', NULL, '2024-08-13 16:07:15', '2024-08-13 16:07:15'),
(561, 'App\\Models\\PatientRegistration', 18, 'authToken', 'c19f1d38cfd0e08087c5972ec277dca41ab3b31c28172532153a67891bc54a48', '[\"*\"]', NULL, '2024-08-13 16:10:57', '2024-08-13 16:10:57'),
(562, 'App\\Models\\PatientRegistration', 25, 'authToken', '8db18c9fd1747b34396acd41cc4933a85b161f81ad414eaa661845a81317473f', '[\"*\"]', NULL, '2024-08-13 16:12:19', '2024-08-13 16:12:19'),
(563, 'App\\Models\\PatientRegistration', 186, 'authToken', '39bce4bbe74d8b2c819f3fa33fc06cfc81803c44472d02f9951daae48e9e10c6', '[\"*\"]', NULL, '2024-08-13 16:16:51', '2024-08-13 16:16:51'),
(564, 'App\\Models\\PatientRegistration', 112, 'authToken', '1e453529012bacec7809937dc136ab6dca88d84d33d2e6908ded3b96f9f7765d', '[\"*\"]', NULL, '2024-08-13 16:27:01', '2024-08-13 16:27:01'),
(565, 'App\\Models\\PatientRegistration', 18, 'authToken', '8f3bb635d749e5a7d6cc271b52d9c2ac340c2162dc5ebd6bd3ea1930b78716ab', '[\"*\"]', NULL, '2024-08-13 16:49:08', '2024-08-13 16:49:08'),
(566, 'App\\Models\\PatientRegistration', 18, 'authToken', '8f51f7b5be0e19c20cac547345d89a5a5a7141823c438e2cbfa8b06520c3c155', '[\"*\"]', NULL, '2024-08-13 16:57:38', '2024-08-13 16:57:38'),
(567, 'App\\Models\\PatientRegistration', 18, 'authToken', '963e95b67217a76b8e5321ce24087afd4c373bd645c8b3942a8d4320e320a938', '[\"*\"]', NULL, '2024-08-13 17:01:17', '2024-08-13 17:01:17'),
(568, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd0a4fb42ede836bdab30750def7786b8cb146c9a00dbee1f00a9df4862ed6726', '[\"*\"]', NULL, '2024-08-14 10:18:52', '2024-08-14 10:18:52'),
(569, 'App\\Models\\PatientRegistration', 100, 'authToken', '3f176161778286da6c6b1990eeeef6001a1df1c5b8cddcdfaf58279dacd134dc', '[\"*\"]', NULL, '2024-08-14 11:11:11', '2024-08-14 11:11:11'),
(570, 'App\\Models\\PatientRegistration', 25, 'authToken', '98c93277bcbacbf01d6367f8b572ec89907d69d6f0b011e0b58cf89cc3e005ba', '[\"*\"]', NULL, '2024-08-14 11:16:10', '2024-08-14 11:16:10'),
(571, 'App\\Models\\PatientRegistration', 44, 'authToken', '51f4f5a72536bb9feb60b36022862c793f1b7d9e58fad449385bb470a915ed4f', '[\"*\"]', NULL, '2024-08-14 11:55:39', '2024-08-14 11:55:39'),
(572, 'App\\Models\\PatientRegistration', 197, 'authToken', '92404b247bd5d3429313801d8a20332d5814a5c59483b4367f0f2b3664061971', '[\"*\"]', NULL, '2024-08-14 12:22:41', '2024-08-14 12:22:41'),
(573, 'App\\Models\\PatientRegistration', 177, 'authToken', '5c7145f3d176b43e81c78a31c79b47c1515723184122c1ec8dd8908cc6e6db72', '[\"*\"]', NULL, '2024-08-14 15:29:06', '2024-08-14 15:29:06'),
(574, 'App\\Models\\PatientRegistration', 100, 'authToken', '8e7034c609373b6d1d3fa9704aed679ef7d42b67351dd17e491609291b12ff14', '[\"*\"]', NULL, '2024-08-14 16:07:39', '2024-08-14 16:07:39'),
(575, 'App\\Models\\PatientRegistration', 199, 'authToken', '4963231ebb285311ca26b33048e01e295fa3919b3fb5f182c1827d3424c544e3', '[\"*\"]', NULL, '2024-08-14 16:54:02', '2024-08-14 16:54:02'),
(576, 'App\\Models\\PatientRegistration', 199, 'authToken', 'bd1ae89880e4035e3a433d8ea3be6d6169ce47b0ea54b5e17d9cd1d4c5411a96', '[\"*\"]', NULL, '2024-08-14 17:08:07', '2024-08-14 17:08:07'),
(577, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b2995a06acf8e96580146e5b4a037101fe0f1b0c9999a575f16f9c59bdd3a5a2', '[\"*\"]', NULL, '2024-08-14 17:09:31', '2024-08-14 17:09:31'),
(578, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a5f488d3747395a0d0cb20ddae5cb3489eec5881630148f48b6fcf0692d8736b', '[\"*\"]', NULL, '2024-08-14 17:09:57', '2024-08-14 17:09:57'),
(579, 'App\\Models\\PatientRegistration', 44, 'authToken', '488c4dd35cb01290392a22acd1012eace7a314093dd45bf72ac0494f0ed362e9', '[\"*\"]', NULL, '2024-08-14 17:14:17', '2024-08-14 17:14:17'),
(580, 'App\\Models\\PatientRegistration', 25, 'authToken', '0a353650c1b5b66d382a25aac0346d34eb6c7caf3e7abd46ae9259ecc0479151', '[\"*\"]', NULL, '2024-08-14 17:47:03', '2024-08-14 17:47:03'),
(581, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd87cbf9adbe7f8eedab35fd5ff8b8bd581a9c8b15252efcd85ad507390465ef7', '[\"*\"]', NULL, '2024-08-14 17:52:22', '2024-08-14 17:52:22'),
(582, 'App\\Models\\PatientRegistration', 25, 'authToken', '5ad134726501e2844f7d780c61082b5a2b02ba4f1d72bad4f8272c813a1c5718', '[\"*\"]', NULL, '2024-08-14 17:56:59', '2024-08-14 17:56:59'),
(583, 'App\\Models\\PatientRegistration', 25, 'authToken', '20e33da147af00453506c700018ddd743cbad6645e984cecddc076d44b90fe12', '[\"*\"]', NULL, '2024-08-14 17:57:30', '2024-08-14 17:57:30'),
(584, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ac344cc7fb13e1615c497e33cd793a5f3300ae4595eed10770944905eb1389a9', '[\"*\"]', NULL, '2024-08-16 10:50:45', '2024-08-16 10:50:45'),
(585, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e32b98ac89f9f954d8117174a0358460c3054cdc93a2c67a569d3fda4866abd3', '[\"*\"]', NULL, '2024-08-16 10:51:48', '2024-08-16 10:51:48'),
(586, 'App\\Models\\PatientRegistration', 25, 'authToken', '907cfef92418e16b76326ff7f000667ddec7ccb93ad8596e839a1b9430897d87', '[\"*\"]', NULL, '2024-08-16 10:59:38', '2024-08-16 10:59:38'),
(587, 'App\\Models\\PatientRegistration', 25, 'authToken', '6ee45c81b0ae96a42603dfaea7b214ebe64c1aa0057aee9ea50502c9ef1b926c', '[\"*\"]', NULL, '2024-08-16 11:00:46', '2024-08-16 11:00:46'),
(588, 'App\\Models\\PatientRegistration', 25, 'authToken', '223eb2fd976598079059489b93e992c3b185d775fa0f62602b12020b3dc810c7', '[\"*\"]', NULL, '2024-08-16 11:13:46', '2024-08-16 11:13:46'),
(589, 'App\\Models\\PatientRegistration', 25, 'authToken', '8afd560b26f35450b15fe657f3f1ccb5d19161f8939608ccd8f54e35c219e1d5', '[\"*\"]', NULL, '2024-08-16 11:19:32', '2024-08-16 11:19:32'),
(590, 'App\\Models\\PatientRegistration', 25, 'authToken', '2e41a3d413c6097b0165546d244801e66cbbb9d1ae0d85da2d0030f7b57a30a4', '[\"*\"]', NULL, '2024-08-16 11:22:39', '2024-08-16 11:22:39'),
(591, 'App\\Models\\PatientRegistration', 25, 'authToken', '4a24b7f957367978a93adcb4ba9de244f6abac962fbac4de18c5800b537bfd65', '[\"*\"]', NULL, '2024-08-16 11:33:16', '2024-08-16 11:33:16'),
(592, 'App\\Models\\PatientRegistration', 25, 'authToken', '38c133902ef232aff24050bff96752b2061b7a7114c961f90b72a74f519b1dcb', '[\"*\"]', NULL, '2024-08-16 11:45:42', '2024-08-16 11:45:42'),
(593, 'App\\Models\\PatientRegistration', 177, 'authToken', '27f713ee939a43ea8a7bf19ac72e3bf43a1fbc458ca75426b3f5c3942e293304', '[\"*\"]', NULL, '2024-08-16 11:47:51', '2024-08-16 11:47:51'),
(594, 'App\\Models\\PatientRegistration', 25, 'authToken', '2641a1db9f83b5c412eeb113bafd6884c1e63d0236edf30111ec9ee0e4bcb732', '[\"*\"]', NULL, '2024-08-16 11:49:18', '2024-08-16 11:49:18'),
(595, 'App\\Models\\PatientRegistration', 25, 'authToken', 'b5929ddeecd4892fc3819722c89165286718070bb27d18492ae8c84db75d51c1', '[\"*\"]', NULL, '2024-08-16 12:30:03', '2024-08-16 12:30:03'),
(596, 'App\\Models\\PatientRegistration', 25, 'authToken', 'cbab25ff85f97319b20c1fe079dba1b62ac57f39604c3535aa9f536e20b19e20', '[\"*\"]', NULL, '2024-08-16 12:34:19', '2024-08-16 12:34:19'),
(597, 'App\\Models\\PatientRegistration', 25, 'authToken', '334211dce3bde61758e554587792994dd15690e9230a86228fa476bca78694f7', '[\"*\"]', NULL, '2024-08-16 12:38:15', '2024-08-16 12:38:15'),
(598, 'App\\Models\\PatientRegistration', 25, 'authToken', 'efac0edb1ff757e4fe83976e26f0872d27ae82db784baf2830f65610db23255c', '[\"*\"]', NULL, '2024-08-16 12:38:52', '2024-08-16 12:38:52'),
(599, 'App\\Models\\PatientRegistration', 25, 'authToken', '93862f819cc5b186fe2d2611d767e077f57d5939a9eba40fbd600ea196574fb5', '[\"*\"]', NULL, '2024-08-16 12:52:46', '2024-08-16 12:52:46'),
(600, 'App\\Models\\PatientRegistration', 25, 'authToken', '03751e596378ede2def9b74864b37b5b151f54791981ae74fcede9e417a8b0aa', '[\"*\"]', NULL, '2024-08-16 13:02:15', '2024-08-16 13:02:15'),
(601, 'App\\Models\\PatientRegistration', 25, 'authToken', '5def2cf0c0aa13c2b1f5716eceea23425b4ad0b17a5304ce32c97f55999ea5be', '[\"*\"]', NULL, '2024-08-16 13:03:17', '2024-08-16 13:03:17'),
(602, 'App\\Models\\PatientRegistration', 25, 'authToken', 'bed13a1bfa531af8f8ed51447681e5dfda655b2b1245e2190c33fdae94eeed79', '[\"*\"]', NULL, '2024-08-16 13:03:58', '2024-08-16 13:03:58'),
(603, 'App\\Models\\PatientRegistration', 25, 'authToken', '7175163753d3a8a6d6215cbc652bc617751d2b5d503b6801301732e590b208cd', '[\"*\"]', NULL, '2024-08-16 13:04:44', '2024-08-16 13:04:44'),
(604, 'App\\Models\\PatientRegistration', 25, 'authToken', '6ce1aa6ed843e6cd8e134af5a9779d75a8c8b9c45bb6b4911d5e5c7586d68570', '[\"*\"]', NULL, '2024-08-20 14:08:17', '2024-08-20 14:08:17'),
(605, 'App\\Models\\PatientRegistration', 25, 'authToken', '5384aecb07d0ae23956aa94608600aea12ca45d434375001c336a1aa8d2c6123', '[\"*\"]', NULL, '2024-08-20 14:10:07', '2024-08-20 14:10:07'),
(606, 'App\\Models\\PatientRegistration', 25, 'authToken', 'b089f5ee5741b5c6576e53ffe5c7400912b1e6705eeaa2d59f3a5ebc1a593a75', '[\"*\"]', NULL, '2024-08-20 14:13:09', '2024-08-20 14:13:09'),
(607, 'App\\Models\\PatientRegistration', 18, 'authToken', '8aace3092caa72e2786b197c67e80e9e8e4284eb07a4e26ea5613ac17dc25dfe', '[\"*\"]', NULL, '2024-08-20 14:53:43', '2024-08-20 14:53:43'),
(608, 'App\\Models\\PatientRegistration', 25, 'authToken', '69e5ded15dd666b575ea38309e05fd5ef525317a56ab269eb13b01f86dbc556c', '[\"*\"]', NULL, '2024-08-20 15:07:30', '2024-08-20 15:07:30'),
(609, 'App\\Models\\PatientRegistration', 44, 'authToken', '16913bde564275c5ba10e106c9417120878e1bb3e0c58d8a911c30f1e91f814c', '[\"*\"]', NULL, '2024-08-20 15:28:54', '2024-08-20 15:28:54'),
(610, 'App\\Models\\PatientRegistration', 100, 'authToken', '7342851303986569b995309256614fba45d89ff215dec61df5bd520c5307365c', '[\"*\"]', NULL, '2024-08-20 16:15:53', '2024-08-20 16:15:53'),
(611, 'App\\Models\\PatientRegistration', 25, 'authToken', 'f684051fe2d9677777ed4d3d598d14189cc61374c59a38532f8305b48eba67b4', '[\"*\"]', NULL, '2024-08-20 16:24:36', '2024-08-20 16:24:36'),
(612, 'App\\Models\\PatientRegistration', 25, 'authToken', 'b96a0e8c6f5f50181f54d64f8f9c8ea2cec70535490a1bf94dccedf00d16f505', '[\"*\"]', NULL, '2024-08-20 16:27:13', '2024-08-20 16:27:13'),
(613, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd478990f5b5815fe6cf4fda784e56e0bd126dfee3f4feb602e44d093febb11fe', '[\"*\"]', NULL, '2024-08-20 16:32:47', '2024-08-20 16:32:47'),
(614, 'App\\Models\\PatientRegistration', 25, 'authToken', '91499b9a39b3f991be3321ed8e05fe44d487d11666594a30656af6a41aa8eff8', '[\"*\"]', NULL, '2024-08-20 16:37:29', '2024-08-20 16:37:29'),
(615, 'App\\Models\\PatientRegistration', 100, 'authToken', '6cff2745bb837bc3b90f4c0f67c30b5b2dab301e444801e28e321f6c22d0ec4e', '[\"*\"]', NULL, '2024-08-20 17:06:43', '2024-08-20 17:06:43'),
(616, 'App\\Models\\PatientRegistration', 44, 'authToken', '7224c81ef9851695fa07db582f1b7ddd2c92070eccdb6ce917b5e3de3a86b117', '[\"*\"]', NULL, '2024-08-20 17:09:29', '2024-08-20 17:09:29'),
(617, 'App\\Models\\PatientRegistration', 25, 'authToken', '2085df8d4125a9fb5d6d166be332bb6e1598f99738db65cf7e1ef52e32d6f4c5', '[\"*\"]', NULL, '2024-08-20 17:14:20', '2024-08-20 17:14:20'),
(618, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b5fc93b38e901592063691642b629d163fcaa4a197d461c1663ecd741591bac1', '[\"*\"]', NULL, '2024-08-20 17:24:41', '2024-08-20 17:24:41'),
(619, 'App\\Models\\PatientRegistration', 25, 'authToken', 'c71cc72d7ea14fb01cc3542927e2cc01d502353f0ad234d7c9093c8a45b0b493', '[\"*\"]', NULL, '2024-08-20 17:49:12', '2024-08-20 17:49:12'),
(620, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e0d59216fd027ee70ac5fa612a311700bf15b1e891903a61b6a2a9a9559d6812', '[\"*\"]', NULL, '2024-08-20 17:50:48', '2024-08-20 17:50:48'),
(621, 'App\\Models\\PatientRegistration', 25, 'authToken', 'ed8e9f601d625df136affca3f9555ceaab3c1927d008e4f492deb2b0d8c011b2', '[\"*\"]', NULL, '2024-08-20 17:57:08', '2024-08-20 17:57:08'),
(622, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a44b1e0296ba20312a7f0e3c2d48e61bf50fe96815d33f60262180aeaf2b68c2', '[\"*\"]', NULL, '2024-08-21 10:07:44', '2024-08-21 10:07:44'),
(623, 'App\\Models\\PatientRegistration', 25, 'authToken', '138f2d930f94651afdf853ed55d7a3e81b5e91a6d6baa13ea6403ddfbf442d5d', '[\"*\"]', NULL, '2024-08-21 10:30:46', '2024-08-21 10:30:46'),
(624, 'App\\Models\\PatientRegistration', 25, 'authToken', '4d763c1d41c26bfd6a0c4f214e717af38d4b81103bc88687206e7a99ca207200', '[\"*\"]', NULL, '2024-08-21 15:52:41', '2024-08-21 15:52:41'),
(625, 'App\\Models\\PatientRegistration', 44, 'authToken', 'd2c290293f3fbae0da0e08307b3a286bcbaa55765267b489492daf47ba0efa4f', '[\"*\"]', NULL, '2024-08-21 17:47:59', '2024-08-21 17:47:59'),
(626, 'App\\Models\\PatientRegistration', 18, 'authToken', '0d047182100b73941372869e21c40e8c44e0037253e5e338b65e5dae5a50624c', '[\"*\"]', NULL, '2024-08-21 18:51:29', '2024-08-21 18:51:29'),
(627, 'App\\Models\\PatientRegistration', 25, 'authToken', '34ab0e44f504b6404aea1faff397e218a1d933114f3ab1bcef10fdaa29d0fc07', '[\"*\"]', NULL, '2024-08-21 20:55:03', '2024-08-21 20:55:03'),
(628, 'App\\Models\\PatientRegistration', 18, 'authToken', '1361b8438bfed58c32f27cc51e454d3e31614b1df9369e1f34611a654b6d64ae', '[\"*\"]', NULL, '2024-08-21 21:45:29', '2024-08-21 21:45:29'),
(629, 'App\\Models\\PatientRegistration', 44, 'authToken', 'd5d5af2dc41938ff03798baf8c587b8974d12a4e0247beef036512224e41dd84', '[\"*\"]', NULL, '2024-08-21 22:52:01', '2024-08-21 22:52:01'),
(630, 'App\\Models\\PatientRegistration', 44, 'authToken', 'd0573ba4110248aa5f97eaa1a1e4f6ea8e445e0efa48a501ec172596b863ed9b', '[\"*\"]', NULL, '2024-08-22 02:51:15', '2024-08-22 02:51:15'),
(631, 'App\\Models\\PatientRegistration', 18, 'authToken', 'ee2f883909b7187dc4431c52fbc673a9ecc9ba8191b6d5ba5804b02dd9cc7863', '[\"*\"]', NULL, '2024-08-22 09:36:29', '2024-08-22 09:36:29'),
(632, 'App\\Models\\PatientRegistration', 44, 'authToken', 'ef217388ed61a20ef097a8ad414a2a2a33eaf92ba24c7c6b1920b59bddcbb905', '[\"*\"]', NULL, '2024-08-22 11:10:14', '2024-08-22 11:10:14'),
(633, 'App\\Models\\PatientRegistration', 18, 'authToken', 'f39e4b80569b7ae68bd68e98b5d80b96a6efb9f7ace6d3ee22433e2022a1e48d', '[\"*\"]', NULL, '2024-08-22 11:38:59', '2024-08-22 11:38:59'),
(634, 'App\\Models\\PatientRegistration', 18, 'authToken', '51d122d52d35da5cf386604f552d44561b102f637c2a6a3e23e3bbffc91b864f', '[\"*\"]', NULL, '2024-08-22 11:38:59', '2024-08-22 11:38:59'),
(635, 'App\\Models\\PatientRegistration', 17, 'authToken', 'e452ca8c6f9b657d71846316ff0f648d979218235f8aadeeca7fba32c3d8c37b', '[\"*\"]', NULL, '2024-08-22 13:25:53', '2024-08-22 13:25:53'),
(636, 'App\\Models\\PatientRegistration', 17, 'authToken', '50129a6b115299fae78642074170070c8a062e6164911669f5bd4f03f72bd31a', '[\"*\"]', NULL, '2024-08-22 13:26:13', '2024-08-22 13:26:13'),
(637, 'App\\Models\\PatientRegistration', 100, 'authToken', '02782b2f356d138bdefc84da768907af2c5ea80dd3b89ad1c43b92f099a209f1', '[\"*\"]', NULL, '2024-08-22 17:30:46', '2024-08-22 17:30:46'),
(638, 'App\\Models\\PatientRegistration', 44, 'authToken', '923a8b3e0de2b88d9ab3dc2023e4b1ad0b25706582ab88301f788aaa820783aa', '[\"*\"]', NULL, '2024-08-22 18:54:36', '2024-08-22 18:54:36'),
(639, 'App\\Models\\PatientRegistration', 44, 'authToken', 'eeecbb92145c4043f89ff21a065414636671094b3bec715ea451ecce31975693', '[\"*\"]', NULL, '2024-08-23 09:43:15', '2024-08-23 09:43:15'),
(640, 'App\\Models\\PatientRegistration', 112, 'authToken', '8853f5ac23b121d73aa88fc39097cd06db77c61a15418165c698027b5f7d3957', '[\"*\"]', NULL, '2024-08-23 09:51:49', '2024-08-23 09:51:49'),
(641, 'App\\Models\\PatientRegistration', 82, 'authToken', '3c94bf8d79bbe4c7d423ef07a7e30a8cc56b78594d599996a4180fa989790cd5', '[\"*\"]', NULL, '2024-08-23 09:53:03', '2024-08-23 09:53:03'),
(642, 'App\\Models\\PatientRegistration', 18, 'authToken', 'ed33048c5e437cf1f7cc42008e5e0404e890a307f6eaaa2a455d411546cb1265', '[\"*\"]', NULL, '2024-08-23 09:56:10', '2024-08-23 09:56:10'),
(643, 'App\\Models\\PatientRegistration', 18, 'authToken', '98aff29e595f3547b03f22fd2c9144fbf1e61173635c711c03cf4d70f400e504', '[\"*\"]', NULL, '2024-08-23 09:59:59', '2024-08-23 09:59:59'),
(644, 'App\\Models\\PatientRegistration', 112, 'authToken', '939733f1ba97948f070f6b64df0a03d2d08492a09d7cf46ef35a8d3fcaf7cb18', '[\"*\"]', NULL, '2024-08-23 10:03:17', '2024-08-23 10:03:17'),
(645, 'App\\Models\\PatientRegistration', 112, 'authToken', 'a24b2884f5152cf45108f775ab6218ae55cbe9ec26ef2326bd9d0e1796a2e777', '[\"*\"]', NULL, '2024-08-23 10:04:36', '2024-08-23 10:04:36'),
(646, 'App\\Models\\PatientRegistration', 112, 'authToken', '6b9a754347474980037d798bb336ef66fec87cf624089380f045bd788e067cf0', '[\"*\"]', NULL, '2024-08-23 10:07:43', '2024-08-23 10:07:43'),
(647, 'App\\Models\\PatientRegistration', 82, 'authToken', 'cb0781d957e2678cc060313112c71f85594ee86698188b6179ab0b386cfe48d8', '[\"*\"]', NULL, '2024-08-23 10:08:43', '2024-08-23 10:08:43'),
(648, 'App\\Models\\PatientRegistration', 82, 'authToken', '692d415012b94aef9089f148c4688edff62e7559c6e0e6ea422db9054908031c', '[\"*\"]', NULL, '2024-08-23 10:10:36', '2024-08-23 10:10:36'),
(649, 'App\\Models\\PatientRegistration', 18, 'authToken', '7c60b5e8f1b6c808c552f186491177c318f670d7498ba655947325891f7548c2', '[\"*\"]', NULL, '2024-08-23 10:15:09', '2024-08-23 10:15:09'),
(650, 'App\\Models\\PatientRegistration', 18, 'authToken', 'b027ac692ef37b11dcd42b46947f0bf4bb8f29d06cb4bb16ee5474bb8a5c08c4', '[\"*\"]', NULL, '2024-08-23 10:20:32', '2024-08-23 10:20:32'),
(651, 'App\\Models\\PatientRegistration', 82, 'authToken', '12b365b89e91b47618b6a98654b42b108f07a9b72344a458d14199e72aff02bf', '[\"*\"]', NULL, '2024-08-23 10:26:12', '2024-08-23 10:26:12'),
(652, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e86c6520b41ab7c751fe05689895d2b18206c20d964aea1ce00fcf107be733a8', '[\"*\"]', NULL, '2024-08-23 10:26:27', '2024-08-23 10:26:27'),
(653, 'App\\Models\\PatientRegistration', 20, 'authToken', 'b65bb76b526065168d40c0b9cf0a683abef1ac8ff4c0c2f26732347364217116', '[\"*\"]', NULL, '2024-08-23 10:26:31', '2024-08-23 10:26:31'),
(654, 'App\\Models\\PatientRegistration', 100, 'authToken', 'd44a6bd6c95fec677991aba83d7a1a83f86ce706b1885e9edc8a93c4f3e9bfb7', '[\"*\"]', NULL, '2024-08-23 10:27:15', '2024-08-23 10:27:15'),
(655, 'App\\Models\\PatientRegistration', 25, 'authToken', '0b2c9a06961729e7d033c1b8e8b6dafa733940b420431122f500971eb4cd1c04', '[\"*\"]', NULL, '2024-08-23 10:31:03', '2024-08-23 10:31:03'),
(656, 'App\\Models\\PatientRegistration', 177, 'authToken', 'eef377c69d7f29a7b4447bbbebfe0d622f527dee7f345443ebccf5c7afdd985d', '[\"*\"]', NULL, '2024-08-23 11:23:03', '2024-08-23 11:23:03'),
(657, 'App\\Models\\PatientRegistration', 25, 'authToken', '5b67a6f8abe13d44357d95247267583103eb6c4effedd067f4c012ed98016646', '[\"*\"]', NULL, '2024-08-23 11:27:35', '2024-08-23 11:27:35'),
(658, 'App\\Models\\PatientRegistration', 18, 'authToken', 'cf08775ae141c002234404e09b4873f8e6504d666adeb5a42c7a47001b96ef66', '[\"*\"]', NULL, '2024-08-23 11:37:04', '2024-08-23 11:37:04'),
(659, 'App\\Models\\PatientRegistration', 44, 'authToken', '40bcf138f32042229745bae0d35715e46905f38b823eda1d56df42cb34eeeb61', '[\"*\"]', NULL, '2024-08-23 11:41:19', '2024-08-23 11:41:19'),
(660, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a0c32255c73a7dc6fb58f7bd395bfbf60745bacf07db287f1716913fd82ff304', '[\"*\"]', NULL, '2024-08-23 12:19:45', '2024-08-23 12:19:45'),
(661, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e469c2b417d28a5e666a8408560fa75dcc2dcd252274dceb19aa39df30962cd2', '[\"*\"]', NULL, '2024-08-23 12:31:29', '2024-08-23 12:31:29'),
(662, 'App\\Models\\PatientRegistration', 18, 'authToken', '8327d2ac9921374487df9b0835e25c2be339e4f244d36fe048f5de12fecf05d3', '[\"*\"]', NULL, '2024-08-23 15:57:13', '2024-08-23 15:57:13'),
(663, 'App\\Models\\PatientRegistration', 44, 'authToken', '1193fec4e670f1c939f61d997ccd4a8b1d655b77684007f665c1a302ccdbde7d', '[\"*\"]', NULL, '2024-08-23 18:18:31', '2024-08-23 18:18:31'),
(664, 'App\\Models\\PatientRegistration', 82, 'authToken', 'c2e0b91c5c74175ed2cf163ba4284bfc741534d5d70c0a5117d86825f394591b', '[\"*\"]', NULL, '2024-08-23 18:40:52', '2024-08-23 18:40:52'),
(665, 'App\\Models\\PatientRegistration', 20, 'authToken', '986c1ab12ca1840365b0cec406e0726867d1b33fb411d8e8e920879616c7c650', '[\"*\"]', NULL, '2024-08-23 18:41:18', '2024-08-23 18:41:18'),
(666, 'App\\Models\\PatientRegistration', 112, 'authToken', 'e04f1d2652ee595ab2ac7bf0fea8f3f6ae65a39ccd4c88c37960a1f006fc1d83', '[\"*\"]', NULL, '2024-08-23 18:43:49', '2024-08-23 18:43:49'),
(667, 'App\\Models\\PatientRegistration', 18, 'authToken', '79161ff4556f126df64c6968bf544fd2d00d85e7e712f183448c5d4f704c712f', '[\"*\"]', NULL, '2024-08-23 18:45:21', '2024-08-23 18:45:21'),
(668, 'App\\Models\\PatientRegistration', 82, 'authToken', 'db395173d9cac36b87f9c57226627f2a828e77edef7fe3e7ae18c5c951eeac6e', '[\"*\"]', NULL, '2024-08-23 18:47:50', '2024-08-23 18:47:50'),
(669, 'App\\Models\\PatientRegistration', 299, 'authToken', '14ae8e541ad707647318d1ccd079ea493392b164f3edceda450e5b20491d5391', '[\"*\"]', NULL, '2024-08-23 19:35:37', '2024-08-23 19:35:37'),
(670, 'App\\Models\\PatientRegistration', 299, 'authToken', 'a85ff7f43a8dd9c1b05106335b8746b6cf567d8a10a26c091cd0f76f1ffb84c2', '[\"*\"]', NULL, '2024-08-23 20:04:32', '2024-08-23 20:04:32'),
(671, 'App\\Models\\PatientRegistration', 17, 'authToken', '957a9825665847a92950cb2f887ef6209cc49eacb91e864472bee2da040b7eaa', '[\"*\"]', NULL, '2024-08-23 20:17:36', '2024-08-23 20:17:36'),
(672, 'App\\Models\\PatientRegistration', 299, 'authToken', '6a094ffea5759bc4db3b10819ac1585b670fb892ff1560bfa58a49e7ce23c93f', '[\"*\"]', NULL, '2024-08-23 22:12:36', '2024-08-23 22:12:36'),
(673, 'App\\Models\\PatientRegistration', 25, 'authToken', 'a18931cec934b6ce4488aea645124927ea0320cb44d927d51df1591588041138', '[\"*\"]', NULL, '2024-08-24 15:15:20', '2024-08-24 15:15:20'),
(674, 'App\\Models\\PatientRegistration', 299, 'authToken', 'a984ab9c65cf8834d0ae7c56fc4c7056aea8a9cf4bc610add19573dae4b3aeaf', '[\"*\"]', NULL, '2024-08-24 16:08:57', '2024-08-24 16:08:57'),
(675, 'App\\Models\\PatientRegistration', 299, 'authToken', '97c2681b52c411e016a0e7da67b68e2938e7eaa229e0594148986d5051ed57be', '[\"*\"]', NULL, '2024-08-24 16:21:57', '2024-08-24 16:21:57'),
(676, 'App\\Models\\PatientRegistration', 299, 'authToken', '4828c32fcdd5d98ae279e08cde2750cbe331fc4ec95dbc1c51c48de4cb02134c', '[\"*\"]', NULL, '2024-08-24 17:03:38', '2024-08-24 17:03:38'),
(677, 'App\\Models\\PatientRegistration', 112, 'authToken', '49feea62c068750ddbcd075c25699a6e4ce4580b6b6f4c0fe067f49088159a41', '[\"*\"]', NULL, '2024-08-24 17:07:05', '2024-08-24 17:07:05'),
(678, 'App\\Models\\PatientRegistration', 299, 'authToken', '4834135a55818d2a55577514710b63015545f9f67224e2fe2bded7732a8b3689', '[\"*\"]', NULL, '2024-08-24 17:25:48', '2024-08-24 17:25:48'),
(679, 'App\\Models\\PatientRegistration', 25, 'authToken', 'e1ebdba5b1d2d9d8e489d668db06bb1071a2777103b4fbeeac0bbec12f9d064b', '[\"*\"]', NULL, '2024-08-24 23:11:12', '2024-08-24 23:11:12'),
(680, 'App\\Models\\PatientRegistration', 299, 'authToken', '40da7863adfafb759539e9c1d975b9d42258ec85dc6c1772415cce49901ac9f8', '[\"*\"]', NULL, '2024-08-25 13:56:59', '2024-08-25 13:56:59'),
(681, 'App\\Models\\PatientRegistration', 299, 'authToken', 'acda627e4651608f4d98eba1f75a7aae1cade343d6d42525463e5aac368f6975', '[\"*\"]', NULL, '2024-08-25 17:31:33', '2024-08-25 17:31:33'),
(682, 'App\\Models\\PatientRegistration', 18, 'authToken', 'f91ffa1626537eb346bcf21b1d54bc03eb7eb094bec1251518d1b054af47c301', '[\"*\"]', NULL, '2024-08-26 09:56:43', '2024-08-26 09:56:43'),
(683, 'App\\Models\\PatientRegistration', 25, 'authToken', 'd48ec94b737a4c4454404b104ada5ce3a1164049c28a54b63a1b1bc970eab2d5', '[\"*\"]', NULL, '2024-08-26 11:59:52', '2024-08-26 11:59:52'),
(684, 'App\\Models\\PatientRegistration', 18, 'authToken', '5a1d0c9486161ac7a12148f858f23ed8a21f32860dea0473395f6375740a27af', '[\"*\"]', NULL, '2024-08-26 14:17:32', '2024-08-26 14:17:32'),
(685, 'App\\Models\\PatientRegistration', 18, 'authToken', '3754d596d86c915c59d6e5e05f8f4412053adb361a6ef2e558e7218fc7411a1d', '[\"*\"]', NULL, '2024-08-26 16:13:59', '2024-08-26 16:13:59'),
(686, 'App\\Models\\PatientRegistration', 18, 'authToken', 'a391ef13e9bf3d395f7c3e91d0acd3c0da1999b16fc3b6a1f38fb7d2349ec551', '[\"*\"]', NULL, '2024-08-26 16:39:54', '2024-08-26 16:39:54'),
(687, 'App\\Models\\PatientRegistration', 25, 'authToken', '039d98c6495b59277deef5b2406b15af7bc8c235fb562bbece01ce900bf49aef', '[\"*\"]', NULL, '2024-08-26 16:41:52', '2024-08-26 16:41:52'),
(688, 'App\\Models\\PatientRegistration', 186, 'authToken', '17d4f2de758430be254d7f9e03beab42d7ac02c9049c4602b0bfbb74d0b29857', '[\"*\"]', NULL, '2024-08-26 16:43:47', '2024-08-26 16:43:47'),
(689, 'App\\Models\\PatientRegistration', 25, 'authToken', '856d0188556d172c3e65160c501a7297611f494e71bf969d7d5f61ae6fd48a37', '[\"*\"]', NULL, '2024-08-26 17:59:46', '2024-08-26 17:59:46'),
(690, 'App\\Models\\PatientRegistration', 44, 'authToken', '228037cfb8cc2f19c6a196e0488fb15ab06bdebdd63b8b697e160ec9952ccf47', '[\"*\"]', NULL, '2024-08-27 10:05:59', '2024-08-27 10:05:59'),
(691, 'App\\Models\\PatientRegistration', 25, 'authToken', '0a8d4b74919d5b7ee3b7712a9844bc67f7d16886d18fca566dfd162f181923c2', '[\"*\"]', NULL, '2024-08-27 10:17:39', '2024-08-27 10:17:39'),
(692, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b3b98d853a2e9b7d919d72a1cf496341067d6e2e0b52d2b86900de0deb151b61', '[\"*\"]', NULL, '2024-08-27 12:15:00', '2024-08-27 12:15:00'),
(693, 'App\\Models\\PatientRegistration', 18, 'authToken', 'baf9e36b99fae74a7cebff3f6a5c9c0748f7f76f80763dfe396dace9a3d2cb5b', '[\"*\"]', NULL, '2024-08-27 12:28:21', '2024-08-27 12:28:21'),
(694, 'App\\Models\\PatientRegistration', 100, 'authToken', '9772431ff3f4a464adb5b72f26e3ca39eb1ca2b4f8e18e11b574e703dddfb6ba', '[\"*\"]', NULL, '2024-08-27 12:44:08', '2024-08-27 12:44:08'),
(695, 'App\\Models\\PatientRegistration', 18, 'authToken', 'e06d1cec0aad2b64439c72b17f9bb691c81259c183596f8d18ff5962785f97e6', '[\"*\"]', NULL, '2024-08-27 12:59:57', '2024-08-27 12:59:57'),
(696, 'App\\Models\\PatientRegistration', 342, 'authToken', '7f5bc4504d561af2dc982bdac34a0175278fb6700c6f996180608500d6bc3e5e', '[\"*\"]', NULL, '2024-08-27 14:07:48', '2024-08-27 14:07:48'),
(697, 'App\\Models\\PatientRegistration', 44, 'authToken', '98b6026092602f2edaf8782391054037ae59cd541a0d41dcdf8ea3009225d126', '[\"*\"]', NULL, '2024-08-27 14:11:17', '2024-08-27 14:11:17'),
(698, 'App\\Models\\PatientRegistration', 18, 'authToken', 'b92173e6ff749fc94ec7f54a2dbd8e6aad72874807877589f8faff168bc0b8c4', '[\"*\"]', NULL, '2024-08-27 14:14:54', '2024-08-27 14:14:54'),
(699, 'App\\Models\\PatientRegistration', 25, 'authToken', '9055f1f9135f07e5035372972d6849d9a37154ff7fe6bfdc13be34a3cd4a2a8c', '[\"*\"]', NULL, '2024-08-27 15:28:36', '2024-08-27 15:28:36'),
(700, 'App\\Models\\PatientRegistration', 18, 'authToken', '92baaf2735970797da3857b63956acceb6d6004da32690cd629efd2d4d723324', '[\"*\"]', NULL, '2024-08-27 17:07:23', '2024-08-27 17:07:23'),
(701, 'App\\Models\\PatientRegistration', 18, 'authToken', '12f5f73759477f83100589b1458f1c41b3dfa93c2de6e81cb85dcc197e05418f', '[\"*\"]', NULL, '2024-08-28 11:49:33', '2024-08-28 11:49:33'),
(702, 'App\\Models\\PatientRegistration', 299, 'authToken', '6724906b09dfa1b914e51ceae489cbbe1b2fb8e9cce2e35b405fdf532b96a32e', '[\"*\"]', NULL, '2024-08-28 12:32:45', '2024-08-28 12:32:45'),
(703, 'App\\Models\\PatientRegistration', 18, 'authToken', '0649847252b4a538cc18a7319e13572a4a8128bea8cb671eff4ca39cab1a1899', '[\"*\"]', NULL, '2024-08-28 12:51:55', '2024-08-28 12:51:55'),
(704, 'App\\Models\\PatientRegistration', 18, 'authToken', 'b765d6302778e927b965fd45b195ab3faa13651c275ec4af8800d0e10dc0a880', '[\"*\"]', NULL, '2024-08-28 12:52:12', '2024-08-28 12:52:12'),
(705, 'App\\Models\\PatientRegistration', 199, 'authToken', '15b987088b178d6c37775950777e570d2204b4e35a9df19b3d591de3034ae57d', '[\"*\"]', NULL, '2024-08-28 15:25:18', '2024-08-28 15:25:18'),
(706, 'App\\Models\\PatientRegistration', 18, 'authToken', '86d4693ec5575ad3c198b9b9d158d936563063aa004c61759c8d57ebc0f632c4', '[\"*\"]', NULL, '2024-08-28 15:31:43', '2024-08-28 15:31:43'),
(707, 'App\\Models\\PatientRegistration', 18, 'authToken', '74ec4373e06501a9a249f320e07afd58b47bc5d2f139ea21b3a6a96ad2289c4e', '[\"*\"]', NULL, '2024-08-29 09:39:28', '2024-08-29 09:39:28'),
(708, 'App\\Models\\PatientRegistration', 199, 'authToken', 'b4fc2c8e032c66baf28a0f4ecdb1f21f9b15eda2c6085562bb35ec9b9e63fd63', '[\"*\"]', NULL, '2024-08-29 09:39:28', '2024-08-29 09:39:28'),
(709, 'App\\Models\\PatientRegistration', 112, 'authToken', 'b8350ed540be00b42ff76128cc51de93d6df901264a0dc86478dc5181e345742', '[\"*\"]', NULL, '2024-08-29 11:35:46', '2024-08-29 11:35:46'),
(710, 'App\\Models\\PatientRegistration', 44, 'authToken', '2af05d4e4629e3ce9dfffff3d6d601b13f8df769f7748ab51a484e4953335a5a', '[\"*\"]', NULL, '2024-08-29 12:45:29', '2024-08-29 12:45:29'),
(711, 'App\\Models\\PatientRegistration', 199, 'authToken', 'ea3b419d7a1ed52e64b25eaa0d84343752bd99f8223c801a8b987c06a6a25ce6', '[\"*\"]', NULL, '2024-08-29 18:14:42', '2024-08-29 18:14:42'),
(712, 'App\\Models\\PatientRegistration', 18, 'authToken', '05e091ba9304ff9b5354d65ea5356eac5a8a147a0db8d28adc23357e2622d803', '[\"*\"]', NULL, '2024-08-30 10:22:45', '2024-08-30 10:22:45'),
(713, 'App\\Models\\PatientRegistration', 44, 'authToken', '154819fa6891837c231bf82e50663892a232209a794ab40d840b37238502f648', '[\"*\"]', NULL, '2024-08-30 18:23:49', '2024-08-30 18:23:49'),
(714, 'App\\Models\\PatientRegistration', 299, 'authToken', 'fa4c93fc94870f2c55ca224086382d0b277b91543f12d71a6a4dc47d653547ff', '[\"*\"]', NULL, '2024-09-01 11:30:06', '2024-09-01 11:30:06'),
(715, 'App\\Models\\PatientRegistration', 112, 'authToken', '02b133308559b90b8268b669e44b652deb741c9b01d492272d7f1e7aaffd0caf', '[\"*\"]', NULL, '2024-09-03 14:06:07', '2024-09-03 14:06:07'),
(716, 'App\\Models\\PatientRegistration', 100, 'authToken', '7b1cb33a0dd3a0b3eb246e7a1d1b3b5a34fb1c17e31d9356fe6b8f5f456cc827', '[\"*\"]', NULL, '2024-09-03 15:25:48', '2024-09-03 15:25:48'),
(717, 'App\\Models\\PatientRegistration', 44, 'authToken', '8f53c70c64f4aaa491c027725f198ec1e73b250a52c7d34c5e2788c0b32098fc', '[\"*\"]', NULL, '2024-09-04 12:37:16', '2024-09-04 12:37:16'),
(718, 'App\\Models\\PatientRegistration', 44, 'authToken', '435e963ea27070bc5917e7cae3500f30606db8002b7743e5b7020b31c8466be3', '[\"*\"]', NULL, '2024-09-04 14:13:27', '2024-09-04 14:13:27'),
(719, 'App\\Models\\PatientRegistration', 44, 'authToken', '428c507b5515b126b888e965b60cda9994b9a9b6ea6b77d1f93c36cc0e450ff8', '[\"*\"]', NULL, '2024-09-04 15:54:22', '2024-09-04 15:54:22'),
(720, 'App\\Models\\PatientRegistration', 44, 'authToken', '5d8ba03cb76db89eee3c654e75ea331931359349f0a9953da63ae85775f19d56', '[\"*\"]', NULL, '2024-09-04 15:56:39', '2024-09-04 15:56:39'),
(721, 'App\\Models\\PatientRegistration', 299, 'authToken', 'ef9a908cd35be49b8d7c991e6f983190866c2cd981708e91389d6e9b111b5992', '[\"*\"]', NULL, '2024-09-04 15:57:44', '2024-09-04 15:57:44'),
(722, 'App\\Models\\PatientRegistration', 18, 'authToken', '39cc9e3cfa2185c7b08aca0ceab225f146eced2ac41c5fb60e648f0113c780ef', '[\"*\"]', NULL, '2024-09-04 17:42:02', '2024-09-04 17:42:02'),
(723, 'App\\Models\\PatientRegistration', 18, 'authToken', '171a1acf0469f34aa84b3526ef9a168e40cdf0cf05086fa9bbbf89cab83ea65e', '[\"*\"]', NULL, '2024-09-04 17:56:43', '2024-09-04 17:56:43'),
(724, 'App\\Models\\PatientRegistration', 403, 'authToken', 'c22e6f0a18e512a8130531d6e7b8190b662b9734630c4ab434fcfdc83cc42d7a', '[\"*\"]', NULL, '2024-09-05 10:04:31', '2024-09-05 10:04:31'),
(725, 'App\\Models\\PatientRegistration', 403, 'authToken', '2f86288ab2949e73cab07bb9e3a2f620dd90d16990cd7ec797c7bfdbc268333b', '[\"*\"]', NULL, '2024-09-05 10:05:02', '2024-09-05 10:05:02'),
(726, 'App\\Models\\PatientRegistration', 403, 'authToken', '2859b6e3ef70f7c8cc7772926723bb63ce4d9036db49213ae59507fe12946e51', '[\"*\"]', NULL, '2024-09-05 10:05:45', '2024-09-05 10:05:45'),
(727, 'App\\Models\\PatientRegistration', 18, 'authToken', 'f032cc4f5c93db60cd9581ae1bdadb19db8a29ceeb58a577f038426512532f80', '[\"*\"]', NULL, '2024-09-05 10:24:37', '2024-09-05 10:24:37'),
(728, 'App\\Models\\PatientRegistration', 44, 'authToken', 'cb6d1f30bed078144f100eaa6ee151d2b46043feb825a55d8fb812eafa9bfbd4', '[\"*\"]', NULL, '2024-09-05 10:58:49', '2024-09-05 10:58:49'),
(729, 'App\\Models\\PatientRegistration', 299, 'authToken', 'e1cfcda8f64e9acd58e7a93e8890bfb3cb7c66cce6be02c93d4389add6718889', '[\"*\"]', NULL, '2024-09-05 11:52:12', '2024-09-05 11:52:12'),
(730, 'App\\Models\\PatientRegistration', 18, 'authToken', '9daee93f6dcf2dad93d668de17f7293c56537f1a1701ab2bffa9ca2d8f087737', '[\"*\"]', NULL, '2024-09-05 16:06:22', '2024-09-05 16:06:22'),
(731, 'App\\Models\\PatientRegistration', 10, 'authToken', '8b301584efcf26616500512a14ab130f5c6e4da0af0bf07bc875b2db8ed7d764', '[\"*\"]', NULL, '2024-09-05 17:48:00', '2024-09-05 17:48:00'),
(732, 'App\\Models\\PatientRegistration', 403, 'authToken', '8d673e8c6a44c06499ddf5cc3bcf346555fdb42bef408ae209e25cec5c531adc', '[\"*\"]', NULL, '2024-09-05 17:49:04', '2024-09-05 17:49:04'),
(733, 'App\\Models\\PatientRegistration', 10, 'authToken', '771daef5be5de4a3a0a88bbbce3512827336217c819e184a28d9d1aba7e759d7', '[\"*\"]', NULL, '2024-09-05 17:51:59', '2024-09-05 17:51:59'),
(734, 'App\\Models\\PatientRegistration', 10, 'authToken', '5350f793a6fb51a713f73c3e07fcebb26d6ec3160434a4d39595e6919e0ae9ed', '[\"*\"]', NULL, '2024-09-05 17:52:37', '2024-09-05 17:52:37'),
(735, 'App\\Models\\PatientRegistration', 10, 'authToken', '8167e8f64814b56a8f23a98f20ffa0a972f3c32f2898c56aee26174cfce0656d', '[\"*\"]', NULL, '2024-09-05 17:54:53', '2024-09-05 17:54:53'),
(736, 'App\\Models\\PatientRegistration', 44, 'authToken', '8a374d6f6371e28b14b11244cb608a4ec39b1cb9e485f159781b663f4eebc475', '[\"*\"]', NULL, '2024-09-05 17:57:40', '2024-09-05 17:57:40'),
(737, 'App\\Models\\PatientRegistration', 403, 'authToken', '9bdc47382eb2098030b0ffe8328d1f92539999f020c2e53cdd14361b9ab26e7b', '[\"*\"]', NULL, '2024-09-06 09:20:16', '2024-09-06 09:20:16'),
(738, 'App\\Models\\PatientRegistration', 44, 'authToken', '2063affdcbffe97d66b9e455b42ab80b727ec13ae39ca27033d5a424b048e86a', '[\"*\"]', NULL, '2024-09-06 10:05:58', '2024-09-06 10:05:58'),
(739, 'App\\Models\\PatientRegistration', 44, 'authToken', '2b62ef680c40585480f6493d2fc4aa9bb16c57d0cbed701db5fd8b3472ffa34f', '[\"*\"]', NULL, '2024-09-06 10:13:35', '2024-09-06 10:13:35'),
(740, 'App\\Models\\PatientRegistration', 18, 'authToken', '9d70bc276c894def2bfcd1e708a3e078df2194f3d924f6d0de0e631364294d3c', '[\"*\"]', NULL, '2024-09-06 10:20:36', '2024-09-06 10:20:36'),
(741, 'App\\Models\\PatientRegistration', 10, 'authToken', '1214be4caddfdc8c6b3f827c9aad630dca93c3140a47afc039a9ea1cf23856bb', '[\"*\"]', NULL, '2024-09-06 10:54:12', '2024-09-06 10:54:12'),
(742, 'App\\Models\\PatientRegistration', 10, 'authToken', '3a5020a76a6e45b21eb4b9b9cda3b3f7a166708e618ef2ad713cdadc5c62e930', '[\"*\"]', NULL, '2024-09-06 11:06:09', '2024-09-06 11:06:09'),
(743, 'App\\Models\\PatientRegistration', 10, 'authToken', 'c7eff1d75e82e51456fae052778c0954d7ac307e2124926ab58626550f65e382', '[\"*\"]', NULL, '2024-09-06 11:07:21', '2024-09-06 11:07:21'),
(744, 'App\\Models\\PatientRegistration', 10, 'authToken', '4cfd7606c89c6f4d4a31fb3edb83ad92618c6459f877b50d5bc9f2bbfc028787', '[\"*\"]', NULL, '2024-09-06 11:08:26', '2024-09-06 11:08:26'),
(745, 'App\\Models\\PatientRegistration', 407, 'authToken', '705914efdd9052b006e3e5f006b95c00e100c72aa46f294a5c6f838f6fc67dec', '[\"*\"]', NULL, '2024-09-06 12:59:38', '2024-09-06 12:59:38'),
(746, 'App\\Models\\PatientRegistration', 407, 'authToken', 'be228a85aed15abe37096b472c7583f7bf0b6f509afd70a09e9b5abb29c4ad28', '[\"*\"]', NULL, '2024-09-06 14:14:15', '2024-09-06 14:14:15'),
(747, 'App\\Models\\PatientRegistration', 403, 'authToken', '6d82f008036633c1aab1fc11fedfc062051dc18fc85c45908c49cdcaa58a0551', '[\"*\"]', NULL, '2024-09-06 15:28:18', '2024-09-06 15:28:18'),
(748, 'App\\Models\\PatientRegistration', 407, 'authToken', '6e47526703ef6d795102c3e97a151277f4b9cbd6affc013b4ea8d89b447e0597', '[\"*\"]', NULL, '2024-09-06 15:28:24', '2024-09-06 15:28:24'),
(749, 'App\\Models\\PatientRegistration', 407, 'authToken', '51e728f74092a830feb70cef996ccc5bf235906e8e402dc1de400750cd49b7bb', '[\"*\"]', NULL, '2024-09-06 15:29:56', '2024-09-06 15:29:56'),
(750, 'App\\Models\\PatientRegistration', 407, 'authToken', '3c0af18fc9a0a11f279c1a3860ac246be917846a8bdfbdcc362b199238966f79', '[\"*\"]', NULL, '2024-09-06 16:19:45', '2024-09-06 16:19:45'),
(751, 'App\\Models\\PatientRegistration', 44, 'authToken', '85a2af2f9a6a2384d2f9a501d96b45878824135fd0778a74d5f5720bd1bcea3c', '[\"*\"]', NULL, '2024-09-06 16:31:33', '2024-09-06 16:31:33'),
(752, 'App\\Models\\PatientRegistration', 44, 'authToken', '1ed8adde3bfa56cafd99dae9d1288bb2a1e5d6e127c66239f8baa0484cc6c2ef', '[\"*\"]', NULL, '2024-09-06 16:41:03', '2024-09-06 16:41:03'),
(753, 'App\\Models\\PatientRegistration', 44, 'authToken', '0c8cb0599c8ab883997846985a60151d7bd542d2e71479122707b849817a1617', '[\"*\"]', NULL, '2024-09-06 16:42:35', '2024-09-06 16:42:35'),
(754, 'App\\Models\\PatientRegistration', 44, 'authToken', 'f00959df63f600f714aa207ec9419cfb6c1b308cef459df5da7319524e7e3241', '[\"*\"]', NULL, '2024-09-06 16:43:54', '2024-09-06 16:43:54'),
(755, 'App\\Models\\PatientRegistration', 407, 'authToken', 'd5d825571dc65eb4e2b4466af7b9586532e9832fae3845cc8476831ac55f00e3', '[\"*\"]', NULL, '2024-09-06 16:44:28', '2024-09-06 16:44:28'),
(756, 'App\\Models\\PatientRegistration', 44, 'authToken', 'ee8afceb874a3517400081e00b4c7ba10945af17c567a0f5bdffb9cfe2a5161d', '[\"*\"]', NULL, '2024-09-06 16:48:59', '2024-09-06 16:48:59'),
(757, 'App\\Models\\PatientRegistration', 407, 'authToken', 'f41b6064b2500e1f32267794be65e0886c1087ff973daa9f948d872c8ac999f7', '[\"*\"]', NULL, '2024-09-06 16:52:23', '2024-09-06 16:52:23'),
(758, 'App\\Models\\PatientRegistration', 299, 'authToken', '41337744e29e719aa22e94658e6c297955273e567ae5f7a3838b43ec7433cf68', '[\"*\"]', NULL, '2024-09-06 16:54:06', '2024-09-06 16:54:06'),
(759, 'App\\Models\\PatientRegistration', 10, 'authToken', '2fad90a025a649b49d3164ffc8f10d9df363984a7d0f590d65cffce30c8ba58c', '[\"*\"]', NULL, '2024-09-06 16:57:27', '2024-09-06 16:57:27'),
(760, 'App\\Models\\PatientRegistration', 10, 'authToken', '6a9204040b8541769df9adef6399d830652d0a9422f4bb4280539fd861af14b9', '[\"*\"]', NULL, '2024-09-06 16:58:50', '2024-09-06 16:58:50'),
(761, 'App\\Models\\PatientRegistration', 44, 'authToken', '303c62ff035763cf8e09cdc7425bbfbcd884145ef9e28d1ef3fbb1fbb82e983f', '[\"*\"]', NULL, '2024-09-06 17:47:22', '2024-09-06 17:47:22'),
(762, 'App\\Models\\PatientRegistration', 299, 'authToken', '8c9df6cff493f3304b54468ce42f3345854428bf6b789fb6ca1fdd80f33d4e27', '[\"*\"]', NULL, '2024-09-08 13:33:12', '2024-09-08 13:33:12'),
(763, 'App\\Models\\PatientRegistration', 403, 'authToken', 'ca526fcd21c73f160a73c2958ee1c75efe9fe1d0e73186c04a9309713f9d1625', '[\"*\"]', NULL, '2024-09-09 10:29:59', '2024-09-09 10:29:59'),
(764, 'App\\Models\\PatientRegistration', 44, 'authToken', 'ce4c990ea89311eebc7381f5c833429b434e3062cbb2f9b4070f3f4119a64ccb', '[\"*\"]', NULL, '2024-09-09 10:40:16', '2024-09-09 10:40:16'),
(765, 'App\\Models\\PatientRegistration', 100, 'authToken', 'f68fc48ae3bbe7f0e41a3a286b9e3b35ee6307db10379d6649fcc7ff1a1f2527', '[\"*\"]', NULL, '2024-09-09 11:41:06', '2024-09-09 11:41:06'),
(766, 'App\\Models\\PatientRegistration', 18, 'authToken', '61a0caa565907d56268cb01b366d64d46147d6d45b8bef077ddae7c2cb879a55', '[\"*\"]', NULL, '2024-09-09 12:32:55', '2024-09-09 12:32:55'),
(767, 'App\\Models\\PatientRegistration', 407, 'authToken', '8fc2368a28419971eac2bc9895afeea5d151db4e190eb14b346bcacbe0bd55aa', '[\"*\"]', NULL, '2024-09-09 12:48:16', '2024-09-09 12:48:16'),
(768, 'App\\Models\\PatientRegistration', 44, 'authToken', '3a78d4ce8935ab0cd0b113e98da6e39c188489ce4011aad72b9262257425521c', '[\"*\"]', NULL, '2024-09-09 12:59:28', '2024-09-09 12:59:28'),
(769, 'App\\Models\\PatientRegistration', 100, 'authToken', '150c8d40c83db0f5dbe9b3337709318349f9cd70d1b87456a79bab9b0906def7', '[\"*\"]', NULL, '2024-09-09 14:02:09', '2024-09-09 14:02:09'),
(770, 'App\\Models\\PatientRegistration', 100, 'authToken', '3fa6f10fdbdd01ccc0a74983be49e4baa8ed54b2e5d20e018cb234f8a3e354a4', '[\"*\"]', NULL, '2024-09-09 14:14:33', '2024-09-09 14:14:33'),
(771, 'App\\Models\\PatientRegistration', 403, 'authToken', '8517a4af888b4f9c47896c1aa9bf22f2365e137ba3f103f0e9f02af0cc888a25', '[\"*\"]', NULL, '2024-09-09 15:25:04', '2024-09-09 15:25:04'),
(772, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a2cc5ece952c918fe7e85aa437c349b4d2730bf23e1654ba229d105a8001b37f', '[\"*\"]', NULL, '2024-09-09 16:54:10', '2024-09-09 16:54:10'),
(773, 'App\\Models\\PatientRegistration', 299, 'authToken', '02ae93af2a0df4dac3d0a839dd6bb82a5529260c78660b89de0fa6d1c188a566', '[\"*\"]', NULL, '2024-09-09 19:15:59', '2024-09-09 19:15:59'),
(774, 'App\\Models\\PatientRegistration', 18, 'authToken', 'dbf51be23c6f5de509cfcb9d596d292e14d2a564eb25c4c050bf50b40a9f0635', '[\"*\"]', NULL, '2024-09-10 11:20:04', '2024-09-10 11:20:04'),
(775, 'App\\Models\\PatientRegistration', 18, 'authToken', 'c022fc6a42d0a2dc0fa427309c58df5b1cab9ed8183c9a5a08e1b36e0a1babcb', '[\"*\"]', NULL, '2024-09-10 11:22:21', '2024-09-10 11:22:21'),
(776, 'App\\Models\\PatientRegistration', 100, 'authToken', 'aa1d9e367909b16b8597335878243ff18279c5dadeb133cd15bb3e23cb30ad39', '[\"*\"]', NULL, '2024-09-10 11:23:40', '2024-09-10 11:23:40'),
(777, 'App\\Models\\PatientRegistration', 44, 'authToken', '653dde21d94910f2aa3b29aff70f1079fc4d9b369b998d24dbea7e8644ef1c14', '[\"*\"]', NULL, '2024-09-10 11:40:47', '2024-09-10 11:40:47'),
(778, 'App\\Models\\PatientRegistration', 44, 'authToken', '95e9fbea23395cf803df88b64ec885ba0fa217c204fe209580dde384dd5c28ce', '[\"*\"]', NULL, '2024-09-10 11:44:09', '2024-09-10 11:44:09'),
(779, 'App\\Models\\PatientRegistration', 44, 'authToken', '1d46ce94a4fc273480bcdd5fa9a6d8f4f5d7f2e4e676d783d9937a7d224fdc93', '[\"*\"]', NULL, '2024-09-10 11:51:04', '2024-09-10 11:51:04'),
(780, 'App\\Models\\PatientRegistration', 299, 'authToken', 'b033fe35c04f884fdab070427a2a75edb30e695b21971137421b150285e347c1', '[\"*\"]', NULL, '2024-09-10 21:14:52', '2024-09-10 21:14:52'),
(781, 'App\\Models\\PatientRegistration', 403, 'authToken', '48e2e359bc8539a22550aad3af29fc696fdd6171be9637d94d25cc0394971732', '[\"*\"]', NULL, '2024-09-11 10:12:19', '2024-09-11 10:12:19'),
(782, 'App\\Models\\PatientRegistration', 403, 'authToken', '2d338bd95ba342502e1913205621f93b0de4a570c0f9624f44cfbde9776b7be0', '[\"*\"]', NULL, '2024-09-11 10:28:51', '2024-09-11 10:28:51'),
(783, 'App\\Models\\PatientRegistration', 429, 'authToken', '6190e8b750cbd2eebaffc522455e218a12ad2b88b3d9ba66f375c35074282eb4', '[\"*\"]', NULL, '2024-09-11 10:39:01', '2024-09-11 10:39:01'),
(784, 'App\\Models\\PatientRegistration', 429, 'authToken', 'be0c48dfd718a6a60694e38d7b234fd5cf367465c4839d55a79746f44da0451f', '[\"*\"]', NULL, '2024-09-11 10:41:59', '2024-09-11 10:41:59'),
(785, 'App\\Models\\PatientRegistration', 44, 'authToken', 'ff95245539f7bd25aa491711aa8c91ff6ee531979681f851946eb67f52f225ca', '[\"*\"]', NULL, '2024-09-11 12:48:34', '2024-09-11 12:48:34'),
(786, 'App\\Models\\PatientRegistration', 429, 'authToken', 'ba4e6025cc3aabd86803c2476ba2277ae3e2391cabf7490350fb7c5418fb1aa2', '[\"*\"]', NULL, '2024-09-11 13:00:57', '2024-09-11 13:00:57'),
(787, 'App\\Models\\PatientRegistration', 429, 'authToken', '3fce4f3c01e087b7c950fb75ab11b8a30ec934314525aa2bf3f39d541b29410d', '[\"*\"]', NULL, '2024-09-13 11:53:55', '2024-09-13 11:53:55'),
(788, 'App\\Models\\PatientRegistration', 299, 'authToken', '0db8e14d04a85767ec09cedd9f243db3a9c80a82c536ecd6873a5795cf6369b0', '[\"*\"]', NULL, '2024-09-15 11:40:15', '2024-09-15 11:40:15'),
(789, 'App\\Models\\PatientRegistration', 18, 'authToken', '719ebbd80649bacdba86eeb3d045876f0fb28615b04cb69cf5591ab9e94fe861', '[\"*\"]', NULL, '2024-09-16 12:04:25', '2024-09-16 12:04:25'),
(790, 'App\\Models\\PatientRegistration', 25, 'authToken', '14dc40c770f0f88b01f9cd598bddb2daaf5f2b1cdbcd7f19f3797d8f859b9f9f', '[\"*\"]', NULL, '2024-09-16 12:51:17', '2024-09-16 12:51:17');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(791, 'App\\Models\\PatientRegistration', 100, 'authToken', 'b07b36498c769b91da9963aa5587e96f6306763317ab78fe2a547cda952fea98', '[\"*\"]', NULL, '2024-09-17 11:39:23', '2024-09-17 11:39:23'),
(792, 'App\\Models\\PatientRegistration', 18, 'authToken', '0d6c56941ffb6f2db5c4f3ecfaf4543c5a4175c72838f9b8e5f757dba8828317', '[\"*\"]', NULL, '2024-09-17 16:19:22', '2024-09-17 16:19:22'),
(793, 'App\\Models\\PatientRegistration', 20, 'authToken', '2ec31fdcbdc305b8f7355f75a06f744ce15017b6ffda7d4273ed2f9e961d942f', '[\"*\"]', NULL, '2024-09-17 16:29:21', '2024-09-17 16:29:21'),
(794, 'App\\Models\\PatientRegistration', 44, 'authToken', '66203c633293625ad5ce4da6c357371d7a40b45b2b51f4f9eb67aa2540468667', '[\"*\"]', NULL, '2024-09-17 16:32:47', '2024-09-17 16:32:47'),
(795, 'App\\Models\\PatientRegistration', 20, 'authToken', 'b73cbca1e77b77290b4519a7744a65a0cb7642cb95c942e34a72183a2c0e5f43', '[\"*\"]', NULL, '2024-09-17 16:54:40', '2024-09-17 16:54:40'),
(796, 'App\\Models\\PatientRegistration', 18, 'authToken', 'd5940235c59636dce45439b5ed02c32992865ff9abfcb9ac8871ba647d7d7540', '[\"*\"]', NULL, '2024-09-17 17:00:21', '2024-09-17 17:00:21'),
(797, 'App\\Models\\PatientRegistration', 18, 'authToken', '5105e975bbf67ca5e940ebff29f83ecb6b47f893ed3d0a0f2633d8c75db477cc', '[\"*\"]', NULL, '2024-09-17 17:33:52', '2024-09-17 17:33:52'),
(798, 'App\\Models\\PatientRegistration', 18, 'authToken', '58bd7fd7f78bfd6fdc3c6643a211bdb7ca97fdf0cd2443fe721cfd7febc2a750', '[\"*\"]', NULL, '2024-09-17 17:51:01', '2024-09-17 17:51:01'),
(799, 'App\\Models\\PatientRegistration', 44, 'authToken', '8eae70743cd337245565ce96b996924e2d0341979f66fb61664e13e65ec6a660', '[\"*\"]', NULL, '2024-09-17 17:58:10', '2024-09-17 17:58:10'),
(800, 'App\\Models\\PatientRegistration', 44, 'authToken', '00095e57df228c9e8688a6371e6a8012af38c179574f7f1a483ae7f350cf9e49', '[\"*\"]', NULL, '2024-09-18 10:08:51', '2024-09-18 10:08:51'),
(801, 'App\\Models\\PatientRegistration', 44, 'authToken', '09b6184ccb9a398b4a2097896ab93ca033fb3c0fcaeef1ecd15f7f4f0aed9ca0', '[\"*\"]', NULL, '2024-09-18 10:18:24', '2024-09-18 10:18:24'),
(802, 'App\\Models\\PatientRegistration', 44, 'authToken', '03d9e5889d9d35182975b84e8540b71ee8daa7cc5527116b6f97da9b29f7690c', '[\"*\"]', NULL, '2024-09-18 10:31:17', '2024-09-18 10:31:17'),
(803, 'App\\Models\\PatientRegistration', 199, 'authToken', '01c465c81078fe6302f444ede9dee856bf8d2e25889df5ca0b3aaaa3713502cb', '[\"*\"]', NULL, '2024-09-18 10:33:34', '2024-09-18 10:33:34'),
(804, 'App\\Models\\PatientRegistration', 403, 'authToken', '4cccd72c84a109a7b619b8bf2e681a2e61557031f9909978dfa3a03165b829b3', '[\"*\"]', NULL, '2024-09-18 12:02:00', '2024-09-18 12:02:00'),
(805, 'App\\Models\\PatientRegistration', 403, 'authToken', '7a83352c8d220c6bb0718c0c62c05ab4aec23124f60098569b3f457900d64e21', '[\"*\"]', NULL, '2024-09-18 12:03:08', '2024-09-18 12:03:08'),
(806, 'App\\Models\\PatientRegistration', 199, 'authToken', '3cebc8f68e2dbb1832fa226da074f0846fd50f62e60613b8971a68ddb1b4343b', '[\"*\"]', NULL, '2024-09-18 12:07:08', '2024-09-18 12:07:08'),
(807, 'App\\Models\\PatientRegistration', 403, 'authToken', '08b399ca020cf46c7ea67875031b03479c015c489c63c3e4ecc5998b94abb451', '[\"*\"]', NULL, '2024-09-18 13:14:03', '2024-09-18 13:14:03'),
(808, 'App\\Models\\PatientRegistration', 403, 'authToken', '1a4b23a27d3717f210b5c9556b6b494e376e2ad642f81f0cc8d6dfea106595fe', '[\"*\"]', NULL, '2024-09-18 13:16:20', '2024-09-18 13:16:20'),
(809, 'App\\Models\\PatientRegistration', 403, 'authToken', 'c9d8053fe6b37c352bad2767a501b49b5463ca26e399d336acc7235080118395', '[\"*\"]', NULL, '2024-09-18 13:17:53', '2024-09-18 13:17:53'),
(810, 'App\\Models\\PatientRegistration', 403, 'authToken', 'a5b062f0b582f5f76c08bd85a1e14caa7abe8d4533ccc0905af5271b94bc558a', '[\"*\"]', NULL, '2024-09-18 13:19:42', '2024-09-18 13:19:42'),
(811, 'App\\Models\\PatientRegistration', 403, 'authToken', '8de01ee505c1634a0923dd484777e42ef9dff3dd8746bf1b220489723e745520', '[\"*\"]', NULL, '2024-09-18 13:20:25', '2024-09-18 13:20:25'),
(812, 'App\\Models\\PatientRegistration', 403, 'authToken', 'd794a63a55402e24b41b771d79904d6a5ac84f3f6483fa7237bba51f3db7f3e0', '[\"*\"]', NULL, '2024-09-18 13:40:10', '2024-09-18 13:40:10'),
(813, 'App\\Models\\PatientRegistration', 403, 'authToken', '91e8fc302d9841deaa10b05630d519cb9910a2e9edb2c289a6abe0e573111145', '[\"*\"]', NULL, '2024-09-18 13:57:06', '2024-09-18 13:57:06'),
(814, 'App\\Models\\PatientRegistration', 403, 'authToken', '889831086017716c7e04be7269c8ccf4c271633179b4c3e90667b541e6a33704', '[\"*\"]', NULL, '2024-09-18 14:02:49', '2024-09-18 14:02:49'),
(815, 'App\\Models\\PatientRegistration', 403, 'authToken', '1ba279ce9cf2cd78e88c12a9a6abb29505aa10b9dea4332e283e796b00eff3d2', '[\"*\"]', NULL, '2024-09-18 14:04:24', '2024-09-18 14:04:24'),
(816, 'App\\Models\\PatientRegistration', 403, 'authToken', '65c11056e7a6475abc920490085d1d2f23cc2cff7ec1fc238a90f7ffb05e7147', '[\"*\"]', NULL, '2024-09-18 14:15:16', '2024-09-18 14:15:16'),
(817, 'App\\Models\\PatientRegistration', 403, 'authToken', '1ec469f27c0119ddbc4dbaca5f054ff446be586ee0b360d6c1ece9bfff731762', '[\"*\"]', NULL, '2024-09-18 14:21:17', '2024-09-18 14:21:17'),
(818, 'App\\Models\\PatientRegistration', 403, 'authToken', 'b45536543e1a40341aa59fd3b510e945af78171ede09ebe2df86f7d84bff7ba2', '[\"*\"]', NULL, '2024-09-18 14:23:18', '2024-09-18 14:23:18'),
(819, 'App\\Models\\PatientRegistration', 403, 'authToken', '82546e3c03621ed7d3cca1626fc27f01f8be0fd509119f56e4b75b65b6a4e717', '[\"*\"]', NULL, '2024-09-18 14:24:43', '2024-09-18 14:24:43'),
(820, 'App\\Models\\PatientRegistration', 403, 'authToken', '042d0dc004e33dfcc69337253079fa61a87aee11f8149361f3c14d02f1de83bb', '[\"*\"]', NULL, '2024-09-18 14:29:36', '2024-09-18 14:29:36'),
(821, 'App\\Models\\PatientRegistration', 18, 'authToken', '881ab9a222fb9ff923f72a85fe46b09ced4dbbbfc0ab38f063880378b48ed4e0', '[\"*\"]', NULL, '2024-09-18 14:38:12', '2024-09-18 14:38:12'),
(822, 'App\\Models\\PatientRegistration', 199, 'authToken', 'a03cff045d7d8c2d3746ce1b514652124783b279ed6f9e4ccfa81fc7939d7d84', '[\"*\"]', NULL, '2024-09-18 14:44:05', '2024-09-18 14:44:05'),
(823, 'App\\Models\\PatientRegistration', 199, 'authToken', 'b163fa82c449fd819ecd517c1f8b13728c82d4e313ec53a7972e2343c3bf94c5', '[\"*\"]', NULL, '2024-09-18 14:53:37', '2024-09-18 14:53:37'),
(824, 'App\\Models\\PatientRegistration', 199, 'authToken', 'e661ded7fb5db54c3c55d96e369f006c2d99408b8968414214669777f0fd8008', '[\"*\"]', NULL, '2024-09-19 09:38:04', '2024-09-19 09:38:04'),
(825, 'App\\Models\\PatientRegistration', 199, 'authToken', '10380cd87f7e4af1c4dad8e4997e993808b76faff38d10d1ed6c14e44a2319e0', '[\"*\"]', NULL, '2024-09-19 10:38:17', '2024-09-19 10:38:17'),
(826, 'App\\Models\\PatientRegistration', 44, 'authToken', '29f9090a784e43b977989fbcb025806f054e3ed8468b540995ef0a73f779f616', '[\"*\"]', NULL, '2024-09-19 11:44:06', '2024-09-19 11:44:06'),
(827, 'App\\Models\\PatientRegistration', 199, 'authToken', '9ea614f72fd366f9b58c58c64dc67bbbf081376965c5c09d80177b8e944e7068', '[\"*\"]', NULL, '2024-09-19 11:59:28', '2024-09-19 11:59:28'),
(828, 'App\\Models\\PatientRegistration', 199, 'authToken', 'f24615e899502bcdafac3f5664693c52110c4728f3551f873ecc8976df9fa0fb', '[\"*\"]', NULL, '2024-09-19 12:11:23', '2024-09-19 12:11:23'),
(829, 'App\\Models\\PatientRegistration', 199, 'authToken', 'c12ee1d2adf7dadfbd56e6f04bf6d7fbaddb460d7c8e994ab1e010497a863c14', '[\"*\"]', NULL, '2024-09-19 12:17:42', '2024-09-19 12:17:42'),
(830, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e3f3c7bef27c25cdc98e0e903ef0b6d87bfdacbdeaa199a8e29524ef91cbbc15', '[\"*\"]', NULL, '2024-09-19 15:30:21', '2024-09-19 15:30:21'),
(831, 'App\\Models\\PatientRegistration', 299, 'authToken', '3fdb68a959498d50e3266bee25bf0f58c8ec098dcd6549b80d5b698e4956c934', '[\"*\"]', NULL, '2024-09-19 15:34:42', '2024-09-19 15:34:42'),
(832, 'App\\Models\\PatientRegistration', 18, 'authToken', 'b0be5486c0a13a5ff32ecd48d7b309adee4f0e1e6b7de274be66cb1a02deabab', '[\"*\"]', NULL, '2024-09-19 15:43:49', '2024-09-19 15:43:49'),
(833, 'App\\Models\\PatientRegistration', 199, 'authToken', '5dc11ee246eb949f5497c4e1c6ec5438eaa1b3d4b019aaaee1bd1283a0a8ee69', '[\"*\"]', NULL, '2024-09-19 16:18:30', '2024-09-19 16:18:30'),
(834, 'App\\Models\\PatientRegistration', 199, 'authToken', '9ae0119996e5e0c3d6ae93d831869cb87fc4f33be02ed1c3207c25f4a9f91c0c', '[\"*\"]', NULL, '2024-09-19 16:21:21', '2024-09-19 16:21:21'),
(835, 'App\\Models\\PatientRegistration', 199, 'authToken', '27cf94cca1e501c2b6de2b502c93c54b100a0b52546a539feb4881024c85e072', '[\"*\"]', NULL, '2024-09-19 16:23:14', '2024-09-19 16:23:14'),
(836, 'App\\Models\\PatientRegistration', 18, 'authToken', 'b11b803f3158aa755d6d21bc2217c06bb2fd81b19062730642bd0e3ac702a77b', '[\"*\"]', NULL, '2024-09-19 16:25:50', '2024-09-19 16:25:50'),
(837, 'App\\Models\\PatientRegistration', 18, 'authToken', '7b8dccb6db4f62711af222eec477f525e455129bebfe5472d4023e9b31ac86bc', '[\"*\"]', NULL, '2024-09-19 16:27:22', '2024-09-19 16:27:22'),
(838, 'App\\Models\\PatientRegistration', 44, 'authToken', '33dd36814091c9aa3a99895edeb6474b6c2e48e9cb077d533d22b3fee1ba7dc0', '[\"*\"]', NULL, '2024-09-19 16:29:29', '2024-09-19 16:29:29'),
(839, 'App\\Models\\PatientRegistration', 10, 'authToken', '5a081b85e7a861a7ab02baf15e55bb516823cddae439d9572cf661578761b958', '[\"*\"]', NULL, '2024-09-19 17:05:26', '2024-09-19 17:05:26'),
(840, 'App\\Models\\PatientRegistration', 10, 'authToken', 'b624b2eb3a6982fdefa45b1af422e8169c66c27441f35679a3f988da32243dad', '[\"*\"]', NULL, '2024-09-19 17:14:15', '2024-09-19 17:14:15'),
(841, 'App\\Models\\PatientRegistration', 18, 'authToken', 'fce8b708b6969308473cc9a17c787d28a853058dce60643f1cae356285692453', '[\"*\"]', NULL, '2024-09-19 17:55:16', '2024-09-19 17:55:16'),
(842, 'App\\Models\\PatientRegistration', 18, 'authToken', 'c2dbbf733f37ca8f4bf606ebc8590ba021f9d2e5bf555c9f19fc22b84dfd010c', '[\"*\"]', NULL, '2024-09-19 17:56:13', '2024-09-19 17:56:13'),
(843, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a24c71082063c2c363f24b7af5b921fdb8654e0826583d04d8dc8b60f1811290', '[\"*\"]', NULL, '2024-09-19 17:56:40', '2024-09-19 17:56:40'),
(844, 'App\\Models\\PatientRegistration', 44, 'authToken', 'd75561554afc679c346f25b1772e8f16773c4e3cb996f625862020655f9b0ee4', '[\"*\"]', NULL, '2024-09-19 18:13:12', '2024-09-19 18:13:12'),
(845, 'App\\Models\\PatientRegistration', 10, 'authToken', '5412b4437ff0563b1277de922f6a01810b0b175ea56331665897c37cac25ac98', '[\"*\"]', NULL, '2024-09-19 18:22:57', '2024-09-19 18:22:57'),
(846, 'App\\Models\\PatientRegistration', 100, 'authToken', 'c05c5d8cc186f59fcd0ddc6f7dc6cb5c11b4ccc67d4a4159cca4da9486131b7c', '[\"*\"]', NULL, '2024-09-20 10:33:46', '2024-09-20 10:33:46'),
(847, 'App\\Models\\PatientRegistration', 18, 'authToken', '1b31d3e7eabbc42433c7f340b1fd3dd651b05901b7cbc8a5d92ecdd49f403a86', '[\"*\"]', NULL, '2024-09-20 11:52:52', '2024-09-20 11:52:52'),
(848, 'App\\Models\\PatientRegistration', 18, 'authToken', '35ef43df4726a5bc40427eff138b4902a01b166eaed2b0dfe6da43a8b94b57cc', '[\"*\"]', NULL, '2024-09-20 12:08:01', '2024-09-20 12:08:01'),
(849, 'App\\Models\\PatientRegistration', 44, 'authToken', '9ee54baecb19ea70b88a42ae5ece264b54ffd80937811bc3809a9ee76f8a4b2c', '[\"*\"]', NULL, '2024-09-20 12:32:02', '2024-09-20 12:32:02'),
(850, 'App\\Models\\PatientRegistration', 44, 'authToken', 'a024f3bc36aadb68f77501be2de9255af08b4a3ae511e4dc61de9eb1c4016910', '[\"*\"]', NULL, '2024-09-20 14:39:18', '2024-09-20 14:39:18'),
(851, 'App\\Models\\PatientRegistration', 18, 'authToken', 'cbd85507c76755ed678b297aaf9c18dfb46230b577521f5c695ef82a67c4b377', '[\"*\"]', NULL, '2024-09-20 16:20:40', '2024-09-20 16:20:40'),
(852, 'App\\Models\\PatientRegistration', 25, 'authToken', '388f21ae5864ccf46df3b4cd202480b3599560a599d957edbfa8573014352ed8', '[\"*\"]', NULL, '2024-09-20 16:36:08', '2024-09-20 16:36:08'),
(853, 'App\\Models\\PatientRegistration', 18, 'authToken', 'accc609a163c07241cc11e55e5c3ee0635ad2e4a4de8c5ed24ca1d9e9b736f86', '[\"*\"]', NULL, '2024-09-20 16:39:20', '2024-09-20 16:39:20'),
(854, 'App\\Models\\PatientRegistration', 18, 'authToken', '4e5305ec003bf8b869cd3598d46f3d4f4c0873cf8c1c6a065f0faeea4f9339fe', '[\"*\"]', NULL, '2024-09-20 16:41:11', '2024-09-20 16:41:11'),
(855, 'App\\Models\\PatientRegistration', 18, 'authToken', '7a511a124aa545628029350d04199b8e1243986978ec756222535cdf64a27d05', '[\"*\"]', NULL, '2024-09-20 16:57:46', '2024-09-20 16:57:46'),
(856, 'App\\Models\\PatientRegistration', 25, 'authToken', 'bec95676a1353e30a2ab3ba1e670a7df0315975ef68183267ebe8bbc0adeb451', '[\"*\"]', NULL, '2024-09-20 18:19:55', '2024-09-20 18:19:55'),
(857, 'App\\Models\\PatientRegistration', 18, 'authToken', '60675e5062316a318767ffbd7be9693358d6da1d4340ed3c7a3bcaa25498cb2d', '[\"*\"]', NULL, '2024-09-23 09:58:40', '2024-09-23 09:58:40'),
(858, 'App\\Models\\PatientRegistration', 18, 'authToken', '0d7f7cde9fd51d04e503e79b7f10b53d869acd487c2f6608c104e2bf3ace8a5e', '[\"*\"]', NULL, '2024-09-23 10:01:53', '2024-09-23 10:01:53'),
(859, 'App\\Models\\PatientRegistration', 25, 'authToken', 'a427f68542794f0ac1984ff7bb2d785dff84c2aabe882c7ed85543ac08bd5443', '[\"*\"]', NULL, '2024-09-23 10:06:41', '2024-09-23 10:06:41'),
(860, 'App\\Models\\PatientRegistration', 18, 'authToken', 'd1e5af7e68402f78ebb654d8b62b25bfb5809c693f43b5975ee419c443c2dced', '[\"*\"]', NULL, '2024-09-23 11:26:10', '2024-09-23 11:26:10'),
(861, 'App\\Models\\PatientRegistration', 18, 'authToken', 'fbafdf57dba0c8cca2014337f42d546d982d341c7593bc5124ad0507baf0d95b', '[\"*\"]', NULL, '2024-09-23 11:26:59', '2024-09-23 11:26:59'),
(862, 'App\\Models\\PatientRegistration', 25, 'authToken', 'b3aeb7c1af178752df6cfce5e471c70ef1d5919faa1a12dceaed6f513c2d495e', '[\"*\"]', NULL, '2024-09-23 12:28:58', '2024-09-23 12:28:58'),
(863, 'App\\Models\\PatientRegistration', 18, 'authToken', '236e5099aed3b5b89954796565ab3a11cf5a86e53523b2df65bc1044066c0b05', '[\"*\"]', NULL, '2024-09-23 12:44:16', '2024-09-23 12:44:16'),
(864, 'App\\Models\\PatientRegistration', 199, 'authToken', '4525baf74fdf1bc810dc72610e23387737f6999fa877cd6e9a9c18bee669a8e7', '[\"*\"]', NULL, '2024-09-23 17:04:52', '2024-09-23 17:04:52'),
(865, 'App\\Models\\PatientRegistration', 25, 'authToken', '9ff778c2b1dbf27b702d3a50a0e23f0c2d6917a9b7106997739dcaab5fe143d6', '[\"*\"]', NULL, '2024-09-23 17:05:12', '2024-09-23 17:05:12'),
(866, 'App\\Models\\PatientRegistration', 403, 'authToken', 'fa5c692ef09f6de580d5bdac674a6e5a92125e18cc2b296c41bf5d4c5f224a46', '[\"*\"]', NULL, '2024-09-23 17:10:45', '2024-09-23 17:10:45'),
(867, 'App\\Models\\PatientRegistration', 112, 'authToken', 'ca6fb2bec0d4024fe0eaa7ef9be3529cdcacd87a461971fb4b512fa9c9c67e03', '[\"*\"]', NULL, '2024-09-23 17:14:48', '2024-09-23 17:14:48'),
(868, 'App\\Models\\PatientRegistration', 18, 'authToken', 'b58177951c1cdcea533175c2da2d4ac0ac2533681dc2ec8426e84357838e18d4', '[\"*\"]', NULL, '2024-09-23 17:17:25', '2024-09-23 17:17:25'),
(869, 'App\\Models\\PatientRegistration', 18, 'authToken', '18e3cb38ab5c020043bc5ce5744019979a0b47112042eff1987fa60dbf2818da', '[\"*\"]', NULL, '2024-09-23 17:31:00', '2024-09-23 17:31:00'),
(870, 'App\\Models\\PatientRegistration', 403, 'authToken', 'ecb7bd313fe3b6c5d62658da17667ec8895ac2f59d70dbbb29e5feac32f49ea6', '[\"*\"]', NULL, '2024-09-23 17:35:15', '2024-09-23 17:35:15'),
(871, 'App\\Models\\PatientRegistration', 199, 'authToken', 'eab166f0e857e2267afa35a2b29f4429ac219bbf01e104c6f2274324570ed4ad', '[\"*\"]', NULL, '2024-09-23 17:35:20', '2024-09-23 17:35:20'),
(872, 'App\\Models\\PatientRegistration', 403, 'authToken', '79493b2100b7ef2036484d3a770b0ca0ce4dc94142040fcdc841ec9e5ea9f371', '[\"*\"]', NULL, '2024-09-23 17:39:28', '2024-09-23 17:39:28'),
(873, 'App\\Models\\PatientRegistration', 403, 'authToken', 'abee6db07b2f68f1df144aa8cc376058312fd94ca4a289a3e8b235c447b44cb9', '[\"*\"]', NULL, '2024-09-24 14:03:08', '2024-09-24 14:03:08'),
(874, 'App\\Models\\PatientRegistration', 403, 'authToken', '9c79358f1f46b24ede4cd71b5385266e3aabfb52f17cbaa6b77e38502c1b6589', '[\"*\"]', NULL, '2024-09-24 14:47:34', '2024-09-24 14:47:34'),
(875, 'App\\Models\\PatientRegistration', 100, 'authToken', '629729040114214243b6d8015d98603522585e3fccfdd86747c8bbd75c0c33c9', '[\"*\"]', NULL, '2024-09-24 15:28:16', '2024-09-24 15:28:16'),
(876, 'App\\Models\\PatientRegistration', 403, 'authToken', 'f5b2963d335d645f0213c889590d99a439f16fafe00cdcb644f62db34d76eadc', '[\"*\"]', NULL, '2024-09-24 15:34:15', '2024-09-24 15:34:15'),
(877, 'App\\Models\\PatientRegistration', 403, 'authToken', '26446e8cfacd9ce37af3f47f0b11b48e33b1fe70b43cd83c5295482c07dd2fd0', '[\"*\"]', NULL, '2024-09-24 16:11:50', '2024-09-24 16:11:50'),
(878, 'App\\Models\\PatientRegistration', 299, 'authToken', 'c60fce6dcb1763e20340c3b6e8f8df1c09af7186b2fa97da6e4f15966c27b1f4', '[\"*\"]', NULL, '2024-09-24 19:39:54', '2024-09-24 19:39:54'),
(879, 'App\\Models\\PatientRegistration', 299, 'authToken', 'ce67476ebd3e7b588c79c6e76a53319c3b01506a9103234fd29aaa229e753891', '[\"*\"]', NULL, '2024-09-24 19:45:20', '2024-09-24 19:45:20'),
(880, 'App\\Models\\PatientRegistration', 44, 'authToken', 'f791b872c9505226c02746bd4969fd9d2f8feb29ec58d4d6fa5cd26d42685e8c', '[\"*\"]', NULL, '2024-09-27 11:16:50', '2024-09-27 11:16:50'),
(881, 'App\\Models\\PatientRegistration', 299, 'authToken', 'bed10c9c66016d4cc465d1ee0bc4243557cd66e38a8b78b24aafbca0a46e6637', '[\"*\"]', NULL, '2024-09-29 18:34:52', '2024-09-29 18:34:52'),
(882, 'App\\Models\\PatientRegistration', 403, 'authToken', '0977464b192ecc7ee09561e2b2dc04616fcd20cc3af1056ba5914048244fd9be', '[\"*\"]', NULL, '2024-09-30 09:30:15', '2024-09-30 09:30:15'),
(883, 'App\\Models\\PatientRegistration', 44, 'authToken', 'e22825a6ac293880b1f89e238c3ec497799ed4dad9ba8fbbdce1ee59b1aafba1', '[\"*\"]', NULL, '2024-09-30 14:03:19', '2024-09-30 14:03:19'),
(884, 'App\\Models\\PatientRegistration', 299, 'authToken', '31b630dbb350f6f1ca489d8b1ab5dd0321b29634c90d0a5c63e98c333366687c', '[\"*\"]', NULL, '2024-10-01 14:09:18', '2024-10-01 14:09:18'),
(885, 'App\\Models\\PatientRegistration', 403, 'authToken', '5367a7dc1e7211c27eb40b058d4833efcdaec53d4e88b90a1b51edc4aa9ad1d6', '[\"*\"]', NULL, '2024-10-01 16:07:25', '2024-10-01 16:07:25'),
(886, 'App\\Models\\PatientRegistration', 18, 'authToken', 'eb494215ec520c03e85601187fd67269ec3799b1f174095eaac0dfee3cac87c3', '[\"*\"]', NULL, '2024-10-04 07:18:15', '2024-10-04 07:18:15'),
(887, 'App\\Models\\PatientRegistration', 18, 'authToken', '483d4a497ef504ea5d950c5155aa4b317fe3ed7da86ad7039e095d713e7b1e80', '[\"*\"]', NULL, '2024-10-05 01:50:56', '2024-10-05 01:50:56'),
(888, 'App\\Models\\PatientRegistration', 44, 'authToken', 'f5497dc92fc74f4d70de08eda8b3f2e14fd373c9af77b9724e638a0888a968c4', '[\"*\"]', NULL, '2024-10-05 09:34:57', '2024-10-05 09:34:57'),
(889, 'App\\Models\\PatientRegistration', 18, 'authToken', 'e9182e552bca3c3ed360152a9b79a9cae685ba00abc85c89b7e2c81b7849598e', '[\"*\"]', NULL, '2024-10-05 10:52:02', '2024-10-05 10:52:02'),
(890, 'App\\Models\\PatientRegistration', 44, 'authToken', '6064b58ab2418ce6d812155167aba61b93b125e2cb3045037a4bf1d0a5ed87b7', '[\"*\"]', NULL, '2024-10-05 14:43:23', '2024-10-05 14:43:23'),
(891, 'App\\Models\\PatientRegistration', 44, 'authToken', '9aed61e3a85d544d129687aa20c4e1347c1d8448e09bba948cb4a6eeeafef360', '[\"*\"]', NULL, '2024-10-05 15:30:37', '2024-10-05 15:30:37'),
(892, 'App\\Models\\PatientRegistration', 199, 'authToken', '57ec8ffab6c97abbeae3eb56dfe775e7bfd769583d3ef3d364d18c852b8750d5', '[\"*\"]', NULL, '2024-10-05 16:58:29', '2024-10-05 16:58:29'),
(893, 'App\\Models\\PatientRegistration', 44, 'authToken', 'b4c8e68cb65c533f7bbab771caef97171b4e5e44feef334ced5a3e1b31f7b800', '[\"*\"]', NULL, '2024-10-05 16:59:18', '2024-10-05 16:59:18'),
(894, 'App\\Models\\PatientRegistration', 299, 'authToken', '709d70bd5be237c20d129c58a082d65efd9165382f2d93208cfc8ed2559e9b67', '[\"*\"]', NULL, '2024-10-06 06:21:10', '2024-10-06 06:21:10'),
(895, 'App\\Models\\PatientRegistration', 403, 'authToken', 'f562c43cfb34ccce32277a434b35dfa7fc22cf2b23bb07812d60f8482f81bb33', '[\"*\"]', NULL, '2024-10-07 01:26:21', '2024-10-07 01:26:21'),
(896, 'App\\Models\\PatientRegistration', 112, 'authToken', 'fd679ebf8de524e6536458e69b72cec7be35ee1b2f52fd3fe2e0c27189dab1d5', '[\"*\"]', NULL, '2024-10-07 01:56:25', '2024-10-07 01:56:25'),
(897, 'App\\Models\\PatientRegistration', 10, 'authToken', '5ad340a2363156da5139ddc3a610bfba736781d08f04fd816cd7e0d234465b71', '[\"*\"]', NULL, '2024-10-07 01:58:21', '2024-10-07 01:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `practitioners`
--

CREATE TABLE `practitioners` (
  `id` bigint UNSIGNED NOT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Endescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Ardescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `practitioners`
--

INSERT INTO `practitioners` (`id`, `Logo`, `Enname`, `Arname`, `Endescription`, `Ardescription`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Doctors', NULL, NULL, NULL, 1, '2024-06-18 01:29:54', '2024-06-18 06:03:54'),
(2, NULL, 'Nurse', NULL, NULL, NULL, 1, '2024-06-18 06:03:50', '2024-06-18 06:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `privacypolicy`
--

CREATE TABLE `privacypolicy` (
  `id` bigint UNSIGNED NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tcenglish` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Tcarabic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacypolicy`
--

INSERT INTO `privacypolicy` (`id`, `Name`, `Tcenglish`, `Tcarabic`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 'General', 'The mobile / tablet application zuwara App & zuwara Pro (hereinafter referred to as ‘Application’ or ‘App’), is owned by zuwara eCommerce Company LLC. zuwara eCommerce Company LLC 2351 Anas Ibn Malek- Al-Sahafah Dis. Unit No 458 Riyadh 13321-8358 Kingdom of Saudi Arabia', 'kkk', '1', '2024-05-23 12:39:50', '2024-05-23 07:09:50', '2024-09-05 18:29:15'),
(2, 'Website Visitor', 'Like most website operators, zuwara eCommerce Company LLC collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. zuwara eCommerce Company LLC\'s purpose in collecting non-personally identifying information is to better understand how zuwara eCommerce Company LLC\'s visitors use its website. From time to time, zuwara eCommerce Company LLC may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.', 'kok', '1', '2024-09-05 12:21:02', '2024-09-05 17:21:02', '2024-09-05 18:29:53'),
(3, 'Gathering of Personally-Identifying Information', 'Certain visitors to zuwara eCommerce Company LLC\'s websites choose to interact with zuwara eCommerce Company LLC in ways that require zuwara eCommerce Company LLC to gather personally-identifying information. The amount and type of information that zuwara eCommerce Company LLC gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at https://www.sanar.sa to provide a username and email address.', NULL, '1', '2024-09-05 13:30:34', '2024-09-05 18:30:34', '2024-09-05 18:30:34'),
(4, 'Security', 'The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.', NULL, '1', '2024-09-05 13:30:54', '2024-09-05 18:30:54', '2024-09-05 18:30:54'),
(5, 'Advertisement', 'Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by zuwara eCommerce Company LLC and does not cover the use of cookies by any advertisers.', NULL, '1', '2024-09-05 13:31:17', '2024-09-05 18:31:17', '2024-09-05 18:31:17'),
(6, 'Links To External Sites', 'Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party\'s site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit. We have no control over, and assume no responsibility for the answers, privacy policies or practices of any third party sites, products or services.', NULL, '1', '2024-09-05 13:31:57', '2024-09-05 18:31:57', '2024-09-05 18:31:57'),
(7, 'Protection of Certain Personally-Identifying Information', 'zuwara eCommerce Company LLC discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on zuwara eCommerce Company LLC\'s behalf or to provide services available at zuwara eCommerce Company LLC\'s website, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using zuwara eCommerce Company LLC\'s website, you consent to the transfer of such information to them. zuwara eCommerce Company LLC will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, zuwara eCommerce Company LLC discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when zuwara eCommerce Company LLC believes in good faith that disclosure is reasonably necessary to protect the property or rights of zuwara eCommerce Company LLC, third parties or the public at large. If you are a registered user of https://www.sanar.sa and have supplied your email address, zuwara eCommerce Company LLC may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what\'s going on with zuwara eCommerce Company LLC and our products. We primarily use our blog to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. zuwara eCommerce Company LLC takes all measures reasonably necessary to protect against unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.', NULL, '1', '2024-09-05 13:32:37', '2024-09-05 18:32:37', '2024-09-05 18:32:37'),
(8, 'Aggregated Statistics', 'zuwara eCommerce Company LLC may collect statistics about the behavior of visitors to its website. zuwara eCommerce Company LLC may display this information publicly or provide it to others. However, zuwara eCommerce Company LLC does not disclose your personally-identifying information.', NULL, '1', '2024-09-05 13:33:02', '2024-09-05 18:33:02', '2024-09-05 18:33:02'),
(9, 'Cookies', 'To enrich and perfect your online experience, zuwara eCommerce Company LLC uses \\\"Cookies\\\", similar technologies and services provided by others to display personalized answers, appropriate advertising and store your preferences on your computer. A cookie is a string of information that a website stores on a visitor\'s computer, and that the visitor\'s browser provides to the website each time the visitor returns. zuwara eCommerce Company LLC uses cookies to help zuwara eCommerce Company LLC identify and track visitors, their usage of https://www.sanar.sa, and their website access preferences. zuwara eCommerce Company LLC visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using zuwara eCommerce Company LLC\'s websites, with the drawback that certain features of zuwara eCommerce Company LLC\'s websites may not function properly without the aid of cookies. By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to zuwara eCommerce Company LLC\'s use of cookies.', NULL, '1', '2024-09-05 13:33:24', '2024-09-05 18:33:24', '2024-09-05 18:33:24'),
(10, 'Privacy Policy Changes', 'Although most changes are likely to be minor, zuwara eCommerce Company LLC may change its Privacy Policy from time to time, and in zuwara eCommerce Company LLC\'s sole discretion. zuwara eCommerce Company LLC encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.', NULL, '1', '2024-09-05 13:34:24', '2024-09-05 18:34:24', '2024-09-05 18:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `scheduleconfiguration`
--

CREATE TABLE `scheduleconfiguration` (
  `id` bigint UNSIGNED NOT NULL,
  `Healthcareid` int DEFAULT NULL,
  `Session` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dayname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Servicetype` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Capacity` int DEFAULT NULL,
  `Starttime` time DEFAULT NULL,
  `Endtime` time DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scheduleconfiguration`
--

INSERT INTO `scheduleconfiguration` (`id`, `Healthcareid`, `Session`, `Dayname`, `Servicetype`, `Capacity`, `Starttime`, `Endtime`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 10, NULL, 'Sunday', 'Nurse', NULL, '13:27:00', '21:28:00', '2024-06-07 13:51:14', '2024-06-07 08:21:14', '2024-06-07 08:21:14'),
(2, NULL, NULL, 'Tuesday', 'Nurse', NULL, '20:23:00', '12:28:00', '2024-06-07 13:52:44', '2024-06-07 08:22:44', '2024-06-07 08:22:44'),
(3, NULL, NULL, 'Monday', 'Nurse', NULL, '20:26:00', '21:26:00', '2024-06-07 13:54:42', '2024-06-07 08:24:42', '2024-06-07 08:24:42'),
(4, NULL, NULL, 'Monday', 'Doctor', 1, '20:27:00', '13:32:00', '2024-06-07 13:56:22', '2024-06-07 08:26:22', '2024-06-07 08:26:22'),
(5, NULL, NULL, 'Monday', 'Nurse', 1, '02:32:00', '04:34:00', '2024-06-10 05:58:12', '2024-06-10 00:28:12', '2024-06-10 00:28:12'),
(6, NULL, NULL, 'Monday', 'Nurse', 1, '10:30:00', '14:00:00', '2024-08-06 13:26:41', '2024-08-06 18:26:41', '2024-08-06 18:26:41'),
(7, NULL, NULL, 'Monday', 'Nurse', 1, '10:30:00', '14:00:00', '2024-08-06 13:26:50', '2024-08-06 18:26:50', '2024-08-06 18:26:50'),
(8, NULL, NULL, 'Monday', 'Nurse', 1, '10:30:00', '14:00:00', '2024-08-06 13:27:06', '2024-08-06 18:27:06', '2024-08-06 18:27:06'),
(9, NULL, NULL, 'Monday', 'Nurse', 2, '10:30:00', '14:00:00', '2024-08-06 13:27:46', '2024-08-06 18:27:46', '2024-08-06 18:27:46'),
(10, NULL, NULL, 'Monday', 'Nurse', 2, '10:30:00', '14:00:00', '2024-08-06 13:29:33', '2024-08-06 18:29:33', '2024-08-06 18:29:33'),
(11, NULL, NULL, 'Monday', 'Nurse', 1, '10:30:00', '14:00:00', '2024-08-06 13:29:46', '2024-08-06 18:29:46', '2024-08-06 18:29:46'),
(12, NULL, NULL, 'Wednesday', 'Nurse', 2, '10:00:00', '22:15:00', '2024-08-28 07:15:21', '2024-08-28 12:15:21', '2024-08-28 12:15:21'),
(13, NULL, NULL, 'Friday', 'Doctors', 1, '13:52:00', '16:56:00', '2024-08-28 07:21:39', '2024-08-28 12:21:39', '2024-08-28 12:21:39'),
(14, NULL, NULL, 'Tuesday', 'Doctors', 1, '13:30:00', '17:30:00', '2024-08-28 07:49:36', '2024-08-28 12:49:36', '2024-08-28 12:49:36'),
(15, NULL, NULL, 'Tuesday', 'Nurse', 2, '14:20:00', '19:20:00', '2024-08-28 07:50:20', '2024-08-28 12:50:20', '2024-08-28 12:50:20'),
(16, NULL, NULL, 'Wednesday', 'Nurse', 2, '10:51:00', '22:33:00', '2024-08-28 07:51:45', '2024-08-28 12:51:45', '2024-08-28 12:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `id` bigint UNSIGNED NOT NULL,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Crnumber` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Share` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `City` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Countrycode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `Vat` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Regcertificate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Comcerregister` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Healthlicence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Regcertificate_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Logo_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Comcerregister_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Healthlicence_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Typeofservice` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Financialshare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EstimatedTime` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Visitfees` decimal(10,2) DEFAULT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`id`, `Enname`, `Arname`, `email`, `password`, `Phone`, `Crnumber`, `Location`, `Share`, `City`, `Countrycode`, `Status`, `Vat`, `Regcertificate`, `Logo`, `Comcerregister`, `Healthlicence`, `Regcertificate_url`, `Logo_url`, `Comcerregister_url`, `Healthlicence_url`, `Typeofservice`, `Financialshare`, `EstimatedTime`, `Visitfees`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(9, 'milan', 'pate', 'milan@gmail.com', '$2y$10$T3prD5ZiAQ5T/1t6oazCo.dGAeRbbtWlVRDai2JEFeJ.P7uIMun2u', '08787878787', '1213123', NULL, NULL, 'Abhā', 'India', 1, '2', 'adharbill.png', 'adharbill.png', NULL, NULL, '/uploads/adharbill.png', '/uploads/adharbill.png', NULL, NULL, 'Non Medical', '2', NULL, NULL, '2024-05-24 05:31:51', '2024-05-24 00:01:51', '2024-05-26 23:02:28'),
(10, 'jitesh', 'patel', 'jitesh@gm.com', '$2y$10$25dv.53s1r4WoOF1rbwfMOL6xo5FE0ObmmsUyDJnOS3Vgnvhc/ilS', 'jitesh123', '334q', 'Visit center', '12', 'Al Qaţīf', 'India', 1, '2', 'c1.png', 'image.png', NULL, NULL, '/uploads/c1.png', '/uploads/image.png', NULL, NULL, 'Medical', '2', NULL, 200.00, '2024-05-27 04:31:24', '2024-05-26 23:01:24', '2024-08-21 11:46:58'),
(11, 'sauirastra', 'safs', 'sur@gm.com', '$2y$10$d2.QuhFHfhK.8umKRbXdm.rJKK4bLJsDP3RHZNJqxp5IRWVmqHPRK', '03424234234', '1213123', NULL, NULL, 'Buraydah', 'India', 1, '2', 'dealer3.png', 'accountcrm1.png', 'adharbill.png', 'g.png', '/uploads/dealer3.png', '/uploads/accountcrm1.png', '/uploads/adharbill.png', '/uploads/g.png', 'Visiting Individuals', '2212', NULL, NULL, '2024-06-17 05:10:36', '2024-06-16 23:40:36', '2024-07-02 23:06:18'),
(12, 'Al Habib Hospital', 'مستشفى الحبيب', 'al_leader@hotmail.com', '$2y$10$25dv.53s1r4WoOF1rbwfMOL6xo5FE0ObmmsUyDJnOS3Vgnvhc/ilS', '0555552022', '11234445', NULL, NULL, 'Riyadh', 'saudi aribia', 1, '15', '1.pdf', 'تنزيل (6).png', '2.pdf', '3.pdf', '/uploads/1.pdf', '/uploads/تنزيل (6).png', '/uploads/2.pdf', '/uploads/3.pdf', 'Medical', '30%', NULL, 300.00, '2024-08-14 11:46:01', '2024-08-14 16:46:01', '2024-08-14 17:02:17'),
(13, 'India General Hospital', 'مستشفى الهند الهام', 'dr.a.e@hotmail.com', '$2y$10$OQGo.hWF3ijV.0wk4hMo9OcFP0siu9gsCTXkOWwqG004Rjwujw.h.', '0555552022', '123456789', 'Home visit', 'Percantage', 'Riyadh', 'المملكة العربية السعودية', 1, '123456', 'images.jpeg', 'تنزيل (3).jpeg', 'تنزيل (1).jpeg', 'تنزيل (2).jpeg', '/uploads/images.jpeg', '/uploads/تنزيل (3).jpeg', '/uploads/تنزيل (1).jpeg', '/uploads/تنزيل (2).jpeg', 'Medical', '30', '00:45', 100.00, '2024-08-28 06:35:06', '2024-08-28 11:35:06', '2024-09-02 12:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `serviceproviderrequest`
--

CREATE TABLE `serviceproviderrequest` (
  `id` bigint UNSIGNED NOT NULL,
  `healthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registernumber` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `service_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceproviderrequest`
--

INSERT INTO `serviceproviderrequest` (`id`, `healthcare`, `registernumber`, `country`, `city`, `phone`, `email`, `Status`, `service_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Hospital ABC', '12345', 'USA', 'New York', '1234567890', 'healthcare@example.com', 0, 'homevisit', 'Request for joining as a healthcare provider.', '2024-06-27 03:13:01', '2024-06-27 03:13:01'),
(2, 'Hospital ABC', '12345', 'USA', 'New York', '1234567890', 'healthcare@example.com', 1, 'homevisit', 'Request for joining as a healthcare provider.', '2024-06-27 03:13:36', '2024-07-02 23:06:58'),
(3, 'Hospital ABCd123', '12345', 'USA', 'New York', '1234567890', 'healthcare@example.com', 1, 'homevisit,telemedicine', 'Request for joining as a healthcare provider.', '2024-07-02 07:00:46', '2024-07-02 07:01:01'),
(4, 'Hospital ABCd1234', '12345', 'USA', 'New York', '1234567890', 'healthcare@example.com', 1, 'homevisit,telemedicine,all', 'Request for joining as a healthcare provider.', '2024-07-02 07:06:05', '2024-07-02 23:22:49'),
(5, 'nnik', 'bjbkdn', 'India', 'cwcbnjkdnbcjk', '697769767969', 'samuelpaulsuchan@gmail.com', 0, NULL, NULL, '2024-07-21 14:55:16', '2024-07-21 14:55:16'),
(6, 'nnik', 'bjbkdn', 'India', 'cwcbnjkdnbcjk', '697769767969', 'samuelpaulsuchan@gmail.com', 0, NULL, NULL, '2024-07-21 14:55:16', '2024-07-21 14:55:16'),
(7, 'dsfg', '437445', 'ds', 'bang', '882780390223', 'akashti30504@gmail.com', 0, NULL, NULL, '2024-07-29 16:37:03', '2024-07-29 16:37:03'),
(8, 'dsfg', '437445', 'ds', 'bang', '882780390223', 'akashti30504@gmail.com', 0, 'homevisit', 'frtfg', '2024-07-29 16:37:16', '2024-07-29 16:37:16'),
(9, 'xyz hospital', '123456', 'India', 'sd', '000001234567890', 'supriya.h@biztechnosys.com', 0, 'homevisit', 'sdfghjkjhgf', '2024-07-29 16:47:15', '2024-07-29 16:47:15'),
(10, 'xyz hospital', '123456', 'India', 'sd', '000001234567890', 'supriya.h@biztechnosys.com', 0, 'homevisit', 'sdfghjkjhgf', '2024-07-29 16:47:15', '2024-07-29 16:47:15'),
(11, 'xyz hospital', '123456', 'India', 'sd', '000001234567890', 'supriya.h@biztechnosys.com', 0, 'homevisit', 'sdfghjkjhgf', '2024-07-29 16:47:15', '2024-07-29 16:47:15'),
(12, 'xyz hospital', '123456', 'India', 'sd', '000001234567890', 'supriya.h@biztechnosys.com', 0, 'homevisit', 'sdfghjkjhgf', '2024-07-29 16:47:15', '2024-07-29 16:47:15'),
(13, 'dsfg', '437445', 'ds', 'bang', '882780390223', 'akashti30504@gmail.com', 0, NULL, NULL, '2024-07-29 17:07:44', '2024-07-29 17:07:44'),
(14, 'dsfg', '437445', 'ds', 'bang', '882780390223', 'akashti30504@gmail.com', 0, 'homevisit', 'frtfg', '2024-07-29 17:07:46', '2024-07-29 17:07:46'),
(15, 'dsfg', '437445', 'ds', 'bang', '882780390223', 'akashti30504@gmail.com', 0, 'homevisit', 'frtfg', '2024-07-29 17:07:46', '2024-07-29 17:07:46'),
(16, 'dsjgusf', 'kjdsf', 'India', 'Anantapuramu', '7569844753', 'aaliya@gmail.com', 0, 'telemedicine', 'yliououjl', '2024-07-31 16:30:46', '2024-07-31 16:30:46'),
(17, 'dsjgusf', 'kjdsf', 'India', 'Anantapuramu', '7569844753', 'aaliya@gmail.com', 0, 'telemedicine', 'yliououjl', '2024-07-31 16:30:46', '2024-07-31 16:30:46'),
(18, 'dsjgusf', 'kjdsf', 'India', 'Anantapuramu', '7569844753', 'aaliya@gmail.com', 0, 'telemedicine', 'yliououjl', '2024-07-31 16:30:46', '2024-07-31 16:30:46'),
(19, 'Alltimein Hospital', '456797', 'India', 'Chennai', '802584542', 'alltimein@gmail.com', 0, 'all', 'hospital service', '2024-08-03 17:31:59', '2024-08-03 17:31:59'),
(20, 'Alltimein Hospital', '456797', 'India', 'Chennai', '802584542', 'alltimein@gmail.com', 0, 'all', 'hospital service', '2024-08-03 17:40:52', '2024-08-03 17:40:52'),
(21, 'Alltimein Hospital', '456797', 'India', 'Chennai', '8764567891', 'alltimein@gmail.com', 0, 'homevisit,telemedicine,all', 'hospital service', '2024-08-03 17:45:58', '2024-08-03 17:45:58'),
(22, 'fsd', '23432', 'india', 'GHTGRFDEW', '8084008752', 'prashant.k@biztechnosys.com', 0, 'homevisit,telemedicine,all,others', 'fddddddddddddasf', '2024-08-05 16:13:51', '2024-08-05 16:13:51'),
(23, 'fsd', '23432', 'india', 'dsf', '8084008752', 'prashant.k@biztechnosys.com', 0, 'homevisit,telemedicine,others,all', 'fddddddddddddasf', '2024-08-05 16:38:06', '2024-08-05 16:38:06'),
(24, 'dsa', '324', 'India', 'bangalre', '9456275453', 'kumar@gmail.com', 0, 'homevisit,telemedicine,all,others', '34', '2024-08-06 10:40:44', '2024-08-06 10:40:44'),
(25, 'dsfg', '437445', 'India', 'bang', '567893456', 'akashti30504@gmail.com', 0, 'homevisit,telemedicine,others', 'hikgyuiguty', '2024-08-09 14:36:01', '2024-08-09 14:36:01'),
(26, 'dsfg', '437445', 'India', 'bang', '567893456', 'akashti30504@gmail.com', 0, 'homevisit,telemedicine,others', 'hikgyuiguty', '2024-08-09 14:36:01', '2024-08-09 14:36:01'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'homevisit', 'gtt', '2024-08-09 15:05:28', '2024-08-09 15:05:28'),
(28, 'All time Hospital', '5678', 'India', 'Bangalore', '7823293842', 'abcd@gmail.com', 0, 'homevisit,telemedicine,all', 'providing hospital service', '2024-08-09 15:12:52', '2024-08-09 15:12:52'),
(29, 'Alltimein Hospital', '5678', 'India', 'Bangalore', '8823293842', 'all@gmail.com', 0, 'homevisit', 'hospital service', '2024-10-05 14:40:41', '2024-10-05 14:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `Enhealthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arhealthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Enservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ensubservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arsubservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estimatedtime` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Newprice` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Spid` int DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Enhealthcare`, `Arhealthcare`, `Enservicename`, `Arservicename`, `Ensubservicename`, `Arsubservicename`, `Estimatedtime`, `Price`, `Newprice`, `Gender`, `Logo`, `CreatedAt`, `created_at`, `updated_at`, `Spid`, `Status`) VALUES
(22, 'purvesh', 'option 2', 'option 3', 'option 2', 'option 2', 'option 3', '30', '100', '200', 'Male', NULL, '2024-04-03 11:08:17', '2024-04-03 05:38:17', '2024-04-15 08:00:19', NULL, 0),
(21, 'option 3', 'option 2', 'option 3', 'option 2', 'option 2', 'option 3', '1222', '100', '200', 'male', NULL, '2024-04-03 11:08:17', '2024-04-03 05:38:17', '2024-04-03 05:38:17', NULL, 0),
(20, 'purvesh', 'option 3', 'option 4', 'option 3', 'option 3', 'option 3', '30', '100', '200', 'Male', NULL, '2024-04-03 11:07:50', '2024-04-03 05:37:50', '2024-04-16 05:39:35', 10, 1),
(24, '9:milan', 'option 2', '11:Physiotherapist', 'option 2', '12:HEMOGLOBIN ( HB )', 'option 3', '45', '29', '22', 'Female', NULL, '2024-05-31 06:06:24', '2024-05-31 00:36:24', '2024-05-31 00:36:24', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_addresses`
--

CREATE TABLE `service_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `AddressLine1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressLine2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Latitude` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Longitude` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Href` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zwaara_service_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('A3BbezIe3gF3YEcocDNy74Yudn7qYmZ164PRp4Qr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid1JyOVdGMjRRS1hCZEQ5S2hJN0FWSFZ1dVNXRWtjVE1YQ3BITW5URiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO319', 1710913421),
('hX9AAQkeaTyhCrUk3HLF3RzSsRknuU3ZiF4qQllp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRldoOFFnODdxSTVZYnV6MzNWZ0huNXdCV0hnQTFtYkxqM0pxcHRNZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1711010972);

-- --------------------------------------------------------

--
-- Table structure for table `submedicalspecialties`
--

CREATE TABLE `submedicalspecialties` (
  `id` bigint UNSIGNED NOT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Enspecialties` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Medicalspec` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arspecialties` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submedicalspecialties`
--

INSERT INTO `submedicalspecialties` (`id`, `Logo`, `Enname`, `Arname`, `Enspecialties`, `Medicalspec`, `Arspecialties`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, NULL, 'purvesh', 'p', '1:purvesh', 'purvesh', 'option 1', 1, '2024-04-02 10:53:18', '2024-04-02 05:23:18', '2024-04-02 07:00:00'),
(2, '/uploads/ss13.png', 'nikunj', NULL, NULL, NULL, 'option 1', NULL, '2024-04-12 06:03:23', '2024-04-12 00:33:23', '2024-04-12 00:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'hanchinamanisupriya@gmail.com', '2024-05-03 14:25:36', '2024-05-03 14:25:36'),
(2, 'c191542709@gmail.com', '2024-07-22 13:14:25', '2024-07-22 13:14:25'),
(3, 'akashti30504@gmail.com', '2024-08-05 13:02:41', '2024-08-05 13:02:41'),
(4, 'samuelpaulsuchan@gmail.com', '2024-08-07 10:16:43', '2024-08-07 10:16:43'),
(5, 'supriya.h@biztechnosys.com', '2024-08-30 10:16:19', '2024-08-30 10:16:19'),
(6, 'Abc@gmail.com', '2024-09-10 13:01:01', '2024-09-10 13:01:01'),
(7, 'supriya.h@gmail.com', '2024-09-10 14:43:08', '2024-09-10 14:43:08'),
(8, 'dfgdf@gmail.com', '2024-09-23 17:11:37', '2024-09-23 17:11:37'),
(9, 'shreedhev98@gmail.com', '2024-09-23 17:32:44', '2024-09-23 17:32:44'),
(10, '1.1@g.mm', '2024-09-24 15:04:53', '2024-09-24 15:04:53'),
(11, '1.1g@gm.iop', '2024-09-24 15:05:53', '2024-09-24 15:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `subservices`
--

CREATE TABLE `subservices` (
  `id` bigint UNSIGNED NOT NULL,
  `Logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Testcategory` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Packagename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Endescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Ardescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Service` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mainservicename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Servicetype` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Eninstrucation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Arinstrucation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Entitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Artitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `Healthcare` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Healthcareid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subservices`
--

INSERT INTO `subservices` (`id`, `Logo`, `Enname`, `Arname`, `Testcategory`, `Subservicename`, `Packagename`, `Endescription`, `Ardescription`, `Service`, `Mainservicename`, `Servicetype`, `Eninstrucation`, `Arinstrucation`, `Entitle`, `Artitle`, `Price`, `Healthcare`, `Healthcareid`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(27, '/uploads/vaccine-9mon.png', 'Children’s Vaccination ( Age: 9 Month )', 'z', 'Lab Test', NULL, NULL, 'Vaccine: • Measles • Meningococcal • Conjugate quadrivalent (MCV4) Vaccine certificate will be updated by stamping', 'Includes Vaccination material, dgloves, alcohol wipes, masks and sterilization for the medical team, Vaccination record will be updated and stamped', '10', 'Vaccination', 'Single', 'wedwesds', '11xcvsd', 'dsdasd', 'dasdasd', 200, '', '10', 1, '2024-06-03 05:48:20', '2024-06-03 00:18:20', '2024-09-11 10:40:54'),
(2, '/uploads/Vitamins.png', 'Vitamins', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-04-05 06:22:16', '2024-04-05 00:52:16', '2024-08-06 09:41:58'),
(3, '/uploads/cholestrol.png', 'Cholesterol', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-04-05 06:22:53', '2024-04-05 00:52:53', '2024-08-06 09:42:48'),
(4, '/uploads/diabetes.png', 'Diabetes', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-04-05 11:29:03', '2024-04-05 05:59:03', '2024-08-06 09:44:25'),
(5, '/uploads/SKIN (2).png', 'Skin', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-04-05 11:29:03', '2024-04-05 05:59:03', '2024-08-06 09:43:58'),
(6, '/uploads/hair.png', 'Hair', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-04-05 11:29:03', '2024-04-05 05:59:03', '2024-08-06 09:43:30'),
(7, NULL, 'BIL. TOTAL ( Bilirubin )', NULL, 'Lab Test', NULL, 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 05:49:25', '2024-04-25 10:49:25', '2024-04-25 10:49:25'),
(8, NULL, 'TRIGLYCERIDES', NULL, 'Lab Test', NULL, 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 05:49:25', '2024-04-25 10:49:25', '2024-04-25 10:49:25'),
(9, NULL, 'HDL CHOLESTEROL', NULL, 'Lab Test', NULL, 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, 150, NULL, NULL, 1, '2024-04-25 05:49:25', '2024-04-25 10:49:25', '2024-04-25 10:49:25'),
(10, NULL, 'Hematocrit Test', NULL, 'Lab Test', NULL, 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, 100, NULL, NULL, 1, '2024-04-25 05:49:25', '2024-04-25 10:49:25', '2024-04-25 10:49:25'),
(11, NULL, 'PLATELET COUNT', NULL, 'Lab Test', NULL, 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 05:49:25', '2024-04-25 10:49:25', '2024-04-25 10:49:25'),
(12, NULL, 'HEMOGLOBIN ( HB )', NULL, 'Lab Test', NULL, 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 05:49:25', '2024-04-25 10:49:25', '2024-04-25 10:49:25'),
(13, '/uploads/KIDNEY .png', 'Kidney', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-04-25 05:54:17', '2024-04-25 10:54:17', '2024-08-06 09:44:53'),
(14, NULL, 'Hematocrit Test', NULL, 'Lab Test', NULL, 'Hair Fall Workup', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, 100, '', '', 1, '2024-04-25 06:18:35', '2024-04-25 11:18:35', '2024-08-29 18:29:14'),
(15, NULL, 'PLATELET COUNT', NULL, 'Lab Test', NULL, 'Hair Fall Workup', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 06:18:35', '2024-04-25 11:18:35', '2024-04-25 11:18:35'),
(16, NULL, 'HEMOGLOBIN ( HB )', NULL, 'Lab Test', NULL, 'Hair Fall Workup', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 06:18:35', '2024-04-25 11:18:35', '2024-08-14 17:27:16'),
(17, NULL, 'White Blood Cell Differential Test', NULL, 'Lab Test', NULL, 'Hair Fall Workup', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 06:18:35', '2024-04-25 11:18:35', '2024-08-20 00:45:10'),
(18, '/uploads/Group 1261155049.png', 'CBC (COMPLET BLOOD COUNT)', NULL, 'Lab Test', 'Full body', NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, 80, '', '', 1, '2024-04-25 06:40:44', '2024-04-25 11:40:44', '2024-08-29 18:30:30'),
(19, '/uploads/Group 1261155049.png', 'TSH (THYROID STIMULATING HORMONE)', NULL, 'Lab Test', 'Full body', NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, 70, '', '', 1, '2024-04-25 06:46:35', '2024-04-25 11:46:35', '2024-08-29 18:30:05'),
(20, NULL, 'BIL. TOTAL ( Bilirubin )', NULL, 'Lab Test', 'Full body', 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, 20, '', '', 1, '2024-04-25 07:22:41', '2024-04-25 12:22:41', '2024-08-20 00:45:06'),
(21, NULL, 'TRIGLYCERIDES', NULL, 'Lab Test', 'Full body', 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 07:22:41', '2024-04-25 12:22:41', '2024-04-25 12:22:41'),
(22, NULL, 'HDL CHOLESTEROL', NULL, 'Lab Test', 'Full body', 'Health Check Packages', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-25 07:22:41', '2024-04-25 12:22:41', '2024-09-02 12:42:17'),
(23, '/uploads/X-Ray.png', 'X-ray', NULL, 'Lab Test', NULL, NULL, 'X-rays are diagnostic tool used to examine various parts of the body. They can diagnose arthritis and knee problems, lung diseases including tuberculosis and lung cancer, and an enlarged hear. Xrays can also identify fractures or infections in the bones.', 'Includes X-ray machine with all its accessories, medical gloves for one use, medical disinfectant, medical gel, masks and sterilization for the medical team', '12', 'Radiology', 'Single', NULL, NULL, NULL, NULL, 22, 'jites', '1', 1, '2024-05-31 13:19:08', '2024-05-31 07:49:08', '2024-09-11 10:50:38'),
(28, '/uploads/vaccine-6mon.png', 'Children’s Vaccination ( Age: 6 Month )', 'z', 'Lab Test', NULL, NULL, 'The vaccination team will provide 6-month-old children immunizations against OPV IPV DtaP Hepatitis B Hib Pneumococcal Conjugate (PVC) Vaccine certificate will be updated by stamping', 'Includes Vaccination material, dgloves, alcohol wipes, masks and sterilization for the medical team, يتم تحديث وختم سجل التطعيمات\'', '10', 'Vaccination', 'Single', 'wedwesds', '11xcvsd', 'dsdasd', 'dasdasd', 200, '', '10', 1, '2024-06-03 05:49:35', '2024-06-03 00:19:35', '2024-09-11 10:42:18'),
(29, '/uploads/vaccine-4mon.png', 'Children’s Vaccination ( Age: 4 Month )', 'z', 'Lab Test', NULL, NULL, 'Vaccine: • IPV • DtaP • Hepatitis B • Hib • Pneumococcal Conjugate (PVC) • Rota Vaccine certificate will be updated by stamping', 'Includes Vaccination material, dgloves, alcohol wipes, masks and sterilization for the medical team, Vaccination record will be updated and stamped', '10', 'Vaccination', 'Single', 'wedwesds', '11xcvsd', 'dsdasd', 'dasdasd', 200, '', '10', 1, '2024-06-03 05:50:25', '2024-06-03 00:20:25', '2024-09-11 10:43:06'),
(30, '/uploads/vaccine-2mon.png', 'Children’s Vaccination ( Age: 2 Month )', 'z', 'Lab Test', NULL, NULL, 'The vaccination team will provide two-month-old children immunizations against (IPV, DTaP, Hepatitis B, Hib, Pneumococcal Conjugate, (PVC), and Rota).', 'Includes Vaccination material, dgloves, alcohol wipes, masks and sterilization for the medical team, Vaccination record will be updated and stamped', '10', 'Vaccination', 'Single', 'wedwesds', '11xcvsd', 'dsdasd', 'dasdasd', 200, '', '10', 1, '2024-06-03 05:52:53', '2024-06-03 00:22:53', '2024-09-11 10:43:50'),
(32, '/uploads/Ultrasound.png', 'Ultrasound', NULL, 'Body Test', NULL, NULL, 'Ultrasound is a diagnostic tool that helps visualize the internal organs of the body. It can be used to diagnose a range of conditions such as thyroid diseases, liver diseases and tumors, gallbladder diseases and tumors, kidney and urinary system diseases, prostate diseases and tumors in men, uterine fibroids, and ovarian cysts and tumors in women.', 'Includes Ultrasound machine ،medical gel, medical disinfectant, masks and sterilization for the medical team,Medical gloves for one use', '12', 'Radiology', 'Single', 'rado', 'rado', 'dscfsd', 'asds`', 22, '', '11', 1, '2024-06-17 05:48:57', '2024-06-17 00:18:57', '2024-09-11 10:51:08'),
(51, NULL, 'prega', NULL, 'Lab Test', NULL, 'Pregnancy Test Serum(BHCG)', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, 150, '', '', 1, '2024-08-07 13:05:00', '2024-08-07 18:05:00', '2024-08-29 18:28:22'),
(35, '/uploads/full body.png', 'Full body', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:06:18', '2024-08-06 11:06:18', '2024-08-06 11:07:02'),
(36, '/uploads/Urinary Tract.png', 'Urinary Tract', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:19:28', '2024-08-06 11:19:28', '2024-08-06 11:19:37'),
(37, '/uploads/OBJECTS.png', 'Parathyroid', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:29:40', '2024-08-06 11:29:40', '2024-08-06 11:29:50'),
(38, '/uploads/Liver.png', 'Liver', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:30:32', '2024-08-06 11:30:32', '2024-08-06 11:35:15'),
(39, '/uploads/Illustration.png', 'Cardiac (Heart)', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:31:11', '2024-08-06 11:31:11', '2024-08-06 11:35:11'),
(40, '/uploads/bone.png', 'Bone', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:32:47', '2024-08-06 11:32:47', '2024-08-06 11:35:10'),
(41, '/uploads/blood health.png', 'Blood Health', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:33:17', '2024-08-06 11:33:17', '2024-08-06 11:35:08'),
(42, '/uploads/Digestion.png', 'Digestion', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:33:45', '2024-08-06 11:33:45', '2024-08-06 11:35:07'),
(43, '/uploads/Group 1261155528.png', 'Allergy', NULL, 'Lab Test', NULL, NULL, NULL, NULL, '9', 'Laboratory', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-06 06:34:26', '2024-08-06 11:34:26', '2024-08-06 11:35:07'),
(57, '/uploads/fatigue.png', 'Vitamin Package', NULL, 'Lab Test', NULL, 'Vitamins Package', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, 50, '', '', 1, '2024-08-07 13:32:14', '2024-08-07 18:32:14', '2024-08-29 18:27:46'),
(58, '/uploads/istockphoto-1329214702-612x612.jpg', 'Muscle movements', 'حركات العضلات', 'Lab Test', NULL, NULL, 'They are voluntary movements caused by internal nerves that lead to increased flexibility', 'هي حركات ارادية بفعل الاعصاب الداخلية التي تؤدي الى زيادة المرونة', '16', 'Sports  Health', 'Single', 'A personal trainer visits you with a set of sports equipment. He does not require you to perform high physical efforts if you have a heart condition', 'مدرب شخصي يقوم بزيارتك  مع مجموعة من الأدوات الرياضية لا يجيب القيام بمجهود بدني عالي اذا كنت مريض بالقلب', 'Exercises available', 'متاح تمارين رياضية', 1000, 'Al Habib Hospital', '12', 1, '2024-08-14 12:23:10', '2024-08-14 17:23:10', '2024-08-14 17:26:40'),
(47, '/uploads/seasonalflu.png', 'Seasonal Flu1', NULL, 'Lab Test', NULL, NULL, 'Seasonal Flu vaccines are recommended by MOH, to protect against seasonal influenza', NULL, '15', 'Seasonal Flu', 'Single', NULL, NULL, NULL, NULL, 1300, '', '', 1, '2024-08-06 11:28:57', '2024-08-06 16:28:57', '2024-08-30 11:59:38'),
(59, NULL, '', NULL, 'Lab Test', NULL, 'My muscles', '5555', '6666', '16', 'Sports  Health', 'Package', '4534534534', '7777', 'Exercises available', 'متاح تمارين رياضية', 1000, 'Al Habib Hospital', '12', 1, '2024-08-14 12:33:42', '2024-08-14 17:33:42', '2024-08-14 17:33:56'),
(60, '/uploads/vaccine-1yrs.png', 'Children’s Vaccination (Age: 1 Year)', NULL, 'Lab Test', NULL, NULL, 'The vaccination team will provide 1 Year old children immunizations against (PCV-OPVMCV4-MMR ).', 'Includes Vaccination material, dgloves, alcohol wipes, masks and sterilization for the medical team, Vaccination record will be updated and stamped', '10', 'Vaccination', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-08-22 10:01:52', '2024-08-22 15:01:52', '2024-09-11 10:44:24'),
(61, NULL, '', NULL, 'Lab Test', NULL, NULL, 'Injection/Home IV Therapy', NULL, '4', 'Nurse visit', NULL, 'The nurse injects a drug or solution directly into the vein or through IV cannula, the nurse will confirm allergy history prior to give IV treatment. Hide details', 'Syringe and IV tube will be brought. Possibility to check allergy from the prescribed medication by taking a drug allergy test. , * solutions and drugs to be injected are not included. , *Instructions: The patient must present a medical prescription that includes the medication name and dosages', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-22 10:11:44', '2024-08-22 15:11:44', '2024-08-22 15:11:44'),
(62, '/uploads/vaccine-2mon.png', 'Injection/Home IV Therapy', NULL, 'Lab Test', NULL, NULL, 'The nurse injects a drug or solution directly into the vein or through IV cannula, the nurse will confirm allergy history prior to give IV treatment. Hide details', 'Includes : Syringe and IV tube will be brought. Possibility to check allergy from the prescribed medication by taking a drug allergy test. , * solutions and drugs to be injected are not included. , *Instructions: The patient must present a medical prescription that includes the medication name and dosages', '4', 'Nurse visit', 'Single', NULL, NULL, NULL, NULL, 50, '', '', 1, '2024-08-22 10:15:12', '2024-08-22 15:15:12', '2024-08-30 11:11:53'),
(63, NULL, 'Wound Care', NULL, 'Lab Test', NULL, NULL, 'The nurse performs wound cleaning and dressing, including bedsores (pressure ulcers). More details', 'Includes : Syringe and IV tube will be brought. Possibility to check allergy from the prescribed medication by taking a drug allergy test. , * solutions and drugs to be injected are not included. , *Instructions: The patient must present a medical prescription that includes the medication name and dosages', '4', 'Nurse visit', 'Single', NULL, NULL, NULL, NULL, 70, '', '', 1, '2024-08-22 10:17:15', '2024-08-22 15:17:15', '2024-08-30 11:12:23'),
(64, NULL, 'Removal of Stitches', NULL, 'Lab Test', NULL, NULL, 'The nurse will remove stitches from injuries and post-surgical wounds. More details', 'Includes : Syringe and IV tube will be brought. Possibility to check allergy from the prescribed medication by taking a drug allergy test. , * solutions and drugs to be injected are not included. , *Instructions: The patient must present a medical prescription that includes the medication name and dosages', '4', 'Nurse visit', 'Single', NULL, NULL, NULL, NULL, 50, '', '', 1, '2024-08-22 10:22:41', '2024-08-22 15:22:41', '2024-08-30 11:12:49'),
(65, NULL, 'Nebulisation', NULL, 'Lab Test', NULL, NULL, 'The nurse will assist you through a session in which you will be able to inhale medicine as a spray through a mask . Shortness of breath and the airway will be improved with this treatment. More details', 'Includes : Syringe and IV tube will be brought. Possibility to check allergy from the prescribed medication by taking a drug allergy test. , * solutions and drugs to be injected are not included. , *Instructions: The patient must present a medical prescription that includes the medication name and dosages', '4', 'Nurse visit', 'Single', NULL, NULL, NULL, NULL, 100, '', '', 1, '2024-08-22 10:23:44', '2024-08-22 15:23:44', '2024-08-30 11:13:15'),
(66, NULL, 'Oxygen Theraphy', NULL, 'Lab Test', NULL, NULL, 'A 15-30-minute oxygen treatment session will be provided by the nurse to treat shortness of breath (dyspnea) and low blood oxygen levels (hypoxemia).More details', 'Includes : Syringe and IV tube will be brought. Possibility to check allergy from the prescribed medication by taking a drug allergy test. , * solutions and drugs to be injected are not included. , *Instructions: The patient must present a medical prescription that includes the medication name and dosages', '4', 'Nurse visit', 'Single', NULL, NULL, NULL, NULL, 70, '', '', 1, '2024-08-22 10:24:46', '2024-08-22 15:24:46', '2024-08-30 11:17:18'),
(67, '/uploads/vitamin1 (2).png', 'Energy Boost', NULL, 'Lab Test', NULL, NULL, 'To restore energy, build protins, support antioxidants, and increase productivity. starting from 1300 SAR', 'Includes vitamin B12, vitamin C, magnesium Sulphate, Potassium chloride, zinc, selenium, l-Carnitine, glutamine, normal saline, multivitamins mixture', '6', 'Vitamin IV Drips', 'Single', 'Instructions: Please don’t sleep before this test.', NULL, NULL, NULL, 40, '', '', 1, '2024-08-22 10:44:34', '2024-08-22 15:44:34', '2024-09-11 10:45:57'),
(68, '/uploads/h1.png', 'Hydration', NULL, 'Lab Test', NULL, NULL, 'To restore energy, build protins, support antioxidants, and increase productivity. starting from 1300 SAR', 'Includes vitamin B12, vitamin C, magnesium Sulphate, Potassium chloride, zinc, selenium, l-Carnitine, glutamine, normal saline, multivitamins mixture', '6', 'Vitamin IV Drips', 'Single', 'Instructions: Please don’t sleep before this test.', NULL, NULL, NULL, 100, '', '', 1, '2024-08-22 10:49:17', '2024-08-22 15:49:17', '2024-09-11 10:48:16'),
(69, '/uploads/e1.png', 'Energy Boost', NULL, 'Lab Test', NULL, NULL, 'To restore energy, build protins, support antioxidants, and increase productivity. starting from 1300 SAR', 'Includes vitamin B12, vitamin C, magnesium Sulphate, Potassium chloride, zinc, selenium, l-Carnitine, glutamine, normal saline, multivitamins mixture', '6', 'Vitamin IV Drips', 'Single', 'Instructions: Please don’t sleep before this test.', NULL, NULL, NULL, 110, '', '', 1, '2024-08-22 10:51:05', '2024-08-22 15:51:05', '2024-09-11 10:48:59'),
(70, '/uploads/ECG.png', 'ECG', NULL, 'Body Test', NULL, NULL, 'ECG is a painless procedure used to detect heart problems such as arrhythmias, blocked or narrowed arteries in the heart, previous heart attacks, monitoring response to heart treatments such as a pacemaker. It is considered a routine procedure for middle-aged and elderly people, even if they don\'t show any symptoms.', 'Includes ECG with all its contents, medical antiseptic, medical gel, alcohol wipes, disposable gloves, masks and sterilization for medical staff', '12', 'Radiology', 'Single', NULL, NULL, NULL, NULL, NULL, '', '', 1, '2024-08-22 11:13:49', '2024-08-22 16:13:49', '2024-09-11 10:52:09'),
(71, NULL, 'In-house Clinic', 'In-house Clinic', 'Body Test', NULL, NULL, 'Our in-house clinic offers a comprehensive range of healthcare services to meet', 'Provide doctors and nurses, laboratory services, Individual medical records, supplying all required medicine and pharmaceutical equipment, referral services, non-urgent medical transfers, seasonal and essential vaccinations and health and nutrition awareness.', '13', 'Corporate wellness', 'Single', 'the needs of individuals within your organization', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-22 11:29:07', '2024-08-22 16:29:07', '2024-08-22 16:29:16'),
(72, NULL, 'pre-employment-checkup', 'pre-employment-checkup', 'Body Test', NULL, NULL, 'Pre employment checkup service provided at the company office or new employee', 'Medical checkup, Chest X-ray, Blood test and Doctor consultation.', '13', 'Corporate wellness', 'Single', 'location', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-22 11:33:52', '2024-08-22 16:33:52', '2024-08-22 16:37:43'),
(73, NULL, 'employee-checkup', 'employee-checkup', 'Lab Test', NULL, NULL, 'Includes a physical exam, laboratory tests, and a consultation with a doctor at', 'Physical exam, Blood test, Drug test and Doctor consultation', '13', 'Corporate wellness', 'Single', 'company site.', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-08-22 11:36:27', '2024-08-22 16:36:27', '2024-08-22 16:37:44'),
(74, NULL, 'Residence examination', 'Residence examination', 'Lab Test', NULL, NULL, 'Our in-house clinic offers a comprehensive range of healthcare services to meet  the needs of individuals within your organization', 'Provide doctors and nurses, laboratory services, Individual medical records, supplying all required medicine and pharmaceutical equipment, referral services, non-urgent medical transfers, seasonal and essential vaccinations and health and nutrition awareness.', '20', 'Iqama', 'Single', NULL, NULL, NULL, NULL, 100, '', '', 1, '2024-08-22 11:45:37', '2024-08-22 16:45:37', '2024-08-29 16:22:21'),
(75, NULL, 'driver\'s license examination', 'driver\'s license examination', 'Lab Test', NULL, NULL, 'Pre employment checkup service provided at the company office or new employee location', 'Medical checkup, Chest X-ray, Blood test and Doctor consultation.', '20', 'Iqama', 'Single', NULL, NULL, NULL, NULL, 100, '', '', 1, '2024-08-22 11:46:33', '2024-08-22 16:46:33', '2024-08-29 16:22:46'),
(76, NULL, 'municipal examination', 'municipal examination', 'Lab Test', NULL, NULL, 'Includes a physical exam, laboratory tests, and a consultation with a doctor at company site.', 'Physical exam, Blood test, Drug test and Doctor consultation', '20', 'Iqama', 'Single', NULL, NULL, NULL, NULL, 50, '', '', 1, '2024-08-22 11:47:29', '2024-08-22 16:47:29', '2024-08-29 16:23:02'),
(77, NULL, 'Seasonal Flu2', NULL, 'Lab Test', NULL, NULL, 'Seasonal Flu vaccines are recommended by MOH, to protect against seasonal influenza', NULL, '15', 'Seasonal flu', 'Single', NULL, NULL, NULL, NULL, 1300, NULL, NULL, 0, '2024-08-22 12:05:41', '2024-08-22 17:05:41', '2024-08-22 17:12:18'),
(78, NULL, 'Seasonal Flu3', NULL, 'Lab Test', NULL, NULL, 'Seasonal Flu vaccines are recommended by MOH, to protect against seasonal influenza', NULL, '15', 'Seasonal flu', 'Single', NULL, NULL, NULL, NULL, 1300, NULL, NULL, 0, '2024-08-22 12:06:20', '2024-08-22 17:06:20', '2024-08-22 17:12:18'),
(79, '/uploads/istockphoto-1479494606-612x612 (1).jpg', '444', '444', 'Lab Test', NULL, NULL, '54645', '5656', '17', 'Sports  Health', 'Single', '654645', '6546456', '654645', '4645', 56, 'Al Habib Hospital', '12', NULL, '2024-08-24 12:59:00', '2024-08-24 17:59:00', '2024-08-24 17:59:00'),
(80, '/uploads/Group.png', 'Biztest', 'test', 'Lab Test', NULL, NULL, 'Biz', 'energy', '21', 'Bizenergy', 'Single', 'abs', 'abc', 'abc', 'abc', 10, 'jitesh', '10', 1, '2024-08-28 05:18:10', '2024-08-28 10:18:10', '2024-08-28 10:18:10'),
(81, '/uploads/تنزيل.jpeg', 'Fasting Blood Sugar', 'تحليل سكر بالدم (صائم) (FBS)', 'Lab Test', NULL, NULL, 'It is the level of glucose sugar in the blood. Glucose sugar is the main source of energy in the human body, and is subject to control through a group of hormones in the human body.', 'عبارة عن نسبة سكر الغلوكوز في الدم، حيث يعد سكر الغلوكوز المصدر الرئيسي للطاقة في جسم الإنسان، ويخضع للضبط من خلال مجموعة من الهرمونات في جسم الإنسان.', '22', 'Advanced medical laboratories', 'Single', 'Before the test, you should fast for 10-12 hours. Nothing should be eaten or drunk (other than water).', 'يتطلب الصيام عن الطعام والشراب لمدة 10-12 ساعة ( يمكن شرب الماء فقط) .', 'Fasting Blood Sugar', 'تحليل سكر بالدم (صائم) (FBS)', 50, 'India General Hospital', '13', 1, '2024-08-28 06:58:33', '2024-08-28 11:58:33', '2024-08-28 12:57:16'),
(82, NULL, '', NULL, 'Body Test', NULL, 'Vitamins Package', NULL, NULL, '9', 'Laboratory', 'Package', NULL, NULL, NULL, NULL, 100, NULL, NULL, 1, '2024-09-11 07:27:38', '2024-09-11 12:27:38', '2024-09-11 12:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `termcondition`
--

CREATE TABLE `termcondition` (
  `id` bigint UNSIGNED NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tcenglish` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Tcarabic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termcondition`
--

INSERT INTO `termcondition` (`id`, `Name`, `Tcenglish`, `Tcarabic`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(1, 'Customer Video', 'pp', 'abckojo', '0', '2024-05-23 06:08:55', '2024-05-23 00:38:55', '2024-05-23 07:50:42'),
(2, 'Customer Login', 'kok', 'kokkok', '0', '2024-05-23 06:30:43', '2024-05-23 01:00:43', '2024-09-05 12:48:09'),
(3, 'Purchases', 'If you wish to purchase any product or service made available through the Service (\"Purchase\"), you may be asked to supply certain information relevant to your Purchase including, without limitation, your credit card number, the expiration date of your credit card, your billing address, and your shipping information. You represent and warrant that: (i) you have the legal right to use any credit card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete. By submitting such information, you grant us the right to provide the information to third parties for purposes of facilitating the completion of Purchases. We reserve the right to refuse or cancel your order at any time for certain reasons including but not limited to: product or service availability, errors in the description or price of the product or service, error in your order or other reasons.\r\n- We accept payments online using Visa and MasterCard credit/debit card in SAR.\r\n- Refunds will be done only through the Original Mode of Payment.', NULL, '1', '2024-09-05 07:47:58', '2024-09-05 12:47:58', '2024-09-05 12:51:04'),
(4, 'Availability,Errors and Inaccuracies', 'We are constantly updating our offerings of products and services on the Service. The products or services available on our Service may be mis-priced, described inaccurately, or unavailable, and we may experience delays in updating information on the Service and in our advertising on other web sites. We cannot and do not guarantee the accuracy or completeness of any information, including prices, product images, specifications, availability, and services. We reserve the right to change or update information and to correct errors, inaccuracies, or omissions at any time without prior notice.', NULL, '1', '2024-09-05 07:52:16', '2024-09-05 12:52:16', '2024-09-05 12:59:08'),
(5, 'Contest, Sweepstakes and Promotions', 'Any contests, sweepstakes or other promotions (collectively, \'Promotions\') made available through the Service may be governed by rules that are separate from these Terms. If you participate in any Promotions, please review the applicable rules as well as our Privacy Policy. If the rules for a Promotion conflict with these Terms, the Promotion rules will apply.', NULL, '1', '2024-09-05 07:53:36', '2024-09-05 12:53:36', '2024-09-05 12:59:11'),
(6, 'Accounts', 'When you create an account with us, you must provide us with information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service. You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third- party service. You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorised use of your account. You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trademark that is subject to any rights of another person or entity other than you without appropriate authorisation, or a name that is otherwise offensive, vulgar or obscene.', NULL, '1', '2024-09-05 07:53:59', '2024-09-05 12:53:59', '2024-09-05 12:59:17'),
(7, 'Intellectual property', 'The Service and its original content, features and functionality are and will remain the exclusive property of zuwara eCommerce Company LLC and its licensors. The Service is protected by copyright, trademark, and other laws of both the Saudi Arabia and foreign countries. Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of zuwara eCommerce Company LLC.', NULL, '1', '2024-09-05 07:54:41', '2024-09-05 12:54:41', '2024-09-05 12:59:19'),
(8, 'Links to Other Websites', 'Our Service may contain links to third-party web sites or services that are not owned or controlled by zuwara eCommerce Company LLC. zuwara eCommerce Company LLC has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party websites or services. You further acknowledge and agree that zuwara eCommerce Company LLC shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.', NULL, '1', '2024-09-05 07:55:40', '2024-09-05 12:55:40', '2024-09-05 12:59:22'),
(9, 'Termination', 'We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.', NULL, '1', '2024-09-05 07:56:30', '2024-09-05 12:56:30', '2024-09-05 12:59:26'),
(10, 'Limitation Of Liability', 'In no event shall zuwara eCommerce Company LLC, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your access to or use of or inability to access or use the Service; (ii) any conduct or content of any third party on the Service; (iii) any content obtained from the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we have been informed of the possibility of such damages, and even if a remedy set forth herein is found to have failed of its essential purpose.', NULL, '1', '2024-09-05 07:56:52', '2024-09-05 12:56:52', '2024-09-05 12:59:28'),
(11, 'Disclaimer', 'Your use of the Service is at your sole risk. The Service is provided on an \"AS IS\" and \"AS AVAILABLE\" basis. The Service is provided without warranties of any kind, whether expressed or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, non-infringement or course of performance. zuwara eCommerce Company LLC its subsidiaries, affiliates, and its licensors do not warrant that a) the Service will function uninterrupted, secure or available at any particular time or location; b) any errors or defects will be corrected; c) the Service is free of viruses or other harmful components; or d) the results of using the Service will meet your requirements.', NULL, '1', '2024-09-05 07:57:23', '2024-09-05 12:57:23', '2024-09-05 12:59:31'),
(12, 'Homecare Customer', 'vmvmmv', 'mmlmlmlml', '1', '2024-10-03 12:05:03', '2024-10-03 09:05:03', '2024-10-03 09:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationalid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `phone`, `city`, `dob`, `gender`, `country`, `nationalid`, `remember_token`, `created_at`, `updated_at`, `Status`) VALUES
(1, 'purvesh', NULL, 'purveshr@biztechnosys.com', NULL, '$2y$10$JinxqpUlAmckkqh8PQi7aeaNFWS.plMBQEK434tLw/9iAllEzs/h.', '555552022', NULL, NULL, NULL, NULL, NULL, 'xuXPFnLz6f2FjZTJaUXAIZuTd0CJnU9cp6wLn9gjhho2wlGi6JHs71TOBpSK', '2024-03-14 08:08:25', '2024-07-02 22:48:16', 0),
(2, 'kishan', 'patel', 'xyz12345@sryu.com', NULL, '$2y$10$oCpYzjFrimgfWOy/KeAIaeBbV7FB0lSwCmpf9M8JUmG4rhcpOrE/C', '1234567899', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 13:10:25', '2024-03-28 13:10:25', 0),
(3, 'kevin', 'patel', 'kevin@gmail.com', NULL, '$2y$10$5TiMt6BjW5ZFkpOZFl7NpeD/vA/186dVJ5fqwJDj.wTpb1IY9/mmq', '1234567800', NULL, NULL, NULL, 'india', NULL, NULL, '2024-03-28 17:10:27', '2024-03-28 17:10:27', 0),
(4, 'mayank', 'sheladiya', 'kishan40@gmail.com', NULL, '$2y$10$ynpuLWKAabvgb797QIXXae/5/MoPZ9FyaHmgguGZrw5XEHRjeS00C', '9879879871', NULL, '31101992', 'male', 'arab', '31231227', NULL, '2024-03-28 18:21:03', '2024-05-29 07:21:12', 1),
(5, 'kishana', 'patel', 'kishan@gmail.com', NULL, '$2y$10$E.3b89TP2E0qxzhAk/.EYuIU19ranWpHG3fM020y3vrfFcWk7HYbq', '1234567899', 'Riyadh', '31/10/1992', 'male', 'arab', '312312', NULL, '2024-03-29 05:45:05', '2024-05-29 07:21:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verification_codes`
--

CREATE TABLE `verification_codes` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `virtual_consultation`
--

CREATE TABLE `virtual_consultation` (
  `id` bigint UNSIGNED NOT NULL,
  `Title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` bigint UNSIGNED NOT NULL,
  `Healthcareid` int DEFAULT '0',
  `coordinates` json DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `city_id` int DEFAULT NULL,
  `zone_id` int DEFAULT NULL,
  `shape_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Enname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `Healthcareid`, `coordinates`, `country_id`, `city_id`, `zone_id`, `shape_type`, `Enname`, `Arname`, `Status`, `CreatedAt`, `created_at`, `updated_at`) VALUES
(21, 0, '[[45.07187238118124, 26.286879877969852], [44.48939496424151, 26.168576160931153], [45.20375406048814, 25.981016366797064], [45.06088224123934, 26.286879877969852]]', 13, 10, 6, 'LineString', NULL, NULL, 1, '2024-06-25 12:50:43', '2024-06-25 07:20:43', '2024-06-26 01:54:57'),
(22, 10, '[[[43.51127250938106, 26.125825800880875], [43.104637331516614, 25.997480968604464], [43.86295698753253, 25.819541125768183], [43.51127250938106, 26.125825800880875]]]', 13, 10, 6, 'Polygon', NULL, NULL, 1, '2024-06-26 05:48:59', '2024-06-26 00:18:59', '2024-06-26 01:52:17'),
(19, 0, '[[44.7971188826246, 24.68642553614204], [43.81899642776415, 24.69641085587797], [43.81899642776415, 24.50655321815283], [44.83008930245205, 24.49655273999609], [44.81909916250922, 24.676439416435883]]', 12, 9, 5, 'LineString', NULL, NULL, 1, '2024-06-21 06:18:06', '2024-06-21 00:48:06', '2024-08-28 12:59:46'),
(18, 0, '[[44.7971188826246, 24.68642553614204], [43.81899642776415, 24.69641085587797], [43.81899642776415, 24.50655321815283], [44.83008930245205, 24.49655273999609], [44.81909916250922, 24.676439416435883]]', 12, 9, 5, 'LineString', NULL, NULL, 1, '2024-06-21 06:18:03', '2024-06-21 00:48:03', '2024-08-28 12:59:42'),
(17, 10, '[[45.07187238118124, 26.286879877969852], [44.48939496424151, 26.168576160931153], [45.20375406048814, 25.981016366797064], [45.06088224123934, 26.286879877969852]]', 12, 9, 5, 'Point', NULL, NULL, 0, '2024-06-20 11:27:35', '2024-06-20 05:57:35', '2024-09-03 18:05:04'),
(25, 0, '[[40.968067409754205, 23.876723238169777], [40.00160372388339, 23.695829748151898], [41.45129925268963, 23.222317119896715], [40.97904995163918, 23.896806957800692], [41.011997577294096, 23.685772736788447], [41.00101503540918, 23.916887558737017]]', 12, 9, 5, 'LineString', NULL, NULL, 1, '2024-07-22 12:21:27', '2024-07-22 17:21:27', '2024-07-22 17:22:43'),
(27, 0, '[[47.3191934814715, 25.829803179676972], [46.56139809141342, 25.721014972193245], [47.50589669351427, 25.403974997111888], [47.341158565241415, 25.859455366350716]]', NULL, 12, 7, 'LineString', NULL, NULL, 1, '2024-08-16 12:02:31', '2024-08-16 06:32:31', '2024-08-28 12:59:45'),
(28, 10, '[[[44.592306231771715, 24.79066994272975], [43.74665050663475, 24.611072179219732], [45.14143332601702, 24.341191760055196], [44.592306231771715, 24.79066994272975]]]', 9, 7, 3, 'Polygon', NULL, NULL, NULL, '2024-08-16 12:37:05', '2024-08-16 07:07:05', '2024-08-16 07:07:05'),
(29, 13, '[46.41382928947544, 25.68333519087285]', 13, 10, 6, 'Point', NULL, NULL, 1, '2024-08-28 07:59:56', '2024-08-28 12:59:56', '2024-08-28 13:03:14'),
(30, 13, '[[[45.6375446195183, 25.627354839151103], [42.21412922500724, 24.55172746950214], [46.51956072855026, 22.854208414845967], [50.64186621116775, 23.992168892017588], [49.97810515888224, 24.644782380497062], [45.6375446195183, 25.627354839151103]]]', 13, 10, 6, 'Polygon', NULL, NULL, 1, '2024-08-28 08:00:13', '2024-08-28 13:00:13', '2024-08-28 13:03:14'),
(31, 13, '[[[45.76846269570171, 28.164114549744827], [39.88195020569362, 26.128106923145324], [44.26626663000164, 22.580299537929235], [49.05233316490464, 23.368303336640626], [49.71609421719021, 26.410048746958196], [45.76846269570171, 28.164114549744827]]]', 13, 10, 6, 'Polygon', NULL, NULL, 1, '2024-08-28 08:00:34', '2024-08-28 13:00:34', '2024-08-28 13:02:30'),
(32, 13, '[[[46.23207406663343, 25.36054172934037], [42.7375015652097, 24.623489461757885], [43.693563853335114, 22.812609032544103], [46.19910640152557, 22.84299450506216], [46.836481260275264, 23.982510110799936], [47.484845340728185, 24.19318800424487], [46.23207406663343, 25.36054172934037]]]', 19, 16, 11, 'Polygon', NULL, NULL, NULL, '2024-09-02 07:44:45', '2024-09-02 12:44:45', '2024-09-02 12:44:45'),
(33, 0, '[[48.38896637636291, 28.72001654827949], [36.89447539416528, 29.689402011393778], [38.17164105885351, 22.464422004090903], [46.0567508147582, 17.296894440553473], [50.66565299602604, 19.509667696147694], [54.21950528037618, 20.553044156573534], [54.774794699806336, 24.34979569873802], [48.333437434420176, 28.72001654827949]]', NULL, 17, 12, 'LineString', NULL, NULL, 1, '2024-09-02 07:52:25', '2024-09-02 12:52:25', '2024-09-02 12:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint UNSIGNED DEFAULT NULL,
  `country_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint UNSIGNED DEFAULT NULL,
  `city_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `country_id`, `country_name`, `city_id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'qq1', 1, 'india', 1, 'Tokio', '2024-06-19 02:19:17', '2024-06-19 02:19:17'),
(2, 'qw1', 6, 'nepal', 5, 'kathmandu', '2024-06-19 02:29:29', '2024-06-19 02:29:29'),
(3, 'sss', 9, 's', 7, 'ss', '2024-06-20 02:36:43', '2024-06-20 02:36:43'),
(4, 'a1', 9, 's', 7, 'ss', '2024-06-20 03:14:06', '2024-06-20 03:14:06'),
(5, 'zaaa', 12, 'za', 9, 'zaa', '2024-06-20 03:23:13', '2024-06-20 03:23:13'),
(6, 'afg2', 13, 'afg', 10, 'afg1', '2024-06-23 23:50:47', '2024-06-23 23:50:47'),
(7, 'King Street', 14, 'SAUDI ARIBIA', 12, 'riaadah 12', '2024-08-14 17:49:18', '2024-08-14 17:49:18'),
(8, 'النرجس', 14, 'SAUDI ARIBIA', 12, 'riaadah 12', '2024-08-14 17:54:05', '2024-08-14 17:54:05'),
(9, 'astreeeet 40', 17, 'SAUDI ARIBIA 4040', 14, 'riaadah 4040', '2024-08-14 18:26:24', '2024-08-14 18:26:24'),
(10, 'test1', 18, 'test1', 15, 'city tst1', '2024-08-15 16:31:31', '2024-08-15 16:31:31'),
(11, 'aa343434334', 19, 'SAUDI ARIBIA3434343', 16, 'riaadah 34343434', '2024-08-28 12:54:15', '2024-08-28 12:54:15'),
(12, '666', 20, '66', 17, '66', '2024-09-02 12:51:14', '2024-09-02 12:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `zwaara_services`
--

CREATE TABLE `zwaara_services` (
  `id` bigint UNSIGNED NOT NULL,
  `Title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TypeOfService` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_address_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alldoctors`
--
ALTER TABLE `alldoctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alldoctors_email_unique` (`email`);

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `allusers_email_unique` (`Email`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachments_record_id_foreign` (`record_id`);

--
-- Indexes for table `bankinginfo`
--
ALTER TABLE `bankinginfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bankinginfo_doctor_unique` (`Doctor`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookings_phone_unique` (`Phone`);

--
-- Indexes for table `bookingsattachments`
--
ALTER TABLE `bookingsattachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookingsattachments_bookings_id_foreign` (`bookings_id`) USING BTREE;

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `complaints_phone_unique` (`Phone`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_doctor_unique` (`Doctor`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorpositions`
--
ALTER TABLE `doctorpositions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generaljoinrequest`
--
ALTER TABLE `generaljoinrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_banners`
--
ALTER TABLE `header_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joindocrequest`
--
ALTER TABLE `joindocrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laborotaryservices`
--
ALTER TABLE `laborotaryservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalspecialties`
--
ALTER TABLE `medicalspecialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_passwords`
--
ALTER TABLE `otp_passwords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `otp_passwords_user_id_foreign` (`user_id`);

--
-- Indexes for table `otp_verifications`
--
ALTER TABLE `otp_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `otp_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `ourservices`
--
ALTER TABLE `ourservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patientaddress`
--
ALTER TABLE `patientaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `practitioners`
--
ALTER TABLE `practitioners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduleconfiguration`
--
ALTER TABLE `scheduleconfiguration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serviceprovider_email_unique` (`email`);

--
-- Indexes for table `serviceproviderrequest`
--
ALTER TABLE `serviceproviderrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_addresses`
--
ALTER TABLE `service_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_addresses_zwaara_service_id_foreign` (`zwaara_service_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `submedicalspecialties`
--
ALTER TABLE `submedicalspecialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subservices`
--
ALTER TABLE `subservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termcondition`
--
ALTER TABLE `termcondition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verification_codes_user_id_foreign` (`user_id`);

--
-- Indexes for table `virtual_consultation`
--
ALTER TABLE `virtual_consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zwaara_services`
--
ALTER TABLE `zwaara_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zwaara_services_service_address_id_foreign` (`service_address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alldoctors`
--
ALTER TABLE `alldoctors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `bankinginfo`
--
ALTER TABLE `bankinginfo`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `bookingsattachments`
--
ALTER TABLE `bookingsattachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctorpositions`
--
ALTER TABLE `doctorpositions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `generaljoinrequest`
--
ALTER TABLE `generaljoinrequest`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `header_banners`
--
ALTER TABLE `header_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `joindocrequest`
--
ALTER TABLE `joindocrequest`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `laborotaryservices`
--
ALTER TABLE `laborotaryservices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicalspecialties`
--
ALTER TABLE `medicalspecialties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `otp_passwords`
--
ALTER TABLE `otp_passwords`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_verifications`
--
ALTER TABLE `otp_verifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ourservices`
--
ALTER TABLE `ourservices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `patientaddress`
--
ALTER TABLE `patientaddress`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898;

--
-- AUTO_INCREMENT for table `practitioners`
--
ALTER TABLE `practitioners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scheduleconfiguration`
--
ALTER TABLE `scheduleconfiguration`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `serviceproviderrequest`
--
ALTER TABLE `serviceproviderrequest`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service_addresses`
--
ALTER TABLE `service_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submedicalspecialties`
--
ALTER TABLE `submedicalspecialties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subservices`
--
ALTER TABLE `subservices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `termcondition`
--
ALTER TABLE `termcondition`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `virtual_consultation`
--
ALTER TABLE `virtual_consultation`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zwaara_services`
--
ALTER TABLE `zwaara_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
