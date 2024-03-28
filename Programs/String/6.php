<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String6</title>
</head>

<body>
    <?php
    $str = "abc34@gmai.com";
    $splitted_arr = explode("@", $str);
    echo "Username = " . $splitted_arr[0];
    ?>
</body>

</html>