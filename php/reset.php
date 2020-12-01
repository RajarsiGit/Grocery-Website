<?php
    require_once "db_controller.php";

    $db_handle = new DBController();

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: reset@our-grocery.tk\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_COOKIE["u_id"])) {
            if(!empty($_POST["Username"])) {
                $query = "SELECT c_id, c_email FROM customer WHERE c_email LIKE '".$_POST["Username"]."' OR c_username LIKE '".$_POST["Username"]."' LIMIT 1;";
                $db_pass =  $db_handle->fetch($query);
                if($db_pass) {
                    $token = hash("sha256", rand());
                    $message = "<!DOCTYPE html>
                        <head>
                            <meta charset='UTF-8'>
                            <link href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>
                            <title>Verify Email</title>
                        </head>
                        <body>
                            <div style='text-align: center; width: 75%;'>
                                <h3>Password Reset</h3>
                                <h4>Please click the button below to reset your password. </br>Only valid for 10 minutes!</h4>
                                <p><a href='https://our-grocery.tk/password?token=$token' style='border-radius: 5px; background-color: #007bff; color: #fff; padding: 10px; text-decoration: none; font-weight: bold; font-size: 13px;'>Reset Password</a></p>
                            </div>
                        </body>
                    </html>";

                    if(@mail($db_pass[0]['c_email'], 'Our Grocery Password Reset', $message, $headers)) {
                        setrawcookie("token", rawurlencode($token), time() + 600, "/");
                        setrawcookie("user", rawurlencode($db_pass[0]['c_id']), time() + 600, "/");
                        echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Reset Link sent to your email!</h3></div>";
                    }
                    else {
                        echo "<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Email failedl!</h3></div>";
                    }
                }
                else {
                    echo "<div style='margin: 2em 1em 2em 1em; padding-bottom: 3em; text-align: center;'><h3>User not registered with us!</h3><h4 style='padding-top: 1em;'>Taking you to registration page...</h4></div><script>setTimeout(function() {location.href = '/register';}, 1000);</script>";
                }
            }
        }
        else {
            echo "<div style='margin: 2em 1em 2em 1em; padding-bottom: 3em; text-align: center;'><h3>Already logged in!</h3></div><script>setTimeout(function() {location.href='/login';}, 1500);</script>";
        }
    }
?>