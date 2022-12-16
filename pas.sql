-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 08:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(225) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Email`, `Password`) VALUES
(1, 'admin208@gmail.com', 'Admin@123!+');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_ID` int(225) NOT NULL,
  `P_Name` varchar(60) NOT NULL,
  `P_DOB` date NOT NULL,
  `P_Gender` varchar(20) NOT NULL,
  `P_Phone` bigint(20) NOT NULL,
  `P_Email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_ID`, `P_Name`, `P_DOB`, `P_Gender`, `P_Phone`, `P_Email`) VALUES
(1, 'Saad Ali', '2022-02-21', 'Male', 3311321578, 'saad@gmail.com'),
(3, 'saad ali', '2022-02-21', 'Male', 314151487, 'saad@gmail.com'),
(4, 'Anas', '2022-02-08', 'Male', 1840549, 'anas@gmail.com'),
(5, 'Bilal', '2022-02-08', 'Male', 680511301, 'bilal@gmail.com'),
(6, 'mahad', '2022-02-08', 'Male', 81040, 'mahad@gmail.com'),
(7, 'saad ali', '2022-02-21', 'Male', 314151487, 'saad@gmail.com'),
(8, 'Saad', '2000-01-26', 'Male', 3311321578, 'saad@gmail.com'),
(9, 'Mahad', '2000-01-25', 'Male', 3317132147, 'mahad@gmail.com'),
(10, 'Ammad', '2000-01-27', 'Male', 3311321523, 'ammad@gmail.com'),
(11, 'laiq', '2000-01-24', 'Male', 3311321590, 'laiq@gmail.com'),
(12, 'Dilawar', '2000-01-22', 'Male', 3311321599, 'dilawar@gmail.com'),
(13, 'Osama', '2000-01-20', 'Male', 3311321591, 'osama@gmail.com'),
(14, 'Ebad', '2000-01-12', 'Male', 3311323178, 'ebad@gmail.com'),
(15, 'Wajahat', '2000-01-13', 'Male', 3311321589, 'wajahat@gmail.com'),
(16, 'Ali', '2000-01-01', 'Male', 3311321500, 'ali@gmail.com'),
(17, 'Alyy', '2000-01-02', 'Male', 3311321592, 'alyy@gmail.com'),
(18, 'Zain', '2000-01-03', 'Male', 3311321577, 'zain@gmail.com'),
(19, 'Waji', '2000-01-04', 'Male', 3311321512, 'waji@gmail.com'),
(20, 'Anus', '2000-01-05', 'Male', 3311321522, 'anus@gmail.com'),
(21, 'Furqan', '2000-01-07', 'Male', 3311321512, 'furqan@gmail.com'),
(22, 'Qalsan', '2000-01-08', 'Male', 3311321567, 'qalsan@gmail.com'),
(23, 'Sara', '2000-01-09', 'Female', 3311321500, 'sara@gmail.com'),
(24, 'Wajiha', '2000-01-10', 'Female', 3311325178, 'wajiha@gmail.com'),
(25, 'Saim', '2000-01-11', 'Male', 3321321578, 'saim@gmail.com'),
(26, 'Iftikhar', '2000-01-13', 'Male', 3310321578, 'ifti@gmail.com'),
(27, 'Ifti', '2000-01-13', 'Male', 3311321758, 'iftikhar@gmail.com'),
(28, 'Zara', '2001-02-26', 'female', 3211132157, 'sara@gmail.com'),
(29, 'Zoe', '2001-03-26', 'Female', 3001321578, 'zoe@gmail.com'),
(30, 'Zui', '2001-04-26', 'Female', 3311323278, 'zui@gmail.com'),
(31, 'Ruhail', '2001-02-22', 'Male', 3311321578, 'ruhail@gmail.com'),
(32, 'Ruha', '2003-04-22', 'Female', 3311321578, 'ruha@gmail.com'),
(33, 'Rabi', '2000-10-26', 'Female', 3322321578, 'rabi@gmail.com'),
(34, 'RAzzaq', '2010-01-22', 'Male', 3333321578, 'razzaq@gmail.com'),
(35, 'Abdul', '2002-12-26', 'Male', 3311231578, 'abdul@gmail.com'),
(36, 'Loren', '2003-08-27', 'Female', 3311325678, 'loren@gmail.com'),
(37, 'Saadullah', '2010-10-26', 'Male', 3311321578, 'saadullah@gmail.com'),
(38, 'Jhonny', '2011-02-26', 'Male', 3311001578, 'jhonny@gmail.com'),
(39, 'John', '2012-01-26', 'Male', 3311111578, 'john@gmail.com'),
(40, 'saad ali', '2022-02-22', 'Male', 314151487, 'saad@gmail.com'),
(41, 'Ihson', '1998-09-23', 'Male', 314151487, 'ihson201@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `average`
--

CREATE TABLE `average` (
  `Average_ID` int(225) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(225) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Message` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_ID`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'Saad', 'saad@gmail.com', 314151487, 'Dummy Message'),
(6, 'Saad', 'saad@gmail.com', 3311321578, 'Dumy Message'),
(7, 'Saad', 'saad@gmail.com', 3311321578, 'Dumy Message'),
(8, 'Mahad ', 'mahad@gmail.com', 3317132147, 'Good'),
(9, 'John ', 'john@gmail.com', 3317132175, 'Very Good'),
(10, 'Saim', 'saim@gmail.com', 3311321587, 'Just fine'),
(11, 'Sara', 'sara@gmail.com', 3311325178, 'Poor'),
(12, 'Sohail', 'sohail@gmail.com', 3311231578, 'Very good service'),
(13, 'ruhail', 'ruhail@gmail.com', 3311321578, 'best service'),
(14, 'Zara', 'zara@gmail.com', 3311325578, 'Worst'),
(15, 'Zulqarnain', 'zul@gmail.com', 3311341578, 'Lol'),
(16, 'Doc', 'doc@gmail.com', 3311121578, 'Good doctor'),
(17, 'Farhan', 'farhan@gmail.com', 3311228878, 'Reliable'),
(18, 'Farhana', 'farhana@gmail.com', 3311521578, 'OOO'),
(19, 'Kamaran', 'kamran@gmail.com', 3311521578, 'PPP'),
(20, 'Kami', 'kami@gmail.com', 3311021578, 'LLLL'),
(21, 'Ebad', 'ebad@gmail.com', 3311921578, 'RRR'),
(22, 'Osama', 'osama@gmail.com', 3311331578, 'QQQ'),
(23, 'Raja', 'raja@gmail.com', 331132168, 'ZZZ'),
(24, 'Raj', 'raj@gmail.com', 3311221578, 'RRR'),
(25, 'Rohail', 'rohail@gmail.com', 3311311578, 'LPLOL'),
(26, 'Bilal', 'bilal@gmail.com', 3322321578, 'OOLL'),
(27, 'Poppye', 'pop@gmail.com', 3311321668, 'DDD'),
(28, 'Shabana', 'shabana@gmail.com', 3311321778, 'POPOPL'),
(29, 'Fozia', 'fozia@gmail.com', 3311322378, 'LKLKL'),
(30, 'Saadi', 'saadi@gmail.com', 3311321178, 'BBBNNB'),
(31, 'Sadaf', 'sadaf@gmail.com', 3311321668, 'BHBMNS'),
(32, 'Hasin', 'hasin@gmail.com', 3311111578, 'NNNN'),
(33, 'Hassan', 'hassan@gmail.com', 3310921578, 'BHBHBH'),
(34, 'Raza', 'raza@gmail.com', 3311321500, 'NJNJNIO'),
(35, 'Sidhu', 'sidhu@gmail.com', 3311366678, 'AAAA'),
(36, 'Adeel', 'adeel@gmail.com', 3311327778, 'BBBBB'),
(37, 'Ali', 'ali@gmail.com', 3311321999, 'HHHH'),
(38, 'Osama', 'osama@gmail.com', 3311555578, 'NNNNN'),
(39, 'Sadia', 'sadia@gmail.com', 3311323378, 'LLLLLLL');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(225) NOT NULL,
  `D_Name` varchar(60) NOT NULL,
  `D_DOB` date NOT NULL,
  `D_Gender` varchar(20) NOT NULL,
  `D_Email` varchar(80) NOT NULL,
  `D_Contact_No` bigint(20) NOT NULL,
  `D_Address` varchar(80) NOT NULL,
  `D_Speciality` varchar(40) NOT NULL,
  `D_Timing` varchar(40) NOT NULL,
  `D_Shift` varchar(20) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `D_Name`, `D_DOB`, `D_Gender`, `D_Email`, `D_Contact_No`, `D_Address`, `D_Speciality`, `D_Timing`, `D_Shift`, `Password`) VALUES
(1, 'Saad Ali', '2022-02-20', 'Male', 'saad@gmail.com', 314151487, 'Dumy Street No, Dumy House No', 'Agqff', '12:30:02', 'Morning', '123'),
(2, 'Saad', '2022-02-09', 'Male', 'saad@gmail.com', 3311321578, 'Dumy Address', 'Dumy', '8 hours', 'Morning', '321'),
(3, 'Saad', '2022-02-09', 'Male', 'saad@gmail.com', 3311321578, 'Dumy Address', 'Dumy', '8 hours', 'Morning', '456'),
(4, 'Mahad', '2022-01-09', 'Male', 'mahad@gmail.com', 3311321588, 'ABCD', 'Dumy', '8 hours', 'Evening', '654'),
(5, 'Ammad', '2022-02-02', 'Male', 'ammad@gmail.com', 3311321778, 'CVBD', 'Dumy', '8 hours', 'Night', '789'),
(6, 'Laiq', '2022-02-19', 'Male', 'laiq@gmail.com', 3311321178, 'LALALA', 'Dumy', '8 hours', 'Morning', '987'),
(7, 'Osama', '2022-03-09', 'Male', 'osama@gmail.com', 3311321578, 'Dumy Address', 'Dumy', '8 hours', 'Evening', '4314');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice_ID` int(225) NOT NULL,
  `Image` varchar(120) NOT NULL,
  `P_Name` varchar(60) NOT NULL,
  `Fees` bigint(20) NOT NULL,
  `Medical_Prescription` varchar(240) NOT NULL,
  `Symptoms` varchar(240) NOT NULL,
  `Patient_ID` int(225) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Invoice_ID`, `Image`, `P_Name`, `Fees`, `Medical_Prescription`, `Symptoms`, `Patient_ID`, `Date`) VALUES
(19, '0.jpg', 'Saad', 1000, 'Panadol', 'Fever', 1, '2022-02-19'),
(20, '0.jpg', 'laiq', 1000, 'Panadol', 'Fever, headache', 2, '2022-02-19'),
(21, '1.jpg', 'Ammad', 1000, 'Penadol', 'fever', 3, '2022-02-19'),
(22, '2.jpg', 'Saad Ali', 1000, 'Panadol,Aspirin', 'Cold,Shivering', 4, '2022-02-19'),
(23, '3.jpg', 'mahad', 1000, 'paracatmol \r\nanti biotic\r\ncough syrup', 'fever', 5, '2022-02-19'),
(24, '2.jpg', 'Saad Ali', 1000, 'Pain killer', 'headche', 6, '2022-02-20'),
(25, '4.jpg', 'Osama', 1000, 'Amoxil', 'Cough', 7, '2022-02-20'),
(26, '1.jpg', 'Ammad', 1000, 'Motillium', 'nausea', 8, '2022-02-20'),
(27, '5.jpg', 'Osama', 1000, 'Pain killer', 'Pain in head', 9, '2022-02-20'),
(28, '6.jpg', 'Ebad', 1000, 'panadol', 'cold', 10, '2022-02-23'),
(29, '7.jpg', 'Wajahat', 1000, 'Aspirin', 'cold', 11, '2022-02-23'),
(30, '2.jpg', 'Saad Ali', 1000, 'Aspirin', 'cold ', 12, '2022-02-23'),
(31, '1.jpg', 'Ihson', 1000, 'panadol', 'cold', 13, '2022-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

CREATE TABLE `medicalhistory` (
  `MH_ID` int(225) NOT NULL,
  `Patient_ID` int(225) NOT NULL,
  `Symptoms` varchar(240) NOT NULL,
  `Diagnosis` varchar(240) NOT NULL,
  `Medical_Prescription` varchar(240) NOT NULL,
  `Date` date NOT NULL,
  `Enter_Time` time NOT NULL,
  `Exit_Time` time NOT NULL,
  `Fees` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`MH_ID`, `Patient_ID`, `Symptoms`, `Diagnosis`, `Medical_Prescription`, `Date`, `Enter_Time`, `Exit_Time`, `Fees`) VALUES
(1, 1, 'Fever', 'Cold', 'Panadol', '2022-02-23', '09:31:54', '09:33:11', 1000),
(2, 2, 'Fever, headache', 'Fever', 'Panadol', '2022-02-23', '10:34:30', '10:36:43', 1000),
(3, 3, 'fever', 'cold', 'Penadol', '2022-02-23', '10:37:15', '10:38:55', 1000),
(4, 4, 'Cold,Shivering', 'Fever', 'Panadol,Aspirin', '2022-02-23', '10:39:45', '10:40:52', 1000),
(5, 5, 'fever', 'cough high temperature', 'paracatmol \r\nanti biotic\r\ncough syrup', '2022-02-23', '10:41:40', '10:44:58', 1000),
(6, 6, 'headche', 'head pain', 'Pain killer', '2022-02-23', '10:45:04', '10:45:56', 1000),
(7, 7, 'Cough', 'Fever', 'Amoxil', '2022-02-23', '10:50:04', '10:52:09', 1000),
(8, 8, 'nausea', 'vomit', 'Motillium', '2022-02-23', '10:52:24', '10:56:47', 1000),
(9, 9, 'Pain in head', 'Headache', 'Pain killer', '2022-02-23', '10:58:24', '10:59:44', 1000),
(10, 10, 'cold', 'fever', 'panadol', '2022-02-23', '11:20:34', '11:21:31', 1000),
(11, 11, 'cold', 'fever', 'Aspirin', '2022-02-23', '11:22:13', '11:23:12', 1000),
(12, 12, 'cold ', 'Fever', 'Aspirin', '2022-02-23', '11:23:28', '11:24:03', 1000),
(13, 13, 'cold', 'fever', 'panadol', '2022-02-23', '13:47:02', '13:48:41', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_ID` int(225) NOT NULL,
  `P_Name` varchar(60) NOT NULL,
  `P_DOB` date NOT NULL,
  `P_Gender` varchar(20) NOT NULL,
  `P_Phone` bigint(20) NOT NULL,
  `P_Email` varchar(80) NOT NULL,
  `P_Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `P_Name`, `P_DOB`, `P_Gender`, `P_Phone`, `P_Email`, `P_Image`) VALUES
(1, 'Saad', '2000-01-26', 'Male', 3311321578, 'saad@gmail.com', '0.jpg'),
(2, 'laiq', '2000-01-24', 'Male', 3311321590, 'laiq@gmail.com', '0.jpg'),
(3, 'Ammad', '2000-01-27', 'Male', 3311321523, 'ammad@gmail.com', '1.jpg'),
(4, 'Saad Ali', '2022-02-21', 'Male', 3311321578, 'saad@gmail.com', '2.jpg'),
(5, 'mahad', '2022-02-08', 'Male', 81040, 'mahad@gmail.com', '3.jpg'),
(6, 'Saad Ali', '2022-02-21', 'Male', 3311321578, 'saad@gmail.com', '2.jpg'),
(7, 'Osama', '2000-01-20', 'Male', 3311321591, 'osama@gmail.com', '4.jpg'),
(8, 'Ammad', '2000-01-27', 'Male', 3311321523, 'ammad@gmail.com', '1.jpg'),
(9, 'Osama', '2000-01-20', 'Male', 3311321591, 'osama@gmail.com', '5.jpg'),
(10, 'Ebad', '2000-01-12', 'Male', 3311323178, 'ebad@gmail.com', '6.jpg'),
(11, 'Wajahat', '2000-01-13', 'Male', 3311321589, 'wajahat@gmail.com', '7.jpg'),
(12, 'Saad Ali', '2022-02-21', 'Male', 3311321578, 'saad@gmail.com', '2.jpg'),
(13, 'Ihson', '1998-09-23', 'Male', 314151487, 'ihson201@gmail.com', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `User_ID` int(225) NOT NULL,
  `F_Name` varchar(60) NOT NULL,
  `L_Name` varchar(60) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`User_ID`, `F_Name`, `L_Name`, `Email`, `Password`) VALUES
(1, 'saad', 'ali', 'saad@gmail.com', '12'),
(2, 'Saad', 'Ali', 'saad@gmail.com', 'Admin@123!+'),
(3, 'Saad', 'Ali', 'saad@gmail.com', 'Admin@123!+'),
(4, 'Mahad', 'Ali', 'mahad@gmail.com', 'Admin@12!+'),
(5, 'Ammad', 'Ahmed', 'ammad@gmail.com', 'Admin@123!'),
(6, 'Laiq', 'Afzal', 'laiq@gmail.com', 'admin@123!+'),
(7, 'Wajahat', 'Ali', 'wajahat@gmail.com', 'Admi@123!+'),
(8, 'Wajiha', 'Shariq', 'wajiha@gmail.com', 'Ldmin@123!+'),
(9, 'Waaji', 'Ahmed', 'waji@gmail.com', '@123!+'),
(10, 'Shariq', 'Ali', 'shariq@gmail.com', 'Admin23!+'),
(11, 'Akbar', 'Ali', 'akbar@gmail.com', 'Adm@123!+'),
(12, 'Sadaf', 'Ali', 'sadaf@gmail.com', 'Admin@12+'),
(13, 'BObby', 'Ali', 'bobby@gmail.com', 'Admin@122!+'),
(14, 'ROhail', 'Ali', 'rohail@gmail.com', 'Admin@12223!+'),
(15, 'Sohail', 'Ali', 'sohail@gmail.com', 'Admin@11223!+');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `Search_ID` int(11) NOT NULL,
  `P_Name` varchar(80) NOT NULL,
  `P_DOB` date NOT NULL,
  `P_Gender` varchar(20) NOT NULL,
  `P_Phone` bigint(20) NOT NULL,
  `P_Email` varchar(80) NOT NULL,
  `P_Image` varchar(80) NOT NULL,
  `Symptoms` varchar(240) NOT NULL,
  `Diagnosis` varchar(240) NOT NULL,
  `MP` varchar(240) NOT NULL,
  `Date` date NOT NULL,
  `Enter_Time` time NOT NULL,
  `Exit_Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`Search_ID`, `P_Name`, `P_DOB`, `P_Gender`, `P_Phone`, `P_Email`, `P_Image`, `Symptoms`, `Diagnosis`, `MP`, `Date`, `Enter_Time`, `Exit_Time`) VALUES
(1, 'Saad', '2000-01-26', 'Male', 3311321578, 'saad@gmail.com', '0.jpg', 'Fever', 'Cold', 'Panadol', '2022-02-19', '09:25:54', '09:33:11'),
(2, 'laiq', '2000-01-24', 'Male', 3311321590, 'laiq@gmail.com', '0.jpg', 'Fever, headache', 'Fever', 'Panadol', '2022-02-19', '10:34:30', '10:36:43'),
(3, 'Ammad', '2000-01-27', 'Male', 3311321523, 'ammad@gmail.com', '1.jpg', 'fever', 'cold', 'Penadol', '2022-02-19', '10:37:15', '10:38:55'),
(4, 'Saad Ali', '2022-02-21', 'Male', 3311321578, 'saad@gmail.com', '2.jpg', 'Cold,Shivering', 'Fever', 'Panadol,Aspirin', '2022-02-20', '10:39:45', '10:40:52'),
(5, 'mahad', '2022-02-08', 'Male', 81040, 'mahad@gmail.com', '3.jpg', 'fever', 'cough high temperature', 'paracatmol \r\nanti biotic\r\ncough syrup', '2022-02-20', '10:41:40', '10:44:58'),
(6, 'Saad Ali', '2022-02-21', 'Male', 3311321578, 'saad@gmail.com', '2.jpg', 'headche', 'head pain', 'Pain killer', '2022-02-20', '10:45:04', '10:45:56'),
(7, 'Osama', '2000-01-20', 'Male', 3311321591, 'osama@gmail.com', '4.jpg', 'Cough', 'Fever', 'Amoxil', '2022-02-20', '10:50:04', '10:52:09'),
(8, 'Ammad', '2000-01-27', 'Male', 3311321523, 'ammad@gmail.com', '1.jpg', 'nausea', 'vomit', 'Motillium', '2022-02-20', '10:52:24', '10:56:47'),
(9, 'Osama', '2000-01-20', 'Male', 3311321591, 'osama@gmail.com', '5.jpg', 'Pain in head', 'Headache', 'Pain killer', '2022-02-23', '10:58:24', '10:59:44'),
(10, 'Ebad', '2000-01-12', 'Male', 3311323178, 'ebad@gmail.com', '6.jpg', 'cold', 'fever', 'panadol', '2022-02-23', '11:20:34', '11:21:31'),
(11, 'Wajahat', '2000-01-13', 'Male', 3311321589, 'wajahat@gmail.com', '7.jpg', 'cold', 'fever', 'Aspirin', '2022-02-23', '11:22:13', '11:23:13'),
(12, 'Saad Ali', '2022-02-21', 'Male', 3311321578, 'saad@gmail.com', '2.jpg', 'cold ', 'Fever', 'Aspirin', '2022-02-23', '11:23:28', '11:24:03'),
(13, 'Ihson', '1998-09-23', 'Male', 314151487, 'ihson201@gmail.com', '1.jpg', 'cold', 'fever', 'panadol', '2022-02-23', '13:47:02', '13:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_ID`);

--
-- Indexes for table `average`
--
ALTER TABLE `average`
  ADD PRIMARY KEY (`Average_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_ID`);

--
-- Indexes for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  ADD PRIMARY KEY (`MH_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`Search_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `average`
--
ALTER TABLE `average`
  MODIFY `Average_ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Invoice_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  MODIFY `MH_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `User_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `Search_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
