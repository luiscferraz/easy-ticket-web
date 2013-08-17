SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=`TRADITIONAL`;

DROP SCHEMA IF EXISTS `EasyTicketWeb` ;
CREATE SCHEMA IF NOT EXISTS `EasyTicketWeb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `EasyTicketWeb` ;


-- -----------------------------------------------------
-- Table `EasyTicketWeb`.`cursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EasyTicketWeb`.`courses` ;

CREATE TABLE IF NOT EXISTS `courses` (
  `id_course` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_course`),
  KEY `id_curso` (`id_course`))
ENGINE=InnoDB 
DEFAULT CHARSET=utf8 
AUTO_INCREMENT=1 ;



-- -----------------------------------------------------
-- Table `EasyTicketWeb`.`students`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EasyTicketWeb`.`students` ;



CREATE TABLE IF NOT EXISTS `students` (
  
  `idPerson` int(11) NOT NULL AUTO_INCREMENT,
  
  `cpf` varchar(14) CHARACTER SET utf8 NOT NULL,
  
  `name` varchar(45) CHARACTER SET utf8 NOT NULL,
  
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  
  `phone` varchar(13) CHARACTER SET utf8 NOT NULL,
  
  `birthday` date NOT NULL,
  
  `login` varchar(15) CHARACTER SET utf32 NOT NULL,
  
  `password` varchar(8) CHARACTER SET utf8 NOT NULL,
  
  `registerDate` date NOT NULL,

  `statusStudent` varchar(10) CHARACTER SET utf8 NOT NULL,
  `beginningCourse` date NOT NULL,
  `endCourse` date NOT NULL,  
  PRIMARY KEY (`idPerson`)
) 
  ENGINE=InnoDB  
  DEFAULT CHARSET=utf8  
  AUTO_INCREMENT=1 ;

-- -----------------------------------------------------
-- Table `EasyTicketWeb`.`functionaries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EasyTicketWeb`.`functionaries` ;




CREATE TABLE IF NOT EXISTS `functionaries` (
  
  `idFunctionary` int(11) NOT NULL AUTO_INCREMENT,
  
  `cpf` varchar(14) CHARACTER SET utf8 NOT NULL,
  
  `name` varchar(55) CHARACTER SET utf8 NOT NULL,
  
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  
  `phone` varchar(13) CHARACTER SET utf8 NOT NULL,
  
  `birthday` date NOT NULL,
  
  `login` varchar(45) CHARACTER SET utf8 NOT NULL,
  
  `password` varchar(8) CHARACTER SET utf8 NOT NULL,
  
  `registerDate` date NOT NULL,
  
  `statusFunctionary` enum('ATIVO','INATIVO','','') CHARACTER SET utf8 NOT NULL,
  
  PRIMARY KEY (`idFunctionary`),
  
  UNIQUE KEY `cpf` (`cpf`),
  
  UNIQUE KEY `idFunctionary` (`idFunctionary`),
  
  UNIQUE KEY `email` (`email`),
  
  UNIQUE KEY `login` (`login`)
) 
  ENGINE=InnoDB 
  DEFAULT CHARSET=utf8 
  AUTO_INCREMENT=1 ;


