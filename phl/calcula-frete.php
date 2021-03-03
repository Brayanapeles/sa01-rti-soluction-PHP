<?php
    $cidadeOrigem = $_GET["cidadeOrigem"];
    $cidadeDestino = $_GET["cidadeDestino"];
    $distanciaEmKM = $_GET["distanciaKM"];
    $quantidadePedagios = $_GET["pedagio"];

    const PRECO_FIXO_PEDAGIO = 9.4;
    const PRECO_FIXO_KM = 6;

    $valorPedagio = $quantidadePedagios * PRECO_FIXO_PEDAGIO;
    $valorEmKilometros = $distanciaEmKM * PRECO_FIXO_KM;

    $valorDoFrete = $valorPedagio + $valorEmKilometros;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fretes PHL</title>
    <link rel="stylesheet" href="styles-global.css">
</head>
<body>
    <?php
        if($valorPedagio > 100){
        
    ?>
        <h1 style='color: red;'>
            O valor total dos pedágios é: <?= number_format($valorPedagio, 2, ",", ".") ?>
        </h1>
    <?php
        }else{     
    ?>
        <h1>
            O valor total dos pedágios é: <?= number_format($valorPedagio, 2, ",", ".") ?> 
        </h1>
    <?php
        }    
    ?>
    <h1>
        A viagem de <?= $cidadeOrigem ?> à <?= $cidadeDestino ?> irá custar o valor total de R$ <em><?= number_format($valorDoFrete, 2, ",", ".") ?></em>
    </h1>
    <div class="input-group">
        <button type="link"><a href="index.php">Voltar</a></button>
    </div>
</body>
</html>
