CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL primary key AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
) 

