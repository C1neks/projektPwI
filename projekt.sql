-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Mar 2020, 16:48
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `aukcje`
--

CREATE TABLE `aukcje` (
  `id_aukcji` int(11) NOT NULL,
  `nazwa_aukcji` varchar(50) NOT NULL,
  `cena` int(11) NOT NULL,
  `miasto` varchar(40) NOT NULL,
  `zdjecie` varchar(50) NOT NULL,
  `fk_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `aukcje`
--

INSERT INTO `aukcje` (`id_aukcji`, `nazwa_aukcji`, `cena`, `miasto`, `zdjecie`, `fk_uzytkownika`) VALUES
(1, 'Sprzedam Opla', 25000, 'Bialystok', 'opel.jpg', 3),
(2, 'Sprzedam BMW M3', 190000, 'Wasilkow', 'bmwm3.jpg', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontakty`
--

CREATE TABLE `kontakty` (
  `id_kontaktu` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `kraj` varchar(30) NOT NULL,
  `temat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kontakty`
--

INSERT INTO `kontakty` (`id_kontaktu`, `id_uzytkownika`, `kraj`, `temat`) VALUES
(1, 3, 'Polska', 'zapytanie'),
(2, 2, 'Polska', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `haslo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `login`, `email`, `haslo`) VALUES
(2, 'admin', 'admin@admin.com', '07fa71954dc6806dc9127b0566e5e520b5cffb48594f831d2ee9404a6e0c3d39'),
(3, 'random1', 'random1@wp.pl', 'fba3f9182664681ffe2134bfd14f3fef9d3db32d3e51e8eaf3ec11a79ed9c5c4'),
(4, 'random2', 'random2@gmail.com', 'ea208e3cc57cc66947bb60396a90fef9a2986bcc589551d44e61b39966cc34b6');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `aukcje`
--
ALTER TABLE `aukcje`
  ADD PRIMARY KEY (`id_aukcji`),
  ADD KEY `fk_uzytkownika` (`fk_uzytkownika`);

--
-- Indeksy dla tabeli `kontakty`
--
ALTER TABLE `kontakty`
  ADD PRIMARY KEY (`id_kontaktu`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `aukcje`
--
ALTER TABLE `aukcje`
  MODIFY `id_aukcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `kontakty`
--
ALTER TABLE `kontakty`
  MODIFY `id_kontaktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `aukcje`
--
ALTER TABLE `aukcje`
  ADD CONSTRAINT `aukcje_ibfk_1` FOREIGN KEY (`fk_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `kontakty`
--
ALTER TABLE `kontakty`
  ADD CONSTRAINT `kontakty_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
