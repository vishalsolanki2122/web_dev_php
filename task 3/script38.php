<?php
$fruits=array("apple","banana","mango","apple","banana","other");

array_shift($fruits);
print_r($fruits);
echo "</br>";
array_unshift($fruits,"apple");
print_r($fruits);

?>
