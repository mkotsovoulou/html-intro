-- BEFORE RUNNING THIS SCRIPT REPLACE YOURID with your id number

-- -----------------------------------------------------
-- Schema YOURID_moviedb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `YOURID_moviedb` ;

-- -----------------------------------------------------
-- Schema YOURID_YOURID_moviedb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `YOURID_moviedb` DEFAULT CHARACTER SET utf8 ;
USE `YOURID_moviedb` ;

-- -----------------------------------------------------
-- Table `YOURID_moviedb`.`Movie_Categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `YOURID_moviedb`.`Movie_Categories` ;

CREATE TABLE IF NOT EXISTS `YOURID_moviedb`.`Movie_Categories` (
  `category_id` INT NOT NULL,
  `category_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`category_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `YOURID_moviedb`.`Movies`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `YOURID_moviedb`.`Movies` ;

CREATE TABLE IF NOT EXISTS `YOURID_moviedb`.`Movies` (
  `movie_id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `rating` INT NOT NULL DEFAULT 0,
  `category_id` INT NULL,
  `photo` VARCHAR(100) NULL,
  `production_year` INT NULL,
  `rental_price` DECIMAL(6,2) NULL DEFAULT 2,
  `summary` VARCHAR(45) NULL,
  PRIMARY KEY (`movie_id`),
  INDEX `fk_Movies_Movie_Categories_idx` (`category_id` ASC),
  CONSTRAINT `fk_Movies_Movie_Categories`
    FOREIGN KEY (`category_id`)
    REFERENCES `YOURID_moviedb`.`Movie_Categories` (`category_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `YOURID_moviedb`.`subscribers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `YOURID_moviedb`.`subscribers` ;

CREATE TABLE IF NOT EXISTS `YOURID_moviedb`.`subscribers` (
  `subscriber_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `created_on` VARCHAR(45) NULL DEFAULT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`subscriber_id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;
