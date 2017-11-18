ALTER TABLE  `products` ADD  `image` MEDIUMBLOB NOT NULL AFTER  `description` ;
ALTER TABLE  `products` CHANGE  `image`  `image` VARCHAR( 400 ) NOT NULL ;