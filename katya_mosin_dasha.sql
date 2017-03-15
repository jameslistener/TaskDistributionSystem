-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 15 2017 г., 21:10
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `katya_mosin_dasha`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bind_tasks_projects`
--

CREATE TABLE IF NOT EXISTS `bind_tasks_projects` (
  `id_projects` int(11) NOT NULL,
  `id_tasks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bind_tasks_projects`
--

INSERT INTO `bind_tasks_projects` (`id_projects`, `id_tasks`) VALUES
(1, 1),
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `bind_users_tasks`
--

CREATE TABLE IF NOT EXISTS `bind_users_tasks` (
  `id_users` int(11) NOT NULL,
  `id_tasks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bind_users_tasks`
--

INSERT INTO `bind_users_tasks` (`id_users`, `id_tasks`) VALUES
(2, 1),
(6, 2),
(1, 1),
(15, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `Moniker` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `killline` date NOT NULL,
  `Warlord` int(11) NOT NULL,
  `Meaning` int(11) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`project_id`, `Moniker`, `Description`, `killline`, `Warlord`, `Meaning`) VALUES
(1, 'First', '', '2017-02-25', 4, 5),
(2, 'Second', 'Prosto ochen. Eto NORMA', '2017-12-15', 7, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `Chief` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`task_id`, `main_name`, `description`, `Chief`, `deadline`, `status`) VALUES
(1, 'HARD_TASK', 'Русская мафия напала на Москву. Обезвредить мафию ДУДОС атаками. Иначе мы все УМРЕМ!!!', 4, '2017-02-28', 10),
(2, 'EASY_TASK', 'Открыть Google. Нажать Enter.', 1, '2018-01-24', 1),
(3, 'KillMosin', 'KILLMOSINKILLHIM!!!!', 2, '2017-02-25', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `profession` text NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `profession`, `status`) VALUES
(1, 'Vasya', 'Pupkin', 'Programmist', 'Admin'),
(2, 'Ivan', 'Ivanov', 'Designer', 'NeAdmin'),
(3, 'Petr', 'Petrov', 'Manager', 'NeAdmin'),
(4, 'Roma', 'Romanov', 'Povar', 'NeAdmin'),
(5, 'Foma', 'Fomov', 'Redesigner', 'Admin'),
(6, 'Roman', 'Abramovich', 'Multibillioner', 'Admin'),
(7, 'Vladimir', 'Putin', 'Monarch', 'Admin'),
(8, 'Katya', 'Todeus', 'Writer', 'Admin'),
(9, 'Kolya', 'Hater', 'Youtuber', 'NeAdmin'),
(10, 'Sergey', 'Shoygu', 'Ministr Oboroni Russian Federation', 'Admin'),
(15, 'Vitya', 'Ponov', 'Rungelshpidt', 'NeAdmin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
