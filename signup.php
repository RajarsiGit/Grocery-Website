<?php
  require_once "db_controller.php";

  $db_handle = new DBController();

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $phone = $_POST['Phone'];

    $query = "SELECT * FROM customer WHERE c_email LIKE '".$email."' LIMIT 1;";
    $result =  $db_handle->runQuery($query);
    if(!$result) {
      $query = "INSERT INTO customer (c_name, c_password, c_email, c_phone) VALUES('".$username."', '".$password."', '".$email."', ".$phone.");";
      $result =  $db_handle->insert($query);
      if($result) {
        setcookie("Username", $email, time() + (86400 * 30), "/");
        echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Registration Success!</h3><br><h4 style='padding: 1em 1em 1em 1em;'>You are logged in!</h4></div>";
      }
    }
    else {
      echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Email exists!</h3></div>";
    }
  }
?>