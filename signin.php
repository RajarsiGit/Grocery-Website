<?php
    require_once "db_controller.php";
    session_start();

    $db_handle = new DBController();

    if(!isset($_COOKIE["Username"])) {
        if(!empty($_POST["Username"]) && !empty($_POST["Password"])) {
            $query = "SELECT c_password FROM grocery.customer WHERE c_email LIKE '".$_POST["Username"]."';";
            $db_pass =  $db_handle->runQuery($query);
            if($db_pass[0]["c_password"] === $_POST["Password"]) {
                setcookie("Username", $_POST["Username"], time() + (86400 * 30), "/");
                header("Location: /");
                die();
            }
        }
    }
    else {
        header("Location: /");
        die();
    }
?>