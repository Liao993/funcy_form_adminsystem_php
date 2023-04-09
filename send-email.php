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
    $lost = $_GET["lostPassword"];
    $email = $_GET["newAccount"];
   



    if 
    echo "Hello " . $_SESSION["role"] . ":" . $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>";

    echo "The email you registered is " . $email . ".";

    echo '</div>';
    include("./view/footer.php");


    ?>

</body>
  </html>