<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Multiplication</title>
</head>

<body>

    <h2>Matrix Multiplication</h2>

    <form method="post" action="">
        Enter the number of rows of matrix A: <input type="number" name="rowsA" required><br>
        Enter the number of columns of matrix A: <input type="number" name="columnsA" required><br>
        Enter the elements of matrix A (comma-separated): <input type="text" name="matrixA" required><br>
        Enter the number of rows of matrix B: <input type="number" name="rowsB" required><br>
        Enter the number of columns of matrix B: <input type="number" name="columnsB" required><br>
        Enter the elements of matrix B (comma-separated): <input type="text" name="matrixB" required><br>
        <input type="submit" value="Multiply Matrices">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rowsA = $_POST["rowsA"];
        $columnsA = $_POST["columnsA"];
        $matrixA = explode(',', $_POST["matrixA"]);
        $rowsB = $_POST["rowsB"];
        $columnsB = $_POST["columnsB"];
        $matrixB = explode(',', $_POST["matrixB"]);

        if ($columnsA != $rowsB) {
            echo "<p>Error: Matrices cannot be multiplied. Number of columns in matrix A must be equal to the number of rows in matrix B.</p>";
        } else {

            $resultMatrix = [];
            for ($i = 0; $i < $rowsA; $i++) {
                for ($j = 0; $j < $columnsB; $j++) {
                    $resultMatrix[$i][$j] = 0;
                    for ($k = 0; $k < $columnsA; $k++) {
                        $resultMatrix[$i][$j] += $matrixA[$i * $columnsA + $k] * $matrixB[$k * $columnsB + $j];
                    }
                }
            }


            echo "<p>Matrix A * Matrix B:</p>";
            echo "<table border='1'>";
            for ($i = 0; $i < $rowsA; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columnsB; $j++) {
                    echo "<td>{$resultMatrix[$i][$j]}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>

</body>

</html>