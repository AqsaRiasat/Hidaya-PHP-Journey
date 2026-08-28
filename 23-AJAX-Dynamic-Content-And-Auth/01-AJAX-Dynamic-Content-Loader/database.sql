CREATE DATABASE Email_system;
USE Email_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE emails (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender VARCHAR(100),
    receiver VARCHAR(100),
    subject VARCHAR(255),
    cc VARCHAR(255),
    message TEXT,
    status VARCHAR(50)
);

INSERT INTO users (username, password) VALUES ('khan@yahoo.com', '123');
INSERT INTO users (username, password) VALUES ('ahmed@yahoo.com', '123');