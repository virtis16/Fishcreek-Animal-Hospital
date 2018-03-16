-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 06:40 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `name`, `address`, `phone`, `email`, `password`) VALUES
(1, 'Virti', '415 Summit Ave , Arlington TX 76013', 6691234565, 'virtibipin.sanghavi@mavs.uta.edu', ''),
(2, 'Dave', '417 Summit Ave , Arlington TX 76013', 6821234567, 'dave123@mavs.uta.edu', ''),
(3, 'John', '507 Summit Ave , Arlington TX 76013', 1238795647, 'john123@gmail.com', ''),
(4, 'Anne', 'Grand Prairie, Arlington TX 76019', 6795865566, 'anne09@yahoo.com', ''),
(6, 'virti', 'Meadow', 6692258650, 'virti.s1621@gmail.com', 'Virti44555gggh'),
(8, 'Bipin Sanghavi', 'Opal Tower', 9321321948, 'bipinsanghavi20@gmail.com', '5551a78a554c30d400c76cbd616eab6c'),
(10, 'Anne', '1424, Centennial Court Apartments, 700 w mitchell cir', 6698659999, 'anne123@gmail.com', '765c1d936be410cb7075f2801f0017ae'),
(13, 'qwerty', 'qwetyuui yu', 9619959753, 'qwerty@qwerty.com', '093afed9d4dd692c80482d9eebc3f3b5'),
(21, 'Sangeeta', 'Chicago', 7087042286, 'rmehendale@gmail.com', 'eb2911822771367e58b3129db98805c1'),
(22, 'Ramkrishna', 'Chicago', 7894564566, 'srmehendale@gmail.com', '10964d8bd191e0f035f8fd31ad41657e'),
(25, 'Darshi', 'India', 9856565656, 'darshi123@gmail.com', 'dcc460a07e8eb7bcc609f62b51ff0025'),
(26, 'Moksha', 'India', 9664920245, 'mokshasanghavi09@gmail.com', '380fab370b9cf3845d8402ac52e0c6a9'),
(28, 'Vinayak Tare', '106 East 3rd street, Unit number 5, Arlington, Texas', 6319337353, 'vnayaktare@gmail.com', '9911da9bdb15624f52c2cd16b39706b8'),
(29, 'Vinayak Tare', '106 East 3rd street, Unit number 5, Arlington, Texas', 6319337353, 'tarev@gmail.com', '929bdd4163179bd6fbacc5b5280fff99'),
(30, 'fdskjfhdsjk', 'dfhjdksfdjsk', 1234567890, 'virti2222@gmail.com', 'c8e3fe8044ae1b86bde8eb976ead29e2'),
(31, 'Virti Sanghavi', '415, Summit Avenue, Apt # 315', 6692258628, 'virtisanghavi@gmail.com', '5e23716993e124be5be1bbe363d46176'),
(32, 'Virti Sanghavi', '415, Summit Avenue, Apt # 315', 6256559878, 'virtis@gmail.com', 'd2d91814c665174f2e8ea43326e5e1b0'),
(33, 'Virti Bipin Sanghavi', '1002 Greek row Apt 320, Arbor Oaks', 6692258650, 'qwertyy@hotmail.com', '6019f55e4714b54247efe4b1a583f52e'),
(34, 'Riddhi', 'Odeon', 9869169611, 'ridzi12@gmail.com', '2f849848324ac1bc9609281c463b6e4e'),
(35, 'Tanvi', 'Ghatkopar', 9619555666, 'tanvi_19@hotmail.com', 'f5ec4bfe0faac0053d0a707061438627'),
(36, 'Palak', 'Dadar West, Mumbai', 9869456123, 'palak123@gmail.com', 'b8d488bf96191e2ea20aef249e34b1df'),
(37, 'Riya Shah', 'London', 6692258456, 'riya123@gmail.com', 'b16e285770ef5fb84a8f39a9b6890924'),
(38, 'Dia', 'Spain', 9845696969, 'ria1@hotmail.com', '83c977f029dec4c336f6f295e8755faf'),
(39, 'Siddharth', 'New York', 7894561230, 'sid.scope@yahoo.com', '69d9e76e6c14806fffd2713b6576d457'),
(40, 'Virti Bipin Sanghavi', 'A-3/904, Opal, Neelkanth Regent, Ghatkopar East', 9619959753, 'virti.sanghavi1692@gmail.com', '1e1bff62548abc85e9af64f25a38e36e'),
(41, 'wdafg', 'wadsfgh', 1234567890, 'fcgfdgdf@gmail.com', 'fadc326a39989c000e28e719b178f8e3'),
(42, 'Virti Bipin Sanghavi', '1002 Greek row, Dr., Arbor Oaks, Apartment 320', 6692258650, 'vir@gmail.com', 'c51029cbf2a7b17aaf32e3e62c3699f0'),
(43, 'Ramkrishna Govind MEHENDALE', '821 Wisconsin Avenue, Oak Park IL', 7087042286, '4sssrmehendale@gmail.com', '9a46563d718b4056420cccd2880d01fa'),
(44, 'Ramkrishna Govind MEHENDALE', 'ewdfgghjmkol', 9321321948, 'rrrrmmm12@gmail.com', 'f81a4d79a4e20179fe660f323c780037'),
(45, 'Sahil', 'India', 9879569569, 'sahilshah@gmail.cpm', '802679b79747dfd7ddc048e6a97c2aa7c3bc5f43'),
(46, 'Virti Bipin Sanghavi', '904, Anchro Drive, Emeryville, CA', 9619959753, 'virti1621@gmail.com', 'f207e83d254910343d088a952fb9e73b5018c4bb'),
(47, 'Khushi', 'India', 9869169503, 'khushi123@gmail.com', '8c6d7600716d71d9d04e96c13f19b1f7841af2b8'),
(48, 'Darshika Magia', 'India', 9619568896, 'doll@gmail.com', 'f207e83d254910343d088a952fb9e73b5018c4bb'),
(49, 'Palak Shah', 'India', 6692258650, 'palshah31@gmail.com', '63dde37951050f01fa8b36f0867e5050bd1ea36c'),
(50, 'qwertyui', 'wertyuiopertyu', 9619959753, 'v1222@gmail.com', 'caa960c1b7f80a94634d94a8cb1152b6c7cf4020'),
(51, 'Rekha Bipin', 'India', 9619959753, 'rekha0957@yahoo.com', '9c9a9ef89e5f82e4dc13d74dea0e596d6493fa36'),
(52, 'Vinayak Tare', '106 East 3rd street, Unit number', 6319337353, 'tarev21@gmail.com', '4fd7e38c7a5da5dd1990a5acaf1477f267a5d869'),
(53, 'Kulbodhi', 'A-3/904, Opal, Neelkanth Regent, Ghatkopar East', 6692258650, 'kulbodhi123@gmail.com', '1f99e4a0fe3193803c0d2f54acbb110938475154'),
(54, 'Rekha Sanghavi', '102, Elphiston Road, Mumbai - 75', 6692258650, 'rbs@gmail.com', '81e45b1f44b0a7efe0c2daf9e6f088d366faaa43'),
(55, 'abcdsss', 'asdskdsadkslkl', 6692258650, 'abcccc@gmail.com', 'c91d6d85e1dba69028834e2205877a80050dc0b0'),
(56, 'Vinayak Tare', '106 East 3rd street, Unit number 5, Arlington, Texas', 6319337353, 'viiii45@gmail.com', 'eca71702e422c421a3e54d214941523a8e9e1220'),
(57, 'Virti Bipin Sanghavi', '1002 Greek row, Dr.\r\nArbor Oaks, Apartment 320', 6692258650, 'vbs123@gmail.com', '5a8d41b4ead89a1866a5da573d136e089f149d53'),
(58, 'Virti Bipin Sanghavi', 'A-3/904, Opal, Neelkanth Regent, Ghatkopar East', 9619959753, 'vs1621@gmail.com', '02ec0df61370f0d75605a8b47e7fcaac267e6665');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `comments`) VALUES
('Virti Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'HEllo!!!'),
('Ramkrishna Govind MEHENDALE', 'rmehendale@gmail.com', 'How are you????'),
('Moksha', 'mokshasanghavi09@gmail.com', 'Hello'),
('Riddhi', 'ridddhis@gmail.com', 'Good Morning!!Your service is awesome'),
('Bipin', 'bipins@gmail.com', 'Hiii'),
('Siddharth', 'sid.scope@yahoo.com', 'I like your services.'),
('the university of texas at arlington', 'abcd@uta.edu', 'OLA'),
('Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'fhgjkl;'),
('Bipin Sanghavifsdfsdf', 'virti.sanghavi1692@gmail.com', 'sdfsdf'),
('Virti Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'sdfghjkljgsdfggh'),
('Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'wertyui'),
('Virti Bipin', 'virtibipin.sanghavi@mavs.uta.edu', 'Helooooo qwertyui'),
('Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'dsafghjkl;\''),
('Vinayak Tare', 'virti.s1621@gmail.com', 'wdagtyjukhilk'),
('Virti Bipin Sanghavi', 'virtibipin.sanghavi@mavs.uta.edu', 'fggfhfghfghfhfghfg'),
('Ramesh', 'rmehendale@gmail.com', 'assdfghjsdfghjdfg'),
('Vinayak Tare', 'eguhjko@gmail.com', 'srsfgdfhjkl'),
('Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'good morning'),
('Virti Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'Hellloooo!!!!!'),
('Darshika', 'darshika12@gmail.com', 'Helloo Hi, How are you?'),
('Virti Bipin Sanghavi', 'virti.sanghavi1692@gmail.com', 'sadfghjkwqesrdgfhjk'),
('Virti Bipin Sanghavi', 'vbs16@gmail.com', 'Virti Sanghaviifff'),
('Vinayak Tare', 'virtibipin.sanghavi@mavs.uta.edu', 'sxdgfbhjnkmlnbnm j jn jkn '),
('Virti Bipin Sanghavi', 'virtibipin.sanghavi@mavs.uta.edu', 'wadsfghjfdghjertthyj');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` int(100) NOT NULL,
  `petname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petid`, `petname`) VALUES
(1, 'German Shepherd'),
(2, 'Labrador'),
(3, 'Pomerian'),
(4, 'Wild Cat'),
(5, 'SmallCat'),
(6, 'Persian Cat');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionid` int(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionid`, `question`, `answer`) VALUES
(1, 'Our dog, Sparkly, likes to eat whatever the kids are snacking on. Is it OK for the dog to eat chocolates?', 'Chocolate is toxic to dogs. Please do not feed your dog chocolate. Try playing a game with your chil'),
(2, 'My cat Meow, likes to eat whatever the is spicy and kids are pouncing on. Is it OK for cat to eat biscuits and caramel cookies?', 'Cookies are toxic to cats. Please do not feed your cat a cookie or any biscuit. Try playing a game with your children.'),
(3, 'Our rabbit, Sudoku, likes to eat whatever the kids are snacking on. Is it OK for the rabbit to eat chocolates?', 'You need to consult a doctor regarding this issue.'),
(4, 'What is the best suitable food for a pomerian dog?', 'He likes to eat fresh meat and chicken. Also food filled with calcium.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceid` int(100) NOT NULL,
  `servicename` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceid`, `servicename`, `description`) VALUES
(1, 'Medical Services', 'We offer state-of-the-art equipment and technology.'),
(2, 'Surgical Services', 'Full range of surgical procedures including orthopedics and emergency surgeries.'),
(3, 'Dental School', 'A dental exam can determine whether your pet needs preventive dental care such as scaling and polish'),
(4, 'House Calls', 'The elderly, physically challenged, and multiple pet households often find our in-home veterinary service helpful and convenient.'),
(5, 'Emergencies', 'At least one of our doctors is on call every day and night.');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `clientid` int(100) NOT NULL,
  `serviceid` int(100) NOT NULL,
  `petid` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`clientid`, `serviceid`, `petid`, `date`) VALUES
(28, 3, 6, '0000-00-00'),
(1, 3, 2, '0000-00-00'),
(26, 3, 6, '0000-00-00'),
(21, 3, 4, '0000-00-00'),
(46, 5, 1, '0000-00-00'),
(48, 1, 1, '0000-00-00'),
(49, 2, 4, '2017-12-07'),
(1, 3, 3, '2017-12-07'),
(48, 1, 1, '2017-12-07'),
(50, 4, 4, '2017-12-07'),
(51, 5, 3, '2017-12-07'),
(40, 2, 2, '2017-12-07'),
(21, 1, 1, '2017-12-07'),
(21, 4, 4, '2017-12-07'),
(52, 4, 3, '2017-12-07'),
(6, 1, 1, '2017-12-07'),
(6, 1, 1, '2017-12-07'),
(6, 3, 6, '2017-12-07'),
(53, 3, 5, '2017-12-07'),
(53, 1, 1, '2017-12-07'),
(54, 3, 4, '2017-12-07'),
(1, 5, 5, '2017-12-07'),
(1, 5, 5, '2017-12-07'),
(55, 1, 1, '2017-12-07'),
(56, 3, 6, '0000-00-00'),
(56, 1, 1, '0000-00-00'),
(57, 4, 6, '0000-00-00'),
(40, 3, 6, '0000-00-00'),
(21, 4, 6, '2017-12-06'),
(1, 3, 3, '2017-12-06'),
(21, 1, 1, '2017-12-06'),
(58, 2, 5, '2017-12-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD KEY `clientid` (`clientid`),
  ADD KEY `serviceid` (`serviceid`),
  ADD KEY `petid` (`petid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscription_ibfk_2` FOREIGN KEY (`serviceid`) REFERENCES `service` (`serviceid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscription_ibfk_3` FOREIGN KEY (`petid`) REFERENCES `pet` (`petid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
