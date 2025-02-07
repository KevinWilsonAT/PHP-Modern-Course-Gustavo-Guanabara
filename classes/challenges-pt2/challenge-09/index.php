<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challlenge #9</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? '';
        $w1 = $_GET['w1'] ?? '';
        $v2 = $_GET['v2'] ?? '';
        $w2 = $_GET['w2'] ?? '';
    ?>

    <main>
        <h1>(Weighted) Arithmetic Mean </h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="v1">1st Value</label>
            <input type="number" name="v1" id="v1" value="<?= $v1; ?>" required>
            <label for="w1">1st Weight</label>
            <input type="number" name="w1" id="w1" value="<?= $w1; ?>" min="1" required>
            <label for="v2">2nd Value</label>
            <input type="number" name="v2" id="v2" value="<?= $v2; ?>" required>
            <label for="w2">2nd Weight</label>
            <input type="number" name="w2" id="w2" value="<?= $w2; ?>" min="1" required>
            <input type="submit" value="Calculate">
        </form>
    </main>
    <section>
        <?php
            $sam = ($v1 + $v2) / 2;
            $wam = ($v1 * $w1 + $v2 * $w2) / ($w1 + $w2);
        ?>

        <h2>Results</h2>
        <p>Value 1: <?= $v1; ?> </p>
        <p>Value 2: <?= $v2; ?> </p>
        <ul>
            <li>Arithmetic Mean: <?= number_format($sam, 2, ",", "."); ?> </li>
            <li>Weighted Arithmetic Mean: <?= number_format($wam, 2, ",", "."); ?> </li>
        </ul>

    </section>
</body>
</html>