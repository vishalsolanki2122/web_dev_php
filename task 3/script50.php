<?php
function test_odd($var)

{
	    return($var & 1) ;
}
$num=array(1,4,6,8,7);
print_r(array_filter($num,"test_odd"));

?>
