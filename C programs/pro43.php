<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose of a Matrix</title>
</head>

<body>

    <h2>Transpose of a Matrix</h2>

    <form method="post" action="">
        Enter the number of rows: <input type="number" name="rows" required><br>
        Enter the number of columns: <input type="number" name="columns" required><br>
        Enter the elements of the matrix (comma-separated): <input type="text" name="matrix" required><br>
        <input type="submit" value="Calculate Transpose">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];
        $columns = $_POST["columns"];
        $matrix = explode(',', $_POST["matrix"]);

        $transposeMatrix = [];
        for ($i = 0; $i < $columns; $i++) {
            for ($j = 0; $j < $rows; $j++) {
                $transposeMatrix[$i][$j] = $matrix[$j * $columns + $i];
            }
        }

        echo "<p>Transpose of the matrix:</p>";
        echo "<table border='1'>";
        for ($i = 0; $i < $columns; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $rows; $j++) {
                echo "<td>{$transposeMatrix[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>