-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Cze 2020, 11:43
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
  `miasto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `aukcje`
--

INSERT INTO `aukcje` (`id_aukcji`, `nazwa_aukcji`, `cena`, `miasto`) VALUES
(1, 'pilka', 150, 'wasilkow'),
(2, 'bmw m3', 150000, 'Bialystok'),
(4, 'laptop', 2800, 'Krakow'),
(7, 'Rower', 800, 'Sosnowiec');

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
(1, 3, 'Polska', 'zapytanie');

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
(1, 'admin1', 'admin1@gmail.com', '$2y$10$7vTviDn1CUng3.530JliJ.S5yhnGLOPc5Ak.dwQpRZckK1peLhpuW'),
(3, 'random1', 'random1@wp.pl', 'fba3f9182664681ffe2134bfd14f3fef9d3db32d3e51e8eaf3ec11a79ed9c5c4'),
(4, 'random2', 'random2@gmail.com', 'ea208e3cc57cc66947bb60396a90fef9a2986bcc589551d44e61b39966cc34b6'),
(5, 'test', 'test@gmail.com', '$2y$10$ZtfZBqSLSkExeWs.2L1dTetVP7e98Kwy9DAjjGJlMn2S6HFYcThva'),
(6, 'c1neks', 'baranowskimarcin7@gmail.com', '$2y$10$Hn2T4zUmZ6xDrcKzApPsQ.JdHNjMHfKdsgJPkXErBZBTKVqrpDKdm'),
(7, 'admin', 'admin@gmail.com', '$2y$10$jApkHMLv1nNK3LiHksQ/xeiX1mLckiWhom37N/IeDGl7Uf.Bf4W.W'),
(8, 'testing', 'testing@gmail.com', '$2y$10$o4U/C/4thBjTnphY2ouVJuU0MSkttJ3kyLNs93Z2Gfjdh8IaEp7Km'),
(9, 'kowal', 'kowal@gmail.com', '$2y$10$0fHX26KegyJgoqKwY7aJmuCUoGqbwjitXATsPXr5sWgQyID0RfLQa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `aukcje`
--
ALTER TABLE `aukcje`
  ADD PRIMARY KEY (`id_aukcji`);

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
  MODIFY `id_aukcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `kontakty`
--
ALTER TABLE `kontakty`
  MODIFY `id_kontaktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kontakty`
--
ALTER TABLE `kontakty`
  ADD CONSTRAINT `kontakty_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
