<?php 
    function db_connection(){
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "php_test";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
            die("Connection failed" . mysqli_connect_error());
        }else{
            return $conn;
        }
    }
?>