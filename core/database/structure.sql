-- =============================================================================
-- Diagram Name: Noname1
-- Created on: 11/11/2017 12:49:47 AM
-- Diagram Version: 
-- =============================================================================
SET FOREIGN_KEY_CHECKS=0;

-- Drop table sizes
DROP TABLE IF EXISTS `sizes`;

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(20),
  PRIMARY KEY(`id`)
)
ENGINE=INNODB;

-- Drop table product_types
DROP TABLE IF EXISTS `product_types`;

CREATE TABLE `product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(100) NOT NULL,
  PRIMARY KEY(`id`)
)
ENGINE=INNODB;

-- Drop table Products
DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` tinytext NOT NULL,
  `description` text,
  `price` float(10,2) UNSIGNED NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `size` varchar(50),
  `product_type_id` int(11),
  PRIMARY KEY(`id`),
  CONSTRAINT `product_type_fk` FOREIGN KEY (`product_type_id`)
    REFERENCES `product_types`(`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
ENGINE=INNODB
CHARACTER SET utf8mb3 
COLLATE utf8mb3_bin ;

-- Drop table products_has_sizes
DROP TABLE IF EXISTS `products_has_sizes`;

CREATE TABLE `products_has_sizes` (
  `product_id` int(11) NOT NULL DEFAULT '0',
  `size_id` int(11) NOT NULL DEFAULT '0',
  CONSTRAINT `fk_sizes` FOREIGN KEY (`size_id`)
    REFERENCES `sizes`(`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products` FOREIGN KEY (`product_id`)
    REFERENCES `Products`(`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
ENGINE=INNODB;

SET FOREIGN_KEY_CHECKS=1;