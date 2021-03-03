<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fintech fulbank</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <form method="GET" action="calcula-salario.php">
        <h1>Fintech fulbank</h1>
        <div class="input-group">
            <label for="IDnomeFuncinario">
                Nome do funcionário:
            </label>
            <input type="text" name="nomeFuncionario" id="IDnomeFuncinario" required/>
        </div>
        <div class="input-group">
            <label for="IDnomeFuncinario">
                Salário do funcionário:
            </label>
            <input type="number" name="salarioFuncionario" id="IDsalarioFuncinario" required/>
        </div>
        <button>Consultar aumento salárial</button>
        <button type="reset" style="color: red;">LIMPAR</button>
    </form>
</body>
</html>