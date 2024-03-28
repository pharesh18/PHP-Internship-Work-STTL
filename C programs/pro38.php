<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Sort</title>
</head>

<body>

    <h2>Merge Sort</h2>

    <form method="post" action="">
        Enter numbers (comma-separated): <input type="text" name="numbers" required><br>
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = explode(',', $_POST["numbers"]);

        function mergeSort(&$arr)
        {
            $n = count($arr);
            if ($n > 1) {
                $mid = (int) ($n / 2);
                $left = array_slice($arr, 0, $mid);
                $right = array_slice($arr, $mid);

                mergeSort($left);
                mergeSort($right);

                $i = $j = $k = 0;
                while ($i < count($left) && $j < count($right)) {
                    if ($left[$i] < $right[$j]) {
                        $arr[$k++] = $left[$i++];
                    } else {
                        $arr[$k++] = $right[$j++];
                    }
                }

                while ($i < count($left)) {
                    $arr[$k++] = $left[$i++];
                }

                while ($j < count($right)) {
                    $arr[$k++] = $right[$j++];
                }
            }
        }

        mergeSort($numbers);

        echo "<p>Sorted numbers: " . implode(', ', $numbers) . "</p>";
    }
    ?>

</body>

</html>