<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Processing results</h1>
    </header>
    <main>
        <?php
            $n = $_REQUEST["name"] ?? "<unknown name>";
            $ln = $_REQUEST["lastname"] ?? "<unknown last name>";
            echo "<p>Nice to meet you, $n $ln. This is my site</p>";
        ?>
        <a href="javascript:history.go(-1)">Go back</a>
    </main>
</body>
</html>