-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 10 2017 г., 23:34
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `seiz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `text` varchar(1024) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `is_ready` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `todo`
--

INSERT INTO `todo` (`id`, `name`, `email`, `text`, `foto`, `is_ready`) VALUES
(4, 'asdf', 'asdf@sdf.sdf', 'sdf fsdg dfg22 44 556666 df adsf dsa fa\r\nsd \r\nf\r\na sdf sdasda', '/webroot/uploads/e2b478f39eeb6a6aaf472a1b9df6d1c4.jpg', 1),
(14, 'UserMan', 'asease@dasdasd.rg', ' afhg hjgghj jhg hÐ¸Ð»Ð¼Ð¸Ð»Ð¼ÑÐ¸Ð»ÑÐ¼Ð»Ð¸Ð´ ÑÐ¼Ð´Ð¸Ñ‡ÑÐ¾Ð¼ \r\n Ð¿\r\nÑ‹Ð²Ð°Ð¿ Ð°Ñ‹Ð¿ Ð²Ð°Ð¿ as df afsd fffffs df', '/webroot/uploads/e2b478f39eeb6a6aaf472a1b9df6d1c4.jpg', 0),
(15, 'asdfasd', 'sasdsad@sdfsd.sdfsdf', 'asdfads fasdf d saf\r\n\r\n\r\na sdf sdaf  ÑƒÐºÑ†ÑƒÐºÑ†Ñƒ Ð»Ñ‹Ð²Ð»Ð°Ð¾ Ð¾Ð»Ñ„Ñ‹Ð² ', '/webroot/uploads/7c80780566d9c96e585267cc5910a177.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
