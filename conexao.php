<?php

// dados para conexão mysql
$host = "localhost";
$banco = "eduardoa755";
$usuario = "eduaroda755";
$senha = "755!@#";

// PDO = PHP Data Objects - É uma ferramenta do PHP para conversar com banco de dados. 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8mb4", $usuario, $senha);

    // -> serve para puxar algo que pertende aquele objeto
    // PDO::ATTR_ERRMODE - é para configurar o modo de erros do PDO
    // PDO::ERRMODE_EXCEPTION - é paraquando acontecer algum erro, transformar em execução
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "Conectado com sucesso!";

} catch (PDOException $erro) {

    echo "Erro ao conectar:".$erro->getMessage();


}