<?php
$fruits=array("apple","banana","mango","other");
$fruits1=array("strawberry","pear");
array_splice($fruits,2,0,$fruits1);
print_r($fruits);


?>
