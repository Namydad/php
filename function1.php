<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <style>
    </style>
</head>
<h1>Test</h1>

        <?php
            function showCompany(){
                echo "<div class=\"company\">";
                echo "Mannheim SW Engineering";
                echo "</div>";
            }
            function showProduct($productName){
                echo "<h1>Product Name</h1>";
                echo "<div class=\"product\">";
                echo "$productName";
                echo "</div>";
            }
            function showVersion($version, $datum){
                echo "<h1>Version</h1>";
                echo "<div class=\"version\">";
                echo "<em> die $version vom $datum<em>";
                echo "</div>";
            }
        ?>	
</form>
</body>
</html>