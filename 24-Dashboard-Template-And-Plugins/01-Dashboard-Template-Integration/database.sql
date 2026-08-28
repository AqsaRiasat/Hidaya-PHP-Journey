CREATE DATABASE hitech_db;
USE hitech_db;


CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL,
    status VARCHAR(20) NOT NULL
);

INSERT INTO students (roll_no, name, course, status) VALUES
('26-CS-01', 'Ali Khan', 'PHP Web Dev', 'Active'),
('26-CS-02', 'Ayesha Ahmed', 'Built-in Modules', 'Active'),
('26-CS-03', 'Zain Raza', 'UI/UX Design', 'Active');