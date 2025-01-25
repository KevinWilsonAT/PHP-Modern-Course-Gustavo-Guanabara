<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Interaction</title>
</head>
<body>
    <header>
        <h1>Present yourself</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="name">Name</label>
            <input type="text" name="name" id="idname">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="idlastname">
            <input type="submit" value="Send">
        </form>
    </section>
</body>
</html>