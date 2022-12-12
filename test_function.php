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
            require_once "function1.php";
            showCompany("Namydad");
            showProduct("MegaAdder");
            showVersion("1.0", "23-Nov-2022");
            megaAdder(20,30);
            megaCalc(5,4,"*");
        ?>	
</form>
</body>
</html>