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
</form>
        <?php
        require_once "teacher.class.php";

        $s1 = new schueler("Sven", "Etzler", "A15", "OStR");
        $s1->ausgabe();
        $s1->setLastname("Meyer");
        $s1->ausgabe();
        $s1->versetzen();
        $s1->ausgabe();

        ?>	

         
</form>
</body>
</html>