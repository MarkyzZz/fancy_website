CREATE TABLE `fancy`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(50) NOT NULL,
  `last_name` VARCHAR(50) NOT NULL,
  `address` TINYTEXT NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `state` VARCHAR(45) NOT NULL,
  `zip` VARCHAR(45) NOT NULL,
  `phone` INT(15) UNSIGNED NOT NULL,
  `email` VARCHAR(110) NOT NULL,
  `website` VARCHAR(50) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC));


ALTER TABLE `fancy`.`users` 
CHANGE COLUMN `phone` `phone` VARCHAR(50) NOT NULL ;

ALTER TABLE `fancy`.`users` 
ADD COLUMN `password` VARCHAR(45) NOT NULL AFTER `website`;
