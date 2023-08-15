-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 12:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin g', 'admin@gmail.com', 'MTIzNDU=');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `category_name`, `reading_time`) VALUES
(7, 'Sports', '2023-07-16 15:31:19'),
(8, 'Entertainment', '2023-07-16 15:31:26'),
(9, 'Politics', '2023-07-16 15:31:34'),
(10, 'Technology', '2023-07-16 15:31:40'),
(11, 'Cinema', '2023-07-16 15:31:46'),
(12, 'General', '2023-07-16 15:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `myimage` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `nreading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `title`, `category_id`, `sub_category_id`, `myimage`, `description`, `nreading_time`) VALUES
(7, 'SC concerned over rising cheetah deaths, says it does not present good picture', 12, 14, 'cheetah.jpg', 'The death of 40 per cent of cheetah translocated from South Africa and Namibia to the Kuno National Park (KNP) in less than one year doesn’t present a “good picture”, the Supreme Court said on Thursday, and asked the Centre to not make it a prestige issue and explore the possibility of shifting the animals to different sanctuaries.\n\nA bench of Justices BR Gavai, JB Pardiwala and Prashant Kumar Mishra, while voicing concern over the deaths of the feline, asked the Centre to file a detailed affidavit explaining the reasons and remedial measures taken.\n\n“What is the problem? Is the climate not suited or is there anything else. Eight deaths have happened out of 20 Cheetah. Last week there were two deaths. Why don’t you explore the possibility of transferring them to different sanctuaries? Why are you making it a prestige issue? “Please take some positive steps. You should look for possibilities of transferring them to other sanctuaries irrespective of whatever state or government is instead of putting them at one place,” the bench told Additional Solicitor General Aishwarya Bhati, who was representing the Centre. Bhati said the Centre was about to file an affidavit explaining the reasons for the death of the animals and sought an opportunity to submit a detailed affidavit describing the circumstances surrounding each cheetah death.\n\nThe government law officer also said the authorities are exploring all possibilities including transferring them to other sanctuaries.\n\n“These eight deaths of cheetah are unfortunate but expected. There were several reasons behind these deaths,” the lawyer told the court.\n\nShe said it was a prestigious project for the country and authorities are taking all necessary steps to prevent more deaths.', '2023-07-20 20:12:02'),
(8, 'Automatic doors, 2 engines – Railways plans to standardise trains', 10, 13, 'train.jpg', 'Besides rolling out the Vande Bharat trainsets, the Centre is looking to make several changes over the next couple of years as it works towards standardising the rolling stock of Indian Railways, according to top sources in the government.\r\n\r\nAmong changes planned are automatic doors for all trains, anti-jerk couplers to rid passengers of sudden jerks, and two engines pulling a train to make it a low-cost alternative for semi-high speed trainsets.\r\n\r\nThe push-pull method of running trains — with engines at the back and another at the front — allows faster acceleration and deceleration, like Vande Bharat trains, which work on distributed power technology. This results in reducing journey time significantly while using the existing LHB coaches.\r\n\r\nA Mumbai-Delhi Rajdhani Express has been running since 2019 with reduced run time.\r\n\r\nSources said the Railway Board has decided to proliferate this, as a low-cost, semi-high speed train is capable of running upward of 160 km per hour.\r\n\r\nAlso read | Vikram Patel writes: What the Vande Bharat train says about the lopsided priorities of Indian modernity\r\nModifications are being worked out in WAP-5 and WAP-7 classes of engines, capable of such speeds, at the Chittaranjan Locomotive Works. One rake is expected to be rolled out by October.\r\n\r\nThe idea around standardisation of rolling stock is to reduce maintenance costs in future, sources said. \r\n\r\nThe Railways has already identified routes to roll out regular trains comprising only general coaches and non-AC sleeper class, to be deployed to meet excess demand in areas such as eastern UP, Bihar, West Bengal, Jharkhand, Chhattisgarh and others to connect with big cities such as Mumbai, Delhi, Bengaluru, Chennai, places in Kerala, among others.', '2023-07-20 19:50:53'),
(9, 'Deepika Padukone to give Project K event at San Diego Comic Con a miss for this ', 8, 11, 'deeps.jpg', 'Hollywood has hit a pause button as The Screen Actors Guild – American Federation of Television and Radio Artists (SAG- AFTRA) joined the strike by Writers Guild of America last week. It has now emerged that Bollywood actress Deepika Padukone, who is a member of SAG-AFTRA, will not be a part of Project K promotions at San Diego Comic Con to show her solidarity with those on strike.\r\n\r\nDeepika had joined the union when she made her English language film debut as the female lead in XXX: The Return of Xander Cage, which had Vin Diesel in the lead. With the SAG-AFTRA strike underway, the union has specified that actors cannot provide promotional or publicity services. That extends to appearances at conventions, such as the San Diego Comic Con. Accordingly, as a member of SAG-AFTRA and in line with their membership regulations, Deepika Padukone will not be attending Project K’s promotional activity at the San Diego Comic Con. However, other stars of the film, including Prabhas, Kamal Haasan and Amitabh Bachchan are expected to attend the event. SAG-AFTRA, a union representing about 160,000 Hollywood actors, officially went on strike after failing to reach a deal with Hollywood’s biggest studios. That means Hollywood actors (all of them who are members of the union) and writers are on strike simultaneously for the first time in more than 60 years, bringing most film and television productions in Hollywood to a halt.', '2023-07-20 19:54:54'),
(10, 'Asia Cup schedule: It could be 3 India-Pak games in 15 days', 7, 9, 'cricket.jpg', 'The fixtures of the Asia Cup was announced on Wednesday with the much anticipated India vs Pakistan encounter scheduled for September 2 in Kandy, Sri Lanka. The arch rivals, who’ve slotted in Group A alongside Nepal may possibly face each other three times in 15 days upon progression to the Super 4 and the final.\r\n\r\nThe tournament will begin on August 30 and run until September 17.\r\n\r\nThe six-team ODI tournament, which is a pre-cursor to the ICC World Cup will start in Multan where hosts Pakistan takes on Nepal.\r\nThe release shared by the Asian Cricket Council (ACC) president Jay Shah said Pakistan will remain A1 and India will remain A2 irrespective of their positions after the first round. If either of them does not qualify, Nepal will take their position. If India and Pakistan both qualify, they will face each other again at Colombo on September 10.\r\n\r\nSimilarly, in Group B, Sri Lanka will remain B1 and Bangladesh will remain B2. If any of these teams do not make it to Super 4s, Afghanistan will take their position.\r\n\r\nEarlier in June, The Asian Cricket Council had announced the schedule of the hybrid model Asia Cup with four matches being held in Pakistan, and the remaining nine matches being played in Sri Lanka.\r\n\r\nBilateral cricket has been a victim of strained political ties between India and Pakistan over the last decade and a half and the neighbouring countries now play each other only in multi-team events at neutral venues.', '2023-07-20 19:57:21'),
(11, 'Nayanthara have a great career in Hindi films post-Jawan?', 8, 11, 'nayanthara.jpg', 'The Lady Superstar of the South film industry, Nayanthara, is all set for her Hindi film debut with Jawan. But, will the film give her a great career ahead in Hindi films?\r\nSubmitted by Tellychakkar Team on Wed, 07/19/2023 - 19:41\r\nNayanthara is called the Lady Superstar of the South film industry. In the past, her few films have been dubbed and released in Hindi, but now, she is all set for a perfect Hindi movie debut with Jawan which stars Shah Rukh Khan as the male lead.\r\n\r\nA few days ago, Jawan Prevue was released, and Nayanthara was given a very good scope in it. Also, the makers released a solo poster featuring her.\r\nWell, her fans are excited about his Hindi film debut, but the question is will Nayanthara have a great career in Hindi films post-Jawan? We spoke to a few people about it, and here’s what they have to say…\r\n\r\nSameer: Nayanthara is a superstar in the South industry. She doesn’t need Hindi films to survive, so no one really cares about her career in the Hindi film industry.', '2023-07-21 20:08:20'),
(12, 'Mila Kunis birthday special: 8 things you didn\'t know about the actress', 8, 11, 'mila.jpg', 'Mila Kunis is celebrating her 40th birthday today, August 14. The actress is known for her power-packed performances in films like Max Payne, The Book of Eli, Oz the Great and Powerful, Four Good Days, and Luckiest Girl Alive, among several others. her most rememberable role was as Jackie Burkhart in That \'70s Show (1998). She was born to a Jewish family in Chernivtsi in Ukraine. However, in her family, she speaks Russian, not Ukrainian. She moved to Los Angeles in the year 1991. Mila Kunis is married to actor Ashton Kutcher and has two children. On the occasion of her birthday, we have listed down some of the most interesting facts about her, which we bet you didn\'t know. \r\n\r\n1. Her first acting job was in a Barbie commercial for a toy. However, this advertisement never went on-air.\r\n\r\n2. During the time when she was doing That \'70s Show, Mila Kunis, and her friend did sell shirts on the popular online shopping portal eBay which had Backstreet Boys prints on it to make a few bucks.', '2023-08-15 09:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `sub_category_name`, `reading_time`) VALUES
(8, 8, 'Hollywood', '2023-07-16 16:07:58'),
(9, 7, 'Cricket', '2023-07-16 16:08:06'),
(10, 8, 'Web series', '2023-07-16 16:08:47'),
(11, 8, 'Bollywood', '2023-07-16 16:09:16'),
(12, 10, 'Hacking', '2023-07-16 16:09:59'),
(13, 10, 'Artificial Intelligence', '2023-07-19 19:22:49'),
(14, 12, 'common', '2023-07-20 19:45:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
