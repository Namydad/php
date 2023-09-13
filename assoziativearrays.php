<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nummerische arrays in PHP</title>
</head>
<body>
    <?php
    
    /* Ohne arrays umständlich
    $note_1 = 1.3;
    $note_2 = 2.7;
    $note_3 = 3.5;
    $note_4 = 1.9;
....................
    $note_18 = 4.3;
    */

    /*   */
    $notenliste_a = [
        "Fred" => 1.3,
        "Uli" => 2.7,
        "Eva" => 3.5,
        "Lea" => 1.9
    ];



    echo    $notenliste;
    echo "<br>";
    echo "<pre>";
    print_r($notenliste);
    echo "</pre>";
    // 2. mit var_dump (viele Details)

    echo "<pre>";
    var_dump($notenliste);
    echo "</pre>";

    //Für das Frontend (Benutzer) nur mit Schleife!

    // mit for-schleife
    for($i = 0; $i < 4; $i++) {
        $nr = $i +1;
        echo "Note Nr. $nr: $notenliste[$i]<br>";

    }



    //Anzahl der Werte ermitteln
    $anzahl = count($notenliste);
    echo "Anzahl der Noten: $anzahl<br>";

    for($i = 0; $i < $anzahl; $i++) {
        $nr = $i +1;
        echo "Note Nr. $nr: $notenliste[$i]<br>";

    }

    // oder mit foreach (geht nur mit arrays)
    foreach($notenliste as $index => $note) {
        $nr = $index +1;
        echo "Note Nr. $note: $note<br>";
    }

    //Wert an das Array anhängen (am Ende)
    $notenliste[]  =6.0;
    echo "<pre>";
    print_r($notenliste);
    echo "</pre>";

    //Wert innerhalb des arrays ändern
    $notenliste[3]  =1.5;
    echo "<pre>";
    print_r($notenliste);
    echo "</pre>";

    // Wert innerhalb des Arrays entfernen
    // der index wird ausgelassen => Ausgabe mit for_Schleife geht
    // nun nicht mehr => nru noch foreach => Arrays am Besten immer
    //mit foreach ausgeben
    unset($notenliste[2]);
    echo "<pre>";
    print_r($notenliste);
    echo "</pre>";

    //  Array explizit belegen
    $notenliste = [1.3, 2.7, 3.5, 1.5, 2.8, 4.3];
    echo "<pre>";
    print_r($notenliste);
    echo "</pre>";

    //array sortieren
    //(nicht assoziativ = Zuordnung key => value stimmt nicht mehr)
    //sort($notenliste)
    sort ($notenliste); 
    echo "<pre>";
    print_r($notenliste);
    echo "</pre>";


    //assoziativ = Zuordnung key => value bleibt erhalten)
    asort ($notenliste); 
    echo "<pre>";
    print_r($notenliste);
    echo "</pre>";


    //  kleinsten Wert eines Arrays ermitteln
    $besteNote = min($notenliste);
    echo "Beste Note: $besteNote<br>";

    // höchste Wert eines Arrays ermitteln
    $schlechtesteNote = max($notenliste);
    echo "Schlechteste Note: $schlechtesteNote<br>";

    // Durchschnitt eines Arrays bilden:
    $ds = array_sum($notenliste)/count($notenliste);
    $ds_f = number_format($ds,2,",",".");
    echo "Durchschnitt: $ds_f <br>";





    ?>
</body>
</html>