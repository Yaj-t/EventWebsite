-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 09:13 AM
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
-- Database: `groupr`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `attendee_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `user_id`, `title`, `description`, `date`, `time`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 'Event 1', 'Description for Event 1', '2023-05-21', '10:00:00', 'Location 1', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(2, 1, 'Event 2', 'Description for Event 2', '2023-05-22', '11:30:00', 'Location 2', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(3, 1, 'Event 3', 'Description for Event 3', '2023-05-23', '15:45:00', 'Location 3', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(4, 1, 'Event 4', 'Description for Event 4', '2023-05-24', '09:15:00', 'Location 4', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(5, 1, 'Event 5', 'Description for Event 5', '2023-05-25', '14:00:00', 'Location 5', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(6, 1, 'Event 6', 'Description for Event 6', '2023-05-26', '18:30:00', 'Location 6', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(7, 1, 'Event 7', 'Description for Event 7', '2023-05-27', '12:45:00', 'Location 7', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(8, 1, 'Event 8', 'Description for Event 8', '2023-05-28', '16:20:00', 'Location 8', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(9, 1, 'Event 9', 'Description for Event 9', '2023-05-29', '08:10:00', 'Location 9', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(10, 1, 'Event 10', 'Description for Event 10', '2023-05-30', '13:00:00', 'Location 10', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(11, 1, 'Event 11', 'Description for Event 11', '2023-05-31', '17:30:00', 'Location 11', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(12, 1, 'Event 12', 'Description for Event 12', '2023-06-01', '11:45:00', 'Location 12', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(13, 1, 'Event 13', 'Description for Event 13', '2023-06-02', '14:20:00', 'Location 13', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(14, 1, 'Event 14', 'Description for Event 14', '2023-06-03', '10:10:00', 'Location 14', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(15, 1, 'Event 15', 'Description for Event 15', '2023-06-04', '15:30:00', 'Location 15', '2023-05-22 04:40:18', '2023-05-22 04:40:18'),
(16, 1, 'Event 1', 'Description for Event 1', '2023-05-22', '01:00:00', 'Location for Event 1', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(17, 1, 'Event 2', 'Description for Event 2', '2023-05-22', '04:00:00', 'Location for Event 2', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(18, 1, 'Event 3', 'Description for Event 3', '2023-05-22', '12:00:00', 'Location for Event 3', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(19, 1, 'Event 4', 'Description for Event 4', '2023-05-22', '10:00:00', 'Location for Event 4', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(20, 1, 'Event 5', 'Description for Event 5', '2023-05-22', '08:00:00', 'Location for Event 5', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(21, 1, 'Event 6', 'Description for Event 6', '2023-05-22', '12:00:00', 'Location for Event 6', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(22, 1, 'Event 7', 'Description for Event 7', '2023-05-22', '03:00:00', 'Location for Event 7', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(23, 1, 'Event 8', 'Description for Event 8', '2023-05-22', '07:00:00', 'Location for Event 8', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(24, 1, 'Event 9', 'Description for Event 9', '2023-05-22', '11:00:00', 'Location for Event 9', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(25, 1, 'Event 10', 'Description for Event 10', '2023-05-22', '05:00:00', 'Location for Event 10', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(26, 1, 'Event 11', 'Description for Event 11', '2023-05-22', '09:00:00', 'Location for Event 11', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(27, 1, 'Event 12', 'Description for Event 12', '2023-05-22', '02:00:00', 'Location for Event 12', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(28, 1, 'Event 13', 'Description for Event 13', '2023-05-22', '10:00:00', 'Location for Event 13', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(29, 1, 'Event 14', 'Description for Event 14', '2023-05-22', '01:00:00', 'Location for Event 14', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(30, 1, 'Event 15', 'Description for Event 15', '2023-05-22', '02:00:00', 'Location for Event 15', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(31, 1, 'Event 16', 'Description for Event 16', '2023-05-22', '10:00:00', 'Location for Event 16', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(32, 1, 'Event 17', 'Description for Event 17', '2023-05-22', '02:00:00', 'Location for Event 17', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(33, 1, 'Event 18', 'Description for Event 18', '2023-05-22', '05:00:00', 'Location for Event 18', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(34, 1, 'Event 19', 'Description for Event 19', '2023-05-22', '08:00:00', 'Location for Event 19', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(35, 1, 'Event 20', 'Description for Event 20', '2023-05-22', '07:00:00', 'Location for Event 20', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(36, 1, 'Event 1', 'Description for Event 1', '2023-05-23', '09:00:00', 'Location for Event 1', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(37, 1, 'Event 2', 'Description for Event 2', '2023-05-23', '01:00:00', 'Location for Event 2', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(38, 1, 'Event 3', 'Description for Event 3', '2023-05-23', '05:00:00', 'Location for Event 3', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(39, 1, 'Event 4', 'Description for Event 4', '2023-05-23', '11:00:00', 'Location for Event 4', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(40, 1, 'Event 5', 'Description for Event 5', '2023-05-23', '03:00:00', 'Location for Event 5', '2023-05-22 06:19:49', '2023-05-22 06:19:49'),
(47, 1, 'Event 1', 'Description for Event 1', '2023-05-22', '08:00:00', 'Location for Event 1', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(48, 1, 'Event 2', 'Description for Event 2', '2023-05-22', '08:00:00', 'Location for Event 2', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(49, 1, 'Event 3', 'Description for Event 3', '2023-05-22', '06:00:00', 'Location for Event 3', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(50, 1, 'Event 4', 'Description for Event 4', '2023-05-22', '07:00:00', 'Location for Event 4', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(51, 1, 'Event 5', 'Description for Event 5', '2023-05-22', '04:00:00', 'Location for Event 5', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(52, 1, 'Event 6', 'Description for Event 6', '2023-05-22', '11:00:00', 'Location for Event 6', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(53, 1, 'Event 7', 'Description for Event 7', '2023-05-22', '11:00:00', 'Location for Event 7', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(54, 1, 'Event 8', 'Description for Event 8', '2023-05-22', '10:00:00', 'Location for Event 8', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(55, 1, 'Event 9', 'Description for Event 9', '2023-05-22', '07:00:00', 'Location for Event 9', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(56, 1, 'Event 10', 'Description for Event 10', '2023-05-22', '11:00:00', 'Location for Event 10', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(57, 1, 'Event 11', 'Description for Event 11', '2023-05-22', '07:00:00', 'Location for Event 11', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(58, 1, 'Event 12', 'Description for Event 12', '2023-05-22', '05:00:00', 'Location for Event 12', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(59, 1, 'Event 13', 'Description for Event 13', '2023-05-22', '09:00:00', 'Location for Event 13', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(60, 1, 'Event 14', 'Description for Event 14', '2023-05-22', '04:00:00', 'Location for Event 14', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(61, 1, 'Event 15', 'Description for Event 15', '2023-05-22', '07:00:00', 'Location for Event 15', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(62, 1, 'Event 16', 'Description for Event 16', '2023-05-22', '12:00:00', 'Location for Event 16', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(63, 1, 'Event 17', 'Description for Event 17', '2023-05-22', '06:00:00', 'Location for Event 17', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(64, 1, 'Event 18', 'Description for Event 18', '2023-05-22', '02:00:00', 'Location for Event 18', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(65, 1, 'Event 19', 'Description for Event 19', '2023-05-22', '08:00:00', 'Location for Event 19', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(66, 1, 'Event 20', 'Description for Event 20', '2023-05-22', '01:00:00', 'Location for Event 20', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(67, 1, 'Event 1', 'Description for Event 1', '2023-05-23', '01:00:00', 'Location for Event 1', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(68, 1, 'Event 2', 'Description for Event 2', '2023-05-23', '03:00:00', 'Location for Event 2', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(69, 1, 'Event 3', 'Description for Event 3', '2023-05-23', '05:00:00', 'Location for Event 3', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(70, 1, 'Event 4', 'Description for Event 4', '2023-05-23', '03:00:00', 'Location for Event 4', '2023-05-22 06:20:08', '2023-05-22 06:20:08'),
(71, 1, 'Event 5', 'Description for Event 5', '2023-05-23', '06:00:00', 'Location for Event 5', '2023-05-22 06:20:08', '2023-05-22 06:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'dummy', 'dummy@gmail.com', '$2y$10$49YV.mR7/OeRrdHWsoDhCetozTEj1d5CN79diC8BlBvNc7W.xp0Gm', '2023-05-22 05:26:04', '2023-05-22 05:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`attendee_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `attendee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendees`
--
ALTER TABLE `attendees`
  ADD CONSTRAINT `attendees_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `attendees_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
