<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
       $s="this is my string";
       echo "Number of characters  ".strlen($s);
       echo "<br>";
       echo "Count word of string   ".str_word_count($s)."<br>";
       echo "strrev - reverse the string ".strrev($s)."<br>";
       echo "strpos - search string and return position ".strpos($s,"my")."<br>";
       echo "strreplace  ".str_replace("is","omkar",$s);


    ?>
  </body>
</html>
