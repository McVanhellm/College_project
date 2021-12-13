-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Дек 13 2021 г., 02:31
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fizikpro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `idachiv` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `fineValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `achievement`
--

INSERT INTO `achievement` (`id`, `userid`, `idachiv`, `value`, `fineValue`) VALUES
(4, 9, 1, 12, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `fcomment`
--

CREATE TABLE `fcomment` (
  `id` int(11) NOT NULL,
  `autherid` int(11) NOT NULL,
  `idthems` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fcomment`
--

INSERT INTO `fcomment` (`id`, `autherid`, `idthems`, `content`) VALUES
(1, 9, 1, 'Просто тестовый ввод'),
(2, 9, 1, 'Просто тестовый ответ 2');

-- --------------------------------------------------------

--
-- Структура таблицы `fthems`
--

CREATE TABLE `fthems` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `contentHTML` text NOT NULL,
  `autherid` int(11) NOT NULL,
  `mark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fthems`
--

INSERT INTO `fthems` (`id`, `title`, `contentHTML`, `autherid`, `mark`) VALUES
(1, 'Что такое физика?', 'Помогите понять что такое физика (далее возможный переход на html разметку из коробки)', 9, '');

-- --------------------------------------------------------

--
-- Структура таблицы `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `titile` text NOT NULL,
  `description` text NOT NULL,
  `senderid` int(11) NOT NULL,
  `recipientid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `subscriberid` int(11) NOT NULL,
  `creatorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `title`, `type`, `level`) VALUES
(1, 'Тема 1 - Тут я тестил добавление :)', 0, 1),
(2, 'Тема 2 - Тут я тестил добавление :)', 0, 1),
(3, 'Тема 1 - Тут я тестил добавление :)', 0, 1),
(4, 'Тема 2 - Тут я тестил добавление :)', 0, 1),
(5, 'Тема 5 - Тест раздела номер 5', 0, 5),
(6, 'Тема 5 - Тест раздела номер 5', 0, 5),
(7, 'Тест 6 раздел', 0, 6),
(8, 'Тест 6 раздел', 0, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `avatar`) VALUES
(9, 'xoheveras', 'e10adc3949ba59abbe56e057f20f883e', 'xoheveras.tm@gmail.com', 'xoheveras.gif');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fcomment`
--
ALTER TABLE `fcomment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fthems`
--
ALTER TABLE `fthems`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `fcomment`
--
ALTER TABLE `fcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `fthems`
--
ALTER TABLE `fthems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
