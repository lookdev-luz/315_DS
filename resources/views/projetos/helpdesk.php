
<?php

// Importar a Model (Chamado.php)
require_once __DIR__ . "/../../../app/Models/Chamado.php";

// Os dados já são enviados pelo HelpdeskController:
// $chamados
// $relatorio
// $mensagem

// Evitar que códigos HTML sejam executados
function escapar($valor) {
    return htmlspecialchars((string) $valor, ENT_QUOTES, "UTF-8");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk - Sistema de Chamados</title>
</head>
<body>

    <h1>Sistema de Helpdesk</h1>
    <p>Gerenciamento de chamados técnicos</p>

    <hr>

    <!-- MENSAGEM DE RETORNO -->
    <?php if ($mensagem !== ""): ?>

        <p>
            <?= escapar($mensagem) ?>
        </p>

    <?php endif; ?>

    <!-- CREATE - CADASTRAR CHAMADO -->
    <h2>Cadastrar novo chamado</h2>

    <form action="index.php?rota=helpdesk" method="POST">

        <input type="hidden" name="acao" value="cadastrar">

        <label>Nome do solicitante:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>Setor:</label>
        <input type="text" name="setor" required>

        <br><br>

        <label>Equipamento:</label>
        <input type="text" name="equipamento" required>

        <br><br>

        <label>Descrição do problema:</label>
        <textarea name="descricao" required></textarea>

        <br><br>

        <label>Prioridade:</label>
        <select name="prioridade" required>
            <option value="">Selecione</option>
            <option value="Baixa">Baixa</option>
            <option value="Media">Média</option>
            <option value="Alta">Alta</option>
        </select>

        <br><br>

        <button type="submit">Cadastrar chamado</button>

    </form>

    <hr>

    <!-- READ - RELATÓRIO -->
    <h2>Relatório de chamados</h2>

    <p>
        Total de chamados:
        <?= $relatorio["total"] ?>
    </p>

    <p>
        Chamados abertos:
        <?= $relatorio["abertos"] ?>
    </p>

    <p>
        Chamados em andamento:
        <?= $relatorio["andamento"] ?>
    </p>

    <p>
        Chamados resolvidos:
        <?= $relatorio["resolvidos"] ?>
    </p>

    <hr>

    <!-- READ - LISTAR CHAMADOS -->
    <h2>Chamados cadastrados</h2>

    <?php if (empty($chamados)): ?>

        <p>Nenhum chamado cadastrado.</p>

    <?php else: ?>

        <?php foreach ($chamados as $posicao => $chamado): ?>

            <h3>Chamado <?= $posicao + 1 ?></h3>

            <p>
                <strong>Nome:</strong>
                <?= escapar($chamado["nome"]) ?>
            </p>

            <p>
                <strong>Setor:</strong>
                <?= escapar($chamado["setor"]) ?>
            </p>

            <p>
                <strong>Equipamento:</strong>
                <?= escapar($chamado["equipamento"]) ?>
            </p>

            <p>
                <strong>Descrição:</strong>
                <?= escapar($chamado["descricao"]) ?>
            </p>

            <p>
                <strong>Prioridade:</strong>
                <?= escapar($chamado["prioridade"]) ?>
            </p>

            <p>
                <strong>Status:</strong>
                <?= escapar($chamado["status"]) ?>
            </p>

            <!-- UPDATE - ATUALIZAR STATUS -->
            <h4>Atualizar status do chamado</h4>

            <form action="index.php?rota=helpdesk" method="POST">

                <input
                    type="hidden"
                    name="acao"
                    value="atualizar"
                >

                <input
                    type="hidden"
                    name="posicao"
                    value="<?= $posicao ?>"
                >

                <label>Novo status:</label>

                <select name="status">

                    <option value="Aberto"
                        <?= $chamado["status"] === "Aberto" ? "selected" : "" ?>>
                        Aberto
                    </option>

                    <option value="Em andamento"
                        <?= $chamado["status"] === "Em andamento" ? "selected" : "" ?>>
                        Em andamento
                    </option>

                    <option value="Resolvido"
                        <?= $chamado["status"] === "Resolvido" ? "selected" : "" ?>>
                        Resolvido
                    </option>

                </select>

                <button type="submit">Atualizar status</button>

            </form>

            <br>

            <!-- DELETE - EXCLUIR CHAMADO -->
            <form action="index.php?rota=helpdesk" method="POST">

                <input
                    type="hidden"
                    name="acao"
                    value="excluir"
                >

                <input
                    type="hidden"
                    name="posicao"
                    value="<?= $posicao ?>"
                >

                <button type="submit">Excluir chamado</button>

            </form>

            <hr>

        <?php endforeach; ?>

    <?php endif; ?>

</body>
</html>
