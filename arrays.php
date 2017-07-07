<?php
$fruits_list = array('apple', 'Oranges', 'pear');
$fruits_list[] = "Let\n's eat healty fruits!";

# this array_push will add to the end of the list.
array_push($fruits_list, 'apple', 'raspberry ');

#array_unshit(); will add to beginning of a list.
array_unshift($fruits_list, 'Mango ', 'Tangarines ');

# if array_unshift(); add to the beginning. array_shift(); delete's that beginning.
//echo 'you removed ' . array_shift($fruits_list);

# array_pop(); it's removes the last item of an array;
//echo 'you removed ' . array_pop($fruits_list);

# unset(); will Remove the value in the list array. the array value will Jump from 0 to 3.
unset($fruits_list[1],$fruits_list[2]);

#this will Reindex or refresh the array Order. example 0,1,2,3 etc.
$fruits_list = array_values($fruits_list);

#unset(); it's Destroy the array.(NULL)
//unset($fruits_list);


//var_dump($fruits_list);
//echo $fruits_list[1];
//echo $fruits_list;
//echo implode("\n", $fruits_list);
print_r($fruits_list);
?>

