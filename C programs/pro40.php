<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Addition</title>
</head>

<body>

    <h2>Matrix Addition</h2>

    <form method="post" action="">
        Enter the number of rows: <input type="number" name="rows" required><br>
        Enter the number of columns: <input type="number" name="columns" required><br>
        Enter the elements of matrix A (comma-separated): <input type="text" name="matrixA" required><br>
        Enter the elements of matrix B (comma-separated): <input type="text" name="matrixB" required><br>
        <input type="submit" value="Add Matrices">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];
        $columns = $_POST["columns"];
        $matrixA = explode(',', $_POST["matrixA"]);
        $matrixB = explode(',', $_POST["matrixB"]);

        $resultMatrix = [];
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                $resultMatrix[$i][$j] = $matrixA[$i * $columns + $j] + $matrixB[$i * $columns + $j];
            }
        }

        echo "<p>Matrix A + Matrix B:</p>";
        echo "<table border='1'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++) {
                echo "<td>{$resultMatrix[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>