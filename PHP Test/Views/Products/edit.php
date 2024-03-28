<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../../Views/CSS/header.css">
    <link rel="stylesheet" href="../../Views/CSS/footer.css">
    <link rel="stylesheet" href="../../Views/CSS/style.css">
    <title>Edit</title>
</head>

<body>
    <div class="main p-5">
        <?php
        require('../../connection.php');
        require('../../Models/Product.php');
        $id = $_GET["id"];
        $conn = db_connection();
        $row = Product::getProductById($conn, $id);
        ?>
        <form method="post" action="update.php?id=<?php echo $id ?>" enctype="multipart/form-data">
            <div class="form-group mb-4">
                <label>Product Name</label>
                <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>" class="form-control"
                    required>
            </div>
            <div class="form-group mb-4">
                <label>Product Image</label>
                <input type="file" class="form-control" name="product_image" id="product_image" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>

</html>