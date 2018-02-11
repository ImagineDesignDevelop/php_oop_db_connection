
DROP TABLE IF EXISTS `users`;

--create users table
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- insert a couple test rows
INSERT INTO `users` VALUES (1,'John','Doe','johndoe'),
(2,'Jane','Doe','janedoe');

