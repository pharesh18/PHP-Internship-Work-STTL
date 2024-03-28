<?php
    require('../../connection.php');
    require('../../Models/Product.php');
    $id = $_GET["id"];
    $conn = db_connection();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $obj = new Product($_POST);
        $result = $obj->UpdateProductById($conn, $id);
        if ($result) {
            echo '<script>alert("Data updated successfully");</script>';
            echo '<script>window.location.href = "../../Views/Products/index.php";</script>';
        }
    }
?>