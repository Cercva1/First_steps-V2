<?php
// Function to compute the Collatz sequence
function collatz($n) {
    $count = 0;
    $max_value = $n;
    
    while ($n != 1) {
        if ($n % 2 == 0) {
            $n /= 2;
        } else {
            $n = 3 * $n + 1;
        }
        $count++;
        if ($n > $max_value) {
            $max_value = $n;
        }
    }
    return [$max_value, $count]; // Return max value reached and iterations count
}

// Function to process a range of numbers
function collatz_range($start, $end) {
    $results = [];
    for ($i = $start; $i <= $end; $i++) {
        list($max_value, $iterations) = collatz($i);
        $results[] = [$i, $max_value, $iterations];
    }
    return $results;
}

// Function to analyze the results
function analyze_results($results) {
    // Sort results by iteration count
    usort($results, function ($a, $b) {
        return $a[2] <=> $b[2]; // Sorting by iterations count
    });
    $min_iter = $results[0];    // Smallest iterations
    $max_iter = end($results);  // Largest iterations

    // Sort results by max value reached
    usort($results, function ($a, $b) {
        return $a[1] <=> $b[1]; // Sorting by max value reached
    });
    $highest = end($results);  // Highest value reached

    return [$max_iter, $min_iter, $highest];
}
?>
