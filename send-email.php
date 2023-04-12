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

    echo '<div class="center">';

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    $url = "https://";   
      else  
    $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   

    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI']; 


    if (str_contains($url, 'newAccount')) {
      $email = $_GET["newAccount"];

      echo "Hello " . $_SESSION["role"] . ":" . $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>";

      echo "The email you registered is " . $email . ".";
  
    }

    if (str_contains($url, 'lostPassword')) {
      $email = $_GET["lostPassword"];

      echo "Hello " . $_SESSION["role"] . ":" . $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>";
     
      echo "The email for recovering your password is " . $email . ".";
  
    }
   
    echo '</div>';

      
 

    include("footer.php");


    ?>

</body>
  </html>