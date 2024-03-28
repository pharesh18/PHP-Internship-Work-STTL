<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Sort</title>
</head>

<body>

    <h2>Quick Sort</h2>

    <form method="post" action="">
        Enter numbers (comma-separated): <input type="text" name="numbers" required><br>
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = explode(',', $_POST["numbers"]);
        function quickSort(&$arr, $low, $high)
        {
            if ($low < $high) {
                $partitionIndex = partition($arr, $low, $high);

                quickSort($arr, $low, $partitionIndex - 1);
                quickSort($arr, $partitionIndex + 1, $high);
            }
        }

        function partition(&$arr, $low, $high)
        {
            $pivot = $arr[$high];
            $i = $low - 1;

            for ($j = $low; $j < $high; $j++) {
                if ($arr[$j] < $pivot) {
                    $i++;

                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }


            $temp = $arr[$i + 1];
            $arr[$i + 1] = $arr[$high];
            $arr[$high] = $temp;

            return $i + 1;
        }

        quickSort($numbers, 0, count($numbers) - 1);

        echo "<p>Sorted numbers: " . implode(', ', $numbers) . "</p>";
    }
    ?>

</body>

</html>