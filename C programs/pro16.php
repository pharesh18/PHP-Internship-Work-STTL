<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Rectangle</title>
</head>

<body>

    <h2>Area of a Rectangle</h2>

    <form method="post" action="">
        Enter the length: <input type="number" name="length" required><br>
        Enter the width: <input type="number" name="width" required><br>
        <input type="submit" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];
        $area = $length * $width;
        echo "<p>Area of the rectangle: $area</p>";
    }
    ?>

</body>

</html>