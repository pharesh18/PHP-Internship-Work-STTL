<?php 
    require('../../connection.php');
    require('../../Models/Category.php');
    $id = $_GET["id"];
    $conn = db_connection();
    $result = Category::DeleteCategoryById($conn, $id); 
    if($result){
        echo '<script>alert("Category deleted successfully");</script>';
        echo '<script>window.location.href = "../../Views/Category/index.php";</script>';
    }
?>