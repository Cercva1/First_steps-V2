<?php require 'process.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collatz 3x+1 Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 10px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Collatz Conjecture (3x+1) Calculator</h2>
<form method="post">
    Start: <input type="number" name="start" required>
    End: <input type="number" name="end" required>
    <button type="submit">Calculate</button>
</form>

<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

<?php if (!empty($results)): ?>
    <h3>Results</h3>
    <table>
        <tr>
            <th>Number</th>
            <th>Max Value</th>
            <th>Iterations</th>
        </tr>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Key Findings</h3>
    <p><strong>Max Iterations:</strong> Number <?= $max_iter[0] ?> with <?= $max_iter[2] ?> steps</p>
    <p><strong>Min Iterations:</strong> Number <?= $min_iter[0] ?> with <?= $min_iter[2] ?> steps</p>
    <p><strong>Highest Value Reached:</strong> Number <?= $highest[0] ?> reaching <?= $highest[1] ?></p>

<?php endif; ?>

</body>
</html>
