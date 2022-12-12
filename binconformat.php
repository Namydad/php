<!DOCTYPE html>
<html>
<head>
  <title>Binary to Decimal Converter</title>
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      padding: 30px;
    }
    input {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #333;
      color: #fff;
      border: none;
    }
    .output {
      padding: 20px;
      font-size: 24px;
      background-color: #333;
      color: #fff;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Binary to Decimal Converter</h1>
  <form method="POST">
    <input type="text" name="binary" placeholder="Enter a binary number" />
    <button type="submit">Convert</button>
  </form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the binary number from the input field
    $binary = $_POST['binary'];

    // Initialize the decimal number to 0
    $decimal = 0;

    // Loop through the binary number starting from the right-most digit
    for ($i = 0; $i < strlen($binary); $i++) {
        // If the current digit is 1, add the corresponding power of 2 to the decimal number
        if ($binary[$i] === '1') {
            $decimal += pow(2, strlen($binary) - $i - 1);
        }
    }

    // Print the decimal number
    echo "<p>The decimal number is: $decimal</p>";
}
?>
</body>
</html>
