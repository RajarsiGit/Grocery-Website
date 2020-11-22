DROP DATABASE `grocery`;

CREATE DATABASE IF NOT EXISTS `grocery`;

CREATE TABLE `grocery`.`customer` (
    `c_id` INT NOT NULL AUTO_INCREMENT,
    `c_name` VARCHAR(255) NOT NULL,
    `c_gender` VARCHAR(10) NOT NULL,
    `c_photo` LONGTEXT NOT NULL,
    `c_phone` VARCHAR(15) NOT NULL,
    `c_email` VARCHAR(255) NOT NULL,
    `c_username` VARCHAR(255) NOT NULL,
    `c_password` LONGTEXT NOT NULL,
    PRIMARY KEY (`c_id`)
) ENGINE = InnoDB;

CREATE TABLE `grocery`.`product_details` (
    `p_id` INT NOT NULL AUTO_INCREMENT,
    `p_name` VARCHAR(255) NOT NULL,
    `p_new_rate` DOUBLE(16, 2) NOT NULL,
    `p_old_rate` DOUBLE(16, 2) NOT NULL,
    `p_img_name` VARCHAR(100) NOT NULL,
    `p_type` VARCHAR(255) NOT NULL,
    `offer_tag` INT NOT NULL,
    PRIMARY KEY (`p_id`)
) ENGINE = InnoDB;

CREATE TABLE `grocery`.`cart` (
    `sl_no` INT NOT NULL AUTO_INCREMENT,
    `c_id` INT NOT NULL,
    `p_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `cost` DOUBLE(16, 2) NOT NULL,
    PRIMARY KEY (`sl_no`)
) ENGINE = InnoDB;

CREATE TABLE `grocery`.`address_details` (
    `a_id` INT NOT NULL AUTO_INCREMENT,
    `a_name` VARCHAR(255) NOT NULL,
    `a_phone` VARCHAR(15) NOT NULL,
    `a_landmark` VARCHAR(255) NOT NULL,
    `a_city` VARCHAR(255) NOT NULL,
    `a_type` VARCHAR(50) NOT NULL,
    `total_price` DOUBLE(16, 2) NOT NULL,
    PRIMARY KEY (`a_id`)
) ENGINE = InnoDB;

ALTER TABLE `grocery`.`cart` ADD FOREIGN KEY (`c_id`) REFERENCES `customer`(`c_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `grocery`.`cart` ADD FOREIGN KEY (`p_id`) REFERENCES `product_details`(`p_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;