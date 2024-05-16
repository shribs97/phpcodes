<?php
  $i=imagecreate(700,700);
  $background_color=imagecolorallocate($i,255,255,0);
  $text_color=imagecolorallocate($i,255,0,55);
  imagestring($i,6,300,200,"Shridatta Bhasme",$text_color);
  imagestring($i,9,180,120,"Computer Engineering",$text_color);
  header("Content-Type:image/png");
  imagepng($i);
  destroy($i);

 ?>
