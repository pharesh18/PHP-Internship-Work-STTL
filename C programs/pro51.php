<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Leap Year</title>
</head>

<body>

    <h2>Check Leap Year</h2>

    <form method="post" action="">
        Enter a year: <input type="number" name="year" required><br>
        <input type="submit" value="Check Leap Year">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST["year"];

        if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
            echo "<p>$year is a leap year.</p>";
        } else {
            echo "<p>$year is not a leap year.</p>";
        }
    }
    ?>

</body>

</html>