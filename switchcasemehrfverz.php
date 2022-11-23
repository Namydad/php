<!DOCTYPE html>
<html>
    <head>
        <title>einfVerzform.php</title>
        <style>
            .alert  {
                color: red;
                font-weight: bold;
                font-size:300;
            }
            .ok {
                color:green;
                font-weight:bold;
                font-size:300;
            }
        </style>
    </head>
    <body>
        <h1> Zweifache If/Else verzweigung </h1>


        <?php
            // infachVerzVerarb.php
            $monat =3;
            switch($monat) {
                    case 1: $quartal = "1.Quartal";
                    case 2: $quartal = "2.Quartal";
                    case 3: $quartal = "3.Quartal";
                    case 4: $quartal = "4.Quartal";
            }
        
        echo "<p>Monat $monat gehörtz zum $quartal</p>"
        ?>
    
    </body>
</html>