SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=`TRADITIONAL`;

DROP SCHEMA IF EXISTS `EasyTicketWeb` ;
CREATE SCHEMA IF NOT EXISTS `EasyTicketWeb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `EasyTicketWeb` ;


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



-- -----------------------------------------------------
-- Table `EasyTicketWeb`.`alunos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EasyTicketWeb`.`alunos` ;



CREATE TABLE IF NOT EXISTS `alunos` (
  
  `idPessoa` int(11) NOT NULL AUTO_INCREMENT,
  
  `cpf` varchar(14) CHARACTER SET utf8 NOT NULL,
  
  `nome` varchar(45) CHARACTER SET utf8 NOT NULL,
  
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  
  `telefone` varchar(13) CHARACTER SET utf8 NOT NULL,
  
  `dataNascimento` date NOT NULL,
  
  `login` varchar(15) CHARACTER SET utf32 NOT NULL,
  
  `senha` varchar(8) CHARACTER SET utf8 NOT NULL,
  
  `dataCadastro` date NOT NULL,

  `statusAluno` varchar(10) CHARACTER SET utf8 NOT NULL,
  `inicioCurso` date NOT NULL,
  `terminoCurso` date NOT NULL,  
  PRIMARY KEY (`idPessoa`)
) 
  ENGINE=InnoDB  
  DEFAULT CHARSET=utf8  
  AUTO_INCREMENT=1 ;
