<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seneletro</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <form action="calcula-energia.php" method="GET">
        <h1>Seneletro</h1>
        <div class="input-group">
            <label for="IdNomeDoCliente">Nome do Cliente:</label>
            <input type="text" required name="nomeDoCliente" id="IdNomeDoCliente" placeholder="Ex: Maria do Carmo"/>
        </div>
        <div class="input-group">
            <label for="IdEndereco">Endreço:</label>
            <input type="text" required name="endereco" id="IdEndereco" placeholder="Ex: R. jardim floral, nº5"/>
        </div>
        <div class="input-group">
            <label for="IdEndereco">Consumo de Quilowatts-hora:</label>
            <input type="number" required name="consumokwh" id="IdKwh" />
        </div>
        <button>Calcular</button>
        <button type="reset" style="color:red;">LIMPAR</button>
    </form>
</body>
</html>