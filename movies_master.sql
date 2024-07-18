-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 02:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `User_name` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `User_name`, `Password`) VALUES
(1, 'Admin_2211', '1234568'),
(4, 'ayushi1110', '1234567'),
(5, 'bhuti2204', 'password'),
(6, 'radhi22', 'radhi22'),
(7, 'kishan1', 'kishan1'),
(8, 'radhi22', 'radhi'),
(10, 'fichadiyamdm24', 'no_password');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(10) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `dura` varchar(5) NOT NULL,
  `rd` varchar(10) NOT NULL,
  `cat` varchar(3) NOT NULL,
  `des` mediumtext NOT NULL,
  `link` varchar(2500) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `mname`, `dura`, `rd`, `cat`, `des`, `link`, `file`) VALUES
(1, 'The Conjuring', '01:52', '20-03-2013', 'HTM', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse. Forced to confront a powerful entity, the Warrens find themselves caught in the most terrifying case of their lives.', 'https://www2.theshit.me/movie/watch-the-conjuring-2013-free-19532', 'dummy/counjring.png'),
(3, 'The Curse of La Llorona', '02:41', '11-03-2022', 'HTM', 'A social worker dealing with the disappearance of two children fears for her own family after beginning the investigation.', 'https://www2.theshit.me/watch-movie/watch-the-curse-of-la-llorona-2019-free-41262.5382184', 'dummy/the_curse_of_la_llorona.png'),
(10, 'Nobody  ', '01:32', '17-04-2019', 'AS ', 'Hutch Mansell finds his life changed when a few thieves break into his house. While trying to punish the thieves, he ends up earning the wrath of a crime lord, Yulian, after he attacks his brother.', 'https://www2.theshit.me/movie/watch-nobody-2021-free-69184  ', 'dummy/nobody.png'),
(11, 'Black Panther: Wakanda Forever    ', '02:01', '11-03-2022', 'AS ', 'Queen Ramonda, Shuri, MBaku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King TChallas death. As the Wakandans strive to embrace their next chapter, the heroes must band together with Nakia and Everett Ross to forge a new path for their beloved kingdom.', 'https://www2.theshit.me/movie/watch-black-panther-ii-2022-free-66672    ', 'dummy/black_panther.png'),
(12, 'Wall-E', '01:38', '22-06-2008', 'RCD', 'A robot who is responsible for cleaning a waste-covered Earth meets another robot and falls in love with her. Together, they set out on a journey that will alter the fate of mankind.', 'https://www2.theshit.me/movie/watch-wall-e-2008-free-19537', 'dummy/wall-e.png'),
(13, 'Zathura: A Space Adventure', '01:41', '06-11-2005', 'FSA', 'After their father is called into work, two young boys, Walter and Danny, are left in the care of their teenage sister, Lisa, and told they must stay inside. Walter and Danny, who anticipate a boring day, are shocked when they begin playing Zathura, a space-themed board game, which they realize has mystical powers when their house is shot into space. With the help of an astronaut, the boys attempt to return home.', 'https://www2.theshit.me/movie/watch-zathura-a-space-adventure-2005-free-17538', 'dummy/zathurs.png'),
(14, 'Wednesday', 'N/A m', '23-11-2022', 'HTM', 'Wednesday Addams is sent to Nevermore Academy, a bizarre boarding school where she attempts to master her psychic powers, stop a monstrous killing spree of the town citizens, and solve the supernatural mystery that affected her family 25 years ago — all while navigating her new relationships.', 'https://www2.theshit.me/tv/watch-wednesday-2022-free-90553', 'dummy/wednesday.png'),
(15, 'Big Hero 6', '01:42', '24-10-2014', 'RCD', 'The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.', 'https://www2.theshit.me/movie/watch-big-hero-6-2014-free-19664', 'dummy/big_hero_6.png'),
(16, 'Ghostbusters', '01:56', '14-07-2016', 'FSA', 'Following a ghost invasion of Manhattan, paranormal enthusiasts Erin Gilbert and Abby Yates, nuclear engineer Jillian Holtzmann, and subway worker Patty Tolan band together to stop the otherworldly threat.', 'https://www2.theshit.me/movie/watch-ghostbusters-2016-free-19431', 'dummy/ghostbusters.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(10) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Favorite` varchar(60) NOT NULL,
  `Messages` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `Name`, `Email`, `Favorite`, `Messages`) VALUES
(1, 'Ayushi mehta', 'amehta1110@rku.ac.in', 'wall-e', 'okaaaaaayyyyyyyyyyyyyyyyyyyy'),
(2, 'vibhuti chavda', 'vchavda2204@rku.ac.in', 'conjuring', 'not so good'),
(3, 'kalindi', 'kfichadiya11@rku.ac.in', 'ford vs ferrari', 'worst website ever..............🥱');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
