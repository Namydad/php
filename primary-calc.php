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

        <?php
            function calcPrimary($number){
                if($number > 1){
                    for ($x = 2; $x <= $number-1; $x+=1) {
                        if($number % $x == 0){
                            $primzahl = false;
                            echo "Not a primary number";
                            return $primzahl;
                        }
                        else{
                            $primzahl = true; 
                        }
                      }
                    if($primzahl == true){
                        echo "The Number: $number is a primary number";
                    }
                    else{
                        echo "Not a primary number";
                    }
                }
                else    {
                    echo "Not a primary number";
                }
            }
            function arrayPrimary($number, $array_numbers){
                if($number > 1){
                    foreach ($array_primary as $i) {
                        if($number == $i){
                            $primarynumber = true;
                        }
                        else{
                            $primarynumber = false;
                        }  
                      }
                    
                    if($primzahl == true){
                        echo "The Number: $number is a primary number";
                    }
                    else{
                        echo "Not a primary number";
                    }
                }
                else{
                    echo "Not a primary number";
                }
            }
          
        ?>	
</form>
</body>
</html>