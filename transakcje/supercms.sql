-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 02 Maj 2011, 19:46
-- Wersja serwera: 5.1.53
-- Wersja PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `supercms`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8_polish_ci NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `vote` longtext COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `text`, `date`, `author`, `vote`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare scelerisque nisl a ultricies. Nulla vitae volutpat nulla. Morbi consectetur euismod nulla, eget tincidunt massa auctor sit amet. Suspendisse potenti. In hac habitasse platea dictumst. Sed vulputate blandit nisl, nec interdum nibh fermentum eu. Vivamus semper fringilla nulla, sit amet euismod tortor dapibus nec. Maecenas id lacus mi. Aliquam egestas, odio a vestibulum ultricies, dolor magna ornare massa, sit amet hendrerit enim augue nec arcu. Phasellus quam leo, blandit eget vulputate et, cursus sit amet tellus. Phasellus facilisis iaculis pellentesque. Phasellus sed aliquam ligula. Mauris semper fringilla augue quis tincidunt. Nullam vel augue massa. Vestibulum luctus magna vel felis mollis et venenatis libero suscipit. Nunc convallis accumsan neque non vestibulum. Nullam pellentesque convallis arcu eget facilisis. Aenean id lorem non elit sodales sagittis eget eu augue. Fusce massa nibh, varius sed mollis vitae, pulvinar a nulla. Aliquam facilisis varius viverra. ', '2011-02-03 00:23:48', 'Mateusz Manaj', '1,30;3,10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  `mail` varchar(200) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=8 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`) VALUES
(1, 'Mateusz', '54fb5ee78afe6294a5e9871ee3186386', 'mateusz@eduweb.pl'),
(2, 'Janek', '124e20aad7628b8bb458685f6c806345', 'janek@example.com'),
(3, 'Ania', '7437e2f5c764eace2f0ba0d8f5bc49e2', 'ania@example.com'),
(4, 'Michał', '8237fcfcf087154b25502fa448c9f908', 'michal@example.com'),
(7, 'Zenek', '2c243db3651916b72baaaf069bdb945a', 'zenek@example.com');
