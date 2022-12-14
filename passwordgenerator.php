<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>

    <?php
    
        $satz = "Ich liebe deutsche Motorwagen";
        $pw = password_generator($satz);
        function password_generator($satz)  {
            $pw = "";
            $zahl = 0;
            $i = 0;


            if(strlen($satz) == 0 ) {
                echo "<div class=\"alert\" > Bitte einen Satz eingeben! </div>";
                return;
            }
            $pw = $pw.$satz[$i];
            $zahl++;
            do {
                if ($satz[$i] == ""){
                    $pw = $pw + $satz[$i+1];
                    $zahl++;
                }
                $i++;
            }while ($i < strlen($satz));

            if ($zahl < 4){
                return "Satz muss 4 Wörter haben.";
            }
            else {
                if($zahl < 10) {
                    $pw = $pw."_0".$zahl;
                }
                else{
                    $pw = $pw."_".$zahl;
                }
            }

            return $pw;
        }

        // Display the result
        echo "<p>Here's your password: $pw</p>";

    ?>

</body>
</html>
