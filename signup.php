<?php
require_once "db_controller.php";
session_start();

// initializing variables
$username = "";
$password ="";
$email    = "";
$phone = "";
$errors = array(); 

$db_handle = new DBController();
$db=$db_handle->connectDB();

// REGISTER USER
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['Username']);
  $email = mysqli_real_escape_string($db, $_POST['Email']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);
  $phone = mysqli_real_escape_string($db, $_POST['Phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (strlen($phone)>10) {
    array_push($errors, "Give a proper Phone number");
  }


  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     array_push($errors, "Give a proper email-id");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO customer (c_name, c_email, c_phone ,c_password) 
              VALUES('$username', '$email', '$phone', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header("Location: /");
  }
  else{
    print($errors);
  }
}
?>