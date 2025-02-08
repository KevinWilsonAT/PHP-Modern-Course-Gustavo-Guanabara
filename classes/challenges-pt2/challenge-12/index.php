<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge #12</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php $total_amount = $_REQUEST['time_amount'] ?? 0; ?>
    <main>
        <h1> Calculating time </h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="time_amount">Time amount (seconds)</label>
            <input type="number" name="time_amount" id="time_amount" min="0" value="" step="1" required>
            <input type="submit" value="Calculate">
        </form>
    </main>
    <section>
        <?php
            $time_left = $total_amount;

            // Weeks
            $week_count = (int)($time_left / 604_800);
            $time_left = $time_left % 604_800;

            // Days
            $day_count = (int)($time_left / 86_400);
            $time_left = $time_left % 86_400;
            
            // Hours
            $hour_count = (int)($time_left / 3_600);
            $time_left = $time_left % 3_600;
            
            // Minutes
            $minute_count = (int)($time_left / 60);
            $time_left = $time_left % 60;

            // Seconds
            $second_count = $time_left;
        ?>

        <h2>Results</h2>
        <p>Amount of time: <?= $total_amount; ?> seconds has:</p>
        <p><?= $week_count; ?> weeks</p>
        <p><?= $day_count; ?> days</p>
        <p><?= $hour_count; ?> hours</p>
        <p><?= $minute_count; ?> minutes</p>
        <p><?= $second_count; ?> seconds</p>
    </section>
</body>
</html>