<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>

<body>

    <h2>Fibonacci Series</h2>

    <form method="post" action="">
        Enter the number of terms: <input type="number" name="numTerms" required><br>
        <input type="submit" value="Generate Fibonacci Series">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numTerms = $_POST["numTerms"];

        $fibonacci = [0, 1];
        for ($i = 2; $i < $numTerms; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        echo "<p>Fibonacci Series: " . implode(", ", $fibonacci) . "</p>";
    }
    ?>

</body>

</html>