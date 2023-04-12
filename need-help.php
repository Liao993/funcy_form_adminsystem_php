<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css">
    <title>Halifax Canoe and Kayak</title>

  </head>

  <body>
    
<?php

include("./view/header.php");

echo '<div class="center">';

echo "Hello, " . $_SESSION["role"] . ":". $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>";
echo " You can call this number for help <br>";
echo "(+1) 902-135-6804";

echo '</div>';

include("./view/footer.php");
?>

  </body> 
</html>