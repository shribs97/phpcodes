<?php

 class A{
  public function __call($name,$args){
    if($name=="hello" && count($args)==0){
      echo "Without Parameter";
    }
    elseif($name=="hello" && count($args)==2){
        $x=$args[0];
        $y=$args[1];
        $z=$x*$y;
        echo "$z";
    
    }
  }
}
$obj=new A();
$obj->hello();
$obj->hello(10,20);

 ?>
