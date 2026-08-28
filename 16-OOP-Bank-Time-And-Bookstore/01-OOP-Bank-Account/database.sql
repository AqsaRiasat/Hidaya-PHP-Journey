CREATE DATABASE bank_db;
USE bank_db;

CREATE TABLE accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(100),
    phone_number VARCHAR(50),
    account_number VARCHAR(50),
    bank_balance INT
);