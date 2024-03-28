<?php
    require('../../connection.php');
    require('../../Models/Category.php');
    $id = $_GET["id"];
    $conn = db_connection();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $obj = new Category($_POST);
        $result = $obj->UpdateCategoryById($conn, $id);
        if ($result) {
            echo '<script>alert("Data updated successfully");</script>';
            echo '<script>window.location.href = "../../Views/Category/index.php";</script>';
        }
    }
?>