<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String7</title>
</head>

<body>
    <?php
    $str = "Hello World!";
    $sliced_str = substr($str, -3);
    echo "Last three characters are = " . $sliced_str;
    ?>
</body>

</html>