<?php
    $valorEmReal = $_GET["valorReais"];
    $tipoMoeda = $_GET["tipoMoeda"];
    $valorDoDolar = 5.41;
    $valorDoEuro = 6.57;
    $conversaoParaDolar = $valorEmReal * $valorDoDolar;
    $conversaoParaEuro = $valorEmReal * $valorDoEuro;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XD investimento</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <?php
        if($tipoMoeda == "dolar"){
    ?>
        <h1>Valor total em <?= $valorEmReal ?>: U$ <em><?= $conversaoParaDolar ?></em> </h1>
    <?php
        }else{
    ?>
        <h1>Valor total em <?= $valorEmReal ?>: € <em><?= $conversaoParaEuro ?></em> </h1>
    <?php
        }
    ?>
    <div>
        <button type="link"><a href="index.php">Voltar</a></button>
    </div>
</body>
</html>