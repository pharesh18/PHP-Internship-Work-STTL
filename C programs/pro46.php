<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pascal's Triangle</title>
</head>

<body>

    <h2>Pascal's Triangle</h2>

    <form method="post" action="">
        Enter the number of rows: <input type="number" name="rows" required><br>
        <input type="submit" value="Generate Triangle">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];

        function generatePascalsTriangle($rows)
        {
            $triangle = [];
            for ($i = 0; $i < $rows; $i++) {
                $triangle[$i] = [];
                for ($j = 0; $j <= $i; $j++) {
                    if ($j == 0 || $j == $i) {
                        $triangle[$i][$j] = 1;
                    } else {
                        $triangle[$i][$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
                    }
                }
            }
            return $triangle;
        }

        $pascalsTriangle = generatePascalsTriangle($rows);
        echo "<table border='1'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $i; $j++) {
                echo "<td>{$pascalsTriangle[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>