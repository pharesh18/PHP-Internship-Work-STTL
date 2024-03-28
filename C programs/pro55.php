<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check for a Magic Square</title>
</head>

<body>

    <h2>Check for a Magic Square</h2>

    <form method="post" action="">
        Enter matrix elements (comma-separated): <input type="text" name="matrix" required><br>
        <input type="number" name="order" placeholder="Order of the matrix" required><br>
        <input type="submit" value="Check Magic Square">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matrix = explode(',', $_POST["matrix"]);
        $order = $_POST["order"];

        function isMagicSquare($mat, $n)
        {
            $sum = 0;
            for ($i = 0; $i < $n; $i++)
                $sum = $sum + $mat[$i * $n + $i];


            for ($i = 0; $i < $n; $i++) {
                $rowSum = 0;
                for ($j = 0; $j < $n; $j++)
                    $rowSum += $mat[$i * $n + $j];
                if ($rowSum != $sum)
                    return false;
            }


            for ($i = 0; $i < $n; $i++) {
                $colSum = 0;
                for ($j = 0; $j < $n; $j++)
                    $colSum += $mat[$j * $n + $i];
                if ($sum != $colSum)
                    return false;
            }


            $diagSum1 = 0;
            $diagSum2 = 0;
            for ($i = 0; $i < $n; $i++) {
                $diagSum1 += $mat[$i * $n + $i];
                $diagSum2 += $mat[$i * $n + ($n - $i - 1)];
            }
            if ($sum != $diagSum1 || $sum != $diagSum2)
                return false;

            return true;
        }

        if (isMagicSquare($matrix, $order)) {
            echo "<p>The given matrix is a magic square.</p>";
        } else {
            echo "<p>The given matrix is not a magic square.</p>";
        }
    }
    ?>

</body>