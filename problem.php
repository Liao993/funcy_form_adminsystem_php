<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
echo "<br>";
$role = $_POST["role"];
$_SESSION["role"] = $_POST["role"];
$_SESSION["title"] = $_POST["title"];
$_SESSION["fname"] = $_POST["fname"];
$_SESSION["lname"] = $_POST["lname"];




echo '<div class="center">';
switch ($role) {
  case "Admin":
    echo "Hello $role <br>";

    echo " <a href='inst-working.php'>My computer is not working</a><br>";
    echo " <a href='new-account.php'>Create New Account<br></a>";
    echo '</div>';
      break;
  case "Manager":
    echo "Hello $role <br>";

    echo " <a href='lost-password.php'>I lost my passowrd</a><br>";
    echo " <a href='inst-working.php'>My computer is not working</a><br>";
    echo '</div>';
      break;
  case "CEO":
    echo "Hello $role <br>";

    echo " <a href='need-help.php'>I need some help</a><br>";
    echo " <a href='inst-working.php'>My computer is not working</a><br>";
    echo '</div>';
  
      break;
}

include("./view/footer.php");
?>



</body>
</html>


