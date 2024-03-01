-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 08:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamaat`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `sid` int(11) NOT NULL,
  `committ_id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`sid`, `committ_id`, `title`, `description`, `filename`) VALUES
(1, 1, 'Welcome to Patni jammat ', 'Surat city came in existence in 1530 A.D. Surat was a port city and was also known as Babul Makkah. Our fore fathers who were mostly business men and some had overseas business also gradually started migrating to Surat from Patan. The exact date of forming an organisation as Jamaat is unknown. But it is also a fact that a community’s one of the major requirement is a Qabrastan where they can bury their dead relatives so a part of land of our Maqbara Qabrastan was donated by Janab Abdur Rahman bin Muhammed bin Abdur Rahman in 1751 A.D. This shows that some sort of Jamaat organisation must have come in force before this date. A hand written diary of Janab Gulam Mohiyuddin bin Gulam Nabi Mombasawala from 1880 A.D. onwards shows many Jamaat Activities at that period of time.Such as: Jamaat spent Rs.333 and 9 ana on 3 day picnic on 15-7-1881. In 1876 a shawl (cost Rs.30) was presented to Jamaat Ameer (President). Jamaat membership fee of Rs.286 and 12 ana collected (2 ana per year per person) from 173 families in 1876. This shows that activities of our Jamaat were highly organised in those early days. At present Jamaat consists of more than 1500 families living in Surat, Ahmedabad, Bharuch, Ankleshwar, Bardoli, Vyara, Songadh, Valsad, Mumbai, Pune and also in foreign countries like, Canada, America, England, Portugal, Saudi Arabia, UAE and Pakistan.It is much more organised Alhamdu Lillah. .', 'hallabout.jpg'),
(2, 2, 'Welcome to Patni Co-operative Credit Society oh', 'Surat city came in existence in 1530 A.D. Surat was a port city and was also known as Babul Makkah.\r\nOur fore fathers who were mostly business men and some had overseas business also gradually started migrating to Surat from Patan.\r\n\r\nThe exact date of forming an organisation as Jamaat is unknown. But it is also a fact that a community’s one of the major requirement is a Qabrastan where they can bury their dead relatives so a part of land of our Maqbara Qabrastan was donated by Janab Abdur Rahman bin Muhammed bin Abdur Rahman in 1751 A.D. This shows that some sort of Jamaat organisation must have come in force before this date.\r\nA hand written diary of Janab Gulam Mohiyuddin bin Gulam Nabi Mombasawala from 1880 A.D. onwards shows many Jamaat Activities at that period of time.Such as:\r\nJamaat spent Rs.333 and 9 ana on 3 day picnic on 15-7-1881.\r\nIn 1876 a shawl (cost Rs.30) was presented to Jamaat Ameer (President).\r\nJamaat membership fee of Rs.286 and 12 ana collected (2 ana per year per person) from 173 families in 1876.\r\nThis shows that activities of our Jamaat were highly organised in those early days.\r\nAt present Jamaat consists of more than 1500 families living in Surat, Ahmedabad, Bharuch, Ankleshwar, Bardoli, Vyara, Songadh, Valsad, Mumbai, Pune and also in foreign countries like, Canada, America, England, Portugal, Saudi Arabia, UAE and Pakistan.It is much more organised Alhamdu Lillah. .', 'hallabout.jpg'),
(3, 3, 'Welcome Patni Education Trust t', 'Our fore fathers who were mostly business men and some had overseas business also gradually started migrating to Surat from Patan.\r\nThe exact date of forming an organisation as Jamaat is unknown. But it is also a fact that a community’s one of the major requirement is a Qabrastan where they can bury their dead relatives so a part of land of our Maqbara Qabrastan was donated by Janab Abdur Rahman bin Muhammed bin Abdur Rahman in 1751 A.D. This shows that some sort of Jamaat organisation must have come in force before this date.\r\nA hand written diary of Janab Gulam Mohiyuddin bin Gulam Nabi Mombasawala from 1880 A.D. onwards shows many Jamaat Activities at that period of time.Such as:\r\nJamaat spent Rs.333 and 9 ana on 3 day picnic on 15-7-1881.\r\nIn 1876 a shawl (cost Rs.30) was presented to Jamaat Ameer (President).\r\nJamaat membership fee of Rs.286 and 12 ana collected (2 ana per year per person) from 173 families in 1876.\r\nThis shows that activities of our Jamaat were highly organised in those early days.\r\nAt present Jamaat consists of more than 1500 families living in Surat, Ahmedabad, Bharuch, Ankleshwar, Bardoli, Vyara, Songadh, Valsad, Mumbai, Pune and also in foreign countries like, Canada, America, England, Portugal, Saudi Arabia, UAE and Pakistan.It is ', 'Pic-1.JPG'),
(4, 4, 'welcome to Patni Housing Societyscs', 'Our fore fathers who were mostly business men and some had overseas business also gradually started migrating to Surat from Patan. The exact date of forming an organisation as Jamaat is unknown. But it is also a fact that a community’s one of the major requirement is a Qabrastan where they can bury their dead relatives so a part of land of our Maqbara Qabrastan was donated by Janab Abdur Rahman bin Muhammed bin Abdur Rahman in 1751 A.D. This shows that some sort of Jamaat organisation must have come in force before this date. A hand written diary of Janab Gulam Mohiyuddin bin Gulam Nabi Mombasawala from 1880 A.D. onwards shows many Jamaat Activities at that period of time.Such as: Jamaat spent Rs.333 and 9 ana on 3 day picnic on 15-7-1881. In 1876 a shawl (cost Rs.30) was presented to Jamaat Ameer (President). Jamaat membership fee of Rs.286 and 12 ana collected (2 ana per year per person) from 173 families in 1876. This shows that activities of our Jamaat were highly organised in those early days. At present Jamaat consists of more than 1500 families living in Surat, Ahmedabad, Bharuch, Ankleshwar, Bardoli, Vyara, Songadh, Valsad, Mumbai, Pune and also in foreign countries like, Canada, America, England, Portugal, Saudi Arabia, UAE and Pakistan.It is\r\n', 'Pic-2.JPG'),
(5, 5, 'welcome to Qamar Free Library s', 'dfghjkjlasdrftyuixdcwrtytuyi', 'Pic-4.JPG'),
(6, 6, 'welcome to patni sportt', 'sdfg', 'Pic-2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `filename`) VALUES
(17, 'img1.jpg'),
(18, 'img2.jpg'),
(19, 'img3.jpg'),
(20, 'img4.jpg'),
(21, 'img5.jpg'),
(22, 'img6.jpg'),
(23, 'img7.jpg'),
(24, 'img8.jpg'),
(25, 'banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `birthregi`
--

CREATE TABLE `birthregi` (
  `bir_id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `baddress` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `ppan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthregi`
--

INSERT INTO `birthregi` (`bir_id`, `cname`, `fname`, `mname`, `gname`, `surname`, `address`, `baddress`, `bdate`, `ppan`) VALUES
(1, 'ssdsadssa', 'sssdsads', 'aaasdsads', 'fssddadsdsa', 'dfddsadsa', 'fdfdsaadsa', 'sfddsdsaads', '2022-02-18', '12345678902321');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `d_id` int(11) NOT NULL,
  `designation_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`d_id`, `designation_name`) VALUES
(1, 'President'),
(2, 'Vice President'),
(3, 'Secretary '),
(5, 'Joint secretary \r\n'),
(6, 'Treasurer '),
(7, 'Member'),
(8, 'Supervision Committee');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `committe_id` int(11) NOT NULL,
  `committee_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`committe_id`, `committee_name`) VALUES
(1, 'Patni Sunnat Jamaat'),
(2, 'Patni Co-operative Credit Society '),
(3, 'Patni Education Trust'),
(4, 'Patni Housing Society'),
(5, 'Qamar Free Library\r\n'),
(6, 'Patni Sports');

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `cid` int(11) NOT NULL,
  `committe_id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`cid`, `committe_id`, `cname`, `description`, `filename`) VALUES
(2, 1, 'The Patni Co-operative Credit Society Ltd ok', 'Gives Qarz e Hasana (intrest free loans) to members of Jamaat..\r\n\r\n', 'testimonial-4.jpg'),
(3, 0, 'Patni Education Trust', 'Helping Jamaat students by giving scholarships, books and uniforms & motivates them..', 'testimonial-1.jpg'),
(6, 0, 'Patni Housing Society', 'Developed and now manages Patni Colony.\r\n\r\n', 'team-2.jpg'),
(8, 0, 'Patni Sports', 'Managing sports activities of Jamaat Youth.', 'testimonial-5.jpg'),
(9, 0, 'The Qamar Free Library', 'Having vast collection of all kinds of books (Religious, historical, political, literary, biography, poetry, novels etc.) in Urdu, Gujarati, English and Hindi languages.', 'testimonial-4.jpg'),
(13, 0, 'Patni Sunnat Jamaat', 'Mother Body to manage Jamaat as a whole.\r\n\r\n', 'testimonial-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `committ_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sid`, `description`, `address`, `phone_number`, `email`, `committ_id`) VALUES
(1, 'hgfdfugihmhoicdeew', 'A108 Adam Street, NY 535022 ndiuaa', '9553513078', 'inform@example.com', 1),
(2, 'dsgsagdsfg jfaiuiudfervev efefe', 'surat palsana', '1234567890', 'salim@gmail.com', 2),
(3, 'fecyjuicfewrcegggggggggggggggggg', 'gchykiloexxwweefx', '1123456576823324', 'sassd@gm.com', 3),
(4, 'xwetryuyimnbvcdxwfsa', 'swserfty567uijkmnb', '21233342565777777777777777777', 'fdgf@fref.in', 4),
(5, 'zsaadfgghsadfdddfcwecdac', 'asdrgftyasesrtd', '123456567', 'asd@d.in', 5),
(6, 'asdfgtydscvfgssssssssss', 'esqwrtdf', '21345434567', 'saa@aa.in', 5);

-- --------------------------------------------------------

--
-- Table structure for table `deathregi`
--

CREATE TABLE `deathregi` (
  `de_id` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `age` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `ddate` date NOT NULL,
  `bplace` varchar(255) NOT NULL,
  `ppan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deathregi`
--

INSERT INTO `deathregi` (`de_id`, `dname`, `fname`, `gname`, `surname`, `age`, `address`, `daddress`, `ddate`, `bplace`, `ppan`) VALUES
(1, 'efrferrc', 'dsadfec', 'dsafe', 'sdaxe', 'dsaefx', 'dsafex', 'asdxfe', '2023-08-18', 'saddsex', '4444444555555');

-- --------------------------------------------------------

--
-- Table structure for table `even`
--

CREATE TABLE `even` (
  `eid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sponser` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guest_name` varchar(255) NOT NULL,
  `committee_id` int(11) NOT NULL,
  `filename` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `even`
--

INSERT INTO `even` (`eid`, `title`, `sponser`, `address`, `date`, `time`, `guest_name`, `committee_id`, `filename`) VALUES
(1, 'Google AI Luching ok ok', 'Google', 'Surat ok', '2023-05-23', '17:24:21', 'Elon Musk ok OK', 1, 'testimonial-2.jpg'),
(12, 'sdafw', 'ewf', 'fwe', '2023-06-11', '10:56:00', 'ewff', 4, 'team-1.jpg'),
(20, 'dsfadss', 'fsda', 'fsaf', '2023-06-04', '11:39:00', 'afsfasf', 5, 'team-1.jpg'),
(22, 'csdvecw3ecde2', 'vds', 'dfs', '2023-06-15', '12:07:00', 'fds', 6, 'team-2.jpg'),
(24, 'sdwedwss', 'dewfes', 'ewfwfs', '2023-06-11', '13:08:00', 'weffwfw', 2, 'team-3.jpg'),
(30, 'mark', 'fb', 'usa', '2023-08-14', '12:39:00', 'stive', 1, 'team-1.jpg'),
(32, 'asdfss', 'dsaads', 'dafs', '2023-08-20', '23:57:00', 'dsfss', 3, 'naeempatwa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `committee_id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `committee_id`, `filename`) VALUES
(17, 1, 'Pic-5.jpg'),
(18, 1, 'Pic-6.jpg'),
(19, 1, 'Pic-7.jpg'),
(67, 2, 'Pic-1.jpg'),
(68, 2, 'Pic-2.jpg'),
(69, 2, 'Pic-3.jpg'),
(70, 2, 'Pic-4.jpg'),
(71, 3, 'Pic-10.jpg'),
(72, 3, 'Pic-9.jpg'),
(73, 3, 'Pic-8.jpg'),
(74, 4, 'Pic-7.jpg'),
(75, 4, 'Pic-6.jpg'),
(76, 4, 'Pic-5.jpg'),
(78, 5, 'Pic-4.jpg'),
(79, 5, 'Pic-5.jpg'),
(83, 6, 'Pic-3.jpg'),
(84, 6, 'Pic-4.jpg'),
(85, 6, 'Pic-5.jpg'),
(86, 1, 'Pic-10.jpg'),
(90, 2, 'Pic-11.jpg'),
(108, 0, 'Pic-9.jpg'),
(109, 2, 'DreamShaper_v7_create_realistic_face_images_3D_cha');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `committee_id` int(100) NOT NULL,
  `year` varchar(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `filename` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `committee_id`, `year`, `name`, `contact`, `designation`, `filename`) VALUES
(1, 1, '2023', 'Dr. Umar Hakeem MMM', '2147483647', '1', 'alauddinkagzi.jpg'),
(2, 1, '2022', 'M.Hanif Dalchawal M	', '1234567890', '2', 'hanifdalchawal.jpg'),
(3, 1, '2023', 'M.Naeem Patwa M	', '1234567890', '3', 'naeempatwa.jpg'),
(4, 1, '2022', 'M.Irfan Mombsawala M	', '1234567890', '3', 'irfanmombasawala.jpg'),
(132, 2, '2023', 'Janaab Hakeem M.Qasimbhai  a', '123467823', '2', 'Janaab Hakeem M.Qasimbhai  A.H..jpg'),
(133, 2, '2023', 'Janaab Kadodia Dr. Md.Umar', '1234567', '2', 'Janaab Kadodia Dr. Md.Umar.jpg'),
(134, 2, '2023', 'Janaab Mombasawala Masood Ahmed M.A', '1234567889', '5', 'Janaab Mombasawala Masood Ahmed M.A.jpg'),
(135, 3, '2023', 'zuber furniturewala aas', '2147483647', '1', 'zuberfurniturewala.jpg'),
(136, 3, '2023', 'Naeem patwa', '213456789', '2', 'naeempatwa.jpg'),
(137, 3, '2023', 'kadodia M.Bilal', '21345679', '3', 'kadodia M.Bilal.jpg'),
(138, 4, '2023', 'Janaab Saaqib Bhai Maniar ss', '2134567690', '1', 'JanaabSaaqibbhai Maniar.jpg'),
(139, 4, '2023', 'Janaab Yqubbhai Jarullah ss', '123245678', '2', 'JanaabYqubbhaiJarullah.jpg'),
(140, 4, '2023', 'Janaab Kagzi Zahid Husain A. ss', '1234567890', '3', 'Janaab Kagzi Zahid Husain A..jpg'),
(144, 6, '2023', 'irfan mombasawala ok', '1123456787', '1', 'irfanmombasawala.jpg'),
(145, 6, '2023', 'kadodia M.Bilal', '1234567890', '2', 'kadodia M.Bilal.jpg'),
(146, 6, '2023', 'hanif dalchawal', '1234567768', '3', 'hanifdalchawal.jpg'),
(147, 2, '2022', 'Janaab Kagzi Zahid Husain A.', '123456789', '7', 'Janaab Kagzi Zahid Husain A..jpg'),
(149, 4, '2022', 'Alauddin Kagzi ss', '1123456789', '5', 'alauddinkagzi.jpg'),
(151, 6, '2022', 'kadodia M.Bilal', '1234567', '5', 'kadodia M.Bilal.jpg'),
(176, 2, '2023', 'kadodia M.Bilal', '1234567890', '6', 'kadodia M.Bilal.jpg'),
(180, 4, '2023', 'naeem patwa', '2147483647', '6', 'naeempatwa.jpg'),
(184, 5, '2023', 'Janaab Saaqibbhai Maniar', '1111111111', '1', 'JanaabSaaqibbhai Maniar.jpg'),
(185, 5, '2023', 'Janaab Usama Dalchawal', '2147483647', '2', 'JanaabUsamaDalchawal.jpg'),
(186, 5, '2023', 'Janaab Yqubbhai Jarullah', '2147483647', '3', 'JanaabYqubbhaiJarullah.jpg'),
(187, 5, '2023', 'naeem patwa', '2147483647', '5', 'naeempatwa.jpg'),
(190, 6, '2023', 'zuber furniturewala', '2147483647', '6', 'zuberfurniturewala.jpg'),
(191, 1, '2023', 'zuber furniturewala', '1111111111', '5', 'zuberfurniturewala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qamar`
--

CREATE TABLE `qamar` (
  `q_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `ppan` varchar(255) NOT NULL,
  `member_ppan` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qamar`
--

INSERT INTO `qamar` (`q_id`, `fullname`, `address`, `number`, `ppan`, `member_ppan`, `filename`) VALUES
(1, 'daasds', 'fdssssssfff', '1111555555', '2333335566', '211111117788', 'team-3.jpg'),
(3, 'sfsdasd', 'fds', '1222222222', 'dfdsdf', 'fsds', 'testimonial-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `pid` int(11) NOT NULL,
  `committee_id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`pid`, `committee_id`, `year`, `filename`) VALUES
(17, 1, '2022', 'English-All In One.pdf'),
(21, 1, '2023', 'Death Certficate Form.pdf'),
(22, 1, '2021', 'Birth Registration form.pdf'),
(23, 3, '2020', 'Monthly Food Form.pdf'),
(24, 2, '2023', 'download.pdf'),
(30, 4, '2023', 'student_printt.pdf'),
(31, 5, '2023', 'qamar_print.pdf'),
(32, 6, '2023', 'student_print.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `standard` enum('10','12','higher') NOT NULL,
  `higher` varchar(255) NOT NULL,
  `tmark` varchar(255) NOT NULL,
  `omark` varchar(255) NOT NULL,
  `ppan` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `sname`, `fname`, `surname`, `email`, `number`, `fathername`, `address`, `schoolname`, `standard`, `higher`, `tmark`, `omark`, `ppan`, `filename`) VALUES
(1, 'sxwwsayucavswfee', 'efecsdvafewf', 'adssadsvgzdafwe', 'sas@d.invdfewe', '1111111111', 'dwqdwdwqsd', 'wqddwqds', 'dwqdds', '10', 'dwqdds', '123344', '45644', '222222222222344', 'testimonial-1.jpg'),
(4, 'fadsfdok', 'dsafdok', 'dsafdok', 'wa@fd.infdok', '2222222222', 'afecwfcfdok', 'xffxfcffddddfok', 'vgfvgfgtrredfok', '12', 'dsfcfdok', '1233345', '2233345', '3333333333333445', 'testimonial-2.jpg'),
(5, 'sass', 'sas', 'as', 'asa@ds.in', '3333333333', 'dsfds', 'fdsfdfdsf', 'fdsfdsfd', '10', 'fdsf', 'dsff', 'fdsf', 'dffdsfds', 'testimonial-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$eUOjC76NemjTUy9UQYqwsO1M8fwMBVkE4SS7LkRdaBJiYUMGTgYK.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `birthregi`
--
ALTER TABLE `birthregi`
  ADD PRIMARY KEY (`bir_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`committe_id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `deathregi`
--
ALTER TABLE `deathregi`
  ADD PRIMARY KEY (`de_id`);

--
-- Indexes for table `even`
--
ALTER TABLE `even`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `qamar`
--
ALTER TABLE `qamar`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `birthregi`
--
ALTER TABLE `birthregi`
  MODIFY `bir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `committe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deathregi`
--
ALTER TABLE `deathregi`
  MODIFY `de_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `even`
--
ALTER TABLE `even`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `qamar`
--
ALTER TABLE `qamar`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
