<?php
function collatz($n) {
    while ($n != 1) {
        echo "$n ";
        if ($n % 2 == 0) {
            $n = $n / 2;
        } else {
            $n = 3 * $n + 1;
        }
    }
    echo "1\n";
}

// Example usage
$number = 3; // Change this number to test different inputs
collatz($number);
?>
