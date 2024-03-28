<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Two Numbers</title>
</head>

<body>

    <h2>Swap Two Numbers</h2>

    <form method="post" action="">
        Enter the first number (a): <input type="number" name="numA" required><br>
        Enter the second number (b): <input type="number" name="numB" required><br>
        <input type="submit" value="Swap">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["numA"];
        $b = $_POST["numB"];

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "<p>After swapping: a = $a, b = $b</p>";
    }
    ?>

</body>

</html>