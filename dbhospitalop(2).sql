-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2022 at 10:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhospitalop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladminlogin`
--

CREATE TABLE IF NOT EXISTS `tbladminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladminlogin`
--

INSERT INTO `tbladminlogin` (`id`, `username`, `password`) VALUES
(1, 'Gourisankar', 'gourisankar');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE IF NOT EXISTS `tbldepartment` (
  `deptid` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(50) NOT NULL,
  `deptdescription` varchar(255) NOT NULL,
  `deptimg` varchar(50) NOT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`deptid`, `deptname`, `deptdescription`, `deptimg`) VALUES
(13, 'ENT', 'A department which has special training in diagnosing and treating diseases of the ear, nose, and throat', 'ent.jpg'),
(14, 'Cardiology', 'Cardiology is a branch of medicine that deals with disorders of the heart and the cardiovascular system', 'cardiology.jpg'),
(15, 'Gynacology', 'A branch of medicine that specializes in the care of women during pregnancy and childbirth and in the diagnosis and treatment of diseases of the female reproductive organs', 'gynacology.jpg'),
(16, 'Neurology', 'Neurology is the branch of medicine concerned with the study and treatment of disorders of the nervous system', 'neurology.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbldistrict`
--

CREATE TABLE IF NOT EXISTS `tbldistrict` (
  `districtid` int(11) NOT NULL AUTO_INCREMENT,
  `districtname` varchar(50) NOT NULL,
  PRIMARY KEY (`districtid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbldistrict`
--

INSERT INTO `tbldistrict` (`districtid`, `districtname`) VALUES
(5, 'Kochi'),
(6, 'Idukki'),
(7, 'Thiruvananthapuram'),
(8, 'Malappuram'),
(9, 'Wayanad'),
(10, 'Kazargode'),
(11, 'Palakkad'),
(12, 'Kollam'),
(13, 'Thrissur'),
(14, 'Kannur'),
(15, 'Alappuzha'),
(16, 'Pathanamthitta'),
(17, 'Kottayam'),
(18, 'Kozhikode');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctor`
--

CREATE TABLE IF NOT EXISTS `tbldoctor` (
  `doctorid` int(11) NOT NULL AUTO_INCREMENT,
  `deptid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `docgender` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `docimg` varchar(50) NOT NULL,
  `joindate` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `docter_status` varchar(50) NOT NULL,
  PRIMARY KEY (`doctorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbldoctor`
--

INSERT INTO `tbldoctor` (`doctorid`, `deptid`, `name`, `qualification`, `docgender`, `email`, `contact`, `description`, `docimg`, `joindate`, `password`, `docter_status`) VALUES
(24, 13, 'Dr. Harisankar', 'MBBS/(MS) IN ENT', 'Male', 'harisankar@gmail.com', 9876543219, 'Test Description', 'hari.jpg', '2022-11-02', 'pat11#@0', 'Present'),
(25, 14, 'Dr.Jeeva', 'MBBS/(MD)', 'Male', 'jeeva@gmail.com', 9758478587, 'Test Description', 'jeeva.jpg', '2022-11-23', 'pat12#@0', 'Absent'),
(26, 15, 'Dr.Honey', 'MBBS/(MD) in Gynaecology & Obstetrics', 'Female', 'honey123@gmail.com', 9638529562, 'Test Description', 'honey.jpg', '2022-11-26', 'pat13#@0', 'Absent'),
(27, 15, 'Dr.Janaki', 'MBBS/(MD) in Gynaecology & Obstetrics', 'Female', 'janaki@gmail.com', 7894569875, 'Test Description', 'janaki.jpg', '2022-11-20', 'pat14#@0', 'Absent'),
(28, 15, 'Dr.Anmary', 'MBBS/ Doctor of Medicine (Gynacology) ', 'Female', 'anmary@gmail.com', 8547578968, 'Test Description', 'anmary.webp', '2022-11-12', 'pat15#@0', 'Absent'),
(29, 16, 'Dr. Thomas Issac', 'MBBS/ Doctor of Medicine (Neurology)', 'Male', 'thomasis@gmail.com', 9865784585, 'Test Description', 'thomas.jpg', '2022-11-05', 'pat16#@0', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `tblopbooking`
--

CREATE TABLE IF NOT EXISTS `tblopbooking` (
  `opid` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `opdate` date NOT NULL,
  `description` varchar(400) NOT NULL,
  `oppayment` int(11) NOT NULL,
  `opnumber` bigint(50) NOT NULL,
  PRIMARY KEY (`opid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tblopbooking`
--

INSERT INTO `tblopbooking` (`opid`, `patientid`, `departmentid`, `doctorid`, `opdate`, `description`, `oppayment`, `opnumber`) VALUES
(27, 5, 13, 24, '2022-11-02', 'ENT', 250, 1001),
(28, 19, 14, 25, '2022-11-02', 'Regular Visit', 250, 1002),
(29, 14, 13, 24, '2022-11-02', 'test area', 250, 1003),
(37, 11, 13, 24, '2022-11-03', 'test desc', 250, 1004);

-- --------------------------------------------------------

--
-- Table structure for table `tblopdetails`
--

CREATE TABLE IF NOT EXISTS `tblopdetails` (
  `opdetailid` int(11) NOT NULL AUTO_INCREMENT,
  `opnumber` bigint(50) NOT NULL,
  `patientid` int(11) NOT NULL,
  `bookingdate` date NOT NULL,
  `departmentid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `pat_description` varchar(400) NOT NULL,
  `op_consult_status` varchar(50) NOT NULL,
  PRIMARY KEY (`opdetailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tblopdetails`
--

INSERT INTO `tblopdetails` (`opdetailid`, `opnumber`, `patientid`, `bookingdate`, `departmentid`, `doctorid`, `pat_description`, `op_consult_status`) VALUES
(19, 1004, 11, '2022-11-03', 13, 24, 'test desc', 'pending'),
(20, 1004, 11, '2022-11-03', 13, 24, 'painn', 'pending'),
(21, 1004, 11, '2022-11-03', 14, 25, 'sick heart', 'pending'),
(22, 1004, 11, '2022-11-18', 14, 25, 'TEST APPOINTMENT', 'pending'),
(23, 1001, 5, '2022-11-08', 16, 29, 'TEST', 'consulted'),
(24, 1001, 5, '2022-11-05', 16, 29, 'TEST APPOINTMENT', 'pending'),
(26, 1004, 11, '2022-11-07', 13, 24, 'TEST APPOINTMENT', 'pending'),
(27, 1004, 11, '2022-11-07', 13, 24, 'test', 'pending'),
(28, 1004, 11, '2022-11-07', 13, 24, 'testttt', 'pending'),
(29, 1004, 11, '2022-11-07', 16, 29, 'test desc', 'pending'),
(30, 1004, 11, '2022-11-07', 16, 29, 'ytfty', 'pending'),
(31, 1004, 11, '2022-11-07', 16, 29, 'wdasd', 'pending'),
(32, 1004, 11, '2022-11-07', 13, 24, 'test', 'pending'),
(33, 1004, 11, '2022-11-09', 13, 24, 'TEST APPOINTMENT', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE IF NOT EXISTS `tblpatient` (
  `patientid` int(11) NOT NULL AUTO_INCREMENT,
  `patientname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `housename` varchar(150) NOT NULL,
  `district` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `pin` int(50) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `health_description` varchar(300) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `opstatus` varchar(50) NOT NULL,
  PRIMARY KEY (`patientid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`patientid`, `patientname`, `gender`, `housename`, `district`, `location`, `pin`, `contact`, `email`, `dob`, `health_description`, `username`, `password`, `opstatus`) VALUES
(5, 'Gourisankar', 'Male', 'fdsgg', '6', 'efwef', 19558974, 8584152923, 'sf@gmail.com', '1960-08-23', 'fdfsdfgsdg', 'Gourisankar', 'gourisankar', 'OP registered'),
(11, 'Sigma ', 'Female', 'Thottiyil House', '5', 'kochi', 256654, 9874561235, 'sigma@gmail.com', '2001-10-18', 'hi', 'sigma', 'Sigma@123', 'OP registered'),
(14, 'goutham', 'Male', 'town house', '5', 'kochi', 685608, 7736710021, 'kgourisankar01@gmail.com', '2001-11-18', 'test desc', 'goutham', 'Goutham@123', 'OP registered');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
