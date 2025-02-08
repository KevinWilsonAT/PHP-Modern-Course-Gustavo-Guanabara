<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge #11</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php $withdrawal_amount - $_REQUEST['withdrawal_amount']; ?>
    <main>
        <h1> Calculating money </h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="withdrawal_amount">Withdrawal amount (R$)<sup>*</sup></label>
            <input type="number" name="withdrawal_amount" id="withdrawal_amount" value="<?= $withdrawal_amount; ?>" step="5" required>
            <p style="font-size: 0.6em">
                <sup>*</sup> Available notes: R$100, R$50, R$10, R$5
            </p>
            <input type="submit" value="Withdraw">
        </form>
    </main>
    <section>
        <?php
            $amount_left = $amount_withdrawed;
            
            // R$100 withdrawal
            $amount_100 = floor($amount_left / 100);
            $amount_left %= 100;
            
            // R$50 withdrawal
            $amount_50 = floor($amount_left / 50);
            $amount_left %= 50;
            
            // R$10 withdrawal
            $amount_10 = floor($amount_left / 10);
            $amount_left %= 10;
            
            // R$5 withdrawal
            $amount_5 = floor($amount_left / 5);
            $amount_left %= 5;
        ?>

        <h2>Results</h2>
        <p>Amount withdrawed: R$<?= number_format($withdrawal_amount, 2, ",", "."); ?> </p>
        <p>Number of R$100 notes: <?= $amount_100; ?> </p>
        <p>Number of R$50 notes: <?= $amount_50; ?> </p>
        <p>Number of R$10 notes: <?= $amount_10; ?> </p>
        <p>Number of R$5 notes: <?= $amount_5; ?> </p>
    </section>
</body>
</html>