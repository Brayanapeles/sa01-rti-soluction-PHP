<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xd Investimentos</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <form method="GET" action="calcula-conversao.php">
        <h1>XD investimentos</h1>
        <div class="input-group">
            <label for="IDValorEmReal">
                Valor em Real:
            </label>
            <input type="number" id="IDValorEmReal" name="valorReais" required placeholder="R$:"/>
        </div>
        <div>
            <div class="input-group">
                <label for="">Escolha uma moeda de conversão:</label>
            </div>
            <input type="radio" name="tipoMoeda" value="dolar" required style="margin-top:10px ; margin-bottom:10px;"/> Dolar
            <input type="radio" name="tipoMoeda" value="euro" required /> Euro
        </div>
        <button>Converter</button>
        <button style="color: red;" type="reset">LIMPAR</button>
    </form>
</body>
</html>