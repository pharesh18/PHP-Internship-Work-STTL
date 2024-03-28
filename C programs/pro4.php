<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the Largest Number</title>
</head>

<body>

    <h2>Find the Largest Number</h2>

    <form method="post" action="">
        Enter the first number: <input type="number" name="num1" required><br>
        Enter the second number: <input type="number" name="num2" required><br>
        Enter the third number: <input type="number" name="num3" required><br>
        <input type="submit" value="Find Largest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $max = max($num1, $num2, $num3);

        echo "<p>The largest number is: $max</p>";
    }
    ?>

</body>

</html>