<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Upper Triangular Matrix</title>
</head>

<body>

    <h2>Check Upper Triangular Matrix</h2>

    <form method="post" action="">
        Enter the number of rows and columns: <input type="number" name="size" required><br>
        Enter the elements of the matrix (comma-separated): <input type="text" name="matrix" required><br>
        <input type="submit" value="Check Upper Triangular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = $_POST["size"];
        $matrix = explode(',', $_POST["matrix"]);

        $isUpperTriangular = true;
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                if ($i > $j && $matrix[$i * $size + $j] != 0) {
                    $isUpperTriangular = false;
                    break;
                }
            }
        }

        echo "<p>" . ($isUpperTriangular ? "The matrix is upper triangular." : "The matrix is not upper triangular.") . "</p>";
    }
    ?>

</body>

</html>