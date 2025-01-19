<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        /*
            <?php ... ?>    PHP super tag
            <? ... ?>       short open tag
            <% ... %>       ASP tag
            <?= ... ?>      PHP short tag
        */

        date_default_timezone_set("America/Sao_Paulo");
        echo "Today is " . date("d/M/Y");
        echo "And the time is " . date("G:i:s T");
    ?>
</body>
</html>