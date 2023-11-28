<!DOCTYPE html>
<html>
    <head>

            <title>
                Tobias FISI23A
            </title>
			<meta charset="utf-8">
    </head>
        <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $w1 = $_POST["widerstand1"];
            $w2 = $_POST["widerstand2"];
            $schaltung = $_POST["schaltung"];
            $ergebnis = "";
            if ($schaltung == 'reihe') {
                $ergebnis = $w1 + $w2;
            } else if ($schaltung == 'parallel') {
                $ergebnis = $w1 * $w2 / ($w1 + $w2);
            }
        }
        ?>
        <div class="mainbody">  
            <br>
            <form class="formular1" name="formular1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                1.Resistance:
                <input class="field" type="text" name="widerstand1">Ω<br>
                <br>
                2.Resistance:
                <input class="field" type="text" name="widerstand2">Ω
            <br>
            
            
                <input class="radio" type="radio" id="rs" name="schaltung" value="reihe" checked=""><label for="rs"> Reihenschaltung</label><br> 
                <input class="radio" type="radio" id="ps" name="schaltung" value="parallel"><label for="ps"> Parallelschaltung</label><br> 
            <br>
            
            
                
                <input class="button" type="submit" value="Calculate"><br>
            <br>
            
            
                Resistance:
                <input class="result" type="text" name="ergebnis" value="<?php echo $ergebnis; ?>" readonly="">Ω<br>
            <br>
            </form>
        </div>
        <br>
        </body>
    </html>