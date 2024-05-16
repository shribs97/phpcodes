<?php

$data=serialize(array("welcome to php","to","php"));
print_r($data);
$udata=unserialize($data);
print_r($udata);



?>
