<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String13</title>
</head>

<body>
    <?php
    $str = "0011 1001 0032 45024 023 423 30 04 000";
    $newString = "";
    $strArr = explode(" ", $str);
    foreach ($strArr as $arrVal) {
        $subString = ltrim($arrVal, "0");
        $newString .= $subString;
    }

    echo $newString;
    ?>
</body>

</html>