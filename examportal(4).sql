-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2019 at 05:07 PM
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
-- Database: `examportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` varchar(50) NOT NULL,
  `q1` int(5) NOT NULL,
  `q2` int(5) NOT NULL,
  `q3` int(5) NOT NULL,
  `q4` int(5) NOT NULL,
  `q5` int(5) NOT NULL,
  `q6` int(5) NOT NULL,
  `q7` int(5) NOT NULL,
  `q8` int(5) NOT NULL,
  `q9` int(5) NOT NULL,
  `q10` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
('', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks1`
--

CREATE TABLE `marks1` (
  `userid` varchar(50) NOT NULL,
  `totalmarks` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks1`
--

INSERT INTO `marks1` (`userid`, `totalmarks`) VALUES
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 5),
('rajupraa@gmail.com', 0),
('rajupraaa1234@gmail.com', 1),
('rajupraaa1234@gmail.com', 0),
('rajupraaa1234@gmail.com', 1),
('rajupraaa1234@gmail.com', 0),
('rajupraaa1234@gmail.com', 0),
('rajupraaa1234@gmail.com', 3),
('rajupraaa1234@gmail.com', 0),
('rajupraaa1234@gmail.com', 3),
('rajupraaa1234@gmail.com', 3),
('rajupraaa1234@gmail.com', 2),
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 5),
('rajupraaa1234@gmail.com', 7),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 1),
('rajupraa@gmail.com', 3),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 1),
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('', 0),
('', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 1),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 2),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 1),
('rajupraa@gmail.com', 0),
('rajupraa@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questionid`
--

CREATE TABLE `questionid` (
  `id` int(50) NOT NULL,
  `ques` text NOT NULL,
  `option1` char(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` char(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answerid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionid`
--

INSERT INTO `questionid` (`id`, `ques`, `option1`, `option2`, `option3`, `option4`, `answerid`) VALUES
(1, 'HTML stands for?', 'Hyper Text Markup Language', 'High Text Markup Language', 'Hyper Tabular Markup Language', 'None of these', 1),
(2, 'Who is making the Web standards ?', 'Google', 'Microsoft', 'World Wide Web Consortiun', 'Mozilla', 3),
(3, ' \r\n\r\nFrom which tag descriptive list starts ?', 'DL tag', 'LL tag', 'DS tag', 'DD tag\r\n \r\n ', 1),
(4, 'Correct HTML tag for the largest heading is ?', 'head tag', 'h6 tag', 'heading tag', 'h1 tag', 4),
(5, ' \r\n\r\nThe attribute of form tag ?', 'Method', 'Action', 'Both', 'None of these', 3),
(6, 'Markup tags tell the web browser ?', 'How to organise the page', 'How to display the page', 'How to display message box on page', 'None of these', 2),
(7, 'www is based on which model ?', 'Local-server', 'Client-server', '3-tier', 'None of these', 2),
(8, ' \r\n\r\nWhat are Empty elements and is it valid ?', 'No, there is no such terms as Empty Element', 'Empty elements are element with no data', 'No, it is not valid to use Empty Element', 'None of these', 2),
(9, 'How do you write \"Hello World\" in an alert box ? ', 'msg(\"Hello World\");', 'alertBox(\"Hello World\");', 'msgBox(\"Hello World\");', 'alert(\"Hello World\");', 4),
(10, 'Web pages starts with which of the following tag ?', 'Body tag', 'Title tag', 'HTML tag', 'Form tag', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `mc` varchar(50) NOT NULL,
  `mp` float NOT NULL,
  `my` int(5) NOT NULL,
  `ic` varchar(50) NOT NULL,
  `ip` float NOT NULL,
  `iy` int(5) NOT NULL,
  `gc` varchar(50) NOT NULL,
  `gp` float NOT NULL,
  `gy` int(5) NOT NULL,
  `oc` varchar(50) NOT NULL,
  `op` float NOT NULL,
  `oy` int(5) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `fname`, `mname`, `dob`, `gender`, `mob`, `mc`, `mp`, `my`, `ic`, `ip`, `iy`, `gc`, `gp`, `gy`, `oc`, `op`, `oy`, `login`, `password`) VALUES
('raju kumar', 'rameshwar prasad', 'asha devi', '0000-00-00', 'male', '2147483647', 'bihar board', 65, 2013, 'bihar board', 75, 2015, 'Magadh university', 76, 2018, '', 0, 0, '', '0'),
('rahu kumar gupta', 'rameshwar prasad', 'asha devi', '2015-12-17', 'male', '2147483647', 'bihar board', 75, 2012, 'bihar board', 65, 2013, '', 0, 0, '', 0, 0, '', '0'),
('gaurav kumar', 'gopal prasad sah', 'sangita devi', '1998-02-20', 'male', '2147483647', 'aps', 78, 2013, 'shivam convent', 63, 2015, 'coc', 72, 2018, '', 0, 0, '', '0'),
('gaurav kumar', 'gopal prasad sah', 'sangita devi', '1998-02-20', 'male', '7903070935', 'aps', 78, 2011, '', 0, 0, '', 0, 0, '', 0, 0, '', '0'),
('vikash kumar gupta', 'rameshwar prasad', 'asah devi', '2000-10-12', 'male', '9155074748', 'Modern School', 80, 2017, '', 0, 0, '', 0, 0, '', 0, 0, '', '0'),
('raj', 'raju kumar', 'asha', '2000-11-20', 'femal', '741852963', 'nitc', 80, 2018, '', 0, 0, '', 0, 0, '', 0, 0, '', '0'),
('rajashekhar', 'raju', 'asha devi', '1999-02-14', 'male', '1234567890', 'biahr board', 12, 1999, '', 0, 0, '', 0, 0, '', 0, 0, '', '0'),
('rameshwar', 'bhagelu shah', 'gita devi', '2000-02-22', 'male', '9155074743', 'bihar board', 12, 1999, '', 0, 0, '', 0, 0, '', 0, 0, '', '0'),
('rahul', 'ram kumar', 'gita devi', '2000-05-22', 'male', '9155074742', 'bihar board', 50, 1998, '', 0, 0, '', 0, 0, '', 0, 0, '', '0'),
('zcnkff', 'nkadijwef', 'kdhe', '2000-12-12', 'male', '915504748', 'bihar board', 30, 2018, '', 0, 0, '', 0, 0, '', 0, 0, '', '0'),
('raju kumar gupta', 'rameshwar prasad', 'asha devi', '2000-11-20', 'male', '9279273370', 'sri chandra high school', 80, 2011, '', 0, 0, '', 0, 0, '', 0, 0, 'rajupraaa1234@gmail.com', '9279273370'),
('gfcdxfdgfv', 'dfbnhmh', 'tyjkjjhgtyyukj', '2001-12-05', '', '9279273370', 'nnbjh', 25, 2015, '', 0, 0, '', 0, 0, '', 0, 0, 'rajupraa@gmail.com', '123456'),
('nbfhgj', 'mvgfg', 'huytgu', '2015-12-17', '', '9279273370', 'nhjy', 20, 1999, '', 0, 0, '', 0, 0, '', 0, 0, 'mvfddtdug@gmail.com', '123456'),
('rohan', 'mamta devi', 'rakuwar', '1999-02-17', 'male', '9279273370', 'bihar board', 25, 1995, '', 0, 0, '', 0, 0, '', 0, 0, 'rohanpraaa@gmail.com', '123456'),
('cgcs', 'jyhisffiji', 'jsjpsf', '2000-05-20', 'male', '7418529630', 'sjjdjl', 25, 1955, '', 0, 0, '', 0, 0, '', 0, 0, 'fjdgdh@gmail.com', '741852963'),
('subhashu', 'dilip rathore', 'sushma rathore', '1996-12-29', 'male', '8109213042', 'cfvgfbrg', 25, 1999, '', 0, 0, '', 0, 0, '', 0, 0, 'shrdhr2adf2s@gmail.com', '147852369'),
('kamlesh kumar', 'ram', 'gita devi', '1999-03-12', 'male', '9279273310', 'bihar board university', 32, 1999, '', 0, 0, '', 0, 0, '', 0, 0, 'rajupraa@gmail.com', '123456'),
('raju', '1234', 'saddf', '2019-02-11', 'femal', '234567786745', 'sejfhfcxfggg', 0, 1234, '', 0, 0, '', 0, 0, '', 0, 0, 'rajupraa@gmail.com', '123456'),
('raju', '1234', 'saddf', '2019-02-11', 'femal', '234567786745', 'sejfhfcxfggg', 0, 1234, '', 0, 0, '', 0, 0, '', 0, 0, 'rajupraa@gmail.com', '123456'),
('rjau', 'ram', 'ncnk', '2019-02-18', 'Femal', '9122334343', 'chsbfbkf ', 50, 1999, '', 0, 0, '', 0, 0, '', 0, 0, 'rahu@gmail.com', '1234567'),
('rarfkd', 'adsnfjl', 'dsfef', '2019-02-12', 'Femal', '9155074748', 'jadh', 23, 1989, '', 0, 0, '', 0, 0, '', 0, 0, 'rajua@gmail.com', '12345'),
('sdfd', 'sdcvrg', 'sdcdghfj', '2019-02-19', 'Femal', '9155000523', 'adjsfd', 20, 2010, '', 0, 0, '', 0, 0, '', 0, 0, 'rajukkk@gmail.com', '123456'),
('qwertt', 'ravbgbfv', 'wkhefh', '2019-02-25', 'Male', '9155025632', 'bugifhuvuyrf', 20, 2010, '', 0, 0, '', 0, 0, '', 0, 0, 'adminw@gmail.com', '1234567'),
('Nikhil Bulchandani', 'Bhisham Bulchandani', 'Meena Bulchandani', '1995-11-23', 'Male', '9303631313', 'KPS', 76, 2012, 'KPS', 63, 2014, '', 0, 0, '', 0, 0, 'haremadhav34@gmail.com', 'nik1137'),
('Gaurav kumar', 'Gopal prasad  Sah', 'Sangita Devi', '1998-02-20', 'Male', '8903070935', 'APS DANAPUR', 80, 2013, 'STAYAM INTERNATIONAL', 72, 2015, 'COC', 78, 2018, '', 0, 0, 'gaurav.kumarsd29@gmail.com', '7903070935');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `duration` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`duration`) VALUES
(15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionid`
--
ALTER TABLE `questionid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionid`
--
ALTER TABLE `questionid`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
