<?php
$array = ["taiwo", "kehinde", "idowu", "alaba", "idogbe", "idoha"];
print_r ($array); 
echo '</br>';
array_push($array, "mummy");
print_r ($array);
echo '</br>';

unset($array[0]);
print_r ($array);
echo '</br>';

sort($array);
print_r ($array);
