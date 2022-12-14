<html>
<head>
    <style>
      /* CSS code goes here */
      body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
      }
      h1 {
        color: #008080;
        text-align: center;
      }
      p {
        font-size: 14px;
        line-height: 24px;
        margin: 0 0 10px 0;
      }

    </style>
</head>
<body>

<form action="binconconbin.php" method="post">

Enter a number: <input type="text" name="number" value="0"><br>

<select name="converter">
  <option value="decimal_to_binary">Decimal to Binary</option>
  <option value="binary_to_decimal">Binary to Decimal</option>
</select>

<input type="submit" value="Convert">

</form>

<?php

if(isset($_POST['number']) && isset($_POST['converter'])) {

$number = $_POST['number'];
$converter = $_POST['converter'];

if($converter == "decimal_to_binary") {

  // Convert decimal to binary
  $binary = dec_to_bin($number);
  echo "Decimal: $number<br>";
  echo "Binary: $binary";

} else if($converter == "binary_to_decimal") {

  // Convert binary to decimal
  $decimal = bin_to_dec($number);
  echo "Binary: $number<br>";
  echo "Decimal: $decimal";

}

}

function dec_to_bin($number) {
  // Convert decimal to binary
  return base_convert($number, 10, 2);
}

function bin_to_dec($number) {
  // Convert binary to decimal
  return base_convert($number, 2, 10);
}

?>

</body>
</html>
