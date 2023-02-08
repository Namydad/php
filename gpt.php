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
            // write a function that returns a graph for 5 selected points
            function graph($x, $y) {
                // $x = [1, 2, 3, 4, 5];
                // $y = [1, 2, 3, 4, 5];
                $maxX = max($x);
                $maxY = max($y);
                $minX = min($x);
                $minY = min($y);
                $numX = count($x);
                $numY = count($y);
                $num = min($numX, $numY);
                $max = max($maxX, $maxY);
                $min = min($minX, $minY);
                $range = $max - $min;
                $step = 1;
                if ($range > 10) {
                    $step = 10;
                } else if ($range > 5) {
                    $step = 5;
                }
                echo "<table border='1' style='border-collapse: collapse;'>";
                echo "<tr><td></td>";
                for ($i = $min; $i <= $max; $i += $step) {
                    echo "<td>$i</td>";
                }
                echo "</tr>";
                for ($i = 0; $i < $num; $i++) {
                    echo "<tr>";
                    echo "<td>$x[$i]</td>";
                    for ($j = $min; $j <= $max; $j += $step) {
                        if ($y[$i] == $j) {
                            echo "<td>*</td>";
                        } else {
                            echo "<td></td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }

        ?>	
</form>
</body>
</html>