<?php
  session_start();
  require_once "db_controller.php";

  $db_handle = new DBController();

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!isset($_COOKIE['u_id'])) {
      $_SESSION['pay'] = '1';
      echo "<h4 style='text-align: center;'>You're not logged in!</h4></br><h5 style='text-align: center;'>Redirecting you to login page...</h5><script>setTimeout(function() {location.href = '/login';}, 2500);</script>";
    }
    else{
      $name = $_POST['Name'];
      $phone = $_POST['Phone'];
      $landmark = $_POST['Landmark'];
      $city = $_POST['City'];
      $type = $_POST['Address_type'];
      $total_price = $_POST['Amount'];
      
      $query = "INSERT INTO address_details (a_name, a_phone, a_landmark, a_city, a_type, total_price) VALUES('".$name."',  '".$phone."', '".$landmark."', '".$city."', '".$type."', '".$total_price."');";
      $result =  $db_handle->run($query);
      if($result) {
        echo "<h4 style='text-align: center;'>Thank you for shopping with us! Taking you to payment page...</h4><script>setTimeout(function() {location.href = '/payment';}, 2500);</script>";
      }
      else{
        echo "<h4 style='text-align: center;'>Data failed to be inserted!</h4><script>setTimeout(function() {location.reload();}, 1500);</script>";
      }
    }
  }
?>