
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

    $binary_str = "11111111";
    $integer_str = binary_to_integer($binary_str);
    $binary = 1010;
    $integer = bin_to_dec($binary);
    $binary_minus = 1010;
    $integer_minus = bin_to_dec_minus($binary_minus);


    function binary_to_integer($binary_str) {
        $integer = bindec($binary_str);
        return $integer;
    }
    function bin_to_dec($binary) {
        $binary = str_split($binary);
        $binary = array_reverse($binary);
        
        $i = 0;
        $integer = 0;
        foreach($binary as $values) {
            $ans = $values * pow(2, $i);
            $integer += $ans;
            $i++;
        }
        return $integer;
    }
    function bin_to_dec_minus($binary_minus) {
        $binary_minus = str_split($binary_minus);
        $binary_minus = array_reverse($binary_minus);
        
        $i = 0;
        $integer = -128;
        foreach($binary_minus as $values) {
            $ans = $values * pow(2, $i);
            $integer += $ans;
            $i++;
        }
        return $integer;
    }
    echo "<p> | $binary_str | = $integer_str \n </p>";
    echo "<p> | $binary | = $integer \n </p>";
    echo "<p> | $binary_minus | = $integer_minus \n </p>";

?>
</body>
</html>