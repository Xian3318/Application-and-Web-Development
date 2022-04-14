-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 06:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zxdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(20) NOT NULL,
  `ideaClosureDate` date DEFAULT NULL,
  `departmentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `ideaClosureDate`, `departmentID`) VALUES
(1, 'Solution', NULL, 1),
(2, 'Problem', NULL, 1),
(3, 'Feedback', NULL, 1),
(4, 'Solution', NULL, 2),
(5, 'Problem', NULL, 2),
(6, 'Feedback', NULL, 2),
(7, 'Solution', NULL, 3),
(8, 'Problem', NULL, 3),
(9, 'Feedback', NULL, 3),
(10, 'Solution', NULL, 4),
(11, 'Problem', NULL, 4),
(12, 'Feedback', NULL, 4),
(13, 'Solution', NULL, 5),
(14, 'Problem', NULL, 5),
(15, 'Feedback', NULL, 5),
(16, 'Solution', NULL, 6),
(17, 'Problem', NULL, 6),
(18, 'Feedback', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `commentText` text NOT NULL,
  `commentDate` date NOT NULL,
  `commentTime` time NOT NULL,
  `commentAnonymous` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `commentText`, `commentDate`, `commentTime`, `commentAnonymous`) VALUES
(1, 'I agreed to held this activity', '2022-03-30', '01:02:15', ''),
(2, 'me too! Sound like interesting!', '2022-03-30', '01:05:25', 'Anonymous'),
(3, 'I am so excited to this event', '2022-03-30', '01:06:40', ''),
(4, 'hurray!!', '2022-03-30', '01:07:48', ''),
(5, 'hurray!!', '2022-03-30', '01:09:31', ''),
(6, 'mehh', '2022-03-30', '01:09:41', ''),
(7, 'yhhhhhhhhhhhhhhh', '2022-03-31', '11:40:27', 'Anonymous'),
(8, 'Sound Great!', '2022-03-31', '11:49:27', ''),
(9, 'My kids will loved it', '2022-03-31', '11:59:26', ''),
(10, 'I know right', '2022-03-31', '12:01:24', 'Anonymous'),
(11, 's', '2022-04-05', '12:01:42', ''),
(12, 'testing', '2022-04-05', '12:12:23', ''),
(13, 'Testing', '2022-04-05', '12:12:53', 'Anonymous'),
(14, 'Testing', '2022-04-05', '12:13:04', 'Anonymous'),
(15, 'hello', '2022-04-05', '14:12:00', ''),
(16, 'hello', '2022-04-05', '14:12:12', ''),
(17, 'hello', '2022-04-05', '14:12:27', 'Anonymous'),
(18, 'hello', '2022-04-05', '14:12:33', 'Anonymous'),
(19, 'hello', '2022-04-05', '14:26:29', 'Anonymous'),
(20, 'aa', '2022-04-06', '00:03:02', ''),
(21, 'aa', '2022-04-06', '11:07:46', ''),
(22, 'gogo', '2022-04-09', '17:01:03', ''),
(23, 'dddddd', '2022-04-12', '18:20:17', ''),
(24, 'qqqqqqqqqqqqq', '2022-04-12', '18:20:34', ''),
(25, 'cccccccccccc', '2022-04-12', '18:20:43', ''),
(26, 'I face the issue also', '2022-04-13', '23:31:19', 'Anonymous'),
(27, 'Having the issue too......', '2022-04-13', '23:31:43', ''),
(28, 'This is a good idea', '2022-04-13', '23:32:06', 'Anonymous'),
(29, 'Agree with that....We need more professional talent', '2022-04-13', '23:32:39', ''),
(30, 'I think not nessasary', '2022-04-13', '23:35:34', ''),
(31, 'I think hiring the more college student for internships will be better', '2022-04-13', '23:36:28', ''),
(32, 'I dont think so', '2022-04-13', '23:37:47', ''),
(33, 'Use the lastest version of database', '2022-04-13', '23:39:12', ''),
(34, 'Facing same issue email not able to send out', '2022-04-13', '23:40:04', ''),
(35, 'What do you mean??', '2022-04-13', '23:40:49', ''),
(36, 'Agree with this', '2022-04-13', '23:41:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentID` int(11) NOT NULL,
  `departmentName` varchar(50) NOT NULL,
  `departmentImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentID`, `departmentName`, `departmentImage`) VALUES
(1, 'Biomedical Engineering Department', 'images/2022.jpg'),
(2, 'IT department', 'images/2022.jpg'),
(3, 'Dance ', 'images/2022.jpg'),
(4, 'Film', 'images/2022.jpg'),
(5, 'History Department', 'images/2022.jpg'),
(6, 'Italian Department', 'images/2022.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `ideaID` int(11) NOT NULL,
  `ideaTitle` varchar(50) NOT NULL,
  `ideaText` text NOT NULL,
  `commentClosureDate` date DEFAULT NULL,
  `supportDoc` varchar(200) NOT NULL,
  `postDate` date NOT NULL,
  `postTime` time NOT NULL,
  `anonymous` varchar(10) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`ideaID`, `ideaTitle`, `ideaText`, `commentClosureDate`, `supportDoc`, `postDate`, `postTime`, `anonymous`, `view`, `categoryID`) VALUES
(10, 'FIRST Robotics Competition', 'FIRST Robotics Competition has a unique culture that is built around two values. \"Gracious Professionalism\" embraces the competition inherent in the program, but rejects trash talk and chest-thumping, instead embracing empathy and respect for other teams. \"Coopertition\" emphasizes that teams can cooperate and compete at the same time.The goal of the program is to inspire students to be science and technology leaders.', NULL, '2022.jpg', '2022-03-27', '12:11:03', NULL, 10, 1),
(11, 'Little Box Challenge', 'The goals of the competition were lower cost solar photovoltaic power, more efficient uninterruptible power supplies, affordable microgrids, and the ability to use an electric vehicle\'s battery as backup power during a power outage. Google also hoped a smaller inverter could make its data centers run more efficiently.', NULL, 'document/', '2022-03-29', '16:51:20', NULL, 2, 1),
(12, 'Solar car races‎ ', 'The objective of the challenge is to promote the innovation of solar-powered cars. It is a design competition at its core, and every team/car that successfully crosses the finish line is considered successful. Teams from universities and enterprises participate. ', NULL, 'document/', '2022-03-29', '17:02:50', NULL, 24, 1),
(13, 'Junior Solar Sprint', 'Objectives of JSS are to create the fastest, most interesting, or best crafted vehicle. Skills in science, technology, engineering, and mathematics (STEM) are fostered when designing and constructing the vehicles, as well as principles of alternative fuels, engineering design, and aerodynamics.', NULL, 'document/', '2022-03-29', '18:56:02', 'anonymous', 15, 2),
(14, '25 Days of Making', '25 Days of making is all about bringing together a community of Makers and let their creativity be shared with those who wish to see it. 25 Days of Making’s goal is to inspire Students, Educators, and other Makers to join 25 Days of Making. They want students, educators and other makers to use the creative and fun ideas to Make their own experiments or even to try out some of the ones shown on the page.', NULL, 'document/2022.jpg', '2022-03-30', '00:03:22', 'anonymous', 14, 2),
(15, 'Altoids Flashlight', 'Target Applicant: Pre-University, Undergraduate\r\nMake an LED flashlight using a mint tin.', NULL, 'document/2022.jpg', '2022-03-30', '00:04:16', NULL, 0, 2),
(16, 'Academy of Engineering Camp', 'For Gearheads Only- Mechanical Engineering 101 Explore simple machines, wheels, and axels, pulleys, gears and universal joints as we learn the basic principles of mechanical engineering. Design wind cars, working gear trains, and compete to construct the most unique machine. Building the World Around Us- Civil Engineering Basics This unique summer workshop will introduce students to the principles of architecture and urban planning using LEGOs, K’NEX and other materials. Students will be presented with a wide range of modeling, engineering and architectural activities as they map out and build communities. We’ll construct bridges and towers and investigate the impact of earthquakes on structures', NULL, 'document/', '2022-03-30', '00:05:20', NULL, 15, 2),
(17, 'Adventures in Engineering and Science', 'Adventures in Engineering and Science is a bilingual non-profit outreach program based at the University of Ottawa run jointly through the Faculty of Engineering and the Faculty of Science.Adventures in Engineering offers a wide range of programming, including science and engineering as well as computer and technology based summer day camps, a girls-only weekend science club, and fun and interactive in-school workshops. They also welcome high-school students who would like to complete volunteer hours.', NULL, 'document/2022.jpg', '2022-03-30', '00:06:43', NULL, 156, 1),
(18, 'Make a snack pulley', 'Left Brain Craft Brain’s pulley for snacks is seriously amazing. The step-by-step directions are easy to follow, and this would make a great parent-child project.', NULL, 'document/', '2022-03-31', '11:57:44', 'anonymous', 92, 2),
(19, 'wwww', 'wwww', NULL, 'document/', '2022-04-05', '21:59:06', 'anonymous', 12, 3),
(20, 'wwww', 'wwww', NULL, 'document/', '2022-04-05', '21:59:18', 'anonymous', 0, 3),
(21, 'Why toilet no toilet paper?', 'Toilet no paper', NULL, 'document/', '2022-04-05', '22:03:19', NULL, 3, 4),
(22, 'Why toilet no toilet paper?', 'Toilet no paper', NULL, 'document/', '2022-04-05', '22:03:31', NULL, 0, 4),
(23, 'Good team work', 'Friendly team member', NULL, 'document/', '2022-04-05', '22:07:41', NULL, 0, 3),
(24, 'Good team work', 'Friendly team member', NULL, 'document/', '2022-04-05', '22:07:48', NULL, 0, 3),
(25, 'No Movie', 'Why no movie', NULL, 'document/', '2022-04-05', '23:25:21', NULL, 1, 3),
(26, 'No Movie', 'Why no movie', NULL, 'document/', '2022-04-05', '23:25:28', NULL, 0, 3),
(27, 'Why so many', 'Why', NULL, 'document/', '2022-04-05', '23:31:00', NULL, 1, 5),
(28, 'Why so many', 'Why', NULL, 'document/', '2022-04-05', '23:31:04', NULL, 0, 5),
(29, 'Why so many', 'Why', NULL, 'document/', '2022-04-05', '23:31:13', NULL, 0, 5),
(30, 'Why so many', 'Why', NULL, 'document/', '2022-04-05', '23:31:23', NULL, 0, 5),
(31, 'Why so many', 'Why', NULL, 'document/', '2022-04-05', '23:31:40', NULL, 0, 5),
(32, 'opps is my problem', 'oh no', NULL, 'document/', '2022-04-05', '23:32:17', NULL, 8, 4),
(33, 'Operion Offer Letter', 'Congratulations on your new baby', NULL, 'document/', '2022-04-05', '23:37:20', NULL, 3, 1),
(34, 'I cant get the offer leter', 'No offer letter', NULL, 'document/', '2022-04-05', '23:53:25', NULL, 0, 2),
(35, 'Go find Operion', 'Operion help offer me', NULL, 'document/', '2022-04-05', '23:54:10', NULL, 1, 1),
(36, 'Operion reject me', 'No operion', NULL, 'document/', '2022-04-05', '23:54:43', NULL, 5, 3),
(37, 'hello', '123', NULL, 'document/', '2022-04-07', '00:33:31', NULL, 7, 5),
(38, 'byebye', 'byebye', NULL, 'document/', '2022-04-07', '00:34:03', NULL, 1, 3),
(39, 'why email cannot use', 'why', NULL, 'document/', '2022-04-07', '00:35:50', NULL, 2, 3),
(40, 'I am too fat cannot dance', 'Too fat', NULL, 'document/', '2022-04-07', '00:38:29', NULL, 0, 8),
(41, 'Keep Fit', 'Do More exercise', NULL, 'document/', '2022-04-07', '00:39:02', NULL, 0, 7),
(42, 'I still too fat cannot dance', 'So sad', NULL, 'document/img2.jpg', '2022-04-07', '00:39:36', NULL, 3, 9),
(43, 'Eunice go sleep', '123', NULL, 'document/', '2022-04-07', '00:59:58', NULL, 24, 3),
(44, 'choose test', 'f', NULL, 'document/14DV1T4954Z-14b3.jpg', '2022-04-11', '17:31:49', NULL, 25, 1),
(45, 'sien', 'sien', NULL, 'document/', '2022-04-11', '23:58:54', NULL, 28, 1),
(46, 'aqq', 'qqqq', NULL, 'document/', '2022-04-12', '00:23:57', 'anonymous', 32, 1),
(47, 'vv', 'qq', NULL, 'document/', '2022-04-13', '11:25:46', NULL, 0, 1),
(48, 'ss', 'ss', NULL, 'document/', '2022-04-13', '11:41:18', NULL, 2, 1),
(49, 'ff', 'ff', NULL, 'document/', '2022-04-13', '11:48:59', NULL, 0, 1),
(50, 'fff', 'fff', NULL, 'document/', '2022-04-13', '11:50:46', NULL, 0, 1),
(51, 'Lack of Man Power', 'Having issue lack of man power', NULL, 'document/', '2022-04-13', '12:40:09', NULL, 9, 2),
(52, 'Duration work time too long', 'Duration work time too long', NULL, 'document/', '2022-04-13', '12:43:37', NULL, 1, 6),
(53, 'Film time to short', 'Film time to short', NULL, 'document/', '2022-04-13', '12:46:19', NULL, 4, 12),
(54, 'Too Boring', 'Too Boring', NULL, 'document/', '2022-04-13', '12:47:49', NULL, 7, 14),
(55, 'bsdjj', 'de', NULL, 'document/', '2022-04-13', '15:02:05', NULL, 2, 3),
(56, 'Update database', 'Update database', NULL, 'document/', '2022-04-13', '23:08:09', NULL, 5, 1),
(57, 'Drop the Table', 'Drop the Table', NULL, 'document/', '2022-04-13', '23:10:05', NULL, 6, 1),
(58, 'Email Sent Fail', 'Email Sent Fail', NULL, 'document/', '2022-04-13', '23:10:58', NULL, 8, 5),
(59, 'System Down', 'Email Sent Fail', NULL, 'document/', '2022-04-13', '23:11:59', NULL, 4, 3),
(60, 'Lack of accessories', 'Lack of accessories to use', NULL, 'document/', '2022-04-13', '23:13:32', NULL, 5, 11),
(61, 'Hired more Professional talent', 'Filter and get the more professional talent', NULL, 'document/', '2022-04-13', '23:15:29', NULL, 9, 1),
(62, 'Create more creative topic', 'Design and create more creativity idea', NULL, 'document/', '2022-04-13', '23:16:28', NULL, 0, 13),
(63, 'Take time to learn the language', 'Duration at least 1 years', NULL, 'document/', '2022-04-13', '23:17:34', NULL, 4, 17),
(64, 'Fee High', 'The payment fee learning high', NULL, 'document/', '2022-04-13', '23:25:03', NULL, 3, 17),
(65, 'Time learning extend', 'The time of learning should be extend', NULL, 'document/', '2022-04-13', '23:27:09', NULL, 5, 18),
(66, 'More secure fireware', 'Prevent hack the system', NULL, 'document/', '2022-04-13', '23:28:46', NULL, 13, 3),
(67, 'Remove the same topic', 'Remove the similar topic', NULL, 'document/', '2022-04-13', '23:30:30', NULL, 4, 15),
(68, 'Provide high spec notebook', 'Processor should be not less than i7', NULL, 'document/', '2022-04-13', '23:53:43', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `managedata`
--

CREATE TABLE `managedata` (
  `dataID` int(11) NOT NULL,
  `staffID` int(11) DEFAULT NULL,
  `ideaID` int(11) NOT NULL,
  `commentID` int(11) DEFAULT NULL,
  `reactID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managedata`
--

INSERT INTO `managedata` (`dataID`, `staffID`, `ideaID`, `commentID`, `reactID`) VALUES
(1, 3, 10, NULL, NULL),
(2, 5, 11, NULL, NULL),
(3, 2, 12, NULL, NULL),
(4, NULL, 13, NULL, NULL),
(5, NULL, 14, NULL, NULL),
(7, 5, 16, NULL, NULL),
(8, 2, 17, NULL, NULL),
(14, 2, 10, NULL, 13),
(25, 2, 17, NULL, 24),
(26, 2, 17, 1, NULL),
(27, NULL, 17, 2, NULL),
(28, 5, 17, 3, NULL),
(29, 5, 17, 4, NULL),
(30, 5, 17, 5, NULL),
(31, 5, 17, 6, NULL),
(32, NULL, 17, 7, NULL),
(33, 5, 17, 8, NULL),
(38, NULL, 18, NULL, NULL),
(39, 3, 18, NULL, 29),
(40, 3, 18, 9, NULL),
(41, NULL, 18, 10, NULL),
(46, 9, 18, 11, NULL),
(47, 9, 18, 12, NULL),
(48, NULL, 18, 13, NULL),
(49, NULL, 18, 14, NULL),
(50, 9, 18, 15, NULL),
(51, 9, 18, 16, NULL),
(52, NULL, 18, 17, NULL),
(53, NULL, 18, 18, NULL),
(54, NULL, 18, 19, NULL),
(55, NULL, 19, NULL, NULL),
(56, NULL, 19, NULL, NULL),
(57, 9, 21, NULL, NULL),
(58, 9, 21, NULL, NULL),
(59, 9, 23, NULL, NULL),
(60, 9, 23, NULL, NULL),
(61, 9, 25, NULL, NULL),
(62, 9, 25, NULL, NULL),
(63, 9, 27, NULL, NULL),
(64, 9, 27, NULL, NULL),
(65, 9, 27, NULL, NULL),
(66, 9, 27, NULL, NULL),
(67, 9, 27, NULL, NULL),
(68, 9, 32, NULL, NULL),
(69, 9, 33, NULL, NULL),
(70, 9, 34, NULL, NULL),
(71, 9, 35, NULL, NULL),
(72, 9, 36, NULL, NULL),
(73, 9, 36, 20, NULL),
(74, 9, 36, 21, NULL),
(75, 4, 37, NULL, NULL),
(76, 4, 38, NULL, NULL),
(77, 4, 39, NULL, NULL),
(78, 4, 40, NULL, NULL),
(79, 4, 41, NULL, NULL),
(80, 4, 42, NULL, NULL),
(81, 4, 43, NULL, NULL),
(82, 4, 37, NULL, 34),
(84, 4, 32, NULL, 36),
(85, 7, 43, 22, NULL),
(87, 7, 44, NULL, NULL),
(88, 7, 45, NULL, NULL),
(89, NULL, 46, NULL, NULL),
(90, 11, 45, 23, NULL),
(91, 11, 45, 24, NULL),
(92, 11, 45, 25, NULL),
(93, 11, 45, NULL, 38),
(94, 11, 46, NULL, 39),
(95, 11, 47, NULL, NULL),
(96, 11, 48, NULL, NULL),
(97, 11, 49, NULL, NULL),
(98, 9, 50, NULL, NULL),
(99, 9, 51, NULL, NULL),
(100, 9, 52, NULL, NULL),
(101, 9, 53, NULL, NULL),
(102, 11, 54, NULL, NULL),
(103, 7, 55, NULL, NULL),
(104, 7, 56, NULL, NULL),
(105, 11, 57, NULL, NULL),
(106, 11, 58, NULL, NULL),
(107, 11, 59, NULL, NULL),
(108, 11, 60, NULL, NULL),
(109, 10, 61, NULL, NULL),
(110, 10, 62, NULL, NULL),
(111, 10, 63, NULL, NULL),
(112, 2, 64, NULL, NULL),
(113, 3, 65, NULL, NULL),
(114, 3, 66, NULL, NULL),
(115, 3, 67, NULL, NULL),
(116, NULL, 58, 26, NULL),
(117, 3, 58, 27, NULL),
(118, NULL, 66, 28, NULL),
(119, 3, 61, 29, NULL),
(120, 4, 66, NULL, 40),
(121, 4, 66, 30, NULL),
(122, 4, 61, NULL, 41),
(123, 4, 61, 31, NULL),
(124, 4, 54, NULL, 42),
(125, 4, 54, 32, NULL),
(126, 4, 65, NULL, 43),
(127, 4, 64, NULL, 44),
(128, 4, 63, NULL, 45),
(129, 4, 60, NULL, 46),
(130, 4, 53, NULL, 47),
(131, 4, 57, NULL, 48),
(132, 4, 56, NULL, 49),
(133, 4, 56, 33, NULL),
(134, 6, 59, 34, NULL),
(135, 6, 59, NULL, 50),
(136, 6, 57, 35, NULL),
(137, 6, 67, 36, NULL),
(138, 9, 68, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `react`
--

CREATE TABLE `react` (
  `reactID` int(11) NOT NULL,
  `thumbUp` int(1) NOT NULL,
  `thumbDown` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `react`
--

INSERT INTO `react` (`reactID`, `thumbUp`, `thumbDown`) VALUES
(13, 3, 0),
(24, 1, 0),
(29, 1, 0),
(34, 1, 0),
(36, 1, 0),
(38, 1, 0),
(39, 0, 6),
(40, 1, 0),
(41, 0, 1),
(42, 0, 1),
(43, 0, 1),
(44, 1, 0),
(45, 1, 0),
(46, 1, 0),
(47, 0, 1),
(48, 0, 1),
(49, 1, 0),
(50, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `role` varchar(30) NOT NULL,
  `departmentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `username`, `fName`, `lName`, `gender`, `phoneNo`, `email`, `password`, `image`, `role`, `departmentID`) VALUES
(1, 'H', 'Chin', 'Yoh', 'Male', '0123456789', 'chin@gmail.com', 'chin123', NULL, 'manager', NULL),
(2, 'Y', 'Gemay', 'Ning', 'Female', '0123787466', 'ning@gmail.com', 'ning123', NULL, 'staff', 2),
(3, 'Y', 'Eunice', 'Tan', 'Female', '0167473321', 'eunice@gmail.com', 'eunice123', NULL, 'coordinator', NULL),
(4, 'Y', 'Hooi', 'Luan', 'Female', '01147892900', 'hooi@gmail.com', 'hooi123', NULL, 'staff', 5),
(5, 'YU', 'Yong', 'YiLeng', 'Female', '0199831455', 'yileng0114@gmail.com', 'yileng123', NULL, 'staff', 1),
(6, 'UI', 'Jameson', 'Loh', 'Male', '0167473333', 'loh@gmail.com', 'loh123', NULL, 'staff', 6),
(7, 'Chin', 'Chen', 'Xiang', 'Male', '+60124587965', 'chin.1212@gmail.com', 'xiang123', 'user.png', 'manager', NULL),
(9, 'Tan', 'Kok', 'Kang', 'Female', '+60124567894', 'shinesky1110@gmail.com', 'kang123', 'user.png', 'staff', 1),
(10, 'lee', 'Wei', 'Zhe', 'Female', '+60124587469', 'lee@gmail.com', 'zhe123', 'lee.jpg', 'staff', 5),
(11, 'kok', 'Zheng', 'Xian', 'Male', '+60124587495', 'zhengxian0316@gmail.com', 'xian123', 'lee.jpg', 'coordinator', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD KEY `departmentID` (`departmentID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`ideaID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `managedata`
--
ALTER TABLE `managedata`
  ADD PRIMARY KEY (`dataID`),
  ADD KEY `commentID` (`commentID`),
  ADD KEY `reactID` (`reactID`),
  ADD KEY `staffID` (`staffID`),
  ADD KEY `ideaID` (`ideaID`);

--
-- Indexes for table `react`
--
ALTER TABLE `react`
  ADD PRIMARY KEY (`reactID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`),
  ADD KEY `departmentID` (`departmentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `ideaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `managedata`
--
ALTER TABLE `managedata`
  MODIFY `dataID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `react`
--
ALTER TABLE `react`
  MODIFY `reactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`);

--
-- Constraints for table `managedata`
--
ALTER TABLE `managedata`
  ADD CONSTRAINT `managedata_ibfk_1` FOREIGN KEY (`commentID`) REFERENCES `comment` (`commentID`),
  ADD CONSTRAINT `managedata_ibfk_2` FOREIGN KEY (`reactID`) REFERENCES `react` (`reactID`),
  ADD CONSTRAINT `managedata_ibfk_3` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`),
  ADD CONSTRAINT `managedata_ibfk_4` FOREIGN KEY (`ideaID`) REFERENCES `idea` (`ideaID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
