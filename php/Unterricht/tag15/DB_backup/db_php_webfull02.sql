-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Jun 2023 um 11:58
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
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `entries`
--

INSERT INTO `entries` (`id`, `name`, `title`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'Great product 1', 'I am really impressed with the quality and performance of this product. Highly recommended!', '2023-06-14 08:17:57', '2023-06-14 08:17:57'),
(2, 'Jane Smith', 'Excellent service 2', 'The customer service provided by this company is outstanding. They were prompt in resolving my issue.\r\n', '2023-06-14 08:17:57', '2023-06-14 08:17:57'),
(3, 'David Diallo', 'Impressive work 3', 'The team did an amazing job on this project. The attention to detail is commendable.', '2023-06-14 08:19:04', '2023-06-14 08:19:04'),
(4, 'Sarah Davis', 'Satisfied customer 4', 'I have been using this service for a while now, and I am extremely satisfied. Keep up the good work!', '2023-06-14 08:19:04', '2023-06-14 08:19:04'),
(5, 'Michael Lee', 'Highly recommended 5', 'I would highly recommend this company to anyone looking for reliable and efficient solutions.', '2023-06-14 08:19:52', '2023-06-14 08:19:52'),
(6, 'Lina Al Nasser', 'Quick response 6', 'I contacted their support team, and they responded quickly. Impressed with their promptness.', '2023-06-14 08:22:21', '2023-06-14 08:22:21'),
(7, 'Pierre Dubois', 'The product was in perfect state', 'I highly recommend it, I\'m really happy with the product ', '2023-06-15 08:45:51', '2023-06-15 08:45:51'),
(8, 'John Doe', 'Great Course', 'The course content was excellent and the instructor was very knowledgeable.', '2023-06-15 08:49:26', '2023-06-15 08:49:26'),
(9, 'Maria Sakarova', 'Highly Recommend', 'I found the course material to be comprehensive and well-structured. It greatly improved my skills.', '2023-06-15 08:50:14', '2023-06-15 08:50:14'),
(10, 'Michael Uwimana', 'Thoroughly Enjoyed', 'I thoroughly enjoyed the course. It exceeded my expectations and helped me advance my career.\r\n', '2023-06-15 08:51:14', '2023-06-15 08:51:14'),
(11, 'Miriam Panav', 'Great Learning Experience', 'The course was engaging and interactive. The instructor kept us motivated throughout the program.', '2023-06-15 08:52:09', '2023-06-15 08:52:09'),
(12, 'David Johnson', 'Informative and Practical', 'This course provided practical knowledge that I could immediately apply in my job. Highly valuable!\r\n', '2023-06-15 08:52:40', '2023-06-15 08:52:40');

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
(1, 'Boss', 'Hugo', 'hugoboss@gmail.com', 'mypassword', 'Live and learn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-06-13 07:59:19', '2023-06-13 07:59:19'),
(2, 'Mustermann', 'Max', 'max.mustermann@example.com', 'pass123', 'Carpe Diem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2023-06-13 09:34:37', '2023-06-13 09:34:37'),
(3, 'Müller', 'Lisa', 'mueller@gmail.com', 'secret456', 'Stay curious', 'Pellentesque ac risus libero. Curabitur pretium sapien vitae.', '2023-06-13 09:34:37', '2023-06-13 09:34:37'),
(4, 'olivier', 'ishimwe', 'oli@gmx.de', '$2y$10$k.LZZomdhA88csFyEBEUO.fWjuL5x3lV5fF5yF5Kg0uHjyqZoqFHm', NULL, NULL, '2023-06-16 08:50:26', '2023-06-16 08:50:26');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
