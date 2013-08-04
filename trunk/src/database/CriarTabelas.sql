SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=`TRADITIONAL`;

DROP SCHEMA IF EXISTS `EasyTicketWeb` ;
CREATE SCHEMA IF NOT EXISTS `EasyTicketWeb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `EasyTicketWeb` ;


-- -----------------------------------------------------
-- Table `EasyTicketWeb`.`pessoas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EasyTicketWeb`.`pessoas` ;

CREATE  TABLE IF NOT EXISTS `EasyTicketWeb`.`pessoas` (
  `cpf` VARCHAR(14) NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `telefone` VARCHAR(13) NOT NULL ,
  `datanascimento` DATE NULL ,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- -----------------------------------------------------
-- Table `EasyTicketWeb`.`cursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EasyTicketWeb`.`cursos` ;

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `id_curso` (`id_curso`))
ENGINE=InnoDB 
DEFAULT CHARSET=utf8 
AUTO_INCREMENT=1 ;
