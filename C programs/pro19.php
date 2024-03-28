<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius to Fahrenheit Conversion</title>
</head>

<body>

    <h2>Celsius to Fahrenheit Conversion</h2>

    <form method="post" action="">
        Enter temperature in Celsius: <input type="number" name="celsius" required><br>
        <input type="submit" value="Convert to Fahrenheit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9 / 5) + 32;
        echo "<p>Temperature in Fahrenheit: $fahrenheit</p>";
    }
    ?>

</body>

</html>