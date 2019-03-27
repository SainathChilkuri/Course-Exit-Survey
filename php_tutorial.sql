-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 03:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `password`, `studentname`, `year`, `sem`) VALUES
('sainath', 'chilkurisainath@gmail.com', '12', 'sainath chilkuri', 'TY', 's5'),
('abhishek', 'abhishek@gmail.com', '12', 'Abhishek Gupta', 'TY', 's5'),
('himanshu', 'himanshu@gmail.com', '12', 'himanshu prajapati', 'TY', 's5'),
('alok', 'alok@gmail.com', '12', 'alok kushwaha', 'TY', 's4'),
('pankaj', 'pankaj@gmail.com', '12', 'pankaj purohit', '--choose--', '--choose--'),
('pankaj1', 'pankaj@g', '12', 'pankaj1', 'fY', 's2'),
('sainath1', 'sainath1@g', '12', 'sainath1', '--choose--', '--choose--'),
('sai', 'sai@g', '12', 'sai', 'SY', 's4'),
('him', 'him@g', '12', 'himanshu1', 'TY', 's5'),
('pankajarp', 'pankajarp@g', '12', 'PankajArp', 'TY', 's5'),
('Bipin', 'Bipin@gmail.com', '12', 'Bipin Tiwari', 'SY', 's4'),
('kartik', 'kartik@gmail.com', '12', 'kartik ganguli', 'TY', '--choose--'),
('amit', 'amit@gmail.com', '12', 'amit singh', 'TY', 's5'),
('john doe ', 'johndoe123@gmail.com', '12', 'john doe', 'SY', 's3'),
('amar', 'amar123@gmail.com', '12', 'amar vishw', 'TY', 's5'),
('sagarika123', 'sagarika123@gmail.com', 'sagarika', 'sagarika', 'TY', 's5'),
('johnkenny', 'johnkenny123@gmail.com', 'john', 'johnkenny', 'TY', 's5'),
('vikas', 'vikas@gmail.com', '12', 'vikas more', 'SY', 's2'),
('deepak', 'deepal123@gmail.com', '12', 'deepak gupta', 'TY', 's5'),
('divyesh', 'divyeshchavan@gmail.com', '1234', 'divyesh chavan', 'TY', 's5'),
('vishakha', 'vishakha.shelke@gmail.com', '123', 'vishakha shelke', 'TY', 's6'),
('kanchan', 'kanchan@gmail.com', '1234', 'kanchan dabre', 'TY', 's5'),
('divesh', 'divesh@gmail.com', '1234', 'divesh chavan', 'TY', 's5'),
('ekta', 'ekta.upadhyay@universal.edu.in', '12345', 'ekta', 'SY', 's4');

-- --------------------------------------------------------

--
-- Table structure for table `studentsfeedback`
--

CREATE TABLE `studentsfeedback` (
  `studentsname` varchar(50) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `Q1` int(50) NOT NULL,
  `Q2` int(50) NOT NULL,
  `Q3` int(50) NOT NULL,
  `Q4` int(50) NOT NULL,
  `Total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `studentsname` varchar(40) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `Q1` varchar(20) NOT NULL,
  `Q2` varchar(30) NOT NULL,
  `Q3` varchar(20) NOT NULL,
  `Q4` varchar(20) NOT NULL,
  `Q5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`studentsname`, `rollno`, `semester`, `subject`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`) VALUES
('sainath', '27', 'SEMESTER5', 'WDL', '4', '4', '3', '4', '4'),
('abhishek', '25', 'SEMESTER5', 'Microprocessor', '2', '3', '3', '3', '1'),
('himanshu', '115', 'SEMESTER5', 'Microprocessor', '4', '3', '3', '3', '1'),
('alok', '17', 'SEMESTER4', 'Computer Graphics', '4', '3', '3', '4', '4'),
('alok', '17', 'SEMESTER4', 'Open source tech', '4', '3', '4', '3', '3'),
('alok', '17', 'SEMESTER4', 'Open source tech', '4', '3', '2', '2', '1'),
('alok', '17', 'SEMESTER4', 'Open source tech', '4', '3', '4', '3', '2'),
('sainath', '12', 'SEMESTER5', 'WDL', '4', '4', '4', '4', '3'),
('alok', '12', 'SEMESTER4', 'Analysis of algorithm', '4', '4', '4', '4', '3'),
('pankaj1', '13', 'SEMESTER2', 'Applied-mathematics II', '4', '3', '4', '3', '4'),
('pankaj1', '13', 'SEMESTER2', 'Applied-chemistry II', '4', '4', '4', '3', '1'),
('him', '115', 'SEMESTER5', 'TCS', '4', '4', '2', '3', '4'),
('pankajarp', '12', 'SEMESTER5', 'BCE', '4', '4', '3', '4', '4'),
('Bipin', '52', 'SEMESTER4', 'Analysis of algorithm', '4', '4', '4', '4', '3'),
('amit', '50', 'SEMESTER5', 'DBMS', '4', '3', '4', '4', '3'),
('john', '12', 'SEMESTER3', 'Data Structure', '4', '4', '4', '4', '4'),
('amar', '170', 'SEMESTER5', 'Microprocessor', '3', '4', '3', '2', '3'),
('sagarika123', '123', 'SEMESTER5', 'TCS', '4', '3', '4', '3', '3'),
('johnkenny', '123', 'SEMESTER5', 'TCS', '4', '3', '4', '4', '2'),
('deepak', '14', 'SEMESTER5', 'BCE', '3', '3', '3', '4', '4'),
('divyesh', '21', 'SEMESTER5', 'Microprocessor', '4', '3', '4', '4', '4'),
('divyesh', '21', 'SEMESTER5', 'BCE', '4', '4', '4', '2', '4'),
('ekta', '78', 'SEMESTER4', 'Applied-physics IV', '4', '2', '4', '4', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
