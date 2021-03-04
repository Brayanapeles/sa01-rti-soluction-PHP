<?php
    $nomeDoFuncionario = $_GET["nomeFuncionario"];
    $salarioDoFuncionario = $_GET["salarioFuncionario"];
    $aumentoDezPorcento = $salarioDoFuncionario * 0.1;
    $aumentoVintePorcento = $salarioDoFuncionario * 0.2;

    $salarioComAumentoDeDezPorcento = $salarioDoFuncionario + $aumentoDezPorcento;
    $salarioComAumentoDeVintePorcento = $salarioDoFuncionario + $aumentoVintePorcento;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fintech fulbank</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <?php
        if($salarioDoFuncionario > 5000){
    ?>
    <h1>Oª <?= $nomeDoFuncionario ?> passará a receber R$ <?= $salarioComAumentoDeDezPorcento ?></h1>
    <?php
        }else{
    ?>
        <h1>Oª <?= $nomeDoFuncionario ?> passará a receber R$<em> <?= $salarioComAumentoDeVintePorcento ?></em></h1>
    <?php
        }
    ?>
    <button type="link"><a href="index.php">Voltar</a></button>
</body>
</html>