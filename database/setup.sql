-- MySQL Script generated by MySQL Workbench
-- seg 29 abr 2024 19:18:28
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projeto_integrador_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projeto_integrador_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projeto_integrador_db` ;
USE `projeto_integrador_db` ;

-- -----------------------------------------------------
-- Table `projeto_integrador_db`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_integrador_db`.`endereco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cep` INT NOT NULL,
  `logradouro` VARCHAR(60) NULL,
  `numero` INT NULL,
  `complemento` VARCHAR(45) NULL,
  `bairro` VARCHAR(30) NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(2) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projeto_integrador_db`.`veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_integrador_db`.`veiculo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `empresa` VARCHAR(45) NOT NULL,
  `url` VARCHAR(60) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projeto_integrador_db`.`conteudo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_integrador_db`.`conteudo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `periodicidade` VARCHAR(15) NULL,
  `tipo` VARCHAR(14) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projeto_integrador_db`.`midia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_integrador_db`.`midia` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_midia` VARCHAR(15) NULL,
  `id_veiculo` INT NULL,
  `editoria_1` VARCHAR(22) NOT NULL,
  `editoria_2` VARCHAR(22) NULL,
  `id_conteudo` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_midia_veiculo_idx` (`id_veiculo` ASC) VISIBLE,
  INDEX `fk_midia_conteudo_idx` (`id_conteudo` ASC) VISIBLE,
  CONSTRAINT `fk_midia_veiculo`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `projeto_integrador_db`.`veiculo` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_midia_conteudo`
    FOREIGN KEY (`id_conteudo`)
    REFERENCES `projeto_integrador_db`.`conteudo` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projeto_integrador_db`.`nome_completo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_integrador_db`.`nome_completo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(15) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projeto_integrador_db`.`contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_integrador_db`.`contato` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_nome_completo` INT NULL,
  `data_nascimento` DATETIME NOT NULL,
  `telefone` INT NOT NULL,
  `e-mail` VARCHAR(45) NOT NULL,
  `id_endereco` INT NULL,
  `cargo` VARCHAR(19) NULL,
  `id_midia` INT NULL,
  `assunto` VARCHAR(500) NULL,
  `info_extra` VARCHAR(500) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contato_nome_completo_idx` (`id_nome_completo` ASC) VISIBLE,
  INDEX `fk_contato_endereco_idx` (`id_endereco` ASC) VISIBLE,
  CONSTRAINT `fk_contato_endereco`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `projeto_integrador_db`.`endereco` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_contato_midia`
    FOREIGN KEY (`id_midia`)
    REFERENCES `projeto_integrador_db`.`midia` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_contato_nome_completo`
    FOREIGN KEY (`id_nome_completo`)
    REFERENCES `projeto_integrador_db`.`nome_completo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projeto_integrador_db`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_integrador_db`.`funcionario` (
  `cpf` INT NOT NULL,
  `nome_completo` VARCHAR(60) NULL,
  `telefone` INT NULL,
  `e-mail` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NULL,
  `departamento` VARCHAR(45) NULL,
  `data_contratacao` DATETIME NULL,
  `data_saida` DATETIME NULL,
  `senha` VARCHAR(60) NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
