DROP DATABASE `grocery`;

CREATE DATABASE IF NOT EXISTS `grocery`;

CREATE TABLE `grocery`.`customer` (
    `c_id` INT NOT NULL AUTO_INCREMENT,
    `c_name` VARCHAR(255) NOT NULL,
    `c_password` VARCHAR(255) NOT NULL,
    `c_email` VARCHAR(255) NOT NULL,
    `c_phone` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`c_id`)
) ENGINE = InnoDB;

CREATE TABLE `grocery`.`product_details` (
    `p_id` INT NOT NULL AUTO_INCREMENT,
    `p_name` VARCHAR(255) NOT NULL,
    `p_rate` DOUBLE(16, 4) NOT NULL,
    `p_img_name` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`p_id`)
) ENGINE = InnoDB;

CREATE TABLE `grocery`.`cart` (
    `sl_no` INT NOT NULL AUTO_INCREMENT,
    `c_id` INT NOT NULL,
    `p_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `cost` DOUBLE(16, 4) NOT NULL,
    PRIMARY KEY (`sl_no`)) ENGINE = InnoDB;

CREATE TABLE `grocery`.`address_details` (
    `a_id` INT NOT NULL AUTO_INCREMENT,
    `a_house_number` VARCHAR(50) NOT NULL,
    `a_road_name` VARCHAR(255) NOT NULL,
    `a_landmark` VARCHAR(255) NOT NULL,
    `a_city` VARCHAR(255) NOT NULL,
    `a_zip` VARCHAR(8) NOT NULL,
    PRIMARY KEY (`a_id`)
) ENGINE = InnoDB;

ALTER TABLE `grocery`.`cart` ADD FOREIGN KEY (`c_id`) REFERENCES `customer`(`c_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `grocery`.`cart` ADD FOREIGN KEY (`p_id`) REFERENCES `product_details`(`p_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;