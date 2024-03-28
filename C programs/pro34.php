<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Sort</title>
</head>

<body>

    <h2>Selection Sort</h2>

    <form method="post" action="">
        Enter numbers (comma-separated): <input type="text" name="numbers" required><br>
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = explode(',', $_POST["numbers"]);

        $n = count($numbers);
        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($numbers[$j] < $numbers[$minIndex]) {
                    $minIndex = $j;
                }
            }
            $temp = $numbers[$minIndex];
            $numbers[$minIndex] = $numbers[$i];
            $numbers[$i] = $temp;
        }
        echo "<p>Sorted numbers: " . implode(', ', $numbers) . "</p>";
    }
    ?>

</body>

</html>