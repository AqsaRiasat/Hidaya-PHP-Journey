CREATE DATABASE IF NOT EXISTS time_manipulation;

USE time_manipulation;

CREATE TABLE IF NOT EXISTS date_time (
  id INT(11) NOT NULL AUTO_INCREMENT,
  date DATE DEFAULT NULL,
  date_time DATETIME DEFAULT NULL,
  PRIMARY KEY (id)
);