<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculation</title>
</head>

<body>

    <h2>Simple Interest Calculation</h2>

    <form method="post" action="">
        Enter the principal amount: <input type="number" name="principal" required><br>
        Enter the rate of interest: <input type="number" name="rate" required><br>
        Enter the time (in years): <input type="number" name="time" required><br>
        <input type="submit" value="Calculate Simple Interest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $principal = $_POST["principal"];
        $rate = $_POST["rate"];
        $time = $_POST["time"];
        $simpleInterest = ($principal * $rate * $time) / 100;
        echo "<p>Simple Interest: $simpleInterest</p>";
    }
    ?>

</body>

</html>