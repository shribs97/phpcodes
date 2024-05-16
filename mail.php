<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EMAIL</title>
  </head>
  <body>
      <?php
          $x="shridatta.bhasme100@gmail.com";
          $y="Check php mail";
          $z="Welcome to php world!!";
          $l="THis is header";
          $m="Additional";
          mail($x,$y,$z);
          echo "mail is sent...";
       ?>
  </body>
</html>
