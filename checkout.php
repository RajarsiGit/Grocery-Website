<?php
  require_once "db_controller.php";

  $db_handle = new DBController();

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $landmark = $_POST['Landmark'];
    $city = $_POST['City'];
    $type = $_POST['Address_type'];
    $total_price = $_POST['Amount'];
    
    $query = "INSERT INTO address_details (a_name, a_phone, a_landmark, a_city, a_type, total_price) VALUES('".$name."',  '".$phone."', '".$landmark."', '".$city."', '".$type."', '".$total_price."');";
    $result =  $db_handle->insert($query);
    if($result) {
      header("Location: /payment");
      exit();
    }
    else{
      echo "not inserted";
    }
  }
?>