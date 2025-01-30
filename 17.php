<?php

$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

$z = $x + $y; // Union of $x and $y

var_dump($z);
echo "<br>";
var_dump($x == $y); // Outputs: boolean false
echo "<br>";
var_dump($x == $y); // Outputs: boolean false
echo "<br>";
var_dump($x != $y); // Outputs: boolean true
echo "<br>";
var_dump($x <>$y); // Corrected the var_dump for $x variable
echo "<br>";
var_dump($x !== $y); // Outputs: boolean true
echo "<br>"; 
echo "This Program is written by Raghavv Gupta 0221BCA032"

?>
