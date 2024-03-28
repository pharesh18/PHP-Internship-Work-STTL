<?php 
    require('../../connection.php');
    require('../../Models/Product.php');
    $id = $_GET["id"];
    $conn = db_connection();
    $result = Product::DeleteProductById($conn, $id); 
    if($result){
        echo '<script>alert("Product deleted successfully");</script>';
        echo '<script>window.location.href = "../../Views/Products/index.php";</script>';
    }
?>