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
<h1>Test</h1>

    <?php
        function myAbs($value) {
            if ($value < 0) { // bei einer alleinige IF kann man geschweifte { } weglassen 
                return (-1) * $value; //function finished
                echo "hier gehts weiter"; // ignored 
            }
            return $value; // done 
        }
        /*function myAbs($value) {
            return ($value < 0) ? -$value : $value; // beste optimierung finde es sieht müll aus
        } */
        function myPow($bas,$exp) {
            $pow = 1;
            if ($exp == 0){
                $pow = 1;
                return $pow;
            }
            for ($i = 1; $i <= myAbs($exp); $i++) {
                $pow = $pow * $bas;
            }
            if($exp < 0) {
                return 1/$pow;
            }
            return $pow;
        }
        
    ?>	
</body>
</html>