-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 09:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ac_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `blog_author` varchar(50) NOT NULL,
  `blog_image` varchar(50) NOT NULL,
  `blog_date` varchar(50) NOT NULL,
  `blog_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_author`, `blog_image`, `blog_date`, `blog_description`) VALUES
(1, 'Welcome to AllanCorp.', 'Nsoro Allan', '1.jpg', '2023-08-06', 'AllanCorp is a dynamic and innovative company specializing in the realms of software development and web development. With a passion for crafting cutting-edge solutions, AllanCorp delivers top-notch software and web solutions tailored to meet the unique needs of its clients. Backed by a team of skilled professionals, the company\'s expertise extends from developing robust software applications that streamline business processes to creating captivating and user-centric websites that leave a lasting digital impression.\r\n<br><br>\r\nAt AllanCorp, creativity merges seamlessly with technical prowess, resulting in solutions that not only meet industry standards but also push boundaries. The company\'s commitment to excellence is reflected in its dedication to staying up-to-date with the latest technological trends, ensuring that clients receive forward-thinking solutions that stand out in today\'s competitive digital landscape. Whether it\'s coding intricate software or designing intuitive websites, AllanCorp is your trusted partner for transforming ideas into reality.'),
(2, 'Website Description', 'Nsoro Allan', '1.jpg', '2023-08-06', 'Welcome to \"TechConnect Hub\" – your go-to online platform for all things tech! Whether you\'re a seasoned tech enthusiast or just dipping your toes into the digital world, our website is designed to cater to your every need.\r\n<br><br>\r\nAt TechConnect Hub, we offer a diverse range of articles, tutorials, and reviews that cover the latest trends in technology, from smartphones and laptops to smart home devices and cutting-edge gadgets. Our team of expert writers is dedicated to providing you with clear, jargon-free explanations that make even the most complex tech concepts easy to understand.\r\n<br><br>\r\nLooking to make an informed purchase? Our in-depth product reviews will guide you through the pros and cons of various tech products, helping you make the right decision for your needs and budget. Additionally, our comprehensive tutorials will walk you through step-by-step processes, whether you\'re setting up a new device, troubleshooting an issue, or exploring advanced software features.');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `likes` int(20) NOT NULL,
  `dislikes` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `likes`, `dislikes`) VALUES
(1, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `gender`, `tel`) VALUES
(3, 'nsoro allan', 'allan', 'allancorp250@gmail.com', 'Male', '0798856624');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
