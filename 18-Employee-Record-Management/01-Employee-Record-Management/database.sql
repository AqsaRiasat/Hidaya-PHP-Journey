CREATE DATABASE IF NOT EXISTS hist_school_db;
USE hist_school_db;

CREATE TABLE IF NOT EXISTS student (
  student_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone_number VARCHAR(100) NOT NULL,
  UNIQUE KEY (email),
  UNIQUE KEY (phone_number)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO student (first_name, last_name, email, phone_number) VALUES 
('Asad', 'Ali', 'asad@example.com', '03001112233'),
('Kiran', 'Shah', 'kiran@example.com', '03332224455');