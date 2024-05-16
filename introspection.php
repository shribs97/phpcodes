<?php
class B{
public function Shri($value='')
{
   echo "string";
}
}

class A extends B{
  public $b=0;
  public function name(){
    echo "name()";
  }
  public function surename(){
    echo "surename()";
  }
  public function getname(){
    echo "getname()";
  }
  public function getsurename(){
    echo "getsurename()";
  }
}
$a=new A();
$z=class_exists('A');
print_r($z);
echo "<br>";
print_r(get_class($a));
echo "<br>";
print_r(is_subclass_of($a,'B'));
echo "<br>get_declared_classes ";
print_r(get_declared_classes());
echo "<br>get_class_method ";
print_r(get_class_methods('B'));
echo "<br>get class vars";
print_r(get_class_vars('A'));
echo "<br> interface exists";
print_r(interface_exists('A'));
echo "<br> method_exists ";
print_r(method_exists('A','getname'));



?>
