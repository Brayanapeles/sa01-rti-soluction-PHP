<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fretes PHL</title>
    <link rel="stylesheet" href="styles-global.css">
</head>
<body>
    
    <form action="calcula-frete.php" method="GET">
        <h1>FRETES PHL</h1>
        <hr style="width: 350px;">
        <div class="input-group">
            <label for="IDcidadeOrigem">Cidade de Origem:</label>
            <input type="text" id="IDcidadeOrigem" name="cidadeOrigem" required />
        </div>
        <div class="input-group">
            <label for="IDcidadaDestino">Cidade de Destino:</label>
            <input type="text" id="IDcidadaDestino" name="cidadeDestino" required />
        </div>
        <div class="input-group">
            <label for="IDdistanciaKM">Distância em Kilometros:</label>
            <input type="number" id="IDdistanciaKM" name="distanciaKM" required />
        </div>
        <div class="input-group">
            <label for="IDpedagio">Quantidade de Pedágios:</label>
            <input type="number" id="IDpedagio" name="pedagio" required />
        </div>
        <button>Consultar</button>
        <button type="reset">LIMPAR</button>
    </form>
</body>
</html>