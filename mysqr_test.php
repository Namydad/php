<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .company { 
            font-size: 2rem;
            font-family: "Sans-Serif";
            font-weight: bold;
        }
    </style>
</head>
<h1>Test</h1>
<?php

// function mySqrt($radiant float) : float  and a = radiant float b = 1.0 while (a != b ) return b
function mySqrt($radiant) {
    $a = $radiant;
    $b = 1.0;
    while ($a != $b) {
        $a = ($a + $b) / 2;
        $b = $radiant / $a;
    }
    return $a;
}


echo "The square root of 5 is: ";
$input = 5;
$res = mySqrt($input);
$res = round($res, 2);
echo $res;

?>

</body>
</html>