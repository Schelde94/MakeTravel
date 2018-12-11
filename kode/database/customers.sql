SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

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

-- Customer info --
CREATE TABLE IF NOT EXISTS customers (
  cid INT NOT NULL,
  firstname VARCHAR(40),
  lastname VARCHAR(40),
  PRIMARY KEY (`cid`))
  ENGINE = InnoDB;
  
CREATE TABLE IF NOT EXISTS flight (
	fto VARCHAR(8),
    ffrom VARCHAR (8),
    PRIMARY KEY (fto)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS hotel (
	sdate DATE,
    edate DATE,
    hotel_id INT NOT NULL,
    PRIMARY KEY (sdate),
    INDEX `fk_hotel_hotel_idx` (`hotel_id` ASC),
    CONSTRAINT `fk_hotel_hinfo`
		FOREIGN KEY (`hotel_id`)
        REFERENCES `maketravel`.`hinfo` (`hid`)
        ON DELETE NO ACTION
		ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS hinfo (
	hid INT NOT NULL,
    place VARCHAR(20),
    street VARCHAR(20),
    zipcode VARCHAR(20),
    city VARCHAR(20),
    PRIMARY KEY (hid))
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS cars (
	sdate DATE,
    edate DATE,
    car_id INT NOT NULL,
    PRIMARY KEY (sdate),
    INDEX `fk_cars_car_idx` (`car_id` ASC),
    CONSTRAINT `fk_cars_cinfo`
		FOREIGN KEY (`car_id`)
        REFERENCES `maketravel`.`cinfo` (`cid`)
        ON DELETE NO ACTION
		ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS cinfo (
	cid INT NOT NULL,
    brand VARCHAR(20),
    cname VARCHAR (20),
    category VARCHAR (1),
    PRIMARY KEY (cid))
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS exp (
	sdate DATE,
    exp_id INT NOT NULL,
    PRIMARY KEY (sdate),
    INDEX `fk_exp_exp_idx` (`exp_id` ASC),
    CONSTRAINT `fk_exp_einfo`
		FOREIGN KEY (`exp_id`)
        REFERENCES `maketravel`.`einfo` (`eid`)
        ON DELETE NO ACTION
		ON UPDATE NO ACTION)
    ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS einfo (
	eid INT NOT NULL,
    ename VARCHAR(20),
    PRIMARY KEY (eid))
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS trans (
	sdate DATE,
    edate DATE,
    trans_id INT NOT NULL,
    PRIMARY KEY (sdate),
    INDEX `fk_trans_trans_idx` (`trans_id` ASC),
    CONSTRAINT `fk_trans_tinfo`
		FOREIGN KEY (`trans_id`)
        REFERENCES `maketravel`.`tinfo` (`tid`)
        ON DELETE NO ACTION
		ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS tinfo (
	tid INT NOT NULL,
    ttype VARCHAR(20),
    PRIMARY KEY (tid))
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS dining (
	sdate DATE,
    dining_id INT NOT NULL,
    PRIMARY KEY (sdate),
    INDEX `fk_dining_dining_idx` (`dining_id` ASC),
    CONSTRAINT `fk_dining_dinfo`
		FOREIGN KEY (`dining_id`)
        REFERENCES `maketravel`.`dinfo` (`did`)
        ON DELETE NO ACTION
		ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
CREATE TABLE IF NOT EXISTS dinfo (
	did INT NOT NULL,
    place VARCHAR(20),
    street VARCHAR(20),
    zipcode VARCHAR(20),
    city VARCHAR(20),
    PRIMARY KEY (did))
    ENGINE = InnoDB;
    


    
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
  
  SELECT * FROM customers;
  SELECT * FROM flight;
  SELECT * FROM hotel;
  SELECT * FROM cars;
  SELECT * FROM exp;
  SELECT * FROM trans;
  SELECT * FROM dining;