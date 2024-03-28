<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Number Pattern</title>
</head>

<body>

    <h2>Print Number Pattern</h2>

    <form method="post" action="">
        Enter the number of rows: <input type="number" name="rows" required><br>
        <input type="submit" value="Print Pattern">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];

        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "$j ";
            }
            echo "<br>";
        }
    }
    ?>

</body>

</html>