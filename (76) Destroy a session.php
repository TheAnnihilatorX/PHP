
<?php

    // Starting session
    session_start();
     
    // Removing session variable
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
    }
    else{
        echo "Session already destroyed.";
    }
    echo "<br>";
    echo"<br>This Program is Written by Raghavv Gupta 0221BCA032";
?>