CREATE DATABASE IF NOT EXISTS `coursesmvc`;

CREATE TABLE `coursesmvc`.`course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `lecturer` int NOT NULL,
  `start` DATE NOT NULL,
  `end` DATE NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `coursesmvc`.`course` (`id`, `title`, `description`, `lecturer`, `start`, `end`) VALUES
(1, 'Web programming', 'MVC basics', 1, '2018-03-11',  '2018-04-11'),
(2, 'Web design', 'design basics', 1, '2018-02-11',  '2018-03-11')
