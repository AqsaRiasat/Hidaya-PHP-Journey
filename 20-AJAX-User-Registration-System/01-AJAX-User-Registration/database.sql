CREATE DATABASE registration_form;
USE registration_form;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    country_id INT,
    city_id INT
);


CREATE TABLE countries (
    country_id INT PRIMARY KEY,
    country_name VARCHAR(50)
);


CREATE TABLE cities (
    city_id INT PRIMARY KEY,
    country_id INT,
    city_name VARCHAR(50)
);


INSERT INTO countries VALUES (1, 'Pakistan'), (2, 'USA');
INSERT INTO cities VALUES (101, 1, 'Karachi'), (102, 1, 'Lahore'), (103, 2, 'New York');


INSERT INTO users (name, email, password, country_id, city_id) VALUES ('Ali', 'ali@gmail.com', '123', 1, 101);