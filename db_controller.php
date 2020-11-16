<?php
    class DBController {
        private $host = "localhost";
        private $user = "root";
        //private $user = "id15407179_root";
        private $password = "toor";
        //private $password = "}|u4@Iv~7b7_gAxY";
        private $database = "grocery";
        //private $database = "id15407179_grocery";
        private $conn;
        
        function __construct() {
            $this->conn = $this->connectDB();
        }	
        
        function connectDB() {
            $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
            return $conn;
        }
        
        function runQuery($query) {
            $resultset = NULL;
            $result = mysqli_query($this->conn, $query);
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resultset[] = $row;
                }
                if(!empty($resultset)) {
                    return $resultset;
                }
            }
            else {
                return NULL;
            }
        }

        function insert($query) {
            if(mysqli_query($this->conn, $query)) {
                return true;
            }
            else {
                return false;
            }
        }
    }
?>