<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Challenge #1</title>
</head>
<body>
    <main>
        <h1>Results</h1>
        <p>
            <?php
                $num = $_REQUEST["num"] ?? 0;
                $prev = $num - 1;
                $next = $num + 1;
                echo "Number: <strong>$num</strong><br>";
                echo "Previous: <strong>$prev</strong><br>";
                echo "Next: <strong>$next</strong><br>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.php'">Go back</button>
    </main>
</body>
</html>