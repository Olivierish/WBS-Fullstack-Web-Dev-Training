-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jun 2023 um 13:48
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_php_webfull02`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `entries`
--

CREATE TABLE `entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `entries`
--

INSERT INTO `entries` (`id`, `user_id`, `name`, `title`, `comment`, `created_at`, `updated_at`) VALUES
(1, 0, '', 'Great product 1', 'I am really impressed with the quality and performance of this product. Highly recommended!', '2023-06-14 08:17:57', '2023-06-14 08:17:57'),
(2, 0, '', 'Excellent service 2', 'The customer service provided by this company is outstanding. They were prompt in resolving my issue.\r\n', '2023-06-14 08:17:57', '2023-06-14 08:17:57'),
(3, 0, '', 'Impressive work 3', 'The team did an amazing job on this project. The attention to detail is commendable.', '2023-06-14 08:19:04', '2023-06-14 08:19:04'),
(4, 0, '', 'Satisfied customer 4', 'I have been using this service for a while now, and I am extremely satisfied. Keep up the good work!', '2023-06-14 08:19:04', '2023-06-14 08:19:04'),
(5, 0, '', 'Highly recommended 5', 'I would highly recommend this company to anyone looking for reliable and efficient solutions.', '2023-06-14 08:19:52', '2023-06-14 08:19:52'),
(6, 0, '', 'Quick response 6', 'I contacted their support team, and they responded quickly. Impressed with their promptness.', '2023-06-14 08:22:21', '2023-06-14 08:22:21'),
(7, 0, '', 'The product was in perfect state', 'I highly recommend it, I\'m really happy with the product ', '2023-06-15 08:45:51', '2023-06-15 08:45:51'),
(8, 0, '', 'Great Course', 'The course content was excellent and the instructor was very knowledgeable.', '2023-06-15 08:49:26', '2023-06-15 08:49:26'),
(9, 0, '', 'Highly Recommend', 'I found the course material to be comprehensive and well-structured. It greatly improved my skills.', '2023-06-15 08:50:14', '2023-06-15 08:50:14'),
(10, 0, '', 'Thoroughly Enjoyed', 'I thoroughly enjoyed the course. It exceeded my expectations and helped me advance my career.\r\n', '2023-06-15 08:51:14', '2023-06-15 08:51:14'),
(11, 0, '', 'Great Learning Experience', 'The course was engaging and interactive. The instructor kept us motivated throughout the program.', '2023-06-15 08:52:09', '2023-06-15 08:52:09'),
(12, 0, '', 'Informative and Practical', 'This course provided practical knowledge that I could immediately apply in my job. Highly valuable!\r\n', '2023-06-15 08:52:40', '2023-06-15 08:52:40'),
(13, 0, '', 'teteer', 'rtetert', '2023-06-19 09:38:33', '2023-06-19 09:38:33');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `entries_neu`
--

CREATE TABLE `entries_neu` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `entries_neu`
--

INSERT INTO `entries_neu` (`id`, `user_id`, `title`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'php idt einfach', 'This course provided practical knowledge that I could immediately apply in my job. Highly valuable!', '2023-06-20 06:26:26', '2023-06-20 06:26:26'),
(2, 2, 'HTML/CSS sind sehr interessant', 'This course provided practical knowledge that I could immediately apply in my job. Highly valuable!', '2023-06-20 06:26:26', '2023-06-20 06:26:26'),
(3, 1, 'Super course', 'I found the course material to be comprehensive and well-structured. It greatly improved my skills.\r\n', '2023-06-20 09:45:24', '2023-06-20 09:45:24');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nachname` varchar(250) NOT NULL,
  `vorname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `motto` varchar(250) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `nachname`, `vorname`, `email`, `password`, `motto`, `info`, `created_at`, `updated_at`) VALUES
(1, 'oliviero', 'ishimwe', 'oli@g.com', '$2y$10$2LpPRM7Bel6WcurllYiu1O9F0CUSNyssxToiT55uVxdtG8rHXrUcm', 'Carpe Diemaaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-06-19 07:51:57', '2023-06-20 08:47:14'),
(2, 'Hugo', 'Boss', 'hb@g.com', '$2y$10$NiIb9T2fHvU.sWjnCZfsEOBnBnxDB1cqer0XnFQm6K9b3bRIt3cu.', 'Stay curious', 'Pellentesque ac risus libero. Curabitur pretium sapien vitae.', '2023-06-19 08:02:09', '2023-06-19 08:02:09'),
(12, 'g', 'g', 'g', '$2y$10$jewMkI0Q9/V866DR.URnXe9NgFn.FqJOPWPt.7g1X6icU9B8euu3C', NULL, NULL, '2023-06-21 10:04:39', '2023-06-21 10:15:45');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `entries_neu`
--
ALTER TABLE `entries_neu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_von_users` (`user_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `entries_neu`
--
ALTER TABLE `entries_neu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `entries_neu`
--
ALTER TABLE `entries_neu`
  ADD CONSTRAINT `user_id_von_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
