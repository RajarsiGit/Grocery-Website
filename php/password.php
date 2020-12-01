<?php
  session_start();
  require_once "db_controller.php";
  $db_handle = new DBController();
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST) && isset($_SESSION['token']) && isset($_COOKIE['token']) && isset($_COOKIE['user']) && (trim($_SESSION['token']) === trim($_COOKIE['token']))) {
        $password = md5(trim($_POST['password']));
        $query = "UPDATE customer SET c_password = '".$password."' ";
        $result =  $db_handle->run($query);
        if($result) {
            setrawcookie("u_id", rawurlencode($_COOKIE['user']), time() + (86400 * 30), "/");
            setrawcookie('token', '', time() - 3600, "/");
            setrawcookie('user', '', time() - 3600, "/");
            unset($_SESSION['token']);
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Password Reset Success!</h3><br><h4 style='padding: 1em 1em 1em 1em;'>You are logged in!</h4></div>";
        }
        else {
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Password Reset failed!</h3></div>";
        }
    }
    else {
        echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Something went wrong! Please try again!</h3></div>";
    }
  }
?>