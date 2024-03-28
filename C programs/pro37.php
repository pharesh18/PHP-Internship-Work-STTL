<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary Search</title>
</head>

<body>

    <h2>Binary Search</h2>

    <form method="post" action="">
        Enter numbers (comma-separated): <input type="text" name="numbers" required><br>
        Enter the number to search: <input type="number" name="searchNumber" required><br>
        <input type="submit" value="Search">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = explode(',', $_POST["numbers"]);
        $searchNumber = $_POST["searchNumber"];
        $low = 0;
        $high = count($numbers) - 1;
        $found = false;
        $index = -1;

        while ($low <= $high) {
            $mid = (int) (($low + $high) / 2);

            if ($numbers[$mid] == $searchNumber) {
                $found = true;
                $index = $mid;
                break;
            } elseif ($numbers[$mid] < $searchNumber) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        echo "<p>" . ($found ? "Number $searchNumber found at index $index." : "Number $searchNumber not found.") . "</p>";
    }
    ?>

</body>

</html>