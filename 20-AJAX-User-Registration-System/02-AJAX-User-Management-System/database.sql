-- 1. Pehle database banayein aur use select karein
CREATE DATABASE CRUD_Application;
USE CRUD_Application;


CREATE TABLE user_role_type (
  user_role_type_id INT AUTO_INCREMENT PRIMARY KEY,
  user_role_type VARCHAR(50) NOT NULL
);


INSERT INTO user_role_type (user_role_type_id, user_role_type) VALUES 
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');



CREATE TABLE user (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100) NOT NULL,
  middle_name VARCHAR(100),
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone_number VARCHAR(50) NOT NULL,
  password VARCHAR(100),
  user_role_type_id INT DEFAULT 3
);


INSERT INTO user (user_id, first_name, middle_name, last_name, email, phone_number, password, user_role_type_id) VALUES 
(4, 'Petter', 'Jacob', 'Wilson', 'petter_jacob@gmail.com', '0333-1234567', '123', 3),
(21, 'Alina', 'Ahmed', 'Ali', 'alina@gmail.com', '0312345678', '123', 3);



CREATE TABLE post (
  post_id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(500) NOT NULL,
  summary TEXT,
  description LONGTEXT
);


INSERT INTO post (title, summary, description) VALUES 
('Our Post Of Saturday', 'Lorem ipsum is simply dummy text of the printing.', 'Lorem ipsum has been the industry standard dummy text ever since the 1500s.'),
('Page Maker', 'Lorem ipsum text ever since the 1500s.', 'It has survived not only five centuries, but also the leap into electronic typesetting.');