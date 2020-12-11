<?php
  session_start();
  require_once "db_controller.php";
  $db_handle = new DBController();
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeZk-wZAAAAAIVpEl00hrRxrx7CGPVHURY8yEIt&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success']) {
      if(!isset($_COOKIE['u_id'])) {
        setrawcookie("pay", "1", time() + 86400, "/");
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
          echo "<h4 style='text-align: center;'>Thank you for shopping with us! Your order will be delivered in 4 to 5 days....</h4><script>setTimeout(function() {location.href = '/home';}, 5000);
            paypal.minicart.reset();</script>";
        }
        else{
          echo "<h4 style='text-align: center;'>Data failed to be inserted!</h4><script>setTimeout(function() {location.reload();}, 1500);</script>";
        }
      }
    }
    else {
      echo "<h4 style='text-align: center;'>Security check failed!</h4></br><script>setTimeout(function() {location.reload();}, 1500);</script>";
    }
  }
?>

