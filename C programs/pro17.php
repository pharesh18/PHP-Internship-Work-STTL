<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Triangle</title>
</head>

<body>

    <h2>Area of a Triangle</h2>

    <form method="post" action="">
        Enter the base: <input type="number" name="base" required><br>
        Enter the height: <input type="number" name="height" required><br>
        <input type="submit" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $height = $_POST["height"];
        $area = 0.5 * $base * $height;
        echo "<p>Area of the triangle: $area</p>";
    }
    ?>

</body>

</html>