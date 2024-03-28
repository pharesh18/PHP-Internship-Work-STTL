<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Diagonal Sum</title>
</head>

<body>

    <h2>Matrix Diagonal Sum</h2>

    <form method="post" action="">
        Enter matrix elements (comma-separated): <input type="text" name="matrix" required><br>
        <input type="number" name="rows" placeholder="Number of rows" required><br>
        <input type="submit" value="Find Diagonal Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matrix = explode(',', $_POST["matrix"]);
        $rows = $_POST["rows"];

        $diagonalSum = 0;

        for ($i = 0; $i < $rows; $i++) {
            $diagonalSum += $matrix[$i * $rows + $i];
        }

        echo "<p>Diagonal Sum: $diagonalSum</p>";
    }
    ?>

</body>

</html>