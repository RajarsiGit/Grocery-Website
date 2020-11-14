<?php
    require_once "db_controller.php";

    $db_handle = new DBController();

    if(!isset($_COOKIE["Username"])) {
        if(!empty($_POST["Username"]) && !empty($_POST["Password"])) {
            $query = "SELECT c_password FROM grocery.customer WHERE c_email LIKE '".$_POST["Username"]."' LIMIT 1;";
            $db_pass =  $db_handle->runQuery($query);
            if($db_pass[0]["c_password"] === $_POST["Password"]) {
                setcookie("Username", $_POST["Username"], time() + (86400 * 30), "/");
                echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Login Success!</h3></div>";
            }
            else {
                echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Login Failed!</h3></div>";
            }
        }
    }
    
?>