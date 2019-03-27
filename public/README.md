

CREATE TABLE `wild_bazar`.`article` (
 `id` INT NOT NULL AUTO_INCREMENT,
 `category` VARCHAR(100) NOT NULL,
 `title` VARCHAR(100) NOT NULL,
 `description` TEXT NOT NULL,
 `price` INT NOT NULL,
 `quantity` INT NULL,
 `size` VARCHAR(45) NULL,
 `weight` VARCHAR(45) NULL,
 `color` VARCHAR(45) NULL,
 `picture` VARCHAR(255) NULL,
 `language` VARCHAR(100) NULL,
 `speciality` VARCHAR(100) NULL,
 `experience` VARCHAR(100) NULL,
 PRIMARY KEY (`id`));

