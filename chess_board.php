<html>
<body>
<table width="270px"  cellspacing="0px"  border="1px">
<?php
$flag=0;
for($i=1;$i<=8;$i++){
    echo "<tr>";
  for($j=1;$j<=8;$j++){
    if($flag==0){
      echo "<td height=\"30px\" width=\"30px\" bgcolor=\"#000000\"></td>" ; // black
      $flag=1;
    }
    else{
      echo "<td height=\"30px\" width=\"30px\" bgcolor=\"#ffffff\"></td>" ; // white
      $flag=0;
    }
  }
  if($flag==0){
    $flag=1;
  }
  else{
    $flag=0;
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>
