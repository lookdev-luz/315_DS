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

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Idade:</label>
        <input type="number" name="idade">

        <button type="submit">Verificar</button>

    </form>

</body>
</html>