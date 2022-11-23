<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    body {
            background-color: grey;
    }
    .wrapper {
           margin: 0 auto;
            width: 80%;          
            text-align: center;
            background-color: white;
            padding: 40px 20px;
            border-radius: 8px;
            box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.7);
        }
        .kugel {
            border: 2px solid black;
            width: 70px;
            height: 70px;
            margin: 8px;
            display: inline-block;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            font-family: "arial";
            line-height: 70px;
            border-radius: 50%;
        }
    </style>
</head>
<body>


<div class = "wrapper">

    <h1>Lotto Statistik-Tool</h1>
    <h2>Statistik anhand ihrer Tipp-Kombination</h2>
        <?php
            $loops = $_REQUEST["anzahl"]
            $anzahl = $_REQUEST["anzahl"];
            $tipp = $_REQUEST["tipp"]; 
            
            $topf = range(0,49);
            unset($topf[0]);
            $preis = 1.2;
            
            $jahre = $loops / 52 * 2;
            $jahre_f = number_format($jahre, 1, ",", ".")

            echo "Sie haben $loops mal getippt, das entspricht $jahre";

            echo "<h3> Dein Tipp: </h3>";
            //die eigene auswahl/wette
            foreach($tipp as $k => $kugel) {
                if($k == 5) echo "$kugel";
                else echo "$kugel | ";
                //echo "<div class = \"kugel\">$kugel</div>\n";
            }
            echo "<h3> Die Ziehungen: </h3>";
            //ab hier kommen die ziehungen
            for($i=1; $i<=$anzahl; $i++)  {
                echo "<div>Ziehung Nr. $i </div>";
                $ziehung = array_rand($topf,6);
                
                foreach($ziehung as $k => $kugel) {
                    if($k==5) echo "$kugel<br>";
                    else echo "$kugel | ";
                }
                $richtige_array = array_intersect($ziehung,$tipp);
                $richtige = count($richtige_array);
                    #echo "<div>Richtige: <strong>$richtige</strong> </div>";
                switch($richtige)   {
                    case 3: $richtige_gesamt["Dreier"]++, break;
                    case 4: $richtige_gesamt["Vierer"]++, break;
                    case 5: $richtige_gesamt["Fünfer"]++, break;
                    case 6: $richtige_gesamt["Sechser"]++, break;
                }

                $jahre = $loops / 52 * 2;
                $jahre_f = number_format($jahr, 2, ",", ".")

                $ges_kosten = $loops * $preis;
                $ges_kosten_f = number_format($jahre, 1 ,",",".");
                echo "Ihre Ausgabe: $ges_kosten EUR<br>";
                
                foreach($richtige_gesamt as $richtige => $anzahl)   {
                    echo "$richtige: $anzahl<br>";
                    $ges_gewinn =  $ges_gewinn + ($anzahl * $richtige_gewinn[$richtige]);
                }

                echo "<div>Ihr Gesamtgewinn: $ges_gewinn_f EUR<br></div>";
                $gewinn_quote = ($ges_gewinn / $ges_kosten) * 100;
                $gewinn_quote_f = number_format($jahre, 1 ,",",".")
                echo "<div>Ihre Gewinnquote: $gewinn_quote_f</div><br>"
            }//Ende der Ziehungsschleife
        

        ?>
    
    
</body>
</html>