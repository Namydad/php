<h1>Noten Calculation</h1>

        <?php
            function notenberechnung($punkte,$punktegesamt){
                $note = 6-5*$punkte/$punktegesamt;
                return $note;
            }
        
            $punkte = 25;
            $punktegesamt = 50;
            $note = notenberechnung($punkte, $punktegesamt);
            echo ("Die Note der Klausur ist: $note")
                #{
                 #   echo "<label>#$i: 
                  #              <input type = \"number\" name = \"tipp[]\" max = \"49\" min = \"1\">
                   #         </label>\n";
                #}	
        ?>	
</form>
</body>
</html>