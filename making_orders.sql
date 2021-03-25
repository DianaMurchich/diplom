-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 25 2021 г., 14:40
-- Версия сервера: 8.0.21
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diana`
--

-- --------------------------------------------------------

--
-- Структура таблицы `making_orders`
--

CREATE TABLE `making_orders` (
  `id` int NOT NULL,
  `first name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `e-mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` int NOT NULL,
  `message` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `making_orders`
--

INSERT INTO `making_orders` (`id`, `first name`, `last name`, `e-mail`, `phone`, `message`) VALUES
(1, 'ghgh', 'ggg', 'ghh@ggh', 4444, 'hhh');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `making_orders`
--
ALTER TABLE `making_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `making_orders`
--
ALTER TABLE `making_orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
