<?php

require_once 'Collatz.php';

$collatz = new CollatzConjecture();

$start = $_POST['start'] ?? 25;
$end = $_POST['end'] ?? 100;
$results = [];
$stats = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $results = $collatz->calculateRange((int)$start, (int)$end);
    $stats = $collatz->statistics($results);
}


?>
