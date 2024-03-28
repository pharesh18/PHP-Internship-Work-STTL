<?php 
    require "../../DB/Connection.php";
    require "../../Model/Player.php";
    if('<script>confirm("Are you sure you want to delete player details??");</script>'){
        $id = $_GET["id"];
        $conn = db_connection();
        $result = Player::DeletePlayerById($conn, $id); 
        if($result){
            echo '<script>alert("Player deleted successfully");</script>';
            echo '<script>window.location.href = "../../Views/AdminDashboard/DisplayData.php";</script>';
        }
    } 
?>