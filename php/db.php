<?php
    require_once "db_controller.php";
    $db_handle = new DBController();
    extract($_POST);
    $type = intval($_POST['data']) - 1;

    $c_customer = "CREATE TABLE `grocery`.`customer` (
        `c_id` INT NOT NULL AUTO_INCREMENT,
        `c_name` VARCHAR(255) NOT NULL,
        `c_gender` VARCHAR(10) NOT NULL,
        `c_photo` LONGTEXT NOT NULL,
        `c_phone` VARCHAR(15) NOT NULL,
        `c_email` VARCHAR(255) NOT NULL,
        `c_username` VARCHAR(255) NOT NULL,
        `c_password` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`c_id`)
    ) ENGINE = InnoDB;";

    $c_cart = "CREATE TABLE `grocery`.`cart` (
        `sl_no` INT NOT NULL AUTO_INCREMENT,
        `c_id` INT NOT NULL,
        `p_id` INT NOT NULL,
        `quantity` INT NOT NULL,
        `cost` DOUBLE(16, 2) NOT NULL,
        PRIMARY KEY (`sl_no`)
    ) ENGINE = InnoDB;";

    $c_address = "CREATE TABLE `grocery`.`address_details` (
        `a_id` INT NOT NULL AUTO_INCREMENT,
        `a_name` VARCHAR(255) NOT NULL,
        `a_phone` VARCHAR(15) NOT NULL,
        `a_landmark` VARCHAR(255) NOT NULL,
        `a_city` VARCHAR(255) NOT NULL,
        `a_type` VARCHAR(50) NOT NULL,
        `total_price` DOUBLE(16, 2) NOT NULL,
        PRIMARY KEY (`a_id`)
    ) ENGINE = InnoDB;";

    $d_customer = "DROP TABLE `grocery`.`customer`;";
    $d_cart = "DROP TABLE `grocery`.`cart`;";
    $d_address = "DROP TABLE `grocery`.`address_details`;";

    $query = array($c_customer, $c_cart, $c_address, $d_customer, $d_cart, $d_address);

    if($type == 6) {
        if($_FILES["file"]["size"] > 0) {
            $q1 = "DROP TABLE `grocery`.`product_details`;";
            $q2 = "CREATE TABLE `grocery`.`product_details` (
                `p_id` INT NOT NULL AUTO_INCREMENT,
                `p_name` VARCHAR(255) NOT NULL,
                `p_new_rate` DOUBLE(16, 2) NOT NULL,
                `p_old_rate` DOUBLE(16, 2) NOT NULL,
                `p_img_name` VARCHAR(100) NOT NULL,
                `p_type` VARCHAR(255) NOT NULL,
                `offer_tag` INT NOT NULL,
                PRIMARY KEY (`p_id`)
            ) ENGINE = InnoDB;";
            if($db_handle->run($q1) && $db_handle->run($q2)) {
                $file = fopen($_FILES["file"]["tmp_name"], "r");
                while(($row = fgetcsv($file, 10000, ","))) {
                    $q = "INSERT INTO `grocery`.`product_details` VALUES ($row[0], '$row[1]', $row[2], $row[3], '$row[4]', '$row[5]', $row[6]);";
                    $db_handle->run($q);
                }
                echo "<div style='text-align:center; padding: 1em 1em 1em 1em; color: green;'><h4>Query run successful!</h4></div>";
                exit();
            }
            else {
                echo "<div style='text-align:center; padding: 1em 1em 1em 1em; color: red;'><h4>Query run failed!</h4></div>";
                exit();
            }
        }
    }

    $result =  $db_handle->run($query[$type]);

    if($result) {
        if($type == 3) {
            $files = glob("../uploads/*");
            foreach($files as $file) {
                if(is_file($file))
                    unlink($file);
            }
        }
        echo "<div style='text-align:center; padding: 1em 1em 1em 1em; color: green;'><h4>Query run successful!</h4></div>";
    }
    else {
        echo "<div style='text-align:center; padding: 1em 1em 1em 1em; color: red;'><h4>Query run failed!</h4></div>";
    }
?>