<?php
$img=imagecreate(500,500);
$bgcolor=imagecolorallocate($img,150,200,100);
$fontcolor=imagecolorallocate($img,1001,40,200);
imagestring($img,12,100,140,"Hello",$fontcolor);
header("Content-Type:1.jpg");
imagejpg($img);
imagedestroy($img);

 ?>
