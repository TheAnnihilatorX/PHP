<?php
function factorial($number)
{
  if ($number <= 1) {
    return 1;
  } else {
    return $number * factorial($number - 1);
  }
}

$number = 5;
echo "The factorial of " . $number . " is " . factorial($number) . "<br>";
echo "This Program is written by Raghavv Gupta 0221BCA032"
?>
