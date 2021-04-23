-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 apr 2021 om 19:52
-- Serverversie: 10.4.17-MariaDB
-- PHP-versie: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_user_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_token` varchar(255) DEFAULT NULL,
  `password_changed` timestamp NULL DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `admin_user`
--

INSERT INTO `admin_user` (`admin_user_id`, `email`, `password`, `password_token`, `password_changed`, `datetime`) VALUES
(1, 'test@test.nl', '$2y$10$3eJXM2NBYpOH8opTNAHVye/uRtxMhWNLS0NX9qpp1WqygPBnX4vjS', '8d7cd572dda8cbf4bb71e37faa52cf9d8d061969', '2021-02-18 16:06:05', '2021-02-17 15:32:17'),
(2, 'admin@test.com', '', NULL, NULL, '2021-03-08 10:57:04'),
(5, '200722@student.glu.nl', '', NULL, NULL, '2021-03-26 08:50:36'),
(7, 'vanden@xs4all.nl', '', NULL, NULL, '2021-03-26 08:51:42'),
(9, 'wessel069@gmail.com', '', NULL, NULL, '2021-03-26 08:52:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(265) NOT NULL,
  `description` varchar(265) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `active`) VALUES
(1, 'bureaulam', 'Test', 1),
(2, 'buitenlamp', 'Test', 1),
(3, 'designlamp', 'Test', 1),
(4, 'bureaulamp', 'Test', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `gender` varchar(265) NOT NULL,
  `first_name` varchar(265) NOT NULL,
  `middle_name` varchar(265) NOT NULL,
  `last_name` varchar(265) NOT NULL,
  `street` varchar(265) NOT NULL,
  `house_number` int(11) NOT NULL,
  `house_number_addon` varchar(265) NOT NULL,
  `zip_code` varchar(265) NOT NULL,
  `city` varchar(265) NOT NULL,
  `phone` int(11) NOT NULL,
  `e-mailadres` varchar(265) NOT NULL,
  `password` varchar(265) NOT NULL,
  `newsletter_subscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `gender`, `first_name`, `middle_name`, `last_name`, `street`, `house_number`, `house_number_addon`, `zip_code`, `city`, `phone`, `e-mailadres`, `password`, `newsletter_subscription`) VALUES
(1, 'man', 'R', 'fffjr', 'ziedani', 'Bankstraat', 0, 'r', '3581LM', '0684464817', 684464817, 'raghadzedani@gmail.com', 'test', 1),
(2, 'Man', 'Jesse', '', 'Pieter', 'Achterweg', 1, 'a', 'Hagestein', '4122ED', 612345678, 'jesse@gmail.com', 'Jesse', 0),
(3, 'Vrouw', 'Fleur', 'De', 'Bloem', 'Achterweg', 1, 'a', 'Hagestein', '4122ED', 612345678, 'fleur@gmail.com', 'Fleur', 0),
(4, 'Vrouw', 'Test', '', 'Test', 'Test', 1, 'a', 'Test', '4122ED', 612345678, 'Test@gmail.com', 'Test', 1),
(5, 'Man', 'Lars', '', 'Beugellink', 'Het laantje', 23, '', 'Hagestein', '4122ED', 612345678, 'Lars@gmail.com', 'Lars', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(265) NOT NULL,
  `description` varchar(265) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(265) NOT NULL,
  `weight` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `category_id`, `price`, `color`, `weight`, `active`) VALUES
(1, 'bureaulam', 'Test', 1, 67, 'wit', 300, 1),
(2, 'buitenlamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 2, 39, 'wit', 300, 1),
(3, 'gans-lamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 3, 39, 'wit', 300, 1),
(4, 'giraf-lamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 4, 39, 'wit', 300, 1),
(5, 'hektar', 'De lampenkap van textiel geeft een zacht en decoratief licht.<br><br>Lichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.<br><b>Gebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 1, 0, 'witttttt', 300, 1),
(6, 'jesse', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 1, 39, 'wit', 300, 1),
(7, 'lampje', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 1, 39, 'wit', 300, 1),
(8, 'llahra', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 1, 39, 'wit', 300, 1),
(9, 'struisvogel', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespre', 1, 39, 'wit', 300, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(265) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product_image`
--

INSERT INTO `product_image` (`product_image_id`, `product_id`, `image`, `active`) VALUES
(1, 1, 'arstid.jpg', 1),
(2, 2, 'buitenlamp.jpg', 1),
(3, 3, 'buitenlamp2.jpg', 1),
(4, 4, 'gans.jpg', 1),
(5, 5, 'giraf.jpg', 1),
(6, 6, 'giraf2.jpg', 1),
(7, 7, 'hektar.jpg', 1),
(8, 8, 'jesse.png', 1),
(9, 9, 'lampje.jpg', 1),
(10, 10, 'llahra.jpg', 1),
(11, 11, 'product.jpg', 1),
(12, 12, 'struisvogel.jpg', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review` int(1) NOT NULL,
  `product_id` int(11) NOT NULL,
  `opmerking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `review`, `product_id`, `opmerking`) VALUES
(1, 1, 1, 'mooi'),
(2, 1, 1, 'mooi'),
(3, 1, 1, 'mooi'),
(4, 4, 1, 'mooi'),
(5, 4, 1, 'mooi'),
(6, 3, 1, 'mooi'),
(7, 5, 6, ''),
(8, 3, 6, ''),
(9, 3, 6, ''),
(10, 5, 9, 'mooi'),
(11, 3, 1, '3'),
(12, 3, 1, 'mooi'),
(13, 1, 1, 'mooi'),
(14, 1, 5, 'mooi'),
(15, 2, 7, ''),
(16, 5, 4, ''),
(17, 5, 1, ''),
(18, 5, 1, ''),
(19, 5, 8, ''),
(20, 5, 3, ''),
(21, 3, 2, ''),
(22, 1, 7, 'mooi'),
(23, 5, 7, ''),
(24, 4, 1, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `table_orde_detail`
--

CREATE TABLE `table_orde_detail` (
  `id` int(50) NOT NULL,
  `order_id` int(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `table_orde_detail`
--

INSERT INTO `table_orde_detail` (`id`, `order_id`, `product_id`, `amount`) VALUES
(1, 1, 5, 2),
(2, 1, 6, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(100) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `street` varchar(70) NOT NULL,
  `houseNumber` int(4) NOT NULL,
  `houseNumber_addon` varchar(4) NOT NULL,
  `ZipCode` varchar(8) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `delivery` enum('ophalen','bezorgen_thuis','bezorgen_anders','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `date`, `street`, `houseNumber`, `houseNumber_addon`, `ZipCode`, `city`, `country`, `paid`, `delivery`) VALUES
(1, 2, '2021-04-09 13:58:28', 'andere aflevering staat', 12, 'bis', '1234ax', 'Utrecht', 'Nederland', 1, 'bezorgen_anders'),
(2, 2, '2021-04-06 17:16:01', 'bankstraat', 12, 'bis', '1234am', 'Utrecht', 'Nederland', 1, 'bezorgen_thuis');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexen voor tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexen voor tabel `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product` (`product_id`);

--
-- Indexen voor tabel `table_orde_detail`
--
ALTER TABLE `table_orde_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT voor een tabel `table_orde_detail`
--
ALTER TABLE `table_orde_detail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
