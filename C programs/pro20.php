<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit to Celsius Conversion</title>
</head>

<body>

    <h2>Fahrenheit to Celsius Conversion</h2>

    <form method="post" action="">
        Enter temperature in Fahrenheit: <input type="number" name="fahrenheit" required><br>
        <input type="submit" value="Convert to Celsius">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fahrenheit = $_POST["fahrenheit"];
        $celsius = ($fahrenheit - 32) * 5 / 9;
        echo "<p>Temperature in Celsius: $celsius</p>";
    }
    ?>

</body>

</html>