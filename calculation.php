<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <style>
        
    </style>
</head>
<body>
<?php
    require_once "function.php";
    $value = -7;
    $abs = myAbs($value);
    echo "<p>| $value | = $abs </p>";

    $bas = 2;
    $exp = 8;
    $pow = myPow($bas,$exp);
    echo "<p>| $bas ^ $exp | = $pow </p>";
?>
</body>
</html>