CREATE DATABASE member_portal_db;
USE member_portal_db;

CREATE TABLE  registry (
  id INT AUTO_INCREMENT PRIMARY KEY,
  identity_no VARCHAR(30) NOT NULL,
  full_name VARCHAR(100) NOT NULL,
  user_email VARCHAR(100) NOT NULL,
  user_phone VARCHAR(50) NOT NULL,
  user_pic VARCHAR(255) NOT NULL,
  UNIQUE KEY (identity_no)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO registry (identity_no, full_name, user_email, user_phone, user_pic) VALUES 
('111222333', 'Zeeshan Khan', 'zeeshan@example.com', '03112223344', 'zeeshan.jpg'),
('444555666', 'Sana Ahmed', 'sana@example.com', '03456667788', 'sana.jpg');