<?php
$array1 = array("red","blue","black");
$array2 = array("pink","beige","green");
$result = array_merge($array1, $array2);
print_r($result);

/*OUTPUT:
Array ( [0] => red [1] => blue [2] => black [3] => pink [4] => beige [5] => green )
*/
?>
