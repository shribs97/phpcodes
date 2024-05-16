<?php

// $a=10;
// $res=print_r($a,true);
// echo $res;

// define("name","satvik");
// echo name;

// $arr=array(1,"satvik",true,4,5);
// foreach($arr as $val){
//   echo $val;
// }

// $a=10;
// echo gettype($a);
// settype($a,'string');
// // $a=10;
// echo gettype($a);

// $arr=array("10"=>"zero","11"=>"one","12"=>"two");
// foreach ($arr as $i){
//   echo $i."<br>";
// }
// print_r($arr);

$arr=array(1,2,3,4,5);
extract($arr);
echo $1;


?>
