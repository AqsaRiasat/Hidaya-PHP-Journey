CREATE DATABASE Error_handling;
Use Error_handling;



CREATE TABLE error_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);