-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 10 2022 г., 15:27
-- Версия сервера: 5.7.38
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `omskenergo.test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ot_couriers`
--

CREATE TABLE `ot_couriers` (
  `ot_couriers_id` int(11) NOT NULL,
  `ot_couriers_fio` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ot_couriers`
--

INSERT INTO `ot_couriers` (`ot_couriers_id`, `ot_couriers_fio`) VALUES
(1, 'Мельников Ярослав Иванович'),
(2, 'Горелов Александр Григорьевич'),
(3, 'Мельникова Злата Ильинична'),
(4, 'Козлова Валерия Данииловна'),
(5, 'Кондратова Дарья Владимировна'),
(6, 'Лапина Николь Фёдоровна'),
(7, 'Сафонов Николай Максимович'),
(8, 'Щербакова Маргарита Мироновна'),
(9, 'Ларин Роман Львович'),
(10, 'Поздняков Алексей Демидович'),
(11, 'Андреев Роман Тимофеевич'),
(12, 'Трофимов Евгений Фёдорович'),
(13, 'Константинов Владимир Даниилович'),
(14, 'Мещеряков Демид Кириллович');

-- --------------------------------------------------------

--
-- Структура таблицы `ot_regions`
--

CREATE TABLE `ot_regions` (
  `ot_regions_id` int(4) NOT NULL,
  `ot_regions_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_regions_duration_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ot_regions`
--

INSERT INTO `ot_regions` (`ot_regions_id`, `ot_regions_name`, `ot_regions_duration_day`) VALUES
(1, 'Санкт-Петербург', 4),
(2, 'Уфа', 2),
(3, 'Нижний Новгород', 3),
(4, 'Томск', 2),
(5, 'Кострома', 3),
(6, 'Екатеринбург', 2),
(7, 'Новосибирск', 1),
(8, 'Воронеж', 4),
(9, 'Стрежевой', 2),
(10, 'Астрахань', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `ot_schedule`
--

CREATE TABLE `ot_schedule` (
  `ot_schedule_id` int(11) NOT NULL,
  `ot_schedule_courier` int(11) NOT NULL,
  `ot_schedule_region` int(11) NOT NULL,
  `ot_schedule_date` date NOT NULL,
  `ot_schedule_date_arr` date NOT NULL,
  `ot_schedule_date_back` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ot_schedule`
--

INSERT INTO `ot_schedule` (`ot_schedule_id`, `ot_schedule_courier`, `ot_schedule_region`, `ot_schedule_date`, `ot_schedule_date_arr`, `ot_schedule_date_back`) VALUES
(7, 1, 1, '2022-07-10', '2022-07-14', '2022-07-18'),
(9, 2, 1, '2022-07-10', '2022-07-14', '2022-07-18'),
(13, 9, 6, '2022-06-02', '2022-06-04', '2022-06-06'),
(14, 7, 3, '2022-06-08', '2022-06-11', '2022-06-14'),
(15, 11, 5, '2022-06-15', '2022-06-18', '2022-06-21'),
(16, 14, 9, '2022-06-07', '2022-06-09', '2022-06-11'),
(17, 11, 4, '2022-06-14', '2022-06-16', '2022-06-18'),
(18, 8, 3, '2022-07-06', '2022-07-09', '2022-07-12'),
(19, 13, 10, '2022-06-22', '2022-06-26', '2022-06-30'),
(20, 4, 2, '2022-06-28', '2022-06-30', '2022-07-02'),
(21, 7, 8, '2022-06-20', '2022-06-24', '2022-06-28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ot_couriers`
--
ALTER TABLE `ot_couriers`
  ADD PRIMARY KEY (`ot_couriers_id`),
  ADD UNIQUE KEY `ot_couriers_id` (`ot_couriers_id`);

--
-- Индексы таблицы `ot_regions`
--
ALTER TABLE `ot_regions`
  ADD PRIMARY KEY (`ot_regions_id`),
  ADD UNIQUE KEY `ot_regions_id` (`ot_regions_id`);

--
-- Индексы таблицы `ot_schedule`
--
ALTER TABLE `ot_schedule`
  ADD PRIMARY KEY (`ot_schedule_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ot_couriers`
--
ALTER TABLE `ot_couriers`
  MODIFY `ot_couriers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `ot_regions`
--
ALTER TABLE `ot_regions`
  MODIFY `ot_regions_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `ot_schedule`
--
ALTER TABLE `ot_schedule`
  MODIFY `ot_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
