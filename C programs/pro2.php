<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Two Numbers</title>
</head>

<body>

    <h2>Add Two Numbers</h2>

    <form method="post" action="">
        Enter the first number: <input type="number" name="num1" required><br>
        Enter the second number: <input type="number" name="num2" required><br>
        <input type="submit" value="Add">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $sum = $num1 + $num2;
        echo "<p>Result: $num1 + $num2 = $sum</p>";
    }
    ?>

</body>

</html>