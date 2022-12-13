-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Dez 2022 um 17:12
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `todoliste`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `aufgaben`
--

CREATE TABLE `aufgaben` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Beschreibung` varchar(100) NOT NULL,
  `Erstellungsdatum` date NOT NULL,
  `Faelligkeitsdatum` date NOT NULL,
  `Ersteller` int(100) NOT NULL,
  `reiter` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `aufgaben_mitglieder`
--

CREATE TABLE `aufgaben_mitglieder` (
  `aufgaben_id` int(100) NOT NULL,
  `mitglieder_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitglieder`
--

CREATE TABLE `mitglieder` (
  `ID` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `mitglieder`
--

INSERT INTO `mitglieder` (`ID`, `Username`, `EMail`, `Password`) VALUES
(1, 'phgeie', 's4phgeie@uni-trier.de', '123');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projekte`
--

CREATE TABLE `projekte` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Beschreibung` varchar(100) NOT NULL,
  `Ersteller` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projekte_mitglieder`
--

CREATE TABLE `projekte_mitglieder` (
  `projekt_id` int(100) NOT NULL,
  `mitglieder_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reiter`
--

CREATE TABLE `reiter` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Beschreibung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `aufgaben`
--
ALTER TABLE `aufgaben`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `mitglieder`
--
ALTER TABLE `mitglieder`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `projekte`
--
ALTER TABLE `projekte`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `reiter`
--
ALTER TABLE `reiter`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `aufgaben`
--
ALTER TABLE `aufgaben`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `mitglieder`
--
ALTER TABLE `mitglieder`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `projekte`
--
ALTER TABLE `projekte`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `reiter`
--
ALTER TABLE `reiter`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
