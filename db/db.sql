-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema city_​​hall_service_system
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema city_​​hall_service_system
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `city_​​hall_service_system` ;
USE `city_​​hall_service_system` ;

-- -----------------------------------------------------
-- Table `city_​​hall_service_system`.`person`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `city_​​hall_service_system`.`person` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250) NOT NULL,
  `birthdate` DATE NOT NULL,
  `gender` VARCHAR(1) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `city` VARCHAR(60) NULL DEFAULT '\"\"',
  `district` VARCHAR(250) NULL DEFAULT '\"\"',
  `street` VARCHAR(250) NULL DEFAULT '\"\"',
  `number` VARCHAR(5) NULL DEFAULT '\"\"',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `city_​​hall_service_system`.`protocol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `city_​​hall_service_system`.`protocol` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `description` VARCHAR(60) NOT NULL,
  `date` DATE NOT NULL,
  `term` INT NOT NULL,
  `taxpayer` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_protocol_1_idx` (`taxpayer` ASC) VISIBLE,
  CONSTRAINT `fk_protocol_1`
    FOREIGN KEY (`taxpayer`)
    REFERENCES `city_​​hall_service_system`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
