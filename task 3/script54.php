<?php
// Array representing a possible record set returned from a database
$records = array(array('id' => 2135,'first_name' => 'Harry','last_name' => 'Potter',),
    array('id' => 3245,'first_name' => 'Hermione','last_name' => 'Granger',),
    array('id' => 5342,'first_name' => 'Ron','last_name' => 'Weasley',),
    array('id' => 5623,'first_name' => 'Draco','last_name' => 'Malfoy',)
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);

/*
Output:
Array ( [0] => Harry [1] => Hermione [2] => Ron [3] => Draco )*/
?>
