<?php
  require_once "db_controller.php";

  $db_handle = new DBController();

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['Name'];
    $gender = $_POST['Gender'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $query = "SELECT * FROM customer WHERE c_username LIKE '".$username."' OR c_email LIKE '".$email."' LIMIT 1;";
    $result =  $db_handle->runQuery($query);

    if(!$result) {
      $query = "INSERT INTO customer (c_name, c_gender, c_phone, c_email, c_username, c_password) VALUES('".$name."', '".$gender."', '".$phone."', '".$email."', '".$username."', '".$password."');";
      $result =  $db_handle->insert($query);
      if($result) {
        $query = "SELECT c_name FROM customer WHERE c_username LIKE '".$username."' LIMIT 1;";
        $result =  $db_handle->runQuery($query);
        setcookie("Username", $result[0]['c_name'], time() + (86400 * 30), "/");
        echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Registration Success!</h3><br><h4 style='padding: 1em 1em 1em 1em;'>You are logged in!</h4></div>";
      }
    }
    else {
      echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Email exists!</h3></div>";
    }
  }
?>