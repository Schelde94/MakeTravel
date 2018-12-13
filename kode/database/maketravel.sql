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
  `description` VARCHAR(850),
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
  `description` VARCHAR(850) NULL DEFAULT NULL,
  `checkin` VARCHAR(20) NULL DEFAULT NULL,
  `checkout` VARCHAR(20) NULL DEFAULT NULL,
  `link` VARCHAR(20) NULL DEFAULT NULL,
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
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("1", "Hotel Føroyar", "Oyggjarvegur 45", "FO-100", "Tórshavn", "Hotel Føroyar is the biggest in the Faroe Islands. It has 106 rooms, and all have a great view voer Tórshavn, Nólsoy and the North Atlantic Sea. 98 of the 106 are double standard rooms, 2 are family rooms, 2 are handicap rooms, 2 business rooms and 2 suites. Every room has a bathtub/toilet, telephone, radio, TV, hair dryer, and a minibar. Restaurant, restaurant/bar, conference facilities and internet. Good parking facilities." ,"14:00", "11:00", "hotel-foeroyar");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("2", "Hotel Hafnia", "Áarvegur 4-10", "FO-100", "Tórshavn", "74 rooms, where 45 of them are double rooms, 28 single rooms and 1 suite, every room has bathroom/toilet, telephone, radio, TV, hairdryer and minibar. Restaurant, café, bar, conference facilities, free internet and sauna. The hotel is being renovated in the winter 2014/2015, and should be finished in February 2016. Check-in kl. 14:00, check-out kl. 12:00." ,"14:00", "12:00", "hotel-hafnia");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("3", "Hotel Tórshavn", "Tórsgøta 4", "FO-100", "Tórshavn", "The hotel is centrally located with a view over the marina. The hotel has 43 rooms, where as 24 are double rooms, 14 single rooms, 2 family rooms, 2 business rooms and one suite. Every room has toilet/bath, telephone and TV. Bar, brasserie, conference facilities and internet." ,"14:00", "11:00" , "hotel-tórshavn");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("4", "Hotel Streym", "Yviri við Strond 19", "FO-100", "Tórshavn", "Modern and budget hotel, centrally placed in Tórshavn and with a view over Nólsoy. The hotel has 26 rooms, where 20 are double rooms and 6 are single rooms. Every room has bathroom/toilet, telephone and TV. Breakfast restaurant and free internet. Reception is open between kl. 07:00 and 22:00." ,"13:00", "11:00", "hotel-streym");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("5", "Hotel Vágar", "Djúpheiðar 2", "FO-380", "Sørvágur", "You will find this tourist- and business hotel only a few minutes away from the airport.The hotel has 24 rooms, and in which 22 are double rooms and 2 are family room. All rooms have bathroom/toilet, telephone, radio, TV and hairdryer. Restaurant, conference facilities and internet." ,"14:00", "10:00", "hotel-vágar");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("6", "Hotel Runavík", "Heiðavegur 6", "FO-620", "Runavík", "This hotel has a very central location on the Faroe Islands, as it is as geographically in the middle as it can be. The hotel has 19 rooms, where 12 are doubleroom, 6 are singlerooms and1 suite. All have bath/toilet and TV. Restaurant, conference facilities and internet. Please note that this hotel does not serve alcohol." ,"14:00", "11:00", "hotel-runavík");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("7", "Hotel Klaksvík", "Víkavegur 38", "FO-700", "Klaksvík", "The hotel is located on the sunny side and has a great view of the fishing town Klaksvík. The hotel has 28 double/singlerooms, and come in different sizes. All have bath/toilet and TV. Restaurant, conference facilities and free internet. Please note this hotel does not serve alcohol." ,"14:00", "12:00", "hotel-klaksvík");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("8", "Hotel Tvøroyri", "Miðbrekka 5", "FO-800", "Tvøroyri", "The hotel is located centrally in Tvøroyri. It has 14 rooms, and 6 of these are doublerooms with own bath/toilet. The rest are without. All rooms have TV and radio. Restaurant, bar and free internet." ,"14:00", "11:00", "hotel-tvoeroyri");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("9", "Hotel Bakkin", "Vágsvegur 69", "FO-900", "Vágur", "The hotel is located centrally in Vágur. It has 10 rooms, where 2 are double and 2 are single with own bath/toilet, and the other 3 double and 3 single are without. Restaurant, bar and free internet." ,"14:00", "11:00", "hotel-bakkin");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("10", "Guesthouse Gjáargarður", "Dalavegur 20", "FO-478", "Gjógv", "Unique and lovely location in the scenic village of Gjógv. 25 rooms, with 21 double rooms and 4 handicap rooms. All rooms have bathroom/toilet and TV. The building has several floors, but this is no obstacle for wheelchair users. All floors have entrance from the outside, and every doorstep allow full freedom of movement for wheelchairs throughout the house. Restaurant, conference facilities and free internet. Reception is open between 07:00 and 22:00" ,"13:00", "11:00", "gjáargarður");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("11", "Guesthouse Hugo", "Bakkavegur 2", "FO-380", "Sørvágur", "Unique location, right by the sea, and with a grea view over the mountains and sea. Only 4 rooms, with 2 double rooms and 2 single rooms. Shared bath/toilet. Hugo's Guesthouse is ideal if you are planning to visit the birds paradise Mykines, as it is only a few minutes from the harbor. The rooms are on the first floor, above the cozy, retro café Fjørðoy. Café and free internet" ,"14:00", "12:00", "guesthouse-hugo");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("12", "Hotel Skálavík", "Eiler Jacobsens gøta 1", "FO-220", "Skálavík", "Sandoy is definitely worth a visit - you'll find the traditional Faroe Islands here, so why not stay a night or two at this lovely house in Skálavík. The house has 6 double rooms, and 19 family rooms (dbl. bed and bunk beds). All rooms have private bath/toilet, radio and free internet." ,"14:00", "10:00", "hotel-skálavík");
  INSERT INTO hinfo (hid, place, street, zipcode, city, description, checkin, checkout, link) VALUES ("13", "Ró Guesthouse", "í Geilini 9", "FO-380", "Sørvágur", "You will find this guesthouse close to the airport, and with a good over the mountains and the sea. 4 double rooms with shower/toilet, and 1 doubleroom and 2 singleroom without private facilities. All doublerooms have TV and hairdryer. Breakfast is not included in the price." ,"14:00", "10:00", "ró-guesthouse");
  -- INSERT INTO hinfo (hid, place, street, zipcode, city) VALUES ("2", "Hotel Tórshavn", "Tórsgøta 2", "FO-100", "Tórshavn");
  -- INSERT INTO hinfo (hid, place, street, zipcode, city) VALUES ("3", "Hotel Vágar", "Djúpheiðar 2", "FO-380", "Sørvágur");
  
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
  
  
 -- SELECT * FROM hinfo;
 -- SELECT * FROM cinfo;
 -- SELECT * FROM tinfo;
 -- SELECT * FROM einfo;
 -- SELECT * FROM dinfo;
  
  -- SELECT fto, ffrom, customers.cid, customers.firstname, customers.lastname FROM customers, flight WHERE customers_cid=customers.cid;
  SELECT sdate, edate, customers.cid, hinfo.place, hinfo.street, hinfo.zipcode, hinfo.city, hinfo.description, hinfo.checkin, hinfo.checkout, hinfo.link FROM customers, hotel, hinfo WHERE customers_cid=customers.cid AND hotel_id=hinfo.hid;
  
  SELECT * FROM customers;
  SELECT * FROM flight;
  SELECT * FROM hotel;
  SELECT * FROM cars;
  SELECT * FROM exp;
  SELECT * FROM trans;
  SELECT * FROM dining;
