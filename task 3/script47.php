<?php
function my($x)
{
    return ($x+$x);
}
$sum=array(10,20,20);
print_r(array_map("my",$sum));

?>
