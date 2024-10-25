-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2023 at 01:03 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vigainsider`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id_utente` int NOT NULL,
  `time` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id_utente`, `time`) VALUES
(15, '1646644573'),
(15, '1646644811'),
(15, '1646644833'),
(15, '1646644927'),
(19, '1649763386'),
(19, '1649763399'),
(19, '1649763424'),
(22, '1649763550'),
(34, '1649771757'),
(34, '1649771775'),
(34, '1649771794'),
(36, '1649772330'),
(36, '1649772412'),
(36, '1649772434'),
(36, '1649772532'),
(34, '1649773299'),
(34, '1649773306'),
(34, '1649787478'),
(34, '1649787496'),
(34, '1649787568'),
(34, '1649787586'),
(39, '1649787592'),
(39, '1649787601'),
(34, '1649787620'),
(36, '1649790733'),
(34, '1649792831'),
(40, '1649793048'),
(36, '1649793356'),
(41, '1649829346'),
(41, '1649829397'),
(44, '1649840562'),
(46, '1649840579'),
(44, '1649840602'),
(40, '1649842989'),
(48, '1649854762'),
(49, '1649854789'),
(49, '1649854813'),
(49, '1649854825'),
(56, '1649858358'),
(56, '1649858364'),
(56, '1649858368'),
(56, '1649858371'),
(57, '1649858399'),
(58, '1649858420'),
(58, '1649858425'),
(58, '1649858436'),
(58, '1649858460'),
(36, '1649859099'),
(40, '1649877645'),
(36, '1649884337'),
(40, '1649888402'),
(40, '1649925783'),
(49, '1650020470'),
(40, '1650026780'),
(40, '1650198290'),
(62, '1650494429'),
(62, '1650494466'),
(62, '1650494500'),
(62, '1650517448'),
(64, '1650523961'),
(64, '1650523972'),
(64, '1650523986'),
(64, '1650523995'),
(63, '1650524016'),
(65, '1650524024'),
(64, '1650524611'),
(36, '1650534737'),
(40, '1650538712'),
(40, '1650538741'),
(40, '1650564894'),
(40, '1650564921'),
(40, '1650603682'),
(40, '1650603726'),
(40, '1650603754'),
(40, '1650720776'),
(40, '1650740551'),
(39, '1650881689'),
(39, '1650881697'),
(62, '1651677126'),
(62, '1651677138'),
(62, '1651743804'),
(72, '1651848994'),
(72, '1651849012'),
(35, '1654024475'),
(40, '1654238829'),
(72, '1654942446'),
(39, '1654978394'),
(40, '1655155794'),
(40, '1656369891'),
(62, '1656684766'),
(76, '1665052174'),
(75, '1665052183'),
(75, '1665052192'),
(75, '1665052229'),
(39, '1665435324'),
(78, '1666339871'),
(79, '1666853869'),
(79, '1666853878'),
(80, '1666870623'),
(80, '1666870718'),
(40, '1666874028'),
(40, '1666874041'),
(83, '1668772551'),
(83, '1668772559'),
(85, '1668772931'),
(85, '1668772944'),
(85, '1668772963'),
(85, '1668772971'),
(89, '1669972225'),
(89, '1669972232'),
(89, '1669972278'),
(89, '1669972285'),
(90, '1670010125'),
(90, '1670010151'),
(90, '1670010157'),
(90, '1670010176'),
(90, '1670010216'),
(87, '1670010233'),
(87, '1670010242'),
(40, '1670972326'),
(86, '1671355911'),
(86, '1671355918'),
(86, '1671355925'),
(86, '1671356085'),
(86, '1671356091'),
(86, '1671356101'),
(92, '1671356166'),
(92, '1671356177'),
(92, '1671356203'),
(92, '1671356215'),
(92, '1671357132'),
(99, '1671357443'),
(99, '1671357450'),
(99, '1671357460'),
(100, '1671358178'),
(100, '1671358186'),
(102, '1671358287'),
(100, '1671358296'),
(102, '1671358297'),
(100, '1671358479'),
(102, '1671358641'),
(102, '1671358646'),
(79, '1671695068'),
(105, '1672413687'),
(105, '1672413712'),
(36, '1673044651'),
(36, '1673044660'),
(103, '1674136135'),
(103, '1674137324'),
(103, '1674155027'),
(100, '1674156173'),
(107, '1674158081'),
(103, '1674158222'),
(107, '1674158227'),
(103, '1674158380'),
(103, '1674158396'),
(103, '1674158497'),
(103, '1674158544'),
(107, '1674158795'),
(103, '1674205229'),
(103, '1674205238'),
(103, '1674205243'),
(103, '1674205249'),
(103, '1674205261'),
(103, '1674205372'),
(62, '1674206171'),
(108, '1674206320'),
(108, '1674210498'),
(108, '1674210512'),
(108, '1674210518'),
(108, '1674210750'),
(108, '1674210767'),
(107, '1674211158'),
(111, '1674216177'),
(112, '1674216246'),
(107, '1674216632'),
(113, '1674218502'),
(113, '1674219208'),
(112, '1674225543'),
(112, '1674243822'),
(87, '1674484434'),
(87, '1674484444'),
(87, '1674484501'),
(87, '1674484526'),
(87, '1674484549'),
(87, '1674484558'),
(112, '1674491439'),
(107, '1674491462'),
(107, '1674491472'),
(107, '1674491482'),
(107, '1674491494'),
(107, '1674491508'),
(107, '1674491520'),
(115, '1674491527'),
(112, '1674491533'),
(115, '1674491542'),
(115, '1674491588'),
(115, '1674491678'),
(112, '1674492443'),
(115, '1674492449'),
(112, '1674492449'),
(115, '1674492463'),
(73, '1674492850'),
(73, '1674492885'),
(73, '1674492928'),
(73, '1674493068'),
(73, '1674493432'),
(73, '1674493670'),
(115, '1674510183'),
(115, '1674510442'),
(39, '1674637025'),
(39, '1674637073'),
(36, '1674637521'),
(36, '1674637529'),
(36, '1674637539'),
(36, '1674637546'),
(36, '1674637554'),
(36, '1674637657'),
(62, '1674644234'),
(112, '1674657263'),
(112, '1674657267'),
(112, '1674657271'),
(112, '1674657292'),
(112, '1674657342'),
(112, '1674657440'),
(40, '1674657698'),
(73, '1674663186'),
(73, '1674663201'),
(73, '1674663229'),
(73, '1674663263'),
(73, '1674663423'),
(73, '1674663430'),
(115, '1674747119'),
(115, '1674747320'),
(115, '1674748130'),
(117, '1674817252'),
(117, '1674817643'),
(112, '1674817645'),
(112, '1674817957'),
(117, '1674818102'),
(117, '1674822144'),
(112, '1674822250'),
(112, '1674822258'),
(112, '1675155939'),
(112, '1675156036'),
(62, '1675156058'),
(62, '1675156079'),
(62, '1675156101'),
(62, '1675156121'),
(62, '1675156220'),
(117, '1675156515'),
(40, '1675163437');

-- --------------------------------------------------------

--
-- Table structure for table `notizia`
--

DROP TABLE IF EXISTS `notizia`;
CREATE TABLE IF NOT EXISTS `notizia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email_creatore` char(80) DEFAULT NULL,
  `titolo` varchar(256) DEFAULT NULL,
  `testo` mediumtext,
  `data_pubblicazione` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notizie_vigaweb`
--

DROP TABLE IF EXISTS `notizie_vigaweb`;
CREATE TABLE IF NOT EXISTS `notizie_vigaweb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) NOT NULL,
  `id_autore` int NOT NULL,
  `descrizione` text NOT NULL,
  `data_creazione` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notizie_vigaweb`
--

INSERT INTO `notizie_vigaweb` (`id`, `titolo`, `id_autore`, `descrizione`, `data_creazione`) VALUES
(1, 'ffff', 0, 'ff', 1680607343),
(2, 'erhrgr', 0, 'ge', 1680607874);

-- --------------------------------------------------------

--
-- Table structure for table `sondaggio`
--

DROP TABLE IF EXISTS `sondaggio`;
CREATE TABLE IF NOT EXISTS `sondaggio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email_creatore` varchar(256) DEFAULT NULL,
  `titolo` varchar(256) DEFAULT NULL,
  `descrizione` varchar(512) NOT NULL,
  `visibile` tinyint(1) DEFAULT NULL,
  `evidenza` tinyint(1) DEFAULT NULL,
  `data_pubblicazione` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sondaggio_domanda`
--

DROP TABLE IF EXISTS `sondaggio_domanda`;
CREATE TABLE IF NOT EXISTS `sondaggio_domanda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sondaggio` int NOT NULL,
  `email_creatore` varchar(256) DEFAULT NULL,
  `testo` varchar(512) NOT NULL,
  `tipo` varchar(256) DEFAULT NULL,
  `opzioni` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sondaggio_domanda`
--

INSERT INTO `sondaggio_domanda` (`id`, `id_sondaggio`, `email_creatore`, `testo`, `tipo`, `opzioni`) VALUES
(15, 55, 'decapitani.mattia@issvigano.org', 'gfwgre', '0', '/immagine(./assets/SondaggioGiornalino/il_fra.png);/immagine(./assets/SondaggioGiornalino/lascuola.png);/immagine(./assets/SondaggioGiornalino/lavigacommedia.png)'),
(16, 56, 'takov.kevin@issvigano.org', '', '0', ''),
(17, 56, 'takov.kevin@issvigano.org', 'ssadsad', '0', 'a;b;c;/immagine(freccia.png)'),
(18, 56, 'takov.kevin@issvigano.org', '', '0', ''),
(19, 56, 'takov.kevin@issvigano.org', '', '0', ''),
(20, 57, 'admin@admin', 'sdsadsa?', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `sondaggio_risposta`
--

DROP TABLE IF EXISTS `sondaggio_risposta`;
CREATE TABLE IF NOT EXISTS `sondaggio_risposta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sondaggio` int DEFAULT NULL,
  `id_domanda` int DEFAULT NULL,
  `risposta` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `data_ora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_sondaggio_fk` (`id_sondaggio`),
  KEY `id_domanda_fk` (`id_domanda`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sondaggio_risposta`
--

INSERT INTO `sondaggio_risposta` (`id`, `id_sondaggio`, `id_domanda`, `risposta`, `email`, `data_ora`) VALUES
(21, 55, 1, '/immagine(./assets/SondaggioGiornalino/lavigacommedia.png)', '', '2023-01-23 16:12:47'),
(22, 55, 1, '/immagine(./assets/SondaggioGiornalino/lascuola.png)', '', '2023-01-23 16:13:08'),
(23, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', '', '2023-01-23 16:13:11'),
(24, 55, 1, '/immagine(./assets/SondaggioGiornalino/lavigacommedia.png)', '', '2023-01-23 16:13:13'),
(25, 55, 1, '/immagine(./assets/SondaggioGiornalino/lavigacommedia.png)', '112', '2023-01-23 16:16:28'),
(26, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:17:21'),
(27, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:39'),
(28, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:41'),
(29, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:42'),
(30, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:43'),
(31, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:44'),
(32, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:45'),
(33, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:46'),
(34, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:47'),
(35, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:48'),
(36, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:48'),
(37, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:49'),
(38, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:49'),
(39, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'takovkevinissviganoorg', '2023-01-23 16:19:50'),
(40, 55, 1, '/immagine(./assets/SondaggioGiornalino/il_fra.png)', 'adminadmin', '2023-01-27 10:51:21'),
(41, 56, 1, 'c', 'takovkevinissviganoorg', '2023-01-27 11:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

DROP TABLE IF EXISTS `utente`;
CREATE TABLE IF NOT EXISTS `utente` (
  `id_utente` int NOT NULL AUTO_INCREMENT,
  `nome` char(40) NOT NULL,
  `cognome` char(40) NOT NULL,
  `email` char(80) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `salt` varchar(512) NOT NULL,
  `privilegi` varchar(30) NOT NULL,
  `tipo_utente` int NOT NULL,
  `verificato` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_utente`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`id_utente`, `nome`, `cognome`, `email`, `password`, `salt`, `privilegi`, `tipo_utente`, `verificato`) VALUES
(35, 'Pietro', 'Codara', 'codara.pietro@issvigano.org', 'fe5b3d2a85447a976f9fec09890b8438e9391c8f59c987094539cffd35e77ad01cc73f5b3160f3ffe96934013f8189070cc750812e0a2884377e1439c577dc71', '11ff7e291d44f4974e5c86034158666089c87b69dddf15811d1210105c7494b65282a267497784f698711cdee3753da00758e5547d3c1023cad3c56ae52155cb', '111111111111111111', 0, 1),
(36, 'Alessio', 'Solagna', 'solagna.alessio@issvigano.org', '8178c647dfec13876f7242c84876e90fe390a0261244cb8f11d96f88b6e2c7533f60fd5edd6fb077773ca4423a696d50452da7b1cc729e42b3398e8e22af88c6', '4ffcc5e8201f0ba67da315dbba269f2bce76bf88b9302abd10b01fb6291c7de64ef8276945afe6058f9b3620f74349cb15e58b685bccb082f276f0a5c91d44d9', '0', 0, 1),
(39, 'Federico', 'Pino', 'pino.federico@issvigano.org', '714d0bacedadfbb18a3fc06503061c874447cc1f0dd38ccefabe5dfb102fae56f6f3700f74cd823c3bf00f1f0e5a57d903dbf1d80d2583a541b2e5b11daa327e', 'f2540ecb2883e9bb9bc502bec930b05209728d3390866d9794fda708bc64cef9df7e8f00f886d730f372b9da0e76ee9ac96f0d8092fc940abb08fafc159f887e', '0', 0, 1),
(40, 'Matteo', 'Brambilla', 'brambilla.matteo@issvigano.org', '72aa7f09ead46d8eaced5e40320757c03dfcc1421e9f4d89ef8b6c181e3b10cecccf8c6ad835be5d990c314905562e3415a0a1c4b71b8e89e36385ef5b902f6a', '28b25b5e66d3a02a3c06dc8a13d2704aad15a54102481cf292b883267b5cababd4d3cdc0b9d94a66c84db2bf5b58b148569f191d6d13f1a77b4b0ab2280a4a8e', '1111111111111111111111', 0, 1),
(41, 'Igli', 'Daja', 'daja.igli@issvigano.org', '4d506885939f70f1b6b5f1593bfff95399cddc1eb3accaad1280779fa50af77004bec2d82a44fe1f3247cb5162f139caebea6063bffa56782655fb9cdd6383f0', '10034d5f7c6e304aa18737decd8f52bf087a32171c5c5460bb5667bbf78dd8dd2fff0c09a1fdbcf5fb7a236e5d650bf37e79df2abf682c637f0c61afd397c033', '00000001000000', 0, 1),
(60, 'Tommaso', 'Fumagalli', 'fumagalli.tommaso@issvigano.org', 'aa11ccc7f8dcfb04c57c00ed45e7badb704a9e515611105f5dcacef3573d8105d1cb5e3d1949ab35021956c8e8e28bfe18e9c4c570cd7112bee36937036268e7', '1d29818d1d40067405c41f8909c2bf63ed75865c4537ff1ce7d68703aefd515f2554957c2cf223f43bda16b40018c6ba302105229351e946e956ad2ada7cbff4', '00000001000000', 0, 1),
(62, 'Simone', 'Mazza', 'mazza.simone@issvigano.org', '80c810d501e945479f273170dc49d129e41c6e2db4f02b8542baf1723e35dbfdd551ba9f634d706eab0e4fea3c62afc8be92bc651bc07b8ba32242a60eac6ce7', '339280b7d0f7b035a15897b0a71b55f1209101526f0dbdbe6d851be6039848c4dc19ca6b785574bda771a89ef592f6117e46773c20345de597dfde3ae31c87b7', '1111111111111111111111', 0, 1),
(63, 'matteo', 'pelloli', 'pelloli.matteo@issvigano.org', 'b3383c1ccfd5fcde877e52d7658ebc6b34ffadc2b41a890d577515ef4e8815cf3d1f9cd176e5d882a93cfdd49bcec5413ee0e505c93216c730fe2da94a59c54f', 'd6dc1d2f1ccfab272c4c264f5a9d67f17833fdebe074a82ac23f12517d02f5279ded0f4107e47712251b1b22dbcfe9ac1babb369d7b20dda5f1b2e5e4c251b2e', '000000000000000', 0, 0),
(64, 'gabriele', 'colombo', 'colombo.gabriele@issvigano.org', 'a4672ab771483cf9e6f25e888768318b0083b6fdd2e829aee36e73152179499ab45e7fd5767ed10b4acd5ad15cff6105f707a89c0f2b28eb355971b4c656d8bb', 'b3d315514114138601f40aaa202ae277275047a97ee149c5f7f2d45f28b7be9ebc4816a9df41e8c7922a994a6b71a21f28b89236d674d1d58f00193b27c7d2e9', '0', 0, 1),
(65, 'Andrea', 'Galbusera', 'galbusera.andrea@issvigano.org', '9333226ea1e2ba4dee3a5dbcdb5f079a5c128642961be82c6c88accb2e071d7e6e13969d48abd4d554858a85ffdd0e0107e2a75d66bab0afb5d6856ec1e9cb44', '95fea4038a827eaf633604a92c39ca3f77b2a9b7dc2d785ceb51c073bc1f3596dc267da79f90e750e1222b3260cd9bdea5d7ec96c35f5a87cb855b3d75a9f1d0', '0', 0, 0),
(68, 'Gaia', 'Longhi', 'longhi.gaia@issvigano.org', '2cdba42f358d8f70d0f3e12d79563c857e039177ef029e35a5add4cdf3e7aa6aa927a6690ef7ff037dda55331f1a1574a98793cf1ac25549fbe983db2ed60696', '4c87cc123077fe1f72895e059aecd87db14681af22111886fc0aaeb4018ec24abab96abb81e5a6f08cd92e7870b7c066368c5b37dbedfcb63da9bcab82b94c27', '0', 0, 1),
(69, 'Beatrice', 'Caretti', 'caretti.beatrice@issvigano.org', '63c2a47934375d2e7a147e8e5cc1f5bf2a1da8b0fa1c22fc5a4375dec1267bc63e951539dafde65328c5fb2964bfd3c0673445c7aa17fba59d956304f95339c4', 'd6bb3c473f6c32cac63d7d832b45f957d5f7630e20200b4b0712e23924c4c84cbd6c284ff1b2092bffa92a6bfcd1eb4e938ad619abd60911ec25565428682393', '0', 0, 1),
(71, 'Fedro', 'Tomaselli Scardia', 'tomaselli.fedro@issvigano.org', '1bd209c88b44c4825584820531123a3d29d9cd3fa6aed111fadd176223d818a5b44aea17ecf6a18c2239b5fc345cfb1ab4c1ccbe2901765e572dc5e38f93572a', '06e07067e77a46832ac844f917973117b76dd7c374eb427a2497593c23252030e407b9442f32eec8ab7fa2eb6c015b55de109a6dcf1dce5c408b3002a898d5f4', '0', 0, 1),
(72, 'Gabriele', 'Cecchini', 'cecchini.gabriele@issvigano.org', '0e5e3fa60686550ce6a13f6b4f4fc15d4ab13020cb0a97ea1986305baf2910559f6771a87959b10ff409abe10e680732a2c9e87fe5a69523d39af3e0e3676183', '2aa75ca57b5b8b366ed13fbacf60e8d7e9b5573a9779813d14082b2ecc85d31530e524a1758287be7921456cdc464278bea09efe14538084627438d65bf7737e', '0', 0, 0),
(73, 'rayan', 'yessou', 'yessou.rayan@issvigano.org', 'c2f222560e3e39e3761d07f2b399944c2b1ef0061e002a1d2bfc529f1723f845c86ddc8c898417065e6fd9f1cf5162ba5d8b2985d452d338bb2356a3f0166833', '8fbd3869b131c649e66b71f5b43059db10db53c90e5fee033519d5f9eaac620db20ffeaf107ddeb9b1699f585719aa3b38e545602422e83a28cafacbae535caf', '000000010000000', 0, 1),
(74, 'Cristian', 'Acquaviva', 'acquaviva.cristian@issvigano.org', '9472aa316009def57f1d16515b1851852717af295f45a13efddc3fb7ec2cd23d84491448fa3486b253ded427f9162f40938b16e412012c8279afd32037d3135b', '90a40ed237289f8c04e947f75aa098159b9da87ca50d402454aba02aa9dd9ad7899cfcec5dc067e2778139cc712800e15d230c2fe29dc1e341d065de39ac7818', '0', 0, 1),
(75, 'Francesco', 'Lecchi', 'lecchi.francesco@issvigano.org', '897154d2ecf52965edb720665b761ec3127a0e8811aa205068f88de7030a99082688d9b4eb508c259f9bf24ead3288edfc7d03f4a2f1a80e7cf5916a2dc58b55', 'ca9423a78cd95c423af766acf551d9c8fa385bbc61ca377f3f5b2b2889bf054b8bcf127fdb53b4c21c3cdf872f480c555873442afeb7b8f7a0ae5b2b544f3a78', '0', 0, 0),
(76, 'massimo', 'gonnella', 'massimo.gonnella@issvigano.org', 'f5660bcad1fa506712e97b7f063d835759a370042de64f3f98371379380d614086791b73c5a1670560cd6b28b88bc5cf9720e6472ef84cd7fc162598ed96812f', 'b1c429c2c39d8abbc220e964c0e474d0c5276f7a9e0dab968e3775801681bc34b5744c2cbfb328576c0a264e8d2ae1489f7641eb5bbd447f97a4fb86782e6afa', '0', 0, 0),
(78, 'Antonio', 'Randazzo', 'randazzo.antonio@issvigano.org', 'f7197ece9719482220371891f0fa80b2b16ca0892daf731d3f14f68f7d80b6b0f46929a1bcf2b8ed79fc21ad0b4bf960e3d8d8701bbc6466b8601d9fd6bfe790', '8ebf7c98013301e64f248bdcaf843d81fa8780d0de9f89ce44b08e488fb936b8fb34ea1145429892c861ce3c784c642d2dc3b3a26ad3d21dd250622ac75aab52', '0', 0, 1),
(79, 'Andrea', 'Ioele', 'ioele.andrea@issvigano.org', '5344be68fbfc964328c2ba25e94ec5e55a7c513be7f2783c836da16c334b589a76ca746480eb846762f20d5132c8ec9e1047ae6711e0b32b051f0d4507d2357a', '6366bf11b5316597eb399a922c900713635c5ba4c5f2e8a9672c1a1db2804b6f3ad77b01a3824010c76888546a993ec687dbad4ee7d32b19e2713d6a8019dbfb', '0', 0, 0),
(80, 'STEFANIA', 'BRIGATTI', 'brigatti.stefania@issvigano.org', 'b3a5a308f5dc5e83acb440950a1c566356f4185f459af2cfd501542b5d9a551a9a23f880eec0a502c0b4fdad342c7b5337d38a32405230e867fff540d084fc30', '741b1e02128b87a03ec0e9d36e27f37ee5e582c613e12442ac791be7ebd0ab57b53def9745172df4a915e30c4d2e839a685289fcb68b6e567a7bd9b2770bad91', '0', 0, 1),
(88, 'Tommaso', 'Brenna', 'brenna.tommaso@issvigano.org', '4b8fc21fdf258907f105fef2f8e29cbcc431b34a4806b3e8103d7452b612c8190f5eb766090af3b6fd0ad203a01c434ff4db3076d5740fb41689a03d95570fcd', '192ff101cff45e5e2e418184911653098543585b1cd1d20bcde74a1ee341d3661311c8a1fe301cfc5aeb6c7552f4965c7b7f68be68498063cf19c1dc871cc7f6', '0', 0, 1),
(89, 'Serhii', 'Galushka', 'galushka.serhii@issvigano.org', '9919c7ec86545ca908e814fae688f8e868d4fea0fb1a6fa48afc1ee3c168f04fad0f7b4c6d233082fc61cd2726298e01c1a0cf8607477b5f7c470fd4640b941a', 'ed24f8a97708a733d9821cee7d46a75633b96a7ccab2ae11cb184aa89877b1e95ff34bc1af8649fbf84926c4fe78ddec994b91a8230d571aaa0e7684a6e0dbc1', '0', 0, 1),
(90, 'Marco', 'Frigeni', 'frigeni.marco@issvigano.org', '29c3bc8d152d228898ebb8071c137adb5ac2da3b131579900838f4f3166135b212b238244fdbb8fcbe1b0de96ca7d40446b5a8883e3094f1ac7a19fa643ebe31', '86b8fca6a569059bc5c25ac820c2c76fe2ac2e3607b3bf29877104c254073f9c71a07027d58032e00dd742b0cad695b2aa39447194028fecc79288ec099c1232', '0', 0, 1),
(91, 'Lorenzo', 'Agneni', 'agneni.lorenzo@issvigano.org', '95af5d1273e0508fa9915b642b7abba0882cd0a1e3b1821d6d9bb520f860f49c4489cf143f709c6a89f4663336e061a6386ee4874874ce4e2f3fe7b49ef5b7a4', 'f58575a1c77f5e1fc81679157874e2ad548542a9fb0ac19c8e2fd1c35c542cde36fe41cec41712004ee01c45abdbf353ff95dfa3e4763182f99b345a8d4d593f', '0', 0, 1),
(105, 'Marco', 'Giumelli', 'giumelli.marco@issvigano.org', 'a8ba02d0ed16767d1b051d822dc3f43e243f8301e58b91c806753c6ced79c40bffc10078ee0792ffd68f210b8f480ec8a9d23de0f419cd5678385bda5a711827', '9fa2bc111ad15d7b7568066d295664f122a98a7158314ea1ae20889c0c9ddcd1af68e78516dbe526758362dbabf00a97f0c34b11b1b7149807e3ec4e8af8ee42', '0', 0, 1),
(106, 'ergertghert', 'erggerger', 'erjfgnerjo.rjfgoernogjk@issvigano.org', '7e6cb3add92a0a1ca6bda69eebfa12455bfb3de2b42815af601fd1d59f9c08cd5f42d62e9714e922fd2af2bed7c00565980c48d7d2a590b6032f59948697425d', '223462cab49f9a437aa539e2aad1da39bd22fc15b1b645976b605c1b56f11fb37ea36258ca18981e2ef82243d0b4aa743ccbdcc1d26fcaecf014ee97fde3857c', '0', 0, 0),
(107, 'Mattia', 'De Capitani', 'decapitani.mattia@issvigano.org', '201290de2fed60e959f25e675d658f3abe54070e3f8087032ccfbd77c5f3bd6774e24c8c4908ba3d67de082bb858bf1194c51be7d1162c32f82a62196ee197ff', '3a7836a2b81b35368349dd28c4db63f87cd0e9b4e77b16da47a4fe58e8a5ee1e1277c496c61031aee024483a28f07535abe353fc257526f42d23b66036604bb0', '1111111111111111111111', 0, 1),
(112, 'Kevin', 'Takov', 'takov.kevin@issvigano.org', '6201bde5ea190ba1c3c5fa32c7ff73142a83735ff1eaaf5f5b612694851dd210e1b3885f34e738cda2c1e74d185d93f5ed16aad0a34c7fc1bff0571e539bbccf', 'fa6d09eb95da4187c4fcf449f606356319e4e822cd35a2f763dc892b8d59c8e30e1dc7701d4cf1204a4a21d4697de8508546c66716b61d7077707fd58e7c1b11', '1111111111111111111111', 0, 1),
(113, 'alessandro', 'mallia', 'mallia.alessandro@issvigano.org', '5268da289a75473f25932e65036a4343cde66c1c2b1761933b87e55602348605e3180744b51b572180bc7bb93173e023ccc0be0862770326c69e34704c3cefe2', '99d2ba5469633c610443b73c8f5a9e17d2bef9298e5f3d6b964a34a4b47076809318e74a5c185ed0a5df1f488f3e4acb77a53bb65e9b82c9cb16fe7ddf139d18', '0', 0, 1),
(115, 'Alessandro', 'Basile', 'basile.alessandro@issvigano.org', '6b74bad2c2f91df51f7262e28b90a16de750b417c0558699856d3311bfd682ed5c6312af113a15ca203765ae14a78df1acf6b29cffcb03f546df0ce389df5d85', '6e41c60d64dc151c6703455374785f2dac051e41af78fc901d7bf12a43712f0a6d019799e6d07a6405f08900344b1ca24c2055aff05d2f649428074a140de168', '0', 0, 1),
(117, 'Admin', 'Admin', 'admin@admin', '94e6bea8ad21af987a2dc38c74028f8e155d2f8f2d22a8505694f7e8c026c2a0acd14d2f45b7abc8c5f06bade9fa9d0c9743ddd1988a51d5e4d3ec179ce3a1f2', 'aea0ea89bf27c676d5152ad3e19cad1748ee1e3e1389d1e2cd69790008e97883269fc1f0261242f7243d9338f86aa53e5fb631a937762d4e01497e4d604c4175', '1111111111111111111111', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utente_verifica`
--

DROP TABLE IF EXISTS `utente_verifica`;
CREATE TABLE IF NOT EXISTS `utente_verifica` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email_utente` varchar(256) NOT NULL,
  `stringa` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utente_verifica`
--

INSERT INTO `utente_verifica` (`id`, `email_utente`, `stringa`) VALUES
(1, 'brambilla.matteo@issvigano.org', 'e948311b9e9c8bcec0a212677305a1cdbaa29dc5b69c9de236b2c0fb7b2480f8e262cf88bdfdb39796ea4651b5c002a1349c2b81058a2cc366311d1233513388'),
(2, 'brambilla.matteo@issvigano.org', 'e948311b9e9c8bcec0a212677305a1cdbaa29dc5b69c9de236b2c0fb7b2480f8e262cf88bdfdb39796ea4651b5c002a1349c2b81058a2cc366311d1233513388'),
(3, 'codara.pietro@issvigano.org', 'bca9a91a78e0bc0d161e748963b6ef4eb63e595a48f266fc650b88840fe2b9f5660a334788ce8c176d6d42d457f45f0bae4bbdc6cdfb79a8e549a1b618952b3b'),
(4, 'solagna.alessio@issvigano.org', 'f3984e1cd64a44ebeb77e3cedd6063a39723826534e7f1278d41c608ad1872bb07077180978a83372cc7321dfa09fdc90594b86fa8ba2b4e1813e52151784595'),
(5, 'dshjsfsd@issvigano.org', '720dd2ca5b51bb1a0be8cd5dae1eb3935464fd3fd5662029c1c1821de406a7cf0630da83e3ed1d88130e68f56bfa905fa462ff8c3861580bac15851c1e339201'),
(6, 'dsfsdfsd@issvigano.org', 'dc7f0777a93ed39bd8009504f9b0ea5531258ef73cecca517cf02e2406613a9114849308f4608d2de403893f1b69f7c040bc6f9e9feadd9fc16cba7260b1ce56'),
(7, 'pino.federico@issvigano.org', '39a9de6bd33c641d20d45453f4a2818d93224512d8b016b586d5713fcb60b85036ebabe30b11f0aea18ad540e14f2e4c13de80ec2955f5f0ffea52539e34c426'),
(8, 'brambilla.matteo@issvigano.org', 'e948311b9e9c8bcec0a212677305a1cdbaa29dc5b69c9de236b2c0fb7b2480f8e262cf88bdfdb39796ea4651b5c002a1349c2b81058a2cc366311d1233513388'),
(9, 'daja.igli@issvigano.org', '0814dfdfa2e76280124cc52b4c7d99e0ec21f4da8b80fd639730f6ea37123442bae2ed795b369dfa30581ecb32246792f2b5e3337a3931b8e4525d360b5d36f0'),
(10, 'hdjdshbsjs@issvigano.org', '9c3ecf3d96eed71a783fa7b0c1a9b5377046d551afcb4bc5cc1d6bb1c79b8222935774ea08d424ba6abf0785706e33ad0cfee9f7bd440ffd019499c9579a1cf9'),
(11, 'asfds@issvigano.org', '2f51887a73d87f5fea66618f27c81eb2e81ef9c2056714a760efcebb01f5baede4fb1ef83b8de423ea95bfc0f94e8e6b87558a03154c150fa73bdbb3fbd76e21'),
(12, 'simone@issvigano.org', '74684aefb72e471d9cbdc50ea187e97ea0176601e274fdf8b545b953b215ae6dc26c2013cf3c4a2877423bb2c4a3a60befd1e6225f3f0ea3dc23a6675789b62a'),
(13, 'simone@issvigano.org', '74684aefb72e471d9cbdc50ea187e97ea0176601e274fdf8b545b953b215ae6dc26c2013cf3c4a2877423bb2c4a3a60befd1e6225f3f0ea3dc23a6675789b62a'),
(14, 'a@issvigano.org', 'c83d37a0be584102cc6e37ececf93b8e24e3112c4b74c189b87861f379cb9beaf26f8e233d4c8ec11c71e8bcd0ed90d98035c6e922be87f183fe34815be70763'),
(15, 'simone@issvigano.org', '74684aefb72e471d9cbdc50ea187e97ea0176601e274fdf8b545b953b215ae6dc26c2013cf3c4a2877423bb2c4a3a60befd1e6225f3f0ea3dc23a6675789b62a'),
(16, 'aaaaaaaa@issvigano.org', 'cf754a028e8b2a18af1bb3aaaf891b22f23615fe279e7b6c04e742672405ead401f4b394d56d792b931113a25ace902bcb60395a2fe001924208b3ecfb85fd30'),
(17, 'decapitani.mattia@issvigano.org', '16c1cb521de69619a2aeb210b7ac79cfe0b63ea92515700b7619852ad1089030bb45399cb9114f9f59e18d3cf72347553ab1c4dd33d1a3d37fc7549e051fa90c'),
(18, 'asdasd@issvigano.org', '674dd0a25b151594cbf52dc712767b502c1db87b4997afc668fe8be4a708a396c937029426a7ce0c9d93789b9fa5c86c401a005e36b1c2e5710cf6c976a2c7a2'),
(19, 'asd@issvigano.org', '15c9d2889bd958bd1cd72bf7d61393b20cb63aae36d68f2ebe8c0478481ea20880b3d53f4814daca7c7806ac5e735999038ef68d638e2304ace1d94f9c24d98c'),
(20, 'asdytasdghs@issvigano.org', 'bf70ac7a7835c069634d86d6735a69621fb7fe8a9624f281e20231cf29da9542a1d3d62ce8454a140bd97a504ae19901b85c21fa6cd45bee9ed5b4ad38994993'),
(21, 'peppino@issvigano.org', '522fe06fa6012af8f6bf7724249909fe81dc2760b15616f4ed9e6c5d2b3515ecb634909478d4364b7bd28365f559797bfd38bd24632b4da99ceada0ae7763a82'),
(22, 'pepfdggfpino@issvigano.org', '13cd8dd2392836b08370b9af9d7b4800b1286c983496ab05552bc80b2c6509de75602007bc64140afc71154d5d4306207f26a6a850d5d3f32f9d849719619a76'),
(23, 'c@issvigano.org', 'ebdd59b9a42836804cf4f613206fc89337ae2bcaeda8f9fb977022cc7682a17a318e87c9fa50bd9da41b9903462522defaa91dda361944910e3462fddec9ad7e'),
(24, 'q@issvigano.org', '873f2483503491ad0b7ca8c7422db54e91539d1fa646ba2c10eaf5a44a3e89349f8080f9d579a4771178da62a578b5b9c0de4caa7d46b46b6f400f52baaa88df'),
(25, 'dfgdfg@issvigano.org', 'dca03fb79b517916560c1abc3c937b541671701d2c35d65f89a5f8237eee4d12d808ac83777fe489638e6da3ae2898ad316fa3472eba49b231668a63eb4c5738'),
(26, 'abc@issvigano.org', 'e3616b34e0fadddd728f083d16a2bd851637620517637fa2dde94c82b72571554708ed7a6891775d2895b7a9dc849d996384f90cc1b9bda6cc206beac9833ec0'),
(27, 'fumagalli.tommaso@issvigano.org', 'd2f52f903d17fe697ad7684790b3203246094bcc4b73c62914e6a91d998e99c59e4358f3904bd3884443c5f8997eac48ee0ef63fa6b763e37d0427d9aa8f278a'),
(28, 'mazza.simone@issvigano.org', 'd09f67d94337ae8e77de2b233366864f01f3e3282badd721c35d0231b4458529ebccb4f19ce290995681ba220d802388ea3634bc381354946ab94617b42f4a1b'),
(29, 'pelloli.matteo@issvigano.org', '1f92fe5cc89ea727caae5ba4881e52c240fba3418af72c08071e4e76f33005c2457b5e503b1db17eeeab9874edad978d41fd24cfeed89029f0ff06f23c68b03b'),
(30, 'colombo.gabriele@issvigano.org', 'ab4866d3a95ae41b9ec90d15bca99415ab42a8e515c838bc8b88652b6f24042f444c21733d7df92c384b8e033f2e550e2df834feeb6cfa38681cd7ac618d62b4'),
(31, 'galbusera.andrea@issvigano.org', '1a079f320eade9fc7b66ddcafad259f62f8d7e8d0668a98fd4efd45959316c2424607b62c7b4b26ba2c7be5eeaf0cd442dc46f80c830079aa273ac4d7f6c7f8f'),
(32, 'sdfsdf@issvigano.org', '0a06bdad5d85a4c9e0b919b8801ce941ff2a3760b28031695ea7f4c8bbfab8fbd78892af24d8b1d011e004f3d43463416d459e38e19eb4500e32ff8ad9b1d9de'),
(33, 'sdffsd@issvigano.org', 'f25618b565804232c4102a29fd4c9557ed2d6f21156fd03ab595d1acb67f217c09ba36077ef2637791b014da821160fd187ca9c9c794d78ea271f96c93d69502'),
(34, 'longhi.gaia@issvigano.org', 'a54d745ff62d27e652c877cc5aeb347eab1b4fa496beaf4456f9404028e43b157e6b295ace3f387bc331bef8833a86a4a454bca131593bb06104e84df21dec34'),
(35, 'caretti.beatrice@issvigano.org', 'a12bdf18221d60687a41d33d7b755ca8720bf9ce58761acd16d269cac17904d3256fdab46630dad6dd65518262e8638376a5629e123d6b71801f85d9fdbd2efe'),
(36, 'c@issvigano.org', '41da2a22655ef8af2a235d58c878a7f14cf52bf9a178927c976d4a6e1dbaf3013c7a739f961f1ec0628a95d04ab091cba7343903f8c1b833e7ce5864d3e0bf5e'),
(37, 'tomaselli.fedro@issvigano.org', 'f12547a750a85504b1cb3c41949bd5307c54d9ec6ce73caea99cf4020ef100c8166a462b538bc7aabd68a53f43d0ce76da2337a7d646e7296a09c83306d86e7a'),
(38, 'cecchini.gabriele@issvigano.org', '7adc33ede323db6673587a8eda23e93c074d6903e9fccb66dd7f6758e1f6d474abe2a398504c8a7cdf426aa08af5057a1ff7800032c5b5208ccf1f9588022728'),
(39, 'yessou.rayan@issvigano.org', 'dee0750a0c4eafb1cdd9851a1b6e961be39a7339b0e9ed4cb6079358af4a41251132028c3708a880f227655f231d1195435e08f48e99ee2fddd8efad94eec28b'),
(40, 'acquaviva.cristian@issvigano.org', '9de8d314992d66393ffdf2e55bfc3ea44a795c8af2e17daebf6f42c81f512a84a5d155e2eb9719bcf69c5bd0a57ff99dece1c3738c25e3be017f45d07e3d19fd'),
(41, 'lecchi.francesco@issvigano.org', '605c52651aa8cf5b256a91aec9b0a1a681c9dd053ea5137df10a85e28ddc2a45a39e04fb471772a2c7d36afc216badb8ce7e400ba406b4df5ce790757b2e54e3'),
(42, 'massimo.gonnella@issvigano.org', '7ac574d1b4f6d3a61241254d4e807ae5be4ef707bfcba61ba18f9451d2b5e93ba3e7e025674eee56ad87924553b122fd559dc1887aa249ff07140aa9c370eb47'),
(43, 'randazzo.antonio@issvigano.org', '5e288dc180d076fd715454a411f7d42d31df0d8e9a3bd612096ae50df75e5c9b8ccd9f6afa7612c14e9eb74b52bf23d824381c44de088e5a1dc05bc9de3aa08d'),
(44, 'ioele.andrea@issvigano.org', '38bbc5921e1b143c6191c91e393ed4b92ef852280182a7602eece2d0ad3c0d3df3579aa24de8c7819612aa88c3e570cf75bc9dfbc6017c18a74ced1856287ad0'),
(45, 'brigatti.stefania@issvigano.org', 'b26dcec40c0a03c9165f71028b140e1c6770fac97ea0db443611084b6ea3766707297df93560fadffc471ca77429f3c7393d11d4a7a9127ea37b6fc08ecfb6a6'),
(46, 'takov.kevin@issvigano.org', '2815c77fdb414af20101b11e73cd2846ecb969a669aa77af160938e13a2f4850a89009ff1330ac58fdcd3db8b1db3b50193b419bfc8c23803df8e7850d5141c3'),
(47, 'takov.kevin@issvigano.org', '1d63d93d156107a315322597638ad8a6310395ce19215c6720bd48a2927c2e2f564c082d24f5b9ceaa8a6745a0b7a6a4d198cbf577e75d6ca63ca430a937c7f4'),
(48, 'takov.kevin@issvigano.org', 'aade6b900a57affe665138f4a213a966b39a4a330434ae5a2d754559d8ec9640e449dff3051d4167dee6115969241a49ffddcf8d5a93ae38400c8b22849a16eb'),
(49, 'basile.alessandro@issvigano.org', 'cd3cf850a3e1a87a4596d5b160df31acc6d2299da6045efce866e92d546d46e19ce50447af3fbc7178ddae269ec74fa1b8ac97288d6ecb2e65d1cda92908dd3d'),
(50, 'brenna.tommaso@issvigano.org', 'd571d4ebcb4ec82b73b9fc851a860ea739c6b89e6e348cb4b38887525deebf19a00b4db725ebc0106b50f8b1b4e99040050d51beb42e4319d57b1d87b781d89b'),
(51, 'galushka.serhii@issvigano.org', '26297dbc2e278fc4a1805e3090b4af06b0c45110e11fe5b04919cc781834078ed90d25af8142ef3b43cf27584f66538be9bad0e0f19c921e89e2139d87103ca6'),
(52, 'frigeni.marco@issvigano.org', 'c6ae0c829a973e6d55e8e17f74142d277f85a80553a3e4de052f35929d657d2a9477a51dc9c1d5cf4f2afd8e9650829c07854aa86f07154fcb291c3db95eb7dc'),
(53, 'takov.kevin@issvigano.org', 'eeb151f39e74a4301fd57937e425e6ce6bdc8a42e3340db2509e69df5af7b68e505d91a2a273abf589bfd68fa48b8e6381b6a19240a52e69a959a4c2cdfd06df'),
(54, 'pluto@issvigano.org', '4077b4511ece7b5b91c6b4e1729e9072657778aaaba12e0e61298086b1daec593d4bb16d81cbce7be99a87b2150546eac2ffe168e953663f8c77848e6bd5ac16'),
(55, 'agneni.lorenzo@issvigano.org', 'c57378df1f0209eb25ca81500469bba6287c7149cec851d35a6ba8539dcb708c5b13ce8f827c2120b9a206db9774f6df0011a09b3acfbdee5a96b6598f141ea9'),
(56, 'decapitani.mattia@issvigano.org', '0395bcead056d8ed65344325d26140ae60274aab62cb13751dfd6d9c28731ad18ceae81bcf0a5001ed2f040be0ddd0f4d1f5a93339f527d1a86e6701cd9f4943'),
(57, 'prova@issvigano.org', '9002343428034d4f54b241df2ada6f988c4f34ca8015110476073553d6ae0b479b76f83ff59ee694d1c1a95887d07565d03c60082d68193578142067fd971468'),
(58, 'takov.kevin@issvigano.org', '85f6005064e9460d01f9deb3d8bff7bd4a5c5f059f54b837697a4e5999b23d8367a549fcea96e386e00d7303c51592c1004e856da2911f82598658b57b41287e'),
(59, 'takov.kevin@issvigano.org', '8c9452de86e55fb7fb5c7dae1fc1c55b36408beef497ccc6e2cbeee2e0dc6fef32024e4b39a2d895e0275b76ae80ae0154663351e2d5279e9796db0146052cda'),
(60, 'giumelli.marco@issvigano.org', '99f42de5a95fbe63693f1298cb21220a99ed8506566808b231320cd92aead3d7b7f2252a2feda165d67f6f74a8bd2babd4c109c80e27ed2812682d679f3e66b0'),
(61, 'erjfgnerjo.rjfgoernogjk@issvigano.org', '02b5afd6b9b9cbfe9b3cc66eb29b0e353ccb687f27e1df260f3543928d474dd076202c68ab9759531a85d760a2fa0bef8ba7a55ca899a9de6f273add2a3f0e42'),
(62, 'decapitani.mattia@issvigano.org', 'a1ce8e9251ce3a6713c3141a639100cddff5b31e99fbb47da9a94db098549b7670237f596de1649bd261eacfa4fa7bfd38b30fdd70223e64520c5e10ceab03b8'),
(63, 'takov.kevin@issvigano.org', 'a1b3695f9f1139dfb7c6d082d508eea25bcc687b00fb02156e99755b706fa2eaa0a987e3201b79aeb5aeb687ae0f3ba650ad117c1d0c92e44bc270601aef331e'),
(64, 'takov.kevin@issvigano.org', 'b6c13458184cc5b22e2d2c964c70dcc496d9438dc1dc56f97a146bb135131f6ac05abc970551334b810312ebf51d7e5e805115ef674f93d8a24fc4761452d9a7'),
(65, 'takov.kevin@issvigano.org', '6e8f4f7d77d503974ddf90e158c279c1f88af084ce1c33eb347598c7115c675b72aed0ef60e724d51b6b205eeb324798b4d70803e276be8d083762bf78ec48a7'),
(66, 'takov.kevin@issvigano.org', '0d823ca79ef62d7bb040f0321957c53e76fe1794908a781f4ac6856344d6f7e211e8f29cccb5295d607ff48ec2021179a716a5b6c11f7f86a2f266f0e4150df7'),
(67, 'mallia.alessandro@issvigano.org', '756a5151a7bd814b65a012261c3217f4459efed4dd6690311738e8a434358825354d410f82b5081181873737e6560a6df6a4187cf245f98ca3260c236640c374'),
(68, 'basile.alessandro@issvigano.org', '03e308a944c02691895207fcc8b1d72bd680e98bb6f33896aba4e2ad16243c626cca0a6dc7e4d1ccd9b66a976517464626794542b0f026031d0ec197252c22df');

-- --------------------------------------------------------

--
-- Table structure for table `viewscounter`
--

DROP TABLE IF EXISTS `viewscounter`;
CREATE TABLE IF NOT EXISTS `viewscounter` (
  `timestamp` int NOT NULL,
  `newsID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vigaspotted_post`
--

DROP TABLE IF EXISTS `vigaspotted_post`;
CREATE TABLE IF NOT EXISTS `vigaspotted_post` (
  `id` int NOT NULL,
  `id_creatore` varchar(256) DEFAULT NULL,
  `testo` text,
  `voti` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vigaspotted_spotted`
--

DROP TABLE IF EXISTS `vigaspotted_spotted`;
CREATE TABLE IF NOT EXISTS `vigaspotted_spotted` (
  `id` int NOT NULL,
  `email_creatore` char(80) DEFAULT NULL,
  `titolo` varchar(256) DEFAULT NULL,
  `testo` text,
  `voti` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
