<?php

// namespace: Permite organizar e evitar conflitos de nomes em um código.
// App: É o src.
// model: É a pasta model.
namespace App\model;

class Usuario {

    // Atributos.
    private $nome;
    private $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}
