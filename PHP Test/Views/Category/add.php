<?php 
    require('../../connection.php');
    require('../../Models/Category.php');
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $conn = db_connection();
        $obj = new Category($_POST);
        $result = $obj->Create_Category($conn);
        if($result){
            if($result){
                echo '<script>alert("Category added successfully");</script>';
                echo '<script>window.location.href = "../../Views/Category/index.php";</script>';
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
    <title>Add category</title>
</head>

<body class="w-50 mx-auto mt-5 p-5 shadow">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div class="form-group mb-4">
            <label for="exampleInputEmail1">Category Name</label>
            <input type="text" name="category_name" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="form-group mb-4">
            <label for="exampleInputPassword1">Category Image</label>
            <input type="file" class="form-control" id="category_image" name="category_image">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</body>

</html>