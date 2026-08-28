CREATE DATABASE  group_chat_application;
USE group_chat_application;


CREATE TABLE user (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  profile_picture VARCHAR(500) DEFAULT NULL,
  is_online TINYINT(1) DEFAULT 0,
  last_seen VARCHAR(100) DEFAULT NULL
);


INSERT INTO user (user_id, first_name, last_name, email, password, profile_picture, is_online) VALUES
(1, 'Ali', 'Khan', 'ali@gmail.com', '123', 'user1.png', 0),
(2, 'Sana', 'Ahmed', 'sana@gmail.com', '123', 'user2.png', 0),
(3, 'Zain', 'Baloch', 'zain@gmail.com', '123', 'user3.png', 0);



CREATE TABLE chat (
  chat_id INT AUTO_INCREMENT PRIMARY KEY,
  message TEXT NOT NULL,
  user_id INT NOT NULL,
  sent_on VARCHAR(100) DEFAULT NULL
);


INSERT INTO chat (message, user_id, sent_on) VALUES
('hello', 1, '1782281489'),
('how are you', 2, '1782281515'),
('i am fine', 1, '1782281540'),
('what about you', 2, '1782281754');