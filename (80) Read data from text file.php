<?php

    $file = fopen("Hi.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
   echo "This Program is Written by Raghavv Gupta 0221BCA032";
?>