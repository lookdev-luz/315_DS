<?php

// Exemplo SEM POO
$nome = "Lucas";
$vida = 100;

function atacar($nome) {
    echo "$nome realizou um ataque!";
}

atacar($nome);


// Exemplo COM POO
class Personagem {
    public $nome;
    public $vida = 100;

    public function atacar() {
        echo "$this->nome realizou um ataque!";
    }
}

$personagem1 = new Personagem();
$personagem1->nome = "Lucas";
$personagem1->atacar();


?>