<?php

$studentA = [
    'age'=> '19',
    'grade'=> 'first'
];
// print_r($studentA);
echo "</br>";

$studentB= [
    'age'=> '20',
    'grade'=> 'second'
];
// print_r($studentB);
echo "</br>";

$studentC= [
    'age'=> '18',
    'grade'=> 'third'
];
// print_r($studentC);
echo "</br>";

$students= "$studentA" . "$studentB" . "$studentC";
echo $students;





// $book['dedicated']= 'Orphan';
// print_r($book);
