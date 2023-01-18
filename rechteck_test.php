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
        require_once "rechteck.class.php";
        $a = $_REQUEST['SeiteA'];
        $b = $_REQUEST['SeiteB'];
        $r1 = new Rechteck($a,$b);
        //$r1->seiteA = 3;
        //$r1->seiteB = 3;
        $a = $r1->getSeiteA();
        $a_f = number_format($a, 2, ',', '.');
        $b = $r1->getSeiteB();
        $b_f = number_format($b, 2, ',', '.');
        echo "<p>Seite A des Rechtecks r1: $a_f cm</p>";
        echo "<p>Seite B des Rechtecks r1: $b_f cm</p>";
        $r1->berechneUmfang();
        $r1->berechneFläche();
        if ($r1->berechneQuadrat() == true) {
            echo "<p>Rechteck ist Quadratisch</p>";
        } else {
            echo "<p>Rechteck ist nicht Quadratisch</p>";
        }
        
        echo "<br>";

        $r2 = new Rechteck(6,2);
        //$r2->seiteA = 6;
        //$r2->seiteB = 2;
        $r2->setSeiteA(6);
        $r2->setSeiteB(2);
        
        $a = $r2->getSeiteA();
        $a_f = number_format($a, 2, ',', '.');
        $b = $r2->getSeiteB();
        $b_f = number_format($b, 2, ',', '.');
        echo "<p>Seite A des Rechtecks r2: $a_f cm</p>";
        echo "<p>Seite B des Rechtecks r2: $b_f cm</p>";
        $r2->berechneQuadrat();
        $r2->berechneUmfang();
        $r2->berechneFläche();
        if ($r2->berechneQuadrat() == true) {
            echo "<p>Rechteck ist Quadratisch</p>";
        } else {
            echo "<p>Rechteck ist nicht Quadratisch</p>";
        }

        echo "<br>";

        $r3 = new Rechteck(5,7);
        //$r3->seiteA = 5;
        //$r3->seiteB = 7
        $r3->setSeiteA(5);
        $r3->setSeiteB(7);
        
        $a = $r3->getSeiteA();
        $a_f = number_format($a, 2, ',', '.');
        $b = $r3->getSeiteB();
        $b_f = number_format($b, 2, ',', '.');
        echo "<p>Seite A des Rechtecks r3: $a_f cm</p>";
        echo "<p>Seite B des Rechtecks r3: $b_f cm</p>";
        $r3->berechneUmfang();
        $r3->berechneFläche();
        if ($r3->berechneQuadrat() == true) {
            echo "<p>Rechteck ist Quadratisch</p>";
        } else {
            echo "<p>Rechteck ist nicht Quadratisch</p>";
        }
        ?>	

         
</form>
</body>
</html>