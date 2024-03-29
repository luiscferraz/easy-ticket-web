-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 01/09/2013 às 03:58
-- Versão do servidor: 5.5.32
-- Versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `easyticketweb`
--
DROP SCHEMA IF EXISTS `easyticketweb`;
CREATE DATABASE IF NOT EXISTS `easyticketweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `easyticketweb`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `courses`
--

INSERT INTO `courses` (`id`, `name`) VALUES
(1, 'Sistema de InformaÃ§Ã£o'),
(2, 'Medicina VeterinÃ¡ria'),
(4, 'Engenharia Civil'),
(5, 'EducaÃ§Ã£o FÃ­sica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `birthday` date NOT NULL,
  `login` varchar(16) NOT NULL,
  `password` varchar(8) NOT NULL,
  `registerDate` datetime NOT NULL,
  `statusEmployee` enum('ATIVO','INATIVO') NOT NULL,
  `idRole` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `idRole_idx` (`idRole`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `employees`
--

INSERT INTO `employees` (`id`, `name`, `cpf`, `email`, `phone`, `birthday`, `login`, `password`, `registerDate`, `statusEmployee`, `idRole`) VALUES
(1, 'Igor Matheus', '392723892', 'igor@gmail.com', '828927289', '1993-07-04', 'igor', 'igor', '0000-00-00 00:00:00', 'ATIVO', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `items`
--

INSERT INTO `items` (`id`, `name`) VALUES
(2, 'FeijÃ£o preto'),
(3, 'MacarrÃ£o ao alho e Ã³leo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `meals`
--

CREATE TABLE IF NOT EXISTS `meals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `meals`
--

INSERT INTO `meals` (`id`, `type`, `price`) VALUES
(1, 'AlmoÃ§o', 4.5),
(2, 'Janta', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `meal_has_menu`
--

CREATE TABLE IF NOT EXISTS `meal_has_menu` (
  `idMealFk` int(11) NOT NULL,
  `idMenuFk` int(11) NOT NULL,
  `menuDate` date NOT NULL,
  PRIMARY KEY (`idMealFk`,`idMenuFk`),
  KEY `idMealFk_idx` (`idMealFk`),
  KEY `idMenuFk_idx` (`idMenuFk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu_has_item`
--

CREATE TABLE IF NOT EXISTS `menu_has_item` (
  `idMenu` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  PRIMARY KEY (`idMenu`,`idItem`),
  KEY `idMenu_idx` (`idMenu`),
  KEY `idItem_idx` (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idTicket` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idTicket_idx` (`idTicket`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `payments`
--

INSERT INTO `payments` (`id`, `value`, `date`, `idTicket`) VALUES
(4, 4.5, '2013-08-31 23:43:30', 2),
(5, 4.5, '2013-08-31 23:51:51', 2),
(6, 4.5, '2013-09-01 01:57:37', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `payment_has_meal`
--

CREATE TABLE IF NOT EXISTS `payment_has_meal` (
  `idPayment` int(11) NOT NULL,
  `idMeal` int(11) NOT NULL,
  `menuDate` date NOT NULL,
  PRIMARY KEY (`idPayment`,`idMeal`),
  KEY `idPayment_idx` (`idPayment`),
  KEY `idMeal_idx` (`idMeal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `recharges`
--

CREATE TABLE IF NOT EXISTS `recharges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rechargeValue` int(11) NOT NULL,
  `rechargeDate` datetime NOT NULL,
  `numTicket` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `numTicket_idx` (`numTicket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(5, 'FaxineirÃ­ssimo'),
(4, 'Professora'),
(3, 'SecretÃ¡rio');

-- --------------------------------------------------------

--
-- Estrutura para tabela `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `birthday` date NOT NULL,
  `login` varchar(16) NOT NULL,
  `password` varchar(8) NOT NULL,
  `registerDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusStudent` enum('ATIVO','INATIVO') NOT NULL,
  `beginningCourse` date NOT NULL,
  `endCourse` date NOT NULL,
  `idCourse` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `idCourse_idx` (`idCourse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `students`
--

INSERT INTO `students` (`id`, `name`, `cpf`, `email`, `phone`, `birthday`, `login`, `password`, `registerDate`, `statusStudent`, `beginningCourse`, `endCourse`, `idCourse`) VALUES
(2, 'Allan do Amaral', '09607461452', 'allan@gmail.com', '30917005', '1994-02-02', 'allan', 'allan', '2013-08-31 17:55:11', 'ATIVO', '2011-03-14', '2015-12-31', 1),
(3, 'Marcela Domingues', '329032732', 'marcela@hotmail.com', '97398', '2013-12-01', 'marcela', 'marcela', '2013-09-01 00:06:43', 'ATIVO', '2013-09-01', '2016-09-01', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numTicket` int(11) NOT NULL,
  `statusTicket` enum('ATIVO','INATIVO','BLOQUEADO') NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `registerDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idStudent` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idStudent_idx` (`idStudent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `tickets`
--

INSERT INTO `tickets` (`id`, `numTicket`, `statusTicket`, `balance`, `registerDate`, `idStudent`) VALUES
(2, 673432528, 'ATIVO', 0, '2013-08-31 23:36:21', 2);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `idRole` FOREIGN KEY (`idRole`) REFERENCES `roles` (`id`);

--
-- Restrições para tabelas `meal_has_menu`
--
ALTER TABLE `meal_has_menu`
  ADD CONSTRAINT `idMealFk` FOREIGN KEY (`idMealFk`) REFERENCES `meals` (`id`),
  ADD CONSTRAINT `idMenuFk` FOREIGN KEY (`idMenuFk`) REFERENCES `menus` (`id`);

--
-- Restrições para tabelas `menu_has_item`
--
ALTER TABLE `menu_has_item`
  ADD CONSTRAINT `idMenu` FOREIGN KEY (`idMenu`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `idItem` FOREIGN KEY (`idItem`) REFERENCES `items` (`id`);

--
-- Restrições para tabelas `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `idTicket` FOREIGN KEY (`idTicket`) REFERENCES `tickets` (`id`);

--
-- Restrições para tabelas `payment_has_meal`
--
ALTER TABLE `payment_has_meal`
  ADD CONSTRAINT `idPayment` FOREIGN KEY (`idPayment`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `idMeal` FOREIGN KEY (`idMeal`) REFERENCES `meals` (`id`);

--
-- Restrições para tabelas `recharges`
--
ALTER TABLE `recharges`
  ADD CONSTRAINT `numTicket` FOREIGN KEY (`numTicket`) REFERENCES `tickets` (`id`);

--
-- Restrições para tabelas `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `idCourse` FOREIGN KEY (`idCourse`) REFERENCES `courses` (`id`);

--
-- Restrições para tabelas `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `idStudent` FOREIGN KEY (`idStudent`) REFERENCES `students` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
