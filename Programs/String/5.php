<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String5</title>
</head>

<body>
    <?php
    $str = "hello world!";
    $splitted_arr = str_split($str, 5);
    foreach ($splitted_arr as $val) {
        echo $val . "<br>";
    }
    ?>
</body>

</html>s