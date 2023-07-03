-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Jun 2023 um 15:29
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
-- Datenbank: `ishimwe_seminar`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `seminar`
--

CREATE TABLE `seminar` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` varchar(50) NOT NULL,
  `von` date NOT NULL,
  `bis` date NOT NULL,
  `ort` varchar(50) NOT NULL,
  `preis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `seminar`
--

INSERT INTO `seminar` (`id`, `titel`, `von`, `bis`, `ort`, `preis`) VALUES
(1, 'PHP 8 - Fortgeschrittene Techniken', '2024-01-01', '2024-01-10', 'Hamburg', 1963),
(2, 'PHP für Fortgeschrittene - OOP mit PHP', '2024-02-08', '2024-02-15', 'Hamburg', 830),
(3, 'PHP - (Kompakttraining)', '2024-12-10', '2024-12-23', 'Hamburg', 1800),
(4, 'jQuery - Fortgeschrittene Techniken', '2024-09-10', '2024-09-30', 'Hamburg', 2000),
(7, 'React', '2024-03-10', '2024-03-30', 'Hamburg', 2500);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teilnehmer`
--

CREATE TABLE `teilnehmer` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `teilnehmer`
--

INSERT INTO `teilnehmer` (`id`, `lastname`, `firstname`, `telefon`, `email`, `sid`) VALUES
(1, 'olivier', 'ishimwe', '015456625845', 'oli@oli.com', 7),
(2, 'Natalia', 'Schmid', '+4912542114', 'snatalia@heroes.com', 3);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seminarId_von_seminar` (`sid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD CONSTRAINT `seminarId_von_seminar` FOREIGN KEY (`sid`) REFERENCES `seminar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
