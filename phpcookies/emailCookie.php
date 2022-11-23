<?php
 $cookie_name="Email";
if(isset ($_POST["submit"]))
{

   $cookie_value=$_POST["email"];
   $expireDate=60*60*24*10;
  setcookie($cookie_name,$cookie_value,$expireDate);
}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="emailCookie.php" method="post">
      <label for="">Enter your Email:</label>
      <input type="email" name="email" value=""><br /><br />
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset ($_COOKIE[$cookie_name]))
    {
      echo cookie_name.": ".cookie_value;
    }
    else {
      echo "Cookie is not set";
    }
     ?>
  </body>


</html>
