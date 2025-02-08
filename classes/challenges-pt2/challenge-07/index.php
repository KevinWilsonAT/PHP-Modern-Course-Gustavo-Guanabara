<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Challenge #7</title>
</head>
<body>
    <?php 
        $min = 1_380.00;
        $income = $_GET['inc'] ?? 0;
    ?>
    <main>
        <h1>Inform your income</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="inc">Income (R$)</label>
            <input type="number" name="inc" id="inc" value="<?= $income; ?>" step="0.01">
            <p>Consider the minimum R$ <strong><?= number_format($min, 2, ",", "."); ?></strong> </p>
            <input type="submit" value="Calculate">
        </form>
    </main>
    <section>
        <h2>Results</h2>
        <?php
            $tot = intdiv($income, $min);
            $dif = $income % $min;

            echo "<p>Your income is $tot minimum wages + R$" . number_format($dif, 2, ",", ".") . "</p>";
        ?>
    </section>
</body>
</html>