-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Wrz 2023, 15:37
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `magazyn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dostępność`
--

CREATE TABLE `dostępność` (
  `id_Dostępny` int(11) NOT NULL,
  `Dostępność` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `dostępność`
--

INSERT INTO `dostępność` (`id_Dostępny`, `Dostępność`) VALUES
(1, 'Tak'),
(2, 'Nie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id_Produktu` int(11) NOT NULL,
  `Nazwa` varchar(128) NOT NULL,
  `id_Rodzaju` int(11) NOT NULL,
  `id_Dostępny` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id_Produktu`, `Nazwa`, `id_Rodzaju`, `id_Dostępny`) VALUES
(1, 'Stół', 2, 1),
(2, 'Szafa', 2, 1),
(3, 'Książki', 4, 1),
(4, 'Album', 4, 1),
(5, 'Blacha', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaje`
--

CREATE TABLE `rodzaje` (
  `id_Rodzaju` int(11) NOT NULL,
  `Rodzaj` varchar(128) NOT NULL,
  `zdjecie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `rodzaje`
--

INSERT INTO `rodzaje` (`id_Rodzaju`, `Rodzaj`, `zdjecie`) VALUES
(1, 'Metalic', 1),
(2, 'Wooden', 2),
(3, 'Glass', 3),
(4, 'Paper', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id_Roli` int(11) NOT NULL,
  `Rola` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id_Roli`, `Rola`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Guest');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statusy`
--

CREATE TABLE `statusy` (
  `id_Statusu` int(11) NOT NULL,
  `Status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `statusy`
--

INSERT INTO `statusy` (`id_Statusu`, `Status`) VALUES
(1, 'Przyjęte do realizacji'),
(2, 'W trakcie realizacji'),
(3, 'Gotowe do odbioru'),
(4, 'Odebrane');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_User` int(11) NOT NULL,
  `Imie` varchar(128) NOT NULL,
  `Nazwisko` varchar(128) NOT NULL,
  `id_Roli` int(11) NOT NULL DEFAULT 2,
  `Login` varchar(128) NOT NULL,
  `Hasło` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamówienia`
--

CREATE TABLE `zamówienia` (
  `id_Zamówienia` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_Statusu` int(11) NOT NULL DEFAULT 1,
  `id_User` int(11) NOT NULL,
  `id_Produktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dostępność`
--
ALTER TABLE `dostępność`
  ADD PRIMARY KEY (`id_Dostępny`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_Produktu`),
  ADD KEY `id_Rodzaju` (`id_Rodzaju`),
  ADD KEY `id_Dostępny` (`id_Dostępny`);

--
-- Indeksy dla tabeli `rodzaje`
--
ALTER TABLE `rodzaje`
  ADD PRIMARY KEY (`id_Rodzaju`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_Roli`);

--
-- Indeksy dla tabeli `statusy`
--
ALTER TABLE `statusy`
  ADD PRIMARY KEY (`id_Statusu`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_User`),
  ADD KEY `id_Roli` (`id_Roli`);

--
-- Indeksy dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD PRIMARY KEY (`id_Zamówienia`),
  ADD KEY `id_User` (`id_User`),
  ADD KEY `id_Produktu` (`id_Produktu`),
  ADD KEY `id_Statusu` (`id_Statusu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dostępność`
--
ALTER TABLE `dostępność`
  MODIFY `id_Dostępny` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_Produktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `rodzaje`
--
ALTER TABLE `rodzaje`
  MODIFY `id_Rodzaju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `id_Roli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `statusy`
--
ALTER TABLE `statusy`
  MODIFY `id_Statusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  MODIFY `id_Zamówienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`id_Rodzaju`) REFERENCES `rodzaje` (`id_Rodzaju`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produkty_ibfk_2` FOREIGN KEY (`id_Dostępny`) REFERENCES `dostępność` (`id_Dostępny`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_Roli`) REFERENCES `role` (`id_Roli`);

--
-- Ograniczenia dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD CONSTRAINT `zamówienia_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `users` (`id_User`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zamówienia_ibfk_2` FOREIGN KEY (`id_Produktu`) REFERENCES `produkty` (`id_Produktu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zamówienia_ibfk_3` FOREIGN KEY (`id_Statusu`) REFERENCES `statusy` (`id_Statusu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
