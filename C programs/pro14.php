<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>

<body>

    <h2>Basic Calculator</h2>

    <form method="post" action="">
        Enter the first number: <input type="number" name="num1" required><br>
        Enter the second number: <input type="number" name="num2" required><br>
        Select operation:
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
                break;
            default:
                $result = "Invalid operation";
                break;
        }

        echo "<p>Result: $result</p>";
    }
    ?>

</body>

</html>