<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Challenge #5</title>
</head>
<body>
    <main>
        <h1>Results</h1>
        <p>
            <?php
                $num = (float) $_POST["num"] ?? 0;
                $int_part = (int) $num;
                $float_pt_part = $num - $int_part;
                echo "<ul><li>Number: <strong>". number_format($num, 3, ",", ".") . "</strong></li>";
                echo "<li>Integer Part: <strong>". number_format($int_part, 0, ",", ".") . "</strong></li>";
                echo "<li>Floating Point Part: <strong>". number_format($float_pt_part, 3, ",", ".") . "</strong></li></ul>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.php'">Go back</button>
    </main>
</body>
</html>