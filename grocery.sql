CREATE DATABASE IF NOT EXISTS `grocery`;

CREATE TABLE `grocery`.`customer` (
    `c_id` INT(255) NOT NULL AUTO_INCREMENT,
    `c_name` VARCHAR(100) NOT NULL,
    `c_password` VARCHAR(20) NOT NULL,
    `c_email` VARCHAR(50) NOT NULL,
    `c_phone` INT(10) NOT NULL,
    PRIMARY KEY (`c_id`)
) ENGINE = InnoDB;

CREATE TABLE `grocery`.`product_details` (
    `p_id` INT(255) NOT NULL AUTO_INCREMENT,
    `p_name` VARCHAR(100) NOT NULL,
    `p_rate` DOUBLE(16,4) NOT NULL,
    `p_img_name` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`p_id`)
) ENGINE = InnoDB;

CREATE TABLE `grocery`.`cart` (
    `sl_no` INT(255) NOT NULL AUTO_INCREMENT,
    `c_id` INT(255) NOT NULL,
    `p_id` INT(255) NOT NULL,
    `quantity` INT(255) NOT NULL,
    `cost` DOUBLE(16,4) NOT NULL,
    PRIMARY KEY (`sl_no`)) ENGINE = InnoDB;

ALTER TABLE `cart` ADD FOREIGN KEY (`c_id`) REFERENCES `customer`(`c_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cart` ADD FOREIGN KEY (`p_id`) REFERENCES `product_details`(`p_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

CREATE TABLE `grocery`.`address_details` (
    `a_id` INT(255) NOT NULL AUTO_INCREMENT,
    `a_house_number` INT(100) NOT NULL,
    `a_road_name` VARCHAR(255) NOT NULL,
    `a_landmark` VARCHAR(255) NOT NULL,
    `a_city` VARCHAR(255) NOT NULL,
    `a_zip` INT(255) NOT NULL,
    PRIMARY KEY (`a_id`)
) ENGINE = InnoDB;