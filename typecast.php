<?php
    $a=10;
    $b=(double) $a;

    echo gettype($b);
    $c=(string)$a;
    echo "<br>";
    echo gettype($c);
    echo "<br>";
    $d=(bool)$a;
    echo gettype($d);
    echo "<br>";
    $e=(array)$a;
    echo gettype($e);
    print_r($e);
    echo "<br>";/*
    $f=settype($a,object);
    echo $f;*/
 ?>
