<?php

    $x = 10;
    echo "++$x is =" . (++$x) . "<br>"; // Outputs: 11
    echo "Now x is =" . $x . "<br>";   // Outputs: 11
    
    $x = 10;
    echo "$x++ is =" . ($x++) . "<br>"; // Outputs: 10
    echo "Now x is =" . $x . "<br>";   // Outputs: 11
    
    $x = 10;
    echo "--$x is =" . (--$x) . "<br>"; // Outputs: 9
    echo "Now x is =" . $x . "<br>";   // Outputs: 9
    
    $x = 10;
    echo "$x-- is =" . ($x--) . "<br>";// Outputs: 10
    echo "Now x is =" . $x;   // Outputs: 9
    echo "<br>";
    echo "This Program is written by Raghavv Gupta 0221BCA032"
?>