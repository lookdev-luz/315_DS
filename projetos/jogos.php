<?php

require __DIR__ . "/../conexao.php";

// Criando a tabela
$sql = "CREATE TABLE IF NOT EXISTS jogos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    genero VARCHAR(50),
    nota INT
)";

$pdo->exec($sql);


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebendo os dados do formulário
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];

    // Criando o comando SQL
    $sql = "INSERT INTO jogos (nome, genero, nota)
            VALUES ('$nome', '$genero', $nota)";

    // Executando o comando
    $pdo->exec($sql);

    echo "Jogo cadastrado com sucesso!";
}

// Buscar todos os jogos registrados no banco de dados
$buscar = "SELECT * FROM jogos";

// exec() = executa algo quando você NÃO precisa receber registros de volta.
// query() = executa uma consulta quando você QUER receber dados de volta.
$stmt = $pdo->query($buscar);

$jogos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Jogos</title>

</head>

<body>

    <h1>Cadastro de Jogos</h1>

    <form method="POST">

        <label>Nome do jogo:</label>

        <input
            type="text"
            name="nome"
            required
        >

        <br><br>

        <label>Gênero:</label>

        <input
            type="text"
            name="genero"
            required
        >

        <br><br>

        <label>Nota:</label>

        <input
            type="number"
            name="nota"
            min="0"
            max="10"
            required
        >

        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <h2>JOGOS CADASTRADOS</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Nota</th>
        </tr>

        <!-- foreach() -> Para cada item nessa lista, faça alguma coisa com X variável -->
        <?php foreach($jogos as $jogo) { ?>
            <tr>
                <td><?= $jogo["id"] ?></td>
                <td><?= $jogo["nome"] ?></td>
                <td><?= $jogo["genero"] ?></td>
                <td><?= $jogo["nota"] ?></td>
            </tr>
        <?php } ?>

    </table>


</body>

</html>