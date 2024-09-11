-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 11. Sep 2024 um 10:50
-- Server-Version: 10.11.6-MariaDB-0+deb12u1
-- PHP-Version: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `c3billydb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `angebote`
--

CREATE TABLE `angebote` (
  `angebotid` int(11) NOT NULL,
  `angebotjahr` text NOT NULL,
  `kunde` text NOT NULL,
  `anrede` text NOT NULL,
  `datum` date NOT NULL,
  `referenz` text NOT NULL,
  `zahlungsbedingungen` text NOT NULL,
  `geserab` text NOT NULL,
  `gesprab` text NOT NULL,
  `netto` text NOT NULL,
  `mwst` text NOT NULL,
  `brutto` text NOT NULL,
  `pos1` text NOT NULL,
  `pos1anz` text NOT NULL,
  `pos1einheit` text NOT NULL,
  `pos1dsc` text NOT NULL,
  `pos1ep` text NOT NULL,
  `pos1erab` text NOT NULL,
  `pos1prab` text NOT NULL,
  `pos2` text NOT NULL,
  `pos2anz` text NOT NULL,
  `pos2einheit` text NOT NULL,
  `pos2dsc` text NOT NULL,
  `pos2ep` text NOT NULL,
  `pos2erab` text NOT NULL,
  `pos2prab` text NOT NULL,
  `pos3` text NOT NULL,
  `pos3anz` text NOT NULL,
  `pos3einheit` text NOT NULL,
  `pos3dsc` text NOT NULL,
  `pos3ep` text NOT NULL,
  `pos3erab` text NOT NULL,
  `pos3prab` text NOT NULL,
  `pos4` text NOT NULL,
  `pos4anz` text NOT NULL,
  `pos4einheit` text NOT NULL,
  `pos4dsc` text NOT NULL,
  `pos4ep` text NOT NULL,
  `pos4erab` text NOT NULL,
  `pos4prab` text NOT NULL,
  `pos5` text NOT NULL,
  `pos5anz` text NOT NULL,
  `pos5einheit` text NOT NULL,
  `pos5dsc` text NOT NULL,
  `pos5ep` text NOT NULL,
  `pos5erab` text NOT NULL,
  `pos5prab` text NOT NULL,
  `pos6` text NOT NULL,
  `pos6anz` text NOT NULL,
  `pos6einheit` text NOT NULL,
  `pos6dsc` text NOT NULL,
  `pos6ep` text NOT NULL,
  `pos6erab` text NOT NULL,
  `pos6prab` text NOT NULL,
  `pos7` text NOT NULL,
  `pos7anz` text NOT NULL,
  `pos7einheit` text NOT NULL,
  `pos7dsc` text NOT NULL,
  `pos7ep` text NOT NULL,
  `pos7erab` text NOT NULL,
  `pos7prab` text NOT NULL,
  `pos8` text NOT NULL,
  `pos8anz` text NOT NULL,
  `pos8einheit` text NOT NULL,
  `pos8dsc` text NOT NULL,
  `pos8ep` text NOT NULL,
  `pos8erab` text NOT NULL,
  `pos8prab` text NOT NULL,
  `pos9` text NOT NULL,
  `pos9anz` text NOT NULL,
  `pos9einheit` text NOT NULL,
  `pos9dsc` text NOT NULL,
  `pos9ep` text NOT NULL,
  `pos9erab` text NOT NULL,
  `pos9prab` text NOT NULL,
  `pos10` text NOT NULL,
  `pos10anz` text NOT NULL,
  `pos10einheit` text NOT NULL,
  `pos10dsc` text NOT NULL,
  `pos10ep` text NOT NULL,
  `pos10erab` text NOT NULL,
  `pos10prab` text NOT NULL,
  `pos11` text NOT NULL,
  `pos11anz` text NOT NULL,
  `pos11einheit` text NOT NULL,
  `pos11dsc` text NOT NULL,
  `pos11ep` text NOT NULL,
  `pos11erab` text NOT NULL,
  `pos11prab` text NOT NULL,
  `pos12` text NOT NULL,
  `pos12anz` text NOT NULL,
  `pos12einheit` text NOT NULL,
  `pos12dsc` text NOT NULL,
  `pos12ep` text NOT NULL,
  `pos12erab` text NOT NULL,
  `pos12prab` text NOT NULL,
  `pos13` text NOT NULL,
  `pos13anz` text NOT NULL,
  `pos13einheit` text NOT NULL,
  `pos13dsc` text NOT NULL,
  `pos13ep` text NOT NULL,
  `pos13erab` text NOT NULL,
  `pos13prab` text NOT NULL,
  `pos14` text NOT NULL,
  `pos14anz` text NOT NULL,
  `pos14einheit` text NOT NULL,
  `pos14dsc` text NOT NULL,
  `pos14ep` text NOT NULL,
  `pos14erab` text NOT NULL,
  `pos14prab` text NOT NULL,
  `pos15` text NOT NULL,
  `pos15anz` text NOT NULL,
  `pos15einheit` text NOT NULL,
  `pos15dsc` text NOT NULL,
  `pos15ep` text NOT NULL,
  `pos15erab` text NOT NULL,
  `pos15prab` text NOT NULL,
  `pos16` text NOT NULL,
  `pos16anz` text NOT NULL,
  `pos16einheit` text NOT NULL,
  `pos16dsc` text NOT NULL,
  `pos16ep` text NOT NULL,
  `pos16erab` text NOT NULL,
  `pos16prab` text NOT NULL,
  `pos17` text NOT NULL,
  `pos17anz` text NOT NULL,
  `pos17einheit` text NOT NULL,
  `pos17dsc` text NOT NULL,
  `pos17ep` text NOT NULL,
  `pos17erab` text NOT NULL,
  `pos17prab` text NOT NULL,
  `pos18` text NOT NULL,
  `pos18anz` text NOT NULL,
  `pos18einheit` text NOT NULL,
  `pos18dsc` text NOT NULL,
  `pos18ep` text NOT NULL,
  `pos18erab` text NOT NULL,
  `pos18prab` text NOT NULL,
  `pos19` text NOT NULL,
  `pos19anz` text NOT NULL,
  `pos19einheit` text NOT NULL,
  `pos19dsc` text NOT NULL,
  `pos19ep` text NOT NULL,
  `pos19erab` text NOT NULL,
  `pos19prab` text NOT NULL,
  `pos20` text NOT NULL,
  `pos20anz` text NOT NULL,
  `pos20einheit` text NOT NULL,
  `pos20dsc` text NOT NULL,
  `pos20ep` text NOT NULL,
  `pos20erab` text NOT NULL,
  `pos20prab` text NOT NULL,
  `pos21` text NOT NULL,
  `pos21anz` text NOT NULL,
  `pos21einheit` text NOT NULL,
  `pos21dsc` text NOT NULL,
  `pos21ep` text NOT NULL,
  `pos21erab` text NOT NULL,
  `pos21prab` text NOT NULL,
  `pos22` text NOT NULL,
  `pos22anz` text NOT NULL,
  `pos22einheit` text NOT NULL,
  `pos22dsc` text NOT NULL,
  `pos22ep` text NOT NULL,
  `pos22erab` text NOT NULL,
  `pos22prab` text NOT NULL,
  `pos23` text NOT NULL,
  `pos23anz` text NOT NULL,
  `pos23einheit` text NOT NULL,
  `pos23dsc` text NOT NULL,
  `pos23ep` text NOT NULL,
  `pos23erab` text NOT NULL,
  `pos23prab` text NOT NULL,
  `pos24` text NOT NULL,
  `pos24anz` text NOT NULL,
  `pos24einheit` text NOT NULL,
  `pos24dsc` text NOT NULL,
  `pos24ep` text NOT NULL,
  `pos24erab` text NOT NULL,
  `pos24prab` text NOT NULL,
  `pos25` text NOT NULL,
  `pos25anz` text NOT NULL,
  `pos25einheit` text NOT NULL,
  `pos25dsc` text NOT NULL,
  `pos25ep` text NOT NULL,
  `pos25erab` text NOT NULL,
  `pos25prab` text NOT NULL,
  `pos26` text NOT NULL,
  `pos26anz` text NOT NULL,
  `pos26einheit` text NOT NULL,
  `pos26dsc` text NOT NULL,
  `pos26ep` text NOT NULL,
  `pos26erab` text NOT NULL,
  `pos26prab` text NOT NULL,
  `pos27` text NOT NULL,
  `pos27anz` text NOT NULL,
  `pos27einheit` text NOT NULL,
  `pos27dsc` text NOT NULL,
  `pos27ep` text NOT NULL,
  `pos27erab` text NOT NULL,
  `pos27prab` text NOT NULL,
  `pos28` text NOT NULL,
  `pos28anz` text NOT NULL,
  `pos28einheit` text NOT NULL,
  `pos28dsc` text NOT NULL,
  `pos28ep` text NOT NULL,
  `pos28erab` text NOT NULL,
  `pos28prab` text NOT NULL,
  `pos29` text NOT NULL,
  `pos29anz` text NOT NULL,
  `pos29einheit` text NOT NULL,
  `pos29dsc` text NOT NULL,
  `pos29ep` text NOT NULL,
  `pos29erab` text NOT NULL,
  `pos29prab` text NOT NULL,
  `pos30` text NOT NULL,
  `pos30anz` text NOT NULL,
  `pos30einheit` text NOT NULL,
  `pos30dsc` text NOT NULL,
  `pos30ep` text NOT NULL,
  `pos30erab` text NOT NULL,
  `pos30prab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `angebote`
--

INSERT INTO `angebote` (`angebotid`, `angebotjahr`, `kunde`, `anrede`, `datum`, `referenz`, `zahlungsbedingungen`, `geserab`, `gesprab`, `netto`, `mwst`, `brutto`, `pos1`, `pos1anz`, `pos1einheit`, `pos1dsc`, `pos1ep`, `pos1erab`, `pos1prab`, `pos2`, `pos2anz`, `pos2einheit`, `pos2dsc`, `pos2ep`, `pos2erab`, `pos2prab`, `pos3`, `pos3anz`, `pos3einheit`, `pos3dsc`, `pos3ep`, `pos3erab`, `pos3prab`, `pos4`, `pos4anz`, `pos4einheit`, `pos4dsc`, `pos4ep`, `pos4erab`, `pos4prab`, `pos5`, `pos5anz`, `pos5einheit`, `pos5dsc`, `pos5ep`, `pos5erab`, `pos5prab`, `pos6`, `pos6anz`, `pos6einheit`, `pos6dsc`, `pos6ep`, `pos6erab`, `pos6prab`, `pos7`, `pos7anz`, `pos7einheit`, `pos7dsc`, `pos7ep`, `pos7erab`, `pos7prab`, `pos8`, `pos8anz`, `pos8einheit`, `pos8dsc`, `pos8ep`, `pos8erab`, `pos8prab`, `pos9`, `pos9anz`, `pos9einheit`, `pos9dsc`, `pos9ep`, `pos9erab`, `pos9prab`, `pos10`, `pos10anz`, `pos10einheit`, `pos10dsc`, `pos10ep`, `pos10erab`, `pos10prab`, `pos11`, `pos11anz`, `pos11einheit`, `pos11dsc`, `pos11ep`, `pos11erab`, `pos11prab`, `pos12`, `pos12anz`, `pos12einheit`, `pos12dsc`, `pos12ep`, `pos12erab`, `pos12prab`, `pos13`, `pos13anz`, `pos13einheit`, `pos13dsc`, `pos13ep`, `pos13erab`, `pos13prab`, `pos14`, `pos14anz`, `pos14einheit`, `pos14dsc`, `pos14ep`, `pos14erab`, `pos14prab`, `pos15`, `pos15anz`, `pos15einheit`, `pos15dsc`, `pos15ep`, `pos15erab`, `pos15prab`, `pos16`, `pos16anz`, `pos16einheit`, `pos16dsc`, `pos16ep`, `pos16erab`, `pos16prab`, `pos17`, `pos17anz`, `pos17einheit`, `pos17dsc`, `pos17ep`, `pos17erab`, `pos17prab`, `pos18`, `pos18anz`, `pos18einheit`, `pos18dsc`, `pos18ep`, `pos18erab`, `pos18prab`, `pos19`, `pos19anz`, `pos19einheit`, `pos19dsc`, `pos19ep`, `pos19erab`, `pos19prab`, `pos20`, `pos20anz`, `pos20einheit`, `pos20dsc`, `pos20ep`, `pos20erab`, `pos20prab`, `pos21`, `pos21anz`, `pos21einheit`, `pos21dsc`, `pos21ep`, `pos21erab`, `pos21prab`, `pos22`, `pos22anz`, `pos22einheit`, `pos22dsc`, `pos22ep`, `pos22erab`, `pos22prab`, `pos23`, `pos23anz`, `pos23einheit`, `pos23dsc`, `pos23ep`, `pos23erab`, `pos23prab`, `pos24`, `pos24anz`, `pos24einheit`, `pos24dsc`, `pos24ep`, `pos24erab`, `pos24prab`, `pos25`, `pos25anz`, `pos25einheit`, `pos25dsc`, `pos25ep`, `pos25erab`, `pos25prab`, `pos26`, `pos26anz`, `pos26einheit`, `pos26dsc`, `pos26ep`, `pos26erab`, `pos26prab`, `pos27`, `pos27anz`, `pos27einheit`, `pos27dsc`, `pos27ep`, `pos27erab`, `pos27prab`, `pos28`, `pos28anz`, `pos28einheit`, `pos28dsc`, `pos28ep`, `pos28erab`, `pos28prab`, `pos29`, `pos29anz`, `pos29einheit`, `pos29dsc`, `pos29ep`, `pos29erab`, `pos29prab`, `pos30`, `pos30anz`, `pos30einheit`, `pos30dsc`, `pos30ep`, `pos30erab`, `pos30prab`) VALUES
(26, '', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', 'piper', '2021-06-29', 'Referenzoi', 'Zahlio', '0', '1', '100,00 €', '19,00 €', '119,00 €', '2', '', '', '', '', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', 'asdf', '2021-06-30', 'Test', 'Testg', '0', '1', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '', 'Die M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-06', '', '', '', '', '200,00 €', '38,00 €', '238,00 €', '', '2', 'Lfm.', 'Designboden', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '', 'M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-06', '', '', '0', '1', '120,00 €', '22,80 €', '142,80 €', '', '2', 'Lfm.', 'PVC', '10', '0', '1', '', '5', 'Lfm.', 'Laminat', '20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, '', 'M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Anrede bla', '2021-08-07', 'Referenz bla', 'Zahlungsbedingungen bla', '0', '1', '430,00 €', '81,70 €', '511,70 €', '1', '33', 'Lfm.', 'Laminat', '10', '0', '1', '2', '5', 'Pal.', 'Kork', '20', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-13', '', '', '0', '1', '', '', '', '', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Test', '2021-08-13', 'Test', 'Test', '0', '1', '320,00 €', '60,80 €', '380,80 €', '1', '10', 'Lfm.', 'Teppich', '20', '0', '1', '2', '8', 'Pkg.', 'Laminat', '15', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', '', '2021-08-13', '', 'hghn', '0', '1', '20,00 €', '3,80 €', '23,80 €', '1', '1', 'Lfm.', 'Designboden', '10', '0', '1', '2', '1', 'Lfm.', 'Laminat', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-13', '', '', '0', '1', '0,00 €', '0,00 €', '0,00 €', '', '1', 'Lfm.', '', '', '0', '1', '', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '', 'Die M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-13', '', '', '0', '1', '20,00 €', '3,80 €', '23,80 €', '1', '1', 'Lfm.', 'Laminat', '10', '0', '1', '2', '1', 'Lfm.', 'Designboden', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '', 'Testfirmaa\r\n \r\nTeststraße 111\r\n55555 Testhausen', '', '2021-08-13', '', '', '0', '1', '', '', '', '1', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', '', '2021-08-13', '', '', '0', '1', '0,00 €', '0,00 €', '0,00 €', '1', '13', 'Lfm.', '', '', '0', '1', '2', '1', 'Lfm.', '', '', '0', '1', '3', '1', 'Lfm.', '', '', '0', '1', '4', '1', 'Lfm.', '', '', '0', '1', '5', '1', 'Lfm.', '', '', '0', '1', '6', '1', 'Lfm.', '', '', '0', '1', '7', '1', 'Lfm.', '', '', '0', '1', '8', '1', 'Lfm.', '', '', '0', '1', '9', '1', '', '', '', '0', '1', '10', '1', 'Lfm.', '', '', '0', '1', '11', '1', 'Lfm.', '', '', '0', '1', '12', '1', 'Lfm.', '', '', '0', '1', '13', '1', 'Lfm.', '', '', '0', '1', '14', '1', 'Lfm.', '', '', '0', '1', '16', '', 'Lfm.', '', '', '0', '1', '17', '1', 'Lfm.', '', '', '0', '1', '18', '1', 'Lfm.', '', '', '0', '1', '19', '1', 'Lfm.', '', '', '0', '1', '20', '1', 'Lfm.', '', '', '0', '1', '21', '1', 'Lfm.', '', '', '0', '1', '22', '1', 'Lfm.', '', '', '0', '1', '23', '1', 'Lfm.', '', '', '0', '1', '24', '1', 'Lfm.', '', '', '0', '1', '25', '1', 'Lfm.', '', '', '0', '1', '26', '1', 'Lfm.', '', '', '0', '1', '27', '1', 'Lfm.', '', '', '0', '1', '28', '1', 'Lfm.', '', '', '0', '1', '29', '1', 'Lfm.', '', '', '0', '1', '30', '14', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', ''),
(55, '', 'Testfirmaa\r\n \r\nTeststraße 111\r\n55555 Testhausen', '', '2021-08-13', '', '', '0', '1', '', '', '', '1', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-13', '', '', '0', '1', '0,00 €', '0,00 €', '0,00 €', '1', '1', 'Lfm.', '', '', '0', '1', '2', '1', 'Lfm.', '', '', '0', '1', '3', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, '', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-13', '', '', '0', '1', '', '', '', '1', '1', 'Lfm.', '', '', '0', '1', '2', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '2021', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Test', '2021-08-16', 'Test', 'Test', '0', '1', '10,00 €', '1,90 €', '11,90 €', '1', '1', 'Lfm.', 'Kork', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, '2022', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'Anrede', '2022-08-18', 'Referenz', 'Zahlung rein Netto', '0', '1', '682,00 €', '129,58 €', '811,58 €', '1', '10', 'Lfm.', 'Teppich', '56', '0', '0,95', '2', '15', 'Pkg.', 'Kork', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, '2022', 'Testfirmaa\r\n \r\nTeststraße 111\r\n55555 Testhausen', 'Test', '2022-08-25', 'Test', 'Test', '0', '1', '€10.00', '€1.90', '€11.90', '1', '1', 'Lfm.', 'CV Boden', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `artikel`
--

CREATE TABLE `artikel` (
  `artikelid` int(11) NOT NULL,
  `artikelname` text NOT NULL,
  `artikelbeschreibung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `artikel`
--

INSERT INTO `artikel` (`artikelid`, `artikelname`, `artikelbeschreibung`) VALUES
(1, 'Teppich', 'Test'),
(2, 'Designboden', ''),
(3, 'PVC', ''),
(4, 'Laminat', ''),
(5, 'Kork', ''),
(6, 'CV Boden', ''),
(7, 'Linoleum', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bausteine`
--

CREATE TABLE `bausteine` (
  `bausteinid` int(11) NOT NULL,
  `bausteinname` text NOT NULL,
  `bausteinbeschreibung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `bausteine`
--

INSERT INTO `bausteine` (`bausteinid`, `bausteinname`, `bausteinbeschreibung`) VALUES
(1, 'Erster Baustein', 'Schreib\r\nwas rein'),
(2, 'Testbaustein', 'Was weiß denn\r\n\r\nich');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `einstellungen`
--

CREATE TABLE `einstellungen` (
  `ID` int(11) NOT NULL,
  `mwst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `einstellungen`
--

INSERT INTO `einstellungen` (`ID`, `mwst`) VALUES
(1, '19');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden`
--

CREATE TABLE `kunden` (
  `id` int(11) NOT NULL,
  `firma` text NOT NULL,
  `anrede` text NOT NULL,
  `vorname` text NOT NULL,
  `nachname` text NOT NULL,
  `strasse` text NOT NULL,
  `plz` text NOT NULL,
  `ort` text NOT NULL,
  `tel` text NOT NULL,
  `fax` text NOT NULL,
  `mobil` text NOT NULL,
  `email` text NOT NULL,
  `ust` text NOT NULL,
  `steuernr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kunden`
--

INSERT INTO `kunden` (`id`, `firma`, `anrede`, `vorname`, `nachname`, `strasse`, `plz`, `ort`, `tel`, `fax`, `mobil`, `email`, `ust`, `steuernr`) VALUES
(1, '', 'Herr', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 'Herr', 'Max', 'Muster', 'Musterstraße 1', '12345', 'Musterstadt', '0123456789', '0123456798', '0213564987', 'max@must.er', 'DE165464', '132 564 9877987'),
(3, 'Testfirmaa', 'Herr', '', '', 'Teststraße 111', '55555', 'Testhausen', '58645864641', '68496846', '49864+684', 'info@test.de', 'DE48658645864', '684986'),
(4, 'Die M.Wegers Raumgestaltung', 'Herr', 'Matthias', 'Wegers', 'Carlo-Mierendorff-Str. 39', '64665', 'Alsbach-Hähnlein', '06257 - 2852', '06257 - 61541', '0151 - 58701126', 'info@mwegers.de', 'DE123456789', '000 111 12345'),
(5, 'Lacosta Imperium', 'Herr', 'Jonas', 'Wegers', 'Carlo-Mierendorff-Str. 39', '64665', 'Alsbach-Hähnlein', '01805 - 4646', '', '', 'jonas@rühl-imperium.de', '', ''),
(6, 'Friends GmbH', 'Herr', 'Chandler', 'Bing', 'Central Perk', '08159', 'New York', '01850 4646', '', '', 'chandler@bing.com', '', ''),
(7, 'Test', 'Herr', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Testio', 'Herr', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Schmidt', 'Herr', 'Müller', 'Meier', 'Müllerweg 3', '13456', 'Meierhausen', '01234 - 56789', '01234 - 567890', '0171 - 7171717', 'mullermeier@schmidt.de', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rechnungen`
--

CREATE TABLE `rechnungen` (
  `rechnungid` int(11) NOT NULL,
  `rechnungjahr` text NOT NULL,
  `bezahlt` text NOT NULL,
  `kunde` text NOT NULL,
  `anrede` text NOT NULL,
  `datum` date NOT NULL,
  `zahlungsziel` date NOT NULL,
  `referenz` text NOT NULL,
  `zahlungsbedingungen` text NOT NULL,
  `geserab` text NOT NULL,
  `gesprab` text NOT NULL,
  `netto` text NOT NULL,
  `mwst` text NOT NULL,
  `brutto` text NOT NULL,
  `offen` text NOT NULL,
  `gezahlt` text NOT NULL,
  `pos1` text NOT NULL,
  `pos1anz` text NOT NULL,
  `pos1einheit` text NOT NULL,
  `pos1dsc` text NOT NULL,
  `pos1ep` text NOT NULL,
  `pos1erab` text NOT NULL,
  `pos1prab` text NOT NULL,
  `pos2` text NOT NULL,
  `pos2anz` text NOT NULL,
  `pos2einheit` text NOT NULL,
  `pos2dsc` text NOT NULL,
  `pos2ep` text NOT NULL,
  `pos2erab` text NOT NULL,
  `pos2prab` text NOT NULL,
  `pos3` text NOT NULL,
  `pos3anz` text NOT NULL,
  `pos3einheit` text NOT NULL,
  `pos3dsc` text NOT NULL,
  `pos3ep` text NOT NULL,
  `pos3erab` text NOT NULL,
  `pos3prab` text NOT NULL,
  `pos4` text NOT NULL,
  `pos4anz` text NOT NULL,
  `pos4einheit` text NOT NULL,
  `pos4dsc` text NOT NULL,
  `pos4ep` text NOT NULL,
  `pos4erab` text NOT NULL,
  `pos4prab` text NOT NULL,
  `pos5` text NOT NULL,
  `pos5anz` text NOT NULL,
  `pos5einheit` text NOT NULL,
  `pos5dsc` text NOT NULL,
  `pos5ep` text NOT NULL,
  `pos5erab` text NOT NULL,
  `pos5prab` text NOT NULL,
  `pos6` text NOT NULL,
  `pos6anz` text NOT NULL,
  `pos6einheit` text NOT NULL,
  `pos6dsc` text NOT NULL,
  `pos6ep` text NOT NULL,
  `pos6erab` text NOT NULL,
  `pos6prab` text NOT NULL,
  `pos7` text NOT NULL,
  `pos7anz` text NOT NULL,
  `pos7einheit` text NOT NULL,
  `pos7dsc` text NOT NULL,
  `pos7ep` text NOT NULL,
  `pos7erab` text NOT NULL,
  `pos7prab` text NOT NULL,
  `pos8` text NOT NULL,
  `pos8anz` text NOT NULL,
  `pos8einheit` text NOT NULL,
  `pos8dsc` text NOT NULL,
  `pos8ep` text NOT NULL,
  `pos8erab` text NOT NULL,
  `pos8prab` text NOT NULL,
  `pos9` text NOT NULL,
  `pos9anz` text NOT NULL,
  `pos9einheit` text NOT NULL,
  `pos9dsc` text NOT NULL,
  `pos9ep` text NOT NULL,
  `pos9erab` text NOT NULL,
  `pos9prab` text NOT NULL,
  `pos10` text NOT NULL,
  `pos10anz` text NOT NULL,
  `pos10einheit` text NOT NULL,
  `pos10dsc` text NOT NULL,
  `pos10ep` text NOT NULL,
  `pos10erab` text NOT NULL,
  `pos10prab` text NOT NULL,
  `pos11` text NOT NULL,
  `pos11anz` text NOT NULL,
  `pos11einheit` text NOT NULL,
  `pos11dsc` text NOT NULL,
  `pos11ep` text NOT NULL,
  `pos11erab` text NOT NULL,
  `pos11prab` text NOT NULL,
  `pos12` text NOT NULL,
  `pos12anz` text NOT NULL,
  `pos12einheit` text NOT NULL,
  `pos12dsc` text NOT NULL,
  `pos12ep` text NOT NULL,
  `pos12erab` text NOT NULL,
  `pos12prab` text NOT NULL,
  `pos13` text NOT NULL,
  `pos13anz` text NOT NULL,
  `pos13einheit` text NOT NULL,
  `pos13dsc` text NOT NULL,
  `pos13ep` text NOT NULL,
  `pos13erab` text NOT NULL,
  `pos13prab` text NOT NULL,
  `pos14` text NOT NULL,
  `pos14anz` text NOT NULL,
  `pos14einheit` text NOT NULL,
  `pos14dsc` text NOT NULL,
  `pos14ep` text NOT NULL,
  `pos14erab` text NOT NULL,
  `pos14prab` text NOT NULL,
  `pos15` text NOT NULL,
  `pos15anz` text NOT NULL,
  `pos15einheit` text NOT NULL,
  `pos15dsc` text NOT NULL,
  `pos15ep` text NOT NULL,
  `pos15erab` text NOT NULL,
  `pos15prab` text NOT NULL,
  `pos16` text NOT NULL,
  `pos16anz` text NOT NULL,
  `pos16einheit` text NOT NULL,
  `pos16dsc` text NOT NULL,
  `pos16ep` text NOT NULL,
  `pos16erab` text NOT NULL,
  `pos16prab` text NOT NULL,
  `pos17` text NOT NULL,
  `pos17anz` text NOT NULL,
  `pos17einheit` text NOT NULL,
  `pos17dsc` text NOT NULL,
  `pos17ep` text NOT NULL,
  `pos17erab` text NOT NULL,
  `pos17prab` text NOT NULL,
  `pos18` text NOT NULL,
  `pos18anz` text NOT NULL,
  `pos18einheit` text NOT NULL,
  `pos18dsc` text NOT NULL,
  `pos18ep` text NOT NULL,
  `pos18erab` text NOT NULL,
  `pos18prab` text NOT NULL,
  `pos19` text NOT NULL,
  `pos19anz` text NOT NULL,
  `pos19einheit` text NOT NULL,
  `pos19dsc` text NOT NULL,
  `pos19ep` text NOT NULL,
  `pos19erab` text NOT NULL,
  `pos19prab` text NOT NULL,
  `pos20` text NOT NULL,
  `pos20anz` text NOT NULL,
  `pos20einheit` text NOT NULL,
  `pos20dsc` text NOT NULL,
  `pos20ep` text NOT NULL,
  `pos20erab` text NOT NULL,
  `pos20prab` text NOT NULL,
  `pos21` text NOT NULL,
  `pos21anz` text NOT NULL,
  `pos21einheit` text NOT NULL,
  `pos21dsc` text NOT NULL,
  `pos21ep` text NOT NULL,
  `pos21erab` text NOT NULL,
  `pos21prab` text NOT NULL,
  `pos22` text NOT NULL,
  `pos22anz` text NOT NULL,
  `pos22einheit` text NOT NULL,
  `pos22dsc` text NOT NULL,
  `pos22ep` text NOT NULL,
  `pos22erab` text NOT NULL,
  `pos22prab` text NOT NULL,
  `pos23` text NOT NULL,
  `pos23anz` text NOT NULL,
  `pos23einheit` text NOT NULL,
  `pos23dsc` text NOT NULL,
  `pos23ep` text NOT NULL,
  `pos23erab` text NOT NULL,
  `pos23prab` text NOT NULL,
  `pos24` text NOT NULL,
  `pos24anz` text NOT NULL,
  `pos24einheit` text NOT NULL,
  `pos24dsc` text NOT NULL,
  `pos24ep` text NOT NULL,
  `pos24erab` text NOT NULL,
  `pos24prab` text NOT NULL,
  `pos25` text NOT NULL,
  `pos25anz` text NOT NULL,
  `pos25einheit` text NOT NULL,
  `pos25dsc` text NOT NULL,
  `pos25ep` text NOT NULL,
  `pos25erab` text NOT NULL,
  `pos25prab` text NOT NULL,
  `pos26` text NOT NULL,
  `pos26anz` text NOT NULL,
  `pos26einheit` text NOT NULL,
  `pos26dsc` text NOT NULL,
  `pos26ep` text NOT NULL,
  `pos26erab` text NOT NULL,
  `pos26prab` text NOT NULL,
  `pos27` text NOT NULL,
  `pos27anz` text NOT NULL,
  `pos27einheit` text NOT NULL,
  `pos27dsc` text NOT NULL,
  `pos27ep` text NOT NULL,
  `pos27erab` text NOT NULL,
  `pos27prab` text NOT NULL,
  `pos28` text NOT NULL,
  `pos28anz` text NOT NULL,
  `pos28einheit` text NOT NULL,
  `pos28dsc` text NOT NULL,
  `pos28ep` text NOT NULL,
  `pos28erab` text NOT NULL,
  `pos28prab` text NOT NULL,
  `pos29` text NOT NULL,
  `pos29anz` text NOT NULL,
  `pos29einheit` text NOT NULL,
  `pos29dsc` text NOT NULL,
  `pos29ep` text NOT NULL,
  `pos29erab` text NOT NULL,
  `pos29prab` text NOT NULL,
  `pos30` text NOT NULL,
  `pos30anz` text NOT NULL,
  `pos30einheit` text NOT NULL,
  `pos30dsc` text NOT NULL,
  `pos30ep` text NOT NULL,
  `pos30erab` text NOT NULL,
  `pos30prab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `rechnungen`
--

INSERT INTO `rechnungen` (`rechnungid`, `rechnungjahr`, `bezahlt`, `kunde`, `anrede`, `datum`, `zahlungsziel`, `referenz`, `zahlungsbedingungen`, `geserab`, `gesprab`, `netto`, `mwst`, `brutto`, `offen`, `gezahlt`, `pos1`, `pos1anz`, `pos1einheit`, `pos1dsc`, `pos1ep`, `pos1erab`, `pos1prab`, `pos2`, `pos2anz`, `pos2einheit`, `pos2dsc`, `pos2ep`, `pos2erab`, `pos2prab`, `pos3`, `pos3anz`, `pos3einheit`, `pos3dsc`, `pos3ep`, `pos3erab`, `pos3prab`, `pos4`, `pos4anz`, `pos4einheit`, `pos4dsc`, `pos4ep`, `pos4erab`, `pos4prab`, `pos5`, `pos5anz`, `pos5einheit`, `pos5dsc`, `pos5ep`, `pos5erab`, `pos5prab`, `pos6`, `pos6anz`, `pos6einheit`, `pos6dsc`, `pos6ep`, `pos6erab`, `pos6prab`, `pos7`, `pos7anz`, `pos7einheit`, `pos7dsc`, `pos7ep`, `pos7erab`, `pos7prab`, `pos8`, `pos8anz`, `pos8einheit`, `pos8dsc`, `pos8ep`, `pos8erab`, `pos8prab`, `pos9`, `pos9anz`, `pos9einheit`, `pos9dsc`, `pos9ep`, `pos9erab`, `pos9prab`, `pos10`, `pos10anz`, `pos10einheit`, `pos10dsc`, `pos10ep`, `pos10erab`, `pos10prab`, `pos11`, `pos11anz`, `pos11einheit`, `pos11dsc`, `pos11ep`, `pos11erab`, `pos11prab`, `pos12`, `pos12anz`, `pos12einheit`, `pos12dsc`, `pos12ep`, `pos12erab`, `pos12prab`, `pos13`, `pos13anz`, `pos13einheit`, `pos13dsc`, `pos13ep`, `pos13erab`, `pos13prab`, `pos14`, `pos14anz`, `pos14einheit`, `pos14dsc`, `pos14ep`, `pos14erab`, `pos14prab`, `pos15`, `pos15anz`, `pos15einheit`, `pos15dsc`, `pos15ep`, `pos15erab`, `pos15prab`, `pos16`, `pos16anz`, `pos16einheit`, `pos16dsc`, `pos16ep`, `pos16erab`, `pos16prab`, `pos17`, `pos17anz`, `pos17einheit`, `pos17dsc`, `pos17ep`, `pos17erab`, `pos17prab`, `pos18`, `pos18anz`, `pos18einheit`, `pos18dsc`, `pos18ep`, `pos18erab`, `pos18prab`, `pos19`, `pos19anz`, `pos19einheit`, `pos19dsc`, `pos19ep`, `pos19erab`, `pos19prab`, `pos20`, `pos20anz`, `pos20einheit`, `pos20dsc`, `pos20ep`, `pos20erab`, `pos20prab`, `pos21`, `pos21anz`, `pos21einheit`, `pos21dsc`, `pos21ep`, `pos21erab`, `pos21prab`, `pos22`, `pos22anz`, `pos22einheit`, `pos22dsc`, `pos22ep`, `pos22erab`, `pos22prab`, `pos23`, `pos23anz`, `pos23einheit`, `pos23dsc`, `pos23ep`, `pos23erab`, `pos23prab`, `pos24`, `pos24anz`, `pos24einheit`, `pos24dsc`, `pos24ep`, `pos24erab`, `pos24prab`, `pos25`, `pos25anz`, `pos25einheit`, `pos25dsc`, `pos25ep`, `pos25erab`, `pos25prab`, `pos26`, `pos26anz`, `pos26einheit`, `pos26dsc`, `pos26ep`, `pos26erab`, `pos26prab`, `pos27`, `pos27anz`, `pos27einheit`, `pos27dsc`, `pos27ep`, `pos27erab`, `pos27prab`, `pos28`, `pos28anz`, `pos28einheit`, `pos28dsc`, `pos28ep`, `pos28erab`, `pos28prab`, `pos29`, `pos29anz`, `pos29einheit`, `pos29dsc`, `pos29ep`, `pos29erab`, `pos29prab`, `pos30`, `pos30anz`, `pos30einheit`, `pos30dsc`, `pos30ep`, `pos30erab`, `pos30prab`) VALUES
(2, '', '1', 'sdf', 'sdf', '2021-08-13', '0000-00-00', 'Referenz bla 1', 'sdf', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '', '1', 'Lfm.', 'PVC', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '1', 'Test', 'Test', '2021-08-13', '0000-00-00', 'Test', 'Test', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '', '1', 'Lfm.', 'Test', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '1', 'Test', 'Test', '2021-08-13', '0000-00-00', 'Test', 'Test', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '', '1', 'Lfm.', 'Test', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '1', 'Test', 'Test', '2021-08-13', '0000-00-00', 'Test', 'Test', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '', '1', 'Lfm.', 'Test', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '1', 'M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Anrede bla', '2021-08-13', '0000-00-00', 'Referenz bla', 'dgf', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '', '1', 'Lfm.', 'Designboden', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '1', 'M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Anrede bla', '2021-08-13', '0000-00-00', 'Referenz bla', 'sdgf', '0', '1', '130,00 €', '24,70 €', '154,70 €', '', '', '1', '3', 'Lfm.', 'Laminat', '10', '0', '1', '2', '5', 'Pal.', 'Kork', '20', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '1', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-13', '0000-00-00', '', '', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '', '1', 'Lfm.', 'PVC', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '1', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', 'Test', '2021-08-13', '0000-00-00', 'Test', 'Skonto, nehm ich', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '', '1', 'Lfm.', 'Teppich', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', '1', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Test', '2021-08-13', '0000-00-00', 'Test', 'Test', '0', '1', '400,00 €', '76,00 €', '476,00 €', '', '', '1', '10', 'Pkg.', 'Designboden', '10', '0', '1', '2', '20', 'Lfm.', 'Teppich', '15', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '1', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', '', '2021-08-13', '0000-00-00', '', '', '0', '1', '0,00 €', '0,00 €', '0,00 €', '', '', '10', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '1', 'Lacosta Imperium\r\nJonas Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', '', '2021-08-13', '0000-00-00', '', '', '0', '1', '0,00 €', '0,00 €', '0,00 €', '', '', '1', '1', 'Lfm.', '', '', '0', '1', '2', '1', 'Lfm.', '', '', '0', '1', '3', '1', 'Lfm.', '', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '2022', '1', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', 'piper', '2022-08-16', '0000-00-00', 'Referenzoi', 'Zahlio', '0', '1', '0,00 €', '0,00 €', '0,00 €', '', '', '1', '', '', 'Teppich', '', '', '', '2', '1', '', 'Designboden', '', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '2022', '1', 'Die M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Anrede', '2022-08-17', '2022-08-24', 'Referenz', 'Zahlungsbedingungen', '0', '1', '5,00 €', '0,95 €', '5,95 €', '', '', '1', '1', 'Lfm.', 'Designboden', '5', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '2022', '1', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'Test', '2022-08-18', '2022-08-25', 'Test', 'gibts', '0', '1', '100,00 €', '19,00 €', '119,00 €', '', '', '1', '10', 'Lfm.', 'Teppich', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '2022', '1', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'df', '2022-08-18', '2022-08-18', 'dfg', '0', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '1', '1', 'Lfm.', 'Teppich', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '2022', '1', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'sdf', '2022-08-18', '2022-08-25', '0', '', '0', '1', '8.546,00 €', '1.623,74 €', '10.169,74 €', '', '', '1', '1', 'Lfm.', 'PVC', '8546', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '2022', '0', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'Test', '2022-08-18', '2022-08-25', 'Test', 'Test', '0', '1', '4,00 €', '0,76 €', '4,76 €', '', '', '1', '1', 'Lfm.', 'PVC', '4', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '2022', '0', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'Anrede', '2022-08-18', '2022-08-27', 'Referenz', 'Zahlung rein Netto', '0', '1', '682,00 €', '129,58 €', '811,58 €', '', '', '1', '10', 'Lfm.', 'Teppich', '56', '0', '0,95', '2', '15', 'Pkg.', 'Kork', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '2022', '0', 'Die M.Wegers Raumgestaltung\r\nMatthias Wegers\r\nCarlo-Mierendorff-Str. 39\r\n64665 Alsbach-Hähnlein', 'Test', '2022-08-19', '2022-08-19', 'Test', 'Test', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '6.5', '1', '1', 'Lfm.', 'Kork', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '2022', '0', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'Anrede', '2022-08-19', '2022-08-19', 'Referenz', 'Zahlung rein Netto', '0', '1', '682,00 €', '129,58 €', '811,58 €', '', '', '1', '10', 'Lfm.', 'Teppich', '56', '0', '0,95', '2', '15', 'Pkg.', 'Kork', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '2022', '0', 'Schmidt\r\nMüller Meier\r\nMüllerweg 3\r\n13456 Meierhausen', 'Anrede', '2022-08-25', '2022-08-25', 'Referenz', 'Zahlung rein Netto', '0', '1', '682,00 €', '129,58 €', '811,58 €', '', '', '1', '10', 'Lfm.', 'Teppich', '56', '0', '0,95', '2', '15', 'Pkg.', 'Kork', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '2022', '0', 'Friends GmbH\r\nChandler Bing\r\nCentral Perk\r\n08159 New York', 'Test', '2022-08-25', '2022-08-27', 'Test', 'Test', '0', '1', '10,00 €', '1,90 €', '11,90 €', '', '', '1', '1', 'Lfm.', 'Kork', '10', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '2022', '0', 'Testfirmaa\r\n \r\nTeststraße 111\r\n55555 Testhausen', 'Test', '2022-08-25', '2022-08-25', 'Test', 'Test', '0', '1', '100,00 €', '19,00 €', '119,00 €', '', '', '1', '1', 'Lfm.', 'CV Boden', '100', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `test`
--

CREATE TABLE `test` (
  `angebotid` int(11) NOT NULL,
  `firma` text NOT NULL,
  `anrede` text NOT NULL,
  `vorname` text NOT NULL,
  `nachname` text NOT NULL,
  `strasse` text NOT NULL,
  `plz` text NOT NULL,
  `ort` text NOT NULL,
  `tel` text NOT NULL,
  `fax` text NOT NULL,
  `mobil` text NOT NULL,
  `email` text NOT NULL,
  `ust` text NOT NULL,
  `steuernr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `test`
--

INSERT INTO `test` (`angebotid`, `firma`, `anrede`, `vorname`, `nachname`, `strasse`, `plz`, `ort`, `tel`, `fax`, `mobil`, `email`, `ust`, `steuernr`) VALUES
(1, 'M.Wegers Raumgestaltung', '', 'Matthias', 'Wegers', 'Carlo-Mierendorff-Str. 39', '64665', 'Alsbach-Hähnlein', '06257 - 28521', '06257 - 61541', '0151 - 58701126', 'info@mwegers.de', 'DE123456789', '000 111 12346'),
(2, '', 'Herr', 'Max', 'Muster', 'Musterstraße 1', '12345', 'Musterstadt', '0123456789', '0123456798', '0213564987', 'max@must.er', 'DE165464', '132 564 9877987'),
(3, 'Testfirmaa', 'Herr', '', '', 'Teststraße 111', '55555', 'Testhausen', '58645864641', '68496846', '49864+684', 'info@test.de', 'DE48658645864', '684986'),
(4, 'Die M.Wegers Raumgestaltung', 'Herr', 'Matthias', 'Wegers', 'Carlo-Mierendorff-Str. 39', '64665', 'Alsbach-Hähnlein', '06257 - 2852', '06257 - 61541', '0151 - 58701126', 'info@mwegers.de', 'DE123456789', '000 111 12345'),
(5, 'Lacosta Imperium', 'Herr', 'Jonas', 'Wegers', 'Carlo-Mierendorff-Str. 39', '64665', 'Alsbach-Hähnlein', '01805 - 4646', '', '', 'jonas@rühl-imperium.de', '', ''),
(6, 'Friends GmbH', 'Herr', 'Chandler', 'Bing', 'Central Perk', '08159', 'New York', '01850 4646', '', '', 'chandler@bing.com', '', ''),
(7, 'Test', 'Herr', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Testio', 'Herr', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'steffen', '$2y$10$ZUSxumCQn/Sx5pXrv9nR1eSNxFutIc5ZJ76fiQyOk671HQdAf5U2K', '2020-10-07 11:05:35'),
(2, 'marco', '$2y$10$Tw2RhVN0ifZ9ng/bjbfRBeS.s4VQAnV3mpN899UJT1R8hSnqwAmuq', '2020-11-12 13:07:54'),
(3, 'marcel', '$2y$10$hCboTb2S5YKG259X9x.oOeyA3i9OjlpEcGxiSgqCciQP5UKd3RiqW', '2021-08-05 16:54:33'),
(4, 'matthias', '$2y$10$h0zMEwkrR9yc2Rfj5XN97ej5Gb/LTpzjeNOs22jhCEyU4q6ZDuSZO', '2022-12-19 19:22:01');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zahlungen`
--

CREATE TABLE `zahlungen` (
  `rechnungid` int(11) NOT NULL,
  `gesamtbetrag` text NOT NULL,
  `offenerbetrag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `angebote`
--
ALTER TABLE `angebote`
  ADD PRIMARY KEY (`angebotid`);

--
-- Indizes für die Tabelle `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelid`);

--
-- Indizes für die Tabelle `bausteine`
--
ALTER TABLE `bausteine`
  ADD PRIMARY KEY (`bausteinid`);

--
-- Indizes für die Tabelle `einstellungen`
--
ALTER TABLE `einstellungen`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `kunden`
--
ALTER TABLE `kunden`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `rechnungen`
--
ALTER TABLE `rechnungen`
  ADD PRIMARY KEY (`rechnungid`);

--
-- Indizes für die Tabelle `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`angebotid`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indizes für die Tabelle `zahlungen`
--
ALTER TABLE `zahlungen`
  ADD PRIMARY KEY (`rechnungid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `angebote`
--
ALTER TABLE `angebote`
  MODIFY `angebotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT für Tabelle `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `bausteine`
--
ALTER TABLE `bausteine`
  MODIFY `bausteinid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `einstellungen`
--
ALTER TABLE `einstellungen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `kunden`
--
ALTER TABLE `kunden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `rechnungen`
--
ALTER TABLE `rechnungen`
  MODIFY `rechnungid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT für Tabelle `test`
--
ALTER TABLE `test`
  MODIFY `angebotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `zahlungen`
--
ALTER TABLE `zahlungen`
  MODIFY `rechnungid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
