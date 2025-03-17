<?php
require 'collatz.php'; // Include Collatz functions

$results = [];
$max_iter = $min_iter = $highest = null;
$error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = intval($_POST["start"]);
    $end = intval($_POST["end"]);

    if ($start > 0 && $end >= $start) {
        $results = collatz_range($start, $end);
        list($max_iter, $min_iter, $highest) = analyze_results($results);
    } else {
        $error = "Please enter valid numbers (start > 0, start ≤ end).";
    }
}
?>
