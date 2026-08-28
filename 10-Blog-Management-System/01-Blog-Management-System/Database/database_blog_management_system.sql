/* Database Setup Script */
CREATE DATABASE IF NOT EXISTS `blog_management_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog_management_system`;


DROP TABLE IF EXISTS `role_type`;
CREATE TABLE `role_type` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `role_type` (`role_id`, `role_type`) VALUES 
(1, 'admin'),
(2, 'teacher'),
(3, 'student');



DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_type` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role_id`) VALUES 
(1, 'Ali', 'Khan', 'ali@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'Ahmed', 'ali', 'ahmedali@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(3, 'Asif', 'ali', 'asif@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3),
(4, 'Asad', 'Ali', 'asad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3);



DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(200) DEFAULT NULL,
  `post_description` longblob DEFAULT NULL,
  `post_added_by` int(11) DEFAULT NULL,
  `post_added_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_added_by` (`post_added_by`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`post_added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `post` (`post_id`, `post_title`, `post_description`, `post_added_by`, `post_added_on`) VALUES 
(3, 'Hello', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to usi', 1, '1780472777'),
(5, 'Hello', 'Hidaya', 1, '1780474975');