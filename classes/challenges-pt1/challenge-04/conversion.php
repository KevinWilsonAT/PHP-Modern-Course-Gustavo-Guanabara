<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Results</title>
</head>
<body>
    <main>
        <h1>Finance Conversion v2</h1>
            <?php

                $start = date("m-d-Y", strtotime("-7 days"));
                $end = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $start .'\'&@dataFinalCotacao=\''. $end .'\'&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
                $data = json_decode(file_get_contents($url), true);

                //usd value (url)
                $usd_value = $data["value"][0]["cotacaoCompra"];

                //brl qty
                $brl_qty = (float) $_REQUEST["cash"] ?? 0;
                
                //usd qty
                $usd_qty = (float) $brl_qty / $usd_value;

                $brl_qty_format = number_format($brl_qty, 2, ",", ".");

                $usd_qty_format = number_format($usd_qty, 2, ",", ".");

                // results
                echo "BRL quantity: <strong>R\$$brl_qty_format</strong><br>";
                echo "<br>USD quantity: <strong>US\$$usd_qty_format</strong>";
            ?>
            <button onclick="javascript:window.location.href='index.php'">Go back</button>
    </main>
</body>
</html>
