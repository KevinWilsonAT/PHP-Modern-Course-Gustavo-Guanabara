<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Challenge #6</title>
</head>
<body>
    <?php 
        $dividend = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Division's Antomy</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="d1">Dividend</label>
            <input type="number" name="d1" id="d1" value="<?=$dividend; ?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?=$divisor; ?>">
            <input type="submit" value="Analyze">
        </form>
    </main>
    <section>
        <h2>Division Structure</h2>

        <?php
            $quocient = intdiv($dividend, $divisor);
            $rest = $dividend % $divisor;

            echo "<ul>";
            echo "<li>Dividend: $dividend</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quocient: $quocient</li>";
            echo "<li>Rest: $rest</li>";
            echo "</ul>";
        ?>

        <table class="divisao">
            <tr>
                <td><?= $dividend; ?></td>
                <td><?= $divisor; ?></td>
            </tr>
            <tr>
                <td><?= $rest; ?></td>
                <td><?= $quocient; ?></td>
            </tr>
        </table>
    </section>
</body>
</html>