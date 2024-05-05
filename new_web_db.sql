-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 08:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities_1`
--

CREATE TABLE `amenities_1` (
  `heading` varchar(100) NOT NULL,
  `paragraph` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amenities_1`
--

INSERT INTO `amenities_1` (`heading`, `paragraph`) VALUES
('Amenities', 'odrej Connaught One Delhi with a brand new ambiance To complete the experience, this new Godrej project in New Delhi brings its premium range of modern amenities and An active lifestyle, where you get a complete living experience with a gym, spa, clubhouse, fitness center, jogging track, party room and much more.');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_details`
--

CREATE TABLE `amenities_details` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `post_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amenities_details`
--

INSERT INTO `amenities_details` (`id`, `title`, `post_image`) VALUES
(5, 'jogging track', 'jogging.png'),
(6, 'Party lawn', '1714556299grass.png'),
(7, 'Small futsal court', '1714556454futsal.png'),
(8, 'Tennis', '1714556535tennis.png'),
(9, 'Multi-Purpose Hall', '1714556767city-hall.png'),
(10, 'Net Cricket', '1714556892cricket.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `title` varchar(200) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `slider_1` varchar(200) NOT NULL,
  `slider_2` varchar(200) NOT NULL,
  `slider_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`title`, `sub_title`, `slider_1`, `slider_2`, `slider_3`) VALUES
('GODREJ CONNAUGHT ONE', 'CONNAUGHT PLACE, DELHI', 'Untitled (1).png', '2.png', 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `email_id` varchar(100) NOT NULL,
  `phone_n` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`email_id`, `phone_n`, `address`) VALUES
('enquiry.realestates@gmail.com', '+91-9212306116', 'Connaught Place New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Is it luxury housing?', 'Yes, it is going to be one of the top luxury housi'),
(2, 'What kind of amenities does it offer?', 'You will find all types of modern amenities where '),
(3, 'Is it close to the metro station?', 'Metro station Patel Chowk, Janpath is 6 Min drive.');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer`) VALUES
('@godrejoneconnaught.in');

-- --------------------------------------------------------

--
-- Table structure for table `gellery_section`
--

CREATE TABLE `gellery_section` (
  `heading` varchar(200) NOT NULL,
  `paragraph` varchar(800) NOT NULL,
  `slider_1` varchar(100) NOT NULL,
  `slider_2` varchar(100) NOT NULL,
  `slider_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gellery_section`
--

INSERT INTO `gellery_section` (`heading`, `paragraph`, `slider_1`, `slider_2`, `slider_3`) VALUES
('Discover the high luxury & best comfort in Godrej Connaught One', 'Through its structure, Godrej Connaught One has ensured that every family that comes into the condominium stays in absolute peace for life. Yes, Godrej Connaught One has an RCC frame structure that conforms to Seismic Zone II. The reason is simple: when it comes to your familyï¿½s safety, we simply donï¿½t compromise. This aspect is also reflected in the way we provide high-security facilities for your home.', 'yoga.png', 'Untitled 1.png', 'Untitled (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `menu`) VALUES
(1, 'OVERVIEW'),
(4, 'PRICES'),
(5, 'AMENITIES'),
(6, 'GALLERY'),
(7, 'LOCALITIES'),
(8, 'FAQ'),
(9, 'CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `localities_1`
--

CREATE TABLE `localities_1` (
  `heading` varchar(100) NOT NULL,
  `paragraph` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `localities_1`
--

INSERT INTO `localities_1` (`heading`, `paragraph`) VALUES
('Godrej Connaught Place Delhi - Understand It Better Here', 'Much attention is paid to green to create an ecological environment, and to this end, dense greenery, water\r\n            bodies, air-purifying plants, and more are added to the Godrej Connaught Place site so that residents can\r\n            always drink fresh air. A unique address to fulfill the dream life where everything is well executed here to\r\n            establish the premium lifestyle in the heart of New Delhi.');

-- --------------------------------------------------------

--
-- Table structure for table `localities_details`
--

CREATE TABLE `localities_details` (
  `id` int(11) NOT NULL,
  `education` varchar(50) NOT NULL,
  `transport` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `hotel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `localities_details`
--

INSERT INTO `localities_details` (`id`, `education`, `transport`, `hospital`, `hotel`) VALUES
(1, 'Modern School', 'Rajiv Chowk Metro', 'Ram Manohar Lohia Hospital', 'The Park'),
(3, 'St. Columbus School', 'Barakhamba Road Metro', 'Delhi Heart & Lung Institute', 'The Lalit'),
(4, 'Bhartiya Vidya Bhavan', 'New Delhi Railway Station', 'Sir Ganga Ram Hospital', ' Hotel The Royal Plaza'),
(5, 'British Council Library', 'Delhi International Hospital', ' BLK Hospital', 'Le Meridien');

-- --------------------------------------------------------

--
-- Table structure for table `location_map`
--

CREATE TABLE `location_map` (
  `heading` varchar(100) NOT NULL,
  `location_map` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location_map`
--

INSERT INTO `location_map` (`heading`, `location_map`) VALUES
('Godrej Connaught One Delhi Location Map', 'location.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo`) VALUES
('Godrej_Logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `overview_1`
--

CREATE TABLE `overview_1` (
  `heading` varchar(200) NOT NULL,
  `paragraph` varchar(1000) NOT NULL,
  `background` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `overview_1`
--

INSERT INTO `overview_1` (`heading`, `paragraph`, `background`) VALUES
('Godrej Connaught Place Delhi \r\n', 'Exclusive housing welcomes the ultra modern families to come and experience the life changing space where it brings high rising towers to capture the city’s bigger and uninterrupted view from the balcony.\r\n\r\nPerfect merge of 3 & 4 BHK apartments based on the new plan to have optimum use of the space in terms of ventilated kitchen, wide balcony, smart dining area, sun filled bedrooms and lots more to get a complete living space.\r\n', 'price_background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `overview_2`
--

CREATE TABLE `overview_2` (
  `id` int(11) NOT NULL,
  `overview_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `overview_2`
--

INSERT INTO `overview_2` (`id`, `overview_contact`) VALUES
(2, 'Payment Plan CLP'),
(3, 'Total Units 46 Only'),
(4, ' Sizes 2201 - 3097 Sq. Ft.'),
(5, 'Project Status Upcoming'),
(6, ' Site Area 1 Acre'),
(7, ' Site Area 1 Acre');

-- --------------------------------------------------------

--
-- Table structure for table `price_1`
--

CREATE TABLE `price_1` (
  `heading` varchar(200) NOT NULL,
  `pargraph` varchar(400) NOT NULL,
  `background` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price_1`
--

INSERT INTO `price_1` (`heading`, `pargraph`, `background`) VALUES
('Godrej Connaught Place Delhi - Price Range', 'Godrej Connaught One was designed with the needs of its occupants in mind and also to enhance their lifestyle. With an array of amenities ranging from a sparkling swimming pool, well-maintained fitness center, ice skating rink, reflecting pool, a meditation platform, and much more. The project is a self-sufficient world where you can enjoy life to the fullest!', 'WhatsApp Image 2024-05-01 at 3.30.29 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `price_details`
--

CREATE TABLE `price_details` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price_details`
--

INSERT INTO `price_details` (`id`, `product_name`, `product_size`, `product_price`) VALUES
(1, '3 BHK + U + PR', 'Unit Size 2201 Sq. Ft.', '₹ 17 Cr. Onwards'),
(5, '3 BHK + U + PR', 'Unit Size 2413 Sq. Ft.', '18 Cr. Onwards'),
(6, '3 BHK + U + PR', 'Unit Size 2636 Sq. Ft.', '20 Cr. Onwards'),
(7, '3 BHK + U + PR', 'Unit Size 2764 Sq. Ft.', '21 Cr. Onwards'),
(8, '3 BHK + U + PR', 'Unit Size 3097 Sq. Ft.', '23 Cr. Onwards');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `social_icon` varchar(100) NOT NULL,
  `social_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_icon`, `social_link`) VALUES
(1, 'facebook.png', 'https://www.facebook.com/'),
(2, 'instagram.png', 'https://www.instagram.com/'),
(3, 'twitter.png', 'https://twitter.com/?lang=en'),
(5, 'whatsapp.png', 'https://www.whatsapp.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(30, 'krish1', 'kumar', 'krish', 'da146e60619d5e8252c3c67597a566eb', 1),
(32, 'Ravi', 'kumar', 'ravi', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_meta`
--

CREATE TABLE `web_meta` (
  `web_title` varchar(100) NOT NULL,
  `meta_desc` varchar(900) NOT NULL,
  `meta_keywords` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_meta`
--

INSERT INTO `web_meta` (`web_title`, `meta_desc`, `meta_keywords`) VALUES
('Godrej Connaught One - Connaught Place', 'Godrej Connaught One Developed by Godrej Properties - 3 & 4 BHK Luxury Apartments in Connaught Place, Delhi with modern touch where everything is well planned and executed.', 'property, real estates');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities_details`
--
ALTER TABLE `amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localities_details`
--
ALTER TABLE `localities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overview_2`
--
ALTER TABLE `overview_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_details`
--
ALTER TABLE `price_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities_details`
--
ALTER TABLE `amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `overview_2`
--
ALTER TABLE `overview_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `price_details`
--
ALTER TABLE `price_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
