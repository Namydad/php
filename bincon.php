<!DOCTYPE html>
<html>
<head>
    <title>Binary to Decimal Converter</title>
</head>
<body>
    <h1>Binary to Decimal Converter</h1>

    <form action="" method="POST">
        <label for="binary">Enter a binary number:</label><br>
        <input type="text" id="binary" name="binary"><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the binary number from the form field
        $binary = $_POST['binary'];

        // Convert the binary number to decimal
        $decimal = 0;
        $length = strlen($binary);
        for ($i = 0; $i < $length; $i++) {
            $decimal += intval($binary[$i]) * pow(2, $length - $i - 1);
        }

        // Display the result
        echo "<p>The decimal equivalent of $binary is $decimal.</p>";
    }
    ?>

</body>
</html>
