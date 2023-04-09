
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
   

    <?php include("./view/header.php"); ?>

<div class=center>
    <form action="problem.php" method="post">
  <table>
  <tr>
<th> 
  <select name="title" id="title">

      <option value="mr">Mr.</option>
      <option value="mrs">Mrs.</option>
      <option value="ms">Ms.</option>
      <option value="miss">Miss</option>
   
   
  </select></th>
<th> <input type="text" name="fname" placeholder="First Name"></th>
<th> <input type="text" name="lname" placeholder="Last Name"></th>
<th> 
  <select name="role" id="role">

  <option value="Admin">Admin</option>
  <option value="Manager">Manager</option>
  <option value="CEO">CEO</option>


  </select>
</th>
</th>
<th><input type="submit"></th>
</tr>
 
     
</form> 
</div>


    <?php include("./view/footer.php"); ?>

  </body>
</html>