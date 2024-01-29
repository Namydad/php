<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vorname = $_GET['vorname'];
        $nachname = $_GET['nachname'];
        $az_erwachsen = $_GET['anzahl_erwachsene'];
        $az_kinder = $_GET['anzahl_kinder'];
        $rabatt = $_GET['kinokarte'];

        $preis_erwachsene = 11;
        $preis_kinder = 8;
        $rabattkarte = .90;

        echo "<div> Danke für Ihre Bestellung: " . $vorname . ", " . $nachname . " wir freuen uns auf Ihren Besuch!</div>";

        if ($rabatt == "yes") {
            $preis_gesamt = ($az_erwachsen * $preis_erwachsene + $az_kinder * $preis_kinder) * $rabattkarte;

            echo "<div> Sie haben eine Rabattkarte, der Gesamtpreis beträgt: " . $preis_gesamt . "€</div>";
            
        } elseif ($rabatt == "no"){
            $preis_gesamt = ($az_erwachsen * $preis_erwachsene + $az_kinder * $preis_kinder);
            
            echo "<div> Sie haben keine Rabattkarte, der Gesamtpreis beträgt: " . $preis_gesamt . "€</div>";
            echo "<div> Falls Sie Interesse an einer Rabattkarte haben, können Sie sich gerne an der Kasse informieren.</div>";

        }
    ?>
</body>
</html>