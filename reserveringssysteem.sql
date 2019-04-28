-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 apr 2019 om 16:06
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserveringssysteem`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(30) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `naam` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `gebruikersnaam`, `wachtwoord`, `naam`) VALUES
(8, 'Cadda', '$2y$10$200ltc3bzsbYhNI9g80D0u/E0niEyB9SKYsEUMMWjGbLkaTEfbEZ2', 'Cadda');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveringen`
--

CREATE TABLE `reserveringen` (
  `id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `tussenvoegs` varchar(10) NOT NULL,
  `achternaam` varchar(30) NOT NULL,
  `telefoonnummer` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `opmerkingen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `reserveringen`
--

INSERT INTO `reserveringen` (`id`, `datum`, `tijd`, `voornaam`, `tussenvoegs`, `achternaam`, `telefoonnummer`, `email`, `opmerkingen`) VALUES
(2, '2018-12-11', '18:38:00', 'ijrji', 'ijoerio', 'iweri9ore9iorei9p0', 1234567890, 'email@example.com', 'IK BEN VEGANISTISCH IJOFSDJOISFIJFODSFDSJIOSDFIJO'),
(3, '0000-00-00', '00:00:00', 'voornaam', 'tussenvoeg', 'achternaam', 0, '', ''),
(4, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(5, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(6, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(7, '0000-00-00', '00:00:00', 'voornaam', 'tussenvoeg', 'achternaam', 0, '', ''),
(8, '0000-00-00', '00:00:00', 'pak', 'je moeder', 'cheung', 0, '', ''),
(9, '0000-00-00', '00:00:00', 'voornaam', 'tussenvoeg', 'achternaam', 0, '', ''),
(10, '0000-00-00', '00:00:00', 'uh', 'tussenvoeg', '', 0, '', ''),
(11, '0000-00-00', '00:00:00', 'jn', 'tussenvoeg', 'jb', 0, '', ''),
(12, '0000-00-00', '00:00:00', 'Wessel', 'tussenvoeg', 'bakker', 0, '', ''),
(13, '0000-00-00', '00:00:00', 'uygg', '', 'uyguy', 0, '', ''),
(14, '0000-00-00', '00:00:00', 'uygg', '', 'uyguy', 0, '', ''),
(15, '0000-00-00', '21:09:00', 'Pak-ling', 'UIHUI', 'Cheung', 6, 'pak_ling@hotmail.nl', 'IK BEN VEGANISCHITS'),
(16, '0000-00-00', '21:21:00', 'Pak-ling', '', 'Cheung', 6, 'pak_ling@hotmail.nl', ''),
(17, '0000-00-00', '21:21:00', 'je moeder', '', 'cheung ', 2, 'pak_ling@hotmail.nl', 'graag een kinderzitje bij het raam'),
(18, '0000-00-00', '21:20:00', 'jesse', '', 'minneboo', 6, 'jesse@hotmail.nl', 'ik ben met 5 mensen, IK BEN VEGA'),
(19, '0000-00-00', '21:20:00', 'Ruben', 'van', 'Tilburg', 6, 'Ruben@hotmail.nl', 'IKBEN VEGANISTISCH'),
(20, '0000-00-00', '21:21:00', 'o', '', 'm', 6, 'pak_ling@hotmail.nl', 'je moeder is dik'),
(21, '0000-00-00', '21:21:00', 'je', '', 'moeder', 6, 'pak_ling@hotmail.nl', 'je moeder is dik harharharhar ksdhkfsdhjksdfkjhsdfhjksdfhkjfsdhjksdfkjhsdfhkjfsdhkjfsdhkjsdfhkjsdfhkjdfs'),
(22, '0000-00-00', '12:23:00', 'abcdefghijklmnopqrst', 'je moeder ', 'lol123456789011121314151617181', 21, 'pak_ling@jemoederiseenoetlulikvulffeenmokerlangeem', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'),
(23, '0000-00-00', '12:23:00', 'abcdefghijklmnopqrst', 'je moeder ', 'lol123456789011121314151617181', 21, 'pak_ling@jemoederiseenoetlulikvulffeenmokerlangeem', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'),
(24, '0000-00-00', '21:21:00', 'kjkjhj', 'huhuh', 'hvhvv', 6, 'pak_ling@hotmail.nl', '                guyuyuyughgygu'),
(25, '0000-00-00', '00:12:00', 'Pak-ling', '', 'Cheung', 6, 'pak_ling@hotmail.nl', '                hjh'),
(26, '0000-00-00', '21:21:00', 'hhbhbhhjbhbhbhbbhbh', 'hbhbhbhb', 'hbhbhbhbhbhbh', 6, 'pak_ling@hotmail.nl', '                uihuihiuhuh'),
(27, '0000-00-00', '21:21:00', 'lolololol', 'lolololol', 'llolololololololol', 6, 'pak_ling@hotmail.nl', '                uihuihiuhuh'),
(28, '0000-00-00', '04:02:00', 'Thijs', '', 'Lander', 6, 'thijs_lander@hotmail.nl', 'Ik ben allergisch voor eiwitten, koolhydraten en vetten en water'),
(29, '0000-00-00', '21:21:00', 'Sara', 'van', 'Duijvenvoorden', 6, 'pak_ling@hotmail.com', ''),
(30, '2001-08-21', '21:21:00', 'Paklong', '', 'Cheung', 6, 'pak_long@live.nl', '                '),
(31, '2001-08-21', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '                '),
(32, '2019-01-08', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '                '),
(33, '2019-01-08', '21:21:00', 'Paklong', 'van der', 'Cheung', 643440077, 'jenny.cheung.kw@gmail.com', 'IK WIL EEN KINDERZITJE, IK KOM MET 5 MENSEN TOTAAL                '),
(34, '2019-01-08', '22:15:00', 'Lean', '', 'Hsu', 688888888, 'leanmobgames@gmail.com', 'Graag tafel bij het raam, zijn met zijn 6en, 1 heeft gluten allergie, 1 kinderzitje'),
(35, '2019-01-08', '22:15:00', 'Lean', '', 'Hsu', 688888888, 'leanmobgames@gmail.com', 'Graag tafel bij het raam, zijn met zijn 6en, 1 heeft gluten allergie, 1 kinderzitje'),
(36, '2019-01-08', '22:15:00', 'Lean', '', 'Hsu', 688888888, 'leanmobgames@gmail.com', 'Graag tafel bij het raam, zijn met zijn 6en, 1 heeft gluten allergie, 1 kinderzitje'),
(37, '2019-01-09', '20:20:00', 'pak', 'ling', 'cheung', 630085424, 'pak_ling@hotmail.nl', 'Graag een kinderzitje, 1 iemand heeft een gluten allergie, we zijn met zijn 8ten                '),
(38, '2019-01-09', '17:30:00', 'jjj', '', 'jjj', 688888888, 'pak_ling@hotmail.nl', '                '),
(39, '2019-01-09', '18:00:00', 'kkk', '', 'kkk', 612345678, 'matt1275@gmail.com', '                '),
(40, '2019-01-09', '00:00:00', 'uhuhuhu', 'uhuhuhu', 'uhuhuhh', 630085424, 'pak_ling@hotmail.nl', ''),
(41, '2019-01-09', '00:00:00', 'popopopopopo', 'popopopopo', 'popopopopopo', 630085424, 'pak_ling@hotmail.nl', ''),
(42, '2019-01-09', '17:00:00', 'Tobias', '', 'Zevenhoven', 630085424, 'pak_ling@hotmail.nl', 'Geen chinees      '),
(43, '2019-01-09', '16:30:00', 'Amber', '', 'SChimmel', 630085424, 'pak_ling@hotmail.nl', '           '),
(44, '2019-01-10', '21:21:00', 'Pak-ling', '', 'tuyttuj', 630085424, 'pak_ling@hotmail.nl', 'fyhyhgyhtyth                '),
(45, '2019-01-10', '21:21:00', 'okokopkokok', 'okokokokok', 'okokokokokoko', 612345678, 'pak@jemoeder.com', ''),
(46, '2019-01-14', '21:21:00', 'dsadasd', 'dasd', 'asdasdasda', 612345678, 'pak@hotmail.nl', '       eafsfsdfsdfsdfsdfsdfsdfdsf         '),
(47, '2019-01-14', '18:00:00', 'jijijjiijj', 'iijij', 'ijjijjijji', 622222222, 'long@live.nl', ''),
(48, '2019-01-14', '21:20:00', 'je vader', '', 'lol', 612345678, 'idid@email.com', '                '),
(49, '2019-01-15', '12:12:00', 'lolololololo', 'jnjnj', 'olololololol', 612345678, 'pak_ling@Hotmail.nl', ''),
(50, '2019-01-15', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '                busvhuifdhuidfdgfhudgfhui'),
(51, '2019-01-15', '20:20:00', 'uihuh', 'huh', 'uhu', 612345678, 'long@live.nl', ''),
(56, '2019-01-16', '21:21:00', 'Jesse', '', 'Minneboo', 612345678, 'jesse_minneboo@gmail.com', ''),
(57, '2019-01-16', '21:21:00', 'Jesse', '', 'Minneboo', 612345678, 'pak_lap@hotmail.nl', 'jdfjdfijodfjiodfjiodfgijogfd'),
(60, '2019-01-19', '20:59:00', 'yeet', 'van', 'yoot', 600000000, 'SELECT*ROMreservering@ihif.com', '          jesse is mokergay\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r'),
(61, '2019-01-19', '19:44:00', 'pakling', '', 'cheung', 612345678, 'pak_ling@hotmail.nl', ''),
(66, '4568-03-12', '12:34:00', 'session_start();  //', 'session_st', 'session_start();  //If our ses', 612345678, 'pak_ling@hotmail.nl', '                session_start();  //If our session doesn\'t exist, redirect & exit script if (!isset($_SESSION[\'naam\'])) {     header(\'Location: admin_login.php\');     exit; }  //Get variable from sess'),
(67, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(68, '2019-01-21', '21:21:00', 'paklng', 'gvgvgvg', 'gvgvg', 612345678, 'pak_ling@hotmail.nl', ''),
(69, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(70, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(71, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(72, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(76, '2019-01-22', '21:21:00', 'Arch', '', 'Dragon', 612345678, 'mail@mail.com', 'ooololol'),
(78, '0000-00-00', '21:21:00', '', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '2121'),
(79, '1991-02-21', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', 'wefwefwefwef'),
(80, '0000-00-00', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '2112'),
(81, '0000-00-00', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '2112'),
(82, '0000-00-00', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '2112'),
(83, '1211-02-21', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '2121212121'),
(85, '2019-01-23', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', 'jjnjn'),
(87, '2019-01-23', '21:21:00', 'Jesse', '', 'Minneboo', 612345678, 'pak_ling@hotmail.nl', ''),
(88, '2019-01-23', '23:23:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', '7h7u77u7u777u7'),
(89, '2019-01-23', '21:21:00', 'Pak-ling', '', 'Cheung', 630085424, 'pak_ling@hotmail.nl', ''),
(90, '2019-01-23', '21:21:00', 'Cadda', '', 'Cadda', 612345678, 'pak_ling@hotmail.nl', 'efwefwefwefewf'),
(92, '2019-01-23', '16:00:00', 'Fernando', 'Julio', 'Fernandes', 632244444, 'ferdando@fernandes.nl', 'Alles in het Spaans'),
(101, '2019-01-24', '20:15:00', 'Jenny', '', 'Cheung', 643440077, 'pak_ling@hotmail.nl', 'Graag een tafel bij het raam'),
(102, '2019-01-24', '20:30:00', 'Jesse', '', 'Minneboo', 612345678, 'ijsijda@mail.com', ''),
(104, '2019-12-26', '20:00:00', 'Ruben', 'van', 'Tilburg', 637330539, 'rubenvt8@gmail.com', 'Ik wil een maid. '),
(105, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(106, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(107, '0000-00-00', '00:00:00', '', '', '', 0, '', ''),
(108, '0000-00-00', '00:00:00', 'Pak-ling', '', '', 0, '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
