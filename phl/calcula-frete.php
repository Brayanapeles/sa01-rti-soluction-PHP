<?php

    $cidadeOrigem = $_GET["cidadeOrigem"];

    $cidadeDestino = $_GET["cidadeDestino"];

    $distanciaEmKM = $_GET["distânciaKM"];

    $quantidadePedagios = $_GET["pedagio"];

    $valorPedagio = $quantidadePedagios * 9.40;

    $valorEmKilometros = $distanciaEmKM * 6.00;

    $valorDoFrete = $valorPedagio + $valorEmKilometros;

    echo "A viagem de: $cidadeOrigem à $cidadeDestino, irá custar o valor total de R$: $valorDoFrete";
