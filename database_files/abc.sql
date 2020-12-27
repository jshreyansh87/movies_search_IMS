-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 03:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `cast` varchar(255) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`cast`, `movie_id`) VALUES
('Akshay Kumar', 2),
('Akshay Kumar', 3),
('Akshay Kumar', 6),
('Akshay Kumar', 8),
('Annu Kapoor', 2),
('Anushka Sharma', 17),
('Arjun Rampal', 4),
('Ayushman Khurana', 18),
('Boman Irani', 9),
('Brie Larson', 14),
('Chris Evans', 11),
('Chris Evans', 12),
('Chris Hemsworth', 11),
('Chris Hemsworth', 12),
('Dilnaz Irani', 5),
('Domhnall Gleeson', 1),
('Gajraj Rao', 18),
('Gemma Chan', 14),
('Huma Qureshi', 2),
('Jackie Shroff', 3),
('Jacqueline Fernandez', 3),
('Jacqueline Fernandez', 4),
('Jake Gyllenhaal', 13),
('Joaquin Phoenix', 15),
('Jude Law ', 14),
('Kiara Advani', 6),
('Leonardo DiCaprio', 1),
('Manoj BAjpayee', 5),
('Mrunal Thakur', 10),
('Neena Gupta', 18),
('Pankaj Tripathi', 10),
('Parambeer Chatterjee', 17),
('Parineeti Chopra', 8),
('Radhika Apte', 16),
('Rajkumar Rao', 5),
('Ranbeer Kapoor', 4),
('Rhitik Roshan', 10),
('Ritabhari Chakrabarty', 17),
('Robert De Niro', 15),
('Robert Downey Jr.', 11),
('Robert Downey Jr.', 12),
('Rohan Mehra', 16),
('Saif Aki Khan', 16),
('Saif Ali Khan', 16),
('Sanjana Sanghi', 7),
('Sanya Malhlotra', 18),
('Saurabh Shukla', 2),
('Siddharth Malhotra', 3),
('Sushant Singh Rajput', 7),
('Tom Hardy', 1),
('Tom Holland', 13),
('Vicky Kaushal', 9),
('Will Poulter', 1),
('Yami Gautam', 9),
('Zendaya', 13);

-- --------------------------------------------------------

--
-- Table structure for table `directed_by`
--

CREATE TABLE `directed_by` (
  `director_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directed_by`
--

INSERT INTO `directed_by` (`director_id`, `movie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `director_id` int(11) NOT NULL,
  `director_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`director_id`, `director_name`) VALUES
(1, 'Alejandro G. Iñárritu'),
(2, 'Subhash Kapoor'),
(3, 'Karan Malhotra'),
(4, 'Vikramjit Singh'),
(5, 'Hansal Mehta'),
(6, 'Raghava Lawrence'),
(7, 'Mukesh Chhabra'),
(8, 'Anurag Singh'),
(9, 'Aditya Dhar'),
(10, 'Vikas Bahl'),
(11, 'Russo Bothers'),
(12, 'Russo Bothers'),
(13, 'Jon Watts'),
(14, 'Anna Boden'),
(15, 'Todd Phillips'),
(19, 'Prosit Roy'),
(18, 'Gauravv K. Chawla'),
(20, 'Amit Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre` char(255) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre`, `movie_id`) VALUES
('Action', 3),
('Action', 13),
('Adventure', 1),
('Comedy', 18),
('Drama', 2),
('Drama', 5),
('Drama', 10),
('Drama', 15),
('Horror', 6),
('Horror', 17),
('Romance', 7),
('Sci-Fi', 11),
('Sci-Fi', 12),
('Sci-Fi', 14),
('Thriller', 4),
('Thriller', 16),
('War', 8),
('War', 9);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_type` varchar(15) NOT NULL,
  `synopsis` text DEFAULT NULL,
  `movie_image` varchar(200) DEFAULT NULL,
  `release_date` varchar(50) NOT NULL,
  `gross_income` varchar(255) DEFAULT NULL,
  `duration` time NOT NULL,
  `IMDB` varchar(4) DEFAULT NULL,
  `rotten_tomatoes` varchar(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_type`, `synopsis`, `movie_image`, `release_date`, `gross_income`, `duration`, `IMDB`, `rotten_tomatoes`) VALUES
(1, 'The Revenant', 'Hollywood', 'Hugh Glass, a legendary frontiersman, is severely injured in a bear attack and is abandoned by his hunting crew. He uses his skills to survive and take revenge on his companion who betrayed him.', 'therev.jpg', '26 February 2016', '183.64M', '02:36:00', '8.0', '78%'),
(2, 'Jolly LLB 2', 'Bollywood', 'A lawyer hoodwinks a woman to start his own law firm. However, he feels guilty and tries to make things right when he finds out that she commits suicide for failing to get justice for her husband.', 'jolly2.jpg', '10 February 2017', '183.3 Crore', '02:20:00', '7.2', '67%'),
(3, 'Brothers', 'Bollywood', 'David and Monty, estranged half-brothers, train in mixed martial arts to earn a livelihood. However, things change when the two are forced to compete against each other in the final tournament.', 'brothers.jpg', '14 August 2015', '123 Crore', '02:36:00', '6.5', '46%'),
(4, 'Roy', 'Bollywood', 'Kabir, a casanova film-maker, meets a London-based director, Ayesha, and falls in love with her. Elsewhere, an international art thief decides to be a better person after falling for a woman.', 'roy.jpg', '13 February 2015', '56 Crore', '02:28:00', '3.3', '30%'),
(5, 'Aligarh', 'Bollywood', 'Dr Shrinivas Ramchandra Siras, a professor on whom a sting operation was carried out to determine his sexual orientation, forms a special bond with the journalist who covers his story.', 'aligarh.jpg', '26 February 2016', '4.5 Crore', '01:54:00', '7.8', '100%'),
(6, 'Laxmi', 'Bollywood', 'Laxmii is a 2020 Indian Hindi-language comedy horror film written and directed by \r\n        Raghava Lawrence, marking his directorial debut in Hindi film industry.', 'laxmi.jpg', '9 November 2020', '4.5 Crore', '02:21:00', '2.3', '44%'),
(7, 'Dil Bechara', 'Bollywood', 'While struggling to survive, Manny and Kizie, who each have a terminal illness, fall in love with each other. Thereafter, the two try to spend the rest of 			their days being happy and staying positive.', 'dil.jpg', '24 July 2020 ', '4.5 Crore', '01:41:00', '7.9', '78%'),
(8, 'Kesari', 'Bollywood', 'Havildar Ishar Singh, a soldier in the British Indian Army, leads 21 Sikh soldiers in a fight against 10,000 Pashtun invaders. However, what unfolds is the greatest last stand wars of all time.', 'kesri.jpg', '21 March 2019', '207.9 Crores', '02:40:00', '7.8', '33%'),
(9, 'Uri', 'Bollywood', 'Major Vihaan Singh Shergill of the Indian Army leads a covert operation against a group of militants who attacked a base in Uri, Kashmir, in 2016 and killed many soldiers.', 'uri.jpg', '11 January 2019', '342.06 Crores', '02:18:00', '8.2', '62%'),
(10, 'Super 30', 'Bollywood', 'Anand Kumar, a mathematician from Patna, India, works his way through challenges towards success before running the Super 30 programme for IIT aspirants in Patna', 'super.jpg', '12 July 2019', '208 Crores', '02:35:00', '7.9', '31%'),
(11, 'Avengers:Endgame', 'Hollywood', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 'endgame.jpg', ' 26 April 2019', '279.8 crores USD', '03:02:00', '8.4', '94%'),
(12, 'Avengers:Infinity War', 'Hollywood', 'The Avengers must stop Thanos, an intergalactic warlord, from getting his hands on all the infinity stones. However, Thanos is prepared to go to any lengths to carry out his insane plan.', 'infitywar.jpg', '27 April 2018', '204.8 crores USD', '02:40:00', '8.4', '84%'),
(13, 'SpiderMan : Far From Home', 'Hollywood', 'As Spider-Man, a beloved superhero, Peter Parker faces four destructive elemental monsters while on holiday in Europe. Soon, he receives help from Mysterio, a fellow hero with mysterious origins.', 'far.jpg', ' 26 June 2019', '113 crores USD', '02:20:00', '7.5', '91%'),
(14, 'Captain Marvel', 'Hollywood', 'Amidst a mission, Vers, a Kree warrior, gets separated from her team and is stranded on Earth. However, her life takes an unusual turn after she teams up with Fury, a S.H.I.E.L.D. agent.', 'capmar.jpg', '8 March 2019', '112 crores USD', '02:05:00', '6.9', '79%'),
(15, 'Joker', 'Hollywood', 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he is part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', 'joker.jpg', '2 October 2019', '107 Crore USD', '02:02:00', '8.5', '68%'),
(18, 'Baazar', 'Bollywood', 'A small-town stock trader, Rizwan Ahmed, comes to Mumbai and gets employed by the successful Gujarati trader, Shakun Kothari. Everything seems to be going smooth until Rizwan hits a rough patch.', 'baazar.jpg', '26 October 2018', '4.5 Crore', '02:17:00', '6.6', '30%'),
(19, 'Pari', 'Bollywood', 'A kind-hearted man tries to help Rukhsana, a chained woman in a hut who is probably a victim of abuse. However, he soon realises that things are not as they appear to be.', 'pari.jpg', '26 October 2018', '4.5 Crore', '02:17:00', '6.6', '46%'),
(20, 'Badhaai Ho', 'Bollywood', 'Nakul, a 25-year-old man, is shocked to discover that his mother is pregnant. His struggle to come to terms with the news puts his relationship with his girlfriend, Renee, in jeopardy.', 'bh.jpg', '18 October 2018', '221.44crore', '02:04:00', '8', '92%');

-- --------------------------------------------------------

--
-- Table structure for table `produceded_by`
--

CREATE TABLE `produceded_by` (
  `production_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produceded_by`
--

INSERT INTO `produceded_by` (`production_id`, `movie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 2),
(7, 2),
(8, 6),
(9, 7),
(10, 8),
(11, 9),
(12, 10),
(13, 11),
(14, 12),
(15, 13),
(16, 14),
(16, 15),
(17, 16),
(18, 17);

-- --------------------------------------------------------

--
-- Table structure for table `production_house`
--

CREATE TABLE `production_house` (
  `production_id` int(11) NOT NULL,
  `house_name` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_house`
--

INSERT INTO `production_house` (`production_id`, `house_name`, `country`) VALUES
(1, 'Regency Enterprises', 'USA'),
(2, 'Fox Star Studios', 'India'),
(3, 'Hiroo Yash Johar,Karan Johar,Endemol India', 'India'),
(4, 'Divya Khosla Kumar, Bhushan Kumar, Krishan Kumar', 'India'),
(5, 'Sunil Lulla; Shailesh R Singh', 'India'),
(6, 'Karan Johar', 'India'),
(7, 'Ronie Screwvala', 'India'),
(8, 'Phantom Films', 'India'),
(9, 'Marvel Studios', 'USA'),
(10, 'Marvel Studios', 'USA'),
(11, 'Marvel Studios', 'USA'),
(12, 'Marvel Studios', 'USA'),
(13, 'Todd Phillips, Bradley Cooper', 'India'),
(14, ' Nikkhil Advani, Dheeraj Wadhawan,\r\nMonisha Advani,', 'India'),
(15, ' Nikkhil Advani, Dheeraj Wadhawan, Monisha Advanih', 'India'),
(16, 'Anushka Sharma, Karnesh Sharma', 'India'),
(17, 'Junglee Pictures', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `singer` varchar(255) NOT NULL,
  `song_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`singer`, `song_id`) VALUES
('A.R. Rehman', 9),
('Aditi Singh', 5),
('Ankit Tiwari', 6),
('Arijit Singh', 5),
('Jubin Nautyal', 1),
('Meet Bros', 2),
('Neeti Mohan', 1),
('Neeti Mohan', 3),
('Raja Hasan', 7),
('Romy', 13),
('Shreya Ghoshal', 15),
('Sonu Nigam', 3),
('Udit Narayan', 15),
('ViruSs', 8),
('Vishal Dadlani', 4),
('Vishal Dadlani', 16),
('Yasser Desai', 14);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `song_name`, `movie_id`) VALUES
(1, 'Bawara Mann', 2),
(2, 'Jolly Good Fellow', 2),
(3, 'Sapna Jahan', 3),
(4, 'Brothers Anthem', 3),
(5, 'Sooraj Duba Hai', 4),
(6, 'Tu Hai Ki Nahi', 4),
(7, 'Start Stop', 6),
(8, 'Bum Bhole', 6),
(9, 'Dil Bechara', 7),
(10, 'Friend Zone', 7),
(11, 'Teri Mitti', 8),
(12, 'Ve Maahi', 8),
(13, 'Challa', 9),
(14, 'Behe Chala', 9),
(15, 'Jugraafiya', 10),
(16, 'Paisa', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`cast`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `directed_by`
--
ALTER TABLE `directed_by`
  ADD PRIMARY KEY (`director_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `produceded_by`
--
ALTER TABLE `produceded_by`
  ADD PRIMARY KEY (`production_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `production_house`
--
ALTER TABLE `production_house`
  ADD PRIMARY KEY (`production_id`);

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`singer`,`song_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `production_house`
--
ALTER TABLE `production_house`
  MODIFY `production_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
