<?php
  require_once "db_controller.php";
  $db_handle = new DBController();
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeZk-wZAAAAAIVpEl00hrRxrx7CGPVHURY8yEIt&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success']) {
      $name = trim($_POST['Name']);
      $gender = $_POST['Gender'];
      $phone = $_POST['Phone'];
      $email = trim($_POST['Email']);
      $username = trim($_POST['Username']);
      $password = md5(trim($_POST['Password']));
      $query = "SELECT * FROM customer WHERE c_username LIKE '".$username."' OR c_email LIKE '".$email."' LIMIT 1;";
      $result =  $db_handle->fetch($query);
      if(!$result) {
        $query = "SELECT c_id FROM customer ORDER BY c_id DESC LIMIT 1";
        $result = $db_handle->fetch($query);
        $i = "0";
        if($result) {
          $i = $result[0]['c_id'];
        }
        $imageFileType = strtolower(pathinfo(basename($_FILES['Photo']['name']), PATHINFO_EXTENSION));
        $target_file = "../uploads/image".$i.".".$imageFileType;
        $query = "INSERT INTO customer (c_name, c_gender, c_photo, c_phone, c_email, c_username, c_password) VALUES('".$name."', '".$gender."', '".$target_file."', '".$phone."', '".$email."', '".$username."', '".$password."');";
        $result =  $db_handle->run($query);
        if($result) {
          if(move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
            $query = "SELECT c_id FROM customer WHERE c_name LIKE '".$name."' LIMIT 1;";
            $result = $db_handle->fetch($query);
            setrawcookie("u_id", rawurlencode($result[0]['c_id']), time() + (86400 * 30), "/");
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Registration Success!</h3><br><h4 style='padding: 1em 1em 1em 1em;'>You are logged in!</h4></div>";
          }
          else {
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Image could not be uploaded!</h3></div>";
          }
        }
      }
      else {
        echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Email exists!</h3></div>";
      }
    }
    else {
      echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Security check failed!</h3></div></br><script>setTimeout(function() {location.reload();}, 1500);</script>";
    }
  }
?>