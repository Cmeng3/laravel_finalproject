-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2024 at 03:06 PM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL,
  `animal_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animal_id`, `animal_name`, `img`, `description`, `price`) VALUES
(1, 'Golden Retreiver', '/image/image-1.jpg', 'Fully check the body of the dog', '$20'),
(2, 'Shiba Inu', '/image/image-2.jpg', 'hello I am happy', '$30'),
(3, 'Alaskan Malamute', '/image/image-3.jpg', 'i love cat', '$50'),
(4, 'chow chow', '/image/image-4.jpg', 'i love all of you', '$50'),
(5, 'border-collie', '/image/image-5.jpg', 'Pitbull is my lovely friend', '$50'),
(6, 'samoyed', '/image/image-6.jpg', 'I am friendly', '$50');

-- --------------------------------------------------------

--
-- Table structure for table `animal1`
--

CREATE TABLE `animal1` (
  `animal1_id` int(10) NOT NULL,
  `human_trait` varchar(255) NOT NULL,
  `Animal_traits` varchar(255) NOT NULL,
  `meet_ivy` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal1`
--

INSERT INTO `animal1` (`animal1_id`, `human_trait`, `Animal_traits`, `meet_ivy`, `img`) VALUES
(1, 'Single, Reader', 'Cuddly, Intelligent', 'I love curling up with a good book, just like you.', '/image/cat1.png'),
(2, 'Lovely, cute', 'smart', 'I love walking and eating, but in my free time I always sleep. ', '/image/cat2.png'),
(3, 'Agressive', 'Fat,lazy', 'the playful companion who\'s always ready for a game of fetch and long walks.', '/image/cat3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_us_ID` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_us_ID`, `f_name`, `l_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sda', 'adasd', 'lokta@gmail.com', '23456789', 'swddvfbg', '2024-06-27 18:44:49', '2024-06-27 18:44:49'),
(2, 'sda', 'adasd', 'lokta@gmail.com', '23456789', 'swddvfbg', '2024-06-27 19:23:07', '2024-06-27 19:23:07'),
(3, 'hello', 'adasd', 'Ly.chimeng@gmail.com', '123', 'hajkdd', '2024-07-06 05:18:07', '2024-07-06 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(42, '2019_08_19_000000_create_failed_jobs_table', 1),
(43, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(44, '2024_06_14_035925_create_admin_table', 1),
(45, '2024_06_14_035951_create_users_table', 1),
(46, '2024_06_14_040000_create_contact_us_table', 1),
(47, '2024_06_14_040008_create_animals_table', 1),
(48, '2024_06_14_040015_create_reserved_table', 1),
(49, '2024_06_14_040023_create_pet_health_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `img`, `title`, `details`) VALUES
(1, '/image/image1.webp', 'Free Food for Pets in Need', 'Providing millions of dollars worth of pet food to vulnerable pets across the nation.'),
(2, '/image/image2.jpg', 'A World Class Pet Adoption Platform', 'Bringing rescue pets face-to-face with thousands of potential adopters every day. Finding a home for every pet (that needs one!)'),
(3, '/image/image3.jpg', '2024 Halloween Pet Costume Contest', 'The Friends of San Francisco Animal Care & Control is hosting an\n              online pet costume contest beginning October 1st!'),
(5, '/image/image4.jpg.webp', 'Vet quoted £500 to remove hamster\'s teeth', 'Lyra had problems with her teeth, which the vet said would cost between £450 and £500 to remove.\nBut Danielle, from Sarn, Bridgend, who is on benefits, could not afford the bill that she called \"ridiculous\".');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet_info`
--

CREATE TABLE `pet_info` (
  `pet_id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(20) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `health` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `animal_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_info`
--

INSERT INTO `pet_info` (`pet_id`, `img`, `name`, `age`, `nationality`, `health`, `gender`, `weight`, `title`, `details`, `animal_id`) VALUES
(1, 'pet1', 'Golden retriever', 3, 'Cambodia', 'good', 'female', 20, 'Dog vaccination for Golden retriever', 'These will include the core vaccines, which are administered in a series of three: at 6-, 12-, and 16 weeks old. The core vaccines include the DHLPP (distemper, hepatitis, leptospirosis, parvo, and parainfluenza).', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `img`, `title`, `detail`) VALUES
(1, '/image/dog1.jpg', 'SHOULD I CRATE TRAIN MY DOG?', 'It seems like an innocent enough question: Should I crate train my dog? Or is there another option? Well, do a deep dive into social media, and you’ll discover a lot of HOT opinions on this topic... '),
(2, '/image/dog2.webp', 'INCIDENTAL LEARNING IN DOGS', 'Do any of these scenarios sound familiar? You’re heading out to a restaurant to meet some friends. You’re on the phone with your mom talking over the plans and you accidentally say, “We’re going to grab dinner.” '),
(3, '/image/dog3.png', 'WHAT IS OLD DOG DISEASE? VESTIBULAR DISEASE IN SENIOR DOGS', 'A few weeks ago, we prepared to say goodbye to Cooper.\r\nThat Friday morning, he woke up, picked at his breakfast, and went outside. He seemed slow. Off. A bit disoriented. Then, over the course of the morning, he declined swiftly. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `telephone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'chimeng', 'Ly.chimeng@gmail.com', '23456789', '$2y$10$87lJlIWw7xPnUjWwqcOFtO1QoZFNgUeAf5bh2XvTGTEvQL7Xg4Ld6', '2024-07-05 22:17:07', '2024-07-05 22:17:07'),
(2, 'sda', 'ily@gmail.com', '1234567890', '$2y$10$r6K8HCHkHkKcTuQ8TAn6huWG0Z1S2mBkmnq3ZjBuRSF83Wr8zxwJ.', '2024-07-05 22:19:12', '2024-07-05 22:19:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `animal1`
--
ALTER TABLE `animal1`
  ADD PRIMARY KEY (`animal1_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_us_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `animal1`
--
ALTER TABLE `animal1`
  MODIFY `animal1_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_us_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pet_info`
--
ALTER TABLE `pet_info`
  MODIFY `pet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
