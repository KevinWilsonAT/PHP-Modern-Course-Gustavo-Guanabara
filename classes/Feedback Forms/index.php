<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <input type="number" name="v1" id="v1">
            <label for="v2">Value #2</label>
            <input type="number" name="v2" id="v2">
            <input type="submit" value="Sum">
            <label for="v1">Value #1</label>
        </form>
    </main>

    <section id="res">
        <h2>Results</h2>
        <?php
            $sum = $v1 + $v2;
            echo "<p>The sum between $v1 and $v2 is <strong>$sum</strong> </p>";
        ?>
    </section>
</body>
</html>