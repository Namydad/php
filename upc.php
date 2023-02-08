<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //write me a function in php that uses upc code 1234567891011
    //to calculate the check digit
    //use an array to store the digits in the upc code
    //use the formula to calculate the check digit

    $upc = array(1,2,3,4,5,6,7,8,9,1,0,1,1);
    $sum = 0;
    $sum2 = 0;
    $sum3 = 0;
    $total = 0;

    for($i = 0; $i < count($upc); $i++){
        if($i % 2 != 0){
            $sum += $upc[$i];
        } else {
            $sum2 += $upc[$i];
        }
    }

    $sum2 = $sum2 * 3;
    $total = $sum + $sum2;
    $sum3 = $total % 10;
    $sum3 = 10 - $sum3;
    $sum4 = $sum2 + $sum3;
    $sum5 = $sum4 % 10;
    $sum6 = $sum5 - 10; 

    echo $sum3;
    //write a php function that uses an integer for the tasks below
    //1. sum all digits from odd positions
    //2. double the result from (1)
    //3. sum all digits from even positions
    //4. add the result from (2) and (3)
    //5. use only the units digit of the sum from (4)
    //6. the check digit is the difference between 10 and the units digit from (5)
    //7. if the difference from (6) is 10, the check digit is 0

    $upc = array(1,2,3,4,5,6,7,8,9,0);
    $sum = 0;
    $sum2 = 0;
    $total = 0;

    for($i = 0; $i < count($upc); $i++){
        if($i % 2 != 0){
            $sum += $upc[$i];
        } else {
            $sum2 += $upc[$i];
        }
    }
    $sum = $sum * 2;
    $total = $sum + $sum2;
    $sum3 = $total % 10;
    $sum3 = 10 - $sum3;
    $sum4 = $sum2 + $sum3;
    $sum5 = $sum4 % 10;
    $sum6 = $sum5 - 10; 

    echo "<p>$sum6</p>";

    // UPC Check Digit Calculator
    // UPC Check Digit Calculator
    //
    // 1. Sum all digits from odd positions.
    // 2. Double the result from (1).
    // 3. Sum all digits from even positions.
    // 4. Add the results from (2) and (3).
    // 5. Use only the units digit of the sum from (4).
    // 6. The check digit is the difference between 10 and the units digit from (5).
    // 7. If the difference from (6) is 10, the check digit is 0.



    ?>
</body>
</html>