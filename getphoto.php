<?php
    require_once "db_controller.php";
    $db_handle = new DBController();
    $query = "SELECT c_photo FROM customer WHERE c_name LIKE '".$_COOKIE['Username']."' LIMIT 1";
    $result = $db_handle->runQuery($query);
    echo "<img src='".$result[0]['c_photo']."' height='100'>";
?>