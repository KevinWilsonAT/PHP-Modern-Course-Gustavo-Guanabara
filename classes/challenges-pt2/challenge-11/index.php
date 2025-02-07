<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge #11</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php
        $price = $_REQUEST['price'] ?? '0';
        $perc = $_REQUEST['perc'] ?? '0';
    ?>
    <main>
        <h1> Calculating your age </h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="price">Price (R$)</label>
            <input type="number" name="price" id="price" min="0.10" value="<?= $price; ?>" step="0.01">
            <label for="perc">
                Price Recalculating percentual
                (<span id="p">?</span>%)
            </label>
            <input type="range" name="perc" id="perc" min="0" max="100" step="1" oninput="changeValue()" value="<?= $perc; ?>">
            <input type="submit" value="Calculate">
        </form>
    </main>
    <section>
        <?php
            $recalc = $price * $perc / 100;
            $new_price = $price + $recalc;
        ?>

        <h2>Results</h2>
        <p>Price: <?= number_format($price, 2, ",", "."); ?> </p>
        <p>Percentual: <?= $perc; ?> </p>
        <p>New Price: <?= number_format($new_price, 2, ",", "."); ?> </p>
    </section>
    <script>
        changeValue();

        function changeValue() {
            p.innerText = perc.value;
        }
    </script>
</body>
</html>