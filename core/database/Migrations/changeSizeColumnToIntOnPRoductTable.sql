ALTER TABLE `products` CHANGE `size` `size` INT(10) NULL DEFAULT NULL;

--Set foreign key
ALTER TABLE `products` ADD FOREIGN KEY (`size`) REFERENCES `sizes`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;