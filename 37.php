<?php
function selfMultiply (&$number)
{
  $number*=$number;
  return $number;
}

$mynum = 5;
echo $mynum ."<br>";

selfMultiply ($mynum);
echo $mynum ."<br>";
echo "This Program is written by Raghavv Gupta 0221BCA032"
?>
