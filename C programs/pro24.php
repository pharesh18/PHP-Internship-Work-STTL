<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCD</title>
</head>

<body>

    <h2>GCD (Greatest Common Divisor)</h2>

    <form method="post" action="">
        Enter the first number: <input type="number" name="num1" required><br>
        Enter the second number: <input type="number" name="num2" required><br>
        <input type="submit" value="Calculate GCD">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Calculate GCD using Euclidean algorithm
        while ($num2 != 0) {
            $temp = $num2;
            $num2 = $num1 % $num2;
            $num1 = $temp;
            echo "num1 = " . $num1 . "num2 = " . $num2 . "<br>";
        }

        // Display the result
        echo "<p>GCD of the two numbers is: $num1</p>";
    }
    ?>

</body>

</html>