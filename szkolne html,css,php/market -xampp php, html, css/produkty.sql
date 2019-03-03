-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lut 2018, 22:40
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `market`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `produkt` text COLLATE utf16_polish_ci NOT NULL,
  `cena` float NOT NULL,
  `kreskowy` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `produkt`, `cena`, `kreskowy`, `ilosc`) VALUES
(1, 'Akolita', 75, 100, 15),
(2, 'Ghoul', 120, 101, 20),
(3, 'Bies podziemi', 215, 102, 6),
(4, 'Gargulec', 185, 103, 10),
(5, 'Plugawiec', 240, 104, 2),
(6, 'Wagon', 230, 105, 2),
(7, 'Nekromanta', 145, 106, 10),
(8, 'Banshee', 155, 107, 5),
(9, 'Zmij mrozu', 385, 108, 1),
(10, 'cien', 15, 109, 1),
(11, 'Obsydianowa statua', 200, 110, 4),
(12, 'Niszczyciel', 110, 111, 6),
(13, 'Szkielet wojownik', 30, 112, 35),
(14, 'Szkielet mag', 25, 113, 56),
(15, 'Infernal', 100, 114, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
