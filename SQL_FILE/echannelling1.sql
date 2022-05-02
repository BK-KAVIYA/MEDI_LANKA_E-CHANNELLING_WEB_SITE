-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2022 at 05:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echannelling1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Uname` varchar(20) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `telNo` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`NIC`),
  UNIQUE KEY `userId` (`Uname`),
  UNIQUE KEY `userId_2` (`Uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Uname`, `adminName`, `address`, `NIC`, `telNo`, `email`, `password`) VALUES
('KAVIYA', 'Baladurage Kavinda', 'Thalalla North, Kekanadura, Matara', '992670657V', 788311883, 'dilshankavinda371@gmail.com', 'Kavi@@99'),
('B_KAVINDA', 'Baladurage . Kavinda ', ' Nupe Junction . Galle Road . Matara ', '992670658v}', 788311883, 'dilshankavinda371@gmail.com', 'Kavi@@99');

-- --------------------------------------------------------

--
-- Table structure for table `channel_doctor`
--

DROP TABLE IF EXISTS `channel_doctor`;
CREATE TABLE IF NOT EXISTS `channel_doctor` (
  `Channel_id` char(5) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Tel_number` varchar(15) DEFAULT NULL,
  `Specialization` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`Channel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_feeedback`
--

DROP TABLE IF EXISTS `customer_feeedback`;
CREATE TABLE IF NOT EXISTS `customer_feeedback` (
  `C_name` varchar(25) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Massage` varchar(700) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_feeedback`
--

INSERT INTO `customer_feeedback` (`C_name`, `Email`, `Subject`, `Massage`) VALUES
('B. Kavinda', 'dilshankavinda371@gmail.com', 'System Quality', 'Sometimes one can become lost in a big company and lose sight of how what one does truly helps or impacts the end customer. If you are one of those, think of a fire brigade, a line of people passing buckets of water from one to the other from a source of water to the site of the fire. An individual in the brigade may not be able to see the end result, i.e., the water being thrown on the fire to put it out, but the contribution of the individual is indispensable to the final outcome.â€ â€“ Grant Bright, Former Project Lead IBM'),
('Ashan', 'ashan@gmail.com', 'Happy Customer', 'he world is moved not only by the mighty shoves of the heroes, but also by the aggregate of the tiny pushes of each honest worker'),
('Vimudya', 'vimudya97@gmail.cm', 'Biggest question', 'Isnâ€™t it really â€˜customer helpingâ€™ rather than customer service? And wouldnâ€™t you deliver better service if you thought of it that way?'),
('Kasun H Harshana', 'kasunhharshana@mail.com', 'Communicating Facility  ', 'Your ability to communicate is an important tool in your pursuit of your goals, whether it is with your family, your co-workers or your clients and customers.â€ â€“ Les Brown'),
('Tharaka', 'Tharaka95@gmail.com', 'Make Sure Remember that', 'It is not your customerâ€™s job to remember you, it is your obligation and responsibility to make sure they donâ€™t have the chance to forget you');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `docName` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `speciality` int(20) DEFAULT NULL,
  `NIC` varchar(12) DEFAULT NULL,
  `telNo` int(10) DEFAULT NULL,
  `hospital` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telHome` int(10) NOT NULL,
  `channelRoomNo` int(11) NOT NULL,
  `priceForChannel` int(11) NOT NULL,
  `img_url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `docName`, `address`, `speciality`, `NIC`, `telNo`, `hospital`, `email`, `telHome`, `channelRoomNo`, `priceForChannel`, `img_url`) VALUES
(1, ' A.S.K  Banagala ', ' KIRIMANDALA MW , COLOMBO 05 , Colombo ', 1, ' 578951234v ', 716589456, 'Colombo General Hospital ', ' balamgala23@gmail.com ', 112265789, 18, 2200, 'IMG-626a3afa846c00.65247163.png'),
(2, ' ASHAN  ABEYEWARDENE ', ' NORRIS CANAL ROAD , COLOMBO 10 , Colombo ', 2, ' 624587946v ', 716477051, 'Karapitiya', ' ashanabe@gmail.com ', 447896541, 20, 1900, 'IMG-626a3b7ba45394.72116599.png'),
(4, ' DAMMIKE  SILVA ', ' No 82/2 , Galle road , Moratuwa ', 4, ' 526478525v ', 788311883, 'Kalubowila Teaching Hospital', ' silva23@hotmail.com ', 114578963, 15, 1800, 'IMG-626a3c3ac11ea4.12255714.png'),
(5, ' C.A.B  MAKULOLUWA ', ' Boroluketiya , Kamburupitiya , Matara ', 5, ' 678954163v ', 756348887, 'Adapana Genaral Hospital', ' cbamadukuluwa@gmail.com ', 412264366, 18, 2000, 'IMG-626a3cdeb411f3.90825797.png'),
(6, ' ISHAN DE  ZOYSA ', ' No 69/3 , Kananke Road , Galle ', 6, ' 558974169v ', 777123456, 'Mahamodara Hospital', ' ishandesoysa@mail.com ', 478956123, 15, 2300, 'IMG-626a3da37b10f4.53902221.png'),
(7, ' NADEENA  JAYASURIYA ', ' Thalpawila , Thissamaharama Road , Hambantota ', 7, ' 697845623v ', 789645123, 'HEMAS HOSPITAL', ' jayasuriya12@outlook.com ', 497856456, 20, 1800, 'IMG-626a3e4d04c248.18317135.png'),
(8, ' KANISHKA  DISSANAYAKE ', ' New garden place , kekanadura , Matara ', 8, ' 701248952v ', 775424061, 'KARAPITIYA TEACHING HOSPITAL', ' disanayaka@gmail.com ', 458796215, 20, 1999, 'IMG-626a3ed42192b3.83782202.png'),
(9, ' D.J  ANTHONY ', ' No 82/2 , Godagama , Matara ', 9, ' 657894152v ', 714589632, 'ASIRI CENTRAL HOSPITAL', ' djanthony@gmail.com ', 412265963, 22, 2000, 'IMG-626a3f7addcdd2.08799306.png'),
(10, ' D.J  ANTHONY ', ' No 82/2 , Godagama , Matara ', 10, ' 657894152v ', 714589632, 'ASIRI CENTRAL HOSPITAL', ' djanthony@gmail.com ', 412265963, 22, 2000, 'IMG-626a41f36b78b8.09873205.png'),
(11, ' Baladurage  Kavinda ', ' Dadalla gewaththa , , Thalalla north, , Kekanadura ', 2, ' 992670657v ', 788311883, 'Matara Genaral Hospital', ' dilshankavinda371@gmail.com ', 412264366, 39, 2500, 'IMG-626a424e5534b7.27785399.png'),
(12, ' Baladurage  Kavinda ', ' Dadalla gewaththa, Thalalla north, Kekanadura ', 3, ' 992670657v ', 788311883, 'Matara Genaral Hospital', ' dilshankavinda371@gmail.com ', 412264366, 39, 2500, 'IMG-626a428453dc36.78861194.png');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_shedule`
--

DROP TABLE IF EXISTS `doctor_shedule`;
CREATE TABLE IF NOT EXISTS `doctor_shedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctorId` varchar(100) DEFAULT NULL,
  `sheduleType` text,
  `day` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_shedule`
--

INSERT INTO `doctor_shedule` (`id`, `doctorId`, `sheduleType`, `day`) VALUES
(17, '5', 'Monthly', '25'),
(16, '4', 'Monthly', '18'),
(14, '3', 'Daily', ''),
(13, '1', 'Monthly', '24'),
(12, '2', 'Daily', ''),
(11, '3', 'Monthly', '29'),
(10, '1', 'Daily', ''),
(9, '2', 'Monthly', '29'),
(5, '2', 'Monthly', '24'),
(3, '3', 'Monthly', '19'),
(1, '2', 'Monthly', '18'),
(18, '6', 'Daily', ''),
(19, '7', 'Monthly', '10'),
(20, '8', 'Monthly', '18'),
(21, '9', 'Monthly', '18'),
(22, '3', 'Daily', ''),
(23, '1', 'Monthly', '11'),
(24, '2', 'Monthly', '09'),
(25, '3', 'Monthly', '29'),
(26, '4', 'Daily', ''),
(27, '5', 'Monthly', '14'),
(28, '6', 'Monthly', '17'),
(29, '1', 'Monthly', '02'),
(30, '2', 'Monthly', '08'),
(31, '3', 'Daily', ''),
(32, '4', 'Monthly', '22'),
(33, '4', 'Monthly', '13'),
(34, '3', 'Monthly', '10'),
(35, '5', 'Monthly', '14'),
(36, '6', 'Daily', ''),
(37, '3', 'Monthly', '10'),
(38, '8', 'Monthly', '15'),
(39, '9', 'Daily', '20'),
(40, '5', 'Daily', ''),
(41, '8', 'Monthly', '16');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL,
  `Password` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `Uname`, `Email`, `Address`, `Telephone`, `Password`) VALUES
(1, 'kavinda Baladurage', 'dilshan@gmail.com', 'Dadalla gewaththa , Thalalla North, Kekanadura.', 788311883, '$2y$10$Mrgy2.yrUgAlUwsMovSB8utX4x12FHdz0SInsPLLb14jBPykN2ea2'),
(2, 'saman kumara', 'saman123@gmail.com', 'Dadalla gewaththa ,', 788311883, '$2y$10$.c0PJyoOhOUdL9rGN5iA0eFwuWIlOYIkpPvjjGXAjiMWBvEMvUKVW'),
(3, ' Baladurage . Kavinda ', ' Kavi@mail.com ', ' Dadalla gewaththa , . Thalalla north, . matara ', 788311883, '$2y$10$evPmcrVFZioKhqnfY.Hz.erhgxjef4XXdEP7iBjbO8g.YcWhYM8dW'),
(4, ' Baladurage . Kavinda ', ' Kavi@mail.com ', ' Dadalla gewaththa ,  Thalalla north,  matara ', 788311883, '$2y$10$VssHp3k0c9Rwup6DaIoLYeZ8oyECDiJhL5aNJ8vr3sdSyCFPMZ.Ti'),
(5, ' Baladurage . BKavinda ', ' dilshan12@gmail.com ', ' Dadalla gewaththa ,  Thalalla north,  Matara ', 788311883, '$2y$10$LeO5TLpjvMS42NvOOqpTa.G64v.DpHXOl83wUKFx.rx/3RG.CbmVm'),
(6, ' Baladurage . Kavinda ', ' Kavi@mail.com ', ' Dadalla gewaththa ,  Thalalla north,  matara ', 788311883, '$2y$10$RTsyuUAjMKsYXPcYUUF8Ru69u1cxCP4KGaNOjhaUsfhrSNlY7e4/W'),
(7, 'saman kumara', 'saman@gmail.com', 'New Street, Kamburugamuwa, Matara.', 778956123, '$2y$10$lsRSVQe.yKF7HHk3p0qU0OPhQh1ngglDxNZx3xUVSf52faty94Xo2'),
(8, 'saman kumara', 'saman@gmail.com', 'New Street, Kamburugamuwa, Matara.', 778956123, '$2y$10$PqYcHKrbBR9jHdXBPp68.u.d.LBUlhO5ln8oO5zMcM/7DECgW0J0m');

-- --------------------------------------------------------

--
-- Table structure for table `payedpatients`
--

DROP TABLE IF EXISTS `payedpatients`;
CREATE TABLE IF NOT EXISTS `payedpatients` (
  `id` int(11) DEFAULT NULL,
  `refNo` int(100) NOT NULL,
  `patientName` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `dateBooked` date DEFAULT NULL,
  `doctorName` varchar(50) DEFAULT NULL,
  `Uid` int(10) NOT NULL,
  PRIMARY KEY (`refNo`),
  UNIQUE KEY `refNo` (`refNo`),
  UNIQUE KEY `refNo_2` (`refNo`),
  UNIQUE KEY `refNo_3` (`refNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payedpatients`
--

INSERT INTO `payedpatients` (`id`, `refNo`, `patientName`, `phone`, `nic`, `email`, `amount`, `dateBooked`, `doctorName`, `Uid`) VALUES
(81, 9, 'Gihan Kavinda                  ', 775424061, '678514562v  ', 'gihankavinda3710@gmail.com                    ', 2669, '2022-01-06', 'Dr. KANISHKA DISSANAYAKE', 1),
(82, 10, 'Ruwan Wedisa                    ', 710193381, '933183297v  ', 'ruwan.wedisa0150@gmail.com                    ', 2669, '2018-08-03', 'Sahan Mapalage                    ', 2),
(83, 11, 'pawara pramuditha               ', 710193381, '984514521v  ', 'pawara000@gmail.com                    ', 2669, '2022-03-06', 'Dr.NADEENA JAYASURIYA              ', 5),
(20, 14, 'Dilsha Sewwandi                   ', 710193381, '933183297v  ', 'dilshasew150@gmail.com                    ', 2669, '2022-04-16', 'Dr.NADEENA JAYASURIYA', 2),
(19, 15, 'Kamal Gunasekara                   ', 779089191, '642383297v  ', 'kamal0150@gmail.com                    ', 2669, '2022-03-17', 'Dr. Dilshan Kavinda                ', 2),
(16, 16, 'Ruwan Wedisa                    ', 719001913, '933183297v  ', 'ruwan.wedisa0150@gmail.com                    ', 2669, '2021-08-07', 'Sahan Mapalage                    ', 5),
(22, 19, 'B. Kavinda                    ', 788311883, '992670657v  ', 'dilshankavinda371@gmail.com                    ', 3129, '2022-04-29', 'Dr. A.S.K.Banagala                    ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

DROP TABLE IF EXISTS `specialty`;
CREATE TABLE IF NOT EXISTS `specialty` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `specialty` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`id`, `specialty`) VALUES
(1, 'PHYSIOTHERAPY'),
(2, 'EYE SURGEON'),
(3, 'PEDIATRICIAN PHYSICIAN'),
(4, 'CLINICAL GENETICIST & GENETIC COUNSELOR'),
(5, 'PEDIATRIC CARDIOLOGIST'),
(6, 'NEONATOLOGIST '),
(7, 'RESTORATIVE DENTISTRY'),
(8, 'DERMATOLOGIST'),
(9, 'MICROBIOLOGIST'),
(10, 'OTHER');

-- --------------------------------------------------------

--
-- Table structure for table `time_shedule`
--

DROP TABLE IF EXISTS `time_shedule`;
CREATE TABLE IF NOT EXISTS `time_shedule` (
  `id` int(11) NOT NULL,
  `TNo` int(10) NOT NULL AUTO_INCREMENT,
  `Time` time NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  `enable` char(1) NOT NULL,
  `bookedDate` int(11) DEFAULT NULL,
  PRIMARY KEY (`TNo`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_shedule`
--

INSERT INTO `time_shedule` (`id`, `TNo`, `Time`, `status`, `enable`, `bookedDate`) VALUES
(3, 5, '09:00:00', '1', '1', 29),
(3, 4, '06:00:00', '1', '1', 29),
(2, 3, '20:00:00', '1', '0', 27),
(2, 2, '19:00:00', '1', '1', 18),
(2, 1, '18:00:00', '1', '1', 7),
(4, 6, '18:00:00', '1', '0', 7),
(4, 7, '19:00:00', '1', '0', 10),
(5, 8, '20:00:00', '1', '0', 4),
(6, 9, '08:00:00', '1', '0', 3),
(7, 10, '09:00:00', '1', '0', 15);

-- --------------------------------------------------------

--
-- Table structure for table `top_doctor_time_table`
--

DROP TABLE IF EXISTS `top_doctor_time_table`;
CREATE TABLE IF NOT EXISTS `top_doctor_time_table` (
  `Doctor_id` int(11) NOT NULL,
  `Doctor_name` varchar(30) DEFAULT NULL,
  `Date_time` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Doctor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_doctor_time_table`
--

INSERT INTO `top_doctor_time_table` (`Doctor_id`, `Doctor_name`, `Date_time`) VALUES
(1, 'Dr R.W. Hemantha', 'Monday 4.00 pm - 8.00 pm'),
(2, 'Dr B.A.S.P. Somaweera', 'Wednesday 4.00 pm - 8.00 pm'),
(3, 'Dr M. Gunawardena', 'Friday 4.00 pm - 8.00 pm'),
(4, 'Dr B.G.N. Rathnasena', 'Monday 4.00 pm - 8.00 pm'),
(5, 'Prof Ishan De Zoysa', 'Saturday 2.00 pm - 6.00 pm'),
(6, 'Dr M.B.A.P. De Silva', 'Thursday 8.00 am - 2.00 pm'),
(7, 'Dr R.B.V. Rathnamala', 'Monday 8.00 am - 12.00 pm'),
(8, 'Dr G.C.A.U. Pitabedige', 'Tuesday 8.00 am - 12.00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_paypal`
--

DROP TABLE IF EXISTS `transaction_paypal`;
CREATE TABLE IF NOT EXISTS `transaction_paypal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `paymentid` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `complete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `paymentid` (`paymentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userCategory` int(3) NOT NULL,
  PRIMARY KEY (`userName`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `userName`, `password`, `userCategory`) VALUES
(81, 'oshan', 'b1ec116382610363540cd956821a9d6f', 4),
(1, 'ruwan', 'a619597f6455b6ff5fd08598677880d9', 1),
(84, 'kasun', 'b1ec116382610363540cd956821a9d6f', 4),
(2, 'sahan', '6e1976430566578b792771faea058fc9', 2),
(3, 'thilini', 'c3fb77d9363f2d15be8018eea9a292df', 3),
(85, 'hasanka', 'c48d4378431497c8c5345efaa44a0754', 4),
(86, 'thulki1', 'efae5dc5e0a0ecf00f826d9e776d8967', 4),
(87, 'Kavinda', 'c4de04ee85342bf6ed01bbeead520ddd', 4),
(88, 'kaviya', 'd787596779854ee60f30676498013555', 4),
(89, 'B_KAVINDA ', 'Kavi@@99', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
