<?php

$nome = "";
$idade = 0;
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    if ($idade >= 18) {
        $resultado = "maior";
    } else {
        $resultado = "menor";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Verificador de Idade</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>

    <div class="container">

        <h1>Verificador de idade</h1>

        <form method="POST">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <button type="submit">Verificar</button>

        </form>

        <?php if ($resultado != "") { ?> 

            <h2>
                O <?= $nome ?> é <?= $resultado ?> de idade.
            </h2>

        <?php } ?>

    </div>

</body>
</html>