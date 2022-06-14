-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 14 2022 г., 17:34
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `moogle`
--

-- --------------------------------------------------------

--
-- Структура таблицы `websites`
--

CREATE TABLE `websites` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `keywords` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `websites`
--

INSERT INTO `websites` (`id`, `name`, `link`, `keywords`, `description`) VALUES
(3, 'Ландоград', 'https://landograd.ru', 'landograd, л2, L2, майнкрафт, minecraft, сервер, ландоград, фрл, лнрг, трл', 'Л2 - Лучший сервер Minecraft!'),
(4, 'БЛВ ТВ', 'https://blv.landograd.ru', 'landograd, л2, L2, ландоград, фрл, телеканал, тв, tv, блв, блв тв, blv, blv tv, частный канал, криминальный ландоград, 300 секунд', 'Частный телеканал ФРЛ.<br>\r\nИменно на нем транслируется \"Криминальный Ландоград\", \"300 секунд\". '),
(5, 'Landosoft', 'https://landograd.ru/landosoft', 'landograd, л2, L2, landosoft, ландософт, ландос, ланд ос, ландоград, фрл, landos, land os', 'Landosoft - делаем для вас!'),
(14, 'landosoft', '111', '11', '111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
