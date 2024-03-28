<?php 
    require('../../connection.php');
    require('../../Models/Product.php');
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $conn = db_connection();
        $obj = new Product($_POST);
        $result = $obj->createProduct($conn);
        if($result){
            if($result){
                echo '<script>alert("Product added successfully");</script>';
                echo '<script>window.location.href = "../../Views/Products/index.php";</script>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <title>Add Product</title>
</head>

<body class="w-50 mx-auto mt-5 p-5 shadow">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div class="form-group mb-4">
            <label for="exampleInputEmail1">Prodcut Name</label>
            <input type="text" name="product_name" class="form-control" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group mb-4">
            <label for="exampleInputPassword1">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</body>

</html>