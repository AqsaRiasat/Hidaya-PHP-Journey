CREATE DATABASE `my_simple_db`;

USE `my_simple_db`;

CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `first_name` VARCHAR(100),
  `last_name` VARCHAR(100),
  `email` VARCHAR(100),
  `password` VARCHAR(100)
);