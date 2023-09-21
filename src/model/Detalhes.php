<?php

// namespace: Permite organizar e evitar conflitos de nomes em um código.
// App: É o src.
// model: É a pasta model.
namespace App\model;

class Detalhes {

    // Atributos.
    private $id;
    private $nome;
    private $descricao;

    function __construct($id, $nome, $descricao) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}
