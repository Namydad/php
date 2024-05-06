<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wertminderung - Eingabeformular</h1>

    <form action="anschaffungsrechnung.php">
        <label for="anschaffungswert">Anschaffungswert:</label>
        <input type="number" name="anschaffungswert" id="anschaffungswert" required>
        <label>€</label>
        <br>
        <label for="nutzungsdauer">Jährliche Wertminderung:</label>
        <input type="number" name="wertminderung" id="wertminderung" required>
        <label>%</label>
        <br>
        <label for="restwert">Restwert:</label>
        <input type="number" name="restwert" id="restwert" required>
        <label>€</label>
        <br>
        <input type="submit" value="Berechnen">
    </form>
    <?php

        $pre_wert = $_GET['anschaffungswert'];
        $wert_down_percent = $_GET['wertminderung'];
        $post_wert = $_GET['restwert'];
        $jahr = 0;
        while ($pre_wert > $post_wert) {
            echo "Wert nach Jahr $jahr: $pre_wert   €<br>";
            $pre_wert = $pre_wert * (1 - $wert_down_percent / 100);    
            $jahr++;
        }

    ?>

</body>
</html>