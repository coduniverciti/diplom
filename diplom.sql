-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2017 г., 13:10
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `who_name` varchar(255) NOT NULL,
  `who_email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `s_name` varchar(150) NOT NULL,
  `adress` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `strana` varchar(150) NOT NULL,
  `gorod` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `s_name`, `adress`, `email`, `strana`, `gorod`, `date`, `time`, `product`, `prod_id`, `price`, `qty`) VALUES
(1, 'Akmatali', 'Sirazhidinov', 'Masalieva 41', 'sirazhidinovakmatali@gmail.com', 'Кыргызстан', 'Osh', '2017-05-25', '13:09:08', 'Дж. Форсье, П. Биссекс, У. Чан - Django. Разработк', 2, 56, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `python`
--

CREATE TABLE IF NOT EXISTS `python` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `textt` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `god` varchar(255) NOT NULL,
  `izdatelstvo` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `stranisa` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `python`
--

INSERT INTO `python` (`id`, `title`, `textt`, `img`, `god`, `izdatelstvo`, `format`, `stranisa`, `price`) VALUES
(2, 'Дж. Форсье, П. Биссекс, У. Чан - Django. Разработка веб-приложений на Python', 'На базе простой и очень надежной платформы Django на Python Вы имеете возможность проектировать мощные веб-решения всего лишь из нескольких строк программного кода. Авторы книги "Django. Разработка веб-приложений на Python" детально описывают все инструменты, приемы и концепции, которые нужно знать, чтобы максимально эффективно использовать Django версии 1.0, включая все главные характерные особенности последней версии.', '5.jpg', '26.07.2013', 'Символ-Плюс', 'pdf', '500', 56.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
