-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 11:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--
CREATE DATABASE IF NOT EXISTS `company` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `company`;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `depart_id` int(10) UNSIGNED NOT NULL,
  `depart` varchar(50) NOT NULL,
  `function` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`depart_id`, `depart`, `function`) VALUES
(1, 'Администрация', 'Управленски функции'),
(2, 'Счетоводен', 'Сметки и плащания'),
(3, 'Снабдяване', 'Доставка и материали за производство'),
(4, 'Експедиция', 'Разпределение на готова продукция'),
(5, 'Експлоатация', 'Произвежда продукция'),
(6, 'Транспорт', 'Доставка на готова продукция');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `pers_id` int(10) UNSIGNED NOT NULL,
  `first` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `sex` enum('мъж','жена') NOT NULL,
  `b_day` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `depart_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`pers_id`, `first`, `father`, `last`, `sex`, `b_day`, `city`, `street`, `phone`, `depart_id`, `room_id`) VALUES
(1, 'Петран', 'Иванов', 'Тодоров', 'мъж', '1952-10-16', 'Шумен', 'Петра 23', '(054)4-23-21', 2, 111),
(2, 'Ивайло', 'Петров', 'Иванов', 'мъж', '1966-10-15', 'Шумен', 'Априлов 2', '(054)6-64-33', 3, 3),
(3, 'Вяра', 'Крумова', 'Пеева', 'жена', '1965-09-23', 'Шумен', 'А.Златаров 5', '(054)3-25-45', 1, 53),
(4, 'Соня', 'Илиева', 'Томова', 'жена', '1971-07-31', 'Шумен', 'Вит 13', '(054) 5-23-15', 4, 64),
(5, 'Иван', 'Иванов', 'Гюмов', 'мъж', '1960-11-13', 'Шумен', 'Брезник 12', '(054) 2-34-66', 5, 14),
(6, 'Владимир', 'Калчев', 'Генов', 'мъж', '1970-01-21', 'Шумен', 'Батак 43', '(054) 3-78-97', 3, 3),
(7, 'Велислава', 'Петрова', 'Динова', 'жена', '1965-10-22', 'София', 'Младост 2', '(02) 33-45-71', 2, 111),
(8, 'Мария', 'Янева', 'Петрова', 'жена', '1972-04-21', 'Плевен', 'Средна гора 2', '(064)21-33-67', 1, 53);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(10) UNSIGNED NOT NULL,
  `floor` int(1) UNSIGNED NOT NULL,
  `l_r` set('ляво','дясно') NOT NULL,
  `square_surface` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `floor`, `l_r`, `square_surface`) VALUES
(3, 1, 'ляво', '45.00'),
(14, 3, 'ляво', '25.00'),
(53, 5, 'дясно', '40.00'),
(64, 4, 'дясно', '15.00'),
(111, 2, 'ляво', '35.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`pers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `depart_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `pers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
