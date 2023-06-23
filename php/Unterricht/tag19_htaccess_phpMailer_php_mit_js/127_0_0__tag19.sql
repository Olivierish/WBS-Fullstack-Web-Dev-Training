-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jun 2023 um 13:08
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_php_web02`
--
CREATE DATABASE IF NOT EXISTS `db_php_web02` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_php_web02`;

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
(1, 'Masoud', 'Sonne braut jeder Mensch 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. \r\nAenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \r\nNulla consequat massa ', '2023-06-14 08:20:22', '2023-06-14 08:20:22'),
(2, 'Thomas', 'PHP macht spaß 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa', '2023-06-14 08:20:22', '2023-06-14 08:20:22'),
(3, 'Chris', 'JS ist leicht 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa', '2023-06-14 08:20:22', '2023-06-14 08:20:22'),
(4, 'Maria', 'HTML macht spass 4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa', '2023-06-14 08:20:22', '2023-06-14 08:20:22'),
(5, 'Zoia', 'Frische Luft tut gut 5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa', '2023-06-14 08:20:22', '2023-06-14 08:20:22'),
(6, 'Erik', 'Sehr schöne Seite 6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa', '2023-06-14 08:20:22', '2023-06-14 08:20:22'),
(7, 'Chris', 'Bald ist Pause', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:43:45', '2023-06-15 08:43:45'),
(8, 'Olivier', 'PHP ist einfach', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:48:57', '2023-06-15 08:48:57'),
(9, 'Masoud', 'SQL macht spass', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:49:11', '2023-06-15 08:49:11'),
(10, 'Ali', 'PHP ist gut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:49:24', '2023-06-15 08:49:24'),
(11, 'Thomas', 'html ist gut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:49:41', '2023-06-15 08:49:41'),
(12, 'Maria', 'CSS ist gut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:49:52', '2023-06-15 08:49:52'),
(13, 'Erik', 'Urlaub ist gut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:50:06', '2023-06-15 08:50:06'),
(14, 'Zoia', 'Sonne ist gut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:50:20', '2023-06-15 08:50:20'),
(15, 'Robert', 'Laufen tut gut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:50:46', '2023-06-15 08:50:46'),
(16, 'Kamyar', 'Strand ist gut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 08:51:01', '2023-06-15 08:51:01'),
(17, 'Chris', 'alles klappt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 09:25:08', '2023-06-15 09:25:08'),
(18, 'Boss', 'design follows function', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringill', '2023-06-15 12:16:17', '2023-06-15 12:16:17');

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
(2, 3, 'HTML macht spaß', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, ', '2023-06-20 06:26:00', '2023-06-20 06:26:00');

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
(3, 'Fischer', 'Helene', 'helene@helene.de', '$2y$10$LJu5O9s/nWW7YfHOCBRb/u3FQ1v8pHMjPEYfWotuh0ReffMsjrnK.', 'auch in Ketten kann man tanzen', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \r\nAenean commodo ligula eget dolor. Aenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \r\nNulla consequat massa ', '2023-06-19 09:26:25', '2023-06-21 10:01:11'),
(5, 'Boss', 'Hugo', 'hugo@hugo.de', '$2y$10$O/6Xtf9iiTplU3uVW9.QHuIUx2opCyxgReXt3mEzvNi3avujY7DEu', 'Jeder Tag ist ein schöner Tag', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo\n ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis\n dis parturient montes, nascetur ridiculus mus. Donec quam felis, \nultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa', '2023-06-21 10:16:35', '2023-06-21 11:31:40'),
(6, 'Merkel', 'Angela', 'merkel@merkel.de', '$2y$10$8OFsqY/Z2t/l.zpmW8gja.S2FCtC/qXBRsBUlvMvkq8DWGj5pfEAu', '', NULL, '2023-06-21 12:35:40', '2023-06-21 12:35:40');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT für Tabelle `entries_neu`
--
ALTER TABLE `entries_neu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
