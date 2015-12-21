-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2015 г., 16:54
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `vera`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Мужская одежда'),
(2, 'Женская одежда');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `photo`, `price`, `id_category`) VALUES
(1, 'Куртка TOM FAR', 'Замечательная куртка с капюшоном и длинными рукавами. Спереди удобная функциональная застежка. Модель дополнена различными вместительными карманами. Подкладка: 100% полиэстер. Химчистка с использованием углеводорода, хлорного этилена, монофтортрихлорметана (чистка на основе перхлорэтилена). Стирка в тёплой воде (Температура до 30 С).', 'css/images/big1.jpg', 8590, 1),
(2, 'Брюки', 'Цвет: синий\r\n\r\nСостав: хлопок 96%,эластан 4%\r\n', 'css/images/big6.jpg', 2090, 1),
(4, 'Пуховик CANADA GOOSE', 'Практичная стеганая удлиненная куртка прямого силуэта с трикотажными манжетами внутри рукавов выполнена из ткани актуальных расцветок. Удобные боковые карманы с клапанами и нагрудные карманы на молниях делают модель функциональной. Куртка дополнена отстегивающимся капюшоном с опушкой из натурального меха енота, что делает модель более интересной и практичной. Утеплитель: 80% пух, 20% перо, подкладка с пухонепроницающим слоем.', 'css/images/big7.jpg', 11850, 1),
(7, 'Платье ZARA', 'Фактурная выделка в полоску, приталенный фасон, без рукавов, круглый вырез горловины, сзади разрез, сбоку застежка на молнию.', 'css/images/dress1.jpg', 5800, 2),
(8, 'Платье MANGO', 'Цвет: желтый\r\n\r\nСостав: хлопок 95%,полиуретан 5%', 'css/images/dress2.jpg', 2500, 2),
(9, 'Пуховик CНЕЖНАЯ КОРОЛЕВА', 'Зимняя классическая женская куртка в стиле «аляска».', 'css/images/big8.jpg', 9900, 2),
(10, 'Джемпер', 'Цвет: желтый\r\n\r\nСостав: хлопок 44%,полиамид 2%,акрил 54%', 'css/images/tshirt1.jpg', 2099, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `photo`, `link`) VALUES
(1, 'css/images/corpora.jpg', '##');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
