<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge #10</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php
        $current = date("Y");
        $byear = $_GET['byear'] ?? '2000';
        $year = $_GET['year'] ?? $current;
    ?>
    <main>
        <h1> Calculating your age </h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="byear">Birth Year</label>
            <input type="number" name="byear" id="byear" value="<?= $byear; ?>" min="1900" max="<?= ($current-1); ?>">
            <label for="year">Desired year to calculate the age (Current year: <?= $current; ?>)</label>
            <input type="number" name="year" id="year" value="<?= $year; ?>" min="1900">
            <input type="submit" value="Calculate">
        </form>
    </main>
    <section>
        <?php $age = $year - $byear; ?>

        <h2>Results</h2>
        <p>Birth year: <?= $byear; ?> </p>
        <p>Desired year: <?= $year; ?> </p>
        <p>In <?= $year; ?>, you will be <?= $age; ?> years old</p>
    </section>
</body>
</html>