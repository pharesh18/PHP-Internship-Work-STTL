<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Calculation</title>
</head>

<body>

    <h2>String Length Calculation</h2>

    <form method="post" action="">
        Enter a string: <input type="text" name="inputString" required><br>
        <input type="submit" value="Calculate Length">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $length = strlen($inputString);
        echo "<p>Length of the string: $length</p>";
    }
    ?>

</body>

</html>