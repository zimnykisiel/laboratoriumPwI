-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Mar 2020, 16:09
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
-- Baza danych: `militaria`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oferta`
--

CREATE TABLE `oferta` (
  `id_oferty` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `typ` varchar(50) NOT NULL,
  `czy_uzywany` varchar(4) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `oferta`
--

INSERT INTO `oferta` (`id_oferty`, `nazwa`, `typ`, `czy_uzywany`, `id_uzytkownika`) VALUES
(3, 'Glock - 18', 'Pistol', 'true', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(64) NOT NULL,
  `id_zakupu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `email`, `login`, `haslo`, `id_zakupu`) VALUES
(3, 'kacper.antoniak2@gmail.com', 'Kacper', 'Sha-256', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zakup`
--

CREATE TABLE `zakup` (
  `id_zakupu` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `data_zakupu` date NOT NULL DEFAULT current_timestamp(),
  `id_oferty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zakup`
--

INSERT INTO `zakup` (`id_zakupu`, `id_uzytkownika`, `data_zakupu`, `id_oferty`) VALUES
(1, 1, '0000-00-00', 1),
(2, 2, '2020-03-10', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_oferty`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- Indeksy dla tabeli `zakup`
--
ALTER TABLE `zakup`
  ADD PRIMARY KEY (`id_zakupu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_oferty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `zakup`
--
ALTER TABLE `zakup`
  MODIFY `id_zakupu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
