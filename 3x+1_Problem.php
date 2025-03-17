<?php

    $number = 10;
    
    while ($number != 1) {
        echo "$number ";
        if ($number % 2 == 0) {
            $number = $number / 2;
        } else {
            $number = (3 * $number + 1) / 2;
        }
    }
    echo $number;
    echo "\n";



 

?>
