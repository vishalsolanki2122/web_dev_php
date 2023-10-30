<?php
function my($x1,$x2)
{
    return $x1.",".$x2 ;
}
$sum=array(10,20,20);
print_r(array_reduce($sum,"my"));

?>
