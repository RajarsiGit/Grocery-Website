<?php
    require_once "db_controller.php";

    $db_handle = new DBController();

    if(!isset($_COOKIE["u_id"])) {
        if(!empty($_POST["Username"]) && !empty($_POST["Password"])) {
            $query = "SELECT c_password FROM customer WHERE c_email LIKE '".$_POST["Username"]."' OR c_username LIKE '".$_POST["Username"]."' LIMIT 1;";
            $db_pass =  $db_handle->fetch($query);
            if($db_pass) {
                if($db_pass[0]["c_password"] === $_POST["Password"]) {
                    $query = "SELECT c_name FROM customer WHERE c_username LIKE '".$_POST["Username"]."' LIMIT 1;";
                    $result =  $db_handle->fetch($query)[0]["c_name"];
                    setrawcookie("u_id", rawurlencode($result), time() + (86400 * 30), "/");
                    echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Login Success!</h3></div>";
                }
                else {
                    echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Wrong Password!</h3></div>";
                }
            }
            else {
                echo "<div style='margin: 2em 1em 2em 1em; padding-bottom: 3em; text-align: center;'><h3>User not available!</h3><h4 style='padding-top: 1em;'>Taking you to registration page...</h4></div><script>setTimeout(function() {location.href = '/register';}, 1500);</script>";
            }
        }
    }
    else {
        echo "<div style='margin: 2em 1em 2em 1em; padding-bottom: 3em; text-align: center;'><h3>Already logged in!</h3></div><script>setTimeout(function() {location.reload();}, 1500);</script>";
    }
    
?>