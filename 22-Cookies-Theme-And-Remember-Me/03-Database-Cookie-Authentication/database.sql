CREATE DATABASE Email_system;
USE Email_system;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE emails (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender VARCHAR(100) NOT NULL,
    receiver VARCHAR(100) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    cc VARCHAR(255) DEFAULT '',
    message TEXT NOT NULL,
    status VARCHAR(50) DEFAULT 'sent' 
);


INSERT INTO users (username, password) VALUES ('khan@yahoo.com', '123');
INSERT INTO users (username, password) VALUES ('ahmed@yahoo.com', '123');
