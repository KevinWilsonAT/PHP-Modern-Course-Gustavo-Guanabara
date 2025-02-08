<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challlenge #8</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $num = $_GET['num'];
    ?>

    <main>
        <h1>Insert a number</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="num">Number</label>
            <input type="number" name="num" id="num" value="<?= $num; ?>">
            <input type="submit" value="Calculate">
        </form>
    </main>
    <section>
        <h2>Results</h2>
        <?php
            $sqroot = $num ** (1/2);
            $cubroot = $num ** (1/3);

            echo "<p>Number: $num</p>";
            echo "<ul><li>Square root: " . number_format($sqroot, 3, ",", ".") . "</li>";
            echo "<li>Square root: " . number_format($sqroot, 3, ",", ".") . "</li></ul>";
        ?>

    </section>
</body>
</html>