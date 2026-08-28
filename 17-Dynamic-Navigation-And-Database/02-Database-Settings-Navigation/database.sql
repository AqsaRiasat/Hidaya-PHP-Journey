CREATE DATABASE IF NOT EXISTS hist_portal_db;

USE hist_portal_db;

CREATE TABLE IF NOT EXISTS courses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  course_title VARCHAR(255) NOT NULL,
  course_type VARCHAR(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `courses` (course_title, course_type) VALUES
('PHP Laravel Framework', 'Evening Batch'),
('Python with Data Science', 'Morning Batch');