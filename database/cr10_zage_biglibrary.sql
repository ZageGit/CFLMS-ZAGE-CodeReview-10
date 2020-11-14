-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 04:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_zage_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_zage_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_zage_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inv_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `auth_first_name` varchar(255) DEFAULT NULL,
  `auth_last_name` varchar(255) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `publish_date` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `pub_adress` varchar(255) DEFAULT NULL,
  `size` varchar(55) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inv_id`, `type`, `title`, `image`, `author`, `auth_first_name`, `auth_last_name`, `ISBN`, `short_description`, `publish_date`, `publisher`, `pub_adress`, `size`, `status`) VALUES
(13, 'dvd', 'Marvel Studios Avengers Endgame', 'https://m.media-amazon.com/images/I/91epzdXTTHL._AC_UY218_.jpg', 'Anthony Russo', 'Anthony', 'Russo', '9781234567897', 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. ... The film serves as a conclusion to the story of the MCU up t', '22.04.2019', 'Marvel Studios', 'Main Avenue 12, 1569 New York', 'small', 'available'),
(15, 'dvd', 'Avengers: Infinity War [dt./OV]', 'https://m.media-amazon.com/images/S/aplus-media/vc/5547601c-ed8a-4464-974c-d06a511d6332._CR0,0,300,400_PT0_SX300__.png', 'Anthony Russo', 'Anthony', 'Russo', '9788941235465', 'In the film, the Avengers and the Guardians of the Galaxy attempt to prevent Thanos from collecting the six all-powerful Infinity Stones as part of his quest to kill half of all life in the universe. The film was announced in October 2014 as Avengers: Inf', '23.04.2018', 'Marvel Studios', 'Main Avenue 12, 1569 New York', 'big', 'not available'),
(16, 'dvd', 'Avengers: Age of Ultron', 'https://m.media-amazon.com/images/M/MV5BMTM4OGJmNWMtOTM4Ni00NTE3LTg3MDItZmQxYjc4N2JhNmUxXkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_.jpg', 'Joss Whedon', 'Joss', 'hedon', '9788947645465', 'Summaries. When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and its up to Earths mightiest heroes to stop the villainous Ultron from enacting his terrible plan.', '23.04.2015', 'Marvel Studios', 'Main Avenue 12, 1569 New York', 'small', 'available'),
(17, 'book', '1984', 'https://images-na.ssl-images-amazon.com/images/I/51-ErD3F1JL.jpg', 'George Orwell', 'George', 'Orwell', '9788896345465', '1984 is a dystopian novella by George Orwell published in 1949, which follows the life of Winston Smith, a low ranking member of the Party, who is frustrated by the omnipresent eyes of the party, and its ominous ruler Big Brother. Big Brother controls', '08.06.1949', 'SeckerWarburg', 'Camerastreet 18, 4856 California', 'small', 'not available'),
(19, 'book', 'Don Quijote', 'https://images-na.ssl-images-amazon.com/images/I/51v9rYc-lgL._SX260_BO1,204,203,200_.jpg', 'Miguel de Cervantes', 'Miguel', 'de Cervantes', '9788871562465', 'The plot revolves around the adventures of a noble (hidalgo) from La Mancha named Alonso Quixano, who reads so many chivalric romances that he loses his mind and decides to become a knight-errant (caballero andante) to revive chivalry and serve his nation', '15.02.1605', 'Francisco de Robles', 'Ancientstreet 14. 8956 Babylon', 'small', 'available'),
(20, 'book', 'The Lord of the Rings', 'https://upload.wikimedia.org/wikipedia/en/thumb/e/e9/First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif/220px-First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif', ' J.R.R. Tolkien', 'J.R.R.', ' Tolkien', '9788589634465', 'The Lord of the Rings is the saga of a group of sometimes reluctant heroes who set forth to save their world from consummate evil. Its many worlds and creatures were drawn from Tolkiens extensive knowledge of philology and folklore.', '29.07.1954', 'GeorgeAllenUnwin', 'Bookstreet 25, 9648 Booklin', 'big', 'available'),
(21, 'cd', 'Eminem Marshall Mathers LP', 'https://images-na.ssl-images-amazon.com/images/I/816SvCUNM%2BL._SL1400_.jpg', 'Eminem', 'Marshal', 'Mathers', '9788585689465', 'The Marshall Mathers LP (stylized as THE MARSHALL MATHERS LP) is the third studio album by American rapper Eminem, released on May 23, 2000, by Aftermath Entertainment and Interscope Records. ... A transgressive work, it incorporates horrorcore and hardco', '23.05.2000', 'Aftermath', 'Gangstastreet 45, 4897 Los Angeles', 'small', 'not available'),
(22, 'cd', 'Ill Mindz Real recognize Real', 'https://images.genius.com/5c38e0567deab951397a4091157e4434.700x700x1.jpg', 'Def Ill, Digga Mindz', 'Ill', 'Mindz', '9788526789465', 'Knapp 6 Jahre und etliche Tracks und Konzerte später veröffentlichen die beiden das, von einigen, lang erwartete Album Real Recognize Real auf Boombokkz Recordz.', '15.06.2006', 'Boombokkz recordz', 'Rapstreet 15. 1318 Linz', 'small', 'available'),
(23, 'cd', 'Slim Shady LP', 'https://media1.jpc.de/image/w412/front/0/0606949028725.jpg', 'Eminem', 'Marshal', 'Mathers', '9788895239465', 'The Slim Shady LP is his first album with a major label after his first album Infinite was released on an independent label in 1996. ... Although many of the lyrics on the album are considered to be satirical, Eminem also depicts his frustrations of livin', '23.02.1999', 'Aftermath', 'Gangstastreet 45, 4897 Los Angeles', 'big', 'not available'),
(24, 'book', 'The Lord of the Rings the two towers', 'https://images-na.ssl-images-amazon.com/images/I/516452SFJQL._SX306_BO1,204,203,200_.jpg', 'J.R.R. Tolkien', 'J.R.R.', 'Tolkien', '9788895223645', 'The two towers between Mordor and Isengard, Barad-dûr and Orthanc, have united in their lust for destruction. The corrupt wizard Saruman, under the power of the Dark Lord Sauron, and his slimy assistant, Gríma Wormtongue, have created a grand Uruk-hai arm', '18.09.2012', 'GeorgeAllenUnwin', 'Bookstreet 25, 9648 Booklin', 'small', 'not available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
