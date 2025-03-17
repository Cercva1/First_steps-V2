<?php

require_once("Process.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Collatz Conjecture</title>
    <style>
        
    </style>
</head>
<body>

<div class="container">
    <h2>Collatz Conjecture</h2>
    <form method="POST">
        <label for="start">Start Number:</label>
        <input type="number" id="start" name="start" value="<?= htmlspecialchars($start) ?>" required>
        <label for="end">End Number:</label>
        <input type="number" id="end" name="end" value="<?= htmlspecialchars($end) ?>" required>
        <button type="submit">Calculate</button>
    </form>

    <?php if (!empty($stats)): ?>
        <h3>Statistics</h3>
        <table>
            <tr>
                <th>Metric</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Number with Max Iterations</td>
                <td><?= $stats['max_iterations_number'] ?> (<?= $stats['max_iterations'] ?> iterations)</td>
            </tr>
            <tr>
                <td>Number with Min Iterations</td>
                <td><?= $stats['min_iterations_number'] ?> (<?= $stats['min_iterations'] ?> iterations)</td>
            </tr>
            <tr>
                <td>Number with Max Reached Value</td>
                <td><?= $stats['max_value_number'] ?> (Max Value: <?= $stats['max_value'] ?>)</td>
            </tr>
        </table>
    <?php endif; ?>
</div>

</body>
</html>
