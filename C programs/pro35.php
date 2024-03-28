<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Sort</title>
</head>

<body>

    <h2>Insertion Sort</h2>

    <form method="post" action="">
        Enter numbers (comma-separated): <input type="text" name="numbers" required><br>
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = explode(',', $_POST["numbers"]);
        $n = count($numbers);
        for ($i = 1; $i < $n; $i++) {
            $key = $numbers[$i];
            $j = $i - 1;

            while ($j >= 0 && $numbers[$j] > $key) {
                $numbers[$j + 1] = $numbers[$j];
                $j = $j - 1;
            }

            $numbers[$j + 1] = $key;
        }
        echo "<p>Sorted numbers: " . implode(', ', $numbers) . "</p>";
    }
    ?>

</body>

</html>