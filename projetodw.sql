CREATE TABLE materias (
  id int(11) NOT NULL auto_increment,
  materia_nome varchar(220) NOT NULL,
  primary key (id)
) DEFAULT CHARSET=utf8;

CREATE TABLE chat (
  id int(11) NOT NULL AUTO_INCREMENT,
  usuario varchar(235) NOT NULL,
  message varchar(255) NOT NULL,
  textcolor varchar(20) NOT NULL,
  PRIMARY KEY (id)
) AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE calendario (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `allDay` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

CREATE TABLE IF NOT EXISTS users (
  uid int(11) NOT NULL AUTO_INCREMENT,
  username varchar(45) DEFAULT NULL,
  email varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  primary key (uid)
); 

create database projetodw;