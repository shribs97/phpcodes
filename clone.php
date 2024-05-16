<?php
  class m
  {
    public $x;
    public $y;
  }
  $z=new m();
  $z->x=5;
  $z->y=7;
  $copy=clone $z;
  print_r($copy);

 ?>
