SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


DROP SCHEMA IF EXISTS `easyticketweb`;

CREATE SCHEMA IF NOT EXISTS `easyticketweb` DEFAULT CHARACTER SET utf8 ;
USE `easyticketweb` ;

-- -----------------------------------------------------
-- Table `easyticketweb`.`courses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`courses` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`courses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`roles` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`employees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`employees` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`employees` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(55) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(13) NOT NULL,
  `birthday` DATE NOT NULL,
  `login` VARCHAR(16) NOT NULL,
  `password` VARCHAR(8) NOT NULL,
  `registerDate` DATETIME NOT NULL,
  `statusEmployee` ENUM('ATIVO','INATIVO') NOT NULL,
  `idRole` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  INDEX `idRole_idx` (`idRole` ASC),
  CONSTRAINT `idRole`
    FOREIGN KEY (`idRole`)
    REFERENCES `easyticketweb`.`roles` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`students`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`students` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`students` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(55) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(13) NOT NULL,
  `birthday` DATE NOT NULL,
  `login` VARCHAR(16) NOT NULL,
  `password` VARCHAR(8) NOT NULL,
  `registerDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusStudent` ENUM('ATIVO','INATIVO') NOT NULL,
  `beginningCourse` DATE NOT NULL,
  `endCourse` DATE NOT NULL,
  `idCourse` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  INDEX `idCourse_idx` (`idCourse` ASC),
  CONSTRAINT `idCourse`
    FOREIGN KEY (`idCourse`)
    REFERENCES `easyticketweb`.`courses` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`tickets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`tickets` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`tickets` (
  `numTicket` INT(11) NOT NULL AUTO_INCREMENT,
  `statusTicket` ENUM('ATIVO', 'INATIVO', 'BLOQUEADO') NOT NULL,
  `saldo` FLOAT NOT NULL DEFAULT 0,
  `registerDate` DATETIME NOT NULL,
  
  `idStudent` INT NOT NULL,
  PRIMARY KEY (`numTicket`),
  INDEX `idStudent_idx` (`idStudent` ASC),
  CONSTRAINT `idStudent`
    FOREIGN KEY (`idStudent`)
    REFERENCES `easyticketweb`.`students` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`recharges`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`recharges` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`recharges` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rechargeValue` INT NOT NULL,
  `rechargeDate` DATETIME NOT NULL,
  
  `numTicket` INT NOT NULL, 
  PRIMARY KEY (`id`),
  INDEX `numTicket_idx` (`numTicket` ASC),
  CONSTRAINT `numTicket`
    FOREIGN KEY (`numTicket`)
    REFERENCES `easyticketweb`.`tickets` (`numTicket`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`itens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`itens` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`itens` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`meals`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`meals` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`meals` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mealType` VARCHAR(45) NOT NULL,
  `mealPrice` float NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`menus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`menus` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`menus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



-- -----------------------------------------------------
-- Table `easyticketweb`.`payments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`payments` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`payments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `paymentValue` FLOAT NOT NULL,
  `paymentDate` DATETIME NOT NULL,
  
  `paymentTicket` INT NOT NULL, 
  PRIMARY KEY (`id`),
  INDEX `paymentTicket_idx` (`paymentTicket` ASC),
  CONSTRAINT `paymentTicket`
    FOREIGN KEY (`paymentTicket`)
    REFERENCES `easyticketweb`.`tickets` (`numTicket`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`meal_has_menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`meal_has_menu` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`meal_has_menu` (
  `idMealFk` INT NOT NULL,
  `idMenuFk` INT NOT NULL,
  `menuDate` DATE NOT NULL, 
  PRIMARY KEY (`idMealFk`, `idMenuFk`),
  INDEX `idMealFk_idx` (`idMealFk` ASC),
  INDEX `idMenuFk_idx` (`idMenuFk` ASC),
  CONSTRAINT `idMealFk`
    FOREIGN KEY (`idMealFk`)
    REFERENCES `easyticketweb`.`meals` (`id`),
  CONSTRAINT `idMenuFk`
    FOREIGN KEY (`idMenuFk`)
    REFERENCES `easyticketweb`.`menus` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`menu_has_item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`menu_has_item` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`menu_has_item` (
  `idMenu` INT NOT NULL,
  `idItem` INT NOT NULL, 
  PRIMARY KEY (`idMenu`, `idItem`),
  INDEX `idMenu_idx` (`idMenu` ASC),
  INDEX `idItem_idx` (`idItem` ASC),
  CONSTRAINT `idMenu`
    FOREIGN KEY (`idMenu`)
    REFERENCES `easyticketweb`.`menus` (`id`),
  CONSTRAINT `idItem`
    FOREIGN KEY (`idItem`)
    REFERENCES `easyticketweb`.`itens` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `easyticketweb`.`payment_has_meal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `easyticketweb`.`payment_has_meal` ;

CREATE TABLE IF NOT EXISTS `easyticketweb`.`payment_has_meal` (
  `idPayment` INT NOT NULL,
  `idMeal` INT NOT NULL,
  `menuDate` DATE NOT NULL, 
  PRIMARY KEY (`idPayment`, `idMeal`),
  INDEX `idPayment_idx` (`idPayment` ASC),
  INDEX `idMeal_idx` (`idMeal` ASC),
  CONSTRAINT `idPayment`
    FOREIGN KEY (`idPayment`)
    REFERENCES `easyticketweb`.`payments` (`id`),
  CONSTRAINT `idMeal`
    FOREIGN KEY (`idMeal`)
    REFERENCES `easyticketweb`.`meals` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
