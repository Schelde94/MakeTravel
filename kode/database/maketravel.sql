-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema maketravel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema maketravel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `maketravel` DEFAULT CHARACTER SET utf8 ;
USE `maketravel` ;

DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS flight;
DROP TABLE IF EXISTS hotel;
DROP TABLE IF EXISTS hinfo;
DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS cinfo;
DROP TABLE IF EXISTS exp;
DROP TABLE IF EXISTS einfo;
DROP TABLE IF EXISTS trans;
DROP TABLE IF EXISTS tinfo;
DROP TABLE IF EXISTS dining;
DROP TABLE IF EXISTS dinfo;

-- -----------------------------------------------------
-- Table `maketravel`.`cinfo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`cinfo` (
  `cid` INT(11) NOT NULL,
  `brand` VARCHAR(20) NULL DEFAULT NULL,
  `cname` VARCHAR(20) NULL DEFAULT NULL,
  `category` VARCHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`cid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`customers` (
  `cid` INT(11) NOT NULL,
  `firstname` VARCHAR(40) NULL DEFAULT NULL,
  `lastname` VARCHAR(40) NULL DEFAULT NULL,
  PRIMARY KEY (`cid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`cars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`cars` (
  `cid` INT(11) NOT NULL AUTO_INCREMENT,
  `sdate` DATE NULL DEFAULT NULL,
  `edate` DATE NULL DEFAULT NULL,
  `car_id` INT(11) NOT NULL,
  `customers_cid` INT(11) NOT NULL,
  PRIMARY KEY (`cid`),
  INDEX `fk_cars_car_idx` (`car_id` ASC) ,
  INDEX `fk_cars_customers1_idx` (`customers_cid` ASC) ,
  CONSTRAINT `fk_cars_cinfo`
    FOREIGN KEY (`car_id`)
    REFERENCES `maketravel`.`cinfo` (`cid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cars_customers1`
    FOREIGN KEY (`customers_cid`)
    REFERENCES `maketravel`.`customers` (`cid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`dinfo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`dinfo` (
  `did` INT(11) NOT NULL,
  `place` VARCHAR(20) NULL DEFAULT NULL,
  `street` VARCHAR(20) NULL DEFAULT NULL,
  `zipcode` VARCHAR(20) NULL DEFAULT NULL,
  `city` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`did`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`dining`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`dining` (
  `did` INT(11) NOT NULL AUTO_INCREMENT,
  `sdate` DATE NULL DEFAULT NULL,
  `dining_id` INT(11) NOT NULL,
  `customers_cid` INT(11) NOT NULL,
  PRIMARY KEY (`did`),
  INDEX `fk_dining_dining_idx` (`dining_id` ASC) ,
  INDEX `fk_dining_customers1_idx` (`customers_cid` ASC) ,
  CONSTRAINT `fk_dining_dinfo`
    FOREIGN KEY (`dining_id`)
    REFERENCES `maketravel`.`dinfo` (`did`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dining_customers1`
    FOREIGN KEY (`customers_cid`)
    REFERENCES `maketravel`.`customers` (`cid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`einfo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`einfo` (
  `eid` INT(11) NOT NULL,
  `ename` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`eid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`exp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`exp` (
  `eid` INT(11) NOT NULL AUTO_INCREMENT,
  `sdate` DATE NULL DEFAULT NULL,
  `exp_id` INT(11) NOT NULL,
  `customers_cid` INT(11) NOT NULL,
  PRIMARY KEY (`eid`),
  INDEX `fk_exp_exp_idx` (`exp_id` ASC) ,
  INDEX `fk_exp_customers1_idx` (`customers_cid` ASC) ,
  CONSTRAINT `fk_exp_einfo`
    FOREIGN KEY (`exp_id`)
    REFERENCES `maketravel`.`einfo` (`eid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_exp_customers1`
    FOREIGN KEY (`customers_cid`)
    REFERENCES `maketravel`.`customers` (`cid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`flight`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`flight` (
  `fid` INT(11) NOT NULL AUTO_INCREMENT,
  `fto` VARCHAR(8) NULL DEFAULT NULL,
  `ffrom` VARCHAR(8) NULL DEFAULT NULL,
  `customers_cid` INT(11) NOT NULL,
  PRIMARY KEY (`fid`),
  INDEX `fk_flight_customers1_idx` (`customers_cid` ASC) ,
  CONSTRAINT `fk_flight_customers1`
    FOREIGN KEY (`customers_cid`)
    REFERENCES `maketravel`.`customers` (`cid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`hinfo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`hinfo` (
  `hid` INT(11) NOT NULL,
  `place` VARCHAR(20) NULL DEFAULT NULL,
  `street` VARCHAR(20) NULL DEFAULT NULL,
  `zipcode` VARCHAR(20) NULL DEFAULT NULL,
  `city` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`hid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`hotel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`hotel` (
  `hid` INT(11) NOT NULL AUTO_INCREMENT,
  `sdate` DATE NULL DEFAULT NULL,
  `edate` DATE NULL DEFAULT NULL,
  `hotel_id` INT(11) NOT NULL,
  `customers_cid` INT(11) NOT NULL,
  PRIMARY KEY (`hid`),
  INDEX `fk_hotel_hotel_idx` (`hotel_id` ASC) ,
  INDEX `fk_hotel_customers1_idx` (`customers_cid` ASC) ,
  CONSTRAINT `fk_hotel_hinfo`
    FOREIGN KEY (`hotel_id`)
    REFERENCES `maketravel`.`hinfo` (`hid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_hotel_customers1`
    FOREIGN KEY (`customers_cid`)
    REFERENCES `maketravel`.`customers` (`cid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`tinfo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`tinfo` (
  `tid` INT(11) NOT NULL,
  `ttype` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`tid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maketravel`.`trans`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maketravel`.`trans` (
  `tid` INT(11) NOT NULL AUTO_INCREMENT,
  `sdate` DATE NULL DEFAULT NULL,
  `edate` DATE NULL DEFAULT NULL,
  `trans_id` INT(11) NOT NULL,
  `customers_cid` INT(11) NOT NULL,
  PRIMARY KEY (`tid`),
  INDEX `fk_trans_trans_idx` (`trans_id` ASC) ,
  INDEX `fk_trans_customers1_idx` (`customers_cid` ASC) ,
  CONSTRAINT `fk_trans_tinfo`
    FOREIGN KEY (`trans_id`)
    REFERENCES `maketravel`.`tinfo` (`tid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_trans_customers1`
    FOREIGN KEY (`customers_cid`)
    REFERENCES `maketravel`.`customers` (`cid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- Hotels  
  INSERT INTO hinfo (hid, place, street, zipcode, city) VALUES ("1", "Hotel Føroyar", "Oyggjarvegur 45", "FO-100", "Tórshavn");
  INSERT INTO hinfo (hid, place, street, zipcode, city) VALUES ("2", "Hotel Tórshavn", "Tórsgøta 2", "FO-100", "Tórshavn");
  INSERT INTO hinfo (hid, place, street, zipcode, city) VALUES ("3", "Hotel Vágar", "Djúpheiðar 2", "FO-380", "Sørvágur");
  
  -- Cars
  INSERT INTO cinfo (cid, brand, cname, category) VALUES ("1", "Citroen", "C1", "A");
  INSERT INTO cinfo (cid, brand, cname, category) VALUES ("2", "Ople", "Corsa", "B");
  INSERT INTO cinfo (cid, brand, cname, category) VALUES ("3", "Citroen", "C3", "C");
  INSERT INTO cinfo (cid, brand, cname, category) VALUES ("4", "Citroen", "C4", "D");
  INSERT INTO cinfo (cid, brand, cname, category) VALUES ("5", "Mitsubishi", "ASX", "M");
  
  -- Experiences
  INSERT INTO einfo (eid, ename) VALUES ("1", "Bjergtur");
  INSERT INTO einfo (eid, ename) VALUES ("2", "Sejltur");
  INSERT INTO einfo (eid, ename) VALUES ("3", "Cykeltur");
  
  -- Transport
  INSERT INTO tinfo (tid, ttype) VALUES ("1", "Bus");
  INSERT INTO tinfo (tid, ttype) VALUES ("2", "Færge");
  INSERT INTO tinfo (tid, ttype) VALUES ("3", "Helikopter");
  
  -- Dining
  INSERT INTO dinfo (did, place, street, zipcode, city) VALUES ("1", "Restaurant 1", "Oyggjarvegur 45", "FO-100", "Tórshavn");
  INSERT INTO dinfo (did, place, street, zipcode, city) VALUES ("2", "Restaurant 2", "Oyggjarvegur 45", "FO-100", "Tórshavn");
  INSERT INTO dinfo (did, place, street, zipcode, city) VALUES ("3", "Restaurant 3", "Oyggjarvegur 45", "FO-100", "Tórshavn");
  INSERT INTO dinfo (did, place, street, zipcode, city) VALUES ("4", "Restaurant 4", "Oyggjarvegur 45", "FO-100", "Tórshavn");
  
  -- INSERT INTO customers (firstname, lastname, cid) VALUES ("Magnus", "Andreassen", "1234");
  -- INSERT INTO hotel (sdate, edate) VALUES ("2018-12-15", "2018-12-20");
  -- SELECT * FROM hinfo;
  -- SELECT * FROM cinfo;
  -- SELECT * FROM tinfo;
  
  SELECT fto, ffrom, customers.cid, customers.firstname, customers.lastname FROM customers, flight WHERE customers_cid=customers.cid;
  
  SELECT * FROM customers;
  SELECT * FROM flight;
  SELECT * FROM hotel;
  SELECT * FROM cars;
  SELECT * FROM exp;
  SELECT * FROM trans;
  SELECT * FROM dining;
