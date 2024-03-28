<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Circle</title>
</head>

<body>

    <h2>Area of a Circle</h2>

    <form method="post" action="">
        Enter the radius: <input type="number" name="radius" required><br>
        <input type="submit" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST["radius"];
        $area = pi() * pow($radius, 2);
        echo "<p>Area of the circle: $area</p>";
    }
    ?>

</body>

</html>