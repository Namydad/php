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
            $note = $_REQUEST['note'];
            echo "<p>Ihre Note als Ziffer: $note</p>";
            
            $note_wort = "";
            
            switch($note) {
                    case 1: $note_wort .= "1";
                    case 2: $note_wort .= "2";
                    case 3: $note_wort .= "3";
                    case 4: $note_wort .= "4";
            }
        ?>
    </body>
</html>