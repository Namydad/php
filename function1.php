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
            function showCompany(){
                echo "<div class=\"company\">";
                echo "Mannheim SW Engineering";
                echo "</div>";
            }
            function showProduct($productName){
                echo "<h1>Product Name</h1>";
                echo "<div class=\"product\">";
                echo "$productName";
                echo "</div>";
            }
            function showVersion($version, $datum){
                echo "<h1>Version</h1>";
                echo "<div class=\"version\">";
                echo "<em> die $version vom $datum<em>";
                echo "</div>";
            }
            function megaAdder($summand_1, $summand_2){
                $sum = $summand_1 + $summand_2;
                echo "$sum";
                return $sum;
            }
            /*function megaCalc($s1, $s2, $op) {
                switch($op){
                    case "+": $sum1 = $s1 + $s2; break;
                    case "-": $sum1 = $s1 - $s2; break;
                    case "*": $sum1 = $s1 * $s2; break;
                    case "/": $sum1 = $s1 / $s2; break;
                    case "%": $sum1 = $s1 % $s2; break;                
                }
                return $sum1;
                    echo "$sum1";
            } */
            function megaCalc($op_1, $op_2, $op) {
                switch($op) {
                    case "+": $erg = $op_1 + $op_2; break;
                    case "-": $erg = $op_1 - $op_2; break;
                    case "*": $erg = $op_1 * $op_2; break;
                    case "/": $erg = $op_1 / $op_2; break;
                    case "%": $erg = $op_1 % $op_2; break;
                }
                echo "<p>";
                echo "$op_1 $op $op_2 = $erg";
                echo "</p>";
            }            
        ?>	
</form>
</body>
</html>