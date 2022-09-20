-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Вер 20 2022 р., 21:39
-- Версія сервера: 10.4.24-MariaDB
-- Версія PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `nominazer`
--

-- --------------------------------------------------------

--
-- Структура таблиці `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `liked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `letter_count` int(255) NOT NULL DEFAULT 3,
  `word_count` int(255) NOT NULL DEFAULT 1,
  `language` varchar(255) NOT NULL DEFAULT 'EN',
  `capital_letters` varchar(255) NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `options`
--

INSERT INTO `options` (`id`, `user_id`, `letter_count`, `word_count`, `language`, `capital_letters`) VALUES
(1, 0, 3, 1, 'EN', '0');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'Nic', '123456', 'user');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT для таблиці `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
