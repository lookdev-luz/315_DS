<?php

$nome = "Lucas";
$idade = 23;
$resultado;

if ($idade > 18) {
    $resultado = "maior";
} else {
    $resultado = "menor";    
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>TESTE</title>

    <link rel="stylesheet" href="app.css">
</head>

<body>

    <h1>O <?= $nome ?> é <?= $resultado ?> de idade</h1>

</body>
</html>