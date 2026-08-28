CREATE TABLE `student` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `dept` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `student` VALUES 
(1, 'ali', 'Computer Science'),
(2, 'ahmed', 'Multimedia'),
(3, 'kamran', 'Networking'),
(4, 'Wali', 'Database'),
(5, 'Waqas', 'Techincal');