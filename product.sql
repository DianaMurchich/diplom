-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 24 2021 г., 13:58
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
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categories` varchar(50) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `url_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `categories`, `weight`, `url_img`) VALUES
(1, 'Рыжик', 700, '', '', '', './img/BD/Торт1.jpg'),
(2, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg'),
(3, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg'),
(4, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg'),
(5, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg'),
(6, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg'),
(7, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg'),
(8, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg'),
(9, 'Наполеон', 700, '', '', '', './img/BD/Торт1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
