<?php
    require "../../DB/Connection.php";
    require "../../Model/Player.php";
    $id = $_GET["id"];
    $conn = db_connection();
    $obj = new Player($_POST);
    
    $result = $obj->UpdatePlayerById($conn, $id);
    if ($result) {
        echo '<script>alert("Data updated successfully");</script>';
        echo '<script>window.location.href = "../../Views/AdminDashboard/DisplayData.php";</script>';
    }
?>