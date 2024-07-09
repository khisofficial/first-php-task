<?php

$number = 2;
echo $number. "</br>";
echo gettype($number). "</br>";

$float = 20.7;
echo $float. "</br>";
echo gettype($float). '</br>';

$string = "yellow";
echo $string. '</br>';
echo gettype($string). "</br>";

$array = [0.1, 2, "tea", 0];
print_r ($array). '</br>';
echo gettype($array). '</br>';

$isBoolean = "";
if($isBoolean){
    echo 'yes';
}
else{
    echo 'no'. '</br>';
}
echo gettype($isBoolean);