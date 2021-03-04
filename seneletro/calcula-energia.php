<?php
    $nomeDoCliente = $_GET["nomeDoCliente"];
    $enderecoDoCliente = $_GET["endereco"];
    $consumoDeKwh = $_GET["consumokwh"];
    const COSUMO_BAIXO = 0.32;
    const CONSUMO_ALTO = 0.42;
    $mensagemFeedback = "(Obrigado por economizar!)";
    $valorComConsumoBaixo = $consumoDeKwh + COSUMO_BAIXO;
    $valorComConsumoAlto = $consumoDeKwh + CONSUMO_ALTO;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seneletro</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <h1>Conta de Luz de <?= $nomeDoCliente ?></h1>
    <h1><?= $enderecoDoCliente ?></h1>
    <?php
        if($consumoDeKwh > 120){
    ?>
        <h1 style="color: red;">Consumo: <?= $consumoDeKwh ?> killowats-hora</h1>
    <?php
        }else{
    ?>
        <h1>Consumo: <?= $consumoDeKwh ?> killowats-hora. <?= $mensagemFeedback ?></h1>
    <?php
        }
    ?>
    <?php
        if($consumoDeKwh > 120){
    ?>
        <h1>Valor a pagar: R$ <em><?= $valorComConsumoAlto ?></em></h1>
    <?php
        }else{
    ?>
        <h1>Valor a pagar: R$ <em><?= $valorComConsumoBaixo ?></em></h1>
    <?php
        }
    ?>
    <button type="link"><a href="index.php">Voltar</a></button>
</body>
</html>