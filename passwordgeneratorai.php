<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>

    <?php
    function generatePassword($str) {
        // Check if the string is less than 4 words or has no length
        if (str_word_count($str) < 4 || strlen($str) == 0) {
          echo "The string must be at least 4 words long.";
          return;
        }
      
        // Extract the first letter of each word in the string
        $password = "";
        $words = explode(" ", $str);
        foreach ($words as $word) {
          $password .= $word[0];
        }
      
        // Return the generated password
        return $password;
      }
      
      // Example usage
      $str = "Hello World This is a password generator function in PHP";
      $password = generatePassword($str);
      echo "<div>Here is your new password: $password </div"; // Output: HWTipagfiP
    ?>

</body>
</html>
