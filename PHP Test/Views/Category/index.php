<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- ---- data table libraries -->

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">
    </script>
    <title>Add category</title>
</head>

<body class="container my-5">
    <button class="btn btn-primary mb-4">
        <a href="add.php" style="text-decoration: none; color: #fff;">Add Category</a>
    </button>
    <table id="myTable" class="table">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">Id</th>
                <th scope="col">Category Name</th>
                <th scope="col">Cateogry Image</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require('../../connection.php');
                require('../../Models/Category.php');
                $conn = db_connection();
                $result = Category::getAllCategories($conn);
                if($result){
                    while( $row = mysqli_fetch_assoc($result)){ 
                    $file = $row["category_name"];
            ?>
            <tr>
                <td><input type="checkbox"></td>
                <td scope="row"><?php echo $row["category_id"] ?></td>
                <td><?php echo $row["category_name"] ?></td>
                <td><img src="../../Views/Category/<?php echo $row['category_image'] ?>" style="width: 80px;"
                        alt="category_image"></td>
                <td>
                    <button class="btn btn-primary">
                        <a href="edit.php?id=<?php echo $row['category_id'] ?>"
                            style="text-decoration: none; color: #fff;">Edit</a>
                    </button>
                    <button class="btn btn-secondary">
                        <a href="delete.php?id=<?php echo $row['category_id'] ?>"
                            onclick="return confirm('Are you sure you want to delete this?')" class="me-1"
                            style="text-decoration: none; color: #fff;">Delete</a>
                    </button>
                </td>
            </tr>

            <?php }
                } ?>
        </tbody>
    </table>
</body>

<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>

</html>