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

include("header.php");

echo "You logged out successfully";
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

include("footer.php");
?>

</body>

</html>