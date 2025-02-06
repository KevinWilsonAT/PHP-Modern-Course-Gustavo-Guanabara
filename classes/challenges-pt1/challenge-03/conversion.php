<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Results</title>
</head>
<body>
    <main>
        <h1>Finance Conversion v1</h1>
            <?php

                //usd value (copied)
                $usd_value = 5.82;

                //brl qty
                $brl_qty = (float) $_REQUEST["cash"] ?? 0;
                
                //usd qty
                $usd_qty = (float) $brl_qty / $usd_value;

                $brl_qty_format = number_format($brl_qty, 2, ",", ".");

                $usd_qty_format = number_format($usd_qty, 2, ",", ".");
                //$pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                // results
                echo "BRL quantity: <strong>R\$$brl_qty_format</strong><br>";
                echo "<br>USD quantity: <strong>US\$$usd_qty_format</strong>";
            ?>
            <button onclick="javascript:window.location.href='index.php'">Go back</button>
    </main>
</body>
</html>
