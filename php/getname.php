<?php
    if(isset($_COOKIE['u_id'])){
        require_once "db_controller.php";
        $db_handle = new DBController();
        $query = "SELECT c_name from customer WHERE c_id = ".intval($_COOKIE['u_id']).";";
        $result =  $db_handle->fetch($query);  
        echo "<li><a href='/login'>".explode(' ', trim($result[0]['c_name']))[0]."</a></li>";
    }else{
        echo "<li><a href='/login'>Login</a></li>";
    }
?>