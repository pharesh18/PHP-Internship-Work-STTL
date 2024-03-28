<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find GCD and LCM of Array Elements</title>
</head>

<body>

    <h2>Find GCD and LCM of Array Elements</h2>

    <form method="post" action="">
        Enter array elements (comma-separated): <input type="text" name="elements" required><br>
        <input type="submit" value="Find GCD and LCM">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $elements = explode(',', $_POST["elements"]);

        function findGCD($a, $b)
        {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function findLCM($a, $b)
        {
            return($a * $b) / findGCD($a, $b);
        }

        $gcd = $elements[0];
        $lcm = $elements[0];

        foreach ($elements as $element) {
            $gcd = findGCD($gcd, $element);
            $lcm = findLCM($lcm, $element);
        }

        echo "<p>GCD: $gcd</p>";
        echo "<p>LCM: $lcm</p>";
    }
    ?>

</body>

</html>