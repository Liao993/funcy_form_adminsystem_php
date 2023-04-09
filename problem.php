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
$i = $_POST["role"];

echo '<div class="center">';
switch ($i) {
  case "Admin":
    echo "Hello $i <br>";

    echo " <a href='inst-working.php'>My computer is not working</a><br>";
    echo " <a href='new-account.php'>Create New Account<br></a>";
    echo '</div>';
      break;
  case "Manager":
    echo "Hello $i <br>";

    echo " <a href='lost-password.php'>I lost my passowrd</a><br>";
    echo " <a href='inst-working.php'>My computer is not working</a><br>";
    echo '</div>';
      break;
  case "CEO":
    echo "Hello $i <br>";

    echo " <a href='need-help.php'>I need some help</a><br>";
    echo " <a href='inst-working.php'>My computer is not working</a><br>";
    echo '</div>';
  
      break;
}

include("./view/footer.php");
?>

</body>
</html>


