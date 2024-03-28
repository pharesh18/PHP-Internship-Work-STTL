<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear Search</title>
</head>

<body>

    <h2>Linear Search</h2>

    <form method="post" action="">
        Enter numbers (comma-separated): <input type="text" name="numbers" required><br>
        Enter the number to search: <input type="number" name="searchNumber" required><br>
        <input type="submit" value="Search">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = explode(',', $_POST["numbers"]);
        $searchNumber = $_POST["searchNumber"];
        $found = false;
        $index = -1;
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] == $searchNumber) {
                $found = true;
                $index = $i;
                break;
            }
        }

        echo "<p>" . ($found ? "Number $searchNumber found at index $index." : "Number $searchNumber not found.") . "</p>";
    }
    ?>

</body>

</html>