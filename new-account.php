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
<?php include("./view/header.php");
echo "Hello " . $_SESSION["role"] . ":" . $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>";

echo "Please enter your email for new account<br>"
?>

<div class=center>
    <form action="send-email.php" method="get">
  <table>
  <tr>
<th><input type="email" name="newAccount" placeholder="Email"></th>
<th><input type="submit"></th>
</tr>
 
     
  </form> 
</div>

<?php include("./view/footer.php"); ?>

</body> 
</html>
