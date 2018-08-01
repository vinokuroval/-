-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 01 2018 г., 16:20
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `to`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `chek_message` text NOT NULL,
  `dop_inf` text NOT NULL,
  `data_sozd` date NOT NULL,
  `data_ispr` date NOT NULL,
  `ispravil` text NOT NULL,
  `podtverjd_pol` varchar(40) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`message_id`, `id`, `chek_message`, `dop_inf`, `data_sozd`, `data_ispr`, `ispravil`, `podtverjd_pol`) VALUES
(1, 2, 'Исправен', 'Не работает мышка', '2017-06-27', '2017-07-30', 'ADMINISTRATOR', 'Ремонт подтверждён'),
(2, 4, 'Исправен', 'Закончилась краска в принтере', '2017-06-27', '2017-07-27', 'ADMINISTRATOR', 'Ремонт не подтверждён'),
(3, 4, 'Исправен', 'не работает звук в калонках', '2017-06-27', '2017-06-27', 'ADMINISTRATOR', 'Ремонт подтверждён'),
(4, 3, 'Исправен', 'ВИРУСЫ, ВОКРУГ ВИРУСЫ', '2017-06-27', '2017-07-18', 'ADMINISTRATOR', 'Ремонт не подтверждён'),
(5, 4, 'Исправен', 'test', '2017-06-29', '2017-06-29', 'ADMINISTRATOR', 'Ремонт не подтверждён'),
(6, 4, 'Исправен', 'test1', '2017-06-29', '2017-06-29', 'ADMINISTRATOR', 'Ремонт не подтверждён'),
(7, 4, 'Исправен', 'test2', '2017-06-29', '2017-06-29', 'ADMINISTRATOR', 'Ремонт подтверждён'),
(8, 2, 'Исправен', '1', '2017-07-19', '2017-07-20', 'ADMINISTRATOR', 'Ремонт подтверждён'),
(9, 2, 'Исправен', '1', '2017-07-19', '2017-07-31', 'Винокуров Александр', 'Ремонт подтверждён'),
(10, 2, 'Исправен', '2', '2017-07-19', '2017-11-16', 'Винокуров Александр', 'Ремонт подтверждён'),
(11, 2, 'Исправен', '22', '2017-07-19', '2017-07-19', 'ADMINISTRATOR', 'Ремонт подтверждён'),
(12, 4, 'Исправен', 'Проверка23,07,2017', '2017-07-24', '2017-07-24', 'ADMINISTRATOR', 'Ремонт подтверждён'),
(13, 22, 'Исправен', 'ПРОБЛЕМАААААА!!!!!!!!! НЕ РАБОТАЕТ СОВСЕМ СОВСЕМ', '2017-07-30', '2017-07-30', 'ADMINISTRATOR', 'Ремонт подтверждён'),
(32, 2, 'Исправен', '12', '2017-09-25', '2017-11-16', 'Винокуров Александр', 'Ремонт подтверждён'),
(33, 21, 'Исправен', 'wr', '2017-09-25', '2017-09-26', 'Винокуров Александр', 'Ремонт не подтверждён'),
(42, 2, 'Поломка', 'dwdwwddwde', '2017-09-26', '0000-00-00', '', 'Ремонт не подтверждён'),
(43, 2, 'Поломка', 'bqwhjbwq', '2017-09-26', '0000-00-00', '', 'Ремонт не подтверждён'),
(44, 2, 'Исправен', '12345678', '2017-09-27', '2017-09-27', 'Винокуров Александр', 'Ремонт подтверждён'),
(45, 21, 'Поломка', 'ghddh', '2017-11-16', '0000-00-00', '', 'Ремонт не подтверждён'),
(46, 21, 'Поломка', 'qwertyuiop', '2017-11-16', '0000-00-00', '', 'Ремонт не подтверждён'),
(47, 2, 'Исправен', 'не работает ajax', '2017-11-16', '2017-11-16', 'Винокуров Александр', 'Ремонт подтверждён');

-- --------------------------------------------------------

--
-- Структура таблицы `oborudovanie`
--

CREATE TABLE IF NOT EXISTS `oborudovanie` (
  `name_ob` varchar(250) NOT NULL,
  `oborud_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_vvoda` date NOT NULL,
  `vydan_polz` varchar(150) NOT NULL,
  `id_vid` int(11) NOT NULL,
  `zanyato` int(11) NOT NULL,
  `id_sklad_polz` int(11) NOT NULL,
  PRIMARY KEY (`oborud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=207 ;

--
-- Дамп данных таблицы `oborudovanie`
--

INSERT INTO `oborudovanie` (`name_ob`, `oborud_id`, `data_vvoda`, `vydan_polz`, `id_vid`, `zanyato`, `id_sklad_polz`) VALUES
('Lenovo 1', 192, '2017-09-10', '10', 6, 1, 15),
('Lenovo 2', 193, '2017-09-10', '15', 6, 0, 15),
('Lenovo 3', 194, '2017-09-10', '21', 6, 1, 15),
('Рация 1', 195, '2017-09-10', '15', 12, 0, 15),
('Рация 2', 196, '2017-09-10', '15', 12, 0, 15),
('HP 1', 197, '2017-09-10', '15', 7, 0, 15),
('Kyosera 1', 198, '2017-09-10', '15', 7, 0, 15),
('Samsung 1', 199, '2017-09-10', '15', 7, 0, 15),
('Шуруповёрт 1', 200, '2017-09-10', '15', 8, 2, 15),
('Дрель 1', 201, '2017-09-10', '21', 8, 1, 15),
('Болгарка 1', 202, '2017-09-10', '4', 8, 1, 15),
('Болгарка 2', 203, '2017-09-10', '15', 8, 0, 15),
('Лом 1', 204, '2017-09-10', '15', 8, 0, 15),
('Стремянка 1', 205, '2017-09-10', '3', 8, 1, 15),
('Стремянка 2', 206, '2017-09-10', '15', 8, 0, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `oborudovanie_to`
--

CREATE TABLE IF NOT EXISTS `oborudovanie_to` (
  `oborud_id` int(11) NOT NULL,
  `data_pred` date NOT NULL,
  `chek` varchar(25) NOT NULL,
  `data_new` date NOT NULL,
  `sotr` varchar(50) NOT NULL,
  `data_prov` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `oborudovanie_to`
--

INSERT INTO `oborudovanie_to` (`oborud_id`, `data_pred`, `chek`, `data_new`, `sotr`, `data_prov`) VALUES
(192, '2017-09-10', 'проведено', '2017-09-21', 'Skladovskiy', '2017-09-18'),
(193, '2017-09-10', 'проведено', '2017-08-09', 'ADMINISTRATOR', '2017-09-18'),
(194, '2017-09-10', 'проведено', '2017-09-30', 'Skladovskiy', '2017-09-18'),
(195, '2017-09-10', 'проведено', '2017-10-25', 'Skladovskiy', '2017-11-16'),
(196, '2017-09-10', 'проведено', '2017-09-27', 'Skladovskiy', '2017-09-11'),
(197, '2017-09-10', 'проведено', '2017-09-11', 'Skladovskiy', '2017-09-27'),
(198, '2017-09-10', 'не проведено', '2018-09-10', '', '0000-00-00'),
(199, '2017-09-10', 'проведено', '2017-09-30', 'Skladovskiy', '2017-09-18'),
(200, '2017-09-10', 'не проведено', '2018-09-10', '', '0000-00-00'),
(201, '2017-09-10', 'не проведено', '2017-09-30', '', '0000-00-00'),
(202, '2017-09-10', 'не проведено', '2017-10-27', '', '0000-00-00'),
(203, '2017-09-10', 'не проведено', '2018-09-10', '', '0000-00-00'),
(204, '2017-09-10', 'не проведено', '2018-09-10', '', '0000-00-00'),
(205, '2017-09-10', 'проведено', '2017-10-15', 'ADMINISTRATOR', '2017-09-27'),
(206, '2017-09-10', 'проведено', '2017-10-13', 'ADMINISTRATOR', '2017-09-26'),
(196, '2017-09-10', 'не проведено', '2017-10-20', '', '0000-00-00'),
(192, '2017-09-18', 'не проведено', '2018-09-18', '', '0000-00-00'),
(205, '2017-09-25', 'проведено', '2017-09-25', 'ADMINISTRATOR', '2017-09-27'),
(206, '2017-09-26', 'не проведено', '2018-09-26', '', '0000-00-00'),
(205, '2017-09-26', 'проведено', '2017-10-12', 'ADMINISTRATOR', '2017-09-27'),
(205, '2017-09-27', 'не проведено', '2018-09-27', '', '0000-00-00'),
(197, '2017-09-27', 'не проведено', '2018-09-27', '', '0000-00-00'),
(195, '2017-11-16', 'не проведено', '2018-11-16', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `otvetstv`
--

CREATE TABLE IF NOT EXISTS `otvetstv` (
  `polz` int(11) NOT NULL,
  `oborud` int(11) NOT NULL,
  `data_vydachi` date NOT NULL,
  `data_vozvr` date NOT NULL,
  `chek_vozvr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otvetstv`
--

INSERT INTO `otvetstv` (`polz`, `oborud`, `data_vydachi`, `data_vozvr`, `chek_vozvr`) VALUES
(4, 202, '2017-09-10', '0000-00-00', 1),
(21, 201, '2017-09-10', '0000-00-00', 1),
(10, 192, '2017-09-10', '0000-00-00', 1),
(21, 194, '2017-09-10', '0000-00-00', 1),
(3, 205, '2017-09-10', '0000-00-00', 1),
(15, 204, '2017-09-13', '2017-09-13', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `remont`
--

CREATE TABLE IF NOT EXISTS `remont` (
  `id_rem` int(11) NOT NULL AUTO_INCREMENT,
  `data_otpr` date NOT NULL,
  `data_vozvr` date NOT NULL,
  `chek_vozvr` int(11) NOT NULL,
  `id_ob` int(11) NOT NULL,
  PRIMARY KEY (`id_rem`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `remont`
--

INSERT INTO `remont` (`id_rem`, `data_otpr`, `data_vozvr`, `chek_vozvr`, `id_ob`) VALUES
(9, '2017-09-10', '2017-09-10', 1, 203),
(10, '2017-09-10', '2017-10-16', 1, 197),
(11, '2017-09-10', '0000-00-00', 0, 200),
(12, '2017-09-10', '2017-09-10', 1, 203);

-- --------------------------------------------------------

--
-- Структура таблицы `spisok_doljnostei`
--

CREATE TABLE IF NOT EXISTS `spisok_doljnostei` (
  `id_doljn` int(11) NOT NULL AUTO_INCREMENT,
  `doljnost` varchar(250) NOT NULL,
  PRIMARY KEY (`id_doljn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `spisok_doljnostei`
--

INSERT INTO `spisok_doljnostei` (`id_doljn`, `doljnost`) VALUES
(1, 'Начальник участка ЭСАиТМ'),
(2, 'Инженер-электроник первой категории'),
(3, 'Слесарь КИПиА'),
(4, 'Электромеханик по средствам автоматики'),
(5, 'Техник'),
(6, 'Работник склада'),
(8, 'Инженер КИПиА');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `komnata` text NOT NULL,
  `FIO` text NOT NULL,
  `doljn` int(11) NOT NULL,
  `chek_pol` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `komnata`, `FIO`, `doljn`, `chek_pol`) VALUES
(1, 'admin', 'admin', 'Кабинет начальника ЭСАиТМ', 'ADMINISTRATOR', 1, 1),
(2, 'polz', 'polz', '1011', 'Иванов Иван Иванович', 2, 0),
(3, 'polz1', 'polz1', '1700', 'Кузнецов Генадий', 3, 0),
(4, 'polz2', 'polz2', '128', 'Сидоров Валерий Васильевич', 4, 0),
(10, 'polz3', 'polz3', 'Кабинет начальника ЭСА и ТМ', 'Кочетков Эдуард Иванович', 5, 3),
(15, 'sklad', 'sklad', 'Склад №1', 'Skladovskiy', 6, 2),
(21, 'texnik', 'texnik', 'Кабинет начальника ЭСА и ТМ', 'Винокуров Александр', 5, 3),
(22, 'maiya', 'maiya', '121212', 'Майка', 3, 0),
(23, 'prob', 'prob', 'prob', 'prob', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `vid_oborud`
--

CREATE TABLE IF NOT EXISTS `vid_oborud` (
  `id_vid` int(11) NOT NULL AUTO_INCREMENT,
  `vid_ob` varchar(50) NOT NULL,
  PRIMARY KEY (`id_vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `vid_oborud`
--

INSERT INTO `vid_oborud` (`id_vid`, `vid_ob`) VALUES
(6, 'АРМ'),
(7, 'Принтер'),
(8, 'Инструмент'),
(12, 'Телефоны'),
(13, 'Чёнить');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
