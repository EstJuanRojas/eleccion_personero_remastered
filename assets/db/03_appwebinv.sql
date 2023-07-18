DROP DATABASE DBAPPWEBINV;
-- -----------------------------------------------------
-- ESTRUCTURA DBAPPWEBINV
-- -----------------------------------------------------
CREATE DATABASE DBAPPWEBINV DEFAULT CHARACTER SET utf8 ;
USE DBAPPWEBINV ;

-- -----------------------------------------------------
-- TABLA ROLES
-- -----------------------------------------------------
CREATE TABLE ROLES (
  rol_code INT NOT NULL AUTO_INCREMENT,
  rol_name VARCHAR(50) NOT NULL,
  PRIMARY KEY (rol_code)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABLA USERS
-- -----------------------------------------------------
CREATE TABLE USERS (
  rol_code INT NOT NULL,
  user_code VARCHAR(100) NOT NULL,
  user_name VARCHAR(50) NOT NULL,
  user_lastname VARCHAR(50) NOT NULL,
  user_email VARCHAR(100) NOT NULL,
  PRIMARY KEY (user_code),
  INDEX ind_user_rol (rol_code ASC),
  CONSTRAINT fk_user_rol
    FOREIGN KEY (rol_code)
    REFERENCES ROLES (rol_code)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABLA CREDENTIALS
-- -----------------------------------------------------
CREATE TABLE CREDENTIALS (
  credential_code VARCHAR(100) NOT NULL,
  credential_photo LONGBLOB NULL,
  credential_id VARCHAR(30) NULL,
  credential_startdate DATE NOT NULL,
  credential_pass VARCHAR(150) NOT NULL,
  credential_status TINYINT NOT NULL,
  INDEX ind_credential_user (credential_code ASC),
  PRIMARY KEY (credential_code),
  UNIQUE INDEX uq_credential_id (credential_id ASC),
  CONSTRAINT fk_credential_user
    FOREIGN KEY (credential_code)
    REFERENCES USERS (user_code)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;