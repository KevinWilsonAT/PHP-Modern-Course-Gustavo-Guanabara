<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Challenge #2</title>
</head>
<body>
    <main>
        <h1>Random Number</h1>

        <?php

            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            
            echo "Minimum range: <strong>$min</strong><br>";
            echo "Maximum range: <strong>$max</strong><br>";
            echo "Random Number Selected: <strong>$num</strong><br>";
        ?>
    </main>
</body>
</html>